<?php
include("../process/connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['attendance'])) {
        // Get other form data (including the hidden fields)
        $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
        $semester = isset($_POST['semester']) ? $_POST['semester'] : '';
        $session_type = isset($_POST['session_type']) ? $_POST['session_type'] : '';
        $time = isset($_POST['time']) ? $_POST['time'] : '';
        $date = isset($_POST['date']) ? $_POST['date'] : '';

        // Debugging: Check the value of $date
        echo "Date from form: " . $date . "<br>";

        // Check if date is in the expected format
        if (preg_match('/^\d{4}-\d{2}-\d{2}$/', $date)) {
            // Debugging: Check if variables have correct values
            echo "Subject: " . $subject . "<br>";
            echo "Semester: " . $semester . "<br>";
            echo "Session Type: " . $session_type . "<br>";
            echo "Time: " . $time . "<br>";
            echo "Date: " . $date . "<br>";

            // Prepare update statement outside the loop
            $stmt = $conn->prepare("UPDATE attendance
                                    INNER JOIN stud_details ON attendance.enrollment_no = stud_details.enrollment_no
                                    SET attendance.attendance_status = ?
                                    WHERE stud_details.id = ?
                                    AND attendance.subject = ?
                                    AND attendance.semester = ?
                                    AND attendance.session_type = ?
                                    AND attendance.time = ?
                                    AND attendance.date = ?");
            $stmt->bind_param("sssssss", $attendance_status, $studentId, $subject, $semester, $session_type, $time, $date);

            foreach ($_POST['attendance'] as $studentId => $attendance_status) {
                // Sanitize data to prevent SQL injection
                // Note: Sanitization not required here as we are using prepared statements
                //$studentId = mysqli_real_escape_string($conn, $studentId);
                //$attendance_status = mysqli_real_escape_string($conn, $attendance_status);

                // Execute the update query
                if ($stmt->execute()) {
                    echo "Record updated successfully<br>";
                } else {
                    echo "Error updating record: " . $stmt->error . "<br>";
                }
            }

            // Close statement outside the loop
            $stmt->close();
        } else {
            echo "Invalid date format. Date should be in Y-m-d format.";
        }
    } else {
        echo "No attendance data received!";
    }
}

// Close database connection
$conn->close();
