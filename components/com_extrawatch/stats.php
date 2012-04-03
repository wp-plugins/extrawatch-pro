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
require_once ("lang" . DS . $extraWatch->config->getLanguage() . ".php");

$t1 = time() + microtime();

$extraWatchHTML = new ExtraWatchHTML();
$extraWatchStatHTML = new ExtraWatchStatHTML($extraWatch);
$extraWatchBlockHTML = new ExtraWatchBlockHTML($extraWatch);

$extraWatch->block->checkPermissions();

$last = $extraWatch->visit->getLastVisitId();

//$params = new MosParameters("");
$thisWeek = $extraWatch->date->getWeekSince1970($extraWatch->date->getUserTimestamp());
if (@ ExtraWatchHelper::requestGet('day')) {
    $day = @ ExtraWatchHelper::requestGet('day');
} else {
    $day = $extraWatch->date->jwDateToday();
}

if (@ ExtraWatchHelper::requestGet('week')) {
    $week = @ ExtraWatchHelper::requestGet('week');
}
else {
    $week = $extraWatch->date->getWeekSince1970($extraWatch->date->getUserTimestamp());
}

$prevWeek = $week - 1;
$nextWeek = $week + 1;

if (EXTRAWATCH_DEBUG) echo("day: $day");
$t1 = (time() + microtime())
?>
<table border='0' cellpadding='1' cellspacing='0' width='100%'>

    <?php
    require_once("view" . DS . "stats-header.php");

    if (@ExtraWatchHelper::requestGet('tab') == "1") {
        require_once("view" . DS . "stats-total.php");
    } else {
        require_once("view" . DS . "stats-today.php");

    }
    require_once("view" . DS . "stats-footer.php");
    ?>

</table>
<br/><br/>
<span style='color: #ddd'><?php echo _EW_RENDERED_IN; ?> <?php echo sprintf("%.2f", ((time() + microtime()) - $t1)); ?>
    s</span>
