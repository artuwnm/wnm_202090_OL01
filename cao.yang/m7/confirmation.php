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
		<div class="container confirmation">
			<div>
				<h1>Thank you for your Order!</h1>
			</div>
			<div>
				<h3>A confirmation has been sent to your email.</h3>
			</div>
			<div class="confirmbutton">
				<button class="form-button" onclick="window.location.href='shop.php'">Continue Shopping</button>
				<button class="form-button">View Order</button>
			</div>
		</div>

	</main>

<?php include "parts/footer.php"; ?>
</body>

</html>