<?php include "lib/php/debug.php"; ?>

<?php
	include_once "lib/php/functions.php";
	include_once "parts/templates.php";


	$product = makeQuery(makeConn(),"SELECT * FROM products WHERE `id`=".$_GET['id'])[0];
	// print_p($product);

	$images = explode(",", $product->product_images);
	$image_elements = array_reduce($images, function($r, $o){
		return $r."<img src='img/$o'>";
	})
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Product Item</title>
	<?php include "parts/meta.php"; ?>
	<script src="js/product_thumbs.js"></script>
</head>
<body>
	<?php include "parts/navbar.php"; ?>

	<div class="grid">

		<!-- Left section for images -->
		<div class="col-lg-7 col-md-12 col-sm-12" style="text-align: center;">

			<div class="images-main">
				<img style="width:50%;" src ="img/<?= $product->product_thumb ?>" >
			</div>

			<div class="images-thumbs">
				<?= $image_elements ?>
			</div>

		</div>


		<!-- Right section for product details -->
		<div class="product_detail_info col-lg-5 col-md-12 col-sm-12">

			<div>
				<span class="fa fa-star"></span>
				<span class="fa fa-star"></span>
				<span class="fa fa-star"></span>
				<span class="fa fa-star"></span>
				<span class="fa fa-star checked"></span>
			</div>	

			<div class="product_item_heading"># <?= $_GET['id'] ?> 
				<span class="product-heading_designer">
					<?= $product->product_designer ?>
				</span>
				<br>
				<span class="product-heading_name">
					<?= $product->product_name ?>
				</span>
				<br>
				<span class="product-heading_price">
					&dollar;<?= $product->product_unit_price ?>
				</span>
				<br>
				<span class="product-heading_shipping_label">Free Shipping + Free returns</span>
			</div>
			
			
			<div class="col-lg-8 col-md-8 col-sm-8">
				<!-- <form action="item_added_confirmation.php?id=<?= $product->id?>" method="post"> -->
				<form action="cart_action.php?action=add-to-cart" method="post">
					<input type="hidden" name="product_id" value="<?= $product->id ?>">
					<label for="product-size"></label>
					<div class="size-select">
						<select id="product-size" name="product_size">
							<option value="" selected>Select Size</option>
							<option value="X-SMALL">X-SMALL</option>
							<option value="SMALL">SMALL</option>
							<option value="MEDIUM">MEDIUM</option>
							<option value="LARGE">LARGE</option>
						</select>
					</div>

					<label for="product-color"></label>
					<div class="color-select">
						<select id="product-color" name="product_color">
							<option value="black" selected>BLACK</option>
							<option value="white">WHITE</option>
							<option value="grey">GREY</option>
						</select>
					</div>
					
					<label for="product-quantity"></label>
					<div class="quantity-select">
						<select id="product-quantity" name="product_quantity">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
						</select>
					</div>

					<div class="description">
						<h4>PRODUCT DETAILS</h4>
						<hr>
						<?php 
							$description = explode(";", $product->product_description );
							$description_elements = array_reduce($description, function($r, $o){
								return $r."<p>$o</p>";
							})
						?>
						<?= $description_elements ?>
					</div>

					<div class="form-control add_to-shopping-bag">
						<!-- <input type="submit" class="form-button" value="ADD TO CART"> -->
						<button type="submit" class="form-button">ADD TO CART</button>
					</div>

				</form>
			</div>

		</div>

	</div>

	

	<div class="container">
		<h2>Recommended Products</h2>

		<?php 
		recommendedSimilar($product->product_category,$product->id);
		?>
		
	</div>
	


	

	<?php include "parts/footer.php"; ?>
</body>
</html>