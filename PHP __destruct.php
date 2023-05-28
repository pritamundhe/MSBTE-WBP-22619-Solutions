<?php
	class Fruit{
		public $name;
		function __construct($name){
			$this->name=$name;
		}
		function __destruct(){
			echo"The Friut is {$this->name}."
		}
	}
	$mango=new Fruit('Apple');
?>