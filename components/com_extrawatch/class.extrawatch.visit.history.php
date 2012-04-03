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

class ExtraWatchVisitHistory extends ExtraWatchVisit
{

    var $database;
    var $config;
    var $helper;
    var $stat;
    var $block;
    var $goal;
    var $visitHistory;
    var $lastDate;

    function ExtraWatchVisitHistory($extraWatch)
    {
        parent::ExtraWatchVisit($extraWatch);
    }

    /**
     * visitor
     */
    function getVisitors()
    {
        $limit = $this->config->getConfigValue('EXTRAWATCH_LIMIT_VISITORS');
        $query = sprintf("select ip, referer, username from #__extrawatch where (browser is not NULL and browser != '') order by id desc limit %d", (int)$limit);
        $rows = $this->database->objectListQuery($query);
        return $rows;
    }

    /**
     * visitor
     */
    function getJoinedURIRows($bots)
    {
        if ($bots) {
            $browserCondition = "is NULL";
            $limit = $this->config->getConfigValue("EXTRAWATCH_LIMIT_BOTS");
        } else {
            $browserCondition = "is not NULL";
            $limit = $this->config->getConfigValue("EXTRAWATCH_LIMIT_VISITORS");
        }
        $count = $this->config->getConfigValue('EXTRAWATCH_HISTORY_MAX_VALUES');
        $actualPage = (int)ExtraWatchHelper::requestGet('pageNum');
        $actualRecord = $actualPage * $count;
        $limit = $actualRecord . "," . $count;
        $query = sprintf("SELECT * FROM #__extrawatch_history LEFT JOIN #__extrawatch_uri_history ON #__extrawatch_history.id = #__extrawatch_uri_history.fk WHERE #__extrawatch_history.browser %s order by #__extrawatch_history.id desc, #__extrawatch_uri_history.timestamp desc limit %s", $this->database->getEscaped($browserCondition), $this->database->getEscaped($limit));
        $rows = $this->database->objectListQuery($query);
        return $rows;
    }

    function getHistoryCount()
    {
        $query = sprintf("SELECT count(id) FROM #__extrawatch_history");
        $rows = $this->database->resultQuery($query);
        return $rows;
    }

    /**
     * visitor
     */
    function getJoinedURIRowById($id)
    {
        $query = sprintf("SELECT * FROM #__extrawatch_history LEFT JOIN #__extrawatch_uri_history ON #__extrawatch_history.id = #__extrawatch_uri_history.fk where #__extrawatch_uri_history.id = '%d' ORDER BY #__extrawatch_uri_history.timestamp desc", (int)$id);
        $rows = $this->database->objectListQuery($query);
        return $rows;
    }


}

?>