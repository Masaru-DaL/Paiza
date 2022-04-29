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
<?php
// RPGの攻撃シーン
function attack($person){
    echo $person."はスライムを攻撃した\n";
}

function output_ememy_hp($enemy_hp){
    echo "敵のHPは残り".$enemy_hp."です\n";
}

$enemy_hp = trim(fgets(STDIN));
$team = array("勇者" => 200, "戦士" => 150, "魔法使い" => 100);
foreach ($team as $person => $power) {
    attack($person);
    $enemy_hp = $enemy_hp -$power;
    output_ememy_hp($enemy_hp);
}

?>
