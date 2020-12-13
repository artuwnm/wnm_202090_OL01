<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>

<?php 
	
include "../lib/php/functions.php";

$empty_product = (object) [
	"product_designer" => "Chacha",
	"product_name" => "Sweatshirt",
	"quantity" => "33",
	"product_size"=> "Medium",
	"product_color" => "Black",
	"product_category" => "Top",
	"product_description" => "Blue top",
	"product_unit_price" => "330.00",
	"product_thumb" => "product1_1.jpg",
	"product_images" => "product1_1.jpg,product1_2.jpg"
];


// CRUD (Create, Read, Update, Delete) LOGIC
if(isset($_GET['action'])) {
	try {
		$conn = makePDOConn();
		switch($_GET['action']) {
			case 'update':
				$statement = $conn->prepare("UPDATE
						`products`
						SET
						`product_designer`=?,
						`product_name`= ?,
						`quantity`=?,
						`product_size`=?,
						`product_color`=?,
						`product_category`=?,
						`product_description`=?,
						`product_unit_price`=?,
						`product_thumb`=?,
						`product_images`=?,
						`date_modify`= NOW()
						WHERE `id` = ?
					");

				$statement->execute([
					$_POST['designer'],
					$_POST['product-name'],
					$_POST['quantity'],
					$_POST['size'],
					$_POST['color'],
					$_POST['category'],
					$_POST['description'],
					$_POST['price'],
					$_POST['thumbnail'],
					$_POST['images'],
					$_GET['id']

				]);

				header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
				break;

			case 'create':
				$statement = $conn->prepare("INSERT INTO
							`products`
							(

							`product_designer`,
							`product_name`,
							`quantity`,
							`product_size`,
							`product_color`,
							`product_category`,
							`product_description`,
							`product_unit_price`,
							`product_thumb`,
							`product_images`,
							`date_create`,
							`date_modify`
							)
							VALUES(?,?,?,?,?,?,?,?,?,?,NOW(),NOW())
						");

					$statement->execute([
						$_POST['designer'],
						$_POST['product-name'],
						$_POST['quantity'],
						$_POST['size'],
						$_POST['color'],
						$_POST['category'],
						$_POST['description'],
						$_POST['price'],
						$_POST['thumbnail'],
						$_POST['images']
					]);

					$id = $conn->lastInsertId();

				header("location:{$_SERVER['PHP_SELF']}?id=$id");
				break;

			case 'delete':
				$statement = $conn->prepare("DELETE FROM `products` WHERE id=?");
				$statement->execute([$_GET['id']]);
				header("location:{$_SERVER['PHP_SELF']}");
				break;
			
		} 

	} catch(PDOException $e) {
			die($e->getMessage());
	};

}

function productListItem($r,$o) {
return $r.<<<HTML
	<tr class="grid">
		<td class='images-thumbs col-xs-4 col-md-4'><img src='img/$o->product_thumb'></td>
		<td class="col-xs-4 col-md-4">$o->product_name</td>
		<td class="col-xs-4 col-md-4 action-edit"><a href="{$_SERVER['PHP_SELF']}?id=$o->id" class="form-button">Edit</a></td>
	</tr>
HTML;		
};


function showProductPage($o) {

	$id = $_GET['id'];

	$addoredit = $id  == "new" ? "ADD" : "EDIT";

	$createorupdate = $id == "new" ? "create" : "update";

	$images = array_reduce(explode(",", $o->product_images),function($r,$o){
		return $r."<span style='padding: 0 8px;'><img src='img/$o'></span>";
	});



$display = <<<HTML

<div>
	<h2 style="word-spacing: 0.3em; text-align: center; text-transform: uppercase;">Product Detail</h2>

	<div class="form-control">
		<label class="form-label">Designer: </label>
		<span>$o->product_designer</span>
	</div>

	<div class="form-control">
		<label class="form-label">Name: </label>
		<span>$o->product_name</span>
	</div>

	<div class="form-control">
		<label class="form-label">Quantity: </label>
		<span>$o->quantity</span>
	</div>

	<div class="form-control">
		<label class="form-label">Size: </label>
		<span>$o->product_size</span>
	</div>

	<div class="form-control">
		<label class="form-label">Color: </label>
		<span>$o->product_color</span>
	</div>

	<div class="form-control">
		<label class="form-label">Category: </label>
		<span>$o->product_category</span>
	</div>

	<div class="form-control">
		<label class="form-label">Description: </label>
		<span>$o->product_description</span>
	</div>

	<div class="form-control">
		<label class="form-label">Unite Price: </label>
		<span>&dollar;$o->product_unit_price</span>
	</div>

	<div class="form-control">
		<label class="form-label">Thumbnails: </label>
		<div class="images-thumbs">
			<img src='img/$o->product_thumb'>
		</div>
	</div>

	<div class="form-control">
		<label class="form-label">All Images: </label>
		<div class="images-thumbs">
			$images
		</div>
	</div>
</div>

HTML;		

// The content on the right side of the Product page
$form = <<< HTML

<form action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate"  method="post">

	<h2 style="text-align: center; text-transform: uppercase; word-spacing: 0.2em;">$addoredit Product</h2>

	<table style="width: 100%;">

		<tr class="form-control grid" >
			<td class="col-xs-4 col-md-3">
				<label class="form-label" for="designer">Designer</label>
			</td>
			<td class="col-xs-8 col-md-9">
				<input style="width: 100%;" type="text" name="designer" value="$o->product_designer" placeholder="Enter the designer">
			</td>
		</tr>

		<tr class="form-control grid">
			<td class="col-xs-4 col-md-3">
				<label class="form-label" for="product-name">Name</label>
			</td>
			<td class="col-xs-8 col-md-9">
				<input style="width: 100%;" type="text" name="product-name" value="$o->product_name" placeholder="Enter the product Name">
			</td>
		</tr>

		<tr class="form-control grid" >
			<td class="col-xs-4 col-md-3">
				<label class="form-label" for="quantity">Quantity</label>
			</td>
			<td class="col-xs-8 col-md-9">
				<input style="width: 100%;" type="number" min="0" max="1000" step="1"  name="quantity" value="$o->quantity" placeholder="Enter Quantity">
			</td>
		</tr>


		<tr class="form-control grid">
			<td class="col-xs-4 col-md-3">
				<label class="form-label" for="size">Size</label>
			</td>
			<td class="col-xs-8 col-md-9">
				<input style="width: 100%;" type="text" name="size" value="$o->product_size" placeholder="Enter the product size">
			</td>
		</tr>


		<tr class="form-control grid">
			<td class="col-xs-4 col-md-3">
				<label class="form-label" for="color">Color</label>
			</td>
			<td class="col-xs-8 col-md-9">
				<input style="width: 100%;" type="text" name="color" value="$o->product_color" placeholder="Enter the product color">
			</td>
		</tr>


		<tr class="form-control grid">
			<td class="col-xs-4 col-md-3">
				<label class="form-label" for="category">Category</label>
			</td>
			<td class="col-xs-8 col-md-9">
				<input style="width: 100%;" type="text" name="category" value="$o->product_category" placeholder="Enter the product category">
			</td>
		</tr>


		<tr class="form-control grid" >
			<td class="col-xs-4 col-md-3">
				<label class="form-label" for="description">Description</label>
			</td>
			<td class="col-xs-8 col-md-9">
				<textarea style="width: 100%;" name="description">$o->product_description</textarea>
			</td>
		</tr>


		<tr class="form-control grid">
			<td class="col-xs-4 col-md-3">
				<label class="form-label" for="price">Unit Price</label>
			</td>
			<td class="col-xs-8 col-md-9">
				<input style="width: 100%;" type="number" min="0" max="1000" step="0.01" name="price" value="$o->product_unit_price" placeholder="Enter the Unit price">
			</td>
		</tr>


		<tr class="form-control grid">
			<td class="col-xs-4 col-md-3">
				<label class="form-label" for="thumbnail">Thumbnail</label>
			</td>
			<td class="col-xs-8 col-md-9">
				<input style="width: 100%;" type="text" name="thumbnail" value="$o->product_thumb" placeholder="Enter the Product Thumbnail name, comma separated">
			</td>
		</tr>


		<tr class="form-control grid">
			<td class="col-xs-4 col-md-3">
				<label class="form-label" for="images">Images</label>
			</td>
			<td class="col-xs-8 col-md-9">
				<input style="width: 100%;" type="text" name="images" value="$o->product_images" placeholder="Enter the Product Image names, comma separated">
			</td>
		</tr>
		
	</table>

	<div class="form-control">
		<input class="form-item" type="submit" value="SAVE CHANGES">
	</div>

</form>

HTML;	


// If the id=="new", make the page only show the $form, otherwise show $dispaly and $form.

$output = $id == "new" ? 

	"<div class='add-product-container'>
		<div class='card card_padding'>
			$form 
		</div>
	</div><br>"

	: 

	"<br>
	<div class='edit-product-container'>

		<div class='grid gap xs-small md-medium lg-large xxl-large'>
			
			<div class='col-xs-12 col-md-6 card card_padding'>$display</div>

			<div class='col-xs-12 col-md-6 card card_padding'>$form</div></div>
		
		</div>
	</div>
	</br></br>
	";

// If $id=="new", don't show the Delete option
$delete = $id == "new" ? "" : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a>";



echo <<<HTML
<div class="container">
	<nav class="display-flex">
		<div class="flex-stretch"><a href="{$_SERVER['PHP_SELF']}">Back</a></div>
		<div class="flex-none">$delete</div>
	</nav>

	$output

</div>


HTML;
			
};

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Product Admin Page</title>
		<?php include "../parts/meta.php"; ?>
	</head>
<body>

	<header class="navbar">
		<div class="container display-flex flex-align-center">
			<div class="flex-none">
				<h1>Admin Dashboard</h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class="nav flex-none">
				<ul class="display-flex">
					<!-- <li><a href="admin/users.php">User List</a></li> -->
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>">Product List</a></li>
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New Product</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<hr>
	<br>

	
	<?php

		if(isset($_GET['id'])) {

			 showProductPage(
				$_GET['id'] == "new" ?
				$empty_product:
				makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0]
			);

		} else {

	?>

	<?php
		$result = makeQuery(makeConn(), "SELECT * FROM `products` ORDER BY `date_create` DESC");
	?>

	<div class="admin-product_list-container">
		<table style="width: 100%;">
			<caption style="font-size:20px; margin-bottom: 10px;">PRODUCT LIST</caption>
			<div>
				<tr class="grid">
					<th class="table-heading col-xs-4 col-md-4">Photo</th>
					<th class="table-heading col-xs-4 col-md-4">Name</th>
					<th class="table-heading col-xs-4 col-md-4">Action</th>
				</tr>
				<div class="product-container">
					<?php
						echo array_reduce($result,'productListItem');
						}
					?>
				</div>
			</div>
		</table>
	</div>
	<br>
		
	

</body>






