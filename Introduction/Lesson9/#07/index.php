<?php
//  クラス変数とクラスメソッド
class Player {
    public $myName;
    private static $charactorCount = 0;

    public function __construct($name) {
        $this->myName = $name;
        Player::$charactorCount++;
        echo Player::$charactorCount . "番目のプレイヤー、" . $this -> myName . "が登場した。\n";
    }
    public static function charactorCount() {
        return Player::$charactorCount;
    }

    public function attack($enemy) {
        echo $this->myName."は、".$enemy."を攻撃した！\n";
    }
}

class Wizard extends Player {
    public function __construct() {
        parent::__construct("魔法使い");
    }
    public function attack($enemy) {
        $this->spell();
        echo $this->myName."は、".$enemy."に炎を放った！\n";
    }
    private function spell() {
        echo "シャラララーン！\n";
    }
}

echo "=== パーティーでスライムと戦う ===\n";
$hero = new Player("勇者");
// $hero->attack("スライム");
$warrior = new Player("戦士");
$wizard = new Wizard();

$party = [$hero, $warrior, $wizard];
foreach ($party as $member) {
    $member->attack("スライム");
}
// $wizard->spell();
echo Player::charactorCount() . "人で、スライムを攻撃した。\n";
?>

<!-- 演習問題 -->
<?php
// クラスメソッドを呼び出そう
class Greeting{
    public static function say_hello(){
        echo "hello paiza";
    }
}
// この下で、クラスメソッドを呼び出す
$greeting = new Greeting();
$greeting -> say_hello();
?>

