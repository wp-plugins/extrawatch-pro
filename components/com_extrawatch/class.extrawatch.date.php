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

class ExtraWatchDate
{

    var $env;
    var $database;
    var $config;

    function ExtraWatchDate($database)
    {
        $this->env = ExtraWatchEnvFactory::getEnvironment();
        $this->database = $database;
        $this->config = new ExtraWatchConfig($this->database);
    }

    /**
     * date
     */
    function getActualDateTime()
    {
        $date = ExtraWatchDate::date("d.m.Y", ExtraWatchDate::getUTCTimestamp());
        $time = ExtraWatchDate::date("H:i:s", ExtraWatchDate::getUTCTimestamp());
        return "$date $time";
    }

    /**
     * date
     */
    function dayOfWeek()
    {
        //date_default_timezone_set(ExtraWatchDate::getTimezone());
        return ExtraWatchDate::date("N", ExtraWatchDate::getUserTimestamp()); //OK
        //return ExtraWatchDate::date("w", $this->getUTCTimestamp());
    }

    /**
     * date
     */
    function dayOfMonth()
    {
        //date_default_timezone_set(ExtraWatchDate::getTimezone());
        //return ExtraWatchDate::date("d", $this->getUTCTimestamp());
        return gmdate("d", ExtraWatchDate::getUserTimestamp());
    }

    /**
     * date
     * @return unknown
     */
    function jwDateToday()
    {
        return ExtraWatchDate::jwDateFromTimestamp(ExtraWatchDate::getUTCTimestamp());
    }

    /**
     * date
     * @return unknown
     */
    function jwDateFromTimestamp($timestamp)
    {
        // this is ok
        $seconds = gmdate("U", $timestamp + ExtraWatchDate::getUserTimezone() * 3600);
        $diff = floor($seconds / 86400);
        return $diff;
    }

    /**
     * date
     */
    function getDateByDay($day, $format = "d.m.Y")
    {
        $timestamp = $day * 3600 * 24;
        if (EXTRAWATCH_DEBUG) echo("Date by day: " . $timestamp);
        $date = gmdate($format, $timestamp);
        $output = $date;
        if ($format == "d.m.Y" && ($day == ExtraWatchDate::jwDateToday()))
            $output .= " (" . _EW_STATS_TODAY . ")";

        return $output;
    }

    /**
     * date
     * @return mixed|string|void
     */
    function getUserTimezone()
    {
        if (!isset($this) || !isset($this->env)) {
            $this->env = ExtraWatchEnvFactory::getEnvironment();
        }
        $user = & ExtraWatchHelper::getUser($this->env);

        //	    if we have an anonymous user, then use global config, instead of the user params
        if ($this->env->getUsersCustomTimezoneOffset()) {
            $userTimezone = $this->env->getTimezoneOffset();
            if (EXTRAWATCH_DEBUG) {
                echo ("<br/>user timezone returned from user's property: " . $userTimezone);
            }
        } else {
            $userTimezone = $this->env->getTimezoneOffset();
            if (EXTRAWATCH_DEBUG) {
                echo ("<br/>user timezone returned from config.offset: " . $userTimezone);
            }
        }
        /* if the user has no timezone defined, use the timezone from server configuratio */
        if (!isset($userTimezone)) {
            $config = new JConfig();
            $userTimezone = $config->offset;
            if (EXTRAWATCH_DEBUG) {
                echo ("<br/>user timezone returned from config->offset: " . $userTimezone);
            }
        }

        if ($userTimezone && !is_numeric($userTimezone)) {
            try {
                $dtz = new DateTimeZone($userTimezone);
                $time = new DateTime('now', $dtz);
                $userTimezone = $time->format('Z') / 3600; // timezone difference in seconds / 3600
                if (EXTRAWATCH_DEBUG) {
                    echo ("<br/>user timezone was not numeric, translated to: " . $userTimezone);
                }
            } catch (Exception $e) {
                echo("<!-- exception " . $e->getMessage() . " -->");
            }
        }
        return $userTimezone;
    }

    /**
     * date
     */
    function getUTCTimestamp()
    {
        return gmdate('U', time());
    }

    /**
     * date
     */
    function UTCTimestampToUserTimestamp($timestamp)
    {
        return ($timestamp + ExtraWatchDate::getUserTimezone() * 3600);
    }

    /**
     * date
     * @return
     */
    function getUserTimestamp()
    {
        return ExtraWatchDate::UTCTimestampToUserTimestamp(ExtraWatchDate::getUTCTimestamp());
    }

    function getWeekSince1970($timestamp)
    {
        //date_default_timezone_set(ExtraWatchDate::getTimezone());
        //return ExtraWatchDate::date("W", $timestamp);
        return floor(($timestamp + ExtraWatchDate::getUserTimezone() * 3600 - 4 * 3600 * 24) / 3600 / 24 / 7) + 1; //4 because 1.1.1970 is Thursday, +1 because there is no week 0
    }

    function getWeekFromTimestamp($timestamp)
    {
        //date_default_timezone_set(ExtraWatchDate::getTimezone());
        //return ExtraWatchDate::date("W", $timestamp);
        return gmdate("W", $timestamp + ExtraWatchDate::getUserTimezone() * 3600);
    }

    function getYearFromTimestamp($timestamp)
    {
        //date_default_timezone_set(ExtraWatchDate::getTimezone());
        //        return ExtraWatchDate::date("Y", $timestamp);
        return gmdate("y", $timestamp + ExtraWatchDate::getUserTimezone() * 3600);
    }

    /**
     * Used as replacement for date to use joomla timezone
     * @param  $format
     * @param  $timestamp
     * @return string
     */
    //TODO: refactor: rename to dateToLocal
    function date($format, $timestamp)
    {
        //toto je dobre, do not change
        //$tz = ExtraWatchDate::getJoomlaTimezoneOffset() - ExtraWatchDate::getUserTimezone();
        return gmdate($format, $timestamp + ExtraWatchDate::getUserTimezone() * 3600);
    }

    function getCurrentWeek()
    {
        return ExtraWatchDate::getWeekFromTimestamp(ExtraWatchDate::getUserTimestamp());
    }

    function getWeekStartingDay($week = 0)
    {
        if (EXTRAWATCH_DEBUG) echo("getting week starting day: " . $week);
        if (!$week) {
            $weekDiff = 0;
        } else {
            $currentWeek = ExtraWatchDate::getCurrentWeek(); // OK
            $weekDiff = $currentWeek - $week; // difference between selected week number since 1.1.1970 and current week number
            if (EXTRAWATCH_DEBUG) echo("current week: $currentWeek weekDiff: $weekDiff");
        }
        $dayOfWeek = ExtraWatchDate::dayOfWeek();
        $dateToday = ExtraWatchDate::jwDateToday();
        return $dateToday - $dayOfWeek - $weekDiff * 7 + 1; // +1 to make it start on monday
    }


}


?>