<?php
// RPGのPlayerクラスを継承で記述１
class Player {
    public $myName;

    public function __construct($name) {
        $this -> myName = $name;
    }

    public function attack($enemy) {
        echo $this -> myName . "は、" . $enemy . "を攻撃した！\n";
    }
}

echo "=== パーティーでスライムと戦う ===\n";
$hero = new Player("勇者");
$warrior = new Player("戦士");
// $hero -> attack("スライム");

$party = [$hero, $warrior];
foreach ($party as $member) {
    $member -> attack("スライム");
}
?>

<!-- 演習問題 -->

