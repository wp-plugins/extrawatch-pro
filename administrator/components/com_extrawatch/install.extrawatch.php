<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.1
 * @revision 815
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.extrawatch.com
 */

/** ensure this file is being included by a parent file */
if (!defined('_JEXEC') && !defined('_VALID_MOS')) {
  die('Restricted access');
}






function com_install()
{

  @ set_time_limit(0);

  $mainframe = & JFactory :: getApplication('site');
  $mainframe->initialise();
  $database = & JFactory :: getDBO();

  if ("1.6" == "1.5" && !version_compare(JVERSION, '1.6.0', '<')) {
    echo("<span style='color: red'><h2>Error: You are using joomla " . JVERSION . " but the installation package is for version 1.6 ! Uninstall this version, <a href='http://www.extrawatch.com/download'>Go to download section</a>, download the package for Joomla " . JVERSION . ", and install again.</h2></span>");
    return -1;
  } elseif ("1.6" == "1.6" && !version_compare(JVERSION, '1.6.0', '>=')) {
    echo("<span style='color: red'><h2>Error: You are using joomla " . JVERSION . " but the installation package is for version 1.6 ! Uninstall this version, <a href='http://www.extrawatch.com/download'>Go to download section</a>, download the package for Joomla " . JVERSION . ", and install again.</h2></span>");
    return -1;
  }

  ?>
<center>
  <table width="100%" border="0">
    <tr>
      <td></td>
      <td>
        <strong>ExtraWatch </strong><br/>
        <font class="small">&copy; Copyright 2006-2013 by CodeGravity.com - <a href='http://www.extrawatch.com'
                                                                             target='_blank'>www.extrawatch.com</a><br/>
          This component is copyrighted software. Distribution is prohibited.</font><br/>
      </td>
    </tr>
    <tr>
      <td colspan="2"><br/>
        <code>Installation Process :<br/>
          <?php
          ExtraWatchEnvSetup::initializeMenu($database);
          extrawatch_initialize_ip2country(JPATH_SITE, $database);
          try {
            ExtraWatchHelper::fixFilePermissions(unserialize(EXTRAWATCH_FILE_PERMISSIONS_TO_FIX));
          } catch (Exception $e) {
            echo("Could not fix file permissions: ".$e);
          }
          ?>
          <br/><br/>
          <font color="green"><b>Installation finished.</b></font><br/><br/>
          <br/>
        </code>

        <iframe src="http://www.extrawatch.com/track/extrawatch/2.1/install/" width="1px" frameborder="0"
                height="1px">
        </iframe>


      </td>
    </tr>
  </table>
</center>
<?php


}
