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
if (!defined('_JEXEC') && !defined('_VALID_MOS')) {
	die('Restricted access');
}

class ExtraWatchSEO
{

    public $database;
    public $date;

    function __construct($database)
    {
        $this->database = $database;
        $this->date = new ExtraWatchDate($database);
    }

    /*PRO_START*/
    /** seo */
    function retrieveUri2KeyphraseStats()
    {
        $query = sprintf("SELECT uri.uri, uri.title, info.value, keyword.name
                                FROM `#__extrawatch_info` info
                                JOIN `#__extrawatch_uri2keyphrase` u2k ON u2k.keyphraseId = info.`name`
                                JOIN `#__extrawatch_uri2title` uri ON u2k.uri2titleId = uri.id
                                JOIN `#__extrawatch_keyphrase` keyword ON u2k.keyphraseId = keyword.id
                                WHERE info.`group` = %d
                                AND info.`date` =%d
                                ORDER BY info.value DESC", EW_DB_KEY_URI2KEYPHRASE, $this->date->jwDateToday());
        return $this->database->loadObjectList($query);
    }

    /** seo */
    function retrieveTopUrisReferedByKeyphrase($day)
    {
        $query = sprintf("SELECT #__extrawatch_uri2keyphrase.uri2titleId as uriId, uri, title, sum( #__extrawatch_info.value ) AS total
                        FROM #__extrawatch_info
                        LEFT JOIN #__extrawatch_uri2keyphrase ON #__extrawatch_info.name = #__extrawatch_uri2keyphrase.id
                        JOIN #__extrawatch_keyphrase ON #__extrawatch_keyphrase.id = #__extrawatch_uri2keyphrase.keyphraseId
                        JOIN #__extrawatch_uri2title ON #__extrawatch_uri2keyphrase.uri2titleId = #__extrawatch_uri2title.id
                        WHERE `group` = %d
                        AND `date` = %d
                        GROUP BY uriId
                        ORDER BY total DESC", (int)EW_DB_KEY_URI2KEYPHRASE, (int)$day);
        return $this->database->objectListQuery($query);
    }

    /** seo */
    function retrieveKeyphrasesForUri($day, $uriId)
    {
        $query = sprintf("SELECT #__extrawatch_info.name as uri2keyphraseId, #__extrawatch_keyphrase.name as name, #__extrawatch_keyphrase.id as keyphraseId, #__extrawatch_info.value as value
                                FROM #__extrawatch_info
                                LEFT JOIN #__extrawatch_uri2keyphrase ON #__extrawatch_info.name = #__extrawatch_uri2keyphrase.id
                                JOIN #__extrawatch_keyphrase ON #__extrawatch_keyphrase.id = #__extrawatch_uri2keyphrase.keyphraseId
                                JOIN #__extrawatch_uri2title ON #__extrawatch_uri2keyphrase.uri2titleId = #__extrawatch_uri2title.id
                                WHERE `group` = %d
                                AND `date` = %d
                                AND #__extrawatch_uri2keyphrase.uri2titleId = %d
                                ORDER BY value desc
    ",
            (int)EW_DB_KEY_URI2KEYPHRASE, (int)$day, (int)$uriId);
        return $this->database->objectListQuery($query);
    }

    /** seo */
    function cleanUnimportantKeyphrases()
    {
        $day = $this->date->jwDateToday();
        $daysToKeep = EXTRAWATCH_DAYS_TO_KEEP_UNIMPORTANT_KEYPHRASES;
        $query = sprintf("SELECT sum( `value` ) AS total, `name` as uri2keyphraseId FROM `#__extrawatch_info` WHERE `group` = %d AND `date` < %d GROUP BY `name` HAVING total < %d", EW_DB_KEY_URI2KEYPHRASE, $day - $daysToKeep, EXTRAWATCH_UNIMPORTANT_KEYPHRASE_THRESHOLD * $daysToKeep);
        $rows = $this->database->objectListQuery($query);
        $i = 0;
        $idList = "";
        foreach ($rows as $row) {
            $idList .= $row->uri2keyphraseId;
            $i++;
            if ($i < sizeof($rows)) {
                $idList .= ", ";
            }
        }
        if (@$idList) {
            $query = sprintf("delete from #__extrawatch_info where `group` = %d and `name` in (%s) ", EW_DB_KEY_URI2KEYPHRASE, $idList);
            $this->database->executeQuery($query);
        }
    }

    function extractGooglePageNumberFromReferer($referer)
    {
        preg_match('/cd=([0-9]*)/', $referer, $matches);
        $googlePage = @$matches[1];
        return $googlePage;
    }

    /** seo */
    function getUri2KeyphrasePosUris($day)
    {
        $query = sprintf(
            "SELECT
            DISTINCT (
            uri
            ), title, sum( value ) AS valueTotal,
            #__extrawatch_uri2title.id as uri2titleId
            FROM #__extrawatch_info
            JOIN `#__extrawatch_uri2keyphrase_pos` ON #__extrawatch_uri2keyphrase_pos.id = #__extrawatch_info.name
            JOIN `#__extrawatch_uri2keyphrase` ON #__extrawatch_uri2keyphrase.id = #__extrawatch_uri2keyphrase_pos.uri2keyphraseId
            JOIN `#__extrawatch_uri2title` ON #__extrawatch_uri2keyphrase.uri2titleId = #__extrawatch_uri2title.id
            WHERE #__extrawatch_info.`group` = %d and #__extrawatch_info.`date` = %d
            GROUP BY uri
            ORDER BY valueTotal DESC, position ASC", EW_DB_KEY_SEARCH_RESULT_NUM, $day);
        return $this->database->objectListQuery($query);
    }

    function getUri2KeyphrasePosById($day, $uri2titleId)
    {
        if (!$uri2titleId) {
            return;
        }
        $query = sprintf(
            "SELECT #__extrawatch_uri2keyphrase_pos.id as uri2keyphrasePosId, #__extrawatch_keyphrase.name as keyphrase, #__extrawatch_uri2keyphrase_pos.position as `position`, #__extrawatch_info.`value` as `value`
                FROM #__extrawatch_info
                JOIN `#__extrawatch_uri2keyphrase_pos` ON #__extrawatch_uri2keyphrase_pos.id = #__extrawatch_info.name
                JOIN `#__extrawatch_uri2keyphrase` ON #__extrawatch_uri2keyphrase.id = #__extrawatch_uri2keyphrase_pos.uri2keyphraseId
                JOIN `#__extrawatch_uri2title` ON #__extrawatch_uri2keyphrase.uri2titleId = #__extrawatch_uri2title.id
                JOIN `#__extrawatch_keyphrase` ON #__extrawatch_uri2keyphrase.keyphraseId = #__extrawatch_keyphrase.id
                WHERE #__extrawatch_info.`group` = %d and #__extrawatch_info.`date` = %d
                and #__extrawatch_uri2title.`id` = %d
                ORDER BY value DESC, position ASC", EW_DB_KEY_SEARCH_RESULT_NUM, $day, $uri2titleId);
        return $this->database->objectListQuery($query);
    }

    function getUri2KeyphrasePosNameById($uri2keyphrasePosId)
    {
        $query = sprintf(
            "SELECT name
                    FROM #__extrawatch_uri2keyphrase_pos
                    JOIN `#__extrawatch_uri2keyphrase` ON #__extrawatch_uri2keyphrase.id = #__extrawatch_uri2keyphrase_pos.uri2keyphraseId
                    JOIN `#__extrawatch_keyphrase` ON #__extrawatch_keyphrase.id = #__extrawatch_uri2keyphrase.keyphraseId
                    WHERE #__extrawatch_uri2keyphrase_pos.id = %d
                    LIMIT 1", (int)$uri2keyphrasePosId);
        return $this->database->resultQuery($query);
    }

    /** seo */
    function getTotalVisitsByKeyphrasesByDay($day)
    {
        $query = sprintf(
            "SELECT SUM( value ) AS valueTotal
                FROM #__extrawatch_info
                JOIN `#__extrawatch_uri2keyphrase_pos` ON #__extrawatch_uri2keyphrase_pos.id = #__extrawatch_info.name
                WHERE #__extrawatch_info.`group` =%d
                AND #__extrawatch_info.`date` =%d
                LIMIT 1", EW_DB_KEY_SEARCH_RESULT_NUM, $day);
        return $this->database->resultQuery($query);
    }

    function getMostChangedKeyphrases()
    {
        $query = "
            SELECT uri2keyphraseId, name, AVG( position ) AS averagePosition, MAX( position ) AS maxPosition, MIN( position ) AS minPosition, count( position ) AS `count`, (MAX( position ) - MIN( position )) AS difference
            FROM `#__extrawatch_uri2keyphrase_pos`
            JOIN #__extrawatch_uri2keyphrase ON #__extrawatch_uri2keyphrase.id = #__extrawatch_uri2keyphrase_pos.uri2keyphraseId
            JOIN #__extrawatch_keyphrase ON #__extrawatch_keyphrase.id = keyphraseId
            GROUP BY (
            uri2keyphraseId
            )
            HAVING `count` >1
            ORDER BY difference DESC, averagePosition ASC, count DESC";
        return $this->database->objectListQuery($query);
    }

    /* function getMostChangingKeywords() {
        $query = sprintf("
            SELECT uri2titleId, uri2keyphraseId, title, #__extrawatch_keyphrase.`name` , count( position ) AS `count`
            FROM `#__extrawatch_uri2keyphrase_pos`
            JOIN #__extrawatch_info info ON info.name = #__extrawatch_uri2keyphrase_pos.id
            JOIN #__extrawatch_uri2keyphrase ON #__extrawatch_uri2keyphrase.id = uri2keyphraseId
            JOIN #__extrawatch_keyphrase ON #__extrawatch_keyphrase.id = keyphraseId
            JOIN #__extrawatch_uri2title ON #__extrawatch_uri2title.id = uri2titleId
            WHERE info.`group` = %d
            GROUP BY uri2titleId
            HAVING `count` >1
            ORDER by `count` DESC
            ", EW_DB_KEY_SEARCH_RESULT_NUM);
        return $this->database->objectListQuery($query);
    }*/

    function getAveragePositionChangesByUri2KeyphraseId($uri2keyphraseId)
    {
        $query = sprintf("SELECT `date` , AVG( position ) as averagePosition
            FROM `#__extrawatch_uri2keyphrase_pos`
            JOIN #__extrawatch_info info ON info.name = #__extrawatch_uri2keyphrase_pos.id
            WHERE info.`group` = %d
            AND uri2keyphraseId = %d
            GROUP BY `date`
            ORDER BY `date` DESC , `#__extrawatch_uri2keyphrase_pos`.`uri2keyphraseId` ASC
            LIMIT 2",
            EW_DB_KEY_SEARCH_RESULT_NUM, $uri2keyphraseId);
        return $this->database->objectListQuery($query);
    }

    function getAveragePositionChangesByUri2KeyphraseIdLimited($uri2keyphraseId)
    {
        $rows = $this->getAveragePositionChangesByUri2KeyphraseId($uri2keyphraseId);
        if (@$rows && sizeof($rows) > 1) {
            return array($rows[0],$rows[1]);
        }
        return $rows;
    }
    /*PRO_END*/

}
