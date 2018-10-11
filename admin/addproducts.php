<?php include 'includes\header.php'; ?>

<?php include 'includes\admin_db.php'; ?>

<?php include 'includes\sidebar.php'; ?>

<section class="wrapper">

  <p>
      <?php
          if (isset($_GET['status'])) {
            $success_message = $_GET['status'];

            echo $success_message;
          }
        ?>
  </p>

  <form method="POST" action="addproductsprocess.php" name="addproduct_form"  onsubmit="return validateForm()">
    <h1>Add a Product</h1>
    <div class="form-group">
      <label for="Product name">Product Name</label>
      <br>
      <input id="product_name" type="text" name="product_name" placeholder="Enter Product Name">

    </div>

    <div class="form-group">
      <label for="Quantity">Quantity</label>
      <br>
      <input id="qty" type="number" name="qty" placeholder="Enter Quantity">

    </div>

    <div class="form-group">
      <label for="Image">Image</label>
      <br>
      <input id="img" type="text" name="img" placeholder="Enter Image Name">

    </div>

    <div class="form-group">
      <label for="Price">Price</label>
      <br>
      <input id="price" type="number" name="price" placeholder="Enter Product Price">

    </div>

    <span class="input-group-btn">
        <button class="btn btn-primary" type="submit" name="add_product">Add Product</button>
    </span>
  </form>
</section>

<script type="text/javascript">

      function validateForm(){
        var w = document.forms["addproduct_form"]["product_name"].value;
      //  var x = document.forms["addproduct_form"]["qty"].value;
      //  var y = document.forms["addproduct_form"]["img"].value;
			//	var z = document.forms["addproduct_form"]["price"].value;

        if (w == "SELECT * FROM users" || w == "select * from users") {
          alert("SQL Injection Detected!!!");
          return false;
        }
      }

</script>
