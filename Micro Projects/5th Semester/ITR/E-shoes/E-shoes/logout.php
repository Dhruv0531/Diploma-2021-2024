<?php
// Start the session to access session data
session_start();

// Unset all session variables
session_unset();

// Destroy the session and clear all session data
session_destroy();

// Redirect the user to the login page
header("Location: ./login.php");
?>
