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

class ExtraWatchFlowHTML
{

    public $flow;
    public $visit;

    const TRUNCATE_LEN = 50;

    function __construct($flow)
    {
        $this->flow = $flow;
        $this->visit = new ExtraWatchVisit();
    }


    /*PRO_START*/
    /** presentation */
    function renderEdgeJs($flowId)
    {

        $rows = $this->flow->getFlowById($flowId);
        $sum = $this->flow->getSumOfOutgoingFlow($rows->from, $rows->to);
        $ratio = 0;
        if ($sum) {
            $ratio = $rows->count / $sum;
        }

        $hue = ExtraWatchHelper::hueFromRatio($ratio);
        $rgb = ExtraWatchHelper::HSV_TO_RGB($hue, 1, 1);
        if ($rgb) {
            $color = sprintf("#%02x%02x%02x", $rgb['R'], $rgb['G'], $rgb['B']);
        }
        $percent = $ratio * 100;
        return sprintf("graph.newEdge(node_%d, node_%d, {color: '%s'}, %.2f); // lightness: %d percent: %d count; $rows->count, sum: $sum\n", $rows->from, $rows->to, $color, $percent, $percent, $percent, $rows->count, $sum);
    }

    /** presentation */
    function renderEdgeTableRow($flowId, $tableRowStyle)
    {
        $offset = 1 / 4;
        $rows = $this->flow->getFlowById($flowId);
        $sum = $this->flow->getSumOfOutgoingFlow($rows->from, $rows->to);
        $ratio = 0;
        if ($sum) {
            $ratio = $rows->count / $sum;
        }

        $output = "";

        $hue = 1 - ($ratio * 3 / 4 + $offset);
        $rgb = ExtraWatchHelper::HSV_TO_RGB($hue, 1, 1);
        if ($rgb) {
            $color = sprintf("#%02x%02x%02x", $rgb['R'], $rgb['G'], $rgb['B']);
        }
        $fromUri = $this->visit->getTitleByUriId($rows->from);
        $fromTitle = $this->visit->getUriNameByUriId($rows->from);
        $toUri = $this->visit->getTitleByUriId($rows->to);
        $toTitle = $this->visit->getUriNameByUriId($rows->to);

        $output .= sprintf("<tr>
        <td style='background-color: " . "%s" . "'></td>
        <th class='%s'>%.2f%%</th>
        <td class='%s' title='%s'>%s</td>
        <td class='%s' title='%s'>%s</td>
        <th class='%s'>%d</th>
        <th class='%s'>%d</th>
    </tr>", $color,
            $tableRowStyle,
            (($ratio) * 100),
            $tableRowStyle,
            ExtraWatchHelper::truncate($fromUri, self::TRUNCATE_LEN),
            ExtraWatchHelper::truncate($fromTitle, self::TRUNCATE_LEN),
            $tableRowStyle,
            ExtraWatchHelper::truncate($toUri, self::TRUNCATE_LEN),
            ExtraWatchHelper::truncate($toTitle, self::TRUNCATE_LEN),
            $tableRowStyle,
            $rows->count,
            $tableRowStyle, $sum);

        return $output;
    }

    /** presentation logic */
    function renderPagesCombobox($selectedUriId)
    {

        if (!$selectedUriId) {
            $selectedUriId = $this->visit->getMaxCountUriId();
        }

        $output = "<select name='uriId' onchange='this.form.submit();'>";

        $rows = $this->flow->getMostPopularUriIdsAndTitles();

        if ($rows)
            foreach ($rows as $row) {
                if ($row->id == $selectedUriId) {
                    $selected = "selected";
                } else {
                    $selected = "";
                }
                $uri = ExtraWatchHelper::truncate($this->visit->getUriNameByUriId($row->id), self::TRUNCATE_LEN); //TODO get config value should be not called statically
                $title = ExtraWatchHelper::truncate($this->visit->getTitleByUriId($row->id), self::TRUNCATE_LEN);
                if (@$uri) {
                    $output .= "<option value='" . $row->id . "' $selected>" . $uri . " (" . $title . ") " . _EW_STATUS_DATABASE_TOTAL . ": " . $row->count . "</option>";
                }
            }

        $output .= "</select>";


        return $output;
    }


