<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Checkout-Shop IT Solution</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>

	<?php include "parts/navbar.php"; ?>
	<main>
		<div id="navigations" class="container crumbs">
			<div>
				<script>
					const makeNav = (classes='') => {
						const links = ['Home', 'Shop', 'Cart', 'Checkout'];
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

		<div class="checkout display-flex flex-stretch">
			<div class="container cardinfo">
				<form>
					<div class="form-control">
						<label class="form-label">First Name</label>
						<input type="text" class="form-input">
					</div>
					<div class="form-control">
						<label class="form-label">Last Name</label>
						<input type="text" class="form-input">
					</div>
					<div class="form-control">
						<label class="form-label">Email</label>
						<input type="email" class="form-input">
					</div>
					<div class="form-control">
						<label class="form-label">Address</label>
						<input type="text" placeholder="street address" class="form-input">
					</div>
					<div class="form-control display-flex flex-align-center">
						<div class="flex-none">
							<label class="form-label">City</label>
						</div>
						<div class="flex-stretch">
							<input type="search" class="form-input flex-stretch">
						</div>
						<div class="flex-none">
							<label class="form-label">State</label>
						</div>
						<div class="flex-stretch">
							<input type="search" class="form-input flex-stretch">
						</div>
						<div class="flex-none">
							<label class="form-label">Zip Code</label>
						</div>
						<div class="flex-stretch">
							<input type="number" class="form-input flex-stretch">
						</div>
					</div>
					<div class="form-control">
						<label class="form-label">Phone Number</label>
						<input type="number" placeholder="(xxx)xxx-xxxx" class="form-input">
					</div>
					<div class="form-control display-flex flex-align-center">
						<div class="flex-none">
							<label class="form-label">Credit Card Number</label>
						</div>
						<div class="flex-stretch">
							<input type="number" class="form-input flex-stretch">
						</div>
						<div class="flex-none">
							<label class="form-label">Expiration Date</label>
						</div>
						<div class="flex-stretch">
							<input type="date" class="form-input flex-stretch">
						</div>
						<div class="flex-none">
							<label class="form-label">CVV</label>
						</div>
						<div class="flex-stretch">
							<input type="number" class="form-input flex-stretch">
						</div>
					</div>

				</form>
			</div>

			<div class="container card soft orderdetail">
				<div class="orderitem display-flex">
					<img src="img/7.png">
					<div>
						<p>Product</p>
						<p>Quatity: 1</p>
					</div>
				</div>
				<div class="orderinfo">
					<div><p>Subtotal:</p><p>$799</p></div>
					<div><p>Tax:</p><p>$9.80</p></div>
					<div><p>Shipping:</p><p>free</p></div>
					<hr>
				</div>
				<div class="total"><p>TOTAL:</p><p>$808.80</p></div>
				<div class="placeorder"><button class="form-button" onclick="window.location.href='confirmation.php'">Place Order</button></div>
			</div>

		</div>
	

	</main>

<?php include "parts/footer.php"; ?>
</body>

</html>