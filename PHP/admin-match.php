  <?php
	require_once("config.php");
	if (! $_SESSION['logged']) {
		header('location: login.php');
	}
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Admin - FIFA 13</title>

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
  

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
			  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
			<![endif]-->
</head>

<body>

	<!-- Header -->
	<header id="header">
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
					<li><a href="index.php#home">Home</a></li>
					<li><a href="index.php#about">About</a></li>
					<li><a href="index.php#schedule">Schedule</a></li>
					<li><a href="index.php#sponsors">Sponsors</a></li>
					<li><a href="login.php">Login</a></li>
					<li class="active"><a href="admin.php">Admin</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</nav>
			<!-- /Navigation -->

		</div>
		<!-- /container -->
	</header>
	<!-- /Header -->

	<!-- Page Header -->
	<div id="page-wrapper" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- wrapper content -->
				<div class="col-md-12">
					<div class="page-wrapper-content">
						<h2>Invoer Wedstrijden</h2>
						<?php
						if(isset($_SESSION['addedmatch'])){
							echo "<div class=\"alert\">
  							<span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
  								Succesfully added match.
							</div>";
						}
						unset($_SESSION['addedmatch']);
							?>
					</div>
				</div>
				<!-- /wrapper content -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /Page Header -->

	<div class="section">
		<div class="container">
			<div class="row">
                <!-- admin -->
            <div id="admin" class="section">
                <!-- container -->
                <div class="container">
                    <!-- row -->
                    <div class="row">
											<form class="" action="MatchController.php" method="POST">
                        <div class="col-md-12">
                            <!-- admin -->
                            <div class="admin">
                                <div class="admin-content">
                                    <h3><a href="#">Invoer Wedstrijden</a></h3>
                                    <select name="team1" class="input" id="teamselect1">
																			<option value="">Select...</option>
																			<option value="1">Feyenoord</option>
																			<option value="2">PSV</option>
																			<option value="3">NAC</option>
																			<option value="4">ADO</option>
																			<option value="5">AZ</option>
																			<option value="6">FC Emmen</option>
																			<option value="7">Excelsior</option>
																			<option value="8">Fortuna</option>
																			<option value="9">De Graafschap</option>
																			<option value="10">FC Groningen</option>
																			<option value="11">sc Heerenveen</option>
																			<option value="12">Heracles</option>
																			<option value="13">PEC</option>
																			<option value="14">FC Utrecht</option>
																			<option value="15">Vitesse</option>
																			<option value="16">VVV-Venlo</option>
																			<option value="17">Willem II</option>
																			<option value="18">Ajax</option>
																		</select>
																		<select name="team2" class="input" id="teamselect2">
																			<option value="">Select...</option>
																			<option value="1">Feyenoord</option>
																			<option value="2">PSV</option>
																			<option value="3">NAC</option>
																			<option value="4">ADO</option>
																			<option value="5">AZ</option>
																			<option value="6">FC Emmen</option>
																			<option value="7">Excelsior</option>
																			<option value="8">Fortuna</option>
																			<option value="9">De Graafschap</option>
																			<option value="10">FC Groningen</option>
																			<option value="11">sc Heerenveen</option>
																			<option value="12">Heracles</option>
																			<option value="13">PEC</option>
																			<option value="14">FC Utrecht</option>
																			<option value="15">Vitesse</option>
																			<option value="16">VVV-Venlo</option>
																			<option value="17">Willem II</option>
																			<option value="18">Ajax</option>
																		</select>
																		
																	
                                </div>
                            </div>
                            <!-- /admin -->
												</div>
												<button type="submit" value="Submit" class="main-btn">Submit</button>
												

                        

				</div>


			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /admin -->
			</div>
		</div>
	</div>

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
