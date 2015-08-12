<?php

$cb = function($elem) {
    var_dump($elem);
};

$a= [1,2,3,4,5];

array_walk($a, $cb);
?>
