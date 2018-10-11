<?php
include 'includes\user_db.php';

include 'includes\header.php';


 ?>


<section class="wrapper">
	<?php



			if (isset($_SESSION['username'])) {
				// code...
				$current_user = $_SESSION['username'];
				$query = "SELECT * FROM carts WHERE username = '{$current_user}'";

				$cart_content_query = mysqli_query($connection, $query);

				echo "<div class='container'>";
					echo "<h2>Your Cart Content</h2>";
					echo "<table class='table table-bordered'>";
						echo "<thead>";
								echo "<tr>";

									echo "<th>Product Name</th>";
									echo "<th>Product Price</th>";


								echo "</tr>";
							echo "</thead>";
							echo "<tbody>";
              $total_price = 0;
					while ($rows = mysqli_fetch_array($cart_content_query)) {
						// code...

						echo "<tr>";
						echo "<td>";
							echo $rows['product_name'];
						echo "</td>";

						echo "<td>";
							echo $rows['product_price'];
						echo "</td>";


						echo "</tr>";
							$total_price += $rows['product_price'];
					}

					echo "<tr>";
								echo "<td>TOTAL PRICE: {$total_price}</td>";
								echo "<td><a href='payment.php'>Proceed to Payment</a></td>";
					echo "</tr>";
			}



	 ?>

</section>
