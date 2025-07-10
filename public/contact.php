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
    <link rel="stylesheet" type="text/css" href="assets/css/testimonials.css" />
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
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
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        
        .contact-form h4 {
            color: #28a745;
            margin-bottom: 20px;
            font-weight: 600;
        }
        
        .contact-form .form-control {
            border-radius: 0;
            margin-bottom: 20px;
            border: 1px solid #ddd;
        }
        
        .contact-form .form-control:focus {
            box-shadow: none;
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
                            <li><a href="news-updates.php">News & Updates</a></li>
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
                        <h4>Send Us a Message</h4>
                        <form method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" placeholder="Enter Name" name="fullname" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="emailid" placeholder="Enter Email Address" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" name="mobileno" placeholder="Enter Mobile Number" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <textarea rows="5" placeholder="Enter Your Message" class="form-control" name="description" required></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-success" type="submit" name="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="appointment-info">
                        <h4>For Appointments</h4>
                        <p>To schedule an appointment with one of our healthcare professionals, you can:</p>
                        <ul>
                            <li><i class="fas fa-check-circle"></i> Book online through our patient portal</li>
                            <li><i class="fas fa-check-circle"></i> Call our appointment line at +94 123-456-7890</li>
                            <li><i class="fas fa-check-circle"></i> Visit our reception desk during working hours</li>
                        </ul>
                        <p>Emergency cases are always given priority. If you're experiencing a medical emergency, please call our emergency number or visit our emergency department immediately.</p>
                        <div class="mt-4">
                            <a class="btn btn-appointment" href="hms/user-login.php"><i class="fas fa-calendar-check"></i> Book an Appointment</a>
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
