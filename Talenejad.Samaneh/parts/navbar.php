
<?php
	include_once "lib/php/functions.php";
?>

<header>
	<div class="container top-nav-container">
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
				<input class="header-search-keyword-input" type="search" placeholder="Search" value="">
				<i class="fa fa-search"></i>
			</form>
		</div>
	
	</div>
	<div>
		<hr class="hr-class">
	</div>
</header>



