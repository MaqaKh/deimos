<!doctype html>
<html lang="zxx" class="theme-light">
<?php
include 'includes/dbconnection.php';
$conn = OpenCon();
//echo "Connected Successfully";
//
$rows = $conn->query("SELECT * FROM blog ORDER BY ID LIMIT 100");
//$rows = $result->fetch_assoc();

?>
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
		
		<title>Deimos - Web design agency</title>

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
                        <h2>Blog Grid</h2>
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
        
        <!-- Start Blog Area -->
		<div class="blog-area ptb-80">
			<div class="container">
				<div class="row">

                    <?php
                    foreach ( $rows as $row) {?>

					<div class="col-lg-4 col-md-6">
						<div class="single-blog-post">
							<div class="blog-image">
								<a href="blog-detail.php?id=<?php echo $row['id']; ?>">
									<img src="assets/img/blog/<?php echo $row['image']; ?>" alt="image">
								</a>

								<div class="date">
									<i data-feather="calendar"></i> <?php echo date('F j, H:i',strtotime($row['date'])); ?>
								</div>
							</div>

							<div class="blog-post-content">
								<h3><a href="blog-detail.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></h3>

								<span>by <a href="blog-detail.php?id=<?php echo $row['id']; ?>"><?php echo $row['author']; ?></a></span>

								<p> <?php echo $row['short_text']; ?></p>

								<a href="blog-detail.php?id=<?php echo $row['id']; ?>" class="read-more-btn">Read More <i data-feather="arrow-right"></i> </a>
							</div>
						</div>
					</div>

                        <?php
                    }
                    ?>
<!--					<div class="col-lg-12 col-md-12">-->
<!--						<div class="pagination-area">-->
<!--							<nav aria-label="Page navigation">-->
<!--								<ul class="pagination justify-content-center">-->
<!--								   -->
<!--									<li class="page-item"><a class="page-link" href="blog-1.html">Prev</a></li>-->
<!--									-->
<!--									<li class="page-item active"><a class="page-link" href="blog-1.html">1</a></li>-->
<!--									-->
<!--									<li class="page-item"><a class="page-link" href="blog-1.html">2</a></li>-->
<!--									-->
<!--									<li class="page-item"><a class="page-link" href="blog-1.html">3</a></li>-->
<!--									-->
<!--									<li class="page-item"><a class="page-link" href="blog-1.html">Next</a></li>-->
<!--								</ul>-->
<!--							</nav>-->
<!--						</div>-->
<!--					</div>-->
				</div>
			</div>
		</div>
		<!-- End Blog Area -->

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

<!-- Mirrored from templates.envytheme.com/startp/default/blog-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Mar 2022 19:43:14 GMT -->
</html>