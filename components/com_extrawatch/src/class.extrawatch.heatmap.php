<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 1.2.18
 * @revision 203
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2012 by Matej Koval - All rights reserved!
 * @website http://www.codegravity.com
 */

/** ensure this file is being included by a parent file */
if (!defined('_JEXEC') && !defined('_VALID_MOS'))
    die('Restricted access');

class ExtraWatchHeatmap
{

    public $database;
    public $helper;
    public $stat;
    public $block;
    public $date;

    const HEATMAP_PARAM_NAME = "extraWatchHeatmap";
    const HEATMAP_PARAM_DAY_NAME = "extraWatchDay";
    const HEATMAP_PARAM_HASH = "randHash";

    function __construct($database)
    {
        $this->database = $database;
        $this->helper = new ExtraWatchHelper($this->database);
        $this->stat = new ExtraWatchStat($this->database);
        $this->date = new ExtraWatchDate($this->database);
    }

    /*PRO_START*/
    function insertHeatmapClick($uri2titleId, $x, $y, $w, $h, $xpath)
    {
        $day = $this->date->jwDateToday();
        $timestamp = $this->date->getUTCTimestamp();
        $ip = $_SERVER['REMOTE_ADDR'];

        $query = sprintf("INSERT INTO #__extrawatch_heatmap (`id`, `uri2titleId`, `x`, `y`, `w`, `h`, `ip`, `day`, `timestamp`, `xpath`) values ('','%d','%d','%d','%d','%d','%s','%d','%d','%s')", (int)$uri2titleId, (int)$x, (int)$y, (int)$w, (int)$h, $this->database->getEscaped($ip), (int)$day, (int)$timestamp, $this->database->getEscaped($xpath));
        $this->database->executeQuery($query);

    }

    /* heatmap */
    function getHeatmapClicksByUri2TitleId($uri2titleId, $targetSizeX, $targetSizeY, $day, $ip = "")
    {
        $ipFilter = "";
        if ($ip) {
            $ipFilter = sprintf(" AND ip = '%s' ", $this->database->getEscaped($ip));
        }
        $query = sprintf("SELECT * FROM #__extrawatch_heatmap WHERE uri2titleId = '%d' and day = '%d' $ipFilter", (int)$uri2titleId, (int)$day);
        $result = $this->database->objectListQuery($query);
        $output = "{max: 90, data: [";
        $i = 0;
        if ($result)
            foreach ($result as $row) {
                $output .= sprintf("{x: %d, y: %d, count: %d, xpath: '%s'}", $row->x, $row->y, 10, $row->xpath);
                $i++;
                if ($i < sizeof($result)) {
                    $output .= ",";
                }
            }
        $output .= "]}";
        return $output;
    }

    /* heatmap */
    function getHeatmapClicksByUri2TitleIdForToday($uri2titleId, $w, $h)
    {
        $day = $this->date->jwDateToday();
        return $this->getHeatmapClicksByUri2TitleId($uri2titleId, $w, $h, $day);

    }

    function getTopHeatmapUris($day = "", $limit = 0)
    {
        $query = sprintf("SELECT * , count( uri2TitleId ) AS `count`
                          FROM `#__extrawatch_heatmap`
                          JOIN `#__extrawatch_uri2title` ON #__extrawatch_heatmap.uri2titleId = #__extrawatch_uri2title.id
                          WHERE `day` = %d
                          GROUP BY uri2TitleId
                          ORDER BY `count` DESC ", (int)$day);
        if (@$limit) {
            $query .= "LIMIT 0,$limit";
        }
        $rows = $this->database->objectListQuery($query);
        return $rows;
    }

    function stripHeatmapGetParams($uri)
    {
        preg_match("/^((?!\?" . ExtraWatchHeatmap::HEATMAP_PARAM_NAME . ").)*/", $uri, $matches);
        return @$matches[0];
    }

    function findHeatmapStatsForUriIdAndDay($uri2TitleId, $day = "")
    {
        if (!$day) {
            $day = $this->date->jwDateToday();
        }
        $query = sprintf(" SELECT * , count( uri2TitleId ) AS `count`
                          FROM `#__extrawatch_heatmap`
                          JOIN `#__extrawatch_uri2title` ON #__extrawatch_heatmap.uri2titleId = #__extrawatch_uri2title.id
                          WHERE `day` = %d and `uri2TitleId` = %d
                          GROUP BY uri2TitleId
                          ORDER BY `count` DESC
                          LIMIT 1", (int)$day, (int)$uri2TitleId);
        $rows = $this->database->objectListQuery($query);
        return $rows;
    }

    function findClicksForUri2Title($uri2TitleId, $day = "")
    {
        if (!$day) {
            $day = $this->date->jwDateToday();
        }
        $query = sprintf("select count(uri2TitleId) AS `count`
                          FROM `#__extrawatch_heatmap`
                          WHERE `day` = %d and `uri2TitleId` = %d
                          GROUP BY uri2TitleId
                          ORDER BY `count` DESC
                          LIMIT 1", (int)$day, (int)$uri2TitleId);
        $rows = $this->database->resultQuery($query);
        return $rows;
    }

    function heatmapForDayAsAsoc($day = "")
    {
        $assocArray = "";
        $rows = $this->getTopHeatmapUris($day);
        if ($rows)
            foreach ($rows as $row) {
                $assocArray[$row->uri] = $row->count;
            }
        return $assocArray;
    }

    function getMaxClicksForDay($day)
    {
        $rows = $this->getTopHeatmapUris($day, 1);
        if (@$rows) {
            return $rows[0]->count;
        }
        return 0;
    }

    function updateHeatmapStats($day)
    {
        $query = sprintf("DELETE FROM #__extrawatch_info where `date` = %d and `group` = %d", (int)$day, EW_DB_KEY_HEATMAP);
        $this->database->executeQuery($query);

        $query = sprintf("SELECT count( uri2titleId ) AS `count` , uri2titleId
        FROM #__extrawatch_heatmap
        WHERE `day` =%d
        GROUP BY `uri2titleId`
        ORDER BY count DESC", $day);
        $rows = $this->database->objectListQuery($query);
        if (@$rows) {
            foreach ($rows as $row) {
                $query = sprintf("INSERT INTO #__extrawatch_info (`name`, `value`, `date`, `group`) VALUES ('%s', %d, %d, %d);",
                    $this->database->getEscaped($row->uri2titleId), $this->database->getEscaped($row->count), $day, EW_DB_KEY_HEATMAP);
                $this->database->setQuery($query);
                $rows = $this->database->executeQuery($query);
            }
        }
    }

    function isHeatmapLoaded()
    {
        foreach (ExtraWatchHelper::requestGet() as $key => $value) {
            if (stristr($key, ExtraWatchHeatmap::HEATMAP_PARAM_NAME)) {
                return TRUE;
            }
        }
        return FALSE;
    }

    function getHeatmapClickNums($ip, $uri, $day)
    {
        $query = sprintf("SELECT count( #__extrawatch_heatmap.id ) AS heatmapClicks
        FROM `#__extrawatch_heatmap`
        JOIN #__extrawatch_uri2title ON #__extrawatch_uri2title.id = #__extrawatch_heatmap.uri2titleId
        WHERE ip = '%s'
        AND uri = '%s'
        ", $this->database->getEscaped($ip), $this->database->getEscaped($uri));
        return $this->database->resultQuery($query);
    }
    /*PRO_END*/

}


