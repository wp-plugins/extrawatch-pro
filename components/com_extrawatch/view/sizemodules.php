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
defined('_JEXEC') or die('Restricted access');
?>

<table align="center" border='0' style='border: 1px solid #dddddd; padding: 2px;' border-collapse="collapse"
       width="100%">
    <tr>
        <th width="300px"><?php echo _EW_SIZEMODULES_MODULE;?></th>
        <th width="150px"><?php echo _EW_SIZEMODULES_SIZE;?></th>
        <th width="50px"><?php echo _EW_SIZES_REFRESH;?></th>
    </tr>
    <tr>
        <td colspan='2'></td>
        <td align='center' id="uprefreshModules"></td>
    </tr>

    <?php

    $scanDirectoryMain = "../modules/";
    $scanDirectoryAdmin = "./modules/";

    $realDirectoryMain = "../../modules/";
    $realDirectoryAdmin = "../../administrator/modules/";

    $this->extraWatch->sizes->renderFileList(DB_KEY_SIZE_MOD, $scanDirectoryMain, $scanDirectoryAdmin, $realDirectoryMain, $realDirectoryAdmin, "modules");
    echo $this->extraWatch->sizes->renderPageHtml;

    ?>

    <tr>
        <td colspan="3">
            <hr size="1"/>
        </td>
    </tr>
    <tr>
        <th align="left"><?php echo (_EW_SIZEMODULES_TOTAL); ?></th>
        <th align='center' id='total_modules'
            style="font-weight: bold;"><?php echo $this->extraWatch->sizes->renderPageTotal; ?></th>
        <td align='center'><a
            href='javascript:refreshModulesAll(1, <?php echo $this->extraWatch->sizes->renderPageItems; ?>)'>
            <img
                src='<?php echo $this->extraWatch->config->getLiveSiteWithSuffix();?>components/com_extrawatch/icons/refresh_all.png'
                border='0' title='<?php echo _EW_SIZEMODULES_REFRESH_ALL;?>'/>
        </a></td>
    </tr>
</table>

<script type="text/javascript">

    <?php
    echo $this->extraWatch->sizes->renderPageJavaArray;
    echo "var total_modules = " . $this->extraWatch->sizes->renderPageTotalRaw . ";";
    echo "document.getElementById(\"uprefreshModules\").innerHTML = \"<br/><a href='javascript:refreshModulesAll(1, " . $this->extraWatch->sizes->renderPageItems . ")'><img src='" . $this->extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/icons/refresh_all.png' border='0' title='" . _EW_SIZECOMPONENTS_REFRESH_ALL . "'/></a>\"";
    ?>

    function refreshModulesTotal() {
        $.ajax({
            type:"POST",
            url:"<?php echo $this->extraWatch->config->getLiveSiteWithSuffix(); ?>components/com_extrawatch/sizequerytotal.php?rand=<?php echo $this->extraWatch->config->getRand(); ?>",
            data:"prev=" + total_modules + "&mod=<?php echo DB_KEY_SIZE_COM;
            ?>&dir1=<?php echo $realDirectoryMain;
            ?>&dir2=<?php echo $realDirectoryAdmin; ?>&suffix=modules",
            success:function (resp) {
                eval("data=" + resp);
                document.getElementById("total_modules").innerHTML = data.text;
                total_modules = data.total;
            },
            error:function (e) {
                alert('Error: ' + e);
            }
        });
    }


    function refreshSize_modules(index) {
        var target = "item-modules-" + index.toString();
        $.ajax({
            type:"POST",
            url:"<?php echo $this->extraWatch->config->getLiveSiteWithSuffix(); ?>components/com_extrawatch/sizequery.php?rand=<?php echo $this->extraWatch->config->getRand(); ?>&env=<?php echo $this->extraWatch->env; ?>",
            data:"dir=" + dirs_modules[index] + "&mod=" + <?php echo DB_KEY_SIZE_MOD; ?>,
            success:function (resp) {
                // we have the response
                //alert("Server said:\n '" + resp + "'");
                document.getElementById(target).innerHTML = resp;
                refreshModulesTotal();
            },
            error:function (e) {
                alert('Error: ' + e);
            }
        });
    }

    function refreshModulesAll(index, indexLast) {
        var target = "item-modules-" + index.toString();

        $.ajax({
            type:"POST",
            url:"<?php echo $this->extraWatch->config->getLiveSiteWithSuffix(); ?>components/com_extrawatch/sizequery.php?rand=<?php echo $this->extraWatch->config->getRand(); ?>&env=<?php echo $this->extraWatch->env; ?>",
            data:"dir=" + dirs_modules[index] + "&mod=" + <?php echo DB_KEY_SIZE_MOD; ?>,
            success:function (resp) {
                // we have the response
                //alert("Server said:\n '" + resp + "'");
                document.getElementById(target).innerHTML = resp;

                if (index < indexLast) {
                    refreshModulesAll(index + 1, indexLast);
                } else {
                    refreshModulesTotal();
                }
            },
            error:function (e) {
                alert('Error: ' + e);
            }
        });
    }


</script>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

