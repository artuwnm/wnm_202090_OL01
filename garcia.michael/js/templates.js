

const listItemTemplate = templater(o=>`
<a class="col-xs-12 col-md-4" href="product_item.php?id=${o.id}">
	<figure class="figure product display-column">
		<div class="flex-stretch images-main">
		<img src="img/${o.thumbnail}" alt="Plant"></div>
			<figcaption class="flex-non">
			<div>&dollar;${o.price}</div>
			<div>${o.name}</div>
		</figcaption>
	</figure>
</a>
`);

