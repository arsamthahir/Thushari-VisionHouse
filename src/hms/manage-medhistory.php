<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>TVH Patient Portal | Medical History</title>
		
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
		<link rel="stylesheet" href="../../public/assets/css/sidebar.css" />
		<link rel="stylesheet" href="../../public/assets/css/header.css" />
		<link rel="stylesheet" href="assets/css/dashboard.css" />
		<link rel="stylesheet" href="assets/css/medical-history.css" />
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
							<h1 class="mainTitle">Medical History</h1>
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><span>User</span></li>
									<li class="breadcrumb-item active"><span>Medical History</span></li>
								</ol>
							</nav>
						</div>

						<!-- Medical History Section -->
						<div class="medical-history-section">
							<div class="table-responsive">
								<table class="table medical-history-table">
									<thead>
										<tr>
											<th>#</th>
											<th>Patient Name</th>
											<th>Contact Number</th>
											<th>Gender</th>
											<th>Creation Date</th>
											<th>Update Date</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$uid=$_SESSION['id'];
										$sql=mysqli_query($con,"select tblpatient.* from tblpatient where tblpatient.userid='$uid'");
										$cnt=1;
										$num=mysqli_num_rows($sql);
										if($num>0){
											while($row=mysqli_fetch_array($sql))
											{
										?>
											<tr>
												<td><?php echo $cnt;?>.</td>
												<td><?php echo $row['PatientName'];?></td>
												<td><?php echo $row['PatientContno'];?></td>
												<td><?php echo $row['PatientGender'];?></td>
												<td><?php echo $row['CreationDate'];?></td>
												<td><?php echo $row['UpdationDate'];?></td>
												<td>
													<a href="view-medhistory.php?viewid=<?php echo $row['ID'];?>" 
														class="view-btn">
														<i class="fa fa-eye"></i> View
													</a>
												</td>
											</tr>
											<?php 
											$cnt=$cnt+1;
											}
										} else { ?>
											<tr>
												<td colspan="7">
													<div class="empty-state">
														<i class="fa fa-folder-open-o"></i>
														<p>No medical history found</p>
													</div>
												</td>
											</tr>
										<?php } ?>
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
