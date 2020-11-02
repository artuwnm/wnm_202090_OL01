<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>



<?php 
	
include "../lib/php/functions.php";

$users = file_get_json("../data/users.json");


function showUserPage($user) {

	$classes = implode(", ", $user->classes);
	$user_id = $_GET['id'];

echo <<< HTML

<nav class="nav nav-crumbs">
	<ul>
		<li><a href="admin/users.php">Back</a></li>
	</ul>
</nav>


<form action="admin/routes.php?id=$user_id&action=put" target="" method="POST">
	<label>Name</label>
	<input type="text" name="name" value="$user->name"><br><br>

	<label>Type</label>
	<input type="text" name="type" value="$user->type"><br><br>

	<label>Email</label>
	<input type="email" name="email" value="$user->email"><br><br>

	<label>Classes</label>
	<input type="text" name="classes" value="$classes"><br><br>

	<input type="submit" value="submit">
</form>



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
					<li><a href="admin/newUser.php">Add user</a></li>
					<li><a href="admin/users.php">User List</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="container">
		<div class="card soft">
			<?php

				if(isset($_GET['id'])) {
					showUserPage($users[$_GET['id']]);
				} else {
			?>

			<h2>User List</h2>

			<nav class="nav">
				<ul>
					<?php
						for($i=0; $i<count($users); $i++) {
							echo "<div class='display-flex'><li>
								<a href='admin/users.php?id=$i' style='display: inline-block;'>{$users[$i]->name}</a>
								<a style='display: inline-block; background-color:grey; border-radius:2px;' href='admin/routes.php?id=$i&action=delete'>Delete</a>
							</li></div><br>";
						}
					?>
				</ul>
			</nav>
			
			<?php } ?>
		</div>

	</div>
	
</body>
</html>