<?php
include_once('../src/hms/include/config.php');
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$dscrption=$_POST['description'];
$query=mysqli_query($con,"insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
echo "<script>alert('Your information succesfully submitted');</script>";
echo "<script>window.location.href ='index.php'</script>";

} ?>
<!doctype html>
<html lang="en">

<head>    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Thushari Vision House - A premium hospital providing expert healthcare services including cardiology, neurology, and general medicine. Book appointments online and access quality healthcare.">
    <meta name="keywords" content="hospital, healthcare, medical services, doctors, appointments, cardiology, neurology, patient care">
    <title>Thushari Vision House - Hospital Management System</title>    <link rel="shortcut icon" href="assets/images/fav.jpg">    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/header-extensions.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" type="text/css" href="assets/css/home.css" />    <link rel="stylesheet" type="text/css" href="assets/css/testimonials.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/enhanced-sections.css" />    <link rel="stylesheet" type="text/css" href="assets/css/gap-fix.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/slider-fixes.css" />
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet"><style>
        /* Critical inline style to fix gap */
        header { margin: 0 !important; padding: 0 !important; font-size: 0 !important; }
        .slider-detail { margin-top: -2px !important; }
        body { overflow-x: hidden; }
        
        /* Critical styles for button visibility */
        .carousel-caption { 
            display: block !important; 
            z-index: 10 !important; 
            opacity: 1 !important; 
            visibility: visible !important;
            background: rgba(0, 0, 0, 0.4) !important;
        }
        .carousel-caption .btn { 
            display: inline-block !important; 
            opacity: 1 !important; 
            visibility: visible !important;
            margin: 8px !important;
        }
        .carousel-item img { height: 120vh !important; max-height: none !important; object-fit: cover !important; object-position: center 15% !important; transform: scale(1.2) !important; }
    </style>
