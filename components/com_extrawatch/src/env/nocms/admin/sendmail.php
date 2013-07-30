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

define("DS","/");
define("_JEXEC",1);
define("ENV",1);
define("JPATH_BASE2",dirname(__FILE__).DS."extrawatch");
$path = realpath(".").DS."extrawatch";

require_once ("extrawatch".DS."components".DS."com_extrawatch".DS."config.php");
require_once ("extrawatch".DS."components".DS."com_extrawatch".DS."src".DS."inc.extrawatch.env.php");

$env = ExtraWatchEnvFactory::getEnvironment();
$database = $env->getDatabase("");

$email = $_POST['email'];
$url = $_POST['url'];

$id = $database->resultQuery(sprintf("select id from global_user where email = ('%s')  ", $email));
if (!@$id) {
	$generatedPassword = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz0123456789') , 0 , 6 );
	$result = $database->executeQuery(sprintf("insert into global_user (`email`, `password`) values ('%s', '%s')  ", $email, $generatedPassword));

	$userId = $database->resultQuery(sprintf("select max(id) from global_user where email = '%s' ", $email));
	$result = $database->executeQuery(sprintf("insert into global_project (userId, url) values ('%s','%s')  ", $userId, $url));
	$projectId = $database->resultQuery(sprintf("select max(id) from global_project where userId = '%d' ", $userId));

} else {
	echo("user $email already found, resending email");
	die();
	$userId = $id;
}



require_once($path. DS. "components" . DS . "com_extrawatch" . DS . "includes.php");
require_once($path. DS. "administrator" . DS . "components" . DS . "com_extrawatch" . DS . "install.extrawatch.php");

$extraWatch = new ExtraWatchMain();

$body = "Welcome user $email <br/> your password is: $generatedPassword<br/><br/><br/>";

$body .= "Please include the followith HTML code: <br/>";
$body .= nl2br(htmlentities($extraWatch->helper->renderHTMLCodeSnippet($projectId)));

$body .= "<br/>To check your stats, please use the login information above to log into: <a href='http://stats.extrawatch.com'>stats.extrawatch.com</a>";


ExtraWatchHelper::sendEmail(ExtraWatchEnvFactory::getEnvironment(), $email, "info@extrawatch.com","ExtraWatch HTML code to monitor your website $url",$body, "info@codegravity.com");

include("view/header.php");

echo("<br/><br/>&nbsp;<br/><br/><center>Thank you for your registration, please check your email how to include the HTML code into your website. <br/>
<br/>
After including the HTML code, &gt;&gt;&gt;<a href='http://stats.extrawatch.com'>LOG IN</a>&lt;&lt;&lt; to see your stats
</center>");

