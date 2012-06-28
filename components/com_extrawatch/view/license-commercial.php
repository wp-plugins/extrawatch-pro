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

<?php
function extraWatchRenderLicense($extraWatch) {

    $output = "
<table id='license'>
    <tr>

        <td valign='top'>
            <img
                src='".$extraWatch->config->getLiveSiteWithSuffix()."components/com_extrawatch/img/icons/extrawatch-logo.png'/>
        </td>
        <td align='left' valign='top'>
            <h3>PRO version</h3>

            <h4>Thank you very much for your donation!</h4>

            Registration key for your domain <b/>".$extraWatch->config->getDomainFromLiveSite()."</b>
            is: <br/><br/>
            <input name='key' value='".$extraWatch->config->getConfigValue('EXTRAWATCH_ADFREE')."'
                   size=\"50\" readonly=\"true\" style='text-align: center'/>
            <br/><br/>
        </td>
    </tr>
</table>

";
    return $output;
}

