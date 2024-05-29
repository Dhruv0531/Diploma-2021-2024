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
                </ul>
            </div>
            <form class="d-flex">
                <button class="btn btn-outline-light fs-5" title="Logout" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" onclick="logout()" aria-controls="staticBackdrop">
                    Logout
                </button>
            </form>
        </div>
    </nav>
    <div class="container border mt-2 shadow">
        <div class="mt-2">
            <label>Search By</label>
        </div>
        <div class="container">
            <form method="post" action="percentage.php" class="row g-3">
                <div class="col-md-2">
                    <select name="branch" class="form-select" aria-label="Select Semester">
                        <option selected disabled>Branch</option>
                        <option>CO</option>
                        <option>ME</option>
                        <option>CE</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select name="year" class="form-select" aria-label="Select Semester">
                        <option selected disabled>Year</option>
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
                        <option>Show All</option>
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
                        <option>Show All</option>
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
                    <label>Date From:</label>
                    <input type="date" name="from_date">
                </div>
                <div class="col-md-2">
                    <label>Date To:</label>
                    <input type="date" name="to_date">
                </div>
                <div class="col-md-2 pb-3">
                    <button type="submit" class="btn btn-primary mt-4">Search</button>
                </div>
            </form>
        </div>
    </div>
    <!-- <div class="container"> -->

    <?php
    include("../process/connection.php");
    $branch = $_POST['branch'] ?? '';
    $year = $_POST['year'] ?? '';
    $semester = $_POST['semester'] ?? '';
    $subject_name = $_POST['subject'] ?? '';
    $session_type = $_POST['session_type'] ?? '';
    $division = $_POST['division'] ?? '';
    $date_from = $_POST['from_date'] ?? '';
    $date_to = $_POST['to_date'] ?? '';

    $subject = 'subject';
    $y = "";

    // Convert year to appropriate format
    if ($year == "First Year") {
        $y = "FY";
    } elseif ($year == "Second Year") {
        $y = "SY";
    } else {
        $y = "TY";
    }

    // Build SQL query to fetch attendance data
    if ($subject_name === "Show All" && $session_type === "Show All") {
        // When "Show All" is selected for both subject and session type, remove both filters from the query
        $sql = "SELECT 
                s.roll_no,
                s.enrollment_no AS enroll,
                s.name AS student_name,
                SUM(CASE WHEN attendance.attendance_status = 'Present' THEN 1 ELSE 0 END) AS total_present,
                COUNT(attendance.attendance_status) AS total_classes,
                ROUND((SUM(CASE WHEN attendance.attendance_status = 'Present' THEN 1 ELSE 0 END) / COUNT(attendance.attendance_status)) * 100, 2) AS attendance_percentage
            FROM 
                attendance attendance
            JOIN  
                stud_details s ON attendance.enrollment_no = s.enrollment_no
            WHERE
                s.branch = '$branch' AND
                s.year = '$y' AND
                s.semester = '$semester' AND
                s.division = '$division' AND
                attendance.date BETWEEN '$date_from' AND '$date_to'
            GROUP BY 
                s.roll_no, s.enrollment_no, s.name";
    } elseif ($subject_name === "Show All") {
        // When "Show All" is selected for the subject, remove the subject filter from the query
        $sql = "SELECT 
                s.roll_no,
                s.enrollment_no AS enroll,
                s.name AS student_name,
                SUM(CASE WHEN attendance.attendance_status = 'Present' THEN 1 ELSE 0 END) AS total_present,
                COUNT(attendance.attendance_status) AS total_classes,
                ROUND((SUM(CASE WHEN attendance.attendance_status = 'Present' THEN 1 ELSE 0 END) / COUNT(attendance.attendance_status)) * 100, 2) AS attendance_percentage
            FROM 
                attendance attendance
            JOIN  
                stud_details s ON attendance.enrollment_no = s.enrollment_no
            WHERE
                s.branch = '$branch' AND
                s.year = '$y' AND
                s.semester = '$semester' AND
                attendance.session_type = '$session_type' AND
                s.division = '$division' AND
                attendance.date BETWEEN '$date_from' AND '$date_to'
            GROUP BY 
                s.roll_no, s.enrollment_no, s.name";
    } elseif ($session_type === "Show All") {
        // When "Show All" is selected for the session type, remove the session type filter from the query
        $sql = "SELECT 
                s.roll_no,
                s.enrollment_no AS enroll,
                s.name AS student_name,
                SUM(CASE WHEN attendance.attendance_status = 'Present' THEN 1 ELSE 0 END) AS total_present,
                COUNT(attendance.attendance_status) AS total_classes,
                ROUND((SUM(CASE WHEN attendance.attendance_status = 'Present' THEN 1 ELSE 0 END) / COUNT(attendance.attendance_status)) * 100, 2) AS attendance_percentage
            FROM 
                attendance attendance
            JOIN  
                stud_details s ON attendance.enrollment_no = s.enrollment_no
            WHERE
                s.branch = '$branch' AND
                s.year = '$y' AND
                s.semester = '$semester' AND
                attendance.$subject ='$subject_name' AND
                s.division = '$division' AND
                attendance.date BETWEEN '$date_from' AND '$date_to'
            GROUP BY 
                s.roll_no, s.enrollment_no, s.name";
    } else {
        // When specific subjects and session types are selected, include both filters in the query
        $sql = "SELECT 
                s.roll_no,
                s.enrollment_no AS enroll,
                s.name AS student_name,
                SUM(CASE WHEN attendance.attendance_status = 'Present' THEN 1 ELSE 0 END) AS total_present,
                COUNT(attendance.attendance_status) AS total_classes,
                ROUND((SUM(CASE WHEN attendance.attendance_status = 'Present' THEN 1 ELSE 0 END) / COUNT(attendance.attendance_status)) * 100, 2) AS attendance_percentage
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
                attendance.date BETWEEN '$date_from' AND '$date_to'
            GROUP BY 
                s.roll_no, s.enrollment_no, s.name";
    }



    // $db = $branch;
    $df =  date("d-m-Y", strtotime($date_from));
    $dt = date("d-m-Y", strtotime($date_to));
    // $ds=$subject_name;
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

    // Execute the query
    $result = mysqli_query($conn, $sql);

    // Check if query was successful
    if ($result) {
        // echo "<div class='container card shadow mt-4'>";

        echo "<div class='container card shadow mt-4 pt-3'>";
        echo " <p class='text-center fs-5'><strong>Branch:</strong> ($branch) |<strong> Year:</strong> $year |<strong> Semester:</strong> $semester |<strong> Session Type:</strong> $session_type |<strong> Division:</strong> $division </strong> </p>
            <p class='text-center fs-5'><b> Subject:</b>   $ds   ($subject_name) |<strong> Date From:</strong> $df <strong> To</strong> $dt</p>
            ";
        echo "<div>
        <button class='btn btn-primary printbtn text-end mb-3' onclick='printAttendanceReport()'>Print Attendance Report</button>       
        </div>";
        echo "<table class='table text-center table-hover table-light mb-2'>
            <thead class='fs-5'>
                <tr>
                    <th>Roll No</th>
                    <th>Enrollment Number</th>
                    <th>Name</th>
                    <th>Conducted</th>
                    <th>Attended</th>
                    <th>Attendance Percentage</th>
                </tr>
            </thead>
            <tbody>";
        // Loop through the fetched data and display in table rows
        while ($row = mysqli_fetch_assoc($result)) {
            // Determine text color based on attendance percentage
            $textColorClass = '';
            if ($row['attendance_percentage'] <= 75) {
                $textColorClass = 'text-danger';
            } elseif ($row['attendance_percentage'] <= 85) {
                $textColorClass = 'text-warning';
            } else {
                $textColorClass = 'text-success';
            }
            echo "<tr>";
            echo "<td>{$row['roll_no']}</td>";
            echo "<td>{$row['enroll']}</td>";
            echo "<td>{$row['student_name']}</td>";
            echo "<td>{$row['total_classes']}</td>";
            echo "<td>{$row['total_present']}</td>";
            echo "<td class='$textColorClass'>{$row['attendance_percentage']}</td>";
            echo "</tr>";
        }

        echo "</tbody></table></div>";
    } else {
        // Display an error message if the query fails
        echo "Error: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
    ?>


    <script>
        function logout() {
            window.location.href = "../index.php";
        }

        function printAttendanceReport() {
            // Clone the main container div
            var containerMain = document.querySelector('.container.card.shadow.mt-4.pt-3').cloneNode(true);

            // Remove the print button from the cloned container
            var printButton = containerMain.querySelector('.btn.btn-primary');
            if (printButton) {
                printButton.remove();
            }

            // Create a new window for printing
            var printWindow = window.open('', '_blank');

            // Write the HTML content to the new window
            printWindow.document.write('<html><head><title>Attendance Report</title></head><body>');
            printWindow.document.write('<h1 style="text-align: center;">Attendance Report</h1>');
            printWindow.document.write('<style>table, th, td { text-align: center; border: 1px solid black; border-collapse: collapse; padding: 8px; }</style>'); // Add CSS for table alignment

            // Function to capitalize each word in a string
            function capitalize(str) {
                return str.replace(/\b\w/g, function(char) {
                    return char.toUpperCase();
                });
            }

            // Loop through each table row and extract the data
            var tableRows = containerMain.querySelectorAll('tbody tr');
            tableRows.forEach(function(row) {
                var cells = row.querySelectorAll('td');
                // Capitalize the "Name" data
                var name = capitalize(cells[2].textContent);
                // Update the cell content with capitalized name
                cells[2].textContent = name;
            });

            // Write the modified HTML content to the new window
            printWindow.document.write(containerMain.innerHTML);
            printWindow.document.write('</body></html>');

            // Close the document
            printWindow.document.close();

            // Print the window
            printWindow.print();

            // Close the new window after printing
            printWindow.close();
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>