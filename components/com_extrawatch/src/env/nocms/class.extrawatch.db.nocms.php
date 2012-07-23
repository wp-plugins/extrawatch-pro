<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 1.2.18
 * @revision 245
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2012 by Matej Koval - All rights reserved!
 * @website http://www.codegravity.com
 */

/** ensure this file is being included by a parent file */
if (!defined('_JEXEC') && !defined('_VALID_MOS'))
  die('Restricted access');

class ExtraWatchDBWrapNoCMS implements ExtraWatchDBWrap
{

  public $query;
  public $dbref;
  public $result;
  public $dbprefix;
  public $errNum;
  public $errMsg;

  function ExtraWatchDBWrapNoCMS()
  {
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'cg15';
    $this->dbprefix = 'jos_';
    $select = TRUE;

    if (!($this->dbref = @mysql_connect($host, $user, $password, TRUE))) {
      die("cannot connect");
    }
    if ($select) {
      $this->select($database);
    }
  }

  function __destruct()
  {
    return mysql_close($this->dbref);
  }

  function getEscaped($sql)
  {
    return mysql_real_escape_string($sql, $this->dbref);
  }

  function query()
  {
    $sql = $this->query;
    $sql = $this->replaceDbPrefix($sql);
    $this->result = mysql_query($sql, $this->dbref);

    if (!$this->result) {
      $this->errNum = mysql_errno($this->dbref);
      $this->errMsg = mysql_error($this->dbref) . " in query $sql";
      return FALSE;
    }
    return $this->result;
  }

  function loadResult()
  {
    if (!($result = $this->query())) {
      return null;
    }
    $return = null;
    if ($row = mysql_fetch_row($result)) {
      $return = $row[0];
    }
    mysql_free_result($result);
    return $return;
  }

  function loadAssocList($key = '')
  {
    $result = $this->query();
    $array = array();
    while ($row = mysql_fetch_assoc($result)) {
      $array[] = $row;
    }
    mysql_free_result($result);
    return $array;
  }

  function select($database)
  {
    if (!$database) {
      return FALSE;
    }
    if (!mysql_select_db($database, $this->dbref)) {
      die ('Could not connect to database');
      return FALSE;
    }
    return TRUE;
  }

  function setQuery($query)
  {
    $this->query = $query;
  }

  function getErrorNum()
  {
    return $this->errNum;
  }

  function objectListQuery($query)
  {
    $this->query = $query;
    return $this->loadObjectList();
  }

  function getQuery()
  {
    return $this->query;
  }

  function resultQuery($query)
  {
    $this->query = $query;
    return $this->loadResult();
  }

  function executeQuery($query)
  {
    $this->query = $query;
    return $this->query();
  }

  function assocListQuery($query)
  {
    $this->query = $query;
    return $this->loadAssocList();
  }

  function replaceDbPrefix($sql)
  {
    return str_replace("#__", $this->dbprefix, $sql);
  }

  function loadObjectList($key = '')
  {
    if (!($cur = $this->query())) {
      return null;
    }
    $array = array();
    while ($row = mysql_fetch_object($cur)) {
      if ($key) {
        $array[$row->$key] = $row;
      } else {
        $array[] = $row;
      }
    }
    mysql_free_result($cur);
    return $array;
  }

}


