<?php
include 'includes/dbconnection.php';
$conn = OpenCon();

if(isset($_GET)) {
    $id = mysqli_real_escape_string($conn,intval($_GET['id']));
}else{
    $id = 1;
}
?>
<!doctype html>
<html lang="zxx" class="theme-light">
	
<!-- Mirrored from templates.envytheme.com/startp/default/single-project.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Mar 2022 19:43:05 GMT -->
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
                        <h2>Project Details</h2>
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
        
        <!-- Start Project Details Area -->
		<div class="project-details-area ptb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="project-details-image">
                            <img src="assets/img/projects/detail/customers.PNG" alt="work">

                            <a href="assets/img/projects/detail/customers.PNG" class="popup-btn"><i data-feather="plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="project-details-image">
                            <img src="assets/img/projects/detail/reception.PNG" alt="work">

                            <a href="assets/img/projects/detail/reception.PNG" class="popup-btn"><i data-feather="plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="project-details-image">
                            <img src="assets/img/projects/detail/doctor.PNG" alt="work">

                            <a href="assets/img/projects/detail/doctor.PNG" class="popup-btn"><i data-feather="plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="project-details-image">
                            <img src="assets/img/projects/detail/history.PNG" alt="work">

                            <a href="assets/img/projects/detail/history.PNG" class="popup-btn"><i data-feather="plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="project-details-desc">
                            <h3>Appointment System</h3>
							
                            <p>azerp - is our appointment system built in 2020. The appointment system is designed for needs of medical doctors to manager their customer appointments through the web app. Thus, all the records of each customer stored in our database and can be accessed any time. Additional features can be implemented depending on user needs (such as different reports).
                            </p>
                            <p>
                                The main purpose of the app is easing the customer management for hospitals, private doctors, and private businesses or individual. System is scalable and can manage up to 10 million users monthly
                            </p>

                            <p></p>

                            <div class="project-details-information">
                                <div class="single-info-box">
                                    <h4>Share</h4>
                                    <ul>
                                        <li><a href="#" target="_blank"><i data-feather="facebook"></i></a></li>
                                        <li><a href="#" target="_blank"><i data-feather="twitter"></i></a></li>
                                        <li><a href="#"><i data-feather="instagram"></i></a></li>
                                        <li><a href="#" target="_blank"><i data-feather="linkedin"></i></a></li>
                                    </ul>
<!--                                    <h4>Happy Client</h4>-->
<!--                                    <p>John Doe</p>-->
                                </div>

                                <div class="single-info-box">
<!--                                    <h4>Category</h4>-->
<!--                                    <p>Portfolio, Personal</p>-->
                                </div>

                                <div class="single-info-box">
<!--                                    <h4>Date</h4>-->
<!--                                    <p>February 28, 2019</p>-->
                                </div>

                                <div class="single-info-box">

                                </div>

                                <div class="single-info-box">
                                    <a href="https://azerp.tech/" class="btn btn-primary">Live Preview</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- End Project Details Area -->

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

<!-- Mirrored from templates.envytheme.com/startp/default/single-project.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Mar 2022 19:43:05 GMT -->
</html>