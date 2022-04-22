<?php
// if文による条件分岐
$n = 2;
if ($n == 1) {
    echo "好き";
} else {
    echo "嫌い";
}
?>

<!-- 演習問題 -->
<?php
$place = 1; // 何位かを$placeに数字で代入
echo "placeの中身:".$place." \n";
if($place == 1){
    // 1位だったときの処理
    echo "優勝";
}else{
    // それ以外だったときの処理
    echo $place."位";
}
?>

<?php
$num = 2;
if($num == 1){
    echo "ナンバーワン";
}else{
    echo "二位以下";
}

?>

<?php
$text = "勇者";
    echo "textの中身:".$text."\n";
if($text == "勇者"){
    // 勇者だった場合の処理
    echo "ようこそ";
}else{
    // それ以外だったときの処理

}

?>

