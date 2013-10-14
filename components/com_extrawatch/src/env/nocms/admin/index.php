<?php
/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.2
 * @revision 1217
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.codegravity.com
 */

session_start();

define('_JEXEC',1);

define("DS","/");
define("ENV",1);
define("_EW_CLOUD_MODE",TRUE);
define("JPATH_BASE2",dirname(__FILE__).DS."extrawatch");

$action = @$_REQUEST['action'];
$username = @$_SESSION['email'] ? @$_SESSION['email'] : @$_REQUEST['email'];
$password = @$_SESSION['password'] ? @$_SESSION['password'] : @$_REQUEST['password'];
$trialContinueFromSession = @$_SESSION['trialContinue'];


require_once ("connection.php");
require_once ("extrawatch".DS."components".DS."com_extrawatch".DS."config.php");
require_once ("extrawatch".DS."components".DS."com_extrawatch".DS."src".DS."inc.extrawatch.env.php");
require_once ("extrawatch".DS."components".DS."com_extrawatch".DS."includes.php");
require_once ("extrawatch".DS."components".DS."com_extrawatch".DS."config.php");
require_once ("extrawatch".DS."components".DS."com_extrawatch".DS."src".DS."inc.extrawatch.env.php");
require_once ("extrawatch".DS."administrator".DS."components".DS."com_extrawatch".DS."admin.extrawatch.php");

require_once ("src".DS."class.extrawatch.project.php");


$env = ExtraWatchEnvFactory::getEnvironment();

$userId = ExtraWatchHelper::getUserId($env->getDatabase(""), $username, $password);
$projectId = ExtraWatchHelper::getFirstUsersProject($env->getDatabase(""), $userId);

if (!defined('_EW_PROJECT_ID')) {
    define("_EW_PROJECT_ID", $projectId);
}
include("view/header.php");


$database = $env->getDatabase($projectId);

function notifyOnLogin($username, $password) {
	if ($username != "demo" && $password != "demo") {
		$message = "user $username has logged in";
		@mail("kovalm@gmail.com",$message,$message);
	}

}


function verify($database, $user, $password) {

	$result = ExtraWatchHelper::getUserId($database, $user, $password);
	if ($result) {
		notifyOnLogin($user, $password);
        return true;
    }
    return false;
}

/* controller */
if (@$action == "logout") {
    session_destroy();
}
else if (@$_SESSION['email'] && @$_SESSION['password']) {
    $authenticated = verify($database, @$_SESSION['email'], @$_SESSION['password']);
} else if (@$action == "login") {
    $authenticated = verify($database, @$_REQUEST['email'], @$_REQUEST['password']);
    if (!$authenticated) {
        echo("wrong username / password");
    } else {
        $_SESSION['email'] = @$_POST['email'];
        $_SESSION['password'] = @$_POST['password'];
		ExtraWatchHelper::updateLastLoginTime($env->getDatabase(""), $projectId);
    }
}

if (@$authenticated) {

    if (@$action == "trialContinue") {
        $trialContinueFromSession = 1;
        @$_SESSION['trialContinue'] = $trialContinueFromSession;
    }

    $path = realpath(".").DS."extrawatch";

	$extraWatch = new ExtraWatchMain();
    $extraWatchProject = new ExtraWatchProject($database);

    $ewInitialized = !$extraWatch->setup->isEwInitialized();
	echo $extraWatch->setup->initializeDb();

    if ($ewInitialized) {
        $extraWatchProject->setTimeOfProjectCreation($projectId);
        mail("foo@codegravity.com", "project $projectId initialized", "project $projectId initialized");
        $extraWatch->config->saveConfigValue("EXTRAWATCH_EMAIL_REPORTS_ENABLED", "On");
        $extraWatch->config->saveConfigValue("EXTRAWATCH_EMAIL_REPORTS_ADDRESS", $username);
        $extraWatch->config->saveConfigValue("EXTRAWATCH_SPAMWORD_BANS_ENABLED", "On");
        $extraWatch->config->saveConfigValue("EXTRAWATCH_SPAMWORD_BANS_ENABLED", _EW_EXTRAWATCH_IPINFODB_KEY);

    }

    $alwaysActive = $extraWatchProject->isProjectAlwaysActive($projectId);
    $paymentActive = $extraWatchProject->isPaymentActive($projectId);
    $daysToTrialEnd = $extraWatchProject->getDaysToTrialEnd($projectId);
	
	echo("<!-- days: $daysToTrialEnd -->");
	

    if (!$paymentActive && !$alwaysActive && $daysToTrialEnd < 0) {
        include("view/expired.php");
        session_destroy();
        die();
    }

    if (!$paymentActive && !$trialContinueFromSession && !$alwaysActive && $daysToTrialEnd > 0 && $daysToTrialEnd < 4) {
        include("view/subscribe.php");
    } else {
        echo extrawatch_mainController($database);
    }
} else {
    ?>
<?php
    include("login.php");
}
?>