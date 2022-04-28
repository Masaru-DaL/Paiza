<?php
// 2次元配列で地図を表示する２
$mapRow = array_fill(0, 20, "森");
$landMap = array_fill(0, 10, $mapRow);

$landMap[0][0] = "城";
$landMap[0][19] = "町";
$landMap[9][19] = "町";

foreach ($landMap as $i => $row) {
    echo $i. ":";
    foreach ($row as $j => $column) {
        if (($i % 2 == 0 || $j % 3 == 0) && $column == "森") {
            $landMap[$i][$j] = "＋";
        }
        echo $landMap[$i][$j];
    }
    echo "\n";
}
?>

<!-- 演習問題 -->
<?php
// 模様を出力してみよう
$landMap = array_fill(0, 5, array_fill(0, 10, "."));

foreach ($landMap as $i => $row) {
    foreach ($row as $j => $column) {
        // $i, $jどちらも2で割り切れる場合は、「+」を出力
        // そうで無い場合は$columnを出力
        if ($i % 2 == 0 && $j % 2 == 0) {
            echo "+";
        } else {
            echo $column;
        }
    }
    echo "\n";
}
?>
