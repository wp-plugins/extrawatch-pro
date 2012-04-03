<?php

/**
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 1.2.18
 * @revision 41
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2012 by Matej Koval - All rights reserved!
 * @website http://www.codegravity.com
 **/

/** ensure this file is being included by a parent file */
if (!defined('_JEXEC') && !defined('_VALID_MOS'))
    die('Restricted access');

class ExtraWatch
{

    var $env;
    var $database;

    var $visit;
    var $stat;
    var $config;
    var $helper;
    var $goal;
    var $block;
    var $cache;
    var $sizes;
    var $flow;
    var $date;
    var $seo;

    function ExtraWatch()
    {
        $this->env = ExtraWatchEnvFactory::getEnvironment();
        $this->database = & $this->env->getDatabase();
        $this->stat = new ExtraWatchStat($this->database);
        $this->config = new ExtraWatchConfig($this->database);
        $this->helper = new ExtraWatchHelper($this->database);
        $this->goal = new ExtraWatchGoal($this->database);
        $this->block = new ExtraWatchBlock($this->database);
        $this->visit = new ExtraWatchVisit($this->database);
        $this->cache = new ExtraWatchCache($this->database);
        $this->sizes = new ExtraWatchSizes($this->database);
        $this->flow = new ExtraWatchFlow($this->visit, $this->database);
        $this->date = new ExtraWatchDate($this->database);
        $this->heatmap = new ExtraWatchHeatmap($this->database);
        $this->seo = new ExtraWatchSEO($this->database);
    }


}

?>