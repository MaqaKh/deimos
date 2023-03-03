<?php
include 'includes/dbconnection.php';
$conn = OpenCon();

if(isset($_GET)) {
    $id = mysqli_real_escape_string($conn,intval($_GET['id']));
}else{
    $id = 1;
}


$querySingleApartment = "SELECT * FROM service where ID = '$id' LIMIT 1";
$result = $conn->query($querySingleApartment);
$row = $result->fetch_array(MYSQLI_ASSOC);


?>

<!doctype html>
<html lang="zxx" class="theme-light">

<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- All CSS Link -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <link rel="stylesheet" href="assets/css/boxicons.min.css">
		<link rel="stylesheet" href="assets/css/magnific-popup.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/flaticon.css">
		<link rel="stylesheet" href="assets/css/odometer.min.css">
		<link rel="stylesheet" href="assets/css/slick.min.css">
		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/css/responsive.css">
		<link rel="stylesheet" href="assets/css/dark-color/dark-style.css">
		
		<title>Deimos</title>

    <link rel="icon" type="image/png" href="images/flat-icon.png">
	</head>
	
	<body>
		
		<!-- Start Preloader Area -->
        <div class="preloader">
			<div class="spinner"></div>
		</div>
        <!-- End Preloader Area -->

		<!-- Start Navbar Area -->
		<?php include_once("includes/header.php"); ?>
		<!-- End Navbar Area -->

        <!-- Start Page Title -->
        <div class="page-title-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <h2>Services Details</h2>
                    </div>
                </div>
			</div>
			
			<div class="shape1"><img src="assets/img/shape1.png" alt="shape"></div>
			<div class="shape2 rotateme"><img src="assets/img/shape2.svg" alt="shape"></div>
			<div class="shape3"><img src="assets/img/shape3.svg" alt="shape"></div>
			<div class="shape4"><img src="assets/img/shape4.svg" alt="shape"></div>
			<div class="shape5"><img src="assets/img/shape5.png" alt="shape"></div>
			<div class="shape6 rotateme"><img src="assets/img/shape4.svg" alt="shape"></div>
			<div class="shape7"><img src="assets/img/shape4.svg" alt="shape"></div>
			<div class="shape8 rotateme"><img src="assets/img/shape2.svg" alt="shape"></div>
        </div>
        <!-- End Page Title -->
        
		<!-- Start Cloud Hosting Services -->
		<div class="services-area ptb-80 bg-f7fafd">
			<div class="container">
				<div class="row h-100 justify-content-center align-items-center">
					<div class="col-lg-6 col-md-12 services-content">
						<div class="section-title">
							<h2>  <?php echo $row['intro'];?>
                            </h2>
							<div class="bar"></div>
							<p><?php echo $row['first_paragraph'];?></p>
						</div>

						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6">
								<div class="box">
									<i data-feather="database"></i> <?php echo $row['first_title'];?>
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-6">
								<div class="box">
									<i data-feather="globe"></i> <?php echo $row['second_title'];?>
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-6">
								<div class="box">
									<i data-feather="file"></i> <?php echo $row['third_title'];?>
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-6">
								<div class="box">
									<i data-feather="trending-up"></i> <?php echo $row['fourth_title'];?>
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-6">
								<div class="box">
									<i data-feather="folder"></i> <?php echo $row['fifth_title'];?>
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-6">
								<div class="box">
									<i data-feather="monitor"></i> <?php echo $row['sixth_title'];?>
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-6">
								<div class="box">
									<i data-feather="mail"></i> <?php echo $row['seventh_title'];?>
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-6">
								<div class="box">
									<i data-feather="cloud"></i> <?php echo $row['eight_title'];?>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-12 services-right-image">
						<img src="assets/img/services-right-image/book-self.png" class="wow fadeInDown" data-wow-delay="0.6s" alt="book-self">
						<img src="assets/img/services-right-image/box.png" class="wow fadeInUp" data-wow-delay="0.6s" alt="box">
						<img src="assets/img/services-right-image/chair.png" class="wow fadeInLeft" data-wow-delay="0.6s" alt="chair">
						<img src="assets/img/services-right-image/cloud.png" class="wow zoomIn" data-wow-delay="0.6s" alt="cloud">
						<img src="assets/img/services-right-image/cup.png" class="wow bounceIn" data-wow-delay="0.6s" alt="cup">
						<img src="assets/img/services-right-image/flower-top.png" class="wow fadeInDown" data-wow-delay="0.6s" alt="flower">
						<img src="assets/img/services-right-image/head-phone.png" class="wow zoomIn" data-wow-delay="0.6s" alt="head-phone">
						<img src="assets/img/services-right-image/monitor.png" class="wow fadeInUp" data-wow-delay="0.6s" alt="monitor">
						<img src="assets/img/services-right-image/mug.png" class="wow rotateIn" data-wow-delay="0.6s" alt="mug">
						<img src="assets/img/services-right-image/table.png" class="wow fadeInUp" data-wow-delay="0.6s" alt="table">
						<img src="assets/img/services-right-image/tissue.png" class="wow zoomIn" data-wow-delay="0.6s" alt="tissue">
						<img src="assets/img/services-right-image/water-bottle.png" class="wow zoomIn" data-wow-delay="0.6s" alt="water-bottle">
						<img src="assets/img/services-right-image/wifi.png" class="wow fadeInLeft" data-wow-delay="0.6s" alt="wifi">
						<img src="assets/img/services-right-image/cercle-shape.png" class="bg-image rotateme" alt="shape">
						
						<img src="assets/img/services-right-image/main-pic.png" class="wow fadeInUp" data-wow-delay="0.6s" alt="main-pic">
					</div>
				</div>
			</div>
		</div>
		<!-- End Cloud Hosting Services -->

		<!-- Start Design & Development Services -->
