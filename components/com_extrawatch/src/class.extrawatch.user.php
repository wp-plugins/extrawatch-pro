<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.2
 * @revision 933
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.extrawatch.com
 */

defined('_JEXEC') or die('Restricted access');

class ExtraWatchUser
{

    public $database;
    public $helper;

    function __construct($database)
    {
        $this->database = $database;
        $this->helper = new ExtraWatchHelper($this->database);
    }

    function updateUserLog($userId, $ip) {

        if (!$userId) {
            return; // nothing to do if user is not logged in
        }

        $timestamp = ExtraWatchDate::getUTCTimestamp();

        $query = sprintf("select id from #__extrawatch_user_log where (`userId` = '%d' and `ip` = '%s') ", (int) $userId, $this->database->getEscaped($ip));
        $id = $this->database->resultQuery($query);

        if (@!$id) {
            $query = sprintf("insert into #__extrawatch_user_log (id, `userId`, `timestamp`, `ip`) values ('', '%d', '%d', '%s')", (int) $userId, (int) $timestamp, $this->database->getEscaped($ip));
            $this->database->executeQuery($query);
        } else {
            $query = sprintf("update #__extrawatch_user_log set `timestamp` = '%d', `ip` = '%s' where userId = '%d'", (int) $timestamp, $this->database->getEscaped($ip), (int) $userId);
            $this->database->executeQuery($query);
        }
    }

    function getUserLog() {
        $query = sprintf("select * from #__extrawatch_user_log order by `timestamp` desc");
        return $this->database->objectListQuery($query);
    }

    function getUsersSharingSameLogin() {
        $query = sprintf("select * from (
			select count(id) as `count`, userId, `countryCode`,ip, `timestamp` from #__extrawatch_user_log group by `userId`
				order by `timestamp` desc
				) as T
				where `count` > 1
			");
        return $this->database->objectListQuery($query);
    }
	
	function updateUserCountryByIp($ip, $countryCode) {
	
	        $query = sprintf("update #__extrawatch_user_log set `countryCode` = '%s' where ip = '%s'", $this->database->getEscaped($countryCode), $this->database->getEscaped($ip));
            $this->database->executeQuery($query);
	}


}


