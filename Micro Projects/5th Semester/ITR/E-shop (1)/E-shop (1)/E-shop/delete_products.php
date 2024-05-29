<?php
// Include the connection script to establish a connection to the database
include("process\connection.php");

// Get the 'id' parameter from the URL using the $_GET superglobal
$id = $_GET['id'];

// Formulate the SQL query to delete a record from the 'product_info' table with the given id
$querry = "DELETE FROM product_info WHERE id='$id'";

// Execute the SQL query using the established database connection
$result = mysqli_query($conn, $querry);

// Redirect the user to the 'view_products.php' page after the deletion is completed
header("Location: ./view_products.php");
?>
