<!doctype html>
<html lang="en">
<?php include 'process/connection.php'; ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Page - Timetable</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
</head>

<body style="font-family: 'Poppins', sans-serif !important;">

    <nav class="navbar navbar-expand-lg bg-primary bg-gradient">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="cropped-logo23.png" alt="Logo" width="60" height="50" class="d-inline-block object-fit-contain border rounded img-fluid"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav fs-5">
                    <li class="nav-item">
                        <a class="nav-link active" href="timatable.php">Timetable</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="attendence.php">Attendance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="submission-report.php">Submission Report</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="notice.php">Notice</a>
                    </li>
                </ul>
            </div>
            <form class="d-flex">
                <button class="btn btn-outline-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
                    Profile
                </button>
            </form>
        </div>
    </nav>
    <!-- Account -->
    <div class="container my-5">
        <div class="card shadow">
            <div class="card-body">
                <div class="offcanvas offcanvas-end" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="staticBackdropLabel">Profile</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div>
                            <?php include 'process/profile.php' ?>
                        </div>
                    </div>
                </div>

                <!-- Timetable -->
                <div class="container-fluid mt-3">
                    <p class="fs-4 text-center">SSVPS's BAPUSAHEB SHIVAJIRAO DEORE POLYTECHNIC, DHULE</p>
                    <p class="fs-4 fw-bold text-center">Department of Computer Engineering</p>

                    <div class="table-responsive">
                        <table class="table text-center table-bordered border-dark">
                            <tr>
                                <?php
                                // Include database connection
                                include("process/connection.php");

                                if (isset($_SESSION["username"])) {
                                    $enrollment_no = $_SESSION["username"];

                                    // Fetch details from the stud_details table using enrollment_no
                                    $sql = "SELECT * FROM `stud_details` WHERE `enrollment_no`='$enrollment_no';";
                                    $result = mysqli_query($conn, $sql);

                                    if ($result && mysqli_num_rows($result) > 0) {
                                        $studentDetails = mysqli_fetch_assoc($result);

                                        // Display division and semester
                                        $semester = $studentDetails['semester'];
                                        $division = $studentDetails['division'];

                                        // Fetch details from the timetable table using semester and division
                                        $sqli = "SELECT * FROM `timetable` WHERE `Semester` = '$semester' AND `Division` = '$division'";
                                        $resulti = mysqli_query($conn, $sqli);

                                        // Check if timetable details are fetched successfully
                                        if ($resulti && mysqli_num_rows($resulti) > 0) {
                                            $timetableDetails = mysqli_fetch_assoc($resulti);

                                            // Display course, semester, scheme, division, academic year, and effective date
                                            echo "<td>Semester: $semester (" . $timetableDetails['Scheme'] . " Scheme)</td>";
                                            echo "<td>Academic Year: 2023-24</td>";
                                            echo "</tr><tr>";
                                            echo "<td>Division: $division</td>";
                                            echo "<td>With Effect From: " . date('d-m-Y', strtotime($timetableDetails['WithEffectFrom'])) . "</td>";
                                        } else {
                                            echo "Timetable details not found for semester $semester and division $division.";
                                        }
                                    } else {
                                        echo "Student details not found.";
                                    }
                                } else {
                                    // If username (enrollment number) is not set in the session, redirect to index.php
                                    // header("Location: index.php");
                                    // exit();
                                }
                                ?>
                            </tr>
                        </table>

                        <table id="timetable" class="table text-center table-light table-bordered border-dark">
                            <thead class="fs-5">
                                <tr>
                                    <td class="fw-bold">Time / Day</td>
                                    <td class="fw-bold">Monday</td>
                                    <td class="fw-bold">Tuesday</td>
                                    <td class="fw-bold">Wednesday</td>
                                    <td class="fw-bold">Thursday</td>
                                    <td class="fw-bold">Friday</td>
                                    <td class="fw-bold">Saturday</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Include database connection
                                include("process/connection.php");
                                if (isset($_SESSION["username"])) {
                                    $enrollment_no = $_SESSION["username"];

                                    // Fetch details from the stud_details table using enrollment_no
                                    $query = "SELECT * FROM stud_details WHERE enrollment_no = '$enrollment_no'";
                                    $result = mysqli_query($conn, $query);

                                    if ($result && mysqli_num_rows($result) > 0) {
                                        $studentDetails = mysqli_fetch_assoc($result);

                                        // Display division and semester
                                        $semester = $studentDetails['semester'];
                                        $division = $studentDetails['division'];
                                    } else {
                                        echo "Student details not found.";
                                    }
                                } else {
                                    // If username (enrollment number) is not set in the session, redirect to index.php
                                    header("Location: index.php");
                                    exit();
                                }
                                // Array to hold timetable data
                                $timetable = array();

                                // Query to fetch timetable data
                                $sql = "SELECT * FROM `timetable` WHERE `Semester` = $semester AND `Division` = '$division' ORDER BY `Time` ASC, FIELD(`Day`, 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday')";
                                $result = mysqli_query($conn, $sql);

                                // Fetch data and organize into timetable array
                                // Loop through each row of the result
                                while ($row = mysqli_fetch_assoc($result)) {
                                    // Check if the time is "13:10 PM"
                                    if ($row['Time'] == "13:10 PM") {
                                        // If so, convert the time to "01:10 PM"
                                        $time = "01:10 PM To 02:10 PM";
                                    } else {
                                        // Otherwise, use the original time
                                        $time = $row['Time'];
                                    }

                                    // Store the modified time and other row data in the timetable array
                                    $timetable[$time][$row['Day']][] = $row;
                                }

                                // Variable to track whether recess has been added
                                $recessAdded = false;
                                $recessAdded1 = false;

                                // Loop through time slots
                                foreach ($timetable as $time => $days) {

                                    // Check if it's time to add recess
                                    if (!$recessAdded && ($time == '09:30 AM')) {
                                        echo "<tr>";
                                        echo "<td class='fw-bold'>$time</td>";
                                        echo '<td class="fw-bold text-danger">R</td>
                                    <td class="fw-bold text-danger">E</td>
                                    <td class="fw-bold text-danger">C</td>
                                    <td class="fw-bold text-danger">E</td>
                                    <td class="fw-bold text-danger">S</td>
                                    <td class="fw-bold text-danger">S</td>';
                                        echo "</tr>";
                                        $recessAdded = true;
                                    }
                                    if (!$recessAdded1 && ($time == '12:00 PM')) {
                                        echo "<tr>";
                                        echo "<td class='fw-bold'>$time</td>";
                                        echo '<td class="fw-bold text-danger">R</td>
                                    <td class="fw-bold text-danger">E</td>
                                    <td class="fw-bold text-danger">C</td>
                                    <td class="fw-bold text-danger">E</td>
                                    <td class="fw-bold text-danger">S</td>
                                    <td class="fw-bold text-danger">S</td>';
                                        echo "</tr>";
                                        $recessAdded1 = true;
                                    }
                                    if ($time == '09:30 AM' || $time == '12:00 PM') {
                                        continue;
                                    }

                                    echo "<tr>";
                                    echo "<td class='fw-bold'>$time</td>";
                                    // Loop through days
                                    foreach (array('Monday', 'Tuesday', 'Wednesday', 'Thursday ', 'Friday', 'Saturday ') as $day) {
                                        echo "<td>";
                                        // Check if there are subjects for this time and day
                                        if (isset($days[$day])) {
                                            foreach ($days[$day] as $subject) {

                                                // Display subject name
                                                echo $subject['Subject'];
                                                // Check if it's a practical session
                                                if ($subject['Practical'] == 'Y') {
                                                    echo " (" . $subject['Batch'] . ") - " . $subject['Lab'];
                                                }
                                                echo "<br>";
                                            }
                                        }
                                        echo "</td>";
                                    }
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>