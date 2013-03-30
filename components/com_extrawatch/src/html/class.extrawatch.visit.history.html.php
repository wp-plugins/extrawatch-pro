<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.0
 * @revision 593
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.extrawatch.com
 */

/** ensure this file is being included by a parent file */
if (!defined('_JEXEC') && !defined('_VALID_MOS'))
  die('Restricted access');

class ExtraWatchVisitHistoryHTML extends ExtraWatchVisitHTML
{

  public $extraWatch;

  function __construct($extraWatch)
  {
    parent::__construct($extraWatch);
    $this->extraWatch = $extraWatch;
    $this->visitHistory = new ExtraWatchVisitHistory($extraWatch);
  }

  /* visits */
  function renderVisitors()
  {
    //$rows = $this->visitHistory->getVisitors();
    $this->lastDate = "";
    $output = $this->renderTable(FALSE);

    return $output;
  }

  function getJoinedURIRows($ip)
  {
    return $this->visitHistory->getJoinedURIRows($ip);
  }

  function renderPageLink($pageNum, $name, $actualpageNum, $disabled = FALSE)
  {
    $output = "";
    if (!isset($pageNum) || $disabled == TRUE || (isset($actualpageNum) && $actualpageNum == $pageNum)) {
      $output .= " " . $name . " ";
    } else {
      $output .= "<a href='" . $this->extraWatch->config->renderLink("history", "&pageNum=$pageNum") . "'/>" . $name . "</a> ";
    }
    return $output;
  }

  function renderHistoryNavigation()
  {
    $pageNumFromRequest = (int)@ExtraWatchHelper::requestGet('pageNum');
    $increment = $this->extraWatch->config->getConfigValue('EXTRAWATCH_HISTORY_MAX_VALUES');
    $count = $this->visitHistory->getHistoryCount();
    $maxPageCount = 0;
    if ((int) $increment) {
      $maxPageCount = floor($count / $increment);
    }
    $maxPages = 20;

    if (!$pageNumFromRequest) {
      $pageNumFromRequest = 0;
    }
    $output = "";
    $output .= "<table width='100%'><tr><td>";

    if (isset($pageNumFromRequest) && $pageNumFromRequest > 0) {
      $pageNumPrev = $pageNumFromRequest - 1;
    }
    $output .= $this->renderPageLink(@$pageNumPrev, "&lt;&lt;" . _EW_HISTORY_PREVIOUS, @$pageNumFromRequest);

    $output .= $this->renderPageLink(0, 0, $pageNumFromRequest) . " ... ";


    $j = 0;
    for ($i = $pageNumFromRequest - floor($maxPages / 2); $i < $maxPageCount; $i++) {
      if ($i > 0 && $i < $maxPageCount) {
        $pageNum = $i;
        $output .= $this->renderPageLink($pageNum, $pageNum, $pageNumFromRequest);
        if ($j > $maxPages) {
          break;
        }
        $j++;
      }
    }
    $output .= "... " . $this->renderPageLink($maxPageCount, $maxPageCount, $pageNumFromRequest);

    if (isset($pageNumFromRequest) && $pageNumFromRequest < $maxPageCount) {
      $pageNumNext = $pageNumFromRequest + 1;
    }
    $output .= $this->renderPageLink(@$pageNumNext, _EW_HISTORY_NEXT . "&gt;&gt;", $pageNumFromRequest);

    $output .= "</td></tr></table>";

    echo($output);
  }


}
