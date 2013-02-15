<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 1.2.18
 * @revision 506
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by Matej Koval - All rights reserved!
 * @website http://www.extrawatch.com
 */

/** ensure this file is being included by a parent file */
if (!defined('_JEXEC') && !defined('_VALID_MOS')) {
  die('Restricted access');
}

class ExtraWatchSEOHTML
{

  public $extraWatch;
  public $extraWatchStatHTML;

  function __construct($extraWatch)
  {
    $this->extraWatch = $extraWatch;
    $this->extraWatchStatHTML = new ExtraWatchStatHTML($this->extraWatch);
  }

  
  function renderSEOReport($day, $fromEmail = FALSE, $renderAlsoNotChanged = FALSE)
  {
    $loadsPerDay = $this->extraWatch->stat->getKeyValueInGroupByDate(EW_DB_KEY_LOADS, EW_DB_KEY_LOADS, $day);
    if (!$loadsPerDay) {
      return ExtraWatchHelper::renderNoData();
    }

    $searchEngineHits = $this->extraWatch->seo->getTotalVisitsByKeyphrasesByDay($day);
    if ($loadsPerDay) {
      $percent = sprintf("%.2f", ($searchEngineHits / $loadsPerDay) * 100);
    }
    $output = $this->renderMostDynamicKeyphrases($renderAlsoNotChanged, $day - 1);
    $output .= "<table border='0'>";
    $output .= "<tr><td></td><td align='right'><b>" . _EW_SEO_TOTAL_VISITS_FROM_SEARCH_ENGINES . ": " . $searchEngineHits . " ($percent%)</b></td></tr>";

    $rows = $this->extraWatch->seo->getUri2KeyphrasePosUris($day);
    if ($rows)
      foreach ($rows as $row) {
        $isChange = FALSE;
        $total = $row->valueTotal;
        $percent = 0;
        if ($loadsPerDay) {
          $percent = sprintf("%.2f", ($total / $loadsPerDay) * 100);
        }
        $outputBlock = "<tr><td><h3><a href='" . $row->uri . "'>" . $row->title . "</a></h3><td align='right'><b>" . _EW_STATS_TOTAL . ": " . $total . " ($percent%)</b></td></tr><tr><td colspan='2'>";
        $rows2 = $this->extraWatch->seo->getUri2KeyphrasePosById($day, $row->uri2titleId);
        if ($rows2) {
          $outputBlock .= ("<table width='100%' style='border: 1px solid black'><tr><th>" . _EW_URI . "</th><th>" . _EW_POSITION . "</th><th>" . _EW_COUNT . "</th><th>" . _EW_EMAIL_REPORTS_PERCENT . "</th><th>" . _EW_EMAIL_REPORTS_1DAY_CHANGE . "</th><th>" . _EW_EMAIL_REPORTS_7DAY_CHANGE . "</th><th>" . _EW_EMAIL_REPORTS_28DAY_CHANGE . "</th></tr>");
          $i = 0;
          foreach ($rows2 as $row2) {
            if ($loadsPerDay) {
              $percent = sprintf("%.2f", ($row2->value / $loadsPerDay) * 100);
            }
            $isChangeForRow = $this->extraWatchStatHTML->isChange(EW_DB_KEY_SEARCH_RESULT_NUM, $row2->uri2keyphrasePosId, $day);
            if ($renderAlsoNotChanged || $isChangeForRow) {
              $outputBlock .= "<tr class='tableRow" . ($i++ % 2) . "'><td width='100%'>" . $this->renderKeyphraseLink($row2->keyphrase) . "</td>" .
                  "<td width='5%' align='right'>" . $row2->position .
                  "<td width='5%' align='right'>" . $row2->value . "</td>" .
                  "<td width='5%' align='right' style='color: #555'>(" . $percent . "%)</td>";
              $outputBlock .= $this->extraWatchStatHTML->renderDiffTableCellsAndIcon(EW_DB_KEY_SEARCH_RESULT_NUM, $row2->uri2keyphrasePosId, $day, $fromEmail);
              $outputBlock .= "</tr>";
              $isChange = TRUE;
            }
          }
          $outputBlock .= "</table><br/>";
        }
        if ($renderAlsoNotChanged || $isChange) {
          $output .= $outputBlock;
        }
        $output .= "</td></tr>";
      }
    $output .= "</table>";
    return $output;
  }

