<?php
echo "start\n";
try {
    $date = new DateTime("199x-01-01");
    echo $date -> format('Y/m/d') . "\n";
} catch (Exception $e) {
    echo "指定された日付が不正です\n";
    // echo "発生した例外:". $e. "\n";
    // echo "発生した例外:", $e, "\n";
    fputs(STDERR, $e -> getMessage() . "\n");
} finally {
    echo "end\n";
}
?>

<!-- 演習問題 -->
<?php
// 例外メッセージを指定しよう

echo "start\n";
try {
    $date = new DateTime("199x-01-01");
    echo $date->format('Y/m/d') . "\n";
} catch (Exception $e) {
    echo "指定された日付が不正です\n";
    fputs(STDERR , $e->getMessage() . "\n");
} finally {
    echo "end\n";
}
?>
