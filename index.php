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
    <meta name="description" content="Looking for expert IT solutions? Our consulting company offers top-notch services to streamline your business operations. From software development to cybersecurity, we've got you covered. Contact us today for a consultation!">
    <meta name="google-site-verification" content="07QrfSMNj3OvAW6r36hmKRZQyMIEkl-oS8Xnl4_JmrM"/>

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
    <title>Revolutionize Your Business with Deimos: Innovative Software Solutions</title>
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

    <div class="agency-portfolio-main-banner portfolio-banner-bg2">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="portfolio-banner-content">
                        <span class="sub-title">We are Digital</span>
                        <h1>Software Solutions</h1>
                        <p>We are focused on delivering Software Solutions</p>
                        <a href="contact.php" class="btn btn-secondary">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="agency-portfolio-main-banner portfolio-banner-bg1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="portfolio-banner-content">
                        <span class="sub-title">We are Creative</span>
                        <h1>Software Company</h1>
                        <p>We are deliving different types of software to wide wiriety of clients</p>
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
                        <span class="sub-title">We are Agency</span>
                        <h1>Digital Marketing</h1>
                        <p>Do you want to carry your brand into the future? Connect and let's go!</p>
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
                    <p>We build Single Page Web applications and also large websites including different components</p>
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
                    <p>Find engineers that could help architect and build your next project. We outsource best engineers in our country</p>
                    <a href="service-detail.php?id=6"><i data-feather="arrow-right"></i></a>
                </div>
            </div>
        </div>

    </div>

</div>


<div class="iot-why-choose-us ptb-80 pb-0">

    <div class="container">

        <div class="section-title">

            <h2>Our Core Approach</h2>

            <div class="bar"></div>

            <p>We help you in all the stages of the realization of your digital project: strategy, design, web
                development, communication and seo.</p>

        </div>


        <div class="row">

            <div class="col-lg-4 col-md-6 col-sm-6">

                <div class="single-iot-box">

                    <div class="icon">

                        <img src="assets/img/icon1.png" alt="image">

                    </div>

                    <h3>Digital Technology</h3>

                    <p> We aim to help you to differentiate yourself by making your project more visible and
                        powerful.</p>

                    <a href="#"><i data-feather="arrow-right"></i></a>

                </div>

            </div>


            <div class="col-lg-4 col-md-6 col-sm-6">

                <div class="single-iot-box">

                    <div class="icon">

                        <img src="assets/img/icon2.png" alt="image">

                    </div>

                    <h3>Business Protection</h3>

                    <p>We follow the latest security guidelines of OWASP. Ensuring business security is our top
                        priority</p>

                    <a href="#"><i data-feather="arrow-right"></i></a>

                </div>

            </div>


            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">

                <div class="single-iot-box">

                    <div class="icon">

                        <img src="assets/img/icon3.png" alt="image">

                    </div>

                    <h3>Data Analysis</h3>

                    <p>We provide different reporting based on business needs. We are using up-to-date monitoring tools
                        for enterprise software</p>

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