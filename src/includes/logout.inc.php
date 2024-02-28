<?php 

session_start();

// destroys the session (logs user out)
session_destroy();

header("Location: ../pages/index.php");
