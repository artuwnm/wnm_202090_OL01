<?php 
include "lib/php/debug.php"; 
include "parts/templates.php"; 
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

	<!-- header -->
	<?php include "parts/navbar.php"; ?>
	
	<div class="container">
		<div class="view-window header-img-container display-flex flex-align-center">
	        <h3 class="flex-basis_third text-align-center word-spacing">EXTRA 25% OFF SALE & CLEARANCE</h3>
	        <h1 class="flex-basis_third text-align-center">UP TO 75% OFF</h1>
	        <h3 class="flex-basis_third text-align-center">SHOP NOW</h3>
		</div>
	</div>

	<div class="container">
		<h3 class="card_heading">NEW FOR YOU</h3>
		<?php recommendedCategory("top") ?>

		<h3 class="card_heading">LATEST</h3>
		<?php recommendedCategory("pants") ?>
	</div>
	<br>
	
	<!-- footer -->
	<?php include "parts/footer.php"; ?>
	
</body>
