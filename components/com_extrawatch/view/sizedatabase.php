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
<!--
<form action="<?php echo($this->extraWatch->config->getLiveSite());?>administrator/?option=com_extrawatch&task=status" method="POST">
    <input type="checkbox" onchange="this.form.submit()"/> Show all tables
    <input type="hidden" task="toggleShowAllDBTables">
</form>
-->

<table align="left" border='0' style='border: 1px solid #dddddd; padding: 2px;' border-collapse="collapse" width="100%">
    <tr>
        <th width="300px"><?php echo _EW_SIZEDATABASE_TABLE;?></th>
        <th width="150px"><?php echo _EW_SIZEDATABASE_RECORDS;?></th>
        <th width="150px"><?php echo _EW_SIZEDATABASE_SIZE;?></th>
        <th width="150px"><?php echo _EW_SIZEDATABASE_1DAY;?></th>
        <th width="150px"><?php echo _EW_SIZEDATABASE_7DAY;?></th>
        <th width="150px"><?php echo _EW_SIZEDATABASE_28DAY;?></th>
    </tr>
    <?php

    if (!@$day) {
        $day = ExtraWatchDate::jwDateToday();
    }

    $this->extraWatch->sizes->updateTableSizes($day - 1);

    $rows0 = $this->extraWatch->sizes->getTableSizes();
    $rows1 = $this->extraWatch->sizes->getTableSizesForDay(1);
    $rows7 = $this->extraWatch->sizes->getTableSizesForDay(7);
    $rows28 = $this->extraWatch->sizes->getTableSizesForDay(28);

    $total0 = 0;
    $total1 = 0;
    $total7 = 0;
    $total28 = 0;

    $i = 0;
    foreach ($rows0 as $row) {
        if ($i % 2 == 0) {
            $color = "#f9f9f9";
        } else {
            $color = "#eeeeee";
        }

        $size0output = $this->extraWatch->sizes->sizeFormat($row->Data_length + $row->Index_length);
        $total0 += $row->Data_length + $row->Index_length;

        $size1 = _EW_SIZEDATABASE_NO_DATA;
        foreach ($rows1 as $rowCompare) {
            if ($rowCompare->tableName == $row->Name) {
                $size1 = $rowCompare->tableDiff;
                $total1 += $rowCompare->tableSizePrev;
                break;
            }
        }

        $size7 = _EW_SIZEDATABASE_NO_DATA;
        foreach ($rows7 as $rowCompare) {
            if ($rowCompare->tableName == $row->Name) {
                $size7 = $rowCompare->tableDiff;
                $total7 += $rowCompare->tableSizePrev;
                break;
            }
        }

        $size28 = _EW_SIZEDATABASE_NO_DATA;
        foreach ($rows28 as $rowCompare) {
            if ($rowCompare->tableName == $row->Name) {
                $size28 = $rowCompare->tableDiff;
                $total28 += $rowCompare->tableSizePrev;
                break;
            }
        }
        if (!$size1 && !$size7 && !$size28) {
            continue;
        }
        $i++;

        /*  if ((!$size1 || $size1 == _EW_SIZEDATABASE_NO_DATA) &&
                    (!$size7 || $size7 == _EW_SIZEDATABASE_NO_DATA) &&
                    (!$size28 || $size28 == _EW_SIZEDATABASE_NO_DATA)) {
                $i++;
                continue;
            }
        */

        if ($size1 == _EW_SIZEDATABASE_NO_DATA) {
            $size1font = "color: grey";
            $size1output = $size1;
        } else {
            if ($size1 < 0) {
                $size1font = "color: green;";
            } elseif ($size1 > 0) {
                $size1font = "color: red;";
            } else {
                $size1font = "color: grey";
            }
            if ($size1 > EXTRAWATCH_WARNING_THRESHOLD) {
                $size1font .= " font-weight: bold";
            }
            if ($size1) {
                $size1output = sprintf("%+.2f%%", $size1);
            } else {
                $size1output = "-";
            }
        }


        if ($size7 == EXTRAWATCH_WARNING_THRESHOLD) {
            $size7font = "color: grey";
            $size7output = $size7;
        } else {
            if ($size7 < 0) {
                $size7font = "color: green;";
            } elseif ($size7 > 0) {
                $size7font = "color: red;";
            } else {
                $size7font = "color: grey";
            }
            if ($size7 > EXTRAWATCH_WARNING_THRESHOLD) {
                $size7font .= " font-weight: bold";
            }
            if ($size7) {
                $size7output = sprintf("%+.2f%%", $size7);
            } else {
                $size7output = "-";
            }
        }


        if ($size28 == EXTRAWATCH_WARNING_THRESHOLD) {
            $size28font = "color: grey";
            $size28output = $size28;
        } else {
            if ($size28 < 0) {
                $size28font = "color: green;";
            } elseif ($size28 > 0) {
                $size28font = "color: red;";
            } else {
                $size28font = "color: grey";
            }
            if ($size28 > EXTRAWATCH_WARNING_THRESHOLD) {
                $size28font .= " font-weight: bold";
            }
            if ($size28) {
                $size28output = sprintf("%+.2f%%", $size28);
            } else {
                $size28output = "-";
            }
        }


        echo "<tr><td style='background-color: $color;'>" . $row->Name . "</td>" .
            "<td style='background-color: $color;' align='center'>$row->Rows</td>" .
            "<td style='background-color: $color;' align='center'>$size0output</td>" .
            "<td style='background-color: $color; $size1font' align='center'>$size1output</td>" .
            "<td style='background-color: $color; $size7font' align='center'>$size7output</td>" .
            "<td style='background-color: $color; $size28font' align='center'>$size28output</td>";

        $day = $this->extraWatch->date->jwDateToday();

        $trendsIcon = "<img src='" . $this->extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/img/icons/trend_icon.gif' border='0'  " . $this->extraWatch->helper->getTooltipOnEvent() . "=\"ajax_showTooltip('" . $this->extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/ajax/trendtooltip.php?rand=" . $this->extraWatch->config->getRand() . "&group=" . EW_DB_KEY_SIZE_DB . "&name=" . $row->Name . "&date=$day&env=".get_class($this->extraWatch->env)."',this);return FALSE\"/>";

        echo("<td style='background-color: $color;' align='center'>" . $trendsIcon . "</td>");

    }

    if ($total1 != 0) {
        $total1 = ($total0 - $total1) / $total0 * 100;
        if (substr($total1, 0, 1) == "-") $size1font = "color: green;"; else $size1font = "color: red;";
    }
    if ($total7 != 0) {
        $total7 = ($total0 - $total7) / $total0 * 100;
        if (substr($total7, 0, 1) == "-") $size7font = "color: green;"; else $size7font = "color: red;";
    }
    if ($total28 != 0) {
        $total28 = ($total0 - $total28) / $total0 * 100;
        if (substr($total28, 0, 1) == "-") $size28font = "color: green;"; else $size28font = "color: red;";
    }

    echo "<tr><th style='background-color: #cccccc;'>" . _EW_SIZEDATABASE_TOTAL . "</th>" .
        "<th style='background-color: #cccccc;'></th>" .
        "<th style='background-color: #cccccc;' align='center'>" . $this->extraWatch->sizes->sizeFormat($total0) . "</td>" .
        "<th style='background-color: #cccccc; $size1font' align='center'>" . sprintf("%.2f", $total1) . "%</td>" .
        "<th style='background-color: #cccccc; $size7font' align='center'>" . sprintf("%.2f", $total7) . "%</td>" .
        "<th style='background-color: #cccccc; $size28font' align='center'>" . sprintf("%.2f", $total28) . "%</td>" .
        "<th style='background-color: #cccccc; ' align='center'>&nbsp;</td>";
    ?>
</table>


<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<!--PRO_END-->