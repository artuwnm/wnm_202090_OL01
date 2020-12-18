<?php
include_once "../lib/php/functions.php";
include_once "../parts/templates.php";
$type = trim($_GET['type']);
$product_id = $_GET['id'];
if($type == 'add'){
    $params = $_POST;
    $conn = makePDOConn();
    if($params['product_id']){
        $statement = $conn->prepare("UPDATE
		`products`
		SET
			`name`=?,
			`thumb`=?,
			`img1`=?,
			`img2`=?,
			`img3`=?,
			`price`=?,
			`content`=?
		WHERE `id`=?
		");
        $statement->execute([
            $params["name"],
            $params["thumb"],
            $params["img1"],
            $params["img2"],
            $params["img3"],
            $params["price"],
            $params["content"],
            $params['product_id']
        ]);
        header("location:admin.php");
        exit;
    }else{
        $create_time = date("Y-m-d H:i:s");
        $sql = "INSERT INTO
            `products`
            (
                `name`,
                `thumb`,
                `img1`,
                `img2`,
                `img3`,
                `price`,
                `content`,
                `status`,
                `create_time`
            )
            VALUES
            (?,?,?,?,?,?,?,1,'{$create_time}')
            ";
        $statement = $conn->prepare($sql);
        $statement->execute([
            $params["name"],
            $params["thumb"],
            $params["img1"],
            $params["img2"],
            $params["img3"],
            $params["price"],
            $params["content"]
        ]);
        $id = $conn->lastInsertId();
        header("location:admin.php");
        exit;
    }
} else if($type == 'edit'){
    $id = $_GET['id'];
    $result = getRows( makeConn(),"SELECT * FROM `products` WHERE `id` = '{$id}' " );
    $info = $result[0];
}
 else if($type == 'del'){
     if($_POST['product_id']){
         $conn = makePDOConn();
         $statement = $conn->prepare("DELETE FROM `products` WHERE `id`=?");
         $statement->execute([$_POST['product_id']]);
     }
     header("location:admin.php");
     exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sports Sniper</title>
    <base href="../">
    <?php include "../parts/meta.php" ?>
    <script type="text/javascript">
        $(document).ready(function(){
            var is_add = true;
            $(".J-submit-add").click(function(){
                if(!is_add) return;
                var name = $('input[name="name"]').val();
                var thumb = $('input[name="thumb"]').val();
                var img1 = $('input[name="img1"]').val();
                var img2 = $('input[name="img2"]').val();
                var img3 = $('input[name="img3"]').val();
                var price = $('input[name="price"]').val();
                var content = $('textarea[name="content"]').val();
                var product_id = $('input[name="product_id"]').val();
                if(name == ''){
                    $(".error-tips").show().html('Please fill in the Product Name');
                    $('input[name="name"]').focus();
                    return false;
                }
                if(thumb == ''){
                    $(".error-tips").show().html('Please fill in the Product Thumb:');
                    $('input[name="thumb"]').focus();
                    return false;
                }
                if(parseFloat(price) <= 0){
                    $(".error-tips").show().html('Please fill in the Product Price');
                    $('input[name="price"]').focus();
                    return false;
                }
                if(content == ''){
                    $(".error-tips").show().html('Please fill in the Content');
                    $('textarea[name="content"]').focus();
                    return false;
                }
                $(".error-tips").hide().html('');
                is_add = false;
                $(".add-product-form").submit();
            });
        });
    </script>
</head>
<body>
<header style="width: 95%; margin: 0 auto;">
    <div class="toplogo">
        <p class="p-admin"><a href="../index.php">Front</a></p>
        <img src="../img/LOGO1.png" style="width:300px; height:135px" >
    </div>
    <br>
    <div class="form-control display-flex">
    </div>
    <br>

</header>
<div class="cart-detail">
    <div class="success-title">Add Product<a href="./admin/admin.php" class="fr"> << Product List</a> </div>
    <div class="admin-goods-list">
        <ul>
            <form action="./admin/add.php?type=add" method="post" class="add-product-form">
                <li class="clearfix">
                    <label class="p-title">Product Name:</label>
                    <input type="text" name="name" value="<?=$info->name?>" class="input-text input-email" placeholder="Product Name" autocomplete="off" />
                </li>
                <li class="clearfix">
                    <label class="p-title">Product Thumb:</label>
                    <input type="text" name="thumb" value="<?=$info->thumb?>" class="input-text input-email" placeholder="Product Thumb" autocomplete="off" />
                </li>
                <li class="clearfix">
                    <label class="p-title">Product Img1:</label>
                    <input type="text" name="img1" value="<?=$info->img1?>" class="input-text input-email" placeholder="Product Img1" autocomplete="off" />
                </li>
                <li class="clearfix">
                    <label class="p-title">Product Img2:</label>
                    <input type="text" name="img2" value="<?=$info->img2?>" class="input-text input-email" placeholder="Product Img2" autocomplete="off" />
                </li>
                <li class="clearfix">
                    <label class="p-title">Product Img3:</label>
                    <input type="text" name="img3" value="<?=$info->img3?>" class="input-text input-email" placeholder="Product Img3" autocomplete="off" />
                </li>
                <li class="clearfix">
                    <label class="p-title">Product Price:</label>
                    <input type="text" name="price" value="<?=$info->price?>" class="input-text input-email" placeholder="Product Price" autocomplete="off" />
                </li>
                <li class="clearfix">
                    <label class="p-title">Content:</label>
                    <textarea name="content" class="textarea-text" placeholder="Content"><?=$info->content?></textarea>
                </li>
                <li class="clearfix">
                    <a href="javascript:;" class="J-submit-add submit-btn">Submit</a>
                    <input type="hidden" name="product_id" value="<?=$info->id?>" />
                    <p class="error-tips" style="padding-left:160px; height: 30px; line-height: 30px;"></p>
                </li>
            </form>
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