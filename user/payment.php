<?php include 'includes\user_db.php'; ?>

<?php include 'includes\header.php'; ?>


<section class="wrapper">
  <p>
      <?php
          if (isset($_GET['status'])) {
            $success_message = $_GET['status'];

            echo $success_message;
          }
        ?>
  </p>

  <form name="payment_form" action="payment.php" method="POST" onsubmit="return validateForm()">
    <h1>Payment Details</h1>

    <div class="form-group">
      <label for="email">Email</label>
      <br>
      <input id="email" type="text" name="email" placeholder="Enter Your Email">

    </div>

    <div class="form-group">
      <label for="date_of_purchase">Date of Purchase</label>
      <br>
      <input id="date_of_purchase" type="text" name="date_of_purchase" placeholder="Enter Date Of Purchase">

    </div>

    <div class="form-group">
      <label for="credit card number">Credit Card Number</label>
      <br>
      <input id="credit_card_no" type="text" name="credit_card_no" placeholder="Enter Your Credit Card Number">

    </div>
    <span class="input-group-btn">
        <button class="btn btn-primary" type="submit" name="offer_payment">Offer Payment</button>
    </span>
    <span class="input-group-btn">
          <a href="index.php">Back to Dashboard</a>
    </span>
  </form>

</section>



<?php

    if (isset($_POST['offer_payment'])) {
      // code...
      $current_user = $_SESSION['username'];

      $user_email = mysqli_real_escape_string($connection, $_POST['email']);

      $user_credit_card_no = mysqli_real_escape_string($connection, $_POST['credit_card_no']);

      $user_date_of_purchase = mysqli_real_escape_string($connection, $_POST['date_of_purchase']);



      $first_query = "SELECT * FROM carts WHERE username = '{$current_user}'";

      $first_content_query = mysqli_query($connection, $first_query);

      while ($rows = mysqli_fetch_array($first_content_query)) {
        // code...
          $product_name = $rows['product_name'];
      }



      if ($user_email !=="" && $user_credit_card_no!=="" && $user_date_of_purchase!=="") {
        $orders_query = "INSERT INTO orders(product_name, order_date, buyer)
                  VALUES('{$product_name}', '{$user_date_of_purchase}', '{$current_user}')";

        $orders_table_query = mysqli_query($connection, $orders_query);

          $delete_query = "DELETE FROM carts WHERE username = '{$current_user}'";

          $complete_payment_query = mysqli_query($connection, $delete_query);
/*
          if ($complete_payment_query) {
            // code...
            echo "<p>Query Executed</p>";
          }
*/
          header("Location: payment.php?status=Payment Transaction Successful");

      }

    }


?>

<script type="text/javascript">

      function validateForm(){
        var x = document.forms["payment_form"]["email"].value;
      //  var y = document.forms["payment_form"]["date_of_purchase"].value;
      //  var z = document.forms["payment_form"]["credit_card_no"].value;

        if (x == "SELECT * FROM users" || x == "select * from users") {
          alert("SQL Injection Detected!!!");
          return false;
        }
      }

</script>
