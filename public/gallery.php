<?php
include_once('../src/hms/include/config.php');
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Thushari Vision House - Gallery</title>    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/header-extensions.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/testimonials.css" />
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* Additional Gallery Styles */
        .gallery-item {
            margin-bottom: 30px;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }
        
        .gallery-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        
        .gallery-item img {
            transition: all 0.5s ease;
        }
        
        .gallery-item:hover img {
            transform: scale(1.05);
        }
        
        .gallery-caption {
            padding: 15px;
            background: white;
        }
        
        .gallery-caption h5 {
            margin: 0;
            color: #28a745;
            font-weight: 600;
        }
        
        .gallery-caption p {
            margin: 5px 0 0;
            font-size: 14px;
            color: #666;
        }
        
        .gallery-filter {
            margin-bottom: 30px;
        }
        
        .filter-button {
            margin: 0 5px;
            padding: 8px 20px;
            border-radius: 30px;
            background-color: #f8f9fa;
            color: #333;
            border: none;
            transition: all 0.3s ease;
        }
        
        .filter-button:hover, .filter-button.active {
            background-color: #28a745;
            color: white;
        }
    </style>
</head>

<body>
    <!-- ################# Header Starts Here #######################-->
    <header id="menu-jk">
        <div id="nav-head" class="header-nav">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-3 col-sm-12" style="color:#28a745;font-weight:bold; font-size:32px; margin-top: 0 !important;">TVH
                       <a data-toggle="collapse" data-target="#menu" href="#menu" class="d-block d-md-none"><i class="fas small-menu fa-bars"></i></a>
                    </div>
                    <div id="menu" class="col-lg-8 col-md-9 d-none d-md-block nav-item">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="services.php">Services</a></li>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="gallery.php" class="active">Gallery</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                            <li><a href="login.php">Logins</a></li>  
                        </ul>                        <div class="mobile-appointment d-md-none">
                            <a class="btn btn-appointment" href="../src/hms/user-login.php"><i class="fas fa-calendar-check"></i> Book an Appointment</a>
                        </div>
                    </div>
                    <div class="col-lg-2 d-none d-lg-block appoint">
                        <a class="btn btn-appointment" href="../src/hms/user-login.php"><i class="fas fa-calendar-check"></i> Book an Appointment</a>
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
                    <h2>Our Gallery</h2>
                    <p>View our facilities and healthcare environment</p>
                </div>
            </div>
        </div>
    </div>

    <!-- ################# Gallery Starts Here #######################-->
    <div class="gallery">    
        <div class="container">
            <div class="inner-title">
                <h2>Our Gallery</h2>
                <p>Take a visual tour of our facilities and services</p>
            </div>
            
            <div class="row">
                <div class="gallery-filter d-none d-sm-block text-center">
                    <button class="btn btn-default filter-button active" data-filter="all">All</button>
                    <button class="btn btn-default filter-button" data-filter="hdpe">Dental</button>
                    <button class="btn btn-default filter-button" data-filter="sprinkle">Cardiology</button>
                    <button class="btn btn-default filter-button" data-filter="spray">Neurology</button>
                    <button class="btn btn-default filter-button" data-filter="irrigation">Laboratory</button>
                    <button class="btn btn-default filter-button" data-filter="facilities">Facilities</button>
                </div>
                
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe">
                    <div class="gallery-item">
                        <img src="assets/images/gallery/gallery_01.jpg" class="img-fluid" alt="Dental Department">
                        <div class="gallery-caption">
                            <h5>Dental Department</h5>
                            <p>State-of-the-art dental care equipment</p>
                        </div>
                    </div>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter sprinkle">
                    <div class="gallery-item">
                        <img src="assets/images/gallery/gallery_02.jpg" class="img-fluid" alt="Cardiology Department">
                        <div class="gallery-caption">
                            <h5>Cardiology Department</h5>
                            <p>Advanced cardiac care facilities</p>
                        </div>
                    </div>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter hdpe">
                    <div class="gallery-item">
                        <img src="assets/images/gallery/gallery_03.jpg" class="img-fluid" alt="Dental Treatment Room">
                        <div class="gallery-caption">
                            <h5>Dental Treatment Room</h5>
                            <p>Comfortable environment for dental procedures</p>
                        </div>
                    </div>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter irrigation">
                    <div class="gallery-item">
                        <img src="assets/images/gallery/gallery_04.jpg" class="img-fluid" alt="Laboratory">
                        <div class="gallery-caption">
                            <h5>Laboratory</h5>
                            <p>Modern diagnostic equipment for accurate testing</p>
                        </div>
                    </div>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter spray">
                    <div class="gallery-item">
                        <img src="assets/images/gallery/gallery_05.jpg" class="img-fluid" alt="Neurology Department">
                        <div class="gallery-caption">
                            <h5>Neurology Department</h5>
                            <p>Specialized care for neurological conditions</p>
                        </div>
                    </div>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter spray">
                    <div class="gallery-item">
                        <img src="assets/images/gallery/gallery_06.jpg" class="img-fluid" alt="Neurology Consultation">
                        <div class="gallery-caption">
                            <h5>Neurology Consultation</h5>
                            <p>Expert neurologists providing personalized care</p>
                        </div>
                    </div>
                </div>
                
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter facilities">
                    <div class="gallery-item">
                        <img src="assets/images/why.jpg" class="img-fluid" alt="Hospital Building">
                        <div class="gallery-caption">
                            <h5>Hospital Building</h5>
                            <p>Modern architectural design for optimal healthcare delivery</p>
                        </div>
                    </div>
                </div>
                
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter facilities">
                    <div class="gallery-item">
                        <img src="assets/images/slider/slider_2.jpg" class="img-fluid" alt="Reception Area">
                        <div class="gallery-caption">
                            <h5>Reception Area</h5>
                            <p>Welcoming environment for patients and visitors</p>
                        </div>
                    </div>
                </div>
                
                <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12 filter facilities">
                    <div class="gallery-item">
                        <img src="assets/images/slider/slider_3.jpg" class="img-fluid" alt="Patient Care">
                        <div class="gallery-caption">
                            <h5>Patient Care</h5>
                            <p>Dedicated healthcare professionals providing quality care</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
        $(document).ready(function(){
            // Gallery filtering
            $(".filter-button").click(function(){
                var value = $(this).attr('data-filter');
                
                // Toggle active class
                $(".filter-button").removeClass("active");
                $(this).addClass("active");
                
                if(value == "all") {
                    $('.filter').show('1000');
                } else {
                    $(".filter").not('.'+value).hide('3000');
                    $('.filter').filter('.'+value).show('3000');
                }
            });
        });
    </script>
</body>

</html>
