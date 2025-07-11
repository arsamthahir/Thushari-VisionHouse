<?php
include_once('../src/hms/include/config.php');
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Thushari Vision House - About Us</title>    <link rel="shortcut icon" href="assets/images/fav.jpg">
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
                            <li><a href="services.php">Services</a></li>
                            <li><a href="about.php" class="active">About Us</a></li>
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
                    <h2>About Us</h2>
                    <p>Learn more about Thushari Vision House</p>
                </div>
            </div>
        </div>
    </div>

    <!-- ################# About Us Starts Here #######################-->
    <section class="about-us">
        <div class="row no-margin">
            <div class="col-sm-6 image-bg no-padding">
                <img src="assets/images/why.jpg" alt="Hospital Building" class="w-100">
            </div>
            <div class="col-sm-6 abut-yoiu">
                <h3>About Our Hospital</h3>
                <?php
                $ret=mysqli_query($con,"select * from tblpage where PageType='aboutus' ");
                while ($row=mysqli_fetch_array($ret)) {
                ?>
                <p><?php echo $row['PageDescription'];?>.</p>
                <?php } ?>
            </div>
        </div>
    </section>
    
    <!-- Our Mission and Vision -->
    <section class="our-mission">
        <div class="container">
            <div class="inner-title">
                <h2>Our Mission & Vision</h2>
                <p>Committed to excellence in healthcare</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mission-box">
                        <h4><i class="fas fa-bullseye"></i> Our Mission</h4>
                        <p>At Thushari Vision House, our mission is to provide exceptional healthcare services that improve the health and wellbeing of the individuals and communities we serve. We are committed to delivering compassionate, high-quality care that is accessible to all.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mission-box">
                        <h4><i class="fas fa-eye"></i> Our Vision</h4>
                        <p>Our vision is to be the preferred healthcare provider known for excellence in patient care, innovative treatments, and a healing environment. We strive to be leaders in healthcare innovation while maintaining our commitment to the communities we serve.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Our Team -->
    <section class="our-team">
        <div class="container">
            <div class="inner-title">
                <h2>Our Medical Team</h2>
                <p>Meet our experienced healthcare professionals</p>
            </div>
            <div class="row team-row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-usr">
                        <img src="assets/images/team/t1.jpg" alt="">
                        <div class="det-o">
                            <h4>Dr. David Kanuel</h4>
                            <i>Chief Medical Officer</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-usr">
                        <img src="assets/images/team/t2.jpg" alt="">
                        <div class="det-o">
                            <h4>Dr. Sanitha Mathews</h4>
                            <i>Cardiologist</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-usr">
                        <img src="assets/images/team/t3.jpg" alt="">
                        <div class="det-o">
                            <h4>Dr. Meena Rajput</h4>
                            <i>Neurologist</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-usr">
                        <img src="assets/images/team/t4.jpg" alt="">
                        <div class="det-o">
                            <h4>Dr. Samuel Kumar</h4>
                            <i>Orthopedic Surgeon</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our History -->
    <section class="our-history">
        <div class="container">
            <div class="inner-title">
                <h2>Our History</h2>
                <p>The journey of Thushari Vision House</p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="history-timeline">
                        <div class="timeline-item">
                            <div class="year">2005</div>
                            <div class="content">
                                <h4>Founding of Thushari Vision House</h4>
                                <p>Established as a small clinic to serve the local community with basic healthcare services.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="year">2010</div>
                            <div class="content">
                                <h4>Expansion of Services</h4>
                                <p>Expanded to include specialized departments and increased capacity to serve more patients.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="year">2015</div>
                            <div class="content">
                                <h4>Modernization</h4>
                                <p>Major renovation and technology upgrade to provide state-of-the-art medical facilities.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="year">2020</div>
                            <div class="content">
                                <h4>Digital Transformation</h4>
                                <p>Implemented advanced electronic health records and telemedicine services to enhance patient care.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="year">Today</div>
                            <div class="content">
                                <h4>Community Leader</h4>
                                <p>Now recognized as a leading healthcare provider in the region, committed to continuing our legacy of excellence.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    <!-- ################# Footer Starts Here #######################-->
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
</body>

</html>
