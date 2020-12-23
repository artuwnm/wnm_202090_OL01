<?php

function productListTemplate($r,$o){
	return $r.<<<HTML

	<a class="col-xs-12 col-md-3" href="product.php?id=$o->id">
		<figure class="figure product-overlay display-flex flex-column">
			<div class="flex-stretch">
				<img src="img/$o->thumbnail" alt="">
			</div>
			<figcaption>
				<div class="caption-body">
					<div>$o->name</div>
					<br>
					<div>&dollar;$o->price</div>
				</div>
			</figcaption>
		</figure>
	</a>

	HTML;

}


function productListTemplate2($r,$o){
	return $r.<<<HTML

	<a class="col-md-2" href="product.php?id=$o->id">
		<figure class="figure display-flex flex-column">
			<div class="flex-stretch">
				<img src="img/$o->thumbnail" alt="">
			</div>
			<figcaption>
				<div class="caption-body">
					<div>$o->name</div>
					<br>
					<div>&dollar;$o->price</div>
				</div>
			</figcaption>
		</figure>
	</a>

	HTML;

}


function selectAmount($amount=1,$total=10) {
	$output = "<select name='amount'>";
	for($i=1;$i<=$total;$i++) {
		$output .= "<option ".($i==$amount?"selected":"").">$i</option>";
	}
	$output .= "</select>";
	return $output;
}


function cartListTemplate($r,$o){
$totalfixed = number_format($o->total,2, '.','');
$selectamount = selectAmount($o->amount,10);
	return $r.<<<HTML

	<div class="display-flex flex-stretch card-section">
		<div class="flex-none images-thumbs">
			<img src="img/$o->thumbnail">
		</div>
		<div class="cartinfo display-flex flex-stretch">
			<div>
				<strong>$o->name</strong>
				<form action="cart_actions.php?action=delete-cart-item" method="post" class="remove">
					<input type="hidden" name="id" value="$o->id">
					<input type="submit" class="form-button inline" value="Delete">
				</form>
			</div>
			<div class="flex-none">
				<div>
					&dollar;$totalfixed
				</div>
				<form action="cart_actions.php?action=update-cart-item" method="post" onchange="this.submit()">
					<input type="hidden" name="id" value="$o->id">
					<div class="form-select" style="font-size: 0.8em">
						$selectamount
					</div>
				</form>
			</div>
		</div>
	</div>



HTML;
}

function cartListTemplate2($r,$o){
$totalfixed = number_format($o->total,2, '.','');
$selectamount = selectAmount($o->amount,10);
	return $r.<<<HTML

	<div class="display-flex flex-stretch card-section">
		<div class="flex-none images-thumbs">
			<img src="img/$o->thumbnail">
		</div>
		<div class="cartinfo display-flex flex-stretch">
			<div>
				<div>
					<strong>$o->name</strong>
				</div>
				<div>
					<strong style="font-size: 0.8em">Quatity: $o->amount</strong>
				</div>
			</div>
			<div class="flex-none">
				<div>
					&dollar;$totalfixed
				</div>
				<form action="cart_actions.php?action=update-cart-item" method="post" onchange="this.submit()">
					<input type="hidden" name="id" value="$o->id">
					<div class="form-select" style="font-size: 0.8em">
						$selectamount
					</div>
				</form>
			</div>
		</div>
	</div>



HTML;
}


function cartTotals() {
	$cart = getCartItems();

	$cartprice = array_reduce($cart,function($r,$o){return $r + $o->total;},0);

	$pricefixed = number_format($cartprice,2, '.','');
	$taxfixed = number_format($cartprice*0.0725,2, '.','');
	$taxedfixed = number_format($cartprice*1.0725,2, '.','');

return <<<HTML


<h4>Order Summary</h4>
<br>
<div class="display-flex card-section">
	<div class="flex-stretch"><strong>Sub Total</strong></div>
	<div class="flex-none">&dollar;$pricefixed</div>
</div>
<div class="display-flex card-section">
	<div class="flex-stretch"><strong>Taxes</strong></div>
	<div class="flex-none">&dollar;$taxfixed</div>
</div>
<div class="display-flex card-section">
	<div class="flex-stretch"><strong>Total</strong></div>
	<div class="flex-none">&dollar;$taxedfixed</div>
</div>

HTML;


}








?>