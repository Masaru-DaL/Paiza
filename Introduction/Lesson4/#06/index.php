<?php
// データを取得する
// 値が空でなければループして値を取得し続ける
while($input = fgets(STDIN)){
    $array[] = trim($input);
}
print_r($array);
?>

<!-- 演習問題 -->
<?php
// 標準入力から1行データを取得
$input = fgets(STDIN);
// $inputの値が空で無ければループする
while($input){
    // 配列に$inputの値を追加
    $array[] = trim($input);
    // 標準入力から1行データを取得
    $input = fgets(STDIN);
}
print_r($array);

?>

