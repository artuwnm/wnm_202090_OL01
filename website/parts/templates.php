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

    $r .= <<<HERE

<div class="card hard">
					
<div class="grid">
    <div class="col-md-9">$o->name, $o->price</div>
    <div class="col-md-2">
        <div class="form-select">
            <select>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
            </select>
        </div>
    </div>
    <div class="col-md-1"><a style="padding-left: 20px; line-height:30px; font-weight: bold;" class="button">X</a></div>
</div>
</div>

HERE;

    return $r;
}
?>