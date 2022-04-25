<?php
// explode関数
$input = trim(fgets(STDIN));
$array = explode(",", $input);
print_r($array);

echo count($array);
?>

<!-- 演習問題 -->
<?php
// 標準入力から1行取得し$inputに代入
$input = trim(fgets(STDIN));
// $inputの文字列を分割してみよう！
$array = explode("/" , $input);
print_r($array);
?>

<?php
$input = trim(fgets(STDIN));
$array = explode("<>" , $input);
print_r($array);
?>

<?php
// 標準入力から1行取得し$inputに代入
$input = trim(fgets(STDIN));
// カンマ区切りでいくつの要素が入っているか数えよう
$array = explode("," , $input);
echo count($array);
?>

<?php
// 標準入力から1行取得し$inputに代入
$input = trim(fgets(STDIN));
// explodeで$inputの文字列を分割し$arrayに配列として代入
$array = explode(",", $input);
// $arrayの要素数を数えて$numに代入
$num = count($array);
// $numの数だけループして$arrayから
// 要素を一つづつ取り出してみよう
for ($i = 0; $i <= $num; $i++) {
     echo $array[$i]. "\n";
}
?>

<?php
// 今回は自力で全部書いてみよう！
$input = trim(fgets(STDIN));
$array = explode(",", $input);
$num = count($array);
for ($i = 0; $i < $num; $i++) {
     echo $array[$i]. "さん\n";
}
?>

