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






	<div class="carousel">

			<div class="slides">
				<div class="slide center"
					style="background:url(img/home_1.jpg) center; background-size: cover;"></div>
				<div class="slide" style="background:url(img/home_2.jpg) center; background-size: cover;"></div>
				<div class="slide" style="background:url(img/home_3.jpg) center; background-size: cover;"></div>
			</div>
            
         

			<div class="controls">
				<div class="control-left">&lt;</div>
				<div class="control-right">&gt;</div>
				<div class="control-pagination">
					<div class="control-dot">&bullet;</div>
					<div class="control-dot">&bullet;</div>
					<div class="control-dot">&bullet;</div>
				</div>
			</div>
	</div>
         



         <div class="container-home">
         <article class="card hard">
				<h2 class="vbeauty">V Beauty</h2>
				<div class="article-body">
					<p>V beauty is a cosmetics shopping website, mainly selling Korean cosmetics and skin care products. In the United States, there are few Korean cosmetics stores.  In few stores, products are limited, and the price is high. This 
website solves the problem of cosmetics shopping in Korea. The price is reasonable, and the products are diversified.</p>
					
				</div>
			</article>
            </div>


            </script>
        <script type="text/javascript">
            new Carousel({
		element: $(".carousel").eq(0),
		timing: 6000
	});
        </script>



	<?php include "parts/footer.php"; ?>

</body>
</html>