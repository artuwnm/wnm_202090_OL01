<?php

include "../lib/php/functions.php";


$users = file_get_json("../data/users.json");



// file_put_contents json_encode explode $_POST
// CRUD, Create Read Update Delete

function showUserPage($user) {


$classes = implode(",",$user->classes);

// heredoc
echo <<<HTML

<nav class="nav nav-crumbs">
	<ul>
		<li><a href="admin/users.php">Back</a></li>
	</ul>
</nav>
<div>
	<form>

		<h2>$user->name</h2>
		<div class="form-control">
			<label class="form-label">Name</label>
			<input type="text" class="form-input" value="$user->name">
		</div>

		<div class="form-control">
		<label class="form-label">Type</label>
		<input type="text" class="form-input" value="$user->type">
		</div>

		<div class="form-control">
		<label class="form-label">Email</label>
		<input type="text" class="form-input" value="$user->email">
		</div>

		<div class="form-control">
		<label class="form-label">Classes</label>
		<input type="text" class="form-input" value="$classes">
		</div>
		
		<button type="submit" class="form-button">Save</button>

	</form>
</div>
HTML;
}





?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User Admin Page</title>

	<?php include "../parts/meta.php"; ?>
</head>
<body>
	<header class="navbar styleguide">
		<div class="container display-flex">
			<div class="flex-none">
				<h2>User Admin</h2>
			</div>
			<div class="flex-stretch"></div>
			<nav class="nav nav-flex flex-none">
				<ul>
					<li><a href="admin/users.php">User List</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="container">
		<div class="card soft">

			<?php 
            if (isset($_GET['id'])) {
            	showUserPage($users[$_GET['id']]);
            } else {

			?>
			<h2>Users List</h2>

			<nav class="nav">
				<ul>
			<?php

			for ($i=0; $i<count($users); $i++) { 
			    echo "<li>
				   <a href='admin/users.php?id=$i'>{$users[$i]->name}</a>
			    </li>";
			}
			?>
				</ul>
			</nav>

			<?php } ?>
		</div>			
	</div>


	<?php include "parts/footer.php"; ?> 
</body>
</html>