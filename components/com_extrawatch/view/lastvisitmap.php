<?php
/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.2
 * @revision 1209
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 byCodeGravity.com - All rights reserved!
 * @website http://www.codegravity.com
 */
defined('_JEXEC') or die('Restricted access'); ?>

<h3><?php echo _EW_STATS_MAP; ?></h3>
<?php if ($extraWatch->config->getConfigValue("EXTRAWATCH_IPINFODB_KEY")) { ?>
<?php if ($extraWatch->config->getConfigValue("EXTRAWATCH_MAP_OPENMAP")) { ?>
  <div id="openmap" style="width: 250px; height: 250px"></div>
  <?php } ?>
<?php if ($extraWatch->config->getConfigValue("EXTRAWATCH_MAP_GOOGLEMAP")) { ?>
  <div id="map" style="width: 250px; height: 250px"></div>
  <?php } ?>
<?php } else { ?>
<form action="<?php echo $extraWatch->config->renderLink();?>" method="POST">
  <?php echo _EW_STATS_MAP_ENTER_KEY;?>
  <br/><br/>
  <input type="edit" name="storeIpInfoDbKey"/> <br/><br/>
  <input type="submit" value="<?php echo _EW_STATS_MAP_STORE_KEY; ?>"/>
  <input type="hidden" name="task" value="storeIpInfoDbKey"/>
  <input name='form_key' type='hidden' value="<?php echo $extraWatch->env->getFormKey();?>" />
</form>
<?php
}
?>

