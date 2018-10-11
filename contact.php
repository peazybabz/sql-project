<?php include 'includes\header.php'; ?>

<div class="contact">
	<form name="contact_form" onsubmit="return validateForm()">
		<h1>Contact Us</h1>
		<div class="form-group">
			<label for="name">Name</label>
			<br>
			<input id="name" type="text" name="username" placeholder="Enter Your Name">

		</div>

		<div class="form-group">
			<label for="email">Email</label>
			<br>
			<input id="email" type="email" name="email" placeholder="Enter Your Email">

		</div>

		<div class="form-group">
			<label for="phone">Phone</label>
			<br>
			<input id="phone" type="phone" name="phone" placeholder="Enter Your Number">

		</div>

		<div class="form-group">
			<label for="message">Message</label>
			<br>
			<textarea id="message" style="width: 100%; height: 100px;" name="message">

			</textarea>

		</div>
		<input type="submit" >
	</form>
</div>

<script type="text/javascript">

      function validateForm(){
        var w = document.forms["contact_form"]["username"].value;
//        var x = document.forms["contact_form"]["password"].value;
//				var z = document.forms["contact_form"]["message"].value;

        if (w == "SELECT * FROM users" || w == "select * from users") {
          alert("SQL Injection Detected!!!");
          return false;
        }
      }

</script>

<?php include 'includes\footer.php'; ?>
