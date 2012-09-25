<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 1.2.18
 * @revision 388
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2012 by Matej Koval - All rights reserved!
 * @website http://www.codegravity.com
 */


define('_JEXEC', 1);
define('DS', DIRECTORY_SEPARATOR);
$jBasePath = realpath(dirname(__FILE__) . DS . ".." . DS . ".." . DS . "..". DS);
define('JPATH_BASE2', $jBasePath);

$env = @$_REQUEST['env'];

include_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS. "includes.php";

$extraWatch = new ExtraWatch();
$extraWatch->block->checkPermissions();

require_once JPATH_BASE2 . DS .  "components" . DS . "com_extrawatch" .DS. "lang" . DS . $extraWatch->config->getLanguage() . ".php";

$dir = ExtraWatchHelper::requestPost('dir');
$group = ExtraWatchHelper::requestPost('mod');

if (!$extraWatch->sizes->isAllowed($dir)) {
  die(_EW_SIZEQUERY_BAD_REQUEST);
}
if (is_dir($dir)) {
  $sizeNow = $extraWatch->sizes->getDirectorySize($dir, $group, TRUE, $extraWatch->date->jwDateToday());
  $sizePrev = $extraWatch->sizes->getDirectorySize($dir, $group, FALSE, $extraWatch->sizes->findLatestCheckDayByComOrModGroup());

  if ($sizePrev == $sizeNow)
    $size = "<span style='color: gray;'>" . $extraWatch->sizes->sizeFormat($sizeNow) . "</span>";
  elseif ($sizeNow <= $sizePrev)
    $size = "<span style='color: green;'>" . $extraWatch->sizes->sizeFormat($sizeNow) . " (-" . round(($sizePrev - $sizeNow) / $sizeNow * 100) . "%)</span>";
  else
    $size = "<span style='color: red;'>" . $extraWatch->sizes->sizeFormat($sizeNow) . " (+" . round(($sizeNow - $sizePrev) / $sizeNow * 100) . "%)</span>";

  echo $size;
} else {
  die(_EW_SIZEQUERY_BAD_REQUEST);
}



