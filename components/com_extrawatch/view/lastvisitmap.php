<?php
/**
 * Created by JetBrains PhpStorm.
 * User: batman
 * Date: 9/10/11
 * Time: 8:15 AM
 * To change this template use File | Settings | File Templates.
 */
?>
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

