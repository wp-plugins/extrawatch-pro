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
if (!defined('_JEXEC') && !defined('_VALID_MOS')) die('Restricted access');

class ExtraWatchHTML
{

    var $extraWatch;

    function ExtraWatchHTML()
    {
        $this->extraWatch = new ExtraWatch();
    }

    function renderInputElement($key, & $color, $addToDescription = "")
    {

        if (!@ $color) {
            $color = "#f7f7f7";
        }
        else {
            $color = "";
        }

        $value = "";
        $value = $this->extraWatch->config->getConfigValue("EXTRAWATCH_" . $key);
        $defaultValue = @ constant("EXTRAWATCH_" . $key);

        $type = @ constant("TYPE_EXTRAWATCH_" . $key);
        if ((strcmp($value, $defaultValue)) && ($type != "checkbox") && ($type != "largetext")) {
            $changed = "<i>(" . _EW_SETTINGS_DEFAULT . ": <a href=\"javascript:setElementValueById('EXTRAWATCH_$key','$defaultValue');\">$defaultValue</a>" . ")</i>&nbsp;";
        }

        $desc = "";
        if ($type == "number" && !(is_numeric($value))) {
            $desc .= " <span style='color: red; font-weight: bold;'>" . _EW_NOT_NUMBER . "</span> ";
        }
        $desc .= constant("_EW_DESC_" . $key);
        $desc .= $addToDescription;

        $keyShortened = str_replace("EXTRAWATCH_", "", $key);
        /*********changes for load from language file*********************/
        if (defined('_EW_' . $keyShortened))
            $keyShortened = constant('_EW_' . $keyShortened);

        /*************changes for load from language file ends*************/
        $output = "<tr><td style='background-color: " . $color . ";' align='left'>$keyShortened</td><td style='background-color: " . $color . ";' align='center'>";

        $key = "EXTRAWATCH_" . $key;
        switch ($type) {

            case "select":
                {

                if ($value && $value != "Off")
                    $checked = "checked";
                else
                    $checked = "";
                $output .= "<select align='center' name='$key' id='$key' style='text-align:center;'>";

                $languages = $this->extraWatch->helper->getAvailableLanguages();
                foreach ($languages as $language) {
                    if ($value == $language) {
                        $selected = "selected";
                    } else {
                        $selected = "";
                    }
                    $output .= "<option align='center' style='text-align:center;' $selected>$language</option>";
                }
                $output .= "</select>";

                break;
                }
            case "checkbox":
                {

                if ($value && $value != "Off")
                    $checked = "checked";
                else
                    $checked = "";
                $output .= "<input type='checkbox' id='$key' name='$key' $checked/>";
                break;
                }
            case "text":
                {

                $output .= "<textarea id='$key' cols='15' rows='3' name='$key' style='text-align:center;'>$value</textarea>";
                break;
                }
            case "largetext":
                {
                $output .= "<textarea id='$key' cols='40' rows='20' name='$key' style='text-align:center;'>" . stripslashes($value) . "</textarea>";
                break;
                }
            default:
                {
                $output .= "<input type='text' id='$key' name='$key' value='$value' size='20' style='text-align:center;'/>";
                break;
                }

        }

        $output .= "</td><td style='background-color: " . $color . ";' align='left'>" . @ $changed . " $desc</td></tr>";
        return $output;
    }


    function renderPrint()
    {
        $group = @ ExtraWatchHelper::requestGet('group');
        $name = @ ExtraWatchHelper::requestGet('name');
        $date = @ ExtraWatchHelper::requestGet('date');
        $task = @ ExtraWatchHelper::requestGet('task');
        $action = @ ExtraWatchHelper::requestGet('action');

        $print = @ ExtraWatchHelper::requestGet('print');
        if (@ $print) {
            $output = "<script language='Javascript'>window.print();</script>";
        } else {
            $output = ("<table width='100%'><tr><td align='right'><a href='" . $this->extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/trendtooltip.php?rand=" . $this->extraWatch->config->getRand() . "&group=$group&name=$name&date=$date&print=1&env=".$this->extraWatch->config->getEnvironment()."' target='_blank'><img src='" . $this->extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/icons/print.gif' border='0' title='" . _EW_TOOLTIP_PRINT . "'/></a></td></tr></table>");
        }
        return $output;
    }

