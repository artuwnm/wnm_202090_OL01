

$(()=>{
	$(".product-thumbs img").on("mouseenter",function(e){
		$(".product-main img")
			.attr("src",$(this).attr("src"));
	})
})