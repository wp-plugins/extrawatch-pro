<?php
/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 1.2.18
 * @revision 203
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2012 by Matej Koval - All rights reserved!
 * @website http://www.codegravity.com
 */

/** ensure this file is being included by a parent file */
if (!defined('_JEXEC') && !defined('_VALID_MOS'))
    die('Restricted access');

interface ExtraWatchEnv
{

    function getDatabase();

    function getRequest();

    function & getURI();

    function isSSL();

    function getRootSite();

    function getAdminDir();

    function getCurrentUser();

    function getTimezoneOffset();

    function getUsersCustomTimezoneOffset();

    function getEnvironmentSuffix();

    function renderLink($task, $otherParams);

    function getUser();

    function getTitle();

    function getUsername();

    function sendMail($recipient, $sender, $recipient, $subject, $body, $true, $cc, $bcc, $attachment, $replyto, $replytoname);

    function getDbPrefix();

    function getAllowedDirsToCheckForSize();

    function getDirsToCheckForSize();

    function isAgentPublished($database);

}
