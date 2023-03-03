<?php
include 'general-config.php';

?>
<!-- Start Navbar Area -->
<header id="header" class="headroom">
    <div class="startp-responsive-nav">
        <div class="container">
            <div class="startp-responsive-menu">
                <div class="logo black-logo">
                    <a href="index.php">
                        <img src="assets/img/logo.png" alt="logo">
                    </a>
                </div>
                <div class="logo white-logo">
                    <a href="index.php">
                        <img src="assets/img/white-logo.png" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="startp-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a style="max-width:20%;" class="navbar-brand black-logo" href="index.php"><img src="images/logo-b.png" alt="logo"></a>
                <a style="max-width:20%;" class="navbar-brand white-logo" href="index.php"><img src="images/logo-b-white.png" alt="logo"></a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav nav ml-auto">
                        <!-- <li class="nav-item"><a href="index.php" class="nav-link active">Home </a>

                        </li> -->

                        <li class="nav-item"><a href="about.php" class="nav-link "><?php echo $lang['about']; ?> </a>

                        </li>

                        <li class="nav-item"><a href="services.php" class="nav-link"><?php echo $lang['services']; ?> <i data-feather="chevron-down"></i> </a>
                        <ul class="dropdown_menu">
										<li class="nav-item"><a href="service-detail.php?id=1" class="nav-link"><?php echo $lang['web-development']; ?></a></li>
										
										<li class="nav-item"><a href="service-detail.php?id=2" class="nav-link"><?php echo $lang['digital-marketing']; ?></a></li>
                                        
										<li class="nav-item"><a href="service-detail.php?id=3" class="nav-link"><?php echo $lang['graphic-design']; ?></a></li>
										<li class="nav-item"><a href="service-detail.php?id=4" class="nav-link"><?php echo $lang['it-support']; ?></a></li>
										<li class="nav-item"><a href="service-detail.php?id=5" class="nav-link"><?php echo $lang['seo-content']; ?></a></li>
										<li class="nav-item"><a href="service-detail.php?id=6" class="nav-link"><?php echo $lang['software-eng']; ?></a></li>
									</ul>

                        </li>

                        <li class="nav-item"><a href="projects.php" class="nav-link"><?php echo $lang['projects']; ?> </a>

                        </li>

                        <li class="nav-item"><a href="blogs.php" class="nav-link"><?php echo $lang['blog']; ?> </a>

                        </li>

            <li class="nav-item"><a href="contact.php" class="nav-link"><?php echo $lang['contact']; ?> </a></li>
                <?php {
                    if ($curPageName == 'service-detail.php' || $curPageName == "blog-detail.php") {
                ?>
                <li class="nav-item"  style="border-right:1px solid aliceblue;"><a href="<?php echo $curPageName."?id=".$id;?>&lang=en" class="nav-link">EN</a></li>
                <li class="nav-item"><a href="<?php echo $curPageName."?id=".$id;?>&lang=az" class="nav-link">AZ</a></li>

                <?php }else { 
                    ?>
                <li class="nav-item" style="border-right:1px solid aliceblue;"><a href="<?php echo $curPageName;?>?lang=en" class="nav-link">EN</a></li>
                <li class="nav-item"><a href="<?php echo $curPageName;?>?lang=az" class="nav-link">AZ</a></li>
                <?php    }
                }?>

                    </ul>
                </div>
                
                <div class="others-option">
                    <a href="contact.php" class="btn btn-light"><?php echo $lang['lets-talk']; ?></a>
                    <!-- <a href="login.html" class="btn btn-primary">Login</a> -->
                </div>

            </nav>
        </div>
    </div>

    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>

            <div class="container">
                <div class="option-inner">
                    <div class="others-option">
                        <a href="cart.html" class="cart-wrapper-btn"><i data-feather="shopping-cart"></i><span>0</span></a>
                        <a href="contact.html" class="btn btn-light">Support</a>
                        <a href="login.html" class="btn btn-primary">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
