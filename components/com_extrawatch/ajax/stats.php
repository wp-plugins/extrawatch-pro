<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.0
 * @revision 717
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.codegravity.com
 */

define('_JEXEC', 1);
define('DS', DIRECTORY_SEPARATOR);
$jBasePath = realpath(dirname(__FILE__) . DS . ".." . DS . ".." . DS . ".." . DS);
define('JPATH_BASE2', $jBasePath);

include_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "includes.php";

$extraWatch = new ExtraWatchMain();
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "lang" . DS . $extraWatch->config->getLanguage() . ".php";

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
$t1 = (time() + microtime()); ?>
<table border='0' cellpadding='1' cellspacing='0' width='100%'>

  <?php
  require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch". DS . "view" . DS . "stats-header.php";

  if (@ExtraWatchHelper::requestGet('tab') == "1") {
    require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch". DS . "view" . DS . "stats-total.php";
  } else {
    require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch". DS . "view" . DS . "stats-today.php";

  }
  require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch". DS . "view" . DS . "stats-footer.php"; ?>

</table>
<br/><br/>
<span style='color: #ddd'><?php echo _EW_RENDERED_IN; ?> <?php echo sprintf("%.2f", ((time() + microtime()) - $t1)); ?>
  s</span>
