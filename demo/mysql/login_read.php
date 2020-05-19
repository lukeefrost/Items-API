<?php
include "db.php";?>
<?php include "functions.php"; ?>

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
		<pre>
		<?php
			while($row = mysqli_fetch_assoc($result)) {

			print_r($row);			
				
			}
		?>
		</pre>
	</div>
	</div>

<?php "includes/footer.php;"?>