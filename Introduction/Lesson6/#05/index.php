<?php
// 2次元配列をループで処理する
$teams =
    [
        ["勇者", "戦士"],
        ["盗賊", "忍者", "商人"],
        ["スライム", "ドラゴン", "魔王"],
    ];
// for ($i = 0; $i < count($teams); $i++) {
//     for($j = 0; $j <count($teams[$i]); $j++) {
//         echo $teams[$i][$j]. " ";
//     }
//      echo "\n";
//      echo "---\n";
// }
foreach ($teams as $team) {
    foreach ($team as $player) {
        echo $player. " ";
    }
    echo "\n";
    echo "---\n";
}
?>

<!-- 演習問題 -->
<?php
// ループで2次元配列を出力してみよう

$teams = [
  ["勇者", "忍者"],
  ["武士", "戦士"],
  ["僧侶", "魔法使い"],
];


for ($i = 0; $i < count($teams); $i++) {
  for ($j = 0; $j < count($teams[$i]); $j++) {
    // この下に配列の値を出力するコードを記述
    echo $teams[$i][$j]. "\n";
  }
}
?>

