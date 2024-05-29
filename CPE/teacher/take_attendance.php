<?php include("../process/connection.php"); ?>
<!doctype html>
<html lang="en">
<?php
// Include database connection
include("../process/connection.php"); ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Take Attendance - Students's List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
</head>

<body style="font-family: 'Poppins', sans-serif !important;">
    <nav class="navbar sticky-top navbar-expand-lg bg-primary bg-gradient ">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="../cropped-logo23.png" alt="Logo" title="SSVPS" width="60" height="50" class="d-inline-block object-fit-contain border rounded img-fluid"></img>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav fs-5">
                    <li class="nav-item">
                        <a class="nav-link active fs-4" title="Students List" aria-current="page" href="#">Students List</a>
                    </li>
                </ul>
            </div>
            <!-- <form class="d-flex">
                <button class="btn btn-outline-light fs-5" title="Profile" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
                    Profile
                </button>
            </form> -->
        </div>
    </nav>
    <div class="ms-3 mt-3">

        <button class="btn btn-primary bg-gradient" title="Back" onclick="back()">Back</button>

    </div>
    <div class="container fs-5 mt-3">
        <table>
            <tbody>
                <tr>

                    <?php
                    // Retrieve parameters from the URL
                    $shortForm = $_GET['subject'] ?? '';
                    $time = $_GET['ctime'] ?? '';
                    $teacher = $_GET['tname'] ?? '';
                    $practical = $_GET['practical'];
                    $batch = $_GET['batch'];
                    $checkAttendanceQuery = "SELECT * FROM attendance WHERE subject='$shortForm' AND time='$time'";
                    $checkAttendanceResult = mysqli_query($conn, $checkAttendanceQuery);

                   

                    // Include database connection
                    include("../process/connection.php");

                    // Query to fetch the complete subject name based on short form
                    $subjectQuery = "SELECT `sub` FROM `subjects` WHERE `Short_Forms` = '$shortForm'";
                    $subjectResult = mysqli_query($conn, $subjectQuery);

                    // Fetch the subject name
                    if ($subjectDetails = mysqli_fetch_assoc($subjectResult)) {
                        $subject = $subjectDetails['sub'];

                        // Display the information with bold titles and spacing
                        echo "<td><strong>Subject:</strong> $subject</td>";
                        echo "<td>&nbsp;&nbsp;&nbsp;<strong>Time:</strong> $time</td>"; // Adjust the number of non-breaking spaces as needed

                        // Query to fetch the teacher's full_name based on short_name
                        // Fetch the teacher's full_name
                        $teacherQuery = "SELECT `complete_name` FROM `teacher_name` WHERE `short_name` = '$teacher'";
                        $teacherResult = mysqli_query($conn, $teacherQuery);

                        // Fetch the teacher's complete_name
                        if ($teacherDetails = mysqli_fetch_assoc($teacherResult)) {
                            $teacherFullName = $teacherDetails['complete_name'];
                            echo "<td>&nbsp;&nbsp;&nbsp;<strong>Teacher:</strong> $teacherFullName</td>"; // Adjust the number of non-breaking spaces as needed
                        } else {
                            // Handle the case where teacher details are not found
                            echo "Teacher details not found.";
                        }
                    } else {
                        // Handle the case where subject details are not found
                        echo "Subject details not found.";
                    }
                    if ($practical == "Y") {
                        echo "<td>&nbsp;&nbsp;&nbsp;<strong>Batch:</strong> $batch</td>";
                    }
                    // Check if attendance already exists for the selected subject, day, and time
                    $dayOfWeek = date('l', strtotime($time));


                    ?>
                </tr>


            </tbody>
        </table>
    </div>
    <!-- Modal for Attendance Already Exists -->
    <div class="modal fade" id="attendanceExistsModal" tabindex="-1" aria-labelledby="attendanceExistsModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="attendanceExistsModalLabel">Attendance Already Exists</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Attendance for <?php echo $shortForm; ?> already exists on <?php echo $time; ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <form method="post" action="save_attendance.php">
            <table class="table mt-3 fs-5 text-center">
                <thead class="fw-bold text-center">
                    <th>Roll Number</th>
                    <th>Enrollment Number</th>
                    <th>Name</th>
                    <th>Attendance Status</th>
                </thead>
                <tbody>
                    <?php
                    // Specify semester and division
                    $semester = $_GET['sem'];
                    $division = $_GET['div'];
                    $practical = $_GET['practical'];
                    $batch = $_GET['batch'];
                    $session_type = "";
                    // Query to fetch student details based on semester, division, and batch if practical is 'Y'
                    if ($practical == "Y") {
                        $studentDetailsQuery = "SELECT * FROM `stud_details` WHERE `semester` = $semester AND `division` = '$division' AND `batch` = '$batch'";
                        $session_type = "Practical";
                    } else {
                        $studentDetailsQuery = "SELECT * FROM `stud_details` WHERE `semester` = $semester AND `division` = '$division'";
                        $session_type = "Theory";
                    }
                    $studentDetailsResult = mysqli_query($conn, $studentDetailsQuery);


                    // Display student details with present/absent radio buttons in table rows
                    while ($studentDetails = mysqli_fetch_assoc($studentDetailsResult)) {
                        $studentId = $studentDetails['id'];
                        $rollNumber = $studentDetails['roll_no'];
                        $enrollmentNumber = $studentDetails['enrollment_no'];
                        $name = ucwords(strtolower($studentDetails['name']));

                        echo "<tr>";
                        echo "<td>$rollNumber</td>";
                        echo "<td>$enrollmentNumber</td>";
                        echo "<td>$name</td>";
                        echo "<td>";
                        ?> <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                <input type="radio" class="btn-check" value="Present" name="attendance[<?php echo $studentId; ?>]" id="btnradio<?php echo $studentId; ?>_present" autocomplete="off" checked>
                                <label class="btn btn-outline-success" for="btnradio<?php echo $studentId; ?>_present">Present</label>
                                <input type="radio" class="btn-check" value="Absent" name="attendance[<?php echo $studentId; ?>]" id="btnradio<?php echo $studentId; ?>_absent" autocomplete="off">
                                <label class="btn btn-outline-danger" for="btnradio<?php echo $studentId; ?>_absent">Absent</label>
                            </div>
                    <?php }

                    mysqli_close($conn);
                    ?>
                </tbody>
            </table>
            <input type="hidden" name="enrollment_no" value="<?php echo $enrollmentNumber; ?>">
            <input type="hidden" name="subject" value="<?php echo $shortForm; ?>">
            <input type="hidden" name="semester" value="<?php echo $semester; ?>">
            <input type="hidden" name="session_type" value="<?php echo $session_type; ?>">
            <input type="hidden" name="time" value="<?php echo $time; ?>">


            <!-- Save Button -->
            <div class="d-grid gap-2 col-2 mx-auto">
                <!-- <button class="btn btn-success" id="saveAttendanceBtn">Save Attendance</button> -->
                <button type="button" id="saveAttendanceBtn" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Save Attendance
                </button>
            </div><!-- Button trigger modal -->


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmation</h1>
                            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                        </div>
                        <div class="modal-body">
                            Are you sure you want to save the attendance?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                            <button type="submit" onclick="save()" id="saveAttendanceBtn" class="btn btn-primary">Yes</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>
        // Get the button element
        // const saveButton = document.getElementById("saveAttendanceBtn");

        // // Add a click event listener to the button
        // saveButton.addEventListener("click", function() {
        //     window.location.href = "./attendance.php";
        // })
        function save() {
            window.location.href = "./attendance.php";
        }

        function back() {
            window.location.href = "./attendance.php";
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>