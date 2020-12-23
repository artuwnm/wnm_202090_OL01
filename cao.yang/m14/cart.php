<?php 

include_once "lib/php/functions.php";
include_once "parts/templates.php";

//$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (4, 10)");

$cart = getCart();

$cart_items = getCartItems();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cart-Shop IT Solution</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>

	<?php include "parts/navbar.php"; ?>

	<main>
	<div class="container display-flex nav nav-crumbs">
		<ul>
			<li><a href="home.php">Home</a></li>
			<li><a href="shop.php">Shop</a></li>
			<li><a>Cart</a></li>
		</ul>
	</div>


	<?php

	if(count($cart)) {
		?>
		<div class="container">
			<div class="cart display-flex flex-stretch">
				<div>
					<?= array_reduce($cart_items,'cartListTemplate') ?>
				</div>
				<div class="summary card soft">
					<?= cartTotals() ?>
					<button class="checkoutbutton form-button" onclick="window.location.href='checkout.php'">Checkout</button>
				</div>
			</div>
		</div>
		<?php
	} else {
		?>
		<div class="container">
			<div class="empty card-section">
				<h2>Your cart is empty.</h2>
				<div class="continue">
					<button class="form-button"><a href="shop.php">CONTINUE SHOPPING</a></button>
				</div>
			</div>
			<h2 class="card-section">Other Recommendations</h2>
			<?php recommendedCategory(""); ?>

		</div>
		<?php
	}

	?>
	

	

	</main>

<?php include "parts/footer.php"; ?>
</body>

</html>