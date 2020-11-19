<?php

function productItem($r, $o) {

    $r .= <<<HERE

<div class="col-xs-12 col-md-6">
    <p>$o->name</p>
    <a href="product.php?id=1"><img class="autoscale" src="img/adobe_1.png" /></a>
</div>

HERE;

    return $r;

}


function cartItem($r, $o) {
    global $base;

    $q = [1,2,3,4,5];
    $q = array_map(function($i) use($o) {
        if($i == $o->quantity) return " selected ";
    }, $q);

    $curprice = cur($o->price);

    $r .= <<<HERE

<div class="card hard">				
    <div class="grid">
        <div class="col-md-2"><img style="width: 100%; height: 100%;" src="$base/img/$o->thumbnail.png" /></div>
        <div class="col-md-7"><div style="padding: 10px;">$o->name, $curprice</div></div>
        <div class="col-md-2">
            <form id="cart-update-$o->id" action="cart_actions.php" method="POST">
                <div class="form-select">
                    <input type="hidden" name="id" value="$o->id" />
                    <input type="hidden" name="action" value="update" />
                    <select name="quantity" value="$o->quantity" onchange="document.getElementById('cart-update-$o->id').submit()">
                        <option $q[0] value="1">1</option>
                        <option $q[1] value="2">2</option>
                        <option $q[2] value="3">3</option>
                        <option $q[3] value="4">4</option>
                        <option $q[4] value="5">5</option>
                    </select>
                </div>
            </form>
        </div>
        <form id="cart-delete-$o->id" action="cart_actions.php" method="POST">
            <input type="hidden" name="id" value="$o->id" />
            <input type="hidden" name="action" value="delete" />
        <div class="col-md-1"><a href="javascript:{}" onclick="document.getElementById('cart-delete-$o->id').submit();" style="padding-left: 20px; line-height:30px; font-weight: bold;" class="button">X</a></div>
        </form>
    </div>
</div>

HERE;

    return $r;
}
?>