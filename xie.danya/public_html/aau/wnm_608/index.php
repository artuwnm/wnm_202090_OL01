<?php
include_once "lib/php/functions.php";
include_once "parts/templates.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DA-IE Jewelry</title>

	<?php include "parts/meta.php"; ?>
</head>

<body>

	<!-- header>h1+p -->
	<input type="checkbox" id="menu" class="hidden">
	<header class="navbar">
		<div class="header-background" style="background-image: url('img/header.jpg');">
			<div class="main-nav">
				<div class="container display-flex">
					<div class="flex-none">
						<h2>DA-IE</h2>
					</div>
					<div class="flex-stretch"></div>
					<div class="flex-none menu-button">
						<label for="menu">&equiv;</label>
					</div>
					<nav class="nav nav-flex flex-none">
						<ul class="container display-flex">
							<li><a href="index.php">HOME</a></li>
							<li><a href="product_list.php">SHOP</a></li>
							<li><a href="about.php">ABOUT</a></li>
							<li><a href="cart.php">
									<span>CART</span>
									<span class="badge"><?= makeCartBadge(); ?></span>
								</a></li>
						</ul>
					</nav>
				</div>
			</div>
			<div class="container">
				<div class="header-title">
					<h1>DA-IE Jewelry</h1>
					<h3>New Collection Arrives</h3>
					<div class="form-control">
						<a href="product_list.php" class="btn shopnow">SHOP NOW</a>
					</div>
				</div>
			</div>
		</div>
	</header>


	<!-- catalog-->
	<div class="container">
		<div class="catalog">
			<div class="catalog-item">
				<a href="http://danyaxie.com/aau/wnm_608/product_list.php"><img class="catalog-item-image" src="img/ring.jpg" alt="Rings"></a>
				<div class="catalog-name">Rings</div>
			</div>
			<div class="catalog-item">
				<a href="http://danyaxie.com/aau/wnm_608/product_list.php"><img class="catalog-item-image" src="img/earring.jpg" alt="Earrings"></a>
				<div class="catalog-name">Earrings</div>
			</div>
			<div class="catalog-item">
				<a href="http://danyaxie.com/aau/wnm_608/product_list.php"><img class="catalog-item-image" src="img/necklace.jpg" alt="Necklaces"></a>
				<div class="catalog-name">Necklaces</div>
			</div>
			<div class="catalog-item">
				<a href="http://danyaxie.com/aau/wnm_608/product_list.php"><img class="catalog-item-image" src="img/bracelet.jpg" alt="Bracelets"></a>
				<div class="catalog-name">Bracelets</div>
			</div>
		</div>

	</div>

	<!-- most popular -->

	<div class="most-popular">
		<div class="popular-background">
			<div class="container">
				<div class="popular-content">
					<h3>Most Popular</h3>
					<div class="popular-item-row">
						<div class="popular-item">
							<a href="product_item.php?id=1"><img src="img/1_1.jpg" style="width:285px; height: 285px;"></a>
							<div>Verna Double Hoops Earrings</div>
							<div class="popular-price">$150</div>
						</div>
						<div class="popular-item">
							<a href="product_item.php?id=2"><img src="img/2_1.jpg" style="width:285px; height: 285px;"></a>
							<div>Marjorie Double Ring</div>
							<div class="popular-price">$180</div>
						</div>
						<div class="popular-item">
							<a href="product_item.php?id=3"><img src="img/3_1.jpg" style="width:285px; height: 285px;"></a>
							<div>Alexa Cross Ring</div>
							<div class="popular-price">$110</div>
						</div>
						<div class="popular-item">
							<a href="product_item.php?id=4"><img src="img/4_1.jpg" style="width:285px; height: 285px;"></a>
							<div>Riley Earrings</div>
							<div class="popular-price">$120</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="view-window" style="background-image: url('img/footer.jpg')"></div>

	<!--div class="container">
    	<h3>New Arrivals</h3>
    	<?php recommendedCategory("rings"); ?>	
    </div-->



	<?php include "parts/footer.php"; ?>



</body>

</html>