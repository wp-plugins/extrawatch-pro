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

sleep(1); // it's a tooltip. Let's sleep for a while

include_once("includes.php");

$extraWatch = new ExtraWatch();
require_once ("lang" . DS . $extraWatch->config->getLanguage() . ".php");

$extraWatchHTML = new ExtraWatchHTML();
$extraWatch->block->checkPermissions();

echo $extraWatchHTML->renderCloseWindow();
require_once(JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "view" . DS . "trendtooltip.php");
?>

