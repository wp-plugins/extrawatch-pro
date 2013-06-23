<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.1
 * @revision 777
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.codegravity.com
 */

defined('_JEXEC') or die('Restricted access'); ?>

<form action="<?php echo $extraWatch->config->renderLink("antiSpamSave");?>" method='POST' id='settingsForm'" method="POST">

    <div class="panel">
      <div class="wrapper">
        <table style='border: 1px solid #dddddd; padding: 2px;>
                <tr><td colspan='4' align='left'><h2><?php echo(_EW_SETTINGS_ANTI_SPAM);?></h2></td></tr>
        <tr>
          <td colspan='2'>
          </td>
        </tr>
        <tr>
          <td valign='top' width='50%'>
            <h3><?php echo(_EW_ANTISPAM_ADDRESSES);?>:</h3>
            <?php echo $extraWatchBlockHTML->renderBlockedInfo(); ?><br/><br/>

          </td>
        </tr>
        <tr>
          <td colspan='4' align='left'><h2><?php echo(_EW_ANTISPAM_IMPORT_CSV);?>:</h2>
            <form action="<?php echo $extraWatch->config->getAdministratorIndex();?>?option=com_joomlawatch&task=antiSpam" method="post" enctype="multipart/form-data">
              <input type="file" name="file" id="file"/>
              <input type='hidden' name='option' value='com_joomlawatch'/>
              <input type='hidden' name='task' value='antiSpam'/>
              <input type='hidden' name='action' value='saveAntiSpamCsv'/>
              <input name='form_key' type='hidden' value="<?php echo $extraWatch->env->getFormKey();?>" />
              <input type="submit" name="submit" value="Submit"/>
            </form>
          </td>
        </tr>
        <tr><td>
          <div style="height: 300px; overflow: auto;">
            <table>
              <?php echo($extraWatchBlockHTML->renderBlockedIPs(0, TRUE, FALSE)); ?>
            </table>
          </div>
          <br/>
        </td>
          <td valign='top' width='50%'>
            <table border='0'>
              <tr>
                <td colspan='2'><h3><?php echo(_EW_ANTISPAM_SETTINGS);?></h3></td>
              </tr>
              <?php echo $extraWatchHTML->renderInputElement('SPAMWORD_BANS_ENABLED', $color); ?>

              <?php echo $extraWatchHTML->renderInputElement('SPAMWORD_LIST', $color); ?>

              <tr>
                <td></td>
                <td>
                  <center>
                    <br/><br/>
                    <input type='submit' value='<?php echo(_EW_SETTINGS_SAVE);?>'/>
                    <input type='hidden' name='option' value='com_extrawatch'/>
                    <input type='hidden' name='task' value='antiSpam'/>
                    <input type='hidden' name='action' value='save'/>
                  </center>
                </td>
              </tr>

            </table>
          </td>
        </tr>
        </table>
      </div>
    </div>
    <br/><br/>
    <input name='form_key' type='hidden' value="<?php echo $extraWatch->env->getFormKey();?>" />
</form>

