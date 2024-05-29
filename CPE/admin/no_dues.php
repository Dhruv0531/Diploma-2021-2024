<!DOCTYPE html>
<html lang="en">
<?php include("../process/connection.php"); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <!-- Favicons -->
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
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg bg-primary bg-gradient">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="../cropped-logo23.png" alt="Logo" title="SSVPS" width="60" height="50" class="d-inline-block object-fit-contain border rounded img-fluid">
            </a>
            <div class="d-flex align-items-center justify-content-between">
                <i class="bi bi-list toggle-sidebar-btn"></i>
            </div>
            <!-- Admin -->
            <div class="d-flex align-items-center justify-content-between">
                <a href="#" class="logo d-flex align-items-center text-decoration-none">
                    <img src="assets/img/logo.png" alt="">
                    <span class="d-none d-lg-block text-dark">Admin</span>
                </a>
            </div><!-- End Logo -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav fs-5">
                    <!-- <i class="bi bi-list toggle-sidebar-btn"></i> -->
                    <li class="nav-item">
                        <a class="nav-link active fs-4" title="Welcome" aria-current="page"></a>
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
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item mt-3">
                <a class="nav-link " href="admin.php">
                    <i class="bi bi-grid"></i>
                    <span>Admin Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" class="active" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>TimeTable</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="admin.php">
                            <i class="bi bi-circle"></i><span>Add TimeTable</span>
                        </a>
                    </li>
                    <li>
                        <a href="view_timetable.php">
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
                        <a href="add_teacher.php">
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
                        <a href="no_dues.php" class="active">
                            <i class="bi bi-circle "></i><span>No Dues</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Tables Nav -->
        </ul>
    </aside><!-- End Sidebar-->
    <main class="main dashboard">
        <div class="container my-5">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title text-center"><b>No Dues by Department</b></h5>
                    <form method="post" action="no_dues.php" class="row mt-2 g-3">
                        <div class="col-md-6">
                            <label for="scheme" class="form-label">Branch</label>
                            <select class="form-select" id="branch" name="branch">
                                <option selected disabled>Select Branch</option>
                                <option>CO</option>
                                <option>ME</option>
                                <option>CI</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="semester" class="form-label">Semester</label>
                            <select class="form-select" id="semester" name="semester">
                                <option selected disabled>Select Semester</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="division" class="form-label">Division</label>
                            <select class="form-select" id="division" name="division">
                                <option selected disabled>Select Division</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                            </select>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <div class="container my-5">
        <div class="card shadow">
            <div class="card-body">
                <?php
                // Include database connection
                include("../process/connection.php");

                // Check if form is submitted
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Retrieve selected branch, semester, and division from form
                    $branch = $_POST['branch'];
                    $semester = $_POST['semester'];
                    $division = $_POST['division'];

                    // Query to retrieve student details from stud_details and no_dues status from sr table based on selected criteria
                    $query = "SELECT stud_details.enrollment_no, stud_details.roll_no, stud_details.name, sr.no_dues 
                  FROM stud_details 
                  LEFT JOIN sr ON stud_details.enrollment_no = sr.enrollment_no
                  WHERE stud_details.branch = '$branch' AND stud_details.semester = '$semester' AND stud_details.division = '$division'";

                    // Execute the query
                    $result = mysqli_query($conn, $query);

                    // Check if the query was successful
                    if ($result) {
                        echo " <p class='text-center fs-5 pt-3'><strong>Branch:</strong> $branch |<strong> Semester:</strong> $semester |<strong> Division:</strong> $division </strong> </p>";
                        echo "<form method='post' action='save_dues.php'>";
                        echo "<table class='table text-center'>";
                        echo "<thead ><tr><th>Roll No</th><th>Enrollment No</th><th>Name</th><th>No Dues</th></tr></thead>";
                        echo "<tbody>";
                        // Loop through each row of the result
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>{$row['roll_no']}</td>";
                            echo "<td>{$row['enrollment_no']}</td>";
                            echo "<td>{$row['name']}</td>";
                            echo "<td>";
                            // Display checkbox for each student, checked if no_dues is 'Y' else unchecked
                            echo "<input type='checkbox' name='no_dues[{$row['enrollment_no']}]' " . ($row['no_dues'] == 'Y' ? 'checked' : '') . ">";
                            echo "</td>";
                            echo "</tr>";
                        }
                        echo "</tbody>";
                        echo "</table>";
                        // Add submit button to update no_dues status
                        echo " <div class='d-grid gap-2 col-2 mx-auto'>
                        <button type='button' id='saveAttendanceBtn' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModal'>
                            Save
                        </button>
                    </div>
                    <div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                    <div class='modal-dialog modal-dialog-centered'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                                <h1 class='modal-title fs-5' id='exampleModalLabel'>Confirmation</h1>
                            </div>
                            <div class='modal-body'>
                                Are you sure you want to save changes?
                            </div>
                            <div class='modal-footer'>
                                <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>No</button>
                                <button type='submit' id='saveAttendanceBtn' class='btn btn-primary'>Yes</button>
                            </div>
                        </div>
                    </div>
                </div>";

                        echo "</form>";
                    } else {
                        // Display an error message if the query fails
                        echo "Error: " . mysqli_error($conn);
                    }

                    // Close the database connection
                    mysqli_close($conn);
                }
                ?>

            </div>
        </div>
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