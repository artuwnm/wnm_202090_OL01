<?php

include_once "lib/php/functions.php";


?>

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





