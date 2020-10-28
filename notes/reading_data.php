<?php

include "../lib/php/functions.php";

$notes_object = file_get_json("notes.json");
$users_array = file_get_json("../data/users.json");


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Reading Data</title>

	<?php include "../parts/meta.php"; ?>
</head>
<body>
	<?php include "../parts/nav_bar.php"; ?>

	<div class="container">
		
		<div class="card soft">
			<h2>Users</h2>

			<?php

			for($i = 0; $i < count($users_array); $i++) {
				echo "<li>
						<strong>{$users_array[$i]->name}</strong>
						<span>{$users_array[$i]->type}</span>
				</li>";
			}
			?>

	
		</div>
	</div>

</body>
</html>