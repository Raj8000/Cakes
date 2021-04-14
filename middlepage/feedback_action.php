<?php

	if(isset($_POST['submit']))
	{
		extract($_POST);
		$user_id=$_SESSION['user_id'];
		if($fb_id=="")
		{
			$insert="INSERT INTO `feedback`(`fb_id`,`user_id`,`email_id`, `c_number`, `message`) 
			VALUES (NULL,'$user_id','$email_id','$c_number','$message')";
			$query=mysqli_query($con,$insert);
			if($query)
			{
				$_SESSION['feedback_msg']="Your Feedback is submitted!!";
				header("location:index.php");
			}
			else
			{
				echo "Error";
			}

		}
	}

?>