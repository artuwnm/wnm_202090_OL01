<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>


<?php 
	
include "../lib/php/functions.php";
$filename = "../data/users.json";
$users = file_get_json("../data/users.json");

$empty_user = (object) [
	"name" => "",
	"type" => "",
	"email" => "",
	"classes" =>[]
];

// file_put_contents, json_encode, explode, $_GET
// CRUD (Create, Read, Update, Delete)

if(isset($_GET['action'])) {

	switch ($_GET['action']) {
		case 'update':
					
			$users[$_GET['id']]->name = $_POST['name'];
			$users[$_GET['id']]->type = $_POST['type'];
			$users[$_GET['id']]->email = $_POST['email'];
			$users[$_GET['id']]->classes = explode(", ", $_POST['classes']);

			file_put_contents($filename, json_encode($users));
			header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
			break;

		case 'create':
					
			$empty_user->name = $_POST['name'];
			$empty_user->type = $_POST['type'];
			$empty_user->email = $_POST['email'];
			$empty_user->classes = explode(", ", $_POST['classes']);

			$id = count($users);

			$users[] = $empty_user;
			file_put_contents($filename, json_encode($users));
			header("location:{$_SERVER['PHP_SELF']}?id=$id");
			break;

		case 'delete':
			array_splice($users, $_GET['id'],1);
			file_put_contents($filename, json_encode($users));	
			header("location:{$_SERVER['PHP_SELF']}");
			break;
	}
}


// showUserPage function 
function showUserPage($user) {
	$classes = implode(", ", $user->classes);
	$id = $_GET['id'];
	$addoredit = $id  == "new" ? "Add" : "Edit";
	$createorupdate = $id == "new" ? "create" : "update";


$display = <<<HTML
<div>

	<h2 style="text-align: center; text-transform: uppercase; word-spacing: 0.2em;">User Detail</h2>

	<div class="form-control">
		<label class="form-label">Type: </label>
		<span>$user->type</span>
	</div>

	<div class="form-control">
		<label class="form-label">Email: </label>
		<span>$user->email</span>
	</div>

	<div class="form-control">
		<label class="form-label">Classes: </label>
		<span>$classes</span>
	</div>

</div>

HTML;		

	
$form = <<< HTML
<form action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate" target="" method="post">

		<table style="width: 100%;">
		
			<h2 style="text-align: center; text-transform: uppercase; word-spacing: 0.2em;">$addoredit User</h2>
			
			<tr class="form-control grid" >
				<td class="col-xs-4 col-md-3">
					<label class="form-lable" for="name">Name</label>
				</td>
				<td class="col-xs-8 col-md-9">
					<input style="width: 100%; type="text" name="name" value="$user->name" placeholder="Enter the User Name">
				</td>
			</tr>
			
			<tr class="form-control grid" >
				<td class="col-xs-4 col-md-3">
					<label class="form-lable" for="type">Type</label>
				</td>
				<td class="col-xs-8 col-md-9">
					<input style="width: 100%; type="text" name="type" value="$user->type" placeholder="Enter the User Type">
				</td>
			</tr>
			
			<tr class="form-control grid" >
				<td class="col-xs-4 col-md-3">
					<label class="form-lable" for="email">Email</label>
				</td>
				<td class="col-xs-8 col-md-9">
					<input style="width: 100%; type="text" name="email" value="$user->email" placeholder="Enter the User Email">
				</td>
			</tr>
			
			<tr class="form-control grid" >
				<td class="col-xs-4 col-md-3">
					<label class="form-lable" for="classes">Classes</label>
				</td>

				<td class="col-xs-8 col-md-9">
					<input style="width: 100%; type="text" name="classes" value="$classes" placeholder="Enter the User Classes, c
					omma separated">
				</td>
			</tr>

		</table>

		<div class="form-control">
			<input class="form-item" type="submit" value="SAVE CHANGES">
		</div>

</form>

HTML;	


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

}

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>User Admin Page</title>
		<?php include "../parts/meta.php"; ?>
	</head>
<body>

	<header class="navbar">
		<div class="container display-flex flex-align-center">
			<div class="flex-none">
				<h1>User Admin</h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class="nav flex-none">
				<ul class="display-flex">
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>">User List</a></li>
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add user</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<hr>

	<div class="container">
		<?php
			if(isset($_GET['id'])) {
				showUserPage($_GET['id'] == "new" ? $empty_user : $users[$_GET['id']]);
			} else {
		?>
		<h2 style="text-align: center; text-transform: uppercase; word-spacing: 0.2em;">User List</h2>
		<nav class="card nav">
			<ul>
				<?php
					for($i=0; $i<count($users); $i++) {
						echo "<div>
							<a href='admin/users.php?id=$i' style='display: inline-block;'>{$users[$i]->name}</a>
						</div><br>";
					}
				?>
			</ul>
		</nav>
		<?php } ?>
	</div>

</body>
</html>

