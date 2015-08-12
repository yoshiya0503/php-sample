<?php
include "class.php";

$a = Array(
    new Person,
    new Person,
    new Person
);

foreach($a as $num => $person) {
    $person->setTag($num);
}
foreach($a as $p) {
    echo "number: {$p->getTag()}\n";
}
?>
