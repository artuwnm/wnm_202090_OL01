const listItemTemplate = templater(o => `
	<a class="card soft col-xs-12 col-md-3" href="product_item.php?id=${o.id}">
	<figure class="figure">
		<img src="img/${o.product_thumb}" alt="Product">
		<figcaption>
			<div>${o.product_designer}</div>
			<div>&dollar;${o.product_unit_price}</div>
		</figcaption>
	</figure>
</a>
`);