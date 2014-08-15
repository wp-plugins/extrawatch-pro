<?php
/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
 * @package ExtraWatch  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
 * @version 2.3  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
 * @revision 2114  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
 * @copyright (C) 2014 byCodeGravity.com - All rights reserved!  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
 * @website http://www.codegravity.com  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
 */
defined('_JEXEC') or die('Restricted access'); ?>

<!--FREE_START-->
<h1><?php echo _EW_NAVIGATION_LOCATION;?></h1>
<h2><?php echo _EW_MENU_AVAILABLE_IN_PRO_LOCATION;?></h2>
<?php echo ($extraWatchHTML->renderAvailableInFullVersion("location"));?>
<!--FREE_END-->

<!--PRO_START-->
<?php
if (!$extraWatch->config->isFree()) {
    if ($extraWatch->config->getConfigValue("EXTRAWATCH_IPINFODB_KEY")) {
        ?>
        <?php if ($extraWatch->config->getConfigValue("EXTRAWATCH_MAP_OPENMAP")) { ?>
            <script
                src="<?php echo $extraWatch->config->getLiveSiteWithSuffix();?>components/com_extrawatch/js/OpenLayers/OpenLayers.js"></script>

            <span id="extrawatch_map_city"></span>&nbsp;<span id="extrawatch_map_country"></span> <br/><br/>
            <div id="openmap" style="width: 100%; height: 600px;"></div>

        <?php } ?>

        <script type="text/javascript"
                src="<?php echo $extraWatch->config->getLiveSiteWithSuffix(); ?><?php echo $extraWatch->env->renderAjaxLink('js','maps.js');?>&rand=<?php echo $extraWatch->config->getRand();?>&env=<?php echo ($extraWatch->config->getEnvironment());?>&projectId=<?php echo(_EW_PROJECT_ID); ?>">

            try {
				window.addEventListener('load',function(){  	 	    	    		  	 	  	 	  		 	 		    	 			 	   		  	 	 		 	 	   	      	  	 		 		 				 			 		  		    	 		 		  
					extraWatchOpenMapLoad();
				});	
            } catch (e) {
                alert("Could not initialize ExtraWatch javascript functions, browser could not load: /ew/index.php?option=com_extrawatch&task=js&action=maps.js&rand=1790468477, because it returned HTTP 500 internal server error. This is a misconfiguration of your directory permissions. Please read: http://support.lunarpages.com/knowledge_bases/article/324 or search for: PHP permissions 500 Internal server error");
            }
        </script>

    <?php
    } else {
?>
<script type='text/javascript'>
function checkKeyFormat() {
	var keyValue = document.getElementById('ipInfoDbKey').value;
	if (keyValue.length < 64) {	//64 is the length of the key
		alert('are you sure that "' +keyValue + '" is really key which you got from ipinfodb.com?');
	return false;
	}
	return true;
}

</script>

<form action="<?php echo $extraWatch->config->renderLink();?>" method="POST" onsubmit='return checkKeyFormat();'>
  <?php echo _EW_STATS_MAP_ENTER_KEY;?>
<br/><br/>
<input id='ipInfoDbKey' type="edit" name="storeIpInfoDbKey"/> <br/><br/>
<input type="submit" value="<?php echo _EW_STATS_MAP_STORE_KEY; ?>" class='btn btn-primary'/>
<input type="hidden" name="task" value="storeIpInfoDbKey"/>
<input name='form_key' type='hidden' value="<?php echo $extraWatch->env->getFormKey();?>" />
</form>
<?php
}
} ?>
<!--PRO_END-->





