<?php
include_once('../src/hms/include/config.php');
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Thushari Vision House - Services</title>    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/header-extensions.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" type="text/css" href="assets/css/gallery.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" type="text/css" href="assets/css/testimonials.css" />
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <!-- ################# Header Starts Here #######################-->
    <header id="menu-jk">
        <div id="nav-head" class="header-nav">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="logo">TVH Healthcare</div>
                       <a data-toggle="collapse" data-target="#menu" href="#menu" class="d-block d-md-none"><i class="fas small-menu fa-bars"></i></a>
                    </div>
                    <div id="menu" class="col-lg-6 col-md-9 d-none d-md-block nav-item">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="services.php" class="active">Services</a></li>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="gallery.php">Gallery</a></li>
                            <li><a href="visiting-hours.php">Visiting Hours</a></li>
                            <li><a href="news-updates.php">News & Updates</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                            <li><a href="login.php">Logins</a></li>  
                        </ul>                        <div class="mobile-appointment d-md-none">
                            <a class="btn btn-appointment" href="../src/hms/user-login.php"><i class="fas fa-calendar-check"></i> Book Appointment</a>
                        </div>
                    </div>
                    <div class="col-lg-3 d-none d-lg-block appoint">
                        <a class="btn btn-appointment" href="../src/hms/user-login.php"><i class="fas fa-calendar-check"></i> Book Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ################# Page Title #######################-->
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Our Services</h2>
                    <p>Providing quality healthcare services for the community</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Services Banner Image -->
    <div class="services-banner">
        <img src="assets/images/services/bg.jpg" alt="Healthcare Services" class="img-fluid">
    </div>

    <!-- ################# Services Starts Here #######################-->
    <section class="key-features department">
        <div class="container">
            <div class="inner-title">
                <h2>Our Key Features</h2>
                <p>Take a look at some of our key features</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-heartbeat"></i>
                        <h5>Cardiology</h5>
                        <p>Our cardiology department offers comprehensive care for heart conditions with state-of-the-art technology and experienced specialists.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-ribbon"></i>
                        <h5>Orthopaedic</h5>
                        <p>Our orthopaedic specialists provide expert care for bone and joint conditions, with advanced treatment options and rehabilitation services.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                       <i class="fab fa-monero"></i>
                        <h5>Neurologist</h5>
                        <p>Our neurology department offers specialized care for conditions affecting the brain, spine, and nervous system with advanced diagnostic capabilities.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-capsules"></i>
                        <h5>Pharma Pipeline</h5>
                        <p>Our pharmaceutical services ensure a continuous supply of quality medications and treatments for all patient needs.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-prescription-bottle-alt"></i>
                        <h5>Pharma Team</h5>
                        <p>Our dedicated pharmaceutical team works closely with doctors to provide the most effective medication regimens for each patient.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="far fa-thumbs-up"></i>
                        <h5>High Quality Treatments</h5>
                        <p>We are committed to providing the highest quality treatments using the latest medical advancements and technologies.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Services Section -->
    <section class="our-services container-fluid">
        <div class="container">
            <div class="inner-title">
                <h2>Additional Services</h2>
                <p>Comprehensive healthcare for all your needs</p>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="service-box">
                        <i class="fas fa-stethoscope"></i>
                        <h4>General Health Checkups</h4>
                        <p>Comprehensive health screenings and preventive care services to ensure your wellbeing.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-box">
                        <i class="fas fa-user-md"></i>
                        <h4>Specialist Consultations</h4>
                        <p>Access to a wide range of medical specialists for expert opinions and treatments.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-box">
                        <i class="fas fa-procedures"></i>
                        <h4>Surgical Procedures</h4>
                        <p>State-of-the-art surgical facilities for both minor and major procedures.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-box">
                        <i class="fas fa-x-ray"></i>
                        <h4>Advanced Diagnostics</h4>
                        <p>Modern diagnostic imaging and laboratory services for accurate and timely results.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-box">
                        <i class="fas fa-heartbeat"></i>
                        <h4>Emergency Services</h4>
                        <p>24/7 emergency care with rapid response times and expert medical attention.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-box">
                        <i class="fas fa-wheelchair"></i>
                        <h4>Rehabilitation Services</h4>
                        <p>Comprehensive rehabilitation programs to help patients recover and regain independence.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ################# Footer Starts Here #######################-->    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-about">
                        <div class="footer-logo">TVH</div>
                        <p>Thushari Vision House is committed to providing exceptional healthcare services with a focus on patient comfort and well-being. Our team of skilled professionals works tirelessly to ensure the highest quality of care.</p>
                        <div class="footer-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4>Useful Links</h4>
                    <ul class="footer-links">
                        <li><a href="index.php"><i class="fas fa-angle-right"></i> Home</a></li>
                        <li><a href="services.php"><i class="fas fa-angle-right"></i> Services</a></li>
                        <li><a href="about.php"><i class="fas fa-angle-right"></i> About Us</a></li>
                        <li><a href="gallery.php"><i class="fas fa-angle-right"></i> Gallery</a></li>
                        <li><a href="contact.php"><i class="fas fa-angle-right"></i> Contact Us</a></li>
                        <li><a href="login.php"><i class="fas fa-angle-right"></i> Login Portals</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4>Contact Us</h4>
                    <ul class="footer-links footer-contact">
                        <?php
                        $ret=mysqli_query($con,"select * from tblpage where PageType='contactus' ");
                        while ($row=mysqli_fetch_array($ret)) {
                        ?>
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <div><?php echo $row['PageDescription']; ?></div>
                        </li>
                        <li>
                            <i class="fas fa-phone-alt"></i>
                            <div><?php echo $row['MobileNumber']; ?></div>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <div><a href="mailto:<?php echo $row['Email']; ?>"><?php echo $row['Email']; ?></a></div>
                        </li>
                        <li>
                            <i class="fas fa-clock"></i>
                            <div><?php echo $row['OpenningTime']; ?></div>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <div class="copy">
        <div class="container">
            &copy; <?php echo date('Y'); ?> Thushari Vision House - All Rights Reserved
        </div>
    </div>
    
    <!-- Javascripts -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
    <script src="assets/js/script.js"></script>
    
    <script>
        $(document).ready(function() {
            // Add a slight parallax effect to the banner image on scroll
            $(window).scroll(function() {
                var scrollPos = $(this).scrollTop();
                $('.services-banner img').css({
                    'transform': 'translateY(' + scrollPos/10 + 'px)'
                });
            });
            
            // Enhance services boxes with animation
            $('.single-key, .service-box').each(function(index) {
                $(this).css('animation-delay', (index * 0.1) + 's');
                $(this).addClass('animated-service');
            });
        });
    </script>
</body>

</html>
