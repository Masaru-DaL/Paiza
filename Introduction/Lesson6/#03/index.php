<?php
// 2次元配列の基本操作
$teams = [
    ["勇者", "戦士",],
    ["盗賊", "忍者", "商人"],
    ["スライムナイト", "メタルスライム", "はぐれスライム"],
    ["魔法使い"]
    ];

// print_r($teams);
// echo $teams[0][0]. ",";
// echo $teams[0][1]. ",";
// echo $teams[0][2]. "\n";

$teams[0][0] = "魔導士";
print_r($teams);
echo $teams[0][0]. ",";
echo $teams[0][1]. ",";
echo $teams[0][2]. "\n";

echo count($teams). "\n";
echo count($teams[0]);
?>

<!-- 演習問題 -->
<?php
// 2次元配列の要素を更新する
$basket = [
  ["木の棒", "こん棒"],
  ["おにぎり", "おにぎり"],
  ["毒消し", "薬草"]
];

// ここに、要素を更新するコードを記述する
$basket[0][1] = "石斧";

echo($basket[0][0])."\n";
echo($basket[0][1])."\n";
echo($basket[1][0])."\n";
echo($basket[1][1])."\n";
echo($basket[2][0])."\n";
echo($basket[2][1])."\n";
?>

