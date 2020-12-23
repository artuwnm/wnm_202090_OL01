<?php
	include_once "lib/php/functions.php";
	$cart = $_SESSION['cart'];

	switch ($_GET['action']) {

		case 'add-to-cart':

			$product = makeQuery(makeConn(),"SELECT * FROM products WHERE `id`=".$_POST['product_id'])[0];

			addToCart($_POST['product_id'],$_POST['product_size'],$_POST['product_color'],$_POST['product_quantity']);
			
			header("location:item_added_confirmation.php?id={$_POST['product_id']}");
			break;

		case 'update-cart-item':

			$p = cartItemById($_POST['id']);
			$p->quantity = $_POST['amount'];

			header("location:shopping_cart.php");
			break;

		case 'update-cart-item-fromcheckout':

			$p = cartItemById($_POST['id']);
			$p->quantity = $_POST['amount'];
			header("location:checkout.php");
			break;


		case 'delete-cart-item':

			$_SESSION['cart'] = array_filter($_SESSION['cart'],function($o){
				return $o->id != $_POST['id'];
			});

			header("location:shopping_cart.php");
			break;


		case 'delete-cart-item-fromcheckout' :

			$_SESSION['cart'] = array_filter($_SESSION['cart'],function($o){
				return $o->id != $_POST['id'];
			});

			$cart = $_SESSION['cart'];

			if (empty($cart)) {
				header("location:shopping_cart.php") ;
			} else {
				header("location:checkout.php");
			}
			break;

		case 'reset-cart':
			resetCart();
			break;

		default:
			die("Incorrect Action");
	}
?>

