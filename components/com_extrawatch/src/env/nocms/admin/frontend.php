<?php
/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.2
 * @revision 1311
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.codegravity.com
 */


?>
<html>
<head>
<title>Test title</title>
</head>
<body>
This is sample html

<!-- ExtraWatch code snippet to include to HTML -->
<?php
define("_JEXEC",1);
define("ENV",1);
define("JPATH_BASE",realpath("extrawatch"));
define("_EW_PROJECT_ID","1");

?>

<a href='http://ahoj.com' onclick="alert('ahoj');">Ahoj</a>

<?php
require("extrawatch".DIRECTORY_SEPARATOR."modules".DIRECTORY_SEPARATOR."mod_extrawatch_agent".DIRECTORY_SEPARATOR."mod_extrawatch_agent.php");
?>
<!-- ExtraWatch code snippet to include to HTML -->

<!-- ExtraWatch code snippet to include to HTML -->
<?php
require("extrawatch".DIRECTORY_SEPARATOR."modules".DIRECTORY_SEPARATOR."mod_extrawatch_users".DIRECTORY_SEPARATOR."mod_extrawatch_users.php");
?>
<!-- ExtraWatch code snippet to include to HTML -->

<!-- ExtraWatch code snippet to include to HTML -->
<?php
require("extrawatch".DIRECTORY_SEPARATOR."modules".DIRECTORY_SEPARATOR."mod_extrawatch_visitors".DIRECTORY_SEPARATOR."mod_extrawatch_visitors.php");
?>
<!-- ExtraWatch code snippet to include to HTML -->

</body>
