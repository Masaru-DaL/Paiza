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
<?php
// RPGの攻撃シーン
class Player {
    public $myName;

    public function __construct($name) {
        $this->myName = $name;
    }

    public function attack($enemy) {
	    echo $this->myName . "は" . $enemy . "を攻撃した\n";
    }
}

$team[] = new Player("勇者");
$team[] = new Player("戦士");
$team[] = new Player("魔法使い");

$enemy = "スライム";

foreach ($team as $member) {
    echo $member -> attack($enemy);
}
?>
