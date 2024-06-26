<?php

include 'includes/dbconnection.php';

$conn = OpenCon();
$rows = $conn->query("SELECT * FROM blog ORDER BY ID LIMIT 3");

?>

<!doctype html>

<html lang="zxx" class="theme-light">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
          content="Looking for expert Software Solutions? Our consulting company offers top-notch services to streamline your business operations. Contact us today for a consultation!">
    <title>Revolutionize Your Business with Deimos: Innovative Software Solutions</title>
    <meta name="google-site-verification" content="07QrfSMNj3OvAW6r36hmKRZQyMIEkl-oS8Xnl4_JmrM"/>
    <meta content="Deimos, deimos, consulting, software, web, software services, website, website design, web development,
application, application development, information technology" name="keywords">

    <meta content="/images/website-og.png" property="og:image">
    <meta content="2500" property="og:image:width">
    <meta content="2305" property="og:image:height">
    <meta content="http://www.deimos.az" property="og:url">
    <meta content="DEIMOS" property="og:site_name">
    <meta content="website" property="og:type">
    <meta content="summary_large_image" name="twitter:card">
    <meta content="Deimos" name="twitter:title">
    <meta content="Looking for expert Software Solutions? Our consulting company offers top-notch services to streamline your business operations. Contact us today for a consultation!"
          name="twitter:description">
    <meta content="/assets/images/web/website-og.png" name="twitter:image">

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
    <link rel="icon" type="image/png" href="images/flat-icon.png">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-RPVGY4SWJQ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-RPVGY4SWJQ');
    </script>

    <!-- End Google Tag Manager -->

</head>


<body>
<div class="preloader">

    <div class="spinner"></div>

</div>
<?php include_once("includes/header.php"); ?>

<div class="agency-portfolio-home-slides owl-carousel owl-theme">


    <div class="agency-portfolio-main-banner portfolio-banner-bg1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="portfolio-banner-content">
                        <span class="sub-title"><?php echo $lang["slider-span"]; ?></span>
                        <h1><?php echo $lang["slider-h1"]; ?></h1>
                        <p><?php echo $lang["slider-p"]; ?></p>
                        <a href="contact.php" class="btn btn-secondary">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="agency-portfolio-main-banner portfolio-banner-bg3">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="portfolio-banner-content">
                        <span class="sub-title"><?php echo $lang["slider-span-2"]; ?></span>
                        <h1><?php echo $lang["slider-h1-2"]; ?></h1>
                        <p><?php echo $lang["slider-p-2"]; ?></p>
                        <a href="contact.php" class="btn btn-secondary">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="iot-services-area ptb-80">
    <div class="container">
        <div class="section-title">

            <h2><?php echo $lang["service-head"]; ?></h2>

            <div class="bar"></div>

            <p><?php echo $lang["service-desc"]; ?></p>

        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-iot-services">
                    <div class="icon">
                        <i class="flaticon-idea"></i>
                    </div>
                    <h3><?php echo $lang['web-development']; ?><br></h3>
                    <p><?php echo $lang['web-development-p']; ?></p>
                    <a href="service-detail.php?id=1"><i data-feather="arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-iot-services">
                    <div class="icon">
                        <i class="flaticon-dashboard"></i>
                    </div>
                    <h3><?php echo $lang['digital-marketing']; ?><br></h3>
                    <p><?php echo $lang['digital-marketing-p']; ?></p>
                    <a href="service-detail.php?id=2"><i data-feather="arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-iot-services">
                    <div class="icon">
                        <i class="flaticon-software"></i>
                    </div>
                    <h3><?php echo $lang['graphic-design']; ?> <br></h3>
                    <p><?php echo $lang['graphic-design-p']; ?></p>
                    <a href="service-detail.php?id=3"><i data-feather="arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-iot-services">
                    <div class="icon">
                        <i class="flaticon-hard-disk"></i>
                    </div>
                    <h3><?php echo $lang['it-support']; ?> <br></h3>
                    <p><?php echo $lang['it-support-p']; ?> </p>
                    <a href="service-detail.php?id=4"><i data-feather="arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-iot-services">
                    <div class="icon">
                        <i class="flaticon-laptop"></i>
                    </div>
                    <h3><?php echo $lang['seo-content']; ?> <br></h3>
                    <p><?php echo $lang['seo-content-p']; ?></p>
                    <a href="service-detail.php?id=5"><i data-feather="arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-iot-services">
                    <div class="icon">
                        <i class="flaticon-smartphone"></i>
                    </div>
                    <h3><?php echo $lang['software-eng']; ?><br></h3>
                    <p><?php echo $lang['software-eng-p']; ?></p>
                    <a href="service-detail.php?id=6"><i data-feather="arrow-right"></i></a>
                </div>
            </div>
        </div>

    </div>

</div>


<div class="iot-why-choose-us ptb-80 pb-0">

    <div class="container">

        <div class="section-title">
            <h2><?php echo $lang['core-approach']; ?> </h2>
            <div class="bar"></div>
            <p><?php echo $lang['core-approach-p']; ?> </p>
        </div>


        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-iot-box">
                    <div class="icon">
                        <img src="assets/img/icon1.png" alt="image">
                    </div>

                    <h3><?php echo $lang['digital-tech']; ?> </h3>

                    <p> <?php echo $lang['digital-tech-p']; ?> </p>

                    <a href="#"><i data-feather="arrow-right"></i></a>

                </div>

            </div>


            <div class="col-lg-4 col-md-6 col-sm-6">

                <div class="single-iot-box">

                    <div class="icon">

                        <img src="assets/img/icon2.png" alt="image">

                    </div>

                    <h3><?php echo $lang['business-protection']; ?> </h3>

                    <p><?php echo $lang['business-protection-p']; ?> </p>

                    <a href="#"><i data-feather="arrow-right"></i></a>

                </div>

            </div>


            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">

                <div class="single-iot-box">

                    <div class="icon">

                        <img src="assets/img/icon3.png" alt="image">

                    </div>

                    <h3><?php echo $lang['data-analysis']; ?> </h3>

                    <p><?php echo $lang['data-analysis-p']; ?> </p>

                    <a href="#"><i data-feather="arrow-right"></i></a>

                </div>

            </div>

        </div>

    </div>

</div>

</div>

</div>

</div>

<div class="ptb-100">

    <div class="jsx-1341207469 overview-area">

        <div class="jsx-1341207469 container">

            <div class="jsx-1341207469 overview-box">

                <div class="jsx-1341207469 overview-content">

                    <h3 class="jsx-1341207469"><?php echo $lang["lets-make-great-things"]; ?></h3>

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
<?php

include 'includes/footer.php';

?>

<div class="go-top"><i data-feather="arrow-up"></i></div>

<div class="dark-version">

    <label id="switch" class="switch">

        <input type="checkbox" onchange="toggleTheme()" id="slider">

        <span class="slider round"></span>

    </label>

</div>

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


</html>