<?php
require_once __DIR__.'/vendor/autoload.php';
use Underscore\Types\Arrays;

$mapped = Arrays::each([1,2,3,4,5,6,7,8], function($elem) {
    return $elem * 2;
});
var_dump($mapped);

$sum = array_reduce([1,2,3,4,5], function($result, $value) {
    return $result + $value;
});
$map = array_map(function($elem) {
    return $elem;
}, [1,2,3,4,5]);
var_dump($sum);
var_dump($map);
?>
