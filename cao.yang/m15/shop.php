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

	<header class="navbar">
		<div class="container display-flex">
			<nav class="nav nav-flex flex-none">
				<ul>
					<li><a href="shop.php">Shop</a></li>
					<li><a href="#">Contact</a></li>
					<li class="display-flex flex-none">
						<div>
							<a href="#search"  data-toggle="search-form"><i class="fas">&#xf002;</i></a>
						</div>
						<div class="search-form-wrapper">
							<form class="hotdog light" id="product-search">
								<input type="search" placeholder="Search">
							</form>
						</div>
					</li>
				</ul>
			</nav>

			<div class="flex-stretch"></div>
			<div class="flex-none">
				<h1><a href="home.php">Shop IT Solution</a></h1>
			</div>

			<div class="flex-stretch"></div>
			<nav class="nav nav-flex flex-none">
				<ul>
					<li><a href="#"><i class="fas" style="font-size: 20px">&#xf4fb;</i></a></li>
					<li><a href="cart.php">
						<i class="fas" style="font-size: 20px">&#xf07a;</i>
						<span class="badge"><?=makeCartBadge();?></span>
					</a></li>
				</ul>
			</nav>
		</div>
</header>


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