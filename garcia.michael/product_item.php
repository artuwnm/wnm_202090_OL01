<!DOCTYPE html>
<html>
<head>
	<title>Product Page</title>


	<?php include "parts/meta.php"; ?>

</head>
<body>


	<?php include "parts/navbar.php"; ?>


	<div class="itemcontainer">
		<div class="grid gap">
			<div class="col-xs-12 col-md-8">
				<div class="card soft" style="width: 1000px; height: 800px;">
					<img src="img/1.jpg" style="width:500px; height: 550px;" align="left">
					<h1><center>Monstera Deliciosa</center></h1>
					<br><br>
					<p>This is item # <?= $_GET['id'] ?></p>

				</div>
			</div></div></div>



<br><br><p>

	<?php include "parts/footer.php"; ?>


</body>
</html>