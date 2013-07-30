<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.2
 * @revision 927
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.extrawatch.com
 */

/** ensure this file is being included by a parent file */
if (!defined('_JEXEC') && !defined('_VALID_MOS'))
  die('Restricted access');

class ExtraWatchVisitHTML
{

  public $extraWatch;
  public $heatmap;
  public $heatmapHTML;

  function __construct($extraWatch)
  {
    $this->extraWatch = $extraWatch;
    $this->heatmap = new ExtraWatchHeatmap($this->extraWatch->database);
    $this->heatmapHTML = new ExtraWatchHeatmapHtml($this->extraWatch->database);
  }

  function getJoinedURIRows($bots)
  {
    return $this->extraWatch->visit->getJoinedURIRows($bots);
  }

  function renderGetVars($id)
  {
    $output = "";

    $query = sprintf("select * from #__extrawatch_uri_post where `uriid` = '%d' and `type` = '2' ", (int) $id);

    $rows = $this->extraWatch->visit->database->objectListQuery($query);
    if ($rows)
      foreach ($rows as $row) {
        $key = $row->key;
        $value = $row->value;

        $output .= "<tr><td>" . htmlspecialchars($key) . ": </td><td>" . htmlspecialchars($value) . "</td><td>" .
            "<a href='" . $this->extraWatch->config->renderLink("goals", "insert&id=" . $id . "&postid=" . $row->id) . "'
                        title='" . _EW_GOAL_ADD_SUBMITTED_VALUE . "'><img src='" . $this->extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/img/icons/goal.gif' />" . _EW_VISIT_URL_PARAMETER_GOAL . "</a></td></tr>";
      }

    return $output;
  }


  function renderPostVars($id)
  {
    if ($this->extraWatch->config->isFree()) {
      return "<tr><td><span class='jwDisabled'>" . _EW_ADMINHEADER_NA_IN_THIS_VERSION . "</span></td></tr>";
    }
    $output = "";

    $query = sprintf("select * from #__extrawatch_uri_post where `uriid` = '%d' and `type` = '1' ", (int) $id);

    $rows = $this->extraWatch->visit->database->objectListQuery($query);
    if ($rows)
      foreach ($rows as $row) {
        $key = $row->key;
        $value = $row->value;

        $output .= "<tr><td>" . htmlspecialchars($key) . ": </td><td>" . htmlspecialchars($value) . "</td><td>" .
            "<a href='" . $this->extraWatch->config->renderLink("goals", "insert&id=" . $id . "&postid=" . $row->id) . "' title='" . _EW_GOAL_ADD_SUBMITTED_VALUE . "'><img src='" . $this->extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/img/icons/goal.gif' />" . _EW_VISIT_SUBMITED_FROM_VARIABLE . "</a></td></tr>";
      }

    return $output;
  }

