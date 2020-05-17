<?php 

	require("db.php");
	$did=$_GET['cid'];
	$query = "select * from doctor where dept_id ='$did'";
	
	$x = "";
	$ans = mysqli_query($connection, $query);
	while($row=mysqli_fetch_assoc($ans))
	
	{

		$x = $x."<option value='".$row["doc_id"]."'>".$row["doc_fname"]."</option>";
	}
	mysqli_close($con);
	//echo $x;

?>