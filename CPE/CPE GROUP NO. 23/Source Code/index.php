<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
</head>

<body style="font-family: 'Poppins', sans-serif !important;">
  <?php include("process/connection.php"); ?>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow">
          <div class="card-header d-flex align-items-center">
            <img src="cropped-logo23.png" alt="Logo" title="SSVPS" width="50" height="35" class="d-inline-block object-fit-contain border rounded img-fluid">
            <h3 class="mt-3 ms-2">Login</h3>
          </div>
          <div class="card-body">
            <form novalidate method="post" action="process/login.php" autocomplete="off">
              <div class="mb-3">
                <label for="username" class="form-label">Enrollment No. / Teacher's ID</label>
                <input type="text" name="username" class="form-control" id="username" placeholder="Enter Enrollment No. / Teacher's ID" autocomplete="off">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
              </div>
              <button class="w-100 btn btn-lg btn-primary" name="login" type="submit">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html> 