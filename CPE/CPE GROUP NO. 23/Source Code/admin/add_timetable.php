<!DOCTYPE html>
<html lang="en">
<?php include("../process/connection.php"); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title> <!-- Favicons -->
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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav fs-5">
                    <li class="nav-item">
                        <a class="nav-link active" title="Add Timetable" aria-current="page" href="admin.php">Add TimeTable</a>
                    </li>
                </ul>
            </div>



        </div>
    </nav>
    <div class="ms-3 mt-3">
        <button type="button" class="btn btn-outline-primary bg-gradient" name="back" onclick="back()">Back</button>
    </div>

    <?php
    include '../process/connection.php';
    $acadamic_year = $_POST['academicYear'] ?? '';
    $effectdate = date('d-m-Y', strtotime($_POST['effectDate'] ?? ''));
    $scheme = $_POST['scheme'] ?? '';
    $course = $_POST['course'] ?? '';
    $semester = $_POST['semester'] ?? '';
    $division = $_POST['division'] ?? '';
    $selectedSessionType = $_POST['selectedSessionType'] ?? '';
    // $day = $_POST['day'] ?? '';
    // echo $acadamic_year, $effectdate, $scheme, $course, $semester, $division, $day;
    $query = "SELECT * FROM subjects WHERE Course = '$course' AND Semester = '$semester'";
    $result = mysqli_query($conn, $query);
    echo $selectedSessionType;
    // echo $query;
    ?>
    <div class="container my-5">
        <form method="post" action="admin.php" class="row g-3">
            <div class="fs-5 "><?php
                                echo "<p><b>Acadamic Year: </b>$acadamic_year  |<b>  With Effect From:</b> $effectdate  |<b>  Scheme: </b>$scheme   |<b>  Course: </b>$course   |<b>  Semester: </b>$semester   | <b> Division: </b>$division</p>";
                                ?></div>
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title text-center fs-4">Monday</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <!-- <th>Time Slot</th>
                                    <th>Session Type</th>
                                    <th>Batch</th>
                                    <th>Subject</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>07:30 AM</td>
                                <td>
                                    <select class="form-select" id="sessionTypeSelect" name="session_type">
                                        <option value="Theory">Theory</option>
                                        <option value="Practical">Practical</option>
                                    </select>
                                </td>
                                <td class="batch-field" style="display: none;">
                                    <select class="form-select" name="batch_0730">
                                        <option selected>Select Batch</option>
                                        <option value="A1">A1</option>
                                        <option value="A2">A2</option>
                                        <option value="A3">A3</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-select" name="subject_0730">
                                        <option selected>Select Subject</option>
                                        <?php
                                        if ($result) {
                                            // Fetch subjects and populate the dropdown menus
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $subjectName = $row['Subject'];
                                                $short_name = $row['Short_Forms'];
                                                // Output option elements for each subject
                                                echo "<option value='$short_name'>$subjectName($short_name)</option>";
                                            }
                                        } else {
                                            // Handle the case where the query fails
                                            echo "<option value=''>No subjects found</option>";
                                        }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>08:30 AM</td>
                                <td>
                                    <select class="form-select" name="session_type_0730">
                                        <option selected>Select Session Type</option>
                                        <option value="1">Theory</option>
                                        <option value="2">Practical</option>
                                        <option value="3">Tutorial</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-select" name="batch_0730">
                                        <option selected>Select Batch</option>
                                        <option value="A1">A1</option>
                                        <option value="A2">A2</option>
                                        <option value="A3">A3</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-select" name="subject_0730">
                                        <option selected>Select Subject</option>
                                        <option value="MAD">MAD</option>
                                        <option value="PWP">PWP</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>10:00 AM</td>
                                <td>
                                    <select class="form-select" name="session_type_0730">
                                        <option selected>Select Session Type</option>
                                        <option value="1">Theory</option>
                                        <option value="2">Practical</option>
                                        <option value="3">Tutorial</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-select" name="batch_0730">
                                        <option selected>Select Batch</option>
                                        <option value="A1">A1</option>
                                        <option value="A2">A2</option>
                                        <option value="A3">A3</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-select" name="subject_0730">
                                        <option selected>Select Subject</option>
                                        <option value="MAD">MAD</option>
                                        <option value="PWP">PWP</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>11:00 AM</td>
                                <td>
                                    <select class="form-select" name="session_type_0730">
                                        <option selected>Select Session Type</option>
                                        <option value="1">Theory</option>
                                        <option value="2">Practical</option>
                                        <option value="3">Tutorial</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-select" name="batch_0730">
                                        <option selected>Select Batch</option>
                                        <option value="A1">A1</option>
                                        <option value="A2">A2</option>
                                        <option value="A3">A3</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-select" name="subject_0730">
                                        <option selected>Select Subject</option>
                                        <option value="MAD">MAD</option>
                                        <option value="PWP">PWP</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>12:10 PM</td>
                                <td>
                                    <select class="form-select" name="session_type_0730">
                                        <option selected>Select Session Type</option>
                                        <option value="1">Theory</option>
                                        <option value="2">Practical</option>
                                        <option value="3">Tutorial</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-select" name="batch_0730">
                                        <option selected>Select Batch</option>
                                        <option value="A1">A1</option>
                                        <option value="A2">A2</option>
                                        <option value="A3">A3</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-select" name="subject_0730">
                                        <option selected>Select Subject</option>
                                        <option value="MAD">MAD</option>
                                        <option value="PWP">PWP</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>01:10 PM</td>
                                <td>
                                    <select class="form-select" name="session_type_0730">
                                        <option selected>Select Session Type</option>
                                        <option value="1">Theory</option>
                                        <option value="2">Practical</option>
                                        <option value="3">Tutorial</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-select" name="batch_0730">
                                        <option selected>Select Batch</option>
                                        <option value="A1">A1</option>
                                        <option value="A2">A2</option>
                                        <option value="A3">A3</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-select" name="subject_0730">
                                        <option selected>Select Subject</option>
                                        <option value="MAD">MAD</option>
                                        <option value="PWP">PWP</option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title text-center fs-4">Tuesday</h5>

                    <div class="col-md-6">
                        <label for="academicYear" class="form-label">Academic Year</label>
                        <input type="text" class="form-control" id="academicYear" name="academicYear" placeholder="Year">
                    </div>
                    <div class="col-md-6">
                        <label for="effectDate" class="form-label">With Effect From</label>
                        <input type="date" class="form-control" id="effectDate" name="effectDate">
                    </div>
                    <div class="col-md-6">
                        <label for="scheme" class="form-label">Scheme</label>
                        <select class="form-select" id="scheme" name="scheme">
                            <option selected>Select Scheme</option>
                            <option value="1">I</option>
                            <option value="2">K</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title text-center fs-4">Wednesday</h5>

                    <div class="col-md-6">
                        <label for="academicYear" class="form-label">Academic Year</label>
                        <input type="text" class="form-control" id="academicYear" name="academicYear" placeholder="Year">
                    </div>
                    <div class="col-md-6">
                        <label for="effectDate" class="form-label">With Effect From</label>
                        <input type="date" class="form-control" id="effectDate" name="effectDate">
                    </div>
                    <div class="col-md-6">
                        <label for="scheme" class="form-label">Scheme</label>
                        <select class="form-select" id="scheme" name="scheme">
                            <option selected>Select Scheme</option>
                            <option value="1">I</option>
                            <option value="2">K</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title text-center fs-4">Thursday</h5>

                    <div class="col-md-6">
                        <label for="academicYear" class="form-label">Academic Year</label>
                        <input type="text" class="form-control" id="academicYear" name="academicYear" placeholder="Year">
                    </div>
                    <div class="col-md-6">
                        <label for="effectDate" class="form-label">With Effect From</label>
                        <input type="date" class="form-control" id="effectDate" name="effectDate">
                    </div>
                    <div class="col-md-6">
                        <label for="scheme" class="form-label">Scheme</label>
                        <select class="form-select" id="scheme" name="scheme">
                            <option selected>Select Scheme</option>
                            <option value="1">I</option>
                            <option value="2">K</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title text-center fs-4">Friday</h5>

                    <div class="col-md-6">
                        <label for="academicYear" class="form-label">Academic Year</label>
                        <input type="text" class="form-control" id="academicYear" name="academicYear" placeholder="Year">
                    </div>
                    <div class="col-md-6">
                        <label for="effectDate" class="form-label">With Effect From</label>
                        <input type="date" class="form-control" id="effectDate" name="effectDate">
                    </div>
                    <div class="col-md-6">
                        <label for="scheme" class="form-label">Scheme</label>
                        <select class="form-select" id="scheme" name="scheme">
                            <option selected>Select Scheme</option>
                            <option value="1">I</option>
                            <option value="2">K</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title text-center fs-4">Saturday</h5>

                    <div class="col-md-6">
                        <label for="academicYear" class="form-label">Academic Year</label>
                        <input type="text" class="form-control" id="academicYear" name="academicYear" placeholder="Year">
                    </div>
                    <div class="col-md-6">
                        <label for="effectDate" class="form-label">With Effect From</label>
                        <input type="date" class="form-control" id="effectDate" name="effectDate">
                    </div>
                    <div class="col-md-6">
                        <label for="scheme" class="form-label">Scheme</label>
                        <select class="form-select" id="scheme" name="scheme">
                            <option selected>Select Scheme</option>
                            <option value="1">I</option>
                            <option value="2">K</option>
                        </select>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>
        function logout() {
            window.location.href = "../index.php";
        }

        function back() {
            window.location.href = "admin.php";
        }
        // Get the select element for session type
        const sessionTypeSelect = document.getElementById('sessionTypeSelect');

        // Add event listener for changes in the select box
        sessionTypeSelect.addEventListener('change', function() {
            // Retrieve the selected session type
            const selectedSessionType = sessionTypeSelect.value;
            console.log('Selected Session Type:', selectedSessionType);

            // Send the selected session type to the server using AJAX
            const xhr = new XMLHttpRequest();
            const url = 'process.php'; // Replace 'process.php' with the actual URL of your PHP script
            const params = 'selectedSessionType=' + selectedSessionType;
            xhr.open('POST', url, true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    console.log(xhr.responseText); // You can handle the response here if needed
                }
            };
            xhr.send(params);
        });
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