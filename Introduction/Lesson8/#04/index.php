<?php
// RPGの敵クラスを作る
class Enemy {
    public $myName;

    public function __construct($name) {
        $this -> myName = $name;
    }
    public function attack() {
    echo $this -> myName . "は、勇者を攻撃した。\n";
    }
}

// $enemy = new Enemy("モンスター");
// $enemy->attack();

$enemies[] = new Enemy("はぐれメタル");
$enemies[] = new Enemy("メタルスライム");
$enemies[] = new Enemy("キングスライム");

foreach ($enemies as $enemy) {
    echo $enemy -> attack();
}
?>

<!-- 演習問題 -->
