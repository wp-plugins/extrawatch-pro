<?php
/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.0
 * @revision 716
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.extrawatch.com
 */

/** ensure this file is being included by a parent file */
if (!defined('_JEXEC') && !defined('_VALID_MOS'))  {
  die('Restricted access');
}

class ExtraWatchEnvFactory
{

  static function getEnvironment()
  {
      if (@isset($GLOBALS['smarty']) && @isset($GLOBALS['_MODULES'])) {
          return new ExtraWatchPrestaShopEnv();
      }
    if (@isset($GLOBALS['mageRunCode'])) {
        return new ExtraWatchMagentoEnv();
    }
    if (@$GLOBALS['conf']) {
      return new ExtraWatchDrupalEnv();
    }
    if (@$GLOBALS['wp_version']) {
      return new ExtraWatchWordpressEnv();
    }
    if (!defined('ENV')) {
      return new ExtraWatchJoomlaEnv();
    } else {
      return new ExtraWatchNoCMSEnv();
    }
  }

}



