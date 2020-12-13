<?php

include_once "lib/php/function.php";

?>

<input type="checkbox" id="menu" class="hidden">
<header class ="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>&Plants Co.</h1>
			</div>
			<div class="flex-stretch"></div>

			<div class="flex-none menu-button">
				<label for="menu">&equiv;</label>
			</div>

			<nav class="nav nav-flex flex-none">

				<ul>
					<li><a href="home.php">Home</a></li>
					<li><a href="product_list.php">Store</a></li>
					<li><a href="cart2.php">
						<span>Cart</span>
						<span class="badge"><?= makeCartBadge(); ?></span>
				</a></li>
				</ul>
			</nav>
		</div>
	</header>
