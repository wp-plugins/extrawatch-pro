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

$extraWatchFlowHTML = new ExtraWatchFlowHTML($this->extraWatch->flow);
?>

<!--PRO_START-->
<script
    src="<?php echo $this->extraWatch->config->getLiveSiteWithSuffix();?>components/com_extrawatch/js/jquery-1.4.2.min.js"></script>
<script
    src="<?php echo $this->extraWatch->config->getLiveSiteWithSuffix();?>components/com_extrawatch/js/springy/springy.js"></script>
<script
    src="<?php echo $this->extraWatch->config->getLiveSiteWithSuffix();?>components/com_extrawatch/js/springy/springyui.js"></script>
<link rel="stylesheet"
      href="<?php echo $this->extraWatch->config->getLiveSiteWithSuffix();?>components/com_extrawatch/css/extrawatch.css">

<script>
    var graph = new Graph();
    <?php

    $outgoingLinksCount = $this->extraWatch->flow->getDefaultOutgoingLinks(@ExtraWatchHelper::requestPost('outgoingLinksCount'));
    $nestingLevel = $this->extraWatch->flow->getDefaultNestingLevel(@ExtraWatchHelper::requestPost('nestingLevel'));

    echo $extraWatchFlowHTML->renderGraph(@ExtraWatchHelper::requestPost('uriId'), $outgoingLinksCount, $nestingLevel);
    ?>

    jQuery(document).ready(function () {
        jQuery('#trafficflow').springy(graph);
    });

</script>

<h2><?php echo _EW_FLOW_TRAFFIC;?></h2>
<form action="" method="POST">
    <table width="1024">
        <tr>
            <td>
                <?php echo _EW_FLOW_SELECT_PAGE;?>
            </td>
            <td>
                <?php echo _EW_FLOW_OUTG_LINKS;?>
            </td>
            <td>
                <?php echo _EW_FLOW_NESTING;?>
            </td>
            <td align="center">
                <?php echo _EW_FLOW_SCALE;?>
            </td>
        </tr>
        <tr>
            <td valign="top">
                <?php echo $extraWatchFlowHTML->renderPagesCombobox(@ExtraWatchHelper::requestPost('uriId')); ?>
            </td>
            <td valign="top">
                <?php echo $extraWatchFlowHTML->renderOutgoingLinksCountCombobox($outgoingLinksCount); ?>
            </td>
            <td valign="top">
                <?php echo $extraWatchFlowHTML->renderNestingLevelCombobox($nestingLevel); ?>
            </td>
            <td align="center" valign="top">
                <img
                    src="<?php echo $this->extraWatch->config->getLiveSiteWithSuffix();?>components/com_extrawatch/img/icons/hsv.png"
                    alt=""/><br/>
            </td>
        </tr>
        <tr>
            <td colspan="5">
                <canvas id="trafficflow" width="1024" height="400"/>
            </td>
        </tr>
        <tr>
            <td colspan="5">
                <?php echo $extraWatchFlowHTML->renderFlowTable(@ExtraWatchHelper::requestPost('uriId'), $outgoingLinksCount, $nestingLevel); ?>
            </td>
        </tr>
    </table>
</form>
<!--PRO_END-->
