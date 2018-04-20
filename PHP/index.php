<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>FIFA13</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700,900" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<?php
	include_once("config.php");
	?>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
			  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
			<![endif]-->
</head>
<body>
	

	<!-- Header -->
	<header id="header" class="transparent-navbar">
		<!-- container -->
		<div class="container">
			<!-- navbar header -->
			<div class="navbar-header">
				<!-- Logo -->
				<div class="navbar-brand">
					<a class="logo" href="index.html">
						<img class="logo-img" src="./img/logo.png" alt="logo">
						<img class="logo-alt-img" src="./img/logo-alt.png" alt="logo">
					</a>
				</div>
				<!-- /Logo -->

				<!-- Mobile toggle -->
				<button class="navbar-toggle">
						<i class="fa fa-bars"></i>
					</button>
				<!-- /Mobile toggle -->
			</div>
			<!-- /navbar header -->

			<!-- Navigation -->
			<nav id="nav">
				<ul class="main-nav nav navbar-nav navbar-right">
					<li><a href="#home">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#schedule">Schedule</a></li>
					<li><a href="#speakers">Employees</a></li>
					<li><a href="#sponsors">Sponsors</a></li>
					<li><a href="#contact">Contact</a></li>
					<li><a href="blog.html">Login</a></li>
				</ul>
			</nav>
			<!-- /Navigation -->
		</div>
		<!-- /container -->
	</header>
	<!-- /Header -->

	<!-- Home -->
	<div id="home">
		<!-- background image -->
		<div class="section-bg" style="background-image:url(./img/background01.jpg)" data-stellar-background-ratio="0.5"></div>
		<!-- /background image -->

		<!-- home wrapper -->
		<div class="home-wrapper">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- home content -->
					<div class="col-md-8 col-md-offset-2">
						<div class="home-content">
							<h1>Lorem ipsum dolor sit amet</h1>
							<h4 class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h4>
							<a href="#" class="main-btn">Contestant Login</a>
						</div>
					</div>
					<!-- /home content -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /home wrapper -->
	</div>
	<!-- /Home -->

	<!-- About -->
	<div id="about" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="section-title">
					<h3 class="title">About <span>FIFA13</span></h3>
				</div>
				<!-- /section title -->

				<div class="col-md-8 col-md-offset-2 text-center">
					<!-- about content -->
					<div class="about-content">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
							dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
					<!-- /about content -->

					<!-- Numbers -->
					<div id="numbers">
						<!-- row -->
						<div class="row">
							<!-- number -->
							<div class="col-md-3 col-sm-3 col-xs-6">
								<div class="number">
									<h3><span class="counter" data-from="0" data-to="300" data-speed="25">0</span>+</h3>
									<p>Hours</p>
								</div>
							</div>
							<!-- /number -->

							<!-- number -->
							<div class="col-md-3 col-sm-3 col-xs-6">
								<div class="number">
									<h3><span class="counter" data-from="0" data-to="4" data-speed="100">0</span>+</h3>
									<p>Employees</p>
								</div>
							</div>
							<!-- /number -->

							<!-- number -->
							<div class="col-md-3 col-sm-3 col-xs-6">
								<div class="number">
									<h3><span class="counter" data-from="0" data-to="1" data-speed="100">0</span>+</h3>
									<p>Country</p>
								</div>
							</div>
							<!-- /number -->

							<!-- number -->
							<div class="col-md-3 col-sm-3 col-xs-6">
								<div class="number">
									<h3><span class="counter" data-from="0" data-to="" data-speed="1500">0</span>+</h3>
									<p>Speakers</p>
								</div>
							</div>
							<!-- /number -->
						</div>
						<!-- /row -->
					</div>
					<!-- /Numbers -->
				</div>
			</div>
			<!-- row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /About -->

	<!-- Galery -->
	<div id="galery">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- galery owl -->
				<div id="galery-owl" class="owl-carousel owl-theme">
					<!-- galery item -->
					<div class="galery-item">
						<img src="./img/galery01.jpg" alt="">
					</div>
					<!-- /galery item -->

					<!-- galery item -->
					<div class="galery-item">
						<img src="./img/galery02.jpg" alt="">
					</div>
					<!-- /galery item -->

					<!-- galery item -->
					<div class="galery-item">
						<img src="./img/galery03.jpg" alt="">
					</div>
					<!-- /galery item -->

				</div>
				<!-- /galery owl -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /Galery -->

	<!-- Video CTA -->
	<div id="video-cta" class="section">
		<!-- background image -->
		<div class="section-bg" style="background-image:url(./img/background02.jpg)" data-stellar-background-ratio="0.5"></div>
		<!-- /background image -->

		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- cta content -->
				<div class="col-md-8 col-md-offset-2">
					<div class="cta-content text-center">
						<a class="video-play" href="#">
							<i class="fa fa-play"></i>
						</a>
						<h2>Livestream</h2>
						<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
				<!-- /cta content -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /Video CTA -->

	<!-- Event Schedule -->
	<div id="schedule" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="section-title">
					<h3 class="title"><span>Event</span> <span style="color: #dd0a37;">Schedule</span></h3>
				</div>
				<!-- /section title -->

				<div class="col-md-8 col-md-offset-2">

					<div class="events-wrapper">
						
						<div class="event">
							<div class="event-day">
								<div>
									<span class="day">19</span>
									<span class="year">Apr, 2018</span>
								</div>
							</div>
							<div class="event-content">
								<p class="event-time"><i class="fa fa-clock-o"></i> 9 : 00 AM - 12 : 15 AM</p>
								<h3 class="event-title">Development</h3>
								<p>Currently we are developing the HTML/CSS of the webpage!</p>
								<p>By <a href="#">Damiën van Gageldonk</a></p>
							</div>
						</div>
						
						<!-- <div class="event">
							<div class="event-hour"></div>
							<div class="event-content">
								<p class="event-time"><i class="fa fa-clock-o"></i> 8 : 00 AM - 11 : 00 AM</p>
								<h3 class="event-title">Perpetua consectetuer definitiones id sea, mei utinam eripuit ne</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<p>By <a href="#">John Doe</a></p>
							</div>
						</div>
						
						<div class="event">
							<div class="event-hour"></div>
							<div class="event-content">
								<p class="event-time"><i class="fa fa-clock-o"></i> 8 : 00 AM - 11 : 00 AM</p>
								<h3 class="event-title">At mucius deserunt delicatissimi eam, labitur detraxit ut sit</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<p>By <a href="#">John Doe</a></p>
							</div>
						</div>
						
						<div class="event">
							<div class="event-day">
								<div>
									<span class="day">16</span>
									<span class="year">Feb, 2018</span>
								</div>
							</div>
							<div class="event-content">
								<p class="event-time"><i class="fa fa-clock-o"></i> 8 : 00 AM - 11 : 00 AM</p>
								<h3 class="event-title">His id altera fabellas facilisis. Has eros assueverit cu</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<p>By <a href="#">John Doe</a></p>
							</div>
						</div>
						
						<div class="event">
							<div class="event-hour"></div>
							<div class="event-content">
								<p class="event-time"><i class="fa fa-clock-o"></i> 8 : 00 AM - 11 : 00 AM</p>
								<h3 class="event-title">At mucius deserunt delicatissimi eam, labitur detraxit ut sit</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<p>By <a href="#">John Doe</a></p>
							</div>
						</div>
						
						<div class="event">
							<div class="event-day">
								<div>
									<span class="day">17</span>
									<span class="year">Feb, 2018</span>
								</div>
							</div>
							<div class="event-content">
								<p class="event-time"><i class="fa fa-clock-o"></i> 8 : 00 AM - 11 : 00 AM</p>
								<h3 class="event-title">His id altera fabellas facilisis. Has eros assueverit cu</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<p>By <a href="#">John Doe</a></p>
							</div>
						</div>
						
						<div class="event">
							<div class="event-hour"></div>
							<div class="event-content">
								<p class="event-time"><i class="fa fa-clock-o"></i> 8 : 00 AM - 11 : 00 AM</p>
								<h3 class="event-title">At mucius deserunt delicatissimi eam, labitur detraxit ut sit</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<p>By <a href="#">John Doe</a></p>
							</div>
						</div>					 -->
					</div>

					<div class="download-btn">
						<a href="#" class="main-btn">Download Schedule</a>
					</div>

				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /Event Schedule -->

	<!-- Speakers -->
	<div id="speakers" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="section-title">
					<h3 class="title"><span>Our</span> <span style="color: #dd0a37;">Developers</span></h3>
				</div>
				<!-- section title -->

				<!-- speaker -->
				<div class="col-md-4 col-sm-6">
					<div class="speaker" data-toggle="modal" data-target="#speaker-modal-1">
						<div class="speaker-img">
							<img src="./img/speaker01.jpg" alt="">
						</div>
						<div class="speaker-body">
							<div class="speaker-social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
								<a href="#"><i class="fa fa fa-linkedin"></i></a>
							</div>
							<div class="speaker-content">
								<h2>Damiën van Gageldonk</h2>
								<span>Manager, HTML/CSS, PHP, C#</span>
							</div>
						</div>
					</div>
				</div>
				<!-- /speaker -->

				<!-- speaker -->
				<div class="col-md-4 col-sm-6">
					<div class="speaker" data-toggle="modal" data-target="#speaker-modal-2">
						<div class="speaker-img">
							<img src="./img/speaker01.jpg" alt="">
						</div>
						<div class="speaker-body">
							<div class="speaker-social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
								<a href="#"><i class="fa fa fa-linkedin"></i></a>
							</div>
							<div class="speaker-content">
								<h2>Davey Nijhuis</h2>
								<span>Notulist, PHP</span>
							</div>
						</div>
					</div>
				</div>
				<!-- /speaker -->

				<!-- speaker -->
				<div class="col-md-4 col-sm-6">
					<div class="speaker" data-toggle="modal" data-target="#speaker-modal-3">
						<div class="speaker-img">
							<img src="./img/speaker01.jpg" alt="">
						</div>
						<div class="speaker-body">
							<div class="speaker-social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
								<a href="#"><i class="fa fa fa-linkedin"></i></a>
							</div>
							<div class="speaker-content">
								<h2>Timo van Bijnen</h2>
								<span>Member, PHP</span>
							</div>
						</div>
					</div>
				</div>
				<!-- /speaker -->

				<!-- speaker modal -->
				<div id="speaker-modal-1" class="speaker-modal modal fade">
					<div class="modal-dialog">
						<div class="modal-content">
							<button type="button" class="speaker-modal-close" data-dismiss="modal"></button>
							<div class="modal-body">
								<div class="row">
									<div class="col-md-5">
										<div class="speaker-modal-img">
											<img src="./img/speaker01.jpg" alt="">
										</div>
									</div>
									<div class="col-md-7">
										<div class="speaker-modal-content">
											<h2 class="speaker-name">Damiën van Gageldonk</h2>
											<span class="speaker-job">- Manager, HTML/CSS, PHP, C#</span>

											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
												irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

											<div class="speaker-website">
												<h4>Website</h4>
												<a href="#">www.damienvg99.nl</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="speaker-modal-2" class="speaker-modal modal fade">
					<div class="modal-dialog">
						<div class="modal-content">
							<button type="button" class="speaker-modal-close" data-dismiss="modal"></button>
							<div class="modal-body">
								<div class="row">
									<div class="col-md-5">
										<div class="speaker-modal-img">
											<img src="./img/speaker01.jpg" alt="">
										</div>
									</div>
									<div class="col-md-7">
										<div class="speaker-modal-content">
											<h2 class="speaker-name">Davey Nijhuis</h2>
											<span class="speaker-job">- Notulist, PHP</span>

											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
												irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="speaker-modal-3" class="speaker-modal modal fade">
					<div class="modal-dialog">
						<div class="modal-content">
							<button type="button" class="speaker-modal-close" data-dismiss="modal"></button>
							<div class="modal-body">
								<div class="row">
									<div class="col-md-5">
										<div class="speaker-modal-img">
											<img src="./img/speaker01.jpg" alt="">
										</div>
									</div>
									<div class="col-md-7">
										<div class="speaker-modal-content">
											<h2 class="speaker-name">Timo van Bijnen</h2>
											<span class="speaker-job">- Member, PHP</span>

											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
												irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /speaker modal -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /Speakers -->

	<!-- Sponsors -->
	<div id="sponsors" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="section-title">
					<h3 class="title"><span>Our</span> <span style="color: #dd0a37;">Sponsors</span></h3>
				</div>
				<!-- /section title -->

				<!-- sponsor -->
				<div class="col-md-3 col-sm-4 col-xs-6">
					<a href="#" class="sponsor">
						<img src="./img/sponsor.png" alt="">
					</a>
				</div>
				<!-- /sponsor -->

				<!-- sponsor -->
				<div class="col-md-3 col-sm-4 col-xs-6">
					<a href="#" class="sponsor">
						<img src="./img/sponsor.png" alt="">
					</a>
				</div>
				<!-- /sponsor -->

				<!-- sponsor -->
				<div class="col-md-3 col-sm-4 col-xs-6">
					<a href="#" class="sponsor">
						<img src="./img/sponsor.png" alt="">
					</a>
				</div>
				<!-- /sponsor -->

				<!-- sponsor -->
				<div class="col-md-3 col-sm-4 col-xs-6">
					<a href="#" class="sponsor">
						<img src="./img/sponsor.png" alt="">
					</a>
				</div>
				<!-- /sponsor -->

				<!-- sponsor -->
				<div class="col-md-3 col-sm-4 col-xs-6">
					<a href="#" class="sponsor">
						<img src="./img/sponsor.png" alt="">
					</a>
				</div>
				<!-- /sponsor -->

				<!-- sponsor -->
				<div class="col-md-3 col-sm-4 col-xs-6">
					<a href="#" class="sponsor">
						<img src="./img/sponsor.png" alt="">
					</a>
				</div>
				<!-- /sponsor -->

				<!-- sponsor -->
				<div class="col-md-3 col-sm-4 col-xs-6">
					<a href="#" class="sponsor">
						<img src="./img/sponsor.png" alt="">
					</a>
				</div>
				<!-- /sponsor -->

				<!-- sponsor -->
				<div class="col-md-3 col-sm-4 col-xs-6">
					<a href="#" class="sponsor">
						<img src="./img/sponsor.png" alt="">
					</a>
				</div>
				<!-- /sponsor -->

			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /Sponsors -->
	<!-- Footer -->
	<footer id="footer">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				<!-- footer logo -->
				<div class="col-md-4 col-md-push-4">
					<div class="footer-brand">
						<a class="logo" href="index.html">
							<img class="logo-img" src="./img/logo.png" alt="logo">
						</a>
					</div>
				</div>
				<!-- /footer logo -->

				<!-- contact social -->
				<div class="col-md-4 col-md-push-4">
					<div class="contact-social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa fa-linkedin"></i></a>
					</div>
				</div>
				<!-- /contact social -->

			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /Footer -->

	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script src="js/google-map.js"></script>
	<script src="js/jquery.countTo.js"></script>
	<script src="js/main.js"></script>
	
</body>

</html>
