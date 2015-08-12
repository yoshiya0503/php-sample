<?php

$names = ['hoge', 'foo', 'bar'];
sort($names);
var_dump($names);

$nums = [1,5,4,10,90,34,20];
sort($nums);
var_dump($nums);

$num_names = ['hoge10', 'hoge1', 'hoge2'];
natsort($num_names);
var_dump($num_names);

$dict = ['key1' => 'value1', 'key2' => 'value2'];
$rdict = array_flip($dict);
var_dump($rdict);

$suffle = [1,2,3,4,5];
shuffle($suffle);
var_dump($suffle);

$sum = [1,2,3,4,5];
var_dump(array_sum($sum));

$m = array_merge($dict, $sum);
var_dump($m);
echo "{$m[0]}, {$m['key1']}\n";

$diff = array_diff([1,2,3,4,5], [3,4,57,8,9]);
var_dump($diff);

$filt = array_filter([1,2,3,4,5,6,7,8,9,10], function($elem) {
    return $elem % 2 === 0;
});
var_dump($filt);

/**
 * 二つの配列の排他的論理集合をとります
 * @name xor
 * @param array first_array
 * @param array second_array
 * @return array xor_array
 */
function array_xor($a1, $a2) {
    $tmp = array_merge($a1, $a2);
    $union = array_unique($tmp);
    $intersect = array_intersect($a1, $a2);
    return array_diff($union, $intersect);
}

$a1 = [1,2,3,4,5];
$a2 = [1,2,3,4,9];
var_dump(array_xor($a1, $a2));

$n = [1,2,3];
array_push($n, 10);
array_unshift($n, 0);
array_pop($n);
array_shift($n);
var_dump($n);

?>
