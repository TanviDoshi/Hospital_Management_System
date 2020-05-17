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

<style>
.input-field{width:100%;padding:10px;box-sizing:border-box;background:none;outline:none;resize:none;border:0;transition:all .3s;border-bottom:2px solid #32c69a}
.input-field:focus{border-bottom:4px solid #838383}

.bg-img {
    
	
    background-image: url("images/i1.jpg");
	min-height: 450px;
	max-width:1500px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
	background-attachment:fixed;
}

.containerr {
    position: absolute;
	top: 1%;
	left: 3%;
	color: black;
    margin: 30px;
    min-width: 400px;
	padding: 24px;
    background-color: rgba(255,255,255,0.6);
	border-radius:10px;

}

.button_log
{
	float:center;
	padding:8px 12px;
	margin:8px 0 0;
	border:2px solid #32c69a;
	background:0;
	color:#5a5a6e;
	cursor:pointer;
	transition:all .3s;
	width:40%;
	border-radius:30px;
}
.button_log:hover
{
	background:#838383;
	color:white;
	
	}


.input-cont
 {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    width: 100%;
    margin-bottom: 15px;
}

.icon {
    padding: 10px;
    color: #838383;
    min-width: 50px;
    text-align: center;
}


</style>
</head>
<body>
		<!-- Header -->

		<header class="header" id="header">
			<div>
				<div class="header_top">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="header_top_content d-flex flex-row align-items-center justify-content-start">
									<div class="logo">
										<a href="#">health<span>+</span></a>	
									</div>
									<div class="header_top_extra d-flex flex-row align-items-center justify-content-start ml-auto">
										<div class="header_top_phone">
											<i class="fa fa-phone" aria-hidden="true"></i>
											<span>+91 1800 532 0408</span>
										</div>
									</div>
									<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="header_nav" id="header_nav_pin">
					<div class="header_nav_inner">
						<div class="header_nav_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="header_nav_content d-flex flex-row align-items-center justify-content-start">
											<nav class="main_nav">
												<ul class="d-flex flex-row align-items-center justify-content-start">
													<li><a href="index.html">Home</a></li>
													<li><a href="about.html">About Us</a></li>
													<li><a href="services.html">Services</a></li>
													<li><a href="contact.html">Contact</a></li>
													<li><a href="request_appointment.php">Appointment</a></li>
													<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
													<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
													<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
													<li class="active"><a href="#">Profile</a></li>
												</ul>
											</nav>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
		
		<div class="bg-img" >
	
		<form  action="user_login.php" method="POST" class="containerr">
		<div class="input-cont">
			<i class="fa fa-envelope icon"></i>
			<input type="text" placeholder="Enter Email ID" class="input-field" name="mail"required autocomplete="off">
		</div>

		<div class="input-cont">
			<i class="fa fa-key icon"></i>
			<input type="password" placeholder="Enter password" class="input-field" name="lpass" required><br>
		</div>
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="submit" class="button_log" value="Login" name="submit">
		
		</form>
	</div>
	
		</header>
		</body>
		</html>
		

		
	