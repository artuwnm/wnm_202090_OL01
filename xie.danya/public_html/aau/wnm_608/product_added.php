<?php

include_once "lib/php/functions.php";

$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

$cart_product = cartItemById($_GET['id']);

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>DA-IE Jewelry | Product added to your cart</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>

	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<div class="card soft">
			<div class="confirmation">
				<i class='fa fa-check-circle' style='margin-bottom:0.5em; font-size:36px;color:#6A9478'></i>
				<h3>You added <?= $product->name ?> to your cart!</h3>
				<p>There are now <?= $cart_product->quantity ?> of <?= $product->name ?> in your cart.</p>
			</div>
			<div class="display-flex">
				<div class="form-control display-none">
					<a href="product_list.php" class="btn continue">CONTINUE SHOPPING</a>		
				</div>
				<div class="flex-stretch"></div>	
				<div class="form-control flex-none">
					<a href="cart.php" class="btn continue">GO TO CART</a>		
				</div>
			</div>		
		</div>	
	</div>


	<?php include "parts/footer.php"; ?> 
</body>
</html>