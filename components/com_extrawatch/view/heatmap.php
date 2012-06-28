<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 1.2.18
 * @revision 203
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2012 by Matej Koval - All rights reserved!
 * @website http://www.codegravity.com
 */
defined('_JEXEC') or die('Restricted access');
?>

<!--PRO_START-->
<?php
$day = ExtraWatchHelper::requestGet('day');
if (!$day) {
    $day = $this->extraWatch->date->jwDateToday(); // yesterday by default, because it contains
}
?>
<h2>Heatmap for <?php echo $this->extraWatch->date->getDateByDay($day); ?></h2>
<table width='700px' border="0">
    <tr>
        <td colspan="5">
            <?php echo $this->renderDateControlGet('heatmap', $day); ?>
        </td>
    </tr>
</table>
<br/>
<?php
if ($day == ExtraWatchDate::jwDateToday()) {
    $extraWatchHeatmap->updateHeatmapStats($day);
}
?>
<?php echo $extraWatchHeatmapHTML->renderHeatmapTable($day); ?>
<br/><br/>
<table width='700px' border="0">
    <tr>
        <td colspan="5">
            <?php echo $this->renderDateControlGet('heatmap', $day); ?>
        </td>
    </tr>
</table>
<!--PRO_END-->
