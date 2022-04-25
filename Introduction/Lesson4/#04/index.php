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

