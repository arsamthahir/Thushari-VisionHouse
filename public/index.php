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
    <link rel="stylesheet" type="text/css" href="assets/css/nav-center-fix.css?v=<?php echo time(); ?>" />
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
            <div class="container">                <div class="row align-items-center">                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="logo">TVH Healthcare</div>
                       <a data-toggle="collapse" data-target="#menu" href="#menu" class="d-block d-md-none"><i class="fas small-menu fa-bars"></i></a>
                    </div>
                    <div id="menu" class="col-lg-6 col-md-9 d-none d-md-block nav-item">
                        <ul>
                            <li><a href="index.php" class="active">Home</a></li>
                            <li><a href="services.php">Services</a></li>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="gallery.php">Gallery</a></li>
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
                            <img src="assets/images/team/doc1.png" alt="Doctor" class="img-fluid">
                            <div class="doctor-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="doctor-info p-3">
                            <h5>Dr. Anula Wijesundare</h5>
                            <span class="doctor-speciality">Chief Medical Officer</span>
                            <p class="text-muted small mt-2">Over 15 years of experience in general medicine and healthcare management</p>
                            <a href="#" class="btn btn-sm btn-outline-success mt-2">View Profile</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="doctor-box shadow-sm">
                        <div class="doctor-img">
                            <img src="assets/images/team/doc2.png" alt="Doctor" class="img-fluid">
                            <div class="doctor-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="doctor-info p-3">
                            <h5>Dr. Sharmila</h5>
                            <span class="doctor-speciality">Cardiologist</span>
                            <p class="text-muted small mt-2">Specializes in advanced cardiac care and interventional procedures</p>
                            <a href="#" class="btn btn-sm btn-outline-success mt-2">View Profile</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="doctor-box shadow-sm">
                        <div class="doctor-img">
                            <img src="assets/images/team/doc3.png" alt="Doctor" class="img-fluid">
                            <div class="doctor-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="doctor-info p-3">
                            <h5>Dr. Arun Kulatunga</h5>
                            <span class="doctor-speciality">Neurologist</span>
                            <p class="text-muted small mt-2">Expert in treating complex neurological conditions with precision</p>
                            <a href="#" class="btn btn-sm btn-outline-success mt-2">View Profile</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="doctor-box shadow-sm">
                        <div class="doctor-img">
                            <img src="assets/images/team/doc4.png" alt="Doctor" class="img-fluid">
                            <div class="doctor-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="doctor-info p-3">
                            <h5>Dr. Fathima</h5>
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
    <style>
