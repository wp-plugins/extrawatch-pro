<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.2
 * @revision 1390
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.extrawatch.com
 */

defined('_JEXEC') or die('Restricted access');

jimport('joomla.filesystem.folder');
jimport('joomla.filesystem.file');


class pkg_extrawatchInstallerScript {


    function postflight($action, $installer)
    {

    if ($action == "install") {
        $app = JFactory::getApplication();
        $code = "<iframe src=\"http://www.extrawatch.com/track/extrawatch/2.2/install/?time=".time()."\" width=\"1px\" height=\"1px\" frameborder=\"0\" style='max-width:0px;'></iframe>";
        $app->enqueueMessage($code);
    }
}



}
