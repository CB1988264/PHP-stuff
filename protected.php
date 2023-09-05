<?php

if(!isset($_SESSION['login'])){ //if login in session is not set
    header("Location: http://localhost/PHP/sessions.php");
}
die("message");