<!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product Added To Cart</title>
	<?php include "parts/meta.php" ?>
</head>
<body>
	<?php include "parts/navbar.php" ?><?php
    $p = cartItemByID($_GET['id']);
    ?>
    <div class="cart-success">
        <div class="success-title">My Cart</div>
        <div class="add-cart-info">
            <p class="info-remark">Thank you for adding <?= $p->amount ?> of the <?= $p->name ?> to the cart.</p>
            <p class="info-button">
                <a href="product_list.php?n=2" class="continue-button">Back to Shopping</a>
                <a href="product_cart.php?n=4" class="back-button">Check Cart</a>
            </p>
        </div>
    </div>
    <?php include "parts/footer.php" ?>
</body>
</html>