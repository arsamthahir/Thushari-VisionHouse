<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

if(isset($_POST['submit']))
{
$specilization=$_POST['Doctorspecialization'];
$doctorid=$_POST['doctor'];
$userid=$_SESSION['id'];
$fees=$_POST['fees'];
$appdate=$_POST['appdate'];
$time=$_POST['apptime'];
$userstatus=1;
$docstatus=1;
$query=mysqli_query($con,"insert into appointment(doctorSpecialization,doctorId,userId,consultancyFees,appointmentDate,appointmentTime,userStatus,doctorStatus) values('$specilization','$doctorid','$userid','$fees','$appdate','$time','$userstatus','$docstatus')");
	if($query)
	{
		$_SESSION['msg']="Your appointment successfully booked!";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>TVH Patient Portal | Book Appointment</title>
		
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
		<link rel="stylesheet" href="assets/css/book-appointment.css" />
		
		<script>
		function getdoctor(val) {
			$.ajax({
				type: "POST",
				url: "get_doctor.php",
				data:'specilizationid='+val,
				success: function(data){
					$("#doctor").html(data);
				}
			});
		}
		</script>
		<script>
		function getfee(val) {
			$.ajax({
				type: "POST",
				url: "get_doctor.php",
				data:'doctor='+val,
				success: function(data){
					$("#fees").html(data);
				}
			});
		}
		</script>
	</head>
	<body>
		<div id="app">		
			<?php include('include/sidebar.php');?>
			<div class="app-content">
				<?php include('include/header.php');?>
				
				<div class="main-content">
					<div class="dashboard-container">
						<!-- Page Title -->
						<div class="page-title">
							<h1 class="mainTitle">Book Appointment</h1>
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><span>User</span></li>
									<li class="breadcrumb-item active"><span>Book Appointment</span></li>
								</ol>
							</nav>
						</div>

						<!-- Book Appointment Form -->
						<div class="book-appointment-section">
							<?php if(isset($_SESSION['msg'])) { ?>
								<div class="alert alert-success">
									<?php echo htmlentities($_SESSION['msg']); ?>
									<?php echo htmlentities($_SESSION['msg']=""); ?>
								</div>
							<?php } ?>

							<form role="form" name="book" method="post">
								<div class="form-group">
									<label for="DoctorSpecialization">Doctor Specialization</label>
									<select name="Doctorspecialization" class="form-control" onChange="getdoctor(this.value);" required>
										<option value="">Select Specialization</option>
										<?php 
										$ret=mysqli_query($con,"select * from doctorspecilization");
										while($row=mysqli_fetch_array($ret))
										{
										?>
										<option value="<?php echo htmlentities($row['specilization']);?>
											<?php echo htmlentities($row['specilization']);?>
										</option>
										<?php } ?>
									</select>
								</div>

								<div class="form-group">
									<label for="doctor">Doctors</label>
									<select name="doctor" class="form-control" id="doctor" onChange="getfee(this.value);" required>
										<option value="">Select Doctor</option>
									</select>
								</div>

								<div class="form-group">
									<label for="fees">Consultancy Fees</label>
									<select name="fees" class="form-control" id="fees" readonly="readonly"></select>
								</div>

								<div class="form-group">
									<label for="AppointmentDate">Date</label>
									<input class="form-control datepicker" name="appdate" required="required" data-date-format="yyyy-mm-dd">
								</div>

								<div class="form-group">
									<label for="Appointmenttime">Time</label>
									<input class="form-control timepicker" name="apptime" required="required">
								</div>

								<button type="submit" name="submit" class="btn btn-primary">
									Submit
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- start: FOOTER -->
			<?php include('include/footer.php');?>
			<!-- end: FOOTER -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<script src="assets/js/sidebar.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				$('.datepicker').datepicker({
					format: 'yyyy-mm-dd',
					startDate: 'today'
				});
				$('.timepicker').timepicker({
					minuteStep: 5,
					showMeridian: false,
					defaultTime: false
				});
			});
		</script>
	</body>
</html>
