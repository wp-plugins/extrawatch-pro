<?php
/*
Plugin Name: ExtraWatch PRO (Live Stats, Heatmap, Click tracking, Download Monitor and more)
Plugin URI: http://www.extrawatch.com


Description: Features: <strong>Visitor Live Stats</strong>, <strong>Monitor File Downloads, Clicks</strong>, <strong>Monitor clicks, Heatmap</strong>, <strong>SEO Report</strong>, <strong>Traffic Flow</strong>, <strong>Front-end Counters</strong>, <strong>Anti-spam</strong>, <strong>Nightly Email Reports</strong>, <strong>History</strong>, <strong>Graphs</strong>, <strong>Directory sizes</strong>, translated in <strong>42 world languages</strong>

Version: 2.2.1215 PRO
Author: CodeGravity.com
Author URI: http://www.extrawatch.com
*/

/** using native directory separator for paths */
if (!defined('DS'))
  define ('DS', DIRECTORY_SEPARATOR);

if (!defined('_JEXEC')) define("_JEXEC", 1);

if (!defined("ENV")) {
	define("ENV", 1);
}

if (!defined('JPATH_BASE2')) define("JPATH_BASE2", dirname(__FILE__));
if (!defined('JPATH_BASE')) define("JPATH_BASE", dirname(__FILE__));
if ( ! defined( 'WP_PLUGIN_DIR' ) )
  define( 'WP_PLUGIN_DIR', WP_CONTENT_DIR.'/plugins' );

if ( ! defined( '_EW_PROJECT_ID' ) ) 
	define("_EW_PROJECT_ID", FALSE);

/* this fixes double require by wordpress*/
if (@function_exists("extrawatch_admin_menu")) {
  return;
} else {

  add_action('admin_menu', 'extrawatch_admin_menu');
  add_action('wp_meta', 'extrawatch_frontend');

  require_once(JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS. "class.extrawatch.log.php");
  require_once(JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS. "inc.extrawatch.env.php");

  require_once(JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS. "env". DS. "wordpress" . DS . "widget" . DS . "class.extrawatch.agent.widget.php");
  require_once(JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS. "env". DS. "wordpress" . DS . "widget" . DS . "class.extrawatch.users.widget.php");
  require_once(JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS. "env". DS. "wordpress" . DS . "widget" . DS . "class.extrawatch.visitors.widget.php");

  register_activation_hook(__FILE__, array('ExtraWatchEnvSetupWordpress', 'install'));
  register_deactivation_hook(__FILE__, array('ExtraWatchEnvSetupWordpress', 'uninstall'));


  function extrawatch_admin_menu()
  {
    $options = get_option('ew_plugin_options');

    $extraWatchURL = getExtraWatchURL();

    $EC_userLevel = isset($options['accessLevel']) && !empty($options['accessLevel']) ? $options['accessLevel'] : 'level_10';

    add_menu_page(__('ExtraWatch', 'extrawatch'), __('ExtraWatch', 'extrawatch'), $EC_userLevel, 'extrawatch', 'ew_plugin_options', $extraWatchURL.'components/com_extrawatch/img/icons/extrawatch-logo-16x16.png');

    add_submenu_page('extrawatch','Live Stats','Live Stats',$EC_userLevel,'extrawatch&task=',array(&$this, 'extrawatch&task='));
    
    add_submenu_page('extrawatch','Downloads','Downloads',$EC_userLevel,'extrawatch&task=downloads',array(&$this, 'extrawatch&task=downloads'));
    add_submenu_page('extrawatch','SEO','SEO',$EC_userLevel,'extrawatch&task=seo',array(&$this, 'extrawatch&task=seo'));
    add_submenu_page('extrawatch','Clicks','Clicks',$EC_userLevel,'extrawatch&task=heatmap',array(&$this, 'extrawatch&task=heatmap'));
    add_submenu_page('extrawatch','Traffic Flow','Traffic Flow',$EC_userLevel,'extrawatch&task=flow',array(&$this, 'extrawatch&task=flow'));
    
    add_submenu_page('extrawatch','Graphs and Trends','Graphs and Trends',$EC_userLevel,'extrawatch&task=graphs',array(&$this, 'extrawatch&task=graphs'));
    add_submenu_page('extrawatch','Goals','Goals',$EC_userLevel,'extrawatch&task=goals',array(&$this, 'extrawatch&task=goals'));
    add_submenu_page('extrawatch','Visit History','Visit History',$EC_userLevel,'extrawatch&task=history',array(&$this, 'extrawatch&task=history'));
    add_submenu_page('extrawatch','Anti-spam and Blocking','Anti-spam and Blocking',$EC_userLevel,'extrawatch&task=antiSpam',array(&$this, 'extrawatch&task=antiSpam'));
    add_submenu_page('extrawatch','Email Reports','Email Reports',$EC_userLevel,'extrawatch&task=emails',array(&$this, 'extrawatch&task=emails'));
    add_submenu_page('extrawatch','Your License','Your License',$EC_userLevel,'extrawatch&task=license',array(&$this, 'extrawatch&task=license'));
    
    add_submenu_page('extrawatch','Database Status','Database Status',$EC_userLevel,'extrawatch&task=status',array(&$this, 'extrawatch&task=status'));
    add_submenu_page('extrawatch','Directory Sizes','Directory Sizes',$EC_userLevel,'extrawatch&task=sizes',array(&$this, 'extrawatch&task=sizes'));
    
    add_submenu_page('extrawatch','Settings','Settings',$EC_userLevel,'extrawatch&task=settings',array(&$this, 'extrawatch&task=settings'));
    add_submenu_page('extrawatch','Credits','Credits',$EC_userLevel,'extrawatch&task=credits',array(&$this, 'extrawatch&task=credits'));

    //add_submenu_page( 'edit.php?post_type=theme', __('Theme Page Options'), __('Theme Menu Options'), 'edit_themes', 'theme_options', theme_options);
  }

  function ew_plugin_options()
  {
    $extraWatchPath = getExtraWatchPath();

    if (!current_user_can('manage_options')) {
      wp_die(__('You do not have sufficient permissions to access this page.'));
    }
    echo '<div class="wrap">';
    require_once $extraWatchPath . "components" . DS . "com_extrawatch" . DS . "config.php";
    require_once $extraWatchPath . "components" . DS . "com_extrawatch" . DS . "src" . DS. "inc.extrawatch.env.php";
    require_once $extraWatchPath . "administrator" . DS . "components" . DS . "com_extrawatch" . DS . "admin.extrawatch.php";

    echo extrawatch_mainController();

    echo '</div>';
  }

  function extrawatch_frontend()
  {
    $extraWatchPath = getExtraWatchPath();
    echo("<br/>");
    include_once $extraWatchPath . "modules" . DS . "mod_extrawatch_agent" . DS . "mod_extrawatch_agent.php";
    include_once $extraWatchPath . "modules" . DS . "mod_extrawatch_users" . DS . "mod_extrawatch_users.php";
    include_once $extraWatchPath . "modules" . DS . "mod_extrawatch_visitors" . DS . "mod_extrawatch_visitors.php";

    echo renderExtraWatchAgent();
    echo renderExtraWatchVisitors();
    echo renderExtraWatchUsers();
  }

  function getExtraWatchURL() {
    

    
    $extraWatchPath = WP_PLUGIN_URL."/extrawatch-pro/";
    

    return $extraWatchPath;
  }

  function getExtraWatchPath() {
    

    
    $extraWatchPath = WP_PLUGIN_DIR."/extrawatch-pro/";
    

    return $extraWatchPath;
  }


}
unset($_GET['error'] );
