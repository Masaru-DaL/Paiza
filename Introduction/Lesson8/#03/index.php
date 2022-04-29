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
<?php
// インスタンスを実体化しよう
class Greeting {
    public $myName;

    public function __construct($name) {
        $this->myName = $name;
    }

    public function sayHello() {
        echo "hello " . $this->myName;
    }
}
// この下に、インスタンスを実体化し、メソッド呼び出しを記述する
$greeting = new Greeting("paiza");
$greeting -> sayHello();


