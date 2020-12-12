
<?php
    
include_once "lib/php/functions.php";
include_once "parts/templates.php";

$cart = getCart();

//$cart = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` IN (23,11,14)");

$cart_items = getCartItems();

?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cart Page</title>

  <?php include "parts/meta.php"; ?>
  <link rel="stylesheet" type="text/css" href="AAU/WNM608/css/storetheme.css">

</head>
<body>
  
  <?php include "parts/navbar.php"; ?>

  <div class="container">
    <h2>In Your Cart</h2>

    <?php
    if(count($cart)){
      ?>
      <div class="grid gap">
        <div class="col-xs-12 col-md-7">
          <div class="card soft">
            <?= array_reduce($cart_items,'cartListTemplate') ?>
          </div>
        </div>
        <div class="col-xs-12 col-md-5">
          <div class="card soft">
             <?= cartTotals() ?>
             <div class="card-section">
                <a href="AAU/WNM608/checkout.php" class="button2">Checkout</a>
            </div>
          </div>
        </div>
      </div>
      <?php
    }else{
      ?>
      <div class="card soft">
       <p> No items in cart </p>

       <h3>Other Recommendations</h3>


      </div>
      <?php
    }
    ?>
    

  </div>
 
</body>
</html>


