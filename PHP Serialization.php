<?php
class Person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}

$Person = new Person('Pritam', 19);
$serialized = serialize($Person);
echo $serialized;
?>