  /*
  function extraWatchRenderPositionChanges() {
      $output = "";
      $rows = $this->extraWatch->visit->getMostChangingKeywords();
      foreach ($rows as $row) {
          $rows2 = $this->extraWatch->visit->getAveragePositionChangesByUri2KeyphraseId($row->uri2keyphraseId);
          if ($rows2) {
              $output .= "<h3>".$row->title."</h3>";
              $lastAveragePostion = "";
              foreach ($rows2 as $row2) {
                  $changesOutput = "";
                  $changesCount = 0;
                  $averagePostion = $row2->averagePosition;
                  if ($lastAveragePostion != $averagePostion) {
                      if ($lastAveragePostion) {
                          $difference = ($lastAveragePostion - $averagePostion);
                          $changesOutput .= "Change  on date: ".ExtraWatchDate::getDateByDay($row2->date). " from $lastAveragePostion to $averagePostion - diff: $difference<br/>";
                          $changesCount++;
                      }
                      $lastAveragePostion = $averagePostion;
                  }
                  if ($changesCount) {
                      $output .= $this->renderKeyphraseLink($row->name)."<br/>";
                      $output .= $changesOutput;
                  }
              }

          }

      }
      return $output;
  }*/

  function renderMostDynamicKeyphrases($renderAlsoNotChanged = false, $day)
  {
    $output = "";
    $rows = $this->extraWatch->seo->getMostChangedKeyphrases();
    if (@$rows) {
      $output .= "<h2>" . _EW_SEO_MOST_DYNAMIC_KEYPHRASES . "</h2><table style='border: 1px solid black'><tr><th>" . _EW_STATS_KEYPHRASE . "</th><th>" . _EW_SEO_MIN_POSITION . "</th><th>" . _EW_SEO_AVG_POSITION . "</th><th>" . _EW_SEO_MIN_POSITION . "</th><th>" . _EW_COUNT . "</th><th>" . _EW_SEO_CHANGE . "</th><th></th><th>" . _EW_SEO_DATE_OF_LAST_CHANGE . "</th></th></tr>";
      $i = 0;
      foreach ($rows as $row) {
        $rows2 = $this->extraWatch->seo->getAveragePositionChangesByUri2KeyphraseIdLimited($row->uri2keyphraseId);
        if ($this->isChange($day, $rows2))  {
          $changeOutput = $this->renderPositionChangeDiff($rows2, $day);
          if (@$changeOutput) {
            $output .= sprintf("<tr class='tableRow%d'><td>%s</td><td align='center'>%d</td><td align='center'>%.2f</td><td align='center'>%d</td><td align='center'>" . $row->count . "</td>", ($i++ % 2), $this->renderKeyphraseLink($row->name), $row->minPosition, $row->averagePosition, $row->maxPosition);
            $output .= $changeOutput;
            $output .= "</tr>";
          }
        }
      }
      $output .= "</table><br/>";
    }
    return $output;
  }

  function isChange($day, $rows2) {
    if (sizeof($rows2) > 1 && $rows2[1]->date == $day) {
      return true;
    }
    return false;
  }

  function renderKeyphraseLink($keyphrase)
  {
    return "<a href='http://www.google.com/search?q=" . urlencode($keyphrase) . "' target='_blank'>" . $keyphrase . "</a>";
  }

  function renderPositionChangeDiff($rows, $day)
  {
    $output = "";
    if ($rows) {
      $lastAveragePosition = 0;
      foreach ($rows as $row) {
        $averagePosition = $row->averagePosition;
        if ($lastAveragePosition != $averagePosition) {
          if ($lastAveragePosition) {
            $diff = (float)($averagePosition - $lastAveragePosition);
            $diffColor = ExtraWatchTrendHTML::getDiffColor($diff, TRUE);
            $diffImg = "<img src='" . $this->extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/img/icons/trend_$diffColor.gif' border='0'/>";
            if ($day == $row->date) {
              $output .= sprintf("<td style='color: $diffColor' align='right'>%+.2f</td><td>$diffImg</td><td align='center'>%s</td>", $diff, ExtraWatchDate::getDateByDay($row->date));
            }
          }
          $lastAveragePosition = $averagePosition;
        }

      }
    }
    return $output;
  }
  
}


