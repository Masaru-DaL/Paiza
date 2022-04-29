<?php
// 関数を作ろう
function sum($x, $y) {
    return $x + $y;
}

$num1 = sum(100, 200);
echo $num1 . "\n";

$num2 = sum(300, 400);
echo $num2 . "\n";
?>

<!-- 演習問題 -->
<?php
// 掛け算関数を呼び出してみよう

function multiply($x, $y){
    return $x * $y;
}

// この下に関数呼び出しを記述する
$num1 = multiply(3, 4);
echo $num1;
?>


