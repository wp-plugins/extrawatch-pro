<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 1.2.18
 * @revision 234
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2012 by Matej Koval - All rights reserved!
 * @website http://www.codegravity.com
 */

/** ensure this file is being included by a parent file */
if (!defined('_JEXEC') && !defined('_VALID_MOS'))
  die('Restricted access');

class ExtraWatchStatHTML
{

  public $extraWatch;
  public $extraWatchTrendHTML;

  function __construct($extraWatch)
  {
    $this->extraWatch = $extraWatch;
    $this->extraWatchTrendHTML = new ExtraWatchTrendHTML($extraWatch);
  }

  function changeReferers($j, $row)
  {
    $groupTruncated = $this->extraWatch->helper->truncate($row->name, $this->extraWatch->config->getConfigValue('EXTRAWATCH_TRUNCATE_STATS'));
    $row->name = "<a href='http://$row->name' title='$row->name' target='_blank'>$groupTruncated</a>";
  }

  function changeURI($j, $row)
  {
    $groupTruncated = $this->extraWatch->helper->truncate($row->name, $this->extraWatch->config->getConfigValue('EXTRAWATCH_TRUNCATE_STATS'));
    $title = $this->extraWatch->visit->getTitleByUri($row->name);
    $uriEncoded = urlencode($row->name);
    $row->value = "<table><tr><td>" . $row->value . "</td><td><a href='" . $this->extraWatch->config->renderLink("goals", "action=insert&uri=$uriEncoded") . "' title='" . _EW_STATS_ADD_TO_GOALS . "'><img src='" . $this->extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/img/icons/goal.gif' border='0'/></a></td></tr></table>";

    //TODO: $row->name should respect the directory it's in

    $row->name = "<a href='$row->name' onmouseover=\"toggleDiv('uriDetailDiv$j',1);\" onmouseout=\"toggleDiv('uriDetailDiv$j',0);\">$groupTruncated</a><div id='uriDetailDiv$j' class='uriDetailDiv'><table><tr><td><b>$title</b></td></tr><tr><td><a href='" . $this->extraWatch->config->getLiveSite() . "$row->name' title='$row->name'>$row->name</a></td></tr></table></div>";
  }

  function changeBrowserOS($j, $row)
  {
    if ($row->name) {
      $icon = "<img src='" . $this->extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/img/icons/" . strtolower($row->name) . ".gif' />";
    }
    return @$icon;
  }

  function changeCountry($j, $row, $frontend)
  {
    if ($row->name) {
      $countryName = $this->extraWatch->helper->countryCodeToCountryName($row->name);
      if ($frontend && $this->extraWatch->config->getConfigValue('EXTRAWATCH_FRONTEND_COUNTRIES_UPPERCASE')) {
        $countryName = strtoupper($countryName);
      }
      $icon = "<img src='" . $this->extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/img/flags/" . strtolower($row->name) . ".png' title='$countryName' alt='$countryName'/>";
    }
    //TODO refactor this, looks ugly
    return array($countryName, $icon);
  }

  function changeGoals($j, $row)
  {
    $goalName = $this->extraWatch->goal->getGoalNameById($row->name);
    $groupTruncated = $this->extraWatch->helper->truncate($goalName, $this->extraWatch->config->getConfigValue('EXTRAWATCH_TRUNCATE_STATS'));
    if (@ $row->name) {
      $row->name = "<a href='" . $this->extraWatch->config->renderLink("goals", "action=edit&goalId=$row->name") . "' title='".htmlentities($goalName)."'>".htmlentities($groupTruncated)."</a>";
    }
  }

  function changeInternal($j, $row)
  {
    $inboundRow = $this->extraWatch->visit->getInternalNameById(@ $row->name);
    $from = @$inboundRow->from;
    $to = @$inboundRow->to;
    $fromEncoded = urlencode($from);
    $toEncoded = urlencode($to);
    $fromTruncated = $this->extraWatch->helper->truncate($from, $this->extraWatch->config->getConfigValue('EXTRAWATCH_TRUNCATE_STATS') - 5);
    $toTruncated = $this->extraWatch->helper->truncate($to, $this->extraWatch->config->getConfigValue('EXTRAWATCH_TRUNCATE_STATS') - 5);
    $row->value = "<table><tr><td>" . $row->value . "</td><td>
    <a href='" . $this->extraWatch->config->renderLink("goals", "action=insert&from=$fromEncoded&uri=$toEncoded") . "' title='" . _EW_STATS_ADD_TO_GOALS . "'>
    <img src='" . $this->extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/img/icons/goal.gif' border='0'/></a></td></tr></table>";

    $row->name = "-&gt;<a href='" . $this->extraWatch->config->getLiveSite() . "$to' target='_blank' onmouseover=\"toggleElementVisibility('internalDetailDiv$j',1)\" onmouseout=\"toggleElementVisibility('internalDetailDiv$j',0)\">$toTruncated</a>
        <div id='internalDetailDiv$j' class='internalDetailDiv'><table><tr><td colspan='3'>" . _EW_STATS_FROM . ": </td></tr><tr><td><b>" . $this->extraWatch->visit->getTitleByUri($from) . "</b></td></tr><tr><td><a href='" . $this->extraWatch->config->getLiveSite() . "/$from'>$from</a></td></tr><tr><td colspan='3'>" . _EW_STATS_TO . ": </td></tr><tr><td><b>" . $this->extraWatch->visit->getTitleByUri($to) . "</b></td></tr><tr><td><a href='" . $this->extraWatch->config->getLiveSite() . "/$to'>$to</a></td></tr></table></div>";


  }

  function changeUsers($j, $row)
  {
    $row->name = "<a href='" . $this->extraWatch->config->getAdministratorIndex() . "?option=com_users&task=view&search=$row->name'>$row->name</a>";
  }

  function changeKeywords($j, $row)
  {
    // to have characters like " instead of it's code
    // Make keyword clickable by Mikolaj Myszkowski
    $mykeyword = strip_tags(urldecode($row->name));
    $row->name = "<a href='http://www.google.com/search?q=" . $mykeyword . "' target='_blank' title='" . $mykeyword . "'>" . $this->extraWatch->helper->truncate($mykeyword) . "</a>";
  }

