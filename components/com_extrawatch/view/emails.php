<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 1.2.18
 * @revision 248
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2012 by Matej Koval - All rights reserved!
 * @website http://www.codegravity.com
 */

defined('_JEXEC') or die('Restricted access'); ?>

<h2><?php echo(_EW_EMAIL_REPORTS);?></h2>
<form action='<?php echo $this->extraWatch->config->renderLink("emails", "action=save");?>' method='POST' id='settingsForm'>
  <table width='100%'>
    <?php echo $this->renderInputElement('EMAIL_REPORTS_ENABLED', $color); ?>
    <?php echo $this->renderInputElement('EMAIL_REPORTS_ADDRESS', $color); ?>

    <?php echo $this->renderInputElement('EMAIL_NAME_TRUNCATE', $color); ?>
    <tr>
      <td><h2><?php echo(_EW_EMAIL_REPORTS_VALUE_FILTERS);?>:</h2></td>
    </tr>
    <?php echo $this->renderInputElement('EMAIL_PERCENT_HIGHER_THAN', $color); ?>
    <tr>
      <td>&nbsp;</td>
    </tr>

    <?php echo $this->renderInputElement('EMAIL_ONE_DAY_CHANGE_POSITIVE', $color); ?>
    <?php echo $this->renderInputElement('EMAIL_ONE_DAY_CHANGE_NEGATIVE', $color); ?>
    <tr>
      <td>&nbsp;</td>
    </tr>

    <?php echo $this->renderInputElement('EMAIL_SEVEN_DAY_CHANGE_POSITIVE', $color); ?>
    <?php echo $this->renderInputElement('EMAIL_SEVEN_DAY_CHANGE_NEGATIVE', $color); ?>
    <tr>
      <td>&nbsp;</td>
    </tr>

    <?php echo $this->renderInputElement('EMAIL_TWENTY_EIGHT_DAY_CHANGE_POSITIVE', $color); ?>
    <?php echo $this->renderInputElement('EMAIL_TWENTY_EIGHT_DAY_CHANGE_NEGATIVE', $color); ?>

    <tr>
      <td><h2><?php echo(_EW_EMAIL_SEO_REPORTS);?>:</h2></td>
    </tr>
    <?php echo $this->renderInputElement('EMAIL_SEO_REPORTS_ENABLED', $color); ?>

    <tr>
      <td colspan='3'>

        <br/><br/>
        <?php if (@$result) echo("<span style='color: green;'>" . _EW_SETTINGS_SAVED . "</span><br/><br/>"); ?>
        <input type='submit' name='submitForm' value=' [ <?php echo(_EW_SETTINGS_SAVE);?> ] '/>

      </td>
    </tr>

  </table>

</form>
<br/>
<hr/>

<h2><?php echo(_EW_EMAIL_REPORT_GENERATED);?></h2>

<?php echo nl2br($extraWatchStatHTML->renderNightlyEmail()); ?>




