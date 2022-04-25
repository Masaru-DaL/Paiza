<?php
// 配列を使ったランダムくじ引き
$input = trim(fgets(STDIN));
$member = explode(",", $input);
print_r($member);
$max = count($member)-1;
$key = rand(0,$max);
echo $key. "\n";
echo $member[$key];
?>

<!-- 演習問題 -->
<?php
// 標準入力から1行取得
$input = trim(fgets(STDIN));
// カンマで分割して配列に代入
$num = explode(",", $input);
// ランダムの上限値を計算して変数に代入
$max = count($num)-1;
// 配列の中身を出力
$omikuji = rand(0, $max);
// ランダム出力
print_r($num);
echo $num[$omikuji];
?>

<?php
// 今回は自力で全部書いてみよう！
while($input = fgets(STDIN)) {
    $array[] = trim($input);
}
$max = count($array)-1;
print_r($array);

$omikuji = rand(0, $max);
echo $array[$omikuji];
?>
