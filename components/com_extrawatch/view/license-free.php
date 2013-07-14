<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.0
 * @revision 732
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.codegravity.com
 */

defined('_JEXEC') or die('Restricted access');

function extrawatch_renderLicenseFree($extraWatch)
{

  $output = "

<style>
    .row1 {
        background-color: #efefef;
        text-align: center;
    }
    .row2 {
        background-color: #fefefe;
        text-align: center;
    }
    .tick {
        background-image: url(" . $extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/img/icons/tick.png);
        background-repeat: no-repeat;
        background-position: center center;
        width: 120px;
        align: center;
    }
    .untick {
        background-image: url(" . $extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/img/icons/unpublished.png);
        background-repeat: no-repeat;
        background-position: center center;
        width: 120px;
        align: center;
    }
    .feature {
        font-weight: bold;
        text-align: right;
        font-size: 12px;
        padding-right: 20px;
    }
    .fadeout {
        font-weight: normal;
    }
</style>
<h1>ExtraWatch 2.0.854 PRO</h1>

<script type='text/javascript'>
    function toggleNoKeyForm() {
        document.getElementById('nokey').style.display='';
    }
</script>

<table width='100%' border='0'>
<tr>
    <td>
        <table><tr><td>
            <h2>Enter the registration code you obtained to proceed</h2>
            domain: <b/>" . $extraWatch->config->getDomainFromLiveSite() . "</b><br/><br/>
            <table>
                <tr>
                    <td>
                        <form action='" . $extraWatch->config->renderLink("activate") . "' method='POST'>
                            <input type='text' name='key' size='50'/> <input type='submit' value='activate'/>
                            <input type='hidden' name='option' value='com_extrawatch'/>
                            <input type='hidden' name='task' value='activate'/>
                            <input type='hidden' name='page' value='extrawatch'/>
                            <input type='hidden' name='form_key' value='".$extraWatch->env->getFormKey()."' />
                        </form>

                    </td>
                </tr>
            </table>
            <br/>


            <div style='color: #FFAB29'>
                Please read: This is NOT the paypal confirmation number of your donation.<br/>
                It's the license key you received after you filled out your domain details at codegravity.com after redirecting by paypal<br/>
                If you were not redirected by paypal correctly, you made a purchase and haven't received the activation key,<br/>
                or have any problems with activation, <a href='javascript:toggleNoKeyForm()'>request the correct activation key</a> <br/><br/><br/>
            </div>


            <div  id='nokey' style='border: 1px solid  rgb(255, 171, 41); width: 400px; padding: 10px; display:none;'>
                <h3>Request the correct activation key</h3>
                <form action='https://www.codegravity.com/success/' method='POST'>
                    <table>
                        <tr><td>
                            domain
                        </td>
                            <td>
                                <input name='url' type='text' value='" . $extraWatch->config->getDomainFromLiveSite() . "' readonly>
        </td>
        </tr>
        <tr><td>
            your email (from paypal receipt):
        </td>
            <td>
                <input name='email' type='text' value='@'/><span style='color: red'>*</span>
            </td>
        </tr>
        <tr><td>
            paypal transaction number:
        </td>
            <td>
                <input name='paypal' type='text' value=''/><span style='color: red'>*</span>
            </td>
        </tr>
        <tr><td colspan='2'>
            <br/>
            <input type='submit' value='Request correct key'/>
        </td></tr>

        </table>
        <input name='requestKey' type='hidden' value='1'/>
        </form>
        </div><br/>
        </td>
        </tr>
        </table>
        <br/><br/>
        </td>
        </tr>

        <tr><td valign='top' colspan='2'>

            <iframe src='http://www.codegravity.com/demo/extrawatch/2.0/".strtolower($extraWatch->env->getEnvironmentName())."/' width='1100' height='768'>
            </iframe>

		</td>
		</tr>
		</table>

        ";
  return $output;
}
