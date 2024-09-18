<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Teacher - Edit TimeTable</title>
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
                    <li class="nav-item">
                        <a class="nav-link " title="Attendance" aria-current="page" href="attendance.php">Attendance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" title="Attendance" aria-current="page" href="edit_timetable.php">Edit Timetable</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " title="Attendance" aria-current="page" href="view_attendance.php">View Attendance</a>
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
    <script>
        function logout() {
            window.location.href = "../index.php";
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>