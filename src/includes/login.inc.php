<?php 

// name is not needed like in signup because only email and 
// password are needed to verify/log in
$email = $_POST["email"];
$password = $_POST["password"];

session_start();

require_once ($_SERVER['DOCUMENT_ROOT'] . "bean-and-brew/src/classes/database-connect.class.php");
require_once ($_SERVER['DOCUMENT_ROOT'] . "bean-and-brew/src/classes/user.class.php");

$user = new User();

// calls insertUser function to add form data to database
$user->logIn($email, $password);
