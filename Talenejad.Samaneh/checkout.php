<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Check out</title>
    <?php include "parts/meta.php"; ?>
</head>
<body>
	<?php

		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);

	?>

	<?php include "parts/navbar.php"; ?>

   	<br>
	<div class="container checkout-container">
		<div class="card soft card_padding_right card_padding_left">
		
			<form action="thanks.php" method="post">
				<h2>Shipping Address</h2>
		
				<div class="form-control">
					<label for="address-street" class="form-label">Street</label>
					<input id="address-street" type="text" placeholder="Street Name" class="form-input">
				</div>
		
		
				<div class="form-control">
						<div class="grid gap xs-small md-medium">
							<div class="col-xs-12 col-md-6">
								<label for="address-city" class="form-label">City</label>
								<input id="address-city" type="text" placeholder="City" class="form-input">
							</div>
							<div class="col-xs-12 col-md-6">
								<label for="address-state" class="form-label">State</label>
								<input id="address-state" type="text" placeholder="State" class="form-input">
							</div>
						</div>
				</div>
		
		
				<div class="form-control">
						<div class="grid gap xs-small md-medium">
							<div class="col-xs-12 col-md-6">
								<label for="address-zip" class="form-label">Zip Code</label>
								<input id="address-zip" type="text" placeholder="Zip Code" class="form-input">
							</div>
							<div class="col-xs-12 col-md-6">
								<label for="address-country"  class="form-label">Country</label>
								<input id="address-country" type="text" placeholder="Country" class="form-input">
							</div>
						</div>
				</div>
		
				<h2>Payment method</h2>
				<div class="form-control">
					<label class="form-label">Full Name</label>
					<input type="text" placeholder="Full Name" class="form-input">
				</div>
		
				<div class="form-control">
					<label class="form-label">Card Number</label>
					<input type="text" placeholder="#### #### #### ####" class="form-input">
				</div>
		
		
				<div class="form-control">
					<div class="grid gap xs-small md-medium">
						<div class="col-xs-12 col-md-6">
							<label class="form-label">Expiration</label>
							<input type="text" placeholder="Expiration" class="form-input">
						</div>
						<div class="col-xs-12 col-md-6">
							<label class="form-label">CVV</label>
							<input type="text" placeholder="CVV" class="form-input">
						</div>
					</div>
				</div>
		
				<div class="form-control">
					<div class="grid gap xs-small md-medium">
						<div class="col-xs-12 col-md-6">
							<label class="form-label">Zip Code</label>
							<input type="text" placeholder="Zip Code" class="form-input">
						</div>
					</div>
				</div>
		
				<div class="form-control">
					<button type="submit" value="Submit" class="form-button">Place your order</button>
				</div>
			</form>
		</div>
	</div>
	<br>
	<br>
    <?php include "parts/footer.php"; ?>
</body>
</html>