  function changeIP($j, $row)
  {
    if (@ $row->name) {
      $mapsIcon = "<img src='" . $this->extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/img/icons/map_icon.gif' border='0'  " . $this->extraWatch->helper->getTooltipOnEvent() . "=\"ajax_showTooltip('" . $this->extraWatch->config->getLiveSite() . "components/com_extrawatch/ajax/tooltip.php?rand=" . $this->extraWatch->config->getRand() . "&ip=" . @ $row->name . "',this);return FALSE\"/>";

      if ($this->extraWatch->block->getBlockedIp($row->name)) {
        $ipStrikedOut = "<s>" . $row->name . "</s>";
      } else {
        $ipStrikedOut = $row->name;
      }
      $blocked = $this->extraWatch->block->getBlockedIp($row->name);
      $country = "";
      $country = $this->extraWatch->helper->countryByIp($row->name);
      $countryName = $this->extraWatch->helper->countryCodeToCountryName($country);

      if (!$country) {
        $country = "none";
      }
      $ip = $row->name;
      $icon = "<table><tr><td>" . $mapsIcon . "</td><td><img src='" . $this->extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/img/flags/" . strtolower($country) . ".png' title='$countryName' alt='$countryName'/></td>";
      $row->name = "<td><a  id='$row->name' href='javascript:extrawatch_blockIpToggle(\"$row->name\");' style='color: black;'>" . $ipStrikedOut . "</a></td></tr></table>";

    }
  }

  //TODO need to implement caching on these keyphrases and store only id instead of full text
  function changeKeyphrase($j, $row)
  {
    // to have characters like " instead of it's code
    $keyPhrase = strip_tags(urldecode($row->name));
    $keyPhraseTruncated = $this->extraWatch->helper->truncate($keyPhrase);
    $row->name = "<a href='http://www.google.com/search?q=" . urlencode($keyPhrase) . "' target='_blank' title='" . $keyPhrase . "'>" . $keyPhraseTruncated . "</span></a>";
  }


  /* visit */
  function renderIntValuesByName($groupOriginal, $expanded = FALSE, $total = FALSE, $date = 0, $limit = 5, $frontend = FALSE)
  {

    $group = @ constant('EW_DB_KEY_' . strtoupper($groupOriginal));

    if (!$date) {
      $date = $this->extraWatch->date->jwDateToday();
    }

    if ($total) {
      $rows = $this->extraWatch->stat->getTotalIntValuesByName($group, $expanded, $limit);
      $count = $this->extraWatch->stat->getTotalCountByKey($group);
    } else {
      $rows = $this->extraWatch->stat->getIntValuesByName($group, $date, $expanded, $limit);
      $count = $this->extraWatch->stat->getCountByKeyAndDate($group, $date);
    }

    $i = 0xFF;

    $output = "";

    $j = 0;
    for ($k = 0; $k < sizeof($rows); $k++) {

      $row = $rows[$k];

      $origName = $row->name;

      if (@ !$total && @!$frontend) {
        $relDiff = $this->extraWatch->stat->getRelDiffOfTwoDays($date - 2, $date - 1, $group, $row->name);
        $diffOutput = $this->extraWatchTrendHTML->renderDiff($group, $row->name, $date - 1, $relDiff, 1, "$relDiff% - " . _EW_TOOLTIP_YESTERDAY_INCREASE);
      }

      $i -= 3;
      $color = sprintf("%x", $i) . sprintf("%x", $i) . sprintf("%x", $i);

      if ($count) {
        $percent = floor(($row->value / $count) * 1000) / 10;
      }
      else {
        $percent = 0;
      }

      switch (@$group) {

        case EW_DB_KEY_REFERERS :
          {
          $this->changeReferers($j, $row);
          break;
          }
        case EW_DB_KEY_URI :
          {
          $this->changeURI($j, $row);
          break;
          }
        case ($group == EW_DB_KEY_BROWSER or $group == EW_DB_KEY_OS) :
          {
          $icon = $this->changeBrowserOS($j, $row);
          break;
          }
        case EW_DB_KEY_COUNTRY :
          {
          //TODO refactor this, looks ugly
          $arrayCountryIcon = $this->changeCountry($j, $row, $frontend);
          if (@$arrayCountryIcon) {
            $countryName = $arrayCountryIcon[0];
            $icon = $arrayCountryIcon[1];
          }
          break;
          }
        case EW_DB_KEY_GOALS :
          {
          $this->changeGoals($j, $row);
          break;
          }
        case EW_DB_KEY_INTERNAL :
          {
          $this->changeInternal($j, $row);
          break;
          }
        case EW_DB_KEY_USERS :
          {
          $this->changeUsers($j, $row);

          break;
          }
        case EW_DB_KEY_KEYWORDS :
          {
          $this->changeKeywords($j, $row);
          break;
          }
        case EW_DB_KEY_IP :
          {
          //$this->changeIP($j, $row);
          break;
          }

        case EW_DB_KEY_KEYPHRASE :
          {
          $this->changeKeyphrase($j, $row);
          break;
          }
      }

      $trendsIcon = "<img src='" . $this->extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/img/icons/trend_icon.gif' border='0'  " . $this->extraWatch->helper->getTooltipOnEvent() . "=\"ajax_showTooltip('" . $this->extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/ajax/trendtooltip.php?rand=" . $this->extraWatch->config->getRand() . "&group=$group&name=" . urlencode($origName) . "&date=$date&env=".$this->extraWatch->config->getEnvironment()."',this);return FALSE\"/>";
      $progressBarIcon = $this->extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/img/icons/progress_bar.gif";

      $imgWidth = $this->sinusInsteadOfLinear(50, $percent);

      $color = "ffffff";
      if (@ $row->name) {
        if (!$total) {
          $output .= "<tr><td>" . @ $icon . "&nbsp;" . $row->name . "</td><td align='right'><table><tr><td align='right'>" . $row->value . "</td></tr></table></td><td> <table border='0'><tr><td>" . @ $diffOutput . "</td><td>" . @ $trendsIcon . "</td><td><img src='$progressBarIcon' width='" . $imgWidth . "' height='10' /></td><td align='left'>$percent%</td></tr></table></td></tr>";

        } else {
          if (!@ $frontend) {
            $output .= "<tr><td align='left' style='background-color: " . "#" . $color . ";'>" . @ $icon . "&nbsp;" . $row->name . "</td><td style='background-color: #" . $color . ";' align='right'>" . $row->value . "</td><td style='background-color: #" . $color . ";'> <table><tr><td><img src='$progressBarIcon' width='" . $imgWidth . "' height='10' /></td>
                        <td  " . $this->extraWatch->helper->getTooltipOnEvent() . "=\"ajax_showTooltip('" . $this->extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/ajax/trendtooltip.php?rand=" . $this->extraWatch->config->getRand() . "&group=$group&name=" . urlencode($origName) . "&date=$date&env=".$this->extraWatch->config->getEnvironment()."',this);return FALSE\">$percent%</td>
                        </tr></table></td></tr>";
          } else {
            $output .= "<tr><td valign='top' align='right' class='extrawatch'>$percent%</td><td valign='top' align='left' class='extrawatch'>" . @ $icon . "&nbsp;</td><td valign='top' align='left' class='extrawatch'>" . $countryName . "</td></tr>";
          }
        }
      }
      $j++;
    }


    if ($count > $limit && !$frontend)
      $output = "<tr><td colspan='4'>" . $this->renderExpand($groupOriginal, $total) . "</td></tr>" . $output;

    if (@ $count && !@ $frontend)
      $output .= "<tr><td colspan='5'><b>" . _EW_STATS_TOTAL . ":</b> " . @ $count . " </td></tr>";

    return $output;
  }


