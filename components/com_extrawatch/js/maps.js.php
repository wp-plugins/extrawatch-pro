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

define('_JEXEC', 1);
define('DS', DIRECTORY_SEPARATOR);
$jBasePath = dirname(__FILE__) . DS . ".." . DS . ".." . DS . ".." . DS;
define('JPATH_BASE', $jBasePath);
define('JPATH_BASE2', $jBasePath);

$env = @$_REQUEST['env'];
$frontend = @$_REQUEST['frontend'];

switch ($env) {
    case "ExtraWatchDrupalEnv":
        {
        define('DRUPAL_ROOT', dirname('../../../../../../../../'));
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
        require_once(dirname(__FILE__) . '/../../../../../../wp-load.php');
        break;
        }
    case "ExtraWatchNoCMSEnv":
        {
        define('ENV', 1);
        break;
        }

    default:
        {
        initializeJoomla();
        break;
        }

}

function initializeJoomla()
{
    global $mainframe;

    if (!defined('JPATH_ROOT'))
        require_once (JPATH_BASE . DS . 'includes' . DS . 'defines.php');
    if (!defined('JDEBUG'))
        require_once (JPATH_BASE . DS . 'includes' . DS . 'framework.php');

    require_once (JPATH_BASE . DS . 'libraries' . DS . 'joomla' . DS . 'application' . DS . 'application.php');

    require_once (JPATH_BASE . DS . 'libraries' . DS . 'joomla' . DS . 'application' . DS . 'module' . DS . 'helper.php');
    $mainframe = & JFactory :: getApplication('site');
    $mainframe->initialise();
    return $mainframe;
}

require_once (JPATH_BASE . "components" . DS . "com_extrawatch" . DS . "config.php");
require_once (JPATH_BASE . "components" . DS . "com_extrawatch" . DS . "inc.extrawatch.env.php");
require_once (JPATH_BASE . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.php");
require_once (JPATH_BASE . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.block.php");
require_once (JPATH_BASE . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.block.html.php");
require_once (JPATH_BASE . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.cache.php");
require_once (JPATH_BASE . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.config.php");
require_once (JPATH_BASE . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.goal.php");
require_once (JPATH_BASE . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.helper.php");
require_once (JPATH_BASE . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.date.php");
require_once (JPATH_BASE . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.stat.php");
require_once (JPATH_BASE . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.visit.php");
require_once (JPATH_BASE . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.html.php");
require_once (JPATH_BASE . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.log.php");
require_once (JPATH_BASE . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.sizes.php");
require_once (JPATH_BASE . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.flow.php");
require_once (JPATH_BASE . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.heatmap.php");
require_once (JPATH_BASE . "components" . DS . "com_extrawatch" . DS . "class.ip2country.php");
require_once (JPATH_BASE . "components" . DS . "com_extrawatch" . DS . "class.ipinfodb.php");
require_once (JPATH_BASE . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.seo.php");

$extraWatch = new ExtraWatch();
require_once (JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "lang" . DS . $extraWatch->config->getLanguage() . ".php");

$extraWatch->block->checkPermissions();
?>
var oldmarker;
var map;
var infowindow;
var openmap, layer, openmapmarkers;


function OpenMapLoad() {
openmap = new OpenLayers.Map( 'openmap', {
eventListeners: {
"zoomend": mapEvent
}
}
);
function mapEvent(event) {
saveZoom(openmap.getZoom());
}
layer = new OpenLayers.Layer.OSM( "OSM Map");
openmap.addLayer(layer);
openmapmarkers = new OpenLayers.Layer.Markers( "Markers" );
openmap.addLayer(openmapmarkers);
}

function GoogleMapLoad() {
<?php

$ip = $extraWatch->visit->getLastIp();
$location = $extraWatch->visit->ip2Country($ip);

echo "var latlng = new google.maps.LatLng(" . ((int)@$location['latitude']) . ", " . ((int)@$location['longitude']) . ");"
?>

var zoom = loadZoom();
if (zoom == "")
{
zoom = 13;
}

var myOptions = {
zoom: parseInt(zoom),
center: latlng,
mapTypeId: google.maps.MapTypeId.ROADMAP
};
map = new google.maps.Map(document.getElementById("map"), myOptions);
}

function GoogleMapUpdate()
{
downloadUrl("<?php echo $extraWatch->config->getLiveSiteWithSuffix(); ?>components/com_extrawatch/lastvisit.php?rand=<?php echo $extraWatch->config->getRand(); ?>&env=<?php echo(get_class($extraWatch->env)); ?>", function(data) {
var markers = data.documentElement.getElementsByTagName("marker");
for (var i = 0; i < markers.length; i++) {
var name = markers[i].getAttribute("name");
var address = markers[i].getAttribute("address");
var point = new google.maps.LatLng(parseFloat(markers[i].getAttribute("lat")),
parseFloat(markers[i].getAttribute("lng")));
var marker = createMarker(point, name, address);

if (oldmarker != null)
{
oldmarker.setMap(null);
}
oldmarker = marker;

var zoom = loadZoom();
if (zoom == "")
{
zoom = 13;
}

map.setCenter(point);
map.setZoom(parseInt(zoom));

google.maps.event.addListener(map, 'zoom_changed', function() {
saveZoom(map.getZoom());
});
}
});
}

function createMarker(point, name, address) {
var marker = new google.maps.Marker({position: point, map: map, title: name});
var html = "<b>" + name + "</b> <br/>" + address;
google.maps.event.addListener(marker, 'click', function() {
if (infowindow) infowindow.close();
infowindow = new google.maps.InfoWindow({content: html});
infowindow.open(map, marker);
});
return marker;
}

function saveZoom(mapzoom) {
var exp = new Date();
exp.setTime(exp.getTime() + (1000 * 60 * 60 * 24 * 30));
setCookie("GoogleMapExtraWatchZoomLevel",mapzoom, exp);
}

function loadZoom() {
return getCookie("GoogleMapExtraWatchZoomLevel");
}

function setCookie(name, value, expires) {
document.cookie = name + "=" + escape(value) + "; path=/" + ((expires == null) ? "" : "; expires=" + expires.toGMTString());
}

function getCookie(c_name) {
if (document.cookie.length>0) {
c_start=document.cookie.indexOf(c_name + "=");
if (c_start!=-1) {
c_start=c_start + c_name.length+1;
c_end=document.cookie.indexOf(";",c_start);
if (c_end==-1) c_end=document.cookie.length;
return unescape(document.cookie.substring(c_start,c_end));
}
}
return "";
}

function OpenMapUpdate() {
downloadUrl("<?php echo $extraWatch->config->getLiveSiteWithSuffix(); ?>components/com_extrawatch/lastvisit.php?rand=<?php echo $extraWatch->config->getRand(); ?>&env=<?php echo(get_class($extraWatch->env)); ?>", function(data) {
var markers = data.documentElement.getElementsByTagName("marker");
var zoom = loadZoom();
if (zoom == "")
{
zoom = 13;
}
for (var i = 0; i < markers.length; i++) {
var name = markers[i].getAttribute("name");
var address = markers[i].getAttribute("address");

var position = new OpenLayers.LonLat(parseFloat(markers[i].getAttribute("lng")), parseFloat(markers[i].getAttribute("lat"))).transform(
new OpenLayers.Projection("EPSG:4326"),
openmap.getProjectionObject()
);
openmap.setCenter(position, parseInt(zoom));
openmapmarkers.addMarker(new OpenLayers.Marker(position));
}
});
}

