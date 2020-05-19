<?php

class Car {
	
	function MoveWheels() {
		echo "Wheels move";
	}
	
}

if(method_exists("Car", "MoveWheels")) {
	echo "The Method Exists";
} else {
	echo "No it does not";
}

?>