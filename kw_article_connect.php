<?php
// get the q parameter from URL
$q = $_REQUEST["q"];

exec("cold_filtered $q", $t);

foreach($t as $line) {
  echo $line;
}
?>