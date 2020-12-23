<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product-Shop IT Solution</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>

	<?php include "parts/navbar.php"; ?>
	<main>
		<div class="container crumbs" id="navigations">
			<div>
				<script>
					const makeNav = (classes='') => {
						const links = ['Home', 'Shop', 'Product'];
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
			</div>

			<div>
				<script>makeNav('nav nav-crumbs')</script>
			</div>

			<script>
				$("#navigations a").on("click", function(e){
					e.preventDefault();
					$(this).closest("li").addClass("active")
						.siblings().removeClass("active")
				})
			</script>
		</div>

		<div class="container">
			<div class="product display-flex flex-stretch">
				<div class="detailimg">
					<img src="https://via.placeholder.com/400?text=product">
					<img src="https://via.placeholder.com/400?text=product">
					<img src="https://via.placeholder.com/400?text=product">
				</div>
				<div>
					<img  class="productimg" src="img/7.png">
				</div>
				<div class="info">
					<h4>Ipad Pro</h4>
					<p>$799</p>
					<p>	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
					<button class="form-button add"><a href="cart.php">Add to Cart</a></button>
				</div>
			</div>
		</div>
	
		<div class="container recommendation">
			<h4>You Might Also Like</h4>
			<div>
				<div class="grid gap">
					<div class="col-xs-8 col-md-2">
						<figure class="figure">
							<a href="#"><a href="#"><img src="img/10.png" alt=""></a>
							<figcaption>
								<div class="caption-body">
									<div>Product Name</div>
									<div>$3.99</div>
								</div>
							</figcaption>
						</figure>
					</div>

					<div class="col-xs-8 col-md-2">
						<figure class="figure">
							<a href="#"><img src="img/8.png" alt=""></a>
							<figcaption>
								<div class="caption-body">
									<div>Product Name</div>
									<div>$3.99</div>
								</div>
							</figcaption>
						</figure>
					</div>

					<div class="col-xs-8 col-md-2">
						<figure class="figure">
							<a href="#"><img src="img/9.png" alt=""></a>
							<figcaption>
								<div class="caption-body">
									<div>Product Name</div>
									<div>$3.99</div>
								</div>
							</figcaption>
						</figure>
					</div>

					<div class="col-xs-8 col-md-2">
						<figure class="figure">
							<a href="#"><img src="img/7.png" alt=""></a>
							<figcaption>
								<div class="caption-body">
									<div>Product Name</div>
									<div>$3.99</div>
								</div>
							</figcaption>
						</figure>
					</div>

					<div class="col-xs-8 col-md-2">
						<figure class="figure">
							<a href="#"><img src="img/11.png" alt=""></a>
							<figcaption>
								<div class="caption-body">
									<div>Product Name</div>
									<div>$3.99</div>
								</div>
							</figcaption>
						</figure>
					</div>

					<div class="col-xs-8 col-md-2">
						<figure class="figure">
							<a href="#"><img src="img/12.png" alt=""></a>
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