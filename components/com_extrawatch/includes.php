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

if (!defined('DS')) define('DS', DIRECTORY_SEPARATOR);
$jBasePath = dirname(__FILE__) . DS . ".." . DS . "..";
if (!defined('JPATH_BASE')) define('JPATH_BASE', $jBasePath);
if (!defined('JPATH_BASE2')) define('JPATH_BASE2', $jBasePath);
if (!defined('_JEXEC')) define("_JEXEC", 1);

$env = @$_REQUEST['env'];
$frontend = @$_REQUEST['frontend'];

switch ($env) {
  case "ExtraWatchDrupalEnv":
    {
    define('DRUPAL_ROOT', realpath(dirname(__FILE__).'/../../../../../../'));
    require_once DRUPAL_ROOT . '/includes/bootstrap.inc';
    drupal_bootstrap(DRUPAL_BOOTSTRAP_DATABASE);
    define('ENV', 1);
    break;
    }

  case "ExtraWatchJoomlaEnv":
    {
    $mainframe = initializeJoomla();
    break;
    }

  case "ExtraWatchWordpressEnv":
    {
    require_once dirname(__FILE__) . '/../../../../../wp-load.php';
    if (!defined('ENV')) define('ENV', 1);
    break;
    }
  case "ExtraWatchNoCMSEnv":
    {
    if (!defined('ENV')) define('ENV', 1);
    break;
    }

  default:
    {
    if (!defined('ENV')) {
      $mainframe = initializeJoomla();
    }
    break;
    }

}


require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "inc.extrawatch.env.php";
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "config.php";
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "class.extrawatch.php";
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "class.extrawatch.block.php";
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "class.extrawatch.cache.php";
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "class.extrawatch.config.php";
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "class.extrawatch.goal.php";
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "class.extrawatch.helper.php";
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "class.extrawatch.date.php";
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "class.extrawatch.stat.php";
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "class.extrawatch.visit.php";
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "class.extrawatch.visit.history.php";
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "class.extrawatch.log.php";
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "class.extrawatch.sizes.php";
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "class.extrawatch.flow.php";
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "class.extrawatch.heatmap.php";
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "class.ip2country.php";
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "class.ipinfodb.php";
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "class.extrawatch.seo.php";

/** HTML */
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "html". DS . "class.extrawatch.html.php";
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "html". DS . "class.extrawatch.seo.html.php";
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "html". DS . "class.extrawatch.block.html.php";
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "html". DS . "class.extrawatch.stat.html.php";
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "html". DS . "class.extrawatch.goal.html.php";
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "html". DS . "class.extrawatch.visit.html.php";
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "html". DS . "class.extrawatch.visit.history.html.php";
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "html". DS . "class.extrawatch.trend.html.php";
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "html". DS . "class.extrawatch.heatmap.html.php";
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "html". DS . "class.extrawatch.flow.html.php";

function initializeJoomla()
{
  global $mainframe;

  if (!defined('JPATH_ROOT'))
    require_once JPATH_BASE . DS . 'includes' . DS . 'defines.php';
  if (!defined('JDEBUG'))
    require_once JPATH_BASE . DS . 'includes' . DS . 'framework.php';

  require_once JPATH_BASE2 . DS . 'libraries' . DS . 'joomla' . DS . 'application' . DS . 'application.php';

  require_once JPATH_BASE2 . DS . 'libraries' . DS . 'joomla' . DS . 'application' . DS . 'module' . DS . 'helper.php';
  $mainframe = & JFactory :: getApplication('site');
  $mainframe->initialise();
  return $mainframe;
}


