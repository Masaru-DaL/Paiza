<?php
    $name = trim(fgets(STDIN));
    echo "Hello " . $name. "\n";

    $number = trim(fgets(STDIN));
    echo $number * 10 . "\n";
    echo "おこづかい: " . $number * 10 . "円";
?>
