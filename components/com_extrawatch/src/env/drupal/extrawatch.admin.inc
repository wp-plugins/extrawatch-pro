<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 1.2.18
 * @revision 530
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by Matej Koval - All rights reserved!
 * @website http://www.extrawatch.com
 */

function extrawatch() {
  define('JPATH_BASE2', dirname(__FILE__));
  define('_JEXEC', 1);
  if (!defined('ENV')) define('ENV', 1);
  include('administrator/components/com_extrawatch/admin.extrawatch.php');
}
