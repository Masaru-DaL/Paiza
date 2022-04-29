<?php
// クラスを継承する
class Box {
    public $myItem;

    public function __construct() {
        $this -> myItem = "新しいアイテム";
    }

    public function open() {
        echo "宝箱を開いた。" . $this -> myItem . "を手に入れた。\n";
    }
}

class JewelyBox extends Box {
    public function look() {
        echo "宝箱はキラキラと輝いている。\n";
    }
}

$box = new Box();
$box -> open();
echo "\n";
$jewelly_box = new JewelyBox();
$jewelly_box -> look();
$jewelly_box -> open();
?>

<!-- 演習問題 -->
<?php
// クラスにメソッドを定義しよう
class Greeting {
    public $msg;
    public $target;

    public function __construct() {
        $this->msg = "hello";
        $this->target = "paiza";
    }
    public function sayHello() {
        echo $this->msg." ".$this->target;
    }
}

class Hello extends Greeting {
}

$hello = new Hello();
// 続けて、sayHelloメソッドを呼び出す
$hello -> sayHello();
?>

<?php
// 間違い探し
class Greeting {
    public $msg;
    public $target;

    public function __construct() {
        $this->msg = "hello";
        $this->target = "paiza";
    }
}

class Hello extends Greeting {
    public function sayHello() {
        echo $this -> msg . " " . $this -> target;
    }
}

$player = new Hello($msg, $target);
$player->sayHello();
?>

