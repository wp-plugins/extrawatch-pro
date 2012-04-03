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

define('_JEXEC', 1);
define('DS', DIRECTORY_SEPARATOR);
$jBasePath = dirname(__FILE__) . DS . ".." . DS . ".." . DS;
define('JPATH_BASE', $jBasePath);

include_once ("includes.php");

$extraWatch = new ExtraWatch();
$extraWatchHTML = new ExtraWatchHTML();
$extraWatch->block->checkPermissions();

require_once ("lang" . DS . $extraWatch->config->getLanguage() . ".php");

$extraWatch->block->blockIpToggle(@ ExtraWatchHelper::requestGet('ip'));

?>
