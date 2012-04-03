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

include_once("includes.php");

$extraWatch = new ExtraWatch();
//$extraWatch->block->checkPermissions();

require_once ("lang" . DS . $extraWatch->config->getLanguage() . ".php");

$action = $extraWatch->helper->requestGet("action");
$uri2titleId = $extraWatch->helper->requestGet("uri2titleId");
$w = $extraWatch->helper->requestGet("w");
$h = $extraWatch->helper->requestGet("h");
$day = $extraWatch->helper->requestGet("day");
$ip = $extraWatch->helper->requestGet("ip");

$randHash = $extraWatch->helper->requestGet(ExtraWatchHeatmap::HEATMAP_PARAM_HASH);
if (!$extraWatch->config->isPermittedWithHash($randHash)) {
    die("Unauthorized access");
}

switch ($action) {
    case 'getHeatMap':
        {
        echo $extraWatch->heatmap->getHeatmapClicksByUri2TitleId($uri2titleId, $w, $h, $day, $ip);
        break;
        }


    case 'click':
        {
        $x = $extraWatch->helper->requestGet("x");
        $y = $extraWatch->helper->requestGet("y");
        $xpath = $extraWatch->helper->requestGet("xpath");
        $extraWatch->heatmap->insertHeatmapClick($uri2titleId, $x, $y, $w, $h, $xpath);
        break;
        }


}
?>
