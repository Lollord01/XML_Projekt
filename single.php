<?php

$pod = json_decode(file_get_contents('podatci.json'), true);
$gear = $pod['1'];
$lotro = $pod['2'];
$far = $pod['3'];
$bat = $pod['4'];
$mgs = $pod['5'];
$gshi = $pod['6'];
$ds = $pod['7'];
$eu = $pod['8'];
$wh = $pod['9'];
$edf = $pod['10'];
$ciu = $pod['11'];
?>

<!DOCTYPE html>
<html lang="hr">

<?php foreach ($gear as $g) { ?><?php } ?>
<?php foreach ($lotro as $l) { ?><?php } ?>
<?php foreach ($far as $f) { ?><?php } ?>
<?php foreach ($bat as $b) { ?><?php } ?>
<?php foreach ($mgs as $m) { ?><?php } ?>
<?php foreach ($gshi as $gs) { ?><?php } ?>
<?php foreach ($ds as $d) { ?><?php } ?>
<?php foreach ($eu as $e) { ?><?php } ?>
<?php foreach ($wh as $w) { ?><?php } ?>
<?php foreach ($edf as $ed) { ?><?php } ?>
<?php foreach ($ciu as $c) { ?><?php } ?>

<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

	<title>Planet Igara</title>

	<!-- Loading third party fonts -->
	<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="fonts/lineo-icon/style.css" rel="stylesheet" type="text/css">

	<!-- Loading main css file -->
	<link rel="stylesheet" href="style.css">


</head>


