<!DOCTYPE html>
<html lang="en">
<head>
<title>Appointment</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Health medical template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
<script src="js/jquery-3.3.1.min.js"></script>


<style>
.info_form_container
{
	width: 100%;
	background: #e5ecf1;
	height: 100%;
	padding-left: 53px;
	padding-top: 50px;
	padding-bottom: 54px;
}
.info_form_title
{
	font-size: 24px;
	font-weight: 600;
	color: #404040;
	line-height: 1.2;
}
.info_form
{
	width: 100%;
	padding-right: 44px;
	margin-top: 43px;
}
.info_form select
{
	margin-bottom: 26px;
}
.info_form input:not(:last-child)
{
	margin-bottom: 23px;
}
.info_input
{
	
	width: 100%;
	height: 47px;
	background: #FFFFFF;
	padding-left: 20px;
	border: none;
	outline: none;
}
.input::-webkit-input-placeholder
{
	font-size: 12px !important;
	font-weight: 500 !important;
	font-style: italic;
	color: #828282 !important;
}
.input:-moz-placeholder
{
	font-size: 12px !important;
	font-weight: 500 !important;
	font-style: italic;
	color: #828282 !important;
}
.input::-moz-placeholder
{
	font-size: 12px !important;
	font-weight: 500 !important;
	font-style: italic;
	color: #828282 !important;
} 
.input:-ms-input-placeholder
{ 
	font-size: 12px !important;
	font-weight: 500 !important;
	font-style: italic;
	color: #828282 !important;
}
.input::input-placeholder
{
	font-size: 12px !important;
	font-weight: 500 !important;
	font-style: italic;
	color: #828282 !important;
}
.info_select
{
	display: block;
	position: relative;
	-webkit-appearance: none;
    -moz-appearance: none;
    -ms-appearance: none;
    -o-appearance: none;
    appearance: none;
    -webkit-box-shadow: 0px 0px 0px rgba(0, 0, 0, 0);
    -webkit-user-select: none;
    background-image: url(../images/down.png);
    background-position: center right;
    background-repeat: no-repeat;
    border: none;
    outline: none;
    font-size: 12px !important;
	font-weight: 500 !important;
	font-style: italic;
	color: #828282 !important;
    cursor: pointer;
}
.info_form_button
{
	width: 100%;
	height: 54px;
	background: #32c69a;
	border: none;
	outline: none;
	color: #FFFFFF;
	text-transform: uppercase;
	font-size: 11px;
	font-weight: 600;
	letter-spacing: 0.2em;
	margin-top: 4px;
	cursor: pointer;
}
<!-------------------------------------------------------------------------------------------->
input-fieldid1 {width: 25%; padding: 10px;outline: none;size:10; background: #FFFFFF;}
input-fieldid {width: 15%; padding: 10px;outline: none;size:10; background: #FFFFFF;}
.input-fieldidc {width: 8%;padding: 10px;outline: none;size:10;background: #FFFFFF;}
.input-field1 { width: 40%;padding: 10px;outline: none;size:20;background: #FFFFFF;}
.fs
{
	font-weight:normal;
}

.button
{
	float:center;
	padding:8px 12px;
	margin:8px 0 0;
	border:2px solid #32c69a;
	background:0;
	color:#5a5a6e;
	cursor:pointer;
	transition:all .3s;
	width:20%;
	height:30%;
	border-radius:30px;
}
.button:hover
{
	background:#838383;
	color:white;
	}


/*.bg-img {
    
	
    background-image: url("images/i1.jpg");
	min-height: 1000px;
	max-width:1500px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
	background-attachment:fixed;
}*/

::placeholder {
    color: red;
    opacity: 1; /* Firefox */
}


/* Add styles to the form container */
.containerr {
    position: absolute;
	top: 4%;
	left: 15%;
	color: black;
    margin: 30px;
    max-width: 900px;
	max-height:900px;
    padding: 10px;
   background: #e5ecf1;
   padding-left:7%;

}
.input-cont
 {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    width: 100%;
    margin-bottom: 15px;
}
.navi{background-color:#093c58;}


.btn {
    background-color: #093C58;
    color: white;
    font-size: 20px;
    padding: 6px 10px;
    border: none;
    cursor: pointer;
    text-align: center;
	
}
.btn:hover  {
    background-color: #E51031;
}
/*input,select,option{width:10%;padding:10px;box-sizing:border-box;background:none;outline:none;resize:none;border:0;transition:all .3s;border-bottom:2px solid #093c58}
input:focus,select:focus{border-bottom:2px solid #E51031}*/

</style>
</head>
<script type="text/javascript">
function getdoc(val)
{
	$.ajax({
		type:"POST",
		url:"data.php",
		data:'sp_id='+val,
		success:function(data)
		{
			$("#doc").html(data);
		}
	})
}
</script>
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
													<li class="active"><a href="request_appointment.php">Appointment</a></li>
													<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
													<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
													<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
													<li ><a href="profile.php">Profile</a></li>
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
		
	
		<div class="bg-img">
		
		<form action="add_request.php" method="POST" class="containerr" >
			<div class="info_form_title">Request an Appointment</div>
			<br>
		<input type="text" class="input-field1" name="fname" placeholder="First name" maxlength=20 required autocomplete="off">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" class="input-field1" name="lname" placeholder="Last name" maxlength=20 required autocomplete="off"><br><br>
		
		<label class="lab"><b>Gender: </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
		<font class="fs">
		<input type="radio" name="gen" value="Male">Male
		<input type="radio" name="gen" value="Female">Female
		<input type="radio" name="gen" value="Other">Other</font>
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" class="input-field1" name="age" placeholder="Age" maxlength=3  size=50 autocomplete="off" ><br><br>
		
		<select name='pdis' class='input-field1' selected id="sp" onChange="getdoc(this.value);">
		<option disabled selected > Select Speciality</option>
			<?php 
				require("db.php");
				$sql=mysqli_query($connection,"select * from department");
				
				while($row=mysqli_fetch_assoc($sql))
				{
			?>
				<option id="<?php echo $row['dept_id'];?>" value="<?php echo $row['dept_id'];?>"><?php echo $row['dept_name']; ?></option>
			<?php }?>
		</select>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
		<select name='doc' class='input-field1'id="doc" >
			<option selected disabled>Select Doctor</option>
		</select><br><br>
		
		<input type="text" class="input-field1" name="con" placeholder="Contact no." maxlength=10  size=50 autocomplete="off" >
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="email" class="input-field1" name="mail" placeholder="Email Id" maxlength=25  size=50 autocomplete="off"><br><br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<button type="submit"  name="sent" class="button">SEND</button>
		
		
		
		
		
		</form>
		</div>
</body>
</html>
