<?php

include "config/database.php";

if(isset($_POST['submit'])){

	$tid = $_POST['tid'];




	if($tid == ""){

	echo "<script>alert('Please enter a tracking Number')</script>";

	}else{


		$sql= "SELECT * FROM track WHERE pid = '$tid'";
		$result = mysqli_query($link,$sql);
		if(mysqli_num_rows($result) > 0){
		  $row = mysqli_fetch_assoc($result);

		  $pid = $row['pid'];
		  if(isset($row['pid'])){

			  $pid = $row['pid'];



	if($tid == $pid){



	header("Location:result.php?track=$tid");

	}

	else{

		echo "<script>alert('No record for the track number')</script>";
	}

}

}

}
}

?>








<!DOCTYPE php>
<php lang="en">
    

<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS --> 
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Owl Theme Default CSS --> 
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <!-- Owl Carousel CSS --> 
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <!-- Owl Magnific CSS --> 
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <!-- Animate CSS --> 
        <link rel="stylesheet" href="assets/css/animate.css">
        <!-- Boxicons CSS --> 
		<link rel="stylesheet" href="assets/css/boxicons.min.css">
        <!-- Flaticon CSS --> 
		<link rel="stylesheet" href="assets/css/flaticon.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="assets/css/nice-select.css">
		<!-- Odometer CSS-->
		<link rel="stylesheet" href="assets/css/odometer.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Responsive CSS -->
		<link rel="stylesheet" href="assets/css/responsive.css">
		
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="assets/img/cargojiji.svg">
		
        <!-- TITLE -->
        <title>Cargojiji</title>
    </head>

    <body>
		<!-- Start Preloader Area -->
		<div class="preloader">
			<div class="lds-ripple">
				<div></div>
				<div></div>
			</div>
		</div>
		<!-- End Preloader Area -->

		<div id="google_translate_element" style="margin-left:1%">

