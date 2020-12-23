<?php

include "../lib/php/functions.php";

$users = file_get_json("../data/users.json");


function showUserPage($user) {

$classes = implode(", ", $user->classes);



//heardoc
echo <<<HTML
<nav class="nav nav-crumbs">
	<ul>
		<li><a href="admin/users.php">Back</a></li>
	</ul>	
</nav>

<div>
	<form>
	<h2>Edit Information</h2>
		<div class="form-control">
			<label class="form-label">Name</label>
			<input type="text" value="$user->name" class="form-input">
			<label class="form-label">Type</label>
			<input type="text" value="$user->type" class="form-input">
			<label class="form-label">Email</label>
			<input type="text" value="$user->email" class="form-input">
			<label class="form-label">Classes</label>
			<input type="text" value="$classes" class="form-input">
	</div>
			<div class="form-control">
				<a href="admin/users.php" class="form-button">Save</a>
			</div>
	</div>
HTML;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Admin Page</title>

	<?php include "../parts/meta.php"; ?>
</head>
<body>

	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>User Admin</h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class="nav nav-flex flex-none">
				<ul>
					<li><a href="main/admin/users.php">User List</a></li>
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

			for($i=0;$i<count($users);$i++){
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

</body>
</html>