<! DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body> 

<?php
$number = 24;
	switch($number){ // Testing a form/entry to a database - testing one condition against many others
		case 34:
		echo "is it 34";
		break;
		
		case 37:
		echo "is it 34";
		break;
		
		case 35:
		echo "is it 34";
		break;
		
		case 24:
		echo "is it 24";
		break;
		
		default:
		echo "Could not find anything";
		break;
	}

?>

</body>