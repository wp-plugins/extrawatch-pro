<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.0
 * @revision 564
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.codegravity.com
 */

defined('_JEXEC') or die('Restricted access'); ?>

<a href='<?php echo $extraWatch->config->renderLink();?>'><img
    src='<?php echo($extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/img/icons/map_icon.gif'/>&nbsp;<?php echo _EW_MENU_STATS;?>
</a> |

<a href='<?php echo $extraWatch->config->renderLink('flow');?>'><img
    src='<?php echo($extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/img/icons/flow.png'/>&nbsp;<?php echo _EW_ADMINHEADER_FLOW;?>
</a> |
<a href='<?php echo $extraWatch->config->renderLink('seo');?>'><img
    src='<?php echo($extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/img/icons/seo.png'/>&nbsp;SEO
</a>|
<a href='<?php echo $extraWatch->config->renderLink('heatmap');?>'><img
    src='<?php echo($extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/img/icons/heatmap.png'/>&nbsp;<?php echo _EW_ADMINHEADER_HEATMAP;?>
</a> |

<a href='<?php echo $extraWatch->config->renderLink('graphs');?>'><img
    src='<?php echo($extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/img/icons/trend_icon.gif'/>&nbsp;<?php echo _EW_ADMINHEADER_GRAPHS;?>
</a> |
<a href='<?php echo $extraWatch->config->renderLink('goals');?>'><img
    src='<?php echo($extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/img/icons/goal.gif'/>&nbsp;<?php echo _EW_MENU_GOALS;?>
</a> |
<a href='<?php echo $extraWatch->config->renderLink('history');?>'><img
    src='<?php echo($extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/img/icons/history.png'/>&nbsp;<?php echo _EW_MENU_HISTORY;?>
</a> |
<a href='<?php echo $extraWatch->config->renderLink('antiSpam');?>'><img
    src='<?php echo($extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/img/icons/antispam.gif'/>&nbsp;<?php echo _EW_SETTINGS_ANTI_SPAM;?>
</a> |
<a href='<?php echo $extraWatch->config->renderLink('emails');?>'><img
    src='<?php echo($extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/img/icons/emails.png'/>&nbsp;<?php echo _EW_MENU_EMAILS;?>
</a> |

<a href='<?php echo $extraWatch->config->renderLink('license');?>'><img
    src='<?php echo($extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/img/icons/license.png'/>&nbsp;<?php echo _EW_MENU_LICENSE;?>
</a> |
<a href='<?php echo $extraWatch->config->renderLink('status');?>'><img
    src='<?php echo($extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/img/icons/status.png'/>&nbsp;<?php echo _EW_MENU_STATUS;?>
</a> |
<a href='<?php echo $extraWatch->config->renderLink('sizes');?>'><img
    src='<?php echo($extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/img/icons/sizes.png'/>&nbsp;<?php echo _EW_ADMINHEADER_COMPONENTS;?>
</a> |

<a href='<?php echo $extraWatch->config->renderLink('settings');?>'><img
    src='<?php echo($extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/img/icons/settings.gif'/>&nbsp;<?php echo _EW_MENU_SETTINGS;?>
</a> |
<a href='<?php echo $extraWatch->config->renderLink('credits');?>'><img
    src='<?php echo($extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/img/icons/credits.png'/>&nbsp;<?php echo _EW_MENU_CREDITS;?>
</a>
<?php
if ($extraWatch->config->getEnvironment() == "ExtraWatchJoomlaEnv") {
  ?>
|
<a href='<?php echo $extraWatch->config->renderLink('update');?>'><img
    src='<?php echo($extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/img/icons/update.png'/>&nbsp;<?php echo _EW_MENU_UPDATE;?>
</a>
<?php
}

