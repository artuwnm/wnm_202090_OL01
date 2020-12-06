<?php 
include "lib/php/debug.php"; 
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include "parts/meta.php"; ?>
	<title>My Store</title>
</head>
<body>
	<?php include "parts/navbar.php"; ?>
	<?php include "parts/templates.php"; ?>
	
	<div class="container">
		<div class="view-window header-img-container display-flex flex-align-center">
		        <h3 class="flex-basis_third text-align-center word-spacing">EXTRA 25% OFF SALE & CLEARANCE</h3>
		        <h1 class="flex-basis_third text-align-center">UP TO 75% OFF</h1>
		        <h3 class="flex-basis_third text-align-center">SHOP NOW</h3>
		</div>
		
		<h4 class="card_heading">NEW FOR YOU</h4>
		<?php recommendedCategory("top") ?>

		<h4 class="card_heading">LATEST</h4>
		<?php recommendedCategory("pants") ?>
	</div


	<?php include "parts/footer.php"; ?>

</body>
