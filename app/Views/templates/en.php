
<!DOCTYPE html>
<html lang="zxx" class="theme-light">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS --> 
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        <!-- Owl Carousel CSS --> 
        <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
        <!-- Owl Default CSS --> 
        <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">
        <!-- Owl Magnific CSS --> 
        <link rel="stylesheet" href="/assets/css/magnific-popup.min.css">
        <!-- Animate CSS --> 
        <link rel="stylesheet" href="/assets/css/animate.min.css">
        <!-- Boxicons CSS --> 
		<link rel="stylesheet" href="/assets/css/boxicons.min.css">
        <!-- Flaticon CSS --> 
		<link rel="stylesheet" href="/assets/css/flaticon.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="/assets/css/meanmenu.css">
		<!-- Odometer CSS-->
		<link rel="stylesheet" href="/assets/css/odometer.min.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="/assets/css/style.css">
        <!-- RTL CSS -->
        <link rel="stylesheet" href="/assets/css/dark.css">
        <!-- Responsive CSS -->
		<link rel="stylesheet" href="/assets/css/responsive.css">
		
		<title>UNESCO Prize</title>

        <link rel="icon" type="image/png" href="/assets/img/favicon.png">
    </head>

    <body>

        <!-- Start Preloader Area -->
        <div class="preloader">
            <div class="preloader">
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- End Preloader Area -->

        <!-- Start Navbar Area -->
        <div class="navbar-area navbar-two">
            <div class="fria-responsive-nav">
                <div class="container">
                    <div class="fria-responsive-menu">
                        <div class="logo">
                            <a href="<?=base_url('/')?>">
                                <img src="/assets/img/logo.png" class="black-logo" alt="image">
                                <img src="/assets/img/logo-2.png" class="white-logo" alt="image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="fria-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="/">
                            <img src="/assets-rtl/img/logo.png" alt="logo">
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="/" class="nav-link active">
                                        Home 
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Prize 
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="/prize-overview" class="nav-link">
                                                Prize Overview
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="/eligible-fields" class="nav-link">
                                                Eligible Fields
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="<?=base_url('awards')?>" class="nav-link">
                                                Awards
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?=base_url('logo')?>" class="nav-link">
                                                Press & Media Kit
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?=base_url('organizational-structure')?>" class="nav-link">
                                                Organizational Structure
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Nomination 
                                        <i class='bx bx-chevron-down'></i>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="<?=base_url('nomination-indicator')?>" class="nav-link">
                                            Nomination Selection and Evaluation Criteria
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="<?=base_url('call-for-entries')?>" class="nav-link">
                                            Call for Entries
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="<?=base_url('process-nominees')?>" class="nav-link">
                                            Selection and Evaluation Process of Nominees 
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Winners 
                                        <i class='bx bx-chevron-down'></i>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="<?=base_url('winners-2024')?>" class="nav-link">
                                                2024 Winners
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="<?=base_url('winners-2025')?>" class="nav-link">
                                                2025 Winners
                                            </a>
                                        </li>
                                    </ul>
                                </li>


                                <li class="nav-item">
                                    <a href="<?=base_url('events')?>" class="nav-link">
                                        Events
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="<?=base_url('news')?>" class="nav-link">
                                        News
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="<?=base_url('contact')?>" class="nav-link">
                                        Contact
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Language (زبان)
                                        <i class='bx bx-chevron-down'></i>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="<?= base_url('lang/en'); ?>" class="nav-link">
                                                English
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?= base_url('lang/fa'); ?>" class="nav-link">
                                                فارسی
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>

                            <div class="others-options">
                                <a href="<?=base_url('login')?>" class="default-btn">Login</a>
