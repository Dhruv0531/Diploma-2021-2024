<?php
// Establish connection to your database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "srms";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['no_dues'])) {
        // Retrieve all enrollment numbers from the database to reset the status of all students
        $reset_sql = "UPDATE sr SET no_dues = ''";
        if ($conn->query($reset_sql) !== TRUE) {
            echo "Error: " . $reset_sql . "<br>" . $conn->error;
        }

        // Update the no_dues status based on the checkboxes
        foreach ($_POST['no_dues'] as $enrollment_no => $status) {
            // Sanitize data to prevent SQL injection
            $enrollment_no = mysqli_real_escape_string($conn, $enrollment_no);
            $status = 'Y'; // Set status to 'Y' for checked checkboxes

            // SQL query to update no_dues status for each student
            $sql = "UPDATE sr SET no_dues = '$status' WHERE enrollment_no = '$enrollment_no'";
            if ($conn->query($sql) !== TRUE) {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        // Redirect back to the page after updating dues
        header("Location: no_dues.php");
        exit();
    } else {
        echo "No dues data received!";
    }
}

// Close database connection
$conn->close();
