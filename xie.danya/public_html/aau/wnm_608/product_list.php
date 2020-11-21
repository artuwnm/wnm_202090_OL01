<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DA-IE Jewelry | Shop</title>

	<?php include "parts/meta.php"; ?>

</head>
<body>
	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<div class="crumbs">
	       	<script>
	       	    const makeNav = (classes='') => {
	       		const links = ['Home', 'Shop','All'];
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
	</div>	

	<div class="container">

		<?php

		$result = makeQuery(
			makeConn(),
			"
			SELECT * 
			FROM `products`
			ORDER BY 'date_create' DESC
			LIMIT 12
			"
		);

		echo "<div class='productlist grid gap'>",array_reduce($result,'productListTemplate'),"</div>";

		?>

    </div>



	 <?php include "parts/footer.php"; ?> 




</body>
</html>