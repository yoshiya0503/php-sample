<?php
/**
 * 可変長引数
 * @param array [1,2,3,4,5]
 * @return "12345"
 */
function str() {
    $result = "";
    foreach(func_get_args() as $arg) {
        $result = $result . $arg;
    }
    return $result;
}

# 無名関数を変数に代入できる
$func = function() {
    return 'hoge';
};
var_dump(str(1,2,3,4,5));
var_dump($func());
var_dump($func);
?>
