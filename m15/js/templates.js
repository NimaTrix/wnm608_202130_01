
const makeProductList = templater(o=>{
return `
<div class="col-xs-6 col-md-4">
	<a href="product_item.php?id=${o.id}" class="product-item card card-soft card-light card-flat">
			<div class="image-square">
				<img src="${o.main_image}" alt="">
			</div>
			<div class="product-description">
				<div class="product-price">&dollar;${o.price.toFixed(2)}</div>
				<div class="product-title">${o.title}</div>
			</div>
		</figure>
	</a>
</div>
`;
})
