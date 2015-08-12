<?php
class TestObject {
    private $a = 0;
    private $b = 1;

    private function a() {
    }
    public function b() {
        a();
    }
}
function p() {
    $a = [1,2,3,4,5];
    $d = array(
        'a' => 123,
        'b' => 234,
        'c' => 345
    );
    print_r($a);
    print_r($d);
    var_dump($a);
    var_dump($d);
}
p();

$t = new TestObject;
print_r($t);
var_dump($t);
?>
