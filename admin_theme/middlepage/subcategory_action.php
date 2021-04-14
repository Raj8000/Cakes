<?php
	
	if(isset($_POST['submit']))
	{
		extract($_POST);
		@$status=$_POST['status'];
		if($subcat_id=='')
		{
			$insert="INSERT INTO `subcategory`(`subcat_id`,`cat_id`,`name`, `description`, `status`) 
			VALUES(NULL,'$cat_id','$name','$description','$status')";

			$query=mysqli_query($con,$insert);		
		
			if($query)
			{
				//echo "insert";
				header("location:default.php?page=subcategory_list");
			}
			else
			{
				//echo "error";
				header("location:default.php?page=subcategory");
			}
		}
		else
		{
			$update="UPDATE `subcategory` SET `cat_id`='$cat_id',`name`='$name',`description`='$description',`status`='$status' WHERE subcat_id=" .$subcat_id;
			$query=mysqli_query($con,$update);
			if($query)
			{
				header("location:default.php?page=subcategory_list");
			}
			else
			{
				header("location:default.php?page=subcategory");
			}
		}
	}		
	else
	{
		$id=$_GET['id'];
		$delete="DELETE FROM `subcategory` WHERE subcat_id=" .$id;
		$query=mysqli_query($con,$delete);	
		if($query)
		{
			header("location:default.php?page=subcategory_list");
		}
		else
		{
			header("location:default.php?page=subcategory");
		}
	}
?>