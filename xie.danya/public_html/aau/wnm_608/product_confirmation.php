<?php 
include_once "lib/php/functions.php"; 
resetCart();
?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<title>DA-IE Jewelry | Order Confirmation</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>

	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<div class="card soft">
			<div class="confirmation">
				<i class='fas fa-gift' style='font-size:36px;color:#6A9478'></i>
				<h1>Thank You!</h1>
				<p><b>Order Number is #2345678</b></p>
				<p>Your order has been confirmed and you will receive an order confirmation email shortly.</p>
				<br>	
				<div class="form-control">
					<a href="product_list.php" class="btn continue">CONTINUE SHOPPING</a>		
				</div>
			</div>
		</div>	
	</div>


	<?php include "parts/footer.php"; ?> 
</body>
</html>