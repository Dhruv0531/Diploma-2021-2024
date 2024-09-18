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
                        <a href="components-alerts.html">
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
                        <a href="forms-elements.html" class="active">
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
                        <a href="tables-data.html">
                            <i class="bi bi-circle"></i><span>View Student Details</span>
                        </a>
                    </li>
                    <li>
                        <a href="tables-data.html">
                            <i class="bi bi-circle "></i><span>No Dues</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Tables Nav -->
        </ul>
    </aside><!-- End Sidebar-->

    <main class="main dashboard">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card shadow">
                        <h5 class="card-title text-center"><b>Add Teacher Details</b></h5>
                        <div class="card-body">
                            <form method="post" action="add_teacher.php" autocomplete="off">
                                <div class="mb-3">
                                    <label for="complete_name" class="form-label">Teacher's Complete Name</label>
                                    <input type="text" required name="complete_name" class="form-control" id="complete_name" placeholder="Complete Name">
                                </div>
                                <div class="mb-3">
                                    <label for="complete_name" class="form-label">Select Gender</label>
                                    <div class="form-check form-check-inline ms-3">
                                        <input class="form-check-input" required type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Male">
                                        <label class="form-check-label" for="inlineRadio1">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" required type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Female">
                                        <label class="form-check-label" for="inlineRadio2">Female</label>
                                    </div>

                                </div>
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" required name="username" class="form-control" id="username" placeholder="Username">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" required name="password" class="form-control" id="password" placeholder="Enter Password">
                                </div>
                                <button class="w-100 btn btn-lg btn-primary" name="login" type="submit">Save</button>

                            </form>
                        </div>
                        <div class="alert alert-success mt-3" id="successMsg" style="display: none;">
                            Teacher details added successfully!
                        </div>
                        <?php
                        // Include your database connection file
                        include("../process/connection.php");

                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            // Get form data
                            $completeName = $_POST["complete_name"];
                            $gender = $_POST["inlineRadioOptions"];
                            $username = intval($_POST["username"]);
                            $password = $_POST["password"];

                            // Prefix "Mr." or "Ms." based on gender
                            $prefix = ($gender == "Male") ? "Mr." : "Ms.";
                            $completeNameWithPrefix = $prefix . " " . $completeName;

                            // Generate short name
                            $shortName = '';
                            $nameArray = explode(' ', $completeName);
                            foreach ($nameArray as $namePart) {
                                $shortName .= strtoupper($namePart[0]);
                            }

                            // Insert data into teacher_name table
                            $insertTeacherQuery = "INSERT INTO teacher_name (complete_name, short_name,role_id,username) VALUES ('$completeNameWithPrefix', '$shortName',1,'$username')";
                            mysqli_query($conn, $insertTeacherQuery);
                            // echo $insertTeacherQuery;
                            // Insert data into user table
                            $insertUserQuery = "INSERT INTO user (username, password,role,role_id) VALUES ('$username', '$password','teacher',1)";
                            mysqli_query($conn, $insertUserQuery);
                            // echo "<br>".$insertUserQuery;
                            // Redirect to a success page or perform any other actions
                            // header("Location: success.php");
                            exit();
                        }
                        ?>


                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        // Function to display success message
        function displaySuccessMsg() {
            document.getElementById('successMsg').style.display = 'block';
        }

        // Check if the URL contains success parameter to display the message
        const urlParams = new URLSearchParams(window.location.search);
        const successParam = urlParams.get('success');
        if (successParam === 'true') {
            displaySuccessMsg();
        }
    </script>
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