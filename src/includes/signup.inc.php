<?php 

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];

session_start();

require_once ($_SERVER['DOCUMENT_ROOT'] . "bean-and-brew/src/classes/database-connect.class.php");
require_once ($_SERVER['DOCUMENT_ROOT'] . "bean-and-brew/src/classes/user.class.php");

$user = new User();

// calls insertUser function to add form data to database
$user->insertUser($name, $email, $password);
