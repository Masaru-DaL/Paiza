<!-- 演習問題1 -->
<?php
// 1234 かける 5678 割る 2 を計算して出力してみましょう。

echo 1234 * 5678 /2;
?>

<!-- 演習問題2 -->
<?php
$x = 30;
// ここに単項演算子を書きましょう
$x -= 1;

echo $x;

?>

<!-- 演習問題3 -->
<?php
$x = 13;
$y = 21;
// 以下に $x と $y のかけ算結果を出力してください
echo $x * $y;

?>

<!-- 演習問題4 -->
<?php
$x = 50; // この行は触らない
$y = 23; // この行は触らない
$x += 1;
$y -= 1;

echo "xの値は".$x."です\n"; // この行は触らない
echo "yの値は".$y."です\n"; // この行は触らない
echo $x * $y;
?>
