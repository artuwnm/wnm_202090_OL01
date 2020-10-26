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


	<div class="cartcontainer">
		<h1><center>Shopping Cart</center></h1>
		<div class="grid gap">
			<div class="col-xs-12 col-md-8">
				<div class="card">
					<img src="img/1.jpg" style="width:200px; height: 230px;" align="left"><br><br>
						<p>Name of Plant</p>
						<p>ID: 234353453</p>
						<p><a href="#">Remove from cart</a></p>
				</div>
			</div>


			<div class="col-xs-12 col-md-4">
				<div class="card soft">
					<h4><b><center>Cart Summary</center></b></h4>
					<p><b>Order Total</b></p>
		            <div class="form-control">
						<a href="cart2.php" class="form-button">Check Out</a>
					</div>

				</div>
			</div>
		</div>
			
	</div>


<?php include "parts/footer.php"; ?>


</body>
</html>