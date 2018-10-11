<?php include 'includes\header.php'; ?>

<?php include 'includes\admin_db.php'; ?>

<?php //include 'includes\sidebar.php'; ?>

<section class="wrapper">
  <?php
      if (isset($_POST['add_product'])) {
        // code...
        //echo "<p>ADDING PRODUCT</p>";

        $new_product_name = mysqli_real_escape_string($connection, $_POST['product_name']);
        $new_product_quantity = mysqli_real_escape_string($connection, $_POST['qty']);
        $new_product_image = mysqli_real_escape_string($connection, $_POST['img']);
        $new_product_price = mysqli_real_escape_string($connection, $_POST['price']);

        if (isset($new_product_name) && isset($new_product_quantity) && isset($new_product_image) && isset($new_product_price)) {

          $query = "INSERT INTO products(product_name, qty, img, price)
                    VALUES('{$new_product_name}', '{$new_product_quantity}', '{$new_product_image}', '{$new_product_price}')";

          $insert_query = mysqli_query($connection, $query);


          echo "<div class='container-fluid'><div class='jumbotron'><p>NEW PRODUCT ADDED!</p></div></div><br />";
      
        }


      }

   ?>
</section>
