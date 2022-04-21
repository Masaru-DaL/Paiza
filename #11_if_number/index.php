<?php

    $number = trim(fgets(STDIN));
    echo $number . "\n";

    if ($number == 10) {
        echo $number . "は10に等しい\n";
    } elseif ($number > 10) {
        echo $number . "は10より大きい\n";
    } else {
        echo $number . "は10未満\n";
    }
?>
