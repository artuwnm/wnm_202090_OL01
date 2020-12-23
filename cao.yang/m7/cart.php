<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cart-Shop IT Solution</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>

	<?php include "parts/navbar.php"; ?>
	<main>
		<div id="navigations" class="container crumbs">
			<div>
				<script>
					const makeNav = (classes='') => {
						const links = ['Home', 'Shop', 'Cart'];
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
			<div class="cart display-flex flex-stretch">
				<div>
					<img src="img/7.png">
				</div>
				<div  class="cartinfo display-flex flex-stretch">
					<div>
						<p>Product</p>
						<p class="remove"><a href="#">✕ Remove</a></p>
					</div>
					<div>
						<p>Quatity: 1</p>
					</div>
					<div>
						<p>$799</p>
					</div>
				</div>
				<div class="summary card soft">
					<h4>Order Summary</h4>
					<br>
					<p>Item Total: $799</p>
					<p>Shipping: Free</p>
					<hr>
					<p>SUBTOTAL: $799</p>
					<button class="form-button" onclick="window.location.href='checkout.php'">Checkout</button>
				</div>
			</div>
		</div>
	

	</main>

<?php include "parts/footer.php"; ?>
</body>

</html>