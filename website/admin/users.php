<?php 

include "../lib/php/functions.php";

$filename = "../data/users.json";
$users_array = file_get_json($filename);
$self = $_SERVER['PHP_SELF'];

$empty_user = (object)[
	"name"=>"",
	"type"=>"",
	"email"=>"",
	"classes"=>[]

];


// file_put_contents json_encode explode $_POST
// CRUD, Create Read Update Delete

// print_p([$_GET, $_POST]);

if(isset($_GET['action'])){
	switch($_GET['action']){
		case "update":
			$users_array[$_GET['id']]->name = $_POST['user-name'];
			$users_array[$_GET['id']]->type = $_POST['user-type'];
			$users_array[$_GET['id']]->email = $_POST['user-email'];
			$users_array[$_GET['id']]->classes = explode (", ", $_POST['user-classes']);

			file_put_contents($filename, json_encode($users_array));
			header("location:{$self}?id={$_GET['id']}");
			break;
		case "create":
			$empty_user->name = $_POST['user-name'];
			$empty_user->type = $_POST['user-type'];
			$empty_user->email = $_POST['user-email'];
			$empty_user->classes = explode (", ", $_POST['user-classes']);

			$id = count($users_array);

			$users_array[] = $empty_user;

			file_put_contents($filename, json_encode($users_array));
			header("location:{$self}?id=$id");
			break;
		case "delete":

			array_splice($users_array, $_GET['id'], 1);
			file_put_contents($filename, json_encode($users_array));
			header("location:{$self}");
		
			break;	
	}
}





/*
====================================================
	showUserPage START
====================================================
*/

function showUserPage($user){

	// Tell the function to get the $self variable form outside the function
	global $self;

/*
====================================================
Get all the data into variables
*/

	$id = $_GET['id'];
	$addoredit = $id == "new" ? "Add" : "Edit";
	$createorupdate = $id == "new" ? "create" : "update";
	$classes = implode(", ", $user->classes);

/*
====================================================
Put the display code into the $display variable using HEREDOC
*/

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

/*
====================================================
Put the form editing code into the $form variable using HEREDOC
*/

$form = <<<HTML

<div>
	<form method="post" action="{$self}?id=$id&action=$createorupdate">


		<h2>$addoredit User</h2>

		<label class="form-label" for="user-name">Name</label>
		<input type="text" class="form-input" name="user-name" id="user-name" value="$user->name" placeholder="Enter the User Name">

		<label class="form-label" for="user-type">Type</label>
		<input type="text" class="form-input" name="user-type" id="user-type" value="$user->type" placeholder="Enter the User Type">

		<label class="form-label" for="user-email">Email</label>
		<input type="text" class="form-input" name="user-email" id="user-email" value="$user->email" placeholder="Enter the User Email">

		<label class="form-label" for="user-classes">Classes</label>
		<input type="text" class="form-input" name="user-classes" id="user-classes" value="$classes" placeholder="Enter the User Classes">

		<br /><br />

		<button type="submit" class="form-button">Save</button>

	</form>
</div>
HTML;

/*
====================================================
If the querystring variable "$id" is "new", then just display the form,
otherwise, display the two columns, with display on the left and form on the right.

This uses the ternary if statement.
https://stitcher.io/blog/shorthand-comparisons-in-php#ternary-operator
*/


$output = $id == "new" ? $form : 
	"<div class='grid gap'>
		<div class='col-xs-12 col-md-7'>$display</div>
		<div class='col-xs-12 col-md-5'>$form</div>
	</div>";

/*
====================================================
Setup a header variable that changes the content depending
on whether a user is being edited or not
*/

$delete = $id == "new" ? "" : "<a href='$self?id=$id&action=delete'>Delete</a>";

/*
====================================================
Finally, echo all the output
*/




echo <<<HTML
<nav class="display-flex">
	<div class="flex-stretch"><a href="$self">Back</a></div>
	<div class="flex-none">$delete</div>
</nav>
$output;
HTML;

}

/*
====================================================
	showUserPage END
====================================================
*/







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
					<li><a href="<?= $self ?>">User List</a></li>
					<li><a href="<?= $self ?>?id=new">Add New User</a></li>
				</ul>
			</nav>	
		</div>
	</header>

	<div class="container">
		<div class="card soft">

			<?php 

			if(isset($_GET['id'])) {
				showUserPage($_GET['id'] == "new" ? $empty_user : $users_array[$_GET['id']]);
			} else {

				showUserList($users_array);
			}

			?>

		</div>
	</div>

</body>	
</html>