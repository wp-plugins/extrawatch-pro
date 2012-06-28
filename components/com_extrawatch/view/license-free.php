<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 1.2.18
 * @revision 732
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2012 by Matej Koval - All rights reserved!
 * @website http://www.codegravity.com
 */

defined('_JEXEC') or die('Restricted access');

function extraWatchRenderLicenseFree($extraWatch)
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
<h1>ExtraWatch 1.2.18.203 PRO</h1>

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
                        <form action='" . $extraWatch->config->renderLink() . "'>
                            <input type='text' name='key' size='50'/> <input type='submit' value='activate'/>
                            <input type='hidden' name='option' value='com_extrawatch'/>
                            <input type='hidden' name='task' value='activate'/>
                            <input type='hidden' name='page' value='extrawatch'/>
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

            <iframe src='http://www.codegravity.com/demo/extrawatch/1.2.18/' width='1100' height='768'>
            </iframe>
            <br/><br/>

            <h2>Click \"Buy Now\" button to obtain the lifetime license with free updates for your domain.</h2>

            <table border='0'>
                <tbody>
                <tr>
                    <td width='250px' valign='bottom' align='center' class='feature'>
                        <h3>Features</h3>
                    </td>
                    <td width='50px' valign='bottom' align='center'>
                        <h3>Free</h3>
                    </td>
                    <td width='50px' valign='bottom' align='center'><form method='post' action='https://www.paypal.com/cgi-bin/webscr'> <input type='hidden' value='_s-xclick' name='cmd'> <input type='hidden' value='XVS78SZ54G5AG' name='hosted_button_id'> <input type='image' src='https://www.paypal.com/en_US/i/btn/btn_buynow_LG.gif' name='submit' alt='PayPal - The safer, easier way to pay online!'> <img width='1' height='1' border='0' src='https://www.paypal.com/en_US/i/scr/pixel.gif'> </form>
                        <h3>PRO: 9 EUR</h3>
                    </td>
                    <td width='50px' valign='bottom' align='center'><form method='post' action='https://www.paypal.com/cgi-bin/webscr'> <input type='hidden' value='_s-xclick' name='cmd'> <input type='hidden' value='ASLDQG5VFMEEW' name='hosted_button_id'> <input type='image' src='https://www.paypal.com/en_US/i/btn/btn_buynow_LG.gif' name='submit' alt='PayPal - The safer, easier way to pay online!'> <img width='1' height='1' border='0' src='https://www.paypal.com/en_US/i/scr/pixel.gif'> </form>
                        <h3>PRO: 15 EUR</h3>
                    </td>
                </tr>
                <tr>
                    <td class='row1 feature fadeout'>Live Stats</td>
                    <td class='row1 tick'></td>
                    <td class='row1 tick'></td>
                    <td class='row1 tick'></td>
                </tr>
                <tr>
                    <td class='row2 feature fadeout'>Graphs &amp; Trends</td>
                    <td class='row2 tick'></td>
                    <td class='row2 tick'></td>
                    <td class='row2 tick'></td>
                </tr>
                <tr>
                    <td class='row1 feature fadeout'>Goals</td>
                    <td class='row1 tick'></td>
                    <td class='row1 tick'></td>
                    <td class='row1 tick'></td>
                </tr>
                <tr>
                    <td class='row2 feature fadeout'>Visits History</td>
                    <td class='row2 tick'></td>
                    <td class='row2 tick'></td>
                    <td class='row2 tick'></td>
                </tr>
                <tr>
                    <td class='row1 feature fadeout'>Anti-Spam</td>
                    <td class='row1 tick'></td>
                    <td class='row1 tick'></td>
                    <td class='row1 tick'></td>
                </tr>
                <tr>
                    <td class='row2 feature fadeout'>Nightly Email Reports</td>
                    <td class='row2 tick'></td>
                    <td class='row2 tick'></td>
                    <td class='row2 tick'></td>
                </tr>
                <tr>
                    <td class='row1 feature        '>Last Visit Interactive Map</td>
                    <td class='row1 untick'></td>
                    <td class='row1 tick'></td>
                    <td class='row1 tick'></td>
                </tr>
                <tr>
                    <td class='row2 feature        '>Interactive HTML5 Traffic Flow</td>
                    <td class='row2 untick'></td>
                    <td class='row2 tick'></td>
                    <td class='row2 tick'></td>
                </tr>
                <tr>
                    <td class='row1 feature        '>Inversed Goals</td>
                    <td class='row1 untick'></td>
                    <td class='row1 tick'></td>
                    <td class='row1 tick'></td>
                </tr>
                <tr>
                    <td class='row2 feature        '>Submitted GET/POST vars</td>
                    <td class='row2 untick'></td>
                    <td class='row2 tick'></td>
                    <td class='row2 tick'></td>
                </tr>
                <tr>
                    <td class='row1 feature        '>1/7/30-day DB Status</td>
                    <td class='row1 untick'></td>
                    <td class='row1 tick'></td>
                    <td class='row1 tick'></td>
                </tr>
                <tr>
                    <td class='row2 feature        '>Component &amp; Module sizes</td>
                    <td class='row2 untick'></td>
                    <td class='row2 tick'></td>
                    <td class='row2 tick'></td>
                </tr>
                <tr>
                    <td class='row1 feature        '>SEO Report with Keyphrases</td>
                    <td class='row1 untick'></td>
                    <td class='row1 tick'></td>
                    <td class='row1 tick'></td>
                </tr>
                <tr>
                    <td class='row2 feature        '>Auto-update functionality</td>
                    <td class='row2 untick'></td>
                    <td class='row2 tick'></td>
                    <td class='row2 tick'></td>
                </tr>
                <tr>
                    <td class='row1 feature        '>Security audited code</td>
                    <td class='row1 untick'></td>
                    <td class='row1 tick'></td>
                    <td class='row1 tick'></td>
                </tr>
                <tr>
                    <td class='row2 feature        '>Free updates</td>
                    <td class='row2 untick'></td>
                    <td class='row2 tick'></td>
                    <td class='row2 tick'></td>
                </tr>
                <tr>
                    <td class='row1 feature        '>Frontend logo removal</td>
                    <td class='row1 untick'></td>
                    <td class='row1 tick'></td>
                    <td class='row1 tick'></td>
                </tr>
                <tr>
                    <td class='row2 feature        '>Frontend backlink removal</td>
                    <td class='row2 untick'></td>
                    <td class='row2 tick'></td>
                    <td class='row2 tick'></td>
                </tr>
                <tr>
                    <td class='row1 feature        '>Lifetime license for your domain</td>
                    <td class='row1 untick'></td>
                    <td class='row1 tick'></td>
                    <td class='row1 tick'></td>
                </tr>
                <tr>
                    <td class='row2 feature        '>30-day money back guarantee</td>
                    <td class='row2 untick'></td>
                    <td class='row2 tick'></td>
                    <td class='row2 tick'></td>
                </tr>
                <tr>
                    <td class='row2 feature       '>Nofollow link from sponsors page</td>
                    <td class='row2 untick'></td>
                    <td class='row2 untick'></td>
                    <td class='row2 tick'></td>
                </tr>
                <tr>
                    <td width='250px' valign='top' align='center' class='feature'>
                        <h3>Features</h3>
                    </td>
                    <td width='50px' valign='top' align='center'>
                        <h3>Free</h3>
                    </td>
                    <td width='50px' valign='top' align='center'>
                        <h3>PRO: 9 EUR</h3>
                        <form method='post' action='https://www.paypal.com/cgi-bin/webscr'> <input type='hidden' value='_s-xclick' name='cmd'> <input type='hidden' value='XVS78SZ54G5AG' name='hosted_button_id'> <input type='image' src='https://www.paypal.com/en_US/i/btn/btn_buynow_LG.gif' name='submit' alt='PayPal - The safer, easier way to pay online!'> <img width='1' height='1' border='0' src='https://www.paypal.com/en_US/i/scr/pixel.gif'> </form></td>
                    <td width='50px' valign='top' align='center'>
                        <h3>PRO: 15 EUR</h3>
                        <form method='post' action='https://www.paypal.com/cgi-bin/webscr'> <input type='hidden' value='_s-xclick' name='cmd'> <input type='hidden' value='ASLDQG5VFMEEW' name='hosted_button_id'> <input type='image' src='https://www.paypal.com/en_US/i/btn/btn_buynow_LG.gif' name='submit' alt='PayPal - The safer, easier way to pay online!'> <img width='1' height='1' border='0' src='https://www.paypal.com/en_US/i/scr/pixel.gif'> </form></td>
                </tr>
                <tr>
                    <td align='right' colspan='4'><br><em>* Free version = ExtraWatch 1.2.12, PRO version = ExtraWatch 1.2.17</em></td>
                </tr>
                </tbody>
            </table>
        </td>
        </tr>
        <tr>
            <td valign='top'>
                <h2>Why to purchase? What people say?</h2>
                <ul>
                    <li>
                        See the <a href='http://www.codegravity.com/donate/' target='_blank'>list of supporters</a> ExtraWatch by country <i>(560 donations by June 2010)</i><br/><br/>
                    </li>
                    <li>
                        Read the extension <a href='http://extensions.joomla.org/extensions/site-management/visitors/3940' target='_blank'>reviews</a> <i>(101 mostly 5-star reviews by December 2010)</i><br/><br/>
                    </li>
                </ul>
            </td>
        </tr>
        <tr><td colspan='1'>
            <table>
                <tr>
                    <td valign='top'>
                        <img src='http://www.codegravity.com/img/extrawatch-logo.png' align='left'>
                    </td>
                    <td valign='top'>
                        <ul style='padding: 10px;'>
                            <li>This license applies to <strong>ONE</strong> website / domain of your choice.<br> </li>
                            <li>Please provide your <strong>domain name</strong> in the payment details</li>
                            <li>There is a <strong>30 day money-back guarantee</strong>.</li>
                            <li>License applies for <b>all versions in future too</b></li>
                            <li>To purchase the license, please proceed with the 'Buy Now' paypal button. <br>
                                <span style='color: red'>After purchase, please click orange 'return to merchant' button</span>.
                                Your should be returned to <br/>the form at codegravity.com where you can fill your purchase details necessary<br/> to recognize your purchase and make the whole process nearly immediate.</li>
                        </ul>
                    </td>
                </tr>
            </table>
        </td>
        </tr>
        <tr>
            <td style='margin: 5px;' valign='top'>
                <i>Please don't abuse this and purchase it to get the link to your page with inappropriate content. <br>
                    In such a case, we reserve a right not to display your website on a supporter's page and you'll get a refund.</i>
                </i>
            </td>
        </tr>
        </tbody></table>
        ";
    return $output;
}
