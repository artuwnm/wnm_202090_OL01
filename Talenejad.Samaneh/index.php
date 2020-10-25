<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include "parts/meta.php"; ?>
	<title>My Store</title>
</head>
<body>

	<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	?>
	
   <?php include "parts/product_data.php"; ?>

	<?php include "parts/navbar.php"; ?>
	<div class="view-window header-img-container display-flex flex-align-center">
        <h3 class="flex-basis_third text-align-center word-spacing">EXTRA 25% OFF SALE & CLEARANCE</h3>
        <h1 class="flex-basis_third text-align-center">UP TO 75% OFF</h1>
        <h3 class="flex-basis_third text-align-center">SHOP NOW</h3>
	</div>

	<?php include "parts/section.php"; ?>
	<?php include "parts/footer.php"; ?>

	
</body>
</html>