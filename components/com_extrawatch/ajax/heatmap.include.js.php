<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.2
 * @revision 1290
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.codegravity.com
 */
// disabled for now defined('_JEXEC') or die('Restricted access');



defined('_JEXEC') or die('Restricted access');
/*define('DS', DIRECTORY_SEPARATOR);
$jBasePath = realpath(dirname(__FILE__) . DS . ".." . DS . ".." . DS . "..". DS);
define('JPATH_BASE2', $jBasePath);*/

include_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS. "includes.php";

$extraWatch = new ExtraWatchMain();
//$extraWatch->block->checkPermissions();
$extraWatch->config->initializeTranslations();

$params = ExtraWatchHelper::requestGet("params");
$params=str_replace("?","",$params);    //remove trailing ?

$queryParams = ExtraWatchHelper::getUrlQueryParams();
$getParamsFromQuery = ExtraWatchHelper::convertUrlQuery($queryParams['params']);
$getParams = ExtraWatchHelper::convertUrlQuery(urldecode(@$getParamsFromQuery['getParams']));

$ip = @$getParams["ip"];

//$queryParams = ExtraWatchHelper::convertUrlQuery($params);

//print_r($queryParams);

$title = @$queryParams['title'];
$uri = @$queryParams['uri'];


//echo("url: $uri title: $title");

$extraWatch->visit->addUri2Title($uri, $title);
$uri2titleId = $extraWatch->visit->getUri2TitleId($uri, $title);

ExtraWatchLog::debug("heatmap.include.js.php - title: ".$title." uri: ".$uri. " uri2titleId: ".$uri2titleId. " ip: $ip queryParams: ". print_r($queryParams, true));

//echo("uri2titleId: $uri2titleId");

if (_EW_CLOUD_MODE) {
    $liveSite = _EW_SCRIPT_HOST._EW_SCRIPT_HOST_DIR._EW_EXTRAWATCH_DIR;
} else {
    $liveSite = /*"http://www.".$extraWatch->config->getDomainFromLiveSite(_EW_PROJECT_ID).*/ $extraWatch->config->getLiveSiteWithSuffix();
}

?>
  var urlBase = "<?php echo $liveSite; ?><?php echo $extraWatch->env->renderAjaxLink('ajax','heatmap');?>&rand=<?php echo $extraWatch->config->getRand();?>&env=<?php echo $extraWatch->config->getEnvironment();?>&projectId=<?php echo _EW_PROJECT_ID;?>";
  var clickDoc = (document.documentElement != undefined && document.documentElement.clientHeight != 0) ? document.documentElement : document.body;
  //        var w = clickDoc.clientWidth != undefined ? clickDoc.clientWidth : window.innerWidth;
  //        var h = clickDoc.clientHeight != undefined ? clickDoc.clientHeight : window.innerHeight;
  var w = screen.width;
  var h = screen.height;
  var xx;

  <?php
  $request = $extraWatch->env->getRequest();


  $heatmapEnabled = @$getParams[ExtraWatchHeatmap::HEATMAP_PARAM_NAME];
  $day = @$getParams[ExtraWatchHeatmap::HEATMAP_PARAM_DAY_NAME];
  $xpath = urldecode(@$getParams['xpath']);
