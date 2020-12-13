<?php include "lib/php/debug.php"; ?>

<?php
	include_once "lib/php/functions.php";
	include_once "parts/templates.php";

	$cart = getCartItems();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Shopping cart</title>
	<?php include "parts/meta.php"; ?>
</head>
<body>

	<?php include "parts/navbar.php"; ?>

	<?php	

		if (empty($cart)) { 

			echo "<br><div class='container'>
					<div class='card soft'><h2 style='text-align:center;'>You shopping cart is empty!<h2></div>
				  </div><br>";
			
		} else {

			$array_reduce = array_reduce($cart, 'cartListTemplate');
			$cartTotals = cartTotals();

			echo 

			"
			<div class='container shopping_cart-container'>
				<h1> Shopping cart</h1>
				
				<div class='grid gap xs-small md-medium lg-large'>

					<div class='col-xs-12 col-md-7'>
						<div class='card card_padding'>
							<hr>
							$array_reduce
							
						</div>
					</div>

					<div class='col-xs-12 col-md-5'>
						<div class='card soft flat card_padding'>
							$cartTotals 
							<div class='form-control'>
								<a href='checkout.php' class='form-button'>PROCEED TO CHECKOUT</a>
							</div>
						</div>
					</div>
					
				</div>
			</div>";
		}
	?>

	<div class="container">
		<h2 style="text-align: center; text-transform: uppercase;">Items to Explore</h2>
		<?php 
			recommendedAny(4);
		?>
	</div>
	
	<?php include "parts/footer.php"; ?>


</body>
</html>