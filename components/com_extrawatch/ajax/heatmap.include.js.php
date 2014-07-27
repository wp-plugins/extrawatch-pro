<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.3
 * @revision 2099
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2014 by CodeGravity.com - All rights reserved!
 * @website http://www.codegravity.com
 */
// disabled for now defined('_JEXEC') or die('Restricted access');  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  




defined('_JEXEC') or die('Restricted access');

if (@EXTRAWATCH_PROFILING_ENABLED) {
    $t1 = round(microtime(true) * 1000);
}

/*define('DS', DIRECTORY_SEPARATOR);  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
$jBasePath = realpath(dirname(__FILE__) . DS . ".." . DS . ".." . DS . "..". DS);  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
define('JPATH_BASE2', $jBasePath);*/

include_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS. "includes.php";

$extraWatch = new ExtraWatchMain();
$extraWatch->helper->setNoindexHttpHeaders();   //setting explicitly for ajax requests
//$extraWatch->block->checkPermissions();

$params = ExtraWatchHelper::requestGet("params");
$params=str_replace("?","",$params);    //remove trailing ?  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  

$queryParams = ExtraWatchHelper::getUrlQueryParams();
$getParamsFromQuery = ExtraWatchHelper::convertUrlQuery($queryParams['params']);
$getParams = ExtraWatchHelper::convertUrlQuery(urldecode(@$getParamsFromQuery['getParams']));

$ip = @$getParams["ip"];

//$queryParams = ExtraWatchHelper::convertUrlQuery($params);  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  

//print_r($queryParams);  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  

$title = @$queryParams['title'];
$uri = ExtraWatchHelper::unescapeSlash(@$queryParams['uri']);


//echo("url: $uri title: $title");  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  

$extraWatch->visit->addUri2Title($uri, $title);
$uri2titleId = $extraWatch->visit->getUri2TitleId($uri, $title);

ExtraWatchLog::debug("heatmap.include.js.php - title: ".$title." uri: ".$uri. " uri2titleId: ".$uri2titleId. " ip: $ip queryParams: ". print_r($queryParams, true));

//echo("uri2titleId: $uri2titleId");  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  

if (@_EW_CLOUD_MODE) {
    $liveSite = _EW_SCRIPT_HOST._EW_SCRIPT_HOST_DIR._EW_EXTRAWATCH_DIR;
} else {
    $liveSite = /*"http://www.".$extraWatch->config->getDomainFromLiveSite(_EW_PROJECT_ID).*/ $extraWatch->config->getLiveSiteWithSuffix();
}

?>
  var urlBase = "<?php echo $liveSite; ?><?php echo $extraWatch->env->renderAjaxLink('ajax','heatmap');?>&rand=<?php echo $extraWatch->config->getRand();?>&env=<?php echo $extraWatch->config->getEnvironment();?>&projectId=<?php echo _EW_PROJECT_ID;?>";
  var clickDoc = (document.documentElement != undefined && document.documentElement.clientHeight != 0) ? document.documentElement : document.body;
  var w = screen.width;
  var h = screen.height;
  var xx;
  var extraWatchLinkElementsList;
  var extraWatchLinkElementsListOriginalFunctions = new Array();

  var randHash = '<?php echo(@$getParams[ExtraWatchHeatmap::HEATMAP_PARAM_HASH]);?>';

  <?php
  $request = $extraWatch->env->getRequest();

  $heatmapEnabled = @$getParams[ExtraWatchHeatmap::HEATMAP_PARAM_NAME];
  $day = @$getParams[ExtraWatchHeatmap::HEATMAP_PARAM_DAY_NAME];
  $xpath = urldecode(@$getParams['xpath']);
?>

ew_Heatmap.attachExtraWatchClickListener('<?php echo($extraWatch->config->getRandHash()); ?>', <?php echo( (int) $uri2titleId);?>);


  <?php if (@$heatmapEnabled) { ?>

	var data = "<?php echo str_replace("\"","\\\"",$extraWatch->heatmap->getHeatmapClicksByUri2TitleIdJSON($uri2titleId, $day, $ip)); ?>";

      document.onkeypress = ew_Heatmap.keyListener;

  window.onresize = function () {
    ew_Heatmap.renderHeatmap(randHash, data);
    return true;
  }

    <?php } ?>





    window.addEventListener('load',function(){
		extraWatchLinkElementsList = document.getElementsByTagName("A");
		ew_Heatmap.extraWatch_decorateLinksWithCustomHandler(extraWatchLinkElementsList);
		  });


  <?php if (@$xpath) { ?>



var xpathElements = [];
var xpathElementClicks = [];
var xpathElementColors = [];

    <?php if (@$xpath == "all") {

    $totalClicksOfUri2TitleId = $extraWatch->heatmap->getTotalMostClickedHTMLElementsByUri2TitleId($uri2titleId);
    $xpathElements = $extraWatch->heatmap->getAllMostClickedHTMLElementsByUri2TitleId($uri2titleId, $totalClicksOfUri2TitleId);
    foreach ($xpathElements as $xpathElement ) {
        echo "xpathElements.push('".urldecode(urldecode($xpathElement->xpath))."');\n";
        echo "xpathElementClicks.push('".$xpathElement->xpathCount."');\n";
        echo "xpathElementColors.push('".ExtraWatchHelper::rgbColorFromRatio($xpathElement->ratio)."');\n";
    }
    ?>


    window.addEventListener('load', ew_Heatmap.highlightElementsByXPath(xpathElements, document));


   <?php } else { ?>


    window.addEventListener('load',function(){
		var xpath = '<?php echo urldecode(urldecode($xpath));?>';
		try {
			alert('highlighting element: ' + xpath);
			var elementFound = document.evaluate(xpath, document, null, XPathResult.FIRST_ORDERED_NODE_TYPE, null);
			var element = elementFound.singleNodeValue;
			if (element != null) {
				window.scroll(0, ew_Heatmap.findPos(element));
				element.style.border="5px dashed red";
				}
		} catch (e) {
			alert('Element ' + xpath + ' no longer exists on page');
		}
	  });

  <?php } ?>

  <?php } else if (@$heatmapEnabled) { ?>
    xx = h337.create({"element":document.body, "radius":50, "visible":true});
    window.addEventListener('load',function(){
	    setTimeout(ew_Heatmap.renderHeatmap(randHash, data), 0); //waiting 1 seconds for everything to load
	  });
    <?php } ?>

<?php

if (@EXTRAWATCH_PROFILING_ENABLED) {
    $time = round(microtime(true) * 1000) - $t1;
    $debugMessage = " ($time ms) ";
}

$debugMessage .= "heatmap.include.js.php";
ExtraWatchLog::debug($debugMessage);



?>
