<!DOCTYPE html>
<html>
<head>
<title>Exercises: Sessions</title>
</head>
<body>

<?php


/**************
*  Exercise 4  *
**************/
echo "<h3>Exercise 4</h3>";
// So that the login form appears correctly immediately after logging out, the code of this exercise has to be here
// do the exercises in order anyway
?>

<p><a href="sessions.php?out">Log out</a></p>



<?php

//if($_GET['logout']==1) session_unset();
// write your code here

/********************
*  Exercises 1 + 2  *
********************/
echo "<h3>Exercises 1 and 2</h3>";
 ?>
 
<form action="sessions.php" method="post">
Username: <input type="text" name="username"><br>
Key: <input type="text" name="key"><br>
<input type="submit" name="ex1">
</form>

<?php

$seshName = '';
// Initialize the session.
// If you are using session_name("something"), don't forget it now!
session_start();

// Unset all of the session variables.
$_SESSION = array();

//session_create_id([$seshID]);
$uname ="";


if($_POST ["key"] == "php-programming"){

    $_SESSION["login"] = true;
    $_SESSION["username"] = $uname;
    //session_name("username");
    echo "You're logged in as " .$_POST ["username"]  ." \r ";
    //echo session_id()." \r ";
    //echo session_name()." \r ";
    return true;

}else{
    $_SESSION["login"] = false;
    echo 'Incorrect Password!' ."\r\n";
    //echo session_id();
}

//if (($_POST["key"]) != "php-programming") {
//    echo "Wrong key!";
//} else {
//    $_SESSION["uname"] = $_POST["username"];
//    echo "You're logged in as " . $_SESSION["uname"];
//    session_destroy();
//}

/**************
*  Exercise 3  *
**************/
echo "<h3>Exercise 3</h3>";


//session_regenerate_id();
//echo session_id();


// write your code here

?>

</body>
</html>