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
        if (isset($_POST['attendance'])) {
            // Get the current date
            $current_date = date("Y-m-d");

            // Get other form data
            $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
            $semester = isset($_POST['semester']) ? $_POST['semester'] : '';
            $session_type = isset($_POST['session_type']) ? $_POST['session_type'] : '';
            $time = isset($_POST['time']) ? $_POST['time'] : '';

            foreach ($_POST['attendance'] as $studentId => $attendance_status) {
                // Sanitize data to prevent SQL injection
                $studentId = mysqli_real_escape_string($conn, $studentId);
                $attendance_status = mysqli_real_escape_string($conn, $attendance_status);

                // Retrieve enrollment number for the current student
                $enrollment_no_query = "SELECT enrollment_no FROM stud_details WHERE id = '$studentId'";
                $result = $conn->query($enrollment_no_query);
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $enrollment_no = $row['enrollment_no'];

                    // SQL query to insert data into the database
                    $sql = "INSERT INTO attendance (id, enrollment_no, subject, attendance_status, date, time, session_type, semester) 
                            VALUES (NULL, '$enrollment_no', '$subject', '$attendance_status', '$current_date', '$time', '$session_type', '$semester')";
                    if ($conn->query($sql) !== TRUE) {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                    // echo $sql."<br>";
                    
                } else {
                    echo "Error: Enrollment number not found for student ID: $studentId";
                }
            } // Redirect to take_attendance.php after successful attendance saving
            header("Location: attendance.php");
            exit();
        } else {
            echo "No attendance data received!";
        }
    }

    // Close database connection
    $conn->close();
