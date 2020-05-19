<?php

 if(isset($_POST['submit'])) { // Associative Array
	$name = array("Luke", "Developer", "Jake", "Cook", "Ben", "Lauren");
	$username = $_POST['username']; // Extracting data from the form
	$password = $_POST['password'];
	$minChar = 5;
	$maxChar = 10;
	
	if(strlen($username) < $minChar) {
		echo "Username has to be longer than 5";
	}
	
	if(strlen($username) > $maxChar) {
		echo "Username cannot be longer than 10";
	}
	
	if(!in_array($username, $name)) {
		echo "Sorry you are not allowed to login";
	} else {
		echo "Welcome!";
	}
	
	//echo "Hello " . $username;
	//echo "<br>";
	//echo "Your password is " . $password;
 }

?>

<! DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body> 

	<form action="form.php" method="post">
	
		<input type="text" name="username" placeholder="Enter Username">
		<input type="password" name="password" placeholder="Enter Password">
		<br>
		<input type="submit" name="submit">
		
	</form>


</body>