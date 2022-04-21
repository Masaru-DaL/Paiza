<?php
    $count = trim(fgets(STDIN));

    for ($i = 0; $i < $count; $i++) {
        $number = trim(fgets(STDIN));
        echo $number . "\n";

        if ($number == 10) {
            echo $number . "は10と等しい\n";
        } elseif ($number > 10) {
            echo $number . "は10より大きい\n";
        } else {
            echo $number . "は10未満\n";
        }
    }
?>

<!-- 演習問題 -->
<?php
    # ゼロ・プラス・マイナスを繰り返し判定する
    $count = trim(fgets(STDIN));
    echo $count . "\n";

    for ($i = 0; $i < $count; $i++) {
         $number = trim(fgets(STDIN));

         if ($number == 0) {
             echo $number . "は0\n";
         } elseif ($number > 0) {
             echo $number . "はプラス\n";
         } else {
             echo $number . "はマイナス\n";
         }
    }
?>

