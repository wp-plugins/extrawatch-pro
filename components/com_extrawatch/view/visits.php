<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 1.2.18
 * @revision 233
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2012 by Matej Koval - All rights reserved!
 * @website http://www.codegravity.com
 */ ?>

<span style='color: black;'>&nbsp;<?php echo (ExtraWatchDate::getActualDateTime()); ?></span>

<?php
if (@!defined('ENV') && !$extraWatch->env->isAgentPublished($extraWatch->database)) {
  echo("<h4 style='color: red;'>" . _EW_VISITS_MODULE_NOT_PUBLISHED . "</h4>");
  echo ("<h3><a href='http://www.codegravity.com/demo/extrawatch/1.2.x/install/' target='_blank'>" . _EW_WATCH_INSTALLATION_DEMO . "</a></h3>");
} ?>
<br/>
<?php echo($extraWatchBlockHTML->renderBlockedInfo(TRUE)); ?>

<table cellpadding='2' cellspacing='0' width='100%' border='0'>
  <tr>
    <td colspan='8'><h3><?php echo _EW_VISITS_VISITORS; echo $extraWatchHTML->renderOnlineHelp("visits"); ?></h3>
    </td>
  </tr>
  <?php echo ($extraWatchVisitHTML->renderVisitors()); ?>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan='8'><h3><?php echo _EW_VISITS_BOTS; echo $extraWatchHTML->renderOnlineHelp("visits-bots"); ?></h3>
    </td>
  </tr>
  <?php echo ($extraWatchVisitHTML->renderBots()); ?>
</table>
