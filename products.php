<?php include 'includes\header.php'; ?>

<?php include 'includes\db.php'; ?>

<div class="product">
	<h4>PRODUCTS</h4>
<!--
	<div class="item">
			<div class="item-img">
				<img src="img/cc.jpg">
				<div class="item-button">
					<input type="button" name="Add To Cart" value="Add To Cart">
					<a href="img/cc.jpg"><input type="button" name="Quick View" value="Quick View"></a>


				</div>

			</div>
			<div class="item-title">
				<h5>Novelty Blouse 2018</h5>
				<p><del>$150.00</del>  $135.00</p>

			</div>

	</div>

	<div class="item">
			<div class="item-img">
				<img src="ii.jpg">
				<div class="item-button">
					<input type="button" name="Add To Cart" value="Add To Cart">
					<a href="ii.jpg"><input type="button" name="Quick View" value="Quick View"></a>


				</div>

			</div>
			<div class="item-title">
				<h5>New Arrival Blouse 2018</h5>
				<p><del>$90.00</del>  $85.00</p>

			</div>

	</div>

	<div class="item">
			<div class="item-img">
				<img src="uu.jpg">
				<div class="item-button">
					<input type="button" name="Add To Cart" value="Add To Cart">
					<a href="uu.jpg"><input type="button" name="Quick View" value="Quick View"></a>


				</div>

			</div>
			<div class="item-title">
				<h5>New Arrival Blouse 2018</h5>
				<p><del>$90.00</del>  $85.00</p>

			</div>

	</div>

	<div class="item">
			<div class="item-img">
				<img src="jj.jpg">
				<div class="item-button">
					<input type="button" name="Add To Cart" value="Add To Cart">
					<a href="jj.jpg"><input type="button" name="Quick View" value="Quick View"></a>


				</div>

			</div>
			<div class="item-title">
				<h5>New Arrival Beach Blouse 2018</h5>
				<p><del>$70.00</del>  $65.00</p>

			</div>

	</div>

	<div class="item">
			<div class="item-img">
				<img src="gg.jpg">
				<div class="item-button">
					<input type="button" name="Add To Cart" value="Add To Cart">
					<a href="gg.jpg"><input type="button" name="Quick View" value="Quick View"></a>


				</div>

			</div>
			<div class="item-title">
				<h5>New Arrival Blouse 2018</h5>
				<p><del>$90.00</del>  $75.00</p>

			</div>

	</div>

	<div class="item">
			<div class="item-img">
				<img src="kk.jpg">
				<div class="item-button">
					<input type="button" name="Add To Cart" value="Add To Cart">
					<a href="kk.jpg"><input type="button" name="Quick View" value="Quick View"></a>


				</div>

			</div>
			<div class="item-title">
				<h5>New Arrival Blouse 2018</h5>
				<p><del>$90.00</del>  $85.00</p>

			</div>

	</div>

	<div class="item">
			<div class="item-img">
				<img src="nn.jpg">
				<div class="item-button">
					<input type="button" name="Add To Cart" value="Add To Cart">
					<a href="nn.jpg"><input type="button" name="Quick View" value="Quick View"></a>


				</div>

			</div>
			<div class="item-title">
				<h5>New Arrival Suit 2018</h5>
				<p><del>$95.00</del>  $85.00</p>

			</div>

	</div>
	<div class="item">
			<div class="item-img">
				<img src="n.jpg">
				<div class="item-button">
					<input type="button" name="Add To Cart" value="Add To Cart">
					<a href="n.jpg"><input type="button" name="Quick View" value="Quick View"></a>


				</div>

			</div>
			<div class="item-title">
				<h5>New Arrival Jean For Men </h5>
				<p><del>$80.00</del>  $74.00</p>

			</div>

	</div>
	<div class="item">
			<div class="item-img">
				<img src="v.jpg">
				<div class="item-button">
					<input type="button" name="Add To Cart" value="Add To Cart">
					<a href="v.jpg"><input type="button" name="Quick View" value="Quick View"></a>


				</div>

			</div>
			<div class="item-title">
				<h5>New Arrival Jeans</h5>
				<p><del>$90.00</del>  $85.00</p>

			</div>

	</div>

	<div class="item">
			<div class="item-img">
				<img src="vv.jpg">
				<div class="item-button">
					<input type="button" name="Add To Cart" value="Add To Cart">
					<a href="vv.jpg"><input type="button" name="Quick View" value="Quick View"></a>


				</div>

			</div>
			<div class="item-title">
				<h5>New Arrival Jacket 2018</h5>
				<p><del>$90.00</del>  $85.00</p>

			</div>

	</div>
	<div class="item">
			<div class="item-img">
				<img src="h.jpg">
				<div class="item-button">
					<input type="button" name="Add To Cart" value="Add To Cart">
					<a href="h.jpg"><input type="button" name="Quick View" value="Quick View"></a>


				</div>

			</div>
			<div class="item-title">
				<h5>New Arrival BlouseJacket 2018</h5>
				<p><del>$70.00</del>  $55.00</p>

			</div>

	</div>

	<div class="item">
			<div class="item-img">
				<img src="bb.jpg">
				<div class="item-button">
					<input type="button" name="Add To Cart" value="Add To Cart">
					<a href="bb.jpg"><input type="button" name="Quick View" value="Quick View"></a>


				</div>

			</div>
	</div>
-->

	<?php

		$query = "SELECT * FROM products";

		$select_products_query = mysqli_query($connection, $query);

		while($row = mysqli_fetch_array($select_products_query)){
			echo "<div class='item'>";
			echo	"<div class='item-img'>";
			echo "<img src='"."img/".$row['img']. "'>";
			echo "<div class='item-button'>";
//			echo "<input type='button' name='Add to Cart' value='Add to Cart'>";
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

<?php include 'includes\footer.php'; ?>
