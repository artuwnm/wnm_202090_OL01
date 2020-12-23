const listItemTemplate = templater(o=>`
<div class="col-xs-12 col-md-6 productListItem">
<a href="product.php?id=${o.id}">
<img class="autoscale" src="img/${o.thumbnail}.png" />
    <div>
        <span style="font-weight: bold;">${o.name}</span>, <sup>$</sup>${o.price.toFixed(2)}
    </div>
</a></div>
`);