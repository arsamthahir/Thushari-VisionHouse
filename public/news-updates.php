<?php
include_once('../src/hms/include/config.php');
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Latest news and updates from Thushari Vision House Hospital - Hospital announcements, medical breakthroughs, and community news">
    <meta name="keywords" content="hospital news, medical updates, healthcare announcements, community health">
    <title>News & Updates - Thushari Vision House</title>
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/header-extensions.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" type="text/css" href="assets/css/testimonials.css" />
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <!-- ################# Header Starts Here #######################-->
    <header id="menu-jk">
        <div id="nav-head" class="header-nav">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="logo">TVH Healthcare</div>
                       <a data-toggle="collapse" data-target="#menu" href="#menu" class="d-block d-md-none"><i class="fas small-menu fa-bars"></i></a>
                    </div>
                    <div id="menu" class="col-lg-8 col-md-9 d-none d-md-block nav-item">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="services.php">Services</a></li>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="gallery.php">Gallery</a></li>
                            <li><a href="visiting-hours.php">Visiting Hours</a></li>
                            <li><a href="news-updates.php" class="active">News & Updates</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                            <li><a href="login.php">Logins</a></li>  
                        </ul>
                        <div class="mobile-appointment d-md-none">
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
    <div class="page-title" style="background: linear-gradient(rgba(40, 167, 69, 0.8), rgba(40, 167, 69, 0.8)), url('assets/images/bg/news-bg.jpg'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="text-white">News & Updates</h2>
                    <p class="text-white-50">Stay informed about hospital developments and healthcare innovations</p>
                </div>
            </div>
        </div>
    </div>

    <!-- ################# Breaking News Banner #######################-->
    <section class="breaking-news py-3 bg-warning">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-1 text-center">
                    <i class="fas fa-bullhorn fa-2x text-dark"></i>
                </div>
                <div class="col-md-11">
                    <div class="news-ticker">
                        <strong>LATEST UPDATE:</strong> New Cardiac Surgery Wing now open | Free health screening camp on July 15th | Extended visiting hours for weekends
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ################# Featured News #######################-->
    <section class="featured-news py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-4">
                    <div class="featured-news-item bg-white rounded shadow-sm overflow-hidden">
                        <img src="assets/images/news/new-cardiac-wing.jpg" alt="New Cardiac Wing" class="img-fluid w-100" style="height: 400px; object-fit: cover;">
                        <div class="news-content p-4">
                            <div class="news-meta mb-3">
                                <span class="badge badge-danger">Breaking News</span>
                                <span class="text-muted ml-2"><i class="fas fa-calendar mr-1"></i>July 10, 2025</span>
                                <span class="text-muted ml-3"><i class="fas fa-eye mr-1"></i>1,247 views</span>
                            </div>
                            <h3 class="mb-3">Thushari Vision House Opens State-of-the-Art Cardiac Surgery Wing</h3>
                            <p class="text-muted mb-3">We are proud to announce the opening of our new Cardiac Surgery Wing, featuring the latest in cardiovascular technology and equipment. This new facility will enhance our ability to provide world-class cardiac care to our patients...</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="#cardiac-wing-details" class="btn btn-success">Read Full Story</a>
                                <div class="social-share">
                                    <span class="text-muted mr-2">Share:</span>
                                    <a href="#" class="text-primary mr-2"><i class="fab fa-facebook"></i></a>
                                    <a href="#" class="text-info mr-2"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="text-success"><i class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="quick-updates">
                        <h5 class="mb-3"><i class="fas fa-bolt text-warning mr-2"></i>Quick Updates</h5>
                        
                        <div class="update-item bg-white p-3 rounded shadow-sm mb-3">
                            <div class="d-flex align-items-start">
                                <i class="fas fa-calendar-plus text-success mr-3 mt-1"></i>
                                <div>
                                    <h6 class="mb-1">New Online Appointment System</h6>
                                    <p class="text-muted small mb-1">Book appointments 24/7 through our new online portal</p>
                                    <small class="text-success">July 8, 2025</small>
                                </div>
                            </div>
                        </div>
                        
                        <div class="update-item bg-white p-3 rounded shadow-sm mb-3">
                            <div class="d-flex align-items-start">
                                <i class="fas fa-award text-warning mr-3 mt-1"></i>
                                <div>
                                    <h6 class="mb-1">Hospital Accreditation Renewed</h6>
                                    <p class="text-muted small mb-1">Successfully renewed Joint Commission accreditation for another 3 years</p>
                                    <small class="text-success">July 5, 2025</small>
                                </div>
                            </div>
                        </div>
                        
                        <div class="update-item bg-white p-3 rounded shadow-sm mb-3">
                            <div class="d-flex align-items-start">
                                <i class="fas fa-user-md text-info mr-3 mt-1"></i>
                                <div>
                                    <h6 class="mb-1">New Specialist Joins Team</h6>
                                    <p class="text-muted small mb-1">Dr. Jennifer Wells joins our neurology department</p>
                                    <small class="text-success">July 1, 2025</small>
                                </div>
                            </div>
                        </div>
                        
                        <div class="update-item bg-white p-3 rounded shadow-sm mb-3">
                            <div class="d-flex align-items-start">
                                <i class="fas fa-mobile-alt text-primary mr-3 mt-1"></i>
                                <div>
                                    <h6 class="mb-1">Mobile Health App Launch</h6>
                                    <p class="text-muted small mb-1">New mobile app for patient services now available</p>
                                    <small class="text-success">June 28, 2025</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ################# Recent News #######################-->
    <section class="recent-news py-5 bg-light">
        <div class="container">
            <h3 class="text-center mb-5">Recent News & Announcements</h3>
            
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="news-card bg-white rounded shadow-sm overflow-hidden h-100">
                        <img src="assets/images/news/health-screening.jpg" alt="Health Screening" class="img-fluid w-100" style="height: 200px; object-fit: cover;">
                        <div class="card-body p-4">
                            <div class="news-meta mb-2">
                                <span class="badge badge-success">Community Event</span>
                                <small class="text-muted ml-2">July 6, 2025</small>
                            </div>
                            <h6 class="mb-2">Free Health Screening Camp - July 15th</h6>
                            <p class="text-muted small mb-3">Join us for a comprehensive health screening camp including blood pressure checks, diabetes screening, and BMI assessment...</p>
                            <a href="#" class="text-success">Read More</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="news-card bg-white rounded shadow-sm overflow-hidden h-100">
                        <img src="assets/images/news/telemedicine.jpg" alt="Telemedicine" class="img-fluid w-100" style="height: 200px; object-fit: cover;">
                        <div class="card-body p-4">
                            <div class="news-meta mb-2">
                                <span class="badge badge-info">Technology</span>
                                <small class="text-muted ml-2">July 3, 2025</small>
                            </div>
                            <h6 class="mb-2">Telemedicine Services Expanded</h6>
                            <p class="text-muted small mb-3">We've expanded our telemedicine services to include more specialties and extended hours for patient convenience...</p>
                            <a href="#" class="text-success">Read More</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="news-card bg-white rounded shadow-sm overflow-hidden h-100">
                        <img src="assets/images/news/research-partnership.jpg" alt="Research Partnership" class="img-fluid w-100" style="height: 200px; object-fit: cover;">
                        <div class="card-body p-4">
                            <div class="news-meta mb-2">
                                <span class="badge badge-primary">Research</span>
                                <small class="text-muted ml-2">June 30, 2025</small>
                            </div>
                            <h6 class="mb-2">New Research Partnership Announced</h6>
                            <p class="text-muted small mb-3">Partnering with Medical University for groundbreaking research in cancer treatment and patient care innovations...</p>
                            <a href="#" class="text-success">Read More</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="news-card bg-white rounded shadow-sm overflow-hidden h-100">
                        <img src="assets/images/news/green-initiative.jpg" alt="Green Initiative" class="img-fluid w-100" style="height: 200px; object-fit: cover;">
                        <div class="card-body p-4">
                            <div class="news-meta mb-2">
                                <span class="badge badge-success">Environmental</span>
                                <small class="text-muted ml-2">June 25, 2025</small>
                            </div>
                            <h6 class="mb-2">Hospital Goes Green: Sustainability Initiative</h6>
                            <p class="text-muted small mb-3">Our new sustainability program includes solar panels, waste reduction, and eco-friendly practices throughout the facility...</p>
                            <a href="#" class="text-success">Read More</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="news-card bg-white rounded shadow-sm overflow-hidden h-100">
                        <img src="assets/images/news/patient-recognition.jpg" alt="Patient Recognition" class="img-fluid w-100" style="height: 200px; object-fit: cover;">
                        <div class="card-body p-4">
                            <div class="news-meta mb-2">
                                <span class="badge badge-warning">Awards</span>
                                <small class="text-muted ml-2">June 20, 2025</small>
                            </div>
                            <h6 class="mb-2">Excellence in Patient Care Award</h6>
                            <p class="text-muted small mb-3">Received the Regional Excellence in Patient Care Award for outstanding service and patient satisfaction scores...</p>
                            <a href="#" class="text-success">Read More</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="news-card bg-white rounded shadow-sm overflow-hidden h-100">
                        <img src="assets/images/news/staff-training.jpg" alt="Staff Training" class="img-fluid w-100" style="height: 200px; object-fit: cover;">
                        <div class="card-body p-4">
                            <div class="news-meta mb-2">
                                <span class="badge badge-info">Training</span>
                                <small class="text-muted ml-2">June 15, 2025</small>
                            </div>
                            <h6 class="mb-2">Advanced Training Program for Nursing Staff</h6>
                            <p class="text-muted small mb-3">Comprehensive training program to enhance patient care skills and introduce new medical technologies to our nursing team...</p>
                            <a href="#" class="text-success">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-4">
                <a href="#" class="btn btn-success">View All News</a>
            </div>
        </div>
    </section>

    <!-- ################# Events Calendar #######################-->
    <section class="events-calendar py-5">
        <div class="container">
            <h3 class="text-center mb-5">Upcoming Events & Programs</h3>
            
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="event-card bg-white rounded shadow-sm p-4">
                        <div class="event-date bg-success text-white text-center rounded mb-3 p-3">
                            <div class="day">15</div>
                            <div class="month">JUL</div>
                        </div>
                        <h6 class="mb-2">Free Health Screening Camp</h6>
                        <p class="text-muted small mb-2"><i class="fas fa-clock mr-1"></i>9:00 AM - 4:00 PM</p>
                        <p class="text-muted small mb-2"><i class="fas fa-map-marker-alt mr-1"></i>Hospital Main Lobby</p>
                        <p class="text-muted small mb-3">Comprehensive health check-ups for community members</p>
                        <a href="#" class="btn btn-sm btn-outline-success">Learn More</a>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="event-card bg-white rounded shadow-sm p-4">
                        <div class="event-date bg-info text-white text-center rounded mb-3 p-3">
                            <div class="day">22</div>
                            <div class="month">JUL</div>
                        </div>
                        <h6 class="mb-2">Heart Health Awareness Seminar</h6>
                        <p class="text-muted small mb-2"><i class="fas fa-clock mr-1"></i>6:00 PM - 8:00 PM</p>
                        <p class="text-muted small mb-2"><i class="fas fa-map-marker-alt mr-1"></i>Conference Hall A</p>
                        <p class="text-muted small mb-3">Expert talk on cardiovascular health and prevention</p>
                        <a href="#" class="btn btn-sm btn-outline-success">Register Now</a>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="event-card bg-white rounded shadow-sm p-4">
                        <div class="event-date bg-warning text-white text-center rounded mb-3 p-3">
                            <div class="day">05</div>
                            <div class="month">AUG</div>
                        </div>
                        <h6 class="mb-2">Diabetes Management Workshop</h6>
                        <p class="text-muted small mb-2"><i class="fas fa-clock mr-1"></i>10:00 AM - 2:00 PM</p>
                        <p class="text-muted small mb-2"><i class="fas fa-map-marker-alt mr-1"></i>Education Center</p>
                        <p class="text-muted small mb-3">Interactive workshop on diabetes care and management</p>
                        <a href="#" class="btn btn-sm btn-outline-success">Register Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ################# Media Center #######################-->
    <section class="media-center py-5 bg-light">
        <div class="container">
            <h3 class="text-center mb-5">Media Center</h3>
            
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="media-item bg-white rounded shadow-sm p-4 text-center">
                        <i class="fas fa-newspaper fa-3x text-primary mb-3"></i>
                        <h6>Press Releases</h6>
                        <p class="text-muted small">Official statements and announcements from hospital management</p>
                        <a href="#" class="btn btn-sm btn-outline-success">View All</a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="media-item bg-white rounded shadow-sm p-4 text-center">
                        <i class="fas fa-images fa-3x text-warning mb-3"></i>
                        <h6>Photo Gallery</h6>
                        <p class="text-muted small">Images from hospital events, facilities, and community programs</p>
                        <a href="gallery.php" class="btn btn-sm btn-outline-success">View Gallery</a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="media-item bg-white rounded shadow-sm p-4 text-center">
                        <i class="fas fa-video fa-3x text-danger mb-3"></i>
                        <h6>Video Library</h6>
                        <p class="text-muted small">Educational videos and virtual tours of our facilities</p>
                        <a href="#" class="btn btn-sm btn-outline-success">Watch Videos</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ################# Newsletter Signup #######################-->
    <section class="newsletter py-5 bg-success text-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h3 class="mb-3">Stay Updated with Our Latest News</h3>
                    <p class="mb-4">Subscribe to receive hospital updates, health tips, and event notifications directly in your inbox.</p>
                    <form class="row justify-content-center">
                        <div class="col-md-6 mb-3">
                            <input type="email" class="form-control" placeholder="Enter your email address" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <button type="submit" class="btn btn-light text-success w-100">Subscribe</button>
                        </div>
                    </form>
                    <small class="text-white-50">We value your privacy. You can unsubscribe at any time.</small>
                </div>
            </div>
        </div>
    </section>

    <!-- ################# Footer Starts Here#######################--->
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
                        <li><a href="visiting-hours.php"><i class="fas fa-angle-right"></i> Visiting Hours</a></li>
                        <li><a href="news-updates.php"><i class="fas fa-angle-right"></i> News & Updates</a></li>
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

    <!-- Optional JavaScript -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
