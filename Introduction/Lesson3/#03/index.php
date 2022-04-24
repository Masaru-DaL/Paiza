<?php
// Here your code !
$i = 1;

while($i <= 10) {
    echo $i . "\n";
    $i++;
}
?>

<!-- 演習問題 -->
<?php
$i = 1;
while($i <= 20) {
    echo $i . "\n";
    $i++;
}

?>

<?php
$i = 10;
while($i <= 20) {
    echo $i . "\n";
    $i++;
}

?>

<?php
$input = trim(fgets(STDIN));
$input2 = trim(fgets(STDIN));

while($input <= $input2) {
    echo $input . "\n";
    $input++;
}

?>

<?php
$input = trim(fgets(STDIN));
$i = 1;

while($i <= $input) {
    echo "眠い。\n";
    $i++;
}
?>

<?php
$input = trim(fgets(STDIN));

for ($i = 1; $i <= $input; $i++) {
     echo "眠い。\n";
}
?>
