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

class ExtraWatchWordpressEnv implements ExtraWatchEnv
{


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
        return false;
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
        return "wp-content/plugins/extrawatch/";
    }

    function renderLink($task, $otherParams)
    {
        return $this->getRootSite() . "wp-admin/admin.php?page=extrawatch&task=" . $task . "&" . $otherParams;
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
        // TODO: Implement getTimezoneOffset() method.
        return 0;
    }

    function getAllowedDirsToCheckForSize()
    {
        $dirs = array("../../../../plugins");
        return $dirs;
    }

    function getDirsToCheckForSize()
    {
        $dirs = array();

        $dirs[ExtraWatchSizes::SCAN_DIR_MAIN] = "../wp-content/plugins/";
        $dirs[ExtraWatchSizes::SCAN_DIR_ADMIN] = "../wp-content/plugins/";

        $dirs[ExtraWatchSizes::REAL_DIR_MAIN] = "../../../";
        $dirs[ExtraWatchSizes::REAL_DIR_ADMIN] = "../../../";

        return $dirs;
    }

}

?>
