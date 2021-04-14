<?php
	if(isset($_POST['submit']))
	{
		extract($_POST);

		$file=$_FILES['img']['name'];
		$file_tmp=$_FILES['img']['tmp_name'];
		move_uploaded_file($file_tmp,"img/" .$file);
		if($user_id=='')
		{
			$insert="INSERT INTO `user_reg`(`user_id`, `first_name`, `last_name`, `dob`, `email`, `password`, `mobile_number`, `cdate`, `gender`, `img`, `address`, `status`) 
			VALUES(NULL,'$first_name','$last_name','$dob','$email','$password','$mobile_number','$cdate','$gender','$file','$address','$status')";
			$iquery=mysqli_query($con,$insert);

			if($iquery)
			{
				//echo "Success";
				header("location:default.php?page=user_list");
			}
			else
			{
				//echo "error";
				header("location:default.php?page=user_reg");
			}

		}
		else
			{
				if($file=='')
				{
					$update="UPDATE `user_reg` SET `first_name`='$first_name',`last_name`='$last_name',`dob`='$dob',`email`='$email',`password`='$password',`mobile_number`='$mobile_number',`cdate`='$cdate',`gender`='$gender',`address`='$address',`status`='$status' WHERE user_id =" .$user_id;
				}
				else
				{
					$img_update="SELECT * FROM `user_reg` WHERE user_id=".$user_id;
					$query=mysqli_query($con,$img_update);
					$iarray=mysqli_fetch_array($query);
					unlink('img/'.$row['img']);
					move_uploaded_file($file_tmp,'img/'.$file);
				$update="UPDATE `user_reg` SET `first_name`='$first_name',`last_name`='$last_name',`dob`='$dob',`email`='$email',`password`='$password',`mobile_number`='$mobile_number',`cdate`='$cdate',`gender`='$gender',`img`='$file',`address`='$address',`status`='$status' WHERE user_id =$user_id";
				}
				

				$qupdate=mysqli_query($con,$update);
				if($qupdate)
				{
					header("location:default.php?page=user_list");
				}
				else
				{
					header("location:default.php?page=user_reg");
				}

				
			}

	}
	else
	{
		$id=$_REQUEST['id'];

		$delete="DELETE FROM `user_reg` WHERE user_id=" .$id;

		$query=mysqli_query($con,$delete);

		if($query)
		{
			header("location:default.php?page=user_list");
		}
		else
		{
				header("location:default.php?page=user_reg");	
		}


	}
?>