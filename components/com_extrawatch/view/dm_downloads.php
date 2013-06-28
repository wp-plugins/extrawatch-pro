<?php
/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.1
 * @revision 793
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.codegravity.com
 */
defined('_JEXEC') or die('Restricted access');


$task="";
if (@isset($_REQUEST["task"]))
{
    $task=trim(@$_REQUEST["task"]);
}

$action="";
if (@isset($_REQUEST["action"]))
{
    $action=trim(@$_REQUEST["action"]);
}

$eid="";
if (@isset($_REQUEST["eid"]))
{
    $eid=trim(@$_REQUEST["eid"]);
}

$did="";
if (@isset($_REQUEST["did"]))
{
    $did=trim(@$_REQUEST["did"]);
}

$extensionquery = sprintf("SELECT * FROM #__extrawatch_dm_extension");
$extensionar = $extraWatch->database->objectListQuery($extensionquery);

$filepathquery = sprintf("SELECT * FROM #__extrawatch_dm_paths");
$filepathar = $extraWatch->database->objectListQuery($filepathquery);



?>


<script type="text/javascript" src="components/com_extrawatch/views/monitors/tmpl/js/jquery-latest.js"></script>
<script type="text/javascript" src="components/com_extrawatch/views/monitors/tmpl/js/jquery.tablesorter.js"></script>
<script type='text/javascript' src='https://www.google.com/jsapi'></script>

<script type="text/javascript">
    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart()
    {
        var data = google.visualization.arrayToDataTable([
        <?php include("dm_data.php");?>

        ]);
        var options = {
            title: '<?php echo(_EW_DOWNLOADS_TOTAL);?>'
        };
        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    }

    $(document).ready(function()
            {
                $("#myTable").tablesorter();
            }
    );

    function check_add()
    {
        var strErr,field;
        strErr="";
        if (document.addform.extname.value=="")
        {
            strErr+="*Enter Name \n";
            if (typeof(field)=="undefined")
            {
                field=document.addform.extname;
            }
        }
        if(strErr!="")
        {
            alert("<?php echo(_EW_DOWNLOADS_INCOMPLETE);?>\n\n"+strErr);
            field.focus();
            return false;
        }
    }

    function check_edit()
    {
        var strErr,field;
        strErr="";
        if (document.editform.extname.value=="")
        {
            strErr+="*Enter Name \n";
            if (typeof(field)=="undefined")
            {
                field=document.editform.extname;
            }
        }
        if(strErr!="")
        {
            alert("<?php echo(_EW_DOWNLOADS_INCOMPLETE);?>\n\n"+strErr);
            field.focus();
            return false;
        }
    }
    function check_edit_filepath()
    {
        var strErr,field;
        strErr="";
        if (document.editfilepathform.filepathname.value=="")
        {
            strErr+="*Enter Name \n";
            if (typeof(field)=="undefined")
            {
                field=document.editfilepathform.filepathname;
            }
        }
        if(strErr!="")
        {
            alert("<?php echo(_EW_DOWNLOADS_INCOMPLETE);?>\n\n"+strErr);
            field.focus();
            return false;
        }
    }
    function check_add_filepath()
    {
        var strErr,field;
        strErr="";
        if (document.addfilepathform.filepathname.value=="")
        {
            strErr+="*Enter Name \n";
            if (typeof(field)=="undefined")
            {
                field=document.addfilepathform.filepathname;
            }
        }
        if(strErr!="")
        {
            alert("<?php echo(_EW_DOWNLOADS_INCOMPLETE);?>\n\n"+strErr);
            field.focus();
            return false;
        }
    }



    function confirmChoice(j)
    {
        msgQuestion = "Confirm Delete!";
        userResponse = confirm(msgQuestion);
        if (userResponse == 1)
        {
            location = "<?php echo $extraWatch->config->renderLink("downloads","deleteExtension");?>&co="+j;
        }
        else
        {
            return;
        }
    }
    function confirmChoicefilepath(j)
    {
        msgQuestion = "Confirm Delete!";
        userResponse = confirm(msgQuestion);
        if (userResponse == 1)
        {
            location = "<?php echo $extraWatch->config->renderLink("downloads","deleteFile");?>&co="+j;
        }
        else
        {
            return;
        }
    }

</script>
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<br />

<table align="center">
    <tr><td>

        <h2><?php echo(_EW_DOWNLOADS_DOWNLOAD_MONITOR);?></h2>


        <div id="chart_div" style="width: 900px; height: 400px;border:1px solid black"></div>

        <br/><br/>
        <table width="90%" border="0" align="center" class="table-border">
        <tr>
        <td align="center">
        <?php include("dm_table_statistics.php");?>
    </td>
    </tr>
</table>
<br />
<br />

<table width="90%" border="0" align="center" class="table-border">
    <tr>
        <td align="center">
            <table width="95%" border="0" align="center" cellpadding="3" cellspacing="0">
                <tr>
                    <td height="23" align="left"><b><?php echo(_EW_DOWNLOADS_EXTENSIONS_BEING_MONITORED);?></b></td>
                </tr>
                <tr>
                    <td class="" height="23" width="73%" align="left"><div align="right"><a href="<?php echo $extraWatch->config->renderLink("downloads","addExtension");?>"><?php echo(_EW_DOWNLOADS_ADD_EXTENSION);?></a> </div></td>
                </tr>
                <tr>
                    <td class="" height="23" width="73%" align="left">&nbsp;</td>
                </tr>

            </table>
            <?php include("dm_table_extensions.php");?>
            <br><br>
            <table width="95%" border="0" align="center" cellpadding="3" cellspacing="0">
                <tr>
                    <td height="23" align="left"><b><?php echo(_EW_DOWNLOADS_FILES_PATHS_BEING_MONITORED);?></b></td>
                </tr>
                <tr>
                    <td class="" height="23" width="73%" align="left"><div align="right"><a href="<?php echo $extraWatch->config->renderLink("downloads","addFile");?>"><?php echo(_EW_DOWNLOADS_ADD_FILE_PATH);?></a> </div></td>
                </tr>
                <tr>
                    <td class="" height="23" width="73%" align="left">&nbsp;</td>
                </tr>

            </table>
            <?php include("dm_table_filepath.php");?>
            <br />
        </td>
    </tr>
</table>
<br />
<br />
<br />

