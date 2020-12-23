<!DOCTYPE html>
<html>
<head>
    <title>Sports Sniper</title>
    <?php include "parts/meta.php" ?>
</head>
<body>
<?php include "parts/navbar.php" ?>
<?php
$_SESSION['cart'] = [];
?>
<div class="cart-success">
    <!--    <div class="success-title">My Cart</div>-->
    <div class="add-cart-info">
        <p class="info-remark">Thank you for your purchase!</p>
        <p class="info-button">
            <a href="product_list.php" class="continue-button">Continue Shopping</a>
        </p>
    </div>
</div>
<?php include "parts/footer.php" ?>
</body>
</html>
