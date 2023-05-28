<?php
    class Fruit{
        public $name;
        public $color;
        
        function __construct($name){
            $this->name=$name;
        }
        function get_name(){
            return $this->name;
        }
    }

    mango= new Fruit('apple');
    echo mango->get_name();
?>