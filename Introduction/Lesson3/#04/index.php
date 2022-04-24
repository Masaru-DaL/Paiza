<select name="age">
<?php
$i = 1;
while($i <= 50) {
    echo "<option>" . $i . "歳</option>";
    $i++;
}
?>
</select>

<!-- 演習問題 -->
<select name="year">
<?php
$input = trim(fgets(STDIN));
$input2 = trim(fgets(STDIN));

while($input <= $input2) {
    echo "<option>" . $input . "年生まれ</option>\n";
    $input++;
}
?>
</select>

