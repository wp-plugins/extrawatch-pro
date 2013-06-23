<?php
/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.1
 * @revision 768
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.extrawatch.com
 */

/** ensure this file is being included by a parent file */
if (!defined('_JEXEC') && !defined('_VALID_MOS'))
  die('Restricted access');

class ExtraWatchReferer
{
  public $database;
  public $config;
  public $helper;
  public $env;
  public $date;
  public $stat;

 function __construct($database)
  {
    $this->database = $database;
    $this->env = ExtraWatchEnvFactory::getEnvironment();
    $this->config = new ExtraWatchConfig($this->database);
    $this->helper = new ExtraWatchHelper($this->database);
    $this->date = new ExtraWatchDate($this->database);
	$this->stat = new ExtraWatchStat($this->database);
  }
  
function getReferer($url){
	$host="";
    $socialmedia=unserialize(EXTRAWATCH_SOCIAL_MEDIA_REGEX);
    foreach($socialmedia as  $key => $value)
    {
        if (preg_match($key,$url)==1) {
            $host=$value;
        }
    }
    return $host;
}
function checkCameFrom($url){;
    $referer= $this->getReferer($url);
        if (@$referer) {
	        $this->stat->increaseKeyValueInGroup($this->config->getConfigValue("EW_DB_KEY_SOCIAL_MEDIA"),$referer);
        }
	}
}