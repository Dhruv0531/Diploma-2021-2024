<?php
// Start a session to handle session variables
session_start();

// Turn off error reporting for this script to avoid displaying errors on the page
error_reporting(0);

// Include the connection.php file to establish a database connection
include "connection.php";

// Check if the 'submit' button has been pressed and the form has been submitted
if (isset($_POST['submit'])) {
    // Retrieve form data and store them in variables
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // SQL query to insert the contact form data into the 'contact' table in the database
    $query = "INSERT INTO contact (name, email, subject, message) VALUES ('{$name}', '{$email}', '{$subject}', '{$message}')";

    // Execute the SQL query and perform the insertion
    $result = mysqli_query($conn, $query);

    // Redirect the user back to the index.php page after submitting the form
    header("location: ../index.php");

    // Close the database connection
    mysqli_close($conn);
}
?>
