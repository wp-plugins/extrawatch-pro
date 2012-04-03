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

$extraWatchHTML = new ExtraWatchHTML();
$extraWatchVisitHTML = new ExtraWatchVisitHTML($extraWatch);
$extraWatchBlockHTML = new ExtraWatchBlockHTML($extraWatch);

$extraWatch->block->checkPermissions();

$t1 = (time() + microtime());

$last = $extraWatch->visit->getLastVisitId();

echo ("$last\n\n");

if (EXTRAWATCH_DEBUG) {
    $day = $extraWatch->date->jwDateToday();
    echo "<br/>date today: " . $day;
    echo "<br/>actual dateTime: " . ExtraWatchDate::getActualDateTime();
    echo "<br/>server time: " . ExtraWatchDate::getUTCTimestamp();
    echo "<br/>date today: " . $extraWatch->date->getDateByDay($day, "d.m.Y H:i:s");
    echo("<br/>");
}
require_once(JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "view" . DS . "visits.php");
?>
<br/><br/>
<span style='color: #ddd'><?php echo _EW_RENDERED_IN; ?> <?php echo sprintf("%.2f", ((time() + microtime()) - $t1)); ?>
    s</span>

