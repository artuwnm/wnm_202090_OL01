<?php
		
include_once "lib/php/function.php";

$product = makeQuery(makeConn(), " SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

$cart_product = cartItemByID($_GET['id']);

?>


<!DOCTYPE html>
<html>
<head>
	<title>Confirmation Page</title>


<?php include "parts/meta.php"; ?>

</head>
<body>


	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<div class="card soft">
			<h2>You added <?= $product->name ?> to your cart</h2>
			<p>There are now <?= $cart_product->amount ?> of <?= $product->title ?> in your cart.</p>

	<div class="display-flex">
		<div class="flex-none"><a href="product_list.php">Continue Shopping</a></div>
		<div class="flex-stretch"></div>
		<div class="flex-none"><a href="cart2.php">Go To Cart</a></div>		
		</div>
	</div>
</div>

</body>
</html>