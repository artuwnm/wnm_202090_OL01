<?php

include "../lib/php/functions.php";

$empty_product = (object)[
	"name"=>"",
	"color"=>"",
	"capacity"=>"",
	"price"=>"",
	"category"=>"",
	"description"=>"",
	"thumbnail"=>"",
	"images"=>"",
	
	

];

//Logic

try {
	$conn = makePDOConn();
	switch($_GET['action']) {
		case "update":
			$statement = $conn->prepare("UPDATE
				`products`
				SET
					`name`=?,
					`color`=?,
					`capacity`=?,
					`price`=?,
					`category`=?,
					`description`=?,
					`thumbnail`=?,
					`images`=?,
					`date_modify`=NOW()
				WHERE `id`=?
				");
			$statement->execute([
				$_POST['product-name'],
				$_POST['product-color'],
				$_POST['product-capacity'],
				$_POST['product-price'],
				$_POST['product-category'],
				$_POST['product-description'],
				$_POST['product-thumbnail'],
				$_POST['product-images'],
				$_GET['id']
			]);
			header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
			break;
		case "create":
			$statement = $conn->prepare("INSERT INTO
				`products`
				(
					`name`,
					`color`,
					`capacity`,
					`price`,
					`category`,
					`description`,
					`thumbnail`,
					`images`,
					`date_create`,
					`date_modify`
				)
				VALUES (?,?,?,?,?,?,?,?,NOW(),NOW())
				");
			$statement->execute([
				$_POST['product-name'],
				$_POST['product-color'],
				$_POST['product-capacity'],
				$_POST['product-price'],
				$_POST['product-category'],
				$_POST['product-description'],
				$_POST['product-thumbnail'],
				$_POST['product-images'],
			]);
			$id = $conn->lastInsertId();
			header("location:{$_SERVER['PHP_SELF']}?id=$id");
			break;
		case "delete":
			$statement = $conn->prepare("DELETE FROM `products` WHERE id=?");
			$statement->execute([$_GET['id']]);
			header("location:{$_SERVER['PHP_SELF']}");
			break;

	}
} catch(PDOException $e) {
	die($e->getMessage());
}














// Templates

function productListItem($r,$o) {
	return $r.<<<HTML
<div class="card soft">
	<div class="display-flex">
		<div class="flex-none images-thumbs"><img src='../img/$o->thumbnail'></div>
		<div class="flex-stretch" style="padding:1em">$o->name</div>
		<div class="flex-none"><a href="{$_SERVER['PHP_SELF']}?id=$o->id" class="form-button">Edit</a></div>	
	</div>
</div>
	
HTML;
}





function showProductPage($o) {

$id = $_GET['id'];
$addoredit = $id == "new" ? "Add" : "Edit";
$createorupdate = $id == "new" ? "create" : "update";
$images = array_reduce(explode(",", $o->images),function($r,$o){return $r."<img src='../img/$o'>";});



//heredoc
$display = <<<HTML
<div>
	<h2>$o->name</h2>
	<div class="form-control">
		<label class="form-label">Price</label>
		<span>&dollar;$o->price</span>
	</div>
	<div class="form-control">
		<label class="form-label">Color</label>
		<span>$o->color</span>
	</div>
	<div class="form-control">
		<label class="form-label">Capacity</label>
		<span>$o->capacity</span>
	</div>
	<div class="form-control">
		<label class="form-label">Category</label>
		<span>$o->category</span>
	</div>
	<div class="form-control">
		<label class="form-label">Decription</label>
		<span>$o->description</span>
	</div>
	<div class="form-control">
		<label class="form-label">Thumbnail</label>
		<span class= "images-thumbs"><img src='../img/$o->thumbnail'></span>
	</div>
	<div class="form-control">
		<label class="form-label">Other Images</label>
		<span class= "images-thumbs">$images</span>
	</div>
</div>
HTML;


$form = <<<HTML
<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
	<h2>$addoredit Product</h2>
	<div class="form-control">
		<label class="form-label" for="product-name">Name</label>
		<input type="text" placeholder="Enter the Product Name" value="$o->name" class="form-input" name="product-name" id="product-name">
	</div>
	<div class="form-control">
		<label class="form-label" for="product-price">Price</label>
		<input type="number" min="0" max="1000" step="0.01"  placeholder="Enter the Product Price" value="$o->price" class="form-input" name="product-price" id="product-price">
	</div>
	<div class="form-control">
		<label class="form-label" for="product-color">Color</label>
		<input type="number" min="0" max="1000" step="1"  placeholder="Enter the Product Color" value="$o->color" class="form-input" name="product-color" id="product-color">
	</div>
	<div class="form-control">
		<label class="form-label" for="product-capacity">Capacity</label>
		<input type="number" min="0" max="1000" step="1"  placeholder="Enter the Product Capacity" value="$o->capacity" class="form-input" name="product-capacity" id="product-capacity">
	</div>
	<div class="form-control">
		<label class="form-label" for="product-category">Category</label>
		<input type="text" placeholder="Enter the Product Category" value="$o->category" class="form-input" name="product-category" id="product-category">
	</div>
	<div class="form-control">
		<label class="form-label" for="product-description">Description</label>
		<textarea class="form-input" name="product-description" id="product-description" placeholder="Enter the Product Description">$o->description</textarea>
	</div>
	<div class="form-control">
		<label class="form-label" for="product-thumbnail">Thumbnail</label>
		<input type="text" placeholder="Enter the Product Thumbnail" value="$o->thumbnail" class="form-input" name="product-thumbnail" id="product-thumbnail">
	</div>
	<div class="form-control">
		<label class="form-label" for="product-images">Other Images</label>
		<input type="text" placeholder="Enter the Product Images" value="$o->images" class="form-input" name="product-images" id="product-images">
	</div>
	<div class="form-control">
		<input type="submit" class="form-button" value="Save Changes">
	</div>
</form>
HTML;

$output = $id == "new" ? "<div class='card soft'>$form</div>" :
	"<div class='grid gap'>
		<div class='col-xs-12 col-md-7'><div class='card soft'>$display</div></div>
		<div class='col-xs-12 col-md-5'><div class='card soft'>$form</div></div>
	</div>
	";

$delete = $id == "new" ? "" : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a>";

echo <<<HTML
<div class="card soft" >
	<nav class="display-flex">
		<div class="flex-stretch"><a href="{$_SERVER['PHP_SELF']}">Back</a></div>
		<div class="flex-none">$delete</div>
	</nav>
</div>
$output
HTML;
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Admin Page</title>

	<?php include "../parts/meta.php"; ?>

	<link rel="stylesheet" type="text/css" href="../lib/css/styleguide.css">
	<link rel="stylesheet" type="text/css" href="../lib/css/gridsystem.css">
	<link rel="stylesheet" type="text/css" href="../css/storetheme.css">
	
</head>
<body>

	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>Product Admin</h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class="nav nav-flex flex-none">
				<ul>
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>">Product List</a></li>
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New Product</a></li>
				</ul>
			</nav>
		</div>
		
	</header>

	<div class="container">

		<?php

			if(isset($_GET['id'])) {
				showProductPage(
					$_GET['id']=="new" ?
						$empty_product :
						makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0]
			);
				//showProductPage();
			} else {



			?>
			<h2>Product List</h2>

				<nav class="nav">
					<ul>
				<?php

				$result = makeQuery(makeConn(),"SELECT* FROM `products` ORDER BY `date_create` DESC");

				echo array_reduce($result, 'productListItem');

				?>
		<?php }?>
	
</body>

