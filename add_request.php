<?php 
include("db.php");

if(isset($_POST['sent']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$gen=$_POST['gen'];
	$age=$_POST['age'];
	$sp=$_POST['pdis'];
	$doc=$_POST['doc'];
	$con=$_POST['con'];
	$mail=$_POST['mail'];
	
	
	
	$sql=mysqli_query($connection,"insert into request_appointment(fname,lname,gender,age,spe_id,doc_id,contact,email) values('$fname','$lname','$gen','$age','$sp','$doc','$con','$mail')");
	
	if($sql)
	{
		$message = "Your Request has been Sanded .. you will be informed soon by Email..";
		echo "<script type='text/javascript'>alert('$message');
		
		window.location.href='http://localhost/sem_6/health/index.html';</script>";
	}
	else 
	{
		$message = " Error Occured Please Try Again...";
		echo "<script type='text/javascript'>alert('$message');
		
		window.location.href='http://localhost/sem_6/health/index.html';</script>";
	}
}



?>