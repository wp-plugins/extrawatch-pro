<?php
/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.2
 * @revision 933
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.codegravity.com
 */

defined('_JEXEC') or die('Restricted access');

session_start();

include("view/header.php");

define("DS","/");
define("_JEXEC",1);
define("ENV",1);
define("JPATH_BASE2",dirname(__FILE__).DS."extrawatch");

$action = @$_REQUEST['action'];
$username = @$_SESSION['email'] ? @$_SESSION['email'] : @$_REQUEST['email'];
$password = @$_SESSION['password'] ? @$_SESSION['password'] : @$_REQUEST['password'];


require_once ("config.php");
require_once ("extrawatch".DS."components".DS."com_extrawatch".DS."config.php");
require_once ("extrawatch".DS."components".DS."com_extrawatch".DS."src".DS."inc.extrawatch.env.php");
require_once ("extrawatch".DS."components".DS."com_extrawatch".DS."includes.php");


$env = ExtraWatchEnvFactory::getEnvironment();

$userId = ExtraWatchHelper::getUserId($env->getDatabase(""), $username, $password);
$projectId = ExtraWatchHelper::getFirstUsersProject($env->getDatabase(""), $userId);

if (!defined('_EW_PROJECT_ID')) {
    define("_EW_PROJECT_ID", $projectId);
}

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

    require_once ("extrawatch".DS."components".DS."com_extrawatch".DS."config.php");
    require_once ("extrawatch".DS."components".DS."com_extrawatch".DS."src".DS."inc.extrawatch.env.php");
    require_once ("extrawatch".DS."administrator".DS."components".DS."com_extrawatch".DS."admin.extrawatch.php");

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
    }
}

if (@$authenticated) {

    echo("<div style='text-align: right; width:100%; font-size: 12px; '><a href='?action=logout' style='color: red;'>Logout</a></div>");

    $path = realpath(".").DS."extrawatch";

	$extraWatch = new ExtraWatchMain();
	
	echo $extraWatch->setup->initializeDb();
    echo extrawatch_mainController($database);
} else {
    ?>
<?php
    include("login.php");
}
?>