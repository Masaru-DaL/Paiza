<?php
// おみくじを作る
// 比較演算子 == > < >= <= !=
// 大吉　中吉　小吉　凶　大凶
$omikuji = rand(1,10);
echo "出た数字は$omikuji\n";

if ($omikuji == 1) {
    echo "今日のあなたの運勢は大吉";
}elseif ($omikuji == 2) {
    echo "今日のあなたの運勢は中吉";
}elseif ($omikuji <= 4) {
    echo "今日のあなたの運勢は小吉";
}elseif ($omikuji <= 7) {
    echo "今日のあなたの運勢は凶";
}else {
    echo "今日のあなたの運勢は大凶";
}

?>

<!-- 演習問題 -->
<?php
$omikuji = rand(1,100);
if($omikuji >= 30 & $omikuji <= 100){
    echo "omikujiの中身は".$omikuji."なので大吉";
}else{
    echo "omikujiの中身は".$omikuji."なので大凶";
}

?>

