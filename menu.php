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
	<div class="banner-menu jumbotron">
		<h1>Menu</h1>
	</div>
</header>

<main class="menu">
	<!-- Main Content -->
	<div class="container">
		<div class="row">
			<figure class="col-sm-6 col-md-4">
				<img class="img-responsive" src="images/menu/small/Hibiscus.jpg" alt="Hibiscus" onclick="openModal(); currentSlide(1)">
				<figcaption>
					<h3>Hibiscus</h3>
					<p>
						Sweet and tangy glaze made with dried Mexican hibiscus, topped with candied hibiscus flower
					</p>
					<p>&#8369; 155.00</p>
				</figcaption>
			</figure>
			<figure class="col-sm-6 col-md-4">
				<img class="img-responsive" src="images/menu/small/Toasted Coconut.jpg" alt="Toasted Coconut" onclick="openModal(); currentSlide(2)">
				<figcaption>
					<h3>Toasted Coconut</h3>
					<p>
						Coconut glaze topped with toasted coconut flakes
					</p>
					<p>&#8369; 161.00</p>
				</figcaption>
			</figure>
			<figure class="col-sm-6 col-md-4">
				<img class="img-responsive" src="images/menu/small/Dulce de Leche - Almonds.jpg" alt="Dulce de Leche - Almonds" onclick="openModal(); currentSlide(3)">
				<figcaption>
					<h3>Dulce de Leche - Almonds</h3>
					<p>
						Sweet house made dulce the leche glace with crunchy sliced almonds
					</p>
					<p>&#8369; 163.00</p>
				</figcaption>
			</figure>
			<figure class="col-sm-6 col-md-4">
				<img class="img-responsive" src="images/menu/small/Cheesecake.jpg" alt="Cheesecake" onclick="openModal(); currentSlide(4)">
				<figcaption>
					<h3>Cheesecake</h3>
					<p>
						Cream cheese frosting flavored with a hint of orange zest and pure vanilla extract, dusted with a graham cracker topping
					</p>
					<p>&#8369; 177.00</p>
				</figcaption>
			</figure>
			<figure class="col-sm-6 col-md-4">
				<img class="img-responsive" src="images/menu/small/Matcha - Sugar.jpg" alt="Matcha - Sugar" onclick="openModal(); currentSlide(5)">
				<figcaption>
					<h3>Matcha - Sugar</h3>
					<p>
						Yeast doughnut rolled in pure matcha blended with cane sugar and a pinch of salt
					</p>
					<p>&#8369; 199.00</p>
				</figcaption>
			</figure>
			<figure class="col-sm-6 col-md-4">
				<img class="img-responsive" src="images/menu/small/Double Chocolate Brownie.jpg" alt="Double Chocolate Brownie" onclick="openModal(); currentSlide(6)">
				<figcaption>
					<h3>Double Chocolate Brownie</h3>
					<p>
						Rich chocolate caramel glaze made with Belgian chocolate, topped with house made fudge brownies and toasted walnuts
					</p>
					<p>&#8369; 161.00</p>
				</figcaption>
			</figure>
			<figure class="col-sm-6 col-md-4">
				<img class="img-responsive" src="images/menu/small/Chocolate-Earl Grey.jpg" alt="Chocolate-Earl Grey" onclick="openModal(); currentSlide(7)">
				<figcaption>
					<h3>Chocolate-Earl Grey</h3>
					<p>
						Glaze made with 64 % chocolate steeped with earl grey tea
					</p>
					<p>&#8369; 189.00</p>
				</figcaption>
			</figure>
			<figure class="col-sm-6 col-md-4">
				<img class="img-responsive" src="images/menu/small/Black and White.jpg" alt="Black and White" onclick="openModal(); currentSlide(8)">
				<figcaption>
					<h3>Black and White</h3>
					<p>
						Just like the classic cookie, half dark chocolate and half vanilla glaze
					</p>
					<p>&#8369; 176.00</p>
				</figcaption>
			</figure>
			<figure class="col-sm-6 col-md-4">
				<img class="img-responsive" src="images/menu/small/Lemon-Ginger.jpg" alt="Lemon-Ginger" onclick="openModal(); currentSlide(9)">
				<figcaption>
					<h3>Lemon-Ginger</h3>
					<p>
						Zesty glaze made with freshly juiced ginger and lemons, topped with candied ginger
					</p>
					<p>&#8369; 160.00</p>
				</figcaption>
			</figure>
			<figure class="col-sm-6 col-md-4">
				<img class="img-responsive" src="images/menu/small/Mixed Berry.jpg" alt="Mixed Berry" onclick="openModal(); currentSlide(10)">
				<figcaption>
					<h3>Mixed Berry</h3>
					<p>
						Sweet and slightly tart glaze made from a blend of different berries
					</p>
					<p>&#8369; 187.00</p>
				</figcaption>
			</figure>
			<figure class="col-sm-6 col-md-4">
				<img class="img-responsive" src="images/menu/small/Pumpkin.jpg" alt="Pumpkin" onclick="openModal(); currentSlide(11)">
				<figcaption>
					<h3>Pumpkin</h3>
					<p>
						This topping reminds you of pumpkin pie and it's topped with candied pumpkin seeds
					</p>
					<p>&#8369; 184.00</p>
				</figcaption>
			</figure>
			<figure class="col-sm-6 col-md-4">
				<img class="img-responsive" src="images/menu/small/Chocolate-Cocoa Nib.jpg" alt="Chocolate-Cocoa Nib" onclick="openModal(); currentSlide(12)">
				<figcaption>
					<h3>Chocolate-Cocoa Nib</h3>
					<p>
						Bittersweet Vintage Plantation chocolate glaze topped with crunchy cocoa nibs
					</p>
					<p>&#8369; 181.00</p>
				</figcaption>
			</figure>
			<figure class="col-sm-6 col-md-4">
				<img class="img-responsive" src="images/menu/small/Mojito.jpg" alt="Mojito" onclick="openModal(); currentSlide(13)">
				<figcaption>
					<h3>Mojito</h3>
					<p>
						Lime - rum glaze made with fresh limes and mint
					</p>
					<p>&#8369; 158.00</p>
				</figcaption>
			</figure>
			<figure class="col-sm-6 col-md-4">
				<img class="img-responsive" src="images/menu/small/Gin & Tonic.jpg" alt="Gin & Tonic" onclick="openModal(); currentSlide(14)">
				<figcaption>
					<h3>Gin &amp; Tonic</h3>
					<p>
						Glaze made with junipper berries, gin, tonnic and fresh lemons, topped with candied lemon slice
					</p>
					<p>&#8369; 182.00</p>
				</figcaption>
			</figure>
			<figure class="col-sm-6 col-md-4">
				<img class="img-responsive" src="images/menu/small/Chocolate Chipotle.jpg" alt="Chocolate Chipotle" onclick="openModal(); currentSlide(15)">
				<figcaption>
					<h3>Chocolate Chipotle</h3>
					<p>
						Sweet and smoky glaze made with merit chipotle chiles and bittersweet chocolate
					</p>
					<p>&#8369; 159.00</p>
				</figcaption>
			</figure>
			<figure class="col-sm-6 col-md-4">
				<img class="img-responsive" src="images/menu/small/Chocolate Stout.jpg" alt="Chocolate Stout" onclick="openModal(); currentSlide(16)">
				<figcaption>
					<h3>Chocolate Stout</h3>
					<p>
						Rich dark chocolate frosting made with guiness beer , rolled in housemade dark chocolate cake crumbs
					</p>
					<p>&#8369; 158.00</p>
				</figcaption>
			</figure>
			<figure class="col-sm-6 col-md-4">
				<img class="img-responsive" src="images/menu/small/Passion Fruit.jpg" alt="Passion Fruit" onclick="openModal(); currentSlide(17)">
				<figcaption>
					<h3>Passion Fruit</h3>
					<p>
						Sweet and tart glaze made from high quality passion fruit puree, topped with cocoa nibs
					</p>
					<p>&#8369; 164.00</p>
				</figcaption>
			</figure>
			<figure class="col-sm-6 col-md-4">
				<img class="img-responsive" src="images/menu/small/Mocha-Almond Crunch.jpg" alt="Mocha-Almond Crunch" onclick="openModal(); currentSlide(18)">
				<figcaption>
					<h3>Mocha-Almond Crunch</h3>
					<p>
						Rich glaze made with bittersweet Vintage Plantation chocolate and roasted coffee, topped with a crunchy almond streusel
					</p>
					<p>&#8369; 151.00</p>
				</figcaption>
			</figure>
		</div>

		<!-- Lightbox -->
		<div id="myModal" class="modal">
			<span class="close cursor" onclick="closeModal()">&times;</span>
			<div class="modal-content">

				<div class="mySlides">
					<p class="numbertext">1 / 18</p>
					<img src="images/menu/large/Hibiscus.jpg" alt="Hibiscus">
				</div>
				<div class="mySlides">
					<p class="numbertext">2 / 18</p>
					<img src="images/menu/large/Toasted Coconut.jpg" alt="Toasted Coconut">
				</div>
				<div class="mySlides">
					<p class="numbertext">3 / 18</p>
					<img src="images/menu/large/Dulce de Leche - Almonds.jpg" alt="Dulce de Leche - Almonds">
				</div>
				<div class="mySlides">
					<p class="numbertext">4 / 18</p>
					<img src="images/menu/large/Cheesecake.jpg" alt="Cheesecake">
				</div>
				<div class="mySlides">
					<p class="numbertext">5 / 18</p>
					<img src="images/menu/large/Matcha - Sugar.jpg" alt="Matcha - Sugar">
				</div>
				<div class="mySlides">
					<p class="numbertext">6 / 18</p>
					<img src="images/menu/large/Double Chocolate Brownie.jpg" alt="Double Chocolate Brownie">
				</div>
				<div class="mySlides">
					<p class="numbertext">7 / 18</p>
					<img src="images/menu/large/Chocolate-Earl Grey.jpg" alt="Chocolate-Earl Grey">
				</div>
				<div class="mySlides">
					<p class="numbertext">8 / 18</p>
					<img src="images/menu/large/Black and White.jpg" alt="Black and White">
				</div>
				<div class="mySlides">
					<p class="numbertext">9 / 18</p>
					<img src="images/menu/large/Lemon-Ginger.jpg" alt="Lemon-Ginger">
				</div>
				<div class="mySlides">
					<p class="numbertext">10 / 18</p>
					<img src="images/menu/large/Mixed Berry.jpg" alt="Mixed Berry">
				</div>
				<div class="mySlides">
					<p class="numbertext">11 / 18</p>
					<img src="images/menu/large/Pumpkin.jpg" alt="Pumpkin">
				</div>
				<div class="mySlides">
					<p class="numbertext">12 / 18</p>
					<img src="images/menu/large/Chocolate-Cocoa Nib.jpg" alt="Chocolate-Cocoa Nib">
				</div>
				<div class="mySlides">
					<p class="numbertext">13 / 18</p>
					<img src="images/menu/large/Mojito.jpg" alt="Mojito">
				</div>
				<div class="mySlides">
					<p class="numbertext">14 / 18</p>
					<img src="images/menu/large/Gin & Tonic.jpg" alt="Gin & Tonic">
				</div>
				<div class="mySlides">
					<p class="numbertext">15 / 18</p>
					<img src="images/menu/large/Chocolate Chipotle.jpg" alt="Chocolate Chipotle">
				</div>
				<div class="mySlides">
					<p class="numbertext">16 / 18</p>
					<img src="images/menu/large/Chocolate Stout.jpg" alt="Chocolate Stout">
				</div>
				<div class="mySlides">
					<p class="numbertext">17 / 18</p>
					<img src="images/menu/large/Passion Fruit.jpg" alt="Passion Fruit">
				</div>
				<div class="mySlides">
					<p class="numbertext">18 / 18</p>
					<img src="images/menu/large/Mocha-Almond Crunch.jpg" alt="Mocha-Almond Crunch">
				</div>

				<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				<a class="next" onclick="plusSlides(1)">&#10095;</a>

				<div id="caption-container">
					<h1></h1>
					<p></p>
					<p></p>
				</div>
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

<!-- Lightbox -->
<script type="text/javascript">
	var slideIndex;

	function openModal() {
		document.getElementById('myModal').style.display = "block";
	}

	function closeModal() {
		document.getElementById('myModal').style.display = "none";
	}

	function currentSlide(n) {
		showSlides(slideIndex = n);
	}

	function plusSlides(n) {
		showSlides(slideIndex += n);
	}

	function showSlides(n) {
		var slides = document.getElementsByClassName("mySlides");

		if (n < 1) {
			slideIndex = slides.length;
		}

		if (n > slides.length) {
			slideIndex = 1;
		}

		for (var i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";
		}

		slides[slideIndex - 1].style.display = "block";

		document.getElementById("caption-container").children[0].innerHTML = document.getElementsByTagName("figcaption")[slideIndex - 1].children[0].innerHTML;
		document.getElementById("caption-container").children[1].innerHTML = document.getElementsByTagName("figcaption")[slideIndex - 1].children[1].innerHTML;
		document.getElementById("caption-container").children[2].innerHTML = document.getElementsByTagName("figcaption")[slideIndex - 1].children[2].innerHTML;
	}
</script>

</body>
</html>
