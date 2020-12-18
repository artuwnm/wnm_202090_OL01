<!DOCTYPE html>
<html>
<head>
    <title>Sports Sniper</title>
    <?php include "parts/meta.php" ?>
</head>
<body>
<?php include "parts/navbar.php" ?>
<div class="cart-detail clearfix">
    <div class="success-title">Fill in order information</div>
    <div class="cart-goods-list clearfix">
        <form action="" method="post" class="fl order-submit-form">
            <ul>
                <li>
                    <p class="p-title">Email Address:</p>
                     <input type="text" name="email" class="input-text input-email" placeholder="Email address" autocomplete="off" />
                </li>
                <li>
                    <p>Shopping Address:</p>
                    <input type="text" name="first_name" class="input-text input-name" placeholder="First Name" autocomplete="off" />
                    <input type="text" name="last_name" class="input-text input-name" placeholder="Last Name" autocomplete="off" />
                </li>
                <li>
                    <input type="text" name="street_address" class="input-text input-street" placeholder="Street Address" autocomplete="off" />
                </li>
                <li>
                    <input type="text" name="apt_suite" class="input-text input-street" placeholder="Apt, Suite (Optional)" autocomplete="off" />
                </li>
                <li>
                    <input type="text" name="zip_code" class="input-text input-name" placeholder="ZIP Code" autocomplete="off" />
                    <input type="text" name="city" class="input-text input-name" placeholder="City" autocomplete="off" />
                </li>
                <li>
                    <p>Payment Method:</p>
                    <input type="text" name="card_num" class="input-text input-name" placeholder="Card Number" autocomplete="off" />
                </li>
                <li>
                    <input type="text" name="card_date" class="input-text input-name" placeholder="MM/YY" autocomplete="off" />
                    <input type="text" name="cvv" class="input-text input-name" placeholder="CVV" autocomplete="off" />
                </li>
                <li>
                    <a href="product_confirmation.php" class="submit-btn">Complete Payment</a>
                    <p class="error-tips"></p>
                </li>
            </ul>
        </form>
        <div class="order-submit-goods">
            <div class="order-submit-goods-list">
                <?php
                $result = getCartItems();
                $totalprice = 0;
                foreach ($result as $key=>$row){
                    $totalprice += $row->amount;
                    ?>
                    <div class="product-one">
                        <p class="img_p"><a href="detail.php?id=1"><img src="./img/<?=$row->thumb?>"/></a></p>
                        <p><a href="detail.php?id=1"><?=$row->name?></a></p>
                        <p>Quantity：<?=$row->quantity?></p>
                        <p>Prices：$<?=$row->amount?></p>
                    </div>
                <?php }?>
            </div>
            <div class="order-submit-goods-price">
                <span>The total price:</span><b>$ <i class="J-total-price" style="font-style: normal;"><?=$totalprice?></i></b>
            </div>
        </div>
    </div>
</div>
<?php include "parts/footer.php" ?>
</body>
</html>