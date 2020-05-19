<! DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body> 

<?php
	function init() {
		saySomething();
		echo "<br>";
		calculate();
	}
	
	function saySomething(){
		echo "Hello Student, do you like the class? yes? Good!";
	}
	
	function calculate() {
		echo 456 + 345;
	}
	
	init();
	

?>

</body>