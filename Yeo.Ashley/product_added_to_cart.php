<?php
		
include_once "lib/php/functions.php";

$product = makeQuery(makeConn(), " SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

$cart_product = array_find(getCart(),function($o){return $o->id==$_GET['id'];});

?>



<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Added to Cart</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="lib/css/styleguide.css">
	<link rel="stylesheet" type="text/css" href="/lib/css/gridsystem.css">
	<link rel="stylesheet" type="text/css" href="/css/storetheme.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

	<script type="http://code.jquery.com/jquery-3.2.1.min.js"></script>

</head>
<body>
	
	<?php include "parts/navbar 2.php"; ?>
	
	<div class="container">
		<div class="card soft">
			<h2>You added <?= $product->name ?> to your cart.</h2>
			<p>There are now <?=$cart_product->amount ?> of <?=$product->name ?> in your cart</p>

			<div class="display-flex">
				<div class="flex-none"><a href="product_list.php">Continue Shopping</a></div>
				<div class="flex-stretch"></div>
				<div class="flex-none"><a href="cart.php">Go to Cart</a></div>
			</div>
		</div>
	</div>