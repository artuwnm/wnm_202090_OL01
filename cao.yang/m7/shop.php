<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shop-Shop IT Solution</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>

	<?php include "parts/navbar.php"; ?>

	<main>

		<div class="container shop">
			<div class="sidebar" id="navigations">

				<script>
					const makeNav = (classes='') => {
						const links = ['New Arrivals', 'Cameras', 'Cell Phones', 'Computers', 'Fitness & Personla Care', 'Music', 'Smart Home', 'TV & Home Theater', 'Sale'];
						let ran = Math.floor(Math.random()*links.length);
						document.write(`
						<div>
							<nav class="${classes}">
								<ul>
								${links.reduce((r,o,i)=>{
									return r+`<li class="${ran==i?'active':''}"><a href='#'>${o}</a></li>`;
								},'')}
								</ul>
							</nav>
						</div>
						`);
					}
				</script>

				<div>
					<script>makeNav('nav')</script>
				</div>

				<script>
					$("#navigations a").on("click", function(e){
						e.preventDefault();
						$(this).closest("li").addClass("active")
							.siblings().removeClass("active")
					})
				</script>

			</div>

			<div class="items">
				<div class="grid gap">
					<div class="col-xs-12 col-md-3">
						<figure class="figure product-overlay">
							<img src="img/7.png" alt="">
							<figcaption>
								<div class="caption-body">
									<div><a href="product.php">Product Name</a></div>
									<div>$3.99</div>
								</div>
							</figcaption>
						</figure>
					</div>

					<div class="col-xs-12 col-md-3">
						<figure class="figure product-overlay">
							<img src="img/8.png" alt="">
							<figcaption>
								<div class="caption-body">
									<div><a href="product.php">Product Name</a></div>
									<div>$3.99</div>
								</div>
							</figcaption>
						</figure>
					</div>

					<div class="col-xs-12 col-md-3">
						<figure class="figure product-overlay">
							<img src="img/9.png" alt="">
							<figcaption>
								<div class="caption-body">
									<div><a href="product.php">Product Name</a></div>
									<div>$3.99</div>
								</div>
							</figcaption>
						</figure>
					</div>

					<div class="col-xs-12 col-md-3">
						<figure class="figure product-overlay">
							<img src="img/10.png" alt="">
							<figcaption>
								<div class="caption-body">
									<div><a href="product.php">Product Name</a></div>
									<div>$3.99</div>
								</div>
							</figcaption>
						</figure>
					</div>

					<div class="col-xs-12 col-md-3">
						<figure class="figure product-overlay">
							<img src="img/11.png" alt="">
							<figcaption>
								<div class="caption-body">
									<div><a href="product.php">Product Name</a></div>
									<div>$3.99</div>
								</div>
							</figcaption>
						</figure>
					</div>

					<div class="col-xs-12 col-md-3">
						<figure class="figure product-overlay">
							<img src="img/12.png" alt="">
							<figcaption>
								<div class="caption-body">
									<div><a href="product.php">Product Name</a></div>
									<div>$3.99</div>
								</div>
							</figcaption>
						</figure>
					</div>

					<div class="col-xs-12 col-md-3">
						<figure class="figure product-overlay">
							<img src="img/13.png" alt="">
							<figcaption>
								<div class="caption-body">
									<div><a href="product.php">Product Name</a></div>
									<div>$3.99</div>
								</div>
							</figcaption>
						</figure>
					</div>

					<div class="col-xs-12 col-md-3">
						<figure class="figure product-overlay">
							<img src="img/14.png" alt="">
							<figcaption>
								<div class="caption-body">
									<div><a href="product.php">Product Name</a></div>
									<div>$3.99</div>
								</div>
							</figcaption>
						</figure>
					</div>

					<div class="col-xs-12 col-md-3">
						<figure class="figure product-overlay">
							<img src="https://via.placeholder.com/400?text=product" alt="">
							<figcaption>
								<div class="caption-body">
									<div><a href="product.php">Product Name</a></div>
									<div>$3.99</div>
								</div>
							</figcaption>
						</figure>
					</div>

					<div class="col-xs-12 col-md-3">
						<figure class="figure product-overlay">
							<img src="https://via.placeholder.com/400?text=product" alt="">
							<figcaption>
								<div class="caption-body">
									<div>Product Name</div>
									<div>$3.99</div>
								</div>
							</figcaption>
						</figure>
					</div>

					<div class="col-xs-12 col-md-3">
						<figure class="figure product-overlay">
							<img src="https://via.placeholder.com/400?text=product" alt="">
							<figcaption>
								<div class="caption-body">
									<div>Product Name</div>
									<div>$3.99</div>
								</div>
							</figcaption>
						</figure>
					</div>

					<div class="col-xs-12 col-md-3">
						<figure class="figure product-overlay">
							<img src="https://via.placeholder.com/400?text=product" alt="">
							<figcaption>
								<div class="caption-body">
									<div>Product Name</div>
									<div>$3.99</div>
								</div>
							</figcaption>
						</figure>
					</div>
									<div class="col-xs-12 col-md-3">
						<figure class="figure product-overlay">
							<img src="https://via.placeholder.com/400?text=product" alt="">
							<figcaption>
								<div class="caption-body">
									<div>Product Name</div>
									<div>$3.99</div>
								</div>
							</figcaption>
						</figure>
					</div>

					<div class="col-xs-12 col-md-3">
						<figure class="figure product-overlay">
							<img src="https://via.placeholder.com/400?text=product" alt="">
							<figcaption>
								<div class="caption-body">
									<div>Product Name</div>
									<div>$3.99</div>
								</div>
							</figcaption>
						</figure>
					</div>

					<div class="col-xs-12 col-md-3">
						<figure class="figure product-overlay">
							<img src="https://via.placeholder.com/400?text=product" alt="">
							<figcaption>
								<div class="caption-body">
									<div>Product Name</div>
									<div>$3.99</div>
								</div>
							</figcaption>
						</figure>
					</div>

					<div class="col-xs-12 col-md-3">
						<figure class="figure product-overlay">
							<img src="https://via.placeholder.com/400?text=product" alt="">
							<figcaption>
								<div class="caption-body">
									<div>Product Name</div>
									<div>$3.99</div>
								</div>
							</figcaption>
						</figure>
					</div>

					<div class="col-xs-12 col-md-3">
						<figure class="figure product-overlay">
							<img src="https://via.placeholder.com/400?text=product" alt="">
							<figcaption>
								<div class="caption-body">
									<div>Product Name</div>
									<div>$3.99</div>
								</div>
							</figcaption>
						</figure>
					</div>

					<div class="col-xs-12 col-md-3">
						<figure class="figure product-overlay">
							<img src="https://via.placeholder.com/400?text=product" alt="">
							<figcaption>
								<div class="caption-body">
									<div>Product Name</div>
									<div>$3.99</div>
								</div>
							</figcaption>
						</figure>
					</div>

					<div class="col-xs-12 col-md-3">
						<figure class="figure product-overlay">
							<img src="https://via.placeholder.com/400?text=product" alt="">
							<figcaption>
								<div class="caption-body">
									<div>Product Name</div>
									<div>$3.99</div>
								</div>
							</figcaption>
						</figure>
					</div>

					<div class="col-xs-12 col-md-3">
						<figure class="figure product-overlay">
							<img src="https://via.placeholder.com/400?text=product" alt="">
							<figcaption>
								<div class="caption-body">
									<div>Product Name</div>
									<div>$3.99</div>
								</div>
							</figcaption>
						</figure>
					</div>

					<div class="col-xs-12 col-md-3">
						<figure class="figure product-overlay">
							<img src="https://via.placeholder.com/400?text=product" alt="">
							<figcaption>
								<div class="caption-body">
									<div>Product Name</div>
									<div>$3.99</div>
								</div>
							</figcaption>
						</figure>
					</div>

					<div class="col-xs-12 col-md-3">
						<figure class="figure product-overlay">
							<img src="https://via.placeholder.com/400?text=product" alt="">
							<figcaption>
								<div class="caption-body">
									<div>Product Name</div>
									<div>$3.99</div>
								</div>
							</figcaption>
						</figure>
					</div>

					<div class="col-xs-12 col-md-3">
						<figure class="figure product-overlay">
							<img src="https://via.placeholder.com/400?text=product" alt="">
							<figcaption>
								<div class="caption-body">
									<div>Product Name</div>
									<div>$3.99</div>
								</div>
							</figcaption>
						</figure>
					</div>

					<div class="col-xs-12 col-md-3">
						<figure class="figure product-overlay">
							<img src="https://via.placeholder.com/400?text=product" alt="">
							<figcaption>
								<div class="caption-body">
									<div>Product Name</div>
									<div>$3.99</div>
								</div>
							</figcaption>
						</figure>
					</div>
				</div>
			</div>
		</div>



	</main>
	<?php include "parts/footer.php"; ?>




</body>

</html>