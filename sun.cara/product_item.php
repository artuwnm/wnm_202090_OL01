<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Item</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>
	<?php ini_set("display_errors","On"); ?>



	<?php include "parts/navbar.php"; ?>



	<div class="container">
		<div class="card soft">
			<h2>This is Product # <?= $_GET['id'] ?></h2>

			<div  class="col-xs-12 col-md-4">
			<figure class="figure product">
				<img src="https://via.placeholder.com/400x400?text=product" alt="">
				<figcaption>
						<div>Product <?= $_GET['id'] ?></div>
						<div>$3.99</div>
				</figcaption>
			</figure>	

			<div class="form-select">
				<select>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>					
				</select>
			</div>

			<div class="form-control">
				<a href="cart.php" class="form-button">Add to Cart</a></div>
			</div>


		</div>

		</div>
	</div>


<?php include "parts/footer.php"; ?>

</body>
</html>