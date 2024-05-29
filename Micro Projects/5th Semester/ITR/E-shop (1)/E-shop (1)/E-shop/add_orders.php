<!-- Include the header.php file, which contains the common header section -->
<?php include 'header.php';

// Include the connection.php file to establish a database connection
include("process\connection.php");
?>

<!-- The main content of the page starts here -->
<main id="main" class="main">
  <!-- Page Title section -->
  <div class="pagetitle">
    <h1>Place Orders</h1>
    <!-- Breadcrumbs navigation -->
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item">Add</li>
        <li class="breadcrumb-item active">Order</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <!-- Section to display the form for placing orders -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Order Information</h5>

            <!-- Vertical Form -->
            <form class="row g-3" method="post" action="process/order.php">
              <!-- Dropdown to select the product name -->
              <div class="col-12">
                <label for="inputNanme4" class="form-label">Product Name</label>
                <select name="product_name" class="form-control" id="product_name">
                  <option>Select Product</option>
                  <?php
                  // Retrieve product names from the database and populate the dropdown
                  $query = "Select id, product_name from product_info";
                  $result = mysqli_query($conn, $query);
                  while ($row = mysqli_fetch_assoc($result)) {
                  ?>
                    <option value="<?php echo $row['product_name'] ?>"><?php echo $row['product_name'] ?></option>
                  <?php
                  }
                  ?>
                </select>
              </div>

              <!-- Dropdown to select the company name -->
              <div class="col-12">
                <label for="inputEmail4" class="form-label">Company name</label>
                <select name="company_name" class="form-control" onchange="getPrice(this.value)">
                  <option>Select Company</option>
                  <?php
                  // Retrieve company names from the database and populate the dropdown
                  $query = "Select id, company_name from product_info GROUP BY company_name;";
                  $result = mysqli_query($conn, $query);
                  while ($row = mysqli_fetch_assoc($result)) {
                  ?>
                    <option value="<?php echo $row['company_name'] ?>"><?php echo $row['company_name'] ?></option>
                  <?php
                  }
                  ?>
                </select>
              </div>

              <!-- Field to display the product price (read-only) -->
              <div class="col-12">
                <label for="inputPassword4" class="form-label">Product Price</label>
                <input type="number" name="product_price" class="form-control" id="p_price" placeholder="Enter Product Price" readonly>
              </div>

              <!-- Fields for customer information --> 
              <div class="col-12">
                <label for="cust_name" class="form-label">Name</label>
                <input type="text" name="cust_name" class="form-control" placeholder="Enter Your Name">
              </div>

              <div class="col-12">
                <label for="cust_mobile" class="form-label">Mobile Number</label>
                <input type="number" name="cust_mobile" class="form-control" placeholder="Enter Your Mobile Number">
              </div>

              <div class="col-12">
                <label for="cust_address" class="form-label">Address</label>
                <textarea name="cust_address" class="form-control" placeholder="Enter Your Address"></textarea>
              </div>

              <!-- Buttons to submit or reset the form -->
              <div class="text-center">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
              </div>
            
        </div>
      </div>
    </div>
  </section>
</main><!-- End #main -->

<!-- JavaScript code to fetch and display the product price based on selected product and company -->
<script type="text/javascript">
  function getPrice(c_name) {
    // Get the selected product name
    let p_name = $("#product_name option:selected").val();

    // Make an AJAX call to fetch the product price for the selected product and company
    $.ajax({
      url: "ajax_call.php",
      type: "post",
      data: {
        p_name: p_name,
        c_name: c_name
      },
      success: function(data, status) {
        // Parse the JSON response and set the product price in the corresponding input field
        var product = JSON.parse(data);
        $('#p_price').val(product.product_price);
      }
    });
  }
</script>

<!-- Include the footer.php file, which contains the common footer section -->
<?php include 'footer.php'; ?>