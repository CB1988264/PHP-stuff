<?php
	include_once 'includes/dbh.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Car search</title>
</head>
<body>
	<h4>Give license number:</h4>
	<form action="" method="post">
		<input type="text" name="licence_number" /><br><br>
		<input type="submit" name="search" /><br><br>
	</form>

	<?php

		/*$sql = "SELECT * FROM car";
		$result = mysqli_query($conn, $sql);
		$queryResults = mysqli_num_rows($result);*/

		if (isset($_POST['search'])) {
			$search = mysqli_real_escape_string($conn, $_POST['licence_number']);
			$sql = "SELECT * FROM car WHERE licnumber LIKE '%$search%'";
			$result = mysqli_query($conn, $sql);
			$queryResult = mysqli_num_rows($result);

			if($queryResult > 0) {
				while($row = mysqli_fetch_assoc($result)) {
					echo "<div>
						<h3>".$row['licnumber']."</h3>
						<h3>".$row['color']."</h3>
						<h3>".$row['model']."</h3>
						<h3>".$row['owner']."</h3>
				</div>";
				}
			} else {
				echo "There are no results matching";
			}
		}

		/*if ($queryResults > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<div>
						<h3>".$row['licnumber']."</h3>
						<h3>".$row['color']."</h3>
						<h3>".$row['model']."</h3>
						<h3>".$row['owner']."</h3>
				</div>";

			}

		}*/

		/* $sql = "SELECT * FROM car;";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);

		if ($resultCheck > 0) {
			while ($row = mysqli_fetch_assoc($result)){
				echo $row['color'];
			}
		} */
	?>

	</body>
</html>