</head>

    <body>    <!-- ################# Header Starts Here#######################--->
      <header id="menu-jk">
        <div id="nav-head" class="header-nav">
            <div class="container">                <div class="row align-items-center">                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="logo">TVH</div>
                       <a data-toggle="collapse" data-target="#menu" href="#menu" class="d-block d-md-none"><i class="fas small-menu fa-bars"></i></a>
                    </div>
                    <div id="menu" class="col-lg-8 col-md-9 d-none d-md-block nav-item">
                        <ul>
                            <li><a href="index.php" class="active">Home</a></li>
                            <li><a href="services.php">Services</a></li>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="gallery.php">Gallery</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                            <li><a href="login.php">Logins</a></li>  
                        </ul>
                        <div class="mobile-appointment d-md-none">
                            <a class="btn btn-appointment" href="../src/hms/user-login.php"><i class="fas fa-calendar-check"></i> Book Appointment</a>
                        </div>
                    </div>
                    <div class="col-lg-2 d-none d-lg-block appoint">
                        <a class="btn btn-appointment" href="../src/hms/user-login.php"><i class="fas fa-calendar-check"></i> Book Appointment</a>
                    </div>
                </div>

            </div>
        </div>    </header><!-- ################# Slider Starts Here #######################--><div class="slider-detail">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/images/slider/slider1.jpg" alt="First slide">
                    <div class="carousel-cover"></div>
                    <div class="carousel-caption d-block">
                        <h5 class="animated bounceInDown">Thushari Vision House</h5>
                        <p class="animated bounceInLeft">Providing Quality Healthcare Services for the Community</p>
                        <div class="animated bounceInUp">
                            <a href="../src/hms/user-login.php" class="btn btn-success">Book an Appointment</a>
                            <a href="about.php" class="btn btn-outline-light ml-2">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/images/slider/slider2.jpg" alt="Second slide">
                    <div class="carousel-cover"></div>
                    <div class="carousel-caption d-block">
                        <h5 class="animated bounceInDown">Expert Medical Care</h5>
                        <p class="animated bounceInLeft">Our Experienced Team Is Dedicated to Your Health and Well-being</p>
                        <div class="animated bounceInUp">
                            <a href="services.php" class="btn btn-success">Our Services</a>
                            <a href="contact.php" class="btn btn-outline-light ml-2">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>        </div>    </div>      
      <!-- ################# Welcome Section #######################-->    
    <section class="welcome-section">
        <div class="container-fluid px-0">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="welcome-combined-box bg-white shadow-lg overflow-hidden">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <div class="welcome-img position-relative">
                                    <img src="assets/images/why.jpg" alt="Healthcare services" class="img-fluid h-100 w-100">
                                    <div class="experience-badge position-absolute bg-success text-white py-3 px-4 rounded-pill shadow">
                                        <div class="text-center">
                                            <span class="d-block h2 mb-0 font-weight-bold">10+</span>
                                            <span class="small">Years of Excellence</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="welcome-box h-100 d-flex flex-column justify-content-center p-4">
                        <div class="section-heading mb-4">
                            <span class="badge badge-success p-2 mb-2">Welcome to TVH</span>
                            <h2 class="mb-3">Your Health, Our Priority</h2>
                            <div class="heading-line bg-success"></div>
                        </div>
                        <p class="lead">
                            At Thushari Vision House, we blend advanced healthcare with compassionate service. Our commitment goes beyond treatment—we focus on your overall wellbeing.
                        </p>
                        <p>
                            Our hospital is equipped with cutting-edge technology and staffed by highly qualified professionals dedicated to providing personalized care that meets the highest medical standards.
                        </p>
                        <ul class="welcome-features mt-4">
                            <li><i class="fas fa-check-circle text-success mr-2"></i> 24/7 Emergency Services</li>
                            <li><i class="fas fa-check-circle text-success mr-2"></i> State-of-the-art Diagnostic Facilities</li>
                            <li><i class="fas fa-check-circle text-success mr-2"></i> Team of Specialized Experts</li>
                            <li><i class="fas fa-check-circle text-success mr-2"></i> Patient-centered Approach</li>
                        </ul>                        <div class="mt-4">
                            <a href="about.php" class="btn btn-success">Learn More About Us</a>
                            <a href="../src/hms/user-login.php" class="btn btn-outline-success ml-2">Book Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
      <!-- ################# Why Choose Us Section #######################-->
    <section class="why-choose-section py-5 bg-light">
        <div class="container">
            <div class="inner-title text-center mb-4">
                <span class="badge badge-success p-2 mb-2">Our Strengths</span>
                <h2>Why Choose Thushari Vision House?</h2>
                <p>Experience healthcare excellence that puts you first</p>
                <div class="heading-line bg-success mx-auto"></div>
            </div>
            
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="feature-box text-center p-4 bg-white rounded shadow-sm">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-user-md fa-3x text-success"></i>
                        </div>
                        <h5>Expert Specialists</h5>
                        <p>Our team consists of highly qualified doctors across multiple specialties with years of experience in their fields.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="feature-box text-center p-4 bg-white rounded shadow-sm">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-microscope fa-3x text-success"></i>
                        </div>
                        <h5>Advanced Technology</h5>
                        <p>Access to cutting-edge diagnostic equipment and treatment options for accurate diagnosis and effective care.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="feature-box text-center p-4 bg-white rounded shadow-sm">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-heart fa-3x text-success"></i>
                        </div>
                        <h5>Compassionate Care</h5>
                        <p>We treat every patient with dignity, respect, and personalized attention tailored to individual needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
      <section class="our-doctors py-5">
        <div class="container">
            <div class="inner-title text-center mb-5">
                <span class="badge badge-success p-2 mb-2">Medical Professionals</span>
                <h2>Meet Our Key Specialists</h2>
                <p>Experienced healthcare professionals dedicated to your well-being</p>
                <div class="heading-line bg-success mx-auto"></div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
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
                <div class="col-lg-3 col-md-6 mb-4">
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
                <div class="col-lg-3 col-md-6 mb-4">
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
                <div class="col-lg-3 col-md-6 mb-4">
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
            <div class="text-center mt-4">
                <a href="about.php#team" class="btn btn-success">View All Specialists</a>
            </div>
        </div>
    </section>

    <!-- ################# Our Departments Starts Here #######################-->
    <section id="services" class="key-features department py-5">
        <div class="container">
            <div class="inner-title text-center mb-5">
                <span class="badge badge-success p-2 mb-2">Our Specialties</span>
                <h2>Our Key Medical Services</h2>
                <p>Comprehensive healthcare solutions under one roof</p>
                <div class="heading-line bg-success mx-auto"></div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="department-box shadow-sm">
                        <div class="department-content">
                            <div class="department-icon bg-success-light">
                                <i class="fas fa-heartbeat"></i>
                            </div>
                            <h5>Cardiology</h5>
                            <p>State-of-the-art heart care with advanced diagnostics and treatment for various cardiovascular conditions.</p>
                            <ul class="department-services mt-3 mb-3">
                                <li><i class="fas fa-check-circle text-success"></i> Cardiac Consultations</li>
                                <li><i class="fas fa-check-circle text-success"></i> ECG & Echocardiography</li>
                                <li><i class="fas fa-check-circle text-success"></i> Cardiac Interventions</li>
                            </ul>
                            <a href="services.php#cardiology" class="btn btn-sm btn-outline-success mt-2">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="department-box shadow-sm">
                        <div class="department-content">
                            <div class="department-icon bg-success-light">
                                <i class="fas fa-brain"></i>
                            </div>
                            <h5>Neurology</h5>
                            <p>Expert neurological care for brain, spine and nervous system disorders with precision diagnostics.</p>
                            <ul class="department-services mt-3 mb-3">
                                <li><i class="fas fa-check-circle text-success"></i> Neurological Assessments</li>
                                <li><i class="fas fa-check-circle text-success"></i> EEG & EMG Services</li>
                                <li><i class="fas fa-check-circle text-success"></i> Headache Clinic</li>
                            </ul>
                            <a href="services.php#neurology" class="btn btn-sm btn-outline-success mt-2">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="department-box shadow-sm">
                        <div class="department-content">
                            <div class="department-icon bg-success-light">
                                <i class="fas fa-stethoscope"></i>
                            </div>
                            <h5>General Medicine</h5>
                            <p>Comprehensive care for adults of all ages including preventive medicine and chronic disease management.</p>
                            <ul class="department-services mt-3 mb-3">
                                <li><i class="fas fa-check-circle text-success"></i> General Check-ups</li>
                                <li><i class="fas fa-check-circle text-success"></i> Chronic Disease Management</li>
                                <li><i class="fas fa-check-circle text-success"></i> Vaccination Services</li>
                            </ul>
                            <a href="services.php#general" class="btn btn-sm btn-outline-success mt-2">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="services.php" class="btn btn-success">Explore All Services</a>
            </div>
        </div>
    </section>
      <!-- ################# Statistics Counter Section Starts Here #######################-->
    <section class="stats-counter py-5" style="background-image: url('assets/images/counter-bg.jpg'); background-attachment: fixed; background-size: cover; background-position: center;">
        <div class="container">
            <div class="inner-title text-center mb-5">
                <span class="badge badge-light p-2 mb-2">Our Achievements</span>
                <h2 class="text-white font-weight-bold">Hospital Statistics</h2>
                <p class="text-white-50">A Glimpse into Our Impact and Growth</p>
                <div class="heading-line bg-white mx-auto"></div>
            </div>
            <div class="row text-center">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="stat-box bg-white p-4 rounded shadow-sm h-100 d-flex flex-column justify-content-center">
                        <i class="fas fa-procedures fa-3x text-success mb-3"></i>
                        <h3 class="counter font-weight-bold" data-count="5500">0</h3>
                        <p class="text-muted font-weight-medium">Successful Surgeries</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="stat-box bg-white p-4 rounded shadow-sm h-100 d-flex flex-column justify-content-center">
                        <i class="fas fa-user-md fa-3x text-success mb-3"></i>
                        <h3 class="counter font-weight-bold" data-count="120">0</h3>
                        <p class="text-muted font-weight-medium">Qualified Doctors</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="stat-box bg-white p-4 rounded shadow-sm h-100 d-flex flex-column justify-content-center">
                        <i class="fas fa-hospital-user fa-3x text-success mb-3"></i>
                        <h3 class="counter font-weight-bold" data-count="25000">0</h3>
                        <p class="text-muted font-weight-medium">Happy Patients</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="stat-box bg-white p-4 rounded shadow-sm h-100 d-flex flex-column justify-content-center">
                        <i class="fas fa-award fa-3x text-success mb-3"></i>
                        <h3 class="counter font-weight-bold" data-count="50">0</h3>
                        <p class="text-muted font-weight-medium">Years of Service</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ################# News & Updates Section Starts Here #######################-->
    <section class="news-section py-5 bg-light">
        <div class="container">
            <div class="inner-title text-center mb-5">
                <span class="badge badge-success p-2 mb-2">Latest Updates</span>
                <h2>News & Updates</h2>
                <p>Stay informed about the latest developments in healthcare and our hospital</p>
                <div class="heading-line bg-success mx-auto"></div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="news-box bg-white rounded shadow-sm overflow-hidden">
                        <div class="news-img">
                            <img src="assets/images/news-1.jpg" alt="News" class="img-fluid">
                            <div class="news-date">
                                <span class="day">15</span>
                                <span class="month">May</span>
                            </div>
                        </div>
                        <div class="news-content p-4">
                            <h5><a href="#" class="text-dark">New Cardiac Care Unit Launched</a></h5>
                            <p class="text-muted small mb-3">We are excited to announce the opening of our state-of-the-art cardiac care unit with advanced monitoring systems...</p>
                            <div class="news-meta d-flex justify-content-between align-items-center">
                                <span class="text-muted small"><i class="fas fa-user mr-1"></i> Admin</span>
                                <a href="#" class="btn btn-sm btn-outline-success">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="news-box bg-white rounded shadow-sm overflow-hidden">
                        <div class="news-img">
                            <img src="assets/images/news-2.jpg" alt="News" class="img-fluid">
                            <div class="news-date">
                                <span class="day">12</span>
                                <span class="month">May</span>
                            </div>
                        </div>
                        <div class="news-content p-4">
                            <h5><a href="#" class="text-dark">Health Screening Camp Success</a></h5>
                            <p class="text-muted small mb-3">Our recent community health screening camp was a great success, serving over 500 community members with free health checkups...</p>
                            <div class="news-meta d-flex justify-content-between align-items-center">
                                <span class="text-muted small"><i class="fas fa-user mr-1"></i> Dr. Smith</span>
                                <a href="#" class="btn btn-sm btn-outline-success">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="news-box bg-white rounded shadow-sm overflow-hidden">
                        <div class="news-img">
                            <img src="assets/images/news-3.jpg" alt="News" class="img-fluid">
                            <div class="news-date">
                                <span class="day">08</span>
                                <span class="month">May</span>
                            </div>
                        </div>
                        <div class="news-content p-4">
                            <h5><a href="#" class="text-dark">New Technology in Surgery</a></h5>
                            <p class="text-muted small mb-3">Introducing robotic-assisted surgery capabilities that offer greater precision and faster recovery times for our patients...</p>
                            <div class="news-meta d-flex justify-content-between align-items-center">
                                <span class="text-muted small"><i class="fas fa-user mr-1"></i> Dr. Johnson</span>
                                <a href="#" class="btn btn-sm btn-outline-success">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="#" class="btn btn-success">View All News</a>
            </div>
        </div>
    </section>

    <!-- ################# Testimonials Section Starts Here #######################-->
    <section class="testimonials-section py-5">
        <div class="container">
            <div class="inner-title text-center mb-5">
                <span class="badge badge-success p-2 mb-2">Patient Stories</span>
                <h2>What Our Patients Say</h2>
                <p>Real experiences from real people who trust us with their health</p>
                <div class="heading-line bg-success mx-auto"></div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="testimonial-box bg-white p-4 rounded shadow-sm">
                        <div class="testimonial-content mb-3">
                            <i class="fas fa-quote-left text-success fa-2x mb-3"></i>
                            <p class="text-muted">"The care I received at Thushari Vision House was exceptional. The doctors were knowledgeable, compassionate, and always available to answer my questions. I felt truly cared for throughout my treatment."</p>
                        </div>
                        <div class="testimonial-author d-flex align-items-center">
                            <img src="assets/images/testimonials/patient-1.jpg" alt="Patient" class="rounded-circle mr-3" width="60" height="60">
                            <div>
                                <h6 class="mb-0">Sarah Johnson</h6>
                                <small class="text-muted">Heart Surgery Patient</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="testimonial-box bg-white p-4 rounded shadow-sm">
                        <div class="testimonial-content mb-3">
                            <i class="fas fa-quote-left text-success fa-2x mb-3"></i>
                            <p class="text-muted">"From the moment I walked in, I was impressed by the cleanliness, organization, and professionalism. The staff went above and beyond to ensure my comfort and quick recovery."</p>
                        </div>
                        <div class="testimonial-author d-flex align-items-center">
                            <img src="assets/images/testimonials/patient-2.jpg" alt="Patient" class="rounded-circle mr-3" width="60" height="60">
                            <div>
                                <h6 class="mb-0">Michael Chen</h6>
                                <small class="text-muted">Orthopedic Patient</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="testimonial-box bg-white p-4 rounded shadow-sm">
                        <div class="testimonial-content mb-3">
                            <i class="fas fa-quote-left text-success fa-2x mb-3"></i>
                            <p class="text-muted">"The neurology department here is outstanding. Dr. Rajput and her team provided excellent care for my condition. I'm grateful for their expertise and dedication."</p>
                        </div>
                        <div class="testimonial-author d-flex align-items-center">
                            <img src="assets/images/testimonials/patient-3.jpg" alt="Patient" class="rounded-circle mr-3" width="60" height="60">
                            <div>
                                <h6 class="mb-0">Emily Rodriguez</h6>
                                <small class="text-muted">Neurology Patient</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ################# Call to Action Section Starts Here #######################-->
    <section class="cta-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <div class="cta-content">
                        <h2 class="text-white mb-3">Your Health Can't Wait</h2>
                        <p class="text-white mb-4">Schedule your appointment today and take the first step towards better health. Our team of specialists is ready to provide you with the highest quality care tailored to your individual needs.</p>
                        <div class="cta-buttons">
                            <a href="../src/hms/user-login.php" class="btn btn-light btn-lg">Book an Appointment</a>
                            <a href="contact.php" class="btn btn-outline-light btn-lg ml-3">Contact Us</a>
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
                        <li><a href="contact.php"><i class="fas fa-angle-right"></i> Contact Us</a></li>
                        <li><a href="login.php"><i class="fas fa-angle-right"></i> Login Portals</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4>Contact Us</h4>
                    <ul class="footer-links footer-contact">                        <?php
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
    