</div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

		<!-- Start Header Area -->
		<header class="header-area">
			<!-- Start Top Header Area -->
			<div class="top-header">
				<div class="container">
					<div class="row">
						<div class="col-lg-3">
							<div class="header-left-content">
								<a href="index.php">
									<img src="assets/img/logo/cargojiji.svg" alt="Logo" style="width: 70px">
								</a>
							</div>
						</div>
						<div class="col-lg-9">
							<div class="header-right-content">
								<ul>
									<li>
										<a href="tel:+502-464-679">
											<i class='bx bxs-phone-call'></i>
											<span>Contact support</span>
											+447-953-966-250
										</a>
									</li>
									<li>
										<a href="mailto:suppout@yourdomain.com">
											<i class='bx bx-envelope'></i>
											<span>Contact support</span>
											support@yourdomain.com
										</a>
									</li>
									<li class="pl-0">
										<ul class="flag-wrap">
											<li class="flag-item-top">
												<a href="#" class="flag-bar">
													<img src="assets/img/flag/1-united-states.png" alt="Image">
													<span>USA</span>
												</a>
												<ul class="flag-item-bottom">
													<li class="flag-item">
														<a href="#" class="flag-link">
															<img src="assets/img/flag/2-united-kingdom.png" alt="Image">
															United Kingdom 
														</a>
													</li>
													<li class="flag-item">
														<a href="#" class="flag-link">
															<img src="assets/img/flag/3-germany.png" alt="Image">
															Germany
														</a>
													</li>
													<li class="flag-item">
														<a href="#" class="flag-link">
															<img src="assets/img/flag/4-argentina.png" alt="Image">
															Argentina
														</a>
													</li>
													<li class="flag-item">
														<a href="#" class="flag-link">
															<img src="assets/img/flag/5-australia.png" alt="Image">
															Australia
														</a>
													</li>
													<li class="flag-item">
														<a href="#" class="flag-link">
															<img src="assets/img/flag/7-canada.png" alt="Image">
															Canada
														</a>
													</li>
													<li class="flag-item">
														<a href="#" class="flag-link">
															<img src="assets/img/flag/6-new-zealand.png" alt="Image">
															New Zealand
														</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Top Header Area -->

									<!-- Start Prevoz Navbar Area -->
			<div class="prevoz-nav-style">
				<div class="navbar-area">
					<!-- Menu For Mobile Device -->
					<div class="mobile-nav">
						<a href="index.php" class="logo">
							<img src="assets/img/logo/cargojiji.svg" alt="Logo" style="width: 70px">
						</a>
					</div>
					<!-- Menu For Desktop Device -->
					<div class="main-nav">
						<nav class="navbar navbar-expand-md navbar-light">
							<div class="container">
								<a class="navbar-brand" href="index.php">
									<img src="assets/img/logo/logo-two.png" alt="Logo">
								</a>
								<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
									<ul class="navbar-nav mr-auto">
										<li class="nav-item">
										    <a href="index.php" class="nav-link dropdown-toggle active">
												Home
											</a><!----
											<ul class="dropdown-menu">
												<li class="nav-item">
													<a href="index.php" class="nav-link">Home One</a>
												</li>
												<li class="nav-item">
													<a href="index-2.html" class="nav-link active">Home Two</a>
												</li>
												<li class="nav-item">
													<a href="index-3.html" class="nav-link">Home Three</a>
												</li>
												<li class="nav-item">
													<a href="index-4.html" class="nav-link">Home Four</a>
												</li>
												<li class="nav-item">
													<a href="index-5.html" class="nav-link">Home Five</a>
												</li>
											</ul>-->
										</li>
										<li class="nav-item">
											<a href="about.php" class="nav-link dropdown-toggle">
												About Us
											</a>
											
										</li><!--
										<li class="nav-item">
											<a href="#" class="nav-link dropdown-toggle">
												Company
												<i class='bx bx-chevron-down'></i>
											</a>
											<ul class="dropdown-menu">
												<li class="nav-item">
													<a href="company-history.html" class="nav-link">Company History</a>
												</li>
												<li class="nav-item">
													<a href="company-clients.html" class="nav-link">Company Clients</a>
												</li>
												<li class="nav-item">
													<a href="careers.html" class="nav-link">Careers</a>
												</li>
											</ul>
										</li>-->
										<li class="nav-item">
											<a href="services.php" class="nav-link dropdown-toggle">
												Services
											</a><!--
											<ul class="dropdown-menu">
												<li class="nav-item">
													<a href="services.html" class="nav-link">Services</a>
												</li>
												<li class="nav-item">
													<a href="road-transport.html" class="nav-link">Road Transport</a>
												</li>
												<li class="nav-item">
													<a href="air-transport.html" class="nav-link">Air  Transport</a>
												</li>
												<li class="nav-item">
													<a href="service-details.php" class="nav-link">Service Details</a>
												</li>
											</ul>-->
										</li><!--
										<li class="nav-item">
											<a href="#" class="nav-link dropdown-toggle">
												News
												<i class='bx bx-chevron-down'></i>
											</a>
											<ul class="dropdown-menu">
												<li class="nav-item">
													<a href="news-grid.html" class="nav-link">News Grid</a>
												</li>
												<li class="nav-item">
													<a href="news-full-width.html" class="nav-link">News Full width</a>
												</li>
												<li class="nav-item">
													<a href="news-left-sidebar.html" class="nav-link">News Left Sidebar</a>
												</li>
												<li class="nav-item">
													<a href="news-right-sidebar.html" class="nav-link">News Right Sidebar</a>
												</li>
												<li class="nav-item">
													<a href="news-details.html" class="nav-link">News Details</a>
												</li>
											</ul>
										</li>-->
											<li class="nav-item">
											<a href="makepayment.php" class="nav-link dropdown-toggle">
											Make Payment	
												
											</a>
										</li>
										<li class="nav-item">
											<a href="track.php" class="nav-link dropdown-toggle">
												Track Parcel
												
											</a>
										</li>
										<li class="nav-item">
											<a href="contact.php" class="nav-link">Contact</a>
										</li>
									</ul>
									<!-- Start Other Option -->
									<div class="others-option">
										<div class="search-wrap">
											<a href="#">
												<i class='bx bx-search'></i>
											</a>
										</div>
										<button type="button" class="sidebar-menu" data-toggle="modal" data-target="#myModal2">
											<i class="flaticon-menu"></i>
										</button>
									</div>
									<!-- End Other Option -->
								</div>
							</div>
						</nav>
					</div>
				</div>
			</div>
			<!-- End Prevoz Navbar Area -->
		</header>
		<!-- End Header Area -->



		<!-- Start Tracking Number Area -->
		<div class="tracking-number-area fun-blue-bg ptb-100">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 col-md-4">
						<div class="tracking-logo">
							<img src="assets/img/tracking-logo.png" alt="Image">
						</div>
					</div>
					<div class="col-lg-6 col-md-8">
						<div class="tracking-body">
							<form class="tracking-wrap" action="track.php" method="POST">
								<input type="text" class="input-tracking" placeholder="Type your tracking number" name="tid">
								
								<button class="default-btn active" type="submit" name="submit">Track Now</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Tracking Number Area -->

		<!-- Start Regional offices  Area -->
		<section class="office-map-area ptb-100">
			<div class="container">
				<div class="location-wrap">
					<div class="map-location">
						<h3><i class="flaticon-planet-earth"></i> Regional Offices</h3>
						<ul>
							<li class="color">United Kingdom</li>
							<li>New York - 1060, Str. First 78 <br>  Great Western Road</li>
							<li>+1(234)567-890  <br> support@yourdomain.com </li>
							<li>Mon - Fri: 9:00 - 19:00 <br> Closed on Saturday</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!-- End Regional offices Area -->


		<!-- Start Footer Bottom Area -->
		<footer class="footer-bottom-area fun-blue-bg">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-5">
						<div class="single-widget-bottom">
							<ul>
								<li>
									<a href="#">Terms & Conditions</a>
								</li>
								<li>
									<a href="#">Privacy &Policy</a>
								</li>
								<li>
									<a href="#">Employee login</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="single-widget-bottom">
							<p>Copyright <i class="bx bx-copyright"></i> 2024 <a href="index.php">Cargojiji</a></p>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="single-widget-bottom">
							<ul class="social-link">
								<li>
									<a href="#">
										<i class='bx bxl-twitter'></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class='bx bxl-facebook'></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class='bx bxl-instagram'></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class='bx bxl-linkedin'></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class='bx bxl-youtube'></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- End Footer Bottom Area -->

		<!-- Start Go Top Area -->
		<div class="go-top">
			<i class='bx bx-chevrons-up bx-fade-up'></i>
			<i class='bx bx-chevrons-up bx-fade-up'></i>
		</div>
		<!-- End Go Top Area --> 

        
        <!-- Jquery Slim JS -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="assets/js/popper.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Meanmenu JS -->
		<script src="assets/js/jquery.meanmenu.js"></script>
        <!-- Wow JS -->
        <script src="assets/js/wow.min.js"></script>
        <!-- Owl Carousel JS -->
		<script src="assets/js/owl.carousel.js"></script>
        <!-- Owl Magnific JS -->
		<script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Nice Select JS -->
		<script src="assets/js/jquery.nice-select.min.js"></script>
		<!-- Appear JS --> 
        <script src="assets/js/jquery.appear.js"></script>
		<!-- Odometer JS --> 
		<script src="assets/js/odometer.min.js"></script>
		<!-- Parallax JS --> 
        <script src="assets/js/parallax.min.js"></script>
		<!-- Form Ajaxchimp JS -->
		<script src="assets/js/jquery.ajaxchimp.min.js"></script>
		<!-- Form Validator JS -->
		<script src="assets/js/form-validator.min.js"></script>
		<!-- Contact JS -->
		<script src="assets/js/contact-form-script.js"></script>
		<script src="assets/js/bootstrapjsmin.js"></script>
		<!-- Map JS FILE -->
        <script src="assets/js/map.js"></script>
        <!-- Custom JS -->
		<script src="assets/js/custom.js"></script>
    </body>


</php>