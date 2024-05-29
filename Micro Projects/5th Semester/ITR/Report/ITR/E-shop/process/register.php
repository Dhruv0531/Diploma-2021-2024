<?php
// Start a PHP session to manage user sessions
session_start();

// Turn off error reporting to suppress error messages
error_reporting(0);

// Require the connection.php file to establish a database connection
require dirname(__DIR__) . "\process\connection.php";

// Check if the form is submitted for user registration
if (isset($_POST['submit'])) {
	// Get form data
	$name = $_POST['name'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$role_id = 1; // Assuming a default role ID for registered users

	// Create a query to insert user data into the 'users' table
	$query = "INSERT INTO users (name, email, username, password, role_id) VALUES ('$name', '$email', '$username', '$password', '$role_id')";

	// Execute the query
	$result = mysqli_query($conn, $query);

	// Redirect to login.php after registration
	header("location: ../login.php");
	mysqli_close($conn);
}

// Check if the form is submitted for user login
if (isset($_POST['login'])) {
	// Get login form data
	$username = $_POST['username'];
	$password = $_POST['password'];

	// Create a query to select user data based on the provided username and password
	$sql = "SELECT * FROM `users` WHERE username = '$username' AND password = '$password'";

	// Create a query to select the user ID based on the provided username and password
	$sqlid = "SELECT id FROM `users` WHERE username = '$username' AND password = '$password'";

	// Execute the login query and the query to get the user ID
	$result = mysqli_query($conn, $sql);
	$id = mysqli_query($conn, $sqlid);

	$userid = ""; // Initialize a variable to store the user ID

	// Check if the login query returns exactly one row (i.e., successful login)
	if (mysqli_num_rows($result) == 1) {
		// Fetch the user ID and user data
		$user = mysqli_fetch_array($id);
		$user_data = mysqli_fetch_array($result);

		$userid = $user['id']; // Get the user ID
		$role_id = $user_data['role_id']; // Get the user's role ID

		// Store the user ID and role ID in session variables for later use
		$_SESSION["login_id"] = $userid;
		$_SESSION["role_id"] = $role_id;

		// Redirect to the dashboard after successful login
		header("Location: ..//dashboard.php");
	} else {
		// If login fails, show an alert and go back to the previous page (login form)
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		    window.alert('Invalid Username or Password')
		    window.location.href='javascript:history.go(-1)';
		    </SCRIPT>");
	}
}

// Remember, comments provide important context and explanations for code logic.
// Always ensure to use comments to describe important parts of your code.
?>
