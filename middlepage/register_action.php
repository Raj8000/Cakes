<?php  
	
	
	if(isset($_POST['submit']))
	{
		extract($_POST);
		$file=$_FILES['img']['name'];

		$file_tmp=$_FILES['img']['tmp_name'];

		move_uploaded_file($file_tmp,"images/" .$file);

		if($user_id=='')
		{
			 $insert="INSERT INTO `user_reg`(`user_id`, `first_name`, `last_name`, `dob`, `email`, `password`, `mobile_number`, `cdate`, `gender`, `img`, `address`)
			 VALUES (NULL,'$first_name','$last_name','$dob','$email','$password','$mobile_number','$cdate','$gender','$file','$address')";
			$query=mysqli_query($con,$insert);
		
			if($query)
			{
				$_SESSION['reg_msg']="Successfully Registered";
				header("location:index.php");
			}
			else
			{ 	
				header("location:index.php?page=register");
			}
		}
	}
?>