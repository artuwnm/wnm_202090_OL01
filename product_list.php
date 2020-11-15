<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List - SUSHI ICHIBAN</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="lib/css/styleguide4.css">
	<link rel="stylesheet" type="text/css" href="/lib/css/gridsystem.css">
	<link rel="stylesheet" type="text/css" href="css/storetheme.css">
	<link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

	<script type="http://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>
	
	<?php include "parts/navbar.php"; ?>


	<div class="container">
		<div class="card soft">
			<h2>Product List</h2>

			

		<?php
		
		include_once "lib/php/functions.php";
		include_once "parts/templates.php";

		$result = makeQuery(
			makeConn(),
			"
			SELECT *
			FROM `products`
			ORDER BY `price` DESC

			"
		);

		echo "<div class='grid gap'>", array_reduce($result,'productListTemplate'),"</div>";
		?>

		</div>
	</div>




</body>
</html>