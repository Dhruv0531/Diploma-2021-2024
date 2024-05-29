<?php
// Include the header file that contains common header code
include 'header.php';

// Include the connection file to establish a database connection
include("process\connection.php");

// Get the 'id' parameter from the URL using $_GET
$id = $_GET['id'];

// Query to retrieve order information for the given id
$querry = "SELECT * FROM order_info WHERE id='$id'";

// Execute the query and store the result in $result
$result = mysqli_query($conn, $querry) or die('Query Failed..');

// Fetch the order information from the $result and store it in $order_info as an associative array
$order_info = mysqli_fetch_assoc($result);

// Store the id from the fetched order information in $id variable
$id = $order_info['id'];
?>

<!-- The following code represents the main content of the page -->
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Place Orders</h1>
    <!-- Breadcrumb navigation -->
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item">Edit</li>
        <li class="breadcrumb-item active">Order</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <!-- Section containing the order information form -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Order Information</h5>

            <!-- Vertical Form -->
            <!-- The form will submit to 'process/update_order.php' with the specific order id as a URL parameter -->
            <form class="row g-3" method="post" action="process/update_order.php?id=<?php echo $order_info['id']; ?>">
              <div class="col-12">
                <label for="inputNanme4" class="form-label">Product Name</label>
                <!-- Dropdown to select product name -->
                <select name="product_name" class="form-control" id="product_name">
                  <option>Select Product</option>
                  <!-- Loop through the list of products and populate the dropdown options -->
                  <?php
                  $querry = "SELECT id, product_name FROM product_info";
                  $result = mysqli_query($conn, $querry);
                  while ($row = mysqli_fetch_assoc($result)) {
                  ?>
                    <option value="<?php echo $row['product_name'] ?>" <?php if ($order_info['product_name'] == $row['product_name']) echo "selected"; ?>>
                      <?php echo $row['product_name'] ?>
                    </option>
                  <?php } ?>
                </select>
              </div>
              <!-- ... (similarly, code for other form fields) ... -->
              <div class="text-center">
                <button type="submit" name="update" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
              </div>
            </form><!-- Vertical Form -->
          </div>
        </div>
      </div>
    </div>
  </section>
</main><!-- End #main -->

<!-- Script to update product price based on selected company and product name -->
<script type="text/javascript">
  function getPrice(c_name) {
    let p_name = $("#product_name option:selected").val();

    // Make an AJAX call to retrieve the product price based on selected company and product name
    $.ajax({
      url: "ajax_call.php",
      type: "post",
      data: {
        p_name: p_name,
        c_name: c_name
      },
      success: function(data, status) {
        var product = JSON.parse(data);
        $('#p_price').val(product.product_price);
      }
    });
  }
</script>

<?php
// Include the footer file that contains common footer code
include 'footer.php';
?>