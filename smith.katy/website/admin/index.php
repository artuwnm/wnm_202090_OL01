<?php 

include_once "../lib/php/functions.php";
//include_once "../parts/templates.php";

$root = $_SERVER["DOCUMENT_ROOT"];
$base = strpos($root, 'Desktop') > 0 ? 'http://localhost:3000/' : 'http://katy-smith.com/Development/katy-smith/aau/wnm608/website/';

$conn = makeConn();
$products_array = makeQuery($conn, "SELECT * FROM `products` ORDER BY `name`;");

$empty_product = (object)[
	"name"=>"New Product 1",
    "price"=>"100",
    "description"=>"Product 1 description",
    "category"=>"adobe",
    "thumbnail"=>"adobe_moncada_thumbnail",
    "images"=>"adobe_moncada"
];

// CRUD, Create Read Update Delete
if(isset($_GET['action'])){

    try {
        $conn = makePDOConn();
        switch($_GET['action']){
            case "update":                
                $s = $conn->prepare("UPDATE
                    `products`
                    SET
                        `name`=?,
                        `description`=?,
                        `category`=?,
                        `price`=?,
                        `thumbnail`=?,
                        `images`=?,
                        `date_modify`=NOW()
                    WHERE
                        `id`=?
                ");

                $s->execute([
                    $_POST['name'],
                    $_POST['description'],
                    $_POST['category'],
                    $_POST['price'],
                    $_POST['thumbnail'],
                    $_POST['images'],
                    $_GET['id']
                ]);
                
                header("location:{$base}admin?id={$_GET['id']}");
                break;
            case "create":
                $s = $conn->prepare("INSERT INTO
                    `products`
                    (
                        `name`,
                        `description`,
                        `category`,
                        `price`,
                        `thumbnail`,
                        `images`,
                        `date_modify`,
                        `date_create`
                    ) VALUES (
                        ?, ?, ?, ?, ?, ?, NOW(), NOW()
                    )
                ");

                $s->execute([
                    $_POST['name'],
                    $_POST['description'],
                    $_POST['category'],
                    $_POST['price'],
                    $_POST['thumbnail'],
                    $_POST['images']
                ]);

                $id = $conn->lastInsertId();
                header("location:{$base}admin?id=$id");
                //header("location:{$base}admin");
                break;
            case "delete":
                $s = $conn->prepare("DELETE FROM `products` WHERE ID=?");
                $s->execute([$_GET['id']]);
                header("location:{$base}admin");
            
                break;	
        }
    } catch(PDOException $e) {
        die($e->getMessage());
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
        <p style="text-transform: capitalize;">$product->category</p>
        <p><sup>$</sup>$product->price</p>
	</div>
HTML;

    $form = <<<HTML
    <div>
        <form method="post" action="{$base}admin/?id=$id&action=$createorupdate">


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

    $form .= array_reduce($categories, function($r, $o) use ($product) {
        $r .= "<option " . ($product->category == $o->category ? "selected": "") . " value=\"" . $o->category . "\">" . ucfirst($o->category) . "</option>";
        return $r;
    });

    $form .= <<<HTML
                </select>
            </div>

            <label class="form-label" for="name">Price</label>
            <input type="text" class="form-input" name="price" id="price" value="$product->price" placeholder="Price">
            
            <label class="form-label" for="name">Thumbnail</label>
            <input type="text" class="form-input" name="thumbnail" id="thumbnail" value="$product->thumbnail" placeholder="Thumbnail">
            
            <label class="form-label" for="name">Images</label>
            <input type="text" class="form-input" name="images" id="images" value="$product->images" placeholder="Images">
            
            <br /><br />

            <button type="submit" class="form-button">Save</button>

        </form>
    </div>
HTML;

    $output = $id == "new" ? $form : 
	"<div class='grid gap'>
		<div class='col-xs-12 col-md-6'>$display</div>
		<div class='col-xs-12 col-md-6'>$form</div>
	</div>";

    $delete = $id == "new" ? "" : "<a onclick='javascript:return confirm(\"Are you sure you want to delete?\");' href='$base/admin?id=$id&action=delete'>Delete</a>";

    echo <<<HTML
<nav class="display-flex">
	<div class="flex-stretch"><a href="$base/admin">Back</a></div>
	<div class="flex-none">$delete</div>
</nav>
$output
HTML;

}

function productItem($r, $o){
    global $base;

    $r .= <<<HERE

<div style="display: flex; width: 300px;">
    <div style="width: 100px;">
    <a href="${base}admin/?id=$o->id"><img style="width: 100px; height: 100px;" src="${base}img/$o->thumbnail.png" /></a>
    </div>
    <div style="padding-left: 20px;">
        <p><a href="${base}admin/?id=$o->id">$o->name</a><br/>
        <a href="${base}admin/?id=$o->id"><sup>$</sup>$o->price</a></p>
    </div>
</div>

HERE;

    return $r;
}

function showProductList($products) {

    echo(array_reduce($products, 'productItem'));

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
					<li><a href="<?= $base ?>admin">Product List</a></li>
					<li><a href="<?= $base ?>admin?id=new">Add New Product</a></li>
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
                echo('<h2>Product List</h2>');
                echo("<div style='display: flex; flex-wrap: wrap; width: 100%;'>");
                showProductList($products_array);
                echo("</div>");
			}

			?>

		</div>
	</div>

</body>	
</html>