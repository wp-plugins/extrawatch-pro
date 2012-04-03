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
defined('_JEXEC') or die('Restricted access');

/** ensure this file is being included by a parent file */

if (!defined('_JEXEC') && !defined('_VALID_MOS')) die('Restricted access');

if (!defined("JPATH_BASE2")) {
    define("JPATH_BASE2", JPATH_BASE);
}

require_once (JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "inc.extrawatch.env.php");
require_once (JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "config.php");
require_once (JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.php");
require_once (JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.block.php");
require_once (JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.block.html.php");
require_once (JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.cache.php");
require_once (JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.config.php");
require_once (JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.goal.php");
require_once (JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.goal.html.php");
require_once (JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.helper.php");
require_once (JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.date.php");
require_once (JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.stat.php");
require_once (JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.stat.html.php");
require_once (JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.visit.php");
require_once (JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.visit.html.php");
require_once (JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.html.php");
require_once (JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.trend.html.php");
require_once (JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.log.php");
require_once (JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.sizes.php");
require_once (JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.flow.php");
require_once (JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.heatmap.php");
require_once (JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.heatmap.html.php");
require_once (JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "class.ip2country.php");
require_once (JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.seo.php");
require_once (JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.seo.html.php");


function renderExtraWatchAgent()
{

    $output = "";
    $redirURI = addslashes(@ $_SERVER[EXTRAWATCH_SERVER_URI_KEY]);
    $uri = addslashes(@ $_SERVER['REQUEST_URI']);

    if (@ $redirURI && @ substr($redirURI, -9, 9) != "index.php")
        $uri = $redirURI;

    $extraWatch = new ExtraWatch();

    require_once (JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "lang" . DS . $extraWatch->config->getLanguage() . ".php");

    if (EXTRAWATCH_DEBUG) {
        $output .= ("<span style='color: #ff3333'>" . _JW_DESC_DEBUG . "</span><br/>");
    }

    $extraWatchHTML = new ExtraWatchHTML();
    $extraWatch->block->checkPostRequestForSpam(ExtraWatchHelper::requestGet());
    $extraWatch->block->checkPostRequestForSpam(ExtraWatchHelper::requestPost());
    $extraWatch->visit->insertVisit();

    $extraWatchHTML->renderHeatMapJS();

    /*
     * The following piece of code identifies the userAgent and inserts the backlink to codegravity.com
     *
     * I would really appreciate, that you would keep the this unchanged.
     *
     * It took me some time to create and maintain this component and to share it with everyone.
     *
     * This is the least you could kindly do. Thank you.
     *
     *
     * Matej Koval
    */


    $nofollow = "";
    if ($extraWatch->config->isAdFree() && $extraWatch->config->getCheckboxValue("EXTRAWATCH_FRONTEND_NOFOLLOW")) {
        $nofollow = "rel='nofollow'";
    }

    if ($extraWatch->config->isAdFree()) {
        $title = "";
    } else {
        $title = "Joomla visitors traffic monitor and live stats";
    }

    if (!($extraWatch->config->isAdFree() && $extraWatch->config->getCheckboxValue("EXTRAWATCH_FRONTEND_NO_BACKLINK"))) {
        $output .= ("<a href='http://www.codegravity.com' target='_blank' $nofollow title='" . $title . "'>");
    }

    $output .= ("<img src='" . $extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/img.php?rand=" . (rand() % 100000) . "&env=" . get_class($extraWatch->env) . "' border='0' alt='$title' title='$title'/>");

    if (!($extraWatch->config->isAdFree() && $extraWatch->config->getCheckboxValue("EXTRAWATCH_FRONTEND_NO_BACKLINK"))) {

        $output .= ("</a>");
    }
    return $output;
}

if (!defined('ENV')) echo renderExtraWatchAgent();

?>
