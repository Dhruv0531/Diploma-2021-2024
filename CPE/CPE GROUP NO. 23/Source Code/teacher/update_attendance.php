<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Teacher - Take Attendance</title>
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Attendance
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="attendance.php">Take Attendance</a></li>
                            <li><a class="dropdown-item" href="view_attendance.php">View Attendance</a></li>
                            <li><a class="dropdown-item" href="update_attendance.php">Update Attendance</a></li>
                            <li><a class="dropdown-item" href="percentage.php">Percentage wise Attendance</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " title="Submission" aria-current="page" href="timetable.php">Timetable</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " title="Submission" aria-current="page" href="assessment.php">Submission</a>
                    </li>
                </ul>
            </div>
            <form class="d-flex">
                <button class="btn btn-outline-light fs-5" title="Logout" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" onclick="logout()" aria-controls="staticBackdrop">
                    Logout
                </button>
            </form>
        </div>
    </nav>
    <div class="container my-4 ">
        <div class="card shadow">
            <div class="card-body">
                <div class="mt-2">
                    <label>Search By</label>
                </div>
                <div class="container">
                    <form method="post" action="update_attendance.php" class="row g-3">
                        <div class="col-md-2">
                            <select name="branch" class="form-select" aria-label="Select Semester">
                                <option selected disabled>Branch</option>
                                <option>CO</option>
                                <option>ME</option>
                                <option>CE</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select name="year" class="form-select" aria-label="Select Semester">
                                <option selected disabled>Year</option>
                                <option>First Year</option>
                                <option>Second Year</option>
                                <option>Third Year</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select name="semester" class="form-select" aria-label="Select Semester">
                                <option selected disabled>Semester</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select name="subject" class="form-select" aria-label="Select Semester">
                                <option selected disabled>Subject</option>
                                <option>Show All</option>
                                <option>MAD</option>
                                <option>PWP</option>
                                <option>ETI</option>
                                <option>NIS</option>
                                <option>MGT</option>
                                <option>EDE</option>
                                <option>CPE</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select name="session_type" class="form-select" aria-label="Select Semester">
                                <option selected disabled>Session Type</option>
                                <option>Show All</option>
                                <option>Theory</option>
                                <option>Practical</option>
                                <option>Tutorial</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select name="division" class="form-select" aria-label="Select Semester">
                                <option selected disabled>Division</option>
                                <option>A</option>
                                <option>B</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label>Date</label>
                            <input type="date" name="date">
                        </div>
                        <div class="col-md-2">
                            <!-- <label>Time</label> -->
                            <select name="time" class="form-select" aria-label="Select Time">
                                <option selected disabled>Time</option>
                                <option>07:30 AM</option>
                                <option>08:30 AM</option>
                                <option>10:00 AM</option>
                                <option>11:00 AM</option>
                                <option>12:10 PM</option>
                                <option>01:10 PM</option>
                            </select>
                        </div>
                        <div class="col-md-2 pb-3">
                            <button type="submit" class="btn btn-primary mt-4">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>+
    <!-- <div class="container"> -->
    <div class="container">
        <div class="card shadow">
            <div class="card-body">
                <form action="save_updated_attendance.php" method="post">

                    <?php
                    include("../process/connection.php");
                    $branch = $_POST['branch'] ?? '';
                    $year = $_POST['year'] ?? '';
                    $semester = $_POST['semester'] ?? '';
                    $subject_name = $_POST['subject'] ?? '';
                    $session_type = $_POST['session_type'] ?? '';
                    $division = $_POST['division'] ?? '';
                    $date_from = $_POST['date'] ?? '';
                    $time = $_POST['time'] ?? '';
                    if ($time == "01:10 PM") {
                        $time = "13:10 PM";
                    }

                    $subject = 'subject';
                    $y = "";

                    // Convert year to appropriate format
                    if ($year == "First Year") {
                        $y = "FY";
                    } elseif ($year == "Second Year") {
                        $y = "SY";
                    } else {
                        $y = "TY";
                    }

                    // Build SQL query to fetch attendance data
                    $sql = "SELECT 
            s.roll_no,
            s.enrollment_no AS enroll,
            s.name AS student_name,
            attendance.attendance_status
        FROM 
            attendance attendance
        JOIN  
            stud_details s ON attendance.enrollment_no = s.enrollment_no
        WHERE
            s.branch = '$branch' AND
            s.year = '$y' AND
            s.semester = '$semester' AND
            attendance.$subject ='$subject_name' AND
            attendance.session_type = '$session_type' AND
            s.division = '$division' AND
            attendance.date = '$date_from' AND
            attendance.time = '$time'
        GROUP BY 
            s.roll_no, s.enrollment_no, s.name, attendance.attendance_status";
                    // <!-- Add hidden input fields for subject, semester, session_type, and date -->
                    echo "<input type='hidden' name='subject' value='<?php echo $subject_name; ?>'>
    <input type='hidden' name='semester' value='<?php echo $semester; ?>'>
    <input type='hidden' name='session_type' value='<?php echo $session_type; ?>'>
    <input type='hidden' name='date_from' value='<?php echo $date_from; ?>'>";
                    // Execute the query
                    $result = mysqli_query($conn, $sql);
                    $subjectQuery = "SELECT `sub` FROM `subjects` WHERE `Short_Forms` = '$subject_name'";
                    $subjectResult = mysqli_query($conn, $subjectQuery);
                    $ds = "";
                    // Fetch the subject name
                    if ($subjectDetails = mysqli_fetch_assoc($subjectResult)) {
                        $ds = $subjectDetails['sub'];
                    } else {
                        // Handle the case where subject details are not found
                        // echo "Subject details not found.";
                    }
                    // Check if query was successful
                    if ($result) {
                        $db = "";
                        if ($branch == "CO")
                            $db = "Computer Engg.";
                        elseif ($branch == "ME")
                            $db = "Mechanical Engg.";
                        elseif ($branch == "CE")
                            $db = "Civil Engg.";
                        $td = "";
                        //Display the results in a table
                        $td = $time;
                        // echo $td;
                        $dd = date("d-m-Y", strtotime($date_from));
                        // Display table header
                        echo " <p class='text-center fs-5'><strong>Branch:</strong> $db($branch) |<strong> Year:</strong> $year |<strong> Semester:</strong> $semester |<strong> Session Type:</strong> $session_type |<strong> Division:</strong> $division |<strong> Date:</strong> $dd </p>
                        <p class='text-center fs-5'><strong> Subject:</strong> $ds   ($subject_name) </p></div>
                        <div class='container mt-4'>";
                        echo "
    <table class='table text-center table-hover table-light mb-2'>
            <thead class='fs-5'>
                <tr>
                    <th>Roll No</th>
                    <th>Enrollment Number</th>
                    <th>Name</th>
                    <th>Attendance Status</th>
                </tr>
            </thead>
            <tbody>";

                        // Loop through the fetched data and display in table rows
                        while ($row = mysqli_fetch_assoc($result)) {
                            $studentId = $row['enroll'];

                            // Determine radio button status based on attendance status
                            $presentChecked = $row['attendance_status'] == 'Present' ? 'checked' : '';
                            $absentChecked = $row['attendance_status'] == 'Absent' ? 'checked' : '';

                            echo "<tr>";
                            echo "<td>{$row['roll_no']}</td>";
                            echo "<td>{$row['enroll']}</td>";
                            echo "<td>{$row['student_name']}</td>";
                            echo "<td>
                <div class='btn-group' role='group' aria-label='Basic radio toggle button group'>
                    <input type='radio' class='btn-check' value='Present' name='attendance[$studentId]' id='btnradio{$studentId}_present' autocomplete='off' $presentChecked>
                    <label class='btn btn-outline-success' for='btnradio{$studentId}_present'>Present</label>
                    <input type='radio' class='btn-check' value='Absent' name='attendance[$studentId]' id='btnradio{$studentId}_absent' autocomplete='off' $absentChecked>
                    <label class='btn btn-outline-danger' for='btnradio{$studentId}_absent'>Absent</label>
                </div>
              </td>";
                            echo "</tr>";
                        }
                        echo "</tbody></table>";
                    } else {
                        // Display an error message if the query fails
                        echo "Error: " . mysqli_error($conn);
                    }

                    // Close the database connection
                    mysqli_close($conn);
                    ?>
                    <!-- Save Button -->
                    <div class="d-grid gap-2 col-2 mx-auto">
                        <!-- <button class="btn btn-success" id="saveAttendanceBtn">Save Attendance</button> -->
                        <button type="button" id="saveAttendanceBtn" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Save Attendance
                        </button>
                    </div><!-- Button trigger modal -->
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
        </div>
    </div>





    <script>
        function logout() {
            window.location.href = "../index.php";
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>