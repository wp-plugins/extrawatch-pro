<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.0
 * @revision 620
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.extrawatch.com
 */

/** ensure this file is being included by a parent file */
if (!defined('_JEXEC') && !defined('_VALID_MOS')) {
  die('Restricted access');
}

class ExtraWatchLog
{


  function writeEntry($severity, $file, $line, $sql)
  {
    if (EXTRAWATCH_DEBUG) {
      $backTrace = ExtraWatchLog::getDebugBacktrace();
      $message = ExtraWatchDate::date("d.m.Y H:i:s ", ExtraWatchDate::getUTCTimestamp());
      $message .= "JoomlaBug Query: \n" . $sql . "\n";
      $message .= "JoomlaBug BackTrace: " . $backTrace;
      $logPath = JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "log" . DS . "extrawatch.log.php";
      $result = error_log($message, 3, $logPath);
      if (!$result) {
        echo("Error writing log to: " . $logPath);
      }
      chmod($logPath, 0700);
    }
  }


  function error($file, $line, $message)
  {

    // echo("<span style='color: red'>ExtraWatch: SQL error has occured, please check your system logs</span>".$message);
    ExtraWatchLog::writeEntry("ERROR", $file, $line, $message);

  }

  function info($file, $line, $message)
  {

    ExtraWatchLog::writeEntry("INFO", $file, $line, $message);

  }

  function warn($file, $line, $message)
  {
    ExtraWatchLog::writeEntry("WARN", $file, $line, $message);

  }


  function debug($file, $line, $message)
  {
    ExtraWatchLog::writeEntry("DEBUG", $file, $line, $message);

  }

  /**
   * Debug backgrace function used from http://php.net/manual/en/function.debug-backtrace.php
   *
   * @param unknown_type $NL
   * @return unknown
   */
  function getDebugBacktrace($NL = "\n")
  {
    $dbgTrace = debug_backtrace();
    if (!isset($dbgMsg)) {
      $dbgMsg = "";
    }

    $dbgMsg .= $NL;
    if (isset($dbgTrace)) {
      foreach ($dbgTrace as $dbgIndex => $dbgInfo) {
        $dbgMsg .= "\t at $dbgIndex  " . $dbgInfo['file'] . " (line {$dbgInfo['line']}) -> {$dbgInfo['function']}(" .
            join(",", $dbgInfo['args']) . ")$NL";
      }
    }
    $dbgMsg .= $NL;
    return $dbgMsg;
  }


}



