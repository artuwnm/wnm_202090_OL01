
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "parts/meta.php" ?>
	<title>Tova</title>
</head>
<body>
<?php

$id = $_GET["id"];

?>
	<!-- header -->
	<?php include "parts/navbar.php" ?>
	<div class="container content">
		<div class="sidebar">	
		</div>
		<div class="main">
            <div class="card soft" id="paragraphs">
                <h3>Checked out</h3>	
                <p>
                    <a href="collections.php">Continue shopping</a>
                </p>   
            </div>	
		</div>
	</div>
</body>
</html>