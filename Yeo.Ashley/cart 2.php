
<?php
    
include_once "lib/php/functions.php";
include_once "parts/templates.php";

$cart = makeQuery(makeConn(), " SELECT * FROM `products` WHERE `id` IN (10,12,13)");
//print_p($product);
$images = explode(",", $product->images);
$images_elements = array_reduce($images,function($r,$o){
  return $r."<img src='img/$o'>";
});

?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cart</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="./lib/css/styleguide.css">
	<link rel="stylesheet" type="text/css" href="./lib/css/gridsystem.css">
	<link rel="stylesheet" type="text/css" href="./css/storetheme.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

	<script type="http://code.jquery.com/jquery-3.2.1.min.js"></script>

</head>
<body>
	
	<?php include "parts/navbar.php"; ?>
  <div class="container">
    <h2>In Your Cart</h2>
      <div class="grid gap">
        <div class="col-xs-12 col-md-7">
          <div class="card soft">
            <?= array_reduce($cart,'cartListTemplate') ?>
        </div>
    </div>
    <div class="col-xs-12 col-md-5">
      <div class="card soft">
        <div class="card-section display-flex">
        <div class="flex-stretch"><strong>Sub Total</strong></div>
        <div class="flex-none">&dollar;8.50</div>
      </div>
    <div class="card-section display-flex">
      <div class="flex-stretch"><strong>Taxes</strong></div>
      <div class="flex-none">&dollar;1.50</div>
    </div>
    <div class="card-section display-flex">
      <div class="flex-stretch"><strong>Total</strong></div>
      <div class="flex-none">&dollar;10.00</div>
    </div>
    <div class="card-section">
      <a href="AAU/WNM608/checkout.php" class="button2">Check Out</a>
    </div>
  </div>
</div>
</div>
      </div>
   
</body>
</html>


