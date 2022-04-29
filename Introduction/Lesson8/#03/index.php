<?php
// クラスで変数を管理する
class Player {
    private $myName;
    public function __construct($name) {
        $this -> myName = $name;
    }
    public function walk() {
        echo $this -> myName . "は荒野を歩いていた。" . "\n";
    }
}

$player1 = new Player("戦士");
$player1 -> walk();

$player2 = new Player("魔法使い");
$player2 -> walk();

$player1 -> walk();
?>

<!-- 演習問題 -->

