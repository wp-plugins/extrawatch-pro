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

class ExtraWatchFlow
{

    public $visit;
    public $database;
    public $config;
    public $date;


    function __construct($visit, $database)
    {
        $this->visit = $visit;
        $this->database = $database;
        $this->config = new ExtraWatchConfig($this->database);
        $this->date = new ExtraWatchDate($this->database);
    }

    /*PRO_START*/
    function insertFlow($from, $to)
    {
        $fromId = $this->visit->getUriIdByUriName($from);
        if (!$fromId) {
            $this->visit->addUri2Title($from, "");
            $fromId = $this->visit->getUriIdByUriName($from);
        }
        $toId = $this->visit->getUriIdByUriName($to);
        if (!$toId) {
            $this->visit->addUri2Title($to, "");
            $toId = $this->visit->getUriIdByUriName($to);
        }

        $query = sprintf("select count(id) as `count` from #__extrawatch_flow where `from` = '%d' and `to` = '%d'", (int)$fromId, (int)$toId);
        $count = $this->database->resultQuery($query);

        if ($count) {
            $query = sprintf("update #__extrawatch_flow set count = count+1  where `from` = '%d' and `to` = '%d' ", (int)$fromId, (int)$toId);
            $this->database->executeQuery($query);
        } else {
            $query = sprintf("insert into #__extrawatch_flow (id, `from`, `to`, `count`) values ('', '%d', '%d', 1) ", (int)$fromId, (int)$toId);
            $this->database->executeQuery($query);
        }

    }

    function getOutputPages($fromUriId, $limit)
    {
        $query = sprintf("select * from #__extrawatch_flow where `from` != `to` and `from` = '%d' order by `count` desc limit %d", (int)$fromUriId, $limit + 1);
        $rows = $this->database->objectListQuery($query);
        return $rows;
    }

    function getFlowById($flowId)
    {
        $query = sprintf("select `from`,`to`,`count`  from #__extrawatch_flow where `id` = %d limit 1", (int)$flowId);
        $rows = $this->database->objectListQuery($query);
        return $rows[0];
    }


    function retrieveFlow($uriId = 0, &$nodeArray, &$edgeArray, $outgoingLinksCount, $nestingLevelCount)
    {

        $nestingLevel = 0;

        if ($uriId == 0) {
            $uriId = $this->visit->getMaxCountUriId();
        }
        $this->getOutgoingLinks($uriId, $nodeArray, $edgeArray, $nestingLevel, $nestingLevelCount, $outgoingLinksCount, TRUE);

    }

    function getOutgoingLinks($fromId, &$nodeArray, &$edgeArray, $nestingLevel, &$nestingLevelCount, $outgoingLinksCount, $root = FALSE)
    {

        if ($nestingLevel > $nestingLevelCount) {
            $nestingLevel--;
            return;
        }

        $nestingLevel++;

        $rows = $this->getOutputPages($fromId, $outgoingLinksCount);

        $outgoingLinks = 0;

        if (@$rows)
            foreach ($rows as $row) {
                if ($row->from && $row->to) {
                    if ($root) {
                        $outgoingLinksCountModified = $outgoingLinksCount;
                    } else {
                        $outgoingLinksCountModified = 1;
                    }
                    if ($outgoingLinks > $outgoingLinksCountModified) {
                        break;
                    }
                    $outgoingLinks++;
                    $this->addEdgeToArray($edgeArray, $row->id);
                    $this->addNodeToArray($nodeArray, $row->from);
                    $this->addNodeToArray($nodeArray, $row->to);
                    $this->getOutgoingLinks($row->to, $nodeArray, $edgeArray, $nestingLevel, $nestingLevelCount, $outgoingLinksCount, FALSE);
                }
            }

        $nestingLevel--;
    }

    function addNodeToArray(& $nodeArray, $nodeId)
    {
        if (!in_array($nodeId, $nodeArray)) {
            $nodeArray[] = $nodeId;
        }
    }

    function addEdgeToArray(& $edgeArray, $flowId)
    {
        if (!in_array($flowId, $edgeArray)) {
            $edgeArray[] = $flowId;
        }
    }


    function getSumOfOutgoingFlow($fromId, $limit)
    {
        $query = sprintf("select `count` from #__extrawatch_flow where `from` != `to` and `from` = '%d' order by `count` desc limit %d", (int)$fromId, (int)$limit);
        $rows = $this->database->objectListQuery($query);
        $count = 0;
        foreach ($rows as $row) {
            $count += $row->count;
        }
        return @ $count;
    }


    function getMostPopularUriIdsAndTitles()
    {
        $query = sprintf("SELECT DISTINCT (uri2title.id),  `flow`.`count` as `count`
                            FROM #__extrawatch_uri2title AS uri2title
                            JOIN #__extrawatch_flow AS flow ON uri2title.id = flow.`from`
                            ORDER BY `flow`.`count` DESC
                            LIMIT 100");
        return $this->database->objectListQuery($query);
    }

    function getDefaultOutgoingLinks($outgoingLinks)
    {
        if (!$outgoingLinks) {
            $outgoingLinks = $this->config->getConfigValue("EXTRAWATCH_FLOW_DEFAULT_OUTGOING_LINKS_COUNT");
            return $outgoingLinks;
        }
        return $outgoingLinks;
    }

    function getDefaultNestingLevel($nestingLevel)
    {
        if (!isset($nestingLevel) && $nestingLevel != 0) {
            $nestingLevel = $this->config->getConfigValue("EXTRAWATCH_FLOW_DEFAULT_NESTING_LEVEL");
            return $nestingLevel;
        }
        return $nestingLevel;
    }

    function updateFlowStats($lastRunAtMidnightDate)
    {

        $query = sprintf("SELECT * FROM #__extrawatch_flow ORDER BY count desc");
        $rows = $this->database->objectListQuery($query);
        if (@$rows) {
            foreach ($rows as $row) {
                $query = sprintf("INSERT INTO #__extrawatch_info (`name`, `value`, `date`, `group`) VALUES ('%s', %d, %d, %d);",
                    $this->database->getEscaped($row->id), $this->database->getEscaped($row->count), $lastRunAtMidnightDate, EW_DB_KEY_TRAFFIC_FLOW);
                $this->database->setQuery($query);
                $rows = $this->database->executeQuery($query);

            }
        }

        $query = sprintf("UPDATE #__extrawatch_flow set `count` = 0");
        $this->database->executeQuery($query);
    }
    /*PRO_END*/

}


