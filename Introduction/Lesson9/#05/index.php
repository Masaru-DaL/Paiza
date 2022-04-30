<?php
// RPGのPlayerクラスを継承で記述　その2
class Player {
    public $myName;

    public function __construct($name) {
        $this->myName = $name;
    }

    public function attack($enemy) {
        echo $this->myName."は、".$enemy."を攻撃した！\n";
    }
}

class Wizard extends Player {
    public function attack($enemy) {
        echo "シャラララーン！\n";
        echo $this -> myName . "は、" . $enemy . "に炎を放った！\n";
    }
}

echo "=== パーティーでスライムと戦う ===\n";
$hero = new Player("勇者");
// $hero->attack("スライム");
$warrior = new Player("戦士");
$wizard = new Wizard("魔法使い");

$party = [$hero, $warrior, $wizard];
foreach ($party as $member) {
    $member->attack("スライム");
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
        echo $this->myName."は".$enemy."を攻撃した\n";
    }
}

class Warrior extends Player {
    // ここにメソッドのオーバーライドを実装する
    public function attack($enemy) {
        echo $this -> myName . "は" . $enemy . "を猛攻撃した\n";
    }
}
$hero = new Player("勇者");
$wizard = new Player("魔法使い");
$warrior = new Warrior("戦士");
$players = [$hero, $wizard, $warrior];

foreach ($players as $player) {
    $player->attack("スライム");
}
?>
