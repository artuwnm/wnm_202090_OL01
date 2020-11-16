<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "parts/meta.php" ?>
	<?php include "lib/php/functions.php" ?>
	<?php include "parts/templates.php" ?>
	<title>Tova</title>
</head>
<body>

	<!-- header -->
	<?php include "parts/navbar.php" ?>
	<div class="container content center-narrow">



	<?php

	$cart = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` IN (4, 5, 6);");

	echo(array_reduce($cart, 'cartItem'));

	$total = 0;
	foreach($cart as $item) {
		$total += $item->price;
	}
	?>
	<p>TOTAL <?php echo($total); ?></p>


				<p>
					<a href="product_checkout.php">Checkout</a>
				</p>
				
	</div>
</body>
</html>