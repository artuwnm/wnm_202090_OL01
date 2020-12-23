<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$cart_items = getCartItems();

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cart</title>
	<?php include "parts/meta.php"; ?>
</head>

	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<div class="card">
			<h1 class="home-link"><a href="home.html">V Beauty</a></h1>
		</div>
	</div>


	<div class="container">
		<h2>Your Cart</h2>
		
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<?= array_reduce($cart_items, 'cartListTemplate') ?>
				</div>
			</div>

			<div class="col-xs-12 col-md-5">
				<div class="card soft flat">
					<?= cartTotals() ?>
				</div>
			</div>
		</div>
	</div>


<?php include "parts/footer.php"; ?>

</body>
</html>