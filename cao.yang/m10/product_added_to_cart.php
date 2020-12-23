<?php 

include_once "lib/php/functions.php";

$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Added To Cart-Shop IT Solution</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>

	<?php include "parts/navbar.php"; ?>
	<main>
		<div class="container">
			<div>
				<h2 class="added card-section"><?= $product->name?> added to your cart</h2>

				<div class="display-flex card-section">
					<div>
						<img class="quickadd" src="img/<?= $product->thumbnail ?>">
					</div>
					<div class="flex-stretch"></div>
					<div>
						<?= $product->name ?>
					</div>
					<div class="flex-stretch"></div>
					<div>&dollar;<?= $product->price ?></div>	
				</div>


				<div class="display-flex card-section">
					<div class="flex-none form-button addedbutton"><a href="shop.php">Continue Shopping</a></div>
					<div class="flex-stretch"></div>
					<div class="flex-none form-button addedbutton"><a href="cart.php">Go To Cart</a></div>
				</div>
			</div>
		</div>
	</main>

<?php include "parts/footer.php"; ?>
</body>

</html>