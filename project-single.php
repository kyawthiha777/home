<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Kyaw Thiha | Trip</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>
	<?php header( 'Location: /index.html' ) ;  ?> 
		
		<div id="site-content">
			<div class="site-header">
				<div class="container">
					<a href="index.html" id="branding">
						<img src="logo.png" alt="" class="logo">
						<div class="logo-text">
							<h1 class="site-title">Kyaw Thiha(K)</h1>
							<small class="site-description">Tagline goes here</small>
						</div>
					</a> <!-- #branding -->

					<!-- Default snippet for navigation -->
					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="index.html">Home</a></li>
							<li class="menu-item"><a href="news.html">Education</a></li>
							<li class="menu-item"><a href="about.html">About</a></li>
							<li class="menu-item current-menu-item"><a href="project.html">My Trips</a></li>
							<li class="menu-item"><a href="contact.html">Contact</a></li>
						</ul> <!-- .menu -->
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</div> <!-- .site-header -->

			<main class="main-content">
				
				<div class="page">
					<div class="container">
						<a href="project.html" class="button-back"><img src="arrow-back.png" alt="" class="icon">Back to the trips</a>

						<div class="row">
							<div class="col-md-5">
								<div class="project-images">
									<img src="mypicture6.jpg" alt="">

									<div class="thumbs">
										<a href="#"><img src="mypicture7.jpg" alt="#" style="height: 200px"></a>
										<a href="#"><img src="mypicture12.jpg" alt="#" style="height: 200px"></a>
										<a href="#"><img src="mypicture11.jpg" alt="#" style="height: 200px"></a>
									</div>
								</div>
							</div>
							<div class="col-md-7">
								<div class="project-detail">
									<h2 class="project-title">This is my trips at Mandalay</h2>

								</div>
							</div>
						</div>
					</div>
				</div> <!-- .page -->

			</main> <!-- .main-content -->

			<footer class="site-footer">
				<div class="container">
					<div class="pull-left">

						<address>
							<strong>Kyaw Thiha</strong>
							<p>33 137 Street, Tamwe</p>
						</address>

						<a href="#" class="phone">09796320181</a>
					</div> <!-- .pull-left -->

				</div> <!-- .container -->
			</footer> <!-- .site-footer -->
		</div>

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>