<?php
/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 1.2.18
 * @revision 224
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2012 by Matej Koval - All rights reserved!
 * @website http://www.codegravity.com
 */

/** ensure this file is being included by a parent file */
if (!defined('_JEXEC') && !defined('_VALID_MOS'))  {
  die('Restricted access');
}

interface ExtraWatchEnv
{

  public function getDatabase();

  public function getRequest();

  public function & getURI();

  public function isSSL();

  public function getRootSite();

  public function getAdminDir();

  public function getCurrentUser();

  public function getTimezoneOffset();

  public function getUsersCustomTimezoneOffset();

  public function getEnvironmentSuffix();

  public function renderLink($task, $otherParams);

  public function getUser();

  public function getTitle();

  public function getUsername();

  public function sendMail($recipient, $sender, $recipient, $subject, $body, $true, $cc, $bcc, $attachment, $replyto, $replytoname);

  public function getDbPrefix();

  public function getAllowedDirsToCheckForSize();

  public function getDirsToCheckForSize();

  /**
   * Returns FALSE if there are no messages!
   * @abstract
   * @param $database
   * @return mixed
   */
  public function getAgentNotPublishedMsg($database);

}
