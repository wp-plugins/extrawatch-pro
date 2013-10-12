<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.2
 * @revision 1215
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.extrawatch.com
 */

defined('_JEXEC') or die('Restricted access');

jimport('joomla.filesystem.folder');
jimport('joomla.filesystem.file');


class com_extrawatchInstallerScript {


    function postflight($action, $installer)
    {


        switch ($action)
        {
            case "install":
                $extraWatchAdminDir = JPATH_ADMINISTRATOR.DIRECTORY_SEPARATOR."components".DIRECTORY_SEPARATOR."com_extrawatch";
                require_once($extraWatchAdminDir.DIRECTORY_SEPARATOR."install.extrawatch.php");
				
				
				$currentDir = dirname(__FILE__);
				$extraWatchAdminControllerFile = $currentDir.DIRECTORY_SEPARATOR."admin".DIRECTORY_SEPARATOR."extrawatch.php";
				echo("copying: $extraWatchAdminControllerFile to $extraWatchAdminDir");
				copy($extraWatchAdminControllerFile, $extraWatchAdminDir.DIRECTORY_SEPARATOR."extrawatch.php"); 

				
                $database = & JFactory :: getDBO();
                extrawatch_initialize_ip2country(JPATH_SITE, $database);
                $this->publishExtraWatchModules($database);
                try {
                    extrawatch_fixFilePermissions();
                } catch (Exception $e) {
                    echo("Could not fix file permissions: ".$e);
                }
				
				//die("script install file $action, $installer");
				

                break;
        }
    }

    /**
     * this initializes modules to particular position
     * @param $database
     */
    private function publishExtraWatchModules($database)
    {
        /*
         must be done later, triggered after the modules are initialized

         $database->setQuery("UPDATE #__modules set position = 'position-7', published = 1, ordering = 1 where `module` like 'mod_extrawatch_%' ");
         $database->query();

         $database->setQuery("SELECT `id` from #__modules where `module` like 'mod_extrawatch_%' ");
         $database->query();
         $idList = $database->loadObjectList();
         if (@$idList) {
             foreach ($idList as $id) {
                 $database->setQuery(sprintf("INSERT INTO #__modules_menu (`moduleid`, `menuid`) values '%d', '0'", (int)$id));
                 $database->query();
             }
         }*/
    }


/*    /**
     * Runs on uninstallation
     *
     * @param JInstaller $parent
     */
    function uninstall($parent)
    {

        $extraWatchAdminDir = JPATH_ADMINISTRATOR.DIRECTORY_SEPARATOR."components".DIRECTORY_SEPARATOR."com_extrawatch";
        $path = $extraWatchAdminDir.DIRECTORY_SEPARATOR."uninstall.extrawatch.php";
        if (file_exists($path)) {
            require_once($path);
            uninstallExtraWatchMain();
            return true;
        }

    }


}
