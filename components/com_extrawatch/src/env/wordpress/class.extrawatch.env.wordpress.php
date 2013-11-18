<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.2
 * @revision 1352
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.extrawatch.com
 */

defined('_JEXEC') or die('Restricted access');

class ExtraWatchWordpressEnv implements ExtraWatchEnv
{

   const EW_ENV_NAME = "wordpress";

  function getDatabase($user = _EW_PROJECT_ID)
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
	$url = parse_url($rootSite);
    $liveSitePath = $url['path'];
    return $liveSitePath;
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
    /*FREE_START*/
    $moduleName = "extrawatch";
    /*FREE_END*/

    /*PRO_START*/
    $moduleName = "extrawatch-pro";
    /*PRO_END*/

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
        /*PRO_START*/
        return "http://www.wordpress.org/support/view/plugin-reviews/extrawatch-pro";
       /*PRO_END*/

        /*FREE_START*/
        return "http://www.wordpress.org/support/view/plugin-reviews/extrawatch";
       /*FREE_END*/
    }

    public function getVoteLink()
    {
        /*PRO_START*/
        return "http://www.wordpress.org/support/view/plugin-reviews/extrawatch-pro";
       /*PRO_END*/

        /*FREE_START*/
        return "http://www.wordpress.org/support/view/plugin-reviews/extrawatch";
       /*FREE_END*/
    }

    public function getEnvironmentName()
    {
        return self::EW_ENV_NAME;
    }

    public function getRootPath() {
        $path = realpath(dirname(__FILE__).DS."..".DS."..".DS."..".DS."..".DS."..".DS."..".DS."..".DS."..".DS);
        return $path;
    }

    public function getTempDirectory() {
        return get_temp_dir();
    }

    function getUserId()
    {
        //TODO implement
    }

    public function getUsernameById($userId) {
        //TODO implement
    }

    public function renderAjaxLink($task, $action) {
        $routerFile = "components/com_extrawatch/extrawatch.php?action=".$action."&task=".$task;
        return $routerFile; 
	}

    public function addStyleSheet($cssURL)
    {
        $output = "<style type=\"text/css\" media=\"screen, projection\">
        <!--
        @import url(" . $cssURL . ");
        -->
        </style>";
        return $output;
    }



}


