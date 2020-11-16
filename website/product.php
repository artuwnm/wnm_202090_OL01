
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "parts/meta.php" ?>
	<?php include "lib/php/functions.php" ?>
	<title>Tova</title>
</head>
<body>
<?php

$id = $_GET["id"];

$conn = makeConn();
$result = makeQuery($conn, "SELECT * FROM `products` WHERE `id` = " . $id . ";");

$obj = $result[0];



?>
	<!-- header -->
	<?php include "parts/navbar.php" ?>
	<div class="container content">
		<div class="sidebar">	
		</div>
		<div class="main">
			
		<div class="card soft" id="paragraphs">
					<p>
						<a href="collections.php">&laquo; Back</a>
					</p>
					<h3><?php echo($obj->name); ?></h3>	
					
					<img style="width: 100px; height: 100px;" src="img/<?php echo($obj->thumbnail) ?>.png" />
					<p><?php echo($obj->description); ?></p>
					<p><?php echo($obj->category); ?></p>
					<p>$<?php echo($obj->price); ?></p>
					<p>
						<a href="product_cart.php">Add to cart</p>
					</p>
				</div>
			
		</div>
	</div>
</body>
</html>