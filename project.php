<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Kyaw Thiha | Trips</title>

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
	<?php header( 'Location: /project.html' ) ;  ?> 
		
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
						<h2 class="entry-title">This is all about my trips photo.</h2>
						<div class="filter-links filterable-nav">
							<select class="mobile-filter">
								<option value="*">Show all</option>
								<option value=".skyscraper">7 miles beach</option>
								<option value=".shopping-center">At the Grape Garden</option>
								<option value=".apartment">Mandalay Hotel</option>
							</select>
							<a href="#" class="current wow fadeInRight" data-filter="*">Show all</a>
							<a href="#" class="wow fadeInRight" data-wow-delay=".2s" data-filter=".skyscraper">Mandalay Hotel</a>
							<a href="#" class="wow fadeInRight" data-wow-delay=".4s" data-filter=".shopping-center"> 7 miles beach</a>
							<a href="#" class="wow fadeInRight" data-wow-delay=".6s" data-filter=".apartment">At the Grape Garden</a>
						</div>

						<div class="filterable-items">
							<div class="project-item filterable-item shopping-center">
								<figure class="featured-image">
									<a href="project-single.html"><img src="mypicture7.jpg" alt="#" style="height: 600px"></a>
									<figcaption>
										<h2 class="project-title"><a href="project-single.html">At 7 miles beach Mandalay</a></h2>
										<a href="#" class="more-link"><img src="arrow.png" alt=""></a>
									</figcaption>
								</figure>
							</div>
							<div class="project-item filterable-item skyscrapper">
								<figure class="featured-image">
									<a href="project-single.html"><img src="mypicture11.jpg" alt="#" style="height: 600px"></a>
									<figcaption>
										<h2 class="project-title"><a href="project-single.html"></a>At Mandalay Hotel</h2>
										<a href="#" class="more-link"><img src="arrow.png" alt=""></a>
									</figcaption>
								</figure>
							</div>
							<div class="project-item filterable-item skyscraper">
								<figure class="featured-image">
									<a href="project-single.html"><img src="mypicture12.jpg" alt="#" style="height: 600px"></a>
									<figcaption>
										<h2 class="project-title"><a href="project-single.html">At Mandalay Hotel</a></h2> 
										<a href="#" class="more-link"><img src="arrow.png" alt=""></a>
									</figcaption>
								</figure>
							</div>
							<div class="project-item filterable-item apartment">
								<figure class="featured-image">
									<a href="project-single.html"><img src="mypicture6.jpg" alt="#" style="height: 600px"></a>
									<figcaption>
										<h2 class="project-title"><a href="project-single.html">At the Grape Garden</a></h2>
										<a href="#" class="more-link"><img src="arrow.png" alt=""></a>
									</figcaption>
								</figure>
							</div>
							<div class="project-item filterable-item skyscrapper">
								<figure class="featured-image">
									<a href="project-single.html"><img src="mypicture13.jpg" alt="#" style="height: 600px"></a>
									<figcaption>
										<h2 class="project-title"><a href="project-single.html">At Mandalay Hotel</a></h2>
										<a href="#" class="more-link"><img src="arrow.png" alt=""></a>
									</figcaption>
								</figure>
							</div>
							<div class="project-item filterable-item skyscrapper">
								<figure class="featured-image">
									<a href="project-single.html"><img src="mypicture14.jpg" alt="#" style="height: 600px"></a>
									<figcaption>
										<h2 class="project-title"><a href="project-single.html">At Mandalay Hotel</a></h2>
										<a href="#" class="more-link"><img src="arrow.png" alt=""></a>
									</figcaption>
								</figure>
							</div>
							<div class="project-item filterable-item shopping-center">
								<figure class="featured-image">
									<a href="project-single.html"><img src="mypicture8.jpg" alt="#" style="height: 600px"></a>
									<figcaption>
										<h2 class="project-title"><a href="project-single.html">At 7 miles beach Mandalay</a></h2>
										<a href="#" class="more-link"><img src="arrow.png" alt=""></a>
									</figcaption>
								</figure>
							</div>
							<div class="project-item filterable-item skyscrapper">
								<figure class="featured-image">
									<a href="project-single.html"><img src="mypicture15.jpg" alt="#" style="height: 600px"></a>
									<figcaption>
										<h2 class="project-title"><a href="project-single.html">At Mandalay Hotel</a></h2>
										<a href="#" class="more-link"><img src="arrow.png" alt=""></a>
									</figcaption>
								</figure>
							</div>
							<div class="project-item filterable-item skyscrapper">
								<figure class="featured-image">
									<a href="project-single.html"><img src="mypicture16.jpg" alt="#" style="height: 600px"></a>
									<figcaption>
										<h2 class="project-title"><a href="project-single.html">At Mandalay Hotel</a></h2>
										<a href="#" class="more-link"><img src="arrow.png" alt=""></a>
									</figcaption>
								</figure>
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