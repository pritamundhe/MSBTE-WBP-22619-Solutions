<?php
    class Fruit{
        public $name;
        public $color;
    
        function __construct($name,$color){
            $this->name = $name;
            $this->color = $color;
        }
        function get_name(){
            echo"The Fruit is ".($this->name).".";
        }
        function get_color(){
            echo"The Fruit is ".($this->color).".";
            }
    }
    $apple = new Fruit("Apple","red");
    $apple->get_name();
    $apple->get_color();
    ?>