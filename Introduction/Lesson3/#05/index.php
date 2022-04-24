<?php
// for文+1
// Here your code !
for ($i = 1; $i <= 10; $i++) {
     echo $i . "\n";
}

// for文-1
for ($i = 10; $i > 0; $i--) {
     echo $i . "\n";
}

// while文
$i = 1;
while($i <= 10) {
    echo $i . "\n";
    $i++;
}
?>

<!-- 演習問題 -->
<?php
for ($i = 1; $i <= 20; $i++) {
     // code...
     echo $i . "\n";
}

?>

<?php
for ($i = 20; $i >= 10; $i--) {
     // code...
     echo $i . "\n";
}

?>

<?php
$input1 = trim(fgets(STDIN));
$input2 = trim(fgets(STDIN));

for ($i = $input1; $i <= $input2; $i++) {
     // code...
     echo $i . "\n";
}
?>

<?php
$input = trim(fgets(STDIN));
for ($i = 1; $i <= $input; $i++) {
     // code...
     echo "スライムがあらわれた。\n";
}

?>

<?php
$input = trim(fgets(STDIN));

for ($i = 1; $i <= $input; $i++) {
     // code...
     echo trim(fgets(STDIN));
}

?>

