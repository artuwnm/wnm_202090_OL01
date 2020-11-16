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

</body>
</html>