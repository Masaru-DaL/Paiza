<?php
$input = trim(fgets(STDIN));

while($input) {
    $array[] = $input;
    $input = trim(fgets(STDIN));
}
print_r($array);
?>
