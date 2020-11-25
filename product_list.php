<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Menu - SUSHI ICHIBAN</title>

	<?php include "parts/meta.php";?>

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

			

		<div class='productlist grid gap'></div>
	</div>




</body>
</html>