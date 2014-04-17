<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
 * @package ExtraWatch  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
 * @version 2.3  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
 * @revision 1838  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
 * @copyright (C) 2014 by CodeGravity.com - All rights reserved!  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
 * @website http://www.codegravity.com  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
 */
defined('_JEXEC') or die('Restricted access');?>



<?php
$group = ExtraWatchHelper::requestPost('group');
if (!$group) {
    $group = EW_DB_KEY_REFERERS;
}
$date = ExtraWatchDate::jwDateToday();
//$name = EW_DB_KEY_REFERERS;
?>
<?php echo $extraWatchTrendHTML->renderGraphSelectionForm($group);


$rows = $extraWatchTrendHTML->findLatestGraphDataRecursively($group, $date, FALSE);

$i=0;
foreach($rows as $row) {
?>
<table width="100%">
    <tr>
        <td colspan="2">
            <b><?php echo htmlentities($row->name);?></b>
        </td>
    </tr>
    <tr>
        <td width="50%">
            <div id='trendChartDaily_<?php echo($i);?>' style='width:100%; margin-top:50px; height: 200px;'></div><br/>
            <center>daily</center>
        </td>
        <td width="50%">
            <div id='trendChartWeekly_<?php echo($i);?>' style='width:100%; margin-top:50px; height: 200px;'></div><br/>
            <center>weekly</center>
        </td>
    </tr>
</table>


<script type='text/javascript'>
    Morris.Area ({
  element: 'trendChartDaily_<?php echo($i);?>',
  data: [<?php echo $extraWatchTrendHTML->renderDayTrendData($group, $row->name, $date); ?>],
xkey: 'period',
ykeys: ['value'],
labels: ['Value', 'SORN']
});
Morris.Area ({
element: 'trendChartWeekly_<?php echo($i);?>',
data: [<?php echo $extraWatchTrendHTML->renderWeekTrendData($group, $row->name, $date); ?>],
xkey: 'period',
ykeys: ['value'],
labels: ['Value', 'SORN']
});
</script>

<?php
    $i++;
}

?>
