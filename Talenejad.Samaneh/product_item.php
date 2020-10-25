<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Product Item</title>
	<?php include "parts/meta.php"; ?>
</head>
<body>

	<?php

		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);

	?>

	<?php include "parts/navbar.php"; ?>
	
	<div class="grid">

		<div class="col-lg-7 col-md-12 col-sm-12" style="text-align: center;">
			<?php include "parts/product_data.php"; ?>
			<?php 
				$current_item = $items[$_GET['id']-1];
			?>
			<img style="width:50%;" src = <?php echo $current_item['img'][0] ?> >
		</div>

		<div class="product_detail_info col-lg-5 col-md-12 col-sm-12">

			<div>

				<div>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star checked"></span>
				</div>	

				<div class="product_item_heading"># <?= $_GET['id'] ?> 
					<span class="product-heading_designer">
						<?php echo $current_item['brand'] ?>
					</span>
					<br>
					<span class="product-heading_name">
						<?php echo $current_item['item_name'] ?>
					</span>
					<br>
					<span class="product-heading_price">
						<?php echo $current_item['price'] ?>
					</span>
					<br>
					<span class="product-heading_shipping_label">Free Shipping + Free returns</span>
				</div>
				
				
				<div class="col-lg-8 col-md-8 col-sm-8">
					<form>
						<div class="size-select">
							<select>
								<option value="" selected>Select Size</option>
								<option value="">X-SMALL</option>
								<option value="">SMALL</option>
								<option value="">MEDIUM</option>
								<option value="">LARGE</option>
							</select>
						</div>
						
						<div class="color-select">
							<select>
								<option value="" selected>BLACK</option>
								<option value="">WHITE</option>
								<option value="">GREY</option>
							</select>
						</div>
						
						<div class="quantity-select">
							<input type="text" value="1">
							<!-- <button class="decrease_button" disabled> - </button> -->
							<!-- <button class="increase_button" disabled> + </button> -->
						</div>
								
						<div class="addto-shopping-bag">
							<button>ADD TO SHOPPING BAG</button>
						</div>
					</form>
				</div>
			</div>
			
		</div>
	</div>



	<?php include "parts/footer.php"; ?>
</body>
</html>