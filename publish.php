<?php

// adds articles to be printed then shows the source and recommended article 
// set as JSON summaries

$rs = $_REQUEST["rs"];

exec("publisher $rs");

$arts = explode(" ",$rs);
$artId = $arts[0];

exec("printer $artId", $t);

foreach($t as $line) {
  echo $line;
}
?>
