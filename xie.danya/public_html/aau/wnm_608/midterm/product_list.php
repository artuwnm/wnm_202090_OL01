<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DA-IE Jewelry</title>

	<?php include "parts/meta.php"; ?>

</head>
<body>
	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<div class="crumbs">
	       	<script>
	       	    const makeNav = (classes='') => {
	       		const links = ['Home', 'Shop','All'];
	       		let ran = Math.floor(Math.random()*links.length);
	       		document.write(`
	       		<div>
	       			<nav class="${classes}">
	       				<ul>
	       				${links.reduce((r,o,i)=>{
	       					return r+`<li class="${ran==i?'active':''}"><a href="#">${o}</a></li>`;
	       				},'')}
	       				</ul>
	       			</nav>
	       		</div>
	       		`);
	       	}
	       	</script>
	        <script>makeNav('nav nav-crumbs')</script>
		</div>       
	</div>	

	<div class="container">
    	<div class="grid gap">
    		<div class="col-xs-12 col-md-4">
    			<figure class="figure product-1">
					<a href="product_1.php"><img src="img/1.JPG" onmouseover="this.src='img/1_1.jpg'" onmouseout="this.src='img/1.JPG'" alt=""></a>
    		    </figure>
				<figcaption>
					<div class="caption-shoplist">
						<div class="product-name">Product Name</div>
						<div>$120</div>
					</div>
				</figcaption>	
    		</div>
    		<div class="col-xs-12 col-md-4">
    			<figure class="figure product-2">
    				<img src="img/2.JPG" onmouseover="this.src='img/2_1.jpg'" onmouseout="this.src='img/2.JPG'" alt="">
    		    </figure>
				<figcaption>
					<div class="caption-shoplist">
						<div class="product-name">Product Name</div>
						<div>$120</div>
					</div>
				</figcaption>
    		</div>
    		<div class="col-xs-12 col-md-4">
    			<figure class="figure product-3">
    				<img src="img/3.JPG" onmouseover="this.src='img/3_1.jpg'" onmouseout="this.src='img/3.JPG'" alt="">
    		    </figure>
				<figcaption>
					<div class="caption-shoplist">
						<div class="product-name">Product Name</div>
						<div>$120</div>
					</div>
				</figcaption>
    		</div>
    	</div>
    	<div class="grid gap">
    		<div class="col-xs-12 col-md-4">
    			<figure class="figure product-1">
					<img src="img/1.JPG" onmouseover="this.src='img/1_1.jpg'" onmouseout="this.src='img/1.JPG'" alt="">
    		    </figure>
				<figcaption>
					<div class="caption-shoplist">
						<div class="product-name">Product Name</div>
						<div>$120</div>
					</div>
				</figcaption>	
    		</div>
    		<div class="col-xs-12 col-md-4">
    			<figure class="figure product-2">
    				<img src="img/2.JPG" onmouseover="this.src='img/2_1.jpg'" onmouseout="this.src='img/2.JPG'" alt="">
    		    </figure>
				<figcaption>
					<div class="caption-shoplist">
						<div class="product-name">Product Name</div>
						<div>$120</div>
					</div>
				</figcaption>
    		</div>
    		<div class="col-xs-12 col-md-4">
    			<figure class="figure product-3">
    				<img src="img/3.JPG" onmouseover="this.src='img/3_1.jpg'" onmouseout="this.src='img/3.JPG'" alt="">
    		    </figure>
				<figcaption>
					<div class="caption-shoplist">
						<div class="product-name">Product Name</div>
						<div>$120</div>
					</div>
				</figcaption>
    		</div>
    	</div>
    	<div class="grid gap">
    		<div class="col-xs-12 col-md-4">
    			<figure class="figure product-1">
					<img src="img/1.JPG" onmouseover="this.src='img/1_1.jpg'" onmouseout="this.src='img/1.JPG'" alt="">
    		    </figure>
				<figcaption>
					<div class="caption-shoplist">
						<div class="product-name">Product Name</div>
						<div>$120</div>
					</div>
				</figcaption>	
    		</div>
    		<div class="col-xs-12 col-md-4">
    			<figure class="figure product-2">
    				<img src="img/2.JPG" onmouseover="this.src='img/2_1.jpg'" onmouseout="this.src='img/2.JPG'" alt="">
    		    </figure>
				<figcaption>
					<div class="caption-shoplist">
						<div class="product-name">Product Name</div>
						<div>$120</div>
					</div>
				</figcaption>
    		</div>
    		<div class="col-xs-12 col-md-4">
    			<figure class="figure product-3">
    				<img src="img/3.JPG" onmouseover="this.src='img/3_1.jpg'" onmouseout="this.src='img/3.JPG'" alt="">
    		    </figure>
				<figcaption>
					<div class="caption-shoplist">
						<div class="product-name">Product Name</div>
						<div>$120</div>
					</div>
				</figcaption>
    		</div>
    	</div>
    	<div class="grid gap">
    		<div class="col-xs-12 col-md-4">
    			<figure class="figure product-1">
					<img src="img/1.JPG" onmouseover="this.src='img/1_1.jpg'" onmouseout="this.src='img/1.JPG'" alt="">
    		    </figure>
				<figcaption>
					<div class="caption-shoplist">
						<div class="product-name">Product Name</div>
						<div>$120</div>
					</div>
				</figcaption>	
    		</div>
    		<div class="col-xs-12 col-md-4">
    			<figure class="figure product-2">
    				<img src="img/2.JPG" onmouseover="this.src='img/2_1.jpg'" onmouseout="this.src='img/2.JPG'" alt="">
    		    </figure>
				<figcaption>
					<div class="caption-shoplist">
						<div class="product-name">Product Name</div>
						<div>$120</div>
					</div>
				</figcaption>
    		</div>
    		<div class="col-xs-12 col-md-4">
    			<figure class="figure product-3">
    				<img src="img/3.JPG" onmouseover="this.src='img/3_1.jpg'" onmouseout="this.src='img/3.JPG'" alt="">
    		    </figure>
				<figcaption>
					<div class="caption-shoplist">
						<div class="product-name">Product Name</div>
						<div>$120</div>
					</div>
				</figcaption>
    		</div>
    	</div>
	 </div> 

	 <?php include "parts/footer.php"; ?> 




</body>
</html>