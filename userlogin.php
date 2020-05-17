<?php session_start(); ?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
body, html 
{
    height: 100%;
    font-family: Arial, Helvetica, sans-serif;
}

* {
    box-sizing: border-box;
}

.bg-img {
    background-image: url("i1.jpg");

    min-height: 380px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* Add styles to the form container */
.containerr {
    position: absolute;
	top: 3%;
	left: 1%;
	color: black;
    margin: 30px;
    min-width: 400px;
	padding: 24px;
    background-color: rgba(255,255, 255,0.6);
	border-radius:10px;

}

.button
{
	float:center;
	padding:8px 12px;
	margin:8px 0 0;
	border:2px solid #78788c;
	background:0;
	color:#5a5a6e;
	cursor:pointer;
	transition:all .3s;
	width:40%;
}
.button:hover
{
	background:#093c58;
	color:#fff
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
    color: #093c58;
    min-width: 50px;
    text-align: center;
}



.bg-img {
    
	
    background-image: url("images/box_3.jpg");
	min-height: 450px;
	max-width:1500px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
	background-attachment:fixed;
}
.input-field{width:100%;padding:10px;box-sizing:border-box;background:none;outline:none;resize:none;border:0;transition:all .3s;border-bottom:2px solid #093c58}
.input-field:focus{border-bottom:2px solid #E51031}


</style>
</head>
<body >



	<div class="bg-img" >
	
		<form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="containerr">
		<div class="input-cont">
			<i class="fa fa-envelope icon"></i>
			<input type="text" placeholder="Enter Email ID" class="input-field" name="mail"required autocomplete="off">
		</div>

		<div class="input-cont">
			<i class="fa fa-key icon"></i>
			<input type="password" placeholder="Enter password" class="input-field" name="lpass" required><br>
		</div>
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="submit" class="button" value="Login" name="submit">
		<a href="homepage.php"><button type="button" class="button" >Back</button></a>
		
		</form>
	</div>
	
	
</body>


</html>


<?php

if(isset($_POST['submit']))
{
	ob_start();
	include("db.php");
	$check=mysqli_query($connection,"select * from signup");
	
	
	$_SESSION['umail']=$_POST['mail'];
	
	while($ch=mysqli_fetch_assoc($check))
	{
		if($_POST['mail']==$ch['email'] and $_POST['lpass']==$ch['pass'] )
		{
			header("Location:userside.php");
		}
		
		elseif($_POST['mail']=="admin@gmail.com" and $_POST['lpass']=="admin")
		{
			header("Location:adminside.php");
		}
		else
		{
			 $message = "Username or Password incorrect.\\nTry again.";
				echo "<script type='text/javascript'>alert('$message');</script>";
				
		}
		
	}
	
	
}

?>

​



