<!DOCTYPE html>
<html>
<head>
	<title>Product Page</title>


	<?php include "parts/meta.php"; ?>

</head>
<body>


<br><div class="cartcontainer">
	<script>
		const makeNav = (classes='') => {
			const links = ['<a href="home.php">home</a>','<a href="product_list.php">view items</a>','<a href="cart.php">cart</a>'];
			let ran = Math.floor(Math.random()*links.length);
			document.write(`
			<div>
				<nav class="${classes}">
					<ul>
					${links.reduce((r,o,i)=>{
						return r+`<li class="${ran==i?'active':''}"><a href="#">${o}</a></li>`;
					},'')}
					</ul>
				</nav>
			</div>
			`);
		}
		</script>


	<script>makeNav('nav nav-crumbs')</script>
</div>

<center><h1>Checkout Page</h1></center>


	<div class="cartcontainer">

			<div class="col-xs-12 col-md-4">
			<div class="card soft">

			<h3 id="labels">Address</h3>

			<form>
				<label class="form-label">Name</label>
				<input type="text" placeholder="Full Name" class="form-input">
				<label class="form-label">Phone Number</label>
				<input type="number" placeholder="Number" class="form-input">
				<label class="form-label">Address</label>
				<input type="password" placeholder="Search Address" class="form-input">
				<label class="form-label">Country</label>
				<input type="search" placeholder="Find Country" class="form-input">
			</form></div></div>


			<div class="card soft">

			<h3 id="controls">Billing Information</h3>
			<form>
				
				<div class="form-control">
					<label class="form-label">Name</label>
					<input type="text" placeholder="Full Name" class="form-input">
				</div>
				<div class="form-control">
					<label class="form-label">Phone Number</label>
					<input type="number" placeholder="Number" class="form-input">
				</div>
				<div class="form-control">
					<label class="form-label">Address</label>
					<input type="password" placeholder="Search Address" class="form-input">
				</div>
				<div class="form-control display-flex flex-align-center">
					<div class="flex-none">
						<label class="form-label">Card Info</label>
					</div>
					<div class="flex-stretch">
						<input type="search" placeholder="card number" class="form-input">
					</div>
					<div class="flex-none">
						<label class="form-label">CVV</label>
					</div>
					<div class="flex-stretch">
						<input type="search" placeholder="cvv number" class="form-input">
					</div></form>

						<span><<a href="product_confirmation.php" class="form-button">Check Out</a></span>
					</div>
				</div>


	</div>


<?php include "parts/footer.php"; ?>


</body>
</html>