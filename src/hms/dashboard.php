<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>TVH Patient Portal | Dashboard</title>
		
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
		<link rel="stylesheet" href="../../public/assets/css/sidebar.css" />
		<link rel="stylesheet" href="../../public/assets/css/header.css" />
		<link rel="stylesheet" href="assets/css/dashboard.css" />


	</head>
	<body>
		<div id="app">		
<?php include('include/sidebar.php');?>
			<div class="app-content">
				
						<?php include('include/header.php');?>
						
				<!-- end: TOP NAVBAR -->
				<div class="main-content">
					<div class="dashboard-container">
						<!-- Page Title -->
						<div class="page-title">
							<h1 class="mainTitle">Welcome to Your Dashboard</h1>
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><span>User</span></li>
									<li class="breadcrumb-item active"><span>Dashboard</span></li>
								</ol>
							</nav>
						</div>



						<!-- Quick Actions -->
						<div class="quick-actions">
							<div class="action-card">
								<div class="action-icon">
									<i class="fa fa-user"></i>
								</div>
								<h3 class="action-title">My Profile</h3>
								<a href="edit-profile.php" class="card-link">Update Profile</a>
							</div>
							<div class="action-card">
								<div class="action-icon">
									<i class="fa fa-calendar"></i>
								</div>
								<h3 class="action-title">Appointments</h3>
								<a href="appointment-history.php" class="card-link">View History</a>
							</div>
							<div class="action-card">
								<div class="action-icon">
									<i class="fa fa-plus-circle"></i>
								</div>
								<h3 class="action-title">Book Appointment</h3>
								<a href="book-appointment.php" class="card-link">Schedule Now</a>
							</div>
						</div>

						<!-- Recent Activity -->
						<div class="recent-activity">
							<h2 class="stats-title">Recent Activity</h2>
							<?php
								$sql = mysqli_query($con,"SELECT * FROM appointment WHERE userId='".$_SESSION['id']."' ORDER BY appointmentDate DESC LIMIT 5");
								while($row = mysqli_fetch_array($sql)) {
							?>
							<div class="activity-item">
								<div class="activity-icon">
									<i class="fa fa-calendar-check-o"></i>
								</div>
								<div class="activity-details">
									<h4 class="activity-title">Appointment with <?php echo $row['doctorSpecialization']; ?></h4>
									<p class="activity-time">Scheduled for: <?php echo $row['appointmentDate']; ?></p>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
			
					
					
						
						
					
						<!-- end: SELECT BOXES -->
						
					</div>
				</div>
			</div>
			<!-- start: FOOTER -->
	<?php include('include/footer.php');?>
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
	<?php include('include/setting.php');?>
			<>
			<!-- end: SETTINGS -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script src="assets/js/sidebar.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
