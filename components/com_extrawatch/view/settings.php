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

<link rel="stylesheet" type="text/css"
      href="<?php echo($this->extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/css/coda-slider.css"/>
<script type="text/javascript"
        src='<?php echo($this->extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/js/jquery-easing.1.2.js'></script>
<script type="text/javascript"
        src='<?php echo($this->extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/js/jquery-easing-compatibility.1.2.js'></script>
<script type="text/javascript"
        src='<?php echo($this->extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/js/coda-slider.1.1.1.js'></script>
<script type="text/javascript">
    jQuery(window).bind("load", function () {
        jQuery("div#slider1").codaSlider()
    });
</script>

<center>
    <form action='<?php echo $this->extraWatch->config->renderLink("settingsSave");?>' method='POST' id='settingsForm'>


        <div class="slider-wrap">
            <div align='left' style='text-align:left;'>
                <h2><?php echo(_EW_SETTINGS_TITLE); echo ExtraWatchHTML::renderOnlineHelp("settings"); ?></h2>
                <a href='<?php echo $this->extraWatch->config->renderLink();?>'>&lt;&lt; <?php echo(_EW_BACK);?></a>
                | <a
                href="javascript:document.getElementById('settingsForm').submit();"> <?php echo(_EW_SETTINGS_SAVE);?></a>
            </div>
            <div id="slider1" class="csw">
                <div class="panelContainer">

                    <div class="panel" title="<?php echo(_EW_SETTINGS_APPEARANCE);?>">
                        <div class="wrapper">
                            <table width='90%'>

                                <tr>
                                    <td colspan='3' align='left'><h3><?php echo(_EW_SETTINGS_LANGUAGE);?></h3></td>
                                </tr>
                                <?php echo ExtraWatchHTML :: renderInputElement('LANGUAGE', $color); ?>

                                <tr>
                                    <td colspan='3' align='left'><h3><?php echo(_EW_SETTINGS_APPEARANCE);?></h3></td>
                                </tr>
                                <?php echo ExtraWatchHTML :: renderInputElement('ONLY_LAST_URI', $color); ?>
                                <?php echo ExtraWatchHTML :: renderInputElement('HIDE_REPETITIVE_TITLE', $color); ?>
                                <?php echo ExtraWatchHTML :: renderInputElement('TRUNCATE_VISITS', $color); ?>
                                <?php echo ExtraWatchHTML :: renderInputElement('TRUNCATE_STATS', $color); ?>
                                <?php echo ExtraWatchHTML :: renderInputElement('TRUNCATE_GOALS', $color); ?>
                                <?php echo ExtraWatchHTML :: renderInputElement('LIMIT_BOTS', $color); ?>
                                <?php echo ExtraWatchHTML :: renderInputElement('LIMIT_VISITORS', $color); ?>
                                <?php echo ExtraWatchHTML :: renderInputElement('TOOLTIP_WIDTH', $color); ?>
                                <?php echo ExtraWatchHTML :: renderInputElement('TOOLTIP_HEIGHT', $color); ?>
                                <?php echo ExtraWatchHTML :: renderInputElement('TOOLTIP_URL', $color); ?>
                                <?php echo ExtraWatchHTML :: renderInputElement('TOOLTIP_ONCLICK', $color); ?>
                                <?php echo ExtraWatchHTML :: renderInputElement('IP_STATS', $color); ?>

                                <tr>
                                    <td colspan='3' align='left'><h3><?php echo(_EW_STATS_MAP);?></h3></td>
                                </tr>
                                <?php echo ExtraWatchHTML :: renderInputElement('IPINFODB_KEY', $color); ?>
                            </table>
                        </div>
                    </div>
                    <div class="panel" title="<?php echo(_EW_STATS_COUNTRY);?>">
                        <div class="wrapper">
                            <table width='90%'>


                                <tr>
                                    <td colspan='3' align='left'><h3><?php echo(_EW_SETTINGS_FRONTEND);?></h3></td>
                                </tr>
                                <?php echo ExtraWatchHTML :: renderInputElement('FRONTEND_HIDE_LOGO', $color); ?>
                                <?php echo ExtraWatchHTML :: renderInputElement('FRONTEND_NOFOLLOW', $color); ?>
                                <?php echo ExtraWatchHTML :: renderInputElement('FRONTEND_NO_BACKLINK', $color); ?>
                                <?php echo ExtraWatchHTML :: renderInputElement('FRONTEND_USER_LINK', $color); ?>

                                <tr>
                                    <td colspan='3' align='left'><h3><?php echo(_EW_STATS_COUNTRY);?></h3></td>
                                </tr>
                                <?php echo ExtraWatchHTML :: renderInputElement('FRONTEND_COUNTRIES', $color); ?>
                                <?php echo ExtraWatchHTML :: renderInputElement('FRONTEND_COUNTRIES_FIRST', $color); ?>
                                <?php echo ExtraWatchHTML :: renderInputElement('FRONTEND_COUNTRIES_NAMES', $color); ?>
                                <?php echo ExtraWatchHTML :: renderInputElement('FRONTEND_COUNTRIES_UPPERCASE', $color); ?>
                                <?php echo ExtraWatchHTML :: renderInputElement('FRONTEND_COUNTRIES_FLAGS_FIRST', $color); ?>
                                <?php echo ExtraWatchHTML :: renderInputElement('FRONTEND_COUNTRIES_NUM', $color); ?>
                                <?php echo ExtraWatchHTML :: renderInputElement('FRONTEND_COUNTRIES_MAX_COLUMNS', $color); ?>
                                <?php echo ExtraWatchHTML :: renderInputElement('FRONTEND_COUNTRIES_MAX_ROWS', $color); ?>

                            </table>
                        </div>
                    </div>

                    <div class="panel" title="<?php echo(_EW_FRONTEND_VISITORS);?>">
                        <div class="wrapper">
                            <table width='90%'>


                                <tr>
                                    <td colspan='3' align='left'><h3><?php echo(_EW_SETTINGS_FRONTEND);?></h3></td>
                                </tr>
                                <?php echo ExtraWatchHTML :: renderInputElement('FRONTEND_VISITORS', $color); ?>
                                <?php echo ExtraWatchHTML :: renderInputElement('FRONTEND_VISITORS_TODAY', $color); ?>
                                <?php echo ExtraWatchHTML :: renderInputElement('FRONTEND_VISITORS_YESTERDAY', $color); ?>
                                <?php echo ExtraWatchHTML :: renderInputElement('FRONTEND_VISITORS_THIS_WEEK', $color); ?>
                                <?php echo ExtraWatchHTML :: renderInputElement('FRONTEND_VISITORS_LAST_WEEK', $color); ?>
                                <?php echo ExtraWatchHTML :: renderInputElement('FRONTEND_VISITORS_THIS_MONTH', $color); ?>
                                <?php echo ExtraWatchHTML :: renderInputElement('FRONTEND_VISITORS_LAST_MONTH', $color); ?>
                                <?php echo ExtraWatchHTML :: renderInputElement('FRONTEND_VISITORS_TOTAL', $color); ?>
                                <?php echo ExtraWatchHTML :: renderInputElement('FRONTEND_VISITORS_TOTAL_INITIAL', $color); ?>
                            </table>
                        </div>
                    </div>

                    <div class="panel" title="<?php echo(_EW_SETTINGS_HISTORY_PERFORMANCE);?>">
                        <div class="wrapper">
                            <table width='90%'>


                                <tr>
                                    <td colspan='3' align='left'>
                                        <h3><?php echo(_EW_SETTINGS_HISTORY_PERFORMANCE);?></h3></td>
                                </tr>
                                <?php echo ExtraWatchHTML :: renderInputElement('HISTORY_MAX_VALUES', $color); ?>
                                <?php echo ExtraWatchHTML :: renderInputElement('HISTORY_MAX_DB_RECORDS', $color); ?>
                                <?php echo ExtraWatchHTML :: renderInputElement('UPDATE_TIME_VISITS', $color); ?>
                                <?php echo ExtraWatchHTML :: renderInputElement('UPDATE_TIME_STATS', $color); ?>
                                <?php echo ExtraWatchHTML :: renderInputElement('STATS_MAX_ROWS', $color); ?>
                                <?php echo ExtraWatchHTML :: renderInputElement('STATS_IP_HITS', $color); ?>
                                <?php echo ExtraWatchHTML :: renderInputElement('MAXID_BOTS', $color); ?>
                                <?php echo ExtraWatchHTML :: renderInputElement('MAXID_VISITORS', $color); ?>
                                <?php echo ExtraWatchHTML :: renderInputElement('STATS_KEEP_DAYS', $color); ?>
                                <?php echo ExtraWatchHTML :: renderInputElement('CACHE_FRONTEND_COUNTRIES', $color); ?>
                                <?php echo ExtraWatchHTML :: renderInputElement('CACHE_FRONTEND_VISITORS', $color); ?>
                                <?php echo ExtraWatchHTML :: renderInputElement('CACHE_FRONTEND_USERS', $color); ?>
                            </table>
                        </div>
                    </div>

                    <div class="panel" title="<?php echo(_EW_SETTINGS_ADVANCED);?>">
                        <div class="wrapper">
                            <table width='90%'>

                                <tr>
                                    <td colspan='3' align='left'><h3><?php echo(_EW_SETTINGS_IGNORE);?></h3></td>
                                </tr>
                                <?php echo ExtraWatchHTML :: renderInputElement('UNINSTALL_KEEP_DATA', $color);?>
                                <?php echo ExtraWatchHTML :: renderInputElement('IGNORE_IP', $color, " <a href=\"javascript:addElementValueById('EXTRAWATCH_IGNORE_IP','" . $_SERVER['REMOTE_ADDR'] . "');\">" . _EW_SETTINGS_ADD_YOUR_IP . " " . $_SERVER['REMOTE_ADDR'] . " " . _EW_SETTINGS_TO_THE_LIST . "</a>");?>
                                <?php echo ExtraWatchHTML :: renderInputElement('IGNORE_URI', $color); ?>
                                <?php echo ExtraWatchHTML :: renderInputElement('IGNORE_USER', $color); ?>

                                <tr>
                                    <td colspan='3' align='left'><h3><?php echo(_EW_SETTINGS_BLOCKING);?></h3></td>
                                </tr>
                                <?php echo ExtraWatchHTML :: renderInputElement('BLOCKING_MESSAGE', $color); ?>

                                <!--   needs rework
                             <tr><td><br/></td></tr>
                                <tr><td colspan='3' align='left'><h3><?php // echo(_EW_SETTINGS_FORCE_TIMEZONE_OFFSET);?></h3></td></tr>
                                -->
                                <?php // echo ExtraWatchHTML :: renderInputElement('TIMEZONE_OFFSET', $color); ?>

                            </table>
                        </div>
                    </div>

                    <div class="panel" title="<?php echo(_EW_SETTINGS_EXPERT);?>">
                        <div class="wrapper">
                            <table width='90%'>
                                <tr>
                                    <td colspan='3' align='left'><h3><?php echo(_EW_SETTINGS_EXPERT);?></h3></td>
                                </tr>
                                <?php echo ExtraWatchHTML :: renderInputElement('SERVER_URI_KEY', $color); ?>

                                <tr>
                                    <td colspan='3'>
                                        <br/><br/>

                                        <h3><?php echo(_EW_SETTINGS_RESET_ALL);?><?php echo ExtraWatchHTML::renderOnlineHelp("reset"); ?></h3>
                                        <a href='<?php echo $this->extraWatch->config->renderLink("resetData");?>'
                                           onClick="javascript:return confirm('<?php echo(_EW_SETTINGS_RESET_CONFIRM);?>')">[<?php echo(_EW_SETTINGS_RESET_ALL_LINK);?>
                                            ]</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan='3'>
                                        <br/><br/>

                                        <h3>Timezone test</h3>
                                        <a href='<?php echo($this->extraWatch->config->getLiveSite()) . "components/com_extrawatch/timezone.php?rand=" . $this->extraWatch->config->getRand(); ?>'
                                           target='_blank'>[Open timezone test]</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <?php         if (@$result) echo("<span style='color: green;'>" . _EW_SETTINGS_SAVED . "</span><br/><br/>"); ?>
        <input type='submit' name='submitForm' value=' [ <?php echo(_EW_SETTINGS_SAVE);?> ] '/>
    </form>

</center>
