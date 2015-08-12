<?php
function test() {
    foreach(func_get_args() as $arg) {
        echo "{$arg}, ";
    }
}

function test2($a, $cb) {
    echo "$a[0]\n";
    $cb($a);
}

test(0,1,2,3,4,5);

test2([1,2,3,4,5], function($a) {
    foreach($a as $elem) {
        echo "$elem, ";
    }
    echo "\n";
})
?>
