<!-- Include the header.php file, which contains the common header section -->
<?php include 'header.php'; ?>

<!-- The main content of the page starts here -->
<main id="main" class="main">
  <!-- Page Title section -->
  <div class="pagetitle">
    <h1>Add Products</h1>
    <!-- Breadcrumbs navigation -->
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item">Add</li>
        <li class="breadcrumb-item active">Products</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <!-- Section to display the form for adding product information -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Product Information</h5>

            <!-- Vertical Form -->
            <form class="row g-3" method="post" action="process/product.php" enctype="multipart/form-data">
              <!-- Field to enter the product name -->
              <div class="col-12">
                <label for="inputNanme4" class="form-label">Product Name</label>
                <input type="text" name="product_name" class="form-control" id="inputNanme4" placeholder="Enter Product Name">
              </div>

              <!-- Field to enter the company name -->
              <div class="col-12">
                <label for="inputEmail4" class="form-label">Company name</label>
                <input type="text" name="company_name" class="form-control" id="inputEmail4" placeholder="Enter Company Name">
              </div>

              <!-- Field to enter the product price -->
              <div class="col-12">
                <label for="inputPassword4" class="form-label">Product Price</label>
                <input type="number" name="product_price" class="form-control" id="inputPassword4" placeholder="Enter Product Price">
              </div>

              <div class="col-12">
                <label for="inputNanme4" class="form-label">Product Category</label>
                <input type="radio" name="gender"  id="inputNanme4"  value="Male">Men</input>
                <input type="radio" name="gender"  id="inputNanme4" value="Female">Women</input>
              </div>

              <!-- Field to upload the product image -->
              <div class="col-12">
                <label for="inputAddress" class="form-label">Product Image</label>
                <input type="file" name="product_img" class="form-control" id="inputAddress">
              </div>

              <!-- Buttons to submit or reset the form -->
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

<!-- Include the footer.php file, which contains the common footer section -->
<?php include 'footer.php'; ?>