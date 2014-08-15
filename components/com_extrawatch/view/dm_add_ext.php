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
<!--PRO_START-->
    <table width="50%" border="0" cellpadding="3" cellspacing="0" class="table" style="width: 50%">
        <tr>
            <td colspan="2" class="Subtitle"><h3><?php echo(_EW_DOWNLOADS_ADD_EXTENSION);?></h3> </td>
        </tr>
        <tr>
            <td height="23" colspan="3" align="left" style='color: red'><?php echo(_EW_DOWNLOADS_WARNING);?><br/><br/>

                <?php
                $htaccessTxtPresent = $extraWatch->downloads->checkIfHtAccessTxtPresentOnJoomla();
                if ($htaccessTxtPresent) {
                    echo("<b>"._EW_DOWNLOAD_MONITOR_HTACCESS_TXT."</b>");
                }
                ?>

            </td>
        </tr>
        <tr>
            <td width="31%">
                <div align="right"><?php echo(_EW_DOWNLOADS_EXTENSION_NAME);?><font color="#FF0000"> *</font>
                </div>
            </td>
            <form action="<?php echo $extraWatch->config->renderLink("downloads","saveAddExtension");?>" method="post" name="addform" onsubmit="return check_add();">
            <td width="29%" align="left">
                <input name="extname" type="text" size="50" value="">                  </td>
            <td height="20">
                <div align="left">
                    <input name="task" type="hidden"  value="downloads">
                    <input name="action" type="hidden"  value="saveAddExtension">
                    <input name='form_key' type='hidden' value="<?php echo $extraWatch->env->getFormKey();?>" />

                    <?php if (@!$htaccessTxtPresent) { ?>
                        <input name="Submit" type="submit" class="button" value="Add">
                    <?php } else { ?>
                        <input name="Submit" type="submit" class="button" value="Add" disabled title="<?php echo _EW_DOWNLOAD_MONITOR_HTACCESS_TXT;?>">
                    <?php } ?>

                    <input name="Submit" type="button" class="button" value="Back" onclick="window.location.href='<?php echo $extraWatch->config->renderLink("downloads","");?>">
                </div>
            </td>
            </form>

        </tr>
    </table>
    <br>
<!--PRO_END-->