  /* visit */
  function renderIntValuesByNameForFrontend($groupOriginal, $expanded = FALSE, $total = FALSE, $date = 0, $limit = 5, $frontend = FALSE)
  {

    $group = @ constant('EW_DB_KEY_' . strtoupper($groupOriginal));

    $maxColumns = $this->extraWatch->config->getConfigValue("EXTRAWATCH_FRONTEND_COUNTRIES_MAX_COLUMNS");
    $maxRows = $this->extraWatch->config->getConfigValue("EXTRAWATCH_FRONTEND_COUNTRIES_MAX_ROWS");
    $countryNamesDisplayed = $this->extraWatch->config->getCheckboxValue("EXTRAWATCH_FRONTEND_COUNTRIES_NAMES");
    $flagsFirst = $this->extraWatch->config->getCheckboxValue("EXTRAWATCH_FRONTEND_COUNTRIES_FLAGS_FIRST");

    if ($maxColumns * $maxRows > $limit) { //override the limit if rows/columns set
      $limit = $maxColumns * $maxRows;
    }

    if (!$date) {
      $date = $this->extraWatch->date->jwDateToday();
    }

    if ($total) {
      $rows = $this->extraWatch->stat->getTotalIntValuesByName($group, $expanded, $limit);
      $count = $this->extraWatch->stat->getTotalCountByKey($group);
    } else {
      $rows = $this->extraWatch->stat->getIntValuesByName($group, $date, $expanded, $limit);
      $count = $this->extraWatch->stat->getCountByKeyAndDate($group, $date);
    }

    $i = 0xFF;

    $output = "";


    $j = 0;
    for ($k = 0; $k < sizeof($rows); $k++) {

      $currentColumn = $k % $maxColumns;
      $currentRow = floor($k / $maxColumns);
      $computed = $currentColumn * $maxRows + $currentRow;
      if ($computed <= ($maxColumns * $maxRows) && $currentRow < $maxRows) {
        $row = $rows[$computed];

        $origName = $row->name;

        $i -= 3;
        $color = sprintf("%x", $i) . sprintf("%x", $i) . sprintf("%x", $i);

        if ($count) {
          $percent = floor(($row->value / $count) * 1000) / 10;
        }
        else {
          $percent = 0;
        }

        switch (@$group) {

          case EW_DB_KEY_COUNTRY :
            {
            //TODO refactor this, looks ugly
            $arrayCountryIcon = $this->changeCountry($j, $row, $frontend);
            if (@$arrayCountryIcon) {
              $countryName = $arrayCountryIcon[0];
              $icon = $arrayCountryIcon[1];
            }
            break;
            }
        }

        if (@ $row->name) {

          if ($currentColumn == 0) {
            $output .= "<tr>";
          }

          if ($flagsFirst) {
            $output .= "<td valign='top' align='right' class='extrawatch'>" . @ $icon . "&nbsp;</td>";
            $output .= "<td valign='top' align='left' class='extrawatch'>$percent%</td>";
          } else {
            $output .= "<td valign='top' align='right' class='extrawatch'>$percent%</td>";
            $output .= "<td valign='top' align='left' class='extrawatch'>" . @ $icon . "&nbsp;</td>";
          }

          if ($countryNamesDisplayed) {
            $output .= "<td valign='top' align='left' class='extrawatch'>" . $countryName . "</td>";
          } else {
            $output .= "<td valign='top' align='left' class='extrawatch'></td>";
          }


          if ($currentColumn == $maxColumns - 1) {
            $output .= "</tr>";
          }

        }
        $j++;
      }
    }


    return $output;
  }


