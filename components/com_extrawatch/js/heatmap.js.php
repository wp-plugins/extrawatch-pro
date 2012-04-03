<?php

/**
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 1.2.18
 * @revision 41
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2012 by Matej Koval - All rights reserved!
 * @website http://www.codegravity.com
 **/
defined('_JEXEC') or die('Restricted access');
?>
<script type="text/javascript"
        src="<?php echo $this->extraWatch->config->getLiveSiteWithSuffix(); ?>components/com_extrawatch/js/heatmap/heatmap.js"></script>
<script type="text/javascript"
        src="<?php echo $this->extraWatch->config->getLiveSiteWithSuffix(); ?>components/com_extrawatch/js/jdownloadurl.js"></script>
<script type="text/javascript">

    var urlBase = "<?php echo $this->extraWatch->config->getLiveSiteWithSuffix(); ?>components/com_extrawatch/heatmap.php?rand=<?php echo $this->extraWatch->config->getRand();?>&env=<?php echo $this->extraWatch->config->getEnvironment(); ?>";
    var clickDoc = (document.documentElement != undefined && document.documentElement.clientHeight != 0) ? document.documentElement : document.body;
    //        var w = clickDoc.clientWidth != undefined ? clickDoc.clientWidth : window.innerWidth;
    //        var h = clickDoc.clientHeight != undefined ? clickDoc.clientHeight : window.innerHeight;
    var w = screen.width;
    var h = screen.height;
    var xx;

    <?php
    $request = $this->extraWatch->env->getRequest();
    $heatmapEnabled = $request->getVar(ExtraWatchHeatmap::HEATMAP_PARAM_NAME);
    $day = $request->getVar(ExtraWatchHeatmap::HEATMAP_PARAM_DAY_NAME);
    ?>


    <?php if (@$heatmapEnabled) { ?>

    function renderHeatmap() {
        var randHash = getQueryVariable('<?php echo(ExtraWatchHeatmap::HEATMAP_PARAM_HASH);?>');
        var ip = getQueryVariable('ip');
        var urlGetData = urlBase + "&action=getHeatMap" + "&uri2titleId=<?php echo($id);?>" + "&w=" + w + "&h=" + h + "&day=<?php echo $day;?>&ip=" + ip + "&randHash=" + randHash;
        downloadUrl(urlGetData, function (data) {
            var obj = eval('(' + data + ')');
            var transformed = xpathToDataSet(obj);
            xx.displayLoading
            xx.store.setDataSet(transformed);
        }, true);
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


    window.onload = function () {

        window.document.onclick = function (evt) {
            /*var screenHeight = window.screen.height;
            var screenWidth = window.screen.width;

            scrollx = window.pageXOffset;
            scrolly = window.pageYOffset;
            winw = Math.max(document.scrollWidth, document.offsetWidth, w);
            winh = Math.max(document.scrollHeight, document.offsetHeight, h);*/

            var pos = h337.util.mousePosition(evt); //relative position to element
            x = pos[0];
            y = pos[1];
            var xpath = createXPathFromElement(evt.target);

            var scrollx = window.pageXOffset == undefined ? clickDoc.scrollLeft : window.pageXOffset;
            var scrolly = window.pageYOffset == undefined ? clickDoc.scrollTop : window.pageYOffset;

            //alert("x: " +x + "y: " + y + " scrollx: " + scrollx + " scrolly:" + scrolly + " w:" + w + " h:" + h);

            /* Is the click in the viewing area? Not on scrollbars. The problem still exists for FF on the horizontal scrollbar */
            var randHashToPass = '<?php echo($this->extraWatch->config->getRandHash()); ?>';
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
                        segs.unshift('id("' + elm.getAttribute('id') + '")');
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

        ;

    <?php if (@$heatmapEnabled) { ?>
        xx = h337.create({"element":document.body, "radius":50, "visible":true});
        renderHeatmap();
        <?php } ?>

    }

</script>

