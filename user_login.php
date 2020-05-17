<?php 
session_start();
if(isset($_POST['submit']))
{
	include("db.php");
	$mail=$_POST['mail'];
	$pass=$_POST['lpass'];

	$log=mysqli_query($connection,"select * from user_login where user_email='$mail' and pass='$pass'");
	
	
	while($row=mysqli_fetch_assoc($log))
	{
			if($row['user_type']=="admin")
			{
				$_SESSION['umail']=$mail;
				header("Location:web/index.php?");
			}
			elseif($row['user_type']=="patient")
			{
				echo "wjgrtbj";
			}
			elseif($row['user_type']=="Doctor")
			{
				if(mysqli_query($connection,"select * from doctor where doc_mail='$mail'"))
				{
					$_SESSION['umail']=$mail;
					header("Location:Doctor/index.php");
				}
				else
				{
					header("Location:profile.php");
				}
				
			}
			elseif($row['user_type']=="Receptionist")
			{
				if(mysqli_query($connection,"select * from doctor where doc_mail='$mail'"))
				{
					$_SESSION['umail']=$mail;
					header("Location:Receptionist/index.php");
				}
				else
				{
					header("Location:profile.php");
				}
				
			}
			
			
			else
			{
				$message = "Invalid User_Type..!\n Try Again";
				echo "<script type='text/javascript'>alert('$message');</script>";
				
			}
	}
		
	
}
	?>