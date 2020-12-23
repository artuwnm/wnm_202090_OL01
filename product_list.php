<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Menu - SUSHI ICHIBAN</title>

	<?php include "parts/meta.php";?>
	
	<link rel="stylesheet" type="text/css" href="AAU/WNM608/css/storetheme.css">
	<script src="AAU/WNM608/lib/js/functions.js"></script>
	<script src="AAU/WNM608/js/templates.js"></script>
	<script src="AAU/WNM608/js/product_list.js"></script>

</head>
<body>
	
	<?php include "parts/navbar.php"; ?>


	<div class="container">
		<h2>Menu</h2>

			<div class="form-control">
				<form class="hotdog light" id="product-search">
					<input type="search" placeholder="Search Products">
				</form>
			</div>
			<div class="form-control">
				<div class="card soft display-flex flex-wrap">
					<div class="flex-none">
						<button data-filter="category" data-value="appetizer" type="button" class="button 2">Appetizer</button>
					</div>
					<div class="flex-none">
						<button data-filter="category" data-value="entree" type="button" class="button 2">Entree</button>
					</div>
					<div class="flex-none">
						<button data-filter="category" data-value="dessert" type="button" class="button 2">Dessert</button>
					</div>
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

			

		<div class='productlist grid gap'></div>
	</div>




</body>
</html>