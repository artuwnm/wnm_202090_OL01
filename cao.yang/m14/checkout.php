<?php 

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$cart_items = getCartItems();

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Checkout-Shop IT Solution</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>

	<?php include "parts/navbar.php"; ?>
	<main>
	<div class="container display-flex nav nav-crumbs">
		<ul>
			<li><a href="home.php">Home</a></li>
			<li><a href="shop.php">Shop</a></li>
			<li><a href="cart.php">Cart</a></li>
			<li><a>Checkout</a></li>
		</ul>
	</div>

		<div class="checkout display-flex flex-stretch">
			<div class="container cardinfo">
				<form>
					<div class="form-control">
						<label class="form-label">First Name</label>
						<input type="text" class="form-input">
					</div>
					<div class="form-control">
						<label class="form-label">Last Name</label>
						<input type="text" class="form-input">
					</div>
					<div class="form-control">
						<label class="form-label">Email</label>
						<input type="email" class="form-input">
					</div>
					<div class="form-control">
						<label class="form-label">Address</label>
						<input type="text" placeholder="street address" class="form-input">
					</div>
					<div class="form-control display-flex flex-align-center">
						<div class="flex-none">
							<label class="form-label">City</label>
						</div>
						<div class="flex-stretch">
							<input type="search" class="form-input flex-stretch">
						</div>
						<div class="flex-none">
							<label class="form-label">State</label>
						</div>
						<div class="flex-stretch">
							<input type="search" class="form-input flex-stretch">
						</div>
						<div class="flex-none">
							<label class="form-label">Zip Code</label>
						</div>
						<div class="flex-stretch">
							<input type="number" class="form-input flex-stretch">
						</div>
					</div>
					<div class="form-control">
						<label class="form-label">Phone Number</label>
						<input type="number" placeholder="(xxx)xxx-xxxx" class="form-input">
					</div>
					<div class="form-control display-flex flex-align-center">
						<div class="flex-none">
							<label class="form-label">Credit Card Number</label>
						</div>
						<div class="flex-stretch">
							<input type="number" class="form-input flex-stretch">
						</div>
						<div class="flex-none">
							<label class="form-label">Expiration Date</label>
						</div>
						<div class="flex-stretch">
							<input type="date" class="form-input flex-stretch">
						</div>
						<div class="flex-none">
							<label class="form-label">CVV</label>
						</div>
						<div class="flex-stretch">
							<input type="number" class="form-input flex-stretch">
						</div>
					</div>

				</form>
			</div>

			<div class="container card soft orderdetail">
				<div class="orderitem display-flex">
					<div>
						<?= array_reduce($cart_items,'cartListTemplate2') ?>
					</div>
				</div>
				<div class="orderinfo">
					<?= cartTotals() ?>
				</div>
				<div class="placeorder"><button class="checkoutbutton form-button" onclick="window.location.href='confirmation.php'">Place Order</button></div>
			</div>

		</div>
	

	</main>

<?php include "parts/footer.php"; ?>
</body>

</html>