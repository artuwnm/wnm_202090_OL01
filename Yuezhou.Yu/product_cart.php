<!DOCTYPE html>
<html>
<head>
    <title>Sports Sniper</title>
    <?php include "parts/meta.php" ?>
    <script type="text/javascript">
        $(document).ready(function(){
            var is_del = true;
            $(".J-delete-cart").click(function(){
                if(!is_del) return;
                var msg = confirm("Are you sure to delete it?");
                var _this = $(this);
                if(msg == true){
                    $("#delete-cart-form").submit();
                }else{
                    return false;
                }
            });
        });
    </script>
</head>
<body>
<?php include "parts/navbar.php" ?>
<?php
$result = getCartItems();
?>
<div class="cart-detail">
    <div class="success-title">My Cart</div>
    <div class="cart-goods-list">
        <ul>
            <?php
            $num = 0;
            echo array_reduce($result,'cartListTemp');
            if(!empty($result)){
                $num = 1;
            }
            ?>
        </ul>
    </div>
    <?php if($num >0){ ?>
    <div class="to-settle clearfix">
        <a href="product_list.php" class="continue-button" style="float: left;">Back</a>
        <p class="clearfix"><a href="product_checkout.php" class="J-submit-settle">Checkout</a></p>
        <p class="clearfix"><span class="error-tips" style="float:right;"></span></p>
    </div>
    <?php }else{?>
        <p class="info-button">
            <a href="product_list.php" class="continue-button">Back</a>
        </p>
    <?php }?>
</div>
<?php include "parts/footer.php" ?>
</body>
</html>