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

<!-- 演習問題 -->
<?php
    # 特定の条件で数値を表示
    $number = trim(fgets(STDIN));

    if ($number < 100) {
        echo $number . "は100より小さい";
    } elseif ($number >= 100 && $number < 200) {
        echo $number . "は100以上200より小さい";
    } else {
        echo $number . "は200以上";
    }

?>

<!-- 演習問題 -->
<?php
    # ゼロ・プラス・マイナス
    $number = trim(fgets(STDIN));

    if ($number == 0) {
        echo $number . "は0";
    } elseif ($number > 0) {
        echo $number . "はプラス";
    } else {
        echo $number . "はマイナス";
    }
?>
