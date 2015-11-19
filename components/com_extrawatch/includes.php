<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
 * @package ExtraWatch  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
 * @version 2.3  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
 * @revision 2594  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
 * @copyright (C) 2015 by CodeGravity.com - All rights reserved!  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
 * @website http://www.codegravity.com  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
 */

defined('_JEXEC') or die('Restricted access');

/* wordpress performance optimization */
if (!defined('SHORTINIT')) define('SHORTINIT', true);
if (!defined('MYSQL_NEW_LINK')) define('MYSQL_NEW_LINK', false);
/* wordpress performance optimization */

$env = @$_REQUEST['env'];  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
if (!$env) {
    $env = @$_REQUEST['amp;env'];  // env passed this way because of xhtml compatibility  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
}

if (!defined('DS')) {  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
    define('DS', DIRECTORY_SEPARATOR);  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
}

if (!defined("_EW_PROJECT_ID") && @$_REQUEST['projectId']) {  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
    define("_EW_PROJECT_ID", @$_REQUEST['projectId']);  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
}


if (@$_GET['env'] == "ExtraWatchPrestaShopEnv") { // we're in PrestaShop
    $env = "ExtraWatchPrestaShopEnv";  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
}

if (@$GLOBALS['mageFilename']) {  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
	$env = "ExtraWatchMagentoEnv";  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
}

$jBasePath = realpath(dirname(__FILE__) . DS . ".." . DS . "..");  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
if (!defined('JPATH_BASE')) define('JPATH_BASE', $jBasePath);  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
if (!defined('JPATH_BASE2')) define('JPATH_BASE2', $jBasePath);  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
if (!defined('_JEXEC')) define("_JEXEC", 1);  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  

$frontend = @$_REQUEST['frontend'];  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  

switch ($env) {
    case "ExtraWatchPrestaShopEnv":  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
    {
        if (!defined('ENV')) define('ENV', 1);

        if (!defined('_PS_CONFIG_DIR_')) {
            @define('_PS_CONFIG_DIR_', realpath(realpath(dirname(__FILE__)).''.DS.'..'.DS.'..'.DS.'..'.DS.'..'.DS.'..'.DS.'config').DS);
            @define('_PS_CORE_DIR_', realpath(realpath(dirname(__FILE__)).''.DS.'..'.DS.'..'.DS.'..'.DS.'..'.DS.'..').DS);
        }

        require_once(realpath(realpath(dirname(__FILE__)).''.DS.'..'.DS.'..'.DS.'..'.DS.'..'.DS.'..'.DS.'config'.DS.'settings.inc.php'));
        require_once(realpath(realpath(dirname(__FILE__)).''.DS.'..'.DS.'..'.DS.'..'.DS.'..'.DS.'..'.DS.'config'.DS.'config.inc.php'));
        require_once(realpath(realpath(dirname(__FILE__)).''.DS.'..'.DS.'..'.DS.'..'.DS.'..'.DS.'..'.DS.'config'.DS.'autoload.php'));
        break;
    }

    case "ExtraWatchMagentoEnv":  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
    {
        $GLOBALS['mageRunCode'] = true;  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
        if (!defined('ENV')) define('ENV', 1);

        include_once realpath(dirname(__FILE__).DS."..".DS."..".DS."..".DS."..".DS."..".DS."..".DS."..".DS."..".DS).DS."app".DS."Mage.php";

        Mage::app();

        break;
    }

    case "ExtraWatchDrupalEnv":  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
    {
        define('DRUPAL_ROOT', realpath(dirname(__FILE__).'/../../../../../../../'));  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
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

        /* perf. optim. - loading frontend widgets faster way */
        $requestedURI = $_SERVER['REQUEST_URI'];
        if (
            strstr($requestedURI,"action=heatmap.include.js&task=ajax") ||
            strstr($requestedURI,"action=agent.js") ||
            strstr($requestedURI,"action=img")
        ){

            require_once dirname(__FILE__) . '/../../../../../wp-load.php';

        } else {    //not ajax calls..
            require_once dirname(__FILE__) . '/../../../../../wp-load.php';
            require( ABSPATH . WPINC . '/formatting.php' );
            require( ABSPATH . WPINC . '/meta.php' );
            require( ABSPATH . WPINC . '/post.php' );
            require( ABSPATH . WPINC . '/widgets.php' );
            wp_plugin_directory_constants();
        }

        @$GLOBALS['wp_version'] = true;

        //ob_end_clean(); - was causing problems in redering ajax js scripts to include
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

if (!@_EW_CLOUD_MODE && !defined("_EW_PROJECT_ID")) {  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
    define("_EW_PROJECT_ID", FALSE);  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
}

require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "class.extrawatch.php";
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "class.extrawatch.log.php";
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "class.extrawatch.exception.input.php";
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "class.extrawatch.input.php";
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "class.extrawatch.exception.ipblocked.php";
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "class.extrawatch.setup.php";  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "class.extrawatch.referers.php";  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "class.extrawatch.block.php";  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "class.extrawatch.cache.php";  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "class.extrawatch.config.php";  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "class.extrawatch.goal.php";  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "class.extrawatch.helper.php";  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "class.extrawatch.date.php";  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "class.extrawatch.stat.php";  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "class.extrawatch.visit.php";  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "class.extrawatch.visit.history.php";  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "class.extrawatch.sizes.php";
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "class.extrawatch.flow.php";  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "class.extrawatch.heatmap.php";  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "class.extrawatch.user.php";  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  


require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "class.extrawatch.downloads.php";  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "class.extrawatch.exception.ipblocked.php";  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "class.extrawatch.uasparser.php";  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "class.extrawatch.exception.ipblocked.php";



require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "lib" . DS . "geoip" . DS . "class.geoip.php";
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
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "html". DS . "class.extrawatch.downloads.html.php";  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src" . DS . "html". DS . "class.extrawatch.user.html.php";  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  

function initializeJoomla()  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
{
    global $mainframe;  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  

    if (!defined('JPATH_ROOT')) {
        $definedFile = JPATH_BASE . DS . 'includes' . DS . 'defines.php';
        if (@file_exists($definedFile)) {
            require_once $definedFile;
        }

    }
    if (!defined('JDEBUG')) {
        $frameworkFile = JPATH_BASE . DS . 'includes' . DS . 'framework.php';
        if (@file_exists($frameworkFile)) {
            require_once $frameworkFile;
        }

    }

    if (@defined("JVERSION") && version_compare(JVERSION,"3.0","<")) {

        require_once (JPATH_BASE2 . DS . 'libraries' . DS . 'joomla' . DS . 'application' . DS . 'application.php');  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  

        if (version_compare(JVERSION,"1.6","<")  && !class_exists('JModuleHelper')) {  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
            require_once (JPATH_BASE2 . DS . 'libraries' . DS . 'joomla' . DS . 'application' . DS . 'module' . DS . 'helper.php');  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
        }
        $mainframe = JFactory :: getApplication('site');  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  

        if (version_compare(JVERSION,"2.5","<")) { //if it's not Joomla 2.5  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
            $mainframe->initialise();  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
            return $mainframe;  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
        }
    } else {
        //$app = JFactory::getApplication('site'); - was causing multilanguage problem, /en/en/ links  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
        //$app->initialise();  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
    }
}



