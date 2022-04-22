<?php
// 平成何年か計算
$year = date("Y");
echo "西暦" . $year . "年は";

// 平成元年は1989年
// 1989年を平成1年として出したい つまり西暦-1988
$heisei = $year - 1988;
echo "平成" . $heisei . "年です";
?>

<!-- 演習問題 -->
<?php
$year = rand(1926,1988);
echo "西暦".$year."年は";
$syowa = $year - 1925; // 昭和年の計算式を書く
echo "昭和".$syowa."年です";

?>
