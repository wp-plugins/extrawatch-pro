<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.0
 * @revision 717
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.codegravity.com
 */


define('_JEXEC', 1);
define('DS', DIRECTORY_SEPARATOR);
$jBasePath = realpath(dirname(__FILE__) . DS . ".." . DS . ".." . DS . "..". DS);
define('JPATH_BASE2', $jBasePath);

include_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS. "includes.php";

$extraWatch = new ExtraWatchMain();
$extraWatch->block->checkPermissions();

require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS. "lang" . DS . $extraWatch->config->getLanguage() . ".php";


$group = ExtraWatchHelper::requestPost('mod');
$prevSum = ExtraWatchHelper::requestPost('prev');
$suffix = ExtraWatchHelper::requestPost('suffix');

$realDirectoryMain = ExtraWatchHelper::requestPost('dir1');
$realDirectoryAdmin = ExtraWatchHelper::requestPost('dir2');

if (!$extraWatch->sizes->isAllowed($realDirectoryMain) || !$extraWatch->sizes->isAllowed($realDirectoryAdmin)) {
  die(_JW_SIZEQUERY_BAD_REQUEST);
}


$extraWatch->sizes->renderFileList($group, $realDirectoryMain, $realDirectoryAdmin, $realDirectoryMain, $realDirectoryAdmin, $suffix);

$result = $extraWatch->sizes->renderPageTotal;

if ($extraWatch->sizes->renderPageTotalRaw == $prevSum) {
  $result = $result . " (" . sprintf("+%.2f", ($extraWatch->sizes->renderPageTotalRaw - $prevSum) / $extraWatch->sizes->renderPageTotalRaw * 100) . "%)";
} else {
  if ($extraWatch->sizes->renderPageTotalRaw > $prevSum) {
    if ($extraWatch->sizes->renderPageTotalRaw) {
      $result = $result . "<span style='color: red;'> (+" . sprintf("%.2f", ($extraWatch->sizes->renderPageTotalRaw - $prevSum) / $extraWatch->sizes->renderPageTotalRaw * 100) . "%)</span>";
    }
  }
  if ($extraWatch->sizes->renderPageTotalRaw < $prevSum) {
    if ($extraWatch->sizes->renderPageTotalRaw) {
      $result = $result . "<span style='color: green;'> (-" . sprintf("%.2f", ($prevSum - $extraWatch->sizes->renderPageTotalRaw) / $extraWatch->sizes->renderPageTotalRaw * 100) . "%)</span>";
    }
  }
}

$data = array(
  "text" => $result,
  "total" => $extraWatch->sizes->renderPageTotalRaw
);

echo json_encode($data);



