<?php
// ドット絵を表示する
$enemyImage =
    array(
        array(0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0),
        array(1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
        array(1, 0, 0, 1, 1, 1, 0, 0, 0, 1, 1, 1, 0, 0, 0, 1),
        array(1, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 1, 1),
        array(0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0),
        array(0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 1, 0, 0),
        array(0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 1, 1, 1)
    );
foreach ($enemyImage as $row) {
    foreach ($row as $cloumn) {
        // echo $cloumn;
        if ($cloumn == 1) {
            echo "#";
        } else {
            echo " ";
        }
    }
    echo "\n";
}
?>

<!-- 演習問題 -->
<?php
// ドットで文字を出力しよう
$letter_A = array(
    array(0, 0, 1, 1, 0, 0),
    array(0, 1, 0, 0, 1, 0),
    array(1, 0, 0, 0, 0, 1),
    array(1, 1, 1, 1, 1, 1),
    array(1, 0, 0, 0, 0, 1),
    array(1, 0, 0, 0, 0, 1),
);
// ここに、ドットを表示するコードを記述する
foreach ($letter_A as $line) {
    foreach ($line as $dot) {
        if ($dot == 1) {
            echo "@";
        } else {
            echo " ";
        }
    }
    echo "\n";
}
?>