  function renderNightlyEmail()
  {
    $keysArray = array('goals', 'uri', 'referers', 'keywords', 'keyphrase', 'internal', 'country', 'ip', 'users', 'browser', 'os');
    $day = $this->extraWatch->date->jwDateToday();

    $totalRowCount = 0;
    foreach ($keysArray as $key) {
      $group = @ constant('EW_DB_KEY_' . strtoupper($key));
      $totalRowCount += $this->extraWatch->stat->getCountByKeyAndDate($group, $day - 1);
    }
    if (!$totalRowCount) {
      return ExtraWatchHelper::renderNoData();
    }

    $output = "<table>";
    $output .= "<tr><td><h3></h3></td><td align='center'>&nbsp;<u>" . _EW_EMAIL_REPORTS_VALUE . "</u></td><td align='center'>&nbsp;<u>" . _EW_EMAIL_REPORTS_PERCENT . "</u></td><td align='center'>&nbsp;<u>" . _EW_EMAIL_REPORTS_1DAY_CHANGE . "</u></td><td align='center'>&nbsp;<u>" . _EW_EMAIL_REPORTS_7DAY_CHANGE . "</u></td><td align='center'>&nbsp;<u>" . _EW_EMAIL_REPORTS_28DAY_CHANGE . "</u></td></tr>";
    $output .= "<tr><td>" . _EW_STATS_UNIQUE . "</td><td align='right'>" . $this->extraWatch->stat->getCountByKeyAndDate(EW_DB_KEY_UNIQUE, $day - 1) . "</td><td></td>" . $this->renderDiffTableCellsAndIcon(EW_DB_KEY_UNIQUE, EW_DB_KEY_UNIQUE, $day - 1, TRUE) . "</td></tr>";
    $output .= "<tr><td>" . _EW_STATS_LOADS . "</td><td align='right'>" . $this->extraWatch->stat->getCountByKeyAndDate(EW_DB_KEY_LOADS, $day - 1) . "</td><td></td>" . $this->renderDiffTableCellsAndIcon(EW_DB_KEY_LOADS, EW_DB_KEY_LOADS, $day - 1, TRUE) . "</td></tr>";
    ;
    $output .= "<tr><td>" . _EW_STATS_HITS . "</td><td align='right'>" . $this->extraWatch->stat->getCountByKeyAndDate(EW_DB_KEY_HITS, $day - 1) . "</td><td></td>" . $this->renderDiffTableCellsAndIcon(EW_DB_KEY_HITS, EW_DB_KEY_HITS, $day - 1, TRUE) . "</td></tr>";
    ;

    foreach ($keysArray as $key) {
      if ($key == 'ip' && !$this->extraWatch->config->getConfigValue('EXTRAWATCH_IP_STATS')) {
        continue;
      }
      $output .= nl2br($this->renderIntValuesByNameForEmail($key, TRUE, FALSE, $day, 10, FALSE, TRUE));

      $output .= "<tr><td colspan='4'>&nbsp;</td></tr>";
    }
    $output .= "</table>";
    return $output;
  }


  function sendNightlyEmail()
  {

    $output = $this->renderNightlyEmail();
    $domain = $this->extraWatch->config->getDomainFromLiveSite();
    $email = $this->extraWatch->config->getConfigValue("EXTRAWATCH_EMAIL_REPORTS_ADDRESS");
    $date = ExtraWatchDate::date("d.m.Y", ExtraWatchDate::getUserTimestamp() - 24 * 3600); // date of report from yesterday, not today);
    ExtraWatchHelper::sendEmail("$email", "$email", "ExtraWatch report - $domain - $date", $output);

    if ($this->extraWatch->config->getCheckboxValue("EXTRAWATCH_EMAIL_SEO_REPORTS_ENABLED")) {
      // old one: $outputSEOReport = "<table>".$this->renderSEOReport($this->extraWatch->date->jwDateToday()-1, TRUE)."</table>";
      $extraWatchSEOHTML = new ExtraWatchSEOHTML($this->extraWatch);
      $day = $this->extraWatch->date->jwDateToday();
      $outputSEOReport = $extraWatchSEOHTML->renderSEOReport($day - 1, TRUE);
      ExtraWatchHelper::sendEmail("$email", "$email", "ExtraWatch SEO report - $domain - $date", $outputSEOReport);
    }

    return $output;
  }


  /* visit */
  function renderIntValuesByNameForEmail($groupOriginal, $expanded = FALSE, $total = FALSE, $date = 0, $limit = 5, $frontend = FALSE)
  {

    $truncate = $this->extraWatch->config->getConfigValue("EXTRAWATCH_EMAIL_NAME_TRUNCATE");

    $group = @ constant('EW_DB_KEY_' . strtoupper($groupOriginal));
    $groupTranslated = @constant("_EW_STATS_" . strtoupper($groupOriginal));

    $output = "";

    if (!$date) {
      $date = $this->extraWatch->date->jwDateToday();
    }

    $onlyPercentHigherThan = $this->extraWatch->config->getConfigValue("EXTRAWATCH_EMAIL_PERCENT_HIGHER_THAN");

    $oneDayPositive = $this->extraWatch->config->getConfigValue("EXTRAWATCH_EMAIL_ONE_DAY_CHANGE_POSITIVE");
    $oneDayNegative = $this->extraWatch->config->getConfigValue("EXTRAWATCH_EMAIL_ONE_DAY_CHANGE_NEGATIVE");
    $sevenDayPositive = $this->extraWatch->config->getConfigValue("EXTRAWATCH_EMAIL_SEVEN_DAY_CHANGE_POSITIVE");
    $sevenDayNegative = $this->extraWatch->config->getConfigValue("EXTRAWATCH_EMAIL_SEVEN_DAY_CHANGE_NEGATIVE");

    $twentyEightDayPositive = $this->extraWatch->config->getConfigValue("EXTRAWATCH_EMAIL_TWENTY_EIGHT_DAY_CHANGE_POSITIVE");
    $twentyEightDayNegative = $this->extraWatch->config->getConfigValue("EXTRAWATCH_EMAIL_TWENTY_EIGHT_DAY_CHANGE_NEGATIVE");

    $rows = $this->extraWatch->stat->getIntValuesByName($group, $date - 1, $expanded, $limit); // -1 because of yesterday
    $count = $this->extraWatch->stat->getCountByKeyAndDate($group, $date - 1); // -1 because of yesterday

    $j = 0;

    if ($rows)
      foreach ($rows as $row) {

        $origName = $row->name;

        $relOneDayDiff = $this->extraWatch->stat->getRelDiffOfTwoDays($date - 2, $date - 1, $group, $row->name); //-2, -1 because we are rendering yesterday
        $relSevenDayDiff = $this->extraWatch->stat->getRelDiffOfTwoDays($date - 8, $date - 1, $group, $row->name); //-7, -1 because we are rendering yesterday -7
        $relTwentyEightDayDiff = $this->extraWatch->stat->getRelDiffOfTwoDays($date - 28, $date - 1, $group, $row->name); //-30, -1 because we are rendering yesterday -30

        if ($count) {
          $percent = floor(($row->value / $count) * 1000) / 10;
        }
        else {
          $percent = 0;
        }


        if (!$onlyPercentHigherThan || $percent > $onlyPercentHigherThan) {

          /** check boundaries */
          if (
            (
                (!$relOneDayDiff || ($relOneDayDiff <= $oneDayNegative)) ||
                (!$relOneDayDiff || ($relOneDayDiff >= $oneDayPositive))
            )

            &&
            (
                (!$relSevenDayDiff || ($relSevenDayDiff <= $sevenDayNegative)) ||
                (!$relSevenDayDiff || ($relSevenDayDiff >= $sevenDayPositive))
            )

            &&
            (
                (!$relTwentyEightDayDiff || ($relTwentyEightDayDiff <= $twentyEightDayNegative)) ||
                (!$relTwentyEightDayDiff || ($relTwentyEightDayDiff >= $twentyEightDayPositive))
            )

          ) {

            if ($relOneDayDiff > 0) {
              $oneDayDiffColor = "green";
              $oneDayDiffSign = "+";
            } else {
              $oneDayDiffColor = "red";
              $oneDayDiffSign = "";
            }

            if ($relSevenDayDiff > 0) {
              $sevenDayDiffColor = "green";
              $sevenDayDiffSign = "+";
            } else {
              $sevenDayDiffColor = "red";
              $sevenDayDiffSign = "";
            }
            if ($relTwentyEightDayDiff > 0) {
              $thirtyDayDiffColor = "green";
              $thirtyDayDiffSign = "+";
            } else {
              $thirtyDayDiffColor = "red";
              $thirtyDayDiffSign = "";
            }

            switch ($group) {
              case EW_DB_KEY_GOALS:
                {
                $row->name = $this->extraWatch->goal->getGoalNameById($row->name);
                break;
                }
              case EW_DB_KEY_INTERNAL:
                {
                $internal = $this->extraWatch->visit->getInternalNameById(@ $row->name);
                $from = $this->extraWatch->visit->getTitleByUri($internal->from);
                $to = $this->extraWatch->visit->getTitleByUri($internal->to);
                $internal->from = ExtraWatchHelper::truncate($internal->from, $truncate);
                $internal->to = ExtraWatchHelper::truncate($internal->to, $truncate);

                $row->name = "" . $internal->from . " -> <br/>" . $internal->to . " ";
                break;
                }
              default:
                {
                $row->name = ExtraWatchHelper::truncate($row->name, $truncate);
                break;

                }

            }

            if (@ $row->name && $relOneDayDiff != 0) {
              $output .= sprintf("<tr><td>%s</td><td align='right'>%.1f</td><td align='right'>%.1f%%</td><td align='right' style='color: $oneDayDiffColor'>$oneDayDiffSign%.1f%%</td><td align='right' style='color: $sevenDayDiffColor'>$sevenDayDiffSign%.1f%%</td><td align='right' style='color: " . $thirtyDayDiffColor . "'>$thirtyDayDiffSign%.1f%%</td></tr>",
                $row->name,
                $row->value,
                $percent,
                $relOneDayDiff,
                $relSevenDayDiff,
                $relTwentyEightDayDiff
              );
              $j++;
            }
          }
        }

      }

    if ($j) {
      $output = "<tr><td><h3>$groupTranslated</h3></td><td align='center'>&nbsp;<u>" . _EW_EMAIL_REPORTS_VALUE . "</u></td><td align='center'>&nbsp;<u>" . _EW_EMAIL_REPORTS_PERCENT . "</u></td><td align='center'>&nbsp;<u>" . _EW_EMAIL_REPORTS_1DAY_CHANGE . "</u></td><td align='center'>&nbsp;<u>" . _EW_EMAIL_REPORTS_7DAY_CHANGE . "</u></td><td align='center'>&nbsp;<u>" . _EW_EMAIL_REPORTS_28DAY_CHANGE . "</u></td></tr>" . $output;
    }

    return $output;
  }


