<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php
    include("connection.php");
    session_start();

    if (isset($_SESSION["username"])) {
        $enrollment_no = $_SESSION["username"];

        // Fetch details from the stud_details table using enrollment_no
        $query = "SELECT * FROM stud_details WHERE enrollment_no = '$enrollment_no'";
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $studentDetails = mysqli_fetch_assoc($result);

            echo "<div class='container text-dark fs-5'>";
            echo "<p><strong>Roll No:</strong> " . $studentDetails['roll_no'] . "</p>";
            echo "<p><strong>Name: </strong>" .  ucwords(strtolower($studentDetails['name'])) .  "</p>";
            echo "<p><strong>Enrollment No:</strong> $enrollment_no</p>";
            echo "<p><strong>Branch: </strong>" . $studentDetails['branch'] . "</p>";
            echo "<p><strong>Semester: </strong>" . $studentDetails['semester'] . "</p>";
            echo "<p><strong>Scheme: </strong>" . $studentDetails['scheme'] . "</p>";
            echo "<p><strong>Division: </strong>" . $studentDetails['division'] . "</p>";
            echo "<p><strong>Admit Year: </strong>" . $studentDetails['admit_year'] . "</p>";
            echo "</div>";
        } else {
            echo "Student details not found.";
        }
    } else {
        header("Location: index.php");
        exit();
    }
    ?>

    <div class="container">
        <button type="button" title="Logout" class="btn btn-lg btn-outline-danger" onclick="logout()">Logout</button>
    </div>

    <script>
        function logout() {
            window.location.href = "./index.php";
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>