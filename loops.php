<!DOCTYPE html>
<html>
<head>
<title>Exercises: Loops</title>
</head>
<body>

<?php

/**************
*  Exercise 1  *
**************/
echo "<h3>Exercise 1</h3>";

$name = "test ";
$returns = 1;
while($returns <= 5) {
   echo $name;
   $returns++;    // without this, the loop would print 1 forever
}

// write your code here

/******************
*  Exercises 2 + 3 *
******************/
echo "<h3>Exercises 2 and 3</h3>";
?>

<form action="loops.php" method="post">
Give the upper bound: <input type="text" name="highest"><br>
<input type="submit" name="ex2">
</form>

<?php

if(isset($_POST["ex2"])) {

	$highest = $_POST["highest"];

	// write your code here

	//$a = 1;
	//while ($a <= $highest) {
	//	echo $a;
	//	$a++;
	//	// code...
	//}

	for ($i=0; $i < $highest ; $i++) {
		echo "$i \n";
		// code...
	}


}

/**************
*  Exercise 4  *
**************/
echo "<h3>Exercise 4</h3>";

// write your code here

$i = 1;
$a = 1;
while ($a <= 10) {
	echo $i * 10;
	$i++;
	$a++;
	// code...
}


/**************
*  Exercise 5  *
**************/
echo "<h3>Exercise 5</h3>";
?>

<form action="loops.php" method="post">
Lower bound: <input type="text" name="lower"><br>
Upper bound: <input type="text" name="upper"><br>
<input type="submit" name="ex5">
</form>

<?php

if(isset($_POST["ex5"])) {

	$lower = $_POST["lower"];
	$upper = $_POST["upper"];

	// write your code here

  $sumTotal = 0;
  while ($lower <= $upper) {
    $sumTotal = $sumTotal + $lower;
    $lower++;
    // code...
  }
  echo $sumTotal;

}


/**************
*  Exercise 6  *
**************/
echo "<h3>Exercise 6</h3>";

//$numbers = array();

//for ($i=1; $i < 20; $i++) {

//}

$numbers = array();

for($i = 1; $i <= 20; $i++)
{
   $numbers[$i] = $i;
}

/**************
*  Exercise 7  *
**************/
echo "<h3>Exercise 7</h3>";

// write your code here
foreach($numbers as $number) {
    echo $number;
    echo "<br>";
}

/**************
*  Exercise 8  *
**************/
echo "<h3>Exercise 8</h3>";

$capitals = array( "Italy"=>"Rome", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Estonia"=>"Tallinn", "Hungary"=>"Budapest", "Austria" => "Vienna", "Poland"=>"Warsaw");

// write your code here
foreach ($capitals as $country => $capital) {
  echo $country. ': ' .$capital. '. <br>';
}



?>

</body>
</html>
