<?php
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
?>
