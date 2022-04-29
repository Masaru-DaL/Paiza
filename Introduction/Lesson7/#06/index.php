<?php
// 引数のデフォルト値
function intoroduce($name = "村人") {
    echo "私は" . $name . "です\n";
}
intoroduce();
intoroduce();
intoroduce("勇者");
intoroduce("戦士");
?>

<!-- 演習問題 -->
<?php
// 引数のデフォルト値

function say_hello($target = "paiza"){
    echo "hello ".$target;
}

// この下に関数呼び出しを記述する
say_hello();
?>
