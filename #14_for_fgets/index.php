<?php
    $count = trim(fgets(STDIN));

    for ($i = 0; $i < $count; $i++) {
         $name = trim(fgets(STDIN));
         echo "Hello " . $name . "\n";
    }
?>

<!-- 演習問題 -->
<?php
    # 標準入力で指定した回数繰り返す
    $greeting = "Hello paiza\n";
    $count = trim(fgets(STDIN));
    for ($i = 0; $i < $count; $i++) {
         echo $greeting;
    }
?>

