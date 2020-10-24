<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "parts/meta.php" ?>
	<title>Tova</title>
</head>
<body>

	<!-- header -->
	<?php include "parts/navbar.php" ?>
	<div class="container content">

		<div class="grid gap">
			<div class="col-xs-12 col-md-6">

				<div class="card soft">
					<h3 id="forms">Shipping Information</h3>
					<form>
						<input type="text" placeholder="Full Name" class="form-input">
						<input type="text" placeholder="Address" class="form-input">
						<input type="text" placeholder="Address" class="form-input">
						<input type="text" placeholder="City" class="form-input">
						<input type="text" placeholder="State" class="form-input">
						<input type="text" placeholder="Zipcode" class="form-input">
					</form>
				</div>	

				<div class="card soft">
					<h3 id="forms">Billing Information</h3>
					<input type="checkbox" id="input-1">
					<label for="input-1">Same as shipping information</label>
		
					<form style="margin-top: 20px">
						<input type="text" placeholder="Full Name" class="form-input">
						<input type="text" placeholder="Address" class="form-input">
						<input type="text" placeholder="Address" class="form-input">
						<input type="text" placeholder="City" class="form-input">
						<input type="text" placeholder="State" class="form-input">
						<input type="text" placeholder="Zipcode" class="form-input">
					</form>	
				</div>

				<div style="text-align: center; margin-top: 60px; margin-bottom: 60px;">
					<a class="button big">Checkout</a>	
				</div>
			</div>
				
			<div class="col-xs-12 col-md-6">

				<div class="card hard">
					
					<div class="grid">
						<div class="col-md-9">Item Name</div>
						<div class="col-md-2">
							<div class="form-select">
								<select>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
									<option>8</option>
									<option>9</option>
									<option>10</option>
								</select>
							</div>
						</div>
						<div class="col-md-1"><a style="padding-left: 20px; line-height:30px; font-weight: bold;" class="button">X</a></div>
					</div>
				</div>

				<div class="card hard">
					
					<div class="grid">
						<div class="col-md-9">Item Name</div>
						<div class="col-md-2">
							<div class="form-select">
								<select>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
									<option>8</option>
									<option>9</option>
									<option>10</option>
								</select>
							</div>
						</div>
						<div class="col-md-1"><a style="padding-left: 20px; line-height:30px; font-weight: bold;" class="button">X</a></div>
					</div>
				</div>
				

				<div class="card hard">
					
					<div class="grid">
						<div class="col-md-9">Item Name</div>
						<div class="col-md-2">
							<div class="form-select">
								<select>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
									<option>8</option>
									<option>9</option>
									<option>10</option>
								</select>
							</div>
						</div>
						<div class="col-md-1"><a style="padding-left: 20px; line-height:30px; font-weight: bold;" class="button">X</a></div>
					</div>
				</div>
				
				
			</div>

			

	</div>
</body>
</html>