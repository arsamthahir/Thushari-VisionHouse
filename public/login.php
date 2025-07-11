<?php
session_start();
include_once('../src/hms/include/config.php');
// We need to check login for a login portal page
// include_once('../src/hms/include/checklogin.php');
// check_login();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Thushari Vision House - Logins</title>    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/header-extensions.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" type="text/css" href="assets/css/testimonials.css" />
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* Additional Login Page Styles */
        .login-box {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            margin-bottom: 30px;
        }
        
        .login-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }
        
        .login-box img {
            height: 200px;
            object-fit: cover;
            border-bottom: 3px solid #28a745;
        }
        
        .login-info {
            padding: 20px;
            background: white;
            text-align: center;
        }
        
        .login-info h5 {
            color: #333;
            font-weight: 600;
            margin-bottom: 15px;
        }
        
        .login-btn {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 8px 25px;
            border-radius: 30px;
            transition: all 0.3s ease;
        }
        
        .login-btn:hover {
            background-color: #218838;
            transform: scale(1.05);
        }
    </style>
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
                            <li><a href="contact.php">Contact Us</a></li>
                            <li><a href="login.php" class="active">Logins</a></li>  
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
                    <h2>Login Portal</h2>
                    <p>Access your account based on your role</p>
                </div>
            </div>
        </div>
    </div>

    <!-- ################# Login Section Starts Here #######################-->
    <section class="our-blog container-fluid">
        <div class="container">
            <div class="inner-title">
                <h2>Logins</h2>
                <p>Select the appropriate portal based on your role</p>
            </div>
            
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="login-box">
                        <img src="assets/images/patient.jpg" alt="Patient Portal" class="img-fluid w-100">
                        <div class="login-info">
                            <h5>Patient Login</h5>
                            <p>Access your medical records, appointments, and communicate with your healthcare providers.</p>                            <a href="../src/hms/user-login.php" target="_blank">
                                <button class="btn login-btn">Login Now</button>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="login-box">
                        <img src="assets/images/doctor.jpg" alt="Doctor Portal" class="img-fluid w-100">
                        <div class="login-info">
                            <h5>Doctor Login</h5>
                            <p>Access patient information, manage appointments, and update treatment plans.</p>                            <a href="../src/hms/doctor/index.php" target="_blank">
                                <button class="btn login-btn">Login Now</button>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="login-box">
                        <img src="assets/images/admin.jpg" alt="Admin Portal" class="img-fluid w-100">
                        <div class="login-info">
                            <h5>Admin Login</h5>
                            <p>Manage hospital operations, staff, and system configurations.</p>                            <a href="../src/hms/admin/index.php" target="_blank">
                                <button class="btn login-btn">Login Now</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row mt-5">
                <div class="col-md-6 offset-md-3">
                    <div class="card shadow">
                        <div class="card-body">                            <h4 class="text-center mb-4">Don't have an account?</h4>
                            <p class="text-center">If you're a new patient, you can register for an account to access our online services.</p>
                            <div class="text-center mt-4">
                                <a href="../src/hms/registration.php" class="btn btn-primary">Register Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ################# Footer Starts Here #######################-->    <!-- ################# Footer Starts Here #######################-->
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
    <script src="assets/js/script.js"></script>
</body>

</html>
