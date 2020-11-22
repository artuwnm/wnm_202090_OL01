<?php 



			include_once "lib/php/functions.php";
			include_once "parts/templates.php";





 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List</title>

<?php include "parts/meta.php"; ?>
	
</head>
<body>


	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<div class="card">
			<h1 class="home-link"><a href="home.html">V Beauty</a></h1>
		</div>
	</div>






	<div class="container">
			<h2>Product list</h2>

		<!-- 	<ul>
				<li><a href="product_item.php?id=1">product 1</a></li>
				<li><a href="product_item.php?id=2">product 2</a></li>
				<li><a href="product_item.php?id=3">product 3</a></li>
				<li><a href="product_item.php?id=4">product 4</a></li>
			</ul> -->



			<?php 

			$result = makeQuery(
				makeConn(),
				"
				SELECT *
				FROM `products`
				ORDER BY `date_create` DESC
				LIMIT 12
				"
			);

			// print_p($result);

			echo "<div class='productlist grid gap'>", array_reduce($result, 'productListTemplate'), "</div>";

			?>

	</div>
	
<?php include "parts/footer.php"; ?>
	
</body>
</html>