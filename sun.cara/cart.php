<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cart</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>
	<?php ini_set("display_errors","On"); ?>



	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<div class="card soft">
			<h2>My Cart</h2>

			<div  class="col-xs-12 col-md-4">
			<figure class="figure product left">
				<img src="https://via.placeholder.com/400x400?text=product" alt="">
				<figcaption>
						<div>Product</div>
						<div>$3.99</div>
				</figcaption>
			</figure>
			</div>	

			<div class="display-flex">
				<div class="flex-stretch"></div>
					<div class="flex-none">
						<div class="form-select">
							<select>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
							</select>
						</div>
					</div>
			</div>

			<div class="form-control">
				<a href="checkout.php" class="form-button">Checkout</a>
			</div>
			

		</div>
	</div>

	
<?php include "parts/footer.php"; ?>
	
</body>
</html>