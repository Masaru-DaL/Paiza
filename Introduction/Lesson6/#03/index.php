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
