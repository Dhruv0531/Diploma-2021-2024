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
// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['no_dues_mp']) && isset($_POST['no_dues_tw'])) {
        // Retrieve checkboxes for MP and TW Submission
        $mp_checkbox = $_POST['no_dues_mp'];
        $tw_checkbox = $_POST['no_dues_tw'];
        $mp = $_POST['mp'];
        $tw = $_POST['tw'];

        // Debugging: Print received checkbox values
        // echo "MP Checkbox Values: ";
        // print_r($mp_checkbox);
        // echo "<br>";
        // echo "TW Checkbox Values: ";
        // print_r($tw_checkbox);
        // echo "<br>";

        // Iterate over MP checkboxes
        foreach ($mp_checkbox as $enrollment_no => $checked) {
            // Sanitize data to prevent SQL injection
            $enrollment_no = mysqli_real_escape_string($conn, $enrollment_no);
            // Check if the checkbox was submitted
            if (isset($mp_checkbox[$enrollment_no])) {
                // Checkbox was checked
                $status_mp = 'Y';
            } else {
                // Checkbox was unchecked
                $status_mp = 'N';
            }
            // SQL query to update MP status for each student
            $sql_mp = "UPDATE sr SET $mp = '$status_mp' WHERE enrollment_no = '$enrollment_no'";
            // echo "SQL MP Query: " . $sql_mp . "<br>";
            if ($conn->query($sql_mp) !== TRUE) {
                echo "Error: " . $sql_mp . "<br>" . $conn->error;
            }
        }

        // Repeat the same process for TW Submission checkboxes
        foreach ($tw_checkbox as $enrollment_no => $checked) {
            // Sanitize data to prevent SQL injection
            $enrollment_no = mysqli_real_escape_string($conn, $enrollment_no);
            // Check if the checkbox was submitted
            if (isset($tw_checkbox[$enrollment_no])) {
                // Checkbox was checked
                $status_tw = 'Y';
            } else {
                // Checkbox was unchecked
                $status_tw = 'N';
            }
            // SQL query to update TW Submission status for each student
            $sql_tw = "UPDATE sr SET $tw = '$status_tw' WHERE enrollment_no = '$enrollment_no'";
            // echo "SQL TW Query: " . $sql_tw . "<br>";
            if ($conn->query($sql_tw) !== TRUE) {
                echo "Error: " . $sql_tw . "<br>" . $conn->error;
            }
        }

        // Redirect back to the page after updating MP and TW Submission statuses
        header("Location: assessment.php");
        exit();
    } else {
        echo "No dues data received!";
    }
}


// Close database connection
$conn->close();
