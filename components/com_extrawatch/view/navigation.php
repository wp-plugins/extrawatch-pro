<?php
/**
 * Created by JetBrains PhpStorm.
 * User: batman
 * Date: 9/10/11
 * Time: 7:52 AM
 * To change this template use File | Settings | File Templates.
 */
?>

<a href='<?php echo $this->extraWatch->config->renderLink();?>'><img
    src='<?php echo($this->extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/icons/map_icon.gif'/>&nbsp;<?php echo _EW_MENU_STATS;?>
</a> |
<a href='<?php echo $this->extraWatch->config->renderLink('flow');?>'><img
    src='<?php echo($this->extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/icons/flow.png'/>&nbsp;<?php echo _EW_ADMINHEADER_FLOW;?>
</a> |
<a href='<?php echo $this->extraWatch->config->renderLink('seo');?>'><img
    src='<?php echo($this->extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/icons/seo.png'/>&nbsp;SEO</a> |
<a href='<?php echo $this->extraWatch->config->renderLink('heatmap');?>'><img
    src='<?php echo($this->extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/icons/heatmap.png'/>&nbsp;<?php echo _EW_ADMINHEADER_HEATMAP;?>
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
<a href='<?php echo $this->extraWatch->config->renderLink('status');?>'><img
    src='<?php echo($this->extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/icons/status.png'/>&nbsp;<?php echo _EW_MENU_STATUS;?>
</a> |
<a href='<?php echo $this->extraWatch->config->renderLink('sizes');?>'><img
    src='<?php echo($this->extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/icons/sizes.png'/>&nbsp;<?php echo _EW_ADMINHEADER_COMPONENTS;?>
</a> |
<a href='<?php echo $this->extraWatch->config->renderLink('settings');?>'><img
    src='<?php echo($this->extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/icons/settings.gif'/>&nbsp;<?php echo _EW_MENU_SETTINGS;?>
</a> |
<a href='<?php echo $this->extraWatch->config->renderLink('credits');?>'><img
    src='<?php echo($this->extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/icons/credits.png'/>&nbsp;<?php echo _EW_MENU_CREDITS;?>
</a> |
<?php
if ($this->extraWatch->config->getEnvironment() == "ExtraWatchJoomlaEnv") {
    ?>
<a href='<?php echo $this->extraWatch->config->renderLink('update');?>'><img
    src='<?php echo($this->extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/icons/update.png'/>&nbsp;<?php echo _EW_MENU_UPDATE;?>
</a>
<?php
}
?>
