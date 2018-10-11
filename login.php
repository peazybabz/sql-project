<?php include 'includes\header.php'; ?>

<form name="login_form" method="POST" action="includes\userlogin.php" onsubmit="return validateForm()">
  <h1>Log In</h1>
  <div class="form-group">
    <label for="name">Name</label>
    <br>
    <input id="name" type="text" name="username" placeholder="Enter Your Name">

  </div>

  <div class="form-group">
    <label for="password">Password</label>
    <br>
    <input id="password" type="password" name="password" placeholder="Enter Your Password">

  </div>
  <span class="input-group-btn">
      <button class="btn btn-primary" type="submit" name="login">Log In</button>
  </span>
</form>


<script type="text/javascript">

      function validateForm(){
        var x = document.forms["login_form"]["username"].value;
      //  var y = document.forms["login_form"]["password"].value;

        if (x == "SELECT * FROM users" || x == "select * from users" ) {
          alert("SQL Injection Detected!!!");
          return false;
        }
      }

</script>

<?php include 'includes\footer.php'; ?>
