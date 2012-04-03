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
<script type="text/javascript"
        src='<?php echo($this->extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/js/jquery.js'></script>
<script type="text/javascript"
        src='<?php echo($this->extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/js/jquery-easing.1.2.js'></script>
<script type="text/javascript"
        src='<?php echo($this->extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/js/jquery-easing-compatibility.1.2.js'></script>

<table>
    <tr>
        <td>
            <h2><?php echo _EW_SIZES_FILES;?></h2>
            <?php
            $lastCheckDate = $this->extraWatch->sizes->findLatestCheckDayByComOrModGroup();
            if ($lastCheckDate) {
                echo _EW_SIZES_LAST_CHECK . "&nbsp;";
                echo $this->extraWatch->date->getDateByDay($lastCheckDate);
            }
            ?>

            <br/><br/>
            <span style='color: #5AA1D3'><?php echo _EW_SIZES_ADMINISTRATOR; ?></span>
            <br/><br/>
        </td>
    </tr>
    <tr>
        <td valign="top" width="50%">
            <?php require_once("sizecomponents.php"); ?>

        </td>
        <td valign="top" width="50%">
            <?php
            if (get_class($this->extraWatch->env) == "ExtraWatchJoomlaEnv") {
                require_once("sizemodules.php");
            }
            ?>
        </td>
    </tr>
</table>
