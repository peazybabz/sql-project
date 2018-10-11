<?php include 'includes\header.php'; ?>

<?php include 'includes\db.php'; ?>

<div class="slider">

	<div class="auto-slider">

		<ul class="auto-slider_content">

			<li><img src="img/u.jpeg"  width="750" height="500"></li>


			<li><img src="img/p.jpeg"  width="750" height="500"></li>


			<li><img src="img/11.jpg"  width="750" height="500"></li>
		</ul>

	</div>
	<div class="slider-text">
		<h1>Latest Fashion<br>Collection</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing <br>elit, sed do eiusmod
		</p>
		<a href="#">Explore</a>

		</div>




</div>




<div class="About">
	<h2>About Us</h2>
	<p>You are at the right place! Here you can fulfil your shopping dreams!!!<br>online fashion retailer offering thousands of styles across womenwear and menwear<br> so that you stay ahead of the trends</p>

	</div>

</div>
<div class="products">
	<div class="container">
		<div class="heading">
			<h2>Latest Products</h2>
			<p>Everything That's New</p>

		</div>
		<div class="product-item">


<!--
		<div class="item">
			<div class="item-img">
				<img src="img/a.jpg">
				<div class="item-button">
					<input type="button" name="Add To Cart" value="Add To Cart">
					<a href="img/a.jpg"><input type="button" name="Quick View" value="Quick View"></a>


				</div>

			</div>
			<div class="item-title">
				<h5>Fashy Dresses</h5>
				<p><del>$150.00</del>  $135.00</p>

			</div>

		</div>

		<div class="item">
			<div class="item-img">
				<img src="img/b.jpg">
				<div class="item-button">
					<input type="button" name="Add To Cart" value="Add To Cart">
					<a href="img/b.jpg"><input type="button" name="Quick View" value="Quick View"></a>


				</div>

			</div>
			<div class="item-title">
				<h5>Classy Dress</h5>
				<p><del>$90.00</del>  $75.00</p>

			</div>

		</div>

		<div class="item">
			<div class="item-img">
				<img src="img/2.jpg">
				<div class="item-button">
					<input type="button" name="Add To Cart" value="Add To Cart">
					<a href="img/2.jpg"><input type="button" name="Quick View" value="Quick View"></a>


				</div>

			</div>
			<div class="item-title">
				<h5>Suit Jacket</h5>
				<p><del>$132.00</del>  $115.00</p>

			</div>

		</div>

		<div class="item">
			<div class="item-img">
				<img src="img/6.jpg">
				<div class="item-button">
					<input type="button" name="Add To Cart" value="Add To Cart">
					<a href="img/6.jpg"><input type="button" name="Quick View" value="Quick View"></a>


				</div>

			</div>
			<div class="item-title">
				<h5>New Brand Fashion Blazer</h5>
				<p><del>$120.00</del>  $105.00</p>

			</div>

		</div>

		<div class="item">
			<div class="item-img">
				<img src="img/c.jpg">
				<div class="item-button">
					<input type="button" name="Add To Cart" value="Add To Cart">
					<a href="img/c.jpg"><input type="button" name="Quick View" value="Quick View"></a>


				</div>

			</div>
			<div class="item-title">
				<h5>Fab-Classy Dress</h5>
				<p><del>$90.00</del>  $75.00</p>

			</div>

		</div>

		<div class="item">
			<div class="item-img">
				<img src="img/8.jpg">
				<div class="item-button">
					<input type="button" name="Add To Cart" value="Add To Cart">
					<a href="img/8.jpg"><input type="button" name="Quick View" value="Quick View"></a>


				</div>

			</div>
			<div class="item-title">
				<h5>SummerFresh Dress</h5>
				<p><del>$120.00</del>  $105.00</p>

			</div>

		</div>

		<div class="item">
			<div class="item-img">
				<img src="img/0.jpg">
				<div class="item-button">
					<input type="button" name="Add To Cart" value="Add To Cart">
					<a href="img/0.jpg"><input type="button" name="Quick View" value="Quick View"></a>


				</div>

			</div>
			<div class="item-title">
				<h5>Relax-Fit Wear</h5>
				<p><del>$120.00</del>  $105.00</p>

			</div>

		</div>

		<div class="item">
			<div class="item-img">
				<img src="img/j.jpg">
				<div class="item-button">
					<input type="button" name="Add To Cart" value="Add To Cart">
					<a href="img/j.jpg"><input type="button" name="Quick View" value="Quick View"></a>


				</div>

			</div>
			<div class="item-title">
				<h5>Fashy Dresses</h5>
				<p><del>$120.00</del>  $105.00</p>

			</div>

		</div>


-->

<?php

	$query = "SELECT * FROM products LIMIT 4";

	$select_products_query = mysqli_query($connection, $query);

	while($row = mysqli_fetch_array($select_products_query)){
		echo "<div class='item'>";
		echo	"<div class='item-img'>";
		echo "<img src='"."img/".$row['img']. "'>";
		echo "<div class='item-button'>";
		//echo "<input type='button' name='Add to Cart' value='Add to Cart'>";
		echo "<a href='img/{$row['img']}'><input type='button' name='Quick View' value='Quick View'></a>";
		echo "</div>";
		echo "</div>";
		echo "<div class='item-title'>";
		echo "<h5>".$row['product_name']. "</h5>";
		echo "<p>".$row['price']." Dollars</p>";
		echo "</div>";
		echo "</div>";
	}

 ?>


		</div>
		<div class="viewall-button">
			<a href="products.php">View all Items</a>

		</div>

	</div>

</div>

<?php include 'includes\footer.php'; ?>
