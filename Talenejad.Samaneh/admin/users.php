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
		
		default:
			# code...
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
	<h2>$user->name</h2>
	<div>
		<strong>Type</strong>
		<span>$user->type</span>
	</div>
	<div>
		<strong>Email</strong>
		<span>$user->email</span>
	</div>
	<div>
		<strong>Classes</strong>
		<span>$classes</span>
	</div>
</div>

HTML;		

	
$form = <<< HTML
<form action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate" target="" method="post">
	<h2>$addoredit User</h2>

	<div class="form-control">
		<label class="form-lable" for="name">Name</label>
		<input type="text" name="name" value="$user->name" placeholder="Enter the User Name">
	</div>

	<div class="form-control">
		<label class="form-lable" for="type">Type</label>
		<input type="text" name="type" value="$user->type" placeholder="Enter the User Type">
	</div>

	<div class="form-control">
		<label class="form-lable" for="email">Email</label>
		<input type="email" name="email" value="$user->email" placeholder="Enter the User Email">
	</div>

	<div class="form-control">
		<label class="form-lable" for="classes">Classes</label>
		<input type="text" name="classes" value="$classes" placeholder="Enter the User Classes, comma separated">
	</div>

	<div class="form-control">
		<input class="form-button" type="submit" value="Save changes">
	</div>
</form>

HTML;	


$output = $id == "new" ? $form : 
	"<div class='grid gap'>
		<div class='col-xs-12 col-md-7'>$display</div>
		<div class='col-xs-12 col-md-5'>$form</div>
	</div>
	";


$delete = $id == "new" ? "" : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a>";


echo <<<HTML
<nav class="display-flex">
	<div class="flex-stretch"><a href="{$_SERVER['PHP_SELF']}">Back</a></div>
	<div class="flex-none">$delete</div>
</nav>

$output
HTML;

}

?>



<!--  -->

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
		<div class="card soft">
			<?php
				if(isset($_GET['id'])) {
					showUserPage($_GET['id'] == "new" ? $empty_user : $users[$_GET['id']]);
				} else {
			?>

			<h2>User List</h2>

			<nav class="nav">
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

	</div>


</body>
</html>

