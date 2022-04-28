<?php
// 標準入力から2次元配列
$number = trim(fgets(STDIN));

for ($i = 0; $i < $number; $i++) {
     $table[] = explode(" ", trim(fgets(STDIN)));
}

foreach ($table as $line) {
    foreach ($line as $dot) {
        if ($dot == 1) {
            echo "#";
        } else {
            echo " ";
        }
    }
    echo "\n";
}
?>

<!-- 演習問題 -->
