<?php

/**
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 1.2.18
 * @revision 41
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2012 by Matej Koval - All rights reserved!
 * @website http://www.codegravity.com
 **/

/** ensure this file is being included by a parent file */
if (!defined('_JEXEC') && !defined('_VALID_MOS'))
    die('Restricted access');

class ExtraWatchDBWrapDrupal implements ExtraWatchDBWrap
{

    var $query;
    var $dbref;
    var $result;
    var $dbprefix;
    var $errNum;
    var $errMsg;

    function ExtraWatchDBWrapDrupal()
    {
        $databaseArray = $GLOBALS['databases']['default']['default'];
        $host = $databaseArray['host'];
        $user = $databaseArray['username'];
        $password = $databaseArray['password'];
        $database = $databaseArray['database'];
        $this->dbprefix = $databaseArray['prefix'];
        $driver = $databaseArray['driver'];

        $this->dbref = new PDO("$driver:host=$host;dbname=$database", $user, $password);
    }

    function __destruct()
    {
        //return mysql_close($this->dbref);
    }

    function getEscaped($sql)
    {
        return $sql;
    }

    function query()
    {
        $sql = $this->query;
        $sql = $this->replaceDbPrefix($sql);
        $STH = $this->dbref->query($sql);
        if (!$STH) {
            return null;
        }
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $result = $STH->fetch();
        return $result;
    }

    function loadResult()
    {
        $this->query = $this->replaceDbPrefix($this->query);
        $STH = $this->dbref->query($this->query);
        if (!$STH) {
            return null;
        }
        $STH->setFetchMode(PDO::FETCH_ASSOC);

        $return = null;
        if ($row = $STH->fetch()) {
            $return = @$row['value'];
            if (!$return) {
                $key = @key($row);
                $return = @$row[$key];
            }
        }
        return $return;
    }

    function loadAssocList($key = '')
    {
        $this->query = $this->replaceDbPrefix($this->query);
        $STH = $this->dbref->query($this->query);
        $STH->setFetchMode(PDO::FETCH_ASSOC);

        $return = null;
        if ($row = $STH->fetchAll()) {
            $return = @$row['value'];
        }
        return $return;
    }

    function select($database)
    {
        if (!$database) {
            return false;
        }
        if (!mysql_select_db($database, $this->dbref)) {
            die ('Could not connect to database');
            return false;
        }
        return true;
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
        $sql = $this->replaceDbPrefix($this->query);
        $STH = $this->dbref->query($sql);
        if (!$STH) {
            return null;
        }
        $STH->setFetchMode(PDO::FETCH_OBJ);
        $result = $STH->fetchAll();
        return $result;
    }

}

?>