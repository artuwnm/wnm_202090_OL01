<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>
	<?php ini_set("display_errors","On"); ?>



	<?php include "parts/navbar.php"; ?>



	<div class="container">
		<div class="card soft">
		<h2>Product List</h2>

	<div class="grid gap">
		<div class="col-xs-12 col-md-4">
			<figure class="figure product">
				<a href="product_item.php?id=1">
				<img src="https://via.placeholder.com/400x400?text=product" alt="">
				<figcaption>
						<div>Product 1</div>
						<div>$3.99</div>
				</figcaption>
				</a>
			</figure>
		</div>

		<div  class="col-xs-12 col-md-4">
			<figure class="figure product">
				<a href="product_item.php?id=2">
				<img src="https://via.placeholder.com/400x400?text=product" alt="">
				<figcaption>
						<div>Product 2</div>
						<div>$3.99</div>
				</figcaption>
				</a>				
			</figure>
		</div>

		<div  class="col-xs-12 col-md-4">
			<figure class="figure product">
				<a href="product_item.php?id=3">
				<img src="https://via.placeholder.com/400x400?text=product" alt="">
				<figcaption>
						<div>Product 3</div>
						<div>$3.99</div>
				</figcaption>
				</a>
			</figure>			
		</div>

		<div  class="col-xs-12 col-md-4">
			<figure class="figure product">
				<a href="product_item.php?id=4">
				<img src="https://via.placeholder.com/400x400?text=product" alt="">
				<figcaption>
						<div>Product 4</div>
						<div>$3.99</div>
				</figcaption>
				</a>
			</figure>			
		</div>

		<div  class="col-xs-12 col-md-4">
			<figure class="figure product">
				<a href="product_item.php?id=5">
				<img src="https://via.placeholder.com/400x400?text=product" alt="">
				<figcaption>
						<div>Product 5</div>
						<div>$3.99</div>
				</figcaption>
				</a>
			</figure>			
		</div>

		<div  class="col-xs-12 col-md-4">
			<figure class="figure product">
				<a href="product_item.php?id=6">
				<img src="https://via.placeholder.com/400x400?text=product" alt="">
				<figcaption>
						<div>Product 6</div>
						<div>$3.99</div>
				</figcaption>
				</a>
			</figure>			
		</div>
	</div>

	
	</div>
	</div>

	<?php include "parts/footer.php"; ?>

</body>
</html>