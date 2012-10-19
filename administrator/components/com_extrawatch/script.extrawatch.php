<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 1.2.18
 * @revision 432
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2012 by Matej Koval - All rights reserved!
 * @website http://www.codegravity.com
 */

/** ensure this file is being included by a parent file */
if (!defined('_JEXEC') && !defined('_VALID_MOS')) {
    die('Restricted access');
}

jimport('joomla.filesystem.folder');
jimport('joomla.filesystem.file');

require('install.extrawatch.php');

class Com_AdmintoolsInstallerScript {

    /**
     * Runs after install, update or discover_update
     * @param string $type install, update or discover_update
     * @param JInstaller $parent
     */
    function postflight( $type, $parent )
    {
        com_install();
    }

    /**
     * Runs on uninstallation
     *
     * @param JInstaller $parent
     */
    function uninstall($parent)
    {
        com_uninstall();
    }


}