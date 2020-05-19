<! DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body> 

<?php

	$number = array(10, 20, 49);
	print_r($number);
	echo $number[2] . "<br>";
	
	$names = array("first_name" => 'Luke', "last_name" => 'Frost'); //Associative array
	print_r($names);
	echo $names['first_name'] . " " . $names['last_name'];
?>

</body>