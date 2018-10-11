<?php
/*
	session_start();

	if(isset($_GET['id']) & !empty($_GET['id'])){
		if(isset($_SESSION['cart']) & !empty($_SESSION['cart'])){

			$items = $_SESSION['cart'];
			$cartitems = explode(",", $items);
			if(in_array($_GET['id'], $cartitems)){
				header('location: index.php?status=incart');
			}else{
				$items .= "," . $_GET['id'];
				$_SESSION['cart'] = $items;
				header('location: index.php?status=success');

			}

		}else{
			$items = $_GET['id'];
			$_SESSION['cart'] = $items;
			header('location: index.php?status=success');
		}

	}else{
		header('location: index.php?status=failed');
	}
	*/

		include 'includes\headerforproducts.php';

		include 'includes\user_db.php';

		include 'includes\sidebar.php';

?>
	<section class="wrapper">
			<?php
			if (isset($_GET['add'])) {
				// code...
				//echo $_GET['add'];

				$the_product_id = $_GET['add'];

				$products_query = "SELECT * FROM products WHERE product_id = {$the_product_id}";

				$products_info_query = mysqli_query($connection, $products_query);

				while ($product_row = mysqli_fetch_array($products_info_query)) {
					// code...

					$cart_product_price = $product_row['price'];
					$cart_product_name = $product_row['product_name'];

					$cart_user_name = $_SESSION['username'];
/*
					echo $cart_user_name;
					echo $cart_product_name;
					echo $cart_product_price;
*/
					$carts_query = "INSERT INTO carts(product_price, product_name, username)
										VALUES('{$cart_product_price}', '{$cart_product_name}', '{$cart_user_name}')";

					$addtocart_query = mysqli_query($connection, $carts_query);

					header("Location: index.php?status=add to cart successful");

				}






			}

			 ?>
	</section>
