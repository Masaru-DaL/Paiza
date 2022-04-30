<?php
function test_exception($date) {
    echo "2\n";
    try {
        echo "3\n";
        return new DateTime($date);
        echo "4\n";
    } catch (Exception $e) {
        echo "5\n";
        throw $e;
    }
    echo "6\n";
}

echo "1\n";
try {
    $dateTime = test_exception("199x-01-01");
    echo "7\n";
} catch (Exception $e) {
    echo "8\n";
}
echo "9\n";
?>

<!-- 演習問題 -->
<?php
// 呼び出し元に例外を伝えよう

function test_exception($date) {
    try {
        return new DateTime($date);
    } catch (Exception $e) {
        throw $e;
    }
}

echo "start\n";
try {
    $dateTime = test_exception("199x-01-01");
} catch (Exception $e) {
    echo "不正な日付です\n";
} finally {
    echo "end\n";
}
?>

