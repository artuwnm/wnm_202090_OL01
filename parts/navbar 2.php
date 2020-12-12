<?php

include_once "lib/php/functions.php";

	$php_self = $_SERVER['PHP_SELF'];
	$page = substr($php_self, 1, strlen($php_self) - 5);
?>

<input type="checkbox" id="menu" class="hidden">

	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none menu-button">
				<label for="menu">&equiv;</label>
				<h1>Sushi Ichiban</h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class="nav nav-flex flex-none">
				<ul>
					<li><a href="landing_page.php">Home</a></li>
					<li><a href="product_list.php">Menu</a></li>
					<li><a href="cart.php">
						<span>Cart</span>
						<span class="badge"><?= makeCartBadge(); ?></span></a></li>					
				</ul>
			</nav>
		</div>
	</header>

