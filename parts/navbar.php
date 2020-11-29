<?php

include_once "lib/php/functions.php";

	
?>

	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>Sushi Ichiban</h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class="nav nav-flex flex-none">
				<ul>
					<li><a href="AAU/WNM608/landing_page.php">Home</a></li>
					<li><a href="AAU/WNM608/product_list.php">Menu</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="AAU/WNM608/cart.php">
						<span>Cart</span>
						<span class="badge"><?= makeCartBadge(); ?></span></a></li>					
				</ul>
			</nav>
		</div>
	</header>

