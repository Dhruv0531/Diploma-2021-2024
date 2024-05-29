<?php
// Start a session to handle session variables
session_start();

// Include the connection.php file to establish a database connection
require dirname(__DIR__) . "\process\connection.php";

// Check if the 'submit' button has been pressed and the form has been submitted
if (isset($_POST['submit'])) {
	// Retrieve form data and store them in variables
	$product_name = $_POST['product_name'];
	$company_name = $_POST['company_name'];
	$product_price = $_POST['product_price'];
	$cust_name = $_POST['cust_name'];
	$cust_mobile = $_POST['cust_mobile'];
	$cust_address = $_POST['cust_address'];

	// Get the 'login_id' from the session, which represents the user who placed the order
	$order_by = $_SESSION["login_id"];

	// SQL query to insert the order information into the 'order_info' table in the database
	$query = "INSERT INTO order_info (`product_name`, `company_name`, `product_price`, `cust_name`, `cust_mobile`, `cust_address`, `order_by`) VALUES ('{$product_name}','{$company_name}','{$product_price}','{$cust_name}','{$cust_mobile}','{$cust_address}','{$order_by}')";

	// Execute the SQL query and perform the insertion
	$result = mysqli_query($conn, $query);

	// Close the database connection
	mysqli_close($conn);
}

// Redirect the user to the 'view_orders.php' page after submitting the order
header("Location: ../view_orders.php");
?>
