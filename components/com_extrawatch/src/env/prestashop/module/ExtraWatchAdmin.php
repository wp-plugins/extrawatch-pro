<?php
/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 1.2.18
 * @revision 388
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2012 by Matej Koval - All rights reserved!
 * @website http://www.codegravity.com
 */

// Security
if (!defined('_PS_VERSION_'))
    exit;

$prestaShopDir=realpath(dirname(__FILE__)."../../../");
include_once($prestaShopDir.'/classes/AdminTab.php');

class ExtraWatchAdmin extends AdminTab {

    private $module = 'extrawatch';

    public function __construct() {
        parent::__construct();
    }

    public function display() {
        define("ENV", 1);
        define("_JEXEC",1);
        $rootDir = realpath(realpath(dirname(__FILE__)).DS."..".DS."..");
        $dir = realpath($rootDir.DS."modules".DS."extrawatchmodule".DS."extrawatch");
        define("JPATH_BASE2", $dir);
        require_once($dir.DS."administrator".DS."components".DS."com_extrawatch".DS."admin.extrawatch.php");

        $output = extrawatch_mainController();

        echo $output;
    }
}