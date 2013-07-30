<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.2
 * @revision 933
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.codegravity.com
 */

defined('_JEXEC') or die('Restricted access');

include_once "..".DIRECTORY_SEPARATOR."includes.php";

$extraWatch = new ExtraWatchMain();
$extraWatchHTML = new ExtraWatchHTML();

$referer = ExtraWatchHelper::requestGet("ref");
$title = ExtraWatchHelper::requestGet("title");
$uri = ExtraWatchHelper::requestGet("uri");
$params = ExtraWatchHelper::requestGet("params");

$env = ExtraWatchEnvFactory::getEnvironment();
$modulePath = realpath(dirname(__FILE__).DS."..".DS."..".DS."..".DS);

/*
if (!EXTRAWATCH_DEBUG) {

    if ($extraWatch->config->isAdFree() && $extraWatch->config->getCheckboxValue('EXTRAWATCH_FRONTEND_HIDE_LOGO')) {
        header('Content-Type: image/gif');
        readfile(JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "img" .DS. "icons" . DS . "extrawatch-logo-16x16-blank.gif");
    }
    else {
        header('Content-Type: image/png');
        readfile(JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "img" .DS. "icons" . DS . "extrawatch-logo-16x16.png");
    }

}
*/
$redirURI = @ $_SERVER[$extraWatch->config->getConfigValue('EXTRAWATCH_SERVER_URI_KEY')];

if (@ $redirURI && @ substr($redirURI, -9, 9) != "index.php")
    $uri = $redirURI;

if (_EW_CLOUD_MODE) {
    $projectId = @$_REQUEST['projectId'];
    $projectInitialized = $extraWatch->visit->isProjectInitialized($projectId);

    if ($projectInitialized) {
        $extraWatch->visit->updateVisitByBrowser($uri, $referer, $title, $params);
    } else {
        $env->extrawatch_initialize_db($extraWatch->database, $modulePath, $projectId);
    }
} else {
    $extraWatch->visit->updateVisitByBrowser($uri, $referer, $title, $params);
}

//die();

