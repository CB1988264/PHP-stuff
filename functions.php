<!DOCTYPE html>
<html>
<head>
<title>Exercises: Functions</title>
<style>
table {
	border: 1px solid black;
}
td {
	height: 50px;
	width 50px;
}
.white {background-color: white; width: 30px; height: 30px;}
.black {background-color: black; width: 30px; height: 30px;}
</style>
</head>
<body>

<?php
/**************
*  Exercise 1  *
**************/
echo "<h3>Exercise 1</h3>";

function testFunction() {
	echo "<p>This is a test.</p>";
}

function printSum($number1, $number2) {
		echo "<p>The sum of $number1 and $number2 is " . ($number1 + $number2) . ".</p>";
}
$text = "Programming";
function fancyText($text) {
	echo "~*~" . $text . "~*~";
}



// write your code here
testFunction();
printSum(2,3);
fancyText("Programming");

/**************
*  Exercise 2  *
**************/
echo "<h3>Exercise 2</h3>";

// write your code here
// un-comment the function calls once you have implemented the functions

function greet($name) {
  echo "Hello, $name";
}

greet("Pekka");
echo "<br>";
greet("Leena");
echo "<br>";
greet("student");
echo "<br>";


/**************
*  Exercise 3  *
**************/
echo "<h3>Exercise 3</h3>";

// write your code here
// un-comment the function calls once you have implemented the functions

function multiply($number1, $number2) {
		echo "<p> $number1 x $number2 = " . ($number1 * $number2) . ".</p>";
}

multiply(2, 3);
multiply(5, 6);
multiply(12, 12);

/**************
*  Exercise 4  *
**************/
echo "<h3>Exercise 4</h3>";

// write your code here
// un-comment the function calls once you have implemented the functions

echo "test";

function chessboard() {

    for ($rows=1; $rows <= 8; $rows++) {
        echo "<table>";
        for ($columns = 1; $columns <= 8; $columns++) {
            if (($rows + $columns) %2 == 0) {
                echo "<td class = 'black'></td>";
            } else {
                echo "<td class='white'></td>";
            }
            echo "<td></td>";


        }
        echo  "</table>";
    }

}

chessboard();

/**************
*  Exercise 5  *
**************/
echo "<h3>Exercise 5</h3>";

// write your code here
// un-comment the function calls once you have implemented the functions
function sumFromArray($arr) {
    $sum = 0;
    foreach ($arr as $value) {
        $sum = $sum + $value;
    }
    echo $sum;
}

$numbers = array(4, 9, 25, 30);
echo "<p>The sum of numbers in the array is " . sumFromArray($numbers) . "</p>";  // sum should be 68

$numbers2 = array(2, 16, 19, 42);
echo "<p>The sum of numbers in the array is " . sumFromArray($numbers2) . "</p>";  // sum should be 79

/**************
*  Exercise 6  *
**************/
echo "<h3>Exercise 6</h3>";

// write your code here
// un-comment the function calls once you have implemented the functions

function valueInArray($arr, $value) {
    $number = 0;
    foreach ($arr as $number) {
        if ($value == $number) {
            return true;
        } else {
            return false;
        }
    }
}


$numbers = array(4, 9, 25, 30);
if(valueInArray($numbers, 4)) {
	echo "<p>Number 4 is in array.</p>";
} else {
	echo "<p>Number 4 is not in array.</p>";
}

if(valueInArray($numbers, 10)) {
	echo "<p>Number 10 is in array.</p>";
} else {
	echo "<p>Number 10 is not in array.</p>";
}


?>

</body>
</html>
