<?php
// get the q parameter from URL
$f = $_REQUEST["f"];

exec("full_bodied $f", $t);

foreach($t as $line) {
  echo $line;
}
?>