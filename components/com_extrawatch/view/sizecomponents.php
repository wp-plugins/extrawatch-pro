<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 1.2.18
 * @revision 203
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2012 by Matej Koval - All rights reserved!
 * @website http://www.codegravity.com
 */
defined('_JEXEC') or die('Restricted access');
?>
<!--PRO_START-->
<table align="center" border='0' style='border: 1px solid #dddddd; padding: 2px;' border-collapse="collapse">
    <tr>
        <th width="300px"><?php echo _EW_SIZECOMPONENTS_COMPONENT;?></th>
        <th width="150px"><?php echo _EW_SIZECOMPONENTS_SIZE;?></th>
        <th width="50px"><?php echo _EW_SIZES_REFRESH;?></th>
    </tr>
    <tr>
        <td colspan='2'></td>
        <td align='center' id="uprefreshComponents"></td>
    </tr>

    <?php

    $dirs = $this->extraWatch->env->getDirsToCheckForSize();

    $scanDirectoryMain = $dirs[ExtraWatchSizes::SCAN_DIR_MAIN]; //"../components/";
    $scanDirectoryAdmin = $dirs[ExtraWatchSizes::SCAN_DIR_ADMIN]; //"./components/";

    $realDirectoryMain = $dirs[ExtraWatchSizes::REAL_DIR_MAIN]; //"../";
    $realDirectoryAdmin = $dirs[ExtraWatchSizes::REAL_DIR_ADMIN]; //"../../administrator/components/";
    $this->extraWatch->sizes->renderFileList(EW_DB_KEY_SIZE_COM, $scanDirectoryMain, $scanDirectoryAdmin, $realDirectoryMain, $realDirectoryAdmin, "components");

    echo $this->extraWatch->sizes->renderPageHtml;
    ?>
    <tr>
        <td colspan="3">
            <hr size="1"/>
        </td>
    </tr>
    <tr>
        <th align="left"><?php echo (_EW_SIZECOMPONENTS_TOTAL); ?></th>
        <th align='center' id='total_components'
            style="font-weight: bold;"><?php echo $this->extraWatch->sizes->renderPageTotal; ?></th>
        <td align='center'><a
            href='javascript:refreshComponentsAll(1,<?php echo $this->extraWatch->sizes->renderPageItems;?>)'>
            <img
                src='<?php echo $this->extraWatch->config->getLiveSiteWithSuffix();?>components/com_extrawatch/img/icons/refresh_all.png'
                border='0' title='<?php echo _EW_SIZECOMPONENTS_REFRESH_ALL;?>'/></a>
        </td>
    </tr>
</table>

<script type="text/javascript">

    <?php
    echo $this->extraWatch->sizes->renderPageJavaArray;
    echo "var total_components = " . $this->extraWatch->sizes->renderPageTotalRaw . ";";
    echo "document.getElementById(\"uprefreshComponents\").innerHTML = \"<br/><a href='javascript:refreshComponentsAll(1, " . $this->extraWatch->sizes->renderPageItems . ")'><img src='" . $this->extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/img/icons/refresh_all.png' border='0' title='" . _EW_SIZECOMPONENTS_REFRESH_ALL . "'/></a>\"";
    ?>

    function refreshComponentsTotal() {
        $.ajax({
            type:"POST",
            url:"<?php echo $this->extraWatch->config->getLiveSiteWithSuffix(); ?>components/com_extrawatch/ajax/sizequerytotal.php?rand=<?php echo $this->extraWatch->config->getRand(); ?>",
            data:"prev=" + total_components + "&mod=<?php echo EW_DB_KEY_SIZE_COM;
            ?>&dir1=<?php echo $realDirectoryMain;
            ?>&dir2=<?php echo $realDirectoryAdmin; ?>&suffix=components",
            success:function (resp) {
                eval("data=" + resp);
                document.getElementById("total_components").innerHTML = data.text;
                total_components = data.total;
            },
            error:function (e) {
                alert('Error: ' + e);
            }
        });
    }


    function refreshSize_components(index) {
        var target = "item-components-" + index.toString();
        $.ajax({
            type:"POST",
            url:"<?php echo $this->extraWatch->config->getLiveSiteWithSuffix(); ?>components/com_extrawatch/ajax/sizequery.php?rand=<?php echo $this->extraWatch->config->getRand(); ?>&env=<?php echo get_class($this->extraWatch->env); ?>",
            data:"dir=" + dirs_components[index] + "&mod=" + <?php echo EW_DB_KEY_SIZE_COM; ?>,
            success:function (resp) {
                document.getElementById(target).innerHTML = resp;
                refreshComponentsTotal();
            },
            error:function (e) {
                alert('Error: ' + e);
            }
        });
    }

    function refreshComponentsAll(index, indexLast) {
        var target = "item-components-" + index.toString();

        $.ajax({
            type:"POST",
            url:"<?php echo $this->extraWatch->config->getLiveSiteWithSuffix(); ?>components/com_extrawatch/ajax/sizequery.php?rand=<?php echo $this->extraWatch->config->getRand(); ?>&env=<?php echo get_class($this->extraWatch->env); ?>",
            data:"dir=" + dirs_components[index] + "&mod=" + <?php echo EW_DB_KEY_SIZE_COM; ?>,
            success:function (resp) {
                document.getElementById(target).innerHTML = resp;

                if (index < indexLast) {
                    refreshComponentsAll(index + 1, indexLast);
                } else {
                    refreshComponentsTotal();
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

<!--PRO_END-->