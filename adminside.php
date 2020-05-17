<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Health medical template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<meta name="apple-mobile-web-app-capable" content="yes">
<!----------------------------------------------------------------------------------------->
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta content="" name="description" />
<meta content="" name="author" />
<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="hmsproject/hospital/hms/admin/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="hmsproject/hospital/hms/admin/vendor/fontawesome/css/font-awesome.min.css">
<link rel="stylesheet" href="hmsproject/hospital/hms/admin/vendor/themify-icons/themify-icons.min.css">
<link href="hmsproject/hospital/hms/admin/vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
<link href="hmsproject/hospital/hms/admin/vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
<link href="hmsproject/hospital/hms/admin/vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
<link href="hmsproject/hospital/hms/admin/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
<link href="hmsproject/hospital/hms/admin/vendor/select2/select2.min.css" rel="stylesheet" media="screen">
<link href="hmsproject/hospital/hms/admin/vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
<link href="hmsproject/hospital/hms/admin/vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="hmsproject/hospital/hms/admin/assets/css/styles.css">
<link rel="stylesheet" href="hmsproject/hospital/hms/admin/assets/css/plugins.css">
<link rel="stylesheet" href="hmsproject/hospital/hms/admin/assets/css/themes/theme-1.css" id="skin_color" />
<style>
.navi{background-color: #32c69a;
	  color:white;
	}

</style>
</head>
<body>
		<!--Header-->
			<div class="app-content">
			<?php include('hmsproject/hospital/hms/admin/include/header.php');?>
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Admin | Dashboard</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Admin</span>
									</li>
									<li class="active">
										<span>Dashboard</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
							<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-smile-o fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle">Manage Patients</h2>
											
											<p class="links cl-effect-1">
												<a href="manage-users.php">
												<?php $result = mysql_query("SELECT * FROM users ");
$num_rows = mysql_num_rows($result);
{
?>
											Total Patients :<?php echo htmlentities($num_rows);  } ?>		
												</a>
											</p>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-users fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle">Manage Doctors</h2>
										
											<p class="cl-effect-1">
												<a href="manage-doctors.php">
												<?php $result1 = mysql_query("SELECT * FROM doctors ");
$num_rows1 = mysql_num_rows($result1);
{
?>
											Total Doctors :<?php echo htmlentities($num_rows1);  } ?>		
												</a>
												
											</p>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-terminal fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle"> Appointments</h2>
											
											<p class="links cl-effect-1">
												<a href="book-appointment.php">
													<a href="appointment-history.php">
												<?php $sql= mysql_query("SELECT * FROM appointment");
$num_rows2 = mysql_num_rows($sql);
{
?>
											Total Appointments :<?php echo htmlentities($num_rows2);  } ?>	
												</a>
												</a>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
			
					
					
						
						
					
						<!-- end: SELECT BOXES -->
						
					</div>
				</div>
			</div>
			</div>
			
			<div id="app">
			<?php include "hmsproject/hospital/hms/admin/include/sidebar.php"; ?>
			</div>
			
			
			<!-- start: MAIN JAVASCRIPTS -->
		<script src="hmsproject/hospital/hms/admin/vendor/jquery/jquery.min.js"></script>
		<script src="hmsproject/hospital/hms/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="hmsproject/hospital/hms/admin/vendor/modernizr/modernizr.js"></script>
		<script src="hmsproject/hospital/hms/admin/vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="hmsproject/hospital/hms/admin/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="hmsproject/hospital/hms/admin/vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="hmsproject/hospital/hms/admin/vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="hmsproject/hospital/hms/admin/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="hmsproject/hospital/hms/admin/vendor/autosize/autosize.min.js"></script>
		<script src="hmsproject/hospital/hms/admin/vendor/selectFx/classie.js"></script>
		<script src="hmsproject/hospital/hms/admin/vendor/selectFx/selectFx.js"></script>
		<script src="hmsproject/hospital/hms/admin/vendor/select2/select2.min.js"></script>
		<script src="hmsproject/hospital/hms/admin/vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="hmsproject/hospital/hms/admin/vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="hmsproject/hospital/hms/admin/assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="hmsproject/hospital/hms/admin/assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
</body>