<! DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body> 

<?php
	$list = [343,34,323,23,54,232,543];
	echo max($list); // Prints the max value
	
	echo "<br>";
	
	echo min($list); // Prints the min value
	
	echo "<br>";
	
	sort($list); 
	
	echo "<br>";
	
	print_r($list);
	
?>


</body>