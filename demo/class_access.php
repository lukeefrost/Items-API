<?php

class Car {
	
	public $wheels = 4; // Available through the whole program
	protected $hood = 1; // Only available to class or anu subclasses
	private $engine = 1; // Only available to this class
	var $doors = 4;
	
	function showProperty() {
		echo $this->engine;
	}
}

$bmw = new Car();
$semi = new Semi();

class Semi extends Car{
}
echo $bmw->showProperty();
?>