<?php
// Start a PHP session to manage user sessions.
session_start();

// Include the connection.php file to establish a database connection.
require dirname(__DIR__) . "\process\connection.php";

// Retrieve the 'id' parameter from the URL using the GET method.
$id = $_GET['id'];

// Check if the 'update' button in the form has been submitted.
if (isset($_POST['update'])) {
    // Retrieve form data using the POST method.
    $product_name = $_POST['product_name'];
    $company_name = $_POST['company_name'];
    $product_price = $_POST['product_price'];
    $cust_name = $_POST['cust_name'];
    $cust_mobile = $_POST['cust_mobile'];
    $cust_address = $_POST['cust_address'];

    // Retrieve the 'login_id' from the session, which should be previously set when the user logged in.
    $order_by = $_SESSION["login_id"];

    // Build the SQL query to update the 'order_info' table with the new data.
    $query = "UPDATE order_info 
              SET product_name='$product_name',
                  company_name='$company_name',
                  product_price='$product_price',
                  cust_name='$cust_name',
                  cust_mobile='$cust_mobile',
                  cust_address='$cust_address',
                  order_by='$order_by'
              WHERE id='$id'";

    // Execute the update query using the database connection.
    $result = mysqli_query($conn, $query);

    // Close the database connection.
    mysqli_close($conn);

    // Redirect the user to 'view_orders.php' after the update is completed.
    header("Location: ../view_orders.php");
}
?>
