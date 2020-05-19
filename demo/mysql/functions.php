<?php

function showAllData() {
		$connection = mysqli_connect('localhost', 'root', '', 'loginapp');
		
		if($connection) {
			echo "We are connected";
		} else {
			die("Database connection failed");
 		}
		
		$query = "SELECT * FROM users";
		
		$result = mysqli_query($connection, $query);
		
		if(!$result) {
			die('Query Failed' . mysqli_error());
		}
		
		while($row = mysqli_fetch_assoc($result)) {
			$id = $row['id'];
			echo "<option value='$id'>$id</option>";
		}
}
		
function updateTable() {
	
$connection = mysqli_connect('localhost', 'root', '', 'loginapp');

	$username = $_POST['username'];
	$password = $_POST['password'];
	$id = $_POST['id'];
	
	$query = "UPDATE users SET ";
	$query .= "username = '$username', ";
	$query .= "password = '$password' ";
	$query .= "WHERE id = $id ";
	
	$result = mysqli_query($connection, $query);
	
	if(!$result) {
		die('Query Failed' . mysqli_error($connection));
	} else {
		echo "Record Updated";
	}
}

function deleteRows() {
	
$connection = mysqli_connect('localhost', 'root', '', 'loginapp');

	$username = $_POST['username'];
	$password = $_POST['password'];
	$id = $_POST['id'];
	
	$query = "DELETE FROM users ";
	$query .= "WHERE id = $id ";
	
	$result = mysqli_query($connection, $query);
	
	if(!$result) {
		die('Query Failed' . mysqli_error($connection));
	} else {
		echo "Record deleted";
	}
}

function createRows() {
	$connection = mysqli_connect('localhost', 'root', '', 'loginapp');
		if(isset($_POST['submit'])) {
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$username = mysqli_real_escape_string($connection, $username); // escape all the data in the fields - cleans it up
		$password = mysqli_real_escape_string($connection, $password); // escape all the data in the fields - cleans it up
		
		$hashFormat = "$2y$10$";
		
		$salt = "iusesomecrazystrings22";
		
		$hash_and_salt = $hashFormat . $salt;
		
		$encrypt_password = crypt($password,$hash_and_salt);
		
		if($connection) {
			echo "We are connected";
		} else {
			die("Database connection failed");
 		}
		
		$query = "INSERT INTO users(username,password) ";
		$query .= "VALUES ('$username', '$encrypt_password')"; //Concatenates both parts of the query
		
		$result = mysqli_query($connection, $query);
		
		if(!$result) {
			die('Query Failed' . mysqli_error());
		} else {
			echo "Record created";
		}

	}
}


?>
