<?php include "lib/php/functions.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "parts/meta.php" ?>
	<?php include "parts/templates.php" ?>
	<title>Tova</title>
	<script src="js/product_list.js"></script>
</head>
<body>

	<!-- header -->
	<?php include "parts/navbar.php" ?>
	<div class="container content">
		<?php include "parts/sidebar.php" ?>
		<div class="main">
		<div class="form-control">
			<form  id="searchform">
				<input id="searchinput" type="search" class="hotdog" placeholder="Search products">

				<div class="display-flex" style="padding-top: 10px;">
					<div class="flex-none">
						<div class="form-select" style="width: 150px;">
							<select id="select-collection" onchange="processSearch()">
								<option value="all">All collections</option>
								<?php
										
									$collections = getCollections();
									
									echo(array_reduce($collections, function($r, $o) { 
										$r .= "<option value=\"" . $o->category . "\">" . ucfirst($o->category) . "</option>";
										return $r;
									}));
									
								?>
							</select>
						</div>
					</div>
					<div class="flex-none" style="padding-left: 10px;">
						<div class="form-select" style="width: 150px;">
							<select id="select-pricerange" onchange="processSearch()">
								<option value="all">All price ranges</option>
								<option value="0-100">0-100</option>
								<option value="100-200">100-200</option>
								<option value="200-300">200-300</option>
								<option value="300+">300+</option>
							</select>
						</div>
					</div>
					<div class="flex-stretch"></div>
					<div class="flex-none">
						<div class="form-select" style="width: 200px;">
							<select id="select-sort" onchange="processSearch()">
								<option value="none">Sort by price...</option>
								<option value="asc">Least expensive to most</option>
								<option value="desc">Most expensive to least</option>
							</select>
						</div>
					</div>
				</div>
			</form>
			



			<div id="product-list">

			</div>
		</div>
	</div>

</body>
</html>