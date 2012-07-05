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

class ExtraWatchHeatmap
{

    public $database;
    public $helper;
    public $stat;
    public $block;
    public $date;

    const HEATMAP_PARAM_NAME = "extraWatchHeatmap";
    const HEATMAP_PARAM_DAY_NAME = "extraWatchDay";
    const HEATMAP_PARAM_HASH = "randHash";

    function __construct($database)
    {
        $this->database = $database;
        $this->helper = new ExtraWatchHelper($this->database);
        $this->stat = new ExtraWatchStat($this->database);
        $this->date = new ExtraWatchDate($this->database);
    }

    

}


