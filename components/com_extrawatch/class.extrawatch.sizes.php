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

/** ensure this file is being included by a parent file */
if (!defined('_JEXEC') && !defined('_VALID_MOS'))
    die('Restricted access');

class ExtraWatchSizes
{

    var $env;
    var $database;
    var $config;
    var $helper;
    var $date;

    const SCAN_DIR_MAIN = 'SCAN_DIR_MAIN';
    const SCAN_DIR_ADMIN = 'SCAN_DIR_ADMIN';
    const REAL_DIR_MAIN = 'REAL_DIR_MAIN';
    const REAL_DIR_ADMIN = 'REAL_DIR_ADMIN';

    function ExtraWatchSizes($database)
    {
        $this->env = ExtraWatchEnvFactory::getEnvironment();
        $this->database = $database;
        $this->config = new ExtraWatchConfig($this->database);
        $this->helper = new ExtraWatchHelper($this->database);
        $this->date = new ExtraWatchDate($this->database);
    }

    function sizeFormat($size)
    {
        $sign = "";
        if ($size < 0) {
            $sign = "-";
            $size = $size * -1;
        }

        if ($size < 1024) {
            return $size . " " . _EW_SIZES_BYTES;
            return $sign . $size . " " . _EW_SIZES_BYTES;
        }
        else if ($size < (1024 * 1024)) {
            $size = round($size / 1024, 1);
            return $size . " " . _EW_SIZES_KB;
            return $sign . $size . " " . _EW_SIZES_KB;
        }
        else if ($size < (1024 * 1024 * 1024)) {
            $size = round($size / (1024 * 1024), 1);
            return $size . " " . _EW_SIZES_MB;
            return $sign . $size . " " . _EW_SIZES_MB;
        }
        else
        {
            $size = round($size / (1024 * 1024 * 1024), 1);
            return $size . " " . _EW_SIZES_GB;
            return $sign . $size . " " . _EW_SIZES_GB;
        }
    }

    function getDirectorySizeFrimDisk($path)
    {
        $totalsize = 0;

        if ($handle = @opendir($path)) {
            while (false !== ($file = readdir($handle)))
            {
                $nextpath = $path . '/' . $file;
                if ($file != '.' && $file != '..' && !is_link($nextpath)) {
                    if (is_dir($nextpath)) {
                        $totalsize += $this->getDirectorySizeFrimDisk($nextpath);
                    }
                    elseif (is_file($nextpath))
                    {
                        $totalsize += filesize($nextpath);
                    }
                }
            }
        }

        @closedir($handle);
        return $totalsize;
    }


    function getTableSizes()
    {
        $dbPrefix = $this->env->getDbPrefix();
        $query = sprintf("SHOW TABLE STATUS LIKE '%s" . "%%'", $this->database->getEscaped($dbPrefix));
        $this->database->setQuery($query);
        $rows = $this->database->objectListQuery($query);
        return $rows;
    }

