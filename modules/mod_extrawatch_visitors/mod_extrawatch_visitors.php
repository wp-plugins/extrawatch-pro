<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.0
 * @revision 608
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

require_once JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "config.php";
require_once JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS. "inc.extrawatch.env.php";
require_once JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS. "class.extrawatch.php";
require_once JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS. "class.extrawatch.block.php";
require_once JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS. "class.extrawatch.cache.php";
require_once JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS. "class.extrawatch.config.php";
require_once JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS. "class.extrawatch.goal.php";
require_once JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS. "class.extrawatch.helper.php";
require_once JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS. "class.extrawatch.date.php";
require_once JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS. "class.extrawatch.stat.php";
require_once JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS. "class.extrawatch.visit.php";
require_once JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS. "class.extrawatch.log.php";
require_once JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS. "class.extrawatch.sizes.php";
require_once JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS. "class.extrawatch.flow.php";
require_once JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS. "class.extrawatch.heatmap.php";
require_once JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS. "class.ip2country.php";
require_once JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS. "class.extrawatch.seo.php";


require_once JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS. "html" .DS."class.extrawatch.html.php";
require_once JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS. "html" .DS."class.extrawatch.block.html.php";
require_once JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS. "html" .DS."class.extrawatch.goal.html.php";
require_once JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS. "html" .DS."class.extrawatch.stat.html.php";
require_once JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS. "html" .DS."class.extrawatch.visit.html.php";
require_once JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS. "html" .DS."class.extrawatch.trend.html.php";
require_once JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS. "html" .DS."class.extrawatch.heatmap.html.php";
require_once JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS. "html" .DS."class.extrawatch.seo.html.php";

function renderExtraWatchVisitors()
{
    $output = "";

    $extraWatch = new ExtraWatchMain();
    require_once JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "lang" . DS . $extraWatch->config->getLanguage() . ".php";

    if (EXTRAWATCH_DEBUG) {
        $output .= (_JW_DESC_DEBUG);
    }
    $extraWatchStatHTML = new ExtraWatchStatHTML($extraWatch);
    $output .= $extraWatchStatHTML->renderFrontendStats($extraWatch);
    return $output;
}

$env = ExtraWatchEnvFactory::getEnvironment()->getEnvironmentName();

if (!defined('ENV') | $env == "nocms") echo renderExtraWatchVisitors(); 

