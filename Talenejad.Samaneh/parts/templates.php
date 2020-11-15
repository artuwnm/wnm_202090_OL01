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


function cartListTemplate($r, $o) {
return $r.<<<HTML
<div class="display-flex">
	<div class="flex-none images-thumbs">

		<img src="img/$o->product_thumb">
		
	</div>
	<div class="flex-stretch">
		<strong>$o->product_designer</strong>
		<div>Delete</div>
	</div>
	<div class="flex-none">
		&dollar;$o->product_unit_price
	</div>
</div>	

HTML;
}
