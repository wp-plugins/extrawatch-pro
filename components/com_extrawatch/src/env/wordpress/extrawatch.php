<?php
/*
Plugin Name: ExtraWatch
Plugin URI: http://www.codegravity.com
Description: Popular visitor live tracking component ported from Joomla. <a href="http://youtu.be/w8-LITejoV0?hd=1">View demo video</a>.
Demo server: <a href="http://codegravitydemo.com/wordpress/">Frontpage</a> / <a href="http://codegravitydemo.com/wordpress/wp-admin/">Admin</a>.
Features: <strong>Visitor Live Stats</strong>, <strong>History</strong>,
<strong>Graphs</strong>, <strong>Anti-spam</strong>, <strong>Nightly Email Reports</strong>,
<strong>Front-end Counters</strong>, translated in <strong>42 world languages</strong>
Version: 1.2.18.203 PRO
Author: Matej Koval
Author URI: http://www.codegravity.com
*/

/** using native directory separator for paths */
if (!defined('DS'))
    define ('DS', DIRECTORY_SEPARATOR);

if (!defined('_JEXEC')) define("_JEXEC", 1);
define("ENV", 1);
if (!defined('JPATH_BASE2')) define("JPATH_BASE2", dirname(__FILE__));
if (!defined('JPATH_BASE')) define("JPATH_BASE", dirname(__FILE__));
if ( ! defined( 'WP_PLUGIN_DIR' ) )
    define( 'WP_PLUGIN_DIR', WP_CONTENT_DIR.'/plugins' );

/* this fixes double require by wordpress*/
if (@function_exists("extrawatch_admin_menu")) {
    return;
} else {

    add_action('admin_menu', 'extrawatch_admin_menu');
    add_action('wp_meta', 'extrawatch_frontend');

    require_once(JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src". DS. "inc.extrawatch.env.php");

    require_once(JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src". DS. "env". DS. "wordpress" . DS . "widget" . DS . "class.extrawatch.agent.widget.php");
    require_once(JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src". DS. "env". DS. "wordpress" . DS . "widget" . DS . "class.extrawatch.users.widget.php");
    require_once(JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src". DS. "env". DS. "wordpress" . DS . "widget" . DS . "class.extrawatch.visitors.widget.php");

    register_activation_hook(__FILE__, array('ExtraWatchSetupWordpress', 'install'));
    register_deactivation_hook(__FILE__, array('ExtraWatchSetupWordpress', 'uninstall'));

    function extrawatch_admin_menu()
    {
        $options = get_option('ew_plugin_options');

        $path = WP_PLUGIN_URL."/extrawatch/";
        $EC_userLevel = isset($options['accessLevel']) && !empty($options['accessLevel']) ? $options['accessLevel'] : 'level_10';

        add_menu_page(__('ExtraWatch', 'extrawatch'), __('ExtraWatch', 'extrawatch'), $EC_userLevel, 'extrawatch', 'ew_plugin_options', $path.'components/com_extrawatch/img/icons/extrawatch-logo-16x16.gif');

        add_submenu_page('extrawatch','Live Stats','Live Stats',$EC_userLevel,'extrawatch&task=',array(&$this, 'extrawatch&task='));
        /*PRO_START*/
        add_submenu_page('extrawatch','SEO','SEO',$EC_userLevel,'extrawatch&task=seo',array(&$this, 'extrawatch&task=seo'));
        add_submenu_page('extrawatch','Heatmap','Heatmap',$EC_userLevel,'extrawatch&task=heatmap',array(&$this, 'extrawatch&task=heatmap'));
        add_submenu_page('extrawatch','Traffic Flow','Traffic Flow',$EC_userLevel,'extrawatch&task=flow',array(&$this, 'extrawatch&task=flow'));
        /*PRO_END*/
        add_submenu_page('extrawatch','Graphs and Trends','Graphs and Trends',$EC_userLevel,'extrawatch&task=graphs',array(&$this, 'extrawatch&task=graphs'));
        add_submenu_page('extrawatch','Goals','Goals',$EC_userLevel,'extrawatch&task=goals',array(&$this, 'extrawatch&task=goals'));
        add_submenu_page('extrawatch','Visit History','Visit History',$EC_userLevel,'extrawatch&task=history',array(&$this, 'extrawatch&task=history'));
        add_submenu_page('extrawatch','Anti-spam and Blocking','Anti-spam and Blocking',$EC_userLevel,'extrawatch&task=antiSpam',array(&$this, 'extrawatch&task=antiSpam'));
        add_submenu_page('extrawatch','Email Reports','Email Reports',$EC_userLevel,'extrawatch&task=emails',array(&$this, 'extrawatch&task=emails'));
        add_submenu_page('extrawatch','Your License','Your License',$EC_userLevel,'extrawatch&task=license',array(&$this, 'extrawatch&task=license'));
        /*PRO_START*/
        add_submenu_page('extrawatch','Database Status','Database Status',$EC_userLevel,'extrawatch&task=status',array(&$this, 'extrawatch&task=status'));
        add_submenu_page('extrawatch','Directory Sizes','Directory Sizes',$EC_userLevel,'extrawatch&task=sizes',array(&$this, 'extrawatch&task=sizes'));
        /*PRO_END*/
        add_submenu_page('extrawatch','Settings','Settings',$EC_userLevel,'extrawatch&task=settings',array(&$this, 'extrawatch&task=settings'));
        add_submenu_page('extrawatch','Credits','Credits',$EC_userLevel,'extrawatch&task=credits',array(&$this, 'extrawatch&task=credits'));

        //add_submenu_page( 'edit.php?post_type=theme', __('Theme Page Options'), __('Theme Menu Options'), 'edit_themes', 'theme_options', theme_options);
    }

    function ew_plugin_options()
    {
        if (!current_user_can('manage_options')) {
            wp_die(__('You do not have sufficient permissions to access this page.'));
        }
        echo '<div class="wrap">';
        require_once ("components" . DS . "com_extrawatch" . DS . "config.php");
        require_once ("components" . DS . "com_extrawatch" . DS . "src". DS. "inc.extrawatch.env.php");
        require_once ("administrator" . DS . "components" . DS . "com_extrawatch" . DS . "admin.extrawatch.php");
        echo '</div>';
    }

    function extrawatch_frontend()
    {
        echo("<br/>");
        include_once ("modules" . DS . "mod_extrawatch_agent" . DS . "mod_extrawatch_agent.php");
        include_once ("modules" . DS . "mod_extrawatch_users" . DS . "mod_extrawatch_users.php");
        include_once ("modules" . DS . "mod_extrawatch_visitors" . DS . "mod_extrawatch_visitors.php");

        echo renderExtraWatchAgent();
        echo renderExtraWatchVisitors();
        echo renderExtraWatchUsers();
    }
}
unset( $_GET['error'] );
?>
