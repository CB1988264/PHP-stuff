<!DOCTYPE html>
<html>
<head>
<title>Exercises: GET and POST</title>
</head>
<body>

<?php

/**************
*  Exercise 1  *
**************/
echo "<h3>Exercise 1</h3>";
?>

<a href="get_post_parameters.php?tekno=html">HTML</a><br>
<a href="get_post_parameters.php?tekno=css">CSS</a><br>
<a href="get_post_parameters.php?tekno=javascript">Javascript</a><br>
<a href="get_post_parameters.php?tekno=php">PHP</a><br>
<a href="get_post_parameters.php?tekno=java">Java</a><br>

<?php

if(isset($_GET["tekno"])) {

    if ($_GET["tekno"] == "html") {
        echo $_GET["tekno"] . ": " . strtoupper($_GET["tekno"]) . " defines the structure of a document.";
    } elseif ($_GET["tekno"] == "css") {
        echo $_GET["tekno"] . ": " . strtoupper($_GET["tekno"]) . " defines the appearance of a document.";
    } elseif ($_GET["tekno"] == "javascript") {
        echo $_GET["tekno"] . ": " . ucfirst($_GET["tekno"]) . " is a client-side language.";
    } elseif ($_GET["tekno"] == "php") {
        echo $_GET["tekno"] . ": " . strtoupper($_GET["tekno"]) . " is a server-side language.";
    } else {
    }
    // write your code here
	
}

/**************
*  Exercise 2  *
**************/
echo "<h3>Exercise 2</h3>";
?>

<form action="get_post_parameters.php" method="post">
First name: <input type="text" name="firstname"><br>
Last name: <input type="text" name="lastname"><br>
<input type="submit" name="ex2">
</form>

<?php

if(isset($_POST["ex2"])) {
	
	// write your code here
    echo "First name: " .$_POST["firstname"] ."<br>";
    echo "Last name: " .$_POST["lastname"];
	
}


/*******************
*  Exercises 3 + 4  *
*******************/
echo "<h3>Exercises 3 and 4</h3>";
?>

<form action="get_post_parameters.php" method="post">
Name * <input type="text" name="name"><br>
E-mail * <input type="text" name="email"><br>
Password * <input type="password" name="password"><br>
Join year * <input type="hidden" name="join_year"><br>
Gender
<input type="radio" name="gender" value="male" checked>Male
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="other">Other<br>
Country
<select name="country">
<option value="Denmark">Denmark</option>
<option value="Finland">Finland</option>
<option value="Iceland">Iceland</option>
<option value="Norway">Norway</option>
<option value="Sweden">Sweden</option>
</select><br>
Description<br>
<textarea name="description"></textarea><br>
<input type="submit" name="ex3" value="Sign up">
</form>

<?php

// write your code here
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";
$join_year = date("Y");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {            //Test name for validation and security
        $nameErr = "Name is required";
        echo "Name is required" ."<br>";
    } else {
        $name = test_input($_POST["name"]);
    }                                       //Test name for validation and security

    if (empty($_POST["email"])) {           //Test email for validation and security
        $emailErr = "Email is required";
        echo "Email is required" ."<br>";
    } else {
        $email = test_input($_POST["email"]);
    }                                       //Test email for validation and security

    if (empty($_POST["password"])) {        //Test password for validation and security
        $comment = "";
        echo "Password is required" ."<br>";
    } else {
        $comment = test_input($_POST["password"]);
    }                                       //Test password for validation and security

    if (empty($_POST["gender"])) {          //Test gender for validation and security
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }                                       //Test gender for validation and security

    if (empty($_POST["country"])) {          //Test country for validation and security
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["country"]);
    }                                       //Test country for validation and security

    if (empty($_POST["description"])) {          //Test description for validation and security
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["description"]);
    }                                       //Test description for validation and security
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Tests to see what was working
//echo "<h2>Your Input:</h2>";
//echo $name;
//echo "<br>";
//echo $email;
//echo "<br>";
//echo $comment;
//echo "<br>";
//echo $gender;
//echo $join_year;

/**************
*  Exercise 5  *
**************/
echo "<h3>Exercise 5</h3>";
?>

<form action="get_post_parameters.php" method="post">
Name: <input type="text" name="name"><br>
Title: <input type="text" name="title"><br>
Text:<br>
<textarea name="text"></textarea>
<input type="submit" name="ex5">
</form>

<?php

// write your code here


function clean_up($data) {
    $data = strip_tags($data);
    $data = trim($data);
    return $data;
}


$name = clean_up($_POST["name"]);
$title = clean_up($_POST["title"]);
$comment = clean_up($_POST["ex5"]);

if (empty($_POST["name"])) {            //Test name for validation and security
    echo "Please fill all fields.";
} elseif (empty($_POST["title"])){
    echo "Please fill all fields.";
} elseif (empty($_POST["ex5"])) {
    echo "Please fill all fields.";
} else {
    echo " Hello " .$name ."<br>";
    echo "Title is " .$title ."<br>";
    echo "commment to test " .$comment;
}



//echo " Hello " .$name ."<br>";
//echo "Title is " .$title ."<br>";
//echo "commment to test " .$comment;



?>

</body>
</html>