<?php 
include "parts/navbar.php"; 
include "parts/templates.php";
include "parts/meta.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>

</head>
<body>

	<div class="view-window" style="background-image:url('img/plants2.jpeg')"></div>


	<div class="container card soft">
				<h2><center>Welcome to our Shop!</h2></center>
	<p>&Plants Co. is an online houseplant destination where you can buy with confidence knowing you are purchasing the right plant. We provide all the necessary plant details that is required to help you determine which is the right plant for you.

	<p>Shopping for plants can be stressful especially if you’re a new plant parent. How much sun does a plant need? How often should you water them? Is this plant safe for pets? Even after purchase, we still want to help. Every purchase will come with a care card, so you can continue to provide the best care for your plant.

	<p>Our goal is to make the shopping experience of becoming a plant parent as lovely as can be!
			</div>

	<div class="container card hard">
				<center>Use promo code <b>2020</b> at checkout for 20% off your first purchase.</center>
		</div></h2></div>


<div class="container">
	<h2><center>New Arrivals</center></h2>
	<?php recommendedCategory("Plants"); ?>

</div>

		<br><div class="container">
				<button type="button" class="form-button"><a href="product_list.php">View all</a></button>
			</div>


	<?php include "parts/footer.php"; ?>


</body>
</html>