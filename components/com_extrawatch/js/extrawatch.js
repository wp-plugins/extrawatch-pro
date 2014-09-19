/**
 * ExtraWatch - A real-time ajax monitor and live stats
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) by CodeGravity.com - All rights reserved!
 * @website http://www.codegravity.com
 */

var extraWatchLinkElementsListOriginal = {};


var ew_Utf8Encoder = { //added ex_ to avoid conflicts
    /** Credits: http://www.webtoolkit.info/javascript-url-decode-encode.html **/

// URL utf-8 encoding  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
    encode : function (str) {
        return escape(this._utf8_encode(str));
    },

// UTF-8 encoding
    _utf8_encode : function (str) {
        str = str.replace(/\r\n/g,"\n");
        var encoded_str = "";

        for (var n = 0; n < str.length; n++) {
            var c = str.charCodeAt(n);
            if (c < 128) {
                encoded_str += String.fromCharCode(c);
            }
            else if((c > 127) && (c < 2048)) {
                encoded_str += String.fromCharCode((c >> 6) | 192);
                encoded_str += String.fromCharCode((c & 63) | 128);
            } else {
                encoded_str += String.fromCharCode((c >> 12) | 224);
                encoded_str += String.fromCharCode(((c >> 6) & 63) | 128);
                encoded_str += String.fromCharCode((c & 63) | 128);
            }
        }
        return encoded_str;
    },

    /** prevent restricted %2F in paths */
    ew_encodeURIComponent : function (str) {
        str = str.replace("/","_SLASH_");
        str = encodeURIComponent(str);
        return str;
    }

}



function extrawatch_createRequestObject() {
    var ro;
    if(window.ActiveXObject){
        ro = new ActiveXObject("Microsoft.XMLHTTP");
    }else{
        ro = new XMLHttpRequest();
    }
    return ro;
}