  /* visits */
  function renderTable($bots = FALSE)
  {
    $output = "";
    $rows = $this->getJoinedURIRows($bots);
    $agentNotPublishedMessage = $this->extraWatch->env->getAgentNotPublishedMsg($this->extraWatch->database);

    if ($bots == FALSE && ($agentNotPublishedMessage != FALSE) && sizeof($rows) == 0) {
      $output .= "<tr><td colspan='10'><span style='color:red; font-weight: bold;'>".$agentNotPublishedMessage."</span></td></tr> ";
      return $output;
    } else if (!$rows) {

    if (!$bots && _EW_CLOUD_MODE) {

		$noDataHTML = "<br/><span style='color: red; font-weight: bold;'>";
	    $noDataHTML .= "Your project currently contains no data. Please include the following HTML code into every page of your website you want to monitor:<br/><br/>";
		$noDataHTML .= nl2br(htmlentities($this->extraWatch->helper->renderHTMLCodeSnippet(_EW_PROJECT_ID)));
		$noDataHTML .= "</span>";
	
	} else {
	
		$noDataHTML = ExtraWatchHelper::renderNoData();
	  }

		$output .= "<tr><td colspan='5'>" . $noDataHTML . "</td></tr>";
	  

	  
	  
      return $output;
    }

    /** if visits are empty */


    $output = "";
    $i = 0xFF;

    $decrement = -1;

    $lastIp = ""; //to be able to hide flags / address for same IP in next rows
    $lastReferer = "";
    $lastColor = "";
    $rowNumber = 0;

    $dateToday = $this->extraWatch->date->jwDateToday();
    
    $uri2HeatmapClicksAssoc = $this->heatmap->heatmapForDayAsAsoc($dateToday);
    $maxClicksOfDay = $this->heatmap->getMaxClicksForDay($dateToday);
    

    if (@$rows)
      foreach ($rows as $row) {
        $rowNumber++;

        /* reset the values from previous iteration */

        $country = "none";
        $countryName = "";
        $countryUpper = "";
        $color = "";

        $flag = "<img src='" . $this->extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/img/flags/$country.png' title='$countryName' alt='$countryName'/>";
        if ($this->extraWatch->block->getBlockedIp($row->ip))
          $ipString = "<s>" . htmlspecialchars($row->ip) . "</s>";
        else
          $ipString = htmlspecialchars($row->ip);

        if ($i < 0xCC || $i <= 0x00) {
          $decrement = $decrement * -1;
        }
        $i = $i + $decrement;

        $color = sprintf("%x", $i) . sprintf("%x", $i) . sprintf("%x", $i);

        if ($bots == TRUE)
          $color = "ffffff";

        $country = $row->country;

        if (!$country) {
          $country = $this->extraWatch->helper->countryByIp($row->ip);
        }
        if (@ $country) {
          $countryName = $this->extraWatch->helper->countryCodeToCountryName($country);
          $flag = "<img src='" . $this->extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/img/flags/$country.png' title='$countryName' alt='$countryName'/>";
          $countryUpper = strtoupper($country);
        }

        $userAgent = htmlspecialchars($this->extraWatch->visit->getBrowserByIp($row->ip));

        $browser = "";
        $os = "";
        $browserIcon = "";
        $osIcon = "";

        if (@ $userAgent) {
          $browser = $this->extraWatch->referer->identifyBrowser(@ $userAgent);
          if (@ $browser)
            $browserIcon = $this->extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/img/icons/" . strtolower($browser) . ".gif";

          if (@ $browserIcon)
            $browser = "<img src='$browserIcon' alt='$userAgent' title='$userAgent' />";

          $os = json_decode(@$this->extraWatch->referer->identifyOSAsJSON(@ $userAgent));
          if (@ $os->name)
            $osIcon = $this->extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/img/icons/" . strtolower($os->icon);

          if (@ $osIcon)
            $os = sprintf("<img src='%s' alt='%s' title='%s'/>", $osIcon, $userAgent, $userAgent);
        }

        if ($bots == TRUE && $osIcon)
          continue; // bot icon fix
        if ($bots == TRUE) {
          $osIcon = $this->extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/img/icons/blank.gif";
          $browserIcon = $this->extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/img/icons/blank.gif";
          $browser = sprintf("<img src='%s' alt='%s' title='%s' />", htmlspecialchars($browserIcon), htmlspecialchars($userAgent), htmlspecialchars($userAgent));
          $os = sprintf("<img src='%s' alt='%s' title='%s'/>", htmlspecialchars($osIcon), htmlspecialchars($userAgent), htmlspecialchars($userAgent));
        }

        // sometimes happens that timestamp is nothing
        if (!$rows[0]->timestamp)
          continue;

        $username = "";
        if (@ $row->username) {
          $username = "<br/><a href='" . $this->extraWatch->config->getAdministratorIndex() . "?option=com_users&task=view&search=$row->username' style='color: black; text-decoration:none;'><i>" . @ htmlspecialchars($row->username) . "</i></a>";
        }
        $ipString = sprintf("<a id='%s' href='javascript:extrawatch_blockIpToggle(\"%s\");extrawatch_sendVisitsReq();' style='color:black;'>%s</a>", htmlspecialchars($row->ip), htmlspecialchars($row->ip), $ipString);

        
        $mapsIcon = "<img src='" . $this->extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/img/icons/map_icon.gif' border='0' " . $this->extraWatch->helper->getTooltipOnEvent() . "=\"ajax_showTooltip('" . $this->extraWatch->config->getLiveSite() . $this->extraWatch->env->getEnvironmentSuffix() . "components/com_extrawatch/ajax/tooltip.php?rand=" . $this->extraWatch->config->getRand() . "&ip=$row->ip&env=" . $this->extraWatch->config->getEnvironment() . "&projectId="._EW_PROJECT_ID."',this);return FALSE\"/>";

         $timeOfVisit = $this->extraWatch->helper->secondsToHumanFormat(@$row->timeDiff);

          $displayCountryFlag = FALSE;
        if ($lastIp != $row->ip) {
          $displayCountryFlag = TRUE;
          $lastIp = $row->ip;
          $rowNumber = 1;
        } else {
          $flag = ""; // do not display flag, ip if the IP is same sa previous
          $ipString = "";
        }

        if (!$displayCountryFlag) {
          $username = "";
          $browser = "";
          $os = "";
          $mapsIcon = "";
          $timeOfVisit = "";
        }

        if ($lastReferer != $row->referer) {
          $output .= $this->renderRefererRow($lastReferer, $color);
          $lastReferer = $row->referer;
          $lastColor = $color;
        }
        $dateOfVisit = ExtraWatchDate::date("d.m.Y", $row->timestamp);
        if (isset($this->lastDate) && $this->lastDate != $dateOfVisit) {
          $output .= "<tr><td style='background-color: #" . $color . ";'></td><td style='background-color: #" . $color . ";'></td><td style='background-color: #" . $color . ";'></td><td style='background-color: #" . $color . ";'></td><td style='background-color: #" . $color . ";'></td><td style='background-color: #" . $color . ";'></td><td style='background-color: #" . $color . ";'></td><td colspan='8' style='background-color: #" . $color . ";'><b>$dateOfVisit</b></td></tr>";
          $this->lastDate = $dateOfVisit;
        }
        $output .= "<tr><td valign='top' align='left' style='background-color: #$color'></td>
																		<td valign='top' align='left' style='background-color: #$color;'>" . @ $mapsIcon . "</td><td valign='top' align='left' style='background-color: #$color; color: #999999;'>";


        if (!$countryUpper) {
          $output .= "<a href='" . $this->extraWatch->config->renderLink("goals", "insert&country=" . @$countryUpper) . "' style='color: #999999;' title='" . _EW_VISITS_ADD_GOAL_COUNTRY . "'>" . @ $countryUpper . "</a>";
        }


        $output .= "</td><td valign='top' align='left' style='background-color: #$color;'>" . @ $flag . "</td>
																		<td valign='top' align='left' style='background-color: #$color;'>$ipString";


          $output .= "$username</td>
																		<td valign='top' align='left' style='background-color: #$color;'>" . @ $browser . "</td>
																		<td valign='top' align='left' style='background-color: #$color;'>" . @ $os . "</td>
																		<td valign='top' align='left' style='background-color: #$color;' width='100%'>";

        $dateOfVisit = ExtraWatchDate::date("d.m.Y", $row->timestamp);
        $day = $this->extraWatch->date->jwDateFromTimestamp($row->timestamp);
		
        $row->timestamp = ExtraWatchDate::date("H:i:s", $row->timestamp);
        $uriTruncated = $this->extraWatch->helper->truncate($row->uri);
        $row->title = $this->extraWatch->helper->truncate($row->title, $this->extraWatch->config->getConfigValue('EXTRAWATCH_TRUNCATE_VISITS'));
        $row->title = $this->extraWatch->helper->removeRepetitiveTitle($row->title);

        $inactiveClass = "";
        if ($row->inactive) {
            $inactiveClass = "class='extraWatchInactiveVisit'";
        }
        $output .= ("<div id='id$row->id' style='text-decoration: none;' $inactiveClass onmouseout=\"toggleElementVisibility('goal_" . $row->id . "',0);\"  onmouseover=\"toggleDiv('".$row->id."','".$row->ip."',1);\" style='background-color: #$color'>");

        $projectSite = $this->extraWatch->config->getProjectUrlByUsername(_EW_PROJECT_ID);
        $output .= ("$row->timestamp <a href='".$projectSite.$row->uri."' target='_blank' $inactiveClass>$row->title</a> $uriTruncated");

        
        $uri2titleId = $this->extraWatch->visit->getUriIdByUriName($row->uri);
        $userHeatmapClicks = $this->heatmap->getHeatmapClickNums($row->ip, $row->uri, ExtraWatchDate::jwDateFromTimestamp($row->timestamp));
        $uri2titleId = $this->extraWatch->visit->getUriIdByUriName($row->uri);
        if ($userHeatmapClicks > 0) {
          if (@$maxClicksOfDay) {
                $ratio = $userHeatmapClicks / $maxClicksOfDay;
          } else {
              $ratio = 1;
          }
          $userClicksColor = ExtraWatchHelper::rgbFromRatio($ratio);
          $output .= $this->heatmapHTML->renderHeatmapLink($row->uri, $uri2titleId, $day, "&nbsp;<img src='" . $this->extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/img/icons/click.png' title='" . _EW_HEATMAP_CLICK_OPEN . "'/> <span style='color: " . $userClicksColor . "' title='" . _EW_HEATMAP_CLICK_OPEN . "'>$userHeatmapClicks</span>", $row->ip);
        }

        $clicks = @$uri2HeatmapClicksAssoc[$row->uri];
        if (@$clicks) {
          if (@$maxClicksOfDay) {
            $ratio = $clicks / $maxClicksOfDay;
            $color = ExtraWatchHelper::rgbFromRatio($ratio);
          }
          if ($userHeatmapClicks > 0) {
            $output .= "&nbsp;" . _EW_HEATMAP_OF . "&nbsp;";
          }
          $output .= $this->heatmapHTML->renderHeatmapLink($row->uri, $uri2titleId, $day, "&nbsp;<img src='" . $this->extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/img/icons/click.png' title='" . _EW_HEATMAP_CLICK_OPEN . "'/> <span style='color: " . $color . "' title='" . _EW_HEATMAP_CLICK_OPEN . "'>$clicks</span>");
        }
        

        $paramData = $this->extraWatch->visit->areParamDataForUri($row->id);

        if ($paramData) {
          $output .= "<img src='" . $this->extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/img/icons/submit.png' />";
        }


        /* ad as goal link */
        $output .= ("<div id='goal_" . $row->id . "' style='display: none; margin: 0px; padding: 2px; left: 40%;' class='uriDetailDiv'>" . _EW_STATS_LOADING);

        $output .= ("</div>");
        if ($timeOfVisit) {
            $output .= "&nbsp;"._EW_TIME_BETWEEN_VISITS.":&nbsp;<img src='" . $this->extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/img/icons/clock.png' align=''/>&nbsp;$timeOfVisit";
        }
	    $output .= ("</div>");




        //TODO handle post data
        if ($paramData) {
          $postImage = "<div id='idp$row->id' onmouseout=\"toggleDiv('post_" . $row->id . "',0);\" onmouseover=\"toggleDiv('post_" . $row->id . "',1);\">";
        } else {
          $postImage = "";
        }

        $output .= $postImage;


        /* show only last URI, not all by user */
        if ($this->extraWatch->config->getCheckboxValue('EXTRAWATCH_ONLY_LAST_URI')) {
          break;
        }

        $output .= ("</td>");
        $output .= ("</tr>");

      }        

   
    $output .= @$this->renderRefererRow($lastReferer, $lastColor);

    unset($uri2HeatmapClicksAssoc);
 
    return $output;
  }

  function renderRefererRow($referer, $color)
  {
    if (!$referer) {
      return;
    }
    $output = "<tr>
        <td style='background-color: #" . $color . "'></td>
        <td style='background-color: #" . $color . "'></td>
        <td style='background-color: #" . $color . "'></td>
        <td style='background-color: #" . $color . "'></td>
        <td style='background-color: #" . $color . "'></td>
        <td style='background-color: #" . $color . "'></td>
        <td style='background-color: #" . $color . "'></td>
        <td style='background-color: #" . $color . "'>";

    $refererTruncated = $this->extraWatch->helper->truncate($referer);
    $output .= sprintf("<i style='color: gray;'> " . _EW_VISITS_CAME_FROM . ": <a href='%s' target='_blank' style='color: gray;' title='%s'>%s</a></i>", htmlspecialchars($referer), htmlspecialchars($referer), $refererTruncated);

    
    $position = $this->extraWatch->seo->extractGooglePageNumberFromReferer($referer);
    if (@$position) {
      $output .= "<i style='color: gray;'> " . _EW_POSITION . ":$position</i> ";
    }
    

    $phrase = $this->extraWatch->visit->extractPhraseFromUrl($referer);
    if (@$phrase) {
      $hostname = $this->extraWatch->visit->extractHostnameFromUrl($referer);
      $referer = $hostname . "/search?q=" . urlencode($phrase);
      $output .= sprintf("<br/><i style='color: gray;'>" . _EW_VISITS_CAME_FROM_KEYWORDS . ": [<a href='%s' target='_blank' style='color: gray;' title='%s'>%s</a>]</i>", htmlspecialchars($referer), htmlspecialchars($referer), htmlspecialchars(urldecode($phrase)));
    }
    $output .= "</tr>";

    return $output;

  }

  /* visits */
  function renderVisitors()
  {
    //$rows = $this->extraWatch->visit->getVisitors();
    $this->lastDate = "";
    $output = $this->renderTable(FALSE);
    return $output;
  }

  /* visits */
  function renderBots()
  {

    //$rows = $this->extraWatch->visit->getBots();
    $this->lastDate = "";
    $output = $this->renderTable(TRUE);

    return $output;
  }

}


