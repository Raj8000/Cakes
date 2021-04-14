<?php
	
	if(isset($_POST['submit']))
	{
		extract($_POST);
		$insert="INSERT INTO `contactus`(`name`, `email_id`, `c_number`, `message`) 
		VALUES('$name','$email_id','$c_number','$message') ";
		$query=mysqli_query($con,$insert);
		if($query)
		{
			header("location:index.php");
		}
		else
		{
			header("location:index.php?page=contact");
		}
	}
?>