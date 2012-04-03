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

<table style='width:1024px'>
    <tr>
        <td>
            <h2><?php echo _EW_STATUS_DATABASE;?></h2>
        </td>
    </tr>
    <tr>
        <td colspan="2" valign="top">
            <?php require_once("sizedatabase.php"); ?>
        </td>
    </tr>
</table>

<br/><br/>
<h3><?php echo(_EW_STATUS_DATABASE);?></h3>

<table id='status' style='width:1024px' cellpadding='5px;'>
    <tr>
        <td>
        </td>
    </tr>
    <tr>
        <th align='left'><?php echo(_EW_STATUS_DATABASE_TABLE_NAME);?></th>
        <th align='right'><?php echo(_EW_STATUS_DATABASE_ROWS);?></th>
        <th align='right'><?php echo(_EW_STATUS_DATABASE_DATA);?></th>
    </tr>
    <?php $rows = $this->extraWatch->stat->getDatabaseStatus();
    $total = 0;
    $j = 0;
    foreach ($rows as $row) {
        if ($this->extraWatch->stat->isSystemTable($row->Name)) {
            // omit system tables
            continue;
        }
        $total += $row->Data_length + $row->Index_length;
        if ($j % 2 == 0) {
            $color = "#f9f9f9";
        } else {
            $color = "#eeeeee";
        }
        ?>
        <tr>
            <td style='background-color: <?php echo $color;?>'><?php echo($row->Name);?></td>
            <td align='right' style='background-color: <?php echo $color;?>'><?php echo($row->Rows);?></td>
            <td align='right'
                style='background-color: <?php echo $color;?>'><?php echo(sprintf("%.3f", (($row->Data_length + $row->Index_length) / 1024 / 1024)));?> <?php echo _EW_STATUS_MB;?>
            </td>
        </tr>
        <?php
        $j++;
    }
    ?>
    <tr>
        <td><b><?php echo(_EW_STATUS_DATABASE_TOTAL);?>:</b></td>
        <td></td>
        <td align='right'><b><?php echo(sprintf("%.3f", ($total / 1024 / 1024)));?> <?php echo _EW_STATUS_MB;?></b>
        </td>
    </tr>
</table>
<br/>
<br/>



