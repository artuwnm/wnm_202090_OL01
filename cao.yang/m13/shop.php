<?php


include_once "lib/php/functions.php";
include_once "parts/templates.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shop-Shop IT Solution</title>

	<?php include "parts/meta.php"; ?>

	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product_list.js"></script>

</head>
<body>

	<?php include "parts/navbar.php"; ?>

	<div class="container shop">
		<div class="sidebar nav" id="navigations">
			<ul class="flex-none">
				<a data-filter="category" data-value="">All</a>
			</ul>
			<ul class="flex-none">
				<a data-filter="category" data-value="computers">Computer</a>
			</ul>
			<ul class="flex-none">
				<a data-filter="category" data-value="cell phones">Cell Phone</a>
			</ul>
			<ul class="flex-none">
				<a data-filter="category" data-value="music">Music</a>
			</ul>			
			<ul class="flex-none">
				<a data-filter="category" data-value="accessories">Accessory</a>
			</ul>
		</div>
	</div>


	<div class="container items">

		<div class="sort display-flex">
			<div class="form-select">
				<select class="js-sort">
					<option value="1">Newest</option>
					<option value="2">Oldest</option>
					<option value="3">Price Low to High</option>
					<option value="4">Price Hight to Low</option>
				</select>
			</div>	
		</div>

		<div class='productlist grid gap'></div>
	</div>

</main>
<?php include "parts/footer.php"; ?>




</body>

</html>