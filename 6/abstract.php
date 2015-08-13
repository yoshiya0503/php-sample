<?php
/**
 * abstract 
 * @package abstract
 * @author Yoshiya Ito <ito@curations.jp>
 */

abstract class Component {
    abstract function printOutput();
    abstract function middleware();
    final public function hoge() {
        $this->middleware();
        var_dump('this is hoge');
        $this->printOutput();
    }
}

class ImplComponent extends Component {

    private $name = '';

    function __construct($name) {
        $this->name = $name;
    }

    function printOutput() {
        var_dump('end');
    }

    function middleware() {
        var_dump("head");
    }
}

$obj = new ImplComponent('hoge');
$obj->hoge();
var_dump($obj);
?>
