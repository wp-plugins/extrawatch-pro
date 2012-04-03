<?php
/*
Plugin Name: ExtraWatch
Plugin URI: http://www.codegravity.com
Description: Popular visitor live tracking component ported from Joomla. ExtraWatch allows you to watch your joomla visitors live stats and bots in real-time from the administration back-end. Specially their IP addresses, countries they come from, geographical location on a map, which pages they are viewing, their browser and operating system, it creates daily and all-time stats from these information plus unique, pageload and total hits statistics. Furthermore, you can block harmful IP addresses, see blocked attempts stats, evaluate the trend charts, and create goals based on many parameters. In the front-end, it displays the top countries, user and visit information for certain periods of time.
Version: 1.2.18 BETA PRO
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

/* this fixes double require by wordpress*/
if (@function_exists("extrawatch_admin_menu")) {
    return;
} else {

    add_action('admin_menu', 'extrawatch_admin_menu');
    add_action('wp_meta', 'extrawatch_frontend');

    require_once(JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "inc.extrawatch.env.php");

    register_activation_hook(__FILE__, array('ExtraWatchSetupWordpress', 'install'));
    register_deactivation_hook(__FILE__, array('ExtraWatchSetupWordpress', 'uninstall'));

    function extrawatch_admin_menu()
    {
        $options = get_option('jw_plugin_options');
        $EC_userLevel = isset($options['accessLevel']) && !empty($options['accessLevel']) ? $options['accessLevel'] : 'level_10';
        add_menu_page(__('ExtraWatch', 'extrawatch'), __('ExtraWatch', 'extrawatch'), $EC_userLevel, 'extrawatch', 'jw_plugin_options');
        // add_submenu_page( 'edit.php?post_type=theme', __('Theme Page Options'), __('Theme Menu Options'), 'edit_themes', 'theme_options', theme_options);
    }

    function jw_plugin_options()
    {
        if (!current_user_can('manage_options')) {
            wp_die(__('You do not have sufficient permissions to access this page.'));
        }
        echo '<div class="wrap">';
        require_once ("components" . DS . "com_extrawatch" . DS . "config.php");
        require_once ("components" . DS . "com_extrawatch" . DS . "inc.extrawatch.env.php");
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

?>
