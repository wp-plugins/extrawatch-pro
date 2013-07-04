<?php
/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.1
 * @revision 815
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.codegravity.com
 */
defined('_JEXEC') or die('Restricted access'); ?>


<table width="95%" border="0" align="center" cellpadding="3" cellspacing="0" class="">
    <tr>
        <td class="table" height="23" width="73%" align="left"><?php echo(_EW_DOWNLOADS_PATH);?></td>
        <td colspan="2" class="table"><div align="center"><?php echo(_EW_DOWNLOADS_ACTION);?></div></td>
    </tr>
    <?php
    if (@$filepathar)
        foreach($filepathar as $filepath)
        {
            ?>
            <tr>
                <td class="table" height="23" width="73%" align="left"><?php echo $filepath->dname;?></td>
                <td width="9%" class="table" height="23"><div align="center"><a href="<?php echo $extraWatch->config->renderLink("downloads","editFile&did=".$filepath->did);?>"><img src="<?php echo $extraWatch->config->getLiveSiteWithSuffix();?>components/com_extrawatch/img/icons/edit.png"/></a></div></td>
                <td width="11%" class="table" height="23"><div align="center"><a href="javascript:confirmChoicefilepath('<?php echo $filepath->did?>')"><img src="<?php echo $extraWatch->config->getLiveSiteWithSuffix();?>components/com_extrawatch/img/icons/delete.png" /></a></div></td>
            </tr>
            <?php
        }
    ?>

</table>

