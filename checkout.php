<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="lib/css/styleguide4.css">
	<link rel="stylesheet" type="text/css" href="/lib/css/gridsystem.css">
	<link rel="stylesheet" type="text/css" href="css/storetheme.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

	<script type="http://code.jquery.com/jquery-3.2.1.min.js"></script>

</head>
<body>
	
	<?php include "parts/nav_bar.php"; ?>
		
			
<div class="container" id="forms">
		<h2>Check Out</h2>

		<div class="card soft">
			<h3>Billing Address</h3>
			<form>
				Full Name  <input type="text" placeholder="John M. Doe"><br>
				Email <input type="number" placeholder="Johndoe@gmail.com"><br>
				Address <input type="password" placeholder="123 street"><br>
				City <input type="url" placeholder="New York"><br>
				State <input type="email" placeholder="California"><br>
				Zip <input type="number" placeholder="21093"><br>
				
			</form>

			

			<div class="icon-container">
              <i class="fa fa-cc-visa" style="font-size:36px;color:navy"></i>
              <i class="fa fa-cc-amex"  style="font-size:36px;color:blue"></i>
              <i class="fa fa-cc-mastercard"  style="font-size:36px;color:red"></i>
              <i class="fa fa-cc-discover"  style="font-size:36px;color:orange"></i>
              <i class="fa fa-paypal" style="font-size:36px;color:blue"></i>
            </div>

            <h3>Payment</h3>
			<form>
				<div class="form-control">
					<label class="form-label">Name on Card</label>
					<input type="text" placeholder="Name" class="form-input">
				</div>
				<div class="form-control">
					<label class="form-label">Credit card number</label>
					<input type="number" placeholder="Number" class="form-input">
				</div>
				<div class="form-control">
					<label class="form-label">Exp Date</label>
					<input type="date" placeholder="Number" class="form-input">
				</div>
				<div class="form-control">
					<label class="form-label">CVV</label>
					<input type="number" placeholder="Number" class="form-input">
					</div>

				<div class="form-control">
				<button type="button" class="form-button">Complete Order</button>
			</div>

				</div>
			</form>
		</div>



     
    </div>
  </div>
</div>
	




</body>
</html>