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

function cartListTemplate($r,$o){
	return $r.<<<HTML

	<div class="display-flex flex-stretch">
		<div class="flex-none images-thumbs">
			<img src="img/$o->thumbnail">
		</div>
		<div class="cartinfo display-flex flex-stretch">
			<div>
				<strong>$o->name</strong>
				<p class="remove"><a href="#">✕ Remove</a></p>
			</div>
			<div>
				Quatity: 1
			</div>
			<div>
				&dollar;$o->price
			</div>
		</div>
	</div>



HTML;
}





?>