<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.1
 * @revision 788
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.extrawatch.com
 */

/** ensure this file is being included by a parent file */
if (!defined('_JEXEC') && !defined('_VALID_MOS'))
    die('Restricted access');

class ExtraWatchHeatmapHTML
{

    public $extraWatch;
    public $extraWatchHeatmap;
    public $stat;
    public $extraWatchStatHTML;
    public $projectSite;

    const TRUNCATE_LEN = 80;

  function __construct($database)
  {
    $this->extraWatch = new ExtraWatchMain();
    $this->extraWatchHeatmap = new ExtraWatchHeatmap($database);
    $this->visit = new ExtraWatchVisit();
    $this->extraWatchStat = new ExtraWatchStat($database);
    $this->extraWatchStatHTML = new ExtraWatchStatHTML($this->extraWatch);
  }

    
    function renderHeatmapTable($day)
    {
        $rows = $this->extraWatchHeatmap->getTopHeatmapUris($day, 50);
        if (!$rows) {
            return ExtraWatchHelper::renderNoData();
        }
        $maxClicksForDay = $this->extraWatchHeatmap->getMaxClicksForDay($day);

        $output = sprintf("<table style='border: 1px solid black'><tr><th>%s</th><th>%s</th><th>%s</th><th>%s</th><th>%s</th><th>%s</th></tr>", _EW_HEATMAP_CLICKS, _EW_HEATMAP_TITLE, _EW_URI, _EW_EMAIL_REPORTS_1DAY_CHANGE, _EW_EMAIL_REPORTS_7DAY_CHANGE, _EW_EMAIL_REPORTS_28DAY_CHANGE);

        $i = 0;
        if ($rows)
            foreach ($rows as $row) {
                if (@$row->uri2titleId) {
                    $output .= $this->renderHeatmapTableRow($row, $day, $maxClicksForDay, $i);
                    $i++;
                }
            }
        $output .= "</table>";

        return $output;
    }

    function renderHeatmapTableRow($row, $day, $maxClickForDay, $i)
    {
        $uri = $this->visit->getUriNameByUriId($row->uri2titleId);
        $title = ExtraWatchHelper::truncate($this->visit->getTitleByUriId($row->uri2titleId), self::TRUNCATE_LEN); //TODO get config value should be not called statically
        $ratio = $row->count / $maxClickForDay;
        $color = ExtraWatchHelper::rgbFromRatio($ratio);
        $trendsCells = $this->extraWatchStatHTML->renderDiffTableCellsAndIcon(EW_DB_KEY_HEATMAP, $row->uri2titleId, $day);
        return sprintf("<tr class='tableRow" . ($i % 2) . "'><td align='center' >%s</td><td align='center' style='color: %s'>%d</td><td>%s</td><td>%s</td>%s</tr>",
            $this->renderHeatmapLink($uri, $row->uri2titleId, "", "all", "", TRUE),
            $color, $row->count, $this->renderHeatmapLink($uri, $row->uri2titleId, $day, $title, "", TRUE),
            ExtraWatchHelper::truncate($uri, 30), $trendsCells);
    }

    function renderHeatmapLink($uri, $uri2titleId, $day, $linkContent, $ip = "", $truncate = FALSE)
    {
        if ($truncate) {
            $linkContent = ExtraWatchHelper::truncate($linkContent, 60);
        }

        $separator = "?"; // if there already is a question mark in the REQUEST_URI
        if (strstr($uri, "?")) {
            $separator = "&";
        }
        return sprintf("<a href='%s". $separator . ExtraWatchHeatmap::HEATMAP_PARAM_NAME . "=%d&" . ExtraWatchHeatmap::HEATMAP_PARAM_DAY_NAME . "=%d&ip=%s&" . ExtraWatchHeatmap::HEATMAP_PARAM_HASH . "=%s&uri2titleId=%d' target='_heatmap'>%s</a>", $uri, 1, $day, $ip, $this->extraWatch->database->getEscaped($this->extraWatch->config->getRandHash()), $uri2titleId, $linkContent);
    }

    function renderMostClickedHTMLElementsTable($day) {
        $rows = $this->extraWatchHeatmap->getMostClickedHTMLElements($day);

        $output = "<table style='border: 1px solid black'>";
        $output .= sprintf("<tr><th>%s</th><th>%s</th><th>%s</th><th>%s</th><th>%s</th><th>%s</th><th>%s</th></tr>", _EW_HEATMAP_CLICKS, _EW_HEATMAP_TITLE, "xpath", "add to goals",_EW_EMAIL_REPORTS_1DAY_CHANGE, _EW_EMAIL_REPORTS_7DAY_CHANGE, _EW_EMAIL_REPORTS_28DAY_CHANGE);
        $i = 0;

        if (@$rows) {
            $maxClicksForDay = $this->extraWatchHeatmap->getMaxClicksForDay($day);
            foreach($rows as $row) {
                $trendsCells = $this->extraWatchStatHTML->renderDiffTableCellsAndIcon(EW_DB_KEY_HTML_ELEMENT, $row->xpath, $day);

                $ratio = $row->clickCount / $maxClicksForDay;
                $color = ExtraWatchHelper::rgbFromRatio($ratio);

				$highlightElementLink = sprintf("<a href='%s?". ExtraWatchHeatmap::HEATMAP_PARAM_NAME . "=%d&" . ExtraWatchHeatmap::HEATMAP_PARAM_HASH . "=%s&xpath=%s' target='_heatmap'>%s</a>", $this->projectSite.$row->uri, 1, $this->extraWatch->database->getEscaped($this->extraWatch->config->getRandHash()), urlencode($row->xpath), ExtraWatchHelper::truncate($row->xpath));
                $output .= "<tr  class='tableRow" . ($i % 2) . "'>".
                    "<td align='center' style='color: ".$color."'>".$row->clickCount."</td>".
                    "<td><a href='".$this->projectSite.$row->uri."' title='".htmlspecialchars($row->title)."' target='_blank'>".ExtraWatchHelper::truncate($row->title)."</a></td>".
                    "<td title='".htmlspecialchars($row->xpath)."'>". $highlightElementLink. "</td>".
                    "<th><a href='" . $this->extraWatch->config->renderLink("goals", "insert&clicked_element_xpath_condition=".urlencode($row->xpath)."") . "' title='" . _EW_STATS_ADD_TO_GOALS . "'><img src='" . $this->extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/img/icons/goal.gif' border='0'/></a></th>".
                    $trendsCells.
                    "</tr>";
                $i++;
            }
        }
        $output .= "</table>";

        return $output;
    }

    
}
