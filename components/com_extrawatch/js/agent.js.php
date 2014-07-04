<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
 * @package ExtraWatch  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
 * @version 2.3  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
 * @revision 2050  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
 * @copyright (C) 2014 by CodeGravity.com - All rights reserved!  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
 * @website http://www.codegravity.com  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
 */
defined('_JEXEC') or die('Restricted access');  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  

if (!defined('DS')) {  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
	define('DS',DIRECTORY_SEPARATOR);  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
}

if (@_EW_CLOUD_MODE) {
    $projectId = @$_REQUEST['projectId'];  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
	define('ENV',1);
}

$title = "Free live stats and visitor counter for Joomla, Wordpress, Drupal, Magento and Prestashop";  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  

require_once JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "includes.php";  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  


$extraWatch = new ExtraWatchMain();  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  $extraWatch->helper->setNoindexHttpHeaders();   //setting explicitly for ajax requests
$extraWatch->helper->setNoindexHttpHeaders();   //setting explicitly for ajax requests
$extraWatchHTML = new ExtraWatchHTML();
$referringURLParsed = parse_url(@$_SERVER['HTTP_REFERER']);  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
$referringQuery = @$referringURLParsed['query'];  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
$env = $_REQUEST['env'];  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  

?>

<?php

if (@_EW_CLOUD_MODE) {
    $output = ("var extrawatch_projectId='".$projectId."';\n");  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
    $output .= ("document.write(\"");
    $output .= ("<img src='"._EW_SCRIPT_HOST._EW_SCRIPT_HOST_DIR."extrawatch/".$extraWatch->env->renderAjaxLink('ajax','img')."&rand=\"+ Math.random() +\"&amp;env=$env&amp;ref=\"+ew_Utf8Encoder.ew_encodeURIComponent(document.referrer)+\"&amp;title=\"+ew_Utf8Encoder.encode((document.title)+\"&amp;uri=\"+ew_Utf8Encoder.ew_encodeURIComponent(window.location.pathname)+\"&amp;params=\"+ew_Utf8Encoder.ew_encodeURIComponent(location.search)+\"&amp;projectId=\"+extrawatch_projectId+\"' border='0' alt='$title' title='$title' style='width:0px;height:0px'/>");
    $output .= ("\");\n");  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
    $output .= ("document.write(\"");  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
    $uri = @$_SERVER['HTTP_REFERER'];  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
    $output .= $extraWatchHTML->renderHeatMapJS($uri, $referringQuery);  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
    $output .= ("\");\n");  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
} else {
    $liveSite = $extraWatch->config->getLiveSiteWithSuffix();  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
    $output = ("var ew_img = document.createElement('img');\n
    ew_img.src = \"".$liveSite.$extraWatch->env->renderAjaxLink('ajax','img')."&rand=\"+ Math.random() +\"&amp;env=$env&amp;ref=\"+ew_Utf8Encoder.ew_encodeURIComponent(document.referrer)+\"&amp;title=\"+ew_Utf8Encoder.encode(document.title)+\"&amp;uri=\"+ew_Utf8Encoder.ew_encodeURIComponent(window.location.pathname)+\"&amp;referringQuery=\"+ew_Utf8Encoder.ew_encodeURIComponent(\"$referringQuery\")+\"&amp;params=\"+ew_Utf8Encoder.ew_encodeURIComponent(location.search);\n
    ");
    $uri = @$_SERVER['HTTP_REFERER'];
    $output .= $extraWatchHTML->renderHeatMapJS($uri, $referringQuery);

}
echo $output;
?>

function extrawatch_sendUnloadReq() {  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
var rand='<?php echo $extraWatch->config->getRand(); ?>';  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
    try {
        http = extrawatch_createRequestObject();  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
        var newdate = new Date();  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
        var url = "<?php echo($extraWatch->config->getLiveSiteWithSuffix()); ?><?php echo $extraWatch->env->renderAjaxLink('ajax','unloaded');?>&rand=" + rand + "&timeID="+newdate.getTime() + "&env=<?php echo($env); ?>&projectId=<?php echo(_EW_PROJECT_ID);?>";  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
        http.open("GET", url, true);  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
        http.send(null);  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
    }
    catch (err) {
    }
}

window.addEventListener("beforeunload", function(){
    extrawatch_sendUnloadReq();  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
}, true);


