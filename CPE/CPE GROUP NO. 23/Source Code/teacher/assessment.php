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
                        <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Attendance
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="attendance.php">Take Attendance</a></li>
                            <li><a class="dropdown-item" href="view_attendance.php">View Attendance</a></li>
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
                    <h5 class="card-title text-center"><b>Micro Project and PA(TW Submission)</b></h5>
                    <form method="post" action="assessment.php" class="row mt-2 g-3">
                        <?php
                        include("../process/connection.php");
                        session_start();

                        if (isset($_SESSION["username"])) {
                            $user = $_SESSION["username"];
                            // echo $user;

                            // Fetch details from the teacher_name table using username
                            $query = "SELECT * FROM teacher_name WHERE username = '$user'";
                            $result = mysqli_query($conn, $query);

                            if ($result && mysqli_num_rows($result) > 0) {
                                $teacherDetails = mysqli_fetch_assoc($result);

                                // Fetch subjects taught by the teacher from the subjects table
                                $teacherShortName = $teacherDetails['short_name'];
                                $sql = "SELECT * FROM subjects WHERE teacher = '$teacherShortName'";
                                $resultt = mysqli_query($conn, $sql);
                                echo "<div class='col-md-6'>
                            <label for='subject' class='form-label'>Subject</label>
                            <select class='form-select' id='subject' name='subject'>
                            <option selected disabled>Select Subject</option>";
                                if ($resultt && mysqli_num_rows($resultt) > 0) {
                                    // Output subject names
                                    while ($details = mysqli_fetch_assoc($resultt)) {
                                        echo "<option>" . $details['sub'] . "</option><br>";
                                    }
                                    echo "</select>
                        </div>";
                                } else {
                                    echo "No subjects found for this teacher.";
                                }
                            } else {
                                echo "Teacher details not found.";
                            }
                        } else {
                            header("Location: index.php");
                            exit();
                        }
                        ?>

                        <div class="col-md-6">
                            <label for="division" class="form-label">Division</label>
                            <select class="form-select" id="division" name="division">
                                <option selected disabled>Select Division</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                            </select>
                        </div>
                </div>
                <div class="col-12 text-center pb-3">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
                </form>
            </div>
        </div>
        </div>
        </div>
    </main>

    <?php
    // Include database connection
    include("../process/connection.php");

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve selected branch, semester, and division from form
        $subject = $_POST['subject'];
        $division = $_POST['division'];
        // $branch = $_POST['branch'];
        // $semester = $_POST['semester'];
        // echo $subject . "<br>" . $division . "<br>";
        $sql = "SELECT * FROM subjects WHERE sub='$subject'";
        $short_name = mysqli_query($conn, $sql);
        if ($short_name && mysqli_num_rows($short_name) > 0) {
            $studentDetails = mysqli_fetch_assoc($short_name);

            // echo "<div class='card-text fs-2'>";
            // echo "<p><strong>Welcome</strong> " . $studentDetails['complete_name'] . "</p>";
            // echo  $studentDetails['Short_Forms'] . "<br>";
            $sn = $studentDetails['Short_Forms'];
            $p = "_mp";
            $t = "_tw";
            $mp = strtolower($sn) . '' . $p;
            $tw = strtolower($sn) . '' . $t;
            // echo $sn . "<br>" . $mp . "<br>" . $tw;
            // echo "</div>";

            $queryy = "SELECT * FROM subjects WHERE Short_Forms ='$sn'";

            // Query to retrieve branch and semester from subjects table based on selected subject
            $sql = "SELECT Course, Semester FROM subjects WHERE sub='$subject'";
            $subject_info = mysqli_query($conn, $sql);

            if ($subject_info && mysqli_num_rows($subject_info) > 0) {
                $subject_details = mysqli_fetch_assoc($subject_info);
                $branch = $subject_details['Course'];
                $semester = $subject_details['Semester'];

                // Proceed with the rest of your code using $branch and $semester variables
                // For example:
                // echo "Branch: $branch, Semester: $semester";
            } else {
                echo "Subject details not found.";
            }


            // $division = $_POST['branch'];
            // Close the database connection
            // Query to retrieve student details from stud_details and no_dues status from sr table based on selected criteria
            // Query to retrieve student details from stud_details and no_dues status from sr table based on selected criteria
            $query = "SELECT stud_details.enrollment_no, stud_details.roll_no, stud_details.name, sr.$mp, sr.$tw 
FROM stud_details 
LEFT JOIN sr ON stud_details.enrollment_no = sr.enrollment_no
WHERE stud_details.branch = '$branch' 
AND stud_details.semester = '$semester' 
AND stud_details.division = '$division'
";


            // Execute the query
            $result = mysqli_query($conn, $query);
            // echo $query;
            // Check if the query was successful
            if ($result) {
                echo "<div class='container my-5'>
                            <div class='card shadow'>
                                <div class='card-body'>";
                echo " <p class='text-center fs-5'><strong>Branch:</strong> $branch |<strong> Semester:</strong> $semester |<strong> Division:</strong> $division </strong> </p>
                                <p class='text-center fs-5'><b> Subject:</b>   $subject  ($sn) </p>";
                echo "<form method='post' action='save_assessment.php'>";
                echo "<input type='hidden' name='mp' value='$mp'>";
                echo "<input type='hidden' name='tw' value='$tw'>";
                echo "<table class='table text-center'>";
                echo "<table class='table text-center'>";
                echo "<thead ><tr><th>Roll No</th><th>Enrollment No</th><th>Name</th><th>Micro Project</th><th>PA(TW Submission)</th></tr></thead>";
                echo "<tbody>";
                // Loop through each row of the result
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>{$row['roll_no']}</td>";
                    echo "<td>{$row['enrollment_no']}</td>";
                    echo "<td>{$row['name']}</td>";
                    echo "<td>";
                    echo "<div class='form-check'>";
                    // Check if $mp value is 'Y' and set the checkbox accordingly
                    if ($row[$mp] == 'Y') {
                        echo "<input  type='checkbox'  name='no_dues_mp[{$row['enrollment_no']}]' checked>";
                    } else {
                        echo "<input type='checkbox' name='no_dues_mp[{$row['enrollment_no']}]'>";
                    }
                    echo "</div>";
                    echo "</td>";
                    echo "<td>";
                    echo "<div class='form-check'>";
                    // Check if $tw value is 'Y' and set the checkbox accordingly
                    if ($row[$tw] == 'Y') {
                        echo "<input type='checkbox' name='no_dues_tw[{$row['enrollment_no']}]' checked>";
                    } else {
                        echo "<input type='checkbox' name='no_dues_tw[{$row['enrollment_no']}]'>";
                    }
                    echo "</div>";
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
                    </div>
                </form>
            </div>
          </div>
      </div>";
            } else {
                // Display an error message if the query fails
                echo "Error: " . mysqli_error($conn);
            }
        }
    } else {
        // echo "Student details not found.";
    }


    mysqli_close($conn);

    ?>

    <script>
        function logout() {
            window.location.href = "../index.php";
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>