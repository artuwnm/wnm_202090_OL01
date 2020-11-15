<?php

	include_once "lib/php/functions.php";
	include_once "parts/templates.php";

	$cart = makeQuery(makeConn(),"SELECT * FROM products WHERE `id` IN (4,7,10)");

	$images = explode(",", $product->product_images);

	$image_elements = array_reduce($images, function($r, $o){

		return $r."<img src='img/$o'>";
})

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Shopping cart</title>
	<?php include "parts/meta.php"; ?>
</head>
<body>
	<?php

		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);

	?>

	<?php include "parts/navbar.php"; ?>
	<div class="container">
		<h1> Shopping cart</h1>
		<div class="grid gap xs-small md-medium lg-large">
			<div class="col-xs-12 col-md-7">
				<div class="card soft card_padding">
					<?= array_reduce($cart, 'cartListTemplate') ?>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<div class="card soft flat card_padding">
					<div class="display-flex">
						<div class="flex-stretch"><strong>Sub Total</strong></div>
						<div class="flex-none">&dollar;120</div>
					</div>
					<div class="display-flex">
						<div class="flex-stretch"><strong>Taxes</strong></div>
						<div class="flex-none">&dollar;1.2</div>
					</div>
					<div class="display-flex">
						<div class="flex-stretch"><strong>Total</strong></div>
						<div class="flex-none">&dollar;121.2</div>
					</div>
					<br>
					<div class="form-control">
						<a href="checkout.php" class="form-button">Checkout</a>
					</div>
				</div>
			</div>
			
		</div>
		<br>
	</div>
	<br>

	<?php include "parts/footer.php"; ?>
</body>
</html>