<!--		<div class="services-area ptb-80">-->
<!--			<div class="container">-->
<!--				<div class="row h-100 justify-content-center align-items-center">-->
<!--					<div class="col-lg-6 col-md-12 services-left-image">-->
<!--						<img src="assets/img/services-left-image/big-monitor.png" class="wow fadeInDown" data-wow-delay="0.6s" alt="big-monitor">-->
<!--						<img src="assets/img/services-left-image/creative.png" class="wow fadeInUp" data-wow-delay="0.6s" alt="creative">-->
<!--						<img src="assets/img/services-left-image/developer.png" class="wow fadeInLeft" data-wow-delay="0.6s" alt="developer">-->
<!--						<img src="assets/img/services-left-image/flower-top.png" class="wow zoomIn" data-wow-delay="0.6s" alt="flower-top">-->
<!--						<img src="assets/img/services-left-image/small-monitor.png" class="wow bounceIn" data-wow-delay="0.6s" alt="small-monitor">-->
<!--						<img src="assets/img/services-left-image/small-top.png" class="wow fadeInDown" data-wow-delay="0.6s" alt="small-top">-->
<!--						<img src="assets/img/services-left-image/table.png" class="wow zoomIn" data-wow-delay="0.6s" alt="table">-->
<!--						<img src="assets/img/services-left-image/target.png" class="wow fadeInUp" data-wow-delay="0.6s" alt="target">-->
<!--						<img src="assets/img/services-left-image/cercle-shape.png" class="bg-image rotateme" alt="shape">-->
<!---->
<!--						<img src="assets/img/services-left-image/main-pic.png" class="wow fadeInUp" data-wow-delay="0.6s" alt="main-pic">-->
<!--					</div>-->
<!---->
<!--					<div class="col-lg-6 col-md-12 services-content">-->
<!--						<div class="section-title">-->
<!--							<h2>Design & Development</h2>-->
<!--							<div class="bar"></div>-->
<!--							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
<!--						</div>-->
<!---->
<!--						<div class="row">-->
<!--							<div class="col-lg-6 col-md-6 col-sm-6">-->
<!--								<div class="box">-->
<!--									<i data-feather="layout"></i> Responsive design-->
<!--								</div>-->
<!--							</div>-->
<!---->
<!--							<div class="col-lg-6 col-md-6 col-sm-6">-->
<!--								<div class="box">-->
<!--									<i data-feather="code"></i> React web development-->
<!--								</div>-->
<!--							</div>-->
<!---->
<!--							<div class="col-lg-6 col-md-6 col-sm-6">-->
<!--								<div class="box">-->
<!--									<i data-feather="smartphone"></i> Android apps development-->
<!--								</div>-->
<!--							</div>-->
<!---->
<!--							<div class="col-lg-6 col-md-6 col-sm-6">-->
<!--								<div class="box">-->
<!--									<i data-feather="code"></i> Laravel web development-->
<!--								</div>-->
<!--							</div>-->
<!---->
<!--							<div class="col-lg-6 col-md-6 col-sm-6">-->
<!--								<div class="box">-->
<!--									<i data-feather="smartphone"></i> iOS apps development-->
<!--								</div>-->
<!--							</div>-->
<!---->
<!--							<div class="col-lg-6 col-md-6 col-sm-6">-->
<!--								<div class="box">-->
<!--									<i data-feather="pen-tool"></i> UX/UI design-->
<!--								</div>-->
<!--							</div>-->
<!---->
<!--							<div class="col-lg-6 col-md-6 col-sm-6">-->
<!--								<div class="box">-->
<!--									<i data-feather="shopping-cart"></i> E-commerce development-->
<!--								</div>-->
<!--							</div>-->
<!---->
<!--							<div class="col-lg-6 col-md-6 col-sm-6">-->
<!--								<div class="box">-->
<!--									<i data-feather="check-circle"></i> Print ready design-->
<!--								</div>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
		<!--     End Design & Development Services -->
