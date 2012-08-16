<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 1.2.18
 * @revision 270
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2012 by Matej Koval - All rights reserved!
 * @website http://www.codegravity.com
 */

/** ensure this file is being included by a parent file */
if (!defined('_JEXEC') && !defined('_VALID_MOS')) {
    die('Restricted access');
}

if (!defined('_JEXEC')) {
    define('_JEXEC', 1);
}
if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}


//Fix by el_oskaros
$jPathBase2 = str_replace(DIRECTORY_SEPARATOR . 'administrator' . DIRECTORY_SEPARATOR . 'index.php', '', $_SERVER['SCRIPT_FILENAME']);
$jPathBase2 = str_replace(DIRECTORY_SEPARATOR . 'administrator' . DIRECTORY_SEPARATOR . 'index2.php', '', $jPathBase2);

/* replace all possible combinations */
$jPathBase2 = str_ireplace('/administrator/index.php', '', $jPathBase2);
$jPathBase2 = str_ireplace('\\administrator\\index.php', '', $jPathBase2);
$jPathBase2 = str_ireplace('/administrator/index2.php', '', $jPathBase2);
$jPathBase2 = str_ireplace('\\administrator\\index2.php', '', $jPathBase2);

if (@$GLOBALS['databases']) {
    $drupalModulePath = realpath('.') . DS . "sites" . DS . "all" . DS . "modules" . DS . "extrawatch";
    $jPathBase2 = $drupalModulePath;
}


if (!defined('JPATH_BASE2'))
    define('JPATH_BASE2', $jPathBase2);

/*    if (defined('JPATH_BASE') && !defined('JPATH_BASE2')) {
        define('JPATH_BASE2', JPATH_BASE);
    }*/

require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "includes.php";

$env = ExtraWatchEnvFactory::getEnvironment();

switch (@get_class($env)) {

    case 'ExtraWatchWordpressEnv':
        {
        echo extrawatch_mainController();
        break;
        }

    case 'ExtraWatchJoomlaEnv':
        {
        if (!defined('JPATH_ROOT'))
            require_once JPATH_BASE2 . DS . 'includes' . DS . 'defines.php';

        if (!defined('JDEBUG'))
            @ require_once JPATH_BASE2 . DS . 'includes' . DS . 'framework.php';

        if (!version_compare(JVERSION, '2.5.0', '<')) {
            $mainframe = & JFactory :: getApplication('site');
            $mainframe->initialise();
        }
        echo extrawatch_mainController();
        break;
        }

}


