<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.2
 * @revision 1367
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.codegravity.com
 */
defined('_JEXEC') or die('Restricted access'); ?>


<h2>Latest heatmap clicks refreshed in real-time</h2>
<?php //echo $extraWatchHeatmapHTML->renderLatestHeatmapClicksTable(); ?>

<table border='0' cellpadding='2' width='100%' <?php echo $extraWatch->helper->getTooltipOnEventHide(); ?> >
    <tr>
        <td rowspan="2" id="heatmapClick" valign='top' align='left' width='80%'>
            <?php echo _EW_HEATMAP_LOADING; ?>
            <br/><br/>
        </td>
    </tr>
</table>



<?php
$day = ExtraWatchHelper::requestGet('day');
if (!$day) {
  $day = $extraWatch->date->jwDateToday(); // yesterday by default, because it contains
}
?>
<h2><?php echo _EW_CLICK_HEATMAP_FOR;?><?php echo $extraWatch->date->getDateByDay($day); ?></h2>
<table width='100%' border="0">
  <tr>
    <td colspan="5">
      <?php echo $extraWatchHTML->renderDateControlGet('heatmap', $day); ?>
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
<i style='color: #ddd'>Displaying only first 20 records</i>
<br/><br/>
<br/><br/>
<table width='100%' border="0">
    <tr>
        <td colspan="5">
            <?php echo $extraWatchHTML->renderDateControlGet('heatmap', $day); ?>
        </td>
    </tr>
</table>

<h2>All-time clicks</h2>
<?php echo $extraWatchHeatmapHTML->renderHeatmapTable(); ?>
<i style='color: #ddd'>Displaying only first 20 records</i>
<br/><br/>
<br/><br/>

<script type="text/javascript">extrawatch_sendLastClickIdReq();</script>



