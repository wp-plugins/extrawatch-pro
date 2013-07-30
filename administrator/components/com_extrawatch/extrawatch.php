<?php
/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.2
 * @revision 927
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.extrawatch.com
 */

/** ensure this file is being included by a parent file */
defined('_JEXEC') or die('Restricted access');

if (!defined('_JEXEC')) {
    define('_JEXEC', 1);
}
if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}

$input = JFactory::getApplication()->input;
$task = $input->get('task');
JToolbarHelper::title('ExtraWatch 2.2.927 PRO');
require_once (JPATH_BASE.DS."components".DS."com_extrawatch".DS."admin.extrawatch.php");


