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
    <link rel="stylesheet" type="text/css" href="assets/css/about.css?v=<?php echo time(); ?>" />
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
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="about-image">
                        <img src="assets/images/aboutus/about-bg.jpg" alt="Thushari Vision House Building" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-content">
                        <h3>Excellence in Healthcare</h3>
                        <?php
                        $ret=mysqli_query($con,"select * from tblpage where PageType='aboutus' ");
                        while ($row=mysqli_fetch_array($ret)) {
                        ?>
                        <p><?php echo $row['PageDescription'];?></p>
                        <?php } ?>
                        <!-- <p>At Thushari Vision House, we combine modern technology with compassionate care to provide an exceptional healthcare experience. Our state-of-the-art facility houses the latest medical equipment and is staffed by skilled professionals dedicated to your well-being.</p> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Our Mission and Vision -->
    <section class="our-mission">
        <div class="container">
            <div class="inner-title text-center mb-5">
                <span class="badge badge-success p-2 mb-2">Our Purpose</span>
                <h2>Our Mission & Vision</h2>
                <p class="section-subtitle">Committed to excellence in healthcare delivery</p>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="mission-box wow fadeInLeft" data-wow-delay="0.1s">
                        <h4><i class="fas fa-bullseye"></i> Our Mission</h4>
                        <p>At Thushari Vision House, our mission is to provide <span class="mission-highlight">exceptional healthcare services</span> that improve the health and wellbeing of the individuals and communities we serve.</p>
                        <div class="mission-values">
                            <div class="value-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Delivering compassionate, high-quality care</span>
                            </div>
                            <div class="value-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Ensuring healthcare is accessible to all</span>
                            </div>
                            <div class="value-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Upholding the highest medical standards</span>
                            </div>
                        </div>
                        <img src="assets/images/heartbeat.png" class="mission-image" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mission-box wow fadeInRight" data-wow-delay="0.2s">
                        <h4><i class="fas fa-eye"></i> Our Vision</h4>
                        <p>Our vision is to be the <span class="mission-highlight">preferred healthcare provider</span> known for excellence in patient care, innovative treatments, and a healing environment.</p>
                        <div class="mission-values">
                            <div class="value-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Leading healthcare innovation and technology</span>
                            </div>
                            <div class="value-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Creating a comfortable healing environment</span>
                            </div>
                            <div class="value-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Building lasting community relationships</span>
                            </div>
                        </div>
                        <img src="assets/images/stethoscope.png" class="mission-image" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Our Team -->
    <section class="our-doctors py-5">
        <div class="container">
            <div class="inner-title text-center mb-5">
                <span class="badge badge-success p-2 mb-2">Expert Professionals</span>
                <h2>Our Medical Team</h2>
                <p class="section-subtitle">Meet our experienced healthcare professionals</p>
                 
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="doctor-box shadow-sm">
                        <div class="doctor-img">
                            <img src="assets/images/team/doctor-1.jpeg" alt="Doctor" class="img-fluid">
                            <div class="doctor-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="doctor-info p-3">
                            <h5>Dr. David Kanuel</h5>
                            <span class="doctor-speciality">Chief Medical Officer</span>
                            <p class="text-muted small mt-2">Over 15 years of experience in general medicine and healthcare management</p>
                            <a href="#" class="btn btn-sm btn-outline-success mt-2">View Profile</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="doctor-box shadow-sm">
                        <div class="doctor-img">
                            <img src="assets/images/team/doctor-1.jpeg" alt="Doctor" class="img-fluid">
                            <div class="doctor-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="doctor-info p-3">
                            <h5>Dr. Sanitha Mathews</h5>
                            <span class="doctor-speciality">Cardiologist</span>
                            <p class="text-muted small mt-2">Specializes in advanced cardiac care and interventional procedures</p>
                            <a href="#" class="btn btn-sm btn-outline-success mt-2">View Profile</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="doctor-box shadow-sm">
                        <div class="doctor-img">
                            <img src="assets/images/team/doctor-1.jpeg" alt="Doctor" class="img-fluid">
                            <div class="doctor-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="doctor-info p-3">
                            <h5>Dr. Meena Rajput</h5>
                            <span class="doctor-speciality">Neurologist</span>
                            <p class="text-muted small mt-2">Expert in treating complex neurological conditions with precision</p>
                            <a href="#" class="btn btn-sm btn-outline-success mt-2">View Profile</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="doctor-box shadow-sm">
                        <div class="doctor-img">
                            <img src="assets/images/team/doctor-1.jpeg" alt="Doctor" class="img-fluid">
                            <div class="doctor-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="doctor-info p-3">
                            <h5>Dr. Samuel Kumar</h5>
                            <span class="doctor-speciality">Orthopedic Surgeon</span>
                            <p class="text-muted small mt-2">Skilled surgeon specializing in joint replacements and sports injuries</p>
                            <a href="#" class="btn btn-sm btn-outline-success mt-2">View Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our History -->
    <section class="our-history">
        <div class="container">
            <div class="inner-title text-center mb-5">
                <span class="badge badge-success p-2 mb-2">Our Legacy</span>
                <h2>Our Evolution Through the Years</h2>              
                <p class="section-subtitle">Tracing the remarkable journey of Thushari Vision House from inception to excellence</p>
                <!-- Added scroll prompt for better UX -->
                <div class="scroll-prompt text-center mt-4">
                    <p class="small text-muted">Scroll to explore our journey</p>
                    <div class="scroll-arrow">
                        <i class="fas fa-chevron-down fa-bounce"></i>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="history-timeline" id="historyTimeline">
                        <div class="timeline-item wow fadeInLeft" data-wow-delay="0.1s">
                            <div class="year">2005</div>
                            <div class="content">
                                <h4>Founding of Thushari Vision House</h4>
                                <p>Established as a small clinic to serve the local community with basic healthcare services. Our journey began with just three doctors and a vision to provide accessible healthcare.</p>
                            </div>
                        </div>
                        <div class="timeline-item wow fadeInRight" data-wow-delay="0.2s">
                            <div class="year">2010</div>
                            <div class="content">
                                <h4>Expansion of Services</h4>
                                <p>Expanded to include specialized departments and increased capacity to serve more patients. Added cardiology, neurology, and pediatric units to meet growing community needs.</p>
                            </div>
                        </div>
                        <div class="timeline-item wow fadeInLeft" data-wow-delay="0.3s">
                            <div class="year">2015</div>
                            <div class="content">
                                <h4>Modernization</h4>
                                <p>Major renovation and technology upgrade to provide state-of-the-art medical facilities. Invested in cutting-edge diagnostic equipment and renovated our facilities to enhance patient comfort.</p>
                            </div>
                        </div>
                        <div class="timeline-item wow fadeInRight" data-wow-delay="0.4s">
                            <div class="year">2020</div>
                            <div class="content">
                                <h4>Digital Transformation</h4>
                                <p>Implemented advanced electronic health records and telemedicine services to enhance patient care. Our digital solutions helped us maintain continuous care even during challenging times.</p>
                            </div>
                        </div>
                        <div class="timeline-item wow fadeInLeft" data-wow-delay="0.5s">
                            <div class="year">Today</div>
                            <div class="content">
                                <h4>Community Leader</h4>
                                <p>Now recognized as a leading healthcare provider in the region, committed to continuing our legacy of excellence. With over 120 specialized doctors and state-of-the-art technology, we continue to serve with compassion and excellence.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Future Vision Call-to-Action -->
                    <div class="future-vision text-center mt-5 pt-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="vision-card p-4 bg-white shadow-sm rounded">
                            <h3 class="text-success">Looking to the Future</h3>
                            <p class="lead mb-3">Our journey continues with a commitment to innovation and exceptional patient care.</p>
                            <p class="mb-4">As we look ahead, Thushari Vision House remains dedicated to expanding our services, embracing cutting-edge technologies, and strengthening our community partnerships to meet the evolving healthcare needs of our region.</p>
                            <a href="contact.php" class="btn btn-success px-4 py-2">Connect With Us</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Add some space before the footer -->
    <div style="margin-bottom: 60px;"></div>
    
    <!-- ################# Footer Starts Here #######################-->
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
                            <i class="fas fa-phone"></i>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script>
        // Initialize WOW.js for animations
        new WOW().init({
            mobile: false, // Disable on mobile devices
            offset: 100    // Offset (in px) from the bottom of the viewport
        });
        
        // Additional script for timeline scroll animations
        document.addEventListener('DOMContentLoaded', function() {
            // Get all timeline items
            const timelineItems = document.querySelectorAll('.timeline-item');
            
            // Function to check if an element is in viewport
            function isInViewport(element) {
                const rect = element.getBoundingClientRect();
                return (
                    rect.top <= (window.innerHeight || document.documentElement.clientHeight) * 0.8 &&
                    rect.bottom >= 0
                );
            }
            
            // Function to add show-timeline class to visible items
            function showVisibleTimelineItems() {
                timelineItems.forEach(item => {
                    if (isInViewport(item)) {
                        item.classList.add('show-timeline');
                        // Also maintain WOW animations if they exist
                        if (item.classList.contains('wow')) {
                            item.classList.add('animated');
                        }
                    }
                });
            }
            
            // Run once on load
            showVisibleTimelineItems();
            
            // Add scroll event listener
            window.addEventListener('scroll', showVisibleTimelineItems);
        });
    </script>
</body>

</html>
