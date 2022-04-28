<?php
// 2次元配列で地図を表示する１
$mapRow = array_fill(0, 20, "森");
$landMap = array_fill(0, 10, $mapRow);

$landMap[0][0] = "城";
$landMap[0][19] = "町";
$landMap[9][19] = "町";

foreach ($landMap as $row) {
    foreach ($row as $column) {
        echo $column;
    }
    echo "\n";
}
?>

<!-- 演習問題 -->
<?php
// 模様を出力してみよう
$landMap = array_fill(0, 5, array_fill(0, 10, "."));

// ここに「＋」を代入するコードを記述
$landMap[0][0] = "+";
$landMap[0][9] = "+";
$landMap[4][0] = "+";
$landMap[4][9] = "+";

foreach ($landMap as $row) {
  foreach ($row as $value) {
    echo $value;
  }
  echo "\n";
}
?>

