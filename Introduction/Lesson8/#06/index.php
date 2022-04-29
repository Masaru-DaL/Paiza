<?php
// アクセス修飾子を理解しよう
class Player {
    public $myName;
    public function __construct($name) {
        $this -> myName = $name;
    }
    private function walk() {
        echo $this -> myName . "は荒野を歩いていた。\n";
    }
    public function output() {
        $this -> walk();
    }
}

$player = new Player("勇者");
// $player -> walk();
$player -> output();
echo $player -> myName . "\n";
?>

<!-- 演習問題 -->

