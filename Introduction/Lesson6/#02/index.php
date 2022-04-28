<?php
// 2次元配列を作成する
$player = "忍者";
$teamA = [$player, "戦士", "魔法使い"];
echo $teamA[0]. ",";
echo $teamA[1]. ",";
echo $teamA[2]. "\n";

$teamB = [$teamA[0], $teamA[1], $teamA[2]];
echo $teamB[0]. ",";
echo $teamB[1]. ",";
echo $teamB[2]. "\n";

$teamC = ["勇者", "戦士", "魔法使い"];
$teamD = ["盗賊", "忍者", "商人"];
$teamE = ["スライムナイト", "メタルスライム", "はぐれスライム"];

$teams = [$teamC, $teamD, $teamE];

print_r($teams);
echo $teams[2][0]. ",";
echo $teams[2][1]. ",";
echo $teams[2][2]. "\n";
?>

<!-- 演習問題 -->
