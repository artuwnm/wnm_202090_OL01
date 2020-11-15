<?php

include_once "lib/php/functions.php";

$product = makeQuery(makeConn(),"SELECT * FROM products WHERE `id`=".$_GET['id'])[0];
// print_p($product);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Item Added Confirmation</title>
    <?php include "parts/meta.php"; ?>

</head>
<body>
	<?php

		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);

	?>

	<?php include "parts/navbar.php"; ?>
   	
	<div class="container grid gap xs-small md-medium">

		<div class="card card_padding_small col-xs-12 col-md-9">
			<h4 style="">
				<img style="width:10%;" src ="img/<?= $product->product_thumb ?>" > <?= $product->product_name ?> Added to your cart</h4>
		</div>

		<div class="card col-xs-12 col-md-3 card_padding_left card_padding_right">
			<div class="form-control">
				<a href="product_list.php" class="form-button">Continue Shopping</a>
			</div>
			<div class="form-control">
				<a href="shopping_cart.php" class="form-button">View Cart</a>
			</div>
			<div class="form-control">
				<a href="checkout.php" class="form-button">Proceed to checkout</a>
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	
    <?php include "parts/footer.php"; ?>
</body>
</html>