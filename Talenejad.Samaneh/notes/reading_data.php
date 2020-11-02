<?php 

include "../lib/php/functions.php";
$filename = "notes.json";
$file = file_get_contents($filename);
$notes_object = json_decode($file);



 //print_p($notes);

 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Reading data</title>

	<?php include "../parts/meta.php"; ?>

</head>
<body>


	<?php include "../parts/navbar.php"; ?>

	<div class="container">
		<div class="card soft">
			<h2>Notes</h2>

			<?php 

			for($i=0,$i<count($notes_object->notes);$i++){
				echo "<li>{$notes_object->notes[$i]}<li>";
			}


			 ?>


		</div>
	</div>

	
</body>
</html>

