<?php
	$php_self = $_SERVER['PHP_SELF'];
	$page = substr($php_self, 1, strlen($php_self) - 5);
?>

	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>Sushi Ichiban</h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class="nav nav-flex flex-none">
				<ul>
					<li><a href="#">Menu</a></li>
					<li><a href="#">Catering</a></li>
					<li><a href="#">Contact</a></li>					
				</ul>
			</nav>
		</div>
	</header>

