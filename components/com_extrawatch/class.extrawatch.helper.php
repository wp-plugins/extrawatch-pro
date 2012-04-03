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

class ExtraWatchHelper
{

    var $env;
    var $database;
    var $config;

    function ExtraWatchHelper($database)
    {
        $this->env = ExtraWatchEnvFactory::getEnvironment();
        $this->database = $database;
        $this->config = new ExtraWatchConfig($this->database);
    }

    /**
     * helper
     */
    function getIP2LocationURL($ip)
    {
        $url = $this->config->getConfigValue('EXTRAWATCH_TOOLTIP_URL');
        $result = str_replace("{ip}", $ip, $url);
        //TODO : appears to be a bug in str_ireplace - doesn't work!
        return $result;
    }

    /**
     * helper
     */
    function resetData()
    {

        foreach (unserialize(EXTRAWATCH_TABLES_TO_TRUNCATE) as $table) {
            $query = sprintf("DELETE FROM `$table`");
            $this->database->executeQuery($query);
        }
        return true;
    }


    /**
     * helper
     *
     * @return unknown
     */
    function isModulePublished()
    {
        $query = sprintf("select published from #__modules where module = 'mod_extrawatch_agent' order by id desc limit 1; ");
        $published = $this->database->resultQuery($query);
        return $published;
    }


    /**
     * helper
     *
     * @return unknown
     */
    function getURI()
    {
        $redirURI = addslashes(strip_tags(@ $_SERVER[$this->config->getConfigValue('EXTRAWATCH_SERVER_URI_KEY')]));
        $uri = htmlspecialchars(addslashes(strip_tags(@ $_SERVER['REQUEST_URI'])));

        if (@ $redirURI && @ substr($redirURI, -9, 9) != "index.php")
            $uri = $redirURI;

        return $uri;
    }

    /**
     * helper
     */
    function truncate($str, $len = "")
    {
        if (@ !$len)
            $len = $this->config->getConfigValue('EXTRAWATCH_TRUNCATE_VISITS');

        if (strlen($str) < $len)
            return $str;
        else
            return substr($str, 0, $len) . "...";
    }

    /**
     * config
     */
    function saveSettings($post)
    {
        ExtraWatchHelper :: saveConfigValues(unserialize(EXTRAWATCH_CHECKBOX_NAMES_ARRAY), $post);
        return true;
    }

    /**
     * Used by both - save anti-spam and save settings
     * @param  $checkboxNamesArray
     * @param  $post
     * @return void
     */
    function saveConfigValues($checkboxNamesArray, $post)
    {

        foreach ($post as $key => $value) {
            if (strstr($key, "EXTRAWATCH_")) {
                $this->config->saveConfigValue($key, trim($value));
            }
        }
        //hack :( explicitly save checkbox values
        foreach (@$checkboxNamesArray as $key => $value) {
            if (@ !$post[$value]) { //if there is no value - checkbox unchecked
                $this->config->saveConfigValue($value, "Off");
            }
        }
        // explicitly reset chache because of frontend settings
        ExtraWatchCache :: clearCache();

    }


    function getUser($env)
    {
        return $env->getCurrentUser();
    }

    function getUsername()
    {
        $user = & ExtraWatchHelper::getUser($this->env);
        return $user->getUsername();
    }


    /**
     * helper
     */
    // fnmatch PHP function only on UNIX :(, this replaces the wildcard search
    function wildcardSearch($pattern, $string)
    {
        return preg_match("#^" . strtr(preg_quote($pattern, '#'), array(
            '\*' => '.*',
            '\?' => '.'
        )) . "$#i", $string);
    }


    /**
     * helper
     */
    function getTooltipOnClick()
    {
        return $this->config->getCheckboxValue("EXTRAWATCH_TOOLTIP_ONCLICK");
    }

    /**
     * helper
     * @return unknown
     */
    function getTooltipOnEvent()
    {
        if ($this->getTooltipOnClick()) {
            return "title='" . _EW_TOOLTIP_CLICK . "' onclick";
        } else {
            return "title='" . _EW_TOOLTIP_MOUSE_OVER . "' onmouseover";
        }
    }

    /**
     * helper
     */
    function getTooltipOnEventHide()
    {
        if (!$this->getTooltipOnClick()) {
            return "onClick='ajax_hideTooltip();refreshStats();'";
        }
        return;
    }

    /**
     * helper
     * @return unknown
     */
    function getAvailableLanguages()
    {
        $langDirPath = JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "lang";

        if ($handle = @ opendir($langDirPath)) {
            while (false !== ($file = readdir($handle))) {
                if (strstr($file, ".php")) {
                    $file = str_replace(".php", "", $file);
                    $langArray[] = $file;
                }
            }
            closedir($handle);
        }
        sort($langArray);
        return @ $langArray;
    }

    /**
     * helper
     */
    function countryByIp($ip)
    {

        if ($ip == '127.0.0.1') {
            /* ignore localhost */
            return;
        }

        $query = sprintf("select ip, country from #__extrawatch where (ip = '%s' and country is not NULL) limit 1", $this->database->getEscaped($ip));
        $row3 = $this->database->resultQuery($query);

        if (@ !$row3->country) {

            $iplook = new ip2country($ip);
            $iplook->UseDB = true;
            $iplook->db_tablename = "#__extrawatch_ip2c";

            if (($iplook->LookUp())) {
                $country = strtolower($iplook->Country);
            } else {
                $country = EXTRAWATCH_UNKNOWN_COUNTRY;
            }

            $query3 = sprintf("update #__extrawatch set country = '%s' where ip = '%s'", $this->database->getEscaped($country), $this->database->getEscaped($ip));
            $this->database->executeQuery($query3);

        } else {
            $country = $row3->country;
        }

        return @ $country;
    }

