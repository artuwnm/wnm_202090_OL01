<?php

//List templete
function productListTemp($r,$o) {
    return $r.<<<HTML
            <li>
                <a href="product_item.php?id=$o->id">
                    <p class="img-p"><img src="img/$o->thumb" /></p>
                    <p class="good-name">$o->name</p>
                    <p class="good-price">&dollar;$o->price</p>
                </a>
            </li>
HTML;
}
//list data
function getProductList($keywords=''){
    $sql = "SELECT * FROM products WHERE status = 1";
    if($keywords != ""){
        $sql .= " and name like '%".$keywords."%' ";
    }
    $sql .= " order by id asc ";
    $rows = getRows(makeConn(),$sql);
    $products = array_reduce($rows,'productListTemp');
    echo $products;
}

//Cart templist
function cartListTemp($r,$o){
    return $r.<<<HTML
            <li class="clearfix">
                <div class="cart-img">
                    <img src="./img/$o->thumb"/>
                </div>
                <div class="cart-good-info">
                    <p class="cart-good-name">$o->name</p>
                    <p class="cart-good-attr"><label>Color:</label><span>$o->color</span></p>
                </div>
                <div class="cart-price-num-info">
			        <form class="flex-none" method="get" id="delete-cart-form" action="data/form_actions.php">
                    <p class="cart-price">&dollar;$o->amount</p>
                    <p class="cart-number">$o->quantity</p>
                    <p class="cart-delete">
                        <input type="hidden" name="action" value="delete-cart-item">
                        <input type="hidden" name="id" value="$o->id">
				        <button type="submit" class="form-button">Delete</button>
<!--                        <a href="javascript:;" class="J-delete-cart" data-id="$o->id">Delete</a>-->
                    </p>
                    </form>
                </div>
            </li>
HTML;
}
