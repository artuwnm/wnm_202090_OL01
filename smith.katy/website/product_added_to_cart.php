<?php include_once "lib/php/functions.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "parts/meta.php" ?>
	<title>Tova</title>
</head>
<body>
<?php

$id = $_GET["id"];

$product = getProductById($id);
$quantity = $product->quantity;

?>
	<!-- header -->
	<?php include "parts/navbar.php" ?>
	<div class="container content">
		<div class="sidebar">	
		</div>
		<div class="main">
            <div class="card soft" id="paragraphs">
                <h3>You added <?php echo($quantity); ?> <?php echo($product->name); if($quantity > 1) echo("s");?> to your cart</h3>	
				<div>
				<img style="width: 200px; height: 200px;" src="<?php echo($base) ?>img/<?php echo($product->thumbnail) ?>.png" />
				</div>
				<p><a href="collections.php">Keep shopping</a></p>
				<p><a href="product_cart.php">View cart</a></p>
            </div>	
		</div>
	</div>
</body>
</html>