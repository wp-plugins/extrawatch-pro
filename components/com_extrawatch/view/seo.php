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
<h2><?php echo _EW_SEO_REPORT_SETTINGS;?></h2>
<form action='<?php echo $this->extraWatch->config->renderLink("seo", "save");?>' method='POST' id='seoForm'>
    <table>
        <?php
        $color = "";
        echo $this->renderInputElement('SEO_RENDER_ONLY_CHANGED', $color);
        ?>
        <tr>
            <td colspan='3'>
                <br/>
                <?php if (@$result) echo("<span style='color: green;'>" . _EW_SETTINGS_SAVED . "</span><br/><br/>"); ?>
                <input type='submit' name='submitForm' value=' [ <?php echo(_EW_SETTINGS_SAVE);?> ] '/>
            </td>
        </tr>
    </table>
</form>
<br/><br/>

<h2><?php echo _EW_SEO_REPORT_FOR;?> <?php echo $this->extraWatch->date->getDateByDay($day); ?></h2>
<table width="100%">
    <tr>
        <td colspan="5">
            <?php echo $this->renderDateControlGet('seo', $day); ?>
        </td>
    </tr>
</table>
<br/>
<?php
$extraWatchSEOHTML = new ExtraWatchSEOHTML($this->extraWatch);
echo $extraWatchSEOHTML->renderSEOReport($day, FALSE, !$this->extraWatch->config->getCheckboxValue('EXTRAWATCH_SEO_RENDER_ONLY_CHANGED'));
?>
<br/>
<br/>
<table width="100%">
    <tr>
        <td colspan="5">
            <?php echo $this->renderDateControlGet('seo', $day); ?>
        </td>
    </tr>
</table>
<!--PRO_END-->


