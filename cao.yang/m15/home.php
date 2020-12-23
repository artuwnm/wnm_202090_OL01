<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";
?>

<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8">
	<title>Shop IT Solution</title>


	<?php include "parts/meta.php"; ?>
	
</head>
<body>

	<?php include "parts/navbar.php"; ?>

	<main>
		<div>
			<img id="landing" src="img/tech.jpg">
		</div>

		<div class="container">
			<div class=" heading">
				<h1>Trending</h1>
				<h3>Top pick for the holiday season</h3>
			</div>


			<div>
				<?php recommendedCategory("cell phones"); ?>
				
			</div>


			<div class="display-flex flex-align-center flex-justify-center">
				<button class="form-button" type="button" onclick="window.location.href='shop.php'">Shop Now</button>
			</div>
		</div>

		<div class="view-window" style="background-image:url('img/homepage2.png')"></div>

		<div>
			<h3>Become an IT Insider</h3>
			<div class="subscribe">
 				<input class="hotdog" type="email" placeholder="Email">
				<button class="form-button">Subscribe</button>		
			</div>
		</div>



	</main>
	
	<?php include "parts/footer.php"; ?>

</body>
</html>