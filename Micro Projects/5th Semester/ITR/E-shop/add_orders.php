<?php include 'header.php';
include("process\connection.php"); ?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Place Orders</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item">Add</li>
        <li class="breadcrumb-item active">Order</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">


      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Order Information</h5>

            <!-- Vertical Form -->
            <form class="row g-3" method="post" action="process/order.php">
              <div class="col-12">
                <label for="inputNanme4" class="form-label">Product Name</label>
                <select name="product_name" class="form-control" id="product_name">
                  <option>Select Product</option>
                  <?php

                  $querry = "Select id,product_name from product_info";
                  $result = mysqli_query($conn, $querry);
                  while ($row = mysqli_fetch_assoc($result)) {

                    ?>
                    <option value="<?php echo $row['product_name'] ?>"><?php echo $row['product_name'] ?></option>

                  <?php } ?>

                </select>
              </div>
              <div class="col-12">
                <label for="inputEmail4" class="form-label">Company name</label>
                <select name="company_name" class="form-control" onchange="getPrice(this.value)">
                  <option>Select Company</option>
                  <?php

                  $querry = "Select id,company_name from product_info GROUP BY company_name;";
                  $result = mysqli_query($conn, $querry);
                  while ($row = mysqli_fetch_assoc($result)) {

                    ?>
                    <option value="<?php echo $row['company_name'] ?>"><?php echo $row['company_name'] ?></option>

                  <?php } ?>

                </select>
              </div>
              <div class="col-12">
                <label for="inputPassword4" class="form-label">Product Price</label>
                <input type="number" name="product_price" class="form-control" id="p_price"
                  placeholder="Enter Product Price" readonly>
              </div>

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


<script type="text/javascript">
  function getPrice(c_name) {
    let p_name = $("#product_name option:selected").val();

    // alert(c_name);

    $.ajax({
      url: "ajax_call.php",
      type: "post",
      data: {
        p_name: p_name,
        c_name: c_name
      },
      success: function (data, status) {
        var product = JSON.parse(data);
        $('#p_price').val(product.product_price);
      }
    });

  }
</script>


<?php include 'footer.php'; ?>