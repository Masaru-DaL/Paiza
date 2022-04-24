<?php
// explode関数
$input = trim(fgets(STDIN));
$array = explode(",", $input);
print_r($array);

echo count($array);
?>
