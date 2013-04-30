<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.0
 * @revision 663
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.codegravity.com
 */
defined('_JEXEC') or die('Restricted access');

?>
<script type='text/javascript' src='<?php echo _EW_SCRIPT_HOST._EW_SCRIPT_HOST_DIR; ?>extrawatch/components/com_extrawatch/js/jdownloadurl.js'></script> \
<script type='text/javascript' src='<?php echo _EW_SCRIPT_HOST._EW_SCRIPT_HOST_DIR; ?>extrawatch/components/com_extrawatch/ajax/heatmap.include.js.php?env=<?php echo get_class($extraWatch->config->env);?>&amp;id=<?php echo($id);?>&amp;extraWatchHeatmap=<?php echo($extraWatch->helper->requestGet('extraWatchHeatmap'));?>&amp;extraWatchDay=<?php echo($extraWatch->helper->requestGet('extraWatchDay'));?>&amp;username="+extrawatch_username+"&amp;params="+encodeURIComponent(location.search)+"'></script>\
<script type='text/javascript' src='<?php echo _EW_SCRIPT_HOST._EW_SCRIPT_HOST_DIR; ?>extrawatch/components/com_extrawatch/js/heatmap/heatmap.js'></script>\
