<?php
// 配列の並び替え
$item = array("イージスシールド", "ウィンドスピア", "アースブレイカー");
print_r($item);
sort($item);
print_r($item);
?>

<!-- 演習問題 -->
<?php
$item = array("02:戦士", "01:勇者", "04:魔法使い", "03:僧侶");
// 小さい順に並び替えて、print_rで出力してみましょう。
sort($item);
print_r($item);

?>

<!-- ↓ -->
<?php
$item = array("02:戦士", "01:勇者", "04:魔法使い", "03:僧侶");
// 大きい順に並び替えて、print_rで出力してみましょう。
rsort($item);
print_r($item);

?>
?>
<?php
while($input = trim(fgets(STDIN))) {
    $team[] = $input;
}
sort($team);
print_r($team);
?>
<!-- ↑ -->

<?php
while($input = fgets(STDIN)) {
    $item[] = trim($input);
}

sort($item);
print_r($item);
?>

<?php
$input = trim(fgets(STDIN));
$item = explode(",", $input);
rsort($item);
print_r($item);
?>
