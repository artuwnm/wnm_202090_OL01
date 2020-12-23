<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>


<?php 

	include "../lib/php/functions.php";
	$notes_object = file_get_json("notes.json");
	$users_array = file_get_json("../data/users.json");

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Reading Data</title>
	<?php include "../parts/meta.php"; ?>
</head>
<body>

	<br>

	<div class="container"> 
		
		<div class="card soft card_padding">
			<h2>Notes</h2>

			<?php
				for($i=0; $i<count($notes_object->notes); $i++) {
					echo "<li>{$notes_object->notes[$i]}</li>";
				}
			?>
		</div>

		<br>

		<div class="card soft card_padding">
			<h2>Users</h2>
			<?php
				for($i=0; $i<count($users_array); $i++) {
					echo "<li>
						<strong>{$users_array[$i]->name}</strong>
						{$users_array[$i]->type}
					</li>";
				}
			?>
		</div>

	</div>
	
</body>
</html>
