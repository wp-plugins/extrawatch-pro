<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.2
 * @revision 1255
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.extrawatch.com
 */

defined('_JEXEC') or die('Restricted access');

class ExtraWatchDBWrapNoCMS implements ExtraWatchDBWrap
{

  public $query;
  public static $dbref;
  public $result;
  public $dbprefix;
  public $errNum;
  public $errMsg;

  function ExtraWatchDBWrapNoCMS($projectIdFromSession)
  {
	if (!defined('_EW_HOST')) {
		require_once(realpath(dirname(__FILE__).DS."..".DS."..".DS."..".DS."..".DS."..".DS."..").DS."connection.php");
	}
  
    $host = _EW_HOST;
    $user = _EW_USER;
    $password = _EW_PASSWORD;
    $database = _EW_DB;
    $this->dbprefix = $projectIdFromSession."_";
    $select = TRUE;

    if (!(ExtraWatchDBWrapNoCMS::$dbref = @mysql_connect($host, $user, $password, TRUE))) {
      die("Error: Cannot connect using parameters specified in connection.php");
    }
    if ($select) {
      $result = $this->select($database);
      if (!$result) {
          die("Error: Cannot select database");
      }
    }
  }

  function __destruct()
  {
    //return mysql_close($this->dbref);
  }

  function getEscaped($sql)
  {
    return @mysql_real_escape_string($sql, ExtraWatchDBWrapNoCMS::$dbref);
  }

  function query()
  {
    $sql = $this->query;
    $sql = $this->replaceDbPrefix($sql);
	ExtraWatchLog::debug("$sql");
	//echo("<!-- query: $sql -->");
    $this->result = mysql_query($sql, ExtraWatchDBWrapNoCMS::$dbref);

    if (!$this->result) {
      $this->errNum = mysql_errno(ExtraWatchDBWrapNoCMS::$dbref);
      $this->errMsg = mysql_error(ExtraWatchDBWrapNoCMS::$dbref) . " in query $sql";
      ExtraWatchLog::error($this->errMsg);
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
    if (!mysql_select_db($database, ExtraWatchDBWrapNoCMS::$dbref)) {
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
    if (_EW_CLOUD_MODE) {
        $sql = str_replace("#__extrawatch_ip2c ", "global_extrawatch_ip2c ", $sql);
        $sql = str_replace("#__extrawatch_cc2c", "global_extrawatch_cc2c", $sql);
        $sql = str_replace("#__extrawatch_project", "global_extrawatch_project", $sql);
        $sql = str_replace("#__extrawatch_user", "global_extrawatch_user", $sql);
    }
    return str_replace("#__", $this->dbprefix, $sql);
  }

  private function loadObjectList($key = '')
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


