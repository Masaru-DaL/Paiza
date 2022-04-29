<?php
// RPGの攻撃シーンを作ろう
$enemies = array("スライム", "はぐれメタル", "ドラゴン");
foreach ($enemies as $monster) {
    // echo "勇者は" . $monster . "を攻撃した\n";
    attack($monster);
}

function attack($target) {
    echo "勇者は" . $target . "を攻撃した\n";
    $damage = rand(1, 20);
    if ($damage < 15) {
        echo $target . "に" . $damage . "のダメージを与えた！\n";
    } else {
        echo "クリティカルヒット！" . $target . "に100のダメージを与えた！！\n";
    }
}
?>

<!-- 演習問題 -->
