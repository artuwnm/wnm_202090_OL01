<?php 
include_once "lib/php/functions.php";
include_once "parts/templates.php";
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Bookshelf</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>

	<?php ini_set("display_errors","On"); ?>
	
	<?php include "parts/navbar.php"; ?>


	<main>
	<!-- .container>article#article$.article*4>h2{Article $}+div.article-body>p*3>lorem40 -->
	<div class="container">
		<article id="article1" class="article card soft">
			<div>

				<div class="carousel">
				<div class="slides">
					<div class="slide center" style="background:url(img/bookshelf1.jpg) center; background-size:cover;" alt="Join My Bookshelf For Used Textbooks!"> </div>
					<div class="slide" style="background:url(img/bookshelf2.jpg) center; background-size:cover;" alt="Get 20% Off With Code 2020SEP"> </div>
					<div class="slide" style="background:url(img/bookshelf3.jpg) center; background-size:cover;" alt="Check Out Our Lastest Used Textbooks on Web Design"> </div>
				</div>
				<div class="controls">
					<div class="control-left">&lt;</div>
					<div class="control-right">&gt;</div>
					<div class="control-pagination">
						<div class="control-dot">&bullet;</div>
						<div class="control-dot">&bullet;</div>
						<div class="control-dot">&bullet;</div>
					</div>
				</div>

			</div>
		</article>
	</div>


	<div class="container view-window" id="view-window" style="background-image:url('img/bookshelf1.jpg')">
		<h2>View Window</h2>
	</div>


	<div class="container">
		<h2>Latest Programming Textbooks</h2>
		<?php recommendedCategory("Programming");?>
		<h2>Latest Experience Design Textbooks</h2>
		<?php recommendedCategory("Experience Design");?>
	</div>



	</main>

	<?php include "parts/footer.php"; ?>

	<script type="text/javascript" src="js/jquery-3.5.0.min.js"></script>
	<script type="text/javascript" src="js/carousel.js"></script>
	<script type="text/javascript">
		new Carousel({
			element: $(".carousel").eq(0),
			timing:6000
		})
	</script>

</body>
</html>
