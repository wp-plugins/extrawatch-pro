<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.0
 * @revision 764
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.codegravity.com
 */
// disabled for now defined('_JEXEC') or die('Restricted access');


define('_JEXEC', 1);
define('DS', DIRECTORY_SEPARATOR);
$jBasePath = realpath(dirname(__FILE__) . DS . ".." . DS . ".." . DS . "..". DS);
define('JPATH_BASE2', $jBasePath);

include_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS. "includes.php";

$extraWatch = new ExtraWatchMain();
//$extraWatch->block->checkPermissions();

require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS. "lang" . DS . $extraWatch->config->getLanguage() . ".php";

$id = ExtraWatchHelper::requestGet("id");
$params = ExtraWatchHelper::requestGet("params");

$params=str_replace("?","",$params);    //remove trailing ?

$queryParams = ExtraWatchHelper::convertUrlQuery($params);

echo("/** query params: \n");
print_r($queryParams);
echo("*/");

?>
  var urlBase = "<?php echo _EW_SCRIPT_HOST._EW_SCRIPT_HOST_DIR; ?>extrawatch/components/com_extrawatch/ajax/heatmap.php?rand=<?php echo $extraWatch->config->getRand();?>&env=<?php echo $extraWatch->config->getEnvironment();?>&projectId=<?php echo _EW_PROJECT_ID;?>";
  var clickDoc = (document.documentElement != undefined && document.documentElement.clientHeight != 0) ? document.documentElement : document.body;
  //        var w = clickDoc.clientWidth != undefined ? clickDoc.clientWidth : window.innerWidth;
  //        var h = clickDoc.clientHeight != undefined ? clickDoc.clientHeight : window.innerHeight;
  var w = screen.width;
  var h = screen.height;
  var xx;

  <?php
  $request = $extraWatch->env->getRequest();
  $heatmapEnabled = @$queryParams[ExtraWatchHeatmap::HEATMAP_PARAM_NAME];
  $day = @$queryParams[ExtraWatchHeatmap::HEATMAP_PARAM_DAY_NAME];
  $uri2titleId = @$queryParams['uri2titleId'];
  $xpath = @$queryParams['xpath'];
?>


  <?php if (@$heatmapEnabled) { ?>

  function renderHeatmap() {
    var randHash = '<?php echo(@$queryParams[ExtraWatchHeatmap::HEATMAP_PARAM_HASH]);?>';
    var ip = getQueryVariable('ip');
    var data = "<?php echo str_replace("\"","\\\"",$extraWatch->heatmap->getHeatmapClicksByUri2TitleId($uri2titleId, $w, $h, $day, $ip)); ?>";
    var obj = eval('(' + data + ')');
    var transformed = xpathToDataSet(obj);
    xx.displayLoading
    xx.store.setDataSet(transformed);
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
    var dayVariable = "<?php echo @$queryParams[ExtraWatchHeatmap::HEATMAP_PARAM_DAY_NAME]; ?>";
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
      var url = urlBase + "&action=click&uri2titleId=<?php echo($id);?>&x=" + x + "&y=" + y + "&w=" + w + "&h=" + h + "&randHash=" + randHashToPass + "&xpath=" + xpath;
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

  
  window.onload = function () {
    window.document.onclick = function (evt) {
		extraWatch_click(evt)
    }


	function extraWatch_decorateLinksWithCustomHandler() {
		var list = document.getElementsByTagName("A");
		for(i=0;i<list.length;i++) {
			var extraWatch_originalOnClickFunction = list[i].onclick;
			list[i].onclick = function(evt) {
				extraWatch_originalOnClickFunction();
				extraWatch_click(evt);
			}
		}
	}

extraWatch_decorateLinksWithCustomHandler();  
	
  <?php if (@$xpath) { ?>
		var xpath = '<?php echo urldecode(urldecode($xpath));?>';
        var elementFound = document.evaluate(xpath, document, null, XPathResult.FIRST_ORDERED_NODE_TYPE, null);
		alert('highlighting element: ' + xpath + 'Element found: ' + elementFound);
        var element = elementFound.singleNodeValue;
        if (element != null) {
			element.style.border="5px dashed red";
			}
  <?php } else if (@$heatmapEnabled) { ?>
    xx = h337.create({"element":document.body, "radius":50, "visible":true});
    renderHeatmap();
    <?php } ?>


  }
  /* ]]> */
<?php

?>
