<?php 



			include_once "lib/php/functions.php";
			include_once "parts/templates.php";





 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List</title>

<?php include "parts/meta.php"; ?>

<script type="text/javascript" src="lib/js/jquery-3.5.0.min.js"></script>
<script src="lib/js/functions.js"></script>
<script src="js/templates.js"></script>
<script src="js/product_list.js"></script>
	
</head>
<body>


	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<div class="card">
			<h1 class="home-link"><a href="home.html">V Beauty</a></h1>
		</div>
	</div>






	<div class="container">
			<h2>Product list</h2>

		    <div class="form-control">
		    	<form class="hotdog light" id="product-search">
		    		<input type="search" placeholder="Search Products">
		    	</form>
		    </div>
		    <div class="form-control">
		    <div class="card soft">
		    	<div class="display-flex">
		    		<div class="flex-stretch display-flex">

		    	<div class="flex-none">
		    		<button data-filter="category" data-value="" type="button" class="form-button">All</button>
		    	</div>

		    	<div class="flex-none">
		    		<button data-filter="category" data-value="skincare" type="button" class="form-button">Skincare</button>
		    	</div>

		    	<div class="flex-none">
		    		<button data-filter="category" data-value="makeup" type="button" class="form-button">Makeup</button>
		    	</div>
		    </div>



            <div class="flex-none">
			<div class="form-select">
							<select class="js-sort">
								<option value="1">Newest</option>
								<option value="2">Oldest</option>
								<option value="3">Least Expensive</option>
								<option value="4">Most Expensive</option>
							</select>
						</div>
					</div>
				</div>
			</div>
		</div>



    
            <div class='productlist grid gap'></div>

	</div>
	
<?php include "parts/footer.php"; ?>
	
</body>
</html>