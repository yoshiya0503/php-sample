<?php
$name = "Yoshiya Ito";
var_dump(substr($name, 3, 5));
$start = strpos($name, 'Y');
$end = strpos($name, ' ');
var_dump(substr($name, $start, $end));

$repeat = str_repeat('-*-', 8);
var_dump($repeat);
$sentence = "this is a pen for you";
$words = explode(' ', $sentence);
var_dump($words);
?>
