
const listItemTemplate = templater(o=>`
	<a class="col-xs-12 col-md-3" href="product.php?id=${o.id}">
		<figure class="figure product-overlay display-flex flex-column">
			<div class="flex-stretch">
				<img src="img/${o.thumbnail}" alt="">
			</div>
			<figcaption>
				<div class="caption-body">
					<div>${o.name}</div>
					<br>
					<div>&dollar;${o.price}</div>
				</div>
			</figcaption>
		</figure>
	</a>

`);