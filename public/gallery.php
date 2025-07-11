<?php
include_once('../src/hms/include/config.php');
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Thushari Vision House - Gallery</title>
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/header-extensions.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" type="text/css" href="assets/css/nav-center-fix.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" type="text/css" href="assets/css/gallery.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" type="text/css" href="assets/css/testimonials.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/gap-fix.css" />
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* Critical inline style to fix gap */
        header { margin: 0 !important; padding: 0 !important; font-size: 0 !important; }
        body { overflow-x: hidden; }
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
                            <li><a href="gallery.php" class="active">Gallery</a></li>
                            <li><a href="visiting-hours.php">Visiting Hours</a></li>
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
            <div class="row">
                <div class="col-12">
                    <div class="gallery-filter d-none d-sm-block text-center">
                        <button class="btn filter-button active" data-filter="all"><span>All</span></button>
                        <button class="btn filter-button" data-filter="hdpe"><span>Dental</span></button>
                        <button class="btn filter-button" data-filter="sprinkle"><span>Cardiology</span></button>
                        <button class="btn filter-button" data-filter="spray"><span>Neurology</span></button>
                        <button class="btn filter-button" data-filter="irrigation"><span>Laboratory</span></button>
                        <button class="btn filter-button" data-filter="facilities"><span>Facilities</span></button>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="gallery_product col-lg-4 col-md-6 col-sm-6 col-12 filter hdpe">
                    <div class="gallery-item">
                        <img src="assets/images/gallery/gallery_01.jpg" class="img-fluid" alt="Dental Department">
                        <div class="gallery-caption">
                            <h5>Dental Department</h5>
                            <p>State-of-the-art dental care equipment</p>
                        </div>
                    </div>
                </div>

                <div class="gallery_product col-lg-4 col-md-6 col-sm-6 col-12 filter sprinkle">
                    <div class="gallery-item">
                        <img src="assets/images/gallery/gallery_02.jpg" class="img-fluid" alt="Cardiology Department">
                        <div class="gallery-caption">
                            <h5>Cardiology Department</h5>
                            <p>Advanced cardiac care facilities</p>
                        </div>
                    </div>
                </div>

                <div class="gallery_product col-lg-4 col-md-6 col-sm-6 col-12 filter hdpe">
                    <div class="gallery-item">
                        <img src="assets/images/gallery/gallery_03.jpg" class="img-fluid" alt="Dental Treatment Room">
                        <div class="gallery-caption">
                            <h5>Dental Treatment Room</h5>
                            <p>Comfortable environment for dental procedures</p>
                        </div>
                    </div>
                </div>

                <div class="gallery_product col-lg-4 col-md-6 col-sm-6 col-12 filter irrigation">
                    <div class="gallery-item">
                        <img src="assets/images/gallery/gallery_04.jpg" class="img-fluid" alt="Laboratory">
                        <div class="gallery-caption">
                            <h5>Laboratory</h5>
                            <p>Modern diagnostic equipment for accurate testing</p>
                        </div>
                    </div>
                </div>

                <div class="gallery_product col-lg-4 col-md-6 col-sm-6 col-12 filter spray">
                    <div class="gallery-item">
                        <img src="assets/images/gallery/gallery_05.jpg" class="img-fluid" alt="Neurology Department">
                        <div class="gallery-caption">
                            <h5>Neurology Department</h5>
                            <p>Specialized care for neurological conditions</p>
                        </div>
                    </div>
                </div>

                <div class="gallery_product col-lg-4 col-md-6 col-sm-6 col-12 filter spray">
                    <div class="gallery-item">
                        <img src="assets/images/gallery/gallery_06.jpg" class="img-fluid" alt="Neurology Consultation">
                        <div class="gallery-caption">
                            <h5>Neurology Consultation</h5>
                            <p>Expert neurologists providing personalized care</p>
                        </div>
                    </div>
                </div>

                <div class="gallery_product col-lg-4 col-md-6 col-sm-6 col-12 filter facilities">
                    <div class="gallery-item">
                        <img src="assets/images/gallery/gallery_08.jpg" class="img-fluid" alt="Hospital Interior">
                        <div class="gallery-caption">
                            <h5>Hospital Interior</h5>
                            <p>Modern and comfortable interior design for patient well-being</p>
                        </div>
                    </div>
                </div>

                <div class="gallery_product col-lg-4 col-md-6 col-sm-6 col-12 filter facilities">
                    <div class="gallery-item">
                        <img src="assets/images/gallery/gallery_09.jpg" class="img-fluid" alt="Waiting Area">
                        <div class="gallery-caption">
                            <h5>Waiting Area</h5>
                            <p>Comfortable seating areas for patients and families</p>
                        </div>
                    </div>
                </div>

                <div class="gallery_product col-lg-4 col-md-6 col-sm-6 col-12 filter irrigation">
                    <div class="gallery-item">
                        <img src="assets/images/gallery/gallery_10.jpg" class="img-fluid" alt="Advanced Laboratory">
                        <div class="gallery-caption">
                            <h5>Advanced Laboratory</h5>
                            <p>State-of-the-art diagnostic and testing facilities</p>
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
                        $ret = mysqli_query($con, "select * from tblpage where PageType='contactus' ");
                        while ($row = mysqli_fetch_array($ret)) {
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
            // Gallery filtering with smooth animations
            $(".filter-button").click(function() {
                var value = $(this).attr('data-filter');

                // Toggle active class
                $(".filter-button").removeClass("active");
                $(this).addClass("active");

                if (value == "all") {
                    $('.gallery_product').removeClass('hide').addClass('show');
                    $('.gallery_product').fadeIn(500);
                } else {
                    $(".gallery_product").addClass('hide').removeClass('show');
                    $(".gallery_product").fadeOut(300, function() {
                        $('.gallery_product.filter.' + value).removeClass('hide').addClass('show');
                        $('.gallery_product.filter.' + value).fadeIn(500);
                    });
                }
            });

            // Add loading animation on page load
            $('.gallery_product').each(function(index) {
                $(this).css('animation-delay', (index * 0.1) + 's');
            });
            
            // Header active link management
            function setActiveGalleryLink() {
                var currentPage = window.location.pathname.split("/").pop();
                // Check if it's gallery.php or with a hash
                if (currentPage === 'gallery.php' || currentPage.startsWith('gallery.php#')) {
                    $('#menu ul li a').removeClass('active');
                    $('#menu ul li a[href="gallery.php"]').addClass('active');
                }
            }
            // Set active link on page load
            setActiveGalleryLink();

            // Enforce active link on scroll
            $(window).on('scroll', function() {
                setActiveGalleryLink();
            });
        });
    </script>
</body>

</html>