<body>

	<div id="site-content">
		<div class="site-header">
			<div class="container">
				<a href="index-logged.php" id="branding">
					<img src="images/logo1.png" alt="" class="logo">
					<div class="logo-text">
						<h1 class="site-title">Planet Igara</h1>
						<small class="site-description">Uistinu Igre</small>
					</div>
				</a> <!-- #branding -->

				<div class="right-section pull-right">
					<a href="cart.php" class="cart"><i class="icon-cart"></i>3 artikala u košarici</a>
					<a href="#">Moj Račun</a>
					<a href="index.php">Odjava <small>(Ivan Horvat)</small></a>
				</div> <!-- .right-section -->

				<div class="main-navigation" style="background-color: #4f4d4d">
					<button style="background-color: #4f4d4d" class="toggle-menu"><i class="fa fa-bars"></i></button>
					<ul class="menu" style="background-color: #4f4d4d">
						<li class="menu-item home current-menu-item"><a href="index.php"><i class="icon-home"></i></a>
						</li>
						<li class="menu-item"><a href="products.php">Accessories</a></li>
						<li class="menu-item"><a href="products.php">Promotions</a></li>
						<li class="menu-item"><a href="products.php">PC</a></li>
						<li class="menu-item"><a href="products.php">Playstation</a></li>
						<li class="menu-item"><a href="products.php">Xbox</a></li>
						<li class="menu-item"><a href="products.php">Wii</a></li>
					</ul> <!-- .menu -->
					<div class="search-form">
						<label><img src="images/icon-search.png"></label>
						<input style="background-color: #1a1a1a; color: #ffffff;" type="text" placeholder="Search...">
					</div> <!-- .search-form -->

					<div class="mobile-navigation"></div> <!-- .mobile-navigation -->
				</div> <!-- .main-navigation -->

				<div class="breadcrumbs">
					<div class="container">
						<a href="index.php">Home</a>
						<a href="products.php">Akcija</a>
						<span>Wh40k: Mechanicus</span>
					</div>
				</div>
			</div> <!-- .container -->
		</div> <!-- .site-header -->

		<main class="main-content">
			<div class="container">
				<div class="page">

					<div class="entry-content">
						<div class="row">
							<div class="col-sm-6 col-md-4">
								<div class="product-images">
									<figure class="">
										<a href="images/Warhammer%2040,000%20Mechanicus%20Teaser%20Trailer.mp4"><a
												href="images/Warhammer%2040,000%20Mechanicus%20Teaser%20Trailer.mp4"><video
													style="width: -moz-available;" controls autoplay muted loop>
													<source
														src="images/Warhammer%2040,000%20Mechanicus%20Teaser%20Trailer.mp4"
														type="video/mp4">
													Your browser does not support HTML video.
												</video></a></a>
									</figure>
									<div class="thumbnails">
										<a href="images/wh40kmechanicus1.jpg"><img src="images/wh40kmechanicus1.jpg"
												alt=""></a>
										<a href="images/wh40kmechanicus2.jpg"><img src="images/wh40kmechanicus2.jpg"
												alt=""></a>
										<a href="images/wh40kmechanicus3.jpg"><img src="images/wh40kmechanicus3.jpg"
												alt=""></a>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-8">
								<h2 class="entry-title"><?php echo $w['ime']; ?></h2>
								<small style="margin-top: 5px; margin-bottom: 5px;"
									class="price"><?php echo $w['cijena']; ?> <s>29,99€</s>
									<span
										style="border: none; background: #d41b22; color: #ffffff; border-radius: 3px; display: inline-block;">-17%</span></small>

								<p><?php echo $w['f1']; ?>
								<p>
								<p><?php echo $w['f2']; ?></p>
								<p><?php echo $w['f3']; ?></p>

								<div style="background-color: #172a1f" class="addtocart-bar">
									<form action="cart.php">
										<label for="#">Količina</label>
										<select name="#">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
										</select>
										<input type="submit" value="Dadajte u košaricu">
									</form>

									<div class="social-links square">
										<strong>Share</strong>
										<a href="https://hr-hr.facebook.com/" class="facebook"><i
												class="fa fa-facebook"></i></a>
										<a href="https://twitter.com/?lang=hr" class="twitter"><i
												class="fa fa-twitter"></i></a>
										<a href="https://www.tportal.hr/tehno/clanak/google-plus-odlazi-u-povijest-ali-vas-sadrzaj-mozda-i-ne-20190319"
											class="google-plus"><i class="fa fa-google-plus"></i></a>
										<a href="https://www.pinterest.com/" class="pinterest"><i
												class="fa fa-pinterest"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<section>
						<header>
							<h2 class="section-title">Similiar Product</h2>
						</header>
						<div class="product-list">
							<div class="product">
								<div class="inner-product">
									<div class="figure-image">
										<a href="single.php"><img src="images/legobatman3.webp" alt="Game 1"></a>
									</div>
									<h3 class="product-title"><a href="#">Lego Batman 3</a></h3>
									<small class="price">29,99€</small>
									<p>Batman udružuje snage sa super herojima svemira DC Comicsa i odlijeće u svemir
										kako bi spriječio zlog Brainiaca.</p>
									<a href="cart.php" class="button">Dodajte u košaricu</a>
									<a href="#" class="button muted">Detalji</a>
								</div>
							</div> <!-- .product -->

							<div class="product">
								<div class="inner-product">
									<div class="figure-image">
										<a href="single.php"><img style="height: 200px;" src="images/mgs5.jpg"
												alt="Game 2"></a>
									</div>
									<h3 class="product-title"><a href="#">Metal Gear Solid 5</a></h3>
									<small class="price">29,99€</small>
									<p>Devet godina nakon događaja MGS V: Ground Zeroes i pada Mother Base, Snake tj.
										Big Boss, budi se iz ...</p>
									<a href="cart.php" class="button">Dodajte u košaricu</a>
									<a href="#" class="button muted">Detalji</a>
								</div>
							</div> <!-- .product -->

							<div class="product">
								<div class="inner-product">
									<div class="figure-image">
										<a href="single.php"><img style="height: 200px;" src="images/genshin.jpg"
												alt="Game 3"></a>
									</div>
									<h3 class="product-title"><a href="#">Genshin Impact</a></h3>
									<small class="price">Besplatno</small>
									<p>Zakoračite u Teyvat, golem svijet koji vrvi životom i koji teče elementarnom
										energijom. Ti i tvoj brat stigli ste ovdje ...</p>
									<a href="cart.php" class="button">Dodajte u košaricu</a>
									<a href="#" class="button muted">Detalji</a>
								</div>
							</div> <!-- .product -->

							<div class="product">
								<div class="inner-product">
									<div class="figure-image">
										<a href="single.php"><img src="images/ds3.webp" alt="Game 4"></a>
									</div>
									<h3 class="product-title"><a href="#">DARK SOULS™ III</a></h3>
									<small class="price">$19.00</small>
									<p>Dark Souls nastavlja pomicati granice s najnovijim, ambicioznim poglavljem u
										hvaljenom serijalu.</p>
									<a href="cart.php" class="button">Dodajte u košaricu</a>
									<a href="#" class="button muted">Detalji</a>
								</div>
							</div> <!-- .product -->

						</div> <!-- .product-list -->
					</section>


				</div>
			</div> <!-- .container -->
		</main> <!-- .main-content -->

		<div class="site-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-2">
						<div class="widget">
							<h3 class="widget-title">Informacije</h3>
							<ul class="no-bullet">
								<li><a href="#">Mapa stranice</a></li>
								<li><a href="text-page.php">O nama</a></li>
								<li><a href="privacy.php">FAQ</a></li>
								<li><a href="privacy.php">Politika privatnosti</a></li>
								<li><a href="privacy.php">Kontakt</a></li>
							</ul>
						</div> <!-- .widget -->
					</div> <!-- column -->
					<div class="col-md-2">
						<div class="widget">
							<h3 class="widget-title">Služba za korisnike</h3>
							<ul class="no-bullet">
								<li><a href="text-page.php">Sigurnost</a></li>
								<li><a href="text-page.php">Dostava & Povrat</a></li>
								<li><a href="text-page.php">Dostava</a></li>
								<li><a href="text-page.php">Narudžbe i povrati</a></li>
								<li><a href="text-page.php">Grupna prodaja</a></li>
							</ul>
						</div> <!-- .widget -->
					</div> <!-- column -->
					<div class="col-md-2">
						<div class="widget">
							<h3 class="widget-title">Moj račun</h3>
							<ul class="no-bullet">
								<li><a href="index-logged.php">Prijava/Registracija</a></li>
								<li><a href="#">Postavke</a></li>
								<li><a href="cart.php">Košarica</a></li>
								<li><a href="#">Praćenje narudžbi</a></li>
								<li><a href="index.php">Odjavite se</a></li>
							</ul>
						</div> <!-- .widget -->
					</div> <!-- column -->
					<div class="col-md-6">
						<div class="widget">
							<h3 class="widget-title">Pridružite se našem biltenu</h3>
							<form action="#" class="newsletter-form">
								<input type="text" placeholder="Unesite svoju email adresu...">
								<input type="submit" value="Pretplatite se">
							</form>
						</div> <!-- .widget -->
					</div> <!-- column -->
				</div><!-- .row -->

				<div class="colophon">
					<div class="copy">Copyright 2022 Planet Igara. All rights reserved.</div>
					<div class="social-links square">
						<a href="https://hr-hr.facebook.com/"><i class="fa fa-facebook"></i></a>
						<a href="https://twitter.com/?lang=hr"><i class="fa fa-twitter"></i></a>
						<a
							href="https://www.tportal.hr/tehno/clanak/google-plus-odlazi-u-povijest-ali-vas-sadrzaj-mozda-i-ne-20190319"><i
								class="fa fa-google-plus"></i></a>
						<a href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a>
					</div> <!-- .social-links -->
				</div> <!-- .colophon -->
			</div> <!-- .container -->
		</div><!-- .site-footer -->
	</div>

	<div class="overlay"></div>

	<div class="auth-popup popup">
		<a href="#" class="close"><i class="fa fa-close"></i></a>
		<div class="row">
			<div class="col-md-6">
				<h2 class="section-title">Login</h2>
				<form action="#">
					<input type="text" placeholder="Username...">
					<input type="password" placeholder="Password...">
					<input type="submit" value="Login">
				</form>
			</div> <!-- .column -->
			<div class="col-md-6">
				<h2 class="section-title">Create an account</h2>
				<form action="#">
					<input type="text" placeholder="Username...">
					<input type="text" placeholder="Email address...">
					<input type="submit" value="register">
				</form>
			</div> <!-- .column -->
		</div> <!-- .row -->
	</div> <!-- .auth-popup -->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/app.js"></script>

</body>

</html>