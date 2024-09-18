<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - View TimeTable</title> <!-- Favicons -->
    <link href="../cropped-logo23.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">
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
            <div class="d-flex align-items-center justify-content-between">
                <i class="bi bi-list toggle-sidebar-btn"></i>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Admin -->
            <div class="d-flex align-items-center justify-content-between">
                <a href="#" class="logo d-flex align-items-center text-decoration-none">
                    <img src="assets/img/logo.png" alt="">
                    <span class="d-none d-lg-block text-dark">Admin</span>
                </a>
            </div><!-- End Logo -->
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav fs-5">

                </ul>
            </div>
            <form class="d-flex">
                <button class="btn btn-outline-light fs-5" title="Logout" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" onclick="logout()" aria-controls="staticBackdrop">
                    Logout
                </button>
            </form>
        </div>
    </nav>
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item mt-3">
                <a class="nav-link " href="admin.php">
                    <i class="bi bi-grid"></i>
                    <span>Admin Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>TimeTable</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="admin.php" class="text-decoration-none">
                            <i class="bi bi-circle"></i><span>Add TimeTable</span>
                        </a>
                    </li>
                    <li>
                        <a href="view_timetable.php " class="text-decoration-none active">
                            <i class="bi bi-circle"></i><span>View TimeTable</span>
                        </a>
                    </li>

                </ul>
            </li><!-- End Components Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Teacher</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="forms-elements.html">
                            <i class="bi bi-circle"></i><span>Add teacher</span>
                        </a>
                    </li>

                </ul>
            </li><!-- End Forms Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Student</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="add_student.php">
                            <i class="bi bi-circle"></i><span>Add Student</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="bi bi-circle"></i><span>View Student Details</span>
                        </a>
                    </li>
                    <li>
                        <a href="tables-data.html">
                            <i class="bi bi-circle"></i><span>No Dues</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Tables Nav -->
        </ul>
    </aside><!-- End Sidebar-->
    <div class="container">
        <form method="post" action="view_timetable.php" class="row g-3">
            <div class="col-md-3">
                <label for="semester" class="form-label">Semester</label>
                <select name="semester" class="form-select" aria-label="Select Semester">
                    <option selected>Select Semester</option>
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
                    <option selected>Select Division</option>
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
                ?> <?php echo $subject['Subject']; ?> <?php

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
    <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/chart.js/chart.umd.js"></script>
    <script src="../assets/vendor/echarts/echarts.min.js"></script>
    <script src="../assets/vendor/quill/quill.min.js"></script>
    <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>