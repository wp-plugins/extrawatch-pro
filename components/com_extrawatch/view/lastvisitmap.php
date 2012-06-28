<?php
/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 1.2.18
 * @revision 203
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2012 byMatej Koval - All rights reserved!
 * @website http://www.codegravity.com
 */
defined('_JEXEC') or die('Restricted access');
?>
<!--PRO_START-->
<h3><?php echo _EW_STATS_MAP; ?></h3>
<?php if ($this->extraWatch->config->getConfigValue("EXTRAWATCH_IPINFODB_KEY")) { ?>
<?php if ($this->extraWatch->config->getConfigValue("EXTRAWATCH_MAP_OPENMAP")) { ?>
    <div id="openmap" style="width: 250px; height: 250px"></div>
    <?php } ?>
<?php if ($this->extraWatch->config->getConfigValue("EXTRAWATCH_MAP_GOOGLEMAP")) { ?>
    <div id="map" style="width: 250px; height: 250px"></div>
    <?php } ?>
<?php } else { ?>
<form action="<?php echo $this->extraWatch->config->renderLink();?>" method="POST">
    <?php echo _EW_STATS_MAP_ENTER_KEY;?>
    <br/><br/>
    <input type="edit" name="storeIpInfoDbKey"/> <br/><br/>
    <input type="submit" value="<?php echo _EW_STATS_MAP_STORE_KEY; ?>"/>
    <input type="hidden" name="task" value="storeIpInfoDbKey"/>
</form>
<?php
}
?>
<!--PRO_END-->
