<?php 
	include_once "lib/php/functions.php"; 
	include_once "parts/templates.php"; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blingbling & Co.</title>

	<?php include "parts/meta.php"; ?>

</head>
	<div class="freeship">
			<h3>FREE SHIPPING OVER $100. GET 10% OFF.</h3>
		</div>

<body class="flush">
	<?php include "parts/navbar.php"; ?>

	<div class="view-window" style="background-image: url(img/timg.jpg)">
		<div class="fill-parent display-flex flex-align-center flex-justify-center" style="text-align: center; color:white; font-size: 4em; margin:1.5em;">
			<h1>Blingbling & Co.</h1>
		</div>

		<div class="col-sm" style="text-align: center; color:white; font-size: 1em; margin:9em;">
     	<h2>Jewellery</h2>
		<p>Our jewelry builds on a legacy of over 100 years of craftsmanship with beautifully designed necklaces and pendantbracelets, rings and more.</p>
				
   		</div>

	</div>

	<div class="container">
		<h2>Latest Necklace</h2>
		<?php recommendedCategory("necklace"); ?>
		<h2>Latest Earring</h2>
		<?php recommendedCategory("earring"); ?>
	</div>
	
	<?php include "parts/footer.php"; ?>
</body>
</html>

