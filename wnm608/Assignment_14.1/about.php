<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>

	<?php include "parts/meta.php"; ?>
	<script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
    <script type="text/javascript" src="lib/js/carousel.js"></script>
	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product_list.js"></script>
</head>
<body>
	<?php ini_set("display_errors","On"); ?>


	<?php include "parts/navbar.php"; ?>
	<div class="container">
		<div class="card">
			<h1 class="home-link"><a href="home.html">V Beauty</a></h1>
		</div>
	</div>






	<div class="container">
		<div class="grid gap">
			<div class="col-xs-12 col-md-12">

		<div class="card soft">

                    <div>
					<img src="img/moisturelotion.jpg">
				</div>

						<div class="about-article">
                    		<p>V beauty is a cosmetics shopping website, mainly selling Korean cosmetics and skin care products. In the United States, there are few Korean cosmetics stores.  In few stores, products are limited, and the price is high. This 
website solves the problem of cosmetics shopping in Korea. The price is reasonable, and the products are diversified.</p>
                    	</div>

						
					</div>
				</div>
			</div>


	</div>




	<?php include "parts/footer.php"; ?>

</body>
</html>