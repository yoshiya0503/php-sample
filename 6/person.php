<?php
class Person {
    public $name = '';

    public final function getName() {
        return $this->name;
    }

    protected final function setName($name) {
        $this->name = $name;
    }
}

class HTMLStuff {
    public static final function startTable() {
        echo "<table border=1>\n";
    } 
    public static function endTable() {
        echo "</table>";
    }
}

class Child extends Person {
    private $age = 0;
    const HOGE = 100;
    public function name($name) {
        $this->setName($name);
    }
}

$p = new Person();
var_dump($p->getName());

$html = new HTMLStuff;
$html::startTable();
HTMLStuff::endTable();

$c = new Child();
$c->name('hoge');
var_dump($c);

interface Inter {
    public function test();
}

class Impl implements Inter {
    public function test() {
        echo "hoge";
    }
}

$i = new Impl;
$i->test();

?>
