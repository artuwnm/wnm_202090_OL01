<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include "parts/meta.php"; ?>
	<title>Product List</title>
</head>
<body>
    <?php

        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

    ?>

	<?php include "parts/navbar.php"; ?>
    <?php include "parts/product_data.php"; ?>
    
    <!-- Products sorting bar -->
	<div class="display-flex flex-align-center container ">
		<div class="">
			<form action="">
				<label>Sort by:</label>
				<select name="clothing" id="clothes">
					<option value="">Price: high to low</option>
					<option value="">Price: low to high</option>
					<option value="">Newest First</option>
					<option value="" selected>Best Match</option>
				</select>
				<!-- <input type="submit"> -->
			</form>
		</div>
		<p class="" style="margin-left:8px;">12 items</p>
	</div>
	<br>

	


    <?php

	    include_once "lib/php/functions.php";
	    include_once "parts/templates.php";

	    $result = makeQuery(
	    	makeConn(),
	    	"SELECT *
	    	FROM products
	    	ORDER BY date_create DESC
	    	LIMIT 12
	    	"
	    );

	    echo "<div class='container'><div class='grid gap xs-small md-medium lg-large'>",array_reduce($result, 'productListTemplate'),"</div></div><br>";

    ?>



	<?php include "parts/footer.php"; ?>

</body>
</html>