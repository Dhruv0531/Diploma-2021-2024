<?php
// Include the connection file to connect to the database
include("process\connection.php");

// Get the 'id' parameter from the URL using GET method
$id = $_GET['id'];

// Create a SQL query to delete a record from the 'order_info' table with the given id
$querry = "Delete from order_info where id='$id'";

// Execute the SQL query using the database connection
$result = mysqli_query($conn, $querry);

// Redirect the user to the 'view_orders.php' page after the deletion is done
header("Location: ./view_orders.php");
?>
