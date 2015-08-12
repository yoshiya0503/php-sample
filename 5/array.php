<?php

$addreddes = ['yoshiya@hoge.com', 'hoge@hoge.com'];
var_dump($addreddes);

$prices = array(90, 80, 30.9);
var_dump($prices);

$hoge = ['a'=>'hoge'];
var_dump($hoge);

$c = count($prices);
var_dump($c);

$hoge['new'] = 'new_value';
var_dump($hoge);

$prices[] = 900;
var_dump($prices);

list($a, $b) = $addreddes;
echo "$a, $b";

var_dump(array_keys($addreddes));
var_dump(array_values($addreddes));
var_dump(array_keys($hoge));
var_dump(array_values($hoge));

var_dump(array_key_exists('new', $hoge));

foreach($hoge as $key => $value) {
    var_dump($key, $value);
}

?>
