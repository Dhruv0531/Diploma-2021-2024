<?php
// Include the connection.php file to establish a database connection
require dirname(__DIR__) . "\process\connection.php";

// Get the 'id' parameter from the URL using $_GET
$id = $_GET['id'];

// Check if a new product image has been uploaded or not
if (empty($_FILES['new_product_img']['name'])) {
    // If no new image has been uploaded, use the old image filename stored in 'old-image' hidden input field
    $file_name = $_POST['old-image'];
} else {
    // If a new image has been uploaded, process the uploaded image
    $errors = array();

    // Get information about the uploaded image
    $file_name = $_FILES['new_product_img']['name'];
    $file_type = $_FILES['new_product_img']['type'];
    $file_size = $_FILES['new_product_img']['size'] / 1024;
    $file_tmp = $_FILES['new_product_img']['tmp_name'];
    $file_ext = end(explode('.', $file_name));
    $extension = array("jpeg", "jpg", "png", "JPG");

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

// Check if the 'update' button has been pressed and the form has been submitted
if (isset($_POST['update'])) {
    // Retrieve form data and store them in variables
    $product_name = $_POST['product_name'];
    $company_name = $_POST['company_name'];
    $product_price = $_POST['product_price'];

    // SQL query to update the product information in the 'product_info' table in the database
    $query = "UPDATE product_info SET product_name='$product_name', company_name='$company_name', product_price='$product_price', product_img='$file_name' WHERE id='$id'";

    // Execute the SQL query to update the product information
    $result = mysqli_query($conn, $query);

    // Close the database connection
    mysqli_close($conn);

    // Redirect the user to the 'view_products.php' page after updating the product information
    header("Location: ../view_products.php");
}
?>
