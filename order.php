<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("include/head.html") ?>
</head>
<body>

<header>
	<div class="container-fluid">
		<!-- Navigation Bar -->
		<?php include("include/navigation.html") ?>

		<!-- Banner -->
		<div class="banner-order jumbotron">
			<h1>Order</h1>
		</div>
	</div>
</header>

<main class="order">
	<!-- Main Content -->	      
	<div class="container">
		<h2>
			Fill out the form below to make your online order. Please be reminded that only orders made at least 24 hours before your expected date of delivery will be accepted by the system. Thank you for shopping with <span class="brand-name">Joel's Donuts</span>!
		</h2>
		<h4>Note: Items marked with an asterisk (*) are required.</h4>
		<div class="panel panel-primary">
			<div class="panel-body">
				<form>
					<div class="row">
						<div class="form-group col-sm-6 col-md-6 col-lg-6">
							<label>First Name *</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group col-sm-6 col-md-6 col-lg-6">
							<label>Last Name *</label>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-sm-6 col-md-6 col-lg-6">
							<label>Phone *</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group col-sm-6 col-md-6 col-lg-6">
							<label>Email *</label>
							<input type="email" class="form-control">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-sm-6 col-md-6 col-lg-6">
							<label>Date of Delivery *</label>
							<input type="date" class="form-control">
						</div>
						<div class="form-group col-sm-6 col-md-6 col-lg-6">
							<label>Time of Delivery *</label>
							<input type="time" class="form-control">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-sm-12 col-md-12 col-lg-12">
							<label>Address *</label>
							<input type="text" class="form-control">
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="form-group col-sm-2 col-md-2 col-lg-2">
							<label>Qty. *</label>
							<input type="number" class="form-control" min="1" max="100" value="1">
						</div>
						<div class="form-group col-sm-5 col-md-5 col-lg-5">
							<label>Donut Flavor *</label>
							<select class="form-control">
								<option>Hibiscus</option>
								<option>Toasted Coconut</option>
								<option>Dulce de Leche - Almonds</option>
								<option>Cheesecake</option>
								<option>Matcha - Sugar</option>
								<option>Double Chocolate Brownie</option>
								<option>Chocolate-Earl Grey</option>
								<option>Black and White</option>
								<option>Lemon-Ginger</option>
								<option>Mixed Berry</option>
								<option>Pumpkin</option>
								<option>Chocolate-Cocoa Nib</option>
								<option>Mojito</option>
								<option>Gin &amp; Tonic</option>
								<option>Chocolate Chipotle</option>
								<option>Chocolate Stout</option>
								<option>Passion Fruit</option>
								<option>Mocha-Almond Crunch</option>
							</select>
						</div>
						<div class="form-group col-sm-5 col-md-5 col-lg-5">
							<label>Price</label>
							<input type="text" class="form-control" readonly>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-7 col-md-7 col-lg-7"></div>
						<div class="form-group col-sm-5 col-md-5 col-lg-5">
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
						<div class="col-sm-7 col-md-7 col-lg-7"></div>
						<div class="form-group col-sm-5 col-md-5 col-lg-5">
							<label>Total Price</label>
							<input type="text" class="form-control" readonly>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="form-group col-sm-12 col-md-12 col-lg-12">
							<label>Message</label>
							<textarea class="form-control" rows="5"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-sm-12 col-md-12 col-lg-12">
							<input type="submit" class="btn btn-info" value="Submit Order">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div> <!-- /Main Content -->
</main>

<footer>
	<!-- Footer -->
	<?php include("include/footer.html") ?>
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
