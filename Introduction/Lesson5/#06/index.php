<?php
// foreachで配列の値を取り出す

$array = array(
    "勇者" => 41,
    "魔法使い" => 15,
    "遊び人" => 23
);
//print_r($array);
foreach($array as $key => $value){
	echo $key. "のHPは<strong>".$value."</strong>です。<br>\n";
}
?>

<!-- 演習問題 -->
<?php
$item = array(
	"ショートソード" => 2000,
	"ロングソード" => 5000,
	"鉄の盾" => 1600,
	"鎖かたびら" => 2800
);

// ここから下に記述
foreach ($item as $key => $value) {
    echo $key. "は". $value. "円です。\n";
}
?>

<?php
// 標準入力から値をループで取得
while($input = trim(fgets(STDIN))){
	// カンマで分割
	$key_value = explode(",", $input);
	$key = $key_value[0];
	$value = $key_value[1];
	// 連想配列として$itemに代入
	$item[$key] = $value;
}
// ここから下に記述
// 2000円以下の商品を価格が高い方から順に並べ替えて
// print_rで出力するプログラムを書いてみましょう。
foreach ($item as $key => $value) {
    if ($value <= 2000) {
        $item_list[$key] = $value;
    }
}
arsort($item_list);
print_r($item_list);
?>

<?php
// 標準入力から値をループで取得
while($input = trim(fgets(STDIN))){
	// カンマで分割
	$key_value = explode(",", $input);
	$key = $key_value[0];
	$value = $key_value[1];
	// 連想配列として$itemに代入
	$result[$key] = $value;
}
// ここから下に記述
// 得点が高い順番に並び替え、print_rで出力後、
// 勇者が何位なのか数字で出力してみましょう。
arsort($result);
$i = 1;
foreach ($result as $key => $value) {
    if ($key == "勇者") {
        $rank = $i;
    }
    $i++;
}
print_r($result);
echo $rank;
?>
