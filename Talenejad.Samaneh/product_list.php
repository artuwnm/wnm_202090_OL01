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
					<option value="">Price: high to low</option>
					<option value="">Newest First</option>
					<option value="" selected>Best Match</option>
				</select>
				<!-- <input type="submit"> -->
			</form>
		</div>
		<p class="" style="margin-left:8px;">12 items</p>
	</div>

	
    <div class="grid gap xs-small md-medium lg-large padding xs-small-padding md-medium-padding lg-large-padding">

        <?php 
            // Using foreach buiding the product list
            foreach($items as $item) {
                echo 
                "<div class='card soft card_padding_bottom_store flex-stretch col-lg-3 col-md-6 col-sm-12'><a href='product_item.php?id=".$item['id']."'>".
                "<img src=".$item['img'][0].">".
                "</a>".
                "<div class='product_info_container'><p class='product_brand'>".
                $item['brand']."</p>".
                "<span>".$item['item_name']."</span>".
                "<span>".$item['price']."</span></div></div>";
            };
        ?>
    </div>

	<?php include "parts/footer.php"; ?>

</body>
</html>