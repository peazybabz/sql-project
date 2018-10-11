<?php


include 'includes\header.php';

include 'includes\admin_db.php';


 ?>


<section class="wrapper">
	<?php



			if (isset($_SESSION['username'])) {
				// code...

        //echo $_SESSION['username'];

				$current_user = $_SESSION['username'];
				$query = "SELECT * FROM orders";

				$orders_query = mysqli_query($connection, $query);

        //echo $orders_query;

				echo "<div class='container'>";
					echo "<h2>All Orders</h2>";
					echo "<table class='table table-bordered'>";
						echo "<thead>";
								echo "<tr>";

									echo "<th>Product Name</th>";
									echo "<th>Order date</th>";
                  echo "<th>Buyer</th>";

								echo "</tr>";
							echo "</thead>";
							echo "<tbody>";

					while ($rows = mysqli_fetch_array($orders_query)) {
						// code...

						echo "<tr>";
						echo "<td>";
							echo $rows['product_name'];
						echo "</td>";

						echo "<td>";
							echo $rows['order_date'];
						echo "</td>";

            echo "<td>";
							echo $rows['buyer'];
						echo "</td>";

						echo "</tr>";

					}


			}



	 ?>

</section>
