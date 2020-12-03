<?php 

include_once "../lib/php/functions.php";
//include_once "../parts/templates.php";

$root = $_SERVER["DOCUMENT_ROOT"];
$base = strpos($root, 'Desktop') > 0 ? 'http://localhost:3000/' : 'http://katy-smith.com/Development/katy-smith/aau/wnm608/website/';


function productItem($r, $o) {

    $r .= <<<HERE

<div class="col-xs-12 col-md-6">
    <a href="${base}/admin/?id=$o->id">$o->name</a>
</div>

HERE;

    return $r;
}

$conn = makeConn();
$products_array = makeQuery($conn, "SELECT * FROM `products` ORDER BY `category`;");

$empty_product = (object)[
	"name"=>"",
    "price"=>"",
    "description"=>"",
    "category"=>"",
    "thumbnail"=>"",
    "images"
];

// CRUD, Create Read Update Delete
if(isset($_GET['action'])){
	switch($_GET['action']){
		case "update":
			$products_array[$_GET['id']]->name = $_POST['name'];
             
			header("location:{$base}?id={$_GET['id']}");
			break;
		case "create":
			$empty_product->name = $_POST['name'];
            
			header("location:{$self}?id=$id");
			break;
		case "delete":

            
            header("location:{$self}");
		
			break;	
	}
}


function showProductPage($product){

    global $self;
    global $base;

	$id = $_GET['id'];
	$addoredit = $id == "new" ? "Add" : "Edit";
	$createorupdate = $id == "new" ? "create" : "update";

$display = <<<HTML
	<div>
		<h2>$product->name</h2>

        <img style="width: 100px; height: 100px;" src="${base}/img/$product->thumbnail.png" />
        <p>$product->description</p>
        <p>$product->category</p>
        <p>$product->price</p>
	</div>
HTML;

$form = <<<HTML
    <div>
        <form method="post" action="{$base}?id=$id&action=$createorupdate">


            <h2>$addoredit Product</h2>

            <label class="form-label" for="name">Name</label>
            <input type="text" class="form-input" name="name" id="name" value="$product->name" placeholder="Name">
            
            <label class="form-label" for="name">Description</label>
            <input type="text" class="form-input" name="description" id="description" value="$product->description" placeholder="Description">
            
            <label class="form-label" for="name">Category</label>
            <div class="form-select">
                <select id="category" name="category" value="$product->category">
HTML;

$categories = getCollections();

$form .= array_reduce($categories, function($r, $o) {
    $r .= "<option value=\"" . $o->category . "\">" . ucfirst($o->category) . "</option>";
    return $r;
});

$form .= <<<HTML
                </select>
            </div>
            
            <br /><br />

            <button type="submit" class="form-button">Save</button>

        </form>
    </div>
HTML;

    $output = $id == "new" ? $form : 
	"<div class='grid gap'>
		<div class='col-xs-12 col-md-7'>$display</div>
		<div class='col-xs-12 col-md-5'>$form</div>
	</div>";

    $delete = $id == "new" ? "" : "<a href='$self?id=$id&action=delete'>Delete</a>";

    echo <<<HTML
<nav class="display-flex">
	<div class="flex-stretch"><a href="$base/admin">Back</a></div>
	<div class="flex-none">$delete</div>
</nav>
$output
HTML;

}

function showProductList($products) {

echo <<<HTML
<h2>Product List</h2>

<nav class="nav">
	<ul>
HTML;

    echo(array_reduce($products, 'productItem'));

echo<<<HTML
	</ul>
</nav>
HTML;

}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Admin Page</title>

	<?php include "../parts/meta.php"; ?>
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
					<li><a href="<?= $base ?>">Product List</a></li>
					<li><a href="<?= $base ?>?id=new">Add New Product</a></li>
				</ul>
			</nav>	
		</div>
	</header>

	<div class="container">
		<div class="card soft">

			<?php 

			if(isset($_GET['id'])) {
                showProductPage($_GET['id'] == "new" ? $empty_product : getProductById($_GET['id']));
			} else {
				showProductList($products_array);
			}

			?>

		</div>
	</div>

</body>	
</html>