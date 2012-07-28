<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 1.2.18
 * @revision 254
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2012 by Matej Koval - All rights reserved!
 * @website http://www.codegravity.com
 */

defined('_JEXEC') or die('Restricted access'); ?>


<link rel="stylesheet"
      href="<?php echo($this->extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/css/ajax-tooltip.css"
      type="text/css"/>
<?php
if ($this->extraWatch->config->getEnvironment() != "ExtraWatchJoomlaEnv") {
  ?>
<link rel="stylesheet"
      href="<?php echo($this->extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/css/general.css"
      type="text/css"/>
<?php
} ?>

<style type="text/css">
  H2 {
    font-family: verdana, helvetica, arial;
    font-size: 14px;
  }

  TR, TD {
    font-family: verdana, helvetica, arial;
    font-size: 10px;
  }

  .tab_active {
    background-position: top center;
    background-image: url(<?php echo($this->extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/img/icons/tab-on.gif);
    background-repeat: no-repeat;
    width: 100px;
  }

  .tab_inactive {
    background-position: top center;
    background-image: url(<?php echo($this->extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/img/icons/tab-off.gif);
    background-repeat: no-repeat;
    width: 100px;
  }

  .tab_none {
    background-position: bottom center;
    background-image: url(<?php echo($this->extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/img/icons/tab-none.gif);
    background-repeat: repeat-x;
  }

  #ajax_tooltipObj .ajax_tooltip_content {
    border: 2px solid #317082; /* Border width */
    left: 100px; /* Same as border thickness */
    top: 0px;
    position: fixed;
    width: <?php echo($this->extraWatch->config->getConfigValue('EXTRAWATCH_TOOLTIP_WIDTH'));?>px; /* Width of tooltip content */
    height: <?php echo($this->extraWatch->config->getConfigValue('EXTRAWATCH_TOOLTIP_HEIGHT'));?>px; /* Height of tooltip content */
    background-color: #FFF; /* Background color */
    padding: 5px; /* Space between border and content */
    font-size: 0.8em; /* Font size of content */
    overflow: auto; /* Hide overflow content */
    z-index: 1000001;
  }

  .internalDetailDiv {
    position: absolute;
    top: -100;
    left: -100;
    width: 500;
    background-color: #eeeeee;
    border: 1px solid black;
    display: none;
  }

  .uriDetailDiv {
    position: absolute;
    top: -100;
    left: -100;
    width: 500;
    background-color: #eeeeee;
    border: 1px solid black;
    display: none;
  }

  .credits {
    width: 1000px;
    background-color: #DDDDDD;
    background-position: top center;
    background-image: url(<?php echo($this->extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/img/icons/credits-background.png);
    background-repeat: repeat;
    border: 1px solid #ddd; /* this is the border. should have the same value for the links */

  }

  #toolbar-box {
    display: none;
    visibility: hidden;
  }

  #submenu-box {
    display: none;
    visibility: hidden;
  }

  .jwDisabled {
    color: gray !important;
    text-decoration: none !important;
  }

  .tableRow0 {
    background-color: #eeeeee;
  }

  .tableRow1 {
    background-color: #f5f5f5;
  }
</style>
