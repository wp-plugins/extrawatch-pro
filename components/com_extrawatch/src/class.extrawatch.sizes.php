<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 1.2.18
 * @revision 211
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2012 by Matej Koval - All rights reserved!
 * @website http://www.codegravity.com
 */

/** ensure this file is being included by a parent file */
if (!defined('_JEXEC') && !defined('_VALID_MOS'))
    die('Restricted access');

class ExtraWatchSizes
{

    public $env;
    public $database;
    public $config;
    public $helper;
    public $date;

    const SCAN_DIR_MAIN = 'SCAN_DIR_MAIN';
    const SCAN_DIR_ADMIN = 'SCAN_DIR_ADMIN';
    const REAL_DIR_MAIN = 'REAL_DIR_MAIN';
    const REAL_DIR_ADMIN = 'REAL_DIR_ADMIN';

    function __construct($database)
    {
        $this->env = ExtraWatchEnvFactory::getEnvironment();
        $this->database = $database;
        $this->config = new ExtraWatchConfig($this->database);
        $this->helper = new ExtraWatchHelper($this->database);
        $this->date = new ExtraWatchDate($this->database);
    }

    

}


