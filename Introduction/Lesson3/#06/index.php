<?php
// Here your code !
for ($year = 1989; $year <= 2015; $year++) {
    $heisei = $year - 1988;
     echo "西暦" . $year . "年は、平成" . $heisei . "年です。\n";
}
?>


<!-- 演習問題 -->
<?php
for ($year = 1926; $year <= 1989; $year++) {
     $shouwa = $year - 1925;
     echo "西暦" . $year . "年は、昭和" . $shouwa . "年です。\n";
}

?>

<?php
$year = trim(fgets(STDIN));
$num = trim(fgets(STDIN));
$send_year = $year + $num;
for ($i = $year; $i < $send_year; $i++) {
    $shouwa = $i - 1925;
     echo "西暦" . $i . "年は、昭和" . $shouwa . "年です。\n";
}

?>