    function renderOnlineHelp($id)
    {
        //TODO: should be done separated
        if (@$this->extraWatch) {
            $liveSite = $this->extraWatch->config->getLiveSite();
        } else {
            $liveSite = $this->extraWatch->config->getLiveSite();
        }
        $site = $this->extraWatch->config->getLiveSiteWithSuffix();
        $output = "&nbsp;<a href='http://www.codegravity.com/projects/extrawatch#doc-$id' target='_blank'><img src='" . $site ."/components/com_extrawatch/icons/help.gif' border='0' title='" . _EW_TOOLTIP_HELP . ": $id'/></a>";
        return $output;
    }

    function renderCloseWindow()
    {
        $output = "<div align='right'><a href='javascript:ajax_hideTooltip();'>X " . _EW_TOOLTIP_WINDOW_CLOSE . "</a></div>";
        return $output;
    }

    function renderInputField($id, $values, & $color, $required = false)
    {
        if (!@ $values)
            $values = "";
        if (!@ $color)
            $color = "";

        $name = @constant("_EW_GOALS_" . $id);
        if ($values)
            $value = @ $values[strtolower($id)];

        if (!@ $color)
            $color = "#f7f7f7";
        else
            $color = "";

        $desc = @constant("_EW_DESC_GOALS_" . $id);
        if ($required == true) {
            $requiredText = "<span style='color: red;'>(* required)</span>&nbsp;";
        } else {
            $requiredText = "";
        }
        $output = "<td align='right' valign='top' width='150px;' bgcolor='$color'><b>$name :</b> </td><td valign='top' bgcolor='$color'><input type='text' size='40' name='$id' value='" . @ $value . "'/></td><td style='color: gray;' valign='top' align='left' bgcolor='$color'>$requiredText<i>$desc</i></td>";
        return $output;
    }

    function renderInputCheckBox($id, $values, & $color, $disabled = false, $required = false)
    {
        if (!@ $values)
            $values = "";
        if (!@ $color)
            $color = "";

        $name = @constant("_EW_GOALS_" . $id);
        if ($values)
            $value = @ $values[strtolower($id)];

        if (!@ $color)
            $color = "#f7f7f7";
        else
            $color = "";

        $desc = @constant("_EW_DESC_GOALS_" . $id);
        if ($required == true) {
            $requiredText = "<span style='color: red;'>(* required)</span>&nbsp;";
        } else {
            $requiredText = "";
        }
        if (@$value && $value != "Off")
            $checked = "checked";
        else
            $checked = "";
        if (!$disabled) {
            $output = "<td align='right' valign='top' width='150px;' bgcolor='$color'><b>$name :</b> </td><td valign='top' align='left' bgcolor='$color'><input type='checkbox' id='$id' name='$id' $checked/></td><td style='color: gray;' valign='top' align='left' bgcolor='$color'>$requiredText<i>$desc</i></td>";
        } else {
            $output = "<td align='right' valign='top' width='150px;' bgcolor='$color' class='jwDisabled' title='" . _EW_ADMINHEADER_NA_IN_THIS_VERSION . "'><b>$name :</b> </td><td valign='top' align='left' bgcolor='$color'><input type='checkbox' id='$id' name='$id' $checked disabled/></td><td style='color: gray;' valign='top' align='left' bgcolor='$color'>$requiredText<i>$desc</i></td>";
        }
        return $output;
    }


    function renderDateControl()
    {
        if (@ ExtraWatchHelper::requestGet('day')) {
            $day = @ ExtraWatchHelper::requestGet('day');
        } else {
            $day = $this->extraWatch->date->jwDateToday();
        }
        $prev = $day - 1;
        $next = $day + 1;
        $today = $this->extraWatch->date->jwDateToday();

        include ("view" . DS . "datecontrol.php");
    }

    function renderDateControlGet($task, $day = 0)
    {
        if (!$day) {
            if (@ ExtraWatchHelper::requestGet('day')) {
                $day = @ ExtraWatchHelper::requestGet('day');
            } else {
                $day = $this->extraWatch->date->jwDateToday();
            }
        }
        $today = $this->extraWatch->date->jwDateToday();
        $prev = $day - 1;
        $next = $day + 1;

        include ("view" . DS . "datecontrolget.php");
    }

    function renderAdminStyles()
    {
        require_once ("lang" . DS . $this->extraWatch->config->getLanguage() . ".php");
        require_once ("view" . DS . "adminstyles.php");
    }


