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

class ExtraWatchJoomlaEnv implements ExtraWatchEnv
{

    function getDatabase()
    {
        return new ExtraWatchDBWrapJoomla();
    }

    function getRequest()
    {
        return new JRequest();
    }

    function & getURI()
    {
        return JFactory::getURI();
    }

    function isSSL()
    {
        return JFactory::getURI()->isSSL();
    }

    function getRootSite()
    {
        $liveSite = JURI::root();
        if (@strstr($liveSite, "/components/com_extrawatch")) {
            $liveSite = str_replace("/components/com_extrawatch", "", $liveSite);
        }
        return $liveSite;
    }

    function getAdminDir()
    {
        return "administrator";
    }

    function getCurrentUser()
    {
        return JFactory::getUser();
    }


    function getUsersCustomTimezoneOffset()
    {
        $user = $this->getUser();
        return $user->getParam('timezone');
    }

    function getEnvironmentSuffix()
    {
        return "";
    }

    function renderLink($task, $otherParams)
    {
        return $this->getRootSite() . $this->getAdminDir() . "/index.php?option=com_extrawatch&task=" . $task . "&action=" . $otherParams;
    }

    function getUser()
    {
        global $mainframe;
        if (version_compare(JVERSION, '1.5.0', 'ge')) {
            /* joomla 1.5 or above */
            return JFactory::getUser();
        } else {
            return @ $mainframe->getUser();
        }

    }

    function getTitle()
    {
        global $mainframe;
        if (version_compare(JVERSION, '1.5.0', 'ge')) {
            /* joomla 1.5 or above */
            $mydoc =& JFactory::getDocument();
            return $mydoc->getTitle();
        } else if (version_compare(JVERSION, '1.0.0', 'ge')) {
            /* joomla 1.0 */
            return $mainframe->getPageTitle();
        }
    }

    function getUsername()
    {
        $user = JFactory::getUser();
        return $user->username;
    }


    function sendMail($recipient, $sender, $recipient, $subject, $body, $true, $cc, $bcc, $attachment, $replyto, $replytoname)
    {
        return JUtility::sendMail("$recipient", "$sender", "$recipient", "$subject", "$body", 1);
    }

    function getDbPrefix()
    {
        $config = new JConfig;
        return $config->dbprefix;
    }

    function getTimezoneOffset()
    {
        $conf =& JFactory::getConfig();
        return $conf->getValue('config.offset');
    }

    function getAllowedDirsToCheckForSize()
    {
        $dirs = array("../../administrator/components/", "../../administrator/modules/", "../../components/", "../../modules/");
        return $dirs;
    }

    function getDirsToCheckForSize()
    {
        $dirs = array();

        $dirs[ExtraWatchSizes::SCAN_DIR_MAIN] = "../components/";
        $dirs[ExtraWatchSizes::SCAN_DIR_ADMIN] = "./components/";

        $dirs[ExtraWatchSizes::REAL_DIR_MAIN] = "../";
        $dirs[ExtraWatchSizes::REAL_DIR_ADMIN] = "../../administrator/components/";

        return $dirs;
    }

}

?>