function extrawatch_mainController() {

    $extraWatch = new ExtraWatch();
    $extraWatchHTML = new ExtraWatchHTML();
    $extraWatchGoalHTML = new ExtraWatchGoalHTML($extraWatch);
    $extraWatchTrendHTML = new ExtraWatchTrendHTML($extraWatch);
    $env = ExtraWatchEnvFactory::getEnvironment();

    $action = @ ExtraWatchHelper::requestGet('action');
    $task = @ ExtraWatchHelper::requestGet('task');
    $option = @ ExtraWatchHelper::requestGet('option');
    $result = @ ExtraWatchHelper::requestGet('result');

    $output = "";

    switch ($task) {

        /*
         * disabled trial
         *
         *     case "useTrial" :
                {
                    $output .= $extraWatchHTML->renderAdminStyles();
                    $extraWatch->config->useTrial();
                    $extraWatch->config->saveVersionIntoDatabase();
                    $extraWatch->config->setLiveSite($env->getRootSite());
                    break;
                }
        */
        case "useFreeVersion" :
            {
            $output .= $extraWatchHTML->renderAdminStyles();
            $extraWatch->config->useFreeVersion();
            $extraWatch->config->saveVersionIntoDatabase();
            $extraWatch->config->setLiveSite($env->getRootSite());
            break;
            }


        case "activate" :
            {
            $output .= $extraWatchHTML->renderAdminStyles();
            $extraWatch->config->activate(ExtraWatchHelper::requestGet('key'));
            $extraWatch->config->saveVersionIntoDatabase();
            $extraWatch->config->setLiveSite($env->getRootSite());
            break;
            }

        case "licenseAccepted" :
            {
            $extraWatch->config->setLiveSite($env->getRootSite());
            $extraWatch->config->setLicenseAccepted();
            $extraWatch->config->saveVersionIntoDatabase();
            break;
            }

        case "resetLiveSite" :
            {
            $extraWatch->block->checkPermissions();
            $extraWatch->config->setLiveSite($env->getRootSite());
            break;
            }
    }
    if (!$extraWatch->config->checkLicenseAccepted()) {
        $output .= $extraWatchHTML->renderAdminStyles();
        $output .= $extraWatchHTML->renderAcceptLicense();
        return $output;
    } else {

        
        if (!$extraWatch->config->isFree() && !$extraWatch->config->isAdFree()  /* disabled trial || ($extraWatch->config->isTrial() && !$extraWatch->config->isTrialTimeOver())*/) {
            $output .= $extraWatchHTML->renderAdminStyles();
            $output .= $extraWatchHTML->renderAdFreeLicense();
            return $output;
        }
        

        switch ($task) {

            case "storeIpInfoDbKey":
                {
                $output .= $extraWatchHTML->renderAdminStyles();
                $output .= $extraWatchHTML->renderHeader();
                $keyValue = ExtraWatchHelper::requestPost('storeIpInfoDbKey');
                if ($keyValue) {
                    $extraWatch->config->saveConfigValue("EXTRAWATCH_IPINFODB_KEY", $keyValue);
                } else {
                    $output = ("<br/><div style='border: 1px solid red; width: 50%; padding: 10px;'>" . _EW_STATS_MAP_INVALID_KEY . "</div>");
                }
                $output .= $extraWatchHTML->renderBody($option);
                break;
                }

            case "update" :
                {
                $output .= $extraWatchHTML->renderAdminStyles();
                $output .= $extraWatchHTML->renderHeader();
                $output .= $extraWatchHTML->renderUpdate();
                break;
                }

            case "sizes" :
                {
                if (!$extraWatch->config->isFree()) {
                    $output .= $extraWatchHTML->renderAdminStyles();
                    $output .= $extraWatchHTML->renderHeader();
                    $output .= $extraWatchHTML->renderSizes();
                }

                break;
                }

            case "seo" :
                {
                switch ($action) {
                    case "save":
                        {
                        $result = $extraWatch->helper->saveSEOSettings(ExtraWatchHelper::requestPost());
                        }
                    default:
                        {
                        $output .= $extraWatchHTML->renderAdminStyles();
                        $output .= $extraWatchHTML->renderHeader();
                        $output .= $extraWatchHTML->renderSEO();
                        break;
                        }
                }
                break;
                }

            case "graphs" :
                {
                $output .= $extraWatchHTML->renderAdminStyles();
                $output .= $extraWatchHTML->renderHeader();
                $output .= $extraWatchTrendHTML->renderGraphsForGroup(ExtraWatchHelper::requestGet('group'));
                break;
                }

            case "trends" :
                {
                $output .= $extraWatchHTML->renderAdminStyles();
                $output .= $extraWatchHTML->renderHeader();
                $extraWatchTrendHTML->renderTrends();
                break;
                }

            case "credits" :
                {
                $output .= $extraWatchHTML->renderAdminStyles();
                $output .= $extraWatchHTML->renderHeader();
                $output .= $extraWatchHTML->renderCredits();
                break;
                }
            case "goals" :
                {
                switch ($action) {

                    case "insert":
                        {
                        $output .= $extraWatchHTML->renderAdminStyles();
                        $output .= $extraWatchHTML->renderHeader();
                        $output .= $extraWatchGoalHTML->renderBackToGoals();
                        $output .= $extraWatchGoalHTML->renderGoalsInsert(@ ExtraWatchHelper::requestGet('id'), @ ExtraWatchHelper::requestGet('postid'));
                        break;
                        }
                    case "save":
                        {
                        $output .= $extraWatchHTML->renderAdminStyles();
                        $output .= $extraWatchHTML->renderHeader();
                        $extraWatch->goal->saveGoal(ExtraWatchHelper::requestPost());
                        $output .= $extraWatchGoalHTML->renderGoals(@$result);

                        break;
                        }
                    case "edit":
                        {
                        $output .= $extraWatchHTML->renderAdminStyles();
                        $output .= $extraWatchHTML->renderHeader();
                        $extraWatchGoalHTML->renderBackToGoals();
                        $extraWatchGoalHTML->renderGoalEdit(@ ExtraWatchHelper::requestGet('goalId'));

                        break;
                        }
                    case "delete":
                        {
                        $output .= $extraWatchHTML->renderAdminStyles();
                        $output .= $extraWatchHTML->renderHeader();
                        $result = $extraWatch->goal->deleteGoal(@ ExtraWatchHelper::requestGet('goalId'));
                        $extraWatchGoalHTML->renderGoals(@ $result);

                        break;
                        }
                    case "enable":
                        {
                        $output .= $extraWatchHTML->renderAdminStyles();
                        $output .= $extraWatchHTML->renderHeader();
                        $result = $extraWatch->goal->enableGoal(@ ExtraWatchHelper::requestGet('goalId'));
                        $extraWatchGoalHTML->renderGoals(@ $result);

                        break;
                        }
                    case "disable":
                        {
                        $output .= $extraWatchHTML->renderAdminStyles();
                        $output .= $extraWatchHTML->renderHeader();
                        $result = $extraWatch->goal->disableGoal(@ ExtraWatchHelper::requestGet('goalId'));
                        $extraWatchGoalHTML->renderGoals(@ $result);

                        break;
                        }

                    case "export":
                        {
                        //$output .= $extraWatchHTML->renderAdminStyles();
                        //$output .= $extraWatchHTML->renderHeader();
                        $extraWatch->goal->exportGoals(ExtraWatchHelper::requestPost());
                        $extraWatchGoalHTML->renderExportGoals(@ $result);

                        break;
                        }

                    case "import":
                        {
                        $output .= $extraWatchHTML->renderAdminStyles();
                        $output .= $extraWatchHTML->renderHeader();
                        $output .= $extraWatchGoalHTML->renderImportGoals();
                        break;
                        }

                    case "saveImportGoal":
                        {
                        $output .= $extraWatchHTML->renderAdminStyles();
                        $output .= $extraWatchHTML->renderHeader();
                        $extraWatch->goal->saveImportGoal(ExtraWatchHelper::requestPost());
                        $extraWatchGoalHTML->renderGoals(@ $result);

                        }

                    default:
                        {
                        $output .= $extraWatchHTML->renderAdminStyles();
                        $output .= $extraWatchHTML->renderHeader();
                        $extraWatchGoalHTML->renderGoals(@ $result);

                        break;
                        }

                }

                break;
                }
            case "settings" :
                {
                $output .= $extraWatchHTML->renderAdminStyles();
                $output .= $extraWatchHTML->renderHeader();
                $output .= $extraWatchHTML->renderSettings(@ $result);

                break;
                }
            case "settingsSave" :
                {
                $result = $extraWatch->helper->saveSettings(ExtraWatchHelper::requestPost());
                $output .= $extraWatchHTML->renderAdminStyles();
                $output .= $extraWatchHTML->renderHeader();
                $output .= $extraWatchHTML->renderSettings(@ $result);

                break;
                }
            case "resetData" :
                {
                $output .= $extraWatchHTML->renderAdminStyles();
                $output .= $extraWatchHTML->renderHeader();
                $result = $extraWatch->helper->resetData(ExtraWatchHelper::requestPost());
                $output .= $extraWatchHTML->renderResetData($result);
                break;
                }

            case "antiSpam" :
                {

                switch ($action) {

                    case "toggleBlocking":
                        {
                        $output .= $extraWatchHTML->renderAdminStyles();
                        $output .= $extraWatchHTML->renderHeader();
                        $ip = @ ExtraWatchHelper::requestGet('ip');
                        $extraWatch->block->extrawatch_blockIpToggle($ip);
                        $output .= $extraWatchHTML->renderAntiSpam();
                        break;

                        }

                    case "save" :
                        {
                        $result = $extraWatch->helper->saveAntiSpamSettings(ExtraWatchHelper::requestPost());
                        $output .= $extraWatchHTML->renderAdminStyles();
                        $output .= $extraWatchHTML->renderHeader();
                        $output .= $extraWatchHTML->renderAntiSpam();
                        break;
                        }


                    default:
                        {
                        $output .= $extraWatchHTML->renderAdminStyles();
                        $output .= $extraWatchHTML->renderHeader();
                        $output .= $extraWatchHTML->renderAntiSpam();
                        break;
                        }
                }

                break;
                }


            case "status" :
                {
                if (!$extraWatch->config->isFree()) {
                    $output .= $extraWatchHTML->renderAdminStyles();
                    $output .= $extraWatchHTML->renderHeader();
                    $output .= $extraWatchHTML->renderStatus();
                }
                break;
                }

            /*			case "upgrade" :
            {
                $output .= $extraWatchHTML->renderAdminStyles();
                $output .= $extraWatchHTML->renderHeader();
                $output .= $extraWatchHTML->renderUpgrade();
                break;
            }*/


            case "license" :
                {
                $output .= $extraWatchHTML->renderAdminStyles();
                $output .= $extraWatchHTML->renderHeader();
                $output .= $extraWatchHTML->renderAdFreeLicense();
                break;
                }


            case "history" :
                {
                $output .= $extraWatchHTML->renderAdminStyles();
                $output .= $extraWatchHTML->renderHeader();
                $output .= $extraWatchHTML->renderVisitsHistory();
                break;
                }

            case "flow" :
                {
                if (!$extraWatch->config->isFree()) {
                    $output .= $extraWatchHTML->renderAdminStyles();
                    $output .= $extraWatchHTML->renderHeader();
                    $output .= $extraWatchHTML->renderFlow();
                }
                break;
                }

            case "emails" :
                {

                switch ($action) {

                    case "save":
                        {
                        $output .= $extraWatchHTML->renderAdminStyles();
                        $output .= $extraWatchHTML->renderHeader();
                        $result = $extraWatch->helper->saveEmailSettings(ExtraWatchHelper::requestPost());
                        $output .= $extraWatchHTML->renderEmails();
                        break;

                        }
                    default:
                        {
                        $output .= $extraWatchHTML->renderAdminStyles();
                        $output .= $extraWatchHTML->renderHeader();
                        $output .= $extraWatchHTML->renderEmails();
                        break;
                        }
                }
                break;
                }

            case "heatmap" :
                {
                $output .= $extraWatchHTML->renderAdminStyles();
                $output .= $extraWatchHTML->renderHeader();
                $output .= $extraWatchHTML->renderHeatMap();
                return $output;
                break;
                }

            default :
                if ($extraWatch->config->checkLicenseAccepted()) {
                    $output .= $extraWatchHTML->renderAdminStyles();
                    $output .= $extraWatchHTML->renderHeader();
                    $output .= $extraWatchHTML->renderBody($option);
                } else {
                    $output .= $extraWatchHTML->renderAdminStyles();
                    $output .= $extraWatchHTML->renderAcceptLicense();
                }
                return $output;
                break;
        }
        /*
            } else {
                $output .= $extraWatchHTML->renderAdminStyles();
                $output .= $extraWatchHTML->renderHeader();
                $output .= $extraWatchHTML->renderTrialVersionInfo();
            }
        */
    }
    return $output;
}

