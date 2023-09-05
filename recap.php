<!DOCTYPE html>
<html>
<head>
<title>Exercises: Recap and some library functions</title>
</head>
<body>

<?php

/**************
*  Exercise 1  *
**************/
echo "<h3>Exercise 1</h3>";
?>

<form action="recap.php" method="post">
<input type="text" name="number1" size="5">
<select name="operation">
<option value="1">+</option>
<option value="2">-</option>
<option value="3">*</option>
<option value="4">/</option>
</select>
<input type="text" name="number2" size="5"><br>
<input type="submit" name="ex1">
</form>

<?php

if(isset($_POST["ex1"])) {
	$number1 = $_POST["number1"];
	$number2 = $_POST["number2"];
	$operation = $_POST["operation"];	// 1 = addition, 2 = subtraction, 3 = multiplication, 4 = division
	$answer = 0;

	// write your code here
	switch ($operation) {
	    case 1:
	        echo $number1+$number2;
	        break;
	    case 2:
	        echo $number1-$number2;
	        break;
	    case 3:
	        echo $number1*$number2;
	        break;
			case 4:
					if ($number1 == 0) {
						echo "Can't divide 0";
						break;
					} elseif ($number2 == 0) {
						echo "Can't divide by 0";
							break;
					} else {
						echo $number1/$number2;
						break;
					}
	}
}


/**************
*  Exercise 2  *
**************/
echo "<h3>Exercise 2</h3>";
for ($i=1; $i <= 10; $i++) {
	if ($i != 10) {
		echo $i;
		echo "-";
	}else {
		echo $i;
	}
	// code...
}
// write your code here

/**************
*  Exercise 3  *
**************/
echo "<h3>Exercise 3</h3>";

for ($i=1; $i <= 10; $i++) {
	if ($i % 2 == 0) {
		echo $i;
		echo " - Even <br>";
	}
	else {
		echo $i;
		echo " - Odd <br>";
	}
}


/**************
*  Exercise 4  *
**************/
echo "<h3>Exercise 4</h3>";

$numberarray = array(6, 29, 10, 2, 8, 24, 17);

// write your code in the print commands below (or between them if necessary)
echo "The length of array: "; //.count($numberarray)).;
echo count($numberarray);
echo "<br>";
echo "The values in array: ";
echo join(", ",$numberarray)."<br>";
echo "<br>";
echo "From smallest to largest: <br>";
sort($numberarray);
$arrlength = count($numberarray);
for($x = 0; $x < $arrlength; $x++) {
  echo $numberarray[$x];
  echo "<br>";
}
echo "<br>";
echo "From largest to smallest: <br>";
rsort($numberarray);
$arrlength = count($numberarray);
for($x = 0; $x < $arrlength; $x++) {
  echo $numberarray[$x];
  echo "<br>";
}
echo "<br>";


/**************
*  Exercise 5  *
**************/
echo "<h3>Exercise 5</h3>";
?>

<form action="recap.php" method="post">
Write something: <input type="text" name="charstring">
<input type="submit" name="ex5">
</form>

<?php

if(isset($_POST["ex5"])) {

	$charstring = $_POST["charstring"];

	// write your code below to print the character string...
	echo "All lowercase: ";
	echo strtolower($charstring);
	echo "<br>";
	echo "All uppercase: ";
	echo strtoupper($charstring);
	echo "<br>";
	echo "From the end to the beginning: ";
	echo strrev($charstring);
	echo "<br>";
	echo "Length: ";
	echo strlen($charstring);
	echo "<br>";
	echo "Each word in separate line: ";
	echo "<br>";

	$splitString = explode(" ", $charstring);

	foreach ($splitString as $strings) {
		echo $strings;
		echo "<br>";
	}


}

/**************
*  Exercise 6  *
**************/
echo "<h3>Exercise 6</h3>";
?>

<form action="recap.php" method="post">
Input numbers (with spaces between them): <input type="text" name="numstring">
<input type="submit" name="ex6">
</form>

<?php

if(isset($_POST["ex6"])) {

	$numstring = $_POST["numstring"];
	$numarr = explode(" ", $numstring);

	// write your code here
	foreach ($numarr as $number) {
		echo $number;
		echo " ";
		// code...
	}
	echo "<br>";
	echo array_sum($numarr);

	echo "<br>";
	$average = array_sum($numarr)/count($numarr);
	echo $average;

}

?>

</body>
</html>
