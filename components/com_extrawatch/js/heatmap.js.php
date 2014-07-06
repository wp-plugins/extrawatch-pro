<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
 * @package ExtraWatch  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
 * @version 2.3  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
 * @revision 2072  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
 * @copyright (C) 2014 by CodeGravity.com - All rights reserved!  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
 * @website http://www.codegravity.com  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
 */
defined('_JEXEC') or die('Restricted access');  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  

if (@_EW_CLOUD_MODE) {
    $liveSite = _EW_SCRIPT_HOST._EW_SCRIPT_HOST_DIR;  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  

echo("
  (function() {\n
        var ewDownloadUrl = document.createElement('script');
        ewDownloadUrl.type = 'text/javascript'; ewDownloadUrl.async = true;\n
        ewDownloadUrl.src = '".$liveSite.$extraWatch->env->getEnvironmentSuffix()."components/com_extrawatch/js/jdownloadurl.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ewDownloadUrl, s);\n
        })();\n
\n");


echo("
  (function() {\n
        var ewHeatmapJS = document.createElement('script');
        ewHeatmapJS.type = 'text/javascript'; ewHeatmapJS.async = true;\n
        ewHeatmapJS.src = '".$liveSite.$extraWatch->env->getEnvironmentSuffix()."components/com_extrawatch/js/heatmap/heatmap.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ewHeatmapJS, s);\n
        })();\n
\n");

} else {
    $liveSite = $extraWatch->config->getLiveSite();  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
}


?>
<?php
$projectIdParam="";
if (@_EW_CLOUD_MODE) {
    $projectIdParam="&amp;projectId=\"+extrawatch_projectId+\"";  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
}

echo("
  (function() {\n
        var ewHeatmapIncludeJS = document.createElement('script');
        ewHeatmapIncludeJS.type = 'text/javascript'; ewHeatmapIncludeJS.async = true;\n
        ewHeatmapIncludeJS.src = \"".$liveSite.$extraWatch->env->getEnvironmentSuffix().$extraWatch->env->renderAjaxLink('ajax','heatmap.include.js').
    "&env=".get_class($extraWatch->config->env).
    "&amp;id=".$id.
    "&amp;extraWatchHeatmap=".$extraWatch->helper->requestGet('extraWatchHeatmap').
    "&amp;extraWatchDay=".$extraWatch->helper->requestGet('extraWatchDay').
    $projectIdParam.
    "&amp;params=\"+encodeURIComponent(\"getParams=\" + encodeURIComponent(location.search)) + \"&title=\" + document.title + \"&uri=\" + location.pathname;

        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ewHeatmapIncludeJS, s);\n
        })();\n
\n");

 
?>
