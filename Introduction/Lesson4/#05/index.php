<?php
$input = trim(fgets(STDIN));
while($input) {
    $array[] = $input;
    $input = trim(fgets(STDIN));
}
print_r($array);
?>

<!-- 演習問題 -->
<?php
// 標準入力から1行データを取得
$input = trim(fgets(STDIN));
// $inputの値が空で無ければループする
while($input){
    // 配列に$inputの値を追加
    $array[] = $input;
    // 標準入力から1行データを取得
    $input = trim(fgets(STDIN));
}
print_r($array);
?>

<?php
// 標準入力から1行データを取得
$input = trim(fgets(STDIN));
// $inputの値が空で無ければループする
while($input){
    // 配列に$inputの値を追加
    $array[] = $input;
    echo $input. "さん\n";
    // 標準入力から1行データを取得
    $input = trim(fgets(STDIN));
}
?>
