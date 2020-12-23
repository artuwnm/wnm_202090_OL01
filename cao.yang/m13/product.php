<?php 

include_once "lib/php/functions.php";

$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

$images = explode(",",$product->images);

$image_elements = array_reduce($images,function($r,$o){
	return $r."<img src='img/$o'>";
});

//print_p($_SESSION);

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product-Shop IT Solution</title>

	<?php include "parts/meta.php"; ?>

	<script src="js/product_thumbs.js"></script>


</head>
<body>

	<?php include "parts/navbar.php"; ?>


	<main>
		<div class="container crumbs" id="navigations">
			<div>
				<script>
					const makeNav = (classes='') => {
						const links = ['Home', 'Shop', 'Product'];
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
			</div>

			<div>
				<script>makeNav('nav nav-crumbs')</script>
			</div>

			<script>
				$("#navigations a").on("click", function(e){
					e.preventDefault();
					$(this).closest("li").addClass("active")
						.siblings().removeClass("active")
				})
			</script>
		</div>

		<div class="container">
			<div class="product display-flex flex-stretch">
				<div class="images-thumbs detailimg">
					<?= $image_elements ?>
				</div>
				<div class="images-main">
					<img class="productimg" src="img/<?= $product->thumbnail ?>">
				</div>
				<form class="card-section info" method="post" action="cart_actions.php?action=add-to-cart">
					<input type="hidden" value="<?= $product->id ?>" name="product-id">
					<h4 class="product-title"><?= $product->name ?></h4>
					<div class="product-price">&dollar;<?= $product->price ?></div>	
					<div>
						<p><?= $product->description ?></p>
					</div>
					<div class="card-section">
						<label for="product-amount" class="form-label"></label>
						<div class="form-select">
							<select id="product-amount" name="product-amount">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
								<option>8</option>
								<option>9</option>
								<option>10</option>
							</select>
						</div>
					</div>
					<div class="card-section">
						<input type="submit" class="form-button add" value="Add To Cart">
					</div>
				</form>
			</div>
		</div>
	
		<div class="container recommendation">
			<h4>You Might Also Like</h4>

			<div class="rec">

				<?php


				include_once "lib/php/functions.php";
				include_once "parts/templates.php";

				recommendedSimilar($product->category,$product->id);


				?>

			</div>
		</div>

	</main>

<?php include "parts/footer.php"; ?>
</body>

</html>