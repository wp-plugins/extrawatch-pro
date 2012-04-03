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

<table width='100%' cellpadding='4'>
    <tr>
        <td align='left'>
            <a href='<?php echo $this->extraWatch->config->renderLink('goals', "action=insert");?>'><img
                src='<?php echo($this->extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/icons/new.gif'
                border='0' title='<?php echo _EW_GOALS_NEW;?>' valign='center'/> <?php echo _EW_GOALS_NEW;?></a> &nbsp;
            &nbsp;
        </td>
        <td align='right'>
            <a href='<?php echo $this->extraWatch->config->renderLink('goals');?><img src='
               <?php echo($this->extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/icons/reload.gif'
            border='0' title='<?php echo _EW_GOALS_RELOAD;?>'/></a>
        </td>
    </tr>
</table>
<div style='width: 80%; text-align: justify; border: 1px solid black;'>
    <?php echo (_EW_DESC_GOALS); ?>
</div><br/>
<table width='100%' cellpadding='4'>
    <tr>
        <th align='center'><?php echo(_EW_GOALS_ID);?></th>
        <th align='center'><?php echo(_EW_GOALS_NAME);?></th>
        <th align='center'><?php echo(_EW_GOALS_URI_CONDITION);?></th>
        <th align='center'><?php echo(_EW_GOALS_TITLE_CONDITION);?></th>
        <th align='center'><?php echo(_EW_GOALS_USERNAME_CONDITION);?></th>
        <th align='center'><?php echo(_EW_GOALS_CAME_FROM_CONDITION);?></th>
        <th align='center'><?php echo(_EW_GOALS_COUNTRY_CONDITION);?></th>
        <th align='center'><?php echo(_EW_GOALS_IP_CONDITION);?></th>
        <th align='center'><?php echo(_EW_GOALS_GET_VAR);?></th>
        <th align='center'><?php echo(_EW_GOALS_GET_CONDITION);?></th>
        <th align='center'><?php echo(_EW_GOALS_GET_INVERSED);?></th>
        <th align='center'><?php echo(_EW_GOALS_POST_VAR);?></th>
        <th align='center'><?php echo(_EW_GOALS_POST_CONDITION);?></th>
        <th align='center'><?php echo(_EW_GOALS_POST_INVERSED);?></th>
        <th align='center'><?php echo(_EW_GOALS_HITS);?></th>
        <th align='center'><?php echo(_EW_GOALS_ENABLED);?></th>
    </tr>
    <?php

    $rows = $this->extraWatch->goal->getGoals();        //TODO change to style

    $i = 0;
    if ($rows)
        foreach ($rows as $row) {
            $i++;
            if ($i % 2)
                $color = "#f5f5f5";
            else
                $color = "#f0f0f0";
            $style = "background-color: $color;";
            ?>
            <tr>
                <?php echo $this->renderCell($style, @$row->id);?>
                <?php echo $this->renderCell($style, @$row->name, 1);?>
                <?php echo $this->renderCell($style, @$row->uri_condition);?>
                <?php echo $this->renderCell($style, @$row->title_condition);?>
                <?php echo $this->renderCell($style, @$row->username_condition);?>
                <?php echo $this->renderCell($style, @$row->came_from_condition);?>
                <?php echo $this->renderCell($style, @$row->country_condition);?>
                <?php echo $this->renderCell($style, @$row->ip_condition);?>
                <?php echo $this->renderCell($style, @$row->get_var);?>
                <?php echo $this->renderCell($style, @$row->get_condition);?>
                <?php echo $this->renderCell($style, @$row->get_inversed);?>
                <?php echo $this->renderCell($style, @$row->post_var); ?>
                <?php echo $this->renderCell($style, @$row->post_condition);?>
                <?php echo $this->renderCell($style, @$row->post_inversed);?>
                <td align='center'
                    style='<?php echo $style;?>'><?php echo $this->extraWatch->goal->getGoalCount($row->id);?></td>
                <td align='center'
                    style='<?php echo $style;?>'><?php echo $this->renderEnabled($row->id, $row->disabled);?></td>
                <td align='center' style='<?php echo $style;?>'><?php echo @$this->renderActionButtons($row->id);?></td>

            </tr>
            <?php
        }
    ?>
</table>
<br/><br/>
<?php
if (!$rows) {
    echo ExtraWatchHelper::renderNoData();
}
?>

<br/><br/><br/><br/>
