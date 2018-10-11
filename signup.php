<?php include 'includes\header.php'; ?>

<form name="signup_form" method="POST" action="signupprocess.php" onsubmit="return validateForm()">;
  <h1>Sign Up</h1>
  <div class="form-group">
    <label for="name">Name</label>
    <br>
    <input id="name" type="text" name="new_username" placeholder="Enter Your Name">

  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <br>
    <input id="name" type="email" name="new_useremail" placeholder="Enter Your Email">

  </div>

  <div class="form-group">
    <label for="Role">Role</label>
    <br>
    <input id="name" type="text" name="new_userrole" placeholder="Enter Your Role">

  </div>
<!--
  <div class="form-group">
    <label for="Credit Card Number">Credict Card Number</label>
    <br>
    <input id="name" type="number" name="credit_card_no" placeholder="Enter Your Credit Card Number">

  </div>
-->
  <div class="form-group">
    <label for="password">Password</label>
    <br>
    <input id="password" type="password" name="new_user_password1" placeholder="Enter Your Password">

  </div>
  <div class="form-group">
    <label for="password">Confirm Password</label>
    <br>
    <input id="password" type="password" name="new_user_password2" placeholder="Re-enter Your Password">

  </div>

  <span class="input-group-btn">
      <button class="btn btn-primary" type="submit" name="signup">Sign Up</button>
  </span>
</form>

<script type="text/javascript">

      function validateForm(){
        var x = document.forms["signup_form"]["new_username"].value;
//        var y = document.forms["signup_form"]["new_user_password1"].value;
//        var z = document.forms["signup_form"]["new_user_password2"].value;

        if (x == "SELECT * FROM users" || x == "select * from users") {
          alert("SQL Injection Detected!!!");
          return false;
        }
      }

</script>

<?php include 'includes\footer.php' ?>
