<?php
include_once('../src/hms/include/config.php');
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$dscrption=$_POST['description'];
$query=mysqli_query($con,"insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
echo "<script>alert('Your message has been sent successfully');</script>";
echo "<script>window.location.href ='contact.php'</script>";
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Thushari Vision House - Contact Us</title>    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/header-extensions.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" type="text/css" href="assets/css/nav-center-fix.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" type="text/css" href="assets/css/gallery.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" type="text/css" href="assets/css/enhanced-sections.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" type="text/css" href="assets/css/testimonials.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/gap-fix.css" />
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* Critical inline style to fix gap */
        header { margin: 0 !important; padding: 0 !important; font-size: 0 !important; }
        body { overflow-x: hidden; }
    </style>
    <style>
        /* Additional Contact Page Styles */
        .contact-info-box {
            padding: 30px;
            background: #f8f9fa;
            border-radius: 5px;
            margin-bottom: 30px;
            transition: all 0.3s ease;
            border-bottom: 3px solid #28a745;
        }
        
        .contact-info-box:hover {
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transform: translateY(-5px);
        }
        
        .contact-info-box i {
            font-size: 40px;
            color: #28a745;
            margin-bottom: 20px;
        }
        
        .contact-info-box h5 {
            font-size: 18px;
            margin-bottom: 10px;
            color: #333;
        }
        
        .contact-info-box p {
            font-size: 14px;
            color: #666;
        }
        
        .contact-form {
            background: white;
            padding: 0;
            border-radius: 12px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            height: 100%;
            position: relative;
        }
        
        .contact-form::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            width: 5px;
            background: linear-gradient(to bottom, #28a745, #20c997);
        }
        
        .form-header {
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
            padding: 28px 30px;
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .form-header::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 100%;
            height: 200%;
            background: rgba(255,255,255,0.1);
            transform: rotate(30deg);
        }
        
        .form-header h4 {
            margin: 0;
            font-weight: 700;
            font-size: 24px;
            color: white;
            text-shadow: 0 2px 4px rgba(0,0,0,0.15);
            letter-spacing: 0.5px;
            position: relative;
            z-index: 2;
        }
        
        .form-content {
            padding: 30px;
        }
        
        .contact-form .form-control {
            border-radius: 8px;
            margin-bottom: 20px;
            border: 1px solid rgba(0,0,0,0.08);
            padding: 12px 15px;
            transition: all 0.3s ease;
        }
        
        .contact-form .form-control:focus {
            box-shadow: 0 0 0 3px rgba(40, 167, 69, 0.1);
            border-color: #28a745;
        }
        
        .map-section {
            margin-top: 50px;
            margin-bottom: 50px;
        }
        
        .map-container {
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        
        /* Premium Appointment Section Styles */
        .appointment-info {
            background: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            height: 100%;
            border: none;
            position: relative;
        }
        
        .appointment-info::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            width: 5px;
            background: linear-gradient(to bottom, #28a745, #20c997);
        }
        
        .appointment-header {
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
            padding: 28px 30px;
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .appointment-header::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 100%;
            height: 200%;
            background: rgba(255,255,255,0.1);
            transform: rotate(30deg);
        }
        
        .appointment-header::after {
            content: '';
            position: absolute;
            bottom: -30px;
            right: -30px;
            width: 90px;
            height: 90px;
            border-radius: 50%;
            background: rgba(255,255,255,0.08);
            z-index: 1;
        }
        
        .header-content {
            display: flex;
            align-items: center;
            position: relative;
            z-index: 2;
        }
        
        .icon-circle {
            width: 56px;
            height: 56px;
            background: rgba(255,255,255,0.15);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 18px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            border: 2px solid rgba(255,255,255,0.2);
        }
        
        .icon-circle i {
            font-size: 26px;
            color: white;
            text-shadow: 0 2px 4px rgba(0,0,0,0.15);
        }
        
        .appointment-header h4 {
            margin: 0;
            font-weight: 700;
            font-size: 24px;
            color: white;
            text-shadow: 0 2px 4px rgba(0,0,0,0.15);
            letter-spacing: 0.5px;
        }
        
        .appointment-content {
            padding: 30px;
            position: relative;
        }
        
        .appointment-options {
            margin: 28px 0;
        }
        
        .appointment-option {
            display: flex;
            align-items: center;
            margin-bottom: 22px;
            padding-bottom: 22px;
            border-bottom: 1px dashed rgba(0,0,0,0.08);
            position: relative;
            transition: all 0.3s ease;
            padding-left: 5px;
        }
        
        .appointment-option:hover {
            transform: translateX(5px);
        }
        
        .appointment-option:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        
        .option-icon {
            width: 50px;
            height: 50px;
            background: rgba(40, 167, 69, 0.08);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 18px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(40, 167, 69, 0.05);
            border: 1px solid rgba(40, 167, 69, 0.1);
        }
        
        .appointment-option:hover .option-icon {
            background: rgba(40, 167, 69, 0.15);
            transform: scale(1.05);
            box-shadow: 0 8px 15px rgba(40, 167, 69, 0.1);
        }
        
        .option-icon i {
            font-size: 22px;
            color: #28a745;
        }
        
        .option-text {
            display: flex;
            flex-direction: column;
        }
        
        .option-text strong {
            font-weight: 600;
            color: #222;
            font-size: 17px;
            margin-bottom: 4px;
            letter-spacing: 0.2px;
        }
        
        .option-text span {
            color: #555;
            font-size: 15px;
        }
        
        .emergency-notice {
            margin-top: 25px;
            padding: 20px;
            background: rgba(255, 193, 7, 0.08);
            border-radius: 10px;
            display: flex;
            align-items: flex-start;
            box-shadow: 0 5px 15px rgba(255, 193, 7, 0.1);
            border: 1px solid rgba(255, 193, 7, 0.2);
            position: relative;
            overflow: hidden;
        }
        
        .emergency-notice::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 4px;
            background: linear-gradient(to bottom, #ffc107, #fd7e14);
        }
        
        .notice-icon {
            color: #ffc107;
            margin-right: 15px;
            font-size: 20px;
            margin-top: 2px;
        }
        
        .emergency-notice p {
            margin: 0;
            font-size: 14.5px;
            color: #444;
            line-height: 1.6;
        }
        
        .appointment-action {
            margin-top: 30px;
            text-align: center;
            position: relative;
        }
        
        .appointment-action::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 1px;
            background: rgba(0,0,0,0.06);
            z-index: 1;
        }
        
        .appointment-action .btn-appointment {
            padding: 14px 32px;
            font-weight: 600;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            box-shadow: 0 8px 20px rgba(40, 167, 69, 0.25);
            border-radius: 50px;
            position: relative;
            z-index: 2;
            font-size: 15px;
            letter-spacing: 0.5px;
        }
        
        .appointment-action .btn-appointment:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(40, 167, 69, 0.35);
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
        }
        
        .appointment-action .btn-appointment i {
            margin-right: 8px;
            font-size: 16px;
        }
        
        /* Message Form Additional Styling */
        .message-area {
            min-height: 150px;
            resize: none;
        }
        
        .form-group {
            margin-bottom: 20px;
            position: relative;
        }
        
        .form-submit {
            margin-top: 25px;
            text-align: center;
            position: relative;
        }
        
        .form-submit::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 1px;
            background: rgba(0,0,0,0.06);
            z-index: 1;
        }
        
        .btn-send-message {
            padding: 14px 32px;
            font-weight: 600;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            box-shadow: 0 8px 20px rgba(40, 167, 69, 0.25);
            border-radius: 50px;
            position: relative;
            z-index: 2;
            font-size: 15px;
            letter-spacing: 0.5px;
        }
        
        .btn-send-message:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(40, 167, 69, 0.35);
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
        }
        
        .btn-send-message i {
            margin-right: 8px;
        }
        
        /* Ensure form heights match */
        .contact-us-single .row {
            display: flex;
            flex-wrap: wrap;
        }
        
        .contact-us-single .col-md-7,
        .contact-us-single .col-md-5 {
            display: flex;
            flex-direction: column;
            margin-bottom: 30px;
        }
        
        .contact-form,
        .appointment-info {
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        
        .form-content,
        .appointment-content {
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        
        .form-content form {
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        
        .form-content .row:nth-last-child(2) {
            flex: 1;
        }
        
        .form-content .row:nth-last-child(2) .form-group {
            height: 100%;
        }
        
        .form-content .row:nth-last-child(2) .form-group textarea {
            height: 100%;
        }
        
        /* Responsive adjustments */
        @media (max-width: 767px) {
            .appointment-info {
                margin-top: 30px;
            }
            
            .appointment-header,
            .form-header {
                padding: 25px;
            }
            
            .appointment-content,
            .form-content {
                padding: 25px;
            }
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
                            <li><a href="contact.php" class="active">Contact Us</a></li>
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
                    <h2>Contact Us</h2>
                    <p>Get in touch with our healthcare professionals</p>
                </div>
            </div>
        </div>
    </div>

    <!-- ################# Contact Info #######################-->
    <section class="contact-info">
        <div class="container">
            <div class="inner-title">
                <h2>Get In Touch</h2>
                <p>We're here to help you with any inquiries</p>
            </div>
            
            <div class="row">
                <?php
                $ret=mysqli_query($con,"select * from tblpage where PageType='contactus' ");
                while ($row=mysqli_fetch_array($ret)) {
                ?>
                <div class="col-md-4">
                    <div class="contact-info-box text-center">
                        <i class="fas fa-map-marker-alt"></i>
                        <h5>Our Location</h5>
                        <p><?php echo $row['PageDescription'];?></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-info-box text-center">
                        <i class="fas fa-phone-alt"></i>
                        <h5>Call Us</h5>
                        <p>Phone: <?php echo $row['MobileNumber'];?></p>
                        <p>Emergency: +94 777-456-7890</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-info-box text-center">
                        <i class="fas fa-envelope"></i>
                        <h5>Email & Hours</h5>
                        <p>Email: <a href="mailto:<?php echo $row['Email'];?>"><?php echo $row['Email'];?></a></p>
                        <p>Hours: <?php echo $row['OpenningTime'];?></p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <!-- ################# Contact Form #######################-->
    <section class="contact-us-single">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="contact-form">
                        <div class="form-header">
                            <h4><i class="fas fa-envelope-open-text mr-2"></i> Send Us a Message</h4>
                        </div>
                        <div class="form-content">
                            <form method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" placeholder="Your Name" name="fullname" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="emailid" placeholder="Your Email" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="mobileno" placeholder="Your Phone Number" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea rows="5" placeholder="Your Message" class="form-control message-area" name="description" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-submit">
                                    <button class="btn btn-success btn-send-message" type="submit" name="submit">
                                        <i class="fas fa-paper-plane"></i> Send Message
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="appointment-info">
                        <div class="appointment-header">
                            <div class="header-content">
                                <div class="icon-circle">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                                <h4>Schedule an Appointment</h4>
                            </div>
                        </div>
                        <div class="appointment-content">
                            <p>Choose your preferred method to book an appointment with our healthcare professionals:</p>
                            <div class="appointment-options">
                                <div class="appointment-option">
                                    <div class="option-icon">
                                        <i class="fas fa-laptop-medical"></i>
                                    </div>
                                    <div class="option-text">
                                        <strong>Online Booking</strong>
                                        <span>Quick & convenient patient portal access</span>
                                    </div>
                                </div>
                                <div class="appointment-option">
                                    <div class="option-icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="option-text">
                                        <strong>Phone Appointment</strong>
                                        <span>Call us at +94 123-456-7890</span>
                                    </div>
                                </div>
                                <div class="appointment-option">
                                    <div class="option-icon">
                                        <i class="fas fa-hospital-user"></i>
                                    </div>
                                    <div class="option-text">
                                        <strong>In-Person Visit</strong>
                                        <span>Visit our reception during working hours</span>
                                    </div>
                                </div>
                            </div>
                            <div class="emergency-notice">
                                <div class="notice-icon">
                                    <i class="fas fa-exclamation-triangle"></i>
                                </div>
                                <p>Emergency cases are always given priority. If you're experiencing a medical emergency, please call our emergency number or visit our emergency department immediately.</p>
                            </div>
                            <div class="appointment-action">
                                <a class="btn btn-appointment" href="../src/hms/user-login.php"><i class="fas fa-calendar-check"></i> Book Your Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ################# Map Section #######################-->
    <section class="map-section">
        <div class="container">
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.798467128223!2d79.8950805142855!3d6.914682920397366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae259bb2f20f249%3A0x48702bd7a6c09d12!2sColombo%2C%20Sri%20Lanka!5e0!3m2!1sen!2sus!4v1621507426238!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
            function setActiveContactLink() {
                var currentPage = window.location.pathname.split("/").pop();
                // Check if it's contact.php or with a hash
                if (currentPage === 'contact.php' || currentPage.startsWith('contact.php#')) {
                    $('#menu ul li a').removeClass('active');
                    $('#menu ul li a[href="contact.php"]').addClass('active');
                }
            }
            // Set active link on page load
            setActiveContactLink();

            // Enforce active link on scroll
            $(window).on('scroll', function() {
                setActiveContactLink();
            });
            
            // Enhanced animations for appointment section
            function animateAppointmentSection() {
                var appointmentElement = $('.appointment-info');
                var position = appointmentElement.offset().top;
                var scrollPosition = $(window).scrollTop() + $(window).height() - 150;
                
                if (position < scrollPosition && !appointmentElement.hasClass('animated')) {
                    appointmentElement.addClass('animated');
                    
                    // Add premium entrance animation to the whole card
                    $('.appointment-info').addClass('animated fadeIn');
                    
                    // Animate header elements with bounce effect
                    setTimeout(function() {
                        $('.appointment-header').addClass('animated fadeInDown');
                        $('.icon-circle').addClass('animated bounceIn');
                    }, 200);
                    
                    // Staggered entrance for appointment options
                    setTimeout(function() {
                        $('.appointment-option').eq(0).addClass('animated fadeInRight');
                    }, 400);
                    
                    setTimeout(function() {
                        $('.appointment-option').eq(1).addClass('animated fadeInRight');
                    }, 600);
                    
                    setTimeout(function() {
                        $('.appointment-option').eq(2).addClass('animated fadeInRight');
                    }, 800);
                    
                    // Attention-grabbing animation for emergency notice
                    setTimeout(function() {
                        $('.emergency-notice').addClass('animated fadeIn');
                        $('.notice-icon').addClass('animated swing');
                    }, 1000);
                    
                    // Button animation with attention effect
                    setTimeout(function() {
                        $('.appointment-action').addClass('animated fadeIn');
                        $('.btn-appointment').addClass('animated pulse');
                    }, 1200);
                }
            }
            
            // Run animation check on scroll
            $(window).on('scroll', animateAppointmentSection);
            
            // Run once on page load
            setTimeout(function() {
                animateAppointmentSection();
            }, 800);
            
            // Add enhanced hover effects
            $('.appointment-option').hover(
                function() {
                    $(this).css('background', 'rgba(40, 167, 69, 0.03)');
                    $(this).css('border-radius', '8px');
                    $(this).find('.option-icon').css('transform', 'scale(1.08) rotate(5deg)');
                },
                function() {
                    $(this).css('background', 'transparent');
                    $(this).css('border-radius', '0');
                    $(this).find('.option-icon').css('transform', 'scale(1) rotate(0deg)');
                }
            );
            
            // Add pulsing effect to buttons
            setInterval(function() {
                $('.btn-appointment').addClass('animated pulse');
                setTimeout(function() {
                    $('.btn-appointment').removeClass('animated pulse');
                }, 1500);
            }, 4000);
            
            // Animate the contact form
            function animateContactForm() {
                var formElement = $('.contact-form');
                var position = formElement.offset().top;
                var scrollPosition = $(window).scrollTop() + $(window).height() - 150;
                
                if (position < scrollPosition && !formElement.hasClass('animated')) {
                    formElement.addClass('animated');
                    
                    // Add entrance animation
                    $('.contact-form').addClass('animated fadeIn');
                    
                    // Animate header
                    setTimeout(function() {
                        $('.form-header').addClass('animated fadeInDown');
                    }, 200);
                    
                    // Staggered entrance for form fields
                    setTimeout(function() {
                        $('.form-content .row').eq(0).addClass('animated fadeInLeft');
                    }, 400);
                    
                    setTimeout(function() {
                        $('.form-content .row').eq(1).addClass('animated fadeInLeft');
                    }, 500);
                    
                    setTimeout(function() {
                        $('.form-content .row').eq(2).addClass('animated fadeInLeft');
                    }, 600);
                    
                    // Button animation
                    setTimeout(function() {
                        $('.form-submit').addClass('animated fadeIn');
                        $('.btn-send-message').addClass('animated pulse');
                    }, 800);
                }
            }
            
            // Run animation for contact form
            $(window).on('scroll', animateContactForm);
            
            // Run once on page load
            setTimeout(function() {
                animateContactForm();
            }, 800);
            
            // Form field focus effects
            $('.form-control').focus(function() {
                $(this).parent().addClass('focused');
            }).blur(function() {
                if ($(this).val() === '') {
                    $(this).parent().removeClass('focused');
                }
            });
            
            // Ensure equal heights on window resize
            function equalizeHeights() {
                var formHeight = $('.contact-form').outerHeight();
                var appointmentHeight = $('.appointment-info').outerHeight();
                
                if ($(window).width() >= 768) {
                    if (formHeight > appointmentHeight) {
                        $('.appointment-info').css('height', formHeight + 'px');
                    } else if (appointmentHeight > formHeight) {
                        $('.contact-form').css('height', appointmentHeight + 'px');
                    }
                } else {
                    $('.appointment-info, .contact-form').css('height', '');
                }
            }
            
            // Run on page load and window resize
            $(window).on('load resize', equalizeHeights);
        });
    </script>
</body>

</html>
