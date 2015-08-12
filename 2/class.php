<?php
class Person {
    public $first_name = "Yoshiya";
    public $last_name = "Ito";
    public $tag = 0;

    function getName() {
        return "{$this->first_name} {$this->last_name}";
    }

    function callbackTest($cb) {
        echo "before \n";
        $cb();
        echo "after \n";
    }
    function setTag($arg) {
        $this->tag = $arg;
    }
    function getTag() {
        return $this->tag;
    }
}

$person = new Person;
echo "{$person->getName()}\n";
$person->callbackTest(function() {
    echo "the callback!!!\n";
});
?>
