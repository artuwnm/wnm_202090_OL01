<?php

	include_once "lib/php/function.php";
	include_once "parts/templates.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Product Page</title>

	<?php include "parts/meta.php"; ?>	

	<script type="text/javascript" src="js/jquery-3.5.0.min.js"></script>

	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product_list.js"></script>


</head>
<body>


	<?php include "parts/navbar.php";?>


	<div class="container">

		<h1 align="center">Shop Our Plants</h1>
		<center>Shopping for plants can be stressful especially if you’re a new plant parent. How much sun does a plant need? How often should you water them? Is this plant safe for pets? Even after purchase, we still want to help. Every purchase will come with a care card, so you can continue to provide the best care for your plant. </center><br>

</div>

	<div class="container">

		<div class="form-control">
			<form class="hotdog" id="product-search">
				<input type="search" placeholder="Search Products">
			</form>
		</div>


	<div class="form-control">
	<div class="card soft">
		<div class="display-flex flex-wrap">
			<div class="flex-stretch display-flex flex-wrap">
			<div class="flex-none">
				<button data-filter="size" data-value="" type="button" class="form-button">All Plants</button>
			</div>
			<div class="flex-none">
				<button data-filter="size" data-value="Small" type="button" class="form-button">Small</button>
			</div>
			<div class="flex-none">
				<button data-filter="size" data-value="Medium" type="button" class="form-button">Medium</button>
			</div>
			<div class="flex-none">
				<button data-filter="size" data-value="Large" type="button" class="form-button">Large</button>
			</div>
			<div class="flex-none">
				<button data-filter="size" data-value="XL" type="button" class="form-button">XL</button>
			</div>
		</div>
	<div class="flex-none">
		<div class="form-select">
				<select class="js-sort">
					<option value="1">Newest</option>
					<option value="2">Oldest</option>
					<option value="3">Least Expensive</option>
					<option value="4">Most Expensive</option>
				</select>
			</div>
		</div>
	</div>
</div>
</div>
		
		<div class='productlist grid gap'></div>


	<?php include "parts/footer.php"; ?>


</body>
</html>