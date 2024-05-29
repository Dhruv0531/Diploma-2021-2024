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
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
    <main class="main dashboard">
        <div class="container my-5">
            <div class="card shadow">
                <div class="card-body">
                    <?php
                    include("../process/connection.php");
                    session_start();

                    if (isset($_SESSION["username"])) {
                        $user = $_SESSION["username"];
                        // echo $user;
                        // Fetch details from the stud_details table using enrollment_no
                        $query = "SELECT * FROM teacher_name WHERE username = '$user'";
                        $result = mysqli_query($conn, $query);

                        if ($result && mysqli_num_rows($result) > 0) {
                            $studentDetails = mysqli_fetch_assoc($result);

                            echo "<div class='card-text fs-2'>";
                            // echo "<p><strong>Welcome</strong> " . $studentDetails['complete_name'] . "</p>";
                            // echo "<h2 class='card-title text-center'><b>Welcome </b>" . $studentDetails['complete_name'] . "</h2>";
                            echo "</div>";
                        } else {
                            echo "Student details not found.";
                        }
                    } else {
                        header("Location: index.php");
                        exit();
                    }
                    ?><table id="timetable" class="table text-center table-light table-bordered border-dark">
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
                            if (isset($_SESSION["username"])) {
                                $enrollment_no = $_SESSION["username"];

                                $query = "SELECT * FROM teacher_name WHERE username = '$user'";
                                $result = mysqli_query($conn, $query);

                                if ($result && mysqli_num_rows($result) > 0) {
                                    $studentDetails = mysqli_fetch_assoc($result);
                                    $name = $studentDetails['short_name'];
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
                            $sql = "SELECT * FROM `timetable` WHERE `Teacher` = '$name'  ORDER BY `Time` ASC, FIELD(`Day`, 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday')";
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
                                            echo "(" . $subject['Semester'] . " " . $subject['Division'] . ")";
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
    </main>
    <script>
        function logout() {
            window.location.href = "../index.php";
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>