<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 1.2.18
 * @revision 253
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


  switch ($task) {

    /*
     * disabled trial
     *
     *     case "useTrial" :
            {
                $extraWatchHTML->renderAdminStyles();
                $extraWatch->config->useTrial();
                $extraWatch->config->saveVersionIntoDatabase();
                $extraWatch->config->setLiveSite($env->getRootSite());
                break;
            }
    */
    case "useFreeVersion" :
      {
      $extraWatchHTML->renderAdminStyles();
      $extraWatch->config->useFreeVersion();
      $extraWatch->config->saveVersionIntoDatabase();
      $extraWatch->config->setLiveSite($env->getRootSite());
      break;
      }


    case "activate" :
      {
      $extraWatchHTML->renderAdminStyles();
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
    $extraWatchHTML->renderAdminStyles();
    return $extraWatchHTML->renderAcceptLicense();
  } else {

    
    if (!$extraWatch->config->isFree() && !$extraWatch->config->isAdFree()  /* disabled trial || ($extraWatch->config->isTrial() && !$extraWatch->config->isTrialTimeOver())*/) {
      $extraWatchHTML->renderAdminStyles();
      return $extraWatchHTML->renderAdFreeLicense();
    }
    

    switch ($task) {

      case "storeIpInfoDbKey":
        {
        $extraWatchHTML->renderAdminStyles();
        $extraWatchHTML->renderHeader();
        $keyValue = ExtraWatchHelper::requestPost('storeIpInfoDbKey');
        if ($keyValue) {
          $extraWatch->config->saveConfigValue("EXTRAWATCH_IPINFODB_KEY", $keyValue);
        } else {
          echo("<br/><div style='border: 1px solid red; width: 50%; padding: 10px;'>" . _EW_STATS_MAP_INVALID_KEY . "</div>");
        }
        $extraWatchHTML->renderBody($option);
        break;
        }

      case "update" :
        {
        $extraWatchHTML->renderAdminStyles();
        $extraWatchHTML->renderHeader();
        echo $extraWatchHTML->renderUpdate();
        break;
        }

      case "sizes" :
        {
        if (!$extraWatch->config->isFree()) {
          $extraWatchHTML->renderAdminStyles();
          $extraWatchHTML->renderHeader();
          echo $extraWatchHTML->renderSizes();
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
            $extraWatchHTML->renderAdminStyles();
            $extraWatchHTML->renderHeader();
            $extraWatchHTML->renderSEO();
            break;
            }
        }
        break;
        }

      case "graphs" :
        {
        $extraWatchHTML->renderAdminStyles();
        $extraWatchHTML->renderHeader();
        echo $extraWatchTrendHTML->renderGraphsForGroup(ExtraWatchHelper::requestGet('group'));

        break;
        }

      case "trends" :
        {
        $extraWatchHTML->renderAdminStyles();
        $extraWatchHTML->renderHeader();
        echo $extraWatchTrendHTML->renderTrends();

        break;
        }

      case "credits" :
        {
        $extraWatchHTML->renderAdminStyles();
        $extraWatchHTML->renderHeader();
        echo $extraWatchHTML->renderCredits();

        break;
        }
      case "goals" :
        {
        switch ($action) {

          case "insert":
            {
            $extraWatchHTML->renderAdminStyles();
            $extraWatchHTML->renderHeader();
            $extraWatchGoalHTML->renderBackToGoals();
            $extraWatchGoalHTML->renderGoalsInsert(@ ExtraWatchHelper::requestGet('id'), @ ExtraWatchHelper::requestGet('postid'));
            break;
            }
          case "save":
            {
            $extraWatchHTML->renderAdminStyles();
            $extraWatchHTML->renderHeader();
            $extraWatch->goal->saveGoal(ExtraWatchHelper::requestPost());
            $extraWatchGoalHTML->renderGoals(@$result);

            break;
            }
          case "edit":
            {
            $extraWatchHTML->renderAdminStyles();
            $extraWatchHTML->renderHeader();
            $extraWatchGoalHTML->renderBackToGoals();
            $extraWatchGoalHTML->renderGoalEdit(@ ExtraWatchHelper::requestGet('goalId'));

            break;
            }
          case "delete":
            {
            $extraWatchHTML->renderAdminStyles();
            $extraWatchHTML->renderHeader();
            $result = $extraWatch->goal->deleteGoal(@ ExtraWatchHelper::requestGet('goalId'));
            $extraWatchGoalHTML->renderGoals(@ $result);

            break;
            }
          case "enable":
            {
            $extraWatchHTML->renderAdminStyles();
            $extraWatchHTML->renderHeader();
            $result = $extraWatch->goal->enableGoal(@ ExtraWatchHelper::requestGet('goalId'));
            $extraWatchGoalHTML->renderGoals(@ $result);

            break;
            }
          case "disable":
            {
            $extraWatchHTML->renderAdminStyles();
            $extraWatchHTML->renderHeader();
            $result = $extraWatch->goal->disableGoal(@ ExtraWatchHelper::requestGet('goalId'));
            $extraWatchGoalHTML->renderGoals(@ $result);

            break;
            }

          case "export":
            {
            //$extraWatchHTML->renderAdminStyles();
            //$extraWatchHTML->renderHeader();
            $extraWatch->goal->exportGoals(ExtraWatchHelper::requestPost());
            $extraWatchGoalHTML->renderExportGoals(@ $result);

            break;
            }

          case "import":
            {
            $extraWatchHTML->renderAdminStyles();
            $extraWatchHTML->renderHeader();
            echo $extraWatchGoalHTML->renderImportGoals();

            break;
            }

          case "saveImportGoal":
            {
            $extraWatchHTML->renderAdminStyles();
            $extraWatchHTML->renderHeader();
            $extraWatch->goal->saveImportGoal(ExtraWatchHelper::requestPost());
            $extraWatchGoalHTML->renderGoals(@ $result);

            }

          default:
            {
            $extraWatchHTML->renderAdminStyles();
            $extraWatchHTML->renderHeader();
            $extraWatchGoalHTML->renderGoals(@ $result);

            break;
            }

        }

        break;
        }
      case "settings" :
        {
        $extraWatchHTML->renderAdminStyles();
        $extraWatchHTML->renderHeader();
        $extraWatchHTML->renderSettings(@ $result);

        break;
        }
      case "settingsSave" :
        {
        $result = $extraWatch->helper->saveSettings(ExtraWatchHelper::requestPost());
        $extraWatchHTML->renderAdminStyles();
        $extraWatchHTML->renderHeader();
        $extraWatchHTML->renderSettings(@ $result);

        break;
        }
      case "resetData" :
        {
        $extraWatchHTML->renderAdminStyles();
        $extraWatchHTML->renderHeader();
        $result = $extraWatch->helper->resetData(ExtraWatchHelper::requestPost());
        $extraWatchHTML->renderResetData($result);
        break;
        }

      case "antiSpam" :
        {

        switch ($action) {

          case "toggleBlocking":
            {
            $extraWatchHTML->renderAdminStyles();
            $extraWatchHTML->renderHeader();
            $ip = @ ExtraWatchHelper::requestGet('ip');
            $extraWatch->block->extrawatch_blockIpToggle($ip);
            $extraWatchHTML->renderAntiSpam();
            break;

            }

          case "save" :
            {
            $result = $extraWatch->helper->saveAntiSpamSettings(ExtraWatchHelper::requestPost());
            $extraWatchHTML->renderAdminStyles();
            $extraWatchHTML->renderHeader();
            $extraWatchHTML->renderAntiSpam();
            break;
            }


          default:
            {
            $extraWatchHTML->renderAdminStyles();
            $extraWatchHTML->renderHeader();
            $extraWatchHTML->renderAntiSpam();
            break;
            }
        }

        break;
        }


      case "status" :
        {
        if (!$extraWatch->config->isFree()) {
          $extraWatchHTML->renderAdminStyles();
          $extraWatchHTML->renderHeader();
          $extraWatchHTML->renderStatus();
        }
        break;
        }

      /*			case "upgrade" :
      {
          $extraWatchHTML->renderAdminStyles();
          $extraWatchHTML->renderHeader();
          $extraWatchHTML->renderUpgrade();
          break;
      }*/


      case "license" :
        {
        $extraWatchHTML->renderAdminStyles();
        $extraWatchHTML->renderHeader();
        echo $extraWatchHTML->renderAdFreeLicense();
        break;
        }


      case "history" :
        {
        $extraWatchHTML->renderAdminStyles();
        $extraWatchHTML->renderHeader();
        return $extraWatchHTML->renderVisitsHistory();
        break;
        }

      case "flow" :
        {
        if (!$extraWatch->config->isFree()) {
          $extraWatchHTML->renderAdminStyles();
          $extraWatchHTML->renderHeader();
          $extraWatchHTML->renderFlow();
        }
        break;
        }

      case "emails" :
        {

        switch ($action) {

          case "save":
            {
            $extraWatchHTML->renderAdminStyles();
            $extraWatchHTML->renderHeader();
            $result = $extraWatch->helper->saveEmailSettings(ExtraWatchHelper::requestPost());
            $extraWatchHTML->renderEmails();
            break;

            }
          default:
            {
            $extraWatchHTML->renderAdminStyles();
            $extraWatchHTML->renderHeader();
            $extraWatchHTML->renderEmails();
            break;
            }
        }
        break;
        }

      case "heatmap" :
        {
        $extraWatchHTML->renderAdminStyles();
        $extraWatchHTML->renderHeader();
        $extraWatchHTML->renderHeatMap();
        break;
        }

      default :
        if ($extraWatch->config->checkLicenseAccepted()) {
          $extraWatchHTML->renderAdminStyles();
          $extraWatchHTML->renderHeader();
          $extraWatchHTML->renderBody($option);
        } else {
          $extraWatchHTML->renderAdminStyles();
          return $extraWatchHTML->renderAcceptLicense();
        }
        break;
    }
    /*
        } else {
            $extraWatchHTML->renderAdminStyles();
            $extraWatchHTML->renderHeader();
            $extraWatchHTML->renderTrialVersionInfo();
        }
    */
  }
}

