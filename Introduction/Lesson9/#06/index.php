<?php
// クラスからメソッドを呼び出してみよう
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
    public function __construct() {
        parent::__construct("魔法使い");
    }
    public function attack($enemy) {
        $this -> spell();
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
// $wizard -> spell();
?>

<!-- 演習問題 -->
<?php
// 親クラスと子クラス
class Greeting {
    public $msg;
    public $target;


    public function __construct() {
        $this->target = "paiza";
        $this->msg = "hello";
    }

    public function sayHello() {
        echo $this->msg." ".$this->target."\n";
    }
}
class NewFriend extends Greeting {
    public function __construct() {
        // 下記に足りない処理を記述する
        parent::__construct();
        $this->target = "PHP";
    }
    public function sayHello() {
        echo $this->msg." ".$this->target."\n";
    }

}

$paiza = new Greeting();
$paiza->sayHello();
$paiza = new NewFriend();
$paiza->sayHello();
