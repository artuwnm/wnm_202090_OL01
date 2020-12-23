<?php 


include "../lib/php/functions.php";


$notes_object = file_get_json("notes.json");
$users_array = file_get_json("../data/user.json");

// print_p($notes);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reading data</title>


	<?php include "../parts/meta.php"; ?>
</head>
<body>

<?php include "../parts/navbar.php"; ?>

	<div class="container">
		<div class="card soft">
			<h2>notes</h2>
			
			<?php 

			for($i=0;$i<count($notes_object ->notes);$i++){
				echo "<li>{$notes_object ->notes[$i]}</li>";


			}




			?>
		</div>


		<div class="card soft">
			<h2>Users</h2>
			
			<?php 

			for($i=0;$i<count($users_array);$i++){
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