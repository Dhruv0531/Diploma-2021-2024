<?php
// Start a PHP session to manage user sessions.
session_start();

// If the 'login_id' session variable is not set, redirect the user to the login page.
if (!isset($_SESSION['login_id'])) {
    header("Location: ../login.php");
}

// Include the 'connection.php' file to establish a database connection.
include("process\connection.php");

// Fetch Information
// Check if 'p_name' and 'c_name' are set in the POST data.
if (isset($_POST['p_name']) && isset($_POST['p_name']) != "") {
    $c_name = $_POST['c_name'];
    $p_name = $_POST['p_name'];

    // Build the SQL query to select data from the 'product_info' table based on 'product_name' and 'company_name'.
    $query = "SELECT * FROM `product_info` WHERE product_name='$p_name' AND company_name='$c_name'";

    // Execute the query and check for errors.
    if (!$result = mysqli_query($conn, $query)) {
        exit(mysqli_error());
    }

    // Prepare the response array to hold the fetched data.
    $response = array();
    if (mysqli_num_rows($result) > 0) {
        // If data is found, fetch each row and store it in the response array.
        while ($row = mysqli_fetch_array($result)) { 
            $response = $row;
        }
    } else {
        // If no data is found, set a status code and message in the response array.
        $response['status'] = 200;
        $response['message'] = "Data not found";
    }

    // Encode the response array as JSON and echo it.
    echo json_encode($response);
} else {
    // If 'p_name' and 'c_name' are not set in the POST data, set an error response.
    $response['status'] = 200;
    $response['message'] = "Invalid Request";
}

// Update Order Status
// Check if 'order_status', 'reason', and 'cid' are set in the POST data.
if (isset($_POST['order_status']) && isset($_POST['order_status']) != "") {
    $order_status = $_POST['order_status'];
    $reason = $_POST['reason'];
    $cid = $_POST['cid'];

    // Build the SQL query to update the 'order_info' table with the new 'order_status' and 'reason'.
    $query = "UPDATE order_info SET order_status='$order_status', reason='$reason' WHERE id='$cid'";

    // Execute the update query and check for errors.
    if (!$result = mysqli_query($conn, $query)) {
        exit(mysqli_error());
    }

    // Encode the result (success or failure) as JSON and echo it.
    echo json_encode($result);
} else {
    // If 'order_status', 'reason', and 'cid' are not set in the POST data, set an error response.
    $response['status'] = 200;
    $response['message'] = "Invalid Request";
}
?>