<!--                                <a href="--><?php //=base_url('register')?><!--" class="default-btn">Register</a>-->
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->
        <?= $this->renderSection('content') ?>
        <!-- Start Footer Area -->
        <section class="footer-section pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="single-footer-widget">
                            <div class="footer-heading">
                                <h3>About Us</h3>
                            </div>
                            <p>The advancement of technology and innovation is vital for the growth and success of every society, encompassing scientific, economic, social, cultural, and educational aspects. An effective approach involves observing and developing talent and guiding individuals toward commercializing their ideas. To this end, the UNESCO Technology and Innovation Prize in the Islamic Republic of Iran, in partnership with the Ministry of Science, Research and Technology, the National Commission for UNESCO-Iran, and the University of Tehran, will continue to be awarded based on established guidelines.This prize encourages researchers and experts to embrace a new outlook on technology and the economy. It inspires them to present innovative studies, conduct research, and offer products and services that align with technological advancements. </p>
                            <!-- <ul class="footer-social">
                                <li>
                                    <a href="#">
                                        <i class="flaticon-facebook"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="flaticon-twitter"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="flaticon-pinterest"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="flaticon-instagram"></i>
                                    </a>
                                </li>
                            </ul> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <div class="footer-heading">
                                <h3>Prize</h3>
                            </div>

                            <ul class="footer-quick-links">
                                <li>
                                    <a href="/prize-overview">Prize Overview</a>
                                </li>
                                <li>
                                    <a href="/eligible-fields">Eligible Fields</a>
                                </li>
                                <li>
                                    <a href="/awards">Awards</a>
                                </li>
                                <li>
                                    <a href="/logo">Press & Media Kit</a>
                                </li>
                                <li>
                                    <a href="/organizational-structure">Organizational Structure</a>
                                </li>
                            </ul>
                        </div>    
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <div class="footer-heading">
                                <h3>Contact</h3>
                            </div>

                            <div class="footer-info-contact">
                                <i class="flaticon-phone-call"></i>
                                <h3>Phone</h3>
                                <span><a href="tel:02188220700;180">+98 (21) 88220700 (Extension 180)</a></span>
                            </div>

                            <div class="footer-info-contact">
                                <i class="flaticon-envelope"></i>
                                <h3>Email</h3>
                                <span><a href="mailto:info@inotech-unescoprize.org">info@Inotech-UnescoPrize.org</a></span>
                            </div>

                            <div class="footer-info-contact">
                                <i class="flaticon-pin"></i>
                                <h3>Address</h3>
                                <span>Iran Secretariat of the UNESCO Prize, Science and Technology Park of the University of Tehran, Farshi Moghadam, North Kargar, Tehran, Iran</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Footer Area -->

        <!-- Start Copy Right Area -->
        <div class="copyright-area">
            <div class="container">
                <div class="copyright-area-content">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <p>
                                Copyright @ <?=date('Y') ?> Iran Secretariat of the UNESCO Prize, All Rights Reserved.
                                <a href="https://novintarhpars.com/" target="_blank">
                                    Novin Tarh Pars
                                </a>
                            </p>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <ul>
                                <li>
                                    <a href="/terms-condition">Terms & Conditions</a>
                                </li>
                                <li>
                                    <a href="/privacy-policy">Privacy Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copy Right Area -->

        <!-- Start Go Top Section -->
        <div class="go-top">
            <i class="bx bx-chevron-up"></i>
            <i class="bx bx-chevron-up"></i>
        </div>
        <!-- End Go Top Section -->

        <!-- dark version -->
        <div class="dark-version">
            <label id="switch" class="switch">
                <input type="checkbox" onchange="toggleTheme()" id="slider">
                <span class="slider round"></span>
            </label>
        </div>
        <!-- dark version -->

        <!-- Jquery Slim JS -->
        <script src="/assets/js/jquery.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="/assets/js/bootstrap.bundle.min.js"></script>
        <!-- Meanmenu JS -->
        <script src="/assets/js/jquery.meanmenu.js"></script>
        <!-- Owl Carousel JS -->
		<script src="/assets/js/owl.carousel.min.js"></script>
        <!-- Magnific JS -->
		<script src="/assets/js/jquery.magnific-popup.min.js"></script>
		<!-- Appear JS --> 
        <script src="/assets/js/jquery.appear.min.js"></script>
		<!-- Odometer JS --> 
		<script src="/assets/js/odometer.min.js"></script>
		<!-- Form Ajaxchimp JS -->
		<script src="/assets/js/jquery.ajaxchimp.min.js"></script>
		<!-- Form Validator JS -->
		<script src="/assets/js/form-validator.min.js"></script>
		<!-- Contact JS -->
        <script src="/assets/js/contact-form-script.js"></script>
        <!-- Wow JS -->
        <script src="/assets/js/wow.min.js"></script>
        <!-- Custom JS -->
        <script src="/assets/js/main.js"></script>
    </body>
</html>