<?php
/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.1
 * @revision 789
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
    public $uasparser;

    function __construct($database)
    {
        $this->database = $database;
        $this->env = ExtraWatchEnvFactory::getEnvironment();
        $this->config = new ExtraWatchConfig($this->database);
        $this->helper = new ExtraWatchHelper($this->database);
        $this->date = new ExtraWatchDate($this->database);
        $this->stat = new ExtraWatchStat($this->database);

        $this->uasparser = new UASparser();
        $this->uasparser->SetCacheDir($this->env->getTempDirectory());
        $this->ret = $this->uasparser->Parse();
        $this->user_agent_string = $_SERVER['HTTP_USER_AGENT'];
    }

    function identifyBrowser($userAgent)
    {
        if (stristr($userAgent, "Chrome"))
            $browser = "Chrome";
        else
            if (stristr($userAgent, "Safari"))
                $browser = "Safari";
            else
                if (stristr($userAgent, "MSIE"))
                    $browser = "Explorer";
                else
                    if (stristr($userAgent, "Firefox"))
                        $browser = "Firefox";
                    else
                        if (stristr($userAgent, "Opera"))
                            $browser = "Opera";
                        else
                            if (stristr($userAgent, "Mozilla"))
                                $browser = "Mozilla";

        return @ $browser;
    }

    function identifySocialMedia($url){
        $socialmedia=unserialize(EXTRAWATCH_SOCIAL_MEDIA_REGEX);
        foreach($socialmedia as  $key => $value)
        {
            if (preg_match($key,$url)==1) {
                $host=$value;
                return $host;
            }
        }
        return  false;
    }

    function identifyDevice($stringua) {
        $pos1 = strpos($stringua, "(");
        $pos2= strpos($stringua,  ")");
        $len = strlen($stringua);
        $rem = substr($stringua,$pos1+1,$pos2-$pos1-1);
        $pieces = explode(";", $rem);
        $cnt=count($pieces);
        if($cnt==5)
        {
            $arr = array('name' => $pieces[4], 'icon' => $ret['os_icon']);
            $arr=json_encode($arr);
            return $arr;
        }

    }

    function identifyOS($ret){
        $arr = array('name' => $ret['os_name'], 'icon' => $ret['os_icon']);
        $arr=json_encode($arr);
    }



    function checkSocialMedia($url){
        $identifiedSocialMedia = $this->identifySocialMedia($url);
        if(!$referer)  {
            $this->stat->increaseKeyValueInGroup($this->config->getConfigValue("EW_DB_KEY_SOCIAL_MEDIA"),$identifiedSocialMedia);
        }

    }

    function checkDevice($stringua,$ret){
        $identifiedDevice = $this->identifyDevice($stringua);
        $this->stat->increaseKeyValueInGroup($this->config->getConfigValue("EW_DB_KEY_DEVICES"),$identifiedDevice);
    }


    function checkOS($ret){
        $identifiedOS = $this->identifyOS($ret);
        $this->stat->increaseKeyValueInGroup($this->config->getConfigValue("EW_DB_KEY_OS"),$identifiedOS);
    }

}

