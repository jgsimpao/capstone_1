<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("include/head.html"); ?>
</head>
<body>

<header>
	<div class="container-fluid">
		<!-- Navigation Bar -->
		<?php include("include/navigation.html"); ?>
	</div>
	<!-- Banner -->
	<div class="banner-order jumbotron">
		<h1>Order</h1>
	</div>
</header>

<main class="order">
	<!-- Main Content -->
	<div class="container">
		<h1>Order Form</h1>
		<p>
			Fill out the form below to make your online order. Please be reminded that only orders made at least 24 hours before your expected date of delivery will be accepted by the system. Thank you for shopping with <span class="brand-name">Joel's Donuts</span>!
		</p>
		<p>Note: Items marked with an asterisk (*) are required.</p>
		<div class="panel panel-primary">
			<div class="panel-body">
				<form>
					<div class="row">
						<div class="form-group col-sm-6">
							<label>First Name *</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group col-sm-6">
							<label>Last Name *</label>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-sm-6">
							<label>Phone *</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group col-sm-6">
							<label>Email *</label>
							<input type="email" class="form-control">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-sm-6">
							<label>Date of Delivery *</label>
							<input type="date" class="form-control">
						</div>
						<div class="form-group col-sm-6">
							<label>Time of Delivery *</label>
							<input type="time" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label>Address *</label>
						<input type="text" class="form-control">
					</div>
					<hr>
					<div class="row">
						<div class="form-group col-sm-2">
							<label>Qty. *</label>
							<input type="number" class="form-control" min="1" max="100" value="1">
						</div>
						<div class="form-group col-sm-5">
							<label>Donut Flavor *</label>
							<select class="form-control">
								<option>Hibiscus (&#8369; 155.00)</option>
								<option>Toasted Coconut (&#8369; 161.00)</option>
								<option>Dulce de Leche - Almonds (&#8369; 163.00)</option>
								<option>Cheesecake (&#8369; 177.00)</option>
								<option>Matcha - Sugar (&#8369; 199.00)</option>
								<option>Double Chocolate Brownie (&#8369; 161.00)</option>
								<option>Chocolate-Earl Grey (&#8369; 189.00)</option>
								<option>Black and White (&#8369; 176.00)</option>
								<option>Lemon-Ginger (&#8369; 160.00)</option>
								<option>Mixed Berry (&#8369; 187.00)</option>
								<option>Pumpkin (&#8369; 184.00)</option>
								<option>Chocolate-Cocoa Nib (&#8369; 181.00)</option>
								<option>Mojito (&#8369; 158.00)</option>
								<option>Gin &amp; Tonic (&#8369; 182.00)</option>
								<option>Chocolate Chipotle (&#8369; 159.00)</option>
								<option>Chocolate Stout (&#8369; 158.00)</option>
								<option>Passion Fruit (&#8369; 164.00)</option>
								<option>Mocha-Almond Crunch (&#8369; 151.00)</option>
							</select>
						</div>
						<div class="form-group col-sm-5">
							<label>Price</label>
							<input type="text" class="form-control" readonly>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-7"></div>
						<div class="form-group col-sm-5">
							<button class="btn btn-default">
								<i class="fa fa-plus" aria-hidden="true"></i>
								&nbsp;Add Item
							</button>
							<button class="btn btn-default" disabled>
								<i class="fa fa-undo" aria-hidden="true"></i>
								&nbsp;Undo Add
							</button>
							<button class="btn btn-default">
								<i class="fa fa-times" aria-hidden="true"></i>
								&nbsp;Reset All
							</button>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-7"></div>
						<div class="form-group col-sm-5">
							<label>Total Price</label>
							<input type="text" class="form-control" readonly>
						</div>
					</div>
					<hr>
					<div class="form-group">
						<label>Message</label>
						<textarea class="form-control" rows="5"></textarea>
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-info" value="Submit Order">
					</div>
				</form>
			</div>
		</div>
	</div> <!-- /Main Content -->
</main>

<footer>
	<!-- Footer -->
	<?php include("include/footer.html"); ?>
	<div class="footer-lower container-fluid">
		<p>&copy; 2017 Joel's Donuts. All Rights Reserved.</p>
	</div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

</body>
</html>
