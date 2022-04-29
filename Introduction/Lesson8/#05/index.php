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
<?php
// 学生メソッドを呼び出す
class Gakusei {
    public $myKokugo;
    public $mySansu;

    public function __construct($kokugo, $sansu) {
        $this->myKokugo = $kokugo;
        $this->mySansu = $sansu;
    }

    public function sum() {
        return $this->myKokugo + $this->mySansu;
    }
}
// この下に、クラスをインスタンス化し、メソッド呼び出しを記述する
$gakusei = new Gakusei(70, 43);
$total = $gakusei -> sum();
echo "合計は" . $total . "点です\n";
?>

<?php
// 学生メソッドを作る
class Gakusei {
    private $myKokugo;
    private $mySansu;

    public function __construct($kokugo, $sansu) {
        $this->myKokugo = $kokugo;
        $this->mySansu = $sansu;
    }

    // この下に、合計得点を戻り値として返すsumメソッドを記述する
    public function sum() {
        return $this -> myKokugo + $this -> mySansu;
    }
}

$yamada = new Gakusei(70, 43);
echo "合計は" . $yamada->sum() . "点です\n";
?>

