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
$extraWatch->block->checkPermissions();

require_once ("lang" . DS . $extraWatch->config->getLanguage() . ".php");

$uriId = ExtraWatchHelper::requestGet('uriId');
$ip = ExtraWatchHelper::requestGet('ip');

$uriIdVisitRow = $extraWatch->visit->getJoinedURIRowById($uriId);

$extraWatchVisitsHTML = new ExtraWatchVisitHTML($extraWatch);
$extraWatchHeatmapHTML = new ExtraWatchHeatmapHTML($extraWatch->database);

$output = "";

$output .= ("
        <a href='javascript:blockIpToggle(\"$ip\");'><img src='" . $extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/icons/block.png' />" . _EW_VISIT_BLOCK_IP . "</a><br/>
        <a href='" . $extraWatch->config->renderLink("goals", "&action=insert&id=" . $uriId) . "' '" . _EW_VISIT_ADD_PAGE . "'><img src='" . $extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/icons/goal.gif' />" . _EW_VISIT_ADD_PAGE . "</a>");

$getData = $extraWatchVisitsHTML->renderGetVars($uriId);
$postData = $extraWatchVisitsHTML->renderPostVars($uriId);

$output .= "<table>";
if ($getData) {
    $output .= "<tr><td><br/><u>" . _EW_VISIT_URL_PARAMETERS . "</u></td>" . $getData;
}
if ($postData) {
    $output .= "<tr><td><br/><u>" . _EW_VISIT_SUBMITED_FIELDS . "</u></td>" . $postData;
}
$output .= "</table></div></div>";

echo($output);

?>
