<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$cart = getCart();


//$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (4,7,10)");

$cart_items = getCartItems();

?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DA-IE Jewelry | Shopping Cart</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>

	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<h3>Shopping Cart</h3>

		<?php

		if(count($cart)) {
			?>
			<div class="grid gap">
				<div class="col-xs-12 col-md-8">
					<div class="card soft">
						<?= array_reduce(getCartItems(),'cartListTemplate') ?>
					</div>
				</div>
				<div class="col-xs-12 col-md-4">
					<div class="card soft">
						<?= cartTotals() ?>
						<div class="form-control">
							<a href="checkout.php" class="form-button">CHECK OUT</a>
						</div>
					</div>
				</div>
			</div>
			<?php
		} else {
			?>
			<div class="card soft">
				<p>No items in cart.</p>
			</div>

				<h3>Other Recommendations</h3>
				<?php recommendedAnything(6); ?>				
			
			<?php
		}
		?>			
	</div>


	<?php include "parts/footer.php"; ?> 
</body>
</html>