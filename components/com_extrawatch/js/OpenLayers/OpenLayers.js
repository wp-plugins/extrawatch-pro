/*PRO_START*/
/*

 OpenLayers.js -- OpenLayers Map Viewer Library

 Copyright 2005-2010 OpenLayers Contributors, released under the Clear BSD
 license. Please see http://svn.openlayers.org/trunk/openlayers/license.txt
 for the full text of the license.

 Includes compressed code under the following licenses:

 (For uncompressed versions of the code used please see the
 OpenLayers SVN repository: <http://openlayers.org/>)

 */

/* Contains portions of Prototype.js:
 *
 * Prototype JavaScript framework, version 1.4.0
 *  (c) 2005 Sam Stephenson <sam@conio.net>
 *
 *  Prototype is freely distributable under the terms of an MIT-style license.
 *  For details, see the Prototype web site: http://prototype.conio.net/
 *
 *--------------------------------------------------------------------------*/

/**
 *
 *  Contains portions of Rico <http://openrico.org/>
 *
 *  Copyright 2005 Sabre Airline Solutions
 *
 *  Licensed under the Apache License, Version 2.0 (the "License"); you
 *  may not use this file except in compliance with the License. You
 *  may obtain a copy of the License at
 *
 *         http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or
 *  implied. See the License for the specific language governing
 *  permissions and limitations under the License.
 *
 */

/**
 * Contains XMLHttpRequest.js <http://code.google.com/p/xmlhttprequest/>
 * Copyright 2007 Sergey Ilinsky (http://www.ilinsky.com)
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * http://www.apache.org/licenses/LICENSE-2.0
 */

/**
 * Contains portions of Gears <http://code.google.com/apis/gears/>
 *
 * Copyright 2007, Google Inc.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 *
 *  1. Redistributions of source code must retain the above copyright notice,
 *     this list of conditions and the following disclaimer.
 *  2. Redistributions in binary form must reproduce the above copyright notice,
 *     this list of conditions and the following disclaimer in the documentation
 *     and/or other materials provided with the distribution.
 *  3. Neither the name of Google Inc. nor the names of its contributors may be
 *     used to endorse or promote products derived from this software without
 *     specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE AUTHOR ``AS IS'' AND ANY EXPRESS OR IMPLIED
 * WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
 * MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO
 * EVENT SHALL THE AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO,
 * PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS;
 * OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 * WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR
 * OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF
 * ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * Sets up google.gears.*, which is *the only* supported way to access Gears.
 *
 * Circumvent this file at your own risk!
 *
 * In the future, Gears may automatically define google.gears.* without this
 * file. Gears may use these objects to transparently fix bugs and compatibility
 * issues. Applications that use the code below will continue to work seamlessly
 * when that happens.
 */
var OpenLayers = {singleFile:true};
(function () {
    var singleFile = (typeof OpenLayers == "object" && OpenLayers.singleFile);
    var scriptLocation;
    window.OpenLayers = {_scriptName:(!singleFile) ? "lib/OpenLayers.js" : "OpenLayers.js", _getScriptLocation:function () {
        if (scriptLocation != undefined) {
            return scriptLocation;
        }
        scriptLocation = "";
        var isOL = new RegExp("(^|(.*?\\/))(" + OpenLayers._scriptName + ")(\\?|$)");
        var scripts = document.getElementsByTagName('script');
        for (var i = 0, len = scripts.length; i < len; i++) {
            var src = scripts[i].getAttribute('src');
            if (src) {
                var match = src.match(isOL);
                if (match) {
                    scriptLocation = match[1];
                    break;
                }
            }
        }
        return scriptLocation;
    }};
    if (!singleFile) {
        var jsfiles = new Array("OpenLayers/Util.js", "OpenLayers/BaseTypes.js", "OpenLayers/BaseTypes/Class.js", "OpenLayers/BaseTypes/Bounds.js", "OpenLayers/BaseTypes/Element.js", "OpenLayers/BaseTypes/LonLat.js", "OpenLayers/BaseTypes/Pixel.js", "OpenLayers/BaseTypes/Size.js", "OpenLayers/Console.js", "OpenLayers/Tween.js", "Rico/Corner.js", "Rico/Color.js", "OpenLayers/Ajax.js", "OpenLayers/Events.js", "OpenLayers/Request.js", "OpenLayers/Request/XMLHttpRequest.js", "OpenLayers/Projection.js", "OpenLayers/Map.js", "OpenLayers/Layer.js", "OpenLayers/Icon.js", "OpenLayers/Marker.js", "OpenLayers/Marker/Box.js", "OpenLayers/Popup.js", "OpenLayers/Tile.js", "OpenLayers/Tile/Image.js", "OpenLayers/Tile/Image/IFrame.js", "OpenLayers/Tile/WFS.js", "OpenLayers/Layer/Image.js", "OpenLayers/Layer/SphericalMercator.js", "OpenLayers/Layer/EventPane.js", "OpenLayers/Layer/FixedZoomLevels.js", "OpenLayers/Layer/Google.js", "OpenLayers/Layer/Google/v3.js", "OpenLayers/Layer/VirtualEarth.js", "OpenLayers/Layer/Yahoo.js", "OpenLayers/Layer/HTTPRequest.js", "OpenLayers/Layer/Grid.js", "OpenLayers/Layer/MapGuide.js", "OpenLayers/Layer/MapServer.js", "OpenLayers/Layer/MapServer/Untiled.js", "OpenLayers/Layer/KaMap.js", "OpenLayers/Layer/KaMapCache.js", "OpenLayers/Layer/MultiMap.js", "OpenLayers/Layer/Markers.js", "OpenLayers/Layer/Text.js", "OpenLayers/Layer/WorldWind.js", "OpenLayers/Layer/ArcGIS93Rest.js", "OpenLayers/Layer/WMS.js", "OpenLayers/Layer/WMS/Untiled.js", "OpenLayers/Layer/WMS/Post.js", "OpenLayers/Layer/WMTS.js", "OpenLayers/Layer/ArcIMS.js", "OpenLayers/Layer/GeoRSS.js", "OpenLayers/Layer/Boxes.js", "OpenLayers/Layer/XYZ.js", "OpenLayers/Layer/TMS.js", "OpenLayers/Layer/TileCache.js", "OpenLayers/Layer/Zoomify.js", "OpenLayers/Popup/Anchored.js", "OpenLayers/Popup/AnchoredBubble.js", "OpenLayers/Popup/Framed.js", "OpenLayers/Popup/FramedCloud.js", "OpenLayers/Feature.js", "OpenLayers/Feature/Vector.js", "OpenLayers/Feature/WFS.js", "OpenLayers/Handler.js", "OpenLayers/Handler/Click.js", "OpenLayers/Handler/Hover.js", "OpenLayers/Handler/Point.js", "OpenLayers/Handler/Path.js", "OpenLayers/Handler/Polygon.js", "OpenLayers/Handler/Feature.js", "OpenLayers/Handler/Drag.js", "OpenLayers/Handler/RegularPolygon.js", "OpenLayers/Handler/Box.js", "OpenLayers/Handler/MouseWheel.js", "OpenLayers/Handler/Keyboard.js", "OpenLayers/Control.js", "OpenLayers/Control/Attribution.js", "OpenLayers/Control/Button.js", "OpenLayers/Control/ZoomBox.js", "OpenLayers/Control/ZoomToMaxExtent.js", "OpenLayers/Control/DragPan.js", "OpenLayers/Control/Navigation.js", "OpenLayers/Control/MouseDefaults.js", "OpenLayers/Control/MousePosition.js", "OpenLayers/Control/OverviewMap.js", "OpenLayers/Control/KeyboardDefaults.js", "OpenLayers/Control/PanZoom.js", "OpenLayers/Control/PanZoomBar.js", "OpenLayers/Control/ArgParser.js", "OpenLayers/Control/Permalink.js", "OpenLayers/Control/Scale.js", "OpenLayers/Control/ScaleLine.js", "OpenLayers/Control/Snapping.js", "OpenLayers/Control/Split.js", "OpenLayers/Control/LayerSwitcher.js", "OpenLayers/Control/DrawFeature.js", "OpenLayers/Control/DragFeature.js", "OpenLayers/Control/ModifyFeature.js", "OpenLayers/Control/Panel.js", "OpenLayers/Control/SelectFeature.js", "OpenLayers/Control/NavigationHistory.js", "OpenLayers/Control/Measure.js", "OpenLayers/Control/WMSGetFeatureInfo.js", "OpenLayers/Control/WMTSGetFeatureInfo.js", "OpenLayers/Control/Graticule.js", "OpenLayers/Control/TransformFeature.js", "OpenLayers/Control/SLDSelect.js", "OpenLayers/Geometry.js", "OpenLayers/Geometry/Rectangle.js", "OpenLayers/Geometry/Collection.js", "OpenLayers/Geometry/Point.js", "OpenLayers/Geometry/MultiPoint.js", "OpenLayers/Geometry/Curve.js", "OpenLayers/Geometry/LineString.js", "OpenLayers/Geometry/LinearRing.js", "OpenLayers/Geometry/Polygon.js", "OpenLayers/Geometry/MultiLineString.js", "OpenLayers/Geometry/MultiPolygon.js", "OpenLayers/Geometry/Surface.js", "OpenLayers/Renderer.js", "OpenLayers/Renderer/Elements.js", "OpenLayers/Renderer/SVG.js", "OpenLayers/Renderer/Canvas.js", "OpenLayers/Renderer/VML.js", "OpenLayers/Layer/Vector.js", "OpenLayers/Layer/Vector/RootContainer.js", "OpenLayers/Strategy.js", "OpenLayers/Strategy/Filter.js", "OpenLayers/Strategy/Fixed.js", "OpenLayers/Strategy/Cluster.js", "OpenLayers/Strategy/Paging.js", "OpenLayers/Strategy/BBOX.js", "OpenLayers/Strategy/Save.js", "OpenLayers/Strategy/Refresh.js", "OpenLayers/Filter.js", "OpenLayers/Filter/FeatureId.js", "OpenLayers/Filter/Logical.js", "OpenLayers/Filter/Comparison.js", "OpenLayers/Filter/Spatial.js", "OpenLayers/Protocol.js", "OpenLayers/Protocol/HTTP.js", "OpenLayers/Protocol/SQL.js", "OpenLayers/Protocol/SQL/Gears.js", "OpenLayers/Protocol/WFS.js", "OpenLayers/Protocol/WFS/v1.js", "OpenLayers/Protocol/WFS/v1_0_0.js", "OpenLayers/Protocol/WFS/v1_1_0.js", "OpenLayers/Protocol/SOS.js", "OpenLayers/Protocol/SOS/v1_0_0.js", "OpenLayers/Layer/PointTrack.js", "OpenLayers/Layer/GML.js", "OpenLayers/Style.js", "OpenLayers/Style2.js", "OpenLayers/StyleMap.js", "OpenLayers/Rule.js", "OpenLayers/Format.js", "OpenLayers/Format/XML.js", "OpenLayers/Format/Context.js", "OpenLayers/Format/ArcXML.js", "OpenLayers/Format/ArcXML/Features.js", "OpenLayers/Format/GML.js", "OpenLayers/Format/GML/Base.js", "OpenLayers/Format/GML/v2.js", "OpenLayers/Format/GML/v3.js", "OpenLayers/Format/Atom.js", "OpenLayers/Format/KML.js", "OpenLayers/Format/GeoRSS.js", "OpenLayers/Format/WFS.js", "OpenLayers/Format/WFSCapabilities.js", "OpenLayers/Format/WFSCapabilities/v1.js", "OpenLayers/Format/WFSCapabilities/v1_0_0.js", "OpenLayers/Format/WFSCapabilities/v1_1_0.js", "OpenLayers/Format/WFSDescribeFeatureType.js", "OpenLayers/Format/WMSDescribeLayer.js", "OpenLayers/Format/WMSDescribeLayer/v1_1.js", "OpenLayers/Format/WKT.js", "OpenLayers/Format/OSM.js", "OpenLayers/Format/GPX.js", "OpenLayers/Format/Filter.js", "OpenLayers/Format/Filter/v1.js", "OpenLayers/Format/Filter/v1_0_0.js", "OpenLayers/Format/Filter/v1_1_0.js", "OpenLayers/Format/SLD.js", "OpenLayers/Format/SLD/v1.js", "OpenLayers/Format/SLD/v1_0_0.js", "OpenLayers/Format/OWSCommon/v1.js", "OpenLayers/Format/OWSCommon/v1_0_0.js", "OpenLayers/Format/OWSCommon/v1_1_0.js", "OpenLayers/Format/CSWGetDomain.js", "OpenLayers/Format/CSWGetDomain/v2_0_2.js", "OpenLayers/Format/CSWGetRecords.js", "OpenLayers/Format/CSWGetRecords/v2_0_2.js", "OpenLayers/Format/WFST.js", "OpenLayers/Format/WFST/v1.js", "OpenLayers/Format/WFST/v1_0_0.js", "OpenLayers/Format/WFST/v1_1_0.js", "OpenLayers/Format/Text.js", "OpenLayers/Format/JSON.js", "OpenLayers/Format/GeoJSON.js", "OpenLayers/Format/WMC.js", "OpenLayers/Format/WMC/v1.js", "OpenLayers/Format/WMC/v1_0_0.js", "OpenLayers/Format/WMC/v1_1_0.js", "OpenLayers/Format/WMSCapabilities.js", "OpenLayers/Format/WMSCapabilities/v1.js", "OpenLayers/Format/WMSCapabilities/v1_1.js", "OpenLayers/Format/WMSCapabilities/v1_1_0.js", "OpenLayers/Format/WMSCapabilities/v1_1_1.js", "OpenLayers/Format/WMSCapabilities/v1_3.js", "OpenLayers/Format/WMSCapabilities/v1_3_0.js", "OpenLayers/Format/WMSGetFeatureInfo.js", "OpenLayers/Format/SOSCapabilities.js", "OpenLayers/Format/SOSCapabilities/v1_0_0.js", "OpenLayers/Format/SOSGetObservation.js", "OpenLayers/Format/SOSGetFeatureOfInterest.js", "OpenLayers/Format/OWSContext.js", "OpenLayers/Format/OWSContext/v0_3_1.js", "OpenLayers/Format/WMTSCapabilities.js", "OpenLayers/Format/WMTSCapabilities/v1_0_0.js", "OpenLayers/Layer/WFS.js", "OpenLayers/Control/GetFeature.js", "OpenLayers/Control/MouseToolbar.js", "OpenLayers/Control/NavToolbar.js", "OpenLayers/Control/PanPanel.js", "OpenLayers/Control/Pan.js", "OpenLayers/Control/ZoomIn.js", "OpenLayers/Control/ZoomOut.js", "OpenLayers/Control/ZoomPanel.js", "OpenLayers/Control/EditingToolbar.js", "OpenLayers/Symbolizer.js", "OpenLayers/Symbolizer/Point.js", "OpenLayers/Symbolizer/Line.js", "OpenLayers/Symbolizer/Polygon.js", "OpenLayers/Symbolizer/Text.js", "OpenLayers/Symbolizer/Raster.js", "OpenLayers/Lang.js", "OpenLayers/Lang/en.js");
        var agent = navigator.userAgent;
        var docWrite = (agent.match("MSIE") || agent.match("Safari"));
        if (docWrite) {
            var allScriptTags = new Array(jsfiles.length);
        }
        var host = OpenLayers._getScriptLocation() + "lib/";
        for (var i = 0, len = jsfiles.length; i < len; i++) {
            if (docWrite) {
                allScriptTags[i] = "<script src='" + host + jsfiles[i] + "'></script>";
            } else {
                var s = document.createElement("script");
                s.src = host + jsfiles[i];
                var h = document.getElementsByTagName("head").length ? document.getElementsByTagName("head")[0] : document.body;
                h.appendChild(s);
            }
        }
        if (docWrite) {
            document.write(allScriptTags.join(""));
        }
    }
})();
OpenLayers.VERSION_NUMBER = "OpenLayers 2.10 -- $Revision: 10721 $";
OpenLayers.String = {startsWith:function (str, sub) {
    return(str.indexOf(sub) == 0);
}, contains:function (str, sub) {
    return(str.indexOf(sub) != -1);
}, trim:function (str) {
    return str.replace(/^\s\s*/, '').replace(/\s\s*$/, '');
}, camelize:function (str) {
    var oStringList = str.split('-');
    var camelizedString = oStringList[0];
    for (var i = 1, len = oStringList.length; i < len; i++) {
        var s = oStringList[i];
        camelizedString += s.charAt(0).toUpperCase() + s.substring(1);
    }
    return camelizedString;
}, format:function (template, context, args) {
    if (!context) {
        context = window;
    }
    var replacer = function (str, match) {
        var replacement;
        var subs = match.split(/\.+/);
        for (var i = 0; i < subs.length; i++) {
            if (i == 0) {
                replacement = context;
            }
            replacement = replacement[subs[i]];
        }
        if (typeof replacement == "function") {
            replacement = args ? replacement.apply(null, args) : replacement();
        }
        if (typeof replacement == 'undefined') {
            return'undefined';
        } else {
            return replacement;
        }
    };
    return template.replace(OpenLayers.String.tokenRegEx, replacer);
}, tokenRegEx:/\$\{([\w.]+?)\}/g, numberRegEx:/^([+-]?)(?=\d|\.\d)\d*(\.\d*)?([Ee]([+-]?\d+))?$/, isNumeric:function (value) {
    return OpenLayers.String.numberRegEx.test(value);
}, numericIf:function (value) {
    return OpenLayers.String.isNumeric(value) ? parseFloat(value) : value;
}};
if (!String.prototype.startsWith) {
    String.prototype.startsWith = function (sStart) {
        OpenLayers.Console.warn(OpenLayers.i18n("methodDeprecated", {'newMethod':'OpenLayers.String.startsWith'}));
        return OpenLayers.String.startsWith(this, sStart);
    };
}
if (!String.prototype.contains) {
    String.prototype.contains = function (str) {
        OpenLayers.Console.warn(OpenLayers.i18n("methodDeprecated", {'newMethod':'OpenLayers.String.contains'}));
        return OpenLayers.String.contains(this, str);
    };
}
if (!String.prototype.trim) {
    String.prototype.trim = function () {
        OpenLayers.Console.warn(OpenLayers.i18n("methodDeprecated", {'newMethod':'OpenLayers.String.trim'}));
        return OpenLayers.String.trim(this);
    };
}
if (!String.prototype.camelize) {
    String.prototype.camelize = function () {
        OpenLayers.Console.warn(OpenLayers.i18n("methodDeprecated", {'newMethod':'OpenLayers.String.camelize'}));
        return OpenLayers.String.camelize(this);
    };
}
OpenLayers.Number = {decimalSeparator:".", thousandsSeparator:",", limitSigDigs:function (num, sig) {
    var fig = 0;
    if (sig > 0) {
        fig = parseFloat(num.toPrecision(sig));
    }
    return fig;
}, format:function (num, dec, tsep, dsep) {
    dec = (typeof dec != "undefined") ? dec : 0;
    tsep = (typeof tsep != "undefined") ? tsep : OpenLayers.Number.thousandsSeparator;
    dsep = (typeof dsep != "undefined") ? dsep : OpenLayers.Number.decimalSeparator;
    if (dec != null) {
        num = parseFloat(num.toFixed(dec));
    }
    var parts = num.toString().split(".");
    if (parts.length == 1 && dec == null) {
        dec = 0;
    }
    var integer = parts[0];
    if (tsep) {
        var thousands = /(-?[0-9]+)([0-9]{3})/;
        while (thousands.test(integer)) {
            integer = integer.replace(thousands, "$1" + tsep + "$2");
        }
    }
    var str;
    if (dec == 0) {
        str = integer;
    } else {
        var rem = parts.length > 1 ? parts[1] : "0";
        if (dec != null) {
            rem = rem + new Array(dec - rem.length + 1).join("0");
        }
        str = integer + dsep + rem;
    }
    return str;
}};
if (!Number.prototype.limitSigDigs) {
    Number.prototype.limitSigDigs = function (sig) {
        OpenLayers.Console.warn(OpenLayers.i18n("methodDeprecated", {'newMethod':'OpenLayers.Number.limitSigDigs'}));
        return OpenLayers.Number.limitSigDigs(this, sig);
    };
}
OpenLayers.Function = {bind:function (func, object) {
    var args = Array.prototype.slice.apply(arguments, [2]);
    return function () {
        var newArgs = args.concat(Array.prototype.slice.apply(arguments, [0]));
        return func.apply(object, newArgs);
    };
}, bindAsEventListener:function (func, object) {
    return function (event) {
        return func.call(object, event || window.event);
    };
}, False:function () {
    return false;
}, True:function () {
    return true;
}};
if (!Function.prototype.bind) {
    Function.prototype.bind = function () {
        OpenLayers.Console.warn(OpenLayers.i18n("methodDeprecated", {'newMethod':'OpenLayers.Function.bind'}));
        Array.prototype.unshift.apply(arguments, [this]);
        return OpenLayers.Function.bind.apply(null, arguments);
    };
}
if (!Function.prototype.bindAsEventListener) {
    Function.prototype.bindAsEventListener = function (object) {
        OpenLayers.Console.warn(OpenLayers.i18n("methodDeprecated", {'newMethod':'OpenLayers.Function.bindAsEventListener'}));
        return OpenLayers.Function.bindAsEventListener(this, object);
    };
}
OpenLayers.Array = {filter:function (array, callback, caller) {
    var selected = [];
    if (Array.prototype.filter) {
        selected = array.filter(callback, caller);
    } else {
        var len = array.length;
        if (typeof callback != "function") {
            throw new TypeError();
        }
        for (var i = 0; i < len; i++) {
            if (i in array) {
                var val = array[i];
                if (callback.call(caller, val, i, array)) {
                    selected.push(val);
                }
            }
        }
    }
    return selected;
}};
OpenLayers.Date = {toISOString:(function () {
    if ("toISOString"in Date.prototype) {
        return function (date) {
            return date.toISOString();
        }
    } else {
        function pad(num, len) {
            var str = num + "";
            while (str.length < len) {
                str = "0" + str;
            }
            return str;
        }

        return function (date) {
            var str;
            if (isNaN(date.getTime())) {
                str = "Invalid Date";
            } else {
                str = date.getUTCFullYear() + "-" +
                    pad(date.getUTCMonth() + 1, 2) + "-" +
                    pad(date.getUTCDate(), 2) + "T" +
                    pad(date.getUTCHours(), 2) + ":" +
                    pad(date.getUTCMinutes(), 2) + ":" +
                    pad(date.getUTCSeconds(), 2) + "." +
                    pad(date.getUTCMilliseconds(), 3) + "Z";
            }
            return str;
        }
    }
})(), parse:function (str) {
    var date;
    var elapsed = Date.parse(str);
    if (!isNaN(elapsed)) {
        date = new Date(elapsed);
    } else {
        var match = str.match(/^(?:(\d{4})(?:-(\d{2})(?:-(\d{2}))?)?)?(?:T(\d{1,2}):(\d{2}):(\d{2}(?:\.\d+)?)(Z|(?:[+-]\d{1,2}(?::(\d{2}))?)))?$/);
        var date;
        if (match && (match[1] || match[7])) {
            var year = parseInt(match[1], 10) || 0;
            var month = (parseInt(match[2], 10) - 1) || 0;
            var day = parseInt(match[3], 10) || 1;
            date = new Date(Date.UTC(year, month, day));
            var type = match[7];
            if (type) {
                var hours = parseInt(match[4], 10);
                var minutes = parseInt(match[5], 10);
                var secFrac = parseFloat(match[6]);
                var seconds = secFrac | 0;
                var milliseconds = Math.round(1000 * (secFrac - seconds));
                date.setUTCHours(hours, minutes, seconds, milliseconds);
                if (type !== "Z") {
                    var hoursOffset = parseInt(type, 10);
                    var minutesOffset = parseInt(match[8]) || 0;
                    var offset = -1000 * (60 * (hoursOffset * 60) + minutesOffset * 60);
                    date = new Date(date.getTime() + offset);
                }
            }
        } else {
            date = new Date("invalid");
        }
    }
    return date;
}};
OpenLayers.Class = function () {
    var Class = function () {
        if (arguments && arguments[0] != OpenLayers.Class.isPrototype) {
            this.initialize.apply(this, arguments);
        }
    };
    var extended = {};
    var parent, initialize, Type;
    for (var i = 0, len = arguments.length; i < len; ++i) {
        Type = arguments[i];
        if (typeof Type == "function") {
            if (i == 0 && len > 1) {
                initialize = Type.prototype.initialize;
                Type.prototype.initialize = function () {
                };
                extended = new Type();
                if (initialize === undefined) {
                    delete Type.prototype.initialize;
                } else {
                    Type.prototype.initialize = initialize;
                }
            }
            parent = Type.prototype;
        } else {
            parent = Type;
        }
        OpenLayers.Util.extend(extended, parent);
    }
    Class.prototype = extended;
    return Class;
};
OpenLayers.Class.isPrototype = function () {
};
OpenLayers.Class.create = function () {
    return function () {
        if (arguments && arguments[0] != OpenLayers.Class.isPrototype) {
            this.initialize.apply(this, arguments);
        }
    };
};
OpenLayers.Class.inherit = function () {
    var superClass = arguments[0];
    var proto = new superClass(OpenLayers.Class.isPrototype);
    for (var i = 1, len = arguments.length; i < len; i++) {
        if (typeof arguments[i] == "function") {
            var mixin = arguments[i];
            arguments[i] = new mixin(OpenLayers.Class.isPrototype);
        }
        OpenLayers.Util.extend(proto, arguments[i]);
    }
    return proto;
};
OpenLayers.Util = {};
OpenLayers.Util.getElement = function () {
    var elements = [];
    for (var i = 0, len = arguments.length; i < len; i++) {
        var element = arguments[i];
        if (typeof element == 'string') {
            element = document.getElementById(element);
        }
        if (arguments.length == 1) {
            return element;
        }
        elements.push(element);
    }
    return elements;
};
OpenLayers.Util.isElement = function (o) {
    return!!(o && o.nodeType === 1);
};
if (typeof window.$ === "undefined") {
    window.$ = OpenLayers.Util.getElement;
}
OpenLayers.Util.extend = function (destination, source) {
    destination = destination || {};
    if (source) {
        for (var property in source) {
            var value = source[property];
            if (value !== undefined) {
                destination[property] = value;
            }
        }
        var sourceIsEvt = typeof window.Event == "function" && source instanceof window.Event;
        if (!sourceIsEvt && source.hasOwnProperty && source.hasOwnProperty('toString')) {
            destination.toString = source.toString;
        }
    }
    return destination;
};
OpenLayers.Util.removeItem = function (array, item) {
    for (var i = array.length - 1; i >= 0; i--) {
        if (array[i] == item) {
            array.splice(i, 1);
        }
    }
    return array;
};
OpenLayers.Util.clearArray = function (array) {
    OpenLayers.Console.warn(OpenLayers.i18n("methodDeprecated", {'newMethod':'array = []'}));
    array.length = 0;
};
OpenLayers.Util.indexOf = function (array, obj) {
    if (typeof array.indexOf == "function") {
        return array.indexOf(obj);
    } else {
        for (var i = 0, len = array.length; i < len; i++) {
            if (array[i] == obj) {
                return i;
            }
        }
        return-1;
    }
};
OpenLayers.Util.modifyDOMElement = function (element, id, px, sz, position, border, overflow, opacity) {
    if (id) {
        element.id = id;
    }
    if (px) {
        element.style.left = px.x + "px";
        element.style.top = px.y + "px";
    }
    if (sz) {
        element.style.width = sz.w + "px";
        element.style.height = sz.h + "px";
    }
    if (position) {
        element.style.position = position;
    }
    if (border) {
        element.style.border = border;
    }
    if (overflow) {
        element.style.overflow = overflow;
    }
    if (parseFloat(opacity) >= 0.0 && parseFloat(opacity) < 1.0) {
        element.style.filter = 'alpha(opacity=' + (opacity * 100) + ')';
        element.style.opacity = opacity;
    } else if (parseFloat(opacity) == 1.0) {
        element.style.filter = '';
        element.style.opacity = '';
    }
};
OpenLayers.Util.createDiv = function (id, px, sz, imgURL, position, border, overflow, opacity) {
    var dom = document.createElement('div');
    if (imgURL) {
        dom.style.backgroundImage = 'url(' + imgURL + ')';
    }
    if (!id) {
        id = OpenLayers.Util.createUniqueID("OpenLayersDiv");
    }
    if (!position) {
        position = "absolute";
    }
    OpenLayers.Util.modifyDOMElement(dom, id, px, sz, position, border, overflow, opacity);
    return dom;
};
OpenLayers.Util.createImage = function (id, px, sz, imgURL, position, border, opacity, delayDisplay) {
    var image = document.createElement("img");
    if (!id) {
        id = OpenLayers.Util.createUniqueID("OpenLayersDiv");
    }
    if (!position) {
        position = "relative";
    }
    OpenLayers.Util.modifyDOMElement(image, id, px, sz, position, border, null, opacity);
    if (delayDisplay) {
        image.style.display = "none";
        OpenLayers.Event.observe(image, "load", OpenLayers.Function.bind(OpenLayers.Util.onImageLoad, image));
        OpenLayers.Event.observe(image, "error", OpenLayers.Function.bind(OpenLayers.Util.onImageLoadError, image));
    }
    image.style.alt = id;
    image.galleryImg = "no";
    if (imgURL) {
        image.src = imgURL;
    }
    return image;
};
OpenLayers.Util.setOpacity = function (element, opacity) {
    OpenLayers.Util.modifyDOMElement(element, null, null, null, null, null, null, opacity);
};
OpenLayers.Util.onImageLoad = function () {
    if (!this.viewRequestID || (this.map && this.viewRequestID == this.map.viewRequestID)) {
        this.style.display = "";
    }
    OpenLayers.Element.removeClass(this, "olImageLoadError");
};
OpenLayers.IMAGE_RELOAD_ATTEMPTS = 0;
OpenLayers.Util.onImageLoadError = function () {
    this._attempts = (this._attempts) ? (this._attempts + 1) : 1;
    if (this._attempts <= OpenLayers.IMAGE_RELOAD_ATTEMPTS) {
        var urls = this.urls;
        if (urls && urls instanceof Array && urls.length > 1) {
            var src = this.src.toString();
            var current_url, k;
            for (k = 0; current_url = urls[k]; k++) {
                if (src.indexOf(current_url) != -1) {
                    break;
                }
            }
            var guess = Math.floor(urls.length * Math.random());
            var new_url = urls[guess];
            k = 0;
            while (new_url == current_url && k++ < 4) {
                guess = Math.floor(urls.length * Math.random());
                new_url = urls[guess];
            }
            this.src = src.replace(current_url, new_url);
        } else {
            this.src = this.src;
        }
    } else {
        OpenLayers.Element.addClass(this, "olImageLoadError");
    }
    this.style.display = "";
};
OpenLayers.Util.alphaHackNeeded = null;
OpenLayers.Util.alphaHack = function () {
    if (OpenLayers.Util.alphaHackNeeded == null) {
        var arVersion = navigator.appVersion.split("MSIE");
        var version = parseFloat(arVersion[1]);
        var filter = false;
        try {
            filter = !!(document.body.filters);
        } catch (e) {
        }
        OpenLayers.Util.alphaHackNeeded = (filter && (version >= 5.5) && (version < 7));
    }
    return OpenLayers.Util.alphaHackNeeded;
};
OpenLayers.Util.modifyAlphaImageDiv = function (div, id, px, sz, imgURL, position, border, sizing, opacity) {
    OpenLayers.Util.modifyDOMElement(div, id, px, sz, position, null, null, opacity);
    var img = div.childNodes[0];
    if (imgURL) {
        img.src = imgURL;
    }
    OpenLayers.Util.modifyDOMElement(img, div.id + "_innerImage", null, sz, "relative", border);
    if (OpenLayers.Util.alphaHack()) {
        if (div.style.display != "none") {
            div.style.display = "inline-block";
        }
        if (sizing == null) {
            sizing = "scale";
        }
        div.style.filter = "progid:DXImageTransform.Microsoft" + ".AlphaImageLoader(src='" + img.src + "', " + "sizingMethod='" + sizing + "')";
        if (parseFloat(div.style.opacity) >= 0.0 && parseFloat(div.style.opacity) < 1.0) {
            div.style.filter += " alpha(opacity=" + div.style.opacity * 100 + ")";
        }
        img.style.filter = "alpha(opacity=0)";
    }
};
OpenLayers.Util.createAlphaImageDiv = function (id, px, sz, imgURL, position, border, sizing, opacity, delayDisplay) {
    var div = OpenLayers.Util.createDiv();
    var img = OpenLayers.Util.createImage(null, null, null, null, null, null, null, false);
    div.appendChild(img);
    if (delayDisplay) {
        img.style.display = "none";
        OpenLayers.Event.observe(img, "load", OpenLayers.Function.bind(OpenLayers.Util.onImageLoad, div));
        OpenLayers.Event.observe(img, "error", OpenLayers.Function.bind(OpenLayers.Util.onImageLoadError, div));
    }
    OpenLayers.Util.modifyAlphaImageDiv(div, id, px, sz, imgURL, position, border, sizing, opacity);
    return div;
};
OpenLayers.Util.upperCaseObject = function (object) {
    var uObject = {};
    for (var key in object) {
        uObject[key.toUpperCase()] = object[key];
    }
    return uObject;
};
OpenLayers.Util.applyDefaults = function (to, from) {
    to = to || {};
    var fromIsEvt = typeof window.Event == "function" && from instanceof window.Event;
    for (var key in from) {
        if (to[key] === undefined || (!fromIsEvt && from.hasOwnProperty && from.hasOwnProperty(key) && !to.hasOwnProperty(key))) {
            to[key] = from[key];
        }
    }
    if (!fromIsEvt && from && from.hasOwnProperty && from.hasOwnProperty('toString') && !to.hasOwnProperty('toString')) {
        to.toString = from.toString;
    }
    return to;
};
OpenLayers.Util.getParameterString = function (params) {
    var paramsArray = [];
    for (var key in params) {
        var value = params[key];
        if ((value != null) && (typeof value != 'function')) {
            var encodedValue;
            if (typeof value == 'object' && value.constructor == Array) {
                var encodedItemArray = [];
                var item;
                for (var itemIndex = 0, len = value.length; itemIndex < len; itemIndex++) {
                    item = value[itemIndex];
                    encodedItemArray.push(encodeURIComponent((item === null || item === undefined) ? "" : item));
                }
                encodedValue = encodedItemArray.join(",");
            }
            else {
                encodedValue = encodeURIComponent(value);
            }
            paramsArray.push(encodeURIComponent(key) + "=" + encodedValue);
        }
    }
    return paramsArray.join("&");
};
OpenLayers.Util.urlAppend = function (url, paramStr) {
    var newUrl = url;
    if (paramStr) {
        var parts = (url + " ").split(/[?&]/);
        newUrl += (parts.pop() === " " ? paramStr : parts.length ? "&" + paramStr : "?" + paramStr);
    }
    return newUrl;
};
OpenLayers.ImgPath = '';
OpenLayers.Util.getImagesLocation = function () {
    return OpenLayers.ImgPath || (OpenLayers._getScriptLocation() + "img/");
};
OpenLayers.Util.Try = function () {
    var returnValue = null;
    for (var i = 0, len = arguments.length; i < len; i++) {
        var lambda = arguments[i];
        try {
            returnValue = lambda();
            break;
        } catch (e) {
        }
    }
    return returnValue;
};
OpenLayers.Util.getNodes = function (p, tagName) {
    var nodes = OpenLayers.Util.Try(function () {
        return OpenLayers.Util._getNodes(p.documentElement.childNodes, tagName);
    }, function () {
        return OpenLayers.Util._getNodes(p.childNodes, tagName);
    });
    return nodes;
};
OpenLayers.Util._getNodes = function (nodes, tagName) {
    var retArray = [];
    for (var i = 0, len = nodes.length; i < len; i++) {
        if (nodes[i].nodeName == tagName) {
            retArray.push(nodes[i]);
        }
    }
    return retArray;
};
OpenLayers.Util.getTagText = function (parent, item, index) {
    var result = OpenLayers.Util.getNodes(parent, item);
    if (result && (result.length > 0)) {
        if (!index) {
            index = 0;
        }
        if (result[index].childNodes.length > 1) {
            return result.childNodes[1].nodeValue;
        }
        else if (result[index].childNodes.length == 1) {
            return result[index].firstChild.nodeValue;
        }
    } else {
        return"";
    }
};
OpenLayers.Util.getXmlNodeValue = function (node) {
    var val = null;
    OpenLayers.Util.Try(function () {
        val = node.text;
        if (!val) {
            val = node.textContent;
        }
        if (!val) {
            val = node.firstChild.nodeValue;
        }
    }, function () {
        val = node.textContent;
    });
    return val;
};
OpenLayers.Util.mouseLeft = function (evt, div) {
    var target = (evt.relatedTarget) ? evt.relatedTarget : evt.toElement;
    while (target != div && target != null) {
        target = target.parentNode;
    }
    return(target != div);
};
OpenLayers.Util.DEFAULT_PRECISION = 14;
OpenLayers.Util.toFloat = function (number, precision) {
    if (precision == null) {
        precision = OpenLayers.Util.DEFAULT_PRECISION;
    }
    var number;
    if (precision == 0) {
        number = parseFloat(number);
    } else {
        number = parseFloat(parseFloat(number).toPrecision(precision));
    }
    return number;
};
OpenLayers.Util.rad = function (x) {
    return x * Math.PI / 180;
};
OpenLayers.Util.deg = function (x) {
    return x * 180 / Math.PI;
};
OpenLayers.Util.VincentyConstants = {a:6378137, b:6356752.3142, f:1 / 298.257223563};
OpenLayers.Util.distVincenty = function (p1, p2) {
    var ct = OpenLayers.Util.VincentyConstants;
    var a = ct.a, b = ct.b, f = ct.f;
    var L = OpenLayers.Util.rad(p2.lon - p1.lon);
    var U1 = Math.atan((1 - f) * Math.tan(OpenLayers.Util.rad(p1.lat)));
    var U2 = Math.atan((1 - f) * Math.tan(OpenLayers.Util.rad(p2.lat)));
    var sinU1 = Math.sin(U1), cosU1 = Math.cos(U1);
    var sinU2 = Math.sin(U2), cosU2 = Math.cos(U2);
    var lambda = L, lambdaP = 2 * Math.PI;
    var iterLimit = 20;
    while (Math.abs(lambda - lambdaP) > 1e-12 && --iterLimit > 0) {
        var sinLambda = Math.sin(lambda), cosLambda = Math.cos(lambda);
        var sinSigma = Math.sqrt((cosU2 * sinLambda) * (cosU2 * sinLambda) +
            (cosU1 * sinU2 - sinU1 * cosU2 * cosLambda) * (cosU1 * sinU2 - sinU1 * cosU2 * cosLambda));
        if (sinSigma == 0) {
            return 0;
        }
        var cosSigma = sinU1 * sinU2 + cosU1 * cosU2 * cosLambda;
        var sigma = Math.atan2(sinSigma, cosSigma);
        var alpha = Math.asin(cosU1 * cosU2 * sinLambda / sinSigma);
        var cosSqAlpha = Math.cos(alpha) * Math.cos(alpha);
        var cos2SigmaM = cosSigma - 2 * sinU1 * sinU2 / cosSqAlpha;
        var C = f / 16 * cosSqAlpha * (4 + f * (4 - 3 * cosSqAlpha));
        lambdaP = lambda;
        lambda = L + (1 - C) * f * Math.sin(alpha) * (sigma + C * sinSigma * (cos2SigmaM + C * cosSigma * (-1 + 2 * cos2SigmaM * cos2SigmaM)));
    }
    if (iterLimit == 0) {
        return NaN;
    }
    var uSq = cosSqAlpha * (a * a - b * b) / (b * b);
    var A = 1 + uSq / 16384 * (4096 + uSq * (-768 + uSq * (320 - 175 * uSq)));
    var B = uSq / 1024 * (256 + uSq * (-128 + uSq * (74 - 47 * uSq)));
    var deltaSigma = B * sinSigma * (cos2SigmaM + B / 4 * (cosSigma * (-1 + 2 * cos2SigmaM * cos2SigmaM) -
        B / 6 * cos2SigmaM * (-3 + 4 * sinSigma * sinSigma) * (-3 + 4 * cos2SigmaM * cos2SigmaM)));
    var s = b * A * (sigma - deltaSigma);
    var d = s.toFixed(3) / 1000;
    return d;
};
OpenLayers.Util.destinationVincenty = function (lonlat, brng, dist) {
    var u = OpenLayers.Util;
    var ct = u.VincentyConstants;
    var a = ct.a, b = ct.b, f = ct.f;
    var lon1 = lonlat.lon;
    var lat1 = lonlat.lat;
    var s = dist;
    var alpha1 = u.rad(brng);
    var sinAlpha1 = Math.sin(alpha1);
    var cosAlpha1 = Math.cos(alpha1);
    var tanU1 = (1 - f) * Math.tan(u.rad(lat1));
    var cosU1 = 1 / Math.sqrt((1 + tanU1 * tanU1)), sinU1 = tanU1 * cosU1;
    var sigma1 = Math.atan2(tanU1, cosAlpha1);
    var sinAlpha = cosU1 * sinAlpha1;
    var cosSqAlpha = 1 - sinAlpha * sinAlpha;
    var uSq = cosSqAlpha * (a * a - b * b) / (b * b);
    var A = 1 + uSq / 16384 * (4096 + uSq * (-768 + uSq * (320 - 175 * uSq)));
    var B = uSq / 1024 * (256 + uSq * (-128 + uSq * (74 - 47 * uSq)));
    var sigma = s / (b * A), sigmaP = 2 * Math.PI;
    while (Math.abs(sigma - sigmaP) > 1e-12) {
        var cos2SigmaM = Math.cos(2 * sigma1 + sigma);
        var sinSigma = Math.sin(sigma);
        var cosSigma = Math.cos(sigma);
        var deltaSigma = B * sinSigma * (cos2SigmaM + B / 4 * (cosSigma * (-1 + 2 * cos2SigmaM * cos2SigmaM) -
            B / 6 * cos2SigmaM * (-3 + 4 * sinSigma * sinSigma) * (-3 + 4 * cos2SigmaM * cos2SigmaM)));
        sigmaP = sigma;
        sigma = s / (b * A) + deltaSigma;
    }
    var tmp = sinU1 * sinSigma - cosU1 * cosSigma * cosAlpha1;
    var lat2 = Math.atan2(sinU1 * cosSigma + cosU1 * sinSigma * cosAlpha1, (1 - f) * Math.sqrt(sinAlpha * sinAlpha + tmp * tmp));
    var lambda = Math.atan2(sinSigma * sinAlpha1, cosU1 * cosSigma - sinU1 * sinSigma * cosAlpha1);
    var C = f / 16 * cosSqAlpha * (4 + f * (4 - 3 * cosSqAlpha));
    var L = lambda - (1 - C) * f * sinAlpha * (sigma + C * sinSigma * (cos2SigmaM + C * cosSigma * (-1 + 2 * cos2SigmaM * cos2SigmaM)));
    var revAz = Math.atan2(sinAlpha, -tmp);
    return new OpenLayers.LonLat(lon1 + u.deg(L), u.deg(lat2));
};
OpenLayers.Util.getParameters = function (url) {
    url = url || window.location.href;
    var paramsString = "";
    if (OpenLayers.String.contains(url, '?')) {
        var start = url.indexOf('?') + 1;
        var end = OpenLayers.String.contains(url, "#") ? url.indexOf('#') : url.length;
        paramsString = url.substring(start, end);
    }
    var parameters = {};
    var pairs = paramsString.split(/[&;]/);
    for (var i = 0, len = pairs.length; i < len; ++i) {
        var keyValue = pairs[i].split('=');
        if (keyValue[0]) {
            var key = decodeURIComponent(keyValue[0]);
            var value = keyValue[1] || '';
            value = decodeURIComponent(value.replace(/\+/g, " ")).split(",");
            if (value.length == 1) {
                value = value[0];
            }
            parameters[key] = value;
        }
    }
    return parameters;
};
OpenLayers.Util.getArgs = function (url) {
    OpenLayers.Console.warn(OpenLayers.i18n("methodDeprecated", {'newMethod':'OpenLayers.Util.getParameters'}));
    return OpenLayers.Util.getParameters(url);
};
OpenLayers.Util.lastSeqID = 0;
OpenLayers.Util.createUniqueID = function (prefix) {
    if (prefix == null) {
        prefix = "id_";
    }
    OpenLayers.Util.lastSeqID += 1;
    return prefix + OpenLayers.Util.lastSeqID;
};
OpenLayers.INCHES_PER_UNIT = {'inches':1.0, 'ft':12.0, 'mi':63360.0, 'm':39.3701, 'km':39370.1, 'dd':4374754, 'yd':36};
OpenLayers.INCHES_PER_UNIT["in"] = OpenLayers.INCHES_PER_UNIT.inches;
OpenLayers.INCHES_PER_UNIT["degrees"] = OpenLayers.INCHES_PER_UNIT.dd;
OpenLayers.INCHES_PER_UNIT["nmi"] = 1852 * OpenLayers.INCHES_PER_UNIT.m;
OpenLayers.METERS_PER_INCH = 0.02540005080010160020;
OpenLayers.Util.extend(OpenLayers.INCHES_PER_UNIT, {"Inch":OpenLayers.INCHES_PER_UNIT.inches, "Meter":1.0 / OpenLayers.METERS_PER_INCH, "Foot":0.30480060960121920243 / OpenLayers.METERS_PER_INCH, "IFoot":0.30480000000000000000 / OpenLayers.METERS_PER_INCH, "ClarkeFoot":0.3047972651151 / OpenLayers.METERS_PER_INCH, "SearsFoot":0.30479947153867624624 / OpenLayers.METERS_PER_INCH, "GoldCoastFoot":0.30479971018150881758 / OpenLayers.METERS_PER_INCH, "IInch":0.02540000000000000000 / OpenLayers.METERS_PER_INCH, "MicroInch":0.00002540000000000000 / OpenLayers.METERS_PER_INCH, "Mil":0.00000002540000000000 / OpenLayers.METERS_PER_INCH, "Centimeter":0.01000000000000000000 / OpenLayers.METERS_PER_INCH, "Kilometer":1000.00000000000000000000 / OpenLayers.METERS_PER_INCH, "Yard":0.91440182880365760731 / OpenLayers.METERS_PER_INCH, "SearsYard":0.914398414616029 / OpenLayers.METERS_PER_INCH, "IndianYard":0.91439853074444079983 / OpenLayers.METERS_PER_INCH, "IndianYd37":0.91439523 / OpenLayers.METERS_PER_INCH, "IndianYd62":0.9143988 / OpenLayers.METERS_PER_INCH, "IndianYd75":0.9143985 / OpenLayers.METERS_PER_INCH, "IndianFoot":0.30479951 / OpenLayers.METERS_PER_INCH, "IndianFt37":0.30479841 / OpenLayers.METERS_PER_INCH, "IndianFt62":0.3047996 / OpenLayers.METERS_PER_INCH, "IndianFt75":0.3047995 / OpenLayers.METERS_PER_INCH, "Mile":1609.34721869443738887477 / OpenLayers.METERS_PER_INCH, "IYard":0.91440000000000000000 / OpenLayers.METERS_PER_INCH, "IMile":1609.34400000000000000000 / OpenLayers.METERS_PER_INCH, "NautM":1852.00000000000000000000 / OpenLayers.METERS_PER_INCH, "Lat-66":110943.316488932731 / OpenLayers.METERS_PER_INCH, "Lat-83":110946.25736872234125 / OpenLayers.METERS_PER_INCH, "Decimeter":0.10000000000000000000 / OpenLayers.METERS_PER_INCH, "Millimeter":0.00100000000000000000 / OpenLayers.METERS_PER_INCH, "Dekameter":10.00000000000000000000 / OpenLayers.METERS_PER_INCH, "Decameter":10.00000000000000000000 / OpenLayers.METERS_PER_INCH, "Hectometer":100.00000000000000000000 / OpenLayers.METERS_PER_INCH, "GermanMeter":1.0000135965 / OpenLayers.METERS_PER_INCH, "CaGrid":0.999738 / OpenLayers.METERS_PER_INCH, "ClarkeChain":20.1166194976 / OpenLayers.METERS_PER_INCH, "GunterChain":20.11684023368047 / OpenLayers.METERS_PER_INCH, "BenoitChain":20.116782494375872 / OpenLayers.METERS_PER_INCH, "SearsChain":20.11676512155 / OpenLayers.METERS_PER_INCH, "ClarkeLink":0.201166194976 / OpenLayers.METERS_PER_INCH, "GunterLink":0.2011684023368047 / OpenLayers.METERS_PER_INCH, "BenoitLink":0.20116782494375872 / OpenLayers.METERS_PER_INCH, "SearsLink":0.2011676512155 / OpenLayers.METERS_PER_INCH, "Rod":5.02921005842012 / OpenLayers.METERS_PER_INCH, "IntnlChain":20.1168 / OpenLayers.METERS_PER_INCH, "IntnlLink":0.201168 / OpenLayers.METERS_PER_INCH, "Perch":5.02921005842012 / OpenLayers.METERS_PER_INCH, "Pole":5.02921005842012 / OpenLayers.METERS_PER_INCH, "Furlong":201.1684023368046 / OpenLayers.METERS_PER_INCH, "Rood":3.778266898 / OpenLayers.METERS_PER_INCH, "CapeFoot":0.3047972615 / OpenLayers.METERS_PER_INCH, "Brealey":375.00000000000000000000 / OpenLayers.METERS_PER_INCH, "ModAmFt":0.304812252984505969011938 / OpenLayers.METERS_PER_INCH, "Fathom":1.8288 / OpenLayers.METERS_PER_INCH, "NautM-UK":1853.184 / OpenLayers.METERS_PER_INCH, "50kilometers":50000.0 / OpenLayers.METERS_PER_INCH, "150kilometers":150000.0 / OpenLayers.METERS_PER_INCH});
OpenLayers.Util.extend(OpenLayers.INCHES_PER_UNIT, {"mm":OpenLayers.INCHES_PER_UNIT["Meter"] / 1000.0, "cm":OpenLayers.INCHES_PER_UNIT["Meter"] / 100.0, "dm":OpenLayers.INCHES_PER_UNIT["Meter"] * 100.0, "km":OpenLayers.INCHES_PER_UNIT["Meter"] * 1000.0, "kmi":OpenLayers.INCHES_PER_UNIT["nmi"], "fath":OpenLayers.INCHES_PER_UNIT["Fathom"], "ch":OpenLayers.INCHES_PER_UNIT["IntnlChain"], "link":OpenLayers.INCHES_PER_UNIT["IntnlLink"], "us-in":OpenLayers.INCHES_PER_UNIT["inches"], "us-ft":OpenLayers.INCHES_PER_UNIT["Foot"], "us-yd":OpenLayers.INCHES_PER_UNIT["Yard"], "us-ch":OpenLayers.INCHES_PER_UNIT["GunterChain"], "us-mi":OpenLayers.INCHES_PER_UNIT["Mile"], "ind-yd":OpenLayers.INCHES_PER_UNIT["IndianYd37"], "ind-ft":OpenLayers.INCHES_PER_UNIT["IndianFt37"], "ind-ch":20.11669506 / OpenLayers.METERS_PER_INCH});
OpenLayers.DOTS_PER_INCH = 72;
OpenLayers.Util.normalizeScale = function (scale) {
    var normScale = (scale > 1.0) ? (1.0 / scale) : scale;
    return normScale;
};
OpenLayers.Util.getResolutionFromScale = function (scale, units) {
    var resolution;
    if (scale) {
        if (units == null) {
            units = "degrees";
        }
        var normScale = OpenLayers.Util.normalizeScale(scale);
        resolution = 1 / (normScale * OpenLayers.INCHES_PER_UNIT[units] * OpenLayers.DOTS_PER_INCH);
    }
    return resolution;
};
OpenLayers.Util.getScaleFromResolution = function (resolution, units) {
    if (units == null) {
        units = "degrees";
    }
    var scale = resolution * OpenLayers.INCHES_PER_UNIT[units] * OpenLayers.DOTS_PER_INCH;
    return scale;
};
OpenLayers.Util.safeStopPropagation = function (evt) {
    OpenLayers.Event.stop(evt, true);
};
OpenLayers.Util.pagePosition = function (forElement) {
    var valueT = 0, valueL = 0;
    var element = forElement;
    var child = forElement;
    while (element) {
        if (element == document.body) {
            if (OpenLayers.Element.getStyle(child, 'position') == 'absolute') {
                break;
            }
        }
        valueT += element.offsetTop || 0;
        valueL += element.offsetLeft || 0;
        child = element;
        try {
            element = element.offsetParent;
        } catch (e) {
            OpenLayers.Console.error(OpenLayers.i18n("pagePositionFailed", {'elemId':element.id}));
            break;
        }
    }
    element = forElement;
    while (element) {
        valueT -= element.scrollTop || 0;
        valueL -= element.scrollLeft || 0;
        element = element.parentNode;
    }
    return[valueL, valueT];
};
OpenLayers.Util.isEquivalentUrl = function (url1, url2, options) {
    options = options || {};
    OpenLayers.Util.applyDefaults(options, {ignoreCase:true, ignorePort80:true, ignoreHash:true});
    var urlObj1 = OpenLayers.Util.createUrlObject(url1, options);
    var urlObj2 = OpenLayers.Util.createUrlObject(url2, options);
    for (var key in urlObj1) {
        if (key !== "args") {
            if (urlObj1[key] != urlObj2[key]) {
                return false;
            }
        }
    }
    for (var key in urlObj1.args) {
        if (urlObj1.args[key] != urlObj2.args[key]) {
            return false;
        }
        delete urlObj2.args[key];
    }
    for (var key in urlObj2.args) {
        return false;
    }
    return true;
};
OpenLayers.Util.createUrlObject = function (url, options) {
    options = options || {};
    if (!(/^\w+:\/\//).test(url)) {
        var loc = window.location;
        var port = loc.port ? ":" + loc.port : "";
        var fullUrl = loc.protocol + "//" + loc.host.split(":").shift() + port;
        if (url.indexOf("/") === 0) {
            url = fullUrl + url;
        } else {
            var parts = loc.pathname.split("/");
            parts.pop();
            url = fullUrl + parts.join("/") + "/" + url;
        }
    }
    if (options.ignoreCase) {
        url = url.toLowerCase();
    }
    var a = document.createElement('a');
    a.href = url;
    var urlObject = {};
    urlObject.host = a.host.split(":").shift();
    urlObject.protocol = a.protocol;
    if (options.ignorePort80) {
        urlObject.port = (a.port == "80" || a.port == "0") ? "" : a.port;
    } else {
        urlObject.port = (a.port == "" || a.port == "0") ? "80" : a.port;
    }
    urlObject.hash = (options.ignoreHash || a.hash === "#") ? "" : a.hash;
    var queryString = a.search;
    if (!queryString) {
        var qMark = url.indexOf("?");
        queryString = (qMark != -1) ? url.substr(qMark) : "";
    }
    urlObject.args = OpenLayers.Util.getParameters(queryString);
    urlObject.pathname = (a.pathname.charAt(0) == "/") ? a.pathname : "/" + a.pathname;
    return urlObject;
};
OpenLayers.Util.removeTail = function (url) {
    var head = null;
    var qMark = url.indexOf("?");
    var hashMark = url.indexOf("#");
    if (qMark == -1) {
        head = (hashMark != -1) ? url.substr(0, hashMark) : url;
    } else {
        head = (hashMark != -1) ? url.substr(0, Math.min(qMark, hashMark)) : url.substr(0, qMark);
    }
    return head;
};
OpenLayers.Util.getBrowserName = function () {
    var browserName = "";
    var ua = navigator.userAgent.toLowerCase();
    if (ua.indexOf("opera") != -1) {
        browserName = "opera";
    } else if (ua.indexOf("msie") != -1) {
        browserName = "msie";
    } else if (ua.indexOf("safari") != -1) {
        browserName = "safari";
    } else if (ua.indexOf("mozilla") != -1) {
        if (ua.indexOf("firefox") != -1) {
            browserName = "firefox";
        } else {
            browserName = "mozilla";
        }
    }
    return browserName;
};
OpenLayers.Util.getRenderedDimensions = function (contentHTML, size, options) {
    var w, h;
    var container = document.createElement("div");
    container.style.visibility = "hidden";
    var containerElement = (options && options.containerElement) ? options.containerElement : document.body;
    if (size) {
        if (size.w) {
            w = size.w;
            container.style.width = w + "px";
        } else if (size.h) {
            h = size.h;
            container.style.height = h + "px";
        }
    }
    if (options && options.displayClass) {
        container.className = options.displayClass;
    }
    var content = document.createElement("div");
    content.innerHTML = contentHTML;
    content.style.overflow = "visible";
    if (content.childNodes) {
        for (var i = 0, l = content.childNodes.length; i < l; i++) {
            if (!content.childNodes[i].style)continue;
            content.childNodes[i].style.overflow = "visible";
        }
    }
    container.appendChild(content);
    containerElement.appendChild(container);
    var parentHasPositionAbsolute = false;
    var parent = container.parentNode;
    while (parent && parent.tagName.toLowerCase() != "body") {
        var parentPosition = OpenLayers.Element.getStyle(parent, "position");
        if (parentPosition == "absolute") {
            parentHasPositionAbsolute = true;
            break;
        } else if (parentPosition && parentPosition != "static") {
            break;
        }
        parent = parent.parentNode;
    }
    if (!parentHasPositionAbsolute) {
        container.style.position = "absolute";
    }
    if (!w) {
        w = parseInt(content.scrollWidth);
        container.style.width = w + "px";
    }
    if (!h) {
        h = parseInt(content.scrollHeight);
    }
    container.removeChild(content);
    containerElement.removeChild(container);
    return new OpenLayers.Size(w, h);
};
OpenLayers.Util.getScrollbarWidth = function () {
    var scrollbarWidth = OpenLayers.Util._scrollbarWidth;
    if (scrollbarWidth == null) {
        var scr = null;
        var inn = null;
        var wNoScroll = 0;
        var wScroll = 0;
        scr = document.createElement('div');
        scr.style.position = 'absolute';
        scr.style.top = '-1000px';
        scr.style.left = '-1000px';
        scr.style.width = '100px';
        scr.style.height = '50px';
        scr.style.overflow = 'hidden';
        inn = document.createElement('div');
        inn.style.width = '100%';
        inn.style.height = '200px';
        scr.appendChild(inn);
        document.body.appendChild(scr);
        wNoScroll = inn.offsetWidth;
        scr.style.overflow = 'scroll';
        wScroll = inn.offsetWidth;
        document.body.removeChild(document.body.lastChild);
        OpenLayers.Util._scrollbarWidth = (wNoScroll - wScroll);
        scrollbarWidth = OpenLayers.Util._scrollbarWidth;
    }
    return scrollbarWidth;
};
OpenLayers.Util.getFormattedLonLat = function (coordinate, axis, dmsOption) {
    if (!dmsOption) {
        dmsOption = 'dms';
    }
    var abscoordinate = Math.abs(coordinate)
    var coordinatedegrees = Math.floor(abscoordinate);
    var coordinateminutes = (abscoordinate - coordinatedegrees) / (1 / 60);
    var tempcoordinateminutes = coordinateminutes;
    coordinateminutes = Math.floor(coordinateminutes);
    var coordinateseconds = (tempcoordinateminutes - coordinateminutes) / (1 / 60);
    coordinateseconds = Math.round(coordinateseconds * 10);
    coordinateseconds /= 10;
    if (coordinatedegrees < 10) {
        coordinatedegrees = "0" + coordinatedegrees;
    }
    var str = coordinatedegrees + "\u00B0";
    if (dmsOption.indexOf('dm') >= 0) {
        if (coordinateminutes < 10) {
            coordinateminutes = "0" + coordinateminutes;
        }
        str += coordinateminutes + "'";
        if (dmsOption.indexOf('dms') >= 0) {
            if (coordinateseconds < 10) {
                coordinateseconds = "0" + coordinateseconds;
            }
            str += coordinateseconds + '"';
        }
    }
    if (axis == "lon") {
        str += coordinate < 0 ? OpenLayers.i18n("W") : OpenLayers.i18n("E");
    } else {
        str += coordinate < 0 ? OpenLayers.i18n("S") : OpenLayers.i18n("N");
    }
    return str;
};
OpenLayers.Rico = new Object();
OpenLayers.Rico.Corner = {round:function (e, options) {
    e = OpenLayers.Util.getElement(e);
    this._setOptions(options);
    var color = this.options.color;
    if (this.options.color == "fromElement") {
        color = this._background(e);
    }
    var bgColor = this.options.bgColor;
    if (this.options.bgColor == "fromParent") {
        bgColor = this._background(e.offsetParent);
    }
    this._roundCornersImpl(e, color, bgColor);
}, changeColor:function (theDiv, newColor) {
    theDiv.style.backgroundColor = newColor;
    var spanElements = theDiv.parentNode.getElementsByTagName("span");
    for (var currIdx = 0; currIdx < spanElements.length; currIdx++) {
        spanElements[currIdx].style.backgroundColor = newColor;
    }
}, changeOpacity:function (theDiv, newOpacity) {
    var mozillaOpacity = newOpacity;
    var ieOpacity = 'alpha(opacity=' + newOpacity * 100 + ')';
    theDiv.style.opacity = mozillaOpacity;
    theDiv.style.filter = ieOpacity;
    var spanElements = theDiv.parentNode.getElementsByTagName("span");
    for (var currIdx = 0; currIdx < spanElements.length; currIdx++) {
        spanElements[currIdx].style.opacity = mozillaOpacity;
        spanElements[currIdx].style.filter = ieOpacity;
    }
}, reRound:function (theDiv, options) {
    var topRico = theDiv.parentNode.childNodes[0];
    var bottomRico = theDiv.parentNode.childNodes[2];
    theDiv.parentNode.removeChild(topRico);
    theDiv.parentNode.removeChild(bottomRico);
    this.round(theDiv.parentNode, options);
}, _roundCornersImpl:function (e, color, bgColor) {
    if (this.options.border) {
        this._renderBorder(e, bgColor);
    }
    if (this._isTopRounded()) {
        this._roundTopCorners(e, color, bgColor);
    }
    if (this._isBottomRounded()) {
        this._roundBottomCorners(e, color, bgColor);
    }
}, _renderBorder:function (el, bgColor) {
    var borderValue = "1px solid " + this._borderColor(bgColor);
    var borderL = "border-left: " + borderValue;
    var borderR = "border-right: " + borderValue;
    var style = "style='" + borderL + ";" + borderR + "'";
    el.innerHTML = "<div " + style + ">" + el.innerHTML + "</div>";
}, _roundTopCorners:function (el, color, bgColor) {
    var corner = this._createCorner(bgColor);
    for (var i = 0; i < this.options.numSlices; i++) {
        corner.appendChild(this._createCornerSlice(color, bgColor, i, "top"));
    }
    el.style.paddingTop = 0;
    el.insertBefore(corner, el.firstChild);
}, _roundBottomCorners:function (el, color, bgColor) {
    var corner = this._createCorner(bgColor);
    for (var i = (this.options.numSlices - 1); i >= 0; i--) {
        corner.appendChild(this._createCornerSlice(color, bgColor, i, "bottom"));
    }
    el.style.paddingBottom = 0;
    el.appendChild(corner);
}, _createCorner:function (bgColor) {
    var corner = document.createElement("div");
    corner.style.backgroundColor = (this._isTransparent() ? "transparent" : bgColor);
    return corner;
}, _createCornerSlice:function (color, bgColor, n, position) {
    var slice = document.createElement("span");
    var inStyle = slice.style;
    inStyle.backgroundColor = color;
    inStyle.display = "block";
    inStyle.height = "1px";
    inStyle.overflow = "hidden";
    inStyle.fontSize = "1px";
    var borderColor = this._borderColor(color, bgColor);
    if (this.options.border && n == 0) {
        inStyle.borderTopStyle = "solid";
        inStyle.borderTopWidth = "1px";
        inStyle.borderLeftWidth = "0px";
        inStyle.borderRightWidth = "0px";
        inStyle.borderBottomWidth = "0px";
        inStyle.height = "0px";
        inStyle.borderColor = borderColor;
    }
    else if (borderColor) {
        inStyle.borderColor = borderColor;
        inStyle.borderStyle = "solid";
        inStyle.borderWidth = "0px 1px";
    }
    if (!this.options.compact && (n == (this.options.numSlices - 1))) {
        inStyle.height = "2px";
    }
    this._setMargin(slice, n, position);
    this._setBorder(slice, n, position);
    return slice;
}, _setOptions:function (options) {
    this.options = {corners:"all", color:"fromElement", bgColor:"fromParent", blend:true, border:false, compact:false};
    OpenLayers.Util.extend(this.options, options || {});
    this.options.numSlices = this.options.compact ? 2 : 4;
    if (this._isTransparent()) {
        this.options.blend = false;
    }
}, _whichSideTop:function () {
    if (this._hasString(this.options.corners, "all", "top")) {
        return"";
    }
    if (this.options.corners.indexOf("tl") >= 0 && this.options.corners.indexOf("tr") >= 0) {
        return"";
    }
    if (this.options.corners.indexOf("tl") >= 0) {
        return"left";
    } else if (this.options.corners.indexOf("tr") >= 0) {
        return"right";
    }
    return"";
}, _whichSideBottom:function () {
    if (this._hasString(this.options.corners, "all", "bottom")) {
        return"";
    }
    if (this.options.corners.indexOf("bl") >= 0 && this.options.corners.indexOf("br") >= 0) {
        return"";
    }
    if (this.options.corners.indexOf("bl") >= 0) {
        return"left";
    } else if (this.options.corners.indexOf("br") >= 0) {
        return"right";
    }
    return"";
}, _borderColor:function (color, bgColor) {
    if (color == "transparent") {
        return bgColor;
    } else if (this.options.border) {
        return this.options.border;
    } else if (this.options.blend) {
        return this._blend(bgColor, color);
    } else {
        return"";
    }
}, _setMargin:function (el, n, corners) {
    var marginSize = this._marginSize(n);
    var whichSide = corners == "top" ? this._whichSideTop() : this._whichSideBottom();
    if (whichSide == "left") {
        el.style.marginLeft = marginSize + "px";
        el.style.marginRight = "0px";
    }
    else if (whichSide == "right") {
        el.style.marginRight = marginSize + "px";
        el.style.marginLeft = "0px";
    }
    else {
        el.style.marginLeft = marginSize + "px";
        el.style.marginRight = marginSize + "px";
    }
}, _setBorder:function (el, n, corners) {
    var borderSize = this._borderSize(n);
    var whichSide = corners == "top" ? this._whichSideTop() : this._whichSideBottom();
    if (whichSide == "left") {
        el.style.borderLeftWidth = borderSize + "px";
        el.style.borderRightWidth = "0px";
    }
    else if (whichSide == "right") {
        el.style.borderRightWidth = borderSize + "px";
        el.style.borderLeftWidth = "0px";
    }
    else {
        el.style.borderLeftWidth = borderSize + "px";
        el.style.borderRightWidth = borderSize + "px";
    }
    if (this.options.border != false) {
        el.style.borderLeftWidth = borderSize + "px";
        el.style.borderRightWidth = borderSize + "px";
    }
}, _marginSize:function (n) {
    if (this._isTransparent()) {
        return 0;
    }
    var marginSizes = [5, 3, 2, 1];
    var blendedMarginSizes = [3, 2, 1, 0];
    var compactMarginSizes = [2, 1];
    var smBlendedMarginSizes = [1, 0];
    if (this.options.compact && this.options.blend) {
        return smBlendedMarginSizes[n];
    } else if (this.options.compact) {
        return compactMarginSizes[n];
    } else if (this.options.blend) {
        return blendedMarginSizes[n];
    } else {
        return marginSizes[n];
    }
}, _borderSize:function (n) {
    var transparentBorderSizes = [5, 3, 2, 1];
    var blendedBorderSizes = [2, 1, 1, 1];
    var compactBorderSizes = [1, 0];
    var actualBorderSizes = [0, 2, 0, 0];
    if (this.options.compact && (this.options.blend || this._isTransparent())) {
        return 1;
    } else if (this.options.compact) {
        return compactBorderSizes[n];
    } else if (this.options.blend) {
        return blendedBorderSizes[n];
    } else if (this.options.border) {
        return actualBorderSizes[n];
    } else if (this._isTransparent()) {
        return transparentBorderSizes[n];
    }
    return 0;
}, _hasString:function (str) {
    for (var i = 1; i < arguments.length; i++)if (str.indexOf(arguments[i]) >= 0) {
        return true;
    }
    return false;
}, _blend:function (c1, c2) {
    var cc1 = OpenLayers.Rico.Color.createFromHex(c1);
    cc1.blend(OpenLayers.Rico.Color.createFromHex(c2));
    return cc1;
}, _background:function (el) {
    try {
        return OpenLayers.Rico.Color.createColorFromBackground(el).asHex();
    } catch (err) {
        return"#ffffff";
    }
}, _isTransparent:function () {
    return this.options.color == "transparent";
}, _isTopRounded:function () {
    return this._hasString(this.options.corners, "all", "top", "tl", "tr");
}, _isBottomRounded:function () {
    return this._hasString(this.options.corners, "all", "bottom", "bl", "br");
}, _hasSingleTextChild:function (el) {
    return el.childNodes.length == 1 && el.childNodes[0].nodeType == 3;
}};
OpenLayers.Element = {visible:function (element) {
    return OpenLayers.Util.getElement(element).style.display != 'none';
}, toggle:function () {
    for (var i = 0, len = arguments.length; i < len; i++) {
        var element = OpenLayers.Util.getElement(arguments[i]);
        var display = OpenLayers.Element.visible(element) ? 'hide' : 'show';
        OpenLayers.Element[display](element);
    }
}, hide:function () {
    for (var i = 0, len = arguments.length; i < len; i++) {
        var element = OpenLayers.Util.getElement(arguments[i]);
        if (element) {
            element.style.display = 'none';
        }
    }
}, show:function () {
    for (var i = 0, len = arguments.length; i < len; i++) {
        var element = OpenLayers.Util.getElement(arguments[i]);
        if (element) {
            element.style.display = '';
        }
    }
}, remove:function (element) {
    element = OpenLayers.Util.getElement(element);
    element.parentNode.removeChild(element);
}, getHeight:function (element) {
    element = OpenLayers.Util.getElement(element);
    return element.offsetHeight;
}, getDimensions:function (element) {
    element = OpenLayers.Util.getElement(element);
    if (OpenLayers.Element.getStyle(element, 'display') != 'none') {
        return{width:element.offsetWidth, height:element.offsetHeight};
    }
    var els = element.style;
    var originalVisibility = els.visibility;
    var originalPosition = els.position;
    var originalDisplay = els.display;
    els.visibility = 'hidden';
    els.position = 'absolute';
    els.display = '';
    var originalWidth = element.clientWidth;
    var originalHeight = element.clientHeight;
    els.display = originalDisplay;
    els.position = originalPosition;
    els.visibility = originalVisibility;
    return{width:originalWidth, height:originalHeight};
}, hasClass:function (element, name) {
    var names = element.className;
    return(!!names && new RegExp("(^|\\s)" + name + "(\\s|$)").test(names));
}, addClass:function (element, name) {
    if (!OpenLayers.Element.hasClass(element, name)) {
        element.className += (element.className ? " " : "") + name;
    }
    return element;
}, removeClass:function (element, name) {
    var names = element.className;
    if (names) {
        element.className = OpenLayers.String.trim(names.replace(new RegExp("(^|\\s+)" + name + "(\\s+|$)"), " "));
    }
    return element;
}, toggleClass:function (element, name) {
    if (OpenLayers.Element.hasClass(element, name)) {
        OpenLayers.Element.removeClass(element, name);
    } else {
        OpenLayers.Element.addClass(element, name);
    }
    return element;
}, getStyle:function (element, style) {
    element = OpenLayers.Util.getElement(element);
    var value = null;
    if (element && element.style) {
        value = element.style[OpenLayers.String.camelize(style)];
        if (!value) {
            if (document.defaultView && document.defaultView.getComputedStyle) {
                var css = document.defaultView.getComputedStyle(element, null);
                value = css ? css.getPropertyValue(style) : null;
            } else if (element.currentStyle) {
                value = element.currentStyle[OpenLayers.String.camelize(style)];
            }
        }
        var positions = ['left', 'top', 'right', 'bottom'];
        if (window.opera && (OpenLayers.Util.indexOf(positions, style) != -1) && (OpenLayers.Element.getStyle(element, 'position') == 'static')) {
            value = 'auto';
        }
    }
    return value == 'auto' ? null : value;
}};
OpenLayers.Size = OpenLayers.Class({w:0.0, h:0.0, initialize:function (w, h) {
    this.w = parseFloat(w);
    this.h = parseFloat(h);
}, toString:function () {
    return("w=" + this.w + ",h=" + this.h);
}, clone:function () {
    return new OpenLayers.Size(this.w, this.h);
}, equals:function (sz) {
    var equals = false;
    if (sz != null) {
        equals = ((this.w == sz.w && this.h == sz.h) || (isNaN(this.w) && isNaN(this.h) && isNaN(sz.w) && isNaN(sz.h)));
    }
    return equals;
}, CLASS_NAME:"OpenLayers.Size"});
OpenLayers.Console = {log:function () {
}, debug:function () {
}, info:function () {
}, warn:function () {
}, error:function () {
}, userError:function (error) {
    alert(error);
}, assert:function () {
}, dir:function () {
}, dirxml:function () {
}, trace:function () {
}, group:function () {
}, groupEnd:function () {
}, time:function () {
}, timeEnd:function () {
}, profile:function () {
}, profileEnd:function () {
}, count:function () {
}, CLASS_NAME:"OpenLayers.Console"};
(function () {
    var scripts = document.getElementsByTagName("script");
    for (var i = 0, len = scripts.length; i < len; ++i) {
        if (scripts[i].src.indexOf("firebug.js") != -1) {
            if (console) {
                OpenLayers.Util.extend(OpenLayers.Console, console);
                break;
            }
        }
    }
})();
OpenLayers.Icon = OpenLayers.Class({url:null, size:null, offset:null, calculateOffset:null, imageDiv:null, px:null, initialize:function (url, size, offset, calculateOffset) {
    this.url = url;
    this.size = (size) ? size : new OpenLayers.Size(20, 20);
    this.offset = offset ? offset : new OpenLayers.Pixel(-(this.size.w / 2), -(this.size.h / 2));
    this.calculateOffset = calculateOffset;
    var id = OpenLayers.Util.createUniqueID("OL_Icon_");
    this.imageDiv = OpenLayers.Util.createAlphaImageDiv(id);
}, destroy:function () {
    this.erase();
    OpenLayers.Event.stopObservingElement(this.imageDiv.firstChild);
    this.imageDiv.innerHTML = "";
    this.imageDiv = null;
}, clone:function () {
    return new OpenLayers.Icon(this.url, this.size, this.offset, this.calculateOffset);
}, setSize:function (size) {
    if (size != null) {
        this.size = size;
    }
    this.draw();
}, setUrl:function (url) {
    if (url != null) {
        this.url = url;
    }
    this.draw();
}, draw:function (px) {
    OpenLayers.Util.modifyAlphaImageDiv(this.imageDiv, null, null, this.size, this.url, "absolute");
    this.moveTo(px);
    return this.imageDiv;
}, erase:function () {
    if (this.imageDiv != null && this.imageDiv.parentNode != null) {
        OpenLayers.Element.remove(this.imageDiv);
    }
}, setOpacity:function (opacity) {
    OpenLayers.Util.modifyAlphaImageDiv(this.imageDiv, null, null, null, null, null, null, null, opacity);
}, moveTo:function (px) {
    if (px != null) {
        this.px = px;
    }
    if (this.imageDiv != null) {
        if (this.px == null) {
            this.display(false);
        } else {
            if (this.calculateOffset) {
                this.offset = this.calculateOffset(this.size);
            }
            var offsetPx = this.px.offset(this.offset);
            OpenLayers.Util.modifyAlphaImageDiv(this.imageDiv, null, offsetPx);
        }
    }
}, display:function (display) {
    this.imageDiv.style.display = (display) ? "" : "none";
}, isDrawn:function () {
    var isDrawn = (this.imageDiv && this.imageDiv.parentNode && (this.imageDiv.parentNode.nodeType != 11));
    return isDrawn;
}, CLASS_NAME:"OpenLayers.Icon"});
OpenLayers.Popup = OpenLayers.Class({events:null, id:"", lonlat:null, div:null, contentSize:null, size:null, contentHTML:null, backgroundColor:"", opacity:"", border:"", contentDiv:null, groupDiv:null, closeDiv:null, autoSize:false, minSize:null, maxSize:null, displayClass:"olPopup", contentDisplayClass:"olPopupContent", padding:0, disableFirefoxOverflowHack:false, fixPadding:function () {
    if (typeof this.padding == "number") {
        this.padding = new OpenLayers.Bounds(this.padding, this.padding, this.padding, this.padding);
    }
}, panMapIfOutOfView:false, keepInMap:false, closeOnMove:false, map:null, initialize:function (id, lonlat, contentSize, contentHTML, closeBox, closeBoxCallback) {
    if (id == null) {
        id = OpenLayers.Util.createUniqueID(this.CLASS_NAME + "_");
    }
    this.id = id;
    this.lonlat = lonlat;
    this.contentSize = (contentSize != null) ? contentSize : new OpenLayers.Size(OpenLayers.Popup.WIDTH, OpenLayers.Popup.HEIGHT);
    if (contentHTML != null) {
        this.contentHTML = contentHTML;
    }
    this.backgroundColor = OpenLayers.Popup.COLOR;
    this.opacity = OpenLayers.Popup.OPACITY;
    this.border = OpenLayers.Popup.BORDER;
    this.div = OpenLayers.Util.createDiv(this.id, null, null, null, null, null, "hidden");
    this.div.className = this.displayClass;
    var groupDivId = this.id + "_GroupDiv";
    this.groupDiv = OpenLayers.Util.createDiv(groupDivId, null, null, null, "relative", null, "hidden");
    var id = this.div.id + "_contentDiv";
    this.contentDiv = OpenLayers.Util.createDiv(id, null, this.contentSize.clone(), null, "relative");
    this.contentDiv.className = this.contentDisplayClass;
    this.groupDiv.appendChild(this.contentDiv);
    this.div.appendChild(this.groupDiv);
    if (closeBox) {
        this.addCloseBox(closeBoxCallback);
    }
    this.registerEvents();
}, destroy:function () {
    this.id = null;
    this.lonlat = null;
    this.size = null;
    this.contentHTML = null;
    this.backgroundColor = null;
    this.opacity = null;
    this.border = null;
    if (this.closeOnMove && this.map) {
        this.map.events.unregister("movestart", this, this.hide);
    }
    this.events.destroy();
    this.events = null;
    if (this.closeDiv) {
        OpenLayers.Event.stopObservingElement(this.closeDiv);
        this.groupDiv.removeChild(this.closeDiv);
    }
    this.closeDiv = null;
    this.div.removeChild(this.groupDiv);
    this.groupDiv = null;
    if (this.map != null) {
        this.map.removePopup(this);
    }
    this.map = null;
    this.div = null;
    this.autoSize = null;
    this.minSize = null;
    this.maxSize = null;
    this.padding = null;
    this.panMapIfOutOfView = null;
}, draw:function (px) {
    if (px == null) {
        if ((this.lonlat != null) && (this.map != null)) {
            px = this.map.getLayerPxFromLonLat(this.lonlat);
        }
    }
    if (this.closeOnMove) {
        this.map.events.register("movestart", this, this.hide);
    }
    if (!this.disableFirefoxOverflowHack && OpenLayers.Util.getBrowserName() == 'firefox') {
        this.map.events.register("movestart", this, function () {
            var style = document.defaultView.getComputedStyle(this.contentDiv, null);
            var currentOverflow = style.getPropertyValue("overflow");
            if (currentOverflow != "hidden") {
                this.contentDiv._oldOverflow = currentOverflow;
                this.contentDiv.style.overflow = "hidden";
            }
        });
        this.map.events.register("moveend", this, function () {
            var oldOverflow = this.contentDiv._oldOverflow;
            if (oldOverflow) {
                this.contentDiv.style.overflow = oldOverflow;
                this.contentDiv._oldOverflow = null;
            }
        });
    }
    this.moveTo(px);
    if (!this.autoSize && !this.size) {
        this.setSize(this.contentSize);
    }
    this.setBackgroundColor();
    this.setOpacity();
    this.setBorder();
    this.setContentHTML();
    if (this.panMapIfOutOfView) {
        this.panIntoView();
    }
    return this.div;
}, updatePosition:function () {
    if ((this.lonlat) && (this.map)) {
        var px = this.map.getLayerPxFromLonLat(this.lonlat);
        if (px) {
            this.moveTo(px);
        }
    }
}, moveTo:function (px) {
    if ((px != null) && (this.div != null)) {
        this.div.style.left = px.x + "px";
        this.div.style.top = px.y + "px";
    }
}, visible:function () {
    return OpenLayers.Element.visible(this.div);
}, toggle:function () {
    if (this.visible()) {
        this.hide();
    } else {
        this.show();
    }
}, show:function () {
    OpenLayers.Element.show(this.div);
    if (this.panMapIfOutOfView) {
        this.panIntoView();
    }
}, hide:function () {
    OpenLayers.Element.hide(this.div);
}, setSize:function (contentSize) {
    this.size = contentSize.clone();
    var contentDivPadding = this.getContentDivPadding();
    var wPadding = contentDivPadding.left + contentDivPadding.right;
    var hPadding = contentDivPadding.top + contentDivPadding.bottom;
    this.fixPadding();
    wPadding += this.padding.left + this.padding.right;
    hPadding += this.padding.top + this.padding.bottom;
    if (this.closeDiv) {
        var closeDivWidth = parseInt(this.closeDiv.style.width);
        wPadding += closeDivWidth + contentDivPadding.right;
    }
    this.size.w += wPadding;
    this.size.h += hPadding;
    if (OpenLayers.Util.getBrowserName() == "msie") {
        this.contentSize.w += contentDivPadding.left + contentDivPadding.right;
        this.contentSize.h += contentDivPadding.bottom + contentDivPadding.top;
    }
    if (this.div != null) {
        this.div.style.width = this.size.w + "px";
        this.div.style.height = this.size.h + "px";
    }
    if (this.contentDiv != null) {
        this.contentDiv.style.width = contentSize.w + "px";
        this.contentDiv.style.height = contentSize.h + "px";
    }
}, updateSize:function () {
    var preparedHTML = "<div class='" + this.contentDisplayClass + "'>" +
        this.contentDiv.innerHTML + "</div>";
    var containerElement = (this.map) ? this.map.layerContainerDiv : document.body;
    var realSize = OpenLayers.Util.getRenderedDimensions(preparedHTML, null, {displayClass:this.displayClass, containerElement:containerElement});
    var safeSize = this.getSafeContentSize(realSize);
    var newSize = null;
    if (safeSize.equals(realSize)) {
        newSize = realSize;
    } else {
        var fixedSize = new OpenLayers.Size();
        fixedSize.w = (safeSize.w < realSize.w) ? safeSize.w : null;
        fixedSize.h = (safeSize.h < realSize.h) ? safeSize.h : null;
        if (fixedSize.w && fixedSize.h) {
            newSize = safeSize;
        } else {
            var clippedSize = OpenLayers.Util.getRenderedDimensions(preparedHTML, fixedSize, {displayClass:this.contentDisplayClass, containerElement:containerElement});
            var currentOverflow = OpenLayers.Element.getStyle(this.contentDiv, "overflow");
            if ((currentOverflow != "hidden") && (clippedSize.equals(safeSize))) {
                var scrollBar = OpenLayers.Util.getScrollbarWidth();
                if (fixedSize.w) {
                    clippedSize.h += scrollBar;
                } else {
                    clippedSize.w += scrollBar;
                }
            }
            newSize = this.getSafeContentSize(clippedSize);
        }
    }
    this.setSize(newSize);
}, setBackgroundColor:function (color) {
    if (color != undefined) {
        this.backgroundColor = color;
    }
    if (this.div != null) {
        this.div.style.backgroundColor = this.backgroundColor;
    }
}, setOpacity:function (opacity) {
    if (opacity != undefined) {
        this.opacity = opacity;
    }
    if (this.div != null) {
        this.div.style.opacity = this.opacity;
        this.div.style.filter = 'alpha(opacity=' + this.opacity * 100 + ')';
    }
}, setBorder:function (border) {
    if (border != undefined) {
        this.border = border;
    }
    if (this.div != null) {
        this.div.style.border = this.border;
    }
}, setContentHTML:function (contentHTML) {
    if (contentHTML != null) {
        this.contentHTML = contentHTML;
    }
    if ((this.contentDiv != null) && (this.contentHTML != null) && (this.contentHTML != this.contentDiv.innerHTML)) {
        this.contentDiv.innerHTML = this.contentHTML;
        if (this.autoSize) {
            this.registerImageListeners();
            this.updateSize();
        }
    }
}, registerImageListeners:function () {
    var onImgLoad = function () {
        this.popup.updateSize();
        if (this.popup.visible() && this.popup.panMapIfOutOfView) {
            this.popup.panIntoView();
        }
        OpenLayers.Event.stopObserving(this.img, "load", this.img._onImageLoad);
    };
    var images = this.contentDiv.getElementsByTagName("img");
    for (var i = 0, len = images.length; i < len; i++) {
        var img = images[i];
        if (img.width == 0 || img.height == 0) {
            var context = {'popup':this, 'img':img};
            img._onImgLoad = OpenLayers.Function.bind(onImgLoad, context);
            OpenLayers.Event.observe(img, 'load', img._onImgLoad);
        }
    }
}, getSafeContentSize:function (size) {
    var safeContentSize = size.clone();
    var contentDivPadding = this.getContentDivPadding();
    var wPadding = contentDivPadding.left + contentDivPadding.right;
    var hPadding = contentDivPadding.top + contentDivPadding.bottom;
    this.fixPadding();
    wPadding += this.padding.left + this.padding.right;
    hPadding += this.padding.top + this.padding.bottom;
    if (this.closeDiv) {
        var closeDivWidth = parseInt(this.closeDiv.style.width);
        wPadding += closeDivWidth + contentDivPadding.right;
    }
    if (this.minSize) {
        safeContentSize.w = Math.max(safeContentSize.w, (this.minSize.w - wPadding));
        safeContentSize.h = Math.max(safeContentSize.h, (this.minSize.h - hPadding));
    }
    if (this.maxSize) {
        safeContentSize.w = Math.min(safeContentSize.w, (this.maxSize.w - wPadding));
        safeContentSize.h = Math.min(safeContentSize.h, (this.maxSize.h - hPadding));
    }
    if (this.map && this.map.size) {
        var extraX = 0, extraY = 0;
        if (this.keepInMap && !this.panMapIfOutOfView) {
            var px = this.map.getPixelFromLonLat(this.lonlat);
            switch (this.relativePosition) {
                case"tr":
                    extraX = px.x;
                    extraY = this.map.size.h - px.y;
                    break;
                case"tl":
                    extraX = this.map.size.w - px.x;
                    extraY = this.map.size.h - px.y;
                    break;
                case"bl":
                    extraX = this.map.size.w - px.x;
                    extraY = px.y;
                    break;
                case"br":
                    extraX = px.x;
                    extraY = px.y;
                    break;
                default:
                    extraX = px.x;
                    extraY = this.map.size.h - px.y;
                    break;
            }
        }
        var maxY = this.map.size.h -
            this.map.paddingForPopups.top -
            this.map.paddingForPopups.bottom -
            hPadding - extraY;
        var maxX = this.map.size.w -
            this.map.paddingForPopups.left -
            this.map.paddingForPopups.right -
            wPadding - extraX;
        safeContentSize.w = Math.min(safeContentSize.w, maxX);
        safeContentSize.h = Math.min(safeContentSize.h, maxY);
    }
    return safeContentSize;
}, getContentDivPadding:function () {
    var contentDivPadding = this._contentDivPadding;
    if (!contentDivPadding) {
        if (this.div.parentNode == null) {
            this.div.style.display = "none";
            document.body.appendChild(this.div);
        }
        contentDivPadding = new OpenLayers.Bounds(OpenLayers.Element.getStyle(this.contentDiv, "padding-left"), OpenLayers.Element.getStyle(this.contentDiv, "padding-bottom"), OpenLayers.Element.getStyle(this.contentDiv, "padding-right"), OpenLayers.Element.getStyle(this.contentDiv, "padding-top"));
        this._contentDivPadding = contentDivPadding;
        if (this.div.parentNode == document.body) {
            document.body.removeChild(this.div);
            this.div.style.display = "";
        }
    }
    return contentDivPadding;
}, addCloseBox:function (callback) {
    this.closeDiv = OpenLayers.Util.createDiv(this.id + "_close", null, new OpenLayers.Size(17, 17));
    this.closeDiv.className = "olPopupCloseBox";
    var contentDivPadding = this.getContentDivPadding();
    this.closeDiv.style.right = contentDivPadding.right + "px";
    this.closeDiv.style.top = contentDivPadding.top + "px";
    this.groupDiv.appendChild(this.closeDiv);
    var closePopup = callback || function (e) {
        this.hide();
        OpenLayers.Event.stop(e);
    };
    OpenLayers.Event.observe(this.closeDiv, "click", OpenLayers.Function.bindAsEventListener(closePopup, this));
}, panIntoView:function () {
    var mapSize = this.map.getSize();
    var origTL = this.map.getViewPortPxFromLayerPx(new OpenLayers.Pixel(parseInt(this.div.style.left), parseInt(this.div.style.top)));
    var newTL = origTL.clone();
    if (origTL.x < this.map.paddingForPopups.left) {
        newTL.x = this.map.paddingForPopups.left;
    } else
    if ((origTL.x + this.size.w) > (mapSize.w - this.map.paddingForPopups.right)) {
        newTL.x = mapSize.w - this.map.paddingForPopups.right - this.size.w;
    }
    if (origTL.y < this.map.paddingForPopups.top) {
        newTL.y = this.map.paddingForPopups.top;
    } else
    if ((origTL.y + this.size.h) > (mapSize.h - this.map.paddingForPopups.bottom)) {
        newTL.y = mapSize.h - this.map.paddingForPopups.bottom - this.size.h;
    }
    var dx = origTL.x - newTL.x;
    var dy = origTL.y - newTL.y;
    this.map.pan(dx, dy);
}, registerEvents:function () {
    this.events = new OpenLayers.Events(this, this.div, null, true);
    this.events.on({"mousedown":this.onmousedown, "mousemove":this.onmousemove, "mouseup":this.onmouseup, "click":this.onclick, "mouseout":this.onmouseout, "dblclick":this.ondblclick, scope:this});
}, onmousedown:function (evt) {
    this.mousedown = true;
    OpenLayers.Event.stop(evt, true);
}, onmousemove:function (evt) {
    if (this.mousedown) {
        OpenLayers.Event.stop(evt, true);
    }
}, onmouseup:function (evt) {
    if (this.mousedown) {
        this.mousedown = false;
        OpenLayers.Event.stop(evt, true);
    }
}, onclick:function (evt) {
    OpenLayers.Event.stop(evt, true);
}, onmouseout:function (evt) {
    this.mousedown = false;
}, ondblclick:function (evt) {
    OpenLayers.Event.stop(evt, true);
}, CLASS_NAME:"OpenLayers.Popup"});
OpenLayers.Popup.WIDTH = 200;
OpenLayers.Popup.HEIGHT = 200;
OpenLayers.Popup.COLOR = "white";
OpenLayers.Popup.OPACITY = 1;
OpenLayers.Popup.BORDER = "0px";
OpenLayers.Renderer = OpenLayers.Class({container:null, root:null, extent:null, locked:false, size:null, resolution:null, map:null, initialize:function (containerID, options) {
    this.container = OpenLayers.Util.getElement(containerID);
}, destroy:function () {
    this.container = null;
    this.extent = null;
    this.size = null;
    this.resolution = null;
    this.map = null;
}, supported:function () {
    return false;
}, setExtent:function (extent, resolutionChanged) {
    this.extent = extent.clone();
    if (resolutionChanged) {
        this.resolution = null;
    }
}, setSize:function (size) {
    this.size = size.clone();
    this.resolution = null;
}, getResolution:function () {
    this.resolution = this.resolution || this.map.getResolution();
    return this.resolution;
}, drawFeature:function (feature, style) {
    if (style == null) {
        style = feature.style;
    }
    if (feature.geometry) {
        var bounds = feature.geometry.getBounds();
        if (bounds) {
            if (!bounds.intersectsBounds(this.extent)) {
                style = {display:"none"};
            }
            var rendered = this.drawGeometry(feature.geometry, style, feature.id);
            if (style.display != "none" && style.label && rendered !== false) {
                var location = feature.geometry.getCentroid();
                if (style.labelXOffset || style.labelYOffset) {
                    xOffset = isNaN(style.labelXOffset) ? 0 : style.labelXOffset;
                    yOffset = isNaN(style.labelYOffset) ? 0 : style.labelYOffset;
                    var res = this.getResolution();
                    location.move(xOffset * res, yOffset * res);
                }
                this.drawText(feature.id, style, location);
            } else {
                this.removeText(feature.id);
            }
            return rendered;
        }
    }
}, drawGeometry:function (geometry, style, featureId) {
}, drawText:function (featureId, style, location) {
}, removeText:function (featureId) {
}, clear:function () {
}, getFeatureIdFromEvent:function (evt) {
}, eraseFeatures:function (features) {
    if (!(features instanceof Array)) {
        features = [features];
    }
    for (var i = 0, len = features.length; i < len; ++i) {
        var feature = features[i];
        this.eraseGeometry(feature.geometry, feature.id);
        this.removeText(feature.id);
    }
}, eraseGeometry:function (geometry, featureId) {
}, moveRoot:function (renderer) {
}, getRenderLayerId:function () {
    return this.container.id;
}, applyDefaultSymbolizer:function (symbolizer) {
    var result = OpenLayers.Util.extend({}, OpenLayers.Renderer.defaultSymbolizer);
    if (symbolizer.stroke === false) {
        delete result.strokeWidth;
        delete result.strokeColor;
    }
    if (symbolizer.fill === false) {
        delete result.fillColor;
    }
    OpenLayers.Util.extend(result, symbolizer);
    return result;
}, CLASS_NAME:"OpenLayers.Renderer"});
OpenLayers.Renderer.defaultSymbolizer = {fillColor:"#000000", strokeColor:"#000000", strokeWidth:2, fillOpacity:1, strokeOpacity:1, pointRadius:0};
OpenLayers.Bounds = OpenLayers.Class({left:null, bottom:null, right:null, top:null, centerLonLat:null, initialize:function (left, bottom, right, top) {
    if (left != null) {
        this.left = OpenLayers.Util.toFloat(left);
    }
    if (bottom != null) {
        this.bottom = OpenLayers.Util.toFloat(bottom);
    }
    if (right != null) {
        this.right = OpenLayers.Util.toFloat(right);
    }
    if (top != null) {
        this.top = OpenLayers.Util.toFloat(top);
    }
}, clone:function () {
    return new OpenLayers.Bounds(this.left, this.bottom, this.right, this.top);
}, equals:function (bounds) {
    var equals = false;
    if (bounds != null) {
        equals = ((this.left == bounds.left) && (this.right == bounds.right) && (this.top == bounds.top) && (this.bottom == bounds.bottom));
    }
    return equals;
}, toString:function () {
    return("left-bottom=(" + this.left + "," + this.bottom + ")"
        + " right-top=(" + this.right + "," + this.top + ")");
}, toArray:function (reverseAxisOrder) {
    if (reverseAxisOrder === true) {
        return[this.bottom, this.left, this.top, this.right];
    } else {
        return[this.left, this.bottom, this.right, this.top];
    }
}, toBBOX:function (decimal, reverseAxisOrder) {
    if (decimal == null) {
        decimal = 6;
    }
    var mult = Math.pow(10, decimal);
    var xmin = Math.round(this.left * mult) / mult;
    var ymin = Math.round(this.bottom * mult) / mult;
    var xmax = Math.round(this.right * mult) / mult;
    var ymax = Math.round(this.top * mult) / mult;
    if (reverseAxisOrder === true) {
        return ymin + "," + xmin + "," + ymax + "," + xmax;
    } else {
        return xmin + "," + ymin + "," + xmax + "," + ymax;
    }
}, toGeometry:function () {
    return new OpenLayers.Geometry.Polygon([new OpenLayers.Geometry.LinearRing([new OpenLayers.Geometry.Point(this.left, this.bottom), new OpenLayers.Geometry.Point(this.right, this.bottom), new OpenLayers.Geometry.Point(this.right, this.top), new OpenLayers.Geometry.Point(this.left, this.top)])]);
}, getWidth:function () {
    return(this.right - this.left);
}, getHeight:function () {
    return(this.top - this.bottom);
}, getSize:function () {
    return new OpenLayers.Size(this.getWidth(), this.getHeight());
}, getCenterPixel:function () {
    return new OpenLayers.Pixel((this.left + this.right) / 2, (this.bottom + this.top) / 2);
}, getCenterLonLat:function () {
    if (!this.centerLonLat) {
        this.centerLonLat = new OpenLayers.LonLat((this.left + this.right) / 2, (this.bottom + this.top) / 2);
    }
    return this.centerLonLat;
}, scale:function (ratio, origin) {
    if (origin == null) {
        origin = this.getCenterLonLat();
    }
    var origx, origy;
    if (origin.CLASS_NAME == "OpenLayers.LonLat") {
        origx = origin.lon;
        origy = origin.lat;
    } else {
        origx = origin.x;
        origy = origin.y;
    }
    var left = (this.left - origx) * ratio + origx;
    var bottom = (this.bottom - origy) * ratio + origy;
    var right = (this.right - origx) * ratio + origx;
    var top = (this.top - origy) * ratio + origy;
    return new OpenLayers.Bounds(left, bottom, right, top);
}, add:function (x, y) {
    if ((x == null) || (y == null)) {
        var msg = OpenLayers.i18n("boundsAddError");
        OpenLayers.Console.error(msg);
        return null;
    }
    return new OpenLayers.Bounds(this.left + x, this.bottom + y, this.right + x, this.top + y);
}, extend:function (object) {
    var bounds = null;
    if (object) {
        switch (object.CLASS_NAME) {
            case"OpenLayers.LonLat":
                bounds = new OpenLayers.Bounds(object.lon, object.lat, object.lon, object.lat);
                break;
            case"OpenLayers.Geometry.Point":
                bounds = new OpenLayers.Bounds(object.x, object.y, object.x, object.y);
                break;
            case"OpenLayers.Bounds":
                bounds = object;
                break;
        }
        if (bounds) {
            this.centerLonLat = null;
            if ((this.left == null) || (bounds.left < this.left)) {
                this.left = bounds.left;
            }
            if ((this.bottom == null) || (bounds.bottom < this.bottom)) {
                this.bottom = bounds.bottom;
            }
            if ((this.right == null) || (bounds.right > this.right)) {
                this.right = bounds.right;
            }
            if ((this.top == null) || (bounds.top > this.top)) {
                this.top = bounds.top;
            }
        }
    }
}, containsLonLat:function (ll, inclusive) {
    return this.contains(ll.lon, ll.lat, inclusive);
}, containsPixel:function (px, inclusive) {
    return this.contains(px.x, px.y, inclusive);
}, contains:function (x, y, inclusive) {
    if (inclusive == null) {
        inclusive = true;
    }
    if (x == null || y == null) {
        return false;
    }
    x = OpenLayers.Util.toFloat(x);
    y = OpenLayers.Util.toFloat(y);
    var contains = false;
    if (inclusive) {
        contains = ((x >= this.left) && (x <= this.right) && (y >= this.bottom) && (y <= this.top));
    } else {
        contains = ((x > this.left) && (x < this.right) && (y > this.bottom) && (y < this.top));
    }
    return contains;
}, intersectsBounds:function (bounds, inclusive) {
    if (inclusive == null) {
        inclusive = true;
    }
    var intersects = false;
    var mightTouch = (this.left == bounds.right || this.right == bounds.left || this.top == bounds.bottom || this.bottom == bounds.top);
    if (inclusive || !mightTouch) {
        var inBottom = (((bounds.bottom >= this.bottom) && (bounds.bottom <= this.top)) || ((this.bottom >= bounds.bottom) && (this.bottom <= bounds.top)));
        var inTop = (((bounds.top >= this.bottom) && (bounds.top <= this.top)) || ((this.top > bounds.bottom) && (this.top < bounds.top)));
        var inLeft = (((bounds.left >= this.left) && (bounds.left <= this.right)) || ((this.left >= bounds.left) && (this.left <= bounds.right)));
        var inRight = (((bounds.right >= this.left) && (bounds.right <= this.right)) || ((this.right >= bounds.left) && (this.right <= bounds.right)));
        intersects = ((inBottom || inTop) && (inLeft || inRight));
    }
    return intersects;
}, containsBounds:function (bounds, partial, inclusive) {
    if (partial == null) {
        partial = false;
    }
    if (inclusive == null) {
        inclusive = true;
    }
    var bottomLeft = this.contains(bounds.left, bounds.bottom, inclusive);
    var bottomRight = this.contains(bounds.right, bounds.bottom, inclusive);
    var topLeft = this.contains(bounds.left, bounds.top, inclusive);
    var topRight = this.contains(bounds.right, bounds.top, inclusive);
    return(partial) ? (bottomLeft || bottomRight || topLeft || topRight) : (bottomLeft && bottomRight && topLeft && topRight);
}, determineQuadrant:function (lonlat) {
    var quadrant = "";
    var center = this.getCenterLonLat();
    quadrant += (lonlat.lat < center.lat) ? "b" : "t";
    quadrant += (lonlat.lon < center.lon) ? "l" : "r";
    return quadrant;
}, transform:function (source, dest) {
    this.centerLonLat = null;
    var ll = OpenLayers.Projection.transform({'x':this.left, 'y':this.bottom}, source, dest);
    var lr = OpenLayers.Projection.transform({'x':this.right, 'y':this.bottom}, source, dest);
    var ul = OpenLayers.Projection.transform({'x':this.left, 'y':this.top}, source, dest);
    var ur = OpenLayers.Projection.transform({'x':this.right, 'y':this.top}, source, dest);
    this.left = Math.min(ll.x, ul.x);
    this.bottom = Math.min(ll.y, lr.y);
    this.right = Math.max(lr.x, ur.x);
    this.top = Math.max(ul.y, ur.y);
    return this;
}, wrapDateLine:function (maxExtent, options) {
    options = options || {};
    var leftTolerance = options.leftTolerance || 0;
    var rightTolerance = options.rightTolerance || 0;
    var newBounds = this.clone();
    if (maxExtent) {
        while (newBounds.left < maxExtent.left && (newBounds.right - rightTolerance) <= maxExtent.left) {
            newBounds = newBounds.add(maxExtent.getWidth(), 0);
        }
        while ((newBounds.left + leftTolerance) >= maxExtent.right && newBounds.right > maxExtent.right) {
            newBounds = newBounds.add(-maxExtent.getWidth(), 0);
        }
    }
    return newBounds;
}, CLASS_NAME:"OpenLayers.Bounds"});
OpenLayers.Bounds.fromString = function (str) {
    var bounds = str.split(",");
    return OpenLayers.Bounds.fromArray(bounds);
};
OpenLayers.Bounds.fromArray = function (bbox) {
    return new OpenLayers.Bounds(parseFloat(bbox[0]), parseFloat(bbox[1]), parseFloat(bbox[2]), parseFloat(bbox[3]));
};
OpenLayers.Bounds.fromSize = function (size) {
    return new OpenLayers.Bounds(0, size.h, size.w, 0);
};
OpenLayers.Bounds.oppositeQuadrant = function (quadrant) {
    var opp = "";
    opp += (quadrant.charAt(0) == 't') ? 'b' : 't';
    opp += (quadrant.charAt(1) == 'l') ? 'r' : 'l';
    return opp;
};
OpenLayers.LonLat = OpenLayers.Class({lon:0.0, lat:0.0, initialize:function (lon, lat) {
    this.lon = OpenLayers.Util.toFloat(lon);
    this.lat = OpenLayers.Util.toFloat(lat);
}, toString:function () {
    return("lon=" + this.lon + ",lat=" + this.lat);
}, toShortString:function () {
    return(this.lon + ", " + this.lat);
}, clone:function () {
    return new OpenLayers.LonLat(this.lon, this.lat);
}, add:function (lon, lat) {
    if ((lon == null) || (lat == null)) {
        var msg = OpenLayers.i18n("lonlatAddError");
        OpenLayers.Console.error(msg);
        return null;
    }
    return new OpenLayers.LonLat(this.lon + OpenLayers.Util.toFloat(lon), this.lat + OpenLayers.Util.toFloat(lat));
}, equals:function (ll) {
    var equals = false;
    if (ll != null) {
        equals = ((this.lon == ll.lon && this.lat == ll.lat) || (isNaN(this.lon) && isNaN(this.lat) && isNaN(ll.lon) && isNaN(ll.lat)));
    }
    return equals;
}, transform:function (source, dest) {
    var point = OpenLayers.Projection.transform({'x':this.lon, 'y':this.lat}, source, dest);
    this.lon = point.x;
    this.lat = point.y;
    return this;
}, wrapDateLine:function (maxExtent) {
    var newLonLat = this.clone();
    if (maxExtent) {
        while (newLonLat.lon < maxExtent.left) {
            newLonLat.lon += maxExtent.getWidth();
        }
        while (newLonLat.lon > maxExtent.right) {
            newLonLat.lon -= maxExtent.getWidth();
        }
    }
    return newLonLat;
}, CLASS_NAME:"OpenLayers.LonLat"});
OpenLayers.LonLat.fromString = function (str) {
    var pair = str.split(",");
    return new OpenLayers.LonLat(pair[0], pair[1]);
};
OpenLayers.Pixel = OpenLayers.Class({x:0.0, y:0.0, initialize:function (x, y) {
    this.x = parseFloat(x);
    this.y = parseFloat(y);
}, toString:function () {
    return("x=" + this.x + ",y=" + this.y);
}, clone:function () {
    return new OpenLayers.Pixel(this.x, this.y);
}, equals:function (px) {
    var equals = false;
    if (px != null) {
        equals = ((this.x == px.x && this.y == px.y) || (isNaN(this.x) && isNaN(this.y) && isNaN(px.x) && isNaN(px.y)));
    }
    return equals;
}, add:function (x, y) {
    if ((x == null) || (y == null)) {
        var msg = OpenLayers.i18n("pixelAddError");
        OpenLayers.Console.error(msg);
        return null;
    }
    return new OpenLayers.Pixel(this.x + x, this.y + y);
}, offset:function (px) {
    var newPx = this.clone();
    if (px) {
        newPx = this.add(px.x, px.y);
    }
    return newPx;
}, CLASS_NAME:"OpenLayers.Pixel"});
OpenLayers.Control = OpenLayers.Class({id:null, map:null, div:null, type:null, allowSelection:false, displayClass:"", title:"", autoActivate:false, active:null, handler:null, eventListeners:null, events:null, EVENT_TYPES:["activate", "deactivate"], initialize:function (options) {
    this.displayClass = this.CLASS_NAME.replace("OpenLayers.", "ol").replace(/\./g, "");
    OpenLayers.Util.extend(this, options);
    this.events = new OpenLayers.Events(this, null, this.EVENT_TYPES);
    if (this.eventListeners instanceof Object) {
        this.events.on(this.eventListeners);
    }
    if (this.id == null) {
        this.id = OpenLayers.Util.createUniqueID(this.CLASS_NAME + "_");
    }
}, destroy:function () {
    if (this.events) {
        if (this.eventListeners) {
            this.events.un(this.eventListeners);
        }
        this.events.destroy();
        this.events = null;
    }
    this.eventListeners = null;
    if (this.handler) {
        this.handler.destroy();
        this.handler = null;
    }
    if (this.handlers) {
        for (var key in this.handlers) {
            if (this.handlers.hasOwnProperty(key) && typeof this.handlers[key].destroy == "function") {
                this.handlers[key].destroy();
            }
        }
        this.handlers = null;
    }
    if (this.map) {
        this.map.removeControl(this);
        this.map = null;
    }
}, setMap:function (map) {
    this.map = map;
    if (this.handler) {
        this.handler.setMap(map);
    }
}, draw:function (px) {
    if (this.div == null) {
        this.div = OpenLayers.Util.createDiv(this.id);
        this.div.className = this.displayClass;
        if (!this.allowSelection) {
            this.div.className += " olControlNoSelect";
            this.div.setAttribute("unselectable", "on", 0);
            this.div.onselectstart = OpenLayers.Function.False;
        }
        if (this.title != "") {
            this.div.title = this.title;
        }
    }
    if (px != null) {
        this.position = px.clone();
    }
    this.moveTo(this.position);
    return this.div;
}, moveTo:function (px) {
    if ((px != null) && (this.div != null)) {
        this.div.style.left = px.x + "px";
        this.div.style.top = px.y + "px";
    }
}, activate:function () {
    if (this.active) {
        return false;
    }
    if (this.handler) {
        this.handler.activate();
    }
    this.active = true;
    if (this.map) {
        OpenLayers.Element.addClass(this.map.viewPortDiv, this.displayClass.replace(/ /g, "") + "Active");
    }
    this.events.triggerEvent("activate");
    return true;
}, deactivate:function () {
    if (this.active) {
        if (this.handler) {
            this.handler.deactivate();
        }
        this.active = false;
        if (this.map) {
            OpenLayers.Element.removeClass(this.map.viewPortDiv, this.displayClass.replace(/ /g, "") + "Active");
        }
        this.events.triggerEvent("deactivate");
        return true;
    }
    return false;
}, CLASS_NAME:"OpenLayers.Control"});
OpenLayers.Control.TYPE_BUTTON = 1;
OpenLayers.Control.TYPE_TOGGLE = 2;
OpenLayers.Control.TYPE_TOOL = 3;
OpenLayers.Lang = {code:null, defaultCode:"en", getCode:function () {
    if (!OpenLayers.Lang.code) {
        OpenLayers.Lang.setCode();
    }
    return OpenLayers.Lang.code;
}, setCode:function (code) {
    var lang;
    if (!code) {
        code = (OpenLayers.Util.getBrowserName() == "msie") ? navigator.userLanguage : navigator.language;
    }
    var parts = code.split('-');
    parts[0] = parts[0].toLowerCase();
    if (typeof OpenLayers.Lang[parts[0]] == "object") {
        lang = parts[0];
    }
    if (parts[1]) {
        var testLang = parts[0] + '-' + parts[1].toUpperCase();
        if (typeof OpenLayers.Lang[testLang] == "object") {
            lang = testLang;
        }
    }
    if (!lang) {
        OpenLayers.Console.warn('Failed to find OpenLayers.Lang.' + parts.join("-") + ' dictionary, falling back to default language');
        lang = OpenLayers.Lang.defaultCode;
    }
    OpenLayers.Lang.code = lang;
}, translate:function (key, context) {
    var dictionary = OpenLayers.Lang[OpenLayers.Lang.getCode()];
    var message = dictionary[key];
    if (!message) {
        message = key;
    }
    if (context) {
        message = OpenLayers.String.format(message, context);
    }
    return message;
}};
OpenLayers.i18n = OpenLayers.Lang.translate;
OpenLayers.Popup.Anchored = OpenLayers.Class(OpenLayers.Popup, {relativePosition:null, keepInMap:true, anchor:null, initialize:function (id, lonlat, contentSize, contentHTML, anchor, closeBox, closeBoxCallback) {
    var newArguments = [id, lonlat, contentSize, contentHTML, closeBox, closeBoxCallback];
    OpenLayers.Popup.prototype.initialize.apply(this, newArguments);
    this.anchor = (anchor != null) ? anchor : {size:new OpenLayers.Size(0, 0), offset:new OpenLayers.Pixel(0, 0)};
}, destroy:function () {
    this.anchor = null;
    this.relativePosition = null;
    OpenLayers.Popup.prototype.destroy.apply(this, arguments);
}, show:function () {
    this.updatePosition();
    OpenLayers.Popup.prototype.show.apply(this, arguments);
}, moveTo:function (px) {
    var oldRelativePosition = this.relativePosition;
    this.relativePosition = this.calculateRelativePosition(px);
    var newPx = this.calculateNewPx(px);
    var newArguments = new Array(newPx);
    OpenLayers.Popup.prototype.moveTo.apply(this, newArguments);
    if (this.relativePosition != oldRelativePosition) {
        this.updateRelativePosition();
    }
}, setSize:function (contentSize) {
    OpenLayers.Popup.prototype.setSize.apply(this, arguments);
    if ((this.lonlat) && (this.map)) {
        var px = this.map.getLayerPxFromLonLat(this.lonlat);
        this.moveTo(px);
    }
}, calculateRelativePosition:function (px) {
    var lonlat = this.map.getLonLatFromLayerPx(px);
    var extent = this.map.getExtent();
    var quadrant = extent.determineQuadrant(lonlat);
    return OpenLayers.Bounds.oppositeQuadrant(quadrant);
}, updateRelativePosition:function () {
}, calculateNewPx:function (px) {
    var newPx = px.offset(this.anchor.offset);
    var size = this.size || this.contentSize;
    var top = (this.relativePosition.charAt(0) == 't');
    newPx.y += (top) ? -(size.h + this.anchor.size.h) : this.anchor.size.h;
    var left = (this.relativePosition.charAt(1) == 'l');
    newPx.x += (left) ? -(size.w + this.anchor.size.w) : this.anchor.size.w;
    return newPx;
}, CLASS_NAME:"OpenLayers.Popup.Anchored"});
OpenLayers.Renderer.Canvas = OpenLayers.Class(OpenLayers.Renderer, {canvas:null, features:null, initialize:function (containerID) {
    OpenLayers.Renderer.prototype.initialize.apply(this, arguments);
    this.root = document.createElement("canvas");
    this.container.appendChild(this.root);
    this.canvas = this.root.getContext("2d");
    this.features = {};
}, eraseGeometry:function (geometry, featureId) {
    this.eraseFeatures(this.features[featureId][0]);
}, supported:function () {
    var canvas = document.createElement("canvas");
    return!!canvas.getContext;
}, setExtent:function (extent) {
    this.extent = extent.clone();
    this.resolution = null;
    this.redraw();
}, setSize:function (size) {
    this.size = size.clone();
    this.root.style.width = size.w + "px";
    this.root.style.height = size.h + "px";
    this.root.width = size.w;
    this.root.height = size.h;
    this.resolution = null;
}, drawFeature:function (feature, style) {
    style = style || feature.style;
    style = this.applyDefaultSymbolizer(style);
    this.features[feature.id] = [feature, style];
    this.redraw();
}, drawGeometry:function (geometry, style) {
    var className = geometry.CLASS_NAME;
    if ((className == "OpenLayers.Geometry.Collection") || (className == "OpenLayers.Geometry.MultiPoint") || (className == "OpenLayers.Geometry.MultiLineString") || (className == "OpenLayers.Geometry.MultiPolygon")) {
        for (var i = 0; i < geometry.components.length; i++) {
            this.drawGeometry(geometry.components[i], style);
        }
        return;
    }
    switch (geometry.CLASS_NAME) {
        case"OpenLayers.Geometry.Point":
            this.drawPoint(geometry, style);
            break;
        case"OpenLayers.Geometry.LineString":
            this.drawLineString(geometry, style);
            break;
        case"OpenLayers.Geometry.LinearRing":
            this.drawLinearRing(geometry, style);
            break;
        case"OpenLayers.Geometry.Polygon":
            this.drawPolygon(geometry, style);
            break;
        default:
            break;
    }
}, drawExternalGraphic:function (pt, style) {
    var img = new Image();
    if (style.graphicTitle) {
        img.title = style.graphicTitle;
    }
    var width = style.graphicWidth || style.graphicHeight;
    var height = style.graphicHeight || style.graphicWidth;
    width = width ? width : style.pointRadius * 2;
    height = height ? height : style.pointRadius * 2;
    var xOffset = (style.graphicXOffset != undefined) ? style.graphicXOffset : -(0.5 * width);
    var yOffset = (style.graphicYOffset != undefined) ? style.graphicYOffset : -(0.5 * height);
    var context = {img:img, x:(pt[0] + xOffset), y:(pt[1] + yOffset), width:width, height:height, opacity:style.graphicOpacity || style.fillOpacity, canvas:this.canvas};
    img.onload = OpenLayers.Function.bind(function () {
        this.canvas.globalAlpha = this.opacity;
        this.canvas.drawImage(this.img, this.x, this.y, this.width, this.height);
    }, context);
    img.src = style.externalGraphic;
}, setCanvasStyle:function (type, style) {
    if (type == "fill") {
        this.canvas.globalAlpha = style['fillOpacity'];
        this.canvas.fillStyle = style['fillColor'];
    } else if (type == "stroke") {
        this.canvas.globalAlpha = style['strokeOpacity'];
        this.canvas.strokeStyle = style['strokeColor'];
        this.canvas.lineWidth = style['strokeWidth'];
    } else {
        this.canvas.globalAlpha = 0;
        this.canvas.lineWidth = 1;
    }
}, drawPoint:function (geometry, style) {
    if (style.graphic !== false) {
        var pt = this.getLocalXY(geometry);
        if (style.externalGraphic) {
            this.drawExternalGraphic(pt, style);
        } else {
            if (style.fill !== false) {
                this.setCanvasStyle("fill", style);
                this.canvas.beginPath();
                this.canvas.arc(pt[0], pt[1], style.pointRadius, 0, Math.PI * 2, true);
                this.canvas.fill();
            }
            if (style.stroke !== false) {
                this.setCanvasStyle("stroke", style);
                this.canvas.beginPath();
                this.canvas.arc(pt[0], pt[1], style.pointRadius, 0, Math.PI * 2, true);
                this.canvas.stroke();
                this.setCanvasStyle("reset");
            }
        }
    }
}, drawLineString:function (geometry, style) {
    if (style.stroke !== false) {
        this.setCanvasStyle("stroke", style);
        this.canvas.beginPath();
        var start = this.getLocalXY(geometry.components[0]);
        this.canvas.moveTo(start[0], start[1]);
        for (var i = 1; i < geometry.components.length; i++) {
            var pt = this.getLocalXY(geometry.components[i]);
            this.canvas.lineTo(pt[0], pt[1]);
        }
        this.canvas.stroke();
    }
    this.setCanvasStyle("reset");
}, drawLinearRing:function (geometry, style) {
    if (style.fill !== false) {
        this.setCanvasStyle("fill", style);
        this.canvas.beginPath();
        var start = this.getLocalXY(geometry.components[0]);
        this.canvas.moveTo(start[0], start[1]);
        for (var i = 1; i < geometry.components.length - 1; i++) {
            var pt = this.getLocalXY(geometry.components[i]);
            this.canvas.lineTo(pt[0], pt[1]);
        }
        this.canvas.fill();
    }
    if (style.stroke !== false) {
        this.setCanvasStyle("stroke", style);
        this.canvas.beginPath();
        var start = this.getLocalXY(geometry.components[0]);
        this.canvas.moveTo(start[0], start[1]);
        for (var i = 1; i < geometry.components.length; i++) {
            var pt = this.getLocalXY(geometry.components[i]);
            this.canvas.lineTo(pt[0], pt[1]);
        }
        this.canvas.stroke();
    }
    this.setCanvasStyle("reset");
}, drawPolygon:function (geometry, style) {
    this.drawLinearRing(geometry.components[0], style);
    for (var i = 1; i < geometry.components.length; i++) {
        this.drawLinearRing(geometry.components[i], {fillOpacity:0, strokeWidth:0, strokeOpacity:0, strokeColor:'#000000', fillColor:'#000000'});
    }
}, drawText:function (location, style) {
    style = OpenLayers.Util.extend({fontColor:"#000000", labelAlign:"cm"}, style);
    var pt = this.getLocalXY(location);
    this.setCanvasStyle("reset");
    this.canvas.fillStyle = style.fontColor;
    this.canvas.globalAlpha = style.fontOpacity || 1.0;
    var fontStyle = style.fontWeight + " " + style.fontSize + " " + style.fontFamily;
    if (this.canvas.fillText) {
        var labelAlign = OpenLayers.Renderer.Canvas.LABEL_ALIGN[style.labelAlign[0]] || "center";
        this.canvas.font = fontStyle;
        this.canvas.textAlign = labelAlign;
        this.canvas.fillText(style.label, pt[0], pt[1]);
    } else if (this.canvas.mozDrawText) {
        this.canvas.mozTextStyle = fontStyle;
        var len = this.canvas.mozMeasureText(style.label);
        switch (style.labelAlign[0]) {
            case"l":
                break;
            case"r":
                pt[0] -= len;
                break;
            case"c":
            default:
                pt[0] -= len / 2;
        }
        this.canvas.translate(pt[0], pt[1]);
        this.canvas.mozDrawText(style.label);
        this.canvas.translate(-1 * pt[0], -1 * pt[1]);
    }
    this.setCanvasStyle("reset");
}, getLocalXY:function (point) {
    var resolution = this.getResolution();
    var extent = this.extent;
    var x = (point.x / resolution + (-extent.left / resolution));
    var y = ((extent.top / resolution) - point.y / resolution);
    return[x, y];
}, clear:function () {
    this.canvas.clearRect(0, 0, this.root.width, this.root.height);
    this.features = {};
}, getFeatureIdFromEvent:function (evt) {
    var loc = this.map.getLonLatFromPixel(evt.xy);
    var resolution = this.getResolution();
    var bounds = new OpenLayers.Bounds(loc.lon - resolution * 5, loc.lat - resolution * 5, loc.lon + resolution * 5, loc.lat + resolution * 5);
    var geom = bounds.toGeometry();
    for (var feat in this.features) {
        if (!this.features.hasOwnProperty(feat)) {
            continue;
        }
        if (this.features[feat][0].geometry.intersects(geom)) {
            return feat;
        }
    }
    return null;
}, eraseFeatures:function (features) {
    if (!(features instanceof Array)) {
        features = [features];
    }
    for (var i = 0; i < features.length; ++i) {
        delete this.features[features[i].id];
    }
    this.redraw();
}, redraw:function () {
    if (!this.locked) {
        this.canvas.clearRect(0, 0, this.root.width, this.root.height);
        var labelMap = [];
        var feature, style;
        for (var id in this.features) {
            if (!this.features.hasOwnProperty(id)) {
                continue;
            }
            feature = this.features[id][0];
            style = this.features[id][1];
            if (!feature.geometry) {
                continue;
            }
            this.drawGeometry(feature.geometry, style);
            if (style.label) {
                labelMap.push([feature, style]);
            }
        }
        var item;
        for (var i = 0, len = labelMap.length; i < len; ++i) {
            item = labelMap[i];
            this.drawText(item[0].geometry.getCentroid(), item[1]);
        }
    }
}, CLASS_NAME:"OpenLayers.Renderer.Canvas"});
OpenLayers.Renderer.Canvas.LABEL_ALIGN = {"l":"left", "r":"right"};
OpenLayers.ElementsIndexer = OpenLayers.Class({maxZIndex:null, order:null, indices:null, compare:null, initialize:function (yOrdering) {
    this.compare = yOrdering ? OpenLayers.ElementsIndexer.IndexingMethods.Z_ORDER_Y_ORDER : OpenLayers.ElementsIndexer.IndexingMethods.Z_ORDER_DRAWING_ORDER;
    this.order = [];
    this.indices = {};
    this.maxZIndex = 0;
}, insert:function (newNode) {
    if (this.exists(newNode)) {
        this.remove(newNode);
    }
    var nodeId = newNode.id;
    this.determineZIndex(newNode);
    var leftIndex = -1;
    var rightIndex = this.order.length;
    var middle;
    while (rightIndex - leftIndex > 1) {
        middle = parseInt((leftIndex + rightIndex) / 2);
        var placement = this.compare(this, newNode, OpenLayers.Util.getElement(this.order[middle]));
        if (placement > 0) {
            leftIndex = middle;
        } else {
            rightIndex = middle;
        }
    }
    this.order.splice(rightIndex, 0, nodeId);
    this.indices[nodeId] = this.getZIndex(newNode);
    return this.getNextElement(rightIndex);
}, remove:function (node) {
    var nodeId = node.id;
    var arrayIndex = OpenLayers.Util.indexOf(this.order, nodeId);
    if (arrayIndex >= 0) {
        this.order.splice(arrayIndex, 1);
        delete this.indices[nodeId];
        if (this.order.length > 0) {
            var lastId = this.order[this.order.length - 1];
            this.maxZIndex = this.indices[lastId];
        } else {
            this.maxZIndex = 0;
        }
    }
}, clear:function () {
    this.order = [];
    this.indices = {};
    this.maxZIndex = 0;
}, exists:function (node) {
    return(this.indices[node.id] != null);
}, getZIndex:function (node) {
    return node._style.graphicZIndex;
}, determineZIndex:function (node) {
    var zIndex = node._style.graphicZIndex;
    if (zIndex == null) {
        zIndex = this.maxZIndex;
        node._style.graphicZIndex = zIndex;
    } else if (zIndex > this.maxZIndex) {
        this.maxZIndex = zIndex;
    }
}, getNextElement:function (index) {
    var nextIndex = index + 1;
    if (nextIndex < this.order.length) {
        var nextElement = OpenLayers.Util.getElement(this.order[nextIndex]);
        if (nextElement == undefined) {
            nextElement = this.getNextElement(nextIndex);
        }
        return nextElement;
    } else {
        return null;
    }
}, CLASS_NAME:"OpenLayers.ElementsIndexer"});
OpenLayers.ElementsIndexer.IndexingMethods = {Z_ORDER:function (indexer, newNode, nextNode) {
    var newZIndex = indexer.getZIndex(newNode);
    var returnVal = 0;
    if (nextNode) {
        var nextZIndex = indexer.getZIndex(nextNode);
        returnVal = newZIndex - nextZIndex;
    }
    return returnVal;
}, Z_ORDER_DRAWING_ORDER:function (indexer, newNode, nextNode) {
    var returnVal = OpenLayers.ElementsIndexer.IndexingMethods.Z_ORDER(indexer, newNode, nextNode);
    if (nextNode && returnVal == 0) {
        returnVal = 1;
    }
    return returnVal;
}, Z_ORDER_Y_ORDER:function (indexer, newNode, nextNode) {
    var returnVal = OpenLayers.ElementsIndexer.IndexingMethods.Z_ORDER(indexer, newNode, nextNode);
    if (nextNode && returnVal === 0) {
        var result = nextNode._boundsBottom - newNode._boundsBottom;
        returnVal = (result === 0) ? 1 : result;
    }
    return returnVal;
}};
OpenLayers.Renderer.Elements = OpenLayers.Class(OpenLayers.Renderer, {rendererRoot:null, root:null, vectorRoot:null, textRoot:null, xmlns:null, indexer:null, BACKGROUND_ID_SUFFIX:"_background", LABEL_ID_SUFFIX:"_label", initialize:function (containerID, options) {
    OpenLayers.Renderer.prototype.initialize.apply(this, arguments);
    this.rendererRoot = this.createRenderRoot();
    this.root = this.createRoot("_root");
    this.vectorRoot = this.createRoot("_vroot");
    this.textRoot = this.createRoot("_troot");
    this.root.appendChild(this.vectorRoot);
    this.root.appendChild(this.textRoot);
    this.rendererRoot.appendChild(this.root);
    this.container.appendChild(this.rendererRoot);
    if (options && (options.zIndexing || options.yOrdering)) {
        this.indexer = new OpenLayers.ElementsIndexer(options.yOrdering);
    }
}, destroy:function () {
    this.clear();
    this.rendererRoot = null;
    this.root = null;
    this.xmlns = null;
    OpenLayers.Renderer.prototype.destroy.apply(this, arguments);
}, clear:function () {
    var child;
    var root = this.vectorRoot;
    if (root) {
        while (child = root.firstChild) {
            root.removeChild(child);
        }
    }
    root = this.textRoot;
    if (root) {
        while (child = root.firstChild) {
            root.removeChild(child);
        }
    }
    if (this.indexer) {
        this.indexer.clear();
    }
}, getNodeType:function (geometry, style) {
}, drawGeometry:function (geometry, style, featureId) {
    var className = geometry.CLASS_NAME;
    var rendered = true;
    if ((className == "OpenLayers.Geometry.Collection") || (className == "OpenLayers.Geometry.MultiPoint") || (className == "OpenLayers.Geometry.MultiLineString") || (className == "OpenLayers.Geometry.MultiPolygon")) {
        for (var i = 0, len = geometry.components.length; i < len; i++) {
            rendered = this.drawGeometry(geometry.components[i], style, featureId) && rendered;
        }
        return rendered;
    }
    ;
    rendered = false;
    if (style.display != "none") {
        if (style.backgroundGraphic) {
            this.redrawBackgroundNode(geometry.id, geometry, style, featureId);
        }
        rendered = this.redrawNode(geometry.id, geometry, style, featureId);
    }
    if (rendered == false) {
        var node = document.getElementById(geometry.id);
        if (node) {
            if (node._style.backgroundGraphic) {
                node.parentNode.removeChild(document.getElementById(geometry.id + this.BACKGROUND_ID_SUFFIX));
            }
            node.parentNode.removeChild(node);
        }
    }
    return rendered;
}, redrawNode:function (id, geometry, style, featureId) {
    style = this.applyDefaultSymbolizer(style);
    var node = this.nodeFactory(id, this.getNodeType(geometry, style));
    node._featureId = featureId;
    node._boundsBottom = geometry.getBounds().bottom;
    node._geometryClass = geometry.CLASS_NAME;
    node._style = style;
    var drawResult = this.drawGeometryNode(node, geometry, style);
    if (drawResult === false) {
        return false;
    }
    node = drawResult.node;
    if (this.indexer) {
        var insert = this.indexer.insert(node);
        if (insert) {
            this.vectorRoot.insertBefore(node, insert);
        } else {
            this.vectorRoot.appendChild(node);
        }
    } else {
        if (node.parentNode !== this.vectorRoot) {
            this.vectorRoot.appendChild(node);
        }
    }
    this.postDraw(node);
    return drawResult.complete;
}, redrawBackgroundNode:function (id, geometry, style, featureId) {
    var backgroundStyle = OpenLayers.Util.extend({}, style);
    backgroundStyle.externalGraphic = backgroundStyle.backgroundGraphic;
    backgroundStyle.graphicXOffset = backgroundStyle.backgroundXOffset;
    backgroundStyle.graphicYOffset = backgroundStyle.backgroundYOffset;
    backgroundStyle.graphicZIndex = backgroundStyle.backgroundGraphicZIndex;
    backgroundStyle.graphicWidth = backgroundStyle.backgroundWidth || backgroundStyle.graphicWidth;
    backgroundStyle.graphicHeight = backgroundStyle.backgroundHeight || backgroundStyle.graphicHeight;
    backgroundStyle.backgroundGraphic = null;
    backgroundStyle.backgroundXOffset = null;
    backgroundStyle.backgroundYOffset = null;
    backgroundStyle.backgroundGraphicZIndex = null;
    return this.redrawNode(id + this.BACKGROUND_ID_SUFFIX, geometry, backgroundStyle, null);
}, drawGeometryNode:function (node, geometry, style) {
    style = style || node._style;
    var options = {'isFilled':style.fill === undefined ? true : style.fill, 'isStroked':style.stroke === undefined ? !!style.strokeWidth : style.stroke};
    var drawn;
    switch (geometry.CLASS_NAME) {
        case"OpenLayers.Geometry.Point":
            if (style.graphic === false) {
                options.isFilled = false;
                options.isStroked = false;
            }
            drawn = this.drawPoint(node, geometry);
            break;
        case"OpenLayers.Geometry.LineString":
            options.isFilled = false;
            drawn = this.drawLineString(node, geometry);
            break;
        case"OpenLayers.Geometry.LinearRing":
            drawn = this.drawLinearRing(node, geometry);
            break;
        case"OpenLayers.Geometry.Polygon":
            drawn = this.drawPolygon(node, geometry);
            break;
        case"OpenLayers.Geometry.Surface":
            drawn = this.drawSurface(node, geometry);
            break;
        case"OpenLayers.Geometry.Rectangle":
            drawn = this.drawRectangle(node, geometry);
            break;
        default:
            break;
    }
    node._options = options;
    if (drawn != false) {
        return{node:this.setStyle(node, style, options, geometry), complete:drawn};
    } else {
        return false;
    }
}, postDraw:function (node) {
}, drawPoint:function (node, geometry) {
}, drawLineString:function (node, geometry) {
}, drawLinearRing:function (node, geometry) {
}, drawPolygon:function (node, geometry) {
}, drawRectangle:function (node, geometry) {
}, drawCircle:function (node, geometry) {
}, drawSurface:function (node, geometry) {
}, removeText:function (featureId) {
    var label = document.getElementById(featureId + this.LABEL_ID_SUFFIX);
    if (label) {
        this.textRoot.removeChild(label);
    }
}, getFeatureIdFromEvent:function (evt) {
    var target = evt.target;
    var useElement = target && target.correspondingUseElement;
    var node = useElement ? useElement : (target || evt.srcElement);
    var featureId = node._featureId;
    return featureId;
}, eraseGeometry:function (geometry, featureId) {
    if ((geometry.CLASS_NAME == "OpenLayers.Geometry.MultiPoint") || (geometry.CLASS_NAME == "OpenLayers.Geometry.MultiLineString") || (geometry.CLASS_NAME == "OpenLayers.Geometry.MultiPolygon") || (geometry.CLASS_NAME == "OpenLayers.Geometry.Collection")) {
        for (var i = 0, len = geometry.components.length; i < len; i++) {
            this.eraseGeometry(geometry.components[i], featureId);
        }
    } else {
        var element = OpenLayers.Util.getElement(geometry.id);
        if (element && element.parentNode) {
            if (element.geometry) {
                element.geometry.destroy();
                element.geometry = null;
            }
            element.parentNode.removeChild(element);
            if (this.indexer) {
                this.indexer.remove(element);
            }
            if (element._style.backgroundGraphic) {
                var backgroundId = geometry.id + this.BACKGROUND_ID_SUFFIX;
                var bElem = OpenLayers.Util.getElement(backgroundId);
                if (bElem && bElem.parentNode) {
                    bElem.parentNode.removeChild(bElem);
                }
            }
        }
    }
}, nodeFactory:function (id, type) {
    var node = OpenLayers.Util.getElement(id);
    if (node) {
        if (!this.nodeTypeCompare(node, type)) {
            node.parentNode.removeChild(node);
            node = this.nodeFactory(id, type);
        }
    } else {
        node = this.createNode(type, id);
    }
    return node;
}, nodeTypeCompare:function (node, type) {
}, createNode:function (type, id) {
}, moveRoot:function (renderer) {
    var root = this.root;
    if (renderer.root.parentNode == this.rendererRoot) {
        root = renderer.root;
    }
    root.parentNode.removeChild(root);
    renderer.rendererRoot.appendChild(root);
}, getRenderLayerId:function () {
    return this.root.parentNode.parentNode.id;
}, isComplexSymbol:function (graphicName) {
    return(graphicName != "circle") && !!graphicName;
}, CLASS_NAME:"OpenLayers.Renderer.Elements"});
OpenLayers.Renderer.symbol = {"star":[350, 75, 379, 161, 469, 161, 397, 215, 423, 301, 350, 250, 277, 301, 303, 215, 231, 161, 321, 161, 350, 75], "cross":[4, 0, 6, 0, 6, 4, 10, 4, 10, 6, 6, 6, 6, 10, 4, 10, 4, 6, 0, 6, 0, 4, 4, 4, 4, 0], "x":[0, 0, 25, 0, 50, 35, 75, 0, 100, 0, 65, 50, 100, 100, 75, 100, 50, 65, 25, 100, 0, 100, 35, 50, 0, 0], "square":[0, 0, 0, 1, 1, 1, 1, 0, 0, 0], "triangle":[0, 10, 10, 10, 5, 0, 0, 10]};
OpenLayers.Tween = OpenLayers.Class({INTERVAL:10, easing:null, begin:null, finish:null, duration:null, callbacks:null, time:null, interval:null, playing:false, initialize:function (easing) {
    this.easing = (easing) ? easing : OpenLayers.Easing.Expo.easeOut;
}, start:function (begin, finish, duration, options) {
    this.playing = true;
    this.begin = begin;
    this.finish = finish;
    this.duration = duration;
    this.callbacks = options.callbacks;
    this.time = 0;
    if (this.interval) {
        window.clearInterval(this.interval);
        this.interval = null;
    }
    if (this.callbacks && this.callbacks.start) {
        this.callbacks.start.call(this, this.begin);
    }
    this.interval = window.setInterval(OpenLayers.Function.bind(this.play, this), this.INTERVAL);
}, stop:function () {
    if (!this.playing) {
        return;
    }
    if (this.callbacks && this.callbacks.done) {
        this.callbacks.done.call(this, this.finish);
    }
    window.clearInterval(this.interval);
    this.interval = null;
    this.playing = false;
}, play:function () {
    var value = {};
    for (var i in this.begin) {
        var b = this.begin[i];
        var f = this.finish[i];
        if (b == null || f == null || isNaN(b) || isNaN(f)) {
            OpenLayers.Console.error('invalid value for Tween');
        }
        var c = f - b;
        value[i] = this.easing.apply(this, [this.time, b, c, this.duration]);
    }
    this.time++;
    if (this.callbacks && this.callbacks.eachStep) {
        this.callbacks.eachStep.call(this, value);
    }
    if (this.time > this.duration) {
        this.stop();
    }
}, CLASS_NAME:"OpenLayers.Tween"});
OpenLayers.Easing = {CLASS_NAME:"OpenLayers.Easing"};
OpenLayers.Easing.Linear = {easeIn:function (t, b, c, d) {
    return c * t / d + b;
}, easeOut:function (t, b, c, d) {
    return c * t / d + b;
}, easeInOut:function (t, b, c, d) {
    return c * t / d + b;
}, CLASS_NAME:"OpenLayers.Easing.Linear"};
OpenLayers.Easing.Expo = {easeIn:function (t, b, c, d) {
    return(t == 0) ? b : c * Math.pow(2, 10 * (t / d - 1)) + b;
}, easeOut:function (t, b, c, d) {
    return(t == d) ? b + c : c * (-Math.pow(2, -10 * t / d) + 1) + b;
}, easeInOut:function (t, b, c, d) {
    if (t == 0)return b;
    if (t == d)return b + c;
    if ((t /= d / 2) < 1)return c / 2 * Math.pow(2, 10 * (t - 1)) + b;
    return c / 2 * (-Math.pow(2, -10 * --t) + 2) + b;
}, CLASS_NAME:"OpenLayers.Easing.Expo"};
OpenLayers.Easing.Quad = {easeIn:function (t, b, c, d) {
    return c * (t /= d) * t + b;
}, easeOut:function (t, b, c, d) {
    return-c * (t /= d) * (t - 2) + b;
}, easeInOut:function (t, b, c, d) {
    if ((t /= d / 2) < 1)return c / 2 * t * t + b;
    return-c / 2 * ((--t) * (t - 2) - 1) + b;
}, CLASS_NAME:"OpenLayers.Easing.Quad"};
OpenLayers.Control.ArgParser = OpenLayers.Class(OpenLayers.Control, {center:null, zoom:null, layers:null, displayProjection:null, initialize:function (options) {
    OpenLayers.Control.prototype.initialize.apply(this, arguments);
}, setMap:function (map) {
    OpenLayers.Control.prototype.setMap.apply(this, arguments);
    for (var i = 0, len = this.map.controls.length; i < len; i++) {
        var control = this.map.controls[i];
        if ((control != this) && (control.CLASS_NAME == "OpenLayers.Control.ArgParser")) {
            if (control.displayProjection != this.displayProjection) {
                this.displayProjection = control.displayProjection;
            }
            break;
        }
    }
    if (i == this.map.controls.length) {
        var args = OpenLayers.Util.getParameters();
        if (args.layers) {
            this.layers = args.layers;
            this.map.events.register('addlayer', this, this.configureLayers);
            this.configureLayers();
        }
        if (args.lat && args.lon) {
            this.center = new OpenLayers.LonLat(parseFloat(args.lon), parseFloat(args.lat));
            if (args.zoom) {
                this.zoom = parseInt(args.zoom);
            }
            this.map.events.register('changebaselayer', this, this.setCenter);
            this.setCenter();
        }
    }
}, setCenter:function () {
    if (this.map.baseLayer) {
        this.map.events.unregister('changebaselayer', this, this.setCenter);
        if (this.displayProjection) {
            this.center.transform(this.displayProjection, this.map.getProjectionObject());
        }
        this.map.setCenter(this.center, this.zoom);
    }
}, configureLayers:function () {
    if (this.layers.length == this.map.layers.length) {
        this.map.events.unregister('addlayer', this, this.configureLayers);
        for (var i = 0, len = this.layers.length; i < len; i++) {
            var layer = this.map.layers[i];
            var c = this.layers.charAt(i);
            if (c == "B") {
                this.map.setBaseLayer(layer);
            } else if ((c == "T") || (c == "F")) {
                layer.setVisibility(c == "T");
            }
        }
    }
}, CLASS_NAME:"OpenLayers.Control.ArgParser"});
OpenLayers.Control.Attribution = OpenLayers.Class(OpenLayers.Control, {separator:", ", initialize:function (options) {
    OpenLayers.Control.prototype.initialize.apply(this, arguments);
}, destroy:function () {
    this.map.events.un({"removelayer":this.updateAttribution, "addlayer":this.updateAttribution, "changelayer":this.updateAttribution, "changebaselayer":this.updateAttribution, scope:this});
    OpenLayers.Control.prototype.destroy.apply(this, arguments);
}, draw:function () {
    OpenLayers.Control.prototype.draw.apply(this, arguments);
    this.map.events.on({'changebaselayer':this.updateAttribution, 'changelayer':this.updateAttribution, 'addlayer':this.updateAttribution, 'removelayer':this.updateAttribution, scope:this});
    this.updateAttribution();
    return this.div;
}, updateAttribution:function () {
    var attributions = [];
    if (this.map && this.map.layers) {
        for (var i = 0, len = this.map.layers.length; i < len; i++) {
            var layer = this.map.layers[i];
            if (layer.attribution && layer.getVisibility()) {
                if (OpenLayers.Util.indexOf(attributions, layer.attribution) === -1) {
                    attributions.push(layer.attribution);
                }
            }
        }
        this.div.innerHTML = attributions.join(this.separator);
    }
}, CLASS_NAME:"OpenLayers.Control.Attribution"});
OpenLayers.Control.Button = OpenLayers.Class(OpenLayers.Control, {type:OpenLayers.Control.TYPE_BUTTON, trigger:function () {
}, CLASS_NAME:"OpenLayers.Control.Button"});
OpenLayers.Control.Pan = OpenLayers.Class(OpenLayers.Control, {slideFactor:50, direction:null, type:OpenLayers.Control.TYPE_BUTTON, initialize:function (direction, options) {
    this.direction = direction;
    this.CLASS_NAME += this.direction;
    OpenLayers.Control.prototype.initialize.apply(this, [options]);
}, trigger:function () {
    switch (this.direction) {
        case OpenLayers.Control.Pan.NORTH:
            this.map.pan(0, -this.slideFactor);
            break;
        case OpenLayers.Control.Pan.SOUTH:
            this.map.pan(0, this.slideFactor);
            break;
        case OpenLayers.Control.Pan.WEST:
            this.map.pan(-this.slideFactor, 0);
            break;
        case OpenLayers.Control.Pan.EAST:
            this.map.pan(this.slideFactor, 0);
            break;
    }
}, CLASS_NAME:"OpenLayers.Control.Pan"});
OpenLayers.Control.Pan.NORTH = "North";
OpenLayers.Control.Pan.SOUTH = "South";
OpenLayers.Control.Pan.EAST = "East";
OpenLayers.Control.Pan.WEST = "West";
OpenLayers.Control.PanZoom = OpenLayers.Class(OpenLayers.Control, {slideFactor:50, slideRatio:null, buttons:null, position:null, initialize:function (options) {
    this.position = new OpenLayers.Pixel(OpenLayers.Control.PanZoom.X, OpenLayers.Control.PanZoom.Y);
    OpenLayers.Control.prototype.initialize.apply(this, arguments);
}, destroy:function () {
    OpenLayers.Control.prototype.destroy.apply(this, arguments);
    this.removeButtons();
    this.buttons = null;
    this.position = null;
}, draw:function (px) {
    OpenLayers.Control.prototype.draw.apply(this, arguments);
    px = this.position;
    this.buttons = [];
    var sz = new OpenLayers.Size(18, 18);
    var centered = new OpenLayers.Pixel(px.x + sz.w / 2, px.y);
    this._addButton("panup", "north-mini.png", centered, sz);
    px.y = centered.y + sz.h;
    this._addButton("panleft", "west-mini.png", px, sz);
    this._addButton("panright", "east-mini.png", px.add(sz.w, 0), sz);
    this._addButton("pandown", "south-mini.png", centered.add(0, sz.h * 2), sz);
    this._addButton("zoomin", "zoom-plus-mini.png", centered.add(0, sz.h * 3 + 5), sz);
    this._addButton("zoomworld", "zoom-world-mini.png", centered.add(0, sz.h * 4 + 5), sz);
    this._addButton("zoomout", "zoom-minus-mini.png", centered.add(0, sz.h * 5 + 5), sz);
    return this.div;
}, _addButton:function (id, img, xy, sz) {
    var imgLocation = OpenLayers.Util.getImagesLocation() + img;
    var btn = OpenLayers.Util.createAlphaImageDiv(this.id + "_" + id, xy, sz, imgLocation, "absolute");
    this.div.appendChild(btn);
    OpenLayers.Event.observe(btn, "mousedown", OpenLayers.Function.bindAsEventListener(this.buttonDown, btn));
    OpenLayers.Event.observe(btn, "dblclick", OpenLayers.Function.bindAsEventListener(this.doubleClick, btn));
    OpenLayers.Event.observe(btn, "click", OpenLayers.Function.bindAsEventListener(this.doubleClick, btn));
    btn.action = id;
    btn.map = this.map;
    if (!this.slideRatio) {
        var slideFactorPixels = this.slideFactor;
        var getSlideFactor = function () {
            return slideFactorPixels;
        };
    } else {
        var slideRatio = this.slideRatio;
        var getSlideFactor = function (dim) {
            return this.map.getSize()[dim] * slideRatio;
        };
    }
    btn.getSlideFactor = getSlideFactor;
    this.buttons.push(btn);
    return btn;
}, _removeButton:function (btn) {
    OpenLayers.Event.stopObservingElement(btn);
    btn.map = null;
    btn.getSlideFactor = null;
    this.div.removeChild(btn);
    OpenLayers.Util.removeItem(this.buttons, btn);
}, removeButtons:function () {
    for (var i = this.buttons.length - 1; i >= 0; --i) {
        this._removeButton(this.buttons[i]);
    }
}, doubleClick:function (evt) {
    OpenLayers.Event.stop(evt);
    return false;
}, buttonDown:function (evt) {
    if (!OpenLayers.Event.isLeftClick(evt)) {
        return;
    }
    switch (this.action) {
        case"panup":
            this.map.pan(0, -this.getSlideFactor("h"));
            break;
        case"pandown":
            this.map.pan(0, this.getSlideFactor("h"));
            break;
        case"panleft":
            this.map.pan(-this.getSlideFactor("w"), 0);
            break;
        case"panright":
            this.map.pan(this.getSlideFactor("w"), 0);
            break;
        case"zoomin":
            this.map.zoomIn();
            break;
        case"zoomout":
            this.map.zoomOut();
            break;
        case"zoomworld":
            this.map.zoomToMaxExtent();
            break;
    }
    OpenLayers.Event.stop(evt);
}, CLASS_NAME:"OpenLayers.Control.PanZoom"});
OpenLayers.Control.PanZoom.X = 4;
OpenLayers.Control.PanZoom.Y = 4;
OpenLayers.Control.ZoomIn = OpenLayers.Class(OpenLayers.Control, {type:OpenLayers.Control.TYPE_BUTTON, trigger:function () {
    this.map.zoomIn();
}, CLASS_NAME:"OpenLayers.Control.ZoomIn"});
OpenLayers.Control.ZoomOut = OpenLayers.Class(OpenLayers.Control, {type:OpenLayers.Control.TYPE_BUTTON, trigger:function () {
    this.map.zoomOut();
}, CLASS_NAME:"OpenLayers.Control.ZoomOut"});
OpenLayers.Control.ZoomToMaxExtent = OpenLayers.Class(OpenLayers.Control, {type:OpenLayers.Control.TYPE_BUTTON, trigger:function () {
    if (this.map) {
        this.map.zoomToMaxExtent();
    }
}, CLASS_NAME:"OpenLayers.Control.ZoomToMaxExtent"});
OpenLayers.Event = {observers:false, KEY_BACKSPACE:8, KEY_TAB:9, KEY_RETURN:13, KEY_ESC:27, KEY_LEFT:37, KEY_UP:38, KEY_RIGHT:39, KEY_DOWN:40, KEY_DELETE:46, element:function (event) {
    return event.target || event.srcElement;
}, isLeftClick:function (event) {
    return(((event.which) && (event.which == 1)) || ((event.button) && (event.button == 1)));
}, isRightClick:function (event) {
    return(((event.which) && (event.which == 3)) || ((event.button) && (event.button == 2)));
}, stop:function (event, allowDefault) {
    if (!allowDefault) {
        if (event.preventDefault) {
            event.preventDefault();
        } else {
            event.returnValue = false;
        }
    }
    if (event.stopPropagation) {
        event.stopPropagation();
    } else {
        event.cancelBubble = true;
    }
}, findElement:function (event, tagName) {
    var element = OpenLayers.Event.element(event);
    while (element.parentNode && (!element.tagName || (element.tagName.toUpperCase() != tagName.toUpperCase()))) {
        element = element.parentNode;
    }
    return element;
}, observe:function (elementParam, name, observer, useCapture) {
    var element = OpenLayers.Util.getElement(elementParam);
    useCapture = useCapture || false;
    if (name == 'keypress' && (navigator.appVersion.match(/Konqueror|Safari|KHTML/) || element.attachEvent)) {
        name = 'keydown';
    }
    if (!this.observers) {
        this.observers = {};
    }
    if (!element._eventCacheID) {
        var idPrefix = "eventCacheID_";
        if (element.id) {
            idPrefix = element.id + "_" + idPrefix;
        }
        element._eventCacheID = OpenLayers.Util.createUniqueID(idPrefix);
    }
    var cacheID = element._eventCacheID;
    if (!this.observers[cacheID]) {
        this.observers[cacheID] = [];
    }
    this.observers[cacheID].push({'element':element, 'name':name, 'observer':observer, 'useCapture':useCapture});
    if (element.addEventListener) {
        element.addEventListener(name, observer, useCapture);
    } else if (element.attachEvent) {
        element.attachEvent('on' + name, observer);
    }
}, stopObservingElement:function (elementParam) {
    var element = OpenLayers.Util.getElement(elementParam);
    var cacheID = element._eventCacheID;
    this._removeElementObservers(OpenLayers.Event.observers[cacheID]);
}, _removeElementObservers:function (elementObservers) {
    if (elementObservers) {
        for (var i = elementObservers.length - 1; i >= 0; i--) {
            var entry = elementObservers[i];
            var args = new Array(entry.element, entry.name, entry.observer, entry.useCapture);
            var removed = OpenLayers.Event.stopObserving.apply(this, args);
        }
    }
}, stopObserving:function (elementParam, name, observer, useCapture) {
    useCapture = useCapture || false;
    var element = OpenLayers.Util.getElement(elementParam);
    var cacheID = element._eventCacheID;
    if (name == 'keypress') {
        if (navigator.appVersion.match(/Konqueror|Safari|KHTML/) || element.detachEvent) {
            name = 'keydown';
        }
    }
    var foundEntry = false;
    var elementObservers = OpenLayers.Event.observers[cacheID];
    if (elementObservers) {
        var i = 0;
        while (!foundEntry && i < elementObservers.length) {
            var cacheEntry = elementObservers[i];
            if ((cacheEntry.name == name) && (cacheEntry.observer == observer) && (cacheEntry.useCapture == useCapture)) {
                elementObservers.splice(i, 1);
                if (elementObservers.length == 0) {
                    delete OpenLayers.Event.observers[cacheID];
                }
                foundEntry = true;
                break;
            }
            i++;
        }
    }
    if (foundEntry) {
        if (element.removeEventListener) {
            element.removeEventListener(name, observer, useCapture);
        } else if (element && element.detachEvent) {
            element.detachEvent('on' + name, observer);
        }
    }
    return foundEntry;
}, unloadCache:function () {
    if (OpenLayers.Event && OpenLayers.Event.observers) {
        for (var cacheID in OpenLayers.Event.observers) {
            var elementObservers = OpenLayers.Event.observers[cacheID];
            OpenLayers.Event._removeElementObservers.apply(this, [elementObservers]);
        }
        OpenLayers.Event.observers = false;
    }
}, CLASS_NAME:"OpenLayers.Event"};
OpenLayers.Event.observe(window, 'unload', OpenLayers.Event.unloadCache, false);
if (window.Event) {
    OpenLayers.Util.applyDefaults(window.Event, OpenLayers.Event);
} else {
    var Event = OpenLayers.Event;
}
OpenLayers.Events = OpenLayers.Class({BROWSER_EVENTS:["mouseover", "mouseout", "mousedown", "mouseup", "mousemove", "click", "dblclick", "rightclick", "dblrightclick", "resize", "focus", "blur"], listeners:null, object:null, element:null, eventTypes:null, eventHandler:null, fallThrough:null, includeXY:false, clearMouseListener:null, initialize:function (object, element, eventTypes, fallThrough, options) {
    OpenLayers.Util.extend(this, options);
    this.object = object;
    this.fallThrough = fallThrough;
    this.listeners = {};
    this.eventHandler = OpenLayers.Function.bindAsEventListener(this.handleBrowserEvent, this);
    this.clearMouseListener = OpenLayers.Function.bind(this.clearMouseCache, this);
    this.eventTypes = [];
    if (eventTypes != null) {
        for (var i = 0, len = eventTypes.length; i < len; i++) {
            this.addEventType(eventTypes[i]);
        }
    }
    if (element != null) {
        this.attachToElement(element);
    }
}, destroy:function () {
    if (this.element) {
        OpenLayers.Event.stopObservingElement(this.element);
        if (this.element.hasScrollEvent) {
            OpenLayers.Event.stopObserving(window, "scroll", this.clearMouseListener);
        }
    }
    this.element = null;
    this.listeners = null;
    this.object = null;
    this.eventTypes = null;
    this.fallThrough = null;
    this.eventHandler = null;
}, addEventType:function (eventName) {
    if (!this.listeners[eventName]) {
        this.eventTypes.push(eventName);
        this.listeners[eventName] = [];
    }
}, attachToElement:function (element) {
    if (this.element) {
        OpenLayers.Event.stopObservingElement(this.element);
    }
    this.element = element;
    for (var i = 0, len = this.BROWSER_EVENTS.length; i < len; i++) {
        var eventType = this.BROWSER_EVENTS[i];
        this.addEventType(eventType);
        OpenLayers.Event.observe(element, eventType, this.eventHandler);
    }
    OpenLayers.Event.observe(element, "dragstart", OpenLayers.Event.stop);
}, on:function (object) {
    for (var type in object) {
        if (type != "scope") {
            this.register(type, object.scope, object[type]);
        }
    }
}, register:function (type, obj, func) {
    if ((func != null) && (OpenLayers.Util.indexOf(this.eventTypes, type) != -1)) {
        if (obj == null) {
            obj = this.object;
        }
        var listeners = this.listeners[type];
        listeners.push({obj:obj, func:func});
    }
}, registerPriority:function (type, obj, func) {
    if (func != null) {
        if (obj == null) {
            obj = this.object;
        }
        var listeners = this.listeners[type];
        if (listeners != null) {
            listeners.unshift({obj:obj, func:func});
        }
    }
}, un:function (object) {
    for (var type in object) {
        if (type != "scope") {
            this.unregister(type, object.scope, object[type]);
        }
    }
}, unregister:function (type, obj, func) {
    if (obj == null) {
        obj = this.object;
    }
    var listeners = this.listeners[type];
    if (listeners != null) {
        for (var i = 0, len = listeners.length; i < len; i++) {
            if (listeners[i].obj == obj && listeners[i].func == func) {
                listeners.splice(i, 1);
                break;
            }
        }
    }
}, remove:function (type) {
    if (this.listeners[type] != null) {
        this.listeners[type] = [];
    }
}, triggerEvent:function (type, evt) {
    var listeners = this.listeners[type];
    if (!listeners || listeners.length == 0) {
        return;
    }
    if (evt == null) {
        evt = {};
    }
    evt.object = this.object;
    evt.element = this.element;
    if (!evt.type) {
        evt.type = type;
    }
    var listeners = listeners.slice(), continueChain;
    for (var i = 0, len = listeners.length; i < len; i++) {
        var callback = listeners[i];
        continueChain = callback.func.apply(callback.obj, [evt]);
        if ((continueChain != undefined) && (continueChain == false)) {
            break;
        }
    }
    if (!this.fallThrough) {
        OpenLayers.Event.stop(evt, true);
    }
    return continueChain;
}, handleBrowserEvent:function (evt) {
    if (this.includeXY) {
        evt.xy = this.getMousePosition(evt);
    }
    this.triggerEvent(evt.type, evt);
}, clearMouseCache:function () {
    this.element.scrolls = null;
    this.element.lefttop = null;
    this.element.offsets = null;
}, getMousePosition:function (evt) {
    if (!this.includeXY) {
        this.clearMouseCache();
    } else if (!this.element.hasScrollEvent) {
        OpenLayers.Event.observe(window, "scroll", this.clearMouseListener);
        this.element.hasScrollEvent = true;
    }
    if (!this.element.scrolls) {
        this.element.scrolls = [(document.documentElement.scrollLeft || document.body.scrollLeft), (document.documentElement.scrollTop || document.body.scrollTop)];
    }
    if (!this.element.lefttop) {
        this.element.lefttop = [(document.documentElement.clientLeft || 0), (document.documentElement.clientTop || 0)];
    }
    if (!this.element.offsets) {
        this.element.offsets = OpenLayers.Util.pagePosition(this.element);
        this.element.offsets[0] += this.element.scrolls[0];
        this.element.offsets[1] += this.element.scrolls[1];
    }
    return new OpenLayers.Pixel((evt.clientX + this.element.scrolls[0]) - this.element.offsets[0]
        - this.element.lefttop[0], (evt.clientY + this.element.scrolls[1]) - this.element.offsets[1]
        - this.element.lefttop[1]);
}, CLASS_NAME:"OpenLayers.Events"});
OpenLayers.Format = OpenLayers.Class({options:null, externalProjection:null, internalProjection:null, data:null, keepData:false, initialize:function (options) {
    OpenLayers.Util.extend(this, options);
    this.options = options;
}, destroy:function () {
}, read:function (data) {
    OpenLayers.Console.userError(OpenLayers.i18n("readNotImplemented"));
}, write:function (object) {
    OpenLayers.Console.userError(OpenLayers.i18n("writeNotImplemented"));
}, CLASS_NAME:"OpenLayers.Format"});
OpenLayers.Lang["ar"] = OpenLayers.Util.applyDefaults({'permalink':"وصلة دائمة", 'baseLayer':"الطبقة الاساسية", 'readNotImplemented':"القراءة غير محققة.", 'writeNotImplemented':"الكتابة غير محققة", 'errorLoadingGML':"خطأ عند تحميل المل�? جي ام ال ${url}", 'scale':"النسبة = 1 : ${scaleDenom}", 'W':"غ", 'E':"شر", 'N':"شم", 'S':"ج"});
OpenLayers.Lang["be-tarask"] = OpenLayers.Util.applyDefaults({'unhandledRequest':"�?еапрацаваны вынік запыту ${statusText}", 'permalink':"Стала�? �?па�?ылка", 'overlays':"Слаі", 'baseLayer':"Базавы �?лой", 'sameProjection':"�?гл�?дна�? мапа працуе толькі калі �?на мае тую ж праекцыю, што і а�?ноўна�? мапа", 'readNotImplemented':"Функцы�?нальна�?ьць чытаньн�? н�? �?творана�?.", 'writeNotImplemented':"Функцы�?нальна�?ьць запі�?у н�? �?творана�?.", 'noFID':"�?емагчыма абнавіць магчыма�?ьць, дл�? �?кога не і�?нуе FID.", 'errorLoadingGML':"Памылка загрузкі файла GML ${url}", 'browserNotSupported':"Ваш браўз�?р не падтрымлівае в�?ктарную графіку. У ц�?перашні момант падтрымліваюцца: ${renderers}", 'componentShouldBe':"addFeatures : кампан�?нт павінен быць ${geomType}", 'getFeatureError':"getFeatureFromEvent выкліканы дл�? �?ло�? б�?з р�?нд�?ру. Звычайна г�?та азначае, што Вы зьнішчылі �?лой, але пакінулі зьв�?заны зь ім апрацоўшчык.", 'minZoomLevelError':"Ула�?ьціва�?ьць minZoomLevel прызначана толькі дл�? выкары�?таньн�? �?а �?ла�?мі вытворнымі ад FixedZoomLevels. Тое, што  г�?ты wfs-�?лой прав�?раецца на minZoomLevel — р�?ха прошлага. �?ле мы н�? можам выдаліць г�?тую магчыма�?ьць, таму што ад �?е залежаць некаторы�? за�?наваны�? на OL да�?та�?аваньні. Тым н�? менш, праверка minZoomLevel будзе выдалена�? ў в�?р�?іі 3.0. Калі ла�?ка, выкары�?тоўваеце заме�?т �?е ў�?таноўкі мінімальнага/мак�?ымальнага памераў, �?к апі�?ана тут: http://trac.openlayers.org/wiki/SettingZoomLevels", 'commitSuccess':"WFS-транзакцы�?: ПОСЬПЕХ ${response}", 'commitFailed':"WFS-транзакцы�?: П�?МЫЛК�? ${response}", 'googleWarning':"�?е атрымала�?�? загрузіць �?лой Google. \x3cbr\x3e\x3cbr\x3eКаб пазбавіцца г�?тага паведамленьн�?, выберыце новы базавы �?лой у �?ьпі�?е ў верхнім правым куце.\x3cbr\x3e\x3cbr\x3e Хутч�?й за ў�?ё, прычына ў тым, што �?крыпт біблі�?т�?кі Google Maps н�? быў уключаны�? альбо не ўтрымлівае �?лушны API-ключ дл�? Вашага �?айта.\x3cbr\x3e\x3cbr\x3eРа�?працоўшчыкам: Дл�? таго, каб даведацца �?к зрабіць так, каб у�?ё працавала, \x3ca href=\'http://trac.openlayers.org/wiki/Google\' target=\'_blank\'\x3eнаці�?ьніце тут\x3c/a\x3e", 'getLayerWarning':"�?емагчыма загрузіць �?лой ${layerType}.\x3cbr\x3e\x3cbr\x3eКаб пазбавіцца г�?тага паведамленьн�?, выберыце новы базавы �?лой у �?ьпі�?е ў верхнім правым куце.\x3cbr\x3e\x3cbr\x3eХутч�?й за ў�?ё, прычына ў тым, што �?крыпт біблі�?т�?кі ${layerLib} н�? быў �?лушна ўключаны.\x3cbr\x3e\x3cbr\x3eРа�?працоўшчыкам: Дл�? таго, каб даведацца �?к зрабіць так, каб у�?ё працавала, \x3ca href=\'http://trac.openlayers.org/wiki/${layerLib}\' target=\'_blank\'\x3eнаці�?ьніце тут\x3c/a\x3e", 'scale':"Маштаб = 1 : ${scaleDenom}", 'W':"З", 'E':"У", 'N':"Пн", 'S':"Пд", 'layerAlreadyAdded':"Вы па�?прабавалі дадаць �?лой ${layerName} на мапу, але ён ужо дададзены", 'reprojectDeprecated':"Вы выкары�?тоўваеце ў�?таноўку \'reproject\' дл�? �?ло�? ${layerName}. Г�?та�? ў�?таноўка зь�?ўл�?ецца �?а�?тар�?лай: �?на выкары�?тоўвала�?�? дл�? падтрымкі паказу зьве�?так на кам�?рцыйных базавых мапах, але г�?та функцы�? ц�?пер р�?алізавана�? ў убудаванай падтрымцы �?ф�?рычнай праекцыі М�?ркатара. Дадаткова�? інфармацы�? ё�?ьць на http://trac.openlayers.org/wiki/SphericalMercator.", 'methodDeprecated':"Г�?ты м�?тад �?а�?тар�?лы і будзе выдалены ў в�?р�?іі 3.0. Калі ла�?ка, заме�?т �?го выкары�?тоўвайце ${newMethod}.", 'boundsAddError':"Вам неабходна падаць абодва знач�?ньні x і y дл�? функцыі �?кладаньн�?.", 'lonlatAddError':"Вам неабходна падаць абодва знач�?ньні lon і lat дл�? функцыі �?кладаньн�?.", 'pixelAddError':"Вам неабходна падаць абодва знач�?ньні x і y дл�? функцыі �?кладаньн�?.", 'unsupportedGeometryType':"Тып геам�?трыі не падтрымліваецца: ${geomType}", 'pagePositionFailed':"OpenLayers.Util.pagePosition failed: верагодна �?лем�?нт з ід�?нтыфікатарам ${elemId} займае н�?�?лушнае ме�?ца.", 'filterEvaluateNotImplemented':"evaluate не р�?алізаваны дл�? г�?тага тыпу фільтру."});
OpenLayers.Lang["bg"] = OpenLayers.Util.applyDefaults({'permalink':"По�?то�?нна препратка", 'baseLayer':"О�?новен �?лой", 'errorLoadingGML':"Грешка при зареждане на GML файл ${url}", 'scale':"Мащаб = 1 : ${scaleDenom}", 'layerAlreadyAdded':"Опитахте да добавите �?лой ${layerName} в картата, но той вече е добавен", 'methodDeprecated':"Този метод е о�?тар�?л и ще бъде премахват в 3.0. Вме�?то него използвайте ${newMethod}."});
OpenLayers.Lang["br"] = OpenLayers.Util.applyDefaults({'unhandledRequest':"Distro evel reked anveret ${statusText}", 'permalink':"Peurliamm", 'overlays':"Gwiskadoù", 'baseLayer':"Gwiskad diazez", 'sameProjection':"Ne\'z ar gartenn lec\'hiañ en-dro nemet pa vez heñvel ar banndres anezhi ha hini ar gartenn bennañ", 'readNotImplemented':"N\'eo ket emplementet al lenn.", 'writeNotImplemented':"N\'eo ket emplementet ar skrivañ.", 'noFID':"N\'haller ket hizivaat un elfenn ma n\'eus ket a niverenn-anaout (FID) eviti.", 'errorLoadingGML':"Fazi e-ser kargañ ar restr GML ${url}", 'browserNotSupported':"N\'eo ket skoret an daskor vektorel gant ho merdeer. Setu aze an daskorerioù skoret evit ar poent :\n${renderers}", 'componentShouldBe':"addFeatures : bez\' e tlefe ar parzh besañ eus ar seurt ${geomType}", 'getFeatureError':"Galvet eo bet getFeatureFromEvent called war ur gwiskad hep daskorer. Kement-se a dalvez ez eus bet freuzet ur gwiskad hag hoc\'h eus miret un embreger bennak stag outañ.", 'minZoomLevelError':"Ne zleer implijout ar perzh minZoomLevel nemet evit gwiskadoù FixedZoomLevels-descendent. Ar fed ma wiria ar gwiskad WHS-se hag-eñ ez eus eus minZoomLevel zo un aspadenn gozh. Koulskoude n\'omp ket evit e ziverkañ kuit da derriñ arloadoù diazezet war OL a c\'hallfe bezañ stag outañ. Setu perak eo dispredet -- Lamet kuit e vo ar gwiriañ minZoomLevel a-is er stumm 3.0. Ober gant an arventennoù bihanañ/brasañ evel deskrivet amañ e plas : http://trac.openlayers.org/wiki/SettingZoomLevels", 'commitSuccess':"Treuzgread WFS : MAT EO ${response}", 'commitFailed':"Treuzgread WFS Transaction: C\'HWITET ${response}", 'googleWarning':"N\'eus ket bet gallet kargañ ar gwiskad Google ent reizh.\x3cbr\x3e\x3cbr\x3eEvit en em zizober eus ar c\'hemenn-mañ, dibabit ur BaseLayer nevez en diuzer gwiskadoù er c\'horn dehoù el laez.\x3cbr\x3e\x3cbr\x3eSur a-walc\'h eo peogwir n\'eo ket bet ensoc\'het levraoueg Google Maps pe neuze ne glot ket an alc\'hwez API gant ho lec\'hienn.\x3cbr\x3e\x3cbr\x3eDiorroerien : Evit reizhañ an dra-se, \x3ca href=\'http://trac.openlayers.org/wiki/Google\' target=\'_blank\'\x3eclick here\x3c/a\x3e", 'getLayerWarning':"N\'haller ket kargañ ar gwiskad ${layerType} ent reizh.\x3cbr\x3e\x3cbr\x3eEvit en em zizober eus ar c\'hemenn-mañ, dibabit ur BaseLayer nevez en diuzer gwiskadoù er c\'horn dehoù el laez.\x3cbr\x3e\x3cbr\x3eSur a-walc\'h eo peogwir n\'eo ket bet ensoc\'het mat al levraoueg ${layerLib}.\x3cbr\x3e\x3cbr\x3eDiorroerien : Evit gouzout penaos reizhañ an dra-se, \x3ca href=\'http://trac.openlayers.org/wiki/${layerLib}\' target=\'_blank\'\x3eclick here\x3c/a\x3e", 'scale':"Skeul = 1 : ${scaleDenom}", 'W':"K", 'E':"R", 'N':"N", 'S':"S", 'layerAlreadyAdded':"Klasket hoc\'h eus ouzhpennañ ar gwiskad : ${layerName} d\'ar gartenn, met ouzhpennet e oa bet c\'hoazh", 'reprojectDeprecated':"Emaoc\'h oc\'h implijout an dibarzh \'reproject\' war ar gwiskad ${layerName}. Dispredet eo an dibarzh-mañ : bet eo hag e talveze da ziskwel roadennoù war-c\'horre kartennoù diazez kenwerzhel, un dra hag a c\'haller ober bremañ gant an arc\'hwel dre skor banndres boullek Mercator. Muioc\'h a ditouroù a c\'haller da gaout war http://trac.openlayers.org/wiki/SphericalMercator.", 'methodDeprecated':"Dispredet eo an daore-se ha tennet e vo kuit eus ar stumm 3.0. Grit gant ${newMethod} e plas.", 'boundsAddError':"Rekis eo tremen an div dalvoudenn x ha y d\'an arc\'hwel add.", 'lonlatAddError':"Rekis eo tremen an div dalvoudenn hedred ha ledred d\'an arc\'hwel add.", 'pixelAddError':"Rekis eo tremen an div dalvoudenn x ha y d\'an arc\'hwel add.", 'unsupportedGeometryType':"Seurt mentoniezh anskoret : ${geomType}", 'pagePositionFailed':"C\'hwitet eo OpenLayers.Util.pagePosition : marteze emañ lec\'hiet fall an elfenn id ${elemId}.", 'filterEvaluateNotImplemented':"N\'eo ket bet emplementet ar priziañ evit seurt siloù c\'hoazh."});
OpenLayers.Lang["el"] = OpenLayers.Util.applyDefaults({'scale':"Κλίμακα ~ 1 : ${scaleDenom}"});
OpenLayers.Lang.en = {'unhandledRequest':"Unhandled request return ${statusText}", 'permalink':"Permalink", 'overlays':"Overlays", 'baseLayer':"Base Layer", 'sameProjection':"The overview map only works when it is in the same projection as the main map", 'readNotImplemented':"Read not implemented.", 'writeNotImplemented':"Write not implemented.", 'noFID':"Can't update a feature for which there is no FID.", 'errorLoadingGML':"Error in loading GML file ${url}", 'browserNotSupported':"Your browser does not support vector rendering. Currently supported renderers are:\n${renderers}", 'componentShouldBe':"addFeatures : component should be an ${geomType}", 'getFeatureError':"getFeatureFromEvent called on layer with no renderer. This usually means you " + "destroyed a layer, but not some handler which is associated with it.", 'minZoomLevelError':"The minZoomLevel property is only intended for use " + "with the FixedZoomLevels-descendent layers. That this " + "wfs layer checks for minZoomLevel is a relic of the" + "past. We cannot, however, remove it without possibly " + "breaking OL based applications that may depend on it." + " Therefore we are deprecating it -- the minZoomLevel " + "check below will be removed at 3.0. Please instead " + "use min/max resolution setting as described here: " + "http://trac.openlayers.org/wiki/SettingZoomLevels", 'commitSuccess':"WFS Transaction: SUCCESS ${response}", 'commitFailed':"WFS Transaction: FAILED ${response}", 'googleWarning':"The Google Layer was unable to load correctly.<br><br>" + "To get rid of this message, select a new BaseLayer " + "in the layer switcher in the upper-right corner.<br><br>" + "Most likely, this is because the Google Maps library " + "script was either not included, or does not contain the " + "correct API key for your site.<br><br>" + "Developers: For help getting this working correctly, " + "<a href='http://trac.openlayers.org/wiki/Google' " + "target='_blank'>click here</a>", 'getLayerWarning':"The ${layerType} Layer was unable to load correctly.<br><br>" + "To get rid of this message, select a new BaseLayer " + "in the layer switcher in the upper-right corner.<br><br>" + "Most likely, this is because the ${layerLib} library " + "script was not correctly included.<br><br>" + "Developers: For help getting this working correctly, " + "<a href='http://trac.openlayers.org/wiki/${layerLib}' " + "target='_blank'>click here</a>", 'scale':"Scale = 1 : ${scaleDenom}", 'W':'W', 'E':'E', 'N':'N', 'S':'S', 'graticule':'Graticule', 'layerAlreadyAdded':"You tried to add the layer: ${layerName} to the map, but it has already been added", 'reprojectDeprecated':"You are using the 'reproject' option " + "on the ${layerName} layer. This option is deprecated: " + "its use was designed to support displaying data over commercial " + "basemaps, but that functionality should now be achieved by using " + "Spherical Mercator support. More information is available from " + "http://trac.openlayers.org/wiki/SphericalMercator.", 'methodDeprecated':"This method has been deprecated and will be removed in 3.0. " + "Please use ${newMethod} instead.", 'boundsAddError':"You must pass both x and y values to the add function.", 'lonlatAddError':"You must pass both lon and lat values to the add function.", 'pixelAddError':"You must pass both x and y values to the add function.", 'unsupportedGeometryType':"Unsupported geometry type: ${geomType}", 'pagePositionFailed':"OpenLayers.Util.pagePosition failed: element with id ${elemId} may be misplaced.", 'filterEvaluateNotImplemented':"evaluate is not implemented for this filter type.", 'end':''};
OpenLayers.Lang["fi"] = OpenLayers.Util.applyDefaults({'permalink':"Ikilinkki", 'overlays':"Kerrokset", 'baseLayer':"Peruskerros", 'sameProjection':"Yleiskuvakarttaa voi käyttää vain, kun sillä on sama projektio kuin pääkartalla.", 'W':"L", 'E':"I", 'N':"P", 'S':"E"});
OpenLayers.Lang["fur"] = OpenLayers.Util.applyDefaults({'permalink':"Leam Permanent", 'overlays':"Livei parsore", 'baseLayer':"Livel di base", 'browserNotSupported':"Il to sgarfadôr nol supuarte la renderizazion vetoriâl. Al moment a son supuartâts:\n${renderers}", 'scale':"Scjale = 1 : ${scaleDenom}", 'W':"O", 'E':"E", 'N':"N", 'S':"S"});
OpenLayers.Lang["gl"] = OpenLayers.Util.applyDefaults({'unhandledRequest':"Solicitude non xerada; a resposta foi: ${statusText}", 'permalink':"Ligazón permanente", 'overlays':"Capas superpostas", 'baseLayer':"Capa base", 'sameProjection':"A vista xeral do mapa só funciona cando está na mesma proxección có mapa principal", 'readNotImplemented':"Lectura non implementada.", 'writeNotImplemented':"Escritura non implementada.", 'noFID':"Non se pode actualizar a funcionalidade para a que non hai FID.", 'errorLoadingGML':"Erro ao cargar o ficheiro GML ${url}", 'browserNotSupported':"O seu navegador non soporta a renderización de vectores. Os renderizadores soportados actualmente son:\n${renderers}", 'componentShouldBe':"addFeatures: o compoñente debera ser de tipo ${geomType}", 'getFeatureError':"getFeatureFromEvent ten sido chamado a unha capa sen renderizador. Isto normalmente significa que destruíu unha capa, mais non o executador que está asociado con ela.", 'minZoomLevelError':"A propiedade minZoomLevel é só para uso conxuntamente coas capas FixedZoomLevels-descendent. O feito de que esa capa wfs verifique o minZoomLevel é unha reliquia do pasado. Non podemos, con todo, eliminala sen a posibilidade de non romper as aplicacións baseadas en OL que poidan depender dela. Por iso a estamos deixando obsoleta (a comprobación minZoomLevel de embaixo será eliminada na versión 3.0). Por favor, no canto diso use o axuste de resolución mín/máx tal e como está descrito aquí: http://trac.openlayers.org/wiki/SettingZoomLevels", 'commitSuccess':"Transacción WFS: ÉXITO ${response}", 'commitFailed':"Transacción WFS: FALLIDA ${response}", 'googleWarning':"A capa do Google non puido cargarse correctamente.\x3cbr\x3e\x3cbr\x3ePara evitar esta mensaxe, escolla unha nova capa base no seleccionador de capas na marxe superior dereita.\x3cbr\x3e\x3cbr\x3eProbablemente, isto acontece porque a escritura da libraría do Google Maps ou ben non foi incluída ou ben non contén a clave API correcta para o seu sitio.\x3cbr\x3e\x3cbr\x3eDesenvolvedores: para axudar a facer funcionar isto correctamente, \x3ca href=\'http://trac.openlayers.org/wiki/Google\' target=\'_blank\'\x3epremede aquí\x3c/a\x3e", 'getLayerWarning':"A capa ${layerType} foi incapaz de cargarse correctamente.\x3cbr\x3e\x3cbr\x3ePara evitar esta mensaxe, escolla unha nova capa base no seleccionador de capas na marxe superior dereita.\x3cbr\x3e\x3cbr\x3eProbablemente, isto acontece porque a escritura da libraría ${layerLib} non foi ben incluída.\x3cbr\x3e\x3cbr\x3eDesenvolvedores: para axudar a facer funcionar isto correctamente, \x3ca href=\'http://trac.openlayers.org/wiki/${layerLib}\' target=\'_blank\'\x3epremede aquí\x3c/a\x3e", 'scale':"Escala = 1 : ${scaleDenom}", 'W':"O", 'E':"L", 'N':"N", 'S':"S", 'layerAlreadyAdded':"Intentou engadir a capa: ${layerName} ao mapa, pero xa fora engadida", 'reprojectDeprecated':"Está usando a opción \"reproject\" na capa ${layerName}. Esta opción está obsoleta: o seu uso foi deseñado para a visualización de datos sobre mapas base comerciais, pero esta funcionalidade debera agora ser obtida utilizando a proxección Spherical Mercator. Hai dispoñible máis información en http://trac.openlayers.org/wiki/SphericalMercator.", 'methodDeprecated':"Este método está obsoleto e será eliminado na versión 3.0. Por favor, no canto deste use ${newMethod}.", 'boundsAddError':"Debe achegar os valores x e y á función add.", 'lonlatAddError':"Debe achegar tanto o valor lon coma o lat á función add.", 'pixelAddError':"Debe achegar os valores x e y á función add.", 'unsupportedGeometryType':"Tipo xeométrico non soportado: ${geomType}", 'pagePositionFailed':"OpenLayers.Util.pagePosition fallou: o elemento con id ${elemId} pode non estar na súa posición.", 'filterEvaluateNotImplemented':"avaliar non está implementado para este tipo de filtro."});
OpenLayers.Lang["gsw"] = OpenLayers.Util.applyDefaults({'unhandledRequest':"Nit behandleti Aafrogsruckmäldig ${statusText}", 'permalink':"Permalink", 'overlays':"Iberlagerige", 'baseLayer':"Grundcharte", 'sameProjection':"D Ibersichts-Charte funktioniert nume, wänn si di glych Projäktion brucht wie d Hauptcharte", 'readNotImplemented':"Läse nit implementiert.", 'writeNotImplemented':"Schrybe nit implementiert.", 'noFID':"E Feature, wu s kei FID derfir git, cha nit aktualisiert wäre.", 'errorLoadingGML':"Fähler bim Lade vu dr GML-Datei ${url}", 'browserNotSupported':"Dyy Browser unterstitzt kei Vektordarstellig. Aktuäll unterstitzti Renderer:\n${renderers}", 'componentShouldBe':"addFeatures : Komponänt sott dr Typ ${geomType} syy", 'getFeatureError':"getFeatureFromEvent isch uf eme Layer ohni Renderer ufgruefe wore. Des heisst normalerwys, ass Du e Layer kaputt gmacht hesch, aber nit dr Handler, wu derzue ghert.", 'minZoomLevelError':"D minZoomLevel-Eigeschaft isch nume dänk fir d Layer, wu vu dr FixedZoomLevels abstamme. Ass dää wfs-Layer minZoomLevel prieft, scih e Relikt us dr Vergangeheit. Mir chenne s aber nit ändere ohni OL_basierti Aawändige villicht kaputt gehn, wu dervu abhänge.  Us däm Grund het die Funktion d Eigeschaft \'deprecated\' iberchuu. D minZoomLevel-Priefig unte wird in dr Version 3.0 usegnuu. Bitte verwänd statt däm e min/max-Uflesig wie s do bschriben isch: http://trac.openlayers.org/wiki/SettingZoomLevels", 'commitSuccess':"WFS-Transaktion: ERFOLGRYCH ${response}", 'commitFailed':"WFS-Transaktion: FÄHLGSCHLAA ${response}", 'googleWarning':"Dr Google-Layer het nit korräkt chenne glade wäre.\x3cbr\x3e\x3cbr\x3eGo die Mäldig nimi z kriege, wehl e andere Hintergrundlayer us em LayerSwitcher im rächte obere Ecke.\x3cbr\x3e\x3cbr\x3eDää Fähler git s seli hyfig, wel s Skript vu dr Google-Maps-Bibliothek nit yybunde woren isch oder wel s kei giltige API-Schlissel fir Dyy URL din het.\x3cbr\x3e\x3cbr\x3eEntwickler: Fir Hilf zum korräkte Yybinde vum Google-Layer \x3ca href=\'http://trac.openlayers.org/wiki/Google\' target=\'_blank\'\x3edoo drucke\x3c/a\x3e", 'getLayerWarning':"Dr ${layerType}-Layer het nit korräkt chenne glade wäre.\x3cbr\x3e\x3cbr\x3eGo die Mäldig nimi z kriege, wehl e andere Hintergrundlayer us em LayerSwitcher im rächte obere Ecke.\x3cbr\x3e\x3cbr\x3eDää Fähler git s seli hyfig, wel s Skript vu dr \'${layerLib}\'-Bibliothek nit yybunde woren isch oder wel s kei giltige API-Schlissel fir Dyy URL din het.\x3cbr\x3e\x3cbr\x3eEntwickler: Fir Hilf zum korräkte Yybinde vu Layer \x3ca href=\'http://trac.openlayers.org/wiki/${layerLib}\' target=\'_blank\'\x3edoo drucke\x3c/a\x3e", 'scale':"Maßstab = 1 : ${scaleDenom}", 'W':"W", 'E':"O", 'N':"N", 'S':"S", 'layerAlreadyAdded':"Du hesch versuecht dää Layer in d Charte yyzfiege: ${layerName}, aber är isch schoi yygfiegt", 'reprojectDeprecated':"Du bruchsch d \'reproject\'-Option bim ${layerName}-Layer. Die Option isch nimi giltig: si isch aagleit wore go   Date iber kommerziälli Grundcharte lege, aber des sott mer jetz mache mit dr Unterstitzig vu Spherical Mercator. Meh Informatione git s uf http://trac.openlayers.org/wiki/SphericalMercator.", 'methodDeprecated':"Die Methode isch veraltet un wird us dr Version 3.0 usegnuu. Bitte verwäbnd statt däm ${newMethod}.", 'boundsAddError':"Du muesch e x-Wärt un e y-Wärt yygee bi dr Zuefieg-Funktion", 'lonlatAddError':"Du meusch e Lengi- un e Breiti-Grad yygee bi dr Zuefieg-Funktion.", 'pixelAddError':"Du muesch x- un y-Wärt aagee bi dr Zuefieg-Funktion.", 'unsupportedGeometryType':"Nit unterstitze Geometrii-Typ: ${geomType}", 'pagePositionFailed':"OpenLayers.Util.pagePosition fählgschlaa: Elemänt mit ID ${elemId} isch villicht falsch gsetzt.", 'filterEvaluateNotImplemented':"evaluiere isch nit implemäntiert in däm Filtertyp."});
OpenLayers.Lang["hr"] = OpenLayers.Util.applyDefaults({'unhandledRequest':"Nepodržani zahtjev ${statusText}", 'permalink':"Permalink", 'overlays':"Overlays", 'baseLayer':"Osnovna karta", 'sameProjection':"Pregledna karta radi jedino kao je u istoj projekciji kao i glava karta", 'readNotImplemented':"Čitanje nije implementirano.", 'writeNotImplemented':"Pisanje nije implementirano.", 'noFID':"Ne mogu ažurirati zna�?ajku za koju ne postoji FID.", 'errorLoadingGML':"Greška u u�?itavanju GML datoteke ${url}", 'browserNotSupported':"Vaš preglednik ne podržava vektorsko renderiranje. Trenutno podržani rendereri su: ${renderers}", 'componentShouldBe':"addFeatures : komponenta bi trebala biti ${geomType}", 'getFeatureError':"getFeatureFromEvent je pozvao Layer bez renderera. Ovo obi�?no zna�?i da ste uništiili Layer, a ne neki Handler koji je povezan s njim.", 'commitSuccess':"WFS Transakcija: USPJEŠNA ${response}", 'commitFailed':"WFS Transakcija: NEUSPJEŠNA ${response}", 'scale':"Mjerilo = 1 : ${scaleDenom}", 'layerAlreadyAdded':"Pokušali ste dodati layer:  ${layerName} na kartu, ali je već dodan", 'methodDeprecated':"Ova metoda nije odobrena i biti će maknuta u 3.0. Koristite ${newMethod}.", 'boundsAddError':"Morate dati obje vrijednosti ,  x i y  da bi dodali funkciju.", 'lonlatAddError':"Morate dati obje vrijednosti , (lon i lat) da bi dodali funkciju.", 'pixelAddError':"Morate dati obje vrijednosti ,  x i y  da bi dodali funkciju.", 'unsupportedGeometryType':"Nepodržani tip geometrije: ${geomType}", 'pagePositionFailed':"OpenLayers.Util.pagePosition nije uspjelo: element sa id ${elemId} može biti krivo smješten."});
OpenLayers.Lang["hsb"] = OpenLayers.Util.applyDefaults({'unhandledRequest':"Wotmołwa njewobdźěłaneho naprašowanja ${statusText}", 'permalink':"Trajny wotkaz", 'overlays':"Naworštowanja", 'baseLayer':"Zakładna runina", 'sameProjection':"Přehladowa karta jenož funguje, hdyž je w samsnej projekciji kaž hłowna karta", 'readNotImplemented':"Čitanje njeimplementowane.", 'writeNotImplemented':"Pisanje njeimplementowane.", 'noFID':"Funkcija, za kotruž FID njeje, njeda so aktualizować.", 'errorLoadingGML':"Zmylk při za�?itowanju dataje ${url}", 'browserNotSupported':"Twój wobhladowak wektorowe rysowanje njepodpěruje. Tuchwilu podpěrowane rysowaki su:\n${renderers}", 'componentShouldBe':"addFeatures: komponenta měła ${geomType} być", 'getFeatureError':"getFeatureFromEvent bu na woršće bjez rysowak zawołany. To zwjetša woznamjenja, zo sy worštu zni�?ił, ale nic wobdźěłak, kotryž je z njej zwjazany.", 'minZoomLevelError':"Kajkosć minZoomLevel je jenož za wužiwanje z worštami myslena, kotrež wot FixedZoomLevels pochadźeja. Zo tuta woršta wfs za minZoomLevel přepruwuje, je relikt zańdźenosće. Njemóžemy wšak ju wotstronić, bjeztoho zo aplikacije, kotrež na OpenLayers bazěruja a snano tutu kajkosć wužiwaja, hižo njefunguja. Tohodla smy ju jako zestarjenu woznamjenili -- přepruwowanje za minZoomLevel budu so we wersiji 3.0 wotstronjeć. Prošu wužij město toho nastajenje min/max, kaž je tu wopisane: http://trac.openlayers.org/wiki/SettingZoomLevels", 'commitSuccess':"WFS-Transakcija: WUSPĚŠNA ${response}", 'commitFailed':"WFS-Transakcija: NJEPORADŹENA ${response}", 'googleWarning':"Woršta Google njemóžeše so korektnje za�?itać.\x3cbr\x3e\x3cbr\x3eZo by tutu zdźělenku wotbył, wubjer nowy BaseLayer z wuběra worštow horjeka naprawo.\x3cbr\x3e\x3cbr\x3eNajskerje so to stawa, dokelž skript biblioteki Google Maps pak njebu zapřijaty pak njewobsahuje korektny klu�? API za twoje sydło.\x3cbr\x3e\x3cbr\x3eWuwiwarjo: Za pomoc ke korektnemu fungowanju worštow\n\x3ca href=\'http://trac.openlayers.org/wiki/Google\' target=\'_blank\'\x3etu kliknyć\x3c/a\x3e", 'getLayerWarning':"Woršta ${layerType} njemóžeše so korektnje za�?itać.\x3cbr\x3e\x3cbr\x3eZo by tutu zdźělenku wotbył, wubjer nowy BaseLayer z wuběra worštow horjeka naprawo.\x3cbr\x3e\x3cbr\x3eNajskerje so to stawa, dokelž skript biblioteki ${layerLib} njebu korektnje zapřijaty.\x3cbr\x3e\x3cbr\x3eWuwiwarjo: Za pomoc ke korektnemu fungowanju worštow\n\x3ca href=\'http://trac.openlayers.org/wiki/${layerLib}\' target=\'_blank\'\x3etu kliknyć\x3c/a\x3e", 'scale':"Měritko = 1 : ${scaleDenom}", 'W':"Z", 'E':"W", 'N':"S", 'S':"J", 'layerAlreadyAdded':"Sy spytał runinu ${layerName} karće dodać, ale je so hižo dodała", 'reprojectDeprecated':"Wužiwaš opciju \"reproject\" wořšty ${layerName}. Tuta opcija je zestarjena: jeje wužiwanje bě myslene, zo by zwobraznjenje datow nad komercielnymi bazowymi kartami podpěrało, ale funkcionalnosć měła so nětko z pomocu Sperical Mercator docpěć. Dalše informacije steja na http://trac.openlayers.org/wiki/SphericalMercator k dispoziciji.", 'methodDeprecated':"Tuta metoda je so njeschwaliła a budźe so w 3.0 wotstronjeć. Prošu wužij ${newMethod} město toho.", 'boundsAddError':"Dyrbiš hódnotu x kaž tež y funkciji \"add\" přepodać.", 'lonlatAddError':"Dyrbiš hódnotu lon kaž tež lat funkciji \"add\" přepodać.", 'pixelAddError':"Dyrbiš hódnotu x kaž tež y funkciji \"add\" přepodać.", 'unsupportedGeometryType':"Njepodpěrowany geometrijowy typ: ${geomType}", 'pagePositionFailed':"OpenLayers.Util.pagePosition je so njeporadźił: element z id ${elemId} bu snano wopak zaměstnjeny.", 'filterEvaluateNotImplemented':"wuhódnoćenje njeje za tutón filtrowy typ implementowany."});
OpenLayers.Lang["hu"] = OpenLayers.Util.applyDefaults({'unhandledRequest':"Nem kezelt kérés visszatérése ${statusText}", 'permalink':"Permalink", 'overlays':"Rávetítések", 'baseLayer':"Alapréteg", 'sameProjection':"Az áttekintő térkép csak abban az esetben működik, ha ugyanazon a vetületen van, mint a fő térkép.", 'readNotImplemented':"Olvasás nincs végrehajtva.", 'writeNotImplemented':"�?rás nincs végrehajtva.", 'noFID':"Nem frissíthető olyan jellemző, amely nem rendelkezik FID-del.", 'errorLoadingGML':"Hiba GML-fájl betöltésekor ${url}", 'browserNotSupported':"A böngészője nem támogatja a vektoros renderelést. A jelenleg támogatott renderelők:\n${renderers}", 'componentShouldBe':"addFeatures : az összetevőnek ilyen típusúnak kell lennie: ${geomType}", 'getFeatureError':"getFeatureFromEvent réteget hívott meg renderelő nélkül. Ez rendszerint azt jelenti, hogy megsemmisített egy fóliát, de néhány ahhoz társított kezelőt nem.", 'minZoomLevelError':"A minZoomLevel tulajdonságot csak a következővel való használatra szánták: FixedZoomLevels-leszármazott fóliák. Ez azt jelenti, hogy a minZoomLevel wfs fólia jelölőnégyzetei már a múlté. Mi azonban nem távolíthatjuk el annak a veszélye nélkül, hogy az esetlegesen ettől függő OL alapú alkalmazásokat tönkretennénk. Ezért ezt érvénytelenítjük -- a minZoomLevel az alul levő jelölőnégyzet a 3.0-s verzióból el lesz távolítva. Kérjük, helyette használja a  min/max felbontás beállítást, amelyről az alábbi helyen talál leírást: http://trac.openlayers.org/wiki/SettingZoomLevels", 'commitSuccess':"WFS tranzakció: SIKERES ${response}", 'commitFailed':"WFS tranzakció: SIKERTELEN ${response}", 'googleWarning':"A Google fólia betöltése sikertelen.\x3cbr\x3e\x3cbr\x3eAhhoz, hogy ez az üzenet eltűnjön, válasszon egy új BaseLayer fóliát a jobb felső sarokban található fóliakapcsoló segítségével.\x3cbr\x3e\x3cbr\x3eNagy valószínűséggel ez azért van, mert a Google Maps könyvtár parancsfájlja nem található, vagy nem tartalmazza az Ön oldalához tartozó megfelelő API-kulcsot.\x3cbr\x3e\x3cbr\x3eFejlesztőknek: A helyes működtetésre vonatkozó segítség az alábbi helyen érhető el, \x3ca href=\'http://trac.openlayers.org/wiki/Google\' target=\'_blank\'\x3ekattintson ide\x3c/a\x3e", 'getLayerWarning':"A(z) ${layerType} fólia nem töltődött be helyesen.\x3cbr\x3e\x3cbr\x3eAhhoz, hogy ez az üzenet eltűnjön, válasszon egy új BaseLayer fóliát a jobb felső sarokban található fóliakapcsoló segítségével.\x3cbr\x3e\x3cbr\x3eNagy valószínűséggel ez azért van, mert a(z) ${layerLib} könyvtár parancsfájlja helytelen.\x3cbr\x3e\x3cbr\x3eFejlesztőknek: A helyes működtetésre vonatkozó segítség az alábbi helyen érhető el, \x3ca href=\'http://trac.openlayers.org/wiki/${layerLib}\' target=\'_blank\'\x3ekattintson ide\x3c/a\x3e", 'scale':"Lépték = 1 : ${scaleDenom}", 'W':"Ny", 'E':"K", 'N':"É", 'S':"D", 'layerAlreadyAdded':"Megpróbálta hozzáadni a(z) ${layerName} fóliát a térképhez, de az már hozzá van adva", 'reprojectDeprecated':"Ön a \'reproject\' beállítást használja a(z) ${layerName} fólián. Ez a beállítás érvénytelen: használata az üzleti alaptérképek fölötti adatok megjelenítésének támogatására szolgált, de ezt a funkció ezentúl a Gömbi Mercator használatával érhető el. További információ az alábbi helyen érhető el: http://trac.openlayers.org/wiki/SphericalMercator", 'methodDeprecated':"Ez a módszer érvénytelenítve lett és a 3.0-s verzióból el lesz távolítva. Használja a(z) ${newMethod} módszert helyette.", 'boundsAddError':"Az x és y értékeknek egyaránt meg kell felelnie, hogy a funkciót hozzáadhassa.", 'lonlatAddError':"A hossz. és szél. értékeknek egyaránt meg kell felelnie, hogy a funkciót hozzáadhassa.", 'pixelAddError':"Az x és y értékeknek egyaránt meg kell felelnie, hogy a funkciót hozzáadhassa.", 'unsupportedGeometryType':"Nem támogatott geometriatípus: ${geomType}", 'pagePositionFailed':"OpenLayers.Util.pagePosition sikertelen: lehetséges, hogy a(z) ${elemId} azonosítójú elem téves helyre került.", 'filterEvaluateNotImplemented':"ennél a szűrőtípusnál kiértékelés nem hajtódik végre."});
OpenLayers.Lang["ia"] = OpenLayers.Util.applyDefaults({'unhandledRequest':"Le responsa a un requesta non esseva maneate: ${statusText}", 'permalink':"Permaligamine", 'overlays':"Superpositiones", 'baseLayer':"Strato de base", 'sameProjection':"Le mini-carta functiona solmente si illo es in le mesme projection que le carta principal", 'readNotImplemented':"Lectura non implementate.", 'writeNotImplemented':"Scriptura non implementate.", 'noFID':"Non pote actualisar un elemento sin FID.", 'errorLoadingGML':"Error al cargamento del file GML ${url}", 'browserNotSupported':"Tu navigator non supporta le rendition de vectores. Le renditores actualmente supportate es:\n${renderers}", 'componentShouldBe':"addFeatures: le componente debe esser del typo ${geomType}", 'getFeatureError':"getFeatureFromEvent ha essite appellate in un strato sin renditor. Isto significa generalmente que tu ha destruite un strato, ma lassava un gestor associate con illo.", 'minZoomLevelError':"Le proprietate minZoomLevel es solmente pro uso con le stratos descendente de FixedZoomLevels. Le facto que iste strato WFS verifica minZoomLevel es un reliquia del passato. Nonobstante, si nos lo remove immediatemente, nos pote rumper applicationes a base de OL que depende de illo. Ergo nos lo declara obsolete; le verification de minZoomLevel in basso essera removite in version 3.0. Per favor usa in su loco le configuration de resolutiones min/max como describite a: http://trac.openlayers.org/wiki/SettingZoomLevels", 'commitSuccess':"Transaction WFS: SUCCESSO ${response}", 'commitFailed':"Transaction WFS: FALLEVA ${response}", 'googleWarning':"Le strato Google non poteva esser cargate correctemente.\x3cbr\x3e\x3cbr\x3ePro disfacer te de iste message, selige un nove BaseLayer in le selector de strato in alto a dextra.\x3cbr\x3e\x3cbr\x3eMulto probabilemente, isto es proque le script del libreria de Google Maps non esseva includite o non contine le clave API correcte pro tu sito.\x3cbr\x3e\x3cbr\x3eDisveloppatores: Pro adjuta de corriger isto, \x3ca href=\'http://trac.openlayers.org/wiki/Google\' target=\'_blank\'\x3eclicca hic\x3c/a", 'getLayerWarning':"Le strato ${layerType} non poteva esser cargate correctemente.\x3cbr\x3e\x3cbr\x3ePro disfacer te de iste message, selige un nove BaseLayer in le selector de strato in alto a dextra.\x3cbr\x3e\x3cbr\x3eMulto probabilemente, isto es proque le script del libreria de ${layerLib} non esseva correctemente includite.\x3cbr\x3e\x3cbr\x3eDisveloppatores: Pro adjuta de corriger isto, \x3ca href=\'http://trac.openlayers.org/wiki/${layerLib}\' target=\'_blank\'\x3eclicca hic\x3c/a\x3e", 'scale':"Scala = 1 : ${scaleDenom}", 'W':"W", 'E':"E", 'N':"N", 'S':"S", 'layerAlreadyAdded':"Tu tentava adder le strato: ${layerName} al carta, ma illo es ja presente", 'reprojectDeprecated':"Tu usa le option \'reproject\' in le strato ${layerName} layer. Iste option es obsolescente: illo esseva pro poter monstrar datos super cartas de base commercial, ma iste functionalitate pote ora esser attingite con le uso de Spherical Mercator. Ulterior information es disponibile a http://trac.openlayers.org/wiki/SphericalMercator.", 'methodDeprecated':"Iste methodo ha essite declarate obsolescente e essera removite in version 3.0. Per favor usa ${newMethod} in su loco.", 'boundsAddError':"Tu debe passar le duo valores x e y al function add.", 'lonlatAddError':"Tu debe passar le duo valores lon e lat al function add.", 'pixelAddError':"Tu debe passar le duo valores x e y al function add.", 'unsupportedGeometryType':"Typo de geometria non supportate: ${geomType}", 'pagePositionFailed':"OpenLayers.Util.pagePosition falleva: le elemento con id ${elemId} pote esser mal placiate.", 'filterEvaluateNotImplemented':"\"evaluate\" non es implementate pro iste typo de filtro."});
OpenLayers.Lang["id"] = OpenLayers.Util.applyDefaults({'unhandledRequest':"Permintaan yang tak tertangani menghasilkan ${statusText}", 'permalink':"Pranala permanen", 'overlays':"Hamparan", 'baseLayer':"Lapisan Dasar", 'sameProjection':"Peta tinjauan hanya bekerja bila dalam proyeksi yang sama dengan peta utama", 'readNotImplemented':"Membaca tidak diterapkan.", 'writeNotImplemented':"Menyimpan tidak diterapkan.", 'noFID':"Tidak dapat memperbarui fitur yang tidak memiliki FID.", 'errorLoadingGML':"Kesalahan dalam memuat berkas GML ${url}", 'browserNotSupported':"Peramban Anda tidak mendukung penggambaran vektor. Penggambar yang didukung saat ini adalah:\n${renderers}", 'componentShouldBe':"addFeatures : komponen harus berupa ${geomType}", 'getFeatureError':"getFeatureFromEvent diterapkan pada lapisan tanpa penggambar. Ini biasanya berarti Anda menghapus sebuah lapisan, tetapi tidak menghapus penangan yang terkait dengannya.", 'minZoomLevelError':"Properti minZoomLevel hanya ditujukan bekerja dengan lapisan FixedZoomLevels-descendent. Pengecekan minZoomLevel oleh lapisan wfs adalah peninggalan masa lalu. Kami tidak dapat menghapusnya tanpa kemungkinan merusak aplikasi berbasis OL yang mungkin bergantung padanya. Karenanya, kami menganggapnya tidak berlaku -- Cek minZoomLevel di bawah ini akan dihapus pada 3.0. Silakan gunakan penyetelan resolusi min/maks seperti dijabarkan di sini: http://trac.openlayers.org/wiki/SettingZoomLevels", 'commitSuccess':"WFS Transaksi: BERHASIL ${respon}", 'commitFailed':"WFS Transaksi: GAGAL ${respon}", 'googleWarning':"Lapisan Google tidak dapat dimuat dengan benar.\x3cbr\x3e\x3cbr\x3eUntuk menghilangkan pesan ini, pilih suatu BaseLayer baru melalui penukar lapisan (layer switcher) di ujung kanan atas.\x3cbr\x3e\x3cbr\x3eKemungkinan besar ini karena pustaka skrip Google Maps tidak disertakan atau tidak mengandung kunci API yang tepat untuk situs Anda.\x3cbr\x3e\x3cbr\x3ePengembang: Untuk bantuan mengatasi masalah ini, \x3ca href=\'http://trac.openlayers.org/wiki/Google\' target=\'_blank\'\x3eklik di sini\x3c/a\x3e", 'getLayerWarning':"Lapisan ${layerType} tidak dapat dimuat dengan benar.\x3cbr\x3e\x3cbr\x3eUntuk menghilangkan pesan ini, pilih suatu BaseLayer baru melalui penukar lapisan (layer switcher) di ujung kanan atas.\x3cbr\x3e\x3cbr\x3eKemungkinan besar ini karena pustaka skrip Google Maps tidak disertakan dengan benar.\x3cbr\x3e\x3cbr\x3ePengembang: Untuk bantuan mengatasi masalah ini, \x3ca href=\'http://trac.openlayers.org/wiki/${layerLib}\' target=\'_blank\'\x3eklik di sini\x3c/a\x3e", 'scale':"Sekala = 1 : ${scaleDenom}", 'W':"B", 'E':"T", 'N':"U", 'S':"S", 'layerAlreadyAdded':"Anda mencoba menambahkan lapisan: ${layerName} ke dalam peta, tapi lapisan itu telah ditambahkan", 'reprojectDeprecated':"Anda menggunakan opsi \'reproject\' pada lapisan ${layerName}. Opsi ini telah ditinggalkan: penggunaannya dirancang untuk mendukung tampilan data melalui peta dasar komersial, tapi fungsionalitas tersebut saat ini harus dilakukan dengan menggunakan dukungan Spherical Mercator. Informasi lebih lanjut tersedia di http://trac.openlayers.org/wiki/SphericalMercator.", 'methodDeprecated':"Metode ini telah usang dan akan dihapus di 3.0. Sebaliknya, harap gunakan ${newMethod}.", 'boundsAddError':"Anda harus memberikan kedua nilai x dan y ke fungsi penambah.", 'lonlatAddError':"Anda harus memberikan kedua nilai lon dan lat ke fungsi penambah.", 'pixelAddError':"Anda harus memberikan kedua nilai x dan y ke fungsi penambah.", 'unsupportedGeometryType':"Tipe geometri tak didukung: ${geomType}", 'pagePositionFailed':"OpenLayers.Util.pagePosition gagal: elemen dengan id ${elemId} mungkin salah tempat.", 'filterEvaluateNotImplemented':"evaluasi tidak tersedia untuk tipe filter ini."});
OpenLayers.Lang["io"] = OpenLayers.Util.applyDefaults({'scale':"Skalo = 1 : ${scaleDenom}"});
OpenLayers.Lang["is"] = OpenLayers.Util.applyDefaults({'permalink':"Varanlegur tengill", 'overlays':"Þekjur", 'baseLayer':"Grunnlag", 'sameProjection':"Yfirlitskortið virkar aðeins ef það er í sömu vörpun og aðalkortið", 'readNotImplemented':"Skrifun er óútfærð.", 'writeNotImplemented':"Lestur er óútfærður.", 'errorLoadingGML':"Villa kom upp við að hlaða inn GML skránni ${url}", 'scale':"Skali = 1 : ${scaleDenom}", 'layerAlreadyAdded':"Þú reyndir að bæta laginu ${layerName} á kortið en það er þegar búið að bæta því við", 'methodDeprecated':"Þetta fall hefur verið úrelt og verður fjarlægt í 3.0. Notaðu ${newMethod} í staðin."});
OpenLayers.Lang["ja"] = OpenLayers.Util.applyDefaults({'unhandledRequest':"未処�?��?��?求�?� ${statusText} を返�?��?��?�", 'permalink':"パーマリンク", 'overlays':"オー�?ーレイ", 'baseLayer':"基底レイヤー", 'sameProjection':"概観地図�?�メイン�?�地図�?��?��?�投影法を�?�る場�?��?��?�機能�?��?��?�", 'readNotImplemented':"読�?�込�?��?�実装�?�れ�?��?��?��?�ん。", 'writeNotImplemented':"書�??込�?��?�実装�?�れ�?��?��?��?�ん。", 'noFID':"FID �?��?��?�地物�?�更新�?��??�?��?�ん。", 'errorLoadingGML':"GML ファイル ${url} �?�読�?�込�?�エラー", 'browserNotSupported':"�?��?��?��?�ブラウザ�?�ベクターグラフィックス�?��??写�?�対応�?��?��?��?��?�ん。�?�時点�?�対応�?��?��?�るソフトウェア�?�以下�?�も�?��?��?�。\n${renderers}", 'componentShouldBe':"addFeatures: �?素�?� ${geomType} �?��?�る�?��??�?��?�", 'getFeatureError':"getFeatureFromEvent �?�レンダラー�?��?��?�レイヤー�?�ら呼�?�れ�?��?��?�。通常�?�?�れ�?��?��?��?��?�レイヤーを�?�??れ�?�関連�?��?�られ�?��?��??�?��?��?��?ンドラを除�?��?��?破壊�?��?��?��?��?��?��?��?�を�?味�?��?��?�。", 'minZoomLevelError':"minZoomLevel プロパティ�?� FixedZoomLevels を継承�?�るレイヤー�?��?�使用�?��?�を想定�?��?��?��?��?�。�?��?� minZoomLevel �?�対�?�る WFS レイヤー�?�検査�?�歴�?�的�?�も�?��?��?�。�?��?��?��?��?�ら�?�?��?�検査を除去�?�る�?��??れ�?��?存�?�る OpenLayers ベース�?�アプリケーションを破壊�?��?��?��?��?��?�能性�?��?�り�?��?�。よ�?��?�廃止�?�予定�?�れ�?��?�り�?�?��?� minZoomLevel 検査�?��?ージョン3.0�?�除去�?�れ�?��?�。代�?り�?��?http://trac.openlayers.org/wiki/SettingZoomLevels �?�解説�?�れ�?��?�る�?最�?�?�よ�?�最大解�?度設定を使用�?��?��??�?��?��?�。", 'commitSuccess':"WFS トランザクション: �?功 ${response}", 'commitFailed':"WFS トランザクション: 失敗 ${response}", 'googleWarning':"Google レイヤー�?�正�?��??読�?�込�?�を行�?��?��?�ん�?��?��?�。\x3cbr\x3e\x3cbr\x3e�?��?�メッセージを消�?��?��?��?�?�上�?�隅�?��?�るレイヤー切り替�?�部分�?�新�?��?�基底レイヤーを�?�ん�?��??�?��?��?�。\x3cbr\x3e\x3cbr\x3e�?��??ら�??�?�?�れ�?� Google マップ用ライブラリ�?�スクリプト�?�組�?�込�?�れ�?��?��?��?��?��?�?��?��?��?�サイト�?�対応�?�る正�?��?� API キー�?�設定�?�れ�?��?��?��?��?��?�?��?�。\x3cbr\x3e\x3cbr\x3e開発者�?�方�?�: 正�?��?�動作を�?��?�る�?��?�?�\x3ca href=\'http://trac.openlayers.org/wiki/Google\' target=\'_blank\'\x3e�?��?�ら�?�ウィキ\x3c/a\x3eを�?�照�?��?��??�?��?��?�。", 'getLayerWarning':"${layerType} レイヤー�?�正�?��??読�?�込�?�を行�?��?��?�ん�?��?��?�。\x3cbr\x3e\x3cbr\x3e�?��?�メッセージを消�?��?��?��?�?�上�?�隅�?��?�るレイヤー切り替�?�部分�?�新�?��?�基底レイヤーを�?�ん�?��??�?��?��?�。\x3cbr\x3e\x3cbr\x3e�?��??ら�??�?�?�れ�?� ${layerLib} ライブラリ�?�スクリプト�?�正�?��??組�?�込�?�れ�?��?��?��?��?��?�?��?�。\x3cbr\x3e\x3cbr\x3e開発者�?�方�?�: 正�?��?�動作を�?��?�る�?��?�?�\x3ca href=\'http://trac.openlayers.org/wiki/${layerLib}\' target=\'_blank\'\x3e�?��?�ら�?�ウィキ\x3c/a\x3eを�?�照�?��?��??�?��?��?�。", 'scale':"縮尺 = 1 : ${scaleDenom}", 'W':"西", 'E':"�?�", 'N':"北", 'S':"�?�", 'layerAlreadyAdded':"�?��?��?��?�「${layerName}�?を地図�?�追加�?�よ�?��?�試�?��?��?��?��?��?�??�?�レイヤー�?�既�?�追加�?�れ�?��?��?��?�", 'reprojectDeprecated':"�?��?��?��?�「${layerName}�?レイヤー�?� reproject オプションを使�?��?��?��?��?�。�?��?�オプション�?�商用�?�基底地図上�?�情報を表示�?�る目的�?�設計�?�れ�?��?��?��?��?�?�在�?��?��??�?�機能�?� Spherical Mercator サ�?ートを利用�?��?�実�?��?�れ�?��?�り�?�?��?�オプション�?�使用�?��?�推奨�?��?�。追加�?�情報�?� http://trac.openlayers.org/wiki/SphericalMercator �?�入手�?��??�?��?�。", 'methodDeprecated':"�?��?�メソッド�?�廃止�?�予定�?�れ�?��?�り�?�?ージョン3.0�?�除去�?�れ�?��?�。代�?り�?� ${newMethod} を使用�?��?��??�?��?��?�。", 'boundsAddError':"x �?� y 両方�?�値を add 関数�?�渡�?��?��?�れ�?��?�り�?��?�ん。", 'lonlatAddError':"lon �?� lat 両方�?�値を add 関数�?�渡�?��?��?�れ�?��?�り�?��?�ん。", 'pixelAddError':"x �?� y �?�値両方を add 関数�?�渡�?��?��?�れ�?��?�り�?��?�ん。", 'unsupportedGeometryType':"未対応�?�形状型: ${geomType}", 'pagePositionFailed':"OpenLayers.Util.pagePosition �?�失敗�?��?��?��?�: id ${elemId} をも�?��?素�?�誤�?��?��?置�?��?�る�?�能性�?��?�り�?��?�。", 'filterEvaluateNotImplemented':"�?��?�フィルター型�?��?��?��?� evaluate �?�実装�?�れ�?��?��?��?�ん。"});
OpenLayers.Lang["km"] = OpenLayers.Util.applyDefaults({'permalink':"�?ំណភ្ជាប់អចិន្�?្រៃយ�?", 'baseLayer':"ស្រទាប់បា�?​", 'errorLoadingGML':"កំហុសកំឡុងព�?លផ្ទុកឯកសារ GML ${url}", 'scale':"មា�?្រដ្ឋាន = ១ ៖ ${scaleDenom}"});
OpenLayers.Lang["ksh"] = OpenLayers.Util.applyDefaults({'unhandledRequest':"Met dä Antwoot op en Aanfrooch ham_mer nix aanjefange: ${statusText}", 'permalink':"Lengk op Duuer", 'overlays':"Drövver jelaat", 'baseLayer':"Jrund-Nivoh", 'sameProjection':"De Övverseeschs_Kaat deiht et bloß, wann se de sälve Projäxjuhn bruche deiht, wi de Houp_Kaat", 'readNotImplemented':"„\x3ccode lang=\"en\"\x3eread\x3c/code\x3e“ is em Projramm nit fürjesinn.", 'writeNotImplemented':"„\x3ccode lang=\"en\"\x3ewrite\x3c/code\x3e“ is em Projramm nit fürjesinn.", 'noFID':"En Saach, woh kein \x3ci lang=\"en\"\x3eFID\x3c/i\x3e för doh es, löht sesch nit ändere.", 'errorLoadingGML':"Fähler beim \x3ci lang=\"en\"\x3eGML\x3c/i\x3e-Datei-Laade vun \x3ccode\x3e${url}\x3c/code\x3e", 'browserNotSupported':"Dinge Brauser kann kein Väktore ußjävve. De Zoote Ußjaabe, di em Momang jon, sen:\n${renderers}", 'componentShouldBe':"\x3ccode lang=\"en\"\x3eaddFeatures\x3c/code\x3e: dä Aandeil sullt vun dä Zoot „\x3ccode lang=\"en\"\x3e${geomType}\x3c/code\x3e“ sin.", 'getFeatureError':"\x3ccode lang=\"en\"\x3egetFeatureFromEvent\x3c/code\x3e es vun enem Nivoh opjeroofe woode, woh et kei Projramm zom Ußjävve jit. Dat bedügg för jewöhnlesch, dat De e Nivoh kapott jemaat häs, ävver nit e Projramm för domet ömzejonn, wat domet verbonge es.", 'minZoomLevelError':"De Eijeschaff „\x3ccode lang=\"en\"\x3eminZoomLevel\x3c/code\x3e“ es bloß doför jedaach, dat mer se met dä Nivvohß bruch, di vun \x3ccode lang=\"en\"\x3eFixedZoomLevels\x3c/code\x3e affhange don. Dat dat \x3ci lang=\"en\"\x3eWFS\x3c/i\x3e-Nivvoh övverhoup de Eijeschaff „\x3ccode lang=\"en\"\x3eminZoomLevel\x3c/code\x3e“ pröhfe deiht, es noch övveresch vun fröhjer. Mer künne dat ävver jez nit fott lohße, oohne dat mer Jevaa loufe, dat Aanwendunge vun OpenLayers nit mieh loufe, di sesch doh velleijsch noch drop am verlohße sin. Dröm sare mer, dat mer et nit mieh han welle, un de „\x3ccode lang=\"en\"\x3eminZoomLevel\x3c/code\x3e“-Eijeschaff weed hee vun de Version 3.0 af nit mieh jeprööf wäde. Nemm doför de Enstellung för de hühßte un de kleinßte Oplöhsung, esu wi et en http://trac.openlayers.org/wiki/SettingZoomLevels opjeschrevve es.", 'commitSuccess':"Dä \x3ci lang=\"en\"\x3eWFS\x3c/i\x3e-Vörjang es joot jeloufe: ${response}", 'commitFailed':"Dä \x3ci lang=\"en\"\x3eWFS\x3c/i\x3e-Vörjang es scheif jejange: ${response}", 'googleWarning':"Dat Nivvoh \x3ccode lang=\"en\"\x3eGoogle\x3c/code\x3e kunnt nit reschtesch jelaade wääde.\x3cbr /\x3e\x3cbr /\x3eÖm hee di Nohreesch loß ze krijje, donn en ander Jrund-Nivvoh ußsöhke, rähß bovve en de Äk.\x3cbr /\x3e\x3cbr /\x3eWascheinlesch es dat wiel dat \x3ci lang=\"en\"\x3eGoogle-Maps\x3c/i\x3e-Skrepp entweeder nit reschtesch enjebonge wood, udder nit dä reschtejje \x3ci lang=\"en\"\x3eAPI\x3c/i\x3e-Schlößel för Ding Web-ßait scheke deiht.\x3cbr /\x3e\x3cbr /\x3eFör Projrammierer jidd_et Hölp do_drövver, \x3ca href=\"http://trac.openlayers.org/wiki/Google\" target=\"_blank\"\x3ewi mer dat aan et Loufe brengk\x3c/a\x3e.", 'getLayerWarning':"Dat Nivvoh \x3ccode\x3e${layerType}\x3c/code\x3e kunnt nit reschtesch jelaade wääde.\x3cbr /\x3e\x3cbr /\x3eÖm hee di Nohreesch loß ze krijje, donn en ander Jrund-Nivvoh ußsöhkre, rähß bovve en de Äk.\x3cbr /\x3e\x3cbr /\x3eWascheinlesch es dat, wiel dat Skrepp \x3ccode\x3e${layerLib}\x3c/code\x3e nit reschtesch enjebonge wood.\x3cbr /\x3e\x3cbr /\x3eFör Projrammierer jidd_Et Hölp do_drövver, \x3ca href=\"http://trac.openlayers.org/wiki/${layerLib}\" target=\"_blank\"\x3ewi mer dat aan et Loufe brengk\x3c/a\x3e.", 'scale':"Mohßshtaab = 1 : ${scaleDenom}", 'W':"W", 'E':"O", 'N':"N", 'S':"S", 'layerAlreadyAdded':"Do häß versöhk, dat Nivvoh \x3ccode\x3e${layerName}\x3c/code\x3e en di Kaat eren ze bränge, et wohr ävver ald do dren.", 'reprojectDeprecated':"Do bruchs de Ußwahl \x3ccode\x3ereproject\x3c/code\x3e op däm Nivvoh \x3ccode\x3e${layerName}\x3c/code\x3e. Di Ußwahl es nit mieh jähn jesinn. Se wohr doför jedaach, öm Date op jeschääfsmäßesch eruß jejovve Kaate bovve drop ze moole, wat ävver enzwesche besser met dä Öngershtözung för de ßfääresche Mäkaator Beldscher jeiht. Doh kanns De mieh drövver fenge op dä Sigg: http://trac.openlayers.org/wiki/SphericalMercator.", 'methodDeprecated':"Hee di Metood es nim_mih aktoäll un et weed se en dä Version 3.0 nit mieh jävve. Nemm \x3ccode\x3e${newMethod}\x3c/code\x3e doföör.", 'boundsAddError':"Do moß beeds vun de \x3ccode\x3ex\x3c/code\x3e un \x3ccode\x3ey\x3c/code\x3e Wääte aan de Fungkßjohn \x3ccode\x3eadd\x3c/code\x3e jävve.", 'lonlatAddError':"Do moß beeds \x3ccode\x3elon\x3c/code\x3e un \x3ccode\x3elat\x3c/code\x3e aan de Fungkßjohn \x3ccode\x3eadd\x3c/code\x3e jävve.", 'pixelAddError':"Do moß beeds \x3ccode\x3ex\x3c/code\x3e un \x3ccode\x3ey\x3c/code\x3e aan de Fungkßjohn \x3ccode\x3eadd\x3c/code\x3e jävve.", 'unsupportedGeometryType':"De Zoot Jommetrii dom_mer nit ongershtöze: \x3ccode\x3e${geomType}\x3c/code\x3e", 'pagePositionFailed':"\x3ccode lang=\"en\"\x3eOpenLayers.Util.pagePosition\x3c/code\x3e es donevve jejange: dat Denge met dä Kännong \x3ccode\x3e${elemId}\x3c/code\x3e künnt am verkeehte Plaz sin.", 'filterEvaluateNotImplemented':"„\x3ccode lang=\"en\"\x3eevaluate\x3c/code\x3e“ es för di Zoot Fellter nit enjereschdt."});
OpenLayers.Lang["nds"] = OpenLayers.Util.applyDefaults({'unhandledRequest':"Unbehannelt Trüchmellels för de Anfraag ${statusText}", 'permalink':"Permalink", 'overlays':"Overlays", 'baseLayer':"Achtergrundkoort", 'sameProjection':"De Översichtskoort geiht blot, wenn de sülve Projekschoon as bi de Hööftkoort bruukt warrt", 'readNotImplemented':"Lesen is nich inricht.", 'writeNotImplemented':"Schrieven is nich inricht.", 'noFID':"En Feature, dat keen FID hett, kann nich aktuell maakt warrn.", 'errorLoadingGML':"Fehler bi’t Laden vun de GML-Datei ${url}", 'browserNotSupported':"Dien Browser ünnerstütt keen Vektorbiller. Ünnerstütt Renderers:\n${renderers}", 'componentShouldBe':"addFeatures : Kumponent schull man den Typ ${geomType} hebben", 'getFeatureError':"getFeatureFromEvent is von en Laag ahn Render opropen worrn. Dat bedüüdt normalerwies, dat en Laag wegmaakt worrn is, aver nich de Handler, de dor op verwiest.", 'commitSuccess':"WFS-Transakschoon: hett klappt ${response}", 'commitFailed':"WFS-Transakschoon: hett nich klappt ${response}", 'scale':"Skaal = 1 : ${scaleDenom}", 'layerAlreadyAdded':"Du versöchst de Laag „${layerName}“ to de Koort totofögen, man de is al toföögt", 'methodDeprecated':"Disse Methood is oold un schall dat in 3.0 nich mehr geven. Bruuk dor man beter ${newMethod} för.", 'boundsAddError':"De Weert x un y, de mööt all beid an de add-Funkschoon övergeven warrn.", 'lonlatAddError':"De Weert lon un lat, de mööt all beid an de add-Funkschoon övergeven warrn.", 'pixelAddError':"De Weert x un y, de mööt all beid an de add-Funkschoon övergeven warrn.", 'unsupportedGeometryType':"Nich ünnerstütt Geometrie-Typ: ${geomType}", 'pagePositionFailed':"OpenLayers.Util.pagePosition güng nich: Element mit de Id ${elemId} is villicht an’n verkehrten Platz."});
OpenLayers.Lang["nn"] = OpenLayers.Util.applyDefaults({'scale':"Skala = 1 : ${scaleDenom}", 'layerAlreadyAdded':"Du freista å leggja til laget «${layerName}» på kartet, men det har alt vorte lagt til.", 'boundsAddError':"Du er nøydd til å gje både ein x- og ein y-verdi til «add»-funksjonen.", 'lonlatAddError':"Du er nøydd til å gje både lon- og lat-verdiar til «add»-funksjonen.", 'pixelAddError':"Du er nøydd til å gje både ein x- og ein y-verdi til «add»-funksjonen."});
OpenLayers.Lang["oc"] = OpenLayers.Util.applyDefaults({'unhandledRequest':"Requèsta pas gerida, retorna ${statusText}", 'permalink':"Permaligam", 'overlays':"Calques", 'baseLayer':"Calc de basa", 'sameProjection':"La carta de situacion fonciona pas que quora sa projeccion es la meteissa que la de la carta principala", 'readNotImplemented':"Lectura pas implementada.", 'writeNotImplemented':"Escritura pas implementada.", 'noFID':"Impossible de metre a jorn un objècte sens identificant (fid).", 'errorLoadingGML':"Error al cargament del fichièr GML ${url}", 'browserNotSupported':"Vòstre navegidor supòrta pas lo rendut vectorial. Los renderers actualament suportats son : \n${renderers}", 'componentShouldBe':"addFeatures : lo compausant deuriá èsser de tipe ${geomType}", 'getFeatureError':"getFeatureFromEvent es estat apelat sus un calc sens renderer. Aquò significa generalament qu\'avètz destruch aqueste jaç, mas qu\'avètz conservat un handler que li èra associat.", 'minZoomLevelError':"La proprietat minZoomLevel deu èsser utilizada solament per de jaces FixedZoomLevels-descendent. Lo fach qu\'aqueste jaç WFS verifique la preséncia de minZoomLevel es una relica del passat. Çaquelà, la podèm suprimir sens copar d\'aplicacions que ne poirián dependre. Es per aquò que la depreciam -- la verificacion del minZoomLevel serà suprimida en version 3.0. A la plaça, mercés d\'utilizar los paramètres de resolucions min/max tal coma descrich sus : http://trac.openlayers.org/wiki/SettingZoomLevels", 'commitSuccess':"Transaccion WFS : SUCCES ${response}", 'commitFailed':"Transaccion WFS : FRACAS ${response}", 'googleWarning':"Lo jaç Google es pas estat en mesura de se cargar corrèctament.\x3cbr\x3e\x3cbr\x3ePer suprimir aqueste messatge, causissètz una BaseLayer novèla dins lo selector de jaç en naut a drecha.\x3cbr\x3e\x3cbr\x3eAquò es possiblament causat par la non-inclusion de la librariá Google Maps, o alara perque que la clau de l\'API correspond pas a vòstre site.\x3cbr\x3e\x3cbr\x3eDesvolopaires : per saber cossí corregir aquò, \x3ca href=\'http://trac.openlayers.org/wiki/Google\' target=\'_blank\'\x3eclicatz aicí\x3c/a\x3e", 'getLayerWarning':"Lo jaç ${layerType} es pas en mesura de se cargar corrèctament.\x3cbr\x3e\x3cbr\x3ePer suprimir aqueste messatge, causissètz una  BaseLayer novèla dins lo selector de jaç en naut a drecha.\x3cbr\x3e\x3cbr\x3eAquò es possiblament causat per la non-inclusion de la librariá ${layerLib}.\x3cbr\x3e\x3cbr\x3eDesvolopaires : per saber cossí corregir aquí, \x3ca href=\'http://trac.openlayers.org/wiki/${layerLib}\' target=\'_blank\'\x3eclicatz aicí\x3c/a\x3e", 'scale':"Escala ~ 1 : ${scaleDenom}", 'W':"O", 'E':"È", 'N':"N", 'S':"S", 'layerAlreadyAdded':"Avètz ensajat d\'apondre a la carta lo calc : ${layerName}, mas ja es present", 'reprojectDeprecated':"Utilizatz l\'opcion \'reproject\' sul jaç ${layerName}. Aquesta opcion es despreciada : Son usatge permetiá d\'afichar de donadas al dessús de jaces raster comercials. Aquesta foncionalitat ara es suportada en utilizant lo supòrt de la projeccion Mercator Esferica. Mai d\'informacion es disponibla sus http://trac.openlayers.org/wiki/SphericalMercator.", 'methodDeprecated':"Aqueste metòde es despreciada, e serà suprimida a la version 3.0. Mercés d\'utilizar ${newMethod} a la plaça.", 'boundsAddError':"Vos cal passar las doas valors x e y a la foncion add.", 'lonlatAddError':"Vos cal passar las doas valors lon e lat a la foncion add.", 'pixelAddError':"Vos cal passar las doas valors x e y a la foncion add.", 'unsupportedGeometryType':"Tipe de geometria pas suportat : ${geomType}", 'pagePositionFailed':"OpenLayers.Util.pagePosition a fracassat : l\'element d\'id ${elemId} poiriá èsser mal posicionat.", 'filterEvaluateNotImplemented':"evaluar es pas encara estat implementat per aqueste tipe de filtre."});
OpenLayers.Lang["pt"] = OpenLayers.Util.applyDefaults({'unhandledRequest':"Servidor devolveu erro não contemplado ${statusText}", 'permalink':"Ligação permanente", 'overlays':"Sobreposições", 'baseLayer':"Camada Base", 'sameProjection':"O mapa panorâmico só funciona quando está na mesma projeção que o mapa principal", 'readNotImplemented':"Leitura não implementada.", 'writeNotImplemented':"Escrita não implementada.", 'noFID':"Não é possível atualizar um elemento para a qual não há FID.", 'errorLoadingGML':"Erro ao carregar ficheiro GML ${url}", 'browserNotSupported':"O seu navegador não suporta renderização vetorial. Actualmente os renderizadores suportados são:\n${renderers}", 'componentShouldBe':"addFeatures: componente deve ser um(a) ${geomType}", 'getFeatureError':"getFeatureFromEvent foi chamado numa camada sem renderizador. Isto normalmente significa que destruiu uma camada, mas não um manipulador \'\'(handler)\'\' que lhe está associado.", 'minZoomLevelError':"A propriedade minZoomLevel só deve ser usada com as camadas descendentes da FixedZoomLevels. A verificação da propriedade por esta camada wfs é uma relíquia do passado. No entanto, não podemos removê-la sem correr o risco de afectar aplicações OL que dependam dela. Portanto, estamos a torná-la obsoleta -- a verificação minZoomLevel será removida na versão 3.0. Em vez dela, por favor, use as opções de resolução min/max descritas aqui: http://trac.openlayers.org/wiki/SettingZoomLevels", 'commitSuccess':"Transacção WFS: SUCESSO ${response}", 'commitFailed':"Transacção WFS: FALHOU ${response}", 'googleWarning':"A Camada Google não foi correctamente carregada.\x3cbr\x3e\x3cbr\x3ePara deixar de receber esta mensagem, seleccione uma nova Camada-Base no \'\'switcher\'\' de camadas no canto superior direito.\x3cbr\x3e\x3cbr\x3eProvavelmente, isto acontece porque o \'\'script\'\' da biblioteca do Google Maps não foi incluído ou não contém a chave API correcta para o seu sítio.\x3cbr\x3e\x3cbr\x3eProgramadores: Para ajuda sobre como solucionar o problema \x3ca href=\'http://trac.openlayers.org/wiki/Google\' target=\'_blank\'\x3eclique aqui\x3c/a\x3e .", 'getLayerWarning':"A camada ${layerType} não foi correctamente carregada.\x3cbr\x3e\x3cbr\x3ePara desactivar esta mensagem, seleccione uma nova Camada-Base no \'\'switcher\'\' de camadas no canto superior direito.\x3cbr\x3e\x3cbr\x3eProvavelmente, isto acontece porque o \'\'script\'\' da biblioteca ${layerLib} não foi incluído correctamente.\x3cbr\x3e\x3cbr\x3eProgramadores: Para ajuda sobre como solucionar o problema \x3ca href=\'http://trac.openlayers.org/wiki/${layerLib}\' target=\'_blank\'\x3eclique aqui\x3c/a\x3e .", 'scale':"Escala = 1 : ${scaleDenom}", 'W':"O", 'E':"E", 'N':"N", 'S':"S", 'layerAlreadyAdded':"Você tentou adicionar a camada: ${layerName} ao mapa, mas ela já tinha sido adicionada antes", 'reprojectDeprecated':"Está usando a opção \'reproject\' na camada ${layerName}. Esta opção é obsoleta: foi concebida para permitir a apresentação de dados sobre mapas-base comerciais, mas esta funcionalidade é agora suportada pelo Mercator Esférico. Mais informação está disponível em http://trac.openlayers.org/wiki/SphericalMercator.", 'methodDeprecated':"Este método foi declarado obsoleto e será removido na versão 3.0. Por favor, use ${newMethod} em vez disso.", 'boundsAddError':"Você deve passar tanto o valor x como o y à função de adição.", 'lonlatAddError':"Você deve passar tanto o valor lon como o lat à função de adição.", 'pixelAddError':"Você deve passar tanto o valor x como o y à função de adição.", 'unsupportedGeometryType':"Tipo de geometria não suportado: ${geomType}", 'pagePositionFailed':"OpenLayers.Util.pagePosition falhou: o elemento com o id ${elemId} poderá estar mal-posicionado.", 'filterEvaluateNotImplemented':"avaliar não está implementado para este tipo de filtro."});
OpenLayers.Lang["ru"] = OpenLayers.Util.applyDefaults({'unhandledRequest':"�?еобработанный запро�? вернул ${statusText}", 'permalink':"По�?то�?нна�? �?�?ылка", 'overlays':"Слои", 'baseLayer':"О�?новной �?лой", 'sameProjection':"Обзорна�? карта работает только тогда, когда имеет ту же проекцию, что и о�?новна�?", 'readNotImplemented':"Чтение не реализовано.", 'writeNotImplemented':"Запи�?ь не реализована.", 'noFID':"�?евозможно обновить объект, дл�? которого нет FID.", 'errorLoadingGML':"Ошибка при загрузке файла GML ${url}", 'browserNotSupported':"Ваш браузер не поддерживает векторную графику. �?а данный момент поддерживают�?�?:\n${renderers}", 'componentShouldBe':"addFeatures: компонент должен быть ${geomType}", 'getFeatureError':"getFeatureFromEvent вызван дл�? �?ло�? без рендерера. Обычно �?то говорит о том, что вы уничтожили �?лой, но о�?тавили �?в�?занный �? ним обработчик.", 'minZoomLevelError':"Свой�?тво minZoomLevel предназначено только дл�? и�?пользовани�? �?о �?ло�?ми, �?вл�?ющими�?�? потомками FixedZoomLevels. То, что �?тот WFS-�?лой провер�?ет�?�? на minZoomLevel — реликт прошлого. Однако мы не можем удалить �?ту функцию, так как, возможно, от неё зави�?�?т некоторые о�?нованные на OpenLayers приложени�?. Функци�? объ�?влена у�?таревшей — проверка minZoomLevel будет удалена в 3.0. Пожалуй�?та, и�?пользуйте вме�?то неё на�?тройку мин/мак�? разрешени�?, опи�?анную зде�?ь: http://trac.openlayers.org/wiki/SettingZoomLevels", 'commitSuccess':"Транзакци�? WFS: УСПЕШ�?О ${response}", 'commitFailed':"Транзакци�? WFS: ОШИБК�? ${response}", 'googleWarning':"Слой Google не удало�?ь нормально загрузить.\x3cbr\x3e\x3cbr\x3eЧтобы избавить�?�? от �?того �?ообщени�?, выбите другой о�?новной �?лой в переключателе в правом верхнем углу.\x3cbr\x3e\x3cbr\x3eСкорее в�?его, причина в том, что библиотека Google Maps не была включена или не �?одержит корректного API-ключа дл�? вашего �?айта.\x3cbr\x3e\x3cbr\x3eРазработчикам: чтобы узнать, как �?делать, чтобы в�?ё заработало, \x3ca href=\'http://trac.openlayers.org/wiki/Google\' target=\'_blank\'\x3eщёлкните тут\x3c/a\x3e", 'getLayerWarning':"Слой ${layerType} не удало�?ь нормально загрузить. \x3cbr\x3e\x3cbr\x3eЧтобы избавить�?�? от �?того �?ообщени�?, выбите другой о�?новной �?лой в переключателе в правом верхнем углу.\x3cbr\x3e\x3cbr\x3eСкорее в�?его, причина в том, что библиотека ${layerLib} не была включена или была включена некорректно.\x3cbr\x3e\x3cbr\x3eРазработчикам: чтобы узнать, как �?делать, чтобы в�?ё заработало, \x3ca href=\'http://trac.openlayers.org/wiki/${layerLib}\' target=\'_blank\'\x3eщёлкните тут\x3c/a\x3e", 'scale':"Ма�?штаб = 1 : ${scaleDenom}", 'W':"З", 'E':"В", 'N':"С", 'S':"Ю", 'layerAlreadyAdded':"Вы попытали�?ь добавить �?лой «${layerName}» на карту, но он уже был добавлен", 'reprojectDeprecated':"Вы и�?пользуете опцию \'reproject\' дл�? �?ло�? ${layerName}. Эта опци�? �?вл�?ет�?�? у�?таревшей: ее и�?пользование предполагало�?ь дл�? поддержки показа данных поверх коммерче�?ких базовых карт, но теперь �?тот функционал не�?ёт в�?троенна�? поддержка �?фериче�?кой проекции Меркатора. Больше �?ведений до�?тупно на http://trac.openlayers.org/wiki/SphericalMercator.", 'methodDeprecated':"Этот метод �?читает�?�? у�?таревшим и будет удалён в вер�?ии 3.0. Пожалуй�?та, пользуйте�?ь ${newMethod}.", 'boundsAddError':"Функции add надо передавать оба значени�?, x и y.", 'lonlatAddError':"Функции add надо передавать оба значени�?, lon и lat.", 'pixelAddError':"Функции add надо передавать оба значени�?, x и y.", 'unsupportedGeometryType':"�?еподдерживаемый тип геометрии: ${geomType}", 'pagePositionFailed':"OpenLayers.Util.pagePosition failed: �?лемент �? id ${elemId} может находить�?�? не в нужном ме�?те.", 'filterEvaluateNotImplemented':"evaluate не реализовано дл�? фильтра данного типа."});
OpenLayers.Lang["sk"] = OpenLayers.Util.applyDefaults({'unhandledRequest':"Neobslúžené požiadavky vracajú ${statusText}", 'permalink':"Trvalý odkaz", 'overlays':"Prekrytia", 'baseLayer':"Základná vrstva", 'sameProjection':"Prehľadová mapka funguje iba vtedy, ke�? je v rovnakej projekcii ako hlavná mapa", 'readNotImplemented':"Čítanie nie je implementované.", 'writeNotImplemented':"Zápis nie je implementovaný.", 'noFID':"Nie je možné aktualizovať vlastnosť, pre ktorú neexistuje FID.", 'errorLoadingGML':"Chyba pri na�?ítaní súboru GML ${url}", 'browserNotSupported':"Váš prehliada�? nepodporuje vykresľovanie vektorov. Momentálne podporované vykresľova�?e sú:\n${renderers}", 'componentShouldBe':"addFeatures: komponent by mal byť ${geomType}", 'getFeatureError':"getFeatureFromEvent bola zavolaná na vrstve bez vykresľova�?a. To zvy�?ajne znamená, že ste odstránili vrstvu, ale nie niektorú z obslúh, ktorá je s ňou asociovaná.", 'minZoomLevelError':"Vlastnosť minZoomLevel je ur�?ený iba na použitie s vrstvami odvodenými od FixedZoomLevels. To, že táto wfs vrstva kontroluje minZoomLevel je pozostatok z minulosti. Nemôžeme ho však odstrániť, aby sme sa vyhli možnému porušeniu aplikácií založených na Open Layers, ktoré na tomto môže závisieť. Preto ho ozna�?ujeme ako zavrhovaný - dolu uvedená kontrola minZoomLevel bude odstránená vo verzii 3.0. Použite prosím namiesto toho kontrolu min./max. rozlíšenia podľa tu uvedeného popisu: http://trac.openlayers.org/wiki/SettingZoomLevels", 'commitSuccess':"Transakcia WFS: ÚSPEŠN�? ${response}", 'commitFailed':"Transakcia WFS: ZLYHALA ${response}", 'googleWarning':"Vrstvu Google nebolo možné správne na�?ítať.\x3cbr\x3e\x3cbr\x3eAby ste sa tejto správy zbavili vyberte novú BaseLayer v prepína�?i vrstiev v pravom hornom rohu.\x3cbr\x3e\x3cbr\x3eToto sa stalo pravdepodobne preto, že skript knižnice Google Maps bu�? nebol na�?ítaný alebo neobsahuje správny kľú�? API pre vašu lokalitu.\x3cbr\x3e\x3cbr\x3eVývojári: Tu môžete získať \x3ca href=\'http://trac.openlayers.org/wiki/Google\' target=\'_blank\'\x3epomoc so sfunk�?nením\x3c/a\x3e", 'getLayerWarning':"Vrstvu ${layerType} nebolo možné správne na�?ítať.\x3cbr\x3e\x3cbr\x3eAby ste sa tejto správy zbavili vyberte novú BaseLayer v prepína�?i vrstiev v pravom hornom rohu.\x3cbr\x3e\x3cbr\x3eToto sa stalo pravdepodobne preto, že skript knižnice ${layerType} bu�? nebol na�?ítaný alebo neobsahuje správny kľú�? API pre vašu lokalitu.\x3cbr\x3e\x3cbr\x3eVývojári: Tu môžete získať \x3ca href=\'http://trac.openlayers.org/wiki/${layerType}\' target=\'_blank\'\x3epomoc so sfunk�?nením\x3c/a\x3e", 'scale':"Mierka = 1 : ${scaleDenom}", 'layerAlreadyAdded':"Pokúsili ste sa do mapy pridať vrstvu ${layerName}, ale tá už bola pridaná", 'reprojectDeprecated':"Používate voľby „reproject“ vrstvy ${layerType}. Táto voľba je zzavrhovaná: jej použitie bolo navrhnuté na podporu zobrazovania údajov nad komer�?nými základovými mapami, ale túto funkcionalitu je teraz možné dosiahnuť pomocou Spherical Mercator. Ďalšie informácie získate na stránke http://trac.openlayers.org/wiki/SphericalMercator.", 'methodDeprecated':"Táto metóda je zavrhovaná a bude odstránená vo verzii 3.0. Použite prosím namiesto nej metódu ${newMethod}.", 'boundsAddError':"S�?ítacej funkcii musíte dať hodnoty x aj y.", 'lonlatAddError':"S�?ítacej funkcii musíte dať hodnoty lon (zem. dĺžka) aj lat (zem. šírka).", 'pixelAddError':"S�?ítacej funkcii musíte dať hodnoty x aj y.", 'unsupportedGeometryType':"Nepodporovaný typ geometrie: ${geomType}", 'pagePositionFailed':"OpenLayers.Util.pagePosition zlyhalo: prvok s id ${elemId} môže byť zle umiestnený.", 'filterEvaluateNotImplemented':"evaluate nie je implementovaný pre tento typ filtra"});
OpenLayers.Lang["te"] = OpenLayers.Util.applyDefaults({'permalink':"స�?థిరలింక�?", 'W':"ప", 'E':"తూ", 'N':"ఉ", 'S':"ద"});
OpenLayers.Lang["vi"] = OpenLayers.Util.applyDefaults({'unhandledRequest':"Không xử lý được phản hồi ${statusText} cho yêu cầu", 'permalink':"Liên kết thư�?ng trực", 'overlays':"Lấp bản đồ", 'baseLayer':"Lớp n�?n", 'sameProjection':"Bản đồ toàn cảnh chỉ hoạt động khi cùng phép chiếu với bản đồ chính", 'readNotImplemented':"Chưa hỗ trợ chức năng đ�?c.", 'writeNotImplemented':"Chưa hỗ trợ chức năng viết.", 'noFID':"Không thể cập nhật tính năng thiếu FID.", 'errorLoadingGML':"Lỗi tải tập tin GML tại ${url}", 'browserNotSupported':"Trình duyệt của bạn không hỗ trợ chức năng vẽ bằng vectơ. Hiện hỗ trợ các bộ kết xuất:\n${renderers}", 'componentShouldBe':"addFeatures: bộ phận cần phải là ${geomType}", 'getFeatureError':"getFeatureFromEvent được g�?i từ lớp không có bộ kết xuất. Thư�?ng thì có lẽ lớp bị xóa nhưng một phần xử lý của nó vẫn còn.", 'minZoomLevelError':"Chỉ nên sử dụng thuộc tính minZoomLevel với các lớp FixedZoomLevels-descendent. Việc lớp wfs này tìm cho minZoomLevel là di tích còn lại từ xưa. Tuy nhiên, nếu chúng tôi d�?i nó thì sẽ vỡ các chương trình OpenLayers mà dựa trên nó. Bởi vậy chúng tôi phản đối sử dụng nó\x26nbsp;– bước tìm cho minZoomLevel sẽ được d�?i vào phiên bản 3.0. Xin sử dụng thiết lập độ phân tích tối thiểu / tối đa thay thế, theo hướng dẫn này: http://trac.openlayers.org/wiki/SettingZoomLevels", 'commitSuccess':"Giao dịch WFS: THÀNH CÔNG ${response}", 'commitFailed':"Giao dịch WFS: THẤT BẠI ${response}", 'googleWarning':"Không thể tải lớp Google đúng đắn.\x3cbr\x3e\x3cbr\x3e�?ể tránh thông báo này lần sau, hãy ch�?n BaseLayer mới dùng đi�?u khiển ch�?n lớp ở góc trên phải.\x3cbr\x3e\x3cbr\x3eChắc script thư viện Google Maps hoặc không được bao gồm hoặc không chứa khóa API hợp với website của bạn.\x3cbr\x3e\x3cbr\x3e\x3ca href=\'http://trac.openlayers.org/wiki/Google\' target=\'_blank\'\x3eTrợ giúp v�? tính năng này\x3c/a\x3e cho ngư�?i phát triển.", 'getLayerWarning':"Không thể tải lớp ${layerType} đúng đắn.\x3cbr\x3e\x3cbr\x3e�?ể tránh thông báo này lần sau, hãy ch�?n BaseLayer mới dùng đi�?u khiển ch�?n lớp ở góc trên phải.\x3cbr\x3e\x3cbr\x3eChắc script thư viện ${layerLib} không được bao gồm đúng kiểu.\x3cbr\x3e\x3cbr\x3e\x3ca href=\'http://trac.openlayers.org/wiki/${layerLib}\' target=\'_blank\'\x3eTrợ giúp v�? tính năng này\x3c/a\x3e cho ngư�?i phát triển.", 'scale':"Tỷ lệ = 1 : ${scaleDenom}", 'W':"T", 'E':"�?", 'N':"B", 'S':"N", 'layerAlreadyAdded':"Bạn muốn thêm lớp ${layerName} vào bản đồ, nhưng lớp này đã được thêm", 'reprojectDeprecated':"Bạn đang áp dụng chế độ “reproject�? vào lớp ${layerName}. Chế độ này đã bị phản đối: nó có mục đích hỗ trợ lấp dữ liệu trên các n�?n bản đồ thương mại; nên thực hiện hiệu ứng đó dùng tính năng Mercator Hình cầu. Có sẵn thêm chi tiết tại http://trac.openlayers.org/wiki/SphericalMercator .", 'methodDeprecated':"Phương thức này đã bị phản đối và sẽ bị d�?i vào phiên bản 3.0. Xin hãy sử dụng ${newMethod} thay thế.", 'boundsAddError':"Cần phải cho cả giá trị x và y vào hàm add.", 'lonlatAddError':"Cần phải cho cả giá trị lon và lat vào hàm add.", 'pixelAddError':"Cần phải cho cả giá trị x và y vào hàm add.", 'unsupportedGeometryType':"Không hỗ trợ kiểu địa lý: ${geomType}", 'pagePositionFailed':"OpenLayers.Util.pagePosition bị thất bại: nguyên tố với ID ${elemId} có thể ở chỗ sai.", 'filterEvaluateNotImplemented':"chưa hỗ trợ evaluate cho loại bộ l�?c này."});
OpenLayers.Popup.AnchoredBubble = OpenLayers.Class(OpenLayers.Popup.Anchored, {rounded:false, initialize:function (id, lonlat, contentSize, contentHTML, anchor, closeBox, closeBoxCallback) {
    this.padding = new OpenLayers.Bounds(0, OpenLayers.Popup.AnchoredBubble.CORNER_SIZE, 0, OpenLayers.Popup.AnchoredBubble.CORNER_SIZE);
    OpenLayers.Popup.Anchored.prototype.initialize.apply(this, arguments);
}, draw:function (px) {
    OpenLayers.Popup.Anchored.prototype.draw.apply(this, arguments);
    this.setContentHTML();
    this.setBackgroundColor();
    this.setOpacity();
    return this.div;
}, updateRelativePosition:function () {
    this.setRicoCorners();
}, setSize:function (contentSize) {
    OpenLayers.Popup.Anchored.prototype.setSize.apply(this, arguments);
    this.setRicoCorners();
}, setBackgroundColor:function (color) {
    if (color != undefined) {
        this.backgroundColor = color;
    }
    if (this.div != null) {
        if (this.contentDiv != null) {
            this.div.style.background = "transparent";
            OpenLayers.Rico.Corner.changeColor(this.groupDiv, this.backgroundColor);
        }
    }
}, setOpacity:function (opacity) {
    OpenLayers.Popup.Anchored.prototype.setOpacity.call(this, opacity);
    if (this.div != null) {
        if (this.groupDiv != null) {
            OpenLayers.Rico.Corner.changeOpacity(this.groupDiv, this.opacity);
        }
    }
}, setBorder:function (border) {
    this.border = 0;
}, setRicoCorners:function () {
    var corners = this.getCornersToRound(this.relativePosition);
    var options = {corners:corners, color:this.backgroundColor, bgColor:"transparent", blend:false};
    if (!this.rounded) {
        OpenLayers.Rico.Corner.round(this.div, options);
        this.rounded = true;
    } else {
        OpenLayers.Rico.Corner.reRound(this.groupDiv, options);
        this.setBackgroundColor();
        this.setOpacity();
    }
}, getCornersToRound:function () {
    var corners = ['tl', 'tr', 'bl', 'br'];
    var corner = OpenLayers.Bounds.oppositeQuadrant(this.relativePosition);
    OpenLayers.Util.removeItem(corners, corner);
    return corners.join(" ");
}, CLASS_NAME:"OpenLayers.Popup.AnchoredBubble"});
OpenLayers.Popup.AnchoredBubble.CORNER_SIZE = 5;
OpenLayers.Projection = OpenLayers.Class({proj:null, projCode:null, initialize:function (projCode, options) {
    OpenLayers.Util.extend(this, options);
    this.projCode = projCode;
    if (window.Proj4js) {
        this.proj = new Proj4js.Proj(projCode);
    }
}, getCode:function () {
    return this.proj ? this.proj.srsCode : this.projCode;
}, getUnits:function () {
    return this.proj ? this.proj.units : null;
}, toString:function () {
    return this.getCode();
}, equals:function (projection) {
    if (projection && projection.getCode) {
        return this.getCode() == projection.getCode();
    } else {
        return false;
    }
}, destroy:function () {
    delete this.proj;
    delete this.projCode;
}, CLASS_NAME:"OpenLayers.Projection"});
OpenLayers.Projection.transforms = {};
OpenLayers.Projection.addTransform = function (from, to, method) {
    if (!OpenLayers.Projection.transforms[from]) {
        OpenLayers.Projection.transforms[from] = {};
    }
    OpenLayers.Projection.transforms[from][to] = method;
};
OpenLayers.Projection.transform = function (point, source, dest) {
    if (source.proj && dest.proj) {
        point = Proj4js.transform(source.proj, dest.proj, point);
    } else if (source && dest && OpenLayers.Projection.transforms[source.getCode()] && OpenLayers.Projection.transforms[source.getCode()][dest.getCode()]) {
        OpenLayers.Projection.transforms[source.getCode()][dest.getCode()](point);
    }
    return point;
};
OpenLayers.Tile = OpenLayers.Class({EVENT_TYPES:["loadstart", "loadend", "reload", "unload"], events:null, id:null, layer:null, url:null, bounds:null, size:null, position:null, isLoading:false, initialize:function (layer, position, bounds, url, size) {
    this.layer = layer;
    this.position = position.clone();
    this.bounds = bounds.clone();
    this.url = url;
    this.size = size.clone();
    this.id = OpenLayers.Util.createUniqueID("Tile_");
    this.events = new OpenLayers.Events(this, null, this.EVENT_TYPES);
}, unload:function () {
    if (this.isLoading) {
        this.isLoading = false;
        this.events.triggerEvent("unload");
    }
}, destroy:function () {
    this.layer = null;
    this.bounds = null;
    this.size = null;
    this.position = null;
    this.events.destroy();
    this.events = null;
}, clone:function (obj) {
    if (obj == null) {
        obj = new OpenLayers.Tile(this.layer, this.position, this.bounds, this.url, this.size);
    }
    OpenLayers.Util.applyDefaults(obj, this);
    return obj;
}, draw:function () {
    var maxExtent = this.layer.maxExtent;
    var withinMaxExtent = (maxExtent && this.bounds.intersectsBounds(maxExtent, false));
    this.shouldDraw = (withinMaxExtent || this.layer.displayOutsideMaxExtent);
    this.clear();
    return this.shouldDraw;
}, moveTo:function (bounds, position, redraw) {
    if (redraw == null) {
        redraw = true;
    }
    this.bounds = bounds.clone();
    this.position = position.clone();
    if (redraw) {
        this.draw();
    }
}, clear:function () {
}, getBoundsFromBaseLayer:function (position) {
    var msg = OpenLayers.i18n('reprojectDeprecated', {'layerName':this.layer.name});
    OpenLayers.Console.warn(msg);
    var topLeft = this.layer.map.getLonLatFromLayerPx(position);
    var bottomRightPx = position.clone();
    bottomRightPx.x += this.size.w;
    bottomRightPx.y += this.size.h;
    var bottomRight = this.layer.map.getLonLatFromLayerPx(bottomRightPx);
    if (topLeft.lon > bottomRight.lon) {
        if (topLeft.lon < 0) {
            topLeft.lon = -180 - (topLeft.lon + 180);
        } else {
            bottomRight.lon = 180 + bottomRight.lon + 180;
        }
    }
    var bounds = new OpenLayers.Bounds(topLeft.lon, bottomRight.lat, bottomRight.lon, topLeft.lat);
    return bounds;
}, showTile:function () {
    if (this.shouldDraw) {
        this.show();
    }
}, show:function () {
}, hide:function () {
}, CLASS_NAME:"OpenLayers.Tile"});
OpenLayers.Format.XML = OpenLayers.Class(OpenLayers.Format, {namespaces:null, namespaceAlias:null, defaultPrefix:null, readers:{}, writers:{}, xmldom:null, initialize:function (options) {
    if (window.ActiveXObject) {
        this.xmldom = new ActiveXObject("Microsoft.XMLDOM");
    }
    OpenLayers.Format.prototype.initialize.apply(this, [options]);
    this.namespaces = OpenLayers.Util.extend({}, this.namespaces);
    this.namespaceAlias = {};
    for (var alias in this.namespaces) {
        this.namespaceAlias[this.namespaces[alias]] = alias;
    }
}, destroy:function () {
    this.xmldom = null;
    OpenLayers.Format.prototype.destroy.apply(this, arguments);
}, setNamespace:function (alias, uri) {
    this.namespaces[alias] = uri;
    this.namespaceAlias[uri] = alias;
}, read:function (text) {
    var index = text.indexOf('<');
    if (index > 0) {
        text = text.substring(index);
    }
    var node = OpenLayers.Util.Try(OpenLayers.Function.bind((function () {
        var xmldom;
        if (window.ActiveXObject && !this.xmldom) {
            xmldom = new ActiveXObject("Microsoft.XMLDOM");
        } else {
            xmldom = this.xmldom;
        }
        xmldom.loadXML(text);
        return xmldom;
    }), this), function () {
        return new DOMParser().parseFromString(text, 'text/xml');
    }, function () {
        var req = new XMLHttpRequest();
        req.open("GET", "data:" + "text/xml" + ";charset=utf-8," + encodeURIComponent(text), false);
        if (req.overrideMimeType) {
            req.overrideMimeType("text/xml");
        }
        req.send(null);
        return req.responseXML;
    });
    if (this.keepData) {
        this.data = node;
    }
    return node;
}, write:function (node) {
    var data;
    if (this.xmldom) {
        data = node.xml;
    } else {
        var serializer = new XMLSerializer();
        if (node.nodeType == 1) {
            var doc = document.implementation.createDocument("", "", null);
            if (doc.importNode) {
                node = doc.importNode(node, true);
            }
            doc.appendChild(node);
            data = serializer.serializeToString(doc);
        } else {
            data = serializer.serializeToString(node);
        }
    }
    return data;
}, createElementNS:function (uri, name) {
    var element;
    if (this.xmldom) {
        if (typeof uri == "string") {
            element = this.xmldom.createNode(1, name, uri);
        } else {
            element = this.xmldom.createNode(1, name, "");
        }
    } else {
        element = document.createElementNS(uri, name);
    }
    return element;
}, createTextNode:function (text) {
    var node;
    if (typeof text !== "string") {
        text = String(text);
    }
    if (this.xmldom) {
        node = this.xmldom.createTextNode(text);
    } else {
        node = document.createTextNode(text);
    }
    return node;
}, getElementsByTagNameNS:function (node, uri, name) {
    var elements = [];
    if (node.getElementsByTagNameNS) {
        elements = node.getElementsByTagNameNS(uri, name);
    } else {
        var allNodes = node.getElementsByTagName("*");
        var potentialNode, fullName;
        for (var i = 0, len = allNodes.length; i < len; ++i) {
            potentialNode = allNodes[i];
            fullName = (potentialNode.prefix) ? (potentialNode.prefix + ":" + name) : name;
            if ((name == "*") || (fullName == potentialNode.nodeName)) {
                if ((uri == "*") || (uri == potentialNode.namespaceURI)) {
                    elements.push(potentialNode);
                }
            }
        }
    }
    return elements;
}, getAttributeNodeNS:function (node, uri, name) {
    var attributeNode = null;
    if (node.getAttributeNodeNS) {
        attributeNode = node.getAttributeNodeNS(uri, name);
    } else {
        var attributes = node.attributes;
        var potentialNode, fullName;
        for (var i = 0, len = attributes.length; i < len; ++i) {
            potentialNode = attributes[i];
            if (potentialNode.namespaceURI == uri) {
                fullName = (potentialNode.prefix) ? (potentialNode.prefix + ":" + name) : name;
                if (fullName == potentialNode.nodeName) {
                    attributeNode = potentialNode;
                    break;
                }
            }
        }
    }
    return attributeNode;
}, getAttributeNS:function (node, uri, name) {
    var attributeValue = "";
    if (node.getAttributeNS) {
        attributeValue = node.getAttributeNS(uri, name) || "";
    } else {
        var attributeNode = this.getAttributeNodeNS(node, uri, name);
        if (attributeNode) {
            attributeValue = attributeNode.nodeValue;
        }
    }
    return attributeValue;
}, getChildValue:function (node, def) {
    var value = def || "";
    if (node) {
        for (var child = node.firstChild; child; child = child.nextSibling) {
            switch (child.nodeType) {
                case 3:
                case 4:
                    value += child.nodeValue;
            }
        }
    }
    return value;
}, concatChildValues:function (node, def) {
    var value = "";
    var child = node.firstChild;
    var childValue;
    while (child) {
        childValue = child.nodeValue;
        if (childValue) {
            value += childValue;
        }
        child = child.nextSibling;
    }
    if (value == "" && def != undefined) {
        value = def;
    }
    return value;
}, isSimpleContent:function (node) {
    var simple = true;
    for (var child = node.firstChild; child; child = child.nextSibling) {
        if (child.nodeType === 1) {
            simple = false;
            break;
        }
    }
    return simple;
}, contentType:function (node) {
    var simple = false, complex = false;
    var type = OpenLayers.Format.XML.CONTENT_TYPE.EMPTY;
    for (var child = node.firstChild; child; child = child.nextSibling) {
        switch (child.nodeType) {
            case 1:
                complex = true;
                break;
            case 8:
                break;
            default:
                simple = true;
        }
        if (complex && simple) {
            break;
        }
    }
    if (complex && simple) {
        type = OpenLayers.Format.XML.CONTENT_TYPE.MIXED;
    } else if (complex) {
        return OpenLayers.Format.XML.CONTENT_TYPE.COMPLEX;
    } else if (simple) {
        return OpenLayers.Format.XML.CONTENT_TYPE.SIMPLE;
    }
    return type;
}, hasAttributeNS:function (node, uri, name) {
    var found = false;
    if (node.hasAttributeNS) {
        found = node.hasAttributeNS(uri, name);
    } else {
        found = !!this.getAttributeNodeNS(node, uri, name);
    }
    return found;
}, setAttributeNS:function (node, uri, name, value) {
    if (node.setAttributeNS) {
        node.setAttributeNS(uri, name, value);
    } else {
        if (this.xmldom) {
            if (uri) {
                var attribute = node.ownerDocument.createNode(2, name, uri);
                attribute.nodeValue = value;
                node.setAttributeNode(attribute);
            } else {
                node.setAttribute(name, value);
            }
        } else {
            throw"setAttributeNS not implemented";
        }
    }
}, createElementNSPlus:function (name, options) {
    options = options || {};
    var uri = options.uri || this.namespaces[options.prefix];
    if (!uri) {
        var loc = name.indexOf(":");
        uri = this.namespaces[name.substring(0, loc)];
    }
    if (!uri) {
        uri = this.namespaces[this.defaultPrefix];
    }
    var node = this.createElementNS(uri, name);
    if (options.attributes) {
        this.setAttributes(node, options.attributes);
    }
    var value = options.value;
    if (value != null) {
        node.appendChild(this.createTextNode(value));
    }
    return node;
}, setAttributes:function (node, obj) {
    var value, uri;
    for (var name in obj) {
        if (obj[name] != null && obj[name].toString) {
            value = obj[name].toString();
            uri = this.namespaces[name.substring(0, name.indexOf(":"))] || null;
            this.setAttributeNS(node, uri, name, value);
        }
    }
}, readNode:function (node, obj) {
    if (!obj) {
        obj = {};
    }
    var group = this.readers[node.namespaceURI ? this.namespaceAlias[node.namespaceURI] : this.defaultPrefix];
    if (group) {
        var local = node.localName || node.nodeName.split(":").pop();
        var reader = group[local] || group["*"];
        if (reader) {
            reader.apply(this, [node, obj]);
        }
    }
    return obj;
}, readChildNodes:function (node, obj) {
    if (!obj) {
        obj = {};
    }
    var children = node.childNodes;
    var child;
    for (var i = 0, len = children.length; i < len; ++i) {
        child = children[i];
        if (child.nodeType == 1) {
            this.readNode(child, obj);
        }
    }
    return obj;
}, writeNode:function (name, obj, parent) {
    var prefix, local;
    var split = name.indexOf(":");
    if (split > 0) {
        prefix = name.substring(0, split);
        local = name.substring(split + 1);
    } else {
        if (parent) {
            prefix = this.namespaceAlias[parent.namespaceURI];
        } else {
            prefix = this.defaultPrefix;
        }
        local = name;
    }
    var child = this.writers[prefix][local].apply(this, [obj]);
    if (parent) {
        parent.appendChild(child);
    }
    return child;
}, getChildEl:function (node, name, uri) {
    return node && this.getThisOrNextEl(node.firstChild, name, uri);
}, getNextEl:function (node, name, uri) {
    return node && this.getThisOrNextEl(node.nextSibling, name, uri);
}, getThisOrNextEl:function (node, name, uri) {
    outer:for (var sibling = node; sibling; sibling = sibling.nextSibling) {
        switch (sibling.nodeType) {
            case 1:
                if ((!name || name === (sibling.localName || sibling.nodeName.split(":").pop())) && (!uri || uri === sibling.namespaceURI)) {
                    break outer;
                }
                sibling = null;
                break outer;
            case 3:
                if (/^\s*$/.test(sibling.nodeValue)) {
                    break;
                }
            case 4:
            case 6:
            case 12:
            case 10:
            case 11:
                sibling = null;
                break outer;
        }
    }
    return sibling || null;
}, lookupNamespaceURI:function (node, prefix) {
    var uri = null;
    if (node) {
        if (node.lookupNamespaceURI) {
            uri = node.lookupNamespaceURI(prefix);
        } else {
            outer:switch (node.nodeType) {
                case 1:
                    if (node.namespaceURI !== null && node.prefix === prefix) {
                        uri = node.namespaceURI;
                        break outer;
                    }
                    var len = node.attributes.length;
                    if (len) {
                        var attr;
                        for (var i = 0; i < len; ++i) {
                            attr = node.attributes[i];
                            if (attr.prefix === "xmlns" && attr.name === "xmlns:" + prefix) {
                                uri = attr.value || null;
                                break outer;
                            } else if (attr.name === "xmlns" && prefix === null) {
                                uri = attr.value || null;
                                break outer;
                            }
                        }
                    }
                    uri = this.lookupNamespaceURI(node.parentNode, prefix);
                    break outer;
                case 2:
                    uri = this.lookupNamespaceURI(node.ownerElement, prefix);
                    break outer;
                case 9:
                    uri = this.lookupNamespaceURI(node.documentElement, prefix);
                    break outer;
                case 6:
                case 12:
                case 10:
                case 11:
                    break outer;
                default:
                    uri = this.lookupNamespaceURI(node.parentNode, prefix);
                    break outer;
            }
        }
    }
    return uri;
}, CLASS_NAME:"OpenLayers.Format.XML"});
OpenLayers.Format.XML.CONTENT_TYPE = {EMPTY:0, SIMPLE:1, COMPLEX:2, MIXED:3};
OpenLayers.Format.XML.lookupNamespaceURI = OpenLayers.Function.bind(OpenLayers.Format.XML.prototype.lookupNamespaceURI, OpenLayers.Format.XML.prototype);
OpenLayers.Handler = OpenLayers.Class({id:null, control:null, map:null, keyMask:null, active:false, evt:null, initialize:function (control, callbacks, options) {
    OpenLayers.Util.extend(this, options);
    this.control = control;
    this.callbacks = callbacks;
    var map = this.map || control.map;
    if (map) {
        this.setMap(map);
    }
    this.id = OpenLayers.Util.createUniqueID(this.CLASS_NAME + "_");
}, setMap:function (map) {
    this.map = map;
}, checkModifiers:function (evt) {
    if (this.keyMask == null) {
        return true;
    }
    var keyModifiers = (evt.shiftKey ? OpenLayers.Handler.MOD_SHIFT : 0) | (evt.ctrlKey ? OpenLayers.Handler.MOD_CTRL : 0) | (evt.altKey ? OpenLayers.Handler.MOD_ALT : 0);
    return(keyModifiers == this.keyMask);
}, activate:function () {
    if (this.active) {
        return false;
    }
    var events = OpenLayers.Events.prototype.BROWSER_EVENTS;
    for (var i = 0, len = events.length; i < len; i++) {
        if (this[events[i]]) {
            this.register(events[i], this[events[i]]);
        }
    }
    this.active = true;
    return true;
}, deactivate:function () {
    if (!this.active) {
        return false;
    }
    var events = OpenLayers.Events.prototype.BROWSER_EVENTS;
    for (var i = 0, len = events.length; i < len; i++) {
        if (this[events[i]]) {
            this.unregister(events[i], this[events[i]]);
        }
    }
    this.active = false;
    return true;
}, callback:function (name, args) {
    if (name && this.callbacks[name]) {
        this.callbacks[name].apply(this.control, args);
    }
}, register:function (name, method) {
    this.map.events.registerPriority(name, this, method);
    this.map.events.registerPriority(name, this, this.setEvent);
}, unregister:function (name, method) {
    this.map.events.unregister(name, this, method);
    this.map.events.unregister(name, this, this.setEvent);
}, setEvent:function (evt) {
    this.evt = evt;
    return true;
}, destroy:function () {
    this.deactivate();
    this.control = this.map = null;
}, CLASS_NAME:"OpenLayers.Handler"});
OpenLayers.Handler.MOD_NONE = 0;
OpenLayers.Handler.MOD_SHIFT = 1;
OpenLayers.Handler.MOD_CTRL = 2;
OpenLayers.Handler.MOD_ALT = 4;
OpenLayers.Map = OpenLayers.Class({Z_INDEX_BASE:{BaseLayer:100, Overlay:325, Feature:725, Popup:750, Control:1000}, EVENT_TYPES:["preaddlayer", "addlayer", "removelayer", "changelayer", "movestart", "move", "moveend", "zoomend", "popupopen", "popupclose", "addmarker", "removemarker", "clearmarkers", "mouseover", "mouseout", "mousemove", "dragstart", "drag", "dragend", "changebaselayer"], id:null, fractionalZoom:false, events:null, allOverlays:false, div:null, dragging:false, size:null, viewPortDiv:null, layerContainerOrigin:null, layerContainerDiv:null, layers:null, controls:null, popups:null, baseLayer:null, center:null, resolution:null, zoom:0, panRatio:1.5, viewRequestID:0, tileSize:null, projection:"EPSG:4326", units:'degrees', resolutions:null, maxResolution:1.40625, minResolution:null, maxScale:null, minScale:null, maxExtent:null, minExtent:null, restrictedExtent:null, numZoomLevels:16, theme:null, displayProjection:null, fallThrough:true, panTween:null, eventListeners:null, panMethod:OpenLayers.Easing.Expo.easeOut, panDuration:50, paddingForPopups:null, initialize:function (div, options) {
    if (arguments.length === 1 && typeof div === "object") {
        options = div;
        div = options && options.div;
    }
    this.tileSize = new OpenLayers.Size(OpenLayers.Map.TILE_WIDTH, OpenLayers.Map.TILE_HEIGHT);
    this.maxExtent = new OpenLayers.Bounds(-180, -90, 180, 90);
    this.paddingForPopups = new OpenLayers.Bounds(15, 15, 15, 15);
    this.theme = OpenLayers._getScriptLocation() + 'theme/default/style.css';
    OpenLayers.Util.extend(this, options);
    this.layers = [];
    this.id = OpenLayers.Util.createUniqueID("OpenLayers.Map_");
    this.div = OpenLayers.Util.getElement(div);
    if (!this.div) {
        this.div = document.createElement("div");
        this.div.style.height = "1px";
        this.div.style.width = "1px";
    }
    OpenLayers.Element.addClass(this.div, 'olMap');
    var id = this.id + "_OpenLayers_ViewPort";
    this.viewPortDiv = OpenLayers.Util.createDiv(id, null, null, null, "relative", null, "hidden");
    this.viewPortDiv.style.width = "100%";
    this.viewPortDiv.style.height = "100%";
    this.viewPortDiv.className = "olMapViewport";
    this.div.appendChild(this.viewPortDiv);
    id = this.id + "_OpenLayers_Container";
    this.layerContainerDiv = OpenLayers.Util.createDiv(id);
    this.layerContainerDiv.style.zIndex = this.Z_INDEX_BASE['Popup'] - 1;
    this.viewPortDiv.appendChild(this.layerContainerDiv);
    this.events = new OpenLayers.Events(this, this.div, this.EVENT_TYPES, this.fallThrough, {includeXY:true});
    this.updateSize();
    if (this.eventListeners instanceof Object) {
        this.events.on(this.eventListeners);
    }
    this.events.register("movestart", this, this.updateSize);
    if (OpenLayers.String.contains(navigator.appName, "Microsoft")) {
        this.events.register("resize", this, this.updateSize);
    } else {
        this.updateSizeDestroy = OpenLayers.Function.bind(this.updateSize, this);
        OpenLayers.Event.observe(window, 'resize', this.updateSizeDestroy);
    }
    if (this.theme) {
        var addNode = true;
        var nodes = document.getElementsByTagName('link');
        for (var i = 0, len = nodes.length; i < len; ++i) {
            if (OpenLayers.Util.isEquivalentUrl(nodes.item(i).href, this.theme)) {
                addNode = false;
                break;
            }
        }
        if (addNode) {
            var cssNode = document.createElement('link');
            cssNode.setAttribute('rel', 'stylesheet');
            cssNode.setAttribute('type', 'text/css');
            cssNode.setAttribute('href', this.theme);
            document.getElementsByTagName('head')[0].appendChild(cssNode);
        }
    }
    if (this.controls == null) {
        if (OpenLayers.Control != null) {
            this.controls = [new OpenLayers.Control.Navigation(), new OpenLayers.Control.PanZoom(), new OpenLayers.Control.ArgParser(), new OpenLayers.Control.Attribution()];
        } else {
            this.controls = [];
        }
    }
    for (var i = 0, len = this.controls.length; i < len; i++) {
        this.addControlToMap(this.controls[i]);
    }
    this.popups = [];
    this.unloadDestroy = OpenLayers.Function.bind(this.destroy, this);
    OpenLayers.Event.observe(window, 'unload', this.unloadDestroy);
    if (options && options.layers) {
        this.addLayers(options.layers);
        if (options.center) {
            this.setCenter(options.center, options.zoom);
        }
    }
}, render:function (div) {
    this.div = OpenLayers.Util.getElement(div);
    OpenLayers.Element.addClass(this.div, 'olMap');
    this.events.attachToElement(this.div);
    this.viewPortDiv.parentNode.removeChild(this.viewPortDiv);
    this.div.appendChild(this.viewPortDiv);
    this.updateSize();
}, unloadDestroy:null, updateSizeDestroy:null, destroy:function () {
    if (!this.unloadDestroy) {
        return false;
    }
    if (this.panTween) {
        this.panTween.stop();
        this.panTween = null;
    }
    OpenLayers.Event.stopObserving(window, 'unload', this.unloadDestroy);
    this.unloadDestroy = null;
    if (this.updateSizeDestroy) {
        OpenLayers.Event.stopObserving(window, 'resize', this.updateSizeDestroy);
    } else {
        this.events.unregister("resize", this, this.updateSize);
    }
    this.paddingForPopups = null;
    if (this.controls != null) {
        for (var i = this.controls.length - 1; i >= 0; --i) {
            this.controls[i].destroy();
        }
        this.controls = null;
    }
    if (this.layers != null) {
        for (var i = this.layers.length - 1; i >= 0; --i) {
            this.layers[i].destroy(false);
        }
        this.layers = null;
    }
    if (this.viewPortDiv) {
        this.div.removeChild(this.viewPortDiv);
    }
    this.viewPortDiv = null;
    if (this.eventListeners) {
        this.events.un(this.eventListeners);
        this.eventListeners = null;
    }
    this.events.destroy();
    this.events = null;
}, setOptions:function (options) {
    OpenLayers.Util.extend(this, options);
}, getTileSize:function () {
    return this.tileSize;
}, getBy:function (array, property, match) {
    var test = (typeof match.test == "function");
    var found = OpenLayers.Array.filter(this[array], function (item) {
        return item[property] == match || (test && match.test(item[property]));
    });
    return found;
}, getLayersBy:function (property, match) {
    return this.getBy("layers", property, match);
}, getLayersByName:function (match) {
    return this.getLayersBy("name", match);
}, getLayersByClass:function (match) {
    return this.getLayersBy("CLASS_NAME", match);
}, getControlsBy:function (property, match) {
    return this.getBy("controls", property, match);
}, getControlsByClass:function (match) {
    return this.getControlsBy("CLASS_NAME", match);
}, getLayer:function (id) {
    var foundLayer = null;
    for (var i = 0, len = this.layers.length; i < len; i++) {
        var layer = this.layers[i];
        if (layer.id == id) {
            foundLayer = layer;
            break;
        }
    }
    return foundLayer;
}, setLayerZIndex:function (layer, zIdx) {
    layer.setZIndex(this.Z_INDEX_BASE[layer.isBaseLayer ? 'BaseLayer' : 'Overlay']
        + zIdx * 5);
}, resetLayersZIndex:function () {
    for (var i = 0, len = this.layers.length; i < len; i++) {
        var layer = this.layers[i];
        this.setLayerZIndex(layer, i);
    }
}, addLayer:function (layer) {
    for (var i = 0, len = this.layers.length; i < len; i++) {
        if (this.layers[i] == layer) {
            var msg = OpenLayers.i18n('layerAlreadyAdded', {'layerName':layer.name});
            OpenLayers.Console.warn(msg);
            return false;
        }
    }
    if (this.allOverlays) {
        layer.isBaseLayer = false;
    }
    if (this.events.triggerEvent("preaddlayer", {layer:layer}) === false) {
        return;
    }
    layer.div.className = "olLayerDiv";
    layer.div.style.overflow = "";
    this.setLayerZIndex(layer, this.layers.length);
    if (layer.isFixed) {
        this.viewPortDiv.appendChild(layer.div);
    } else {
        this.layerContainerDiv.appendChild(layer.div);
    }
    this.layers.push(layer);
    layer.setMap(this);
    if (layer.isBaseLayer || (this.allOverlays && !this.baseLayer)) {
        if (this.baseLayer == null) {
            this.setBaseLayer(layer);
        } else {
            layer.setVisibility(false);
        }
    } else {
        layer.redraw();
    }
    this.events.triggerEvent("addlayer", {layer:layer});
    layer.afterAdd();
}, addLayers:function (layers) {
    for (var i = 0, len = layers.length; i < len; i++) {
        this.addLayer(layers[i]);
    }
}, removeLayer:function (layer, setNewBaseLayer) {
    if (setNewBaseLayer == null) {
        setNewBaseLayer = true;
    }
    if (layer.isFixed) {
        this.viewPortDiv.removeChild(layer.div);
    } else {
        this.layerContainerDiv.removeChild(layer.div);
    }
    OpenLayers.Util.removeItem(this.layers, layer);
    layer.removeMap(this);
    layer.map = null;
    if (this.baseLayer == layer) {
        this.baseLayer = null;
        if (setNewBaseLayer) {
            for (var i = 0, len = this.layers.length; i < len; i++) {
                var iLayer = this.layers[i];
                if (iLayer.isBaseLayer || this.allOverlays) {
                    this.setBaseLayer(iLayer);
                    break;
                }
            }
        }
    }
    this.resetLayersZIndex();
    this.events.triggerEvent("removelayer", {layer:layer});
}, getNumLayers:function () {
    return this.layers.length;
}, getLayerIndex:function (layer) {
    return OpenLayers.Util.indexOf(this.layers, layer);
}, setLayerIndex:function (layer, idx) {
    var base = this.getLayerIndex(layer);
    if (idx < 0) {
        idx = 0;
    } else if (idx > this.layers.length) {
        idx = this.layers.length;
    }
    if (base != idx) {
        this.layers.splice(base, 1);
        this.layers.splice(idx, 0, layer);
        for (var i = 0, len = this.layers.length; i < len; i++) {
            this.setLayerZIndex(this.layers[i], i);
        }
        this.events.triggerEvent("changelayer", {layer:layer, property:"order"});
        if (this.allOverlays) {
            if (idx === 0) {
                this.setBaseLayer(layer);
            } else if (this.baseLayer !== this.layers[0]) {
                this.setBaseLayer(this.layers[0]);
            }
        }
    }
}, raiseLayer:function (layer, delta) {
    var idx = this.getLayerIndex(layer) + delta;
    this.setLayerIndex(layer, idx);
}, setBaseLayer:function (newBaseLayer) {
    if (newBaseLayer != this.baseLayer) {
        if (OpenLayers.Util.indexOf(this.layers, newBaseLayer) != -1) {
            var center = this.getCenter();
            var newResolution = OpenLayers.Util.getResolutionFromScale(this.getScale(), newBaseLayer.units);
            if (this.baseLayer != null && !this.allOverlays) {
                this.baseLayer.setVisibility(false);
            }
            this.baseLayer = newBaseLayer;
            this.viewRequestID++;
            if (!this.allOverlays || this.baseLayer.visibility) {
                this.baseLayer.setVisibility(true);
            }
            if (center != null) {
                var newZoom = this.getZoomForResolution(newResolution || this.resolution, true);
                this.setCenter(center, newZoom, false, true);
            }
            this.events.triggerEvent("changebaselayer", {layer:this.baseLayer});
        }
    }
}, addControl:function (control, px) {
    this.controls.push(control);
    this.addControlToMap(control, px);
}, addControls:function (controls, pixels) {
    var pxs = (arguments.length === 1) ? [] : pixels;
    for (var i = 0, len = controls.length; i < len; i++) {
        var ctrl = controls[i];
        var px = (pxs[i]) ? pxs[i] : null;
        this.addControl(ctrl, px);
    }
}, addControlToMap:function (control, px) {
    control.outsideViewport = (control.div != null);
    if (this.displayProjection && !control.displayProjection) {
        control.displayProjection = this.displayProjection;
    }
    control.setMap(this);
    var div = control.draw(px);
    if (div) {
        if (!control.outsideViewport) {
            div.style.zIndex = this.Z_INDEX_BASE['Control'] +
                this.controls.length;
            this.viewPortDiv.appendChild(div);
        }
    }
    if (control.autoActivate) {
        control.activate();
    }
}, getControl:function (id) {
    var returnControl = null;
    for (var i = 0, len = this.controls.length; i < len; i++) {
        var control = this.controls[i];
        if (control.id == id) {
            returnControl = control;
            break;
        }
    }
    return returnControl;
}, removeControl:function (control) {
    if ((control) && (control == this.getControl(control.id))) {
        if (control.div && (control.div.parentNode == this.viewPortDiv)) {
            this.viewPortDiv.removeChild(control.div);
        }
        OpenLayers.Util.removeItem(this.controls, control);
    }
}, addPopup:function (popup, exclusive) {
    if (exclusive) {
        for (var i = this.popups.length - 1; i >= 0; --i) {
            this.removePopup(this.popups[i]);
        }
    }
    popup.map = this;
    this.popups.push(popup);
    var popupDiv = popup.draw();
    if (popupDiv) {
        popupDiv.style.zIndex = this.Z_INDEX_BASE['Popup'] +
            this.popups.length;
        this.layerContainerDiv.appendChild(popupDiv);
    }
}, removePopup:function (popup) {
    OpenLayers.Util.removeItem(this.popups, popup);
    if (popup.div) {
        try {
            this.layerContainerDiv.removeChild(popup.div);
        }
        catch (e) {
        }
    }
    popup.map = null;
}, getSize:function () {
    var size = null;
    if (this.size != null) {
        size = this.size.clone();
    }
    return size;
}, updateSize:function () {
    var newSize = this.getCurrentSize();
    if (newSize && !isNaN(newSize.h) && !isNaN(newSize.w)) {
        this.events.clearMouseCache();
        var oldSize = this.getSize();
        if (oldSize == null) {
            this.size = oldSize = newSize;
        }
        if (!newSize.equals(oldSize)) {
            this.size = newSize;
            for (var i = 0, len = this.layers.length; i < len; i++) {
                this.layers[i].onMapResize();
            }
            var center = this.getCenter();
            if (this.baseLayer != null && center != null) {
                var zoom = this.getZoom();
                this.zoom = null;
                this.setCenter(center, zoom);
            }
        }
    }
}, getCurrentSize:function () {
    var size = new OpenLayers.Size(this.div.clientWidth, this.div.clientHeight);
    if (size.w == 0 && size.h == 0 || isNaN(size.w) && isNaN(size.h)) {
        size.w = this.div.offsetWidth;
        size.h = this.div.offsetHeight;
    }
    if (size.w == 0 && size.h == 0 || isNaN(size.w) && isNaN(size.h)) {
        size.w = parseInt(this.div.style.width);
        size.h = parseInt(this.div.style.height);
    }
    return size;
}, calculateBounds:function (center, resolution) {
    var extent = null;
    if (center == null) {
        center = this.getCenter();
    }
    if (resolution == null) {
        resolution = this.getResolution();
    }
    if ((center != null) && (resolution != null)) {
        var size = this.getSize();
        var w_deg = size.w * resolution;
        var h_deg = size.h * resolution;
        extent = new OpenLayers.Bounds(center.lon - w_deg / 2, center.lat - h_deg / 2, center.lon + w_deg / 2, center.lat + h_deg / 2);
    }
    return extent;
}, getCenter:function () {
    var center = null;
    if (this.center) {
        center = this.center.clone();
    }
    return center;
}, getZoom:function () {
    return this.zoom;
}, pan:function (dx, dy, options) {
    options = OpenLayers.Util.applyDefaults(options, {animate:true, dragging:false});
    var centerPx = this.getViewPortPxFromLonLat(this.getCenter());
    var newCenterPx = centerPx.add(dx, dy);
    if (!options.dragging || !newCenterPx.equals(centerPx)) {
        var newCenterLonLat = this.getLonLatFromViewPortPx(newCenterPx);
        if (options.animate) {
            this.panTo(newCenterLonLat);
        } else {
            this.setCenter(newCenterLonLat, null, options.dragging);
        }
    }
}, panTo:function (lonlat) {
    if (this.panMethod && this.getExtent().scale(this.panRatio).containsLonLat(lonlat)) {
        if (!this.panTween) {
            this.panTween = new OpenLayers.Tween(this.panMethod);
        }
        var center = this.getCenter();
        if (lonlat.lon == center.lon && lonlat.lat == center.lat) {
            return;
        }
        var from = {lon:center.lon, lat:center.lat};
        var to = {lon:lonlat.lon, lat:lonlat.lat};
        this.panTween.start(from, to, this.panDuration, {callbacks:{start:OpenLayers.Function.bind(function (lonlat) {
            this.events.triggerEvent("movestart");
        }, this), eachStep:OpenLayers.Function.bind(function (lonlat) {
            lonlat = new OpenLayers.LonLat(lonlat.lon, lonlat.lat);
            this.moveTo(lonlat, this.zoom, {'dragging':true, 'noEvent':true});
        }, this), done:OpenLayers.Function.bind(function (lonlat) {
            lonlat = new OpenLayers.LonLat(lonlat.lon, lonlat.lat);
            this.moveTo(lonlat, this.zoom, {'noEvent':true});
            this.events.triggerEvent("moveend");
        }, this)}});
    } else {
        this.setCenter(lonlat);
    }
}, setCenter:function (lonlat, zoom, dragging, forceZoomChange) {
    this.moveTo(lonlat, zoom, {'dragging':dragging, 'forceZoomChange':forceZoomChange, 'caller':'setCenter'});
}, moveTo:function (lonlat, zoom, options) {
    if (!options) {
        options = {};
    }
    if (zoom != null) {
        zoom = parseFloat(zoom);
        if (!this.fractionalZoom) {
            zoom = Math.round(zoom);
        }
    }
    var dragging = options.dragging;
    var forceZoomChange = options.forceZoomChange;
    var noEvent = options.noEvent;
    if (this.panTween && options.caller == "setCenter") {
        this.panTween.stop();
    }
    if (!this.center && !this.isValidLonLat(lonlat)) {
        lonlat = this.maxExtent.getCenterLonLat();
    }
    if (this.restrictedExtent != null) {
        if (lonlat == null) {
            lonlat = this.getCenter();
        }
        if (zoom == null) {
            zoom = this.getZoom();
        }
        var resolution = this.getResolutionForZoom(zoom);
        var extent = this.calculateBounds(lonlat, resolution);
        if (!this.restrictedExtent.containsBounds(extent)) {
            var maxCenter = this.restrictedExtent.getCenterLonLat();
            if (extent.getWidth() > this.restrictedExtent.getWidth()) {
                lonlat = new OpenLayers.LonLat(maxCenter.lon, lonlat.lat);
            } else if (extent.left < this.restrictedExtent.left) {
                lonlat = lonlat.add(this.restrictedExtent.left -
                    extent.left, 0);
            } else if (extent.right > this.restrictedExtent.right) {
                lonlat = lonlat.add(this.restrictedExtent.right -
                    extent.right, 0);
            }
            if (extent.getHeight() > this.restrictedExtent.getHeight()) {
                lonlat = new OpenLayers.LonLat(lonlat.lon, maxCenter.lat);
            } else if (extent.bottom < this.restrictedExtent.bottom) {
                lonlat = lonlat.add(0, this.restrictedExtent.bottom -
                    extent.bottom);
            }
            else if (extent.top > this.restrictedExtent.top) {
                lonlat = lonlat.add(0, this.restrictedExtent.top -
                    extent.top);
            }
        }
    }
    var zoomChanged = forceZoomChange || ((this.isValidZoomLevel(zoom)) && (zoom != this.getZoom()));
    var centerChanged = (this.isValidLonLat(lonlat)) && (!lonlat.equals(this.center));
    if (zoomChanged || centerChanged || !dragging) {
        if (!this.dragging && !noEvent) {
            this.events.triggerEvent("movestart");
        }
        if (centerChanged) {
            if ((!zoomChanged) && (this.center)) {
                this.centerLayerContainer(lonlat);
            }
            this.center = lonlat.clone();
        }
        if ((zoomChanged) || (this.layerContainerOrigin == null)) {
            this.layerContainerOrigin = this.center.clone();
            this.layerContainerDiv.style.left = "0px";
            this.layerContainerDiv.style.top = "0px";
        }
        if (zoomChanged) {
            this.zoom = zoom;
            this.resolution = this.getResolutionForZoom(zoom);
            this.viewRequestID++;
        }
        var bounds = this.getExtent();
        if (this.baseLayer.visibility) {
            this.baseLayer.moveTo(bounds, zoomChanged, dragging);
            if (dragging) {
                this.baseLayer.events.triggerEvent("move");
            } else {
                this.baseLayer.events.triggerEvent("moveend", {"zoomChanged":zoomChanged});
            }
        }
        bounds = this.baseLayer.getExtent();
        for (var i = 0, len = this.layers.length; i < len; i++) {
            var layer = this.layers[i];
            if (layer !== this.baseLayer && !layer.isBaseLayer) {
                var inRange = layer.calculateInRange();
                if (layer.inRange != inRange) {
                    layer.inRange = inRange;
                    if (!inRange) {
                        layer.display(false);
                    }
                    this.events.triggerEvent("changelayer", {layer:layer, property:"visibility"});
                }
                if (inRange && layer.visibility) {
                    layer.moveTo(bounds, zoomChanged, dragging);
                    if (dragging) {
                        layer.events.triggerEvent("move");
                    } else {
                        layer.events.triggerEvent("moveend", {"zoomChanged":zoomChanged});
                    }
                }
            }
        }
        if (zoomChanged) {
            for (var i = 0, len = this.popups.length; i < len; i++) {
                this.popups[i].updatePosition();
            }
        }
        this.events.triggerEvent("move");
        if (zoomChanged) {
            this.events.triggerEvent("zoomend");
        }
    }
    if (!dragging && !noEvent) {
        this.events.triggerEvent("moveend");
    }
    this.dragging = !!dragging;
}, centerLayerContainer:function (lonlat) {
    var originPx = this.getViewPortPxFromLonLat(this.layerContainerOrigin);
    var newPx = this.getViewPortPxFromLonLat(lonlat);
    if ((originPx != null) && (newPx != null)) {
        this.layerContainerDiv.style.left = Math.round(originPx.x - newPx.x) + "px";
        this.layerContainerDiv.style.top = Math.round(originPx.y - newPx.y) + "px";
    }
}, isValidZoomLevel:function (zoomLevel) {
    return((zoomLevel != null) && (zoomLevel >= 0) && (zoomLevel < this.getNumZoomLevels()));
}, isValidLonLat:function (lonlat) {
    var valid = false;
    if (lonlat != null) {
        var maxExtent = this.getMaxExtent();
        valid = maxExtent.containsLonLat(lonlat);
    }
    return valid;
}, getProjection:function () {
    var projection = this.getProjectionObject();
    return projection ? projection.getCode() : null;
}, getProjectionObject:function () {
    var projection = null;
    if (this.baseLayer != null) {
        projection = this.baseLayer.projection;
    }
    return projection;
}, getMaxResolution:function () {
    var maxResolution = null;
    if (this.baseLayer != null) {
        maxResolution = this.baseLayer.maxResolution;
    }
    return maxResolution;
}, getMaxExtent:function (options) {
    var maxExtent = null;
    if (options && options.restricted && this.restrictedExtent) {
        maxExtent = this.restrictedExtent;
    } else if (this.baseLayer != null) {
        maxExtent = this.baseLayer.maxExtent;
    }
    return maxExtent;
}, getNumZoomLevels:function () {
    var numZoomLevels = null;
    if (this.baseLayer != null) {
        numZoomLevels = this.baseLayer.numZoomLevels;
    }
    return numZoomLevels;
}, getExtent:function () {
    var extent = null;
    if (this.baseLayer != null) {
        extent = this.baseLayer.getExtent();
    }
    return extent;
}, getResolution:function () {
    var resolution = null;
    if (this.baseLayer != null) {
        resolution = this.baseLayer.getResolution();
    } else if (this.allOverlays === true && this.layers.length > 0) {
        resolution = this.layers[0].getResolution();
    }
    return resolution;
}, getUnits:function () {
    var units = null;
    if (this.baseLayer != null) {
        units = this.baseLayer.units;
    }
    return units;
}, getScale:function () {
    var scale = null;
    if (this.baseLayer != null) {
        var res = this.getResolution();
        var units = this.baseLayer.units;
        scale = OpenLayers.Util.getScaleFromResolution(res, units);
    }
    return scale;
}, getZoomForExtent:function (bounds, closest) {
    var zoom = null;
    if (this.baseLayer != null) {
        zoom = this.baseLayer.getZoomForExtent(bounds, closest);
    }
    return zoom;
}, getResolutionForZoom:function (zoom) {
    var resolution = null;
    if (this.baseLayer) {
        resolution = this.baseLayer.getResolutionForZoom(zoom);
    }
    return resolution;
}, getZoomForResolution:function (resolution, closest) {
    var zoom = null;
    if (this.baseLayer != null) {
        zoom = this.baseLayer.getZoomForResolution(resolution, closest);
    }
    return zoom;
}, zoomTo:function (zoom) {
    if (this.isValidZoomLevel(zoom)) {
        this.setCenter(null, zoom);
    }
}, zoomIn:function () {
    this.zoomTo(this.getZoom() + 1);
}, zoomOut:function () {
    this.zoomTo(this.getZoom() - 1);
}, zoomToExtent:function (bounds, closest) {
    var center = bounds.getCenterLonLat();
    if (this.baseLayer.wrapDateLine) {
        var maxExtent = this.getMaxExtent();
        bounds = bounds.clone();
        while (bounds.right < bounds.left) {
            bounds.right += maxExtent.getWidth();
        }
        center = bounds.getCenterLonLat().wrapDateLine(maxExtent);
    }
    this.setCenter(center, this.getZoomForExtent(bounds, closest));
}, zoomToMaxExtent:function (options) {
    var restricted = (options) ? options.restricted : true;
    var maxExtent = this.getMaxExtent({'restricted':restricted});
    this.zoomToExtent(maxExtent);
}, zoomToScale:function (scale, closest) {
    var res = OpenLayers.Util.getResolutionFromScale(scale, this.baseLayer.units);
    var size = this.getSize();
    var w_deg = size.w * res;
    var h_deg = size.h * res;
    var center = this.getCenter();
    var extent = new OpenLayers.Bounds(center.lon - w_deg / 2, center.lat - h_deg / 2, center.lon + w_deg / 2, center.lat + h_deg / 2);
    this.zoomToExtent(extent, closest);
}, getLonLatFromViewPortPx:function (viewPortPx) {
    var lonlat = null;
    if (this.baseLayer != null) {
        lonlat = this.baseLayer.getLonLatFromViewPortPx(viewPortPx);
    }
    return lonlat;
}, getViewPortPxFromLonLat:function (lonlat) {
    var px = null;
    if (this.baseLayer != null) {
        px = this.baseLayer.getViewPortPxFromLonLat(lonlat);
    }
    return px;
}, getLonLatFromPixel:function (px) {
    return this.getLonLatFromViewPortPx(px);
}, getPixelFromLonLat:function (lonlat) {
    var px = this.getViewPortPxFromLonLat(lonlat);
    px.x = Math.round(px.x);
    px.y = Math.round(px.y);
    return px;
}, getGeodesicPixelSize:function (px) {
    var lonlat = px ? this.getLonLatFromPixel(px) : (this.getCenter() || new OpenLayers.LonLat(0, 0));
    var res = this.getResolution();
    var left = lonlat.add(-res / 2, 0);
    var right = lonlat.add(res / 2, 0);
    var bottom = lonlat.add(0, -res / 2);
    var top = lonlat.add(0, res / 2);
    var dest = new OpenLayers.Projection("EPSG:4326");
    var source = this.getProjectionObject() || dest;
    if (!source.equals(dest)) {
        left.transform(source, dest);
        right.transform(source, dest);
        bottom.transform(source, dest);
        top.transform(source, dest);
    }
    return new OpenLayers.Size(OpenLayers.Util.distVincenty(left, right), OpenLayers.Util.distVincenty(bottom, top));
}, getViewPortPxFromLayerPx:function (layerPx) {
    var viewPortPx = null;
    if (layerPx != null) {
        var dX = parseInt(this.layerContainerDiv.style.left);
        var dY = parseInt(this.layerContainerDiv.style.top);
        viewPortPx = layerPx.add(dX, dY);
    }
    return viewPortPx;
}, getLayerPxFromViewPortPx:function (viewPortPx) {
    var layerPx = null;
    if (viewPortPx != null) {
        var dX = -parseInt(this.layerContainerDiv.style.left);
        var dY = -parseInt(this.layerContainerDiv.style.top);
        layerPx = viewPortPx.add(dX, dY);
        if (isNaN(layerPx.x) || isNaN(layerPx.y)) {
            layerPx = null;
        }
    }
    return layerPx;
}, getLonLatFromLayerPx:function (px) {
    px = this.getViewPortPxFromLayerPx(px);
    return this.getLonLatFromViewPortPx(px);
}, getLayerPxFromLonLat:function (lonlat) {
    var px = this.getPixelFromLonLat(lonlat);
    return this.getLayerPxFromViewPortPx(px);
}, CLASS_NAME:"OpenLayers.Map"});
OpenLayers.Map.TILE_WIDTH = 256;
OpenLayers.Map.TILE_HEIGHT = 256;
OpenLayers.Marker = OpenLayers.Class({icon:null, lonlat:null, events:null, map:null, initialize:function (lonlat, icon) {
    this.lonlat = lonlat;
    var newIcon = (icon) ? icon : OpenLayers.Marker.defaultIcon();
    if (this.icon == null) {
        this.icon = newIcon;
    } else {
        this.icon.url = newIcon.url;
        this.icon.size = newIcon.size;
        this.icon.offset = newIcon.offset;
        this.icon.calculateOffset = newIcon.calculateOffset;
    }
    this.events = new OpenLayers.Events(this, this.icon.imageDiv, null);
}, destroy:function () {
    this.erase();
    this.map = null;
    this.events.destroy();
    this.events = null;
    if (this.icon != null) {
        this.icon.destroy();
        this.icon = null;
    }
}, draw:function (px) {
    return this.icon.draw(px);
}, erase:function () {
    if (this.icon != null) {
        this.icon.erase();
    }
}, moveTo:function (px) {
    if ((px != null) && (this.icon != null)) {
        this.icon.moveTo(px);
    }
    this.lonlat = this.map.getLonLatFromLayerPx(px);
}, isDrawn:function () {
    var isDrawn = (this.icon && this.icon.isDrawn());
    return isDrawn;
}, onScreen:function () {
    var onScreen = false;
    if (this.map) {
        var screenBounds = this.map.getExtent();
        onScreen = screenBounds.containsLonLat(this.lonlat);
    }
    return onScreen;
}, inflate:function (inflate) {
    if (this.icon) {
        var newSize = new OpenLayers.Size(this.icon.size.w * inflate, this.icon.size.h * inflate);
        this.icon.setSize(newSize);
    }
}, setOpacity:function (opacity) {
    this.icon.setOpacity(opacity);
}, setUrl:function (url) {
    this.icon.setUrl(url);
}, display:function (display) {
    this.icon.display(display);
}, CLASS_NAME:"OpenLayers.Marker"});
OpenLayers.Marker.defaultIcon = function () {
    var url = OpenLayers.Util.getImagesLocation() + "marker.png";
    var size = new OpenLayers.Size(21, 25);
    var calculateOffset = function (size) {
        return new OpenLayers.Pixel(-(size.w / 2), -size.h);
    };
    return new OpenLayers.Icon(url, size, null, calculateOffset);
};
OpenLayers.Tile.Image = OpenLayers.Class(OpenLayers.Tile, {url:null, imgDiv:null, frame:null, layerAlphaHack:null, isBackBuffer:false, lastRatio:1, isFirstDraw:true, backBufferTile:null, initialize:function (layer, position, bounds, url, size) {
    OpenLayers.Tile.prototype.initialize.apply(this, arguments);
    this.url = url;
    this.frame = document.createElement('div');
    this.frame.style.overflow = 'hidden';
    this.frame.style.position = 'absolute';
    this.layerAlphaHack = this.layer.alpha && OpenLayers.Util.alphaHack();
}, destroy:function () {
    if (this.imgDiv != null) {
        if (this.layerAlphaHack) {
            OpenLayers.Event.stopObservingElement(this.imgDiv.childNodes[0]);
        }
        OpenLayers.Event.stopObservingElement(this.imgDiv);
        if (this.imgDiv.parentNode == this.frame) {
            this.frame.removeChild(this.imgDiv);
            this.imgDiv.map = null;
        }
        this.imgDiv.urls = null;
        this.imgDiv.src = OpenLayers.Util.getImagesLocation() + "blank.gif";
    }
    this.imgDiv = null;
    if ((this.frame != null) && (this.frame.parentNode == this.layer.div)) {
        this.layer.div.removeChild(this.frame);
    }
    this.frame = null;
    if (this.backBufferTile) {
        this.backBufferTile.destroy();
        this.backBufferTile = null;
    }
    this.layer.events.unregister("loadend", this, this.resetBackBuffer);
    OpenLayers.Tile.prototype.destroy.apply(this, arguments);
}, clone:function (obj) {
    if (obj == null) {
        obj = new OpenLayers.Tile.Image(this.layer, this.position, this.bounds, this.url, this.size);
    }
    obj = OpenLayers.Tile.prototype.clone.apply(this, [obj]);
    obj.imgDiv = null;
    return obj;
}, draw:function () {
    if (this.layer != this.layer.map.baseLayer && this.layer.reproject) {
        this.bounds = this.getBoundsFromBaseLayer(this.position);
    }
    var drawTile = OpenLayers.Tile.prototype.draw.apply(this, arguments);
    if ((OpenLayers.Util.indexOf(this.layer.SUPPORTED_TRANSITIONS, this.layer.transitionEffect) != -1) || this.layer.singleTile) {
        if (drawTile) {
            if (!this.backBufferTile) {
                this.backBufferTile = this.clone();
                this.backBufferTile.hide();
                this.backBufferTile.isBackBuffer = true;
                this.events.register('loadend', this, this.resetBackBuffer);
                this.layer.events.register("loadend", this, this.resetBackBuffer);
            }
            this.startTransition();
        } else {
            if (this.backBufferTile) {
                this.backBufferTile.clear();
            }
        }
    } else {
        if (drawTile && this.isFirstDraw) {
            this.events.register('loadend', this, this.showTile);
            this.isFirstDraw = false;
        }
    }
    if (!drawTile) {
        return false;
    }
    if (this.isLoading) {
        this.events.triggerEvent("reload");
    } else {
        this.isLoading = true;
        this.events.triggerEvent("loadstart");
    }
    return this.renderTile();
}, resetBackBuffer:function () {
    this.showTile();
    if (this.backBufferTile && (this.isFirstDraw || !this.layer.numLoadingTiles)) {
        this.isFirstDraw = false;
        var maxExtent = this.layer.maxExtent;
        var withinMaxExtent = (maxExtent && this.bounds.intersectsBounds(maxExtent, false));
        if (withinMaxExtent) {
            this.backBufferTile.position = this.position;
            this.backBufferTile.bounds = this.bounds;
            this.backBufferTile.size = this.size;
            this.backBufferTile.imageSize = this.layer.getImageSize(this.bounds) || this.size;
            this.backBufferTile.imageOffset = this.layer.imageOffset;
            this.backBufferTile.resolution = this.layer.getResolution();
            this.backBufferTile.renderTile();
        }
        this.backBufferTile.hide();
    }
}, renderTile:function () {
    if (this.imgDiv == null) {
        this.initImgDiv();
    }
    this.imgDiv.viewRequestID = this.layer.map.viewRequestID;
    if (this.layer.async) {
        this.layer.getURLasync(this.bounds, this, "url", this.positionImage);
    } else {
        if (this.layer.url instanceof Array) {
            this.imgDiv.urls = this.layer.url.slice();
        }
        this.url = this.layer.getURL(this.bounds);
        this.positionImage();
    }
    return true;
}, positionImage:function () {
    if (this.layer === null) {
        return;
    }
    OpenLayers.Util.modifyDOMElement(this.frame, null, this.position, this.size);
    var imageSize = this.layer.getImageSize(this.bounds);
    if (this.layerAlphaHack) {
        OpenLayers.Util.modifyAlphaImageDiv(this.imgDiv, null, null, imageSize, this.url);
    } else {
        OpenLayers.Util.modifyDOMElement(this.imgDiv, null, null, imageSize);
        this.imgDiv.src = this.url;
    }
}, clear:function () {
    if (this.imgDiv) {
        this.hide();
        if (OpenLayers.Tile.Image.useBlankTile) {
            this.imgDiv.src = OpenLayers.Util.getImagesLocation() + "blank.gif";
        }
    }
}, initImgDiv:function () {
    var offset = this.layer.imageOffset;
    var size = this.layer.getImageSize(this.bounds);
    if (this.layerAlphaHack) {
        this.imgDiv = OpenLayers.Util.createAlphaImageDiv(null, offset, size, null, "relative", null, null, null, true);
    } else {
        this.imgDiv = OpenLayers.Util.createImage(null, offset, size, null, "relative", null, null, true);
    }
    this.imgDiv.className = 'olTileImage';
    this.frame.style.zIndex = this.isBackBuffer ? 0 : 1;
    this.frame.appendChild(this.imgDiv);
    this.layer.div.appendChild(this.frame);
    if (this.layer.opacity != null) {
        OpenLayers.Util.modifyDOMElement(this.imgDiv, null, null, null, null, null, null, this.layer.opacity);
    }
    this.imgDiv.map = this.layer.map;
    var onload = function () {
        if (this.isLoading) {
            this.isLoading = false;
            this.events.triggerEvent("loadend");
        }
    };
    if (this.layerAlphaHack) {
        OpenLayers.Event.observe(this.imgDiv.childNodes[0], 'load', OpenLayers.Function.bind(onload, this));
    } else {
        OpenLayers.Event.observe(this.imgDiv, 'load', OpenLayers.Function.bind(onload, this));
    }
    var onerror = function () {
        if (this.imgDiv._attempts > OpenLayers.IMAGE_RELOAD_ATTEMPTS) {
            onload.call(this);
        }
    };
    OpenLayers.Event.observe(this.imgDiv, "error", OpenLayers.Function.bind(onerror, this));
}, checkImgURL:function () {
    if (this.layer) {
        var loaded = this.layerAlphaHack ? this.imgDiv.firstChild.src : this.imgDiv.src;
        if (!OpenLayers.Util.isEquivalentUrl(loaded, this.url)) {
            this.hide();
        }
    }
}, startTransition:function () {
    if (!this.backBufferTile || !this.backBufferTile.imgDiv) {
        return;
    }
    var ratio = 1;
    if (this.backBufferTile.resolution) {
        ratio = this.backBufferTile.resolution / this.layer.getResolution();
    }
    if (ratio != this.lastRatio) {
        if (this.layer.transitionEffect == 'resize') {
            var upperLeft = new OpenLayers.LonLat(this.backBufferTile.bounds.left, this.backBufferTile.bounds.top);
            var size = new OpenLayers.Size(this.backBufferTile.size.w * ratio, this.backBufferTile.size.h * ratio);
            var px = this.layer.map.getLayerPxFromLonLat(upperLeft);
            OpenLayers.Util.modifyDOMElement(this.backBufferTile.frame, null, px, size);
            var imageSize = this.backBufferTile.imageSize;
            imageSize = new OpenLayers.Size(imageSize.w * ratio, imageSize.h * ratio);
            var imageOffset = this.backBufferTile.imageOffset;
            if (imageOffset) {
                imageOffset = new OpenLayers.Pixel(imageOffset.x * ratio, imageOffset.y * ratio);
            }
            OpenLayers.Util.modifyDOMElement(this.backBufferTile.imgDiv, null, imageOffset, imageSize);
            this.backBufferTile.show();
        }
    } else {
        if (this.layer.singleTile) {
            this.backBufferTile.show();
        } else {
            this.backBufferTile.hide();
        }
    }
    this.lastRatio = ratio;
}, show:function () {
    this.frame.style.display = '';
    if (OpenLayers.Util.indexOf(this.layer.SUPPORTED_TRANSITIONS, this.layer.transitionEffect) != -1) {
        if (navigator.userAgent.toLowerCase().indexOf("gecko") != -1) {
            this.frame.scrollLeft = this.frame.scrollLeft;
        }
    }
}, hide:function () {
    this.frame.style.display = 'none';
}, CLASS_NAME:"OpenLayers.Tile.Image"});
OpenLayers.Tile.Image.useBlankTile = (OpenLayers.Util.getBrowserName() == "safari" || OpenLayers.Util.getBrowserName() == "opera");
OpenLayers.Feature = OpenLayers.Class({layer:null, id:null, lonlat:null, data:null, marker:null, popupClass:OpenLayers.Popup.AnchoredBubble, popup:null, initialize:function (layer, lonlat, data) {
    this.layer = layer;
    this.lonlat = lonlat;
    this.data = (data != null) ? data : {};
    this.id = OpenLayers.Util.createUniqueID(this.CLASS_NAME + "_");
}, destroy:function () {
    if ((this.layer != null) && (this.layer.map != null)) {
        if (this.popup != null) {
            this.layer.map.removePopup(this.popup);
        }
    }
    if (this.layer != null && this.marker != null) {
        this.layer.removeMarker(this.marker);
    }
    this.layer = null;
    this.id = null;
    this.lonlat = null;
    this.data = null;
    if (this.marker != null) {
        this.destroyMarker(this.marker);
        this.marker = null;
    }
    if (this.popup != null) {
        this.destroyPopup(this.popup);
        this.popup = null;
    }
}, onScreen:function () {
    var onScreen = false;
    if ((this.layer != null) && (this.layer.map != null)) {
        var screenBounds = this.layer.map.getExtent();
        onScreen = screenBounds.containsLonLat(this.lonlat);
    }
    return onScreen;
}, createMarker:function () {
    if (this.lonlat != null) {
        this.marker = new OpenLayers.Marker(this.lonlat, this.data.icon);
    }
    return this.marker;
}, destroyMarker:function () {
    this.marker.destroy();
}, createPopup:function (closeBox) {
    if (this.lonlat != null) {
        var id = this.id + "_popup";
        var anchor = (this.marker) ? this.marker.icon : null;
        if (!this.popup) {
            this.popup = new this.popupClass(id, this.lonlat, this.data.popupSize, this.data.popupContentHTML, anchor, closeBox);
        }
        if (this.data.overflow != null) {
            this.popup.contentDiv.style.overflow = this.data.overflow;
        }
        this.popup.feature = this;
    }
    return this.popup;
}, destroyPopup:function () {
    if (this.popup) {
        this.popup.feature = null;
        this.popup.destroy();
        this.popup = null;
    }
}, CLASS_NAME:"OpenLayers.Feature"});
OpenLayers.Handler.Click = OpenLayers.Class(OpenLayers.Handler, {delay:300, single:true, 'double':false, pixelTolerance:0, stopSingle:false, stopDouble:false, timerId:null, down:null, rightclickTimerId:null, initialize:function (control, callbacks, options) {
    OpenLayers.Handler.prototype.initialize.apply(this, arguments);
    if (this.pixelTolerance != null) {
        this.mousedown = function (evt) {
            this.down = evt.xy;
            return true;
        };
    }
}, mousedown:null, mouseup:function (evt) {
    var propagate = true;
    if (this.checkModifiers(evt) && this.control.handleRightClicks && OpenLayers.Event.isRightClick(evt)) {
        propagate = this.rightclick(evt);
    }
    return propagate;
}, rightclick:function (evt) {
    if (this.passesTolerance(evt)) {
        if (this.rightclickTimerId != null) {
            this.clearTimer();
            this.callback('dblrightclick', [evt]);
            return!this.stopDouble;
        } else {
            var clickEvent = this['double'] ? OpenLayers.Util.extend({}, evt) : this.callback('rightclick', [evt]);
            var delayedRightCall = OpenLayers.Function.bind(this.delayedRightCall, this, clickEvent);
            this.rightclickTimerId = window.setTimeout(delayedRightCall, this.delay);
        }
    }
    return!this.stopSingle;
}, delayedRightCall:function (evt) {
    this.rightclickTimerId = null;
    if (evt) {
        this.callback('rightclick', [evt]);
    }
    return!this.stopSingle;
}, dblclick:function (evt) {
    if (this.passesTolerance(evt)) {
        if (this["double"]) {
            this.callback('dblclick', [evt]);
        }
        this.clearTimer();
    }
    return!this.stopDouble;
}, click:function (evt) {
    if (this.passesTolerance(evt)) {
        if (this.timerId != null) {
            this.clearTimer();
        } else {
            var clickEvent = this.single ? OpenLayers.Util.extend({}, evt) : null;
            this.timerId = window.setTimeout(OpenLayers.Function.bind(this.delayedCall, this, clickEvent), this.delay);
        }
    }
    return!this.stopSingle;
}, passesTolerance:function (evt) {
    var passes = true;
    if (this.pixelTolerance != null && this.down) {
        var dpx = Math.sqrt(Math.pow(this.down.x - evt.xy.x, 2) +
            Math.pow(this.down.y - evt.xy.y, 2));
        if (dpx > this.pixelTolerance) {
            passes = false;
        }
    }
    return passes;
}, clearTimer:function () {
    if (this.timerId != null) {
        window.clearTimeout(this.timerId);
        this.timerId = null;
    }
    if (this.rightclickTimerId != null) {
        window.clearTimeout(this.rightclickTimerId);
        this.rightclickTimerId = null;
    }
}, delayedCall:function (evt) {
    this.timerId = null;
    if (evt) {
        this.callback('click', [evt]);
    }
}, deactivate:function () {
    var deactivated = false;
    if (OpenLayers.Handler.prototype.deactivate.apply(this, arguments)) {
        this.clearTimer();
        this.down = null;
        deactivated = true;
    }
    return deactivated;
}, CLASS_NAME:"OpenLayers.Handler.Click"});
OpenLayers.Handler.Drag = OpenLayers.Class(OpenLayers.Handler, {started:false, stopDown:true, dragging:false, last:null, start:null, oldOnselectstart:null, interval:0, timeoutId:null, documentDrag:false, documentEvents:null, initialize:function (control, callbacks, options) {
    OpenLayers.Handler.prototype.initialize.apply(this, arguments);
}, down:function (evt) {
}, move:function (evt) {
}, up:function (evt) {
}, out:function (evt) {
}, mousedown:function (evt) {
    var propagate = true;
    this.dragging = false;
    if (this.checkModifiers(evt) && OpenLayers.Event.isLeftClick(evt)) {
        this.started = true;
        this.start = evt.xy;
        this.last = evt.xy;
        OpenLayers.Element.addClass(this.map.viewPortDiv, "olDragDown");
        this.down(evt);
        this.callback("down", [evt.xy]);
        OpenLayers.Event.stop(evt);
        if (!this.oldOnselectstart) {
            this.oldOnselectstart = (document.onselectstart) ? document.onselectstart : OpenLayers.Function.True;
        }
        document.onselectstart = OpenLayers.Function.False;
        propagate = !this.stopDown;
    } else {
        this.started = false;
        this.start = null;
        this.last = null;
    }
    return propagate;
}, mousemove:function (evt) {
    if (this.started && !this.timeoutId && (evt.xy.x != this.last.x || evt.xy.y != this.last.y)) {
        if (this.documentDrag === true && this.documentEvents) {
            if (evt.element === document) {
                this.adjustXY(evt);
                this.setEvent(evt);
            } else {
                this.destroyDocumentEvents();
            }
        }
        if (this.interval > 0) {
            this.timeoutId = setTimeout(OpenLayers.Function.bind(this.removeTimeout, this), this.interval);
        }
        this.dragging = true;
        this.move(evt);
        this.callback("move", [evt.xy]);
        if (!this.oldOnselectstart) {
            this.oldOnselectstart = document.onselectstart;
            document.onselectstart = OpenLayers.Function.False;
        }
        this.last = this.evt.xy;
    }
    return true;
}, removeTimeout:function () {
    this.timeoutId = null;
}, mouseup:function (evt) {
    if (this.started) {
        if (this.documentDrag === true && this.documentEvents) {
            this.adjustXY(evt);
            this.destroyDocumentEvents();
        }
        var dragged = (this.start != this.last);
        this.started = false;
        this.dragging = false;
        OpenLayers.Element.removeClass(this.map.viewPortDiv, "olDragDown");
        this.up(evt);
        this.callback("up", [evt.xy]);
        if (dragged) {
            this.callback("done", [evt.xy]);
        }
        document.onselectstart = this.oldOnselectstart;
    }
    return true;
}, mouseout:function (evt) {
    if (this.started && OpenLayers.Util.mouseLeft(evt, this.map.div)) {
        if (this.documentDrag === true) {
            this.documentEvents = new OpenLayers.Events(this, document, null, null, {includeXY:true});
            this.documentEvents.on({mousemove:this.mousemove, mouseup:this.mouseup});
            OpenLayers.Element.addClass(document.body, "olDragDown");
        } else {
            var dragged = (this.start != this.last);
            this.started = false;
            this.dragging = false;
            OpenLayers.Element.removeClass(this.map.viewPortDiv, "olDragDown");
            this.out(evt);
            this.callback("out", []);
            if (dragged) {
                this.callback("done", [evt.xy]);
            }
            if (document.onselectstart) {
                document.onselectstart = this.oldOnselectstart;
            }
        }
    }
    return true;
}, click:function (evt) {
    return(this.start == this.last);
}, activate:function () {
    var activated = false;
    if (OpenLayers.Handler.prototype.activate.apply(this, arguments)) {
        this.dragging = false;
        activated = true;
    }
    return activated;
}, deactivate:function () {
    var deactivated = false;
    if (OpenLayers.Handler.prototype.deactivate.apply(this, arguments)) {
        this.started = false;
        this.dragging = false;
        this.start = null;
        this.last = null;
        deactivated = true;
        OpenLayers.Element.removeClass(this.map.viewPortDiv, "olDragDown");
    }
    return deactivated;
}, adjustXY:function (evt) {
    var pos = OpenLayers.Util.pagePosition(this.map.div);
    evt.xy.x -= pos[0];
    evt.xy.y -= pos[1];
}, destroyDocumentEvents:function () {
    OpenLayers.Element.removeClass(document.body, "olDragDown");
    this.documentEvents.destroy();
    this.documentEvents = null;
}, CLASS_NAME:"OpenLayers.Handler.Drag"});
OpenLayers.Handler.MouseWheel = OpenLayers.Class(OpenLayers.Handler, {wheelListener:null, mousePosition:null, interval:0, delta:0, cumulative:true, initialize:function (control, callbacks, options) {
    OpenLayers.Handler.prototype.initialize.apply(this, arguments);
    this.wheelListener = OpenLayers.Function.bindAsEventListener(this.onWheelEvent, this);
}, destroy:function () {
    OpenLayers.Handler.prototype.destroy.apply(this, arguments);
    this.wheelListener = null;
}, onWheelEvent:function (e) {
    if (!this.map || !this.checkModifiers(e)) {
        return;
    }
    var overScrollableDiv = false;
    var overLayerDiv = false;
    var overMapDiv = false;
    var elem = OpenLayers.Event.element(e);
    while ((elem != null) && !overMapDiv && !overScrollableDiv) {
        if (!overScrollableDiv) {
            try {
                if (elem.currentStyle) {
                    overflow = elem.currentStyle["overflow"];
                } else {
                    var style = document.defaultView.getComputedStyle(elem, null);
                    var overflow = style.getPropertyValue("overflow");
                }
                overScrollableDiv = (overflow && (overflow == "auto") || (overflow == "scroll"));
            } catch (err) {
            }
        }
        if (!overLayerDiv) {
            for (var i = 0, len = this.map.layers.length; i < len; i++) {
                if (elem == this.map.layers[i].div || elem == this.map.layers[i].pane) {
                    overLayerDiv = true;
                    break;
                }
            }
        }
        overMapDiv = (elem == this.map.div);
        elem = elem.parentNode;
    }
    if (!overScrollableDiv && overMapDiv) {
        if (overLayerDiv) {
            var delta = 0;
            if (!e) {
                e = window.event;
            }
            if (e.wheelDelta) {
                delta = e.wheelDelta / 120;
                if (window.opera && window.opera.version() < 9.2) {
                    delta = -delta;
                }
            } else if (e.detail) {
                delta = -e.detail / 3;
            }
            this.delta = this.delta + delta;
            if (this.interval) {
                window.clearTimeout(this._timeoutId);
                this._timeoutId = window.setTimeout(OpenLayers.Function.bind(function () {
                    this.wheelZoom(e);
                }, this), this.interval);
            } else {
                this.wheelZoom(e);
            }
        }
        OpenLayers.Event.stop(e);
    }
}, wheelZoom:function (e) {
    var delta = this.delta;
    this.delta = 0;
    if (delta) {
        if (this.mousePosition) {
            e.xy = this.mousePosition;
        }
        if (!e.xy) {
            e.xy = this.map.getPixelFromLonLat(this.map.getCenter());
        }
        if (delta < 0) {
            this.callback("down", [e, this.cumulative ? delta : -1]);
        } else {
            this.callback("up", [e, this.cumulative ? delta : 1]);
        }
    }
}, mousemove:function (evt) {
    this.mousePosition = evt.xy;
}, activate:function (evt) {
    if (OpenLayers.Handler.prototype.activate.apply(this, arguments)) {
        var wheelListener = this.wheelListener;
        OpenLayers.Event.observe(window, "DOMMouseScroll", wheelListener);
        OpenLayers.Event.observe(window, "mousewheel", wheelListener);
        OpenLayers.Event.observe(document, "mousewheel", wheelListener);
        return true;
    } else {
        return false;
    }
}, deactivate:function (evt) {
    if (OpenLayers.Handler.prototype.deactivate.apply(this, arguments)) {
        var wheelListener = this.wheelListener;
        OpenLayers.Event.stopObserving(window, "DOMMouseScroll", wheelListener);
        OpenLayers.Event.stopObserving(window, "mousewheel", wheelListener);
        OpenLayers.Event.stopObserving(document, "mousewheel", wheelListener);
        return true;
    } else {
        return false;
    }
}, CLASS_NAME:"OpenLayers.Handler.MouseWheel"});
OpenLayers.Layer = OpenLayers.Class({id:null, name:null, div:null, opacity:null, alwaysInRange:null, EVENT_TYPES:["loadstart", "loadend", "loadcancel", "visibilitychanged", "move", "moveend"], RESOLUTION_PROPERTIES:['scales', 'resolutions', 'maxScale', 'minScale', 'maxResolution', 'minResolution', 'numZoomLevels', 'maxZoomLevel'], events:null, map:null, isBaseLayer:false, alpha:false, displayInLayerSwitcher:true, visibility:true, attribution:null, inRange:false, imageSize:null, imageOffset:null, options:null, eventListeners:null, gutter:0, projection:null, units:null, scales:null, resolutions:null, maxExtent:null, minExtent:null, maxResolution:null, minResolution:null, numZoomLevels:null, minScale:null, maxScale:null, displayOutsideMaxExtent:false, wrapDateLine:false, transitionEffect:null, SUPPORTED_TRANSITIONS:['resize'], metadata:{}, initialize:function (name, options) {
    this.addOptions(options);
    this.name = name;
    if (this.id == null) {
        this.id = OpenLayers.Util.createUniqueID(this.CLASS_NAME + "_");
        this.div = OpenLayers.Util.createDiv(this.id);
        this.div.style.width = "100%";
        this.div.style.height = "100%";
        this.div.dir = "ltr";
        this.events = new OpenLayers.Events(this, this.div, this.EVENT_TYPES);
        if (this.eventListeners instanceof Object) {
            this.events.on(this.eventListeners);
        }
    }
    if (this.wrapDateLine) {
        this.displayOutsideMaxExtent = true;
    }
}, destroy:function (setNewBaseLayer) {
    if (setNewBaseLayer == null) {
        setNewBaseLayer = true;
    }
    if (this.map != null) {
        this.map.removeLayer(this, setNewBaseLayer);
    }
    this.projection = null;
    this.map = null;
    this.name = null;
    this.div = null;
    this.options = null;
    if (this.events) {
        if (this.eventListeners) {
            this.events.un(this.eventListeners);
        }
        this.events.destroy();
    }
    this.eventListeners = null;
    this.events = null;
}, clone:function (obj) {
    if (obj == null) {
        obj = new OpenLayers.Layer(this.name, this.getOptions());
    }
    OpenLayers.Util.applyDefaults(obj, this);
    obj.map = null;
    return obj;
}, getOptions:function () {
    var options = {};
    for (var o in this.options) {
        options[o] = this[o];
    }
    return options;
}, setName:function (newName) {
    if (newName != this.name) {
        this.name = newName;
        if (this.map != null) {
            this.map.events.triggerEvent("changelayer", {layer:this, property:"name"});
        }
    }
}, addOptions:function (newOptions) {
    if (this.options == null) {
        this.options = {};
    }
    OpenLayers.Util.extend(this.options, newOptions);
    OpenLayers.Util.extend(this, newOptions);
    if (typeof this.projection == "string") {
        this.projection = new OpenLayers.Projection(this.projection);
    }
    if (this.projection && this.projection.getUnits()) {
        this.units = this.projection.getUnits();
    }
    if (this.map) {
        var properties = this.RESOLUTION_PROPERTIES.concat(["projection", "units", "minExtent", "maxExtent"]);
        for (var o in newOptions) {
            if (newOptions.hasOwnProperty(o) && OpenLayers.Util.indexOf(properties, o) >= 0) {
                this.initResolutions();
                break;
            }
        }
    }
}, onMapResize:function () {
}, redraw:function () {
    var redrawn = false;
    if (this.map) {
        this.inRange = this.calculateInRange();
        var extent = this.getExtent();
        if (extent && this.inRange && this.visibility) {
            var zoomChanged = true;
            this.moveTo(extent, zoomChanged, false);
            this.events.triggerEvent("moveend", {"zoomChanged":zoomChanged});
            redrawn = true;
        }
    }
    return redrawn;
}, moveTo:function (bounds, zoomChanged, dragging) {
    var display = this.visibility;
    if (!this.isBaseLayer) {
        display = display && this.inRange;
    }
    this.display(display);
}, setMap:function (map) {
    if (this.map == null) {
        this.map = map;
        this.maxExtent = this.maxExtent || this.map.maxExtent;
        this.minExtent = this.minExtent || this.map.minExtent;
        this.projection = this.projection || this.map.projection;
        if (typeof this.projection == "string") {
            this.projection = new OpenLayers.Projection(this.projection);
        }
        this.units = this.projection.getUnits() || this.units || this.map.units;
        this.initResolutions();
        if (!this.isBaseLayer) {
            this.inRange = this.calculateInRange();
            var show = ((this.visibility) && (this.inRange));
            this.div.style.display = show ? "" : "none";
        }
        this.setTileSize();
    }
}, afterAdd:function () {
}, removeMap:function (map) {
}, getImageSize:function (bounds) {
    return(this.imageSize || this.tileSize);
}, setTileSize:function (size) {
    var tileSize = (size) ? size : ((this.tileSize) ? this.tileSize : this.map.getTileSize());
    this.tileSize = tileSize;
    if (this.gutter) {
        this.imageOffset = new OpenLayers.Pixel(-this.gutter, -this.gutter);
        this.imageSize = new OpenLayers.Size(tileSize.w + (2 * this.gutter), tileSize.h + (2 * this.gutter));
    }
}, getVisibility:function () {
    return this.visibility;
}, setVisibility:function (visibility) {
    if (visibility != this.visibility) {
        this.visibility = visibility;
        this.display(visibility);
        this.redraw();
        if (this.map != null) {
            this.map.events.triggerEvent("changelayer", {layer:this, property:"visibility"});
        }
        this.events.triggerEvent("visibilitychanged");
    }
}, display:function (display) {
    if (display != (this.div.style.display != "none")) {
        this.div.style.display = (display && this.calculateInRange()) ? "block" : "none";
    }
}, calculateInRange:function () {
    var inRange = false;
    if (this.alwaysInRange) {
        inRange = true;
    } else {
        if (this.map) {
            var resolution = this.map.getResolution();
            inRange = ((resolution >= this.minResolution) && (resolution <= this.maxResolution));
        }
    }
    return inRange;
}, setIsBaseLayer:function (isBaseLayer) {
    if (isBaseLayer != this.isBaseLayer) {
        this.isBaseLayer = isBaseLayer;
        if (this.map != null) {
            this.map.events.triggerEvent("changebaselayer", {layer:this});
        }
    }
}, initResolutions:function () {
    var i, len;
    var props = {}, alwaysInRange = true;
    for (i = 0, len = this.RESOLUTION_PROPERTIES.length; i < len; i++) {
        var p = this.RESOLUTION_PROPERTIES[i];
        props[p] = this.options[p];
        if (alwaysInRange && this.options[p]) {
            alwaysInRange = false;
        }
    }
    if (this.alwaysInRange == null) {
        this.alwaysInRange = alwaysInRange;
    }
    if (props.resolutions == null) {
        props.resolutions = this.resolutionsFromScales(props.scales);
    }
    if (props.resolutions == null) {
        props.resolutions = this.calculateResolutions(props);
    }
    if (props.resolutions == null) {
        for (i = 0, len = this.RESOLUTION_PROPERTIES.length; i < len; i++) {
            var p = this.RESOLUTION_PROPERTIES[i];
            props[p] = this.options[p] != null ? this.options[p] : this.map[p];
        }
        if (props.resolutions == null) {
            props.resolutions = this.resolutionsFromScales(props.scales);
        }
        if (props.resolutions == null) {
            props.resolutions = this.calculateResolutions(props);
        }
    }
    var maxResolution;
    if (this.options.maxResolution && this.options.maxResolution !== "auto") {
        maxResolution = this.options.maxResolution;
    }
    if (this.options.minScale) {
        maxResolution = OpenLayers.Util.getResolutionFromScale(this.options.minScale, this.units);
    }
    var minResolution;
    if (this.options.minResolution && this.options.minResolution !== "auto") {
        minResolution = this.options.minResolution;
    }
    if (this.options.maxScale) {
        minResolution = OpenLayers.Util.getResolutionFromScale(this.options.maxScale, this.units);
    }
    if (props.resolutions) {
        props.resolutions.sort(function (a, b) {
            return(b - a);
        });
        if (!maxResolution) {
            maxResolution = props.resolutions[0];
        }
        if (!minResolution) {
            var lastIdx = props.resolutions.length - 1;
            minResolution = props.resolutions[lastIdx];
        }
    }
    this.resolutions = props.resolutions;
    if (this.resolutions) {
        len = this.resolutions.length;
        this.scales = new Array(len);
        for (i = 0; i < len; i++) {
            this.scales[i] = OpenLayers.Util.getScaleFromResolution(this.resolutions[i], this.units);
        }
        this.numZoomLevels = len;
    }
    this.minResolution = minResolution;
    if (minResolution) {
        this.maxScale = OpenLayers.Util.getScaleFromResolution(minResolution, this.units);
    }
    this.maxResolution = maxResolution;
    if (maxResolution) {
        this.minScale = OpenLayers.Util.getScaleFromResolution(maxResolution, this.units);
    }
}, resolutionsFromScales:function (scales) {
    if (scales == null) {
        return;
    }
    var resolutions, i, len;
    len = scales.length;
    resolutions = new Array(len);
    for (i = 0; i < len; i++) {
        resolutions[i] = OpenLayers.Util.getResolutionFromScale(scales[i], this.units);
    }
    return resolutions;
}, calculateResolutions:function (props) {
    var maxResolution = props.maxResolution;
    if (props.minScale != null) {
        maxResolution = OpenLayers.Util.getResolutionFromScale(props.minScale, this.units);
    } else if (maxResolution == "auto" && this.maxExtent != null) {
        var viewSize = this.map.getSize();
        var wRes = this.maxExtent.getWidth() / viewSize.w;
        var hRes = this.maxExtent.getHeight() / viewSize.h;
        maxResolution = Math.max(wRes, hRes);
    }
    var minResolution = props.minResolution;
    if (props.maxScale != null) {
        minResolution = OpenLayers.Util.getResolutionFromScale(props.maxScale, this.units);
    } else if (props.minResolution == "auto" && this.minExtent != null) {
        var viewSize = this.map.getSize();
        var wRes = this.minExtent.getWidth() / viewSize.w;
        var hRes = this.minExtent.getHeight() / viewSize.h;
        minResolution = Math.max(wRes, hRes);
    }
    var maxZoomLevel = props.maxZoomLevel;
    var numZoomLevels = props.numZoomLevels;
    if (typeof minResolution === "number" && typeof maxResolution === "number" && numZoomLevels === undefined) {
        var ratio = maxResolution / minResolution;
        numZoomLevels = Math.floor(Math.log(ratio) / Math.log(2)) + 1;
    } else if (numZoomLevels === undefined && maxZoomLevel != null) {
        numZoomLevels = maxZoomLevel + 1;
    }
    if (typeof numZoomLevels !== "number" || numZoomLevels <= 0 || (typeof maxResolution !== "number" && typeof minResolution !== "number")) {
        return;
    }
    var resolutions = new Array(numZoomLevels);
    var base = 2;
    if (typeof minResolution == "number" && typeof maxResolution == "number") {
        base = Math.pow((maxResolution / minResolution), (1 / (numZoomLevels - 1)));
    }
    var i;
    if (typeof maxResolution === "number") {
        for (i = 0; i < numZoomLevels; i++) {
            resolutions[i] = maxResolution / Math.pow(base, i);
        }
    } else {
        for (i = 0; i < numZoomLevels; i++) {
            resolutions[numZoomLevels - 1 - i] = minResolution * Math.pow(base, i);
        }
    }
    return resolutions;
}, getResolution:function () {
    var zoom = this.map.getZoom();
    return this.getResolutionForZoom(zoom);
}, getExtent:function () {
    return this.map.calculateBounds();
}, getZoomForExtent:function (extent, closest) {
    var viewSize = this.map.getSize();
    var idealResolution = Math.max(extent.getWidth() / viewSize.w, extent.getHeight() / viewSize.h);
    return this.getZoomForResolution(idealResolution, closest);
}, getDataExtent:function () {
}, getResolutionForZoom:function (zoom) {
    zoom = Math.max(0, Math.min(zoom, this.resolutions.length - 1));
    var resolution;
    if (this.map.fractionalZoom) {
        var low = Math.floor(zoom);
        var high = Math.ceil(zoom);
        resolution = this.resolutions[low] -
            ((zoom - low) * (this.resolutions[low] - this.resolutions[high]));
    } else {
        resolution = this.resolutions[Math.round(zoom)];
    }
    return resolution;
}, getZoomForResolution:function (resolution, closest) {
    var zoom;
    if (this.map.fractionalZoom) {
        var lowZoom = 0;
        var highZoom = this.resolutions.length - 1;
        var highRes = this.resolutions[lowZoom];
        var lowRes = this.resolutions[highZoom];
        var res;
        for (var i = 0, len = this.resolutions.length; i < len; ++i) {
            res = this.resolutions[i];
            if (res >= resolution) {
                highRes = res;
                lowZoom = i;
            }
            if (res <= resolution) {
                lowRes = res;
                highZoom = i;
                break;
            }
        }
        var dRes = highRes - lowRes;
        if (dRes > 0) {
            zoom = lowZoom + ((highRes - resolution) / dRes);
        } else {
            zoom = lowZoom;
        }
    } else {
        var diff;
        var minDiff = Number.POSITIVE_INFINITY;
        for (var i = 0, len = this.resolutions.length; i < len; i++) {
            if (closest) {
                diff = Math.abs(this.resolutions[i] - resolution);
                if (diff > minDiff) {
                    break;
                }
                minDiff = diff;
            } else {
                if (this.resolutions[i] < resolution) {
                    break;
                }
            }
        }
        zoom = Math.max(0, i - 1);
    }
    return zoom;
}, getLonLatFromViewPortPx:function (viewPortPx) {
    var lonlat = null;
    if (viewPortPx != null) {
        var size = this.map.getSize();
        var center = this.map.getCenter();
        if (center) {
            var res = this.map.getResolution();
            var delta_x = viewPortPx.x - (size.w / 2);
            var delta_y = viewPortPx.y - (size.h / 2);
            lonlat = new OpenLayers.LonLat(center.lon + delta_x * res, center.lat - delta_y * res);
            if (this.wrapDateLine) {
                lonlat = lonlat.wrapDateLine(this.maxExtent);
            }
        }
    }
    return lonlat;
}, getViewPortPxFromLonLat:function (lonlat) {
    var px = null;
    if (lonlat != null) {
        var resolution = this.map.getResolution();
        var extent = this.map.getExtent();
        px = new OpenLayers.Pixel((1 / resolution * (lonlat.lon - extent.left)), (1 / resolution * (extent.top - lonlat.lat)));
    }
    return px;
}, setOpacity:function (opacity) {
    if (opacity != this.opacity) {
        this.opacity = opacity;
        for (var i = 0, len = this.div.childNodes.length; i < len; ++i) {
            var element = this.div.childNodes[i].firstChild;
            OpenLayers.Util.modifyDOMElement(element, null, null, null, null, null, null, opacity);
        }
        if (this.map != null) {
            this.map.events.triggerEvent("changelayer", {layer:this, property:"opacity"});
        }
    }
}, getZIndex:function () {
    return this.div.style.zIndex;
}, setZIndex:function (zIndex) {
    this.div.style.zIndex = zIndex;
}, adjustBounds:function (bounds) {
    if (this.gutter) {
        var mapGutter = this.gutter * this.map.getResolution();
        bounds = new OpenLayers.Bounds(bounds.left - mapGutter, bounds.bottom - mapGutter, bounds.right + mapGutter, bounds.top + mapGutter);
    }
    if (this.wrapDateLine) {
        var wrappingOptions = {'rightTolerance':this.getResolution()};
        bounds = bounds.wrapDateLine(this.maxExtent, wrappingOptions);
    }
    return bounds;
}, CLASS_NAME:"OpenLayers.Layer"});
OpenLayers.Control.DragPan = OpenLayers.Class(OpenLayers.Control, {type:OpenLayers.Control.TYPE_TOOL, panned:false, interval:25, documentDrag:false, draw:function () {
    this.handler = new OpenLayers.Handler.Drag(this, {"move":this.panMap, "done":this.panMapDone}, {interval:this.interval, documentDrag:this.documentDrag});
}, panMap:function (xy) {
    this.panned = true;
    this.map.pan(this.handler.last.x - xy.x, this.handler.last.y - xy.y, {dragging:this.handler.dragging, animate:false});
}, panMapDone:function (xy) {
    if (this.panned) {
        this.panMap(xy);
        this.panned = false;
    }
}, CLASS_NAME:"OpenLayers.Control.DragPan"});
OpenLayers.State = {UNKNOWN:'Unknown', INSERT:'Insert', UPDATE:'Update', DELETE:'Delete'};
OpenLayers.Feature.Vector = OpenLayers.Class(OpenLayers.Feature, {fid:null, geometry:null, attributes:null, bounds:null, state:null, style:null, url:null, renderIntent:"default", initialize:function (geometry, attributes, style) {
    OpenLayers.Feature.prototype.initialize.apply(this, [null, null, attributes]);
    this.lonlat = null;
    this.geometry = geometry ? geometry : null;
    this.state = null;
    this.attributes = {};
    if (attributes) {
        this.attributes = OpenLayers.Util.extend(this.attributes, attributes);
    }
    this.style = style ? style : null;
}, destroy:function () {
    if (this.layer) {
        this.layer.removeFeatures(this);
        this.layer = null;
    }
    this.geometry = null;
    OpenLayers.Feature.prototype.destroy.apply(this, arguments);
}, clone:function () {
    return new OpenLayers.Feature.Vector(this.geometry ? this.geometry.clone() : null, this.attributes, this.style);
}, onScreen:function (boundsOnly) {
    var onScreen = false;
    if (this.layer && this.layer.map) {
        var screenBounds = this.layer.map.getExtent();
        if (boundsOnly) {
            var featureBounds = this.geometry.getBounds();
            onScreen = screenBounds.intersectsBounds(featureBounds);
        } else {
            var screenPoly = screenBounds.toGeometry();
            onScreen = screenPoly.intersects(this.geometry);
        }
    }
    return onScreen;
}, getVisibility:function () {
    return!(this.style && this.style.display == 'none' || !this.layer || this.layer && this.layer.styleMap && this.layer.styleMap.createSymbolizer(this, this.renderIntent).display == 'none' || this.layer && !this.layer.getVisibility());
}, createMarker:function () {
    return null;
}, destroyMarker:function () {
}, createPopup:function () {
    return null;
}, atPoint:function (lonlat, toleranceLon, toleranceLat) {
    var atPoint = false;
    if (this.geometry) {
        atPoint = this.geometry.atPoint(lonlat, toleranceLon, toleranceLat);
    }
    return atPoint;
}, destroyPopup:function () {
}, move:function (location) {
    if (!this.layer || !this.geometry.move) {
        return;
    }
    var pixel;
    if (location.CLASS_NAME == "OpenLayers.LonLat") {
        pixel = this.layer.getViewPortPxFromLonLat(location);
    } else {
        pixel = location;
    }
    var lastPixel = this.layer.getViewPortPxFromLonLat(this.geometry.getBounds().getCenterLonLat());
    var res = this.layer.map.getResolution();
    this.geometry.move(res * (pixel.x - lastPixel.x), res * (lastPixel.y - pixel.y));
    this.layer.drawFeature(this);
    return lastPixel;
}, toState:function (state) {
    if (state == OpenLayers.State.UPDATE) {
        switch (this.state) {
            case OpenLayers.State.UNKNOWN:
            case OpenLayers.State.DELETE:
                this.state = state;
                break;
            case OpenLayers.State.UPDATE:
            case OpenLayers.State.INSERT:
                break;
        }
    } else if (state == OpenLayers.State.INSERT) {
        switch (this.state) {
            case OpenLayers.State.UNKNOWN:
                break;
            default:
                this.state = state;
                break;
        }
    } else if (state == OpenLayers.State.DELETE) {
        switch (this.state) {
            case OpenLayers.State.INSERT:
                break;
            case OpenLayers.State.DELETE:
                break;
            case OpenLayers.State.UNKNOWN:
            case OpenLayers.State.UPDATE:
                this.state = state;
                break;
        }
    } else if (state == OpenLayers.State.UNKNOWN) {
        this.state = state;
    }
}, CLASS_NAME:"OpenLayers.Feature.Vector"});
OpenLayers.Feature.Vector.style = {'default':{fillColor:"#ee9900", fillOpacity:0.4, hoverFillColor:"white", hoverFillOpacity:0.8, strokeColor:"#ee9900", strokeOpacity:1, strokeWidth:1, strokeLinecap:"round", strokeDashstyle:"solid", hoverStrokeColor:"red", hoverStrokeOpacity:1, hoverStrokeWidth:0.2, pointRadius:6, hoverPointRadius:1, hoverPointUnit:"%", pointerEvents:"visiblePainted", cursor:"inherit"}, 'select':{fillColor:"blue", fillOpacity:0.4, hoverFillColor:"white", hoverFillOpacity:0.8, strokeColor:"blue", strokeOpacity:1, strokeWidth:2, strokeLinecap:"round", strokeDashstyle:"solid", hoverStrokeColor:"red", hoverStrokeOpacity:1, hoverStrokeWidth:0.2, pointRadius:6, hoverPointRadius:1, hoverPointUnit:"%", pointerEvents:"visiblePainted", cursor:"pointer"}, 'temporary':{fillColor:"#66cccc", fillOpacity:0.2, hoverFillColor:"white", hoverFillOpacity:0.8, strokeColor:"#66cccc", strokeOpacity:1, strokeLinecap:"round", strokeWidth:2, strokeDashstyle:"solid", hoverStrokeColor:"red", hoverStrokeOpacity:1, hoverStrokeWidth:0.2, pointRadius:6, hoverPointRadius:1, hoverPointUnit:"%", pointerEvents:"visiblePainted", cursor:"inherit"}, 'delete':{display:"none"}};
OpenLayers.Handler.Box = OpenLayers.Class(OpenLayers.Handler, {dragHandler:null, boxDivClassName:'olHandlerBoxZoomBox', boxCharacteristics:null, initialize:function (control, callbacks, options) {
    OpenLayers.Handler.prototype.initialize.apply(this, arguments);
    var callbacks = {"down":this.startBox, "move":this.moveBox, "out":this.removeBox, "up":this.endBox};
    this.dragHandler = new OpenLayers.Handler.Drag(this, callbacks, {keyMask:this.keyMask});
}, destroy:function () {
    if (this.dragHandler) {
        this.dragHandler.destroy();
        this.dragHandler = null;
    }
    OpenLayers.Handler.prototype.destroy.apply(this, arguments);
}, setMap:function (map) {
    OpenLayers.Handler.prototype.setMap.apply(this, arguments);
    if (this.dragHandler) {
        this.dragHandler.setMap(map);
    }
}, startBox:function (xy) {
    this.zoomBox = OpenLayers.Util.createDiv('zoomBox', this.dragHandler.start);
    this.zoomBox.className = this.boxDivClassName;
    this.zoomBox.style.zIndex = this.map.Z_INDEX_BASE["Popup"] - 1;
    this.map.viewPortDiv.appendChild(this.zoomBox);
    OpenLayers.Element.addClass(this.map.viewPortDiv, "olDrawBox");
}, moveBox:function (xy) {
    var startX = this.dragHandler.start.x;
    var startY = this.dragHandler.start.y;
    var deltaX = Math.abs(startX - xy.x);
    var deltaY = Math.abs(startY - xy.y);
    this.zoomBox.style.width = Math.max(1, deltaX) + "px";
    this.zoomBox.style.height = Math.max(1, deltaY) + "px";
    this.zoomBox.style.left = xy.x < startX ? xy.x + "px" : startX + "px";
    this.zoomBox.style.top = xy.y < startY ? xy.y + "px" : startY + "px";
    var box = this.getBoxCharacteristics();
    if (box.newBoxModel) {
        if (xy.x > startX) {
            this.zoomBox.style.width = Math.max(1, deltaX - box.xOffset) + "px";
        }
        if (xy.y > startY) {
            this.zoomBox.style.height = Math.max(1, deltaY - box.yOffset) + "px";
        }
    }
}, endBox:function (end) {
    var result;
    if (Math.abs(this.dragHandler.start.x - end.x) > 5 || Math.abs(this.dragHandler.start.y - end.y) > 5) {
        var start = this.dragHandler.start;
        var top = Math.min(start.y, end.y);
        var bottom = Math.max(start.y, end.y);
        var left = Math.min(start.x, end.x);
        var right = Math.max(start.x, end.x);
        result = new OpenLayers.Bounds(left, bottom, right, top);
    } else {
        result = this.dragHandler.start.clone();
    }
    this.removeBox();
    this.callback("done", [result]);
}, removeBox:function () {
    this.map.viewPortDiv.removeChild(this.zoomBox);
    this.zoomBox = null;
    this.boxCharacteristics = null;
    OpenLayers.Element.removeClass(this.map.viewPortDiv, "olDrawBox");
}, activate:function () {
    if (OpenLayers.Handler.prototype.activate.apply(this, arguments)) {
        this.dragHandler.activate();
        return true;
    } else {
        return false;
    }
}, deactivate:function () {
    if (OpenLayers.Handler.prototype.deactivate.apply(this, arguments)) {
        this.dragHandler.deactivate();
        return true;
    } else {
        return false;
    }
}, getBoxCharacteristics:function () {
    if (!this.boxCharacteristics) {
        var xOffset = parseInt(OpenLayers.Element.getStyle(this.zoomBox, "border-left-width")) + parseInt(OpenLayers.Element.getStyle(this.zoomBox, "border-right-width")) + 1;
        var yOffset = parseInt(OpenLayers.Element.getStyle(this.zoomBox, "border-top-width")) + parseInt(OpenLayers.Element.getStyle(this.zoomBox, "border-bottom-width")) + 1;
        var newBoxModel = OpenLayers.Util.getBrowserName() == "msie" ? document.compatMode != "BackCompat" : true;
        this.boxCharacteristics = {xOffset:xOffset, yOffset:yOffset, newBoxModel:newBoxModel};
    }
    return this.boxCharacteristics;
}, CLASS_NAME:"OpenLayers.Handler.Box"});
OpenLayers.Layer.EventPane = OpenLayers.Class(OpenLayers.Layer, {smoothDragPan:true, isBaseLayer:true, isFixed:true, pane:null, mapObject:null, initialize:function (name, options) {
    OpenLayers.Layer.prototype.initialize.apply(this, arguments);
    if (this.pane == null) {
        this.pane = OpenLayers.Util.createDiv(this.div.id + "_EventPane");
    }
}, destroy:function () {
    this.mapObject = null;
    this.pane = null;
    OpenLayers.Layer.prototype.destroy.apply(this, arguments);
}, setMap:function (map) {
    OpenLayers.Layer.prototype.setMap.apply(this, arguments);
    this.pane.style.zIndex = parseInt(this.div.style.zIndex) + 1;
    this.pane.style.display = this.div.style.display;
    this.pane.style.width = "100%";
    this.pane.style.height = "100%";
    if (OpenLayers.Util.getBrowserName() == "msie") {
        this.pane.style.background = "url(" + OpenLayers.Util.getImagesLocation() + "blank.gif)";
    }
    if (this.isFixed) {
        this.map.viewPortDiv.appendChild(this.pane);
    } else {
        this.map.layerContainerDiv.appendChild(this.pane);
    }
    this.loadMapObject();
    if (this.mapObject == null) {
        this.loadWarningMessage();
    }
}, removeMap:function (map) {
    if (this.pane && this.pane.parentNode) {
        this.pane.parentNode.removeChild(this.pane);
    }
    OpenLayers.Layer.prototype.removeMap.apply(this, arguments);
}, loadWarningMessage:function () {
    this.div.style.backgroundColor = "darkblue";
    var viewSize = this.map.getSize();
    var msgW = Math.min(viewSize.w, 300);
    var msgH = Math.min(viewSize.h, 200);
    var size = new OpenLayers.Size(msgW, msgH);
    var centerPx = new OpenLayers.Pixel(viewSize.w / 2, viewSize.h / 2);
    var topLeft = centerPx.add(-size.w / 2, -size.h / 2);
    var div = OpenLayers.Util.createDiv(this.name + "_warning", topLeft, size, null, null, null, "auto");
    div.style.padding = "7px";
    div.style.backgroundColor = "yellow";
    div.innerHTML = this.getWarningHTML();
    this.div.appendChild(div);
}, getWarningHTML:function () {
    return"";
}, display:function (display) {
    OpenLayers.Layer.prototype.display.apply(this, arguments);
    this.pane.style.display = this.div.style.display;
}, setZIndex:function (zIndex) {
    OpenLayers.Layer.prototype.setZIndex.apply(this, arguments);
    this.pane.style.zIndex = parseInt(this.div.style.zIndex) + 1;
}, moveTo:function (bounds, zoomChanged, dragging) {
    OpenLayers.Layer.prototype.moveTo.apply(this, arguments);
    if (this.mapObject != null) {
        var newCenter = this.map.getCenter();
        var newZoom = this.map.getZoom();
        if (newCenter != null) {
            var moOldCenter = this.getMapObjectCenter();
            var oldCenter = this.getOLLonLatFromMapObjectLonLat(moOldCenter);
            var moOldZoom = this.getMapObjectZoom();
            var oldZoom = this.getOLZoomFromMapObjectZoom(moOldZoom);
            if (!(newCenter.equals(oldCenter)) || !(newZoom == oldZoom)) {
                if (dragging && this.dragPanMapObject && this.smoothDragPan) {
                    var oldPx = this.map.getViewPortPxFromLonLat(oldCenter);
                    var newPx = this.map.getViewPortPxFromLonLat(newCenter);
                    this.dragPanMapObject(newPx.x - oldPx.x, oldPx.y - newPx.y);
                } else {
                    var center = this.getMapObjectLonLatFromOLLonLat(newCenter);
                    var zoom = this.getMapObjectZoomFromOLZoom(newZoom);
                    this.setMapObjectCenter(center, zoom, dragging);
                }
            }
        }
    }
}, getLonLatFromViewPortPx:function (viewPortPx) {
    var lonlat = null;
    if ((this.mapObject != null) && (this.getMapObjectCenter() != null)) {
        var moPixel = this.getMapObjectPixelFromOLPixel(viewPortPx);
        var moLonLat = this.getMapObjectLonLatFromMapObjectPixel(moPixel);
        lonlat = this.getOLLonLatFromMapObjectLonLat(moLonLat);
    }
    return lonlat;
}, getViewPortPxFromLonLat:function (lonlat) {
    var viewPortPx = null;
    if ((this.mapObject != null) && (this.getMapObjectCenter() != null)) {
        var moLonLat = this.getMapObjectLonLatFromOLLonLat(lonlat);
        var moPixel = this.getMapObjectPixelFromMapObjectLonLat(moLonLat);
        viewPortPx = this.getOLPixelFromMapObjectPixel(moPixel);
    }
    return viewPortPx;
}, getOLLonLatFromMapObjectLonLat:function (moLonLat) {
    var olLonLat = null;
    if (moLonLat != null) {
        var lon = this.getLongitudeFromMapObjectLonLat(moLonLat);
        var lat = this.getLatitudeFromMapObjectLonLat(moLonLat);
        olLonLat = new OpenLayers.LonLat(lon, lat);
    }
    return olLonLat;
}, getMapObjectLonLatFromOLLonLat:function (olLonLat) {
    var moLatLng = null;
    if (olLonLat != null) {
        moLatLng = this.getMapObjectLonLatFromLonLat(olLonLat.lon, olLonLat.lat);
    }
    return moLatLng;
}, getOLPixelFromMapObjectPixel:function (moPixel) {
    var olPixel = null;
    if (moPixel != null) {
        var x = this.getXFromMapObjectPixel(moPixel);
        var y = this.getYFromMapObjectPixel(moPixel);
        olPixel = new OpenLayers.Pixel(x, y);
    }
    return olPixel;
}, getMapObjectPixelFromOLPixel:function (olPixel) {
    var moPixel = null;
    if (olPixel != null) {
        moPixel = this.getMapObjectPixelFromXY(olPixel.x, olPixel.y);
    }
    return moPixel;
}, CLASS_NAME:"OpenLayers.Layer.EventPane"});
OpenLayers.Layer.FixedZoomLevels = OpenLayers.Class({initialize:function () {
}, initResolutions:function () {
    var props = new Array('minZoomLevel', 'maxZoomLevel', 'numZoomLevels');
    for (var i = 0, len = props.length; i < len; i++) {
        var property = props[i];
        this[property] = (this.options[property] != null) ? this.options[property] : this.map[property];
    }
    if ((this.minZoomLevel == null) || (this.minZoomLevel < this.MIN_ZOOM_LEVEL)) {
        this.minZoomLevel = this.MIN_ZOOM_LEVEL;
    }
    var desiredZoomLevels;
    var limitZoomLevels = this.MAX_ZOOM_LEVEL - this.minZoomLevel + 1;
    if (((this.options.numZoomLevels == null) && (this.options.maxZoomLevel != null)) || ((this.numZoomLevels == null) && (this.maxZoomLevel != null))) {
        desiredZoomLevels = this.maxZoomLevel - this.minZoomLevel + 1;
    } else {
        desiredZoomLevels = this.numZoomLevels;
    }
    if (desiredZoomLevels != null) {
        this.numZoomLevels = Math.min(desiredZoomLevels, limitZoomLevels);
    } else {
        this.numZoomLevels = limitZoomLevels;
    }
    this.maxZoomLevel = this.minZoomLevel + this.numZoomLevels - 1;
    if (this.RESOLUTIONS != null) {
        var resolutionsIndex = 0;
        this.resolutions = [];
        for (var i = this.minZoomLevel; i <= this.maxZoomLevel; i++) {
            this.resolutions[resolutionsIndex++] = this.RESOLUTIONS[i];
        }
        this.maxResolution = this.resolutions[0];
        this.minResolution = this.resolutions[this.resolutions.length - 1];
    }
}, getResolution:function () {
    if (this.resolutions != null) {
        return OpenLayers.Layer.prototype.getResolution.apply(this, arguments);
    } else {
        var resolution = null;
        var viewSize = this.map.getSize();
        var extent = this.getExtent();
        if ((viewSize != null) && (extent != null)) {
            resolution = Math.max(extent.getWidth() / viewSize.w, extent.getHeight() / viewSize.h);
        }
        return resolution;
    }
}, getExtent:function () {
    var extent = null;
    var size = this.map.getSize();
    var tlPx = new OpenLayers.Pixel(0, 0);
    var tlLL = this.getLonLatFromViewPortPx(tlPx);
    var brPx = new OpenLayers.Pixel(size.w, size.h);
    var brLL = this.getLonLatFromViewPortPx(brPx);
    if ((tlLL != null) && (brLL != null)) {
        extent = new OpenLayers.Bounds(tlLL.lon, brLL.lat, brLL.lon, tlLL.lat);
    }
    return extent;
}, getZoomForResolution:function (resolution) {
    if (this.resolutions != null) {
        return OpenLayers.Layer.prototype.getZoomForResolution.apply(this, arguments);
    } else {
        var extent = OpenLayers.Layer.prototype.getExtent.apply(this, []);
        return this.getZoomForExtent(extent);
    }
}, getOLZoomFromMapObjectZoom:function (moZoom) {
    var zoom = null;
    if (moZoom != null) {
        zoom = moZoom - this.minZoomLevel;
    }
    return zoom;
}, getMapObjectZoomFromOLZoom:function (olZoom) {
    var zoom = null;
    if (olZoom != null) {
        zoom = olZoom + this.minZoomLevel;
    }
    return zoom;
}, CLASS_NAME:"OpenLayers.Layer.FixedZoomLevels"});
OpenLayers.Layer.HTTPRequest = OpenLayers.Class(OpenLayers.Layer, {URL_HASH_FACTOR:(Math.sqrt(5) - 1) / 2, url:null, params:null, reproject:false, initialize:function (name, url, params, options) {
    var newArguments = arguments;
    newArguments = [name, options];
    OpenLayers.Layer.prototype.initialize.apply(this, newArguments);
    this.url = url;
    this.params = OpenLayers.Util.extend({}, params);
}, destroy:function () {
    this.url = null;
    this.params = null;
    OpenLayers.Layer.prototype.destroy.apply(this, arguments);
}, clone:function (obj) {
    if (obj == null) {
        obj = new OpenLayers.Layer.HTTPRequest(this.name, this.url, this.params, this.getOptions());
    }
    obj = OpenLayers.Layer.prototype.clone.apply(this, [obj]);
    return obj;
}, setUrl:function (newUrl) {
    this.url = newUrl;
}, mergeNewParams:function (newParams) {
    this.params = OpenLayers.Util.extend(this.params, newParams);
    var ret = this.redraw();
    if (this.map != null) {
        this.map.events.triggerEvent("changelayer", {layer:this, property:"params"});
    }
    return ret;
}, redraw:function (force) {
    if (force) {
        return this.mergeNewParams({"_olSalt":Math.random()});
    } else {
        return OpenLayers.Layer.prototype.redraw.apply(this, []);
    }
}, selectUrl:function (paramString, urls) {
    var product = 1;
    for (var i = 0, len = paramString.length; i < len; i++) {
        product *= paramString.charCodeAt(i) * this.URL_HASH_FACTOR;
        product -= Math.floor(product);
    }
    return urls[Math.floor(product * urls.length)];
}, getFullRequestString:function (newParams, altUrl) {
    var url = altUrl || this.url;
    var allParams = OpenLayers.Util.extend({}, this.params);
    allParams = OpenLayers.Util.extend(allParams, newParams);
    var paramsString = OpenLayers.Util.getParameterString(allParams);
    if (url instanceof Array) {
        url = this.selectUrl(paramsString, url);
    }
    var urlParams = OpenLayers.Util.upperCaseObject(OpenLayers.Util.getParameters(url));
    for (var key in allParams) {
        if (key.toUpperCase()in urlParams) {
            delete allParams[key];
        }
    }
    paramsString = OpenLayers.Util.getParameterString(allParams);
    return OpenLayers.Util.urlAppend(url, paramsString);
}, CLASS_NAME:"OpenLayers.Layer.HTTPRequest"});
OpenLayers.Layer.Image = OpenLayers.Class(OpenLayers.Layer, {isBaseLayer:true, url:null, extent:null, size:null, tile:null, aspectRatio:null, initialize:function (name, url, extent, size, options) {
    this.url = url;
    this.extent = extent;
    this.maxExtent = extent;
    this.size = size;
    OpenLayers.Layer.prototype.initialize.apply(this, [name, options]);
    this.aspectRatio = (this.extent.getHeight() / this.size.h) / (this.extent.getWidth() / this.size.w);
}, destroy:function () {
    if (this.tile) {
        this.removeTileMonitoringHooks(this.tile);
        this.tile.destroy();
        this.tile = null;
    }
    OpenLayers.Layer.prototype.destroy.apply(this, arguments);
}, clone:function (obj) {
    if (obj == null) {
        obj = new OpenLayers.Layer.Image(this.name, this.url, this.extent, this.size, this.getOptions());
    }
    obj = OpenLayers.Layer.prototype.clone.apply(this, [obj]);
    return obj;
}, setMap:function (map) {
    if (this.options.maxResolution == null) {
        this.options.maxResolution = this.aspectRatio * this.extent.getWidth() / this.size.w;
    }
    OpenLayers.Layer.prototype.setMap.apply(this, arguments);
}, moveTo:function (bounds, zoomChanged, dragging) {
    OpenLayers.Layer.prototype.moveTo.apply(this, arguments);
    var firstRendering = (this.tile == null);
    if (zoomChanged || firstRendering) {
        this.setTileSize();
        var ul = new OpenLayers.LonLat(this.extent.left, this.extent.top);
        var ulPx = this.map.getLayerPxFromLonLat(ul);
        if (firstRendering) {
            this.tile = new OpenLayers.Tile.Image(this, ulPx, this.extent, null, this.tileSize);
            this.addTileMonitoringHooks(this.tile);
        } else {
            this.tile.size = this.tileSize.clone();
            this.tile.position = ulPx.clone();
        }
        this.tile.draw();
    }
}, setTileSize:function () {
    var tileWidth = this.extent.getWidth() / this.map.getResolution();
    var tileHeight = this.extent.getHeight() / this.map.getResolution();
    this.tileSize = new OpenLayers.Size(tileWidth, tileHeight);
}, addTileMonitoringHooks:function (tile) {
    tile.onLoadStart = function () {
        this.events.triggerEvent("loadstart");
    };
    tile.events.register("loadstart", this, tile.onLoadStart);
    tile.onLoadEnd = function () {
        this.events.triggerEvent("loadend");
    };
    tile.events.register("loadend", this, tile.onLoadEnd);
    tile.events.register("unload", this, tile.onLoadEnd);
}, removeTileMonitoringHooks:function (tile) {
    tile.unload();
    tile.events.un({"loadstart":tile.onLoadStart, "loadend":tile.onLoadEnd, "unload":tile.onLoadEnd, scope:this});
}, setUrl:function (newUrl) {
    this.url = newUrl;
    this.tile.draw();
}, getURL:function (bounds) {
    return this.url;
}, CLASS_NAME:"OpenLayers.Layer.Image"});
OpenLayers.Layer.Markers = OpenLayers.Class(OpenLayers.Layer, {isBaseLayer:false, markers:null, drawn:false, initialize:function (name, options) {
    OpenLayers.Layer.prototype.initialize.apply(this, arguments);
    this.markers = [];
}, destroy:function () {
    this.clearMarkers();
    this.markers = null;
    OpenLayers.Layer.prototype.destroy.apply(this, arguments);
}, setOpacity:function (opacity) {
    if (opacity != this.opacity) {
        this.opacity = opacity;
        for (var i = 0, len = this.markers.length; i < len; i++) {
            this.markers[i].setOpacity(this.opacity);
        }
    }
}, moveTo:function (bounds, zoomChanged, dragging) {
    OpenLayers.Layer.prototype.moveTo.apply(this, arguments);
    if (zoomChanged || !this.drawn) {
        for (var i = 0, len = this.markers.length; i < len; i++) {
            this.drawMarker(this.markers[i]);
        }
        this.drawn = true;
    }
}, addMarker:function (marker) {
    this.markers.push(marker);
    if (this.opacity != null) {
        marker.setOpacity(this.opacity);
    }
    if (this.map && this.map.getExtent()) {
        marker.map = this.map;
        this.drawMarker(marker);
    }
}, removeMarker:function (marker) {
    if (this.markers && this.markers.length) {
        OpenLayers.Util.removeItem(this.markers, marker);
        marker.erase();
    }
}, clearMarkers:function () {
    if (this.markers != null) {
        while (this.markers.length > 0) {
            this.removeMarker(this.markers[0]);
        }
    }
}, drawMarker:function (marker) {
    var px = this.map.getLayerPxFromLonLat(marker.lonlat);
    if (px == null) {
        marker.display(false);
    } else {
        if (!marker.isDrawn()) {
            var markerImg = marker.draw(px);
            this.div.appendChild(markerImg);
        } else if (marker.icon) {
            marker.icon.moveTo(px);
        }
    }
}, getDataExtent:function () {
    var maxExtent = null;
    if (this.markers && (this.markers.length > 0)) {
        var maxExtent = new OpenLayers.Bounds();
        for (var i = 0, len = this.markers.length; i < len; i++) {
            var marker = this.markers[i];
            maxExtent.extend(marker.lonlat);
        }
    }
    return maxExtent;
}, CLASS_NAME:"OpenLayers.Layer.Markers"});
OpenLayers.Layer.SphericalMercator = {getExtent:function () {
    var extent = null;
    if (this.sphericalMercator) {
        extent = this.map.calculateBounds();
    } else {
        extent = OpenLayers.Layer.FixedZoomLevels.prototype.getExtent.apply(this);
    }
    return extent;
}, getLonLatFromViewPortPx:function (viewPortPx) {
    return OpenLayers.Layer.prototype.getLonLatFromViewPortPx.apply(this, arguments);
}, getViewPortPxFromLonLat:function (lonlat) {
    return OpenLayers.Layer.prototype.getViewPortPxFromLonLat.apply(this, arguments);
}, initMercatorParameters:function () {
    this.RESOLUTIONS = [];
    var maxResolution = 156543.0339;
    for (var zoom = 0; zoom <= this.MAX_ZOOM_LEVEL; ++zoom) {
        this.RESOLUTIONS[zoom] = maxResolution / Math.pow(2, zoom);
    }
    this.units = "m";
    this.projection = this.projection || "EPSG:900913";
}, forwardMercator:function (lon, lat) {
    var x = lon * 20037508.34 / 180;
    var y = Math.log(Math.tan((90 + lat) * Math.PI / 360)) / (Math.PI / 180);
    y = y * 20037508.34 / 180;
    return new OpenLayers.LonLat(x, y);
}, inverseMercator:function (x, y) {
    var lon = (x / 20037508.34) * 180;
    var lat = (y / 20037508.34) * 180;
    lat = 180 / Math.PI * (2 * Math.atan(Math.exp(lat * Math.PI / 180)) - Math.PI / 2);
    return new OpenLayers.LonLat(lon, lat);
}, projectForward:function (point) {
    var lonlat = OpenLayers.Layer.SphericalMercator.forwardMercator(point.x, point.y);
    point.x = lonlat.lon;
    point.y = lonlat.lat;
    return point;
}, projectInverse:function (point) {
    var lonlat = OpenLayers.Layer.SphericalMercator.inverseMercator(point.x, point.y);
    point.x = lonlat.lon;
    point.y = lonlat.lat;
    return point;
}};
OpenLayers.Projection.addTransform("EPSG:4326", "EPSG:900913", OpenLayers.Layer.SphericalMercator.projectForward);
OpenLayers.Projection.addTransform("EPSG:900913", "EPSG:4326", OpenLayers.Layer.SphericalMercator.projectInverse);
OpenLayers.Control.ZoomBox = OpenLayers.Class(OpenLayers.Control, {type:OpenLayers.Control.TYPE_TOOL, out:false, alwaysZoom:false, draw:function () {
    this.handler = new OpenLayers.Handler.Box(this, {done:this.zoomBox}, {keyMask:this.keyMask});
}, zoomBox:function (position) {
    if (position instanceof OpenLayers.Bounds) {
        var bounds;
        if (!this.out) {
            var minXY = this.map.getLonLatFromPixel(new OpenLayers.Pixel(position.left, position.bottom));
            var maxXY = this.map.getLonLatFromPixel(new OpenLayers.Pixel(position.right, position.top));
            bounds = new OpenLayers.Bounds(minXY.lon, minXY.lat, maxXY.lon, maxXY.lat);
        } else {
            var pixWidth = Math.abs(position.right - position.left);
            var pixHeight = Math.abs(position.top - position.bottom);
            var zoomFactor = Math.min((this.map.size.h / pixHeight), (this.map.size.w / pixWidth));
            var extent = this.map.getExtent();
            var center = this.map.getLonLatFromPixel(position.getCenterPixel());
            var xmin = center.lon - (extent.getWidth() / 2) * zoomFactor;
            var xmax = center.lon + (extent.getWidth() / 2) * zoomFactor;
            var ymin = center.lat - (extent.getHeight() / 2) * zoomFactor;
            var ymax = center.lat + (extent.getHeight() / 2) * zoomFactor;
            bounds = new OpenLayers.Bounds(xmin, ymin, xmax, ymax);
        }
        var lastZoom = this.map.getZoom();
        this.map.zoomToExtent(bounds);
        if (lastZoom == this.map.getZoom() && this.alwaysZoom == true) {
            this.map.zoomTo(lastZoom + (this.out ? -1 : 1));
        }
    } else {
        if (!this.out) {
            this.map.setCenter(this.map.getLonLatFromPixel(position), this.map.getZoom() + 1);
        } else {
            this.map.setCenter(this.map.getLonLatFromPixel(position), this.map.getZoom() - 1);
        }
    }
}, CLASS_NAME:"OpenLayers.Control.ZoomBox"});
OpenLayers.Format.WKT = OpenLayers.Class(OpenLayers.Format, {initialize:function (options) {
    this.regExes = {'typeStr':/^\s*(\w+)\s*\(\s*(.*)\s*\)\s*$/, 'spaces':/\s+/, 'parenComma':/\)\s*,\s*\(/, 'doubleParenComma':/\)\s*\)\s*,\s*\(\s*\(/, 'trimParens':/^\s*\(?(.*?)\)?\s*$/};
    OpenLayers.Format.prototype.initialize.apply(this, [options]);
}, read:function (wkt) {
    var features, type, str;
    var matches = this.regExes.typeStr.exec(wkt);
    if (matches) {
        type = matches[1].toLowerCase();
        str = matches[2];
        if (this.parse[type]) {
            features = this.parse[type].apply(this, [str]);
        }
        if (this.internalProjection && this.externalProjection) {
            if (features && features.CLASS_NAME == "OpenLayers.Feature.Vector") {
                features.geometry.transform(this.externalProjection, this.internalProjection);
            } else if (features && type != "geometrycollection" && typeof features == "object") {
                for (var i = 0, len = features.length; i < len; i++) {
                    var component = features[i];
                    component.geometry.transform(this.externalProjection, this.internalProjection);
                }
            }
        }
    }
    return features;
}, write:function (features) {
    var collection, geometry, type, data, isCollection;
    if (features.constructor == Array) {
        collection = features;
        isCollection = true;
    } else {
        collection = [features];
        isCollection = false;
    }
    var pieces = [];
    if (isCollection) {
        pieces.push('GEOMETRYCOLLECTION(');
    }
    for (var i = 0, len = collection.length; i < len; ++i) {
        if (isCollection && i > 0) {
            pieces.push(',');
        }
        geometry = collection[i].geometry;
        type = geometry.CLASS_NAME.split('.')[2].toLowerCase();
        if (!this.extract[type]) {
            return null;
        }
        if (this.internalProjection && this.externalProjection) {
            geometry = geometry.clone();
            geometry.transform(this.internalProjection, this.externalProjection);
        }
        data = this.extract[type].apply(this, [geometry]);
        pieces.push(type.toUpperCase() + '(' + data + ')');
    }
    if (isCollection) {
        pieces.push(')');
    }
    return pieces.join('');
}, extract:{'point':function (point) {
    return point.x + ' ' + point.y;
}, 'multipoint':function (multipoint) {
    var array = [];
    for (var i = 0, len = multipoint.components.length; i < len; ++i) {
        array.push('(' +
            this.extract.point.apply(this, [multipoint.components[i]]) + ')');
    }
    return array.join(',');
}, 'linestring':function (linestring) {
    var array = [];
    for (var i = 0, len = linestring.components.length; i < len; ++i) {
        array.push(this.extract.point.apply(this, [linestring.components[i]]));
    }
    return array.join(',');
}, 'multilinestring':function (multilinestring) {
    var array = [];
    for (var i = 0, len = multilinestring.components.length; i < len; ++i) {
        array.push('(' +
            this.extract.linestring.apply(this, [multilinestring.components[i]]) + ')');
    }
    return array.join(',');
}, 'polygon':function (polygon) {
    var array = [];
    for (var i = 0, len = polygon.components.length; i < len; ++i) {
        array.push('(' +
            this.extract.linestring.apply(this, [polygon.components[i]]) + ')');
    }
    return array.join(',');
}, 'multipolygon':function (multipolygon) {
    var array = [];
    for (var i = 0, len = multipolygon.components.length; i < len; ++i) {
        array.push('(' +
            this.extract.polygon.apply(this, [multipolygon.components[i]]) + ')');
    }
    return array.join(',');
}}, parse:{'point':function (str) {
    var coords = OpenLayers.String.trim(str).split(this.regExes.spaces);
    return new OpenLayers.Feature.Vector(new OpenLayers.Geometry.Point(coords[0], coords[1]));
}, 'multipoint':function (str) {
    var point;
    var points = OpenLayers.String.trim(str).split(this.regExes.parenComma);
    var components = [];
    for (var i = 0, len = points.length; i < len; ++i) {
        point = points[i].replace(this.regExes.trimParens, '$1');
        components.push(this.parse.point.apply(this, [point]).geometry);
    }
    return new OpenLayers.Feature.Vector(new OpenLayers.Geometry.MultiPoint(components));
}, 'linestring':function (str) {
    var points = OpenLayers.String.trim(str).split(',');
    var components = [];
    for (var i = 0, len = points.length; i < len; ++i) {
        components.push(this.parse.point.apply(this, [points[i]]).geometry);
    }
    return new OpenLayers.Feature.Vector(new OpenLayers.Geometry.LineString(components));
}, 'multilinestring':function (str) {
    var line;
    var lines = OpenLayers.String.trim(str).split(this.regExes.parenComma);
    var components = [];
    for (var i = 0, len = lines.length; i < len; ++i) {
        line = lines[i].replace(this.regExes.trimParens, '$1');
        components.push(this.parse.linestring.apply(this, [line]).geometry);
    }
    return new OpenLayers.Feature.Vector(new OpenLayers.Geometry.MultiLineString(components));
}, 'polygon':function (str) {
    var ring, linestring, linearring;
    var rings = OpenLayers.String.trim(str).split(this.regExes.parenComma);
    var components = [];
    for (var i = 0, len = rings.length; i < len; ++i) {
        ring = rings[i].replace(this.regExes.trimParens, '$1');
        linestring = this.parse.linestring.apply(this, [ring]).geometry;
        linearring = new OpenLayers.Geometry.LinearRing(linestring.components);
        components.push(linearring);
    }
    return new OpenLayers.Feature.Vector(new OpenLayers.Geometry.Polygon(components));
}, 'multipolygon':function (str) {
    var polygon;
    var polygons = OpenLayers.String.trim(str).split(this.regExes.doubleParenComma);
    var components = [];
    for (var i = 0, len = polygons.length; i < len; ++i) {
        polygon = polygons[i].replace(this.regExes.trimParens, '$1');
        components.push(this.parse.polygon.apply(this, [polygon]).geometry);
    }
    return new OpenLayers.Feature.Vector(new OpenLayers.Geometry.MultiPolygon(components));
}, 'geometrycollection':function (str) {
    str = str.replace(/,\s*([A-Za-z])/g, '|$1');
    var wktArray = OpenLayers.String.trim(str).split('|');
    var components = [];
    for (var i = 0, len = wktArray.length; i < len; ++i) {
        components.push(OpenLayers.Format.WKT.prototype.read.apply(this, [wktArray[i]]));
    }
    return components;
}}, CLASS_NAME:"OpenLayers.Format.WKT"});
OpenLayers.Layer.Google = OpenLayers.Class(OpenLayers.Layer.EventPane, OpenLayers.Layer.FixedZoomLevels, {MIN_ZOOM_LEVEL:0, MAX_ZOOM_LEVEL:21, RESOLUTIONS:[1.40625, 0.703125, 0.3515625, 0.17578125, 0.087890625, 0.0439453125, 0.02197265625, 0.010986328125, 0.0054931640625, 0.00274658203125, 0.001373291015625, 0.0006866455078125, 0.00034332275390625, 0.000171661376953125, 0.0000858306884765625, 0.00004291534423828125, 0.00002145767211914062, 0.00001072883605957031, 0.00000536441802978515, 0.00000268220901489257, 0.0000013411045074462891, 0.00000067055225372314453], type:null, wrapDateLine:true, sphericalMercator:false, version:null, initialize:function (name, options) {
    options = options || {};
    if (!options.version) {
        options.version = typeof GMap2 === "function" ? "2" : "3";
    }
    var mixin = OpenLayers.Layer.Google["v" +
        options.version.replace(/\./g, "_")];
    if (mixin) {
        OpenLayers.Util.applyDefaults(options, mixin);
    } else {
        throw"Unsupported Google Maps API version: " + options.version;
    }
    OpenLayers.Util.applyDefaults(options, mixin.DEFAULTS);
    if (options.maxExtent) {
        options.maxExtent = options.maxExtent.clone();
    }
    OpenLayers.Layer.EventPane.prototype.initialize.apply(this, [name, options]);
    OpenLayers.Layer.FixedZoomLevels.prototype.initialize.apply(this, [name, options]);
    if (this.sphericalMercator) {
        OpenLayers.Util.extend(this, OpenLayers.Layer.SphericalMercator);
        this.initMercatorParameters();
    }
}, clone:function () {
    return new OpenLayers.Layer.Google(this.name, this.getOptions());
}, setVisibility:function (visible) {
    var opacity = this.opacity == null ? 1 : this.opacity;
    OpenLayers.Layer.EventPane.prototype.setVisibility.apply(this, arguments);
    this.setOpacity(opacity);
}, display:function (visible) {
    if (!this._dragging) {
        this.setGMapVisibility(visible);
    }
    OpenLayers.Layer.EventPane.prototype.display.apply(this, arguments);
}, moveTo:function (bounds, zoomChanged, dragging) {
    this._dragging = dragging;
    OpenLayers.Layer.EventPane.prototype.moveTo.apply(this, arguments);
    delete this._dragging;
}, setOpacity:function (opacity) {
    if (opacity !== this.opacity) {
        if (this.map != null) {
            this.map.events.triggerEvent("changelayer", {layer:this, property:"opacity"});
        }
        this.opacity = opacity;
    }
    if (this.getVisibility()) {
        var container = this.getMapContainer();
        OpenLayers.Util.modifyDOMElement(container, null, null, null, null, null, null, opacity);
    }
}, destroy:function () {
    if (this.map) {
        this.setGMapVisibility(false);
        var cache = OpenLayers.Layer.Google.cache[this.map.id];
        if (cache && cache.count <= 1) {
            this.removeGMapElements();
        }
    }
    OpenLayers.Layer.EventPane.prototype.destroy.apply(this, arguments);
}, removeGMapElements:function () {
    var cache = OpenLayers.Layer.Google.cache[this.map.id];
    if (cache) {
        var container = this.mapObject && this.getMapContainer();
        if (container && container.parentNode) {
            container.parentNode.removeChild(container);
        }
        var termsOfUse = cache.termsOfUse;
        if (termsOfUse && termsOfUse.parentNode) {
            termsOfUse.parentNode.removeChild(termsOfUse);
        }
        var poweredBy = cache.poweredBy;
        if (poweredBy && poweredBy.parentNode) {
            poweredBy.parentNode.removeChild(poweredBy);
        }
    }
}, removeMap:function (map) {
    if (this.visibility && this.mapObject) {
        this.setGMapVisibility(false);
    }
    var cache = OpenLayers.Layer.Google.cache[map.id];
    if (cache) {
        if (cache.count <= 1) {
            this.removeGMapElements();
            delete OpenLayers.Layer.Google.cache[map.id];
        } else {
            --cache.count;
        }
    }
    delete this.termsOfUse;
    delete this.poweredBy;
    delete this.mapObject;
    delete this.dragObject;
    OpenLayers.Layer.EventPane.prototype.removeMap.apply(this, arguments);
}, getOLBoundsFromMapObjectBounds:function (moBounds) {
    var olBounds = null;
    if (moBounds != null) {
        var sw = moBounds.getSouthWest();
        var ne = moBounds.getNorthEast();
        if (this.sphericalMercator) {
            sw = this.forwardMercator(sw.lng(), sw.lat());
            ne = this.forwardMercator(ne.lng(), ne.lat());
        } else {
            sw = new OpenLayers.LonLat(sw.lng(), sw.lat());
            ne = new OpenLayers.LonLat(ne.lng(), ne.lat());
        }
        olBounds = new OpenLayers.Bounds(sw.lon, sw.lat, ne.lon, ne.lat);
    }
    return olBounds;
}, getWarningHTML:function () {
    return OpenLayers.i18n("googleWarning");
}, getMapObjectCenter:function () {
    return this.mapObject.getCenter();
}, getMapObjectZoom:function () {
    return this.mapObject.getZoom();
}, getLongitudeFromMapObjectLonLat:function (moLonLat) {
    return this.sphericalMercator ? this.forwardMercator(moLonLat.lng(), moLonLat.lat()).lon : moLonLat.lng();
}, getLatitudeFromMapObjectLonLat:function (moLonLat) {
    var lat = this.sphericalMercator ? this.forwardMercator(moLonLat.lng(), moLonLat.lat()).lat : moLonLat.lat();
    return lat;
}, getXFromMapObjectPixel:function (moPixel) {
    return moPixel.x;
}, getYFromMapObjectPixel:function (moPixel) {
    return moPixel.y;
}, CLASS_NAME:"OpenLayers.Layer.Google"});
OpenLayers.Layer.Google.cache = {};
OpenLayers.Layer.Google.v2 = {termsOfUse:null, poweredBy:null, dragObject:null, loadMapObject:function () {
    if (!this.type) {
        this.type = G_NORMAL_MAP;
    }
    var mapObject, termsOfUse, poweredBy;
    var cache = OpenLayers.Layer.Google.cache[this.map.id];
    if (cache) {
        mapObject = cache.mapObject;
        termsOfUse = cache.termsOfUse;
        poweredBy = cache.poweredBy;
        ++cache.count;
    } else {
        var container = this.map.viewPortDiv;
        var div = document.createElement("div");
        div.id = this.map.id + "_GMap2Container";
        div.style.position = "absolute";
        div.style.width = "100%";
        div.style.height = "100%";
        container.appendChild(div);
        try {
            mapObject = new GMap2(div);
            termsOfUse = div.lastChild;
            container.appendChild(termsOfUse);
            termsOfUse.style.zIndex = "1100";
            termsOfUse.style.right = "";
            termsOfUse.style.bottom = "";
            termsOfUse.className = "olLayerGoogleCopyright";
            poweredBy = div.lastChild;
            container.appendChild(poweredBy);
            poweredBy.style.zIndex = "1100";
            poweredBy.style.right = "";
            poweredBy.style.bottom = "";
            poweredBy.className = "olLayerGooglePoweredBy gmnoprint";
        } catch (e) {
            throw(e);
        }
        OpenLayers.Layer.Google.cache[this.map.id] = {mapObject:mapObject, termsOfUse:termsOfUse, poweredBy:poweredBy, count:1};
    }
    this.mapObject = mapObject;
    this.termsOfUse = termsOfUse;
    this.poweredBy = poweredBy;
    if (OpenLayers.Util.indexOf(this.mapObject.getMapTypes(), this.type) === -1) {
        this.mapObject.addMapType(this.type);
    }
    if (typeof mapObject.getDragObject == "function") {
        this.dragObject = mapObject.getDragObject();
    } else {
        this.dragPanMapObject = null;
    }
    if (this.isBaseLayer === false) {
        this.setGMapVisibility(this.div.style.display !== "none");
    }
}, onMapResize:function () {
    if (this.visibility && this.mapObject.isLoaded()) {
        this.mapObject.checkResize();
    } else {
        if (!this._resized) {
            var layer = this;
            var handle = GEvent.addListener(this.mapObject, "load", function () {
                GEvent.removeListener(handle);
                delete layer._resized;
                layer.mapObject.checkResize();
                layer.moveTo(layer.map.getCenter(), layer.map.getZoom());
            });
        }
        this._resized = true;
    }
}, setGMapVisibility:function (visible) {
    var cache = OpenLayers.Layer.Google.cache[this.map.id];
    if (cache) {
        var container = this.mapObject.getContainer();
        if (visible === true) {
            this.mapObject.setMapType(this.type);
            container.style.display = "";
            this.termsOfUse.style.left = "";
            this.termsOfUse.style.display = "";
            this.poweredBy.style.display = "";
            cache.displayed = this.id;
        } else {
            if (cache.displayed === this.id) {
                delete cache.displayed;
            }
            if (!cache.displayed) {
                container.style.display = "none";
                this.termsOfUse.style.display = "none";
                this.termsOfUse.style.left = "-9999px";
                this.poweredBy.style.display = "none";
            }
        }
    }
}, getMapContainer:function () {
    return this.mapObject.getContainer();
}, getMapObjectBoundsFromOLBounds:function (olBounds) {
    var moBounds = null;
    if (olBounds != null) {
        var sw = this.sphericalMercator ? this.inverseMercator(olBounds.bottom, olBounds.left) : new OpenLayers.LonLat(olBounds.bottom, olBounds.left);
        var ne = this.sphericalMercator ? this.inverseMercator(olBounds.top, olBounds.right) : new OpenLayers.LonLat(olBounds.top, olBounds.right);
        moBounds = new GLatLngBounds(new GLatLng(sw.lat, sw.lon), new GLatLng(ne.lat, ne.lon));
    }
    return moBounds;
}, setMapObjectCenter:function (center, zoom) {
    this.mapObject.setCenter(center, zoom);
}, dragPanMapObject:function (dX, dY) {
    this.dragObject.moveBy(new GSize(-dX, dY));
}, getMapObjectLonLatFromMapObjectPixel:function (moPixel) {
    return this.mapObject.fromContainerPixelToLatLng(moPixel);
}, getMapObjectPixelFromMapObjectLonLat:function (moLonLat) {
    return this.mapObject.fromLatLngToContainerPixel(moLonLat);
}, getMapObjectZoomFromMapObjectBounds:function (moBounds) {
    return this.mapObject.getBoundsZoomLevel(moBounds);
}, getMapObjectLonLatFromLonLat:function (lon, lat) {
    var gLatLng;
    if (this.sphericalMercator) {
        var lonlat = this.inverseMercator(lon, lat);
        gLatLng = new GLatLng(lonlat.lat, lonlat.lon);
    } else {
        gLatLng = new GLatLng(lat, lon);
    }
    return gLatLng;
}, getMapObjectPixelFromXY:function (x, y) {
    return new GPoint(x, y);
}};
OpenLayers.Layer.Grid = OpenLayers.Class(OpenLayers.Layer.HTTPRequest, {tileSize:null, grid:null, singleTile:false, ratio:1.5, buffer:2, numLoadingTiles:0, initialize:function (name, url, params, options) {
    OpenLayers.Layer.HTTPRequest.prototype.initialize.apply(this, arguments);
    this.events.addEventType("tileloaded");
    this.grid = [];
}, destroy:function () {
    this.clearGrid();
    this.grid = null;
    this.tileSize = null;
    OpenLayers.Layer.HTTPRequest.prototype.destroy.apply(this, arguments);
}, clearGrid:function () {
    if (this.grid) {
        for (var iRow = 0, len = this.grid.length; iRow < len; iRow++) {
            var row = this.grid[iRow];
            for (var iCol = 0, clen = row.length; iCol < clen; iCol++) {
                var tile = row[iCol];
                this.removeTileMonitoringHooks(tile);
                tile.destroy();
            }
        }
        this.grid = [];
    }
}, clone:function (obj) {
    if (obj == null) {
        obj = new OpenLayers.Layer.Grid(this.name, this.url, this.params, this.getOptions());
    }
    obj = OpenLayers.Layer.HTTPRequest.prototype.clone.apply(this, [obj]);
    if (this.tileSize != null) {
        obj.tileSize = this.tileSize.clone();
    }
    obj.grid = [];
    return obj;
}, moveTo:function (bounds, zoomChanged, dragging) {
    OpenLayers.Layer.HTTPRequest.prototype.moveTo.apply(this, arguments);
    bounds = bounds || this.map.getExtent();
    if (bounds != null) {
        var forceReTile = !this.grid.length || zoomChanged;
        var tilesBounds = this.getTilesBounds();
        if (this.singleTile) {
            if (forceReTile || (!dragging && !tilesBounds.containsBounds(bounds))) {
                this.initSingleTile(bounds);
            }
        } else {
            if (forceReTile || !tilesBounds.containsBounds(bounds, true)) {
                this.initGriddedTiles(bounds);
            } else {
                this.moveGriddedTiles(bounds);
            }
        }
    }
}, setTileSize:function (size) {
    if (this.singleTile) {
        size = this.map.getSize();
        size.h = parseInt(size.h * this.ratio);
        size.w = parseInt(size.w * this.ratio);
    }
    OpenLayers.Layer.HTTPRequest.prototype.setTileSize.apply(this, [size]);
}, getGridBounds:function () {
    var msg = "The getGridBounds() function is deprecated. It will be " + "removed in 3.0. Please use getTilesBounds() instead.";
    OpenLayers.Console.warn(msg);
    return this.getTilesBounds();
}, getTilesBounds:function () {
    var bounds = null;
    if (this.grid.length) {
        var bottom = this.grid.length - 1;
        var bottomLeftTile = this.grid[bottom][0];
        var right = this.grid[0].length - 1;
        var topRightTile = this.grid[0][right];
        bounds = new OpenLayers.Bounds(bottomLeftTile.bounds.left, bottomLeftTile.bounds.bottom, topRightTile.bounds.right, topRightTile.bounds.top);
    }
    return bounds;
}, initSingleTile:function (bounds) {
    var center = bounds.getCenterLonLat();
    var tileWidth = bounds.getWidth() * this.ratio;
    var tileHeight = bounds.getHeight() * this.ratio;
    var tileBounds = new OpenLayers.Bounds(center.lon - (tileWidth / 2), center.lat - (tileHeight / 2), center.lon + (tileWidth / 2), center.lat + (tileHeight / 2));
    var ul = new OpenLayers.LonLat(tileBounds.left, tileBounds.top);
    var px = this.map.getLayerPxFromLonLat(ul);
    if (!this.grid.length) {
        this.grid[0] = [];
    }
    var tile = this.grid[0][0];
    if (!tile) {
        tile = this.addTile(tileBounds, px);
        this.addTileMonitoringHooks(tile);
        tile.draw();
        this.grid[0][0] = tile;
    } else {
        tile.moveTo(tileBounds, px);
    }
    this.removeExcessTiles(1, 1);
}, calculateGridLayout:function (bounds, extent, resolution) {
    var tilelon = resolution * this.tileSize.w;
    var tilelat = resolution * this.tileSize.h;
    var offsetlon = bounds.left - extent.left;
    var tilecol = Math.floor(offsetlon / tilelon) - this.buffer;
    var tilecolremain = offsetlon / tilelon - tilecol;
    var tileoffsetx = -tilecolremain * this.tileSize.w;
    var tileoffsetlon = extent.left + tilecol * tilelon;
    var offsetlat = bounds.top - (extent.bottom + tilelat);
    var tilerow = Math.ceil(offsetlat / tilelat) + this.buffer;
    var tilerowremain = tilerow - offsetlat / tilelat;
    var tileoffsety = -tilerowremain * this.tileSize.h;
    var tileoffsetlat = extent.bottom + tilerow * tilelat;
    return{tilelon:tilelon, tilelat:tilelat, tileoffsetlon:tileoffsetlon, tileoffsetlat:tileoffsetlat, tileoffsetx:tileoffsetx, tileoffsety:tileoffsety};
}, initGriddedTiles:function (bounds) {
    var viewSize = this.map.getSize();
    var minRows = Math.ceil(viewSize.h / this.tileSize.h) +
        Math.max(1, 2 * this.buffer);
    var minCols = Math.ceil(viewSize.w / this.tileSize.w) +
        Math.max(1, 2 * this.buffer);
    var extent = this.getMaxExtent();
    var resolution = this.map.getResolution();
    var tileLayout = this.calculateGridLayout(bounds, extent, resolution);
    var tileoffsetx = Math.round(tileLayout.tileoffsetx);
    var tileoffsety = Math.round(tileLayout.tileoffsety);
    var tileoffsetlon = tileLayout.tileoffsetlon;
    var tileoffsetlat = tileLayout.tileoffsetlat;
    var tilelon = tileLayout.tilelon;
    var tilelat = tileLayout.tilelat;
    this.origin = new OpenLayers.Pixel(tileoffsetx, tileoffsety);
    var startX = tileoffsetx;
    var startLon = tileoffsetlon;
    var rowidx = 0;
    var layerContainerDivLeft = parseInt(this.map.layerContainerDiv.style.left);
    var layerContainerDivTop = parseInt(this.map.layerContainerDiv.style.top);
    do {
        var row = this.grid[rowidx++];
        if (!row) {
            row = [];
            this.grid.push(row);
        }
        tileoffsetlon = startLon;
        tileoffsetx = startX;
        var colidx = 0;
        do {
            var tileBounds = new OpenLayers.Bounds(tileoffsetlon, tileoffsetlat, tileoffsetlon + tilelon, tileoffsetlat + tilelat);
            var x = tileoffsetx;
            x -= layerContainerDivLeft;
            var y = tileoffsety;
            y -= layerContainerDivTop;
            var px = new OpenLayers.Pixel(x, y);
            var tile = row[colidx++];
            if (!tile) {
                tile = this.addTile(tileBounds, px);
                this.addTileMonitoringHooks(tile);
                row.push(tile);
            } else {
                tile.moveTo(tileBounds, px, false);
            }
            tileoffsetlon += tilelon;
            tileoffsetx += this.tileSize.w;
        } while ((tileoffsetlon <= bounds.right + tilelon * this.buffer) || colidx < minCols);
        tileoffsetlat -= tilelat;
        tileoffsety += this.tileSize.h;
    } while ((tileoffsetlat >= bounds.bottom - tilelat * this.buffer) || rowidx < minRows);
    this.removeExcessTiles(rowidx, colidx);
    this.spiralTileLoad();
}, getMaxExtent:function () {
    return this.maxExtent;
}, spiralTileLoad:function () {
    var tileQueue = [];
    var directions = ["right", "down", "left", "up"];
    var iRow = 0;
    var iCell = -1;
    var direction = OpenLayers.Util.indexOf(directions, "right");
    var directionsTried = 0;
    while (directionsTried < directions.length) {
        var testRow = iRow;
        var testCell = iCell;
        switch (directions[direction]) {
            case"right":
                testCell++;
                break;
            case"down":
                testRow++;
                break;
            case"left":
                testCell--;
                break;
            case"up":
                testRow--;
                break;
        }
        var tile = null;
        if ((testRow < this.grid.length) && (testRow >= 0) && (testCell < this.grid[0].length) && (testCell >= 0)) {
            tile = this.grid[testRow][testCell];
        }
        if ((tile != null) && (!tile.queued)) {
            tileQueue.unshift(tile);
            tile.queued = true;
            directionsTried = 0;
            iRow = testRow;
            iCell = testCell;
        } else {
            direction = (direction + 1) % 4;
            directionsTried++;
        }
    }
    for (var i = 0, len = tileQueue.length; i < len; i++) {
        var tile = tileQueue[i];
        tile.draw();
        tile.queued = false;
    }
}, addTile:function (bounds, position) {
}, addTileMonitoringHooks:function (tile) {
    tile.onLoadStart = function () {
        if (this.numLoadingTiles == 0) {
            this.events.triggerEvent("loadstart");
        }
        this.numLoadingTiles++;
    };
    tile.events.register("loadstart", this, tile.onLoadStart);
    tile.onLoadEnd = function () {
        this.numLoadingTiles--;
        this.events.triggerEvent("tileloaded");
        if (this.numLoadingTiles == 0) {
            this.events.triggerEvent("loadend");
        }
    };
    tile.events.register("loadend", this, tile.onLoadEnd);
    tile.events.register("unload", this, tile.onLoadEnd);
}, removeTileMonitoringHooks:function (tile) {
    tile.unload();
    tile.events.un({"loadstart":tile.onLoadStart, "loadend":tile.onLoadEnd, "unload":tile.onLoadEnd, scope:this});
}, moveGriddedTiles:function (bounds) {
    var buffer = this.buffer || 1;
    while (true) {
        var tlLayer = this.grid[0][0].position;
        var tlViewPort = this.map.getViewPortPxFromLayerPx(tlLayer);
        if (tlViewPort.x > -this.tileSize.w * (buffer - 1)) {
            this.shiftColumn(true);
        } else if (tlViewPort.x < -this.tileSize.w * buffer) {
            this.shiftColumn(false);
        } else if (tlViewPort.y > -this.tileSize.h * (buffer - 1)) {
            this.shiftRow(true);
        } else if (tlViewPort.y < -this.tileSize.h * buffer) {
            this.shiftRow(false);
        } else {
            break;
        }
    }
    ;
}, shiftRow:function (prepend) {
    var modelRowIndex = (prepend) ? 0 : (this.grid.length - 1);
    var grid = this.grid;
    var modelRow = grid[modelRowIndex];
    var resolution = this.map.getResolution();
    var deltaY = (prepend) ? -this.tileSize.h : this.tileSize.h;
    var deltaLat = resolution * -deltaY;
    var row = (prepend) ? grid.pop() : grid.shift();
    for (var i = 0, len = modelRow.length; i < len; i++) {
        var modelTile = modelRow[i];
        var bounds = modelTile.bounds.clone();
        var position = modelTile.position.clone();
        bounds.bottom = bounds.bottom + deltaLat;
        bounds.top = bounds.top + deltaLat;
        position.y = position.y + deltaY;
        row[i].moveTo(bounds, position);
    }
    if (prepend) {
        grid.unshift(row);
    } else {
        grid.push(row);
    }
}, shiftColumn:function (prepend) {
    var deltaX = (prepend) ? -this.tileSize.w : this.tileSize.w;
    var resolution = this.map.getResolution();
    var deltaLon = resolution * deltaX;
    for (var i = 0, len = this.grid.length; i < len; i++) {
        var row = this.grid[i];
        var modelTileIndex = (prepend) ? 0 : (row.length - 1);
        var modelTile = row[modelTileIndex];
        var bounds = modelTile.bounds.clone();
        var position = modelTile.position.clone();
        bounds.left = bounds.left + deltaLon;
        bounds.right = bounds.right + deltaLon;
        position.x = position.x + deltaX;
        var tile = prepend ? this.grid[i].pop() : this.grid[i].shift();
        tile.moveTo(bounds, position);
        if (prepend) {
            row.unshift(tile);
        } else {
            row.push(tile);
        }
    }
}, removeExcessTiles:function (rows, columns) {
    while (this.grid.length > rows) {
        var row = this.grid.pop();
        for (var i = 0, l = row.length; i < l; i++) {
            var tile = row[i];
            this.removeTileMonitoringHooks(tile);
            tile.destroy();
        }
    }
    while (this.grid[0].length > columns) {
        for (var i = 0, l = this.grid.length; i < l; i++) {
            var row = this.grid[i];
            var tile = row.pop();
            this.removeTileMonitoringHooks(tile);
            tile.destroy();
        }
    }
}, onMapResize:function () {
    if (this.singleTile) {
        this.clearGrid();
        this.setTileSize();
    }
}, getTileBounds:function (viewPortPx) {
    var maxExtent = this.maxExtent;
    var resolution = this.getResolution();
    var tileMapWidth = resolution * this.tileSize.w;
    var tileMapHeight = resolution * this.tileSize.h;
    var mapPoint = this.getLonLatFromViewPortPx(viewPortPx);
    var tileLeft = maxExtent.left + (tileMapWidth * Math.floor((mapPoint.lon -
        maxExtent.left) / tileMapWidth));
    var tileBottom = maxExtent.bottom + (tileMapHeight * Math.floor((mapPoint.lat -
        maxExtent.bottom) / tileMapHeight));
    return new OpenLayers.Bounds(tileLeft, tileBottom, tileLeft + tileMapWidth, tileBottom + tileMapHeight);
}, CLASS_NAME:"OpenLayers.Layer.Grid"});
OpenLayers.Control.Navigation = OpenLayers.Class(OpenLayers.Control, {dragPan:null, dragPanOptions:null, documentDrag:false, zoomBox:null, zoomBoxEnabled:true, zoomWheelEnabled:true, mouseWheelOptions:null, handleRightClicks:false, zoomBoxKeyMask:OpenLayers.Handler.MOD_SHIFT, autoActivate:true, initialize:function (options) {
    this.handlers = {};
    OpenLayers.Control.prototype.initialize.apply(this, arguments);
}, destroy:function () {
    this.deactivate();
    if (this.dragPan) {
        this.dragPan.destroy();
    }
    this.dragPan = null;
    if (this.zoomBox) {
        this.zoomBox.destroy();
    }
    this.zoomBox = null;
    OpenLayers.Control.prototype.destroy.apply(this, arguments);
}, activate:function () {
    this.dragPan.activate();
    if (this.zoomWheelEnabled) {
        this.handlers.wheel.activate();
    }
    this.handlers.click.activate();
    if (this.zoomBoxEnabled) {
        this.zoomBox.activate();
    }
    return OpenLayers.Control.prototype.activate.apply(this, arguments);
}, deactivate:function () {
    this.zoomBox.deactivate();
    this.dragPan.deactivate();
    this.handlers.click.deactivate();
    this.handlers.wheel.deactivate();
    return OpenLayers.Control.prototype.deactivate.apply(this, arguments);
}, draw:function () {
    if (this.handleRightClicks) {
        this.map.viewPortDiv.oncontextmenu = OpenLayers.Function.False;
    }
    var clickCallbacks = {'dblclick':this.defaultDblClick, 'dblrightclick':this.defaultDblRightClick};
    var clickOptions = {'double':true, 'stopDouble':true};
    this.handlers.click = new OpenLayers.Handler.Click(this, clickCallbacks, clickOptions);
    this.dragPan = new OpenLayers.Control.DragPan(OpenLayers.Util.extend({map:this.map, documentDrag:this.documentDrag}, this.dragPanOptions));
    this.zoomBox = new OpenLayers.Control.ZoomBox({map:this.map, keyMask:this.zoomBoxKeyMask});
    this.dragPan.draw();
    this.zoomBox.draw();
    this.handlers.wheel = new OpenLayers.Handler.MouseWheel(this, {"up":this.wheelUp, "down":this.wheelDown}, this.mouseWheelOptions);
}, defaultDblClick:function (evt) {
    var newCenter = this.map.getLonLatFromViewPortPx(evt.xy);
    this.map.setCenter(newCenter, this.map.zoom + 1);
}, defaultDblRightClick:function (evt) {
    var newCenter = this.map.getLonLatFromViewPortPx(evt.xy);
    this.map.setCenter(newCenter, this.map.zoom - 1);
}, wheelChange:function (evt, deltaZ) {
    var currentZoom = this.map.getZoom();
    var newZoom = this.map.getZoom() + Math.round(deltaZ);
    newZoom = Math.max(newZoom, 0);
    newZoom = Math.min(newZoom, this.map.getNumZoomLevels());
    if (newZoom === currentZoom) {
        return;
    }
    var size = this.map.getSize();
    var deltaX = size.w / 2 - evt.xy.x;
    var deltaY = evt.xy.y - size.h / 2;
    var newRes = this.map.baseLayer.getResolutionForZoom(newZoom);
    var zoomPoint = this.map.getLonLatFromPixel(evt.xy);
    var newCenter = new OpenLayers.LonLat(zoomPoint.lon + deltaX * newRes, zoomPoint.lat + deltaY * newRes);
    this.map.setCenter(newCenter, newZoom);
}, wheelUp:function (evt, delta) {
    this.wheelChange(evt, delta || 1);
}, wheelDown:function (evt, delta) {
    this.wheelChange(evt, delta || -1);
}, disableZoomBox:function () {
    this.zoomBoxEnabled = false;
    this.zoomBox.deactivate();
}, enableZoomBox:function () {
    this.zoomBoxEnabled = true;
    if (this.active) {
        this.zoomBox.activate();
    }
}, disableZoomWheel:function () {
    this.zoomWheelEnabled = false;
    this.handlers.wheel.deactivate();
}, enableZoomWheel:function () {
    this.zoomWheelEnabled = true;
    if (this.active) {
        this.handlers.wheel.activate();
    }
}, CLASS_NAME:"OpenLayers.Control.Navigation"});
OpenLayers.Geometry = OpenLayers.Class({id:null, parent:null, bounds:null, initialize:function () {
    this.id = OpenLayers.Util.createUniqueID(this.CLASS_NAME + "_");
}, destroy:function () {
    this.id = null;
    this.bounds = null;
}, clone:function () {
    return new OpenLayers.Geometry();
}, setBounds:function (bounds) {
    if (bounds) {
        this.bounds = bounds.clone();
    }
}, clearBounds:function () {
    this.bounds = null;
    if (this.parent) {
        this.parent.clearBounds();
    }
}, extendBounds:function (newBounds) {
    var bounds = this.getBounds();
    if (!bounds) {
        this.setBounds(newBounds);
    } else {
        this.bounds.extend(newBounds);
    }
}, getBounds:function () {
    if (this.bounds == null) {
        this.calculateBounds();
    }
    return this.bounds;
}, calculateBounds:function () {
}, distanceTo:function (geometry, options) {
}, getVertices:function (nodes) {
}, atPoint:function (lonlat, toleranceLon, toleranceLat) {
    var atPoint = false;
    var bounds = this.getBounds();
    if ((bounds != null) && (lonlat != null)) {
        var dX = (toleranceLon != null) ? toleranceLon : 0;
        var dY = (toleranceLat != null) ? toleranceLat : 0;
        var toleranceBounds = new OpenLayers.Bounds(this.bounds.left - dX, this.bounds.bottom - dY, this.bounds.right + dX, this.bounds.top + dY);
        atPoint = toleranceBounds.containsLonLat(lonlat);
    }
    return atPoint;
}, getLength:function () {
    return 0.0;
}, getArea:function () {
    return 0.0;
}, getCentroid:function () {
    return null;
}, toString:function () {
    return OpenLayers.Format.WKT.prototype.write(new OpenLayers.Feature.Vector(this));
}, CLASS_NAME:"OpenLayers.Geometry"});
OpenLayers.Geometry.fromWKT = function (wkt) {
    var format = arguments.callee.format;
    if (!format) {
        format = new OpenLayers.Format.WKT();
        arguments.callee.format = format;
    }
    var geom;
    var result = format.read(wkt);
    if (result instanceof OpenLayers.Feature.Vector) {
        geom = result.geometry;
    } else if (result instanceof Array) {
        var len = result.length;
        var components = new Array(len);
        for (var i = 0; i < len; ++i) {
            components[i] = result[i].geometry;
        }
        geom = new OpenLayers.Geometry.Collection(components);
    }
    return geom;
};
OpenLayers.Geometry.segmentsIntersect = function (seg1, seg2, options) {
    var point = options && options.point;
    var tolerance = options && options.tolerance;
    var intersection = false;
    var x11_21 = seg1.x1 - seg2.x1;
    var y11_21 = seg1.y1 - seg2.y1;
    var x12_11 = seg1.x2 - seg1.x1;
    var y12_11 = seg1.y2 - seg1.y1;
    var y22_21 = seg2.y2 - seg2.y1;
    var x22_21 = seg2.x2 - seg2.x1;
    var d = (y22_21 * x12_11) - (x22_21 * y12_11);
    var n1 = (x22_21 * y11_21) - (y22_21 * x11_21);
    var n2 = (x12_11 * y11_21) - (y12_11 * x11_21);
    if (d == 0) {
        if (n1 == 0 && n2 == 0) {
            intersection = true;
        }
    } else {
        var along1 = n1 / d;
        var along2 = n2 / d;
        if (along1 >= 0 && along1 <= 1 && along2 >= 0 && along2 <= 1) {
            if (!point) {
                intersection = true;
            } else {
                var x = seg1.x1 + (along1 * x12_11);
                var y = seg1.y1 + (along1 * y12_11);
                intersection = new OpenLayers.Geometry.Point(x, y);
            }
        }
    }
    if (tolerance) {
        var dist;
        if (intersection) {
            if (point) {
                var segs = [seg1, seg2];
                var seg, x, y;
                outer:for (var i = 0; i < 2; ++i) {
                    seg = segs[i];
                    for (var j = 1; j < 3; ++j) {
                        x = seg["x" + j];
                        y = seg["y" + j];
                        dist = Math.sqrt(Math.pow(x - intersection.x, 2) +
                            Math.pow(y - intersection.y, 2));
                        if (dist < tolerance) {
                            intersection.x = x;
                            intersection.y = y;
                            break outer;
                        }
                    }
                }
            }
        } else {
            var segs = [seg1, seg2];
            var source, target, x, y, p, result;
            outer:for (var i = 0; i < 2; ++i) {
                source = segs[i];
                target = segs[(i + 1) % 2];
                for (var j = 1; j < 3; ++j) {
                    p = {x:source["x" + j], y:source["y" + j]};
                    result = OpenLayers.Geometry.distanceToSegment(p, target);
                    if (result.distance < tolerance) {
                        if (point) {
                            intersection = new OpenLayers.Geometry.Point(p.x, p.y);
                        } else {
                            intersection = true;
                        }
                        break outer;
                    }
                }
            }
        }
    }
    return intersection;
};
OpenLayers.Geometry.distanceToSegment = function (point, segment) {
    var x0 = point.x;
    var y0 = point.y;
    var x1 = segment.x1;
    var y1 = segment.y1;
    var x2 = segment.x2;
    var y2 = segment.y2;
    var dx = x2 - x1;
    var dy = y2 - y1;
    var along = ((dx * (x0 - x1)) + (dy * (y0 - y1))) / (Math.pow(dx, 2) + Math.pow(dy, 2));
    var x, y;
    if (along <= 0.0) {
        x = x1;
        y = y1;
    } else if (along >= 1.0) {
        x = x2;
        y = y2;
    } else {
        x = x1 + along * dx;
        y = y1 + along * dy;
    }
    return{distance:Math.sqrt(Math.pow(x - x0, 2) + Math.pow(y - y0, 2)), x:x, y:y};
};
OpenLayers.Layer.Google.v3 = {DEFAULTS:{maxExtent:new OpenLayers.Bounds(-128 * 156543.0339, -128 * 156543.0339, 128 * 156543.0339, 128 * 156543.0339), sphericalMercator:true, maxResolution:156543.0339, units:"m", projection:"EPSG:900913"}, loadMapObject:function () {
    if (!this.type) {
        this.type = google.maps.MapTypeId.ROADMAP;
    }
    var mapObject;
    var cache = OpenLayers.Layer.Google.cache[this.map.id];
    if (cache) {
        mapObject = cache.mapObject;
        ++cache.count;
    } else {
        var container = this.map.viewPortDiv;
        var div = document.createElement("div");
        div.id = this.map.id + "_GMapContainer";
        div.style.position = "absolute";
        div.style.width = "100%";
        div.style.height = "100%";
        container.appendChild(div);
        var center = this.map.getCenter();
        mapObject = new google.maps.Map(div, {center:center ? new google.maps.LatLng(center.lat, center.lon) : new google.maps.LatLng(0, 0), zoom:this.map.getZoom() || 0, mapTypeId:this.type, disableDefaultUI:true, keyboardShortcuts:false, draggable:false, disableDoubleClickZoom:true, scrollwheel:false});
        cache = {mapObject:mapObject, count:1};
        OpenLayers.Layer.Google.cache[this.map.id] = cache;
        this.repositionListener = google.maps.event.addListenerOnce(mapObject, "center_changed", OpenLayers.Function.bind(this.repositionMapElements, this));
    }
    this.mapObject = mapObject;
    this.setGMapVisibility(this.visibility);
}, repositionMapElements:function () {
    google.maps.event.trigger(this.mapObject, "resize");
    var div = this.mapObject.getDiv().firstChild;
    if (!div || div.childNodes.length < 3) {
        this.repositionTimer = window.setTimeout(OpenLayers.Function.bind(this.repositionMapElements, this), 250);
        return false;
    }
    var cache = OpenLayers.Layer.Google.cache[this.map.id];
    var container = this.map.viewPortDiv;
    var termsOfUse = div.lastChild;
    container.appendChild(termsOfUse);
    termsOfUse.style.zIndex = "1100";
    termsOfUse.style.bottom = "";
    termsOfUse.className = "olLayerGoogleCopyright olLayerGoogleV3";
    termsOfUse.style.display = "";
    cache.termsOfUse = termsOfUse;
    var poweredBy = div.lastChild;
    container.appendChild(poweredBy);
    poweredBy.style.zIndex = "1100";
    poweredBy.style.bottom = "";
    poweredBy.className = "olLayerGooglePoweredBy olLayerGoogleV3 gmnoprint";
    poweredBy.style.display = "";
    cache.poweredBy = poweredBy;
    this.setGMapVisibility(this.visibility);
}, onMapResize:function () {
    if (this.visibility) {
        google.maps.event.trigger(this.mapObject, "resize");
    } else {
        if (!this._resized) {
            var layer = this;
            google.maps.event.addListenerOnce(this.mapObject, "tilesloaded", function () {
                delete layer._resized;
                google.maps.event.trigger(layer.mapObject, "resize");
                layer.moveTo(layer.map.getCenter(), layer.map.getZoom());
            });
        }
        this._resized = true;
    }
}, setGMapVisibility:function (visible) {
    var cache = OpenLayers.Layer.Google.cache[this.map.id];
    if (cache) {
        var type = this.type;
        var layers = this.map.layers;
        var layer;
        for (var i = layers.length - 1; i >= 0; --i) {
            layer = layers[i];
            if (layer instanceof OpenLayers.Layer.Google && layer.visibility === true && layer.inRange === true) {
                type = layer.type;
                visible = true;
                break;
            }
        }
        var container = this.mapObject.getDiv();
        if (visible === true) {
            this.mapObject.setMapTypeId(type);
            container.style.left = "";
            if (cache.termsOfUse && cache.termsOfUse.style) {
                cache.termsOfUse.style.left = "";
                cache.termsOfUse.style.display = "";
                cache.poweredBy.style.display = "";
            }
            cache.displayed = this.id;
        } else {
            delete cache.displayed;
            container.style.left = "-9999px";
            if (cache.termsOfUse && cache.termsOfUse.style) {
                cache.termsOfUse.style.display = "none";
                cache.termsOfUse.style.left = "-9999px";
                cache.poweredBy.style.display = "none";
            }
        }
    }
}, getMapContainer:function () {
    return this.mapObject.getDiv();
}, getMapObjectBoundsFromOLBounds:function (olBounds) {
    var moBounds = null;
    if (olBounds != null) {
        var sw = this.sphericalMercator ? this.inverseMercator(olBounds.bottom, olBounds.left) : new OpenLayers.LonLat(olBounds.bottom, olBounds.left);
        var ne = this.sphericalMercator ? this.inverseMercator(olBounds.top, olBounds.right) : new OpenLayers.LonLat(olBounds.top, olBounds.right);
        moBounds = new google.maps.LatLngBounds(new google.maps.LatLng(sw.lat, sw.lon), new google.maps.LatLng(ne.lat, ne.lon));
    }
    return moBounds;
}, getMapObjectLonLatFromMapObjectPixel:function (moPixel) {
    var size = this.map.getSize();
    var lon = this.getLongitudeFromMapObjectLonLat(this.mapObject.center);
    var lat = this.getLatitudeFromMapObjectLonLat(this.mapObject.center);
    var res = this.map.getResolution();
    var delta_x = moPixel.x - (size.w / 2);
    var delta_y = moPixel.y - (size.h / 2);
    var lonlat = new OpenLayers.LonLat(lon + delta_x * res, lat - delta_y * res);
    if (this.wrapDateLine) {
        lonlat = lonlat.wrapDateLine(this.maxExtent);
    }
    return this.getMapObjectLonLatFromLonLat(lonlat.lon, lonlat.lat);
}, getMapObjectPixelFromMapObjectLonLat:function (moLonLat) {
    var lon = this.getLongitudeFromMapObjectLonLat(moLonLat);
    var lat = this.getLatitudeFromMapObjectLonLat(moLonLat);
    var res = this.map.getResolution();
    var extent = this.map.getExtent();
    var px = new OpenLayers.Pixel((1 / res * (lon - extent.left)), (1 / res * (extent.top - lat)));
    return this.getMapObjectPixelFromXY(px.x, px.y);
}, setMapObjectCenter:function (center, zoom) {
    this.mapObject.setOptions({center:center, zoom:zoom});
}, getMapObjectZoomFromMapObjectBounds:function (moBounds) {
    return this.mapObject.getBoundsZoomLevel(moBounds);
}, getMapObjectLonLatFromLonLat:function (lon, lat) {
    var gLatLng;
    if (this.sphericalMercator) {
        var lonlat = this.inverseMercator(lon, lat);
        gLatLng = new google.maps.LatLng(lonlat.lat, lonlat.lon);
    } else {
        gLatLng = new google.maps.LatLng(lat, lon);
    }
    return gLatLng;
}, getMapObjectPixelFromXY:function (x, y) {
    return new google.maps.Point(x, y);
}, destroy:function () {
    if (this.repositionListener) {
        google.maps.event.removeListener(this.repositionListener);
    }
    if (this.repositionTimer) {
        window.clearTimeout(this.repositionTimer);
    }
    OpenLayers.Layer.Google.prototype.destroy.apply(this, arguments);
}};
OpenLayers.Layer.TileCache = OpenLayers.Class(OpenLayers.Layer.Grid, {isBaseLayer:true, format:'image/png', serverResolutions:null, initialize:function (name, url, layername, options) {
    this.layername = layername;
    OpenLayers.Layer.Grid.prototype.initialize.apply(this, [name, url, {}, options]);
    this.extension = this.format.split('/')[1].toLowerCase();
    this.extension = (this.extension == 'jpg') ? 'jpeg' : this.extension;
}, clone:function (obj) {
    if (obj == null) {
        obj = new OpenLayers.Layer.TileCache(this.name, this.url, this.layername, this.getOptions());
    }
    obj = OpenLayers.Layer.Grid.prototype.clone.apply(this, [obj]);
    return obj;
}, getURL:function (bounds) {
    var res = this.map.getResolution();
    var bbox = this.maxExtent;
    var size = this.tileSize;
    var tileX = Math.round((bounds.left - bbox.left) / (res * size.w));
    var tileY = Math.round((bounds.bottom - bbox.bottom) / (res * size.h));
    var tileZ = this.serverResolutions != null ? OpenLayers.Util.indexOf(this.serverResolutions, res) : this.map.getZoom();

    function zeroPad(number, length) {
        number = String(number);
        var zeros = [];
        for (var i = 0; i < length; ++i) {
            zeros.push('0');
        }
        return zeros.join('').substring(0, length - number.length) + number;
    }

    var components = [this.layername, zeroPad(tileZ, 2), zeroPad(parseInt(tileX / 1000000), 3), zeroPad((parseInt(tileX / 1000) % 1000), 3), zeroPad((parseInt(tileX) % 1000), 3), zeroPad(parseInt(tileY / 1000000), 3), zeroPad((parseInt(tileY / 1000) % 1000), 3), zeroPad((parseInt(tileY) % 1000), 3) + '.' + this.extension];
    var path = components.join('/');
    var url = this.url;
    if (url instanceof Array) {
        url = this.selectUrl(path, url);
    }
    url = (url.charAt(url.length - 1) == '/') ? url : url + '/';
    return url + path;
}, addTile:function (bounds, position) {
    var url = this.getURL(bounds);
    return new OpenLayers.Tile.Image(this, position, bounds, url, this.tileSize);
}, CLASS_NAME:"OpenLayers.Layer.TileCache"});
OpenLayers.Layer.XYZ = OpenLayers.Class(OpenLayers.Layer.Grid, {isBaseLayer:true, sphericalMercator:false, zoomOffset:0, initialize:function (name, url, options) {
    if (options && options.sphericalMercator || this.sphericalMercator) {
        options = OpenLayers.Util.extend({maxExtent:new OpenLayers.Bounds(-128 * 156543.0339, -128 * 156543.0339, 128 * 156543.0339, 128 * 156543.0339), maxResolution:156543.0339, numZoomLevels:19, units:"m", projection:"EPSG:900913"}, options);
    }
    url = url || this.url;
    name = name || this.name;
    var newArguments = [name, url, {}, options];
    OpenLayers.Layer.Grid.prototype.initialize.apply(this, newArguments);
}, clone:function (obj) {
    if (obj == null) {
        obj = new OpenLayers.Layer.XYZ(this.name, this.url, this.getOptions());
    }
    obj = OpenLayers.Layer.Grid.prototype.clone.apply(this, [obj]);
    return obj;
}, getURL:function (bounds) {
    var res = this.map.getResolution();
    var x = Math.round((bounds.left - this.maxExtent.left) / (res * this.tileSize.w));
    var y = Math.round((this.maxExtent.top - bounds.top) / (res * this.tileSize.h));
    var z = this.map.getZoom() + this.zoomOffset;
    var url = this.url;
    var s = '' + x + y + z;
    if (url instanceof Array) {
        url = this.selectUrl(s, url);
    }
    var path = OpenLayers.String.format(url, {'x':x, 'y':y, 'z':z});
    return path;
}, addTile:function (bounds, position) {
    return new OpenLayers.Tile.Image(this, position, bounds, null, this.tileSize);
}, setMap:function (map) {
    OpenLayers.Layer.Grid.prototype.setMap.apply(this, arguments);
    if (!this.tileOrigin) {
        this.tileOrigin = new OpenLayers.LonLat(this.maxExtent.left, this.maxExtent.bottom);
    }
}, CLASS_NAME:"OpenLayers.Layer.XYZ"});
OpenLayers.Layer.OSM = OpenLayers.Class(OpenLayers.Layer.XYZ, {name:"OpenStreetMap", attribution:"Data CC-By-SA by <a href='http://openstreetmap.org/'>OpenStreetMap</a>", sphericalMercator:true, url:'http://tile.openstreetmap.org/${z}/${x}/${y}.png', clone:function (obj) {
    if (obj == null) {
        obj = new OpenLayers.Layer.OSM(this.name, this.url, this.getOptions());
    }
    obj = OpenLayers.Layer.XYZ.prototype.clone.apply(this, [obj]);
    return obj;
}, CLASS_NAME:"OpenLayers.Layer.OSM"});
OpenLayers.Geometry.Collection = OpenLayers.Class(OpenLayers.Geometry, {components:null, componentTypes:null, initialize:function (components) {
    OpenLayers.Geometry.prototype.initialize.apply(this, arguments);
    this.components = [];
    if (components != null) {
        this.addComponents(components);
    }
}, destroy:function () {
    this.components.length = 0;
    this.components = null;
    OpenLayers.Geometry.prototype.destroy.apply(this, arguments);
}, clone:function () {
    var geometry = eval("new " + this.CLASS_NAME + "()");
    for (var i = 0, len = this.components.length; i < len; i++) {
        geometry.addComponent(this.components[i].clone());
    }
    OpenLayers.Util.applyDefaults(geometry, this);
    return geometry;
}, getComponentsString:function () {
    var strings = [];
    for (var i = 0, len = this.components.length; i < len; i++) {
        strings.push(this.components[i].toShortString());
    }
    return strings.join(",");
}, calculateBounds:function () {
    this.bounds = null;
    if (this.components && this.components.length > 0) {
        this.setBounds(this.components[0].getBounds());
        for (var i = 1, len = this.components.length; i < len; i++) {
            this.extendBounds(this.components[i].getBounds());
        }
    }
}, addComponents:function (components) {
    if (!(components instanceof Array)) {
        components = [components];
    }
    for (var i = 0, len = components.length; i < len; i++) {
        this.addComponent(components[i]);
    }
}, addComponent:function (component, index) {
    var added = false;
    if (component) {
        if (this.componentTypes == null || (OpenLayers.Util.indexOf(this.componentTypes, component.CLASS_NAME) > -1)) {
            if (index != null && (index < this.components.length)) {
                var components1 = this.components.slice(0, index);
                var components2 = this.components.slice(index, this.components.length);
                components1.push(component);
                this.components = components1.concat(components2);
            } else {
                this.components.push(component);
            }
            component.parent = this;
            this.clearBounds();
            added = true;
        }
    }
    return added;
}, removeComponents:function (components) {
    if (!(components instanceof Array)) {
        components = [components];
    }
    for (var i = components.length - 1; i >= 0; --i) {
        this.removeComponent(components[i]);
    }
}, removeComponent:function (component) {
    OpenLayers.Util.removeItem(this.components, component);
    this.clearBounds();
}, getLength:function () {
    var length = 0.0;
    for (var i = 0, len = this.components.length; i < len; i++) {
        length += this.components[i].getLength();
    }
    return length;
}, getArea:function () {
    var area = 0.0;
    for (var i = 0, len = this.components.length; i < len; i++) {
        area += this.components[i].getArea();
    }
    return area;
}, getGeodesicArea:function (projection) {
    var area = 0.0;
    for (var i = 0, len = this.components.length; i < len; i++) {
        area += this.components[i].getGeodesicArea(projection);
    }
    return area;
}, getCentroid:function (weighted) {
    if (!weighted) {
        return this.components.length && this.components[0].getCentroid();
    }
    var len = this.components.length;
    if (!len) {
        return false;
    }
    var areas = [];
    var centroids = [];
    var areaSum = 0;
    var minArea = Number.MAX_VALUE;
    var component;
    for (var i = 0; i < len; ++i) {
        component = this.components[i];
        var area = component.getArea();
        var centroid = component.getCentroid(true);
        if (isNaN(area) || isNaN(centroid.x) || isNaN(centroid.y)) {
            continue;
        }
        areas.push(area);
        areaSum += area;
        minArea = (area < minArea && area > 0) ? area : minArea;
        centroids.push(centroid);
    }
    len = areas.length;
    if (areaSum === 0) {
        for (var i = 0; i < len; ++i) {
            areas[i] = 1;
        }
        areaSum = areas.length;
    } else {
        for (var i = 0; i < len; ++i) {
            areas[i] /= minArea;
        }
        areaSum /= minArea;
    }
    var xSum = 0, ySum = 0, centroid, area;
    for (var i = 0; i < len; ++i) {
        centroid = centroids[i];
        area = areas[i];
        xSum += centroid.x * area;
        ySum += centroid.y * area;
    }
    return new OpenLayers.Geometry.Point(xSum / areaSum, ySum / areaSum);
}, getGeodesicLength:function (projection) {
    var length = 0.0;
    for (var i = 0, len = this.components.length; i < len; i++) {
        length += this.components[i].getGeodesicLength(projection);
    }
    return length;
}, move:function (x, y) {
    for (var i = 0, len = this.components.length; i < len; i++) {
        this.components[i].move(x, y);
    }
}, rotate:function (angle, origin) {
    for (var i = 0, len = this.components.length; i < len; ++i) {
        this.components[i].rotate(angle, origin);
    }
}, resize:function (scale, origin, ratio) {
    for (var i = 0; i < this.components.length; ++i) {
        this.components[i].resize(scale, origin, ratio);
    }
    return this;
}, distanceTo:function (geometry, options) {
    var edge = !(options && options.edge === false);
    var details = edge && options && options.details;
    var result, best, distance;
    var min = Number.POSITIVE_INFINITY;
    for (var i = 0, len = this.components.length; i < len; ++i) {
        result = this.components[i].distanceTo(geometry, options);
        distance = details ? result.distance : result;
        if (distance < min) {
            min = distance;
            best = result;
            if (min == 0) {
                break;
            }
        }
    }
    return best;
}, equals:function (geometry) {
    var equivalent = true;
    if (!geometry || !geometry.CLASS_NAME || (this.CLASS_NAME != geometry.CLASS_NAME)) {
        equivalent = false;
    } else if (!(geometry.components instanceof Array) || (geometry.components.length != this.components.length)) {
        equivalent = false;
    } else {
        for (var i = 0, len = this.components.length; i < len; ++i) {
            if (!this.components[i].equals(geometry.components[i])) {
                equivalent = false;
                break;
            }
        }
    }
    return equivalent;
}, transform:function (source, dest) {
    if (source && dest) {
        for (var i = 0, len = this.components.length; i < len; i++) {
            var component = this.components[i];
            component.transform(source, dest);
        }
        this.bounds = null;
    }
    return this;
}, intersects:function (geometry) {
    var intersect = false;
    for (var i = 0, len = this.components.length; i < len; ++i) {
        intersect = geometry.intersects(this.components[i]);
        if (intersect) {
            break;
        }
    }
    return intersect;
}, getVertices:function (nodes) {
    var vertices = [];
    for (var i = 0, len = this.components.length; i < len; ++i) {
        Array.prototype.push.apply(vertices, this.components[i].getVertices(nodes));
    }
    return vertices;
}, CLASS_NAME:"OpenLayers.Geometry.Collection"});
OpenLayers.Geometry.Point = OpenLayers.Class(OpenLayers.Geometry, {x:null, y:null, initialize:function (x, y) {
    OpenLayers.Geometry.prototype.initialize.apply(this, arguments);
    this.x = parseFloat(x);
    this.y = parseFloat(y);
}, clone:function (obj) {
    if (obj == null) {
        obj = new OpenLayers.Geometry.Point(this.x, this.y);
    }
    OpenLayers.Util.applyDefaults(obj, this);
    return obj;
}, calculateBounds:function () {
    this.bounds = new OpenLayers.Bounds(this.x, this.y, this.x, this.y);
}, distanceTo:function (geometry, options) {
    var edge = !(options && options.edge === false);
    var details = edge && options && options.details;
    var distance, x0, y0, x1, y1, result;
    if (geometry instanceof OpenLayers.Geometry.Point) {
        x0 = this.x;
        y0 = this.y;
        x1 = geometry.x;
        y1 = geometry.y;
        distance = Math.sqrt(Math.pow(x0 - x1, 2) + Math.pow(y0 - y1, 2));
        result = !details ? distance : {x0:x0, y0:y0, x1:x1, y1:y1, distance:distance};
    } else {
        result = geometry.distanceTo(this, options);
        if (details) {
            result = {x0:result.x1, y0:result.y1, x1:result.x0, y1:result.y0, distance:result.distance};
        }
    }
    return result;
}, equals:function (geom) {
    var equals = false;
    if (geom != null) {
        equals = ((this.x == geom.x && this.y == geom.y) || (isNaN(this.x) && isNaN(this.y) && isNaN(geom.x) && isNaN(geom.y)));
    }
    return equals;
}, toShortString:function () {
    return(this.x + ", " + this.y);
}, move:function (x, y) {
    this.x = this.x + x;
    this.y = this.y + y;
    this.clearBounds();
}, rotate:function (angle, origin) {
    angle *= Math.PI / 180;
    var radius = this.distanceTo(origin);
    var theta = angle + Math.atan2(this.y - origin.y, this.x - origin.x);
    this.x = origin.x + (radius * Math.cos(theta));
    this.y = origin.y + (radius * Math.sin(theta));
    this.clearBounds();
}, getCentroid:function () {
    return new OpenLayers.Geometry.Point(this.x, this.y);
}, resize:function (scale, origin, ratio) {
    ratio = (ratio == undefined) ? 1 : ratio;
    this.x = origin.x + (scale * ratio * (this.x - origin.x));
    this.y = origin.y + (scale * (this.y - origin.y));
    this.clearBounds();
    return this;
}, intersects:function (geometry) {
    var intersect = false;
    if (geometry.CLASS_NAME == "OpenLayers.Geometry.Point") {
        intersect = this.equals(geometry);
    } else {
        intersect = geometry.intersects(this);
    }
    return intersect;
}, transform:function (source, dest) {
    if ((source && dest)) {
        OpenLayers.Projection.transform(this, source, dest);
        this.bounds = null;
    }
    return this;
}, getVertices:function (nodes) {
    return[this];
}, CLASS_NAME:"OpenLayers.Geometry.Point"});
OpenLayers.Geometry.MultiPoint = OpenLayers.Class(OpenLayers.Geometry.Collection, {componentTypes:["OpenLayers.Geometry.Point"], initialize:function (components) {
    OpenLayers.Geometry.Collection.prototype.initialize.apply(this, arguments);
}, addPoint:function (point, index) {
    this.addComponent(point, index);
}, removePoint:function (point) {
    this.removeComponent(point);
}, CLASS_NAME:"OpenLayers.Geometry.MultiPoint"});
OpenLayers.Geometry.Curve = OpenLayers.Class(OpenLayers.Geometry.MultiPoint, {componentTypes:["OpenLayers.Geometry.Point"], initialize:function (points) {
    OpenLayers.Geometry.MultiPoint.prototype.initialize.apply(this, arguments);
}, getLength:function () {
    var length = 0.0;
    if (this.components && (this.components.length > 1)) {
        for (var i = 1, len = this.components.length; i < len; i++) {
            length += this.components[i - 1].distanceTo(this.components[i]);
        }
    }
    return length;
}, getGeodesicLength:function (projection) {
    var geom = this;
    if (projection) {
        var gg = new OpenLayers.Projection("EPSG:4326");
        if (!gg.equals(projection)) {
            geom = this.clone().transform(projection, gg);
        }
    }
    var length = 0.0;
    if (geom.components && (geom.components.length > 1)) {
        var p1, p2;
        for (var i = 1, len = geom.components.length; i < len; i++) {
            p1 = geom.components[i - 1];
            p2 = geom.components[i];
            length += OpenLayers.Util.distVincenty({lon:p1.x, lat:p1.y}, {lon:p2.x, lat:p2.y});
        }
    }
    return length * 1000;
}, CLASS_NAME:"OpenLayers.Geometry.Curve"});
OpenLayers.Geometry.LineString = OpenLayers.Class(OpenLayers.Geometry.Curve, {initialize:function (points) {
    OpenLayers.Geometry.Curve.prototype.initialize.apply(this, arguments);
}, removeComponent:function (point) {
    if (this.components && (this.components.length > 2)) {
        OpenLayers.Geometry.Collection.prototype.removeComponent.apply(this, arguments);
    }
}, intersects:function (geometry) {
    var intersect = false;
    var type = geometry.CLASS_NAME;
    if (type == "OpenLayers.Geometry.LineString" || type == "OpenLayers.Geometry.LinearRing" || type == "OpenLayers.Geometry.Point") {
        var segs1 = this.getSortedSegments();
        var segs2;
        if (type == "OpenLayers.Geometry.Point") {
            segs2 = [
                {x1:geometry.x, y1:geometry.y, x2:geometry.x, y2:geometry.y}
            ];
        } else {
            segs2 = geometry.getSortedSegments();
        }
        var seg1, seg1x1, seg1x2, seg1y1, seg1y2, seg2, seg2y1, seg2y2;
        outer:for (var i = 0, len = segs1.length; i < len; ++i) {
            seg1 = segs1[i];
            seg1x1 = seg1.x1;
            seg1x2 = seg1.x2;
            seg1y1 = seg1.y1;
            seg1y2 = seg1.y2;
            inner:for (var j = 0, jlen = segs2.length; j < jlen; ++j) {
                seg2 = segs2[j];
                if (seg2.x1 > seg1x2) {
                    break;
                }
                if (seg2.x2 < seg1x1) {
                    continue;
                }
                seg2y1 = seg2.y1;
                seg2y2 = seg2.y2;
                if (Math.min(seg2y1, seg2y2) > Math.max(seg1y1, seg1y2)) {
                    continue;
                }
                if (Math.max(seg2y1, seg2y2) < Math.min(seg1y1, seg1y2)) {
                    continue;
                }
                if (OpenLayers.Geometry.segmentsIntersect(seg1, seg2)) {
                    intersect = true;
                    break outer;
                }
            }
        }
    } else {
        intersect = geometry.intersects(this);
    }
    return intersect;
}, getSortedSegments:function () {
    var numSeg = this.components.length - 1;
    var segments = new Array(numSeg), point1, point2;
    for (var i = 0; i < numSeg; ++i) {
        point1 = this.components[i];
        point2 = this.components[i + 1];
        if (point1.x < point2.x) {
            segments[i] = {x1:point1.x, y1:point1.y, x2:point2.x, y2:point2.y};
        } else {
            segments[i] = {x1:point2.x, y1:point2.y, x2:point1.x, y2:point1.y};
        }
    }
    function byX1(seg1, seg2) {
        return seg1.x1 - seg2.x1;
    }

    return segments.sort(byX1);
}, splitWithSegment:function (seg, options) {
    var edge = !(options && options.edge === false);
    var tolerance = options && options.tolerance;
    var lines = [];
    var verts = this.getVertices();
    var points = [];
    var intersections = [];
    var split = false;
    var vert1, vert2, point;
    var node, vertex, target;
    var interOptions = {point:true, tolerance:tolerance};
    var result = null;
    for (var i = 0, stop = verts.length - 2; i <= stop; ++i) {
        vert1 = verts[i];
        points.push(vert1.clone());
        vert2 = verts[i + 1];
        target = {x1:vert1.x, y1:vert1.y, x2:vert2.x, y2:vert2.y};
        point = OpenLayers.Geometry.segmentsIntersect(seg, target, interOptions);
        if (point instanceof OpenLayers.Geometry.Point) {
            if ((point.x === seg.x1 && point.y === seg.y1) || (point.x === seg.x2 && point.y === seg.y2) || point.equals(vert1) || point.equals(vert2)) {
                vertex = true;
            } else {
                vertex = false;
            }
            if (vertex || edge) {
                if (!point.equals(intersections[intersections.length - 1])) {
                    intersections.push(point.clone());
                }
                if (i === 0) {
                    if (point.equals(vert1)) {
                        continue;
                    }
                }
                if (point.equals(vert2)) {
                    continue;
                }
                split = true;
                if (!point.equals(vert1)) {
                    points.push(point);
                }
                lines.push(new OpenLayers.Geometry.LineString(points));
                points = [point.clone()];
            }
        }
    }
    if (split) {
        points.push(vert2.clone());
        lines.push(new OpenLayers.Geometry.LineString(points));
    }
    if (intersections.length > 0) {
        var xDir = seg.x1 < seg.x2 ? 1 : -1;
        var yDir = seg.y1 < seg.y2 ? 1 : -1;
        result = {lines:lines, points:intersections.sort(function (p1, p2) {
            return(xDir * p1.x - xDir * p2.x) || (yDir * p1.y - yDir * p2.y);
        })};
    }
    return result;
}, split:function (target, options) {
    var results = null;
    var mutual = options && options.mutual;
    var sourceSplit, targetSplit, sourceParts, targetParts;
    if (target instanceof OpenLayers.Geometry.LineString) {
        var verts = this.getVertices();
        var vert1, vert2, seg, splits, lines, point;
        var points = [];
        sourceParts = [];
        for (var i = 0, stop = verts.length - 2; i <= stop; ++i) {
            vert1 = verts[i];
            vert2 = verts[i + 1];
            seg = {x1:vert1.x, y1:vert1.y, x2:vert2.x, y2:vert2.y};
            targetParts = targetParts || [target];
            if (mutual) {
                points.push(vert1.clone());
            }
            for (var j = 0; j < targetParts.length; ++j) {
                splits = targetParts[j].splitWithSegment(seg, options);
                if (splits) {
                    lines = splits.lines;
                    if (lines.length > 0) {
                        lines.unshift(j, 1);
                        Array.prototype.splice.apply(targetParts, lines);
                        j += lines.length - 2;
                    }
                    if (mutual) {
                        for (var k = 0, len = splits.points.length; k < len; ++k) {
                            point = splits.points[k];
                            if (!point.equals(vert1)) {
                                points.push(point);
                                sourceParts.push(new OpenLayers.Geometry.LineString(points));
                                if (point.equals(vert2)) {
                                    points = [];
                                } else {
                                    points = [point.clone()];
                                }
                            }
                        }
                    }
                }
            }
        }
        if (mutual && sourceParts.length > 0 && points.length > 0) {
            points.push(vert2.clone());
            sourceParts.push(new OpenLayers.Geometry.LineString(points));
        }
    } else {
        results = target.splitWith(this, options);
    }
    if (targetParts && targetParts.length > 1) {
        targetSplit = true;
    } else {
        targetParts = [];
    }
    if (sourceParts && sourceParts.length > 1) {
        sourceSplit = true;
    } else {
        sourceParts = [];
    }
    if (targetSplit || sourceSplit) {
        if (mutual) {
            results = [sourceParts, targetParts];
        } else {
            results = targetParts;
        }
    }
    return results;
}, splitWith:function (geometry, options) {
    return geometry.split(this, options);
}, getVertices:function (nodes) {
    var vertices;
    if (nodes === true) {
        vertices = [this.components[0], this.components[this.components.length - 1]];
    } else if (nodes === false) {
        vertices = this.components.slice(1, this.components.length - 1);
    } else {
        vertices = this.components.slice();
    }
    return vertices;
}, distanceTo:function (geometry, options) {
    var edge = !(options && options.edge === false);
    var details = edge && options && options.details;
    var result, best = {};
    var min = Number.POSITIVE_INFINITY;
    if (geometry instanceof OpenLayers.Geometry.Point) {
        var segs = this.getSortedSegments();
        var x = geometry.x;
        var y = geometry.y;
        var seg;
        for (var i = 0, len = segs.length; i < len; ++i) {
            seg = segs[i];
            result = OpenLayers.Geometry.distanceToSegment(geometry, seg);
            if (result.distance < min) {
                min = result.distance;
                best = result;
                if (min === 0) {
                    break;
                }
            } else {
                if (seg.x2 > x && ((y > seg.y1 && y < seg.y2) || (y < seg.y1 && y > seg.y2))) {
                    break;
                }
            }
        }
        if (details) {
            best = {distance:best.distance, x0:best.x, y0:best.y, x1:x, y1:y};
        } else {
            best = best.distance;
        }
    } else if (geometry instanceof OpenLayers.Geometry.LineString) {
        var segs0 = this.getSortedSegments();
        var segs1 = geometry.getSortedSegments();
        var seg0, seg1, intersection, x0, y0;
        var len1 = segs1.length;
        var interOptions = {point:true};
        outer:for (var i = 0, len = segs0.length; i < len; ++i) {
            seg0 = segs0[i];
            x0 = seg0.x1;
            y0 = seg0.y1;
            for (var j = 0; j < len1; ++j) {
                seg1 = segs1[j];
                intersection = OpenLayers.Geometry.segmentsIntersect(seg0, seg1, interOptions);
                if (intersection) {
                    min = 0;
                    best = {distance:0, x0:intersection.x, y0:intersection.y, x1:intersection.x, y1:intersection.y};
                    break outer;
                } else {
                    result = OpenLayers.Geometry.distanceToSegment({x:x0, y:y0}, seg1);
                    if (result.distance < min) {
                        min = result.distance;
                        best = {distance:min, x0:x0, y0:y0, x1:result.x, y1:result.y};
                    }
                }
            }
        }
        if (!details) {
            best = best.distance;
        }
        if (min !== 0) {
            if (seg0) {
                result = geometry.distanceTo(new OpenLayers.Geometry.Point(seg0.x2, seg0.y2), options);
                var dist = details ? result.distance : result;
                if (dist < min) {
                    if (details) {
                        best = {distance:min, x0:result.x1, y0:result.y1, x1:result.x0, y1:result.y0};
                    } else {
                        best = dist;
                    }
                }
            }
        }
    } else {
        best = geometry.distanceTo(this, options);
        if (details) {
            best = {distance:best.distance, x0:best.x1, y0:best.y1, x1:best.x0, y1:best.y0};
        }
    }
    return best;
}, CLASS_NAME:"OpenLayers.Geometry.LineString"});
OpenLayers.Geometry.LinearRing = OpenLayers.Class(OpenLayers.Geometry.LineString, {componentTypes:["OpenLayers.Geometry.Point"], initialize:function (points) {
    OpenLayers.Geometry.LineString.prototype.initialize.apply(this, arguments);
}, addComponent:function (point, index) {
    var added = false;
    var lastPoint = this.components.pop();
    if (index != null || !point.equals(lastPoint)) {
        added = OpenLayers.Geometry.Collection.prototype.addComponent.apply(this, arguments);
    }
    var firstPoint = this.components[0];
    OpenLayers.Geometry.Collection.prototype.addComponent.apply(this, [firstPoint]);
    return added;
}, removeComponent:function (point) {
    if (this.components.length > 4) {
        this.components.pop();
        OpenLayers.Geometry.Collection.prototype.removeComponent.apply(this, arguments);
        var firstPoint = this.components[0];
        OpenLayers.Geometry.Collection.prototype.addComponent.apply(this, [firstPoint]);
    }
}, move:function (x, y) {
    for (var i = 0, len = this.components.length; i < len - 1; i++) {
        this.components[i].move(x, y);
    }
}, rotate:function (angle, origin) {
    for (var i = 0, len = this.components.length; i < len - 1; ++i) {
        this.components[i].rotate(angle, origin);
    }
}, resize:function (scale, origin, ratio) {
    for (var i = 0, len = this.components.length; i < len - 1; ++i) {
        this.components[i].resize(scale, origin, ratio);
    }
    return this;
}, transform:function (source, dest) {
    if (source && dest) {
        for (var i = 0, len = this.components.length; i < len - 1; i++) {
            var component = this.components[i];
            component.transform(source, dest);
        }
        this.bounds = null;
    }
    return this;
}, getCentroid:function () {
    if (this.components && (this.components.length > 2)) {
        var sumX = 0.0;
        var sumY = 0.0;
        for (var i = 0; i < this.components.length - 1; i++) {
            var b = this.components[i];
            var c = this.components[i + 1];
            sumX += (b.x + c.x) * (b.x * c.y - c.x * b.y);
            sumY += (b.y + c.y) * (b.x * c.y - c.x * b.y);
        }
        var area = -1 * this.getArea();
        var x = sumX / (6 * area);
        var y = sumY / (6 * area);
        return new OpenLayers.Geometry.Point(x, y);
    } else {
        return null;
    }
}, getArea:function () {
    var area = 0.0;
    if (this.components && (this.components.length > 2)) {
        var sum = 0.0;
        for (var i = 0, len = this.components.length; i < len - 1; i++) {
            var b = this.components[i];
            var c = this.components[i + 1];
            sum += (b.x + c.x) * (c.y - b.y);
        }
        area = -sum / 2.0;
    }
    return area;
}, getGeodesicArea:function (projection) {
    var ring = this;
    if (projection) {
        var gg = new OpenLayers.Projection("EPSG:4326");
        if (!gg.equals(projection)) {
            ring = this.clone().transform(projection, gg);
        }
    }
    var area = 0.0;
    var len = ring.components && ring.components.length;
    if (len > 2) {
        var p1, p2;
        for (var i = 0; i < len - 1; i++) {
            p1 = ring.components[i];
            p2 = ring.components[i + 1];
            area += OpenLayers.Util.rad(p2.x - p1.x) * (2 + Math.sin(OpenLayers.Util.rad(p1.y)) +
                Math.sin(OpenLayers.Util.rad(p2.y)));
        }
        area = area * 6378137.0 * 6378137.0 / 2.0;
    }
    return area;
}, containsPoint:function (point) {
    var approx = OpenLayers.Number.limitSigDigs;
    var digs = 14;
    var px = approx(point.x, digs);
    var py = approx(point.y, digs);

    function getX(y, x1, y1, x2, y2) {
        return(((x1 - x2) * y) + ((x2 * y1) - (x1 * y2))) / (y1 - y2);
    }

    var numSeg = this.components.length - 1;
    var start, end, x1, y1, x2, y2, cx, cy;
    var crosses = 0;
    for (var i = 0; i < numSeg; ++i) {
        start = this.components[i];
        x1 = approx(start.x, digs);
        y1 = approx(start.y, digs);
        end = this.components[i + 1];
        x2 = approx(end.x, digs);
        y2 = approx(end.y, digs);
        if (y1 == y2) {
            if (py == y1) {
                if (x1 <= x2 && (px >= x1 && px <= x2) || x1 >= x2 && (px <= x1 && px >= x2)) {
                    crosses = -1;
                    break;
                }
            }
            continue;
        }
        cx = approx(getX(py, x1, y1, x2, y2), digs);
        if (cx == px) {
            if (y1 < y2 && (py >= y1 && py <= y2) || y1 > y2 && (py <= y1 && py >= y2)) {
                crosses = -1;
                break;
            }
        }
        if (cx <= px) {
            continue;
        }
        if (x1 != x2 && (cx < Math.min(x1, x2) || cx > Math.max(x1, x2))) {
            continue;
        }
        if (y1 < y2 && (py >= y1 && py < y2) || y1 > y2 && (py < y1 && py >= y2)) {
            ++crosses;
        }
    }
    var contained = (crosses == -1) ? 1 : !!(crosses & 1);
    return contained;
}, intersects:function (geometry) {
    var intersect = false;
    if (geometry.CLASS_NAME == "OpenLayers.Geometry.Point") {
        intersect = this.containsPoint(geometry);
    } else if (geometry.CLASS_NAME == "OpenLayers.Geometry.LineString") {
        intersect = geometry.intersects(this);
    } else if (geometry.CLASS_NAME == "OpenLayers.Geometry.LinearRing") {
        intersect = OpenLayers.Geometry.LineString.prototype.intersects.apply(this, [geometry]);
    } else {
        for (var i = 0, len = geometry.components.length; i < len; ++i) {
            intersect = geometry.components[i].intersects(this);
            if (intersect) {
                break;
            }
        }
    }
    return intersect;
}, getVertices:function (nodes) {
    return(nodes === true) ? [] : this.components.slice(0, this.components.length - 1);
}, CLASS_NAME:"OpenLayers.Geometry.LinearRing"});
OpenLayers.Geometry.Polygon = OpenLayers.Class(OpenLayers.Geometry.Collection, {componentTypes:["OpenLayers.Geometry.LinearRing"], initialize:function (components) {
    OpenLayers.Geometry.Collection.prototype.initialize.apply(this, arguments);
}, getArea:function () {
    var area = 0.0;
    if (this.components && (this.components.length > 0)) {
        area += Math.abs(this.components[0].getArea());
        for (var i = 1, len = this.components.length; i < len; i++) {
            area -= Math.abs(this.components[i].getArea());
        }
    }
    return area;
}, getGeodesicArea:function (projection) {
    var area = 0.0;
    if (this.components && (this.components.length > 0)) {
        area += Math.abs(this.components[0].getGeodesicArea(projection));
        for (var i = 1, len = this.components.length; i < len; i++) {
            area -= Math.abs(this.components[i].getGeodesicArea(projection));
        }
    }
    return area;
}, containsPoint:function (point) {
    var numRings = this.components.length;
    var contained = false;
    if (numRings > 0) {
        contained = this.components[0].containsPoint(point);
        if (contained !== 1) {
            if (contained && numRings > 1) {
                var hole;
                for (var i = 1; i < numRings; ++i) {
                    hole = this.components[i].containsPoint(point);
                    if (hole) {
                        if (hole === 1) {
                            contained = 1;
                        } else {
                            contained = false;
                        }
                        break;
                    }
                }
            }
        }
    }
    return contained;
}, intersects:function (geometry) {
    var intersect = false;
    var i, len;
    if (geometry.CLASS_NAME == "OpenLayers.Geometry.Point") {
        intersect = this.containsPoint(geometry);
    } else if (geometry.CLASS_NAME == "OpenLayers.Geometry.LineString" || geometry.CLASS_NAME == "OpenLayers.Geometry.LinearRing") {
        for (i = 0, len = this.components.length; i < len; ++i) {
            intersect = geometry.intersects(this.components[i]);
            if (intersect) {
                break;
            }
        }
        if (!intersect) {
            for (i = 0, len = geometry.components.length; i < len; ++i) {
                intersect = this.containsPoint(geometry.components[i]);
                if (intersect) {
                    break;
                }
            }
        }
    } else {
        for (i = 0, len = geometry.components.length; i < len; ++i) {
            intersect = this.intersects(geometry.components[i]);
            if (intersect) {
                break;
            }
        }
    }
    if (!intersect && geometry.CLASS_NAME == "OpenLayers.Geometry.Polygon") {
        var ring = this.components[0];
        for (i = 0, len = ring.components.length; i < len; ++i) {
            intersect = geometry.containsPoint(ring.components[i]);
            if (intersect) {
                break;
            }
        }
    }
    return intersect;
}, distanceTo:function (geometry, options) {
    var edge = !(options && options.edge === false);
    var result;
    if (!edge && this.intersects(geometry)) {
        result = 0;
    } else {
        result = OpenLayers.Geometry.Collection.prototype.distanceTo.apply(this, [geometry, options]);
    }
    return result;
}, CLASS_NAME:"OpenLayers.Geometry.Polygon"});
OpenLayers.Geometry.Polygon.createRegularPolygon = function (origin, radius, sides, rotation) {
    var angle = Math.PI * ((1 / sides) - (1 / 2));
    if (rotation) {
        angle += (rotation / 180) * Math.PI;
    }
    var rotatedAngle, x, y;
    var points = [];
    for (var i = 0; i < sides; ++i) {
        rotatedAngle = angle + (i * 2 * Math.PI / sides);
        x = origin.x + (radius * Math.cos(rotatedAngle));
        y = origin.y + (radius * Math.sin(rotatedAngle));
        points.push(new OpenLayers.Geometry.Point(x, y));
    }
    var ring = new OpenLayers.Geometry.LinearRing(points);
    return new OpenLayers.Geometry.Polygon([ring]);
};
OpenLayers.Format.OSM = OpenLayers.Class(OpenLayers.Format.XML, {checkTags:false, interestingTagsExclude:null, areaTags:null, initialize:function (options) {
    var layer_defaults = {'interestingTagsExclude':['source', 'source_ref', 'source:ref', 'history', 'attribution', 'created_by'], 'areaTags':['area', 'building', 'leisure', 'tourism', 'ruins', 'historic', 'landuse', 'military', 'natural', 'sport']};
    layer_defaults = OpenLayers.Util.extend(layer_defaults, options);
    var interesting = {};
    for (var i = 0; i < layer_defaults.interestingTagsExclude.length; i++) {
        interesting[layer_defaults.interestingTagsExclude[i]] = true;
    }
    layer_defaults.interestingTagsExclude = interesting;
    var area = {};
    for (var i = 0; i < layer_defaults.areaTags.length; i++) {
        area[layer_defaults.areaTags[i]] = true;
    }
    layer_defaults.areaTags = area;
    this.externalProjection = new OpenLayers.Projection("EPSG:4326");
    OpenLayers.Format.XML.prototype.initialize.apply(this, [layer_defaults]);
}, read:function (doc) {
    if (typeof doc == "string") {
        doc = OpenLayers.Format.XML.prototype.read.apply(this, [doc]);
    }
    var nodes = this.getNodes(doc);
    var ways = this.getWays(doc);
    var feat_list = new Array(ways.length);
    for (var i = 0; i < ways.length; i++) {
        var point_list = new Array(ways[i].nodes.length);
        var poly = this.isWayArea(ways[i]) ? 1 : 0;
        for (var j = 0; j < ways[i].nodes.length; j++) {
            var node = nodes[ways[i].nodes[j]];
            var point = new OpenLayers.Geometry.Point(node.lon, node.lat);
            point.osm_id = parseInt(ways[i].nodes[j]);
            point_list[j] = point;
            node.used = true;
        }
        var geometry = null;
        if (poly) {
            geometry = new OpenLayers.Geometry.Polygon(new OpenLayers.Geometry.LinearRing(point_list));
        } else {
            geometry = new OpenLayers.Geometry.LineString(point_list);
        }
        if (this.internalProjection && this.externalProjection) {
            geometry.transform(this.externalProjection, this.internalProjection);
        }
        var feat = new OpenLayers.Feature.Vector(geometry, ways[i].tags);
        feat.osm_id = parseInt(ways[i].id);
        feat.fid = "way." + feat.osm_id;
        feat_list[i] = feat;
    }
    for (var node_id in nodes) {
        var node = nodes[node_id];
        if (!node.used || this.checkTags) {
            var tags = null;
            if (this.checkTags) {
                var result = this.getTags(node.node, true);
                if (node.used && !result[1]) {
                    continue;
                }
                tags = result[0];
            } else {
                tags = this.getTags(node.node);
            }
            var feat = new OpenLayers.Feature.Vector(new OpenLayers.Geometry.Point(node['lon'], node['lat']), tags);
            if (this.internalProjection && this.externalProjection) {
                feat.geometry.transform(this.externalProjection, this.internalProjection);
            }
            feat.osm_id = parseInt(node_id);
            feat.fid = "node." + feat.osm_id;
            feat_list.push(feat);
        }
        node.node = null;
    }
    return feat_list;
}, getNodes:function (doc) {
    var node_list = doc.getElementsByTagName("node");
    var nodes = {};
    for (var i = 0; i < node_list.length; i++) {
        var node = node_list[i];
        var id = node.getAttribute("id");
        nodes[id] = {'lat':node.getAttribute("lat"), 'lon':node.getAttribute("lon"), 'node':node};
    }
    return nodes;
}, getWays:function (doc) {
    var way_list = doc.getElementsByTagName("way");
    var return_ways = [];
    for (var i = 0; i < way_list.length; i++) {
        var way = way_list[i];
        var way_object = {id:way.getAttribute("id")};
        way_object.tags = this.getTags(way);
        var node_list = way.getElementsByTagName("nd");
        way_object.nodes = new Array(node_list.length);
        for (var j = 0; j < node_list.length; j++) {
            way_object.nodes[j] = node_list[j].getAttribute("ref");
        }
        return_ways.push(way_object);
    }
    return return_ways;
}, getTags:function (dom_node, interesting_tags) {
    var tag_list = dom_node.getElementsByTagName("tag");
    var tags = {};
    var interesting = false;
    for (var j = 0; j < tag_list.length; j++) {
        var key = tag_list[j].getAttribute("k");
        tags[key] = tag_list[j].getAttribute("v");
        if (interesting_tags) {
            if (!this.interestingTagsExclude[key]) {
                interesting = true;
            }
        }
    }
    return interesting_tags ? [tags, interesting] : tags;
}, isWayArea:function (way) {
    var poly_shaped = false;
    var poly_tags = false;
    if (way.nodes[0] == way.nodes[way.nodes.length - 1]) {
        poly_shaped = true;
    }
    if (this.checkTags) {
        for (var key in way.tags) {
            if (this.areaTags[key]) {
                poly_tags = true;
                break;
            }
        }
    }
    return poly_shaped && (this.checkTags ? poly_tags : true);
}, write:function (features) {
    if (!(features instanceof Array)) {
        features = [features];
    }
    this.osm_id = 1;
    this.created_nodes = {};
    var root_node = this.createElementNS(null, "osm");
    root_node.setAttribute("version", "0.5");
    root_node.setAttribute("generator", "OpenLayers " + OpenLayers.VERSION_NUMBER);
    for (var i = features.length - 1; i >= 0; i--) {
        var nodes = this.createFeatureNodes(features[i]);
        for (var j = 0; j < nodes.length; j++) {
            root_node.appendChild(nodes[j]);
        }
    }
    return OpenLayers.Format.XML.prototype.write.apply(this, [root_node]);
}, createFeatureNodes:function (feature) {
    var nodes = [];
    var className = feature.geometry.CLASS_NAME;
    var type = className.substring(className.lastIndexOf(".") + 1);
    type = type.toLowerCase();
    var builder = this.createXML[type];
    if (builder) {
        nodes = builder.apply(this, [feature]);
    }
    return nodes;
}, createXML:{'point':function (point) {
    var id = null;
    var geometry = point.geometry ? point.geometry : point;
    var already_exists = false;
    if (point.osm_id) {
        id = point.osm_id;
        if (this.created_nodes[id]) {
            already_exists = true;
        }
    } else {
        id = -this.osm_id;
        this.osm_id++;
    }
    if (already_exists) {
        node = this.created_nodes[id];
    } else {
        var node = this.createElementNS(null, "node");
    }
    this.created_nodes[id] = node;
    node.setAttribute("id", id);
    node.setAttribute("lon", geometry.x);
    node.setAttribute("lat", geometry.y);
    if (point.attributes) {
        this.serializeTags(point, node);
    }
    this.setState(point, node);
    return already_exists ? [] : [node];
}, linestring:function (feature) {
    var nodes = [];
    var geometry = feature.geometry;
    if (feature.osm_id) {
        id = feature.osm_id;
    } else {
        id = -this.osm_id;
        this.osm_id++;
    }
    var way = this.createElementNS(null, "way");
    way.setAttribute("id", id);
    for (var i = 0; i < geometry.components.length; i++) {
        var node = this.createXML['point'].apply(this, [geometry.components[i]]);
        if (node.length) {
            node = node[0];
            var node_ref = node.getAttribute("id");
            nodes.push(node);
        } else {
            node_ref = geometry.components[i].osm_id;
            node = this.created_nodes[node_ref];
        }
        this.setState(feature, node);
        var nd_dom = this.createElementNS(null, "nd");
        nd_dom.setAttribute("ref", node_ref);
        way.appendChild(nd_dom);
    }
    this.serializeTags(feature, way);
    nodes.push(way);
    return nodes;
}, polygon:function (feature) {
    var attrs = OpenLayers.Util.extend({'area':'yes'}, feature.attributes);
    var feat = new OpenLayers.Feature.Vector(feature.geometry.components[0], attrs);
    feat.osm_id = feature.osm_id;
    return this.createXML['linestring'].apply(this, [feat]);
}}, serializeTags:function (feature, node) {
    for (var key in feature.attributes) {
        var tag = this.createElementNS(null, "tag");
        tag.setAttribute("k", key);
        tag.setAttribute("v", feature.attributes[key]);
        node.appendChild(tag);
    }
}, setState:function (feature, node) {
    if (feature.state) {
        var state = null;
        switch (feature.state) {
            case OpenLayers.State.UPDATE:
                state = "modify";
            case OpenLayers.State.DELETE:
                state = "delete";
        }
        if (state) {
            node.setAttribute("action", state);
        }
    }
}, CLASS_NAME:"OpenLayers.Format.OSM"});
/*PRO_END*/

