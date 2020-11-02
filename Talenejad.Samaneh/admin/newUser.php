<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add New User</title>
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
					<li><a href="admin/newUser.php">Add User</a></li>
					<li><a href="admin/users.php">User List</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="container card">
		<nav class="nav nav-crumbs">
			<ul>
				<li><a href="admin/users.php">Back</a></li>
			</ul>
		</nav>
		
			<h4>Add a new user</h4>
			<form action="admin/routes.php?action=post" target="" method="POST">
				<label>Name</label>
				<input type="text" name="name" value=""><br><br>
			
				<label>Type</label>
				<input type="text" name="type" value=""><br><br>
			
				<label>Email</label>
				<input type="email" name="email" value=""><br><br>
			
				<label>Classes</label>
				<input type="text" name="classes" value=""><br><br>
			
				<input type="submit" name="Submit">
			</form>
	

	</div>
	
</body>
</html>