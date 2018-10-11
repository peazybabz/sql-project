<?php
require_once('includes/admin_db.php');
include('includes/headerforproducts.php');
include('includes/sidebar.php'); ?>
<section id="main-content">
		<section class="wrapper">
			<div class="container">
				<div class="row">
					<table class="table">
						<tr>
							<th>S.NO</th>
							<th>Item Name</th>
							<th>Price</th>
						</tr>

						<tr>
							<td>Item number</td>
							<td><a href="delcart.php?remove=">Remove</a> Item Name</td>
							<td>$1000</td>
						</tr>
					<tr>
						<td><strong>Total Price</strong></td>
						<td><strong>$1000</strong></td>
						<td><a href="#" class="btn btn-info">Proceed Payment</a></td>
					</tr>
					</table>
				</div>
			</div>
		</section>
</section>

<?php include('includes/footer.php'); ?>
