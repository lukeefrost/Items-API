<! DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body> 

<?php
	$x = "Outside"; // Global scope - global variable
	
	function convert() {
		global $x; // Can change the value anywhere in the code
		$x = "Inside"; // Local scope - local variable
	}
	
	echo $x;
	
	echo "<br>";
	
	convert();
	
	echo $x;
?>


</body>