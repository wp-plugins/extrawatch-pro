<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 1.2.18
 * @revision 242
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2012 by Matej Koval - All rights reserved!
 * @website http://www.codegravity.com
 */
defined('_JEXEC') or die('Restricted access'); ?>

<center>
  <form action='<?php echo $this->extraWatch->config->renderLink('goals', "action=save");?>' method='POST'>
    <?php $color = ""; ?>
    <table width='80%' cellpadding='3'>
      <tr>
        <td valign='top' align='left' colspan='3'>
          <h2><?php echo($action);?><?php echo $this->extraWatchHTML->renderOnlineHelp("goals-form"); ?></h2>

          <div align='center'
               style='border:1px solid black; width:600px; text-align: justify; text-justify: distribute; padding: 5px;'>
            <?php echo _EW_DESC_GOALS_INSERT; ?>
          </div>
          <br/>
        </td>
      </tr>
      <?php
      $disabled = $this->extraWatch->config->isFree();
      ?>
      <tr>
      <tr><?php echo($this->extraWatchHTML->renderInputField("NAME", $values, $color, TRUE)); ?></tr>
      <tr><?php echo($this->extraWatchHTML->renderInputField("URI_CONDITION", $values, $color)); ?></tr>
      <tr><?php echo($this->extraWatchHTML->renderInputCheckBox("URI_INVERSED", $values, $color, $disabled)); ?></tr>
      <tr><?php echo($this->extraWatchHTML->renderInputField("TITLE_CONDITION", $values, $color)); ?></tr>
      <tr><?php echo($this->extraWatchHTML->renderInputCheckBox("TITLE_INVERSED", $values, $color, $disabled)); ?></tr>
      <tr><?php echo($this->extraWatchHTML->renderInputField("USERNAME_CONDITION", $values, $color)); ?></tr>
      <tr><?php echo($this->extraWatchHTML->renderInputCheckBox("USERNAME_INVERSED", $values, $color, $disabled)); ?></tr>
      <tr><?php echo($this->extraWatchHTML->renderInputField("IP_CONDITION", $values, $color)); ?></tr>
      <tr><?php echo($this->extraWatchHTML->renderInputCheckBox("IP_INVERSED", $values, $color, $disabled)); ?></tr>
      <tr><?php echo($this->extraWatchHTML->renderInputField("CAME_FROM_CONDITION", $values, $color)); ?></tr>
      <tr><?php echo($this->extraWatchHTML->renderInputCheckBox("CAME_FROM_INVERSED", $values, $color, $disabled)); ?></tr>
      <tr><?php echo($this->extraWatchHTML->renderInputField("COUNTRY_CONDITION", $values, $color)); ?></tr>
      <tr><?php echo($this->extraWatchHTML->renderInputCheckBox("COUNTRY_INVERSED", $values, $color, $disabled)); ?></tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td align='right' style='color: gray;'><b><?php echo(_EW_GOALS_ADVANCED . "&nbsp;:");?></b></td>
      </tr>
      <tr><?php echo($this->extraWatchHTML->renderInputField("GET_VAR", $values, $color)); ?></tr>
      <tr><?php echo($this->extraWatchHTML->renderInputField("GET_CONDITION", $values, $color)); ?></tr>
      <tr><?php echo($this->extraWatchHTML->renderInputCheckBox("GET_INVERSED", $values, $color, $disabled)); ?></tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr><?php echo($this->extraWatchHTML->renderInputField("POST_VAR", $values, $color)); ?></tr>
      <tr><?php echo($this->extraWatchHTML->renderInputField("POST_CONDITION", $values, $color)); ?></tr>
      <tr><?php echo($this->extraWatchHTML->renderInputCheckBox("POST_INVERSED", $values, $color, $disabled)); ?></tr>
      <tr></tr>
      <tr>
        <td align='right' style='color: gray;'><b><?php echo(_EW_GOALS_ACTION . "&nbsp;:");?></b></td>
      </tr>
      <tr><?php echo($this->extraWatchHTML->renderInputField("BLOCK", $values, $color)); ?></tr>
      <tr><?php echo($this->extraWatchHTML->renderInputField("REDIRECT", $values, $color)); ?></tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td></td>
      </tr>
      </tr>
      <tr>
        <td colspan='3' align='center'>
          <br/><br/>
          <input type='submit' value='<?php echo $action; ?>'/>
          <?php if (@$values) { ?>
          <input type='hidden' name='id' value='<?php echo @$values['id']; ?>'/>
          <?php } ?>
        </td>
    </table>
  </form>
</center>
