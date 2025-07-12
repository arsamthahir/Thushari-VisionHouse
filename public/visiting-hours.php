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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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

        /* Enhanced Page Title and Section Styles */
        .page-title {
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
            padding: 80px 0 60px 0;
            position: relative;
            color: white;
            text-align: center;
            margin-bottom: 0;
        }

        .page-title::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.1);
            z-index: 1;
        }

        .page-title .container {
            position: relative;
            z-index: 2;
        }

        .page-title h2 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 15px;
            color: white;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        .page-title p {
            font-size: 1.2rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 0;
        }

        .inner-title {
            text-align: center;
            padding: 60px 0 30px;
            background: #f8f9fa;
        }

        .inner-title h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
        }

        .inner-title h2::after {
            content: "";
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
        }

        .inner-title p {
            color: #666;
            font-size: 1.1rem;
            max-width: 700px;
            margin: 0 auto;
        }

        .visiting-hours {
            background: #f8f9fa;
            padding-top: 0;
        }

        .visiting-card {
            transform: translateY(0);
            transition: all 0.3s ease;
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .visiting-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            border-radius: 15px 15px 0 0 !important;
            padding: 25px !important;
        }

        .card-header h4 {
            font-size: 1.5rem;
            font-weight: 600;
        }

        .schedule-item {
            margin: 20px 0;
            padding: 20px;
            border-radius: 12px;
            background: rgba(40, 167, 69, 0.03);
            transition: all 0.3s ease;
        }

        .schedule-item:hover {
            background: rgba(40, 167, 69, 0.06);
            transform: translateX(10px);
        }

        .special-card {
            border-radius: 15px;
            transition: all 0.3s ease;
        }

        .special-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15) !important;
        }

        /* Enhanced Guidelines Section Styles */
        .guidelines-section {
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(40, 167, 69, 0.1);
            padding: 40px !important;
            position: relative;
            overflow: hidden;
            margin-top: 30px;
        }

        .guidelines-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 4px;
            background: linear-gradient(to bottom, #28a745, #20c997);
        }

        .guidelines-section h3 {
            font-size: 2.2rem;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 40px;
            position: relative;
            padding-bottom: 20px;
        }

        .guidelines-section h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
        }

        .guidelines-section h5 {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 25px;
            position: relative;
            padding: 15px 20px;
            border-radius: 12px;
            background: rgba(0, 0, 0, 0.02);
            transition: all 0.3s ease;
        }

        .guidelines-section h5 i {
            margin-right: 15px;
            font-size: 1.4rem;
            position: relative;
            top: 1px;
        }

        .guidelines-section ul {
            margin: 0;
            padding: 0 10px;
        }

        .guidelines-section ul li {
            margin-bottom: 15px;
            padding: 15px;
            border-radius: 10px;
            background: #ffffff;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            font-size: 1.05rem;
        }

        .guidelines-section ul li i {
            width: 30px;
            font-size: 1.2rem;
            margin-right: 15px;
            text-align: center;
        }

        .guidelines-section ul li:hover {
            transform: translateX(8px);
        }

        .what-to-bring li {
            border-left: 3px solid #28a745;
        }

        .what-to-bring li:hover {
            background: rgba(40, 167, 69, 0.03);
        }

        .what-not-to-bring li {
            border-left: 3px solid #dc3545;
        }

        .what-not-to-bring li:hover {
            background: rgba(220, 53, 69, 0.03);
        }

        .visitor-limits .limit-item {
            padding: 15px;
            border-radius: 10px;
            background: #ffffff;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
            border-left: 3px solid #007bff;
        }

        .visitor-limits .limit-item:hover {
            transform: translateX(8px);
            background: rgba(0, 123, 255, 0.03);
        }

        .visitor-limits .badge {
            padding: 8px 15px;
            font-size: 0.95rem;
            font-weight: 500;
            margin-right: 15px;
            background: rgba(0, 123, 255, 0.1);
            color: #007bff;
            border: 1px solid rgba(0, 123, 255, 0.2);
            border-radius: 8px;
        }

        .health-safety li {
            border-left: 3px solid #ffc107;
        }

        .health-safety li:hover {
            background: rgba(255, 193, 7, 0.03);
        }

        /* Enhanced Special Circumstances Section Styles */
        .special-circumstances {
            padding: 40px 0;
            background: #ffffff;
        }

        .special-title {
            font-size: 2.2rem;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 15px;
            position: relative;
            padding-bottom: 20px;
        }

        .special-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
        }

        .special-circumstance-card {
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            padding: 30px;
            height: 100%;
            position: relative;
            transition: all 0.3s ease;
            border: 1px solid rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }

        .special-circumstance-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        }

        .special-circumstance-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
        }

        .special-circumstance-card.emergency::before {
            background: linear-gradient(135deg, #dc3545 0%, #fd7e14 100%);
        }

        .special-circumstance-card.extended::before {
            background: linear-gradient(135deg, #007bff 0%, #6610f2 100%);
        }

        .card-icon {
            width: 70px;
            height: 70px;
            background: rgba(40, 167, 69, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }

        .emergency .card-icon {
            background: rgba(220, 53, 69, 0.1);
        }

        .extended .card-icon {
            background: rgba(0, 123, 255, 0.1);
        }

        .card-icon i {
            font-size: 2rem;
            color: #28a745;
        }

        .emergency .card-icon i {
            color: #dc3545;
        }

        .extended .card-icon i {
            color: #007bff;
        }

        .special-circumstance-card:hover .card-icon {
            transform: scale(1.1);
        }

        .card-content h5 {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: #2c3e50;
        }

        .info-block {
            margin-bottom: 20px;
        }

        .info-block p {
            color: #666;
            font-size: 1.05rem;
        }

        .circumstance-details {
            list-style: none;
            padding: 0;
            margin: 15px 0;
        }

        .circumstance-details li {
            margin-bottom: 10px;
            padding: 8px 15px;
            background: rgba(40, 167, 69, 0.05);
            border-radius: 8px;
            font-size: 0.95rem;
            color: #555;
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
        }

        .emergency .circumstance-details li {
            background: rgba(220, 53, 69, 0.05);
        }

        .extended .circumstance-details li {
            background: rgba(0, 123, 255, 0.05);
        }

        .circumstance-details li i {
            margin-right: 10px;
            color: #28a745;
        }

        .emergency .circumstance-details li i {
            color: #dc3545;
        }

        .extended .circumstance-details li i {
            color: #007bff;
        }

        .circumstance-details li:hover {
            transform: translateX(5px);
            background: rgba(40, 167, 69, 0.1);
        }

        .emergency .circumstance-details li:hover {
            background: rgba(220, 53, 69, 0.1);
        }

        .extended .circumstance-details li:hover {
            background: rgba(0, 123, 255, 0.1);
        }

        .learn-more {
            color: #28a745;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.95rem;
            display: inline-flex;
            align-items: center;
            transition: all 0.3s ease;
        }

        .emergency .learn-more {
            color: #dc3545;
        }

        .extended .learn-more {
            color: #007bff;
        }

        .learn-more i {
            margin-left: 5px;
            transition: all 0.3s ease;
        }

        .learn-more:hover {
            text-decoration: none;
            opacity: 0.85;
        }

        .learn-more:hover i {
            transform: translateX(5px);
        }

        @media (max-width: 768px) {
            .guidelines-section {
                padding: 25px !important;
            }

            .guidelines-section h3 {
                font-size: 1.8rem;
            }

            .guidelines-section h5 {
                font-size: 1.2rem;
                padding: 12px 15px;
            }

            .guidelines-section ul li {
                padding: 12px;
                font-size: 1rem;
            }

            .special-circumstance-card {
                padding: 20px;
            }

            .card-icon {
                width: 60px;
                height: 60px;
            }

            .card-icon i {
                font-size: 1.5rem;
            }

            .card-content h5 {
                font-size: 1.2rem;
            }

            .circumstance-details li {
                font-size: 0.9rem;
                padding: 6px 12px;
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
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Visiting Hours & Guidelines</h2>
                    <p>Important information for patients and visitors</p>
                </div>
            </div>
        </div>
    </div>

    <!-- ################# Inner Title #######################-->
    <!-- <div class="inner-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Hospital Visiting Guidelines</h2>
                    <p>We ensure a comfortable environment for both patients and visitors</p>
                </div>
            </div>
        </div>
    </div> -->

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
                                <ul class="list-unstyled health-safety">
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
            <div class="special-circumstances mt-5">
                <div class="section-header text-center mb-4">
                    <h3 class="special-title">
                        <i class="fas fa-star-of-life text-primary mr-2"></i>
                        Special Circumstances
                    </h3>
                    <p class="text-muted">Customized visiting arrangements for specific situations</p>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="special-circumstance-card maternity">
                            <div class="card-icon">
                                <i class="fas fa-baby"></i>
                            </div>
                            <div class="card-content">
                                <h5>Maternity Ward</h5>
                                <div class="info-block">
                                    <p class="mb-2">Special visiting arrangements for new mothers and babies</p>
                                    <ul class="circumstance-details">
                                        <li><i class="fas fa-check-circle"></i> 24/7 access for partners</li>
                                        <li><i class="fas fa-clock"></i> Flexible hours for grandparents</li>
                                        <li><i class="fas fa-users"></i> Limited access for other visitors</li>
                                    </ul>
                                </div>
                                <a href="#" class="learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="special-circumstance-card emergency">
                            <div class="card-icon">
                                <i class="fas fa-ambulance"></i>
                            </div>
                            <div class="card-content">
                                <h5>Emergency Department</h5>
                                <div class="info-block">
                                    <p class="mb-2">Limited visitor access based on patient condition</p>
                                    <ul class="circumstance-details">
                                        <li><i class="fas fa-user-check"></i> One companion allowed</li>
                                        <li><i class="fas fa-clipboard-check"></i> Subject to medical approval</li>
                                        <li><i class="fas fa-exchange-alt"></i> Flexible rotation policy</li>
                                    </ul>
                                </div>
                                <a href="#" class="learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="special-circumstance-card extended">
                            <div class="card-icon">
                                <i class="fas fa-user-clock"></i>
                            </div>
                            <div class="card-content">
                                <h5>Extended Stays</h5>
                                <div class="info-block">
                                    <p class="mb-2">Special arrangements for long-term patients</p>
                                    <ul class="circumstance-details">
                                        <li><i class="fas fa-calendar-check"></i> Extended visiting hours</li>
                                        <li><i class="fas fa-user-friends"></i> Additional visitor allowance</li>
                                        <li><i class="fas fa-phone-alt"></i> Special arrangements available</li>
                                    </ul>
                                </div>
                                <a href="#" class="learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
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

    <script>
        $(document).ready(function() {
            // Header active link management
            function setActiveVisitingHoursLink() {
                var currentPage = window.location.pathname.split("/").pop();
                if (currentPage === 'visiting-hours.php' || currentPage.startsWith('visiting-hours.php#')) {
                    $('#menu ul li a').removeClass('active');
                    $('#menu ul li a[href="visiting-hours.php"]').addClass('active');
                }
            }
            
            // Set active link on page load
            setActiveVisitingHoursLink();

            // Enforce active link on scroll
            $(window).on('scroll', function() {
                setActiveVisitingHoursLink();
            });

            // Enhanced animations on scroll
            function animateOnScroll() {
                $('.visiting-card').each(function() {
                    if ($(this).offset().top < $(window).scrollTop() + $(window).height() - 100) {
                        $(this).addClass('fade-in-up');
                    }
                });

                $('.schedule-item').each(function() {
                    if ($(this).offset().top < $(window).scrollTop() + $(window).height() - 100) {
                        $(this).addClass('fade-in-left');
                    }
                });

                $('.special-card').each(function() {
                    if ($(this).offset().top < $(window).scrollTop() + $(window).height() - 100) {
                        $(this).addClass('fade-in-up');
                    }
                });
            }

            // Run animations on scroll
            $(window).on('scroll', animateOnScroll);
            
            // Run once on page load
            setTimeout(animateOnScroll, 500);

            // Enhanced hover effects for schedule items
            $('.schedule-item').hover(
                function() {
                    $(this).find('.badge-outline-success').css('background', 'rgba(40, 167, 69, 0.1)');
                },
                function() {
                    $(this).find('.badge-outline-success').css('background', 'rgba(40, 167, 69, 0.05)');
                }
            );

            // Smooth scroll for anchor links
            $('a[href^="#"]').on('click', function(e) {
                e.preventDefault();
                var target = $(this.hash);
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top - 100
                    }, 500);
                }
            });

            // Add pulse animation to emergency notice
            setInterval(function() {
                $('.notice-icon').addClass('animated pulse');
                setTimeout(function() {
                    $('.notice-icon').removeClass('animated pulse');
                }, 1000);
            }, 3000);

            // Enhanced tooltip initialization
            $('[data-toggle="tooltip"]').tooltip();

            // Dynamic time slot highlighting
            function highlightCurrentTimeSlot() {
                var now = new Date();
                var day = now.getDay();
                var hour = now.getHours();

                $('.time-slot').removeClass('active-time-slot');

                if (day >= 1 && day <= 5) { // Weekdays
                    if (hour >= 10 && hour < 12) {
                        $('.weekday-morning').addClass('active-time-slot');
                    } else if (hour >= 16 && hour < 20) {
                        $('.weekday-evening').addClass('active-time-slot');
                    }
                } else { // Weekends
                    if (hour >= 10 && hour < 12) {
                        $('.weekend-morning').addClass('active-time-slot');
                    } else if (hour >= 15 && hour < 19) {
                        $('.weekend-evening').addClass('active-time-slot');
                    }
                }
            }

            // Update time slot highlighting every minute
            highlightCurrentTimeSlot();
            setInterval(highlightCurrentTimeSlot, 60000);
        });
    </script>
</body>

</html>
