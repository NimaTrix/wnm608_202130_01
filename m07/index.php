<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Audiophile store</title>
	<? include "parts/meta.php" ?>
</head>

<body>
	<? include "parts/navbar.php" ?>

	<div class="view-window hero" style ="background-image: url(img/m1.jpg)">
		<h1>Audiophile</h1>
	</div>

	<div class="container pad">
		<div class="card card-soft card-light card-flat">
			<div class="grid">
				<div class="col-xs-12 col-md-6 center-child">
					<div style="max-width: 75%;">
						<h2>The Audio store</h2>
						<p>Looking for some Headphones?<br><span>Discover how much better your music can sound when you have the right gear for the job. </span><span><br><br><br>This is the place for music lovers, musicians, sound engineers, and more.</span></p>
					</div>
				</div>
				<div class="col-xs-12 col-md-6">
					<img src="img/m2.jpg" alt="Headphones" class="image-cover"> <!--image source -->
				</div>
			</div>
		</div>

		<hr class="spacer large">

		<div class="container pad" id="categories">
			<h2>Categories</h2>
			<div class="grid gap xs-small md-large">
				<div class="col-xs-6 col-md-3">
					<figure>
						<div class="image-circle">
							<img src="img/p1.jpg" alt="open">
						</div>
						<figcaption>Open</figcaption>
					</figure>
				</div>
				<div class="col-xs-6 col-md-3">
					<figure>
						<div class="image-circle">
						<img src="img/p2.jpg" alt="closed"></div>
						<figcaption>Closed</figcaption>
					</figure>
				</div>
				<div class="col-xs-6 col-md-3">
					<figure>
						<div class="image-circle">
						<img src="img/p3.jpg" alt="wireless"></div>
						<figcaption>Wireless</figcaption>
					</figure>
				</div>
				<div class="col-xs-6 col-md-3">
					<figure>
						<div class="image-circle">
							<img src="img/p4.jpg" alt="mods"></div>
						<figcaption>Mods</figcaption>
					</figure>
				</div>
			</div>
		</div>
		<hr class="spacer large">


</body>
</html>