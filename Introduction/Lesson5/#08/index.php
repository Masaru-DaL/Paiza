<?php
$item_img = array(
    "剣" => "http://paiza.jp/learning/images/sword.png",
    "盾" => "http://paiza.jp/learning/images/shield.png",
    "回復薬" => "http://paiza.jp/learning/images/potion.png",
    "クリスタル" => "http://paiza.jp/learning/images/crystal.png"
);
$item_order = array("盾", "剣", "クリスタル", "回復薬", "回復薬", "回復薬");

// 並び順配列をループさせてアイテム名を表示
foreach($item_order as $item_name) {
    // アイテム名を元に画像用配列から画像ファイル名を取得
    echo "<img src=". $item_img[$item_name]. ">";
    echo $item_name. "<br>\n";
}
?>

<!-- 演習問題 -->
<?php
$item_img = array(
    "剣" => "http://paiza.jp/learning/images/sword.png",
    "盾" => "http://paiza.jp/learning/images/shield.png",
    "回復薬" => "http://paiza.jp/learning/images/potion.png",
    "クリスタル" => "http://paiza.jp/learning/images/crystal.png"
);
// ここから下に記述
$item_list = array("剣", "盾", "回復薬", "クリスタル");
foreach ($item_list as $item_name) {
    echo "<img src=". $item_img[$item_name]. "><br>\n";
}
?>