    /** presentation logic
     * UNUSED
     * @return string
     */
    function renderMostPopularUriReport()
    {

        $rows = $this->flow->getMostPopularUriIdsAndTitles();

        $output = "";
        foreach ($rows as $row) {

            $output .= $this->renderFlowTable($row->id, 5, 20);
        }

        return $output;
    }


    /** presentation logic */
    function renderOutgoingLinksCountCombobox($selectedOutgoingLinksCount)
    {

        $output = "<select name='outgoingLinksCount' onchange='this.form.submit();'>";

        for ($i = 2; $i <= 10; $i++) {
            if ($i == $selectedOutgoingLinksCount) {
                $selected = "selected";
            } else {
                $selected = "";
            }
            $output .= "<option value='" . $i . "' $selected>" . $i . " </option>";
        }

        $output .= "</select>";

        return $output;
    }

    /** presentation logic */
    function renderNestingLevelCombobox($selectedNestingLevel)
    {

        $output = "<select name='nestingLevel' onchange='this.form.submit();'>";

        for ($i = 0; $i <= 5; $i++) {
            if ($i == (int)$selectedNestingLevel) {
                $selected = "selected";
            } else {
                $selected = "";
            }
            $output .= "<option value='" . $i . "' $selected>" . (int)$i . " </option>";
        }

        $output .= "</select>";

        return $output;
    }

    /** presentation logic */
    function renderGraph($uriId, $outgoingLinks, $nestingLevel)
    {

        $outgoingLinks = $outgoingLinks - 1;
        $nodeArray = array();
        $edgeArray = array();
        $this->flow->retrieveFlow($uriId, $nodeArray, $edgeArray, $outgoingLinks, $nestingLevel);

        $edgesOutput = "";
        $nodesOutput = "";

        // print_r($nodeArray);
        foreach ($nodeArray as $key => $value) {
            $nodesOutput .= sprintf("var node_%d = graph.newNode({label: '%s', sublabel: '%s'});\n", $value,
                addslashes(htmlspecialchars_decode(ExtraWatchHelper::truncate($this->visit->getTitleByUriId($value), self::TRUNCATE_LEN))),
                addslashes(htmlspecialchars_decode(ExtraWatchHelper::truncate($this->visit->getUriNameByUriId($value), self::TRUNCATE_LEN))));
        }
        foreach ($edgeArray as $key => $value) {
            $edgesOutput .= $this->renderEdgeJs($value);
        }

        return $nodesOutput . $edgesOutput;
    }

    function renderFlowTable($selectedUriId, $outgoingLinks, $nestingLevel)
    {

        $nodeArray = array();
        $edgeArray = array();
        $this->flow->retrieveFlow($selectedUriId, $nodeArray, $edgeArray, $outgoingLinks, $nestingLevel);

        $output = "<table border='0' width='100%'><tr>
        <th class='tableRow0'>Color</th>
        <th class='tableRow0'>Percentage</th>
        <th class='tableRow0'>From</th>
        <th class='tableRow0'>To</th>
        <th class='tableRow0'>Count</th>
        <th class='tableRow0'>Sum</th>
        ";

        $i = 1;
        foreach ($edgeArray as $key => $value) {
            $tableRowStyle = "tableRow" . (int)($i % 2);
            $output .= $this->renderEdgeTableRow($value, $tableRowStyle);
            $i++;
        }
        if (!$edgeArray) {
            $output .= "<tr><td>" . ExtraWatchHelper::renderNoData() . "</td></tr>";
        }

        $output .= "</table>";


        return $output;
    }
    /*PRO_END*/

}


