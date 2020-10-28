<?php 

include "../lib/php/functions.php";
$users_array = file_get_json("../data/users.json");

function showUserPage($user){

	$classes = implode(", ", $user->classes);

echo <<<HTML
<nav class="nav nav-crumbs">
	<ul>
		<li><a href="admin/users.php">Back</a></li>
	</ul>
</nav>
<div>
	<form>
		<h2>$user->name</h2>
		<label class="form-label">Name</label>
		<input type="text" class="form-input" value="$user->name">
		<label class="form-label">Type</label>
		<input type="text" class="form-input" value="$user->type">
		<label class="form-label">Email</label>
		<input type="text" class="form-input" value="$user->email">
		<label class="form-label">Classes</label>
		<input type="text" class="form-input" value="$classes">
		<br /><br />
		
		<button type="submit" class="form-button">Save</button>
	</form>
</div>
HTML;
}

function showUserList($users) {

echo <<<HTML
<h2>User List</h2>
<nav class="nav">
	<ul>
HTML;

	for($i = 0; $i < count($users); $i++){
		echo "<li>
			<a href='admin/users.php?id=$i'>{$users[$i]->name}</a>
		</li>";
	}

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
					<li><a href="admin/users.php">User List</a></li>
				</ul>
			</nav>	
		</div>
	</header>

	<div class="container">
		<div class="card soft">

			<?php 

			if(isset($_GET['id'])) {

				showUserPage($users_array[$_GET['id']]);
			
			} else {

				showUserList($users_array);
			}

			?>

		</div>
	</div>

</body>	
</html>