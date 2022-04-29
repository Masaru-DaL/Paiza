<?php
// 関数を作ろう
say_hello();
function say_hello() {
    echo "hello paiza";
}
say_hello();
?>

<!-- 演習問題 -->
<?php
// 関数を呼び出してみよう

function say_hello(){
    echo "hello paiza";
}

// この下に関数呼び出しを記述する
say_hello();
?>

<?php
// 関数を作成してみよう

function say_hello(){
    // この下に関数内の処理を記述する
    echo "hello php";
}

say_hello();
?>

<?php
// 間違い探し
$message = "Paiza";

function say_hello($message){
    echo "hello " . $message;
}

say_hello($message);
?>


