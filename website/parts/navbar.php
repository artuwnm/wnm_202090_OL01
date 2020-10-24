<?php
	$php_self = $_SERVER['PHP_SELF'];
	$page = substr($php_self, 1, strlen($php_self) - 5);
?>

	<header class="navbar">
		<div class="infobar">
			<div class="message container">
				Free shipping on orders over $75
			</div>
		</div>

		<div class="mainbar container display-flex">
			<div class="flex-none">
				<a href="/" class="home-link"><h1 class="logo">tova</h1></a>
			</div>
			<div class="flex-stretch"></div>
			<nav class="flex-none">
				<ul class="container display-flex">
					   <li><a <?php echo($page=="story"?"class=\"selected\"":""); ?> href="/story.php">Our Story</a></li>
					   <li><a <?php echo($page=="blog"?"class=\"selected\"":""); ?> href="/blog.php">The Blog</a></li>
					   <li><a <?php echo($page=="cart"?"class=\"selected\"":""); ?>  href="/cart.php">Cart (0)</a></li>
					<li> • <a <?php echo($page=="currency"?"class=\"selected\"":""); ?> href="/currency.php">USD</a></li>
				</ul> 
			</nav>
		</div>
	</header>