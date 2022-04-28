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
<?php
// 2次元配列を作成してみよう
$item1 = ["木の棒", "こん棒"];
$item2 = ["おにぎり", "おにぎり"];
$item3 = ["毒消し", "薬草"];

// item1 ~ 3を、$basket配列に代入してください。
$basket = [$item1, $item2, $item3];

echo $basket[0][0]."\n";
echo $basket[0][1]."\n";
echo $basket[1][0]."\n";
echo $basket[1][1]."\n";
echo $basket[2][0]."\n";
echo $basket[2][1]."\n";
?>

<?php
// 配列の中身を出力してみよう
$members = [["勇者", "忍者"], ["武士", "戦士"], ["僧侶", "魔法使い"]];

// この下で、$members配列の全ての要素を出力してみよう
echo($members[0][0])."\n";
echo($members[0][1])."\n";
echo($members[1][0])."\n";
echo($members[1][1])."\n";
echo($members[2][0])."\n";
echo($members[2][1])."\n";
?>
