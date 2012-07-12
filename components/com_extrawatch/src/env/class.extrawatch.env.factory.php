<?php
/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 1.2.18
 * @revision 233
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2012 by Matej Koval - All rights reserved!
 * @website http://www.codegravity.com
 */

/** ensure this file is being included by a parent file */
if (!defined('_JEXEC') && !defined('_VALID_MOS'))  {
  die('Restricted access');
}

class ExtraWatchEnvFactory
{

  static function getEnvironment()
  {
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



