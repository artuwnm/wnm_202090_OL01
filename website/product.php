<?php 
include_once "lib/php/functions.php";
include_once "parts/templates.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "parts/meta.php" ?>
	<title>Tova</title>
</head>
<body>
<?php

$id = $_GET["id"];

$obj = getProductById($id);

?>
	<!-- header -->
	<?php include "parts/navbar.php" ?>
	<div class="container content">
		<div class="sidebar">	
		</div>
		<div class="main">
			
			<form action="cart_actions.php" method="POST">
				<input type="hidden" name="id" value="<?php echo($id); ?>" />
				<input type="hidden" name="action" value="add" />

				<div class="card soft">
					<div class="grid">
						<div class="col-md-9">
									
							<p>
								<a href="collections.php">&laquo; Back</a>
							</p>
							<h3><?php echo($obj->name); ?></h3>	
							
							<img style="width: 300px; height: 300px;" src="<?php echo($base) ?>img/<?php echo($obj->thumbnail) ?>.png" />
							<p><?php echo($obj->description); ?></p>
							<p><?php echo($obj->category); ?></p>
							<p>$<?php echo($obj->price); ?></p>
							<p>
								<label for="quantity">Quantity:</label>
								<select class="form-select" id="quantity" name="quantity">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							</p>
							<p>
								<input type="submit" class="form-button" value="Add to cart" />
							</p>
						</div>
						<div class="col-md-3">
							<h4>You might also like:</h4>
							
							<?php

								$products = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `category` = '" . $obj->category . "' AND `id` <> " . $obj->id . ";");
								echo(array_reduce($products, 'productItem'));

							?>
						</div>
					</div>
				</div>
			</form>

		</div>

	</div>
</body>
</html>