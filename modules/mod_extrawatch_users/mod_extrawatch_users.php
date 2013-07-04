<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.1
 * @revision 815
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.extrawatch.com
 */

/** ensure this file is being included by a parent file */
if (!defined('_JEXEC') && !defined('_VALID_MOS')) {
    die('Restricted access');
}

if (!defined("JPATH_BASE2")) {
    define("JPATH_BASE2", JPATH_BASE);
}

if (!defined("DS")) {
    define("DS", DIRECTORY_SEPARATOR);
}

require_once JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "includes.php"; 

function renderExtraWatchUsers()
{
    $output = "";

    $extraWatch = new ExtraWatchMain();
    require_once JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "lang" . DS . $extraWatch->config->getLanguage() . ".php";

    if (EXTRAWATCH_DEBUG) {
        $output = (_JW_DESC_DEBUG);
    }

    $extraWatchStatHTML = new ExtraWatchStatHTML($extraWatch);

    $output .= $extraWatchStatHTML->renderFrontendUsers();

    return $output;
}

$env = ExtraWatchEnvFactory::getEnvironment()->getEnvironmentName();

if (!defined('ENV') | $env == "nocms") echo renderExtraWatchUsers(); 

