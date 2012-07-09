<?php
$day = ExtraWatchHelper::requestGet('day');
if (!$day) {
  $day = $this->extraWatch->date->jwDateToday(); // yesterday by default, because it contains
} ?>


<h2>Best positioned keyphrases for <?php echo $this->extraWatch->date->getDateByDay($day); ?></h2>
<table width='700px' border="0">
  <tr>
    <th>phrase</th>
    <th>position</th>
    <th>count</th>
    <th>1-day</th>
    <th>7-days</th>
    <th>28-days</th>
  </tr>
  <tr>
    <td colspan="5">
      <?php echo $this->renderDateControlGet('seo', $day); ?>
    </td>
  </tr>
  <?php
  $rows = $this->extraWatch->stat->getSearchResultStats($day);
  $output = "";
  if (@$rows)
    foreach ($rows as $row) {
      $output .= ("<tr><td width='100%'><a href='http://www.google.com/search?q=" . urlencode($row->name) . "' target='_blank'>" . $row->name . "</a></td><td align='right'>" . $row->position . "</td>" . "<td align='right'>" . $row->count . "</td>" .
          $extraWatchStatHTML->renderDiffTableCellsAndIcon(EW_DB_KEY_SEARCH_RESULT_NUM, $row->phraseId, $day) .
          "</tr>");
    }
  echo($output);
  $rows = $this->extraWatch->seo->retrieveTopUrisReferedByKeyphrase($day);
  ?>
</table>