</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-nav/js/jquery.easing.min.js"></script>
<script src="assets/plugins/scroll-nav/js/scrolling-nav.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/js/script.js"></script>
<script>
$(document).ready(function() {
    // Header active link management for index.php
    function setActiveHomeLink() {
        var currentPage = window.location.pathname.split("/").pop();
        // Check if it's index.php or the root path, or index.php with a hash
        if (currentPage === 'index.php' || currentPage === '' || currentPage.startsWith('index.php#')) {
            var $menuLinks = $('#menu ul li a');
            if ($menuLinks.length) { // Check if menu links exist
                $menuLinks.removeClass('active');
                // Specifically target the Home link by its href
                $menuLinks.filter('[href="index.php"]').addClass('active');
            }
        }
    }
    // Set active link on page load
    setActiveHomeLink();

    // Enforce active link on scroll for index.php
    // This is to counteract other scripts that might change active states on scroll
    $(window).on('scroll', function() {
        setActiveHomeLink();
    });

    // Counter animation script
    var counted = 0;
    // Check if the stats-counter element exists to prevent errors if it's not on the page
    if ($('.stats-counter').length) { 
        $(window).scroll(function() {
            // Check if offset is available (element is visible and in DOM)
            var statsCounterOffsetTop = $('.stats-counter').offset() ? $('.stats-counter').offset().top : null;
            if (statsCounterOffsetTop !== null) {
                var oTop = statsCounterOffsetTop - window.innerHeight;
                if (counted === 0 && $(window).scrollTop() > oTop) {
                    $('.counter').each(function() {
                        var $this = $(this),
                            countTo = $this.attr('data-count');
                        // Ensure countTo is a valid number, default to 0 if not
                        var targetCount = parseFloat(String(countTo).replace(/,/g, ''));
                        if (isNaN(targetCount)) {
                            targetCount = 0;
                        }

                        // Ensure current text is a valid number, default to 0 if not
                        var currentCount = parseFloat(String($this.text()).replace(/,/g, ''));
                        if (isNaN(currentCount)) {
                            currentCount = 0;
                        }

                        $({ countNum: currentCount }).animate({
                            countNum: targetCount
                        }, {
                            duration: 2000, // Animation duration
                            easing: 'swing', // Animation easing
                            step: function() {
                                $this.text(Math.floor(this.countNum));
                            },
                            complete: function() {
                                // Format with commas if the original number had them or if desired
                                // For simplicity, just setting the final number
                                $this.text(this.countNum); 
                                // Example with comma formatting:
                                // $this.text(this.countNum.toLocaleString());
                            }
                        });
                    });
                    counted = 1; // Ensure animation runs only once
                }
            }
        });
    }
});
</script>
<script src="assets/js/script.js"></script>
<script>
    $(document).ready(function() {
        // Header active link management for index.php
        function setActiveHomeLink() {
            var currentPage = window.location.pathname.split("/").pop();
            // Check if it's index.php or the root path, or index.php with a hash
            if (currentPage === 'index.php' || currentPage === '' || currentPage.startsWith('index.php#')) {
                var $menuLinks = $('#menu ul li a');
                if ($menuLinks.length) { // Check if menu links exist
                    $menuLinks.removeClass('active');
                    // Specifically target the Home link by its href
                    $menuLinks.filter('[href="index.php"]').addClass('active');
                }
            }
        }
        // Set active link on page load
        setActiveHomeLink();

        // Enforce active link on scroll for index.php
        // This is to counteract other scripts that might change active states on scroll
        $(window).on('scroll', function() {
            setActiveHomeLink();
        });

        // Counter animation script
        var counted = 0;
        // Check if the stats-counter element exists to prevent errors if it's not on the page
        if ($('.stats-counter').length) { 
            $(window).scroll(function() {
                // Check if offset is available (element is visible and in DOM)
                var statsCounterOffsetTop = $('.stats-counter').offset() ? $('.stats-counter').offset().top : null;
                if (statsCounterOffsetTop !== null) {
                    var oTop = statsCounterOffsetTop - window.innerHeight;
                    if (counted === 0 && $(window).scrollTop() > oTop) {
                        $('.counter').each(function() {
                            var $this = $(this),
                                countTo = $this.attr('data-count');
                            // Ensure countTo is a valid number, default to 0 if not
                            var targetCount = parseFloat(String(countTo).replace(/,/g, ''));
                            if (isNaN(targetCount)) {
                                targetCount = 0;
                            }

                            // Ensure current text is a valid number, default to 0 if not
                            var currentCount = parseFloat(String($this.text()).replace(/,/g, ''));
                            if (isNaN(currentCount)) {
                                currentCount = 0;
                            }

                            $({ countNum: currentCount }).animate({
                                countNum: targetCount
                            }, {
                                duration: 2000, // Animation duration
                                easing: 'swing', // Animation easing
                                step: function() {
                                    $this.text(Math.floor(this.countNum));
                                },
                                complete: function() {
                                    // Format with commas if the original number had them or if desired
                                    // For simplicity, just setting the final number
                                    $this.text(this.countNum); 
                                    // Example with comma formatting:
                                    // $this.text(this.countNum.toLocaleString());
                                }
                            });
                        });
                        counted = 1; // Ensure animation runs only once
                    }
                }
            });
        }
    });
    </script>
</body>
</html>