  /**
   * percent not linear but by sinusoid approaching to 100%
   * @param  $maxWidth
   * @return float
   */
  function sinusInsteadOfLinear($maxWidth, $percent)
  {
    $pi = 3.141592653;
    return floor($maxWidth * sin($percent / 100 * $pi / 2));
  }

  /**
   * stats
   * upper side visits statistics - unique/loads/hits
   * @param unknown_type $week
   * @return unknown
   */
  function renderVisitsGraph($week = 0)
  {
    $output = "";

    $weekOfYear = ExtraWatchDate::getWeekFromTimestamp($week * 3600 * 24 * 7);
    $startDay = ExtraWatchDate::getWeekStartingDay($weekOfYear);

    $i = 0xFF;
    //$dateWeekStart = ExtraWatchDate::getDateByDay($startDay);

    $statsMax['unique'] = $this->extraWatch->stat->getMaxValueInGroupForWeek(EW_DB_KEY_UNIQUE, EW_DB_KEY_UNIQUE, $startDay);
    $statsMax['loads'] = $this->extraWatch->stat->getMaxValueInGroupForWeek(EW_DB_KEY_LOADS, EW_DB_KEY_LOADS, $startDay);
    $statsMax['hits'] = $this->extraWatch->stat->getMaxValueInGroupForWeek(EW_DB_KEY_HITS, EW_DB_KEY_HITS, $startDay);

    if (EXTRAWATCH_DEBUG) echo("Start day: $startDay " . ExtraWatchDate::getDateByDay($startDay));

    for ($day = $startDay; $day < $startDay + 7; $day++) {
      $i -= 3;
      $color = sprintf("%x", $i) . sprintf("%x", $i) . sprintf("%x", $i);

      if ($i % 2 == 0) {
        $color = "#f5f5f5";
      }
      else {
        $color = "#fafafa";
      }

      $percent = 0;

      $stats['unique'] = $this->extraWatch->stat->getKeyValueInGroupByDate(EW_DB_KEY_UNIQUE, EW_DB_KEY_UNIQUE, $day);
      $stats['loads'] = $this->extraWatch->stat->getKeyValueInGroupByDate(EW_DB_KEY_LOADS, EW_DB_KEY_LOADS, $day);
      $stats['hits'] = $this->extraWatch->stat->getKeyValueInGroupByDate(EW_DB_KEY_HITS, EW_DB_KEY_HITS, $day);

      $once = "";
      foreach ($stats as $key => $value) {


        $progressBarIcon = $this->extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/img/icons/progress_bar_$key.gif";

        $output .= "<tr><td style='background-color: " . $color . ";'>";
        $dow = ExtraWatchDate::getDateByDay($day, "D");
        if (EXTRAWATCH_DEBUG) echo("day of week: " . ($day * 3600 * 24) . " returns: $dow");
        if (@ !$once[$dow]) {
          $output .= substr(ExtraWatchDate::getDateByDay($day), 0, 6) . "&nbsp;" . $dow;
          $once[$dow] = 1;
        }
        $output .= "</td>";

        $ratio = 0;
        if ($stats['unique']) {
          $ratio = sprintf("%.2f", $stats['loads'] / $stats['unique']);
        }

        $percentWidth = 0;
        if ($statsMax[$key]) {
          if ($statsMax['loads'])
            $percent = floor(($value / $statsMax['loads']) * 145);
          $percentWidth = floor($percent);
        }
        if (@ $value) {
          switch ($key) {
            case 'hits' :
              {
              $fontColor = "#aaaaaa";
              $output .= "<td align='right' style='color:" . $fontColor . "; background-color: " . $color . ";'>" . $value . "</td><td style='background-color: " . $color . ";'> <table cellpadding='0' cellspacing='0' ><tr><td style='background-color: " . $color . ";'></td><td style='color:" . $fontColor . "; background-color: " . $color . ";'>&nbsp;</td></tr></table></td>";
              break;
              }
            case 'loads':
              {
              $fontColor = "#00C000";
              $output .= "<td align='right' style='color:" . $fontColor . "; background-color: " . $color . ";'>" . $value . "</td><td style='background-color: " . $color . ";'> <table cellpadding='0' cellspacing='0' ><tr><td style='background-color: " . $color . ";'><img src='$progressBarIcon' width='$percentWidth' height='10' /></td><td style='color:" . $fontColor . "; background-color: " . $color . ";'></td></tr></table></td>";
              break;
              }
            default:
              {
              $fontColor = "black";
              $output .= "<td align='right' style='color:" . $fontColor . "; background-color: " . $color . ";'>" . $value . "</td><td style='background-color: " . $color . ";'> <table cellpadding='0' cellspacing='0' ><tr><td style='background-color: " . $color . ";'><img src='$progressBarIcon' width='$percentWidth' height='10' /></td><td style='color:" . $fontColor . "; background-color: " . $color . ";'>&nbsp;$ratio</td></tr></table></td>";
              }
          }
        } else
          $output .= "<td align='right' style='background-color: " . $color . ";'></td><td align='right' style='background-color: " . $color . ";'></td>";

        $output .= "</tr>";

      }

    }
    $output .= "<tr><td colspan='3' align='right'>* <span style='color:#0000FF;'>" . _EW_STATS_UNIQUE . "</span>, <span style='color:#00C000;'>" . _EW_STATS_LOADS . "</span>, <span style='color:#aaaaaa;'>" . _EW_STATS_HITS . "</span></td></tr>";

    return $output;
  }


