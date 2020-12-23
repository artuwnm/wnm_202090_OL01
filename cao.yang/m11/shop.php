<?php


include_once "lib/php/functions.php";
include_once "parts/templates.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shop-Shop IT Solution</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>

	<?php include "parts/navbar.php"; ?>

	<div class="container shop">
		<div class="sidebar" id="navigations">

			<script>
				const makeNav = (classes='') => {
					const links = ['New Arrivals', 'Cameras', 'Cell Phones', 'Computers', 'Fitness & Personal Care', 'Music', 'Smart Home', 'TV & Home Theater', 'Sale'];
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
	</div>

	<div class="container items">

	<?php

	$result = makeQuery(
		makeConn(),
		"
		SELECT *
		FROM `products`
		ORDER BY `price` DESC
		"
	);

	echo "<div class='grid gap'>", array_reduce($result, 'productListTemplate'),"</div>";

	?>

	</div>

</main>
<?php include "parts/footer.php"; ?>




</body>

</html>