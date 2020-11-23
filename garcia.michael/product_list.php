<?php

	include_once "lib/php/function.php";
	include_once "parts/templates.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Product Page</title>

	<?php include "parts/meta.php"; ?>

</head>
<body>


	<?php include "parts/navbar.php";?>

	<center><h1>Plants</center></h1>

		<section class="container"><center>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas possimus, modi laboriosam perferendis ipsa dolore molestiae optio pariatur facilis omnis illum totam, et quos officia fuga placeat necessitatibus, voluptates ratione aliquid. Impedit minus et quasi blanditiis vel laboriosam ipsum dolor!</center></section>

	<section class="container">

				<div class="form-control">
				<form>
					<input type="search" class="hotdog" placeholder="Search">
				</form>
			</div>
		</section>


	<?php

	$result = makeQuery(
		makeConn(),
		"
		SELECT *
		FROM `products`
		ORDER BY `date_create` DESC 
		LIMIT 12
		"
	);

		echo "<div class='productlist grid gap'>",array_reduce($result,'productListTemplate'),"</div>";

		?>

		</div>
	</section>




	<?php include "parts/footer.php"; ?>


</body>
</html>