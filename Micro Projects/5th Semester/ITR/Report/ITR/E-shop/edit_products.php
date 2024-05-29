<?php include 'header.php'; ?>

<?php
// Include the connection file to establish a database connection
include('process\connection.php');

// Get the 'id' parameter from the URL using $_GET
$id = $_GET['id'];

// Query to retrieve product information for the given id
$querry = "SELECT * FROM product_info WHERE id='$id'";

// Execute the query and store the result in $result
$result = mysqli_query($conn, $querry) or die('Query Failed..');

// Fetch the product information from the $result and store it in $row as an associative array
$row = mysqli_fetch_assoc($result);

// Store the id from the fetched product information in $id variable
$id = $row['id'];
?>

<main id="main" class="main">
  <div class="pagetitle">
    <h1>Edit Products</h1>
    <!-- Breadcrumb navigation -->
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item">Edit</li>
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
            <!-- The form will submit to 'process/edit_prod.php' with the specific product id as a URL parameter and enctype set to support file uploads -->
            <form class="row g-3" method="post" action="process/edit_prod.php?id=<?php echo $id; ?>"
              enctype="multipart/form-data">
              <div class="col-12">
                <label for="inputNanme4" class="form-label">Product Name</label>
                <input type="text" name="product_name" class="form-control" id="inputNanme4"
                  placeholder="Enter Product Name" value="<?php echo $row['product_name']; ?>">
              </div>
              <div class="col-12">
                <label for="inputEmail4" class="form-label">Company name</label>
                <input type="text" name="company_name" class="form-control" id="inputEmail4"
                  placeholder="Enter Company Name" value="<?php echo $row['company_name']; ?>">
              </div>
              <div class="col-12">
                <label for="inputPassword4" class="form-label">Product Price</label>
                <input type="number" name="product_price" class="form-control" id="inputPassword4"
                  placeholder="Enter Product Price" value="<?php echo $row['product_price']; ?>">
              </div>
              <div class="col-12">
                <label for="inputAddress" class="form-label">Product Image</label>
                <!-- Input field to upload a new product image -->
                <input type="file" name="new_product_img" class="form-control" id="inputAddress"><br>

                <!-- Display the current product image -->
                <img src="./assets/product/<?php echo $row['product_img']; ?>" height="150px">

                <!-- Store the name of the old product image in a hidden input field -->
                <input type="hidden" name="old-image" value="<?php echo $row['product_img']; ?>">
              </div>
              <div class="text-center">
                <button type="submit" name="update" class="btn btn-primary">Update</button>
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
