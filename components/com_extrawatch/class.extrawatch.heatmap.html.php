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

class ExtraWatchHeatmapHTML
{

    var $extraWatch;
    var $extraWatchHeatmap;
    var $stat;
    var $extraWatchStatHTML;

    const TRUNCATE_LEN = 80;

    function ExtraWatchHeatmapHTML($database)
    {
        $this->extraWatch = new ExtraWatch();
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
        $trendsCells = $this->extraWatchStatHTML->renderDiffTableCellsAndIcon(DB_KEY_HEATMAP, $row->uri2titleId, $day);
        return sprintf("<tr class='tableRow" . ($i % 2) . "'><td align='center' style='color: %s'>%d</td><td>%s</td><td>%s</td>%s</tr>", $color, $row->count, $this->renderHeatmapLink($uri, $day, $title, "", true), ExtraWatchHelper::truncate($uri, 30), $trendsCells);
    }

    function renderHeatmapLink($uri, $day, $linkContent, $ip = "", $truncate = false)
    {
        if ($truncate) {
            $linkContent = ExtraWatchHelper::truncate($linkContent, 60);
        }
        return sprintf("<a href='%s?" . ExtraWatchHeatmap::HEATMAP_PARAM_NAME . "=%d&" . ExtraWatchHeatmap::HEATMAP_PARAM_DAY_NAME . "=%d&ip=%s&" . ExtraWatchHeatmap::HEATMAP_PARAM_HASH . "=%s' target='_heatmap'>%s</a>", $uri, 1, $day, $ip, $this->extraWatch->database->getEscaped($this->extraWatch->config->getRandHash()), $linkContent);
    }

}
