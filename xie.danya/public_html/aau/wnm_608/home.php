<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DA-IE Jewelry</title>
	
	<?php include "parts/meta.php"; ?>
</head>
<body>
	
	<!-- header>h1+p -->
	<header class="navbar">
		<div class="header-background" style="background-image: url('img/header.jpg')">
			<div class="main-nav">
				<div class="container display-flex">
				<div class="flex-none">
					<h2>DA-IE</h2>
				</div>
				<div class="flex-stretch"></div>
				 <nav class="flex-none nav">
				    <ul class="container display-flex">
				   	   <li><a href="home.php">HOME</a></li>
					   <li><a href="product_list.php">SHOP</a></li>
					   <li><a href="about.php">ABOUT</a></li>
					   <li><a href="cart.php">CART</a></li>
				    </ul>
				 </nav>
				</div>
			</div>
		    <div class="container">
				<div class="header-title">
					<h1>DA-IE Jewelry</h1>
					<h3>New Collection Arrives</h3>
					<div class="form-control">
						<a href="#" class="btn shopnow">ADD TO CART</a>
					</div>
				</div>
		    </div>
		</div>
	</header>


	<!-- catalog-->
	<div class="container">
		<div class="catalog">
			<div class="catalog-item">
				<img src="img/ring.jpg" alt="Rings" style="width:285px; height: 190px;">
				<div class="catalog-name">Rings</div>
			</div>
			<div class="catalog-item">
				<img src="img/earring.jpg" alt="Earrings" style="width:285px; height: 190px;">
				<div class="catalog-name">Earrings</div>
			</div>
			<div class="catalog-item">
				<img src="img/necklace.jpg" alt="Necklaces" style="width:285px; height: 190px;">
				<div class="catalog-name">Necklaces</div>
			</div>
			<div class="catalog-item-1">
				<img src="img/bracelet.jpg" alt="Bracelets" style="width:285px; height: 190px;">
				<div class="catalog-name">Bracelets</div>
			</div>
		</div>
		
	</div>

		<!-- most popualr -->

	<div class="most-popular">
		<div class="popular-background">
			<div class="container">
				<div class="popular-content">
					<h3>Most Popular</h3>					
					<div class="popular-item-row">
						<div class="popular-item">
							<a href="product_1.php"><img src="img/1.JPG" style="width:285px; height: 285px;"></a>
							<div>Verna Double Hoops Earrings</div>
							<div class="popular-price">$150</div>
						</div>
						<div class="popular-item">
							<img src="img/2.JPG" style="width:285px; height: 285px;">
							<div>Marjorie Double Ring</div>
							<div class="popular-price">$180</div>
						</div>
						<div class="popular-item">
							<img src="img/3.JPG" style="width:285px; height: 285px;">
							<div>Alexa Cross Ring</div>
							<div class="popular-price">$110</div>
						</div>
						<div class="popular-item">
							<img src="img/4.JPG" style="width:285px; height: 285px;">
							<div>Riley Earrings</div>
							<div class="popular-price">$120</div>
						</div>
					</div>
			    </div>
		     </div>     
	    </div>
    </div>
          

	<div class="view-window" style="background-image: url('img/footer.jpg')"></div>

	<?php include "parts/footer.php"; ?> 



</body>
</html>