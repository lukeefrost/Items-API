<! DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body> 

<?php
	$numberList = array(23, 64, 267, 478); // Older version
	
	$numberList2 = array(267, 8765, 345, '5345', 345, '<h1>Hello</h1>'); // Older version
	
	$numberList3 = [23, 23, 3, 4]; // Newer version
	
	$numberList4 = ['name' => "Luke"]; // Newer version
	
	print_r($numberList2);
	echo $numberList2[0];

?>

</body>