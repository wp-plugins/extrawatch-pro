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

class ExtraWatchGoal
{

    public $database;
    public $helper;
    public $stat;
    public $block;

    function __construct($database)
    {
        $this->database = $database;
        $this->helper = new ExtraWatchHelper($this->database);
        $this->stat = new ExtraWatchStat($this->database);
        $this->block = new ExtraWatchBlock($this->database);
    }

    /**
     * goals
     */
    function getGoals()
    {
        $query = "select * from #__extrawatch_goals ";
        $rows = @ $this->database->objectListQuery($query);
        return @ $rows;
    }

    /**
     * goals
     */
    function getGoalNameById($id)
    {
        $query = sprintf("select name from #__extrawatch_goals where id = '%d'", (int)$id);
        $rows = @ $this->database->objectListQuery($query);
        $row = @ $rows[0];
        return @ $row->name;
    }


    /**
     * goals
     */
    function getGoalById($id)
    {

        //lower case id
        $id = strtolower($id);
        $query = sprintf("select * from #__extrawatch_goals where id = '%d' limit 1 ", (int)$id);
        $rows = $this->database->assocListQuery($query);
        $row = @ $rows[0];
        return $row;

    }

    /**
     * goals
     */
    function deleteGoal($id)
    {
        $query = sprintf("delete from #__extrawatch_goals where id = '%d' limit 1", (int)$id);
        //TODO delete everyting from logs as well!
        $result = $this->database->executeQuery($query);

        $query = sprintf("delete from #__extrawatch_info where (`group`='%d' and name='%d')", (int)EW_DB_KEY_GOALS, (int)$id);
        $this->database->executeQuery($query);
        return $result;
    }

    /**
     * goals
     */
    function enableGoal($id)
    {
        $query = sprintf("update #__extrawatch_goals set disabled = NULL where id = '%d'", (int)$id);
        return $this->database->executeQuery($query);
    }

    /**
     * goals
     */
    function disableGoal($id)
    {
        $query = sprintf("update #__extrawatch_goals set disabled = 1 where id = '%d'", (int)$id);
        return $this->database->executeQuery($query);
    }

    /**
     * goals
     */
    function getGoalCount($id)
    {
        $query = sprintf("select sum(value) as sum from #__extrawatch_info where `group` = '" . EW_DB_KEY_GOALS . "' and name = '%d'", (int)$id);
        $sum = $this->database->resultQuery($query);
        return $sum;
    }

    /**
     * goals
     */
    function saveGoal($post)
    {
        $id = @ $post['id'];
        if (@ $id) {
            //update
            $query = sprintf("update #__extrawatch_goals set post_inversed = null, get_inversed = null");
            $this->database->executeQuery($query);

            $query = sprintf("update #__extrawatch_goals  set ");
            $length = sizeof($post);
            if (@ $post['option']) {
                $length = $length - 1;
            }
            $i = 0;
            foreach ($post as $key => $value) {
                $i++;
                if ($key == "id" || $key == "option") // ignore key and option
                    continue;
                $key = strtolower($key);
                $query .= sprintf("%s = '%s' ", $this->database->getEscaped($key), $this->database->getEscaped($value));
                if ($i < $length - 1)
                    $query .= ", ";
            }
            $query .= sprintf(" where id = '%d'", (int)$id);
            $result = $this->database->executeQuery($query);

        } else {
            // insert
            unset($post['id']); // when it comes from new goal
            $query = sprintf("insert into #__extrawatch_goals (id, ");
            $length = sizeof($post);
            if (@ $post['option'])
                $length = $length - 1;
            $i = 0;
            foreach ($post as $key => $value) {
                if ($key == "id" || $key == "option")
                    continue;
                $i++;
                $key = strtolower($key);
                $query .= sprintf("%s", $this->database->getEscaped($key));
                if ($i < $length)
                    $query .= ", ";
            }
            $query .= ") values ('',";
            $i = 0;
            foreach ($post as $key => $value) {
                if ($key == "id" || $key == "option")
                    continue;
                $i++;
                $key = strtolower($key);
                $query .= sprintf("'%s'", $this->database->getEscaped($value));
                if ($i < $length)
                    $query .= ",";
            }
            $query .= ")";

            //echo("query: $query");

            $result = $this->database->executeQuery($query);
        }
        return $result;
    }

