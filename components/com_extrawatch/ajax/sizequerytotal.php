<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 1.2.18
 * @revision 208
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2012 by Matej Koval - All rights reserved!
 * @website http://www.codegravity.com
 */

/*PRO_START*/
define('_JEXEC', 1);
define('DS', DIRECTORY_SEPARATOR);
$jBasePath = realpath(dirname(__FILE__) . DS . ".." . DS . ".." . DS . "..". DS);
define('JPATH_BASE2', $jBasePath);

include_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS. "includes.php";

$joomlaWatch = new JoomlaWatch();
$joomlaWatch->block->checkPermissions();

require_once (JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS. "lang" . DS . $joomlaWatch->config->getLanguage() . ".php");


$group = JoomlaWatchHelper::requestPost('mod');
$prevSum = JoomlaWatchHelper::requestPost('prev');
$suffix = JoomlaWatchHelper::requestPost('suffix');

$realDirectoryMain = JoomlaWatchHelper::requestPost('dir1');
$realDirectoryAdmin = JoomlaWatchHelper::requestPost('dir2');

if (!$joomlaWatch->sizes->isAllowed($realDirectoryMain) || !$joomlaWatch->sizes->isAllowed($realDirectoryAdmin)) {
    die(_JW_SIZEQUERY_BAD_REQUEST);
}


$joomlaWatch->sizes->renderFileList($group, $realDirectoryMain, $realDirectoryAdmin, $realDirectoryMain, $realDirectoryAdmin, $suffix);

$result = $joomlaWatch->sizes->renderPageTotal;

if ($joomlaWatch->sizes->renderPageTotalRaw == $prevSum) {
    $result = $result . " (" . sprintf("+%.2f", ($joomlaWatch->sizes->renderPageTotalRaw - $prevSum) / $joomlaWatch->sizes->renderPageTotalRaw * 100) . "%)";
} else {
    if ($joomlaWatch->sizes->renderPageTotalRaw > $prevSum) {
        if ($joomlaWatch->sizes->renderPageTotalRaw) {
            $result = $result . "<span style='color: red;'> (+" . sprintf("%.2f", ($joomlaWatch->sizes->renderPageTotalRaw - $prevSum) / $joomlaWatch->sizes->renderPageTotalRaw * 100) . "%)</span>";
        }
    }
    if ($joomlaWatch->sizes->renderPageTotalRaw < $prevSum) {
        if ($joomlaWatch->sizes->renderPageTotalRaw) {
            $result = $result . "<span style='color: green;'> (-" . sprintf("%.2f", ($prevSum - $joomlaWatch->sizes->renderPageTotalRaw) / $joomlaWatch->sizes->renderPageTotalRaw * 100) . "%)</span>";
        }
    }
}

$data = array(
    "text" => $result,
    "total" => $joomlaWatch->sizes->renderPageTotalRaw
);

echo json_encode($data);

/*PRO_END*/
