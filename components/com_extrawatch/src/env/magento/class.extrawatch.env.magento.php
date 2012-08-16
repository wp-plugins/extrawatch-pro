<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 1.2.18
 * @revision 270
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2012 by Matej Koval - All rights reserved!
 * @website http://www.codegravity.com
 */

/** ensure this file is being included by a parent file */
if (!defined('_JEXEC') && !defined('_VALID_MOS'))
  die('Restricted access');

class ExtraWatchMagentoEnv implements ExtraWatchEnv
{


  function getDatabase()
  {
    return new ExtraWatchDBWrapMagento();
  }

  function getRequest()
  {
    return new EnvRequest();
  }

  function & getURI()
  {
    return "fakeURL";
  }

  function isSSL()
  {
    //TODO change
    return FALSE;
  }

  function getRootSite()
  {
    //print_r($_SERVER);
    $hostname = "http://" . $_SERVER['HTTP_HOST'];
    $scriptName = $_SERVER['SCRIPT_NAME'];
    $subdir = str_replace($this->getAdminDir() . DS . "index.php", "", $scriptName);
    $subdir = str_replace("index.php", "", $scriptName);
    return $hostname . $subdir;
  }

  function getAdminDir()
  {
    return "admin";
  }


  function getCurrentUser()
  {
    return $this->getUsername();
  }

  function getUsersCustomTimezoneOffset()
  {
    return 0;
  }

  function getEnvironmentSuffix()
  {
    return "app/code/local/Harapartners/Sumall/extrawatch/"; //TODO - will be changed
  }

  function renderLink($task, $otherParams)
  {
    return "?task=$task&action=$otherParams";
  }

  function getUser()
  {
    return "matto";
  }

  function getTitle()
  {
    return "title";
  }

  function getUsername()
  {
    return "matto";
  }

  function sendMail($recipient, $sender, $recipient, $subject, $body, $true, $cc, $bcc, $attachment, $replyto, $replytoname)
  {
    //TODO send mail
  }

  function getDbPrefix()
  {
    return "mgt_";
  }

  function getTimezoneOffset()
  {
    return 0; //TODO must implement
  }

  function getAllowedDirsToCheckForSize()
  {
    // TODO: Implement getDirsToCheckForSize() method.
  }

  function getDirsToCheckForSize($directory)
  {
    $dirs = array();

    $dirs[ExtraWatchSizes::SCAN_DIR_MAIN] = "../";
    $dirs[ExtraWatchSizes::SCAN_DIR_ADMIN] = "../";

    $dirs[ExtraWatchSizes::REAL_DIR_MAIN] = "../";
    $dirs[ExtraWatchSizes::REAL_DIR_ADMIN] = "../";

    return $dirs;
  }

  /**
   * env
   * @return unknown
   */
  function getAgentNotPublishedMsg($database)
  {
    //TODO implement
    return FALSE;
  }


}


