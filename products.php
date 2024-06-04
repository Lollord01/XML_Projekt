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
						<small class="site-description">Igre</small>
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
						<li class="menu-item home current-menu-item"><a href="index-logged.php"><i
									class="icon-home"></i></a></li>
						<li class="menu-item"><a href="products.php">Akcija</a></li>
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
						<span>Akcija</span>
					</div>
				</div>

			</div> <!-- .container -->
		</div> <!-- .site-header -->
		<main class="main-content">
			<div class="container">
				<div class="page">
					<div style="background-color: #172a1f" class="filter-bar">
						<div class="filter">
							<span>
								<label>Sortiraj po:</label>
								<select name="#">
									<option value="#">Popularnost</option>
									<option value="#">Nagrađivano</option>
									<option value="#">Najmanjanja cijena</option>
								</select>
							</span>
							<span>
								<label>Žanr</label>
								<select name="#">
									<option value="#">Pokaži sve</option>
									<option value="#">Action</option>
									<option value="#">Racing</option>
									<option value="#">Strategy</option>
								</select>
							</span>
							<span>
								<label>Pokaži:</label>
								<select name="#">
									<option value="#">8</option>
									<option value="#">16</option>
									<option value="#">24</option>
								</select>
							</span>
						</div> <!-- .filter -->

						<div class="pagination">
							<a href="#" class="page-number"><i class="fa fa-angle-left"></i></a>
							<span class="page-number current">1</span>
							<a href="#" class="page-number">2</a>
							<a href="#" class="page-number">3</a>
							<a href="#" class="page-number">...</a>
							<a href="#" class="page-number">12</a>
							<a href="#" class="page-number"><i class="fa fa-angle-right"></i></a>
						</div> <!-- .pagination -->
					</div> <!-- .filter-bar -->

					<div class="product-list">
						<div class="product">
							<div class="inner-product">
								<div class="figure-image">
									<a href="single.php"><img src="images/legobatman3.webp" alt="Game 1"></a>
								</div>
								<h3 class="product-title"><a href="#"><?php echo $b['ime']; ?></a></h3>
								<p><?php echo $b['opis']; ?></p>
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
								<h3 class="product-title"><a href="#"><?php echo $m['ime']; ?></a></h3>
								<p><?php echo $m['opis']; ?></p>
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
								<h3 class="product-title"><a href="#"><?php echo $gs['ime']; ?></a></h3>
								<p><?php echo $gs['opis']; ?></p>
								<a href="cart.php" class="button">Dodajte u košaricu</a>
								<a href="#" class="button muted">Detalji</a>
							</div>
						</div> <!-- .product -->

						<div class="product">
							<div class="inner-product">
								<div class="figure-image">
									<a href="single.php"><img src="images/ds3.webp" alt="Game 4"></a>
								</div>
								<h3 class="product-title"><a href="#"><?php echo $d['ime']; ?></a></h3>
								<p><?php echo $d['opis']; ?></p>
								<a href="cart.php" class="button">Dodajte u košaricu</a>
								<a href="#" class="button muted">Detalji</a>
							</div>
						</div> <!-- .product -->

						<div class="product">
							<div class="inner-product">
								<div class="figure-image">
									<a href="single.php"><img style="height: 200px;" src="images/eurotrucksim.jpg"
											alt="Game 1"></a>
								</div>
								<h3 class="product-title"><a href="#"><?php echo $e['ime']; ?></a></h3>
								<p><?php echo $e['opis']; ?></p>
								<a href="cart.php" class="button">Dodajte u košaricu</a>
								<a href="#" class="button muted">Detalji</a>
							</div>
						</div> <!-- .product -->


						<div class="product">
							<div class="inner-product">
								<div class="figure-image">
									<a href="single.php"><img style="height: 200px;" src="images/wh40kmechanicus1.webp"
											alt="Game 2"></a>
								</div>
								<h3 class="product-title"><a href="#"><?php echo $w['ime']; ?></a></h3>
								<p><?php echo $w['opis']; ?></p>
								<a href="cart.php" class="button">Dodajte u košaricu</a>
								<a href="#" class="button muted">Detalji</a>
							</div>
						</div> <!-- .product -->


						<div class="product">
							<div class="inner-product">
								<div class="figure-image">
									<a href="single.php"><img style="height: 200px;" src="images/edf4.1.1.jpg"
											alt="Game 3"></a>
								</div>
								<h3 class="product-title"><a href="#"><?php echo $ed['ime']; ?></a></h3>
								<p><?php echo $ed['opis']; ?></p>
								<a href="cart.php" class="button">Dodajte u košaricu</a>
								<a href="#" class="button muted">Detalji</a>
							</div>
						</div> <!-- .product -->


						<div class="product">
							<div class="inner-product">
								<div class="figure-image">
									<a href="single.php"><img style="height: 200px;" src="images/ciu.jpg"
											alt="Game 4"></a>
								</div>
								<h3 class="product-title"><a href="#"><?php echo $c['ime']; ?></a></h3>
								<p><?php echo $c['opis']; ?></p>
								<a href="cart.php" class="button">Dodajte u košaricu</a>
								<a href="#" class="button muted">Detalji</a>
							</div>
						</div> <!-- .product -->

					</div> <!-- .product-list -->

					<div style="background-color: #172a1f" class="pagination-bar">
						<div class="pagination">
							<a href="#" class="page-number"><i class="fa fa-angle-left"></i></a>
							<span class="page-number current">1</span>
							<a href="#" class="page-number">2</a>
							<a href="#" class="page-number">3</a>
							<a href="#" class="page-number">...</a>
							<a href="#" class="page-number">12</a>
							<a href="#" class="page-number"><i class="fa fa-angle-right"></i></a>
						</div> <!-- .pagination -->
					</div>
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
		</div> <!-- .site-footer -->
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
