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