  /* stats */
  function renderExpand($element, $total = FALSE)
  {

    $elementSuffix = "";
    if (@$total) {
      $elementSuffix = "_total";
    }

    if (@ ExtraWatchHelper::requestGet($element . $elementSuffix) == "false" || !@ ExtraWatchHelper::requestGet($element . $elementSuffix)) {
      $operation = "expand";
    }
    else {
      $operation = "collapse";
    }

    $operationTranslated = constant("_EW_STATS_" . strtoupper($operation));
    $elementTranslated = constant("_EW_STATS_" . strtoupper($element));


    $output = "<a name='$element'></a><a href=\"javascript:extrawatch_expand('$element" . $elementSuffix . "')\" id='$element" . $elementSuffix . "'><img src='" . $this->extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/img/icons/$operation.gif' border='0' alt='$operation'/>$operationTranslated&nbsp;$elementTranslated</a>";

    return $output;
  }

  /* stats */
  function renderSwitched($element, $text, $value)
  {
    $output = "";
    if ($element != $value) {
      $output .= "<a href=\"javascript:extrawatch_setStatsType('$element');\" id='$element'>$text</a>";
    } else
      $output .= "$text</a>";

    return $output;
  }

  /* stats */
  function renderTabClass($name, $value)
  {
    if ($name == $value) {
      return "tab_active";
    }
    else {
      return "tab_inactive";
    }
  }

