<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 1.2.18
 * @revision 530
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by Matej Koval - All rights reserved!
 * @website http://www.extrawatch.com
 */

/** ensure this file is being included by a parent file */
if (!defined('_JEXEC') && !defined('_VALID_MOS'))  {
  die('Restricted access');
}

class ExtraWatchSetupWordpress implements ExtraWatchSetup
{

  function install()
  {
    error_reporting(E_ALL);
    $env = ExtraWatchEnvFactory::getEnvironment();
    $database = $env->getDatabase();
    ExtraWatchSetupWordpress::create_tables($database);
    ExtraWatchSetupWordpress::install_geolocation($database);

  }

  function uninstall()
  {
    $env = ExtraWatchEnvFactory::getEnvironment();
    $database = $env->getDatabase();
    ExtraWatchSetupWordpress::drop_tables($database);
  }

  function activate()
  {
  }

  static function create_tables($database)
  {
    $sqlFile = JPATH_BASE2 . DS . "administrator" . DS . "components" . DS . "com_extrawatch" . DS . "sql" . DS . "install.mysql.utf8.sql";
    $sql = file_get_contents($sqlFile);
    $sql = $database->replaceDbPrefix($sql);
    $sqlSplitted = @split(";", $sql);
    foreach ($sqlSplitted as $sql) {
      $sql .= ";";
      $database->executeQuery($sql);
      // echo($sql . "<br/><br/>");
    }
  }

  static function install_geolocation($database)
  {

    $i = 0;
    $numberOfFiles = 64;
    for ($j = 1; $j <= $numberOfFiles; $j++) {
      $fileName = JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "sql" . DS . "extrawatch-$j.sql";
      $lines = file($fileName);
      if (!$lines) {
        die("<span style='color: red'>Error reading file: $fileName, your joomla site path is set to: " . JPATH_SITE . " what is probably not correct, check configuration.php</span><br/>");
      }

      $query = "";
      foreach ($lines as $line_num => $line) {
        $query .= trim($line);
        if (strstr($line, ");")) {
          //                    if ($j % 10 == 0)
          // echo ((floor((($j) / $numberOfFiles) * 100)) . "%");
          //                    else
          //                        echo (".");

          $result = $database->executeQuery(trim($query));
          //if (!$result)
          //  echo ("Error: " + $database->getQuery());
          $query = "";
          $i++;
        }
        //	@ unlink($fileName); //try to delete
      }
    }
    // echo ("100%");
  }

  static function drop_tables($database)
  {

    $query = "DROP TABLE #__extrawatch";
    $database->setQuery(trim($database->replaceDbPrefix($query)));
    $database->query();

    $query = "DROP TABLE #__extrawatch_info";
    $database->executeQuery(trim($database->replaceDbPrefix($query)));
    $database->query();

    $query = "DROP TABLE #__extrawatch_config";
    $database->executeQuery(trim($database->replaceDbPrefix($query)));

    $query = "DROP TABLE #__extrawatch_blocked";
    $database->executeQuery(trim($database->replaceDbPrefix($query)));
    $database->query();

    $query = "DROP TABLE #__extrawatch_ip2c";
    $database->executeQuery(trim($database->replaceDbPrefix($query)));
    $database->query();

    $query = "DROP TABLE #__extrawatch_cc2c";
    $database->executeQuery(trim($database->replaceDbPrefix($query)));
    $database->query();

    $query = "DROP TABLE #__extrawatch_uri";
    $database->executeQuery(trim($database->replaceDbPrefix($query)));
    $database->query();

    $query = "DROP TABLE #__extrawatch_cache";
    $database->executeQuery(trim($database->replaceDbPrefix($query)));
    $database->query();

    $query = "DROP TABLE #__extrawatch_goals";
    $database->executeQuery(trim($database->replaceDbPrefix($query)));
    $database->query();

    $query = "DROP TABLE #__extrawatch_internal";
    $database->executeQuery(trim($database->replaceDbPrefix($query)));
    $database->query();

    $query = "DROP TABLE #__extrawatch_uri2title";
    $database->executeQuery(trim($database->replaceDbPrefix($query)));
    $database->query();

    $query = "DROP TABLE #__extrawatch_history";
    $database->executeQuery(trim($database->replaceDbPrefix($query)));
    $database->query();

    $query = "DROP TABLE #__extrawatch_uri_history";
    $database->executeQuery(trim($database->replaceDbPrefix($query)));
    $database->query();

    $query = "DROP TABLE #__extrawatch_flow";
    $database->executeQuery(trim($database->replaceDbPrefix($query)));
    $database->query();

    $query = "DROP TABLE #__extrawatch_uri_post";
    $database->executeQuery(trim($database->replaceDbPrefix($query)));
    $database->query();

    $query = "DROP TABLE #__extrawatch_keyphrase";
    $database->executeQuery(trim($database->replaceDbPrefix($query)));
    $database->query();

    $query = "DROP TABLE #__extrawatch_uri2keyphrase";
    $database->executeQuery(trim($database->replaceDbPrefix($query)));
    $database->query();


    $query = "DROP TABLE #__extrawatch_heatmap";
    $database->executeQuery(trim($database->replaceDbPrefix($query)));
    $database->query();

    $query = "DROP TABLE #__extrawatch_uri2keyphrase_pos";
    $database->executeQuery(trim($database->replaceDbPrefix($query)));
    $database->query();

    //echo("ExtraWatch tables deleted successfully");

    //delete file from upload
    @unlink(JPATH_BASE2 . DS . ".." . DS . ".." . DS . "uploads" . DS . "extrawatch.zip");

  }
}


