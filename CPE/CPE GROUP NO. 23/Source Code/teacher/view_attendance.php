<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Teacher - View Attendance</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="print.css" media="print">


    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.10/css/dataTables.bootstrap5.min.css">

    <!-- Bootstrap JS and Popper.js (required for Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.10/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.10/js/dataTables.bootstrap5.min.js"></script>
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
                    <!-- <li class="nav-item">
                        <a class="nav-link active" title="Attendance" aria-current="page" href="attendance.php">Attendance</a>
                    </li> -->
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
                        <a class="nav-link active" title="Submission" aria-current="page" href="timetable.php">Timetable</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " title="Submission" aria-current="page" href="assessment.php">Submission</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link " title="Attendance" aria-current="page" href="edit_timetable.php">Edit Timetable</a>
                    </li> -->
                    <!-- <li class="nav-item">
                        <a class="nav-link " title="Attendance" aria-current="page" href="view_attendance.php">View Attendance</a>
                    </li> -->
                </ul>
            </div>
            <form class="d-flex">
                <button class="btn btn-outline-light fs-5" title="Logout" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" onclick="logout()" aria-controls="staticBackdrop">
                    Logout
                </button>
            </form>
        </div>
    </nav>
    <div class="container border mt-2">
        <div class="mt-2">
            <label>Search By</label>
        </div>
        <div class="container">
            <form method="post" action="view_attendance.php" class="row g-3">
                <div class="col-md-2">
                    <select name="branch" class="form-select" aria-label="Select Semester">
                        <option disabled selected>Branch</option>
                        <option>CO</option>
                        <option>ME</option>
                        <option>CE</option>
                    </select>
                </div>

                <div class="col-md-2">
                    <select name="year" class="form-select" aria-label="Select Semester">
                        <option selected>Year</option>
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
                    <label>Date:</label>
                    <input type="date" name="date">
                </div>
                <div class="col-md-2">
                    <select name="attendance_status" class="form-select" aria-label="Select Semester">
                        <option selected disabled>Attendance Status</option>
                        <option>Show All</option>
                        <option>Present</option>
                        <option>Absent</option>
                    </select>
                </div>

                <div class="col-md-2 mt-4">
                    <button type="submit" class="btn btn-primary mt-4">Search</button>
                </div>

            </form>
        </div>
    </div>

    <div class="container main">

        <?php
        // Include database connection
        include("../process/connection.php");
        $branch = $_POST['branch'] ?? '';
        $year = $_POST['year'] ?? '';
        $semester = $_POST['semester'] ?? '';
        $subject_name = $_POST['subject'] ?? '';
        $session_type = $_POST['session_type'] ?? '';
        $division = $_POST['division'] ?? '';
        $date = $_POST['date'] ?? '';
        $attendance_status = $_POST['attendance_status'] ?? '';
        $subject = 'subject';
        $y = "";
        if ($year == "First Year") {
            $y = "FY";
        } elseif ($year == "Second Year") {
            $y = "SY";
        } else {
            $y = "TY";
        }

        // Build the SQL query with conditions based on form inputs
        $sql = "SELECT 
        attendance.$subject AS subject,
        attendance.attendance_status,
        attendance.date,
        attendance.time,
        attendance.session_type,
        s.roll_no,
        s.enrollment_no AS enroll,
        s.name AS student_name,
        s.branch,
        s.year,
        s.division,
        s.semester
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
        attendance.date = '$date'";

        // Conditionally add the attendance_status filter
        if ($attendance_status != "Show All") {
            $sql .= " AND attendance.attendance_status ='$attendance_status'";
        }
        // echo $sql;
        // Execute the query
        $result = mysqli_query($conn, $sql);
        //
        $sqll = "SELECT 
        attendance.$subject AS subject,
        attendance.attendance_status,
        attendance.date,
        attendance.time,
        attendance.session_type,
        s.roll_no,
        s.enrollment_no AS enroll,
        s.name AS student_name,
        s.branch,
        s.year,
        s.division,
        s.semester
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
        attendance.date = '$date'";

        // Conditionally add the attendance_status filter
        if ($attendance_status != "Show All") {
            $sqll .= " AND attendance.attendance_status ='$attendance_status'";
        }
        // echo $sql;
        // Execute the query
        $resultt = mysqli_query($conn, $sqll);
        $db = "";
        if ($branch == "CO")
            $db = "Computer Engg.";
        elseif ($branch == "ME")
            $db = "Mechanical Engg.";
        elseif ($branch == "CE")
            $db = "Civil Engg.";
        // Select subject name from Subjects db
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
        // Check if the query was successful
        if ($result) {
            $td = "";
            //Display the results in a table
            if ($tdb = mysqli_fetch_assoc($resultt)) {
                $td = $tdb['time'];
            } else {
            }
            // echo $td;
            $dd = date("d-m-Y", strtotime($date));
            echo "<div class='container  mt-4' id='stud_attendance'>";
            // <p class='text-end'>Date: $dd </p>    
            // <h3 class='text-center'>Attendacne Report</h3>
            echo " <p class='text-center fs-5'><strong>Branch:</strong> $db($branch) |<strong> Year:</strong> $year |<strong> Semester:</strong> $semester |<strong> Session Type:</strong> $session_type |<strong> Division:</strong> $division |<strong> Date:</strong> $dd </p>
            <p class='text-center fs-5'><strong> Subject:</strong> $ds   ($subject_name) </p></div>
            <div class='container mt-4'>";
            // Button to print data
            echo "<button class='btn btn-primary printbtn text-end mb-3 ' onclick='window.print()'>Print</button>
            </div>
                        <table id='timetable' class='table text-center table-hover table-light table-bordered border-dark'>
                            <thead class='fs-5'>
                                <tr>
                                    <td class='fw-bold'>Roll No</td>
                                    <td class='fw-bold'>Enrollment Number</td>
                                    <td class='fw-bold'>Student Name</td>
                                    <td class='fw-bold'>Attendance Status</td>
                                </tr>
                            </thead>";
            echo "<tbody>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>{$row['roll_no']}</td>";
                echo "<td>{$row['enroll']}</td>";
                echo "<td>" . ucwords(strtolower($row['student_name'])) . "</td>";
                // echo "<td>{$row['branch']}</td>";
                // echo "<td>{$row['year']}</td>";
                // echo "<td>{$row['semester']}</td>";
                // echo "<td>{$row['division']}</td>";
                // echo "<td>{$row['subject']}</td>";
                // echo "<td>{$row['session_type']}</td>";
                // echo "<td>" . date('d-m-Y', strtotime($row['date'])) . "</td>";
                echo "<td>{$row['attendance_status']}</td>";
                echo "</tr>";
            }
        } else {
            // Display an error message if the query fails
            echo "Error: " . mysqli_error($conn);
        }

        // Close the database connection
        mysqli_close($conn);
        ?>
        </tbody>
        </table>
    </div>
    <script>
        function logout() {
            window.location.href = "../index.php";
        }
    </script> <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>