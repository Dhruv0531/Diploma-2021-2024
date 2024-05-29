<!doctype html>
<html lang="en">
<?php include 'process/connection.php'; ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Page - Attendance</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
    <!-- Remove the Bootstrap 4 stylesheet -->
    <style>
        /* Define blinking animation */
        @keyframes blink {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        /* Apply blinking animation to text */
        .blink-text {
            animation: blink .85s infinite;
        }
    </style>
</head>

<body style="font-family: 'Poppins', sans-serif !important;">
    <nav class="navbar sticky-top navbar-expand-lg bg-primary bg-gradient ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="cropped-logo23.png" alt="Logo" width="60" height="50" class="d-inline-block object-fit-contain border rounded img-fluid"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav fs-5">
                    <li class="nav-item">
                        <a class="nav-link" href="timatable.php">Timetable</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="attendence.php">Attendance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="submission-report.php">Submission Report</a>
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
                <div class="container">
                    <div class="table-responsive">
                        <table class="table text-center table-bordered table-striped ">
                            <thead>
                                <tr>
                                    <th scope="col" rowspan="2">Subjects</th>
                                    <th scope="col" colspan="2">Theory</th>
                                    <th scope="col" colspan="2">Practical</th>
                                    <th scope="col" colspan="2">Tutorial</th>
                                    <th scope="col" rowspan="2">Attendance Percentage</th>
                                </tr>
                                <tr>
                                    <th scope="col">Conducted</th>
                                    <th scope="col">Attended</th>
                                    <th scope="col">Conducted</th>
                                    <th scope="col">Attended</th>
                                    <th scope="col">Conducted</th>
                                    <th scope="col">Attended</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- PHP code for generating table rows -->
                                <?php
                                include("process/connection.php");

                                $enrollment_no = $_SESSION["username"];

                                $semester_query = "SELECT semester FROM stud_details WHERE enrollment_no = '$enrollment_no'";
                                $semester_result = mysqli_query($conn, $semester_query);
                                $semester_row = mysqli_fetch_assoc($semester_result);
                                $current_semester = $semester_row['semester'];

                                // Fetching subjects for the current semester
                                $subjects_query = "SELECT subject 
                            FROM attendance 
                            WHERE enrollment_no = '$enrollment_no' 
                            AND semester = '$current_semester'
                            GROUP BY subject";

                                $subjects_result = mysqli_query($conn, $subjects_query);

                                $subjects = array();

                                while ($row = mysqli_fetch_assoc($subjects_result)) {
                                    $subject = $row['subject'];
                                    $subjects[$subject] = array(
                                        'lecture_conducted' => 0,
                                        'lecture_attended' => 0,
                                        'practical_conducted' => 0,
                                        'practical_attended' => 0,
                                        'tutorial_conducted' => 0,
                                        'tutorial_attended' => 0,
                                    );
                                }

                                // Fetching attendance data for the current semester
                                $attendance_query = "SELECT subject, attendance_status, session_type 
                                FROM attendance 
                                WHERE enrollment_no = '$enrollment_no' 
                                AND semester = '$current_semester'";

                                $attendance_result = mysqli_query($conn, $attendance_query);

                                while ($row = mysqli_fetch_assoc($attendance_result)) {
                                    $subject = $row['subject'];
                                    $attendance_status = $row['attendance_status'];
                                    $session_type = $row['session_type'];

                                    if ($session_type === 'Theory') {
                                        $subjects[$subject]['lecture_conducted']++;
                                        if ($attendance_status === 'Present') {
                                            $subjects[$subject]['lecture_attended']++;
                                        }
                                    } elseif ($session_type === 'Practical') {
                                        $subjects[$subject]['practical_conducted']++;
                                        if ($attendance_status === 'Present') {
                                            $subjects[$subject]['practical_attended']++;
                                        }
                                    } elseif ($session_type === 'Tutorial') {
                                        $subjects[$subject]['tutorial_conducted']++;
                                        if ($attendance_status === 'Present') {
                                            $subjects[$subject]['tutorial_attended']++;
                                        }
                                    }
                                }
                                mysqli_close($conn);
                                $total_lecture_conducted = 0;
                                $total_lecture_attended = 0;
                                $total_practical_conducted = 0;
                                $total_practical_attended = 0;
                                $total_tutorial_conducted = 0;
                                $total_tutorial_attended = 0;

                                foreach ($subjects as $subject => $data) {
                                    $lecture_conducted = $data['lecture_conducted'];
                                    $lecture_attended = $data['lecture_attended'];
                                    $practical_conducted = $data['practical_conducted'];
                                    $practical_attended = $data['practical_attended'];
                                    $tutorial_conducted = $data['tutorial_conducted'];
                                    $tutorial_attended = $data['tutorial_attended'];

                                    $total_lecture_attendance_percentage = $total_lecture_conducted > 0 ?
                                        number_format(($total_lecture_attended / $total_lecture_conducted) * 100, 2) : 'N/A';

                                    $total_practical_attendance_percentage = $total_practical_conducted > 0 ?
                                        number_format(($total_practical_attended / $total_practical_conducted) * 100, 2) : 'N/A';

                                    $total_tutorial_attendance_percentage = $total_tutorial_conducted > 0 ?
                                        number_format(($total_tutorial_attended / $total_tutorial_conducted) * 100, 2) : 'N/A';

                                    $total_components = 3;
                                    $tc = number_format($lecture_conducted + $practical_conducted + $tutorial_conducted);
                                    $ta = number_format($lecture_attended + $practical_attended + $tutorial_attended);
                                    echo "<br>";
                                    // echo "tc", $tc;
                                    // echo "ta", $ta;
                                    $tc = ($lecture_conducted + $practical_conducted + $tutorial_conducted); //tc=total conducted
                                    $ta = ($lecture_attended + $practical_attended + $tutorial_attended); //ta=total attended

                                    // Check if $tc is not zero before performing division
                                    $tp = ($tc > 0) ? number_format($ta * 100 / $tc, 2) : 'N/A'; //tp=total percentage

                                    // $allover_percent = (($lecture_conducted + $practical_conducted + $tutorial_conducted) * 100) / ($lecture_attended + $practical_attended + $tutorial_attended);
                                    // echo $allover_percent;
                                    // Convert string percentages to numeric values
                                    $lecture_percentage = floatval($total_lecture_attendance_percentage);
                                    $practical_percentage = floatval($total_practical_attendance_percentage);
                                    $tutorial_percentage = floatval($total_tutorial_attendance_percentage);
                                    // Calculate overall attendance percentage
                                    $o_attendance_percentage = number_format((($lecture_percentage + $practical_percentage + $tutorial_percentage) / $total_components), 2);

                                    echo "<tr>";
                                    echo "<td>$subject</td>";
                                    echo "<td>$lecture_conducted</td>";
                                    echo "<td>$lecture_attended</td>";
                                    echo "<td>$practical_conducted</td>";
                                    echo "<td>$practical_attended</td>";
                                    echo "<td>$tutorial_conducted</td>";
                                    echo "<td>$tutorial_attended</td>";
                                    if ($tp <= 75) {
                                        echo "<td class='text-danger'>$tp%</td>";
                                    } elseif ($tp > 75 && $tp <= 85) {
                                        echo "<td class='text-warning'>$tp%</td>";
                                    } else {
                                        echo "<td class='text-success'>$tp%</td>";
                                    }
                                    // echo "<td>$total_practical_attendance_percentage%</td>";
                                    // echo "<td>$total_tutorial_attendance_percentage%</td>";
                                    echo "</tr>";

                                    $total_lecture_conducted += $lecture_conducted;
                                    $total_lecture_attended += $lecture_attended;
                                    $total_practical_conducted += $practical_conducted;
                                    $total_practical_attended += $practical_attended;
                                    $total_tutorial_conducted += $tutorial_conducted;
                                    $total_tutorial_attended += $tutorial_attended;
                                }

                                $total_lecture_attendance_percentage = $total_lecture_conducted > 0 ?
                                    number_format(($total_lecture_attended / max(1, $total_lecture_conducted)) * 100, 2) : 'N/A';
                                $total_practical_attendance_percentage = $total_practical_conducted > 0 ?
                                    number_format(($total_practical_attended / max(1, $total_practical_conducted)) * 100, 2) : 'N/A';

                                $total_tutorial_attendance_percentage = $total_tutorial_conducted > 0 ?
                                    number_format(($total_tutorial_attended / max(1, $total_tutorial_conducted)) * 100, 2) : 'N/A';

                                $overall_p = 0;  // Initialize $overall_p with a default value
                                $denominator = $total_lecture_conducted + $total_practical_conducted + $total_tutorial_conducted;

                                // Check if the denominator is not zero before performing division
                                if ($denominator > 0) {
                                    $overall_p = number_format(($total_lecture_attended + $total_practical_attended + $total_tutorial_attended) * 100 / $denominator, 2);
                                }
                                // echo "overall p:", $overall_ p;

                                echo "<tr class='fw-bold'>";
                                echo "<td>TOTAL</td>";
                                echo "<td>$total_lecture_conducted</td>";
                                echo "<td>$total_lecture_attended</td>";
                                echo "<td>$total_practical_conducted</td>";
                                echo "<td>$total_practical_attended</td>";
                                echo "<td>$total_tutorial_conducted</td>";
                                // echo "<td>$total_lecture_attendance_percentage%</td>";
                                // echo "<td>$total_practical_attendance_percentage%</td>";
                                echo "<td>$total_tutorial_attended</td>";
                                if ($overall_p <= 75) {
                                    echo "<td class='text-danger blink-text'>$overall_p%</td>";
                                } elseif ($overall_p > 75 && $overall_p <= 85) {
                                    echo "<td class='text-warning'>$overall_p%</td>";
                                } else {
                                    echo "<td class='text-success'>$overall_p%</td>";
                                }
                                // echo "<td >$overall_p%</td>";
                                // echo "<td>$total_tutorial_attendance_percentage%</td>";
                                echo "</tr>";
                                echo "</tbody>";
                                echo "</table>";
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