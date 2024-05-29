<?php
// Include the connection.php file to establish a database connection
require dirname(__DIR__) . "\process\connection.php";

// Turn off error reporting for this script to avoid displaying errors on the page
error_reporting(0);

// Check if an image has been uploaded
if (isset($_FILES['product_img'])) {
	$errors = array();

	// Get information about the uploaded image
	$file_name = $_FILES['product_img']['name'];
	$file_type = $_FILES['product_img']['type'];
	$file_size = $_FILES['product_img']['size'] / 1024;
	$file_tmp = $_FILES['product_img']['tmp_name'];
	$file_ext = end(explode('.', $file_name));

	$extension = array("jpeg", "jpg", "png", "JPG");

	// Validation for the image file

	// Check if the file extension is allowed
	if (in_array($file_ext, $extension) == false) {
		$errors[] = "This file extension is not allowed.";
	}

	// Check if the file size is within the limit
	if ($file_size > 2097152) {
		$errors[] = "File size must be 2MB or lower.";
	}

	// If no errors, move the uploaded file to the desired location
	if (empty($errors) == true) {
		move_uploaded_file($file_tmp, dirname(__DIR__) . "/assets/product/" . $file_name);
	} else {
		// If there are errors in the uploaded file, print them and exit
		print_r($errors);
		die();
	}
}

// Check if the 'submit' button has been pressed and the form has been submitted
if (isset($_POST['submit'])) {
	// Retrieve form data and store them in variables
	$product_name = $_POST['product_name'];
	$company_name = $_POST['company_name'];
	$product_price = $_POST['product_price'];
	$product_categories = $_POST['product_categories'];
	$product_img = $file_name;

	// SQL query to insert the product information into the 'product_info' table in the database
	$query = "INSERT INTO product_info (product_name, company_name, product_price, product_categories,product_img) VALUES ('{$product_name}', '{$company_name}', '{$product_price}','{$product_categories}', '{$product_img}')";

	// Execute the SQL query and perform the insertion
	$result = mysqli_query($conn, $query);

	// Close the database connection
	mysqli_close($conn);
}


// Redirect the user to the 'view_products.php' page after submitting the product information
header("Location: ../view_products.php");
?>
