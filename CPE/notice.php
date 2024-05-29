<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Page - Notice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
</head>

<body style="font-family: 'Poppins', sans-serif !important;">
    <nav class="navbar sticky-top navbar-expand-lg bg-primary bg-gradient ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="cropped-logo23.png" title="SSVPS" alt="Logo" width="60" height="50" class="d-inline-block object-fit-contain border rounded img-fluid"></img>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav fs-5">
                    <li class="nav-item">
                        <a class="nav-link" title="Timetable" href="timatable.php">Timetable</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" title="Attendance" href="attendence.php">Attendance</a>
                    </li>
                
                    <li class="nav-item">
                        <a class="nav-link" title="Submission Report" href="submission-report.php">Submission Report</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active" title="Notice" href="notice.php">Notice</a>
                    </li>
                </ul>
            </div>
            <form class="d-flex">
                <button  title="Profile" class="btn btn-outline-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
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

    <!-- Cards for Noticed Board -->
    <div class="container">
        <div class="card w-50 mb-3 shadow p-3 mb-5 bg-body-tertiary rounded mt-4 border border-light mx-auto p-2" style="width: 200px;">
            <div class="card-body">
                <h5 class="card-title border-bottom border-dark">[Complete Teacher's name as in Database ]</h5>
                <p class="card-text mt-3">[Notice]</p>
            </div>
        </div>
        <div class="card w-50 mb-3 shadow p-3 mb-5 bg-body-tertiary rounded mt-4 border border-light mx-auto p-2" style="width: 200px;">
            <div class="card-body">
                <h5 class="card-title border-bottom border-dark">Surekha Patil</h5>
                <p class="card-text mt-3">On 26th January 2024, College will remain closed on account of Republic Day</p>
            </div>
        </div>
        <div class="card w-50 mb-3 shadow p-3 mb-5 bg-body-tertiary rounded mt-4 border border-light mx-auto p-2" style="width: 200px;">
            <div class="card-body">
                <h5 class="card-title border-bottom border-dark">Nishad Patel</h5>
                <p class="card-text mt-3">As instructed today in a class room, all students are informed to submit the title of micro project of ETI 22618 by Saturday, 13 January 2024.
                    Only 5 micro-project topics per unit will be sanctioned.
                    The topic will be sanctioned on the FIRST COME FIRST SERVE basis.</p>
            </div>
        </div>
        <div class="card w-50 mb-3 shadow p-3 mb-5 bg-body-tertiary rounded mt-4 border border-light mx-auto p-2" style="width: 200px;">
            <div class="card-body">
                <h5 class="card-title border-bottom border-dark">Surekha Patil</h5>
                <p class="card-text mt-3">All Students are informed to report to their respective CPP guides and update the status of project, by tomorrow 12 PM</p>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>