<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.3
 * @revision 1807
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2014 by CodeGravity.com - All rights reserved!
 * @website http://www.codegravity.com
 */
defined('_JEXEC') or die('Restricted access'); ?>

<?php $extraWatch->env->addScript($extraWatch->config->getLiveSiteWithSuffix()."components/com_extrawatch/js/ajax-dynamic-content.js");?>
<?php $extraWatch->env->addScript($extraWatch->config->getLiveSiteWithSuffix()."components/com_extrawatch/js/ajax.js");?>
<?php $extraWatch->env->addScript($extraWatch->config->getLiveSiteWithSuffix().$extraWatch->env->renderAjaxLink('js','extrawatch.js')."&rand=".$extraWatch->config->getRand()."&time=".time()."&env=".($extraWatch->config->getEnvironment())."&projectId="._EW_PROJECT_ID);?>
<?php $extraWatch->env->addScript($extraWatch->config->getLiveSiteWithSuffix()."components/com_extrawatch/js/fade.js");?>

<?php
	if (defined('JVERSION') && function_exists('version_compare') && version_compare(JVERSION, '1.6.0', '<')) {
		//do nothing.. menu fix for joomla 1.5
	} else {
?>
<?php $extraWatch->env->addScript($extraWatch->config->getLiveSiteWithSuffix()."components/com_extrawatch/js/jquery-1.11.0.min.js");?>
<?php } ?>

<?php $extraWatch->env->addScript($extraWatch->config->getLiveSiteWithSuffix()."components/com_extrawatch/js/jquery.tablesorter.js");?>


<?php
$liveSite = $extraWatch->config->getLiveSiteWithSuffix();
echo $extraWatch->env->addStyleSheet($liveSite."components/com_extrawatch/css/dashboard.css.php?env=".get_class($extraWatch->env));
?>

<!--[if lt IE 9]><?php $extraWatch->env->addScript("../assets/js/ie8-responsive-file-warning.js");?><![endif]-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<?php $extraWatch->env->addScript("https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js");?>
<?php $extraWatch->env->addScript("https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js");?>
<![endif]-->



<?php $extraWatch->env->addScript($extraWatch->config->getLiveSiteWithSuffix()."components/com_extrawatch/js/jxml.js");?>
<?php $extraWatch->env->addScript($extraWatch->config->getLiveSiteWithSuffix()."components/com_extrawatch/js/jdownloadurl.js");?>
<?php $extraWatch->env->addScript($extraWatch->config->getLiveSiteWithSuffix()."components/com_extrawatch/js/morris/raphael-2.1.0.min.js");?>
<?php $extraWatch->env->addScript($extraWatch->config->getLiveSiteWithSuffix()."components/com_extrawatch/js/morris/morris.min.js");?>



<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
		  <img src="<?php echo $extraWatch->config->getLiveSiteWithSuffix();?>components/com_extrawatch/img/logo.png" alt="" width="155" height="55">
            <?php if (!_EW_CLOUD_MODE && !$extraWatch->config->isAdFree()) { ?>
                <div style="display: block; float: right">
                                <?php require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "view" . DS . "frame.php";?>
                </div>
            <?php } else if (@_EW_CLOUD_MODE){ ?>
            <div style="display: block; color: white; width: 100%; text-align: right">
            Welcome, <?php echo (@$_SESSION['email']);?>. <a href="?action=logout" style="color: white">Logout</a>
            <?php } ?>
            </div>
        </div>
    </div>


<div class="container-fluid">
    <?php require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "view" . DS . "navigation.php"; ?>

<!-- body start -->
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">