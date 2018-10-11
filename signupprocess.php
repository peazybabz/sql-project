<?php include 'includes\header.php'; ?>
<?php include 'includes\db.php'; ?>

  <?php

      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // code...

              // code...
              $new_username = mysqli_real_escape_string($connection, $_POST['new_username']);
              $new_userrole = mysqli_real_escape_string($connection, $_POST['new_userrole']);
              $new_useremail = mysqli_real_escape_string($connection, $_POST['new_useremail']);
            //  $new_user_credit_card_no = mysqli_real_escape_string($connection, $_POST['credit_card_no']);
              $new_user_password1 = mysqli_real_escape_string($connection, $_POST['new_user_password1']);
              $new_user_password2 = mysqli_real_escape_string($connection, $_POST['new_user_password2']);


              if (!isset($new_username) || $new_user_password1 !== $new_user_password2 || !isset($new_useremail) || !isset($new_userrole) ) {
                // code...
              //  echo "<p style='color:red;'>The information you entered is inconsistent, make sure your password entries match</p>";
                header("Location: signup.php");
              } else if (isset($new_username) && isset($new_userrole) && isset($new_useremail) && $new_user_password1 == $new_user_password2) {
                // code...
                $query = "INSERT INTO users(username, password, user_role, email)
                          VALUES('{$new_username}','{$new_user_password1}','{$new_userrole}', '{$new_useremail}')";

                $insert_query = mysqli_query($connection, $query);

                //echo "<p>YOU HAVE SUCCESSFULLY REGISTERED AS A USER!!!</p>";
                header("Location: login.php");
              }
            }



   ?>


<?php include 'includes\footer.php'; ?>
