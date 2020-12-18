<?php
include_once "lib/php/functions.php";
include_once "parts/templates.php";
$result = getRows(
    makeConn(),
    "SELECT *
	FROM `products`
	WHERE `id` = '{$_GET['id']}'
	"
);
$info = $result[0];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sports Sniper</title>
    <?php include "parts/meta.php" ?>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".span-img").mouseover(function(){
                $(".span-img").css("border-color",'#C6D9F1');
                $(this).css("border-color",'#617278')
                var _src = $(this).find("img").attr("src");
                $(".good-img-show-div").find("img").attr("src",_src);
            }).mouseout(function(){

            });
            var is_add = true;
            $(".J-add-cart").click(function(){
                if(!is_add) return false;
                var color = $('select[name="color"]').val();
                var quantity = $('select[name="quantity"]').val();
                if(color == 0){
                    $(".error-tips").show().html('Please select the color');
                    return false;
                }
                if(quantity == 0){
                    $(".error-tips").show().html('Please select the quantity');
                    return false;
                }
                $(".error-tips").hide().html('');
                is_add = false;
                addtocartform.submit();
            });
        });
    </script>
</head>
<body>
<?php include "parts/navbar.php" ?>
<div class="good-detail">
    <div class="good-info clearfix">
        <div class="good-imgs fl">
            <div class="good-thumb">
                <span class="span-img"><img src="./img/<?=$info->thumb?>"/> </span>
                <?php if($info->img1){ ?>
                <span class="span-img"><img src="./img/<?=$info->img1?>"/> </span>
                <?php }?>
                <?php if($info->img2){ ?>
                <span class="span-img"><img src="./img/<?=$info->img2?>"/> </span>
                <?php }?>
                <?php if($info->img3){ ?>
                <span class="span-img"><img src="./img/<?=$info->img3?>"/> </span>
                <?php }?>
            </div>
            <div class="good-img-show">
                <div class="good-img-show-div"><img src="./img/<?=$info->thumb?>"/> </div>
            </div>
        </div>
        <div class="good-basic-info fl">
            <form class="" method="get" id="addtocartform" action="data/form_actions.php">
                <h2><?=$info->name?></h2>
                <p class="good-price">$ <?=$info->price?></p>
                <div class="good-attr">
                    <p>Color:</p>
                    <select name="color" class="good-select">
                        <option value="0">Select</option>
                        <option value="Yellow">Yellow</option>
                        <option value="Red">Red</option>
                        <option value="Blue">Blue</option>
                    </select>
                </div>
                <div class="good-attr">
                    <p>Quantity:</p>
                    <select name="quantity" class="good-select">
                        <option value="0">Select</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                    </select>
                </div>
                <div class="add-cart">
                    <input type="hidden" name="product_id" value="<?=$info->id?>">
                    <input type="hidden" name="action" value="add-to-cart">
                    <a href="javascript:;" class="J-add-cart">ADD TO CART</a>
                    <span class="error-tips"></span>
                </div>
            </form>
        </div>
    </div>
    <div class="good-content">
        <h2>Description</h2>
        <div class="info">
            <?=$info->content?>
        </div>
    </div>
</div>
<?php include "parts/footer.php" ?>
</body>
</html>