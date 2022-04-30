<?php
echo "start\n";
try {
$date = new DateTime("199x-01-01");
echo $date -> format('Y/m/d') . "\n";
} catch (Exception $e) {
    echo $e -> getMessage() . "\n";
} finally {
    echo "end\n";
}
?>

<!-- 演習問題 -->
<?php
// 例外処理を定義しよう
echo "start\n";
try {
    $date = new DateTime("199x-01-01");
    echo $date->format('Y/m/d') . "\n";
} catch(Exception $e) {
    echo $e -> getMessage() . "\n";
} finally {
    echo "end\n";
}
?>
