<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>

	<?php include "parts/meta.php"; ?>
	<script type="text/javascript" src="js/jquery-3.5.0.min.js"></script>
	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product_list.js"></script>
</head>
<body>
	<?php ini_set("display_errors","On"); ?>


	<?php include "parts/navbar.php"; ?>






	<div class="container">
			<h2>Product List</h2>
	
			<div class="form-control">
				<form class="hotdog light" id="product-search">
					<input type="search" placeholder="Search Products">
				</form>
			</div>

			<div class="productlist grid gap"></div>
	</div>



	<?php include "parts/footer.php"; ?>

</body>
</html>