<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.1
 * @revision 787
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.extrawatch.com
 */
defined('_JEXEC') or die('Restricted access');

/** ensure this file is being included by a parent file */
if (!defined('_JEXEC') && !defined('_VALID_MOS')) {
  die('Restricted access');
}

class AdminExtraWatchHTML
{

  public $env;

  public $database;
  public $mosConfig_live_site;
  public $config;
  public $helper;
  public $visit;
  public $goal;

  function __construct()
  {
    $this->env = ExtraWatchEnvFactory::getEnvironment();
    $this->database = & $this->env->getDatabase();
    $this->config = new ExtraWatchConfig($this->database);
    $this->helper = new ExtraWatchHelper($this->database);
    $this->goal = new ExtraWatchGoal($this->database);
    $this->visit = new ExtraWatchVisit();
  }

  function getRand()
  {
    $query = "select value from #__extrawatch_config where name = 'rand' order by id desc limit 1";
    $rows = $this->database->objectListQuery($query);
    $row = @ $rows[0];
    $rand = @ $row->value;
    return $rand;
  }

}


