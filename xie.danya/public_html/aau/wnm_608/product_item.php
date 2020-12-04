<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

$images = explode(",", $product->images);

$image_elements = array_reduce($images,function($r,$o){
	return $r."<img src='img/$o'>";
});


//print_p($_SESSION);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DA-IE Jewelry</title>

	<?php include "parts/meta.php"; ?>
	<script src="js/product_thumbs.js"></script>
</head>
<body>

	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<div class="grid gap">
			<div class="col-xs-12 col-md-6">
				<div class="card soft">
					<div class="images-main">
						<img src="img/<?= $product->thumbnail ?>"> 
					</div>
					<div class="images-thumbs">
						<?= $image_elements ?>
					</div>
				</div>	
			</div>
			<div class="col-xs-12 col-md-6">
				<form method="post" action="cart_actions.php?action=add-to-cart">
					<input type="hidden" name="product-id" value="<?= $product->id ?>">
				    <div class="section">
					    <h3 class="product-name"><b><?= $product->name ?></b></h3>
					    <div class="product-category"><?= $product->category ?></div>
					    <h3 class="product-price">&dollar;<?= $product->price ?></h3>
				    	<p class="product-description"><b>Details:</b> <?= $product->description ?></p>
				    	
				    	<div class="display-inline-block">
					    	<label for="product-quantity" class="form-label">Quantity</label>
							<div class="form-select quantity">
								<select id="product-quantity" name="product-quantity">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
								</select>
							</div>
						</div>
						<br>
				    	<div class="display-inline-block">
					    	<label for="product-color" class="form-label">Color</label>
							<div class="form-select quantity">
								<select id="product-color" name="product-color">
									<option>Gold</option>
									<option>Silver</option>
								</select>
							</div>
						</div>
						<div class="form-control">
							<input type="submit" class="btn add-cart" value="ADD TO CART">
						</div>					    	
				    </div>
				</form>				
			</div>
		</div>	

		<h3 style="padding: 2em 0 1em 0;">Recommended Product</h3>
		<?php
			recommendedSimilar($product->category,$product->id);
		?>
	</div>


	<?php include "parts/footer.php"; ?> 
</body>
</html>