  /* stats */
  function renderFrontendStats($extraWatch)
  {

    $cssURL = $this->extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/css/extrawatch.css";
    $output = "<STYLE TYPE=\"text/css\" MEDIA=\"screen, projection\">
        <!--
        @import url(" . $cssURL . ");
        -->
        </STYLE>";

    $outputFirst = "";
    $outputSecond = "";
    if (@ $this->extraWatch->config->getConfigValue('EXTRAWATCH_FRONTEND_COUNTRIES')) {
      $cachedItem = $this->extraWatch->cache->getCachedItem("CACHE_FRONTEND_COUNTRIES");
      $cachedItem = $this->extraWatch->config->replaceHttpByHttps($cachedItem);
      if (@ $cachedItem) {
        $outputFirst .= stripslashes($cachedItem);
      } else {

        $numberOfCountries = @ $this->extraWatch->config->getConfigValue('EXTRAWATCH_FRONTEND_COUNTRIES_NUM');
        if (!$numberOfCountries) {
          $numberOfCountries = 5;
        }

        $ctryOutput = "<table border='0' class='extrawatch'>";
        $ctryOutputFetched = $this->renderIntValuesByNameForFrontend("country", FALSE, TRUE, 0, $numberOfCountries, TRUE);
        $ctryOutput .= $ctryOutputFetched;
        $ctryOutput .= "</table>";

        if ($ctryOutputFetched) {
          $this->extraWatch->cache->storeCachedItem("CACHE_FRONTEND_COUNTRIES", $ctryOutput);
        }
        $outputFirst .= $ctryOutput;
      }
    }

    if (@ $this->extraWatch->config->getConfigValue('EXTRAWATCH_FRONTEND_VISITORS')) {

      $cachedItem = $this->extraWatch->cache->getCachedItem("CACHE_FRONTEND_VISITORS");
      $cachedItem = $this->extraWatch->config->replaceHttpByHttps($cachedItem);
      if (@ $cachedItem) {
        $outputSecond .= stripslashes($cachedItem);
      } else {

        $todayDate = $this->extraWatch->date->jwDateToday();
        $yesterdayDate = $todayDate - 1;
        $dow = $this->extraWatch->date->dayOfWeek();
        $dom = $this->extraWatch->date->dayOfMonth();
        $numOfDaysActualMonth = ExtraWatchDate::date("t", ExtraWatchDate::getUTCTimestamp());
        $numOfDaysPrevMonth = ExtraWatchDate::date("t", ExtraWatchDate::getUTCTimestamp() - $numOfDaysActualMonth * 24 * 3600);
        $lastMonthsDate = $todayDate - $numOfDaysActualMonth;

        $timePeriodArray = array('TODAY', 'YESTERDAY', 'THIS_WEEK', 'LAST_WEEK', 'THIS_MONTH', 'LAST_MONTH', 'TOTAL');

        $visOutput = "";
        $visOutput .= "<table border='0' class='extrawatch'>";

        foreach ($timePeriodArray as $key) {

          if (!@$this->extraWatch->config->getConfigValue('EXTRAWATCH_FRONTEND_VISITORS_' . $key)) {
            continue; // isn't enabled
          }

          switch ($key) {
            case 'TODAY':
              {
              $value = $this->extraWatch->stat->getCountByKeyAndDate(EW_DB_KEY_UNIQUE, $todayDate);
              break;
              }
            case 'YESTERDAY':
              {
              $value = $this->extraWatch->stat->getCountByKeyAndDate(EW_DB_KEY_UNIQUE, $yesterdayDate);
              break;
              }
            case 'THIS_WEEK':
              {
              $value = $this->extraWatch->stat->getCountByKeyBetweenDates(EW_DB_KEY_UNIQUE, $todayDate - $dow, $todayDate);
              break;
              }
            case 'LAST_WEEK':
              {
              $value = $this->extraWatch->stat->getCountByKeyBetweenDates(EW_DB_KEY_UNIQUE, $todayDate - $dow - 7, $todayDate - $dow);
              break;
              }
            case 'THIS_MONTH':
              {
              $value = $this->extraWatch->stat->getCountByKeyBetweenDates(EW_DB_KEY_UNIQUE, $todayDate - $dom, $todayDate);
              break;
              }
            case 'LAST_MONTH':
              {
              $value = $this->extraWatch->stat->getCountByKeyBetweenDates(EW_DB_KEY_UNIQUE, $lastMonthsDate - $numOfDaysPrevMonth, $lastMonthsDate);
              break;
              }
            case 'TOTAL':
              {
              $totalFromSettings = $this->extraWatch->config->getConfigValue('EXTRAWATCH_FRONTEND_VISITORS_TOTAL_INITIAL');
              $totalReal = $this->extraWatch->stat->getTotalCountByKey(EW_DB_KEY_UNIQUE);
              if (@ $totalFromSettings) {
                /** use total from settings, but still append the real value as a comment */
                $value = ($totalFromSettings + $totalReal) . "<!-- $totalReal -->";
              } else {
                $value = $totalReal;
              }
              break;
              }

          }
          if (isset($value)) {
            $visOutput .= "<tr><td align='left' valign='top' class='extrawatch'>" . @constant("_EW_FRONTEND_" . $key) . ": </td><td align='left' valign='top'> " . @ $value . "</td></tr>";
          }
        }
        $visOutput .= "</table>";

        if (@ $value) {
          $this->extraWatch->cache->storeCachedItem("CACHE_FRONTEND_VISITORS", $visOutput);
        }
        $outputSecond .= $visOutput;
      }
    }
    // to be able to swap order of Countries/Visitors
    if (@ $this->extraWatch->config->getConfigValue('EXTRAWATCH_FRONTEND_COUNTRIES_FIRST')) {
      $output .= "" . $outputFirst . "<br/>" . $outputSecond . "";
    } else {
      $output .= "" . $outputSecond . "<br/>" . $outputFirst . "";
    }

    return $output;

  }

  /* stats */
  function renderFrontendUsers()
  {

    $output = "";
    $cachedItem = $this->extraWatch->cache->getCachedItem("CACHE_FRONTEND_USERS");
    if (@ $cachedItem) {
      $output .= stripslashes($cachedItem);
    } else {

      $users = $this->extraWatch->stat->getUsersForToday();
      $count = $this->extraWatch->stat->countUsersForToday();

      /** no users */
      if (@!$count) {
        $output .= "<!-- no users -->";
        return;
      }


      $output = "<h2 class='extraWatch'>" . _EW_STATS_USERS . "</h2>";

      $output .= "<table class='extraWatch'><tr><td><u>" . _EW_FRONTEND_USERS_MOST . " $count:</u></td></tr><tr><td>";
      $link = $this->extraWatch->config->getConfigValue('EXTRAWATCH_FRONTEND_USER_LINK');

      $i = 0;
      $userSize = sizeof($users);
      foreach ($users as $user) {
        $i++;
        if (@$link) {
          $linkOutput = str_replace("{user}", $user->name, $link);
          $output .= "<a href='" . $linkOutput . "'>";
        }
        $output .= htmlspecialchars($user->name);
        if (@$link) {
          $output .= "</a>";
        }
        if ($i < $userSize) {
          $output .= ", ";
        }
      }
      $output .= "</td></tr></table>";

      $this->extraWatch->cache->storeCachedItem("CACHE_FRONTEND_USERS", $output);
    }

    return $output;
  }

  /* stat */
  function renderBackToStats($result = "")
  {
    $output = "<a href='" . $this->config->renderLink() . "'> &lt;&lt; " . _EW_BACK . "</a>";
    return $output;
  }

  function renderPercentage($relDiff)
  {
    if (is_numeric($relDiff)) {
      if ($relDiff > 0) {
        $diffColor = "green";
        $diffSign = "+";
      } else {
        $diffColor = "red";
        $diffSign = "";
      }
      $output = sprintf("<span style='color: %s'>%s%.1f%%</span>", $diffColor, $diffSign, $relDiff);
    } else {
      $output = sprintf("<span style='color: grey'>%s</span>", $relDiff);
    }
    return $output;

  }


