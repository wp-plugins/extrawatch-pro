<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.1
 * @revision 834
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.extrawatch.com
 */

/** ensure this file is being included by a parent file */
if (!defined('_JEXEC') && !defined('_VALID_MOS'))
    die('Restricted access');

class ExtraWatchSetup {

    private $database;
    private $env;
    private $modulePath;
    private $sqlScriptsModuleDir;

    function __construct($database) {
        $this->database = $database;
        $this->env = ExtraWatchEnvFactory::getEnvironment();
        $this->modulePath = realpath(dirname(__FILE__).DS."..".DS."..".DS."..");
        $this->sqlScriptsModuleDir = $this->modulePath. DS . "administrator".DS."components" . DS . "com_extrawatch" . DS . "sql" . DS . "scripts";
    }

    function isEwInitialized() {

        $env = ExtraWatchEnvFactory::getEnvironment();
        $database = $env->getDatabase();

        $result = $database->resultQuery("select `value` from #__extrawatch_config where `name` = 'rand'");
        if ($result) { // already initialized
            return TRUE;
        }
        return FALSE;
    }

    function initializeDB()
    {
        /*        require_once($this->modulePath. DS. "components" . DS . "com_extrawatch" . DS . "includes.php");
                require_once($this->modulePath. DS. "administrator" . DS . "components" . DS . "com_extrawatch" . DS . "install.extrawatch.php");*/

        if ($this->isEwInitialized()) {
            return;
        }

        $this->runSQLscriptsFromFile($this->modulePath . DS . "administrator" . DS . "components" . DS . "com_extrawatch" . DS . "sql" . DS . "install.mysql.utf8.sql");
        $this->runAdditionalSQLScripts();

//        $this->initializeIp2Country($this->modulePath, $env->getDatabase());
    }

    function runAdditionalSQLScripts() {
        $files = scandir($this->sqlScriptsModuleDir);
        foreach ($files as $file) {
            if (strstr($file,".sql")) { // should be replaced by ends with
                if (!$this->wasAdditionalSQLScriptRun($file)) {
                    $this->runSQLscriptsFromFile($this->sqlScriptsModuleDir.DS.$file);
                    $this->database->executeQuery(sprintf("insert into #__extrawatch_sql_scripts (scriptname) values ('%s')", $file));
                }
            }
        }
    }

    private function wasAdditionalSQLScriptRun($script) {
        $query = sprintf("select count(*) from #__extrawatch_sql_scripts where scriptname = '%s'", $this->database->getEscaped($script));
        return $this->database->resultQuery(trim($query));
    }


    private function runSQLscriptsFromFile($file) {
        $lines = @file($file);
        $query = "";
        foreach ($lines as $line_num => $line) {
            $query .= trim($line);

            if (strstr($line, ";\n")) {
                $query = trim($query);
                $query = str_replace("#__", $this->env->getDbPrefix(), $query);
                $this->database->executeQuery($query);
                $query = "";
            }

        }
    }

    public function initializeIp2Country() {
        $this->modulePath = realpath(dirname(__FILE__).DS."..".DS."..".DS."..");
        $i = 0;

        $numberOfFiles = 220;
        for ($j = 1; $j <= $numberOfFiles; $j++) {
            $fileName = $this->modulePath . DIRECTORY_SEPARATOR . "components" . DIRECTORY_SEPARATOR . "com_extrawatch" . DIRECTORY_SEPARATOR . "sql" . DIRECTORY_SEPARATOR . "extrawatch-$j.sql";
            $this->runSQLscriptsFromFile($fileName);
        }
        try {
            // @sureRemoveDir(dirname($fileName), FALSE);
        } catch (Exception $e) {
            echo 'Cannot remove directory with SQL files: ', $e->getMessage(), "\n";
        }
    }