/* Enhanced Hospital Statistics Section - Advanced Hover & Icon Animation */
.stats-counter {
  position: relative;
  background: linear-gradient(135deg, #28a745 0%, #218838 100%) !important;
  background-image: url('assets/images/counter-bg.jpg');
  background-size: cover;
  background-position: center;
  background-blend-mode: overlay;
  padding: 70px 0 60px 0;
}
.stats-counter .overlay {
  position: absolute;
  top: 0; left: 0; width: 100%; height: 100%;
  background: rgba(40,167,69,0.7);
  z-index: 1;
}
.stats-counter .container { position: relative; z-index: 2; }
.stats-counter .inner-title {
  margin-bottom: 40px;
}
.stats-counter .inner-title h2 {
  font-size: 2.7rem;
  font-weight: 700;
  color: #fff;
  margin-bottom: 10px;
  letter-spacing: 1px;
}
.stats-counter .inner-title p {
  color: #e0e0e0;
  font-size: 1.15rem;
  margin-bottom: 18px;
}
.stats-counter .heading-line {
  width: 60px;
  height: 4px;
  background: #fff;
  margin: 0 auto 0 auto;
  border-radius: 2px;
}
.stats-counter .badge {
  background: #fff;
  color: #28a745;
  font-weight: 600;
  border-radius: 20px;
  padding: 7px 18px;
  font-size: 1rem;
  box-shadow: 0 2px 8px rgba(40,167,69,0.12);
}
.stats-counter .row {
  margin-top: 30px;
}
.stats-counter .stat-box {
  background: #fff;
  border-radius: 18px;
  box-shadow: 0 6px 24px rgba(40,167,69,0.10);
  padding: 38px 18px 28px 18px;
  margin-bottom: 20px;
  transition: box-shadow 0.3s, transform 0.3s;
  position: relative;
  min-height: 220px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  cursor: pointer;
}
.stats-counter .stat-box:hover {
  box-shadow: 0 16px 40px rgba(40,167,69,0.22);
  transform: translateY(-8px) scale(1.06);
}
.stats-counter .stat-box i {
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 2.6rem;
  margin-bottom: 18px;
  color: #28a745;
  background: #fff;
  border-radius: 50%;
  width: 64px;
  height: 64px;
  box-shadow: 0 2px 8px rgba(40,167,69,0.10);
  transition: color 0.3s, filter 0.3s;
}
.stats-counter .stat-box:hover i {
  animation: statIconBounce 0.7s;
  color: #218838;
  filter: drop-shadow(0 0 8px #28a745);
}
@keyframes statIconBounce {
  0%   { transform: scale(1) rotate(0deg); }
  30%  { transform: scale(1.2) rotate(-10deg); }
  50%  { transform: scale(1.1) rotate(10deg); }
  70%  { transform: scale(1.2) rotate(-10deg); }
  100% { transform: scale(1) rotate(0deg); }
}
.stats-counter .counter {
  font-size: 2.7rem;
  font-weight: 700;
  margin-bottom: 8px;
  background: linear-gradient(90deg, #28a745, #218838);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  color: #28a745;
  letter-spacing: 1px;
  font-family: 'PT Sans', sans-serif;
}
.stats-counter .stat-box p {
  font-size: 1.08rem;
  color: #218838;
  font-weight: 500;
  margin-bottom: 0;
}
@media (max-width: 991px) {
  .stats-counter .stat-box { min-height: 180px; }
  .stats-counter .counter { font-size: 2rem; }
}
@media (max-width: 767px) {
  .stats-counter { padding: 40px 0 30px 0; }
  .stats-counter .stat-box { padding: 28px 10px 18px 10px; }
  .stats-counter .counter { font-size: 1.5rem; }
}
</style>
    <section class="stats-counter py-5">
  <div class="overlay"></div>
  <div class="container">
    <div class="inner-title text-center mb-5">
      <span class="badge">Our Achievements</span>
      <h2>Hospital Statistics</h2>
      <p>A Glimpse into Our Impact and Growth</p>
      <div class="heading-line"></div>
    </div>
    <div class="row text-center">
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="stat-box">
          <i class="fas fa-procedures"></i>
          <div class="counter">470</div>
              <p>Successful Surgeries</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="stat-box">
          <i class="fas fa-user-md"></i>
          <div class="counter">17</div>
          <p>Qualified Doctors</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="stat-box">
          <i class="fas fa-smile-beam"></i>
          <div class="counter">4,850</div>
          <p>Happy Patients</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="stat-box">
          <i class="fas fa-award"></i>
          <div class="counter">9</div>
          <p>Years of Service</p>
        </div>
      </div>
    </div>
  </div>
</section>

    <!-- ################# News & Updates Preview Section #######################-->
    <style>
.news-preview {
  background: #f8f9fa;
  padding: 60px 0 40px 0;
}
.news-preview .inner-title h2 {
  font-size: 2.2rem;
  font-weight: 700;
  color: #28a745;
  margin-bottom: 10px;
}
.news-preview .inner-title p {
  color: #555;
  font-size: 1.1rem;
  margin-bottom: 18px;
}
.news-preview .heading-line {
  width: 60px;
  height: 4px;
  background: #28a745;
  margin: 0 auto 0 auto;
  border-radius: 2px;
}
.news-card {
  background: #fff;
  border-radius: 18px;
  box-shadow: 0 6px 24px rgba(40,167,69,0.10);
  overflow: hidden;
  margin-bottom: 30px;
  transition: box-shadow 0.3s, transform 0.3s;
  display: flex;
  flex-direction: column;
  height: 100%;
}
.news-card:hover {
  box-shadow: 0 16px 40px rgba(40,167,69,0.18);
  transform: translateY(-6px) scale(1.03);
}
.news-card img {
  width: 100%;
  height: 220px;
  object-fit: cover;
  border-top-left-radius: 18px;
  border-top-right-radius: 18px;
}
.news-card .news-content {
  padding: 24px 20px 18px 20px;
  flex: 1 1 auto;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
}
.news-card .news-meta {
  margin-bottom: 8px;
}
.news-card .badge {
  background: #28a745;
  color: #fff;
  font-size: 0.85rem;
  font-weight: 600;
  border-radius: 12px;
  padding: 5px 14px;
  margin-right: 8px;
}
.news-card h5 {
  font-size: 1.2rem;
  font-weight: 700;
  color: #218838;
  margin-bottom: 10px;
}
.news-card p {
  color: #555;
  font-size: 1rem;
  margin-bottom: 0;
}
.news-list {
  display: flex;
  flex-direction: column;
  gap: 18px;
}
.news-item {
  background: #fff;
  border-radius: 14px;
  box-shadow: 0 2px 10px rgba(40,167,69,0.08);
  padding: 18px 16px;
  display: flex;
  align-items: flex-start;
  gap: 16px;
  transition: box-shadow 0.3s, transform 0.3s;
}
.news-item:hover {
  box-shadow: 0 8px 24px rgba(40,167,69,0.14);
  transform: translateY(-2px) scale(1.01);
}
.news-item i {
  font-size: 1.7rem;
  color: #28a745;
  margin-right: 10px;
}
.news-item h6 {
  font-size: 1.05rem;
  font-weight: 600;
  color: #218838;
  margin-bottom: 4px;
}
.news-item p {
  color: #555;
  font-size: 0.98rem;
  margin-bottom: 2px;
}
.news-item small {
  color: #28a745;
  font-size: 0.92rem;
}
@media (max-width: 991px) {
  .news-card img { height: 180px; }
}
@media (max-width: 767px) {
  .news-preview { padding: 30px 0 20px 0; }
  .news-card img { height: 140px; }
  .news-card .news-content { padding: 16px 10px 12px 10px; }
}
</style>
    <section class="news-preview py-5">
  <div class="container">
    <div class="inner-title text-center mb-5">
      <span class="badge badge-success p-2 mb-2">Hospital News</span>
      <h2>Latest News & Updates</h2>
      <p>Stay informed about hospital developments and healthcare innovations</p>
      <div class="heading-line bg-success mx-auto"></div>
    </div>
    <div class="row">
      <div class="col-lg-6 mb-4">
        <div class="news-card">
          <img src="assets/images/news/news1.jpg" alt="New Cardiac Wing">
          <div class="news-content">
            <div class="news-meta mb-2">
              <span class="badge">Breaking News</span>
              <small class="text-muted ml-2">July 10, 2025</small>
            </div>
            <h5>New Cardiac Surgery Wing Opens</h5>
            <p>
              State-of-the-art cardiac surgery facility now operational with latest technology and equipment. The new wing features advanced operating theaters, a dedicated cardiac ICU, and a team of highly skilled surgeons and support staff. Patients will benefit from minimally invasive procedures, faster recovery times, and access to the latest innovations in cardiac care. This expansion marks a major milestone in our commitment to providing world-class healthcare to the community.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="news-list">
          <div class="news-item">
            <i class="fas fa-calendar-plus"></i>
            <div>
              <h6>New Online Appointment System</h6>
              <p>Book appointments 24/7 through our enhanced online portal</p>
              <small>July 8, 2025</small>
            </div>
          </div>
          <div class="news-item">
            <i class="fas fa-user-md text-info"></i>
            <div>
              <h6>Free Health Screening Camp - July 15th</h6>
              <p>Comprehensive health check-ups for community members</p>
              <small>July 6, 2025</small>
            </div>
          </div>
          <div class="news-item">
            <i class="fas fa-award text-warning"></i>
            <div>
              <h6>Hospital Accreditation Renewed</h6>
              <p>Successfully renewed Joint Commission accreditation</p>
              <small>July 5, 2025</small>
            </div>
          </div>
          <div class="news-item">
            <i class="fas fa-mobile-alt text-primary"></i>
            <div>
              <h6>Mobile Health App Launch</h6>
              <p>New mobile app for patient services now available</p>
              <small>June 28, 2025</small>
            </div>
          </div>
        </div>
      </div>
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
                            <img src="assets/images/testimonials/patient1.jpg" alt="Patient" class="rounded-circle mr-3" width="60" height="60">
                            <div>
                                <h6 class="mb-0">Thenushan Thevakumar</h6>
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
                            <img src="assets/images/testimonials/patient2.jpg" alt="Patient" class="rounded-circle mr-3" width="60" height="60">
                            <div>
                                <h6 class="mb-0">Janardhika Mahendran</h6>
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
                            <img src="assets/images/testimonials/patient3.jpg" alt="Patient" class="rounded-circle mr-3" width="60" height="60">
                            <div>
                                <h6 class="mb-0">Arsam Thahir</h6>
                                <small class="text-muted">Neurology Patient</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ################# Call to Action Section Starts Here #######################-->
        <section class="cta-section">
  <div class="cta-glass">
    <h2>Your Health Can't Wait</h2>
    <p>Schedule your appointment today and take the first step towards better health. Our team of specialists is ready to provide you with the highest quality care tailored to your individual needs.</p>
    <div class="cta-buttons">
      <a href="../src/hms/user-login.php" class="btn btn-light btn-lg">Book an Appointment</a>
      <a href="contact.php" class="btn btn-outline-light btn-lg ml-3">Contact Us</a>
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
});
</script>
<script>
(function($){
  var statsAnimated = false;
  function animateStats() {
    var statsSection = $('.stats-counter');
    if (!statsSection.length) return;
    var sectionTop = statsSection.offset().top;
    var windowBottom = $(window).scrollTop() + $(window).height();
    if (!statsAnimated && windowBottom > sectionTop + 60) {
      $('.counter').each(function() {
        var $this = $(this);
        var target = parseInt($this.attr('data-target'));
        $this.text('0');
        $({ countNum: 0 }).animate({ countNum: target }, {
          duration: 1800,
          easing: 'swing',
          step: function() {
            $this.text(Math.floor(this.countNum).toLocaleString());
          },
          complete: function() {
            $this.text(target.toLocaleString());
          }
        });
      });
      statsAnimated = true;
    }
  }
  $(window).on('scroll', animateStats);
  $(document).ready(animateStats);
})(jQuery);
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
    });
    </script>
</body>
</html>