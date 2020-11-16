<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "parts/meta.php" ?>
	<?php include "lib/php/functions.php" ?>
	<?php include "parts/templates.php" ?>
	<title>Tova</title>
</head>
<body>

	<!-- header -->
	<?php include "parts/navbar.php" ?>
	<div class="container content">
		<?php include "parts/sidebar.php" ?>
		<div class="main">

<?php

$conn = makeConn();
$result = makeQuery($conn, "SELECT * FROM `products` ORDER BY `category`;");

$category = "";
foreach($result as $obj) {
	if(strtolower($category) != strtolower($obj->category)) {
		if($category != "") {
			echo("</div>");
		}
		$category = strtolower($obj->category);
		echo("<h2 class='uppercase'>$obj->category</h2><div class='grid gap'>");
	}

	$output = <<<HERE
<div class="col-xs-12 col-md-6">
	<a href="product.php?id=$obj->id"><img class="autoscale" src="img/$obj->thumbnail.png" /></a>
</div>
HERE;
	
	echo($output);
}
?>
</div>

<hr />
<hr />
<hr />
<hr />
<hr />

		<h2>Adobe</h2>
			
			<div class="grid gap">
				
				<div class="col-xs-12 col-md-6">
					<img class="autoscale" src="img/adobe_2.png" />
				</div>
				<div class="col-xs-12 col-md-6">
					<img class="autoscale" src="img/adobe_3.png" />
				</div>
				<div class="col-xs-12 col-md-6">
					<img class="autoscale" src="img/adobe_4.png" />
				</div>
			</div>	

			<br>

		<h2>Suave</h2>
			
			<div class="grid gap">
				<div class="col-xs-12 col-md-6">
					<img class="autoscale" src="img/suave_1.png" />
				</div>
				<div class="col-xs-12 col-md-6">
					<img class="autoscale" src="img/suave_2.png" />
				</div>
				<div class="col-xs-12 col-md-6">
					<img class="autoscale" src="img/suave_3.png" />
				</div>
				<div class="col-xs-12 col-md-6">
					<img class="autoscale" src="img/suave_4.png" />
				</div>
			</div>	

			<br>

		<h2>Swell</h2>
			
			<div class="grid gap">
				<div class="col-xs-12 col-md-6">
					<img class="autoscale" src="img/swell_1.png" />
				</div>
				<div class="col-xs-12 col-md-6">
					<img class="autoscale" src="img/swell_2.png" />
				</div>
				<div class="col-xs-12 col-md-6">
					<img class="autoscale" src="img/swell_3.png" />
				</div>
				<div class="col-xs-12 col-md-6">
					<img class="autoscale" src="img/swell_4.png" />
				</div>
			</div>	

			<br>

		<h2>Nomad</h2>
			
			<div class="grid gap">
				<div class="col-xs-12 col-md-6">
					<img class="autoscale" src="img/nomad_1.png" />
				</div>
				<div class="col-xs-12 col-md-6">
					<img class="autoscale" src="img/nomad_2.png" />
				</div>
				<div class="col-xs-12 col-md-6">
					<img class="autoscale" src="img/nomad_3.png" />
				</div>
				<div class="col-xs-12 col-md-6">
					<img class="autoscale" src="img/nomad_4.png" />
				</div>
			</div>	
		</div> 
	</div>
</body>
</html>