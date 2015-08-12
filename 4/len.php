<?php

$string = "this is a pen";
var_dump(strlen($string));
var_dump(strtoupper($string));
var_dump(strtolower($string));

/**
 * URL エンコードします
 * @name encode
 * @param int route
 */
function encode($str) {
    $url = urlencode($str);
    echo "$url";
}
encode('hogehoge?&');
?>
