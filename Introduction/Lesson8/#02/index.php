<?php
// クラスを作成する
class Player {
    public function walk() {
        $message = "勇者は荒野を歩いていた。";
        echo $message;
    }
}

$player1 = new Player();
$player1 -> walk();
?>

<!-- 演習問題 -->
<?php
// インスタンスを実体化しよう
class Greeting {
    public function sayHello() {
        echo "hello paiza";
    }
}

$Greeting1 = new Greeting;
$Greeting1 -> sayHello();
?>

