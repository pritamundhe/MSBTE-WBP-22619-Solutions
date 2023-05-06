<?php
    class Fruit{
        public $name;
        public $color;
        public function __construct($name, $color){
            $this->name = $name;
            $this->color = $color;
        }
        public function intro(){
            echo "I am a ".$this->name." fruit."."<br>";
            echo "Color is ".$this->color." color.";
        }
    }
    class Strawberry extends Fruit{
        public function message(){
            echo "I am a strawberry."."<br>";
        }
    }
    $strawberry = new Strawberry("strawberry", "red");
    $strawberry->intro();
    $strawberry->message();
?>
