<?php
include_once('../src/hms/include/config.php');
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Health blog and educational content from Thushari Vision House - Expert medical advice and health tips">
    <meta name="keywords" content="health blog, medical advice, health tips, wellness, healthcare education">
    <title>Health Blog & Education - Thushari Vision House</title>
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
                        <div class="logo">TVH</div>
                       <a data-toggle="collapse" data-target="#menu" href="#menu" class="d-block d-md-none"><i class="fas small-menu fa-bars"></i></a>
                    </div>
                    <div id="menu" class="col-lg-8 col-md-9 d-none d-md-block nav-item">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="services.php">Services</a></li>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="gallery.php">Gallery</a></li>
                            <li><a href="visiting-hours.php">Visiting Hours</a></li>
                            <li><a href="health-blog.php" class="active">Health Blog</a></li>
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
        </div>
    </header>

    <!-- ################# Page Title #######################-->
    <div class="page-title" style="background: linear-gradient(rgba(40, 167, 69, 0.8), rgba(40, 167, 69, 0.8)), url('assets/images/bg/health-blog-bg.jpg'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="text-white">Health Blog & Education</h2>
                    <p class="text-white-50">Expert medical advice and wellness tips from our healthcare professionals</p>
                </div>
            </div>
        </div>
    </div>

    <!-- ################# Featured Article #######################-->
    <section class="featured-article py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-4">
                    <div class="featured-post bg-white rounded shadow-sm overflow-hidden">
                        <img src="assets/images/news/featured-heart-health.jpg" alt="Heart Health" class="img-fluid w-100" style="height: 300px; object-fit: cover;">
                        <div class="post-content p-4">
                            <div class="post-meta mb-3">
                                <span class="badge badge-success">Featured Article</span>
                                <span class="text-muted ml-2"><i class="fas fa-calendar mr-1"></i>July 8, 2025</span>
                                <span class="text-muted ml-3"><i class="fas fa-user mr-1"></i>Dr. Sanitha Mathews</span>
                            </div>
                            <h3 class="mb-3">5 Essential Tips for Heart Health in Your 40s and Beyond</h3>
                            <p class="text-muted mb-3">Cardiovascular health becomes increasingly important as we age. Our cardiology expert shares evidence-based strategies to maintain a healthy heart throughout your life...</p>
                            <a href="#heart-health-article" class="btn btn-success">Read Full Article</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="health-tips-sidebar">
                        <h5 class="mb-3"><i class="fas fa-lightbulb text-warning mr-2"></i>Quick Health Tips</h5>
                        <div class="tip-item bg-white p-3 rounded shadow-sm mb-3">
                            <h6 class="text-success">Daily Hydration</h6>
                            <p class="small mb-0">Aim for 8-10 glasses of water daily. Proper hydration supports kidney function and overall health.</p>
                        </div>
                        <div class="tip-item bg-white p-3 rounded shadow-sm mb-3">
                            <h6 class="text-success">Sleep Quality</h6>
                            <p class="small mb-0">Adults need 7-9 hours of quality sleep. Maintain a consistent sleep schedule for better health.</p>
                        </div>
                        <div class="tip-item bg-white p-3 rounded shadow-sm mb-3">
                            <h6 class="text-success">Regular Exercise</h6>
                            <p class="small mb-0">30 minutes of moderate exercise 5 times a week can significantly improve your health outcomes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ################# Health Categories #######################-->
    <section class="health-categories py-5">
        <div class="container">
            <div class="inner-title text-center mb-5">
                <span class="badge badge-success p-2 mb-2">Health Topics</span>
                <h2>Explore Health Categories</h2>
                <p>Find expert advice on various health topics</p>
                <div class="heading-line bg-success mx-auto"></div>
            </div>
            
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="category-card bg-white rounded shadow-sm p-4 text-center h-100">
                        <i class="fas fa-heartbeat fa-3x text-danger mb-3"></i>
                        <h5>Heart Health</h5>
                        <p class="text-muted">Learn about cardiovascular wellness, prevention, and treatment options.</p>
                        <a href="#cardiology-articles" class="btn btn-outline-success">Explore Articles</a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="category-card bg-white rounded shadow-sm p-4 text-center h-100">
                        <i class="fas fa-brain fa-3x text-info mb-3"></i>
                        <h5>Mental Health</h5>
                        <p class="text-muted">Understand mental wellness, stress management, and neurological health.</p>
                        <a href="#mental-health-articles" class="btn btn-outline-success">Explore Articles</a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="category-card bg-white rounded shadow-sm p-4 text-center h-100">
                        <i class="fas fa-apple-alt fa-3x text-success mb-3"></i>
                        <h5>Nutrition & Diet</h5>
                        <p class="text-muted">Discover healthy eating habits and nutritional guidance for all ages.</p>
                        <a href="#nutrition-articles" class="btn btn-outline-success">Explore Articles</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ################# Recent Articles #######################-->
    <section class="recent-articles py-5 bg-light">
        <div class="container">
            <h3 class="text-center mb-5">Recent Health Articles</h3>
            
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="article-card bg-white rounded shadow-sm overflow-hidden h-100">
                        <img src="assets/images/news/diabetes-prevention.jpg" alt="Diabetes Prevention" class="img-fluid w-100" style="height: 200px; object-fit: cover;">
                        <div class="card-body p-4">
                            <div class="article-meta mb-2">
                                <span class="badge badge-outline-warning">Prevention</span>
                                <small class="text-muted ml-2">July 5, 2025</small>
                            </div>
                            <h6 class="mb-2">Understanding Type 2 Diabetes Prevention</h6>
                            <p class="text-muted small mb-3">Early detection and lifestyle modifications can significantly reduce your risk of developing type 2 diabetes...</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">Dr. Meena Rajput</small>
                                <a href="#" class="text-success">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="article-card bg-white rounded shadow-sm overflow-hidden h-100">
                        <img src="assets/images/news/joint-health.jpg" alt="Joint Health" class="img-fluid w-100" style="height: 200px; object-fit: cover;">
                        <div class="card-body p-4">
                            <div class="article-meta mb-2">
                                <span class="badge badge-outline-info">Orthopedics</span>
                                <small class="text-muted ml-2">July 3, 2025</small>
                            </div>
                            <h6 class="mb-2">Maintaining Joint Health as You Age</h6>
                            <p class="text-muted small mb-3">Simple exercises and lifestyle changes can help keep your joints healthy and pain-free throughout your life...</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">Dr. Samuel Kumar</small>
                                <a href="#" class="text-success">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="article-card bg-white rounded shadow-sm overflow-hidden h-100">
                        <img src="assets/images/news/immune-system.jpg" alt="Immune System" class="img-fluid w-100" style="height: 200px; object-fit: cover;">
                        <div class="card-body p-4">
                            <div class="article-meta mb-2">
                                <span class="badge badge-outline-success">Wellness</span>
                                <small class="text-muted ml-2">July 1, 2025</small>
                            </div>
                            <h6 class="mb-2">Boosting Your Immune System Naturally</h6>
                            <p class="text-muted small mb-3">Learn about natural ways to strengthen your immune system through diet, exercise, and healthy lifestyle choices...</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">Dr. David Kanuel</small>
                                <a href="#" class="text-success">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="article-card bg-white rounded shadow-sm overflow-hidden h-100">
                        <img src="assets/images/news/women-health.jpg" alt="Women's Health" class="img-fluid w-100" style="height: 200px; object-fit: cover;">
                        <div class="card-body p-4">
                            <div class="article-meta mb-2">
                                <span class="badge badge-outline-danger">Women's Health</span>
                                <small class="text-muted ml-2">June 28, 2025</small>
                            </div>
                            <h6 class="mb-2">Women's Health After 30: What to Know</h6>
                            <p class="text-muted small mb-3">Important health screenings and lifestyle considerations for women entering their thirties and beyond...</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">Dr. Sanitha Mathews</small>
                                <a href="#" class="text-success">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="article-card bg-white rounded shadow-sm overflow-hidden h-100">
                        <img src="assets/images/news/mental-wellness.jpg" alt="Mental Wellness" class="img-fluid w-100" style="height: 200px; object-fit: cover;">
                        <div class="card-body p-4">
                            <div class="article-meta mb-2">
                                <span class="badge badge-outline-primary">Mental Health</span>
                                <small class="text-muted ml-2">June 25, 2025</small>
                            </div>
                            <h6 class="mb-2">Managing Stress in Modern Life</h6>
                            <p class="text-muted small mb-3">Effective strategies for managing stress and maintaining mental well-being in today's fast-paced world...</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">Dr. Meena Rajput</small>
                                <a href="#" class="text-success">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="article-card bg-white rounded shadow-sm overflow-hidden h-100">
                        <img src="assets/images/news/child-health.jpg" alt="Child Health" class="img-fluid w-100" style="height: 200px; object-fit: cover;">
                        <div class="card-body p-4">
                            <div class="article-meta mb-2">
                                <span class="badge badge-outline-warning">Pediatrics</span>
                                <small class="text-muted ml-2">June 22, 2025</small>
                            </div>
                            <h6 class="mb-2">Essential Vaccinations for Children</h6>
                            <p class="text-muted small mb-3">A comprehensive guide to childhood vaccinations and their importance in protecting your child's health...</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">Dr. Samuel Kumar</small>
                                <a href="#" class="text-success">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-4">
                <a href="#" class="btn btn-success">View All Articles</a>
            </div>
        </div>
    </section>

    <!-- ################# Health Resources #######################-->
    <section class="health-resources py-5">
        <div class="container">
            <h3 class="text-center mb-5">Health Resources & Downloads</h3>
            
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="resource-card bg-white p-4 rounded shadow-sm text-center">
                        <i class="fas fa-file-pdf fa-3x text-danger mb-3"></i>
                        <h6>Heart Health Guide</h6>
                        <p class="text-muted small">Comprehensive guide to maintaining cardiovascular health</p>
                        <a href="#" class="btn btn-sm btn-outline-success">Download PDF</a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="resource-card bg-white p-4 rounded shadow-sm text-center">
                        <i class="fas fa-file-pdf fa-3x text-danger mb-3"></i>
                        <h6>Nutrition Planning</h6>
                        <p class="text-muted small">Weekly meal planning guide for healthy living</p>
                        <a href="#" class="btn btn-sm btn-outline-success">Download PDF</a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="resource-card bg-white p-4 rounded shadow-sm text-center">
                        <i class="fas fa-file-pdf fa-3x text-danger mb-3"></i>
                        <h6>Exercise Guide</h6>
                        <p class="text-muted small">Safe and effective exercises for all fitness levels</p>
                        <a href="#" class="btn btn-sm btn-outline-success">Download PDF</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ################# Newsletter Signup #######################-->
    <section class="newsletter-signup py-5 bg-success text-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h3 class="mb-3">Stay Updated with Health Tips</h3>
                    <p class="mb-4">Subscribe to our newsletter for the latest health articles and wellness tips from our medical experts.</p>
                    <form class="row justify-content-center">
                        <div class="col-md-6 mb-3">
                            <input type="email" class="form-control" placeholder="Enter your email address" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <button type="submit" class="btn btn-light text-success w-100">Subscribe</button>
                        </div>
                    </form>
                    <small class="text-white-50">We respect your privacy. Unsubscribe at any time.</small>
                </div>
            </div>
        </div>
    </section>

    <!-- ################# Footer Starts Here #######################-->
    <?php include_once('assets/includes/footer.php'); ?>

    <!-- Optional JavaScript -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
