<?php
    
include_once "lib/php/functions.php";
include_once "parts/templates.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome to Ichiban Sushi</title>

	<link rel="stylesheet" type="text/css" href="lib/css/styleguide.css">
	<link rel="stylesheet" type="text/css" href="css/storetheme.css">
	<link rel="stylesheet" type="text/css" href="lib/css/gridsystem.css">
	<link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
</head>
<body>
	
	</div>
	<?php include "parts/navbar 2.php"; ?>
			
					
				</ul>	
			</nav>
		</div>

	</header>

	<main>
		<div>
			<div class="carousel">
				<div class="slides">
					<div class="slide center">
						<div class="carousel-content">
        					<h1>Ichiban Donburi</h1>
        					<h3>This Week's Ichiban Special Bowl: Unagi Donburi</h3>
        					
						</div>

					<img src="/img/donburi.jpg" width="1200" height="800" style="vertical-align:middle"></div>

					<div class="slide">
						<div class="carousel-content">
        					<h1>Got Yuzu?</h1>
        					<h3>This Week's Ichiban Special Roll: Yuzu Rolls</h3>
        					
						</div>
					<img src="/img/sushiroll.jpg" width="1200" height="800" style="vertical-align:middle">
				</div>
					
					<div class="slide">
						<div class="carousel-content">
        					<h1>Ichiban's Crispy Tempura!</h1>
        					<h3>Crunch Outside, Soft Inside!</h3>
        					
						</div>
					<img src="/img/tempura.jpg" width="1200" height="800" style="vertical-align:middle"></div>
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

	</main>
	</div>

	<div class="container">
	
	<article class="article card hard" id="article2">
		<h2>FRESH INGREDIENTS, DELICIOUS FOOD</h2>
		<div class="article-body">
			<p>Sushi Ichiban in Morgan Hill is a family business with a tireless commitment to using only the freshest fish and highest quality ingredients.</p><p></p>
			
		</div>
	</article>
</div>
<div class="view-window" style="background-image:url('/img/sushi.jpg');">

</div>
<div class="container">
	<article class="article card dark" id="article3">
		<h2>CATERING</h2>
		<div class="article-body">
			<P>Do you love our Sushi? Have you ever thought about sharing what you love? Why not throw a party and have us cater it for you.</P>
			<p>Here are some ideas...</p>
				<H3>Birthday
					Wedding Reception, Business Meetings, Holiday Functions, Graduation, Anniversary, Special Events, Corporate Functions</H3>
			<p>Let us cater your next event - from birthdays to company events... Anything is possible!</p>
			<p>Ask the manager how you can get started on planning your special event today! Contact us by calling (408) 778-7992.</p>

		</div>
	</article>
	<article class="article card hard" id="article4" >
		<h2>LOCATION</h2>
		<div class="article-body" style="color= white">
			<p>Sushi Ichiban is located conveniently off of I-101 and Cochrane in Morgan Hill.</p>
			<P>116 Cochrane Plaza, Morgan Hill, CA 95037</P>
			<P>Phone:(408) 778-7992</P>
			<P>	Lunch: 11:30am - 2:30pm (Mon-Sat)</P>
			<P> Dinner: 5:00pm - 9:00pm (Mon-Thurs), 5:00pm - 10:00pm (Fri), 5:00pm - 9:30 (Sat)</P>
		</div>
	</article>



	</div>

	
</div>
		
	<footer>
		<p>WNM 608 - Ashley Yeo</p>
		
	</footer>
	
	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="js/carousel.js"></script>
	<script>
		new carousel({
			element: $(".carousel").eq(0),
			timing: 6000
		})
	</script>
</body>
</html>