    function renderResetData($result = "")
    {
        if ($result) {
            echo ("<h3>" . _EW_RESET_SUCCESS . "</h3>");
        } else {
            echo ("<h3>" . _EW_RESET_ERROR . "</h3>");
        }

    }

    function renderHeader()
    {
        // if ($this->extraWatch->config->getTrialVersionTimeLeft() > 0 || $this->extraWatch->config->isAdFree()) {
        require_once("view" . DS . "adminheader.php");
        // }
    }


    function renderBody($option)
    {
        require_once("view" . DS . "adminbody.php");
    }

    function renderSettings($result = "")
    {
        require_once("view" . DS . "settings.php");
    }


    function renderCredits()
    {
        require_once("view" . DS . "credits.php");
    }

    function renderAcceptLicense()
    {
        require_once("view" . DS . "license.php");
        return renderLicense($this->extraWatch);
    }

    function renderAdFreeLicense()
    {
        if ($this->extraWatch->config->isAdFree()) {
            require_once("view" . DS . "license-commercial.php");
            return renderLicense($this->extraWatch);
        } else {
            require_once("view" . DS . "license-free.php");
            return renderLicenseFree($this->extraWatch);
        }
    }


    function renderAntiSpam()
    {
        $extraWatchBlockHTML = new ExtraWatchBlockHTML($this->extraWatch);
        require_once("view" . DS . "antispam.php");
    }

    function renderStatus()
    {
        $extraWatchStatHTML = new ExtraWatchStatHTML($this->extraWatch);
        require_once("view" . DS . "status.php");
    }

    function renderUpdate()
    {
        require_once("view" . DS . "update.php");
    }

    function renderVisitsHistory()
    {
        $extraWatchVisitHistoryHTML = new ExtraWatchVisitHistoryHTML($this->extraWatch);
        require_once("view" . DS . "history.php");
    }

    function renderEmails()
    {
        if ($this->extraWatch->config->getConfigValue("EXTRAWATCH_EMAIL_REPORTS_ADDRESS") == "@") {
            $user = ExtraWatchHelper::getUser($this->extraWatch->env);
            $userEmail = $user->email;
            $this->extraWatch->config->saveConfigValue("EXTRAWATCH_EMAIL_REPORTS_ADDRESS", $userEmail);
        }
        $extraWatchStatHTML = new ExtraWatchStatHTML($this->extraWatch);
        require_once("view" . DS . "emails.php");
    }

    function renderTrialVersionInfo()
    {
        if (!$this->extraWatch->config->isAdFree()) {
            $timeLeft = $this->extraWatch->config->getTrialVersionTimeLeft();
            if ($timeLeft > 0) {
                return sprintf("<div style='border: 1px solid #77ADFF; background-color: #E5EFFF; width: 100%%; text-align:center'>" . _EW_EVALUATION_LEFT . "</div><br/>", $timeLeft);
            }
        }
    }

    function renderFlow()
    {
        require_once("view" . DS . "flow.php");
    }

    function renderSizes()
    {
        require_once("view" . DS . "sizes.php");
    }

    function renderSizeComponents()
    {
        require_once("view" . DS . "sizecomponents.php");
    }

    function renderSizeModules()
    {
        require_once("view" . DS . "sizemodules.php");
    }

    function renderSizeDatabase()
    {
        require_once("view" . DS . "sizedatabase.php");
    }

    function renderSEO()
    {
        $extraWatchStatHTML = new ExtraWatchStatHTML($this->extraWatch);
        require_once("view" . DS . "seo.php");
    }

    function renderHeatMapJS()
    {
        $extraWatchHeatmap = new ExtraWatchHeatmap($this->extraWatch->database);
        $uri = $this->extraWatch->helper->getURI(); //TODO we need to strip the parameters here out of URI !!!
        $uri = $extraWatchHeatmap->stripHeatmapGetParams($uri);
        $id = $this->extraWatch->visit->getUriIdByUriName($uri);
        require_once("js" . DS . "heatmap.js.php");
    }

    function renderHeatMap()
    {
        $extraWatchHeatmap = new ExtraWatchHeatmap($this->extraWatch->database);
        $extraWatchHeatmapHTML = new ExtraWatchHeatmapHTML($this->extraWatch->database);
        require_once("view" . DS . "heatmap.php");
    }

}

?>
