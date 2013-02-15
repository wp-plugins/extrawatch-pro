<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 1.2.18
 * @revision 508
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by Matej Koval - All rights reserved!
 * @website http://www.extrawatch.com
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

$scriptFilename = $_SERVER['SCRIPT_FILENAME'];
$scriptFilename = str_replace("/",DS, $scriptFilename);

//Fix by el_oskaros
$jPathBase2 = str_replace(DIRECTORY_SEPARATOR . 'administrator' . DIRECTORY_SEPARATOR . 'index.php', '', $scriptFilename);
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

require_once (JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "includes.php");

$env = ExtraWatchEnvFactory::getEnvironment();



function extrawatch_mainController($task = "") {

    $extraWatch = new ExtraWatch();
    $extraWatchHTML = new ExtraWatchHTML();
    $extraWatchGoalHTML = new ExtraWatchGoalHTML($extraWatch);
    $extraWatchTrendHTML = new ExtraWatchTrendHTML($extraWatch);
    $env = ExtraWatchEnvFactory::getEnvironment();

    $action = @ ExtraWatchHelper::requestGet('action');
    $taskFromNavigation = @ ExtraWatchHelper::requestGet('task');

    if ($taskFromNavigation) {
        $task = $taskFromNavigation;
    }

    $option = @ ExtraWatchHelper::requestGet('option');
    $result = @ ExtraWatchHelper::requestGet('result');

    $output = "";

    switch ($task) {

        /*
         * disabled trial
         *
         *     case "useTrial" :
                {
                    $output .= $extraWatchHTML->renderAdminStyles($extraWatch);
                    $extraWatch->config->useTrial();
                    $extraWatch->config->saveVersionIntoDatabase();
                    $extraWatch->config->setLiveSite($env->getRootSite());
                    break;
                }
        */
        case "useFreeVersion" :
            {
            $output .= $extraWatchHTML->renderAdminStyles($extraWatch);
            $extraWatch->config->useFreeVersion();
            $extraWatch->config->saveVersionIntoDatabase();
            $extraWatch->config->setLiveSite($env->getRootSite());
            break;
            }


        case "activate" :
            {
            $output .= $extraWatchHTML->renderAdminStyles($extraWatch);
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
        $output .= $extraWatchHTML->renderAdminStyles($extraWatch);
        $output .= $extraWatchHTML->renderAcceptLicense();
        return $output;
    } else {

        
        if (!$extraWatch->config->isFree() && !$extraWatch->config->isAdFree()  /* disabled trial || ($extraWatch->config->isTrial() && !$extraWatch->config->isTrialTimeOver())*/) {
            $output .= $extraWatchHTML->renderAdminStyles($extraWatch);
            $output .= $extraWatchHTML->renderAdFreeLicense();
            return $output;
        }
        

        switch ($task) {

            case "storeIpInfoDbKey":
                {
                $output .= $extraWatchHTML->renderAdminStyles($extraWatch);
                $output .= $extraWatchHTML->renderHeader($extraWatch);
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
                $output .= $extraWatchHTML->renderAdminStyles($extraWatch);
                $output .= $extraWatchHTML->renderHeader($extraWatch);
                $output .= $extraWatchHTML->renderUpdate();
                break;
                }

            case "sizes" :
                {
                if (!$extraWatch->config->isFree()) {
                    $output .= $extraWatchHTML->renderAdminStyles($extraWatch);
                    $output .= $extraWatchHTML->renderHeader($extraWatch);
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
                        $output .= $extraWatchHTML->renderAdminStyles($extraWatch);
                        $output .= $extraWatchHTML->renderHeader($extraWatch);
                        $output .= $extraWatchHTML->renderSEO();
                        break;
                        }
                }
                break;
                }

            case "graphs" :
                {
                $output .= $extraWatchHTML->renderAdminStyles($extraWatch);
                $output .= $extraWatchHTML->renderHeader($extraWatch);
                $output .= $extraWatchTrendHTML->renderGraphsForGroup(ExtraWatchHelper::requestGet('group'));
                break;
                }

            case "trends" :
                {
                $output .= $extraWatchHTML->renderAdminStyles($extraWatch);
                $output .= $extraWatchHTML->renderHeader($extraWatch);
                $extraWatchTrendHTML->renderTrends();
                break;
                }

            case "credits" :
                {
                $output .= $extraWatchHTML->renderAdminStyles($extraWatch);
                $output .= $extraWatchHTML->renderHeader($extraWatch);
                $output .= $extraWatchHTML->renderCredits();
                break;
                }
            case "goals" :
                {
                switch ($action) {

                    case "insert":
                        {
                        $output .= $extraWatchHTML->renderAdminStyles($extraWatch);
                        $output .= $extraWatchHTML->renderHeader($extraWatch);
                        $output .= $extraWatchGoalHTML->renderBackToGoals();
                        $output .= $extraWatchGoalHTML->renderGoalsInsert(@ ExtraWatchHelper::requestGet('id'), @ ExtraWatchHelper::requestGet('postid'));
                        break;
                        }
                    case "save":
                        {
                        $output .= $extraWatchHTML->renderAdminStyles($extraWatch);
                        $output .= $extraWatchHTML->renderHeader($extraWatch);
                        $extraWatch->goal->saveGoal(ExtraWatchHelper::requestPost());
                        $output .= $extraWatchGoalHTML->renderGoals(@$result);

                        break;
                        }
                    case "edit":
                        {
                        $output .= $extraWatchHTML->renderAdminStyles($extraWatch);
                        $output .= $extraWatchHTML->renderHeader($extraWatch);
                        $output .= $extraWatchGoalHTML->renderBackToGoals();
                        $output .= $extraWatchGoalHTML->renderGoalEdit(@ ExtraWatchHelper::requestGet('goalId'));

                        break;
                        }
                    case "delete":
                        {
                        $output .= $extraWatchHTML->renderAdminStyles($extraWatch);
                        $output .= $extraWatchHTML->renderHeader($extraWatch);
                        $result = $extraWatch->goal->deleteGoal(@ ExtraWatchHelper::requestGet('goalId'));
                        $output .= $extraWatchGoalHTML->renderGoals(@ $result);

                        break;
                        }
                    case "enable":
                        {
                        $output .= $extraWatchHTML->renderAdminStyles($extraWatch);
                        $output .= $extraWatchHTML->renderHeader($extraWatch);
                        $result = $extraWatch->goal->enableGoal(@ ExtraWatchHelper::requestGet('goalId'));
                        $output .= $extraWatchGoalHTML->renderGoals(@ $result);

                        break;
                        }
                    case "disable":
                        {
                        $output .= $extraWatchHTML->renderAdminStyles($extraWatch);
                        $output .= $extraWatchHTML->renderHeader($extraWatch);
                        $result = $extraWatch->goal->disableGoal(@ ExtraWatchHelper::requestGet('goalId'));
                        $output .= $extraWatchGoalHTML->renderGoals(@ $result);

                        break;
                        }

                    case "export":
                        {
                        //$output .= $extraWatchHTML->renderAdminStyles($extraWatch);
                        //$output .= $extraWatchHTML->renderHeader($extraWatch);
                        $extraWatch->goal->exportGoals(ExtraWatchHelper::requestPost());
                        $extraWatchGoalHTML->renderExportGoals(@ $result);

                        break;
                        }

                    case "import":
                        {
                        $output .= $extraWatchHTML->renderAdminStyles($extraWatch);
                        $output .= $extraWatchHTML->renderHeader($extraWatch);
                        $output .= $extraWatchGoalHTML->renderImportGoals();
                        break;
                        }

                    case "saveImportGoal":
                        {
                        $output .= $extraWatchHTML->renderAdminStyles($extraWatch);
                        $output .= $extraWatchHTML->renderHeader($extraWatch);
                        $extraWatch->goal->saveImportGoal(ExtraWatchHelper::requestPost());
                        $output .= $extraWatchGoalHTML->renderGoals(@ $result);

                        }

                    default:
                        {
                        $output .= $extraWatchHTML->renderAdminStyles($extraWatch);
                        $output .= $extraWatchHTML->renderHeader($extraWatch);
                        $output .= $extraWatchGoalHTML->renderGoals(@ $result);

                        break;
                        }

                }

                break;
                }
            case "settings" :
                {
                $output .= $extraWatchHTML->renderAdminStyles($extraWatch);
                $output .= $extraWatchHTML->renderHeader($extraWatch);
                $output .= $extraWatchHTML->renderSettings(@ $result);

                break;
                }
            case "settingsSave" :
                {
                $result = $extraWatch->helper->saveSettings(ExtraWatchHelper::requestPost());
                $output .= $extraWatchHTML->renderAdminStyles($extraWatch);
                $output .= $extraWatchHTML->renderHeader($extraWatch);
                $output .= $extraWatchHTML->renderSettings(@ $result);

                break;
                }
            case "resetData" :
                {
                $output .= $extraWatchHTML->renderAdminStyles($extraWatch);
                $output .= $extraWatchHTML->renderHeader($extraWatch);
                $result = $extraWatch->helper->resetData(ExtraWatchHelper::requestPost());
                $output .= $extraWatchHTML->renderResetData($result);
                break;
                }

            case "antiSpam" :
                {

                switch ($action) {

                    case "toggleBlocking":
                        {
                        $output .= $extraWatchHTML->renderAdminStyles($extraWatch);
                        $output .= $extraWatchHTML->renderHeader($extraWatch);
                        $ip = @ ExtraWatchHelper::requestGet('ip');
                        $extraWatch->block->extrawatch_blockIpToggle($ip);
                        $output .= $extraWatchHTML->renderAntiSpam();
                        break;

                        }

                    case "save" :
                        {
                        $result = $extraWatch->helper->saveAntiSpamSettings(ExtraWatchHelper::requestPost());
                        $output .= $extraWatchHTML->renderAdminStyles($extraWatch);
                        $output .= $extraWatchHTML->renderHeader($extraWatch);
                        $output .= $extraWatchHTML->renderAntiSpam();
                        break;
                        }


                    default:
                        {
                        $output .= $extraWatchHTML->renderAdminStyles($extraWatch);
                        $output .= $extraWatchHTML->renderHeader($extraWatch);
                        $output .= $extraWatchHTML->renderAntiSpam();
                        break;
                        }
                }

                break;
                }


            case "status" :
                {
                if (!$extraWatch->config->isFree()) {
                    $output .= $extraWatchHTML->renderAdminStyles($extraWatch);
                    $output .= $extraWatchHTML->renderHeader($extraWatch);
                    $output .= $extraWatchHTML->renderStatus();
                }
                break;
                }

            /*			case "upgrade" :
            {
                $output .= $extraWatchHTML->renderAdminStyles($extraWatch);
                $output .= $extraWatchHTML->renderHeader($extraWatch);
                $output .= $extraWatchHTML->renderUpgrade();
                break;
            }*/


            case "license" :
                {
                $output .= $extraWatchHTML->renderAdminStyles($extraWatch);
                $output .= $extraWatchHTML->renderHeader($extraWatch);
                $output .= $extraWatchHTML->renderAdFreeLicense();
                break;
                }


            case "history" :
                {
                $output .= $extraWatchHTML->renderAdminStyles($extraWatch);
                $output .= $extraWatchHTML->renderHeader($extraWatch);
                $output .= $extraWatchHTML->renderVisitsHistory();
                break;
                }

            case "flow" :
                {
                if (!$extraWatch->config->isFree()) {
                    $output .= $extraWatchHTML->renderAdminStyles($extraWatch);
                    $output .= $extraWatchHTML->renderHeader($extraWatch);
                    $output .= $extraWatchHTML->renderFlow();
                }
                break;
                }

            case "emails" :
                {

                switch ($action) {

                    case "save":
                        {
                        $output .= $extraWatchHTML->renderAdminStyles($extraWatch);
                        $output .= $extraWatchHTML->renderHeader($extraWatch);
                        $result = $extraWatch->helper->saveEmailSettings(ExtraWatchHelper::requestPost());
                        $output .= $extraWatchHTML->renderEmails();
                        break;

                        }
                    default:
                        {
                        $output .= $extraWatchHTML->renderAdminStyles($extraWatch);
                        $output .= $extraWatchHTML->renderHeader($extraWatch);
                        $output .= $extraWatchHTML->renderEmails();
                        break;
                        }
                }
                break;
                }

            case "heatmap" :
                {
                $output .= $extraWatchHTML->renderAdminStyles($extraWatch);
                $output .= $extraWatchHTML->renderHeader($extraWatch);
                $output .= $extraWatchHTML->renderHeatMap();
                return $output;
                break;
                }

            default :
                if ($extraWatch->config->checkLicenseAccepted()) {
                    $output .= $extraWatchHTML->renderAdminStyles($extraWatch);
                    $output .= $extraWatchHTML->renderHeader($extraWatch);
                    $output .= $extraWatchHTML->renderBody($option);
                } else {
                    $output .= $extraWatchHTML->renderAdminStyles($extraWatch);
                    $output .= $extraWatchHTML->renderAcceptLicense();
                }
                return $output;
                break;
        }
        /*
            } else {
                $output .= $extraWatchHTML->renderAdminStyles($extraWatch);
                $output .= $extraWatchHTML->renderHeader($extraWatch);
                $output .= $extraWatchHTML->renderTrialVersionInfo();
            }
        */
    }
    return $output;
}

if (get_class($env) == "ExtraWatchJoomlaEnv") {
    echo @extrawatch_mainController($task);
}