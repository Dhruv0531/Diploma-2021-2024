<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>RunOnSneaks</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="https://as2.ftcdn.net/v2/jpg/05/13/41/79/1000_F_513417977_gAVtfGelVnp6dvzkGE96NwZHnKcT6QpJ.jpg" rel="icon">
  <link href="assets_home/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets_home/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets_home/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets_home/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets_home/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets_home/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets_home/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets_home/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets_home/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto" style="text-transform: none;"><a href="index.php">RunOnSneaks</a></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li class="dropdown"><a href="#categories"><span>Categories</span></a>
            <ul><a class="nav-link scrollto" href="men.php">male</a>
                <a class="nav-link scrollto" href="women.php">female</a>
            </ul></li>
          <li><a class="getstarted scrollto" href="cart.php">My Cart(0)</a></li>
          <li><a class="getstarted scrollto" href="login.php">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
    <marquee style="color: white;">Independence Day Sale! 25% off on Nike Air Jordans</marquee>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Your Perfect Pair Awaits!</h1>
          <h2>Shop the Latest Trends in Footwear at our Online Shoe Store. Find Comfort, Style, and Quality in Every Step.</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#products" class="btn-get-started scrollto">Shop Now</a>
            <a href="https://youtu.be/FGEyII4nUO8" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="https://images.pexels.com/photos/6864642/pexels-photo-6864642.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid animated" alt="" style="border-radius: 30px;">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Products Section ======= -->
    <?php
// Start the session to access session data
session_start();

// Check if the user is not logged in and redirect to the login page
if (!isset($_SESSION['login_id'])) {
  header("Location: login.php");
}

// Disable error reporting to avoid displaying errors on the page
error_reporting(0);

// Include the header.php file, which contains the common header elements

?>

<main id="main" class="main">
  <!-- Page Title Section -->

  <section class="section">
    <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
           <!--  <h5 class="card-title">View Orders</h5>
 -->
            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">Sr.no</th>
                  <th scope="col">Product Name</th>
                  <th scope="col">Company Name</th>
                  <th scope="col">Product Price</th>
                  <th scope="col">Name</th>
                  <th scope="col">Mobile No</th>
                  <th scope="col">Address</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                // Get the login ID from the session
                $login_id = $_SESSION['login_id'];
                // Include the database connection file
                include("process\connection.php");
                $count = 1;
                // Check the user's role to determine the query
                if ($_SESSION['role_id'] == 0) {
                  $querry = "Select * from order_info";
                } else {
                  $querry = "Select * from order_info where order_by='$login_id'";
                }
                // Execute the query
                $result = mysqli_query($conn, $querry);
                // Loop through the results and display them in the table
                while ($row = mysqli_fetch_assoc($result)) {
                  $id = $row['id'];
                ?>
                  <tr>
                    <th scope="row">
                      <?php echo $count; ?>
                    </th>
                    <td>
                      <?php echo $row['product_name']; ?>
                    </td>
                    <td>
                      <?php echo $row['company_name']; ?>
                    </td>
                    <td>
                      <?php echo $row['product_price']; ?>
                    </td>
                    <td>
                      <?php echo $row['cust_name']; ?>
                    </td>
                    <td>
                      <?php echo $row['cust_mobile']; ?>
                    </td>
                    <td>
                      <?php echo $row['cust_address']; ?>
                    </td>
                    <td>
                      <!-- Edit Order Link -->
                      <a href="edit_orders.php?id=<?php echo $row['id']; ?>"><i class="bi bi-pencil-square"></i></a>
                      <!-- Order Status Link -->
                      <?php if ($_SESSION['role_id'] == 0) { ?>
                        <a href="" data-bs-toggle="modal" data-bs-target="#order_form"><i class="bi bi-send" title="Order Status"></i></a>
                      <?php } ?>
                      <!-- Delete Order Link -->
                      <a href="delete_orders.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this Order?')"><i class="bi bi-trash"></i></a>
                      <!-- Hidden input to store order ID for AJAX call -->
                      <input type="hidden" value="<?php echo $row['id']; ?>" id="cid">
                    </td>
                  </tr>
                <?php $count++;
                } ?>
              </tbody>
            </table>
            <!-- End Table with stripped rows -->
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <?php mysqli_close($conn); ?>
</main><!-- End #main -->



<!-- Order Status Modal -->
<div class="modal fade" id="order_form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Give Order Status</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Order Status</label>
            <select class="form-control" id="order_status" onchange="if(this.value=='Rejected'){$('#r_div').show();}else{$('#r_div').hide();}">
              <option>Select Status</option>
              <option value="Approved">Approve</option>
              <option value="Rejected">Reject</option>
            </select>
          </div>
          <div class="form-group" id="r_div" style="display: none;">
            <label for="message-text" class="col-form-label">Reason:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn  btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn  btn-primary" onclick="getOrder()">Send</button>
      </div>
    </div>
  </div>
</div>

<!-- AJAX script to handle the order status update -->
<script type="text/javascript">
  function getOrder() {
    let order_status = $("#order_status option:selected").val();
    let reason = $('#message-text').val();
    let cid = $('#cid').val();
    $.ajax({
      type: "POST",
      url: "ajax_call.php",
      data: {
        'order_status': order_status,
        'reason': reason,
        'cid': cid
      },
      dataType: "json",
      success: function(data) {
        $("#order_form").modal('hide');
        if (data == true) {
          alert("Order Status Added Successfully...");
        }
      }
    });
  }
</script>


    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3 style="text-transform: none;">RunOnSneaks</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Upto 20% OFF</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Free Shipping and Returns</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Secure online transactions</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">WishLists</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Join us on Social Media for easy updates about the products!!</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>RunOnSneaks</span></strong>. All Rights Reserved
      </div>

    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets_home/vendor/aos/aos.js"></script>
  <script src="assets_home/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets_home/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets_home/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets_home/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets_home/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets_home/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets_home/js/main.js"></script>

</body>

</html>