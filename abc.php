<?php 

if(isset($_POST['submit']))
{
	include("db.php");
	$mail=$_POST['mail'];
	$pass=$_POST['lpass'];
	
	
	$log=mysqli_query($connection,"select * from user_login");
	
	while($row=mysqli_fetch_assoc($log))
	{
		if($mail==$row['user_email'] and $pass==$row['pass'])
		{
			if($row['user_type']=="admin")
			{
				header("Location:hospital/hms/admin/dashboard.php");
			}
			elseif($row['user_type']=="patient")
			{
				echo "wjgrtbj";
			}
			elseif($row['user_type']=="doctor")
			{
				echo "wjgrtbj";
			}
			else
			{
				$message = "Invalid User_Type..!\n Try Again";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
		}
		else
		{
			$message = "Username or Password incorrect.\\nTry again.";
				echo "<script type='text/javascript'>alert('$message');</script>";
		}
	}
}
	?>