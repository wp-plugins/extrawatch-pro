<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
 * @package ExtraWatch  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
 * @version 2.3  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
 * @revision 2114  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
 * @copyright (C) 2014 by CodeGravity.com - All rights reserved!  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
 * @website http://www.codegravity.com  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
 */
defined('_JEXEC') or die('Restricted access'); ?>

<!--FREE_START-->
<h1><?php echo _EW_NAVIGATION_CLICKS;?></h1>
<h2><?php echo _EW_MENU_AVAILABLE_IN_PRO_CLICK_AREAS;?></h2>
<?php echo ($extraWatchHTML->renderAvailableInFullVersion("clicks"));?>
<!--FREE_END-->


<!--PRO_START-->

<h2>All time element clicks</h2>
<i>
    This is quite similar to heatmap, but records individual click on sections of your page. You can name these important sections and see them in goals.
    This way you can monitor how many people clicked the "buy now" button in an email report rather then checking the heatmap every day and counting the clicks.
    This section only list elements which were added as "goal" elements in section below</i>
<?php echo $extraWatchHeatmapHTML->renderMostClickedHTMLElementsTable(); ?>
<i style='color: #ddd'>Displaying only first 20 records</i>
<br/><br/>

<h2>Latest element clicks refreshed in real-time</h2>
<i>
Best way how to start monitoring the clicks on buttons is: 1. Open the web page where's your the element you want to monitor - it can be a "buy now" button, 2. click on that button.
3. You will see a long unique identifier of that button, 4. click on "+" icon and name it as "user clicked buy now button".
From this moment every time someone clicked that button, the goal counter increases and you can see the results in goals section and see the charts
</i>
<table border='0' cellpadding='2' width='100%' <?php echo $extraWatch->helper->getTooltipOnEventHide(); ?> >
    <tr>
        <td rowspan="2" id="heatmapElementClick" valign='top' align='left' width='80%'>  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
            <?php echo _EW_HEATMAP_LOADING; ?>  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
            <br/><br/>  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
        </td>
    </tr>
</table>


<?php
$day = ExtraWatchHelper::requestGet('day');  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
if (!$day) {
  $day = $extraWatch->date->jwDateToday(); // yesterday by default, because it contains  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
}
?>
<h2><?php echo _EW_CLICK_AREAS_FOR;?><?php echo $extraWatch->date->getDateByDay($day); ?></h2>
<i>This section allows you navigate between days and see the differences in percents, charts of most popular clicks by hovering on the blue charts icon</i>
<table width='700px' border="0">
    <tr>
        <td colspan="5">  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
            <?php echo $extraWatchHTML->renderDateControlGet('clicks', $day); ?>  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
        </td>
    </tr>
</table>
<br/>
<?php echo $extraWatchHeatmapHTML->renderMostClickedHTMLElementsTable($day); ?>  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
<i style='color: #ddd'>Displaying only first 20 records</i>  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
<br/><br/>
<br/><br/>
<table width='700px' border="0">  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
    <tr>
        <td colspan="5">  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
            <?php echo $extraWatchHTML->renderDateControlGet('clicks', $day); ?>  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
        </td>
    </tr>
</table>


<h2>All time hottest click areas highlight</h2>
<i>Which section of which page is the most clicked one? By clicking on any link below you'll see the web page to be rendered in different colors.
Sections with lowest clicks are displayed in violen, then there's blue, yellow and red represents the most popular element on that page</i>
<?php echo $extraWatchHeatmapHTML->renderPagesWithHighlightedHTMLElementsTable(); ?>
<i style='color: #ddd'>Displaying only first 20 records</i>  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
<br/><br/>


<script type="text/javascript">extrawatch_sendLastElementClickIdReq();</script>  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  

<!--PRO_END-->
