<?php
	include_once 'includes/dbh.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add a car</title>
</head>
<body>
	<h4>Input car information:</h4>
	<form action="carform.php" method="post" method="POST">
		<?php
		$nameErr = "";
		?>
		<!-- <input type="text" name="license" placeholder="License number"/><br><br> -->
		<input type="text" name="license">
		<span class="error">* <?php echo "$nameErr";?></span>
		<br><br>
		<?php
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_POST["license"])) {
				
			  echo "license is required";
			}
		}

		/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (!empty($_POST["license"])) {
				$sql = 
				"INSERT into car (licnumber) SELECT'".$_POST["license"]." FROM brand
				WHERE NOT EXIST (
					SELECT licnumber FROM car WHERE licnumber = '".$_POST["license"]."'
				) 
				";
				if(mysqli_query($conn, $sql))
				{
					$insert_license = mysqli_insert_id($connect);
					if($insert_license != '') 
					{
						echo "duplicate license plate";
					}
				}


			  echo "license is required";
			}
		}*/

		?>
		<input type="text" name="color" placeholder="Color"/><br><br>
		<input type="text" name="model" placeholder="Model (year)"/><br><br>
		
		<?php 				// Beginning of dropdown
		$sql = "SELECT name FROM Person";
		$result = mysqli_query($conn, $sql);

		echo "<select name='name'>"; 
		while ($row = mysqli_fetch_array($result)) {
    		echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
		}
		echo "</select>";  // End of dropdown menu //

		$licenseInsert = $_POST["license"];
		$colorInsert = $_POST["color"];
		$modelInsert = $_POST["model"];


		$sqlInsert = " INSERT INTO car(car.licnumber, car.color, car.model) values(@licenseInsert,@colorInsert,@modelInsert)";

				

		mysqli_query($conn, $sqlInsert);


		
		 

		?>
		<select name="owner" >
		

			

		<!-- use PHP to add the persons from the database
		e.g. <option value="281182-070W">Anne Autoilija</option>
		-->
		</select><br><br>
		<input type="submit" name="add" value="Add car"><br><br>
		
	</form>
	</body>
</html>