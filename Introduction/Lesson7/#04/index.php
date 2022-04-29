<?php
// スコープを理解する
$a = 10;
$b = 20;

function sum($x, $y) {
    $a = 3;
    echo "hello" . $a . "\n";
    return $x + $y;
}

$num = sum($a, $b);
echo $num . "\n";

echo "hello" . $a . "\n";
?>

<!-- 演習問題 -->
<?php
// 間違い探し

function say_hello(){
    $message = "Paiza";
    echo "hello ".$message;
}

say_hello();
?>
