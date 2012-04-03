<?php

/**
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 1.2.18
 * @revision 41
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2012 byMatej Koval - All rights reserved!
 * @website http://www.codegravity.com
 **/
defined('_JEXEC') or die('Restricted access');
?>

<script type="text/javascript"
        src="<?php echo($this->extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript">
    $.noConflict();
</script>
<script type="text/javascript"
        src="<?php echo($this->extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/js/ajax-dynamic-content.js"></script>
<script type="text/javascript"
        src="<?php echo($this->extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/js/ajax.js"></script>
<script type="text/javascript"
        src="<?php echo($this->extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/js/extrawatch.js.php?rand=<?php echo ($this->extraWatch->config->getRand());?>&time=<?php echo time();?>&env=<?php echo ($this->extraWatch->config->getEnvironment());?>"></script>
<script type="text/javascript"
        src='<?php echo($this->extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/js/fade.js'></script>

<div align='left'>
    <table width='100%' <?php echo $this->extraWatch->helper->getTooltipOnEventHide();?> border='0'>
        <tr>
            <td valign='top'>
                <table width="105%" border='0'>
                    <tr>
                        <td>
                            <a href='http://www.codegravity.com' target='_blank'><img
                                src='<?php echo($this->extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/icons/extrawatch-logo-32x32.gif'
                                align='center' border='0'/></a>
                        </td>
                        <td>
                            <a href='http://www.codegravity.com' target='_blank'
                               style='font-family: verdana; font-size: 14px; align:top; font-weight: bold; color: black;'> <?php echo _EW_ADMINHEADER_JW;?><?php echo($this->extraWatch->config->getConfigValue('EXTRAWATCH_VERSION'));?>
                                .<?php echo($this->extraWatch->config->getConfigValue('EXTRAWATCH_REVISION'));?>
                                PRO</a><br/><?php echo _EW_TITLE;?>
                        </td>
                        <td>
                            <?php require_once(JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "view" . DS . "menu.php"); ?>
                        </td>
                    </tr>
                </table>
            </td>
            <td align='right' valign='top'>
                <?php echo _EW_HEADER_DOWNLOAD;?> <a href='http://www.codegravity.com/download/' target='_blank'>CodeGravity.com</a></span>
                <br/>
                <?php require_once(JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "view" . DS . "frame.php");?>
            </td>
        </tr>
        <tr>
            <td colspan='3'>
                <?php require_once(JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "view" . DS . "navigation.php"); ?>
            </td>
        </tr>
    </table>
</div>
