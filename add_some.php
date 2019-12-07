<?php

// adds articles then shows the source and recommended article set as JSON 
// summaries

$addids = $_REQUEST["addids"];

exec("adder $addids");

$arts = explode(" ",$addids);
$artId = $arts[0];

exec("start $artId", $t);

foreach($t as $line) {
  echo $line;
}
?>

