<!DOCTYPE html>
<html>
	<?php include 'API-detail.php'; ?>


<head>
	<meta charset="utf-8">
	<title>Movie Gallery</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="img/favicon.png">
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
				<li>
					<a href="index.php">
						<i class="fa fa-arrow-left mr-2"></i> Back To Portfolio
					</a>
				</li>
			</ul>
		</nav>
		<!-- /Navigation -->

		<!-- Mobile Menu Button -->
		<div class="mob-menu-btn"></div>

	</header>
	<!-- /Header -->

	<!-- Main Content -->
	<main>

		<div class="container mt-8 py-9 py-md-9">

			<!-- about -->
			<div class="row">
				<div class="col-md-6" data-animation="fade-in-bottom 1s .1s">
					<h1 class="uppercase"><?php echo $someArray["title"]?></h1>
					<p class="serif">Movie Description</p>
					<p class="separator-left"></p>
				</div>
				<!-- <div class="col-md-6" data-animation="fade-in-bottom 1s .2s">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque quae, totam mollitia sequi vero eum
						facilis harum rerum nobis, cum ut quaerat reprehenderit numquam quos, minus perspiciatis
						perferendis. Enim, perferendis.</p>
					<p>Ea aspernatur debitis rerum repellat, optio corporis laborum. Enim ducimus, temporibus minus facilis.
						Quae ratione voluptatem porro voluptas tenetur vel.</p>
				</div> -->
			</div>
			<!-- /about -->

			<!-- details -->
			<div class="row mt-4">

				<div class="col-md-3" data-animation="fade-in-bottom 1s .2s">
					<h6 class="uppercase mt-7 mb-4">ID</h6>
					<p><?php echo $someArray["id"]?></p>
				</div>

				<div class="col-md-3" data-animation="fade-in-bottom 1s .3s">
					<h6 class="uppercase mt-7 mb-4">Date</h6>
					<p><?php echo date("d-m-Y",strtotime($someArray["showTime"])) ?></p>
				</div>

				<div class="col-md-3" data-animation="fade-in-bottom 1s .3s">
					<h6 class="uppercase mt-7 mb-4">Like</h6>
					<p><?php echo $someArray["like"]?></p>
				</div>

			</div>
			<!-- /details -->

		</div>

		<section data-background="#222">
			<div class="container py-10">

				<!-- Project Video -->
				<div class="thumbnail-video"  data-src="#" data-poster="<?php echo $someArray['image'] ?>"></div>

				<!-- Project Text -->
				<!-- <div class="row">
					<div class="offset-md-2 col-md-8 text-light pt-6 pt-md-10">
						<h2>Adipisci expedita quo harum voluptatum aperiam animi</h2>
						<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
							Quia tenetur quibusdam libero? Modi repellendus perferendis commodi qui repudiandae vel porro
							aperiam animi, maiores error eius expedita asperiores sed quibusdam quos!</p>
					</div>
				</div> -->

			</div>
		</section>


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
</body>


</html>