<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="robots" content="nofollow" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<title>Uğurhan Akdeniz</title>
	<!-- Jquery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

	<!-- Fancy Time-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
	<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

	<!-- CheckBox Plugin -->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">

	<!-- Owl Carousel -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">

	<!-- Lazy Load -->
	<script src="https://hakaanyildirim.com/assets/Front/js/jquery.lazy.min.js"></script>
	
	<!-- Vue -->
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;500;700;900&display=swap" rel="stylesheet">

	<!-- Main Reset Css-->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/main.css?v=<?php echo md5(date('Y-m-d H:i:s')); ?>"/>

	<link rel="icon" href="images/favico.png" type="image/x-icon" />
</head>
<script>
	function loadpage() {
		$('.loadingArea').addClass('done');
	}
</script>
<body  onload="loadpage()">
	<div class="loadingArea">
		<img src="images/black.png" alt="Uğurhan Akdeniz">
		<p>Loading</p>
	</div>

	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="navigator">
						<a href="index.php" class="logo">
							<img src="images/black.png" alt="UĞURHAN AKDENİZ">
						</a>
						<div class="menu">
							<div class="hamburger">
								<svg class="ham hamRotate ham1" viewBox="0 0 100 100" width="80" onclick="this.classList.toggle('active')">
									<path
									class="line top"
									d="m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40" />
									<path
									class="line middle"
									d="m 30,50 h 40" />
									<path
									class="line bottom"
									d="m 30,67 h 40 c 12.796276,0 15.357889,-11.717785 15.357889,-26.851538 0,-15.133752 -4.786586,-27.274118 -16.667516,-27.274118 -11.88093,0 -18.499247,6.994427 -18.435284,17.125656 l 0.252538,40" />
								</svg>
							</div>
							<ul>
								<li><a class="active" href="index.php">Home</a></li>
								<li><a href="clients.php">Clients</a></li>
								<li><a href="projects.php">Project</a></li>
								<li><a href="about.php">About</a></li>
								<li><a href="contact.php">Contact</a></li>
								<li><a id="privacy" href="#!">Privacy</a></li>
								<li class="lang"><a class="isActive" href="#"> en </a> / <a href="#"> tr </a></li>
								<li id="search">
									<span class="removeSearch"><img src="images/icons/cancel.svg" alt="close"></span>
									<input type="text" placeholder="Search">
									<button><img src="images/icons/loupe.svg" alt=""></button>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>