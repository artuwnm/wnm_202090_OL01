<?php

include_once "lib/php/function.php";
include_once "parts/templates.php";

$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (4,7,10)");

$cart_items = getCartItems();

$cart = getCart();

?><!DOCTYPE html>
<html>
<head>
	<title>My Cart</title>


	<?php include "parts/meta.php"; ?>

</head>
<body>

<div class="cartcontainer">
	<script>
		const makeNav = (classes='') => {
			const links = ['<a href="home.php">home</a>','<a href="product_list.php">view items</a>','	<a href="cart2.php"><span>Cart</span><span class="badge"><?= makeCartBadge(); ?></span>'];
			let ran = Math.floor(Math.random()*links.length);
			document.write(`
			<div>
				<nav class="${classes}">
					<ul>
					${links.reduce((r,o,i)=>{
						return r+`<li class="${ran==i?'active':''}"><a href="#">${o}</a></li>`;
					},'')}
					</ul>
				</nav>
			</div>
			`);
		}
		</script>


	<script>makeNav('nav nav-crumbs')</script>
</div>

	<div class="container">
		<h2>In Your Cart</h2>


		<?php

		if(count($cart)) {
			?>
			<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft flat">
					<?= array_reduce($cart_items,'cartListTemplate') ?>
				</div>
			</div>
		<div class="col-xs-12 col-md-5">
			<div class="card soft flat">
				<?= cartTotals() ?>
				<div class="card-section">
				<a href="product_checkout.php" class="form-button">Checkout</a>
		</div>
		</div>
	</div>
</div>
		<?php
		} else {
			?>
			<div class="card soft">
				<p>No Items in Cart</p>
			</div>

				<h3>Other Recommendations</h3>
				<?php recommendedAnything("Plants"); ?>
			<?php 
		}
		?>
</div>


<?php include "parts/footer.php"; ?>


</body>
</html>