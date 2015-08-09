<?php
function test() {
    foreach(func_get_args() as $arg) {
        echo "{$arg}, ";
    }
}

test(0,1,2,3,4,5)
?>
