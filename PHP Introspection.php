<?php
class MyClass {
  public $prop1;
  public $prop2;
  
  public function method1() {
  }
}

$myObj = new MyClass();

echo get_class($myObj);

if ($myObj instanceof MyClass) {
  echo "myObj is an instance of MyClass";
}

$props = get_class_vars('MyClass');
var_dump($props); 

$methods = get_class_methods('MyClass');
var_dump($methods); 
?>
