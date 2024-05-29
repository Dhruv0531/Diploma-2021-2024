<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Page - Submission Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
</head>

<body style="font-family: 'Poppins', sans-serif !important;">
    <nav class="navbar sticky-top navbar-expand-lg bg-primary bg-gradient ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="cropped-logo23.png" alt="Logo" width="60" height="50" class="d-inline-block object-fit-contain border rounded img-fluid"></img>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav fs-5">
                    <li class="nav-item">
                        <a class="nav-link" href="timatable.php">Timetable</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="attendence.php">Attendance</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="submission-report.php">Submission Report</a>
                    </li>
                    <li class="nav-item ">
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

    <div class="container my-5">
        <div class="card shadow">
            <div class="card-body">
                <p class="text-center fs-4">Department of Computer Engineering</p>
                <p class="text-center fs-5 fw-bold">Progressive Assessment Status (Acadamic Year 2023-24)</p>
                <!-- <p class="text-start fs-5"><b>Name:  </b>  <b> Roll No:</b></p> -->

                <!-- Your other HTML content goes here -->


                <table class="table ">
                    <thead fs-5 fw-bold>
                        <tr>
                            <?php
                            include("process/connection.php");
                            // session_start();

                            if (isset($_SESSION["username"])) {
                                $enrollment_no = $_SESSION["username"];

                                // Fetch details from the stud_details table using enrollment_no
                                $query = "SELECT * FROM stud_details WHERE enrollment_no = '$enrollment_no'";
                                $result = mysqli_query($conn, $query);

                                if ($result && mysqli_num_rows($result) > 0) {
                                    $studentDetails = mysqli_fetch_assoc($result);
                                    echo "<th>Semester:" . " " . $studentDetails['branch'] . " " . $studentDetails['semester'] . " " . $studentDetails['scheme'] . "</th>";
                                } else {
                                    echo "Student details not found.";
                                }
                            } else {
                                header("Location: index.php");
                                exit();
                            }
                            ?>
                            <?php
                            // session_start(); // Start the session to access session variables

                            // Establish connection to your database
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "srms";

                            $conn = new mysqli($servername, $username, $password, $dbname);

                            // Check connection
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            // Get enrollment_no from session
                            $enrollment_no = isset($_SESSION['username']) ? $_SESSION['username'] : '';

                            // Check if enrollment_no exists
                            if (!empty($enrollment_no)) {
                                // Query to check if the no_dues status is 'Y' for the given enrollment_no
                                $check_no_dues_sql = "SELECT no_dues FROM sr WHERE enrollment_no = '$enrollment_no'";
                                $result = $conn->query($check_no_dues_sql);

                                // Check if the query was successful
                                if ($result && $result->num_rows > 0) {
                                    $row = $result->fetch_assoc();
                                    $no_dues_status = $row['no_dues'];

                                    // Check if the no_dues status is 'Y' and display a checkmark (✓) in the table header
                                    if ($no_dues_status == 'Y') {
                                        echo "<th class='fw-bold text-center'>No Dues by department</th>
                            <td class='text-success fs-2 text-center fw-bold'>✓</td>";
                                    } else {
                                        // If no_dues status is not 'Y', display without a checkmark
                                        echo "
                            <th>Semester: CO 6 I</th>
                            <th class='fw-bold text-center'>No Dues by department</th>
                            <td class='text-success fs-2 text-center fw-bold'>❌</td>
                            ";
                                    }
                                }
                            } else {
                                // If enrollment_no is empty, display without a checkmark
                                echo "

                            <th class='fw-bold'>No Dues by department</th>
                            <td class='text-success fs-2 text-center fw-bold'></td>
                            ";
                            }

                            // Close database connection
                            $conn->close();
                            ?>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="fw-bold">Subject</td>
                            <td class="fw-bold text-center">Micro Project</td>
                            <td class="fw-bold text-center">PA (TW Submission)</td>
                        </tr>
                        <?php
                        // Establish database connection
                        include("process/connection.php");

                        // Check if session username is set
                        if (isset($_SESSION["username"])) {
                            $enrollment_no = $_SESSION["username"];

                            // Fetch student details from stud_details table
                            $query = "SELECT * FROM stud_details WHERE enrollment_no = '$enrollment_no'";
                            $result = mysqli_query($conn, $query);

                            if ($result && mysqli_num_rows($result) > 0) {
                                $studentDetails = mysqli_fetch_assoc($result);
                                $branch = $studentDetails['branch'];
                                $semester = $studentDetails['semester'];

                                // Fetch subjects for the corresponding branch and semester
                                $query = "SELECT * FROM subjects WHERE Course='$branch' AND Semester='$semester'";
                                $result = mysqli_query($conn, $query);

                                if ($result && mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr><td>" . $row['sub'] . "(" . $row['Short_Forms'] . ")</td>";

                                        // Generate column values based on database values from sr table
                                        $short_name = $row['Short_Forms'];
                                        $mp = strtolower($short_name . "_mp");
                                        $tw = strtolower($short_name . "_tw");

                                        // Query to check if Micro Project (MP) and PA (TW Submission) are marked as 'Y' for the current subject
                                        $check_status_sql = "SELECT $mp, $tw FROM sr WHERE enrollment_no = '$enrollment_no'";
                                        $status_result = mysqli_query($conn, $check_status_sql);

                                        if ($status_result && mysqli_num_rows($status_result) > 0) {
                                            $status_row = mysqli_fetch_assoc($status_result);
                                            $mp_status = $status_row[$mp] == 'Y' ? '<td class="text-success fs-4 text-center fw-bold">✓</td>' : '<td  class="text-success fs-5 text-center fw-bold"></td>'; //❌
                                            $tw_status = $status_row[$tw] == 'Y' ? '<td class="text-success fs-4 text-center fw-bold">✓</td>' : '<td  class="text-success fs-5 text-center fw-bold"></td>';

                                            // Display the checkmarks for MP and TW accordingly
                                            echo $mp_status;
                                            echo $tw_status;
                                            echo "</tr>";
                                        } else {
                                            // If status not found, display empty cells
                                            echo "<td></td><td></td>";
                                        }
                                    }
                                } else {
                                    echo "<td colspan='3'>No subjects found.</td>";
                                }
                            } else {
                                echo "<td colspan='3'>Student details not found.</td>";
                            }
                        } else {
                            header("Location: index.php");
                            exit();
                        }

                        // Close database connection
                        mysqli_close($conn);
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>