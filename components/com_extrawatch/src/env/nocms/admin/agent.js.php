<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.0
 * @revision 764
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.codegravity.com
 */
//defined('_JEXEC') or die('Restricted access');

require("config.php");

$projectId = @$_REQUEST['projectId'];

$title = "Free live stats and visitor counter for Joomla, Wordpress, Drupal, Magento and Prestashop";

if (!defined("DS")) {
    define("DS", DIRECTORY_SEPARATOR);
}


define("JPATH_BASE",dirname(__FILE__).DS."extrawatch");
define("ENV",1);


require_once JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "includes.php";


$extraWatchHTML = new ExtraWatchHTML();
$referringURLParsed = parse_url(@$_SERVER['HTTP_REFERER']);
$referringQuery = @$referringURLParsed['query'];


$output = ("var extrawatch_projectId='".$projectId."';\n");
$output .= ("document.write(\"");
$output .= ("<img src='"._EW_SCRIPT_HOST._EW_SCRIPT_HOST_DIR."extrawatch/components/com_extrawatch/ajax/img.php?rand=" . (rand() % 100000) . "&amp;env=ExtraWatchNoCMSEnv&amp;ref=\"+encodeURIComponent(document.referrer)+\"&amp;title=\"+encodeURIComponent(document.title)+\"&amp;uri=\"+encodeURIComponent(window.location.pathname)+\"&amp;params=\"+encodeURIComponent(location.search)+\"&amp;projectId=\"+extrawatch_projectId+\"' border='0' alt='$title' title='$title' style='width:0px;height:0px'/>");
$output .= ("\");\n");

$output .= ("document.write(\"");
$uri = @$_SERVER['HTTP_REFERER'];
$output .= $extraWatchHTML->renderHeatMapJS($uri, $referringQuery);
$output .= ("\");\n");



echo $output;

?>
