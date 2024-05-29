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
                        <a class="nav-link " title="Submission" aria-current="page" href="timetable.php">Timetable</a>
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
    <!-- Account
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
    </div> -->
    <div class="container">
        <form method="post" action="attendance.php" class="row g-3">
            <div class="col-md-3">
                <label for="semester" class="form-label">Semester</label>
                <select name="semester" class="form-select" aria-label="Select Semester">
                    <option selected disabled>Select Semester</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </div>

            <div class="col-md-3">
                <label for="division" class="form-label">Division</label>
                <select name="division" class="form-select" aria-label="Select Division">
                    <option selected disabled>Select Division</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                </select>
            </div>

            <div class="col-md-2 mt-4">
                <button type="submit" class="btn btn-primary mt-4">Show Timetable</button>
            </div>
        </form>
    </div>

    <div class="container mt-4">
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
                include("../process/connection.php");
                $semester = $_POST['semester'] ?? '';
                $division = $_POST['division'] ?? '';
                // Array to hold timetable data
                $timetable = array();

                // Query to fetch timetable data
                $sql = "SELECT * FROM `timetable` WHERE `Semester` = '$semester' AND `Division` = '$division' ORDER BY `Time` ASC, FIELD(`Day`, 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday')";
                $result = mysqli_query($conn, $sql);

                // Fetch data and organize into timetable array
                while ($row = mysqli_fetch_assoc($result)) {
                    $timetable[$row['Time']][$row['Day']][] = $row;
                }

                // Variable to track whether recess has been added
                $recessAdded = false;
                $recessAdded1 = false;

                // Loop through time slots
                foreach ($timetable as $time => $days) {


                    // echo "<pre>";
                    // print_r($timetable);exit();
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
                                // Construct the link with parameters


                                // Display subject link
                ?><a href="take_attendance.php?tname=<?php echo $subject['Teacher']; ?>&subject=<?php echo $subject['Subject']; ?>&ctime=<?php echo $subject['Time']; ?>&sem=<?php echo $semester ?>&div=<?php echo $division ?>&practical=<?php echo $subject['Practical'] ?>&batch=<?php echo $subject['Batch'] ?>"> <?php echo $subject['Subject']; ?> </a><?php

                                                                                                                                                                                                                                                                                                                                                                // Check if it's a practical session
                                                                                                                                                                                                                                                                                                                                                                if ($subject['Practical'] == 'Y') {
                                                                                                                                                                                                                                                                                                                                                                    echo " (" . $subject['Batch'] . ") - " . $subject['Lab'];
                                                                                                                                                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                                                                                                                                                echo "<br>";
                                                                                                                                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                                                                                                                                        }
                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                                                                                                                                                ?>
            </tbody>
        </table>

    </div>
    <script>
        function logout() {
            window.location.href = "../index.php";
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>