<?php


function productListTemplate($r,$o) {
return $r.<<<HTML
<a class="col-xs-12 col-md-4" href="product_item.php?id=$o->id">
	<figure class="figure product">
		<img src="img/$o->thumbnail" alt="">
    </figure>
	<figcaption>
		<div>$o->name</div>
		<div>&dollar;$o->price</div>
	</figcaption>	
</a>
HTML;
}

function selectQuantity ($quantity=1,$total=6) {
	$output = "<select name='quantity'>";
	for($i=1;$i<=$total;$i++) {
		$output .= "<option ".($i==$quantity?"selected":"").">$i</option>";
	}
	$output .= "</select>";
	return $output;
}

function cartListTemplate($r,$o){
$totalfixed = number_format($o->total,2,'.','');
$selectquantity = selectQuantity($o->quantity,6);
return $r.<<<HTML
<div class="section cart">
	<div class="display-flex">
		<div class="flex-none images-thumbs">
			<img src="img/$o->thumbnail">
		</div>
		<div class="flex-stretch">
			<strong>$o->name</strong>
			<form action="cart_actions.php?action=delete-cart-item" method="post">
				<input type="hidden" name="id" value="$o->id">
				<input type="submit" class="btn delete" value="Delete" style="font-size: 0.8em">
			</form>
		</div>
		<div class="flex-none">
			<div>&dollar;$totalfixed</div>
			<form action="cart_actions.php?action=update-cart-item" method="post" onchange="this.submit()">
				<input type="hidden" name="id" value="$o->id">
				<div class="form-select quantity" style="font-size: 0.8em; padding: 1.5em 0">
					$selectquantity
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

	$pricefixed = number_format($cartprice,2,'.','');
	$taxfixed = number_format($cartprice*0.0725,2,'.','');
	$taxedfixed = number_format($cartprice*1.0725,2,'.','');

return <<<HTML
<div class="section">					
	<h4><b>Order Summary</b></h4>
</div>
<div class="section">
	<br>
	<div class="display-flex">
		<div class="flex-stretch">Subtotal</div>
		<div class="flex-none">&dollar;$pricefixed</div>
	</div>
	<br>
	<div class="display-flex">
		<div class="flex-stretch">Taxes</div>
		<div class="flex-none">&dollar;$taxfixed</div>
	</div>
	<br>
	<div class="display-flex">
		<div class="flex-stretch">Total</div>
		<div class="flex-none">&dollar;$taxedfixed</div>
	</div>
</div>
HTML;
}





function recommendedProducts($a) {
$products = array_reduce($a,'productlistTemplate');
echo <<<HTML
<div class="grid gap productlist">$products</div>
HTML;
}


function recommendedCategory($cat,$limit=3) {
    $result = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `category`='$cat' ORDER BY `date_create` DESC LIMIT $limit");
	recommendedProducts($result);
}

function recommendedSimilar($cat,$id=0,$limit=3) {
    $result = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `category`='$cat' AND `id`<>$id ORDER BY rand() LIMIT $limit");
	recommendedProducts($result);
}









