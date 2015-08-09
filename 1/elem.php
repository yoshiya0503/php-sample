<?php
// this is comment
echo "Hello World\n";
$need = true;

# this is commnet
if ($need) {
    echo "need: $need \n";
}

# 定数
define("CONSTANT", "constant !!!");
echo CONSTANT;
echo "\n";
echo 3.24;
echo "\n";

$person[0] = 100;
echo $person[0];
echo "\n";
$person = array("hoge", "bar");
echo $person[0], $person[1];
echo "\n";

$dict = array(
    'hoge' => 'one',
    'foo' => 'two'
);
echo $undefined;

foreach ($dict as $key => $value) {
    echo $key, $value;
}

?>
