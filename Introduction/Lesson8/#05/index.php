<?php
// クラスで、引数と戻り値のあるメソッドを作ろう
class Item {
    public $price;
    public $quantity;

    public function __construct($newPrice, $newQuantity) {
        $this -> price = $newPrice;
        $this -> quantity = $newQuantity;
    }

    public function getTotalPrice() {
        return $this -> price * $this -> quantity;
    }
}

$apple = new Item(120, 15);
$total = $apple -> getTotalPrice();
echo "合計金額は" . $total . "円です。\n";
$orange = new Item(85, 32);
echo "合計金額は" . $orange -> getTotalPrice() . "円です。\n";
?>

<!-- 演習問題 -->

