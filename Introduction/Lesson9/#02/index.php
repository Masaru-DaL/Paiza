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

