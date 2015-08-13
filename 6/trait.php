<?php
/**
 * trait 
 * @package traits
 * @author Yoshiya Ito <ito@curations.jp>
 */

trait Logger {
    public function log($logString) {
        $className = __CLASS__;
        echo "{$className}] {$logString}";
    }
}

class User {
    use Logger;
    public $name;

    function __construct($name = '') {
        $this->name = $name;
        $this->log('Created user');
    }

    function __toString() {
        return $this->name;
    }
}

class UserGroup {
    use Logger;
    public $users = [];

    public function addUser(User $user) {
        array_push($this->users, $user);
    }
    public function __toString() {
        return $this->users;
    }
}

$ug = new UserGroup;
$ug->addUser(new User('Yoshiya'));
$ug->addUser(new User('Hiroshi'));
var_dump($ug)
?>
