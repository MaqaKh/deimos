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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="icon" type="image/png" href="images/flat-icon.png">
</head>

<body>

<div class="preloader">
    <div class="spinner"></div>
</div>

<?php include_once("includes/header.php"); ?>

<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <h2><?php echo $lang['contact']; ?></h2>
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

<!-- Start Contact Info Area -->
<div class="contact-info-area ptb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="contact-info-box">
                    <div class="icon">
                        <i data-feather="mail"></i>
                    </div>
                    <h3><?php echo $lang['e-mail']; ?></h3>
                    <p><a href="mailto:info@deimos.az">info@deimos.az</a></p>
                    <p><a href="mailto:info@deimos.az">support@deimos.az</a></p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="contact-info-box">
                    <div class="icon">
                        <i data-feather="map-pin"></i>
                    </div>
                    <h3><?php echo $lang['office']; ?></h3>
                    <p><?php echo $lang['address']; ?></p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                <div class="contact-info-box">
                    <div class="icon">
                        <i data-feather="phone"></i>
                    </div>
                    <h3><?php echo $lang['tel']; ?></h3>
                    <p><a href="#">+994 50 616 48 12</a></p>
                    <p><a href="#">+36 20 613 7021</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Start Contact Area -->
<div class="contact-area ptb-80">
    <div class="container">
        <div class="section-title">
            <h2><?php echo $lang['get-in-touch']; ?></h2>
            <div class="bar"></div>
            <p>Anything On your Mind. We’ll Be Glad To Assist You!</p>
        </div>

        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-lg-6 col-md-12">
                <img src="assets/img/1.png" alt="image">
            </div>

            <div class="col-lg-6 col-md-12">
                <form id="contactForm">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="form-control" required
                                       data-error="Please enter your name" placeholder="<?php echo $lang["name"]; ?>">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" required
                                       data-error="Please enter your email"
                                       placeholder="<?php echo $lang["e-mail"]; ?>">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-6">
                            <div class="form-group">
                                <input type="text" name="phone" id="phone_number" required
                                       data-error="Please enter your number" class="form-control"
                                       placeholder="<?php echo $lang["tel"]; ?>">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-6">
                            <div class="form-group">
                                <input type="text" name="subject" id="msg_subject" class="form-control" required
                                       data-error="Please enter your subject"
                                       placeholder="<?php echo $lang["subject"]; ?>">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <textarea name="message" class="form-control" id="message" cols="30" rows="5" required
                                          data-error="Write your message"
                                          placeholder="<?php echo $lang["message"]; ?>"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="btn btn-primary"><?php echo $lang["send"]; ?></button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
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

<script>
    $(document).ready(function() {
        $('#contactForm').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'includes/send-mail.php',
                data: $('#myForm').serialize(),
                success: function(data) {
                    alert('Email sent successfully!');
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        });
    });

</script>

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

<!-- Mirrored from templates.envytheme.com/startp/default/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Mar 2022 19:43:16 GMT -->
</html>