<?php 
	include "lib/php/debug.php";
	include_once "lib/php/functions.php";
	include_once "parts/templates.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include "parts/meta.php"; ?>
	<title>Product List</title>
<!-- 	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product_list.js"></script> -->
</head>
<body>
	<?php include "parts/navbar.php"; ?>

	<div class="grid">

		<div class="side-filter-container col-md-2 col-sm-12 form-control">
			<hr>
			<div>
				<a class="filter-link" data-filter="product_category" data-value="">All</a>
			</div>
			<hr>
			<div>
				<a class="filter-link" data-filter="product_category" data-value="top">Top</a>
			</div>
			<hr>
			<div>
				<a class="filter-link" data-filter="product_category" data-value="pants">Pants</a>
			</div>
			<hr>
		</div>
		
		    
		<div class="col-md-10 col-sm-12">
			<br>
			<!-- Products sorting bar -->
			<div class="product-container display-flex flex-align-center container">
				<form action="">
					<label>Sort by:</label>
					<select class="js-sort">
						<option value="4">Price: high to low</option>
						<option value="3">Price: low to high</option>
						<option value="1" selected>Newest First</option>
						<option value="2">Oldest</option>
					</select>
				</form>
				<p style="margin-left:8px;">12 items</p>
			</div>
			<br>
			
			<div class="container">
			<!-- 		<div class="form-control">
					<form id="product-search" action="" class="hotdog" >
						<input class="search-input" type="search" placeholder="Search Products">
					</form>
				</div>
			 -->
			
				<div class='product_list grid gap xs-small md-medium lg-large'>
		    	</div>
			</div>
		</div>
	</div>
	<br>
	<br>
	<?php include "parts/footer.php"; ?>
	
</body>
</html>