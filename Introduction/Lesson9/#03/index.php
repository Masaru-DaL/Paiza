<?php
// メソッドのオーバーライド
class Box {
    public $myItem;

    public function __construct($item) {
        $this->myItem = $item;
    }

    public function open() {
        echo "宝箱を開いた。".$this->myItem."を手に入れた。\n";
    }
}
class MagicBox extends Box {
    public function look() {
        echo "宝箱は妖しく輝いている。\n";
    }
    public function open() {
        echo "宝箱を開いた。" . $this ->myItem . "が襲ってきた！！\n";
    }
}

$box = new Box("鋼鉄の剣");
$box->open();

$magicBox = new MagicBox("モノマネモンスター");
$magicBox -> look();
$magicBox -> open();
?>

<!-- 演習問題 -->
<?php
// メソッドをオーバーライドしよう
class Greeting {
    public function sayHello() {
        echo "greeting paiza";
    }
}

class Hello extends Greeting {
    // この下で、メソッドをオーバーライドする
    public function sayHello() {
        echo "hello paiza";
    }
}

$player = new Hello();
$player->sayHello();
?>
