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
<?php
// 間違い探し
class Greeting {
    private $myName;

    public function __construct($name) {
        $this->myName = $name;
    }

    private function sayHello() {
        echo "hello " . $this->myName;
    }
    public function sayHelloHello() {
        $this -> sayHello();
    }
}

$paiza = new Greeting("paiza");
$paiza->sayHelloHello();
?>

