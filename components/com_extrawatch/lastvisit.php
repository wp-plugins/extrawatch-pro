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

header("Content-type: text/xml");

include_once("includes.php");
$extraWatch = new ExtraWatch();
$extraWatch->block->checkPermissions();
$ip = $extraWatch->visit->getLastIp();
$location = $extraWatch->visit->ip2Country($ip);

?>
<markers>
    <?php echo "<marker name=\"" . $location['city'] . ", " . $location['country'] . "\" address=\"" . $location['ipAdress'] . "\" lat=\"" .
    $location['latitude'] . "\" lng=\"" .
    $location['longitude'] . "\" type=\"visitor\"/>"; ?>
</markers>
