<?php
session_start();
error_reporting(0);
include('include/config.php');
if(strlen($_SESSION['id']==0)) {
 header('location:logout.php');
  } else{
if(isset($_GET['cancel']))
		  {
		          mysqli_query($con,"update appointment set userStatus='0' where id = '".$_GET['id']."'");
                  $_SESSION['msg']="Your appointment canceled !!";
		  }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>TVH Patient Portal | Appointment History</title>
		
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
		<link rel="stylesheet" href="assets/css/appointment-history.css" />
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
							<h1 class="mainTitle">Appointment History</h1>
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><span>User</span></li>
									<li class="breadcrumb-item active"><span>Appointment History</span></li>
								</ol>
							</nav>
						</div>

						<!-- Appointment History Table -->
						<div class="appointment-history-section">
							<p class="alert-message"><?php echo htmlentities($_SESSION['msg']);?>
							<?php echo htmlentities($_SESSION['msg']="");?></p>	
							<div class="table-responsive">
								<table class="table table-hover custom-table">
									<thead>
										<tr>
											<th class="center">#</th>
											<th>Doctor Name</th>
											<th>Specialization</th>
											<th>Consultancy Fee</th>
											<th>Appointment Date / Time </th>
											<th>Creation Date</th>
											<th>Status</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
									<?php
									$sql=mysqli_query($con,"select doctors.doctorName as docname,appointment.*  from appointment join doctors on doctors.id=appointment.doctorId where appointment.userId='".$_SESSION['id']."'");
									$cnt=1;
									while($row=mysqli_fetch_array($sql))
									{
									?>
										<tr>
											<td class="center"><?php echo $cnt;?>.</td>
											<td><?php echo $row['docname'];?></td>
											<td><?php echo $row['doctorSpecialization'];?></td>
											<td><?php echo $row['consultancyFees'];?></td>
											<td><?php echo $row['appointmentDate'];?> / <?php echo $row['appointmentTime'];?></td>
											<td><?php echo $row['postingDate'];?></td>
											<td>
												<?php if(($row['userStatus']==1) && ($row['doctorStatus']==1)) {
													echo "<span class='status-active'>Active</span>";
												}
												if(($row['userStatus']==0) && ($row['doctorStatus']==1)) {
													echo "<span class='status-cancelled'>Cancelled by You</span>";
												}
												if(($row['userStatus']==1) && ($row['doctorStatus']==0)) {
													echo "<span class='status-cancelled'>Cancelled by Doctor</span>";
												}
												?>
											</td>
											<td>
												<?php if(($row['userStatus']==1) && ($row['doctorStatus']==1)) { ?>
													<a href="appointment-history.php?id=<?php echo $row['id']?>&cancel=update" 
														onClick="return confirm('Are you sure you want to cancel this appointment ?')"
														class="btn btn-danger btn-sm">
														Cancel
													</a>
												<?php } else {
													echo "<span class='status-text'>Cancelled</span>";
												} ?>
											</td>
										</tr>
									<?php 
										$cnt++;
									} ?>
									</tbody>
								</table>
							</div>
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
		<!-- end: MAIN JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<script src="assets/js/sidebar.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
			});
		</script>
	</body>
</html>
<?php } ?>