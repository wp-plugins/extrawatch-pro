<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.0
 * @revision 582
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.extrawatch.com
 */

/** ensure this file is being included by a parent file */
if (!defined('_JEXEC') && !defined('_VALID_MOS'))  {
  die('Restricted access');
}

class ExtraWatchWordpressEnv implements ExtraWatchEnv
{

   const EW_ENV_NAME = "wordpress";

    function getDatabase()
  {
    return new ExtraWatchDBWrapWordpress();
  }

  function getRequest()
  {
    return new EnvRequest();
  }

  function & getURI()
  {
    global $post;
    return get_permalink($post->ID);
  }

  function isSSL()
  {
    //TODO change
    return FALSE;
  }

  function getRootSite()
  {
    $hostname = "http://" . $_SERVER['HTTP_HOST'];
    $scriptName = $_SERVER['SCRIPT_NAME'];
    $scriptNameExploded = explode("wp-content/", $scriptName);
    if (sizeof($scriptNameExploded) > 1) {
      $subdir = @$scriptNameExploded[0];
    } else {
      $subdir = str_replace("wp-admin/admin.php", "", $scriptName);
    }
    $rootSite = $hostname . $subdir;
    return $rootSite;
  }

  function getAdminDir()
  {
    return "administrator";
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
    // as install dir
    

    
    $moduleName = "extrawatch-pro";
    

    return "wp-content/plugins/".$moduleName."/";
  }

  function renderLink($task, $otherParams)
  {
    return $this->getRootSite() . "wp-admin/admin.php?page=extrawatch&task=" . $task . "&action=" . $otherParams;
  }

  function getUser()
  {
    global $current_user;
    return $current_user->user_login;
  }

  function getTitle()
  {
    return get_the_title();
  }

  function getUsername()
  {
    global $current_user;
    return $current_user->user_login;
  }

  function sendMail($recipient, $sender, $recipient, $subject, $body, $true, $cc, $bcc, $attachment, $replyto, $replytoname)
  {
    mail($recipient, $subject, $body, null, $sender);
  }

  function getDbPrefix()
  {
    global $wpdb;
    return $wpdb->base_prefix;
  }

  function getTimezoneOffset()
  {
    return get_option('gmt_offset');
  }

  function getAllowedDirsToCheckForSize()
  {
    $dirs = array("../../../../plugins");
    return $dirs;
  }

  function getDirsToCheckForSize($directory)
  {
    $dirs = array();

    $dirs[ExtraWatchSizes::SCAN_DIR_MAIN] = "../wp-content/plugins/";
    $dirs[ExtraWatchSizes::SCAN_DIR_ADMIN] = "../wp-content/plugins/";

    $dirs[ExtraWatchSizes::REAL_DIR_MAIN] = "../../../";
    $dirs[ExtraWatchSizes::REAL_DIR_ADMIN] = "../../../";

    return $dirs;
  }

  function getAgentNotPublishedMsg($database) {
    if (!is_active_widget( false, false, "extrawatchagentwidget", true )) {
      return _EW_AGENT_NOT_PUBLISHED_ERROR_WORDPRESS;
    }
    return FALSE;
  }


    public function getAdminEmail()
    {
      global $current_user;
      return $current_user->email;
    }

    function getFormKey() {
        return "";
    }

    public function getReviewLink()
    {
        // TODO: Implement getReviewLink() method.
    }

    public function getVoteLink()
    {
        // TODO: Implement getVoteLink() method.
    }

    public function getEnvironmentName()
    {
        return self::EW_ENV_NAME;
    }
}


