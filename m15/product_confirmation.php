<?
session_start();
session_destroy();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Audiophile: Order confirmed</title>
	<?include "parts/meta.php" ?>
</head>
<body>
	
	<?include "parts/navbar.php" ?>
	<div class="container pad push-down">
		<div class="card card-soft card-light">
			<h2>Your order has been placed</h2>
			<div class="product-image"><img src="img/m3.jpg" alt=""></div>
			<h3>Thank you</h3>
			<p>Your order will ship in 7-12 business days. Thank you so much for your patience with your purchase of an Audiophile device. It’s not usual for us to have products on backorder like this, but it does happen, and I want to thank you for understanding. We hope to have your new book in your hands in the next 5 days!</p><p>Until then, shoot us an email at <b>orders@audiophile.com</b> to ler us know if you have any questions, or if there’s anything else we can do for you.</p>

		</div>
	</div>

      	<div class="container pad">
			<div class="card card-soft card-light card-flat">
				<div class="grid gap">
						<div class="col-sm-12 col-md-4">
							<div class= "card">
							<img src=img/icons/rocket.png alt="Get the latest dropps" class="icon"> <!--Flat Icons-->
							<div>
								<h3>Stellar quality</h3>
								<p>With our product standards set to the moon, you can expect the best and beyond for every purchase</p>
								<p>Free returns within 60 days of your purchase with valid receipt.</p>
							</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-4">
							<div class= "card">
							<img src=img/icons/directions.png alt="Find the right product" class="icon"> <!--Flat Icons-->
							<div>
								<h3>Unlimited options</h3>
								<p>There are so many distinct styles or types of headphones to suit your needs</p>
								<p>Buy your first pair and get 30% off your second purchase.</p>
							</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-4">
							<div class= "card">
							<img src=img/icons/money.png alt="save more" class="icon"> <!--Flat Icons-->
							<div>
								<h3>Best prices</h3>
								<p>With industry leading partnerships and unique bulk drops get the best rates.</p>
								<p>We offer pricematching services within 30 days of order confirmation.</p>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br>
	<nav class="nav-crumbs" style="margin:1em 0">
         <ul>
            <li><a href="product_list.php">Back to product list</a></li>
         </ul>
	</nav>
</body>
</html>