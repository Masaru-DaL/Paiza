<?php
echo "start\n";
try {
    throw new LengthException("意図的な例外");
    echo "例外を投げた後\n";
} catch (LengthException $e) {
    echo "例外発生：" . $e->getMessage() . "\n";
} finally {
    echo "end\n";
}
?>

<!-- 演習問題 -->
<?php
// 意図的に例外を発生させてみよう
echo "start\n";
try {
    throw new RangeException("意図的なRangeException");
} catch(RangeException $e) {
    fputs(STDERR, "例外発生：" .$e->getMessage() . "\n");
} finally {
    echo "end\n";
}
?>

