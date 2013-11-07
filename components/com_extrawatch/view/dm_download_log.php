<?php
/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.2
 * @revision 1270
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.codegravity.com
 */
defined('_JEXEC') or die('Restricted access'); ?>


<h2>Log of latest 100 downloads</h2>
<table id="dmLog" width='100%' class='tablesorter'>
    <thead>
    <tr>
        <th>Date</th>
        <th>IP</th>
        <th>Path</th>
        <th>Referrer</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $downloadLog = $extraWatch->downloads->getDownloadLog();
    foreach($downloadLog as $row)
    { ?>
    <tr>
        <td><?php echo $row->ddate;?></td>
        <td><?php echo $row->ip;?></td>
        <td><?php echo $row->dname;?></td>
        <td><?php echo $row->referrerURL;?></td>
    </tr>
        <?php } ?>
    </tbody>
</table>

