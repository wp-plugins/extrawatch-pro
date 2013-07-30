<?php
/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.2
 * @revision 927
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.codegravity.com
 */

defined('_JEXEC') or die('Restricted access');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr" >
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Super User" />
    <title>Real-time live stats for Joomla, Wordpress, Drupal, Magento and PrestaShop</title>
    <script type="text/javascript">
        window.addEvent('load', function() {
            new JCaption('img.caption');
        });
        window.addEvent('domready', function() {
            $$('.hasTip').each(function(el) {
                var title = el.get('title');
                if (title) {
                    var parts = title.split('::', 2);
                    el.store('tip:title', parts[0]);
                    el.store('tip:text', parts[1]);
                }
            });
            var JTooltips = new Tips($$('.hasTip'), { maxTitleChars: 50, fixed: false});
        });
        window.addEvent('domready', function() {new DropdownMaxiMenu(document.getElement('div#maximenuck'),{mooTransition : 'Quad',mooEase : 'easeOut',useOpacity : '0',dureeIn : 0,dureeOut : 500,menuID : 'maximenuck',testoverflow : '0',orientation : '0',style : 'moomenu',opentype : 'open',direction : 'normal',directionoffset1 : '30',directionoffset2 : '30',mooDureeout : '500',showactivesubitems : '0',ismobile : 0,mooDuree : 500});});
        window.addEvent('domready', function() {new SlideList(document.getElement('div#maximenuck ul'),{fancyTransition : 'Quad',fancyEase : 'easeOut',fancyDuree : 500});});
    </script>
    <script type='text/javascript'> var jax = jQuery.noConflict();
    jax(document).ready( function()	{jax('#ftestimonial').innerfade({ animationtype: 'fade', speed: 2000, timeout: 5000, type: 'sequence',containerheight:'200px' });} );
    </script>


    <!--[if lte IE 6]>
    <link href="http://www.extrawatch.com/templates/extra_watch/css/ieonly.css" rel="stylesheet" type="text/css" />
    <![endif]-->

    <!--[if IE 7]>
    <link href="http://www.extrawatch.com/templates/extra_watch/css/ie7only.css" rel="stylesheet" type="text/css" />
    <![endif]-->

    <script type="text/javascript">
        var big ='72%';
        var small='53%';
        var altopen='TPL_BEEZ2_ALTOPEN';
        var altclose='TPL_BEEZ2_ALTCLOSE';
        var bildauf='/templates/extra_watch/images/plus.png';
        var bildzu='/templates/extra_watch/images/minus.png';
        var rightopen='TPL_BEEZ2_TEXTRIGHTOPEN';
        var rightclose='TPL_BEEZ2_TEXTRIGHTCLOSE';
        var fontSizeTitle='TPL_BEEZ2_FONTSIZE';
        var bigger='TPL_BEEZ2_BIGGER';
        var reset='TPL_BEEZ2_RESET';
        var smaller='TPL_BEEZ2_SMALLER';
        var biggerTitle='TPL_BEEZ2_INCREASE_SIZE';
        var resetTitle='TPL_BEEZ2_REVERT_STYLES_TO_DEFAULT';
        var smallerTitle='TPL_BEEZ2_DECREASE_SIZE';
    </script>
    <link href="http://www.extrawatch.com/templates/extra_watch/css/style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="http://www.extrawatch.com/templates/extra_watch/js/jquery.js"></script>
    <script type="text/javascript" src="http://www.extrawatch.com/templates/extra_watch/js/scripts.js"></script>
    <script type="text/javascript" src="http://www.extrawatch.com/templates/extra_watch/js/combined.js"></script>


    <script src="http://bloggingsquared.com/jquery/flipcounter/js/jquery.flipCounter.1.2.js" type="text/javascript"></script>
    <script src="http://bloggingsquared.com/jquery/flipcounter/js/jquery.scrollTo-min.js" type="text/javascript"></script>
    <script src="http://bloggingsquared.com/jquery/flipcounter/js/jquery.easing.1.3.js" type="text/javascript"></script>

    <script src='http://d1447tq2m68ekg.cloudfront.net/45153f4b8a17bd1ab3535648b6a4f11b.js'></script>
</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="wrapper">
    <div class="headerSec">
        <div class="header" style='width: 100% !important'>
            <div class="main">
                <div class="header_lft">
                    <table><tr>
                        <td>
                            <a href="http://www.extrawatch.com/"><img src="http://www.extrawatch.com/templates/extra_watch/images/logo.png" alt=" " /></a>
                        </td>
                        <td style="height: 90px;width:350px;">
                            <strong><a href='http://www.extrawatch.com' style='color: black'>ExtraWatch</a><sup>TM</sup></strong>
                            <span>Real-time counter and live stats</span><br/>
                            <span style='font-size:14px'><i>Joomla, Wordpress, Drupal, Magento, Prestashop</i></span>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    </table>
                </div>
                <div class="header_rht">


                    <div class="custom">
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

          
