<?php

include_once "lib/php/functions.php";

?>

<header class="navbar shop">
	<div>
		<div class="main-nav">
			<div class="container display-flex">
			<div class="flex-none logo">
				<h2><a href="index.php">DA-IE</a></h2>
			</div>
			<div class="flex-stretch"></div>
			    <nav class="flex-none nav">
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
	</div>
</header>