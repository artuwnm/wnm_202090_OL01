<?php include_once "lib/php/functions.php" ?>
<?php include_once "parts/templates.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "parts/meta.php" ?>
	<title>Tova</title>
</head>
<body>

	<!-- header -->
	<?php include "parts/navbar.php" ?>
	<div class="container content">

		<div class="grid gap">
			<div class="col-xs-12 col-md-6">

				<div class="card soft">
					<h3 id="forms">Shipping Information</h3>
					<form>
						<input type="text" placeholder="Full Name" class="form-input">
						<input type="text" placeholder="Address" class="form-input">
						<input type="text" placeholder="Address" class="form-input">
						<input type="text" placeholder="City" class="form-input">
						<input type="text" placeholder="State" class="form-input">
						<input type="text" placeholder="Zipcode" class="form-input">
					</form>
				</div>	

				<div class="card soft">
					<h3 id="forms">Billing Information</h3>
					<input type="checkbox" id="input-1">
					<label for="input-1">Same as shipping information</label>
		
					<form style="margin-top: 20px">
						<input type="text" placeholder="Full Name" class="form-input">
						<input type="text" placeholder="Address" class="form-input">
						<input type="text" placeholder="Address" class="form-input">
						<input type="text" placeholder="City" class="form-input">
						<input type="text" placeholder="State" class="form-input">
						<input type="text" placeholder="Zipcode" class="form-input">
					</form>	
				</div>

				<div style="text-align: center; margin-top: 60px; margin-bottom: 60px;">
					<a href="product_confirmation.php" class="button big">Checkout</a>	
				</div>
			</div>
				
			<div class="col-xs-12 col-md-6">


				<?php


				$cart = getCartItems();
				echo(array_reduce($cart, 'cartItem'));

				$subtotal = array_reduce($cart, function($r, $o) { return $r + $o->total; }, 0);
				$tax = $subtotal * 0.085;
				$total = $subtotal + $tax;
				
				?>
				<div class="card soft">
					<div>Subtotal <?php echo(cur($subtotal)); ?></div>
					<div>Tax <?php echo(cur($tax)); ?></div>
					<div style="font-weight: bold;">Total <?php echo(cur($total)); ?></div>
				</div>

			</div>

			

	</div>
</body>
</html>