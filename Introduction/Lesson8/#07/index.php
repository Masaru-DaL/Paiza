<?php
// staticを理解しよう
class Item {
    public static $tax = 1.08;
    // public $price;
    // public $quantity;

    // public function __construct($newPrice, $newQuantity){
    //     $this->price = $newPrice;
    //     $this->quantity = $newQuantity;
    // }

    public static function getTotalAmount($price, $quantity) {
        return round($price * $quantity * self::$tax);
    }
}

$total = Item::getTotalAmount(120, 15);
echo "合計金額は" . $total . "円です。\n";
?>

<!-- 演習問題 -->
<?php
// 学生メソッドを呼び出す
class Gakusei {
    // この下に、合計得点を戻り値として返すsumメソッドを記述する
    public static function sum($kokugo, $sansu) {
        return $kokugo + $sansu;
    }
}

// この下に、合計得点を戻り値として返すGakuseiクラスsumメソッドを呼び出す
// 国語 = 70点、算数 = 43点
$total = Gakusei::sum(70, 43);
echo "合計は" . $total . "点です。";
?>

