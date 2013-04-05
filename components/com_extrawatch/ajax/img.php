<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.0
 * @revision 608
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.codegravity.com
 */

include_once "..".DIRECTORY_SEPARATOR."includes.php";

$extraWatch = new ExtraWatchMain();
$extraWatchHTML = new ExtraWatchHTML();

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

$redirURI = @ $_SERVER[$extraWatch->config->getConfigValue('EXTRAWATCH_SERVER_URI_KEY')];
$uri = $extraWatch->helper->getURI();

if (@ $redirURI && @ substr($redirURI, -9, 9) != "index.php")
    $uri = $redirURI;

$extraWatch->visit->updateVisitByBrowser($uri);

//die();

