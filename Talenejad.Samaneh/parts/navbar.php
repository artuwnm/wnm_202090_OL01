
	<?php
include_once "lib/php/functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/storetheme.css">
	<title>Document</title>
</head>
<body>
	<header>

		<div class="container top-nav-container" style="direction: rtl;">
			<a class="signInLink" href="index.php">Sign In / Register</a>
		</div>

		<div id="header-container" class="container display-flex flex-align-center">

			<!-- Vertical Nav Bar -->
	 		<div>
	 			<div class="menu-icon-container flex-stretch" onclick="openNav()"></div>
	 			<div id="sideNav" class="overlay">
	 				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	 				<div class="overlay-content">
	 					<a href="index.php">HOME</a>
	 					<a href="product_list.php">SHOP</a>
	 					<a href="index.php">CONTACT</a>
	 					<a href="index.php">SALE</a>
	 				</div>
	 			</div>
	 		</div>

		 	<div>
				<h1>SAMTALTH</h1>		 		
		 	</div>
		
			<div class="horizontal-nav-container">
				<ul class="nav display-flex justify-content" >
					<li class="flex-stretch"><a href="index.php">HOME</a></li>
					<li class="flex-stretch"><a href="product_list.php">SHOP</a></li>
					<li class="flex-stretch"><a href="index.php">CONTACT</a></li>
					<li class="flex-stretch"><a href="index.php">SALE</a></li>
				</ul>
			</div>
	 	
			<div class="header-checkout-container">
				<a class="cartButton" href="shopping_cart.php">
					<span>CART</span>
					<span class="badge"><?= makeCartBadge(); ?></span>
				</a>
			</div>

			<div class="header-search-bar-container flex-stretch">
				<form id="product-search" class="header-search-bar" action="">
					<input id="header-search-keyword" type="search" placeholder="Search Products" value="">
					<i class="fa fa-search"></i>
				</form>
			</div>

		</div>

	</header>
</body>
</html>
