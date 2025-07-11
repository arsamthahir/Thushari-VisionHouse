<?php
include_once('../src/hms/include/config.php');
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Visiting hours, guidelines, and policies for patients and families at Thushari Vision House Hospital">
    <meta name="keywords" content="visiting hours, hospital guidelines, patient policies, visitor information">
    <title>Visiting Hours & Guidelines - Thushari Vision House</title>
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
                            <li><a href="visiting-hours.php" class="active">Visiting Hours</a></li>
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
    <div class="page-title" style="background-image: url('assets/images/bg/visiting-bg.jpg'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="text-white">Visiting Hours & Guidelines</h2>
                    <p class="text-white-50">Important information for patients and visitors</p>
                </div>
            </div>
        </div>
    </div>

    <!-- ################# Visiting Hours Information #######################-->
    <section class="visiting-hours py-5">
        <div class="container">
            <!-- Emergency Notice -->
            <div class="alert alert-warning mb-4">
                <div class="row align-items-center">
                    <div class="col-md-1 text-center">
                        <i class="fas fa-exclamation-triangle fa-2x text-warning"></i>
                    </div>
                    <div class="col-md-11">
                        <h5 class="mb-1">Important Notice</h5>
                        <p class="mb-0">Due to ongoing health protocols, visiting hours may be subject to change. Please call <strong>(+94) 11 234 5678</strong> before visiting to confirm current policies.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- General Visiting Hours -->
                <div class="col-lg-6 mb-4">
                    <div class="visiting-card bg-white shadow-sm rounded p-4 h-100">
                        <div class="card-header bg-success text-white p-3 rounded mb-3">
                            <h4 class="mb-0"><i class="fas fa-clock mr-2"></i>General Visiting Hours</h4>
                        </div>
                        <div class="visiting-schedule">
                            <div class="schedule-item mb-3">
                                <h6 class="text-success">Weekdays (Monday - Friday)</h6>
                                <div class="time-slots">
                                    <div class="time-slot">
                                        <span class="badge badge-outline-success">Morning:</span> 10:00 AM - 12:00 PM
                                    </div>
                                    <div class="time-slot">
                                        <span class="badge badge-outline-success">Evening:</span> 4:00 PM - 8:00 PM
                                    </div>
                                </div>
                            </div>
                            <div class="schedule-item mb-3">
                                <h6 class="text-success">Weekends (Saturday - Sunday)</h6>
                                <div class="time-slots">
                                    <div class="time-slot">
                                        <span class="badge badge-outline-success">Morning:</span> 10:00 AM - 12:00 PM
                                    </div>
                                    <div class="time-slot">
                                        <span class="badge badge-outline-success">Evening:</span> 3:00 PM - 7:00 PM
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Special Unit Hours -->
                <div class="col-lg-6 mb-4">
                    <div class="visiting-card bg-white shadow-sm rounded p-4 h-100">
                        <div class="card-header bg-info text-white p-3 rounded mb-3">
                            <h4 class="mb-0"><i class="fas fa-procedures mr-2"></i>Special Unit Hours</h4>
                        </div>
                        <div class="special-units">
                            <div class="unit-item mb-3">
                                <h6 class="text-info">Intensive Care Unit (ICU)</h6>
                                <p class="mb-1"><strong>Hours:</strong> 2:00 PM - 3:00 PM & 7:00 PM - 8:00 PM</p>
                                <p class="text-muted small">Maximum 2 visitors at a time, 15 minutes per visit</p>
                            </div>
                            <div class="unit-item mb-3">
                                <h6 class="text-info">Cardiac Care Unit (CCU)</h6>
                                <p class="mb-1"><strong>Hours:</strong> 1:00 PM - 2:00 PM & 6:00 PM - 7:00 PM</p>
                                <p class="text-muted small">One visitor at a time, 10 minutes per visit</p>
                            </div>
                            <div class="unit-item mb-3">
                                <h6 class="text-info">Pediatric Ward</h6>
                                <p class="mb-1"><strong>Hours:</strong> 11:00 AM - 12:00 PM & 5:00 PM - 8:00 PM</p>
                                <p class="text-muted small">Parents/guardians allowed 24/7, other visitors as scheduled</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Visitor Guidelines -->
            <div class="row mt-4">
                <div class="col-12">
                    <div class="guidelines-section bg-white shadow-sm rounded p-4">
                        <h3 class="text-center mb-4">
                            <i class="fas fa-clipboard-list text-success mr-2"></i>
                            Visitor Guidelines & Policies
                        </h3>
                        
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <h5 class="text-success"><i class="fas fa-check-circle mr-2"></i>What to Bring</h5>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-id-card text-muted mr-2"></i>Valid photo identification</li>
                                    <li><i class="fas fa-hand-sanitizer text-muted mr-2"></i>Personal hand sanitizer (optional)</li>
                                    <li><i class="fas fa-mask text-muted mr-2"></i>Face mask (required)</li>
                                    <li><i class="fas fa-mobile-alt text-muted mr-2"></i>Mobile phone on silent mode</li>
                                </ul>
                            </div>
                            <div class="col-md-6 mb-4">
                                <h5 class="text-danger"><i class="fas fa-times-circle mr-2"></i>What NOT to Bring</h5>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-seedling text-muted mr-2"></i>Fresh flowers or plants</li>
                                    <li><i class="fas fa-utensils text-muted mr-2"></i>Outside food without permission</li>
                                    <li><i class="fas fa-smoking text-muted mr-2"></i>Smoking materials</li>
                                    <li><i class="fas fa-volume-up text-muted mr-2"></i>Loud electronic devices</li>
                                </ul>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-6 mb-4">
                                <h5 class="text-primary"><i class="fas fa-users mr-2"></i>Visitor Limits</h5>
                                <div class="visitor-limits">
                                    <div class="limit-item mb-2">
                                        <span class="badge badge-primary">General Wards:</span> Maximum 3 visitors at a time
                                    </div>
                                    <div class="limit-item mb-2">
                                        <span class="badge badge-primary">Private Rooms:</span> Maximum 4 visitors at a time
                                    </div>
                                    <div class="limit-item mb-2">
                                        <span class="badge badge-primary">Critical Care:</span> Maximum 2 visitors at a time
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <h5 class="text-warning"><i class="fas fa-shield-alt mr-2"></i>Health & Safety</h5>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-thermometer-half text-muted mr-2"></i>Temperature screening required</li>
                                    <li><i class="fas fa-hand-holding-water text-muted mr-2"></i>Hand sanitization mandatory</li>
                                    <li><i class="fas fa-head-side-mask text-muted mr-2"></i>Face masks must be worn at all times</li>
                                    <li><i class="fas fa-people-arrows text-muted mr-2"></i>Maintain social distancing</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Special Circumstances -->
            <div class="row mt-4">
                <div class="col-md-4 mb-3">
                    <div class="special-card bg-gradient-success text-white p-4 rounded text-center">
                        <i class="fas fa-baby fa-3x mb-3"></i>
                        <h5>Maternity Ward</h5>
                        <p class="mb-2">Special visiting arrangements for new mothers and babies</p>
                        <small>24/7 access for partners, restricted hours for others</small>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="special-card bg-gradient-info text-white p-4 rounded text-center">
                        <i class="fas fa-ambulance fa-3x mb-3"></i>
                        <h5>Emergency Department</h5>
                        <p class="mb-2">Limited visitor access based on patient condition</p>
                        <small>One companion allowed, subject to medical team approval</small>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="special-card bg-gradient-warning text-white p-4 rounded text-center">
                        <i class="fas fa-user-clock fa-3x mb-3"></i>
                        <h5>Extended Stays</h5>
                        <p class="mb-2">Special arrangements for long-term patients</p>
                        <small>Contact patient services for extended visiting options</small>
                    </div>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="row mt-5">
                <div class="col-12">
                    <div class="contact-info bg-light p-4 rounded">
                        <h4 class="text-center mb-4">
                            <i class="fas fa-phone-alt text-success mr-2"></i>
                            Need More Information?
                        </h4>
                        <div class="row text-center">
                            <div class="col-md-3 mb-3">
                                <i class="fas fa-info-circle fa-2x text-primary mb-2"></i>
                                <h6>Patient Information</h6>
                                <p class="mb-0"><strong>(+94) 11 234 5678</strong></p>
                                <small class="text-muted">Ext: 101</small>
                            </div>
                            <div class="col-md-3 mb-3">
                                <i class="fas fa-user-nurse fa-2x text-success mb-2"></i>
                                <h6>Nursing Station</h6>
                                <p class="mb-0"><strong>(+94) 11 234 5678</strong></p>
                                <small class="text-muted">Ext: 200</small>
                            </div>
                            <div class="col-md-3 mb-3">
                                <i class="fas fa-shield-alt fa-2x text-warning mb-2"></i>
                                <h6>Security</h6>
                                <p class="mb-0"><strong>(+94) 11 234 5678</strong></p>
                                <small class="text-muted">Ext: 911</small>
                            </div>
                            <div class="col-md-3 mb-3">
                                <i class="fas fa-concierge-bell fa-2x text-info mb-2"></i>
                                <h6>Patient Services</h6>
                                <p class="mb-0"><strong>(+94) 11 234 5678</strong></p>
                                <small class="text-muted">Ext: 150</small>
                            </div>
                        </div>
                    </div>
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

    <!-- Optional JavaScript -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