  /**
   * SEO Report
   * @param  $day
   * @return string|void
   */
  function renderSEOReport($day, $renderAsEmail = FALSE)
  {

    $rows = $this->extraWatch->seo->retrieveTopUrisReferedByKeyphrase($day);

    $output = "<table width='700px' border=\"0\">";
    $output .= "<tr><td colspan=\"5\"></td></tr>";

    if (!$rows) {
      $output .= ("<br/><br/><i>" . ExtraWatchHelper::renderNoData() . "</i>");
    } else {
      $output .= "<tr><th align=\"left\">" . _EW_STATS_KEYPHRASE . "</th><th>" . _EW_EMAIL_REPORTS_VALUE . "</th><th>perc.</th><th>" . _EW_EMAIL_REPORTS_1DAY_CHANGE . "</th><th>" . _EW_EMAIL_REPORTS_7DAY_CHANGE . "</th><th>" . _EW_EMAIL_REPORTS_28DAY_CHANGE . "</th></tr>";
      foreach ($rows as $row) {
        $totalIntValuesForDay = $this->extraWatch->stat->getCountByKeyAndDate(EW_DB_KEY_UNIQUE, $day);
        if (!$totalIntValuesForDay) {
          continue;
        }
        /* removing trailing / from uri to include it into link */
        $liveSite = $this->extraWatch->config->getLiveSite();
        $uri = $row->uri;
        if (strpos($uri, "/") == 0) { //starts with /
          $uri = substr($uri, 1);
        }
        $percentOfHitsPerDay = sprintf("%.2f%%", ($row->total / $totalIntValuesForDay) * 100);
        $output .= "<tr><td colspan=\"2\"><h4><a href='" . $liveSite . $uri . "' target=\"_blank\">" . $row->title . "</a></h4></td><td align=\"left\"><b>Hits: " . $row->total . "</b></td><td align=\"left\" colspan=\"3\">" . $percentOfHitsPerDay . " of traffic</td></tr>";

        $keyphrases = $this->extraWatch->seo->retrieveKeyphrasesForUri($day, $row->uriId);
        $group = EW_DB_KEY_URI2KEYPHRASE;
        foreach ($keyphrases as $keyphrase) {
          if (is_numeric($keyphrase->value)) {
            $percent = sprintf("(%.2f%%)", ($keyphrase->value / $row->total) * 100);
          } else {
            $percent = $keyphrase->value;
          }
          $oneDayDiff = $this->extraWatch->stat->getRelDiffOfTwoDays($day - 1, $day, EW_DB_KEY_URI2KEYPHRASE, $keyphrase->uri2keyphraseId);
          $sevenDayDiff = $this->extraWatch->stat->getRelDiffOfTwoDays($day - 7, $day, EW_DB_KEY_URI2KEYPHRASE, $keyphrase->uri2keyphraseId);
          $twentyEightDayDiff = $this->extraWatch->stat->getRelDiffOfTwoDays($day - 28, $day, EW_DB_KEY_URI2KEYPHRASE, $keyphrase->uri2keyphraseId);
          $oneDayDiffRendered = $this->renderPercentage($oneDayDiff);
          $sevenDayDiffRendered = $this->renderPercentage($sevenDayDiff);
          $twentyEightDayDiffRendered = $this->renderPercentage($twentyEightDayDiff);
          $origName = $keyphrase->uri2keyphraseId;

          $trendsIcon = "<img src='" . $this->extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/img/icons/trend_icon.gif' border='0'  " . $this->extraWatch->helper->getTooltipOnEvent() . "=\"ajax_showTooltip('" . $this->extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/ajax/trendtooltip.php?rand=" . $this->extraWatch->config->getRand() . "&group=$group&name=" . urlencode($origName) . "&date=$day&env=".$this->extraWatch->config->getEnvironment()."',this);return FALSE\"/>";

          $output .= ("<tr><td title='" . htmlspecialchars($keyphrase->name) . "'><a href='http://www.google.com/search?q=" . htmlspecialchars(urlencode($keyphrase->name)) . "'>" . htmlspecialchars(ExtraWatchHelper::truncate($keyphrase->name, 100)) . "</a></td>
                    <td style='width: 30px;' align='right'>" . htmlspecialchars($keyphrase->value) . "</td><td style='width: 20px' align='right'>$percent</td><td  align='center'>$oneDayDiffRendered</td><td align='center'>$sevenDayDiffRendered</td><td align='center'>$twentyEightDayDiffRendered</td>");

          if (!$renderAsEmail) {
            $output .= "<td>" . $trendsIcon . "</td>";
          }

          $output .= "</tr>";
        }
      }
    }
    $output .= "<tr><td>&nbsp;</td></tr><tr><td colspan=\"5\">";
    $output .= "</td></tr></table>";
    return $output;
  }

  function renderTrendsIcon($group, $origName, $day)
  {
    $output = "<img src='" . $this->extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/img/icons/trend_icon.gif' border='0'  " . $this->extraWatch->helper->getTooltipOnEvent() . "=\"ajax_showTooltip('" . $this->extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/ajax/trendtooltip.php?rand=" . $this->extraWatch->config->getRand() . "&group=$group&name=" . urlencode($origName) . "&date=$day&env=".$this->extraWatch->config->getEnvironment()."',this);return FALSE\"/>";
    return $output;
  }

  function isChange($group, $origName, $day)
  {
    $oneDayDiff = $this->extraWatch->stat->getRelDiffOfTwoDays($day - 1, $day, $group, $origName);
    $sevenDayDiff = $this->extraWatch->stat->getRelDiffOfTwoDays($day - 7, $day, $group, $origName);
    $twentyEightDayDiff = $this->extraWatch->stat->getRelDiffOfTwoDays($day - 28, $day, $group, $origName);
    if ($oneDayDiff != "-" || $sevenDayDiff != "-" || $twentyEightDayDiff != "-") {
      return TRUE;
    }
    return FALSE;
  }

  function renderDiffTableCellsAndIcon($group, $origName, $day, $noIcon = FALSE)
  {
    $oneDayDiff = $this->extraWatch->stat->getRelDiffOfTwoDays($day - 1, $day, $group, $origName);
    $sevenDayDiff = $this->extraWatch->stat->getRelDiffOfTwoDays($day - 7, $day, $group, $origName);
    $twentyEightDayDiff = $this->extraWatch->stat->getRelDiffOfTwoDays($day - 28, $day, $group, $origName);
    $oneDayDiffRendered = $this->renderPercentage($oneDayDiff);
    $sevenDayDiffRendered = $this->renderPercentage($sevenDayDiff);
    $twentyEightDayDiffRendered = $this->renderPercentage($twentyEightDayDiff);

    $trendsIcon = $this->renderTrendsIcon($group, $origName, $day);

    $output = ("<td align='center'>$oneDayDiffRendered</td>" .
        "<td align='center'>$sevenDayDiffRendered</td>" .
        "<td align='center'>$twentyEightDayDiffRendered</td>");
    if (!$noIcon) {
      $output .= "<td align='center'>$trendsIcon</td>";
    }
    return $output;
  }


}
