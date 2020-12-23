<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Checkout</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>
	<?php ini_set("display_errors","On"); ?>



	<?php include "parts/navbar.php"; ?>


	<div class="container">
		<div class="card soft">
			<h2>Order Summary</h2>

			<div>Product</div>
			<div>Quantity:1</div>
			<div>Total:$3.99</div>

		</div>
	</div>

	<div class="container" id="forms">

		<div class="card soft">

			<h2>Checkout Info</h2>
			<form>
				<div class="form-control display-flex flex-align-center">
					<div class="flex-none">
						<label class="form-label">First Name</label>
					</div>
					<div class="flex-stretch">
						<input type="text" placeholder="Cara"
						 class="form-input"></div>
					<div class="flex-none">
						<label class="form-label">Last Name</label>
					</div>
					<div class="flex-stretch">
						<input type="text" placeholder="Sun"
						 class="form-input">
					</div>
				</div>

				<div class="form-control">
					<label class="form-label">Email</label>
					<input type="email" placeholder="carasun@email.com" class="form-input">
				</div>
				<div class="form-control">
					<label class="form-label">Address</label>
					<input type="text" placeholder="Street Address" class="form-input">
				</div>


				<div class="form-control display-flex flex-align-center">
					<div class="flex-none">
						<label class="form-label">City</label>
					</div>
					<div class="flex-stretch">
						<input type="text" placeholder="New York"
						 class="form-input"></div>
					<div class="flex-none">
						<label class="form-label">State</label>
					</div>
					<div class="flex-stretch">
						<input type="text" placeholder="NY"
						 class="form-input">
					</div>
					<div class="flex-none">
						<label class="form-label">Zip Code</label>
					</div>
					<div class="flex-stretch">
						<input type="number" placeholder="00000"
						 class="form-input">
					</div>
				</div>


				<div class="form-control">
					<label class="form-label">Phone Number</label>
					<input type="number" placeholder="(xxx)xxx-xxxx" class="form-input">
				</div>
				<div class="form-control">
					<label class="form-label">Credit Card Number</label>
					<input type="number" placeholder=" " class="form-input">
				</div>

				<div class="form-control display-flex flex-align-center">
					<div class="flex-none">
						<label class="form-label">Expiration Date</label>
					</div>
					<div class="flex-stretch">
						<input type="date" placeholder=" "
						 class="form-input">
					</div>
					<div class="flex-none">
						<label class="form-label">CVV</label>
					</div>
					<div class="flex-stretch">
						<input type="number" placeholder=" "
						 class="form-input">
					</div>
				</div>
				
			</form>

			<div class="form-control">
				<a href="#" class="form-button">Submit</a></div>
			</div>

		</div>

	
<?php include "parts/footer.php"; ?>
	
</body>
</html>