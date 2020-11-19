<?php include "lib/php/functions.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "parts/meta.php" ?>
	<?php include "parts/templates.php" ?>
	<title>Tova</title>
</head>
<body>

	<!-- header -->
	<?php include "parts/navbar.php" ?>
	<div class="container content center-narrow">

	<?php

	$cart = getCartItems();

	if(empty($cart)) {
	
		?>
		<h1>You have nothing in your cart.</h1>
		<p><a href="collections.php">Go shopping</a></p>
		<?php

	} else {
		
		echo(array_reduce($cart, 'cartItem'));

		$subtotal = array_reduce($cart, function($r, $o) { return $r + $o->total; }, 0);
		$tax = $subtotal * 0.085;
		$total = $subtotal + $tax;
		
		?>
		<p>Subtotal <?php echo(cur($subtotal)); ?></p>
		<p>Tax <?php echo(cur($tax)); ?></p>
		<p style="font-weight: bold;">Total <?php echo(cur($total)); ?></p>
		<p style="margin-top: 50px;"><a class="form-button" href="product_checkout.php">Checkout</a></p>
		
		<?php
	}
	?>

				
	</div>
</body>
</html>