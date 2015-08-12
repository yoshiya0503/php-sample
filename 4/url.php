<?php

function test($url) {
    return parse_url($url);
}
$url = "http://foo/bar?param=10&param2=90";
var_dump(test($url));
?>
