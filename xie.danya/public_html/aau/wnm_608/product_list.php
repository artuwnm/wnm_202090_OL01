<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DA-IE Jewelry | Shop</title>

	<?php include "parts/meta.php"; ?>

	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product_list.js"></script>
</head>
<body>
	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<div class="form-control">
			<form class="hotdog light" id="product-search">
				<input type="search" placeholder="Search Products">
			</form>
		</div> 
		<div class="display-flex flex-wrap">
			<div class="flex-stretch display-flex">
				<div class="flex-none">
					<button data-filter="category" data-value="" type="button" class="btn filter">All</button>
				</div>
				<div class="flex-none">
					<button data-filter="category" data-value="rings" type="button" class="btn filter">Rings</button>
				</div>
				<div class="flex-none">
					<button data-filter="category" data-value="earrings" type="button" class="btn filter">Earrings</button>
				</div>
				<div class="flex-none">
					<button data-filter="category" data-value="necklace" type="button" class="btn filter">Necklaces</button>
				</div>
				<div class="flex-none">
					<button data-filter="category" data-value="bracelet" type="button" class="btn filter">Bracelets</button>
				</div>
			</div>
			<div class="flex-none">		
				<div class="form-select sort">
					<select class="js-sort">
						<option value="1">Newest</option>
						<option value="2">Oldest</option>
						<option value="3">Least Expensive</option>
						<option value="4">Most Expensive</option>
					</select>
				</div>
			</div>
		</div>
		<div class='productlist grid gap'></div>      
	</div>	


	 <?php include "parts/footer.php"; ?> 




</body>
</html>