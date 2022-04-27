<?php
// 連想配列の基本操作
$item = array(
    "ロングソード" => 2,
    "鉄の盾" => 1
);
$item["クリスタル"] = 6;
print_r($item);
unset($item["鉄の盾"]);
print_r($item);
?>

<!-- 演習問題 -->
<?php
// ■連想配列代入する値
// ショートソードを12個
// 銅の盾を4個
// 布の服を7個
$item = array(
    "ショートソード" => 12,
    "銅の盾" => 4,
    "布の服" => 7
    );
print_r($item);
?>

<?php
// 標準入力を３行取得
for($i=0 ; $i<3 ; $i++){
	$input = trim(fgets(STDIN));
	// 入力値を/で分割
	$key_value =explode("/", $input);
	// 手前の要素をkeyとして、後の要素をvalueとして連想配列に代入
	$key = $key_value[0];
	$value = $key_value[1];
	$team[$key] = $value;

}
// ここから下に記述　
// $team のkeyが戦士のvalueを出力
echo $team["戦士"];
?>

<?php
// 標準入力を３行取得
for($i=0 ; $i<3 ; $i++){
	$input = trim(fgets(STDIN));
	// 入力値を/で分割
	$key_value =explode("/", $input);
	// 手前の要素をkeyとして、後の要素をvalueとして連想配列に代入
	$key = $key_value[0];
	$value = $key_value[1];
	$team[$key] = $value;

}
// ここから下に記述　
// 配列 $team にkeyが「狩人」、valueが「鳥獣をとる猟師」という要素を追加
$team["狩人"] = "鳥獣をとる猟猟師";
print_r($team);
?>

<?php
// 標準入力を３行取得
for($i=0 ; $i<3 ; $i++){
	$input = trim(fgets(STDIN));
	// 入力値を/で分割
	$key_value =explode("/", $input);
	// 手前の要素をkeyとして、後の要素をvalueとして連想配列に代入
	$key = $key_value[0];
	$value = $key_value[1];
	$team[$key] = $value;

}
// ここから下に記述　
// $team のkeyが「木こり」のvalueを「木を切る職業」で上書きして、
//print_rで $team の内容を出力してみよう。

$team["木こり"] = "木を切る職業";
print_r($team);

?>

<?php
// 標準入力を３行取得
for($i=0 ; $i<3 ; $i++){
	$input = trim(fgets(STDIN));
	// 入力値を/で分割
	$key_value =explode("/", $input);
	// 手前の要素をkeyとして、後の要素をvalueとして連想配列に代入
	$key = $key_value[0];
	$value = $key_value[1];
	$team[$key] = $value;

}
// ここから下に記述　
// $team のkeyが「スライム」の要素を削除して
// print_rで $team の内容を出力してみよう。
unset($team["スライム"]);
print_r($team);

?>