    /**
     * helper
     */
    function countryCodeToCountryName($code)
    {
        $query = sprintf("select country from #__extrawatch_cc2c where cc = '%s' limit 1", $this->database->getEscaped($code));
        $countryName = $this->database->resultQuery($query);
        return $countryName;
    }

    function removeRepetitiveTitle($title)
    {
        if ($this->config->getCheckboxValue("EXTRAWATCH_HIDE_REPETITIVE_TITLE")) {
            $config = new JConfig();
            $title = str_replace($config->sitename, "", $title);
        }
        return $title;
    }


    /**
     * filtering input get var
     * @param  $key
     * @return mixed
     */
    function requestGet($key = null)
    {
        if (isset($key)) {
            //print_r(ExtraWatchEnvFactory::getEnvironment());
            return strip_tags(ExtraWatchEnvFactory::getEnvironment()->getRequest()->getVar($key));
        } else {
            $getArray = ExtraWatchEnvFactory::getEnvironment()->getRequest()->get('get');
            foreach ($getArray as &$get) { /* traversing the array and stripping tags */
                $get = strip_tags($get);
            }
            return $getArray;
        }
    }

    /**
     * Filtering input post var
     * @param  $key
     * @return mixed
     */
    function requestPost($key = null)
    {
        if (isset($key)) {
            return ExtraWatchEnvFactory::getEnvironment()->getRequest()->getVar($key);
        } else {
            $postArray = ExtraWatchEnvFactory::getEnvironment()->getRequest()->get('post');
            foreach ($postArray as &$post) { /* traversing the array and stripping tags */
                if (is_array($post)) {
                    foreach ($post as &$postNested) {
                        $postNested = strip_tags($postNested);
                    }
                } else {
                    $post = strip_tags($post);
                }
            }
            return $postArray;
        }

    }

    /**
     * sender
     *
     * @param  $recipient
     * @param  $sender
     * @param  $subject
     * @param  $body
     * @return void
     */
    function sendEmail($recipient, $sender, $subject, $body)
    {
        $body = ("<html><body>" . $body . "</body></html>");
        $cc = $bcc = $attachment = $replyto = $replytoname = "";
        $this->env->sendMail($recipient, $sender, $recipient, $subject, $body, 1, $cc, $bcc, $attachment, $replyto, $replytoname);
    }

    /**
     * Config
     * @param  $post
     * @return bool
     */
    function saveAntiSpamSettings($post)
    {

        $checkboxNamesArray = array(
            'EXTRAWATCH_SPAMWORD_BANS_ENABLED'
        );

        ExtraWatchHelper :: saveConfigValues($checkboxNamesArray, $post);
        return true;
    }

    /**
     * Config
     * @param  $post
     * @return bool
     */
    function saveEmailSettings($post)
    {

        $checkboxNamesArray = array(
            'EXTRAWATCH_EMAIL_REPORTS_ENABLED',
            'EXTRAWATCH_EMAIL_SEO_REPORTS_ENABLED'
        );

        ExtraWatchHelper :: saveConfigValues($checkboxNamesArray, $post);
        return true;
    }

    /**
     * Config
     * @param  $post
     * @return bool
     */
    function saveSEOSettings($post)
    {

        $checkboxNamesArray = array(
            'EXTRAWATCH_SEO_RENDER_ONLY_CHANGED'
        );

        ExtraWatchHelper :: saveConfigValues($checkboxNamesArray, $post);
        return true;
    }

    // HSV Values:Number 0-1
    function HSV_TO_RGB($H, $S, $V)
    { // RGB Results:Number 0-255
        $RGB = array();

        if ($S == 0) {
            $R = $G = $B = $V * 255;
        }
        else
        {
            $var_H = $H * 6;
            $var_i = floor($var_H);
            $var_1 = $V * (1 - $S);
            $var_2 = $V * (1 - $S * ($var_H - $var_i));
            $var_3 = $V * (1 - $S * (1 - ($var_H - $var_i)));

            if ($var_i == 0) {
                $var_R = $V;
                $var_G = $var_3;
                $var_B = $var_1;
            }
            else if ($var_i == 1) {
                $var_R = $var_2;
                $var_G = $V;
                $var_B = $var_1;
            }
            else if ($var_i == 2) {
                $var_R = $var_1;
                $var_G = $V;
                $var_B = $var_3;
            }
            else if ($var_i == 3) {
                $var_R = $var_1;
                $var_G = $var_2;
                $var_B = $V;
            }
            else if ($var_i == 4) {
                $var_R = $var_3;
                $var_G = $var_1;
                $var_B = $V;
            }
            else {
                $var_R = $V;
                $var_G = $var_1;
                $var_B = $var_2;
            }

            $R = $var_R * 255;
            $G = $var_G * 255;
            $B = $var_B * 255;
        }

        $RGB['R'] = floor($R);
        $RGB['G'] = floor($G);
        $RGB['B'] = floor($B);

        return $RGB;
    }

    function  hueFromRatio($ratio)
    {
        $offset = 1 / 4;
        return 1 - ($ratio * 3 / 4 + $offset);
    }

    function rgbFromRatio($ratio)
    {
        $hue = ExtraWatchHelper::hueFromRatio($ratio);
        $rgb = ExtraWatchHelper::HSV_TO_RGB($hue, 1, 1);
        $rgbString = "rgb(" . $rgb['R'] . ", " . $rgb['G'] . ", " . $rgb['B'] . ")";
        return $rgbString;
    }

    function renderNoData()
    {
        return "<i>" . _EW_NO_DATA . "</i>";
    }

}

?>
