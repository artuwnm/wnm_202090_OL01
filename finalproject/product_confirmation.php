<?php 

include_once "lib/php/functions.php";

resetCart();
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>confirmation page</title>


	<?php include "parts/meta.php"; ?>
</head>
<body>

<?php include "parts/navbar.php"; ?>
<?php include "parts/title.php"; ?>

	<div class="container">
		<div class="card soft">
			<h2>Thank you for your purchase</h2>
			<p><a href="product_list.php">Continue shopping</a></p>

		</div>
	</div>
	<?php include "parts/footer.php"; ?>
</body>
</html>
