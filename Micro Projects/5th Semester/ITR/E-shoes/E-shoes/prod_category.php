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
            <ul>
              <li><a class="nav-link scrollto" href="prod_category.php?g=Men">Men</a></li>
              <li><a class="nav-link scrollto" href="prod_category.php?g=Women">Women</a></li>
            </ul>
          </li>
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
    <section id="products" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Categories</h2>
               <!-- start links -->
               <div class="row">
                    <!-- start links -->
                    <div class="filtering col-sm-12 text-center">
                         <a href="prod_category.php?g=''" target="_self"><span data-filter='*' class="active">View All</span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="prod_category.php?g=Men" target="_self"><span data-filter='*' class="active">Men</span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       <a href="prod_category.php?g=Women"><span data-filter='*' class="active">Female</span></a>
                        
                    </div>
                    <!-- end links -->
                </div>
         </div>
          <p>Your one-stop destination for a diverse and captivating range of footwear. We take pride in offering an
            extensive collection of shoes designed to cater to all ages, genders, and tastes. Here's a glimpse of the
            products we provide</p>
        </div>

        <div class="row">


          <?php

          $category = $_GET['g'];
          include("process\connection.php");
          if($category=="Men")
          {
            $querry = "Select * from product_info Where   product_categories='Men'";
          }
          else if($category=="Women"){
            $querry = "Select * from product_info Where   product_categories='Women'";
          }
          else{
            $querry = "Select * from product_info";
          }
          
          $result = mysqli_query($conn, $querry);
          while ($row = mysqli_fetch_assoc($result)) {

          ?>
            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100" style="margin-bottom: 20px;">
              <a href="add_orders.php">
                <div class="member d-flex align-items-start">
                  <div class="pic"><img src="./assets/product/<?php echo $row['product_img']; ?>" class="img-fluid" alt="" style="height: 100px;width: 100px;"></div>
                  <div class="member-info">
                    <h4>
                      <?php echo $row['product_name']; ?>
                    </h4>
                    <p>Brand :
                      <?php echo $row['company_name']; ?>
                    </p>
                    <p> Price :
                      <?php echo $row['product_price']; ?> Rs
                    </p>
                    <p> Product Categories :
                      Women
                    </p>
                  </div>
                </div>
              </a>
            </div>
          <?php } ?>


        </div>

      </div>
    </section><!-- End Products Section -->

    

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

 