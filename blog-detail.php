<?php
include 'includes/dbconnection.php';
$conn = OpenCon();

if(isset($_GET)) {
    $id = mysqli_real_escape_string($conn,intval($_GET['id']));
}else{
    $id = 1;
}


$querySingleApartment = "SELECT * FROM blog where ID = '$id' LIMIT 1";
$result = $conn->query($querySingleApartment);
$row = $result->fetch_array(MYSQLI_ASSOC);


?>

<!doctype html>
<html lang="zxx" class="theme-light">

<!-- Mirrored from templates.envytheme.com/startp/default/single-blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Mar 2022 19:43:16 GMT -->
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

    <title>StartP - IT Startup & Digital Services HTML Template</title>

    <link rel="icon" type="image/png" href="assets/img/favicon.png">
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
                <h2>Blog Details</h2>
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

<!-- Start Blog Details Area -->
<div class="blog-details-area ptb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="blog-details-desc">

                    <div class="article-content">

                        <?php echo $row['text'];?>

                    </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
</div>
</div>
<!-- End Blog Details Area -->

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

<!-- Mirrored from templates.envytheme.com/startp/default/single-blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Mar 2022 19:43:16 GMT -->
</html>