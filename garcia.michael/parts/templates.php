<?php

function productListTemplate($r,$o) {
return $r.<<<HTML
<a class="col-xs-12 col-md-4" href="product_item.php?id=$o->id">
	<figure class="figure product display-column">
		<div class="flex-stretch"><img src="img/$o->thumbnail" alt="Plant"></div>
			<figcaption class="flex-non">
			<div>&dollar;$o->price</div>
			<div>$o->name</div>
		</figcaption>
	</figure>
</a>
HTML;
}


function cartListTemplate($r,$o){
return $r.<<<HTML
<div class="display-flex">
	<div class="flex-none">
		<img src="img/$o->thumbnail">
	</div>
	<div class="flex-stretch">
		<strong>$o->name</strong>
		<div>Delete</div>	
	</div>
	<div class="flex-none">
		&dollar;$o->price
	</div>
</div>
HTML;
}