<!-- lets make together -->
<div class="ptb-100">
        <div class="jsx-1341207469 overview-area">
            <div class="jsx-1341207469 container">
                <div class="jsx-1341207469 overview-box">
                    <div class="jsx-1341207469 overview-content">
                        <h3 class="jsx-1341207469">Let's Make Something Amazing Together</h3>
                        <div class="jsx-1341207469 overview-btn">
                            <a class="jsx-1341207469 overview-btn-one" href="contact.php">Get Started</a>
                            <img src="assets/img/bar.png" alt="image" class="jsx-1341207469">
                        </div>
                    </div>
                </div>
            </div>
            <div class="jsx-1341207469 overview-shape-1">
                <img src="assets/img/shape-1.png" alt="image" class="jsx-1341207469">
            </div>
            <div class="jsx-1341207469 overview-shape-2">
                <img src="assets/img/shape-2.png" alt="image" class="jsx-1341207469">
            </div>
            <div class="jsx-1341207469 overview-shape-3">
                <img src="assets/img/shape-3.png" alt="image" class="jsx-1341207469">
            </div>
            <div class="jsx-1341207469 overview-shape-4">
                <img src="assets/img/shape-4.png" alt="image" class="jsx-1341207469">
            </div>
            <div class="jsx-1341207469 overview-shape-5">
                <img src="assets/img/shape-5.png" alt="image" class="jsx-1341207469">
            </div>
        </div>
    </div>
    <!-- end lets make together -->

		<!-- Start Footer Area -->
		<?php
            include 'includes/footer.php';
        ?>
		<!-- End Footer Area -->

		<div class="go-top"><i data-feather="arrow-up"></i></div>

		<!-- Dark/Light Toggle -->
		<div class="dark-version">
            <label id="switch" class="switch">
                <input type="checkbox" onchange="toggleTheme()" id="slider">
                <span class="slider round"></span>
            </label>
        </div>
		
		<!-- All JS Link -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/bootstrap.bundle.min.js"></script>
		<script src="assets/js/meanmenu.min.js"></script>
		<script src="assets/js/wow.min.js"></script>
		<script src="assets/js/magnific-popup.min.js"></script>
		<script src="assets/js/appear.min.js"></script>
		<script src="assets/js/odometer.min.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
		<script src="assets/js/feather.min.js"></script>
        <script src="assets/js/form-validator.min.js"></script>
        <script src="assets/js/contact-form-script.js"></script>
		<script src="assets/js/main.js"></script>
	</body>

<!-- Mirrored from templates.envytheme.com/startp/default/single-services.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Mar 2022 19:43:03 GMT -->
</html>