    function getTableSizesForDay($day)
    {
        $dbPrefix = $this->env->getDbPrefix();
        $query = sprintf("SELECT tableName, FLOOR((tableSizeNow - tableSizePrev)/tableSizeNow*100) AS tableDiff, tableSizeNow, tableSizePrev  FROM
					(
						SELECT tableName, CAST(MAX(tableSizeNow) AS SIGNED) AS tableSizeNow, CAST(MAX(tableSizePrev) AS SIGNED) AS tableSizePrev FROM
						(
							(SELECT name AS tableName, value AS tableSizePrev, 0 AS tableSizeNow FROM #__extrawatch_info WHERE date = %d)
							UNION
							(SELECT name AS tableName, 0 AS tableSizePrev, value AS tableSizeNow FROM #__extrawatch_info WHERE date = %d)
						) AS jt GROUP BY tableName
					) AS njt WHERE tableSizeNow > 0 AND tableSizePrev>0;",
            (int)($this->date->jwDateToday() - $day), (int)$this->date->jwDateToday());

        $this->database->setQuery($query);
        $rows = $this->database->objectListQuery($query);

        return $rows;
    }

    function updateTableSizes($lastRunAtMidnightDate)
    {
        $dbPrefix = $this->env->getDbPrefix();
        $query = sprintf("SHOW TABLE STATUS LIKE '%s" . "%%'", $this->database->getEscaped($dbPrefix));
        $this->database->setQuery($query);
        $rows = $this->database->objectListQuery($query);

        //TODO: Delete older than 30 days!

        $checked = false;

        foreach ($rows as $row) {
            $tableName = $row->Name;
            $tableSize = $row->Data_length + $row->Index_length;

            if ($checked == false) {
                $query = sprintf("SELECT COUNT(*) FROM #__extrawatch_info AS t WHERE date = '%d' AND t.group = '%d';", $lastRunAtMidnightDate, DB_KEY_SIZE_DB);
                $this->database->setQuery($query);
                $count = $this->database->resultQuery($query);

                if ($count > 0) return;
                $checked = true;
            }

            $query = sprintf("INSERT INTO #__extrawatch_info (`name`, `value`, `date`, `group`) VALUES ('%s', %d, %d, %d);",
                $this->database->getEscaped($tableName), $this->database->getEscaped($tableSize), $lastRunAtMidnightDate, DB_KEY_SIZE_DB);
            $this->database->setQuery($query);
            $rows = $this->database->executeQuery($query);
        }

        return $rows;
    }

    function getDirectoryCountFromDatabase($dir, $group)
    {
        $query = sprintf("SELECT COUNT(*) FROM #__extrawatch_info AS t WHERE date = '%d' AND t.group = '%d' AND name LIKE \"%s\";",
            (int)$this->findLatestCheckDayByGroup($group), $this->database->getEscaped($group), $this->database->getEscaped($dir));
        $this->database->setQuery($query);
        $count = $this->database->resultQuery($query);
        return $count;
    }

    function getDirectorySizeFromDatabase($dir, $group, $day)
    {
        $query = sprintf("SELECT value FROM #__extrawatch_info AS t WHERE date = '%d' AND t.group = '%d' AND name LIKE \"%s\";",
            (int)$day, $this->database->getEscaped($group), $this->database->getEscaped($dir));
        $this->database->setQuery($query);
        $size = $this->database->resultQuery($query);
        return $size;
    }

    function setDirectorySizeToDatabase($dir, $group, $size)
    {
        $query = sprintf("INSERT INTO #__extrawatch_info (`name`, `value`, `date`, `group`) VALUES ('%s', %d, %d, %d);",
            $this->database->getEscaped($dir), (int)$size, (int)$this->date->jwDateToday(), (int)$group);
        $this->database->setQuery($query);
        $this->database->executeQuery($query);
    }

    function updateDirectorySizeToDatabase($dir, $group, $size)
    {
        $query = sprintf("UPDATE #__extrawatch_info AS t SET value = %d WHERE date = %d AND t.group = %d AND name LIKE \"%s\";",
            (int)$size, $this->date->jwDateToday(), (int)$group, $this->database->getEscaped($dir));
        $this->database->setQuery($query);
        $this->database->executeQuery($query);
    }

    function getDirectorySize($dir, $group, $refresh, $day)
    {
        $count = $this->getDirectoryCountFromDatabase($dir, $group);

        if ($count > 0) {
            if ($refresh) {
                $size = $this->getDirectorySizeFrimDisk($dir);
                $this->updateDirectorySizeToDatabase($dir, $group, $size);
            } else {
                $size = $this->getDirectorySizeFromDatabase($dir, $group, $day);
            }
        } else {
            if ($refresh) {
                $size = $this->getDirectorySizeFrimDisk($dir);
                $this->setDirectorySizeToDatabase($dir, $group, $size);
            } else {
                $size = "";
            }
        }
        return $size;
    }

    var $renderPageItems = 0;
    var $renderPageHtml = "";
    var $renderPageJavaArray = "";
    var $renderPageTotal = 0;
    var $renderPageTotalRaw = 0;

    /** HTML */
    function renderFileList($group, $scanDirectoryMain, $scanDirectoryAdmin, $realDirectoryMain, $realDirectoryAdmin, $suffix)
    {
        $this->renderPageHtml = "";
        $this->renderPageItems = 0;
        $this->renderPageTotal = 0;
        $this->renderPageTotalRaw = 0;
        $this->renderPageJavaArray = "var dirs_$suffix = [\"\"";

        $dirs1 = @scandir($scanDirectoryMain);
        $dirs2 = @scandir($scanDirectoryAdmin);
        $dirs = @array_merge($dirs1, $dirs2);

        $dirsParsed = array();

        if (@$dirs)
        foreach ($dirs as $dir) {
            if ($dir == ".") continue;
            if ($dir == "..") continue;

            if (is_dir($scanDirectoryMain . $dir)) {
                $directory = $realDirectoryMain . $dir . "/";

                if (!isset($dirsParsed[$directory])) {
                    $dirsParsed[$directory] = true;
                    if ($this->renderPageItems % 2 == 0) $color = "#f9f9f9"; else $color = "#eeeeee";
                    $this->renderPageItems++;

                    $this->renderPageJavaArray = $this->renderPageJavaArray . ", \"" . $directory . "\"";
                    $size = $this->getDirectorySize($directory, $group, false, $this->findLatestCheckDayBySuffix($suffix));

                    if ($size != "") {
                        $this->renderPageTotal += $size;
                        $this->renderPageTotalRaw += $size;
                        $size = $this->sizeFormat($size);
                    }

                    $this->renderPageHtml = $this->renderPageHtml .
                        "<tr><td style='background-color: $color'>" . $dir . "</td>" .
                        "<td style='background-color: $color' align='center' id='item-" . $suffix . "-" . $this->renderPageItems . "'>$size</td>" .
                        "<td style='background-color: $color' align='center'><a href='javascript:refreshSize_" . $suffix . "(" . $this->renderPageItems . ")'>
							 <img src='" . $this->config->getLiveSite() . "components/com_extrawatch/icons/refresh.png' border='0' title='" . _EW_SIZES_REFRESH . "'/></a></td>";
                }
            }

            if (is_dir($scanDirectoryAdmin . $dir)) {
                $directory = $realDirectoryAdmin . $dir . "/";

                if (!isset($dirsParsed[$directory])) {
                    $dirsParsed[$directory] = true;
                    if ($this->renderPageItems % 2 == 0) $color = "#f9f9f9"; else $color = "#eeeeee";
                    $this->renderPageItems++;

                    $this->renderPageJavaArray = $this->renderPageJavaArray . ", \"" . $directory . "\"";

                    $size = $this->getDirectorySize($directory, $group, false, $this->findLatestCheckDayBySuffix($suffix));

                    if ($size != "") {
                        $this->renderPageTotal += $size;
                        $this->renderPageTotalRaw += $size;
                        $size = $this->sizeFormat($size);
                    }

                    $this->renderPageHtml = $this->renderPageHtml .
                        "<tr><td style='background-color: $color; color: #5AA1D3'>" . $dir . "</td>" .
                        "<td style='background-color: $color' align='center' id='item-" . $suffix . "-" . $this->renderPageItems . "'>$size</td>" .
                        "<td style='background-color: $color' align='center'><a href='javascript:refreshSize_" . $suffix . "(" . $this->renderPageItems . ")'>
							 <img src='" . $this->config->getLiveSite() . "components/com_extrawatch/icons/refresh.png' border='0' title='" . _EW_SIZES_REFRESH . "'/></a></td>";
                }
            }
        }

        $this->renderPageTotal = $this->sizeFormat($this->renderPageTotal);
        $this->renderPageTotal = $this->sizeFormat($this->renderPageTotalRaw);
        $this->renderPageJavaArray = $this->renderPageJavaArray . "];";
    }

    function findLatestCheckDayBySuffix($suffix)
    {
        if ($suffix == "components") {
            $group = DB_KEY_SIZE_COM;
        } else {
            $group = DB_KEY_SIZE_MOD;
        }
        return $this->findLatestCheckDayByGroup($group);
    }

    function findLatestCheckDayByGroup($group)
    {
        $query = sprintf("select MAX(`date`) as lastCheckDay from #__extrawatch_info where `group` = '%d'", (int)$group);
        $this->database->setQuery($query);
        return $this->database->resultQuery($query);
    }

    function findLatestCheckDayByComOrModGroup()
    {
        $query = sprintf("select MAX(`date`) as lastCheckDay from #__extrawatch_info where `group` = '%d' or `group` = '%d'", DB_KEY_SIZE_COM, DB_KEY_SIZE_MOD);
        $this->database->setQuery($query);
        return $this->database->resultQuery($query);
    }

    /**
     * Only checking the particular directories is allowed
     * @param  $dir
     * @return bool
     */
    function isAllowed($dir)
    {
        $env = ExtraWatchEnvFactory::getEnvironment();
        if (get_class($env) == "ExtraWatchWordpressEnv") {
            $realPathBase = realpath("../../../");
        } else {
            $realPathBase = realpath("../..");
        }

        $realPath = realpath($dir);
        //echo("NEW: checking whether $realPathBase is in $realPath ";
        if (!strstr($realPath, $realPathBase)) {
            return false;
        }
        $allowedDirs = $this->env->getAllowedDirsToCheckForSize();
        foreach ($allowedDirs as $allowedDir) {
            //echo("NEW: checking whether $realPathBase is in $realPath ".realpath($allowedDir));
            if (!strstr(realpath($allowedDir), $realPathBase)) {
                return false;
            }
        }
        //TODO finish regular expression
        /*        preg_match("(\\.\\.[\\/\\])[^.]*", $dir, $matches);
                print_r($matches);
        */
        return true;
    }

}

?>
