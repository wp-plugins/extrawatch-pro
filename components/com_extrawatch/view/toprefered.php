<?php
$day = ExtraWatchHelper::requestGet('day');
if (!$day) {
    $day = $this->extraWatch->date->jwDateToday(); // yesterday by default, because it contains
}
?>

<h2>Top referred pages by keyphrases for <?php echo $this->extraWatch->date->getDateByDay($day); ?></h2>

<table width='700px' border="0">
    <tr>
        <th align="left">keyphrase</th>
        <th>value</th>
        <th>perc.</th>
        <th>1-day</th>
        <th>7-days</th>
        <th>28-days</th>
    </tr>
    <?php
    foreach ($rows as $row) {
        $totalIntValuesForDay = $this->extraWatch->stat->getCountByKeyAndDate(DB_KEY_UNIQUE, $day);
        $percentOfHitsPerDay = sprintf("%.2f%%", ($row->total / $totalIntValuesForDay) * 100);
        ?>
        <tr>
            <td colspan="2"><h4><a href='<?php echo($row->uri);?>' target="_blank"><?php echo($row->title);?></a></h4>
            </td>
            <td align="left"><b>Hits: <?php echo($row->total);?></b></td>
            <td align="left" colspan="3"><?php echo($percentOfHitsPerDay);?> of traffic</td>
        </tr>

        <?php
        $keyphrases = $this->extraWatch->seo->retrieveKeyphrasesForUri($day, $row->uriId);
        foreach ($keyphrases as $keyphrase) {
            if (is_numeric($keyphrase->value)) {
                $percent = sprintf("(%.2f%%)", ($keyphrase->value / $row->total) * 100);
            } else {
                $percent = $keyphrase->value;
            }
            echo("<tr><td title='" . $keyphrase->name . "'><a href='http://www.google.com/search?q=" . urlencode($keyphrase->name) . "'>" . ExtraWatchHelper::truncate($keyphrase->name, 60) . "</a></td>" .
                "<td style='width: 30px;' align='right'>" . $keyphrase->value . "</td><td style='width: 20px' align='right'>$percent</td>" .
                $extraWatchStatHTML->renderDiffTableCellsAndIcon(DB_KEY_URI2KEYPHRASE, $keyphrase->uri2keyphraseId, $day) .
                "</tr>");
        }
        ?>
        <?php
    };
    ?>
    <tr>
        <td>
            &nbsp;
        </td>
    </tr>
    <tr>
        <td colspan="5">
            <?php echo $this->renderDateControlGet('seo', $day); ?>
        </td>
    </tr>
</table>