    static function initializeMenu($database)
    {

        $query = "DELETE FROM #__extrawatch_config where name like 'rand' ";
        $database->setQuery(trim($query));
        $database->query();

        $rand = rand();
        $query = "INSERT INTO #__extrawatch_config (id, name, value) values ('', 'rand', '$rand') ";
        $database->setQuery(trim($query));
        $database->query();

        if (version_compare(JVERSION, "2.5.0", "<")) {

            $query = "UPDATE #__components SET admin_menu_img='../components/com_extrawatch/img/icons/extrawatch-logo-16x16.png' WHERE admin_menu_link='option=com_extrawatch'";
            $database->setQuery(trim($query));
            $database->query();

            $query = "DELETE FROM #__components where admin_menu_link like '%option=com_extrawatch%'  and admin_menu_img like '%../components/com_extrawatch/icons/%' and admin_menu_img<>'../components/com_extrawatch/img/icons/extrawatch-logo-16x16.png'";
            $database->setQuery(trim($query));
            $database->query();

            $query = sprintf("select id from #__components where `name` = '%s' limit 1", "ExtraWatch");
            $database->setQuery(trim($query));
            $id = $database->loadResult();

            $query = sprintf("INSERT INTO #__components values ('', 'Live Stats', '', 0, %d, 'option=com_extrawatch', '', '', 0, '../components/com_extrawatch/img/icons/map_icon.gif', 0, '', 1)", (int)$id);
            $database->setQuery($query);
            $database->query();
            $query = sprintf("INSERT INTO #__components values ('', 'SEO', '', 0, %d, 'option=com_extrawatch&task=seo', '', '', 1, '../components/com_extrawatch/img/icons/seo.png', 0, '', 1)", (int)$id);
            $database->setQuery($query);
            $database->query();
            $query = sprintf("INSERT INTO #__components values ('', 'Clicks', '', 0, %d, 'option=com_extrawatch&task=heatmap', '', '', 2, '../components/com_extrawatch/img/icons/click.png', 0, '', 1)", (int)$id);
            $database->setQuery($query);
            $database->query();
            $query = sprintf("INSERT INTO #__components values ('', 'Downloads', '', 0, %d, 'option=com_extrawatch&task=downloads', '', '', 3, '../components/com_extrawatch/img/icons/downloads.png', 0, '', 1)", (int)$id);
            $database->setQuery($query);
            $database->query();
            $query = sprintf("   INSERT INTO #__components values ('', 'Traffic Flow', '', 0, %d, 'option=com_extrawatch&task=flow', '', '', 4, '../components/com_extrawatch/img/icons/flow.png', 0, '', 1)", (int)$id);
            $database->setQuery($query);
            $database->query();
            $query = sprintf("   INSERT INTO #__components values ('', 'Graphs & Trends', '', 0, %d, 'option=com_extrawatch&task=graphs', '', '', 5, '../components/com_extrawatch/img/icons/trend_icon.gif', 0, '', 1)", (int)$id);
            $database->setQuery($query);
            $database->query();
            $query = sprintf("   INSERT INTO #__components values ('', 'Goals', '', 0, %d, 'option=com_extrawatch&task=goals', '', '', 6, '../components/com_extrawatch/img/icons/goal.gif', 0, '', 1)", (int)$id);
            $database->setQuery($query);
            $database->query();
            $query = sprintf("   INSERT INTO #__components values ('', 'Visit History', '', 0, %d, 'option=com_extrawatch&task=history', '', '', 7, '../components/com_extrawatch/img/icons/history.png', 0, '', 1)", (int)$id);
            $database->setQuery($query);
            $database->query();
            $query = sprintf("   INSERT INTO #__components values ('', 'Anti-spam & Blocking', '', 0, %d, 'option=com_extrawatch&task=antiSpam', '', '', 8, '../components/com_extrawatch/img/icons/antispam.gif', 0, '', 1)", (int)$id);
            $database->setQuery($query);
            $database->query();
            $query = sprintf("   INSERT INTO #__components values ('', 'Email Reports', '', 0, %d, 'option=com_extrawatch&task=emails', '', '', 9, '../components/com_extrawatch/img/icons/emails.png', 0, '', 1)", (int)$id);
            $database->setQuery($query);
            $database->query();
            $query = sprintf("   INSERT INTO #__components values ('', 'Your License', '', 0, %d, 'option=com_extrawatch&task=license', '', '', 10, '../components/com_extrawatch/img/icons/license.png', 0, '', 1)", (int)$id);
            $database->setQuery($query);
            $database->query();
            $query = sprintf("   INSERT INTO #__components values ('', 'Database Status', '', 0, %d, 'option=com_extrawatch&task=status', '', '', 11, '../components/com_extrawatch/img/icons/status.png', 0, '', 1)", (int)$id);
            $database->setQuery($query);
            $database->query();
            $query = sprintf("   INSERT INTO #__components values ('', 'Modules / Components Sizes', '', 0, %d, 'option=com_extrawatch&task=sizes', '', '', 12, '../components/com_extrawatch/img/icons/sizes.png', 0, '', 1)", (int)$id);
            $database->setQuery($query);
            $database->query();
            $query = sprintf("   INSERT INTO #__components values ('', 'Settings', '', 0, %d, 'option=com_extrawatch&task=settings', '', '', 13, '../components/com_extrawatch/img/icons/settings.gif', 0, '', 1)", (int)$id);
            $database->setQuery($query);
            $database->query();
            $query = sprintf("   INSERT INTO #__components values ('', 'Update', '', 0, %d, 'option=com_extrawatch&task=update', '', '', 14, '../components/com_extrawatch/img/icons/update.png', 0, '', 1)", (int)$id);
            $database->setQuery($query);
            $database->query();
            $query = sprintf("   INSERT INTO #__components values ('', 'Credits', '', 0, %d, 'option=com_extrawatch&task=credits', '', '', 15, '../components/com_extrawatch/img/icons/credits.png', 0, '', 1)", (int)$id);
            $database->setQuery($query);
            $database->query();

        }
    }

    function resetData()
    {
        foreach (unserialize(EXTRAWATCH_TABLES_TO_TRUNCATE) as $table) {
            $query = sprintf("DELETE FROM `$table`");
            $this->database->executeQuery($query);
        }
        return TRUE;
    }

    function dropTables()
    {
        foreach ($this->getExtraWatchTables() as $table => $value) {
            $query = sprintf("DROP TABLE `%s`", $value->Name);
            $this->database->executeQuery($query);
        }
        return TRUE;
    }



    function getExtraWatchTables()
    {
        $dbPrefix = $this->env->getDbPrefix();
        $query = sprintf("SHOW TABLE STATUS LIKE '%sextrawatch%%'", $this->database->getEscaped($dbPrefix));
        $this->database->setQuery($query);
        $rows = $this->database->objectListQuery($query);
        return $rows;
    }

}