var ew_Heatmap = {


    extraWatch_click : function(evt, randHashToPass, uri2titleId) {

        var positionFromEvent = ew_Heatmap.getPositionFromEvent(evt);
        var xpath = ew_Heatmap.createXPathFromElement(evt.target);

        var scrollx = window.pageXOffset == undefined ? clickDoc.scrollLeft : window.pageXOffset;
        var scrolly = window.pageYOffset == undefined ? clickDoc.scrollTop : window.pageYOffset;

        /* Is the click in the viewing area? Not on scrollbars. The problem still exists for FF on the horizontal scrollbar */
        var url = urlBase + "&params=" + encodeURIComponent("&action=click&uri2titleId=" + uri2titleId + "&x=" + positionFromEvent[0] + "&y=" + positionFromEvent[1] + "&w=" + w + "&h=" + h + "&randHash=" + randHashToPass + "&xpath=" + encodeURIComponent(encodeURIComponent(xpath)));


        if(this.checkIfDoSynchronousClick(evt))	  {
            downloadUrl(url, function (e) {}, true, false);	//download it synchronously
        } else {
            setTimeout(function() {
                downloadUrl(url, function (e) {}, true);
            }, 0);	//call the click asynchronously so there is no delay in clicks
        }
    },
    keyListener: function (evt) {
        var evt = (evt) ? evt : ((event) ? event : null);
        var key = (evt) ? evt.which : event.keyCode;

        if (String.fromCharCode(key) == "p") {
            this.changeDayInUrl(-1);
        } else if (String.fromCharCode(key) == "n") {
            this.changeDayInUrl(1);
        } else if (String.fromCharCode(key) == "t") {
            this.toggleHeatmap();
        }
    },

    changeDayInUrl: function (_increment) {
        var dayVariable = "<?php echo ExtraWatchHeatmap::HEATMAP_PARAM_DAY_NAME; ?>";
        var location = document.location.href;
        var extraWatchDay = this.getQueryVariable(dayVariable);
        var prevDay = parseInt(extraWatchDay) + _increment;
        var newLocationString = this.replaceString(location, extraWatchDay, prevDay);
        document.location.href = newLocationString;
    },

    toggleHeatmap: function () {
        xx.toggleDisplay();
    },

    replaceString: function (_str, _search, _replace) {
        var re = new RegExp(_search, 'g')
        return _str.replace(re, _replace);
    },

    getQueryVariable: function (variable) {
        var query = window.location.search.substring(1);
        var vars = query.split("&");
        for (var i = 0; i < vars.length; i++) {
            var pair = vars[i].split("=");
            if (pair[0] == variable) {
                return pair[1];
            }
        }
    },

    /**
     source and thanks to: http://nickthecoder.wordpress.com/2013/02/26/offsetx-and-offsety-in-firefox/
     */
    ew_getOffset: function (evt) {
        if (evt.offsetX != undefined)
            return {x: evt.offsetX, y: evt.offsetY};

        var el = evt.target;
        var offset = {x: 0, y: 0};

        while (el.offsetParent) {
            offset.x += el.offsetLeft;
            offset.y += el.offsetTop;
            el = el.offsetParent;
        }

        offset.x = evt.pageX - offset.x;
        offset.y = evt.pageY - offset.y;

        return offset;
    },

    /* attach click event listener on onclick event */
    attachExtraWatchClickListener: function (randHashToPass, uri2titleId) {
        window.document.onclick = function (evt) {
            if (window.addEventListener) {
                window.addEventListener("onclick", ew_Heatmap.extraWatch_click(evt, randHashToPass, uri2titleId), false);
            } else if (window.attachEvent) {
                window.attachEvent("onclick", ew_Heatmap.extraWatch_click(evt, randHashToPass, uri2titleId));
            } else {
                window.addEventListener("onclick", ew_Heatmap.extraWatch_click(evt, randHashToPass, uri2titleId), false);
            }
        }
    },

    extraWatch_decorateLinksWithCustomHandler: function (extraWatchLinkElementsList) {
	

		for (i = 0; i < extraWatchLinkElementsList.length; i++) {
            try {
                if (extraWatchLinkElementsList[i].onclick != null) {
                    extraWatchLinkElementsListOriginal[extraWatchLinkElementsList[i].outerHTML] = extraWatchLinkElementsList[i].onclick;	//storing original onclick function by key which is innerText
                    extraWatchLinkElementsList[i].onclick = function (evt) {
                        ew_Heatmap.extraWatch_click(evt);
						var outerHTMLElement;
						if (evt.srcElement != null) {	// supposed to work in IE only
							outerHTMLElement = evt.srcElement.outerHTML;
						} else if (evt.target != null) { // supposed to work in other browsers
							outerHTMLElement = evt.target.outerHTML;
						}
						if (outerHTMLElement) {
							extraWatch_originalOnClickFunction = extraWatchLinkElementsListOriginal[outerHTMLElement];	//retrieving original onclick function by key which is innerText
							if (extraWatch_originalOnClickFunction != null) {
								return extraWatch_originalOnClickFunction();
							}
						}
                    }
                }
            } catch (e) {
            }
        }
    },

    findPos: function (obj) {
        var curtop = 0;
        if (obj.offsetParent) {
            do {
                curtop += obj.offsetTop;
            } while (obj = obj.offsetParent);
            return [curtop];
        }
    },

    createXPathFromElement: function (elm) {
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
    },

    checkIfDoSynchronousClick: function (evt) {
        if (((evt.target.localName == "input" || evt.target.localName == "button") && evt.target.type == "submit") ||
            (
            (evt.target.localName == "a" && evt.target.href != null && evt.target.href.indexOf('javascript:') == -1) ||
            (evt.target.parentElement.localName == "a" && evt.target.parentElement.href != null && evt.target.parentElement.href.indexOf('javascript:') == -1 ) ||	//checking currenlty only 3 parents above..
            (evt.target.parentElement != null && evt.target.parentElement.parentElement != null && evt.target.parentElement.parentElement.localName == "a" && evt.target.parentElement.parentElement.href != null && evt.target.parentElement.parentElement.href.indexOf('javascript:') == -1)
            )) {
            return true;
        } else {
            return false;
        }
    },


    getPositionFromEvent : function (evt) {
        var pos = h337.util.mousePosition(evt); //relative position to element
        if (evt.offsetX == null || evt.offsetY == null) {
            var calculatedOffset = this.ew_getOffset(evt);
            var x = calculatedOffset.x;
            var y = calculatedOffset.y;
        } else {
            var x = evt.offsetX; // offset relative within the element
            var y = evt.offsetY;
        }
        return [x,y];
    },

    highlightElementsByXPath: function(xpathElements, document){
        var xpath = null;
        var length = xpathElements.length;

        for (var i = 0; i < length; i++) {
            xpath = xpathElements[i];
            try {
                var elementFound = document.evaluate(xpath, document, null, XPathResult.FIRST_ORDERED_NODE_TYPE, null);
                var element = elementFound.singleNodeValue;
                if (element != null) {
                    element.style.border="2px solid " + xpathElementColors[i];
                    element.style.backgroundColor=xpathElementColors[i];
                }
            } catch (e) {
                //suppress if no element was found
            }
        }
    },


    renderHeatmap : function (randHash, data) {
        var ip = ew_Heatmap.getQueryVariable('ip');
        var obj = eval('(' + data + ')');
        xx.displayLoading
        xx.store.setDataSet(obj);
    }



}