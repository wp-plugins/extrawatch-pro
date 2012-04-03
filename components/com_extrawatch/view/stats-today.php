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


<table border="0">
    <h3><?php echo(_EW_STATS_DAILY_TITLE) . "&nbsp;"; echo $extraWatch->date->getDateByDay($day);?><?php echo $extraWatchHTML->renderOnlineHelp("daily-stats"); ?></h3>
    <tr>
        <td>
            <?php echo $extraWatchHTML->renderDateControl(); ?>
        </td>
    </tr>

    <?php
    foreach ($keysArray as $key) {
        if ($key == 'ip' && !$extraWatch->config->getConfigValue('EXTRAWATCH_IP_STATS')) {
            continue;
        }
        ?>
        <tr>
            <td colspan='4'>
                <u><?php echo (@constant('_EW_STATS_' . strtoupper($key))) . "&nbsp;"; echo(_EW_STATS_FOR) . "&nbsp;"; echo $extraWatch->date->getDateByDay($day);?></u>
            </td>
        </tr>
        <tr>
            <td valign='top'><?php echo $extraWatchStatHTML->renderIntValuesByName($key, @ExtraWatchHelper::requestGet($key), false, $day); ?></td>
        </tr>
        <tr>
            <td colspan='4'>&nbsp;</td>
        </tr>

        <?php
    }
    ?>

</table>

<table>
    <?php echo($extraWatchBlockHTML->renderBlockedIPs($day, @ExtraWatchHelper::requestGet('ip_blocking_title'))); ?>
</table>
<br/>
<hr size='1' width='100%'/>
<?php echo $extraWatchHTML->renderDateControl(); ?>
