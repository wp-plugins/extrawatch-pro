<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 1.2.18
 * @revision 386
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2012 by Matej Koval - All rights reserved!
 * @website http://www.codegravity.com
 */
defined('_JEXEC') or die('Restricted access'); ?>


<?php
$day = ExtraWatchHelper::requestGet('day');
if (!$day) {
  $day = $extraWatch->date->jwDateToday(); // yesterday by default, because it contains
}
?>
<h2><?php echo _EW_SEO_REPORT_SETTINGS;?></h2>
<form action='<?php echo $extraWatch->config->renderLink("seo", "save");?>' method='POST' id='seoForm'>
  <table>
    <?php
    $color = "";
    echo $extraWatchHTML->renderInputElement('SEO_RENDER_ONLY_CHANGED', $color);
    ?>
    <tr>
      <td colspan='3'>
        <br/>
        <?php if (@$result) echo("<span style='color: green;'>" . _EW_SETTINGS_SAVED . "</span><br/><br/>"); ?>
        <input type='submit' name='submitForm' value=' [ <?php echo(_EW_SETTINGS_SAVE);?> ] '/>
      </td>
    </tr>
  </table>
  <input name='form_key' type='hidden' value="<?php echo $extraWatch->env->getFormKey();?>" />
</form>
<br/><br/>

<h2><?php echo _EW_SEO_REPORT_FOR;?> <?php echo $extraWatch->date->getDateByDay($day); ?></h2>
<table width="100%">
  <tr>
    <td colspan="5">
      <?php echo $extraWatchHTML->renderDateControlGet('seo', $day); ?>
    </td>
  </tr>
</table>
<br/>
<?php
$extraWatchSEOHTML = new ExtraWatchSEOHTML($extraWatch);
echo $extraWatchSEOHTML->renderSEOReport($day, FALSE, !$extraWatch->config->getCheckboxValue('EXTRAWATCH_SEO_RENDER_ONLY_CHANGED'));
?>
<br/>
<br/>
<table width="100%">
  <tr>
    <td colspan="5">
      <?php echo $extraWatchHTML->renderDateControlGet('seo', $day); ?>
    </td>
  </tr>
</table>



