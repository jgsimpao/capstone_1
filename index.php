<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include("include/head.html") ?>
	</head>
	<body>
		<header>
			<!-- Navigation -->
			<?php include("include/navigation.html") ?>

			<!-- Carousel -->
			<div class="carousel-wrapper">
				<div class="jumbotron">
					<h1>Joel's Donuts</h1>
					<h2>Home of the World's Best Donuts</h2>
				</div>
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item slide-1 active"></div>
						<div class="item slide-2"></div>
						<div class="item slide-3"></div>
					</div>

					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div> <!-- /Carousel -->
		</header>

		<main class="home">
			<!-- Main Content -->
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-6 col-lg-6">
						<h1>Why Our Donuts are the Best!</h1>
						<div class="panel panel-primary">
							<div class="panel-body">
								<h4>
									<span class="brand-name">Joel's Donuts</span> donuts are of the highest quality you will ever find on the face of the Earth. Since our establishment in 2017, we have kept a legacy of serving donuts, unmatched in both taste and beauty, that are continuously winning donut lovers the world over!
								</h4>
								<button class="btn btn-info" onclick="window.location='about.php';">Learn More</button>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-6">
						<img class="img-responsive" src="images/pics/home-1.jpg" alt="Best Donuts">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-6 col-lg-6">
						<img class="img-responsive" src="images/pics/home-2.jpg" alt="Sweetest and Prettiest Donuts">
					</div>
					<div class="col-sm-12 col-md-6 col-lg-6">
						<h1>Sweetest and Prettiest Donuts!</h1>
						<div class="panel panel-primary">
							<div class="panel-body">
								<h4>
									<span class="brand-name">Joel's Donuts</span> has all kinds of donuts to satisy your donut cravings. Whether you are hankering to satisy your sweet tooth or yearning to munch on donuts that are nothing short of beautiful works-of-art, we definitely have the donuts that are right for you!
								</h4>
								<button class="btn btn-info" onclick="window.location='menu.php';">Learn More</button>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-6 col-lg-6">
						<h1>Order Our Donuts Online!</h1>
						<div class="panel panel-primary">
							<div class="panel-body">
								<h4>
									<span class="brand-name">Joel's Donuts</span> also offers delivery and catering services to brighten up all your special occasions. By filling out our state-of-the-art online order form, ordering our donuts has never been easier!
								</h4>
								<button class="btn btn-info" onclick="window.location='order.php';">Learn More</button>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-6">
						<img class="img-responsive" src="images/pics/home-3.jpeg" alt="Order Donuts">
					</div>
				</div>
			</div> <!-- /Main Content -->
		</main>

		<!-- Footer -->
		<?php include("include/footer.html") ?>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