?>


  <?php if (@$heatmapEnabled) { ?>

  function renderHeatmap() {


    var randHash = '<?php echo(@$getParams[ExtraWatchHeatmap::HEATMAP_PARAM_HASH]);?>';
    var ip = getQueryVariable('ip');
    var data = "<?php echo str_replace("\"","\\\"",$extraWatch->heatmap->getHeatmapClicksByUri2TitleIdJSON($uri2titleId, $day, $ip)); ?>";
    var obj = eval('(' + data + ')');
    var transformed = xpathToDataSet(obj);
    xx.displayLoading
    xx.store.setDataSet(transformed);
//document.body.appendChild(xx.get("ctx").canvas);
  }

  document.onkeypress = keyListener;



  function keyListener(evt) {
    var evt = (evt) ? evt : ((event) ? event : null);
    var key = (evt) ? evt.which : event.keyCode;

    if (String.fromCharCode(key) == "p") {
      changeDayInUrl(-1);
    } else if (String.fromCharCode(key) == "n") {
      changeDayInUrl(1);
    } else if (String.fromCharCode(key) == "t") {
      toggleHeatmap();
    }
  }

  function changeDayInUrl(_increment) {
    var dayVariable = "<?php echo ExtraWatchHeatmap::HEATMAP_PARAM_DAY_NAME; ?>";
    var location = document.location.href;
    var extraWatchDay = getQueryVariable(dayVariable);
    var prevDay = parseInt(extraWatchDay) + _increment;
    var newLocationString = replaceString(location, extraWatchDay, prevDay);
    document.location.href = newLocationString;
  }

  function toggleHeatmap() {
    xx.toggleDisplay();
  }

  function replaceString(_str, _search, _replace) {
    var re = new RegExp(_search, 'g')
    return _str.replace(re, _replace);
  }


  function getQueryVariable(variable) {
    var query = window.location.search.substring(1);
    var vars = query.split("&");
    for (var i = 0; i < vars.length; i++) {
      var pair = vars[i].split("=");
      if (pair[0] == variable) {
        return pair[1];
      }
    }
  }




  window.onresize = function () {
    xx.clear();
    renderHeatmap();
    return true;
  }

  function xpathToDataSet(_obj) {
    return _obj;
  }

  window.onunload = function () {
    //xx.destroy();
  }
    <?php } ?>

	function extraWatch_click(evt) {
	
	  var pos = h337.util.mousePosition(evt); //relative position to element
      var x = evt.offsetX; // offset relative within the element
      var y = evt.offsetY;
      var xpath = createXPathFromElement(evt.target);

      var scrollx = window.pageXOffset == undefined ? clickDoc.scrollLeft : window.pageXOffset;
      var scrolly = window.pageYOffset == undefined ? clickDoc.scrollTop : window.pageYOffset;

      /* Is the click in the viewing area? Not on scrollbars. The problem still exists for FF on the horizontal scrollbar */
      var randHashToPass = '<?php echo($extraWatch->config->getRandHash()); ?>';
      var url = urlBase + "&params=" + encodeURIComponent("&action=click&uri2titleId=<?php echo($uri2titleId);?>&x=" + x + "&y=" + y + "&w=" + w + "&h=" + h + "&randHash=" + randHashToPass + "&xpath=" + encodeURIComponent(encodeURIComponent(xpath)));
      //xx.store.addDataPoint(x,y);
      downloadUrl(url, function (e) {
      }, true);
 
  }

      function createXPathFromElement(elm) {
      var allNodes = document.getElementsByTagName('*');
      for (segs = []; elm && elm.nodeType == 1; elm = elm.parentNode) {
        if (elm.hasAttribute('id')) {
          var uniqueIdCount = 0;
          for (var n = 0; n < allNodes.length; n++) {
            if (allNodes[n].hasAttribute('id') && allNodes[n].id == elm.id) uniqueIdCount++;
            if (uniqueIdCount > 1) break;
          }
          ;
          if (uniqueIdCount == 1) {
            //segs.unshift('id("' + elm.getAttribute('id') + '")');
            segs.unshift('//*[@id="' + elm.getAttribute('id') + '"]');
            return segs.join('/');
          } else {
            segs.unshift(elm.localName.toLowerCase() + '[@id="' + elm.getAttribute('id') + '"]');
          }
        } else if (elm.hasAttribute('class')) {
          segs.unshift(elm.localName.toLowerCase() + '[@class="' + elm.getAttribute('class') + '"]');
        } else {
          for (i = 1, sib = elm.previousSibling; sib; sib = sib.previousSibling) {
            if (sib.localName == elm.localName)  i++;
          }
          ;
          segs.unshift(elm.localName.toLowerCase() + '[' + i + ']');
        }
        ;
      }
      ;
      return segs.length ? '/' + segs.join('/') : null;
    }

	/* attach click event listener on onclick event */
	function attachExtraWatchClickListener() {
		window.document.onclick = function (evt) {
			if(window.addEventListener){
                window.addEventListener("onclick",extraWatch_click(evt), false);
            } else if(window.attachEvent){
                window.attachEvent("onclick", extraWatch_click(evt));
            } else{
               document.addEventListener("onclick", extraWatch_click(evt), false);
            }
		}
	}
	
	/* attach calling function attachExtraWatchClickListener on window object */
		if(window.addEventListener){
                window.addEventListener("onload", attachExtraWatchClickListener(), false);
            } else if(window.attachEvent){
                window.attachEvent("onload", attachExtraWatchClickListener());
            } else{
               document.addEventListener("onload", attachExtraWatchClickListener(), false);
            }



	function extraWatch_decorateLinksWithCustomHandler() {
		var list = document.getElementsByTagName("A");
		for(i=0;i<list.length;i++) {
            try {
                if (list[i].onclick != null) {
			    var extraWatch_originalOnClickFunction = list[i].onclick;
			    list[i].onclick = function(evt) {
	    			extraWatch_click(evt);
                    extraWatch_originalOnClickFunction();
		    	}
			}
            } catch (e) {
            }
		}
	}

    document.addEventListener('DOMContentLoaded',function(){
		extraWatch_decorateLinksWithCustomHandler();  
		  });

	
  <?php if (@$xpath) { ?>
  
  function findPos(obj) {
    var curtop = 0;
    if (obj.offsetParent) {
        do {
            curtop += obj.offsetTop;
        } while (obj = obj.offsetParent);
    return [curtop];
    }
	}

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


    var length = xpathElements.length;
    var xpath = null;
	    document.addEventListener('DOMContentLoaded',function(){

    for (var i = 0; i < length; i++) {
    xpath = xpathElements[i];
        var elementFound = document.evaluate(xpath, document, null, XPathResult.FIRST_ORDERED_NODE_TYPE, null);
        var element = elementFound.singleNodeValue;
        if (element != null) {
            element.style.border="2px solid " + xpathElementColors[i];
            element.style.backgroundColor=xpathElementColors[i];
            //element.style.opacity=0.6;
        //alert(xpathElementColors[i]);
        }
    }
		  });


   <?php } else { ?>


    document.addEventListener('DOMContentLoaded',function(){
		var xpath = '<?php echo urldecode(urldecode($xpath));?>';
        var elementFound = document.evaluate(xpath, document, null, XPathResult.FIRST_ORDERED_NODE_TYPE, null);
		alert('highlighting element: ' + xpath);
        var element = elementFound.singleNodeValue;
        if (element != null) {
			window.scroll(0,findPos(element));
			element.style.border="5px dashed red";
			}
	  });

  <?php } ?>

  <?php } else if (@$heatmapEnabled) { ?>
    xx = h337.create({"element":document.body, "radius":50, "visible":true});
    document.addEventListener('DOMContentLoaded',function(){
		renderHeatmap();
	  });
    <?php } ?>

  /* ]]> */
<?php

?>
