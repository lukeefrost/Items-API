<?php
include "db.php";?>
<?php include "functions.php"; ?>

<?php
if(isset($_POST['submit'])) {
	deleteRows();
}


?>

<?php
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
		


?>

<?php include "includes/header.php"; ?>
	<div class="container">
		<div class="col-sm-6">
		<h2 class="text-center">Delete Record</h2>
		<form action="login_delete.php" method="post">
		<div class="form-group">
		<label for="username">Username</label>
		<input type="text" name="username" class="form-control">
		</div>
		
		<div class="form-group">
		<label for="password">Password</label>
		<input type="text" name="password" class="form-control">
		</div>
		
		<div class="form-group">
		<select name="id" id="">
		<?php
			showAllData();
		?>
		</select>
		</div>
		
		<input class="btn btn-primary" type="submit" name="submit" value="Delete">
	</form>
	</div>
	</div>

<?php "includes/footer.php;"?>