    /**
     * goals
     */
    function checkGoals($title, $username, $ip, $came_from, $liveSite = "")
    {
        global $mainframe;

        $country = $this->helper->countryByIp($ip);

        $query = sprintf("select * from #__extrawatch_goals");
        $rows = $this->database->objectListQuery($query);
        if (@$rows)
            foreach ($rows as $row) {

                $achieved = FALSE;
                if ($row->disabled)
                    continue;

                if (trim($row->uri_inversed) == "on") {
                    if (trim($row->uri_condition)) {
                        if (@ $this->helper->wildcardSearch($row->uri_condition, trim($this->helper->getURI()))) {
                            continue;
                        } else
                            $achieved = TRUE;
                    }
                } else {
                    if (trim($row->uri_condition)) {
                        if (@ $this->helper->wildcardSearch($row->uri_condition, trim($this->helper->getURI()))) {
                            $achieved = TRUE;
                        } else
                            continue;
                    }
                }

                if (trim($row->get_inversed) == "on") {
                    if (trim($row->get_condition)) {
                        if (@ $this->helper->wildcardSearch($row->get_condition, trim(ExtraWatchHelper::requestGet($row->get_var)))) {
                            continue;
                        } else
                            if ($row->get_var == "*") {
                                $found = FALSE;
                                foreach (ExtraWatchHelper::requestGet() as $get) {
                                    if ($this->helper->wildcardSearch($row->get_condition, trim($get))) {
                                        $found = TRUE;
                                    }
                                }
                                if ($found) continue;
                            } else
                                $achieved = TRUE;
                    }
                } else {
                    if (trim($row->get_condition)) {
                        if (@ $this->helper->wildcardSearch($row->get_condition, trim(ExtraWatchHelper::requestGet($row->get_var)))) {
                            $achieved = TRUE;
                        } else
                            if ($row->get_var == "*") {
                                foreach (ExtraWatchHelper::requestGet() as $get) {
                                    if ($this->helper->wildcardSearch($row->get_condition, trim($get))) {
                                        $achieved = TRUE;
                                    }
                                }
                            } else
                                continue;
                    }
                }

                if (trim($row->post_inversed) == "on") {
                    if (trim($row->post_condition)) {
                        if (@ $this->helper->wildcardSearch($row->post_condition, trim(ExtraWatchHelper::requestPost($row->post_var)))) {
                            continue;
                        } else
                            if ($row->post_var == "*") {
                                $found = FALSE;
                                foreach (ExtraWatchHelper::requestPost() as $post) {
                                    if ($this->helper->wildcardSearch($row->post_condition, trim($post))) {
                                        $found = TRUE;
                                    }
                                }
                                if ($found) continue;
                            } else
                                $achieved = TRUE;
                    }
                } else {
                    if (trim($row->post_condition)) {
                        if (@ $this->helper->wildcardSearch($row->post_condition, trim(ExtraWatchHelper::requestPost($row->post_var)))) {
                            $achieved = TRUE;
                        } else
                            if ($row->post_var == "*") {
                                foreach (ExtraWatchHelper::requestPost() as $post) {
                                    if ($this->helper->wildcardSearch($row->post_condition, trim($post))) {
                                        $achieved = TRUE;
                                    }
                                }
                            } else
                                continue;
                    }
                }

                if (trim($row->title_inversed) == "on") {
                    if (trim($row->title_condition)) {
                        if (@ $this->helper->wildcardSearch($row->title_condition, trim($title))) {
                            continue;
                        } else
                            $achieved = TRUE;
                    }
                } else {
                    if (trim($row->title_condition)) {
                        if (@ $this->helper->wildcardSearch($row->title_condition, trim($title))) {
                            $achieved = TRUE;
                        } else
                            continue;
                    }
                }

                if (trim($row->username_inversed) == "on") {
                    if (trim($row->username_condition)) {
                        if (@ $this->helper->wildcardSearch($row->username_condition, trim($username))) {
                            continue;
                        } else
                            $achieved = TRUE;
                    }
                } else {
                    if (trim($row->username_condition)) {
                        if (@ $this->helper->wildcardSearch($row->username_condition, trim($username))) {
                            $achieved = TRUE;
                        } else
                            continue;
                    }
                }

                if (trim($row->ip_inversed) == "on") {
                    if (trim($row->ip_condition)) {
                        if (@ $this->helper->wildcardSearch($row->ip_condition, trim($ip))) {
                            continue;
                        } else
                            $achieved = TRUE;
                    }
                } else {
                    if (trim($row->ip_condition)) {
                        if (@ $this->helper->wildcardSearch($row->ip_condition, trim($ip))) {
                            $achieved = TRUE;
                        } else
                            continue;
                    }
                }

                if (trim($row->came_from_inversed) == "on") {
                    if (trim($row->came_from_condition)) {
                        if (@ $this->helper->wildcardSearch($row->came_from_condition, trim($came_from)) || $this->helper->wildcardSearch($liveSite . $row->came_from_condition, trim($came_from))) {
                            continue;
                        } else
                            $achieved = TRUE;
                    }
                } else {
                    if (trim($row->came_from_condition)) {
                        if (@ $this->helper->wildcardSearch($row->came_from_condition, trim($came_from)) || $this->helper->wildcardSearch($liveSite . $row->came_from_condition, trim($came_from))) {
                            $achieved = TRUE;
                        } else
                            continue;
                    }
                }

                if (trim($row->country_inversed) == "on") {
                    if (trim($row->country_condition)) {
                        if (@ $this->helper->wildcardSearch($row->country_condition, trim($country))) {
                            continue;
                        } else
                            $achieved = TRUE;
                    }
                } else {
                    if (trim($row->country_condition)) {
                        if (@ $this->helper->wildcardSearch($row->country_condition, trim($country))) {
                            $achieved = TRUE;
                        } else
                            continue;
                    }
                }

                if ($achieved) {
                    $this->stat->increaseKeyValueInGroup(EW_DB_KEY_GOALS, $row->id);

                    if (@ $row->redirect) {
                        if ($mainframe) {
                            $mainframe->redirect(@ $row->redirect);
                        } else {
                            $mainframe =& JFactory::getApplication('site');
                            $mainframe->redirect(@ $row->redirect);
                        }

                    }
                    if (@ $row->block) {
                        $this->block->dieWithBlockingMessage($ip);
                    }
                }

            }
    }

}


