<?php 

	require("db.php");
	$x = "";
	$q=mysqli_query($connection,"select * from department");
		
	while($r=mysqli_fetch_assoc($q))
	{
		$x = $x."<option value='".$row["dept_id"]."'>".$row["dept_name"]."</option>";
		
	}
	echo $x;