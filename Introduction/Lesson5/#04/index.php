<?php
// 連想配列の並び替え
$item = array(
	"イージスシールド" => 40,
	"ウィンドスピア" =>1,
	"アースブレイカー" =>12
);
print_r($item);
// Valueが小さい順
// asort($item);
// Valueが大きい順
// arsort($item);

// keyが小さい順
// ksort($item);
// keyが大きい順
krsort($item);

print_r($item);
?>

<!-- 演習問題 -->
<?php
$item = array(
	"ショートソード" => "攻撃力:23",
	"バスタードソード" => "攻撃力:45",
	"ロングソード" => "攻撃力:34",
	"ダガー" => "攻撃力:10"
);
// $itemのvalueを大きい順に並べ替えて
// print_rで出力しましょう
arsort($item);
print_r($item);
?>

<?php
$rank = array(
	"はぐれ犬" => "2位",
	"オオカミ" => "4位",
	"スライム" => "1位",
	"ゴブリン" => "3位"
);
// $rankのvalueを順位順（１位、２位、、）に並べ替えて
// print_rで出力しましょう
asort($rank);
print_r($rank);
?>

<?php
$item = array(
	"オリハルコンブレード" => "所持数:2",
	"イージスシールド" => "所持数:3",
	"アースブレイカー" => "所持数:1",
	"エビルソード" => "所持数:1",
	"ウインドスピア" => "所持数:1"
);
// 連想配列$itemのkeyを小さい順に並び替えて
// print_rで出力してみよう。
ksort($item);
print_r($item);
?>

<?php
$item = array(
	"オリハルコンブレード" => "所持数:2",
	"イージスシールド" => "所持数:3",
	"アースブレイカー" => "所持数:1",
	"エビルソード" => "所持数:1",
	"ウインドスピア" => "所持数:1"
);
krsort($item);
print_r($item);
?>

<?php
while($input = trim(fgets(STDIN))) {
    $key_value = explode(",", $input);
    $key = $key_value[0];
    $value = $key_value[1];
    $item[$key] = $value;
}

arsort($item);
print_r($item);
?>
