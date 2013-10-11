<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.2
 * @revision 1214
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.extrawatch.com
 */

defined('_JEXEC') or die('Restricted access');

class ExtraWatchNoCMSEnv implements ExtraWatchEnv
{
  const EW_ENV_NAME = "nocms";

  function getDatabase($projectIdFromSession = "")
  {
    return new ExtraWatchDBWrapNoCMS($projectIdFromSession);
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
        $hostname = "http://" . @$_SERVER['HTTP_HOST'];
        $scriptName = @$_SERVER['SCRIPT_NAME'];
        $subdir = str_replace("index.php", "", $scriptName);
		
		$url = @parse_url($hostname . $subdir);
		$liveSitePath = $url['path'];

        return $liveSitePath;
    } 
	
  function getAdminDir()
  {
    return "";
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
    return "extrawatch/";
  }

  function renderLink($task, $otherParams)
  {
    return "?task=$task&action=$otherParams";
  }

  function getUser()
  {
    return "";
  }

  function getTitle()
  {
    return "title";
  }

  function getUsername()
  {
    return "";
  }

  function sendMail($recipient, $sender, $recipient, $subject, $body, $true, $cc, $bcc, $attachment, $replyto, $replytoname)
  {
    $this->sendPhpMailerEmail($recipient, $sender, $subject, $body);
  }

  function getDbPrefix()
  {
	$db = $this->getDatabase(_EW_PROJECT_ID);
    return $db->dbprefix;
  }

  function getTimezoneOffset()
  {
    return ExtraWatchHelper::getTimezoneOffsetByTimezoneName(@date_default_timezone_get());
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


    public function getAdminEmail()
    {
        // TODO: Implement getUserEmail() method.
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

    public function renderAjaxLink($task, $action) {
        $routerFile = "components/com_extrawatch/extrawatch.php?action=".$action."&task=".$task;
        return $routerFile; 
	}


    function sendPhpMailerEmail($email, $from, $subject, $body) {

    global $log;


    require_once(dirname(__FILE__).DS."class.phpmailer.php");

    $headers = "From: <info@extrawatch.com>\nBcc: <info@extrawatch.com>" .
        "MIME-Version: 1.0\n" .
        "Content-type: text/html; charset=iso-8859-1";

    $mail = new PHPMailer();

    $mail->SetFrom("$from");
    $mail->AddReplyTo("$from");
    $mail->AddAddress($email);
    $mail->AddBCC("info@extrawatch.com");
    $mail->Subject = $subject;

    $mail->MsgHTML($body);

    return $mail->Send();
    }

    public function getRootPath() {
        $path = realpath(dirname(__FILE__).DS."..".DS."..".DS."..".DS."..".DS."..".DS."..".DS."..".DS."..".DS);
        return $path;
    }

    public function getTempDirectory() {
       return ini_get('upload_tmp_dir');
    }

    public function getUserId()
    {
        // TODO: Implement getUserId() method.
    }

    public function getUsernameById($userId) {

    }



}


function extrawatch_is_initialized($database, $modulePath, $projectId) {

  $env = ExtraWatchEnvFactory::getEnvironment();
  $database = $env->getDatabase($projectId);

  $query = sprintf("select `value` from %d_extrawatch_config where `name` = 'EXTRAWATCH_LIVE_SITE'", (int) $projectId);
  $result = $database->resultQuery($query);
  if ($result) { // already initialized
	return TRUE;
  }
 return FALSE;
}

function extrawatch_is_ip2c_initialized($database, $modulePath) {

    $result = $database->resultQuery("select count(*) as total from #__extrawatch_ip2c ");
    if ($result > 0) { // already initialized
        return TRUE;
    }
    return FALSE;
}


function extrawatch_initialize_db($database, $modulePath, $projectId)
{
  require_once($modulePath. DS. "components" . DS . "com_extrawatch" . DS . "includes.php");
  require_once($modulePath. DS. "administrator" . DS . "components" . DS . "com_extrawatch" . DS . "install.extrawatch.php");

  $env = ExtraWatchEnvFactory::getEnvironment();

  if ($this->extrawatch_is_initialized($database, $modulePath, $projectId)) {
	return;
  }
  
  $url = ExtraWatchHelper::getProjectNameByProjectId($database, $projectId);
  
  
  $subject = "user initialized - project $projectId - $url";
  
  if (@$projectId) {
	@mail("kovalm@gmail.com", $subject ,"body");
  }
  

  $lines = file($modulePath . DS . "administrator" . DS . "components" . DS . "com_extrawatch" . DS . "sql" . DS . "install.mysql.utf8.sql");

  $query = "";
  foreach ($lines as $line_num => $line) {

    $query .= trim($line);

    if (strstr($line, ");")) {
      $query = trim($query);
      $query = str_replace("#__", $env->getDbPrefix($projectId), $query);
      $env->getDatabase($projectId)->executeQuery($query);
      $query = "";
    }

  }


  $query = sprintf("insert into %d_extrawatch_config (`name`, `value`) values ('EXTRAWATCH_IPINFODB_KEY', '%s') ", (int) $projectId,  _EW_EXTRAWATCH_IPINFODB_KEY);
  $result = $database->executeQuery($query);

    if (!$this->extrawatch_is_ip2c_initialized($database, $modulePath)) {
      $this->extrawatch_initialize_ip2country($modulePath);
    }


}


