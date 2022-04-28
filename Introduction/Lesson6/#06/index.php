<?php
// 2次元配列をarrayで作成する
$teams =array(
    array("勇者", "戦士"),
    array("盗賊", "忍者", "商人"),
    array("スライム", "ドラゴン", "魔王"),
);

foreach ($teams as $row) {
    foreach ($row as $column) {
        echo $column. " ";
    }
    echo "\n";
}
echo "-----\n";
?>

<!-- 演習問題 -->
<?php
// この下に配列を作成
$arr = array(
    array(7, 7, 7, 7),
    array(7, 7, 7, 7),
    array(7, 7, 7, 7)
);

foreach ($arr as $value) {
    foreach ($value as $val) {
        echo $val." ";
    }
    echo "\n";
}
?>


