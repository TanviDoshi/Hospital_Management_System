<?php 

require("db.php");
	$sql=mysqli_query($connection,"select * from doctor where dept_id=".$_POST['sp_id']);
	?>
	<option selected disabled>Select Doctor</option>
	<?php
	while($row=mysqli_fetch_assoc($sql))
	{
		?>
		<option value="<?php echo $row['doc_id']; ?>"><?php echo $row['doc_fname']." ".$row['doc_lname']; ?></option>
		<?php
	}
	
?>