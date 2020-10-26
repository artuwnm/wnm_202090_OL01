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
		<h3>Check Out</h3>
		<div class="grid gap">
			<div class="col-xs-12 col-md-8">
				<div class="card soft">
					<h4><b>Shipping Address</b></h4>
					<form>
						<div class="form-control display-flex flex-align-center">
							<div class="flex-none">
								<label class="form-label">First Name</label>
							</div>
							<div class="flex-stretch">
								<input type="search" class="form-input flex-stretch">
							</div>
							<div class="flex-none">
								<label class="form-label">Last Name</label>
							</div>
							<div class="flex-stretch">
								<input type="search" class="form-input flex-stretch">
							</div>
						</div>
						<div class="form-control">
							<label class="form-label">Address</label>
							<input type="address" class="form-input">
						</div>
						<div class="form-control display-flex flex-align-center">
							<div class="flex-none">
								<label class="form-label">city</label>
							</div>
							<div class="flex-stretch">
								<input type="search" class="form-input flex-stretch">
							</div>
							<div class="flex-none">
								<label class="form-label">State</label>
							</div>
							<div class="flex-stretch">
								<div class="form-select">
									<select>
										<option>Choose</option>
										<option>New York</option>
									</select>
								</div>
							</div>	
						</div>
						<div class="form-control display-flex flex-align-center">
							<div class="flex-none">
								<label class="form-label">Zip Code</label>
							</div>
							<div class="flex-stretch">
								<input type="search" class="form-input flex-stretch">
							</div>
							<div class="flex-none">
								<label class="form-label">Country</label>
							</div>
							<div class="flex-stretch">
								<div class="form-select">
									<select>
										<option>Choose</option>
										<option>United States</option>
									</select>
								</div>
							</div>		
						</div>
						<div class="form-control">
							<label class="form-label">Email</label>
							<input type="text" class="form-input">
						</div>
						<div class="form-control">
							<label class="form-label">Password</label>
							<input type="password" class="form-input">
						</div>			
					</form>
				</div>
				<div class="card soft">
					<h3>Payment</h3>
					<form>
					     <div class="form-control">
						    <label class="form-label">Card Number</label>
						    <input type="text" class="form-input">
					    </div>

					    <div class="form-control">
						    <label class="form-label">Card Holder</label>
						    <input type="text" class="form-input">
					    </div>   
					</form>

					<div class="form-control display-flex flex-align-center">
					    	<div class="flex-none">
						    	<label class="form-label">Expiration Date</label>
						    </div>
						    <div class="flex-stretch">
						    	<input type="date" placeholder="mm/dd/yyyy" class="form-input">
							</div>

							<div class="flex-none">
						    	<label class="form-label">CVV2</label>
						    </div>
						    <div class="flex-stretch">
						    	<input type="password" placeholder="Security Code" class="form-input">
							</div>
					    </div>
				</div>				
			</div>
			<div class="col-xs-12 col-md-4">
				<div class="card soft">
					<h4><b>Order Summary</b></h4>
					<p>Subtotal</p>
					<p><b>Order Total</b></p>
		            <div class="form-control">
						<a href="#" class="form-button">PLACE ORDER</a>
					</div>
				</div>
			</div>
		</div>
			
	</div>


	<?php include "parts/footer.php"; ?> 
</body>
</html>