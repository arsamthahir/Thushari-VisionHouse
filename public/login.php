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
    <link rel="stylesheet" type="text/css" href="assets/css/nav-center-fix.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" type="text/css" href="assets/css/testimonials.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/gap-fix.css" />
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* Critical inline style to fix gap */
        header { margin: 0 !important; padding: 0 !important; font-size: 0 !important; }
        body { overflow-x: hidden; }
        
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

        /* Page Title Styles */
        .page-title {
            background: linear-gradient(90deg, #27ae60 0%, #219150 100%);
            padding: 60px 0;
            margin-bottom: 0;
        }

        .page-title h2 {
            color: #fff;
            font-size: 3rem;
            font-weight: 700;
            text-shadow: 0 2px 8px rgba(0,0,0,0.10);
            margin-bottom: 10px;
        }

        .page-title p {
            color: #fff;
            font-size: 1.25rem;
            font-weight: 400;
            text-shadow: 0 1px 4px rgba(0,0,0,0.10);
        }

        /* Enhanced Login Card Styles */
        .login-box {
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 5px 24px rgba(40,167,69,0.10);
            transition: all 0.3s ease;
            margin-bottom: 30px;
            background: #fff;
            display: flex;
            flex-direction: column;
            align-items: stretch;
            min-height: 420px;
            max-width: 370px;
            margin-left: auto;
            margin-right: auto;
        }
        .login-box img {
            height: 180px;
            object-fit: cover;
            border-bottom: 3px solid #27ae60;
        }
        .login-info {
            flex: 1;
            padding: 24px 18px 18px 18px;
            background: white;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .login-info h5 {
            color: #219150;
            font-weight: 700;
            margin-bottom: 12px;
            font-size: 1.3rem;
        }
        .login-info p {
            font-size: 1rem;
            color: #555;
            margin-bottom: 18px;
        }
        .login-btn {
            background-color: #2196f3;
            color: #fff;
            border: none;
            padding: 10px 32px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 1.1rem;
            box-shadow: 0 2px 8px rgba(33,150,243,0.10);
            transition: all 0.3s ease;
        }
        .login-btn:hover {
            background-color: #1769aa;
            color: #fff;
            transform: scale(1.05);
        }
        @media (min-width: 992px) {
            .login-box {
                min-height: 420px;
                max-width: 370px;
            }
        }
        @media (max-width: 991px) {
            .login-box {
                min-height: 420px;
                max-width: 100%;
            }
        }
        .row.login-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 24px;
        }
        /* Ensure login cards are always in one line on desktop */
        @media (min-width: 992px) {
            .row.login-row {
                display: flex;
                flex-wrap: nowrap;
                justify-content: center;
                align-items: stretch;
                gap: 32px;
            }
            .row.login-row > .col-lg-4 {
                flex: 0 0 32%;
                max-width: 32%;
            }
        }
        /* Enhanced Patient Registration Card Styles */
        .patient-register-card {
            border-radius: 22px !important;
            background: linear-gradient(135deg, #e8f5e9 0%, #f1f8e9 100%) !important;
            box-shadow: 0 8px 32px rgba(40,167,69,0.13) !important;
            border: none !important;
            position: relative;
            overflow: hidden;
        }
        .patient-register-card .card-body {
            padding: 48px 32px !important;
            position: relative;
        }
        .patient-register-card .fa-user-plus {
            font-size: 2.6rem;
            color: #27ae60;
            margin-bottom: 16px;
            background: rgba(39,174,96,0.08);
            border-radius: 50%;
            padding: 18px;
            box-shadow: 0 2px 8px rgba(39,174,96,0.08);
        }
        .patient-register-card h4 {
            font-weight: 700;
            color: #219150;
            margin-bottom: 14px;
            font-size: 1.6rem;
        }
        .patient-register-card p {
            font-size: 1.18rem;
            color: #333;
            margin-bottom: 28px;
        }
        .patient-register-card .btn-success {
            border-radius: 30px;
            font-weight: 600;
            font-size: 1.15rem;
            padding: 14px 44px;
            box-shadow: 0 2px 12px rgba(40,167,69,0.13);
            background: linear-gradient(90deg, #27ae60 0%, #2ecc71 100%);
            border: none;
            position: relative;
            transition: all 0.35s cubic-bezier(.68,-0.55,.27,1.55);
        }
        .patient-register-card .btn-success:hover {
            background: linear-gradient(90deg, #2ecc71 0%, #27ae60 100%);
            box-shadow: 0 8px 24px rgba(40,167,69,0.18);
            transform: scale(1.07) translateY(-2px);
            color: #fff;
        }
        .patient-register-card .btn-success:active {
            transform: scale(0.98);
        }
        .patient-register-card .btn-success:after {
            content: '';
            position: absolute;
            left: 50%;
            top: 50%;
            width: 0;
            height: 0;
            background: rgba(255,255,255,0.18);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: width 0.4s cubic-bezier(.68,-0.55,.27,1.55), height 0.4s cubic-bezier(.68,-0.55,.27,1.55);
            z-index: 0;
        }
        .patient-register-card .btn-success:hover:after {
            width: 180%;
            height: 180%;
        }
    </style>
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
    <div class="page-title" style="background: linear-gradient(90deg, #27ae60 0%, #219150 100%); padding: 60px 0; margin-bottom: 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 style="color: #fff; font-size: 3rem; font-weight: 700; text-shadow: 0 2px 8px rgba(0,0,0,0.10); margin-bottom: 10px;">Login Portal</h2>
                    <p style="color: #fff; font-size: 1.25rem; font-weight: 400; text-shadow: 0 1px 4px rgba(0,0,0,0.10);">Access your account based on your role</p>
                </div>
            </div>
        </div>
    </div>

    <!-- ################# Login Section Starts Here #######################-->
    <section class="our-blog container-fluid">
        <div class="container">
            
            <div class="row login-row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="login-box">
                        <img src="assets/images/patient.jpg" alt="Patient Portal" class="img-fluid w-100">
                        <div class="login-info">
                            <h5>Patient Login</h5>
                            <p>Access your medical records, appointments, and communicate with your healthcare providers.</p>
                            <a href="../src/hms/user-login.php" target="_blank">
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
                            <p>Access patient information, manage appointments, and update treatment plans.</p>
                            <a href="../src/hms/doctor/index.php" target="_blank">
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
                            <p>Manage hospital operations, staff, and system configurations.</p>
                            <a href="../src/hms/admin/index.php" target="_blank">
                                <button class="btn login-btn">Login Now</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row mt-5">
                <div class="col-md-6 offset-md-3">
                    <div class="card shadow patient-register-card" style="border-radius: 18px; background: linear-gradient(135deg, #e8f5e9 0%, #f1f8e9 100%); box-shadow: 0 6px 24px rgba(40,167,69,0.10);">
                        <div class="card-body text-center" style="padding: 38px 28px;">
                            <div style="font-size: 2.2rem; color: #27ae60; margin-bottom: 12px;"><i class="fas fa-user-plus"></i></div>
                            <h4 class="mb-3" style="font-weight: 700; color: #219150;">Don't have an account?</h4>
                            <p style="font-size: 1.15rem; color: #333; margin-bottom: 24px;">If you're a new patient, you can register for an account to access our online services.</p>
                            <a href="../src/hms/registration.php" class="btn btn-success btn-lg" style="border-radius: 30px; font-weight: 600; font-size: 1.1rem; padding: 12px 38px; box-shadow: 0 2px 8px rgba(40,167,69,0.10);"><i class="fas fa-user-edit mr-2"></i> Register Now</a>
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

    <script>
        $(document).ready(function() {
            // Header active link management
            function setActiveLoginLink() {
                var currentPage = window.location.pathname.split("/").pop();
                // Check if it's login.php or with a hash
                if (currentPage === 'login.php' || currentPage.startsWith('login.php#')) {
                    $('#menu ul li a').removeClass('active');
                    $('#menu ul li a[href="login.php"]').addClass('active');
                }
            }
            // Set active link on page load
            setActiveLoginLink();

            // Enforce active link on scroll
            $(window).on('scroll', function() {
                setActiveLoginLink();
            });
        });
    </script>
</body>

</html>
