<?php
session_start(); // Start the session

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Delete the remember_user cookie
setcookie('remember_user', '', time() - 3600, '/');

// Redirect to the login page
header("location: login.php");
exit();
?>
