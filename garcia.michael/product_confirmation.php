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


			<div class="col-xs-12 col-md-4">
				<div class="card soft">
					<h4><b><center>Thank you for purchase!</center></b></h4>
		            <div class="form-control">
						<a href="product_list.php" class="form-button">Continue Shopping</a>
					</div>

				</div>
			</div>
		</div>
			
	</div>


<?php include "parts/footer.php"; ?>


</body>
</html>