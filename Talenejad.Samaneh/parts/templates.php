<?php

function productListTemplate($r, $o) {
return $r.<<<HTML

		<a class="card soft col-xs-12 col-md-3" href="product_item.php?id=$o->id">
			<figure class="figure">
				<img src="img/$o->product_thumb" alt="Product">
				<figcaption>
					<div>$o->product_designer</div>
					<div>&dollar;$o->product_unit_price</div>
				</figcaption>
			</figure>
		</a>
HTML;
}



function selectAmount($amount=1,$total=10) {
	$output = "<select name='amount'>";
	for($i=1; $i<=$total;$i++) {
		$output .= "<option ".($i==$amount?"selected":"").">$i</option>";
	}
	$output .= "</select>";
	return $output;
}



function cartListTemplate($r, $o) {

$totalfixed = number_format($o->total,2,'.','');
$selectAmount = selectAmount($o->quantity,10);

return $r.<<<HTML
<div class="display-flex">

	<div class="flex-none images-thumbs">
		<img src="img/$o->product_thumb">
	</div>

	<div class="flex-stretch">
		<strong>$o->product_name</strong>
		<form action="cart_action.php?action=delete-cart-item" method="post"">
			<input type="hidden" name="id" value="$o->id">
			<button type="submit" class="form-control form-button inline"  style="font-size: 0.7em" >Delete</button>
		</form>
	</div>

	<div class="flex-none">
		<div>
			&dollar;$totalfixed
		</div>

		<form action="cart_action.php?action=update-cart-item" method="post" onchange="this.submit(
			)">
			<input type="hidden" name="id" value="$o->id">
			<div class="amount-select">
				$selectAmount
			</div>
		</form>

	</div>

</div>	
<hr>

HTML;

}



function cartListTemplate_atcheckout($r, $o) {

$totalfixed = number_format($o->total,2,'.','');
$selectAmount = selectAmount($o->quantity,10);

return $r.<<<HTML
<div class="display-flex">

	<div class="flex-none images-thumbs">
		<img src="img/$o->product_thumb">
	</div>

	<div class="flex-stretch">
		<strong>$o->product_name</strong>
		<form action="cart_action.php?action=delete-cart-item-fromcheckout" method="post"">
			<input type="hidden" name="id" value="$o->id">
			<button type="submit" class="form-control form-button inline"  style="font-size: 0.7em" >Delete</button>
		</form>
	</div>

	<div class="flex-none">
		<div>
			&dollar;$totalfixed
		</div>

		<form action="cart_action.php?action=update-cart-item-fromcheckout" method="post" onchange="this.submit(
			)">
			<input type="hidden" name="id" value="$o->id">
			<div class="amount-select">
				$selectAmount
			</div>
		</form>

	</div>
</div>	
<hr>
HTML;

}



function cartTotals() {
	$cart = getCartItems();

	$cartPrice = array_reduce(($cart), function($r,$o){
		return $r + $o->total;
	},0);

	$pricefixed = number_format($cartPrice,2,'.','');
	$taxfixed = number_format($cartPrice*0.0875,2,'.','');
	$taxedfixed = number_format($cartPrice*1.0875,2,'.','');


return <<<HTML
<div class="display-flex">
	<div class="flex-stretch"><strong>Sub Total:</strong></div>
	<div class="flex-none">&dollar;$pricefixed</div>
</div>

<div class="display-flex">
	<div class="flex-stretch"><strong>Taxes:</strong></div>
	<div class="flex-none">&dollar;$taxfixed</div>
</div>

<div class="display-flex">
	<div class="flex-stretch"><strong>Total:</strong></div>
	<div class="flex-none">&dollar;$taxedfixed</div>
</div>
HTML;

}



function recommendedProducts($a) {

$products = array_reduce($a, 'productListTemplate');

echo <<<HTML
	<div class="grid gap">$products</div>
HTML;

}


function recommendedCategory($cat, $limit=4) {

$result = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `product_category`='$cat' ORDER BY `date_create` DESC LIMIT $limit");
recommendedProducts($result);

}



function recommendedSimilar($cat, $id=0, $limit=3) {

$result = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `product_category`='$cat' AND `id`<>$id ORDER BY rand() LIMIT $limit");
recommendedProducts($result);

}












