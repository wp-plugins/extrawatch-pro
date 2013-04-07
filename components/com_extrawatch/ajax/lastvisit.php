<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.0
 * @revision 611
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.codegravity.com
 */

define('_JEXEC', 1);
define('DS', DIRECTORY_SEPARATOR);
$jBasePath = realpath(dirname(__FILE__) . DS . ".." . DS . ".." . DS . "..". DS);
define('JPATH_BASE2', $jBasePath);

header("Content-type: text/xml");

include_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS. "includes.php";
$extraWatch = new ExtraWatchMain();
$extraWatch->block->checkPermissions();
$ip = $extraWatch->visit->getLastIp();
$location = $extraWatch->visit->ip2Country($ip); ?>
<markers>
  <?php echo "<marker name=\"" . $location['city'] . ", " . $location['country'] . "\" address=\"" . $location['ipAdress'] . "\" lat=\"" .
    $location['latitude'] . "\" lng=\"" .
    $location['longitude'] . "\" type=\"visitor\"/>"; ?>
</markers>
