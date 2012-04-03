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

class ExtraWatchBlockHTML
{

    var $extraWatch;
    var $extraWatchStatHTML;

    function ExtraWatchBlockHTML($extraWatch)
    {
        $this->extraWatch = $extraWatch;
        $this->extraWatchStatHTML = new ExtraWatchStatHTML($extraWatch);
    }

    function renderBlockedInfo($renderUpdatesTraffic = false)
    {

        $countToday = $this->extraWatch->block->getBlockedCountByDate($this->extraWatch->date->jwDateToday());
        $output = "";
        if (true) {
            $output = sprintf("<br/><div style='border: 1px solid #ffff00; background-color: #ffffdd; width: 70%%;'>" . _EW_ANTISPAM_BLOCKED, ((int)$countToday), ((int)$this->extraWatch->block->getBlockedCountTotal()));
            if ($renderUpdatesTraffic) {
                $output .= ". ";
                $output .= _EW_TRAFFIC_AJAX . sprintf(": %.3f", ExtraWatchHelper::requestGet('traffic') / 1024 / 1024) . " MB";
            }
            $output .= "</div>";
        }

        return $output;
    }

    /* visit */
    function renderBlockedIPs($date = 0, $expanded = false, $displayedInStats = true)
    {

        $output = "";
        if (!$expanded) {
            $output .= "<a href='javascript:blockIpManually();'>" . (_EW_STATS_IP_BLOCKING_ENTER) . "</a><br/>";
        }

        $total = false;
        if (!@$date) {
            $total = true;
        }

        $count = $this->extraWatch->block->countBlockedIPs($date);

        if (!$count && !$displayedInStats) {
            $output = ExtraWatchHelper::renderNoData();
            $output .= $this->renderAntispamHowTo();
            return $output;
        }

        $limit = $this->extraWatch->config->getConfigValue('EXTRAWATCH_STATS_MAX_ROWS');

        $output .= "<tr><th></th><th></th><th>IP</th><th>" . strtolower(_EW_STATS_HITS) . "</th>";
        if (!$displayedInStats) {
            $output .= "<th>" . _EW_BLOCKING_BAD_WORD . "</th>";
            $output .= "<th>" . _EW_BLOCKING_REASON . "</th>";
        }
        $output .= "</tr>";

        if ($count > $limit && !$expanded) {
            $output = "<tr><td colspan='4'>" . $this->extraWatchStatHTML->renderExpand('ip_blocking_title', $total) . "</td></tr>";
        }
        if (@ $expanded) {
            $rows = $this->extraWatch->block->getBlockedIPs($date);
        } else {
            $rows = $this->extraWatch->block->getBlockedIPs($date, $limit);
        }

        $lastDate = 0;
        $i = 0;
        if (@ $rows) {
            foreach ($rows as $row) {
                $icon = "";
                if (!strstr($row->ip, "*")) {
                    if (!$row->country) {
                        $country = $this->extraWatch->helper->countryByIp($row->ip);
                        $this->extraWatch->block->updateCountryForBlockedIp($row->ip, $country);
                    } else {
                        $country = $row->country;
                    }
                    $countryName = $this->extraWatch->helper->countryCodeToCountryName($country);
                    if (!$country) {
                        $country = "none";
                    }
                    $icon = "<img src='" . $this->extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/flags/" . @ strtolower($country) . ".png' title='$countryName' alt='$countryName'/>";
                }

                $mapsIcon = "<img src='" . $this->extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/icons/map_icon.gif' border='0'  " . $this->extraWatch->helper->getTooltipOnEvent() . "=\"ajax_showTooltip('" . $this->extraWatch->config->getLiveSite() . $this->extraWatch->env->getEnvironmentSuffix() . "components/com_extrawatch/tooltip.php?rand=" . $this->extraWatch->config->getRand() . "&ip=" . @ $row->ip . "&env=" . $this->extraWatch->config->getEnvironment() . "',this);return false\"/>";

                if (!$displayedInStats && $lastDate != $row->date) {
                    $output .= "<tr><td colspan='4'><u>" . ExtraWatchDate::getDateByDay($row->date) . "</u></td></tr>";
                    $lastDate = $row->date;
                }

                $output .= "<tr class='tableRow" . ($i++ % 2) . "'><td align='center'>" . $mapsIcon . "</td><td align='center' title='$row->reason'>" . $icon . "</td><td align='left' title='$row->reason'>" . $row->ip . "</td><td align='center' title='$row->reason'>" . $row->hits . "</td>";

                if (!$displayedInStats) {
                    if (!$row->badWord) {
                        $spamWordAffected = $this->extraWatch->block->checkForSpamWord($row->reason);
                        if (@$spamWordAffected) {
                            $this->extraWatch->block->updateSpamWordForBlockedIp($row->ip, $spamWordAffected);
                            $row->badWord = $spamWordAffected;
                        }
                    }
                    $output .= "<td align='center' title='" . $row->badWord . "'>" . ExtraWatchHelper::truncate($row->badWord, 10) . "</td>";
                    $output .= "<td title=\"" . htmlspecialchars($row->reason) . "\">" . $this->highlightSpamWord($row->badWord, $row->reason) . "</td>";
                }

                $output .= "<td>";

                if (!$expanded) {
                    $output .= "<a  id='$row->ip' href='javascript:blockIpToggle(\"$row->ip\");' title='$row->reason'>" . _EW_BLOCKING_UNBLOCK . "</a>";
                } else {
                    $output .= "<a  id='$row->ip' href='" . $this->extraWatch->config->renderLink("antiSpam", "&action=toggleBlocking&ip=" . $row->ip) . "' title='$row->reason'>" . _EW_BLOCKING_UNBLOCK . "</a>";
                }

                $output .= "</td>";

                $output .= "</tr>";

            }
        }
        return $output;

    }

    function renderAntispamHowTo()
    {
        $output = "<br/><br/><div style='color: rgb(255, 174, 1); border: 1px solid rgb(255, 174, 1); padding: 5px; width: 70%; text-align: center;'>" .
            _EW_ANTISPAM_BLOCKING_TEXT .
            "</div>";
        return $output;
    }

    function highlightSpamWord($spamWord, $reason)
    {
        if ($spamWord) {
            $pos = strpos($reason, $spamWord);
            if ($pos) {
                $offset = $pos - 10;
                if (@$offset > 0) {
                    $reason = "..." . substr($reason, $offset, strlen($reason) - $offset);
                }
            }
            $reason = str_ireplace("$spamWord", "<b>$spamWord</b>", $reason);
        }
        return ExtraWatchHelper::truncate($reason, 40);
    }


}
