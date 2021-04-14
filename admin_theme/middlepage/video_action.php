<?php
	if(isset($_POST['submit']))
	{
		extract($_POST);
		if($video_id=="")
		{
			$insert="INSERT INTO `video`(`video_id`, `product_id`, `name`, `source`)
			 VALUES (NULL,'$product_id','$name','$source')";
			 $query=mysqli_query($con,$insert);
			 if($query)
			 {
			 	echo "Insert Successfull";
			 }
			 else
			 {
			 	echo "Error";
			 }
		}
	}
?>