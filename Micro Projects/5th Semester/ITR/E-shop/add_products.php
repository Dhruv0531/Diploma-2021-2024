<?php include 'header.php'; ?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Add Products</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item">Add</li>
        <li class="breadcrumb-item active">Products</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">


      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Product Information</h5>

            <!-- Vertical Form -->
            <form class="row g-3" method="post" action="process/product.php" enctype="multipart/form-data">
              <div class="col-12">
                <label for="inputNanme4" class="form-label">Product Name</label>
                <input type="text" name="product_name" class="form-control" id="inputNanme4"
                  placeholder="Enter Product Name">
              </div>
              <div class="col-12">
                <label for="inputEmail4" class="form-label">Company name</label>
                <input type="text" name="company_name" class="form-control" id="inputEmail4"
                  placeholder="Enter Company Name">
              </div>
              <div class="col-12">
                <label for="inputPassword4" class="form-label">Product Price</label>
                <input type="number" name="product_price" class="form-control" id="inputPassword4"
                  placeholder="Enter Product Price">
              </div>
              <div class="col-12">
                <label for="inputAddress" class="form-label">Product Image</label>
                <input type="file" name="product_img" class="form-control" id="inputAddress">
              </div>
              <div class="text-center">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
              </div>
            </form><!-- Vertical Form -->

          </div>
        </div>



      </div>
    </div>
  </section>

</main><!-- End #main -->


<?php include 'footer.php'; ?>