<?php
// Here your code !
$name_1 = "霧島";
$name_2 = "草薙";

$team = array('桜木', $name_1, $name_2);
print_r($team);
?>

<!-- 演習問題 -->
<?php
$array = array("戦士","侍","僧侶","魔法使い");
// この下で$arrayを出力してみよう
print_r($array);
?>

<?php
$item = array("回復薬", "布の服", "革の盾");
print_r($item);
?>

<?php
$item = array("ロングソード", "ブレードソード", "エクスカリバー");
print_r($item);
?>

<?php
$a = trim(fgets(STDIN));
$b = trim(fgets(STDIN));
$c = trim(fgets(STDIN));

// $a,$b,$cを指定の順番で配列$teamに代入してください
$team = array($b, $c, $a);
print_r($team);
?>
