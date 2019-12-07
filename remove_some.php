<?php
$rs = $_REQUEST["rs"];

exec("remover $rs");

$arts = explode(" ",$rs);
$artId = $arts[0];

exec("start $artId", $t);

foreach($t as $line) {
  echo $line;
  }
?>
