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
		<div class="banner-contact jumbotron">
			<h1>Contact Us</h1>
		</div>
	</div>
</header>

<main class="contact">
	<!-- Main Content -->	      
	<div class="container">
		<div class="row">
			<div class="location col-sm-6 col-md-6 col-lg-6">
				<div class="row">
					<h1>Store Location</h1>
					<div class="panel panel-primary">
						<div class="panel-body">
							<h4>
								1F Caswynn Building<br>
								134 Timog Ave., Quezon City<br>
								Phone: (02) 366-1342<br>
								Email: info@joelsdonuts.com
							</h4>
						</div>
					</div>
				</div>
				<div class="row">
					<h1>Open Hours</h1>
					<div class="panel panel-primary">
						<div class="panel-body">
							<h4>
								Weekdays: 6:00 AM to 8:00 PM<br>
								Weekends: 8:00 AM to 10:00 PM
							</h4>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-6">
				<img class="img-responsive" src="images/pics/caswynn-bldg.jpg" alt="Caswynn Building">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 col-md-6 col-lg-6">
				<div id="map"></div>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-6">
				<h1>Send Us a Message</h1>
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
								<div class="form-group col-sm-12 col-md-12 col-lg-12">
									<label>Message *</label>
									<textarea class="form-control" rows="5"></textarea>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-sm-12 col-md-12 col-lg-12">
									<input type="submit" class="btn btn-info" value="Send Message">
								</div>
							</div>
						</form>
					</div>
				</div>
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

<!-- Google Map -->
<script type="text/javascript">
	function myMap() {
		var myLatlng = new google.maps.LatLng(14.632764, 121.043774);
		var mapCanvas = document.getElementById("map");
		var mapOptions = {
			center: myLatlng,
			zoom: 14
		};

		var map = new google.maps.Map(mapCanvas, mapOptions);
		var marker = new google.maps.Marker({
			position: myLatlng,
			title:"Hello World!"
		});

		// To add the marker to the map, call setMap();
		marker.setMap(map);
	}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key= AIzaSyAX37qHYHLHW8Itm9S4K_llKzPiPR9SOPY&callback=myMap"></script>

</body>
</html>
