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
define("_EW_USERNAME","haluz");

?>

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

<a href='link.html' onclick="alert('original link');">Simple link</a>


</body>
