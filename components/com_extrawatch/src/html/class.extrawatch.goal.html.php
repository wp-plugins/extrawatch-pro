<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 1.2.18
 * @revision 208
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2012 by Matej Koval - All rights reserved!
 * @website http://www.codegravity.com
 */

/** ensure this file is being included by a parent file */
if (!defined('_JEXEC') && !defined('_VALID_MOS'))
    die('Restricted access');

class ExtraWatchGoalHTML
{

    public $extraWatch;
    public $extraWatchHTML;
    public $visitHistory;

    function __construct($extraWatch)
    {
        $this->extraWatch = $extraWatch;
        $this->extraWatchHTML = new ExtraWatchHTML($extraWatch);
        $this->visitHistory = new ExtraWatchVisitHistory($extraWatch);
    }

    /* goal */
    function renderActionButtons($id)
    {
        $output = "";
        $output .= "<a href='" . $this->extraWatch->config->renderLink("goals", "action=edit&goalId=$id") . "'><img src='" . $this->extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/img/icons/edit.gif' border='0' title='" . _EW_GOALS_EDIT . "'/></a> ";
        $output .= "&nbsp;&nbsp;";
        $output .= "<a href='" . $this->extraWatch->config->renderLink("goals", "action=delete&goalId=$id") . "' onClick='return confirm(\"" . _EW_GOALS_DELETE_CONFIRM . " $id? \");'><img src='" . $this->extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/img/icons/delete.gif' border='0' title='" . _EW_GOALS_DELETE . "'/></a> ";
        return $output;
    }

    /* goal */
    function renderCell($style, $content, $doNotTruncate = FALSE)
    {
        if (!$doNotTruncate) $content = $this->extraWatch->helper->truncate($content, $this->extraWatch->config->getConfigValue('EXTRAWATCH_TRUNCATE_GOALS'));
        $output = "<td align='center' style='$style'>" . htmlspecialchars($content) . "</td>";
        return $output;
    }

    /* goal */
    function renderGoals($result = "")
    {
        echo ("<h2>" . _EW_GOALS_TITLE . ExtraWatchHTML :: renderOnlineHelp(EW_DB_KEY_GOALS) . "</h2>");
        if ($result) {
            echo (_EW_SUCCESS . "<br/>");
        }
        require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "view" . DS . "goals.php";
    }

    /* goal */
    function renderEnabled($id, $disabled)
    {
        if ($disabled)
            $output = "<a href='" . $this->extraWatch->config->renderLink("goals", "action=enable&goalId=$id") . "'><img src='" . $this->extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/img/icons/unpublished.png' border='0'/></a>";
        else
            $output = "<a href='" . $this->extraWatch->config->renderLink("goals", "action=disable&goalId=$id") . "'><img src='" . $this->extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/img/icons/published.png' border='0'/></a>";

        return $output;
    }

    /* goal */
    function renderBackToGoals($result = "")
    {
        $output = "<a href='" . $this->extraWatch->config->renderLink("goals") . "'> &lt;&lt; " . _EW_BACK . "</a>";
        return $output;
    }

    /* goal */
    function renderGoalEdit($id)
    {
        $values = $this->extraWatch->goal->getGoalById((int)$id);
        $this->renderGoalForm(_EW_GOALS_UPDATE . " $id", $values);
    }


    /* goal */
    function renderGoalsInsert($id = null, $postid = null)
    {

        $values = "";

        if (isset($id)) {
            $rows = $this->extraWatch->visit->getJoinedURIRowById($id);
            if (!$rows) {
                $rows = $this->visitHistory->getJoinedURIRowById($id);
            }
            $row = @$rows[0];
            if (@$row) {
                $values['uri_condition'] = $row->uri;
                $values['title_condition'] = $row->title;
                $values['username_condition'] = $row->username;
                $values['ip_condition'] = $row->ip;
                /*
                            if(sizeof($rows) > 1) {

                                $previousUriRow = $rows[1];
                                $values['came_from_condition'] = $previousUriRow->uri;
                            }
                */
                $values['came_from_condition'] = $row->referer;

                $values['country_condition'] = $this->extraWatch->helper->countryByIp($row->ip);
            }
        } else
            if (@ExtraWatchHelper::requestGet('country')) {
                $country = urldecode(@ExtraWatchHelper::requestGet('country'));
                $values['name'] = _EW_GOALS_COUNTRY . ": $country";
                $values['country_condition'] = $country;
            } else
                if (@ExtraWatchHelper::requestGet('from') && @ExtraWatchHelper::requestGet('uri')) {
                    $from = urldecode(@ExtraWatchHelper::requestGet('from'));
                    $to = urldecode(@ExtraWatchHelper::requestGet('uri'));
                    $fromTitle = $this->extraWatch->visit->getTitleByUri($from);
                    if (@!$fromTitle) {
                        $fromTitle = $from;
                    }
                    $toTitle = $this->extraWatch->visit->getTitleByUri($to);
                    if (@!$toTitle) {
                        $toTitle = $to;
                    }
                    $values['name'] = _EW_STATS_FROM . ": $fromTitle " . " " . _EW_STATS_TO . ": $toTitle";
                    $values['came_from_condition'] = $from;
                    $values['uri_condition'] = $to;
                } else
                    if (@ExtraWatchHelper::requestGet('uri')) {
                        $to = urldecode(@ExtraWatchHelper::requestGet('uri'));
                        $toTitle = $this->extraWatch->visit->getTitleByUri($to);
                        if (!$toTitle) {
                            $toTitle = $to;
                        }
                        $values['name'] = _EW_STATS_TO . ": $toTitle";
                        $values['uri_condition'] = $to;
                    }

        $uri = @$row->uri;

        //START POST CODE MOD
        if (isset($postid)) {
            $query = sprintf("select * from #__extrawatch_uri_post where `id` = '%d' ", $postid);
            $rows = $this->extraWatch->visit->database->objectListQuery($query);

            $row = @$rows[0];

            if ($row && $row->type == 1) {
                $values['name'] = "Submits a form with variable: \"" . $row->key . "\" = \"" . $row->value . "\"";
                $values['post_var'] = $row->key;
                $values['post_condition'] = $row->value;
            } elseif ($row && $row->type == 2) {
                $values['name'] = "Opens page " . $uri . " with parameter: \"" . $row->key . "\" = \"" . $row->value . "\"";
                $values['get_var'] = $row->key;
                $values['get_condition'] = $row->value;
            }
        }
        //END POST CODE MOD

        $this->renderGoalForm(_EW_GOALS_INSERT, $values);
    }

    function renderGoalForm($action, $values = "")
    {
        require_once (JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "view" . DS . "goal.php");
    }

    function renderExportGoals($result = "") {

        include(JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "view".DS."exportxml.php");

    }

    function renderImportGoals($result = "") {

        include(JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "view".DS."importxml.php");

    }

}