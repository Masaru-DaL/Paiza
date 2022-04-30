<?php
echo "start\n";
try {
    $pattern = 3;
    if ($pattern == 0) {
        throw new RangeException("意図的な範囲例外");
    } elseif ($pattern == 1) {
        throw new LengthException("意図的な長さ例外");
    } else {
        throw new InvalidArgumentException("意図的なその他例外");
    }
    echo "例外を投げた後\n";
} catch (RangeException $e) {
    echo "例外発生1：" . $e->getMessage() . "\n";
} catch (LengthException $e) {
    echo "例外発生2：" . $e->getMessage() . "\n";
} catch (Exception $e) {
    echo "例外発生3：" . $e->getMessage() . "\n";
} finally {
    echo "end\n";
}
?>

<!-- 演習問題 -->
<?php
// 複数の例外を補足してみよう

echo "start\n";
try {
    $pattern = 1;
    if ($pattern == 0) {
        throw new RangeException("意図的な範囲例外");
    } else if ($pattern == 1) {
        throw new LengthException("意図的な長さ例外");
    }
} catch (RangeException $e) {
    echo "例外発生：" . $e->getMessage() . "\n";
// ここにcatch節を追加する
} catch (LengthException $e) {
    echo "例外発生：" . $e->getMessage() . "\n";
} finally {
    echo "end\n";
}
?>
