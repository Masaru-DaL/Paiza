<?php
// if文による条件分岐
$n = 1;
if($n == 1){
    // 条件式が成り立ったときの処理
    echo "好き";
}elseif ($n == 2) {
    echo "どちらとも言えない";
}else{
    // 条件が成り立たなかったときの処理
    echo "嫌い";
}

?>

<!-- 演習問題 -->
<?php
$place = rand(1,5); // 順位を1〜5の範囲でランダムに作られた数字を$placeに代入
echo "placeの中身:".$place."\n";
if($place == 1){
    // 1位だったときの処理
    echo "金賞";
} elseif ($place == 2) {
    echo "銀賞";
} elseif ($place == 3) {
    echo "銅賞";
} else {
    // それ以外だったときの処理
    echo $place."位";
}

?>

