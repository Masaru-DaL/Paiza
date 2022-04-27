<?php
// foreachで配列の値を取り出す

$array = array("kirishima", "hogehoge", "hugahuga");
foreach ($array as $value) {
    echo "<strong>". $value. "</strong><br>\n";
}
?>

<!-- 演習問題 -->
<?php
$item = array("ショートソード", "ロングソード", "ブレードソード", "バスタードソード");
// foreach ループで $item 配列の value 全てを一つずつ
// \n を末尾に付けて改行しながら出力してみましょう。
foreach ($item as $value) {
    echo $value. "\n";
}
?>

<?php
$input = trim(fgets(STDIN));
$array = explode(",", $input);

// ここから下に記述　
// $array の value に代入されている
// 全ての数値の合計を出力してみましょう。
$total = 0;
foreach($array as $value) {
    $total = $total + $value;
}
echo $total;

<?php
$input = trim(fgets(STDIN));
$array = explode(",", $input);

// ここから下に記述　
// 配列のvalueに「勇者」が何回出現するか数えて
// 出現数を数字で出力してください。
$i = 0;
foreach ($array as $value) {
    if($value == "勇者") {
        $i++;
    }
}
echo $i;
?>

