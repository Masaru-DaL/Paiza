<?php
// 比較演算子

$hour = 11;
if ($hour < 12) {
    echo "午前中";
} elseif ($hour == 12) {
    echo "正午";
} elseif ($hour > 12) {
    echo "午後";
}
?>

<!-- 演習問題 -->
<?php
$age = rand(18,22); // 何才かを$ageに18~22をランダムで代入
echo "ageの中身:".$age." \n";
if($age < 20){
    // 条件が成り立ったときの処理
    echo "19才は飲酒不可";
}else{
    // それ以外だったときの処理
    echo "20才は飲酒可能";
}

?>

<?php
$place = rand(1,12); // 何位かを$placeに1~12からランダムに選んで代入
echo "placeの中身:".$place."\n";
if($place == 1){
    // 条件が成り立ったときの処理
    echo $place."位入賞";
}elseif ($place <= 6) {
    echo $place . "位入賞";
}else{
    // それ以外だったときの処理
    echo $place."位入賞圏外";
}

?>

<?php
$age = rand(15,25); // 何才かを$ageに15~25から数値をランダムに選んで代入
echo "ageの中身:".$age."\n";
if($age >= 20){
    // 条件が成り立ったときの処理
    echo $age."才成人です";
}else{
    // それ以外だったときの処理
    echo $age."才未成年です";
}

?>
