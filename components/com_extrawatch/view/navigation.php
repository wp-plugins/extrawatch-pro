<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.2
 * @revision 1439
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.codegravity.com
 */

defined('_JEXEC') or die('Restricted access'); ?>

<a href='<?php echo $extraWatch->config->renderLink();?>'><img
    src='<?php echo($extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/img/icons/map_icon.gif'/>&nbsp;<?php echo _EW_MENU_STATS;?>
</a>  &nbsp; 

<a href='<?php echo $extraWatch->config->renderLink('heatmap');?>'><img
        src='<?php echo($extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/img/icons/heatmap.png'/>&nbsp;<?php echo _EW_ADMINHEADER_HEATMAP;?>
</a>  &nbsp;
<a href='<?php echo $extraWatch->config->renderLink('clicks');?>'><img
        src='<?php echo($extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/img/icons/click.png'/>&nbsp;<?php echo _EW_ADMINHEADER_CLICK_AREAS;?>
</a>  &nbsp;
<a href='<?php echo $extraWatch->config->renderLink('seo');?>'><img
    src='<?php echo($extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/img/icons/seo.png'/>&nbsp;SEO
</a> &nbsp; 
<?php if (!_EW_CLOUD_MODE) { ?>
<a href='<?php echo $extraWatch->config->renderLink('users');?>'><img
        src='<?php echo($extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/img/icons/users.png'/>&nbsp;<?php echo _EW_MENU_USERS;?>
</a>
<a href='<?php echo $extraWatch->config->renderLink('downloads');?>'><img
        src='<?php echo($extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/img/icons/downloads.png'/>&nbsp;<?php echo _EW_MENU_DOWNLOADS;?>
</a>
<?php } ?>
<a href='<?php echo $extraWatch->config->renderLink('flow');?>'><img
        src='<?php echo($extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/img/icons/flow.png'/>&nbsp;<?php echo _EW_ADMINHEADER_FLOW;?>
</a>  &nbsp;


<a href='<?php echo $extraWatch->config->renderLink('goals');?>'><img
    src='<?php echo($extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/img/icons/goal.gif'/>&nbsp;<?php echo _EW_MENU_GOALS;?>
</a>  &nbsp; 
<a href='<?php echo $extraWatch->config->renderLink('graphs');?>'><img
    src='<?php echo($extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/img/icons/trend_icon.gif'/>&nbsp;<?php echo _EW_ADMINHEADER_GRAPHS;?>
</a>  &nbsp; 
<a href='<?php echo $extraWatch->config->renderLink('history');?>'><img
    src='<?php echo($extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/img/icons/history.png'/>&nbsp;<?php echo _EW_MENU_HISTORY;?>
</a>  &nbsp; 
<a href='<?php echo $extraWatch->config->renderLink('antiSpam');?>'><img
    src='<?php echo($extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/img/icons/antispam.gif'/>&nbsp;<?php echo _EW_SETTINGS_ANTI_SPAM;?>
</a>  &nbsp; 
<a href='<?php echo $extraWatch->config->renderLink('emails');?>'><img
    src='<?php echo($extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/img/icons/emails.png'/>&nbsp;<?php echo _EW_MENU_EMAILS;?>
</a>  &nbsp; 

<?php if (!_EW_CLOUD_MODE) { ?>
<a href='<?php echo $extraWatch->config->renderLink('status');?>'><img
    src='<?php echo($extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/img/icons/status.png'/>&nbsp;<?php echo _EW_MENU_STATUS;?>
</a>  &nbsp; 
<a href='<?php echo $extraWatch->config->renderLink('sizes');?>'><img
    src='<?php echo($extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/img/icons/sizes.png'/>&nbsp;<?php echo _EW_ADMINHEADER_COMPONENTS;?>
</a>  &nbsp;
<?php } ?>

<a href='<?php echo $extraWatch->config->renderLink('settings');?>'><img
    src='<?php echo($extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/img/icons/settings.gif'/>&nbsp;<?php echo _EW_MENU_SETTINGS;?>
</a>

<?php if (_EW_CLOUD_MODE) { ?>
&nbsp;
<a href='?action=logout' style="color: red;"> &nbsp;Logout
</a>
<?php } else { ?>
<a href='<?php echo $extraWatch->config->renderLink('credits');?>'><img
        src='<?php echo($extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/img/icons/credits.png'/>&nbsp;<?php echo _EW_MENU_CREDITS;?>
</a>
<?php } ?>


<br/><br/>