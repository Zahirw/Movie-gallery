<!DOCTYPE html>
<html>
	<?php include 'API.php'; ?>
<head>
	<meta charset="utf-8">
	<title>Movie Gallery</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="img/favicon.png">
	<!-- <link rel="stylesheet" href="css/style.css"> -->	
	
	<link rel="stylesheet" href="EasyAutocomplete/easy-autocomplete.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
	<link rel="stylesheet" href="css/core.css">
	<link rel="stylesheet" href="css/theme.css">
	

</head>
<body>

	<!-- Preloader -->
	<div id="preloader"></div>

	<!-- Header -->
	<header id="header">

		<!-- Logo -->
		<a href="index.php" class="logo">
			<img src="img/logo.png" class="logo-dark" alt="" style="max-width:15%;">
			<img src="img/logo.png" class="logo-light" alt="" style="max-width:15%;">
		</a>

		<!-- Navigation -->
		<nav>
			<ul>
				<li><a href="index.php" class="home-link is-active">Home</a></li>
			</ul>
		</nav>
		<!-- /Navigation -->

		<!-- Mobile Menu Button -->
		<div class="mob-menu-btn"></div>

		<!-- Close Aside Button -->
		<div class="close-aside-btn"></div>

	</header>
	<!-- /Header -->

	<!-- Main Content -->
	<main>

		<div class="container large pt-10 pb-6">
			<!-- intro text -->
			<h1 class="font-os weight-100 py-8">Welcome to  <br> Movie Gallery</h1>

			<div class="container">
				<div class="row">
					<!--------- ALL Button -------->
					<div class="col-md-1">
						<a href="index.php"><p  style="margin-top:10%"><strong>All</strong></p></a> 
					</div>
					<!----------- Search ----------->
					<div class="col">
						<form action="index.php" method="get">
							<div class="row">
								<div class="col">
									<input id="provider-json" type="text" name="cari" class="form-control" placeholder="Search Here" aria-label="Recipient's username" aria-describedby="button-addon2">
								</div>
								<div class="col-sm-2">
									<button type="submit" class="btn btn-primary mb-2" style="height: 45px;margin-left: -50%;">Search</button>
								</div>
							</div>
						</form>
					</div>
					<!--------- Filter Date Button -------->
						<div class="col">	
							<form action="index.php" method="GET">
								<div class="input-group mb-3">
									<input type="text" name="daterange" class="form-control" value="01/01/2020 - 01/01/2020" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
									<div class="input-group-append">
										<button class="btn btn-outline-secondary" type="submit" id="button-addon2">Filter</button>
									</div>
								</div>
							</form>
						</div>
				</div>
			</div>
			<!-- portfolio grid -->
			<div class="masonry animate-items" data-columns="3" data-gutter="50" data-filter="#filter">
				<?php
					for ($x = 0; $x < count($someArray); $x++) {
						$date = date("Y",strtotime($someArray[$x]["showTime"]));
						if ($date == 2019){
							$date = "a";
						} elseif ($date == 2020){
							$date = "b";
						}
						// ------------------------------------ Logic Search -----------------------------------------------------
						if(isset($_GET['cari'])){
							$cari = $_GET['cari'];
							if(stripos($someArray[$x]["title"],$cari) or strtoupper($cari) == strtoupper($someArray[$x]["title"])){
								echo'<figure class="portfolio-item project-item '.$date.'">'.
										"<div class='inner'>".
											//<!-- Image -->
											'<img src="'.$someArray[$x]['image'].'"loading="lazy">'.
											//<!-- URL / Lightbox -->
											'<a href="portfolio-single-2.php?id='.$someArray[$x]["id"].'" class="item-link"></a>'.
											//<!-- Caption -->
											'<figcaption>'.
												'<p>'. date("d-m-Y",strtotime($someArray[$x]["showTime"])).'</p>'.
												'<h2 class="item-title">'.$someArray[$x]["title"]. '</h2>'.
											'</figcaption>'.
										'</div>'.
									'</figure>';
							}
						// ------------------------------------ Logic Filter by Date----------------------------------------------			
						}elseif(isset($_GET['daterange'])){
							$startDate = substr($_GET['daterange'],0,10);
							$startDate = date("m/d/Y",strtotime($startDate));
							$endDate = substr($_GET['daterange'],12);
							$endDate = date("m/d/Y",strtotime($endDate));
							// echo "start date :".$startDate."<br/>";
							// echo "end date :".$endDate."<br/>";
	
							for ($x = 0; $x < count($someArray); $x++) {
								$currentDate = date("m/d/Y",strtotime($someArray[$x]["showTime"]));
								//echo "current date : ".$_GET['daterange']."<br/>";
								//echo date("d/m/Y",strtotime($someArray[$x]["showTime"]))."<br/>";
								if (($currentDate >= $startDate) && ($currentDate <= $endDate)){
									echo'<figure class="portfolio-item project-item '.$date.'">'.
											"<div class='inner'>".
												//<!-- Image -->
												'<img src="'.$someArray[$x]['image'].'"loading="lazy">'.
												//<!-- URL / Lightbox -->
												'<a href="portfolio-single-2.php?id='.$someArray[$x]["id"].'" class="item-link"></a>'.
												//<!-- Caption -->
												'<figcaption>'.
													'<p>'. date("d-m-Y",strtotime($someArray[$x]["showTime"])).'</p>'.
													'<h2 class="item-title">'.$someArray[$x]["title"]. '</h2>'.
												'</figcaption>'.
											'</div>'.
										'</figure>';
								}
							}


						}else{
							echo'<figure class="portfolio-item project-item '.$date.'">'.
							"<div class='inner'>".
								//<!-- Image -->
								'<img src="'.$someArray[$x]['image'].'"loading="lazy">'.
								//<!-- URL / Lightbox -->
								'<a href="portfolio-single-2.php?id='.$someArray[$x]["id"].'" class="item-link"></a>'.
								//<!-- Caption -->
								'<figcaption>'.
									'<p>'. date("d-m-Y",strtotime($someArray[$x]["showTime"])).'</p>'.
									'<h2 class="item-title">'.$someArray[$x]["title"]. '</h2>'.
								'</figcaption>'.
							'</div>'.
						'</figure>';
						}
						
					}
				?>

			</div>
			<!-- /portfolio grid -->

		</div>

	</main>
	<!-- /Main Content -->

<!-- Footer -->
<footer class="page-footer">

	<!-- Social Links -->
	<div class="footer-social-links">
		<a href="#" class="color-facebook">Facebook</a>
		<a href="#" class="color-instagram">Instagram</a>
		<a href="#" class="color-linkedin">Linkedin</a>
		<a href="#" class="color-twitter">Twitter</a>
		<a href="#" class="color-youtube">Youtube</a>
	</div>

	<!-- Copyright -->
	<small class="mt-4">&copy; Copyright; AchtungThemes</small>

</footer>
<!-- /Footer -->

	<!-- JS -->
	<script src="js/core.js"></script>
	<script src="js/theme.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
	<script src="EasyAutocomplete/jquery.easy-autocomplete.min.js"></script>

	<script>
	$(function() {
	$('input[name="daterange"]').daterangepicker({
		opens: 'left'
	}, function(start, end, label) {
		console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
	});
	});
    var options = {
		url: "https://5f50ca542b5a260016e8bfb0.mockapi.io/api/v1/movies",

		getValue: "title",

		list: {
			match: {
				enabled: true
			}
		}
	};

	$("#provider-json").easyAutocomplete(options);
    
</script>

</body>

</html>