<?php
include_once "../lib/php/functions.php";
include_once "../parts/templates.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sports Sniper</title>
    <base href="../">
    <?php include "../parts/meta.php" ?>
    <script type="text/javascript">
        $(document).ready(function(){
            var is_del = true;
            $(".J-delete-cart").click(function(){
                if(!is_del) return;
                var msg = confirm("Are you sure to delete it?");
                var _this = $(this);
                if(msg == true){
                    is_del = false;
                    $(".del-product-form").submit();
                    return false;
                    var id = _this.attr("data-id");
                    $.ajax({
                        url:'add.php?type=del',
                        type:'post',
                        dataType:'json',
                        data:{'id':id,'ispost':1},
                        success:function(data){
                            is_del = true;
                            if(data.code == 1){
                                _this.parents("li").remove();
                            }else{
                                alert(data.msg)
                                return false;
                            }
                        }
                    });
                }else{
                    return false;
                }
            });
        });
    </script>
</head>
<body>
<header style="width: 95%; margin: 0 auto;">
    <div class="toplogo">
        <p class="p-admin"><a href="../Yuezhou.Yu/index.php">Front</a></p>
        <img src="../img/LOGO1.png" style="width:300px; height:135px" >
    </div>
    <br>
    <div class="form-control display-flex">
    </div>
    <br>
</header>
<div class="cart-detail">
    <div class="success-title clearfix">Porduct List <a href="./admin/add.php" class="fr">Add Product</a> </div>
    <div class="admin-goods-list admin-list">
        <ul>
            <?php
            $sql = "SELECT * FROM products WHERE status = 1 order by id asc";
            $list = getRows(makeConn(),$sql);
            ?>
            <?php foreach ($list as $key=>$row){?>
            <li class="clearfix">
                <div class="cart-img">
                    <img src="../img/<?=$row->thumb?>"/>
                </div>
                <div class="cart-good-info">
                    <p class="cart-good-name"><?=$row->name?></p>
                    <p class="cart-good-attr"><label>Price:</label><span>$ <?=$row->price?></span></p>
                </div>
                <div class="cart-price-num-info">
                    <div class="cart-delete"><a href="./admin/add.php?id=<?=$row->id?>&type=edit" class="J-edit-cart form-button" data-id="<?=$row->id?>">Edit</a></div>
                    <div class="cart-delete">
                        <form action="./admin/add.php?type=del" method="post" class="del-product-form">
                            <input type="hidden" name="product_id" value="<?=$row->id?>">
                            <input type="hidden" name="type" value="del">
                            <input type="submit" class="form-button" value="Delete">
                        </form>
                    </div>
                </div>
            </li>
            <?php }?>
        </ul>
    </div>
</div>
<footer class="footer">
    <div class="copyright">
        <p>&copy; Copyright by Yuezhou Yu 2020, All rights reserved.</p>
    </div>
</footer>
</body>
</html>