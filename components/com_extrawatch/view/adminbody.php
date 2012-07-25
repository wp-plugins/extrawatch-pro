<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 1.2.18
 * @revision 247
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2012 by Matej Koval - All rights reserved!
 * @website http://www.codegravity.com
 */

defined('_JEXEC') or die('Restricted access'); ?>

<script type="text/javascript"
        src="<?php echo $this->extraWatch->config->getLiveSiteWithSuffix(); ?>components/com_extrawatch/js/jxml.js"></script>
<script type="text/javascript"
        src="<?php echo $this->extraWatch->config->getLiveSiteWithSuffix(); ?>components/com_extrawatch/js/jdownloadurl.js"></script>
<?php if ($this->extraWatch->config->getConfigValue("EXTRAWATCH_MAP_GOOGLEMAP")) { ?>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<?php } ?>
<script type="text/javascript"
        src="<?php echo $this->extraWatch->config->getLiveSiteWithSuffix(); ?>components/com_extrawatch/js/maps.js.php?rand=<?php echo $this->extraWatch->config->getRand();?>&env=<?php echo ($this->extraWatch->config->getEnvironment());?>"></script>

<?php
if (!$this->extraWatch->config->checkLiveSite()) {
  ?>
<div style="border: 1px solid red; width:40%; padding: 10px;">
  <?php echo sprintf("" . _EW_ADMINBODY_LIVE_SITE . "", "<b>" . ExtraWatchEnvFactory::getEnvironment()->getRootSite() . "</b>", "<b>" . $this->extraWatch->config->getLiveSiteWithSuffix() . "</b>"); ?>
  <br/><br/>
  <a href="<?php echo ExtraWatchEnvFactory::getEnvironment()->renderLink("resetLiveSite","&rand=".$this->extraWatch->config->getRand());?>"><?php echo sprintf("" . _EW_ADMINBODY_SET_LIVE_SITE . "", ExtraWatchEnvFactory::getEnvironment()->getRootSite()); ?></a>
</div>
<?php
} ?>

<?php echo $this->extraWatch->block->checkBlocked($_SERVER['REMOTE_ADDR']); ?>

<center>
  <table border='0' cellpadding='2' width='100%' <?php echo $this->extraWatch->helper->getTooltipOnEventHide(); ?> >
    <tr>
      <td rowspan="2" id="visits" valign='top' align='left' width='80%'>
        <?php echo _EW_VISITS_PANE_LOADING; ?>
        <br/><br/>

        <div id='loading'
             style='width: 200px; border: 1px solid black; background-color: yellow; padding:5px; display:none;'>
          <?php echo "" . _EW_VIEW_ADMINBODY_LONG_MESSAGE . "" ?>
        </div>
      </td>
      <td valign="top">
        <?php require_once "lastvisitmap.php";?>
      </td>
    </tr>
    <tr>
      <td id="stats" valign='top' align='left'>
        <?php echo _EW_STATS_PANE_LOADING; ?>
      </td>
    </tr>
  </table>
</center>

<?php
if (!$this->extraWatch->config->isFree()) {
  if ($this->extraWatch->config->getConfigValue("EXTRAWATCH_IPINFODB_KEY")) {
    ?>
  <?php if ($this->extraWatch->config->getConfigValue("EXTRAWATCH_MAP_OPENMAP")) { ?>
    <script
        src="<?php echo $this->extraWatch->config->getLiveSiteWithSuffix();?>components/com_extrawatch/js/OpenLayers/OpenLayers.js"></script>
    <?php } ?>
  <script type='text/javascript'>
      <?php if ($this->extraWatch->config->getConfigValue("EXTRAWATCH_MAP_GOOGLEMAP")) { ?>
    extraWatchGoogleMapLoad();
      <?php } ?>
      <?php if ($this->extraWatch->config->getConfigValue("EXTRAWATCH_MAP_OPENMAP")) { ?>
    try {
      extraWatchOpenMapLoad();
    } catch (e) {
      alert("Could not initialize ExtraWatch javascript functions, browser could not load: <?php echo $this->extraWatch->config->getLiveSite(); ?>components/com_extrawatch/js/maps.js.php?rand=<?php echo $this->extraWatch->config->getRand();?>, because it returned HTTP 500 internal server error. This is a misconfiguration of your directory permissions. Please read: http://support.lunarpages.com/knowledge_bases/article/324 or search for: PHP permissions 500 Internal server error");
    }
      <?php } ?>
  </script>
  <?php
  }
} ?>


<script type="text/javascript">extrawatch_sendLastIdReq();</script>

