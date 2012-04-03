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

?>
<a href='<?php echo $this->extraWatch->config->renderLink();?>'><img
    src='<?php echo($this->extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/icons/map_icon.gif'/>&nbsp;<?php echo _EW_MENU_STATS;?>
</a> |
<a href='<?php echo $this->extraWatch->config->renderLink('graphs');?>'><img
    src='<?php echo($this->extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/icons/trend_icon.gif'/>&nbsp;<?php echo _EW_ADMINHEADER_GRAPHS;?>
</a> |
<a href='<?php echo $this->extraWatch->config->renderLink('goals');?>'><img
    src='<?php echo($this->extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/icons/goal.gif'/>&nbsp;<?php echo _EW_MENU_GOALS;?>
</a> |
<a href='<?php echo $this->extraWatch->config->renderLink('history');?>'><img
    src='<?php echo($this->extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/icons/history.png'/>&nbsp;<?php echo _EW_MENU_HISTORY;?>
</a> |
<a href='<?php echo $this->extraWatch->config->renderLink('antiSpam');?>'><img
    src='<?php echo($this->extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/icons/antispam.gif'/>&nbsp;<?php echo _EW_SETTINGS_ANTI_SPAM;?>
</a> |
<a href='<?php echo $this->extraWatch->config->renderLink('emails');?>'><img
    src='<?php echo($this->extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/icons/emails.png'/>&nbsp;<?php echo _EW_MENU_EMAILS;?>
</a> |
<a href='<?php echo $this->extraWatch->config->renderLink('license');?>'><img
    src='<?php echo($this->extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/icons/license.png'/>&nbsp;<?php echo _EW_MENU_LICENSE;?>
</a> |
<a href='<?php echo $this->extraWatch->config->renderLink('settings');?>'><img
    src='<?php echo($this->extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/icons/settings.gif'/>&nbsp;<?php echo _EW_MENU_SETTINGS;?>
</a> |
<a href='<?php echo $this->extraWatch->config->renderLink('credits');?>'><img
    src='<?php echo($this->extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/icons/credits.png'/>&nbsp;<?php echo _EW_MENU_CREDITS;?>
</a>



