<?php

	if(isset($_POST['submit']))
	{
		extract($_POST);
		//print_r($_POST);
		  $file=$_FILES['img']['name'];

		  $file_tmp=$_FILES['img']['tmp_name'];

		  move_uploaded_file($file_tmp,"img/".$file);

		if($product_id=='')
		{
			echo $insert="INSERT INTO `product`(`product_id`,`cat_id`, `name`, `img`, `date`, `price`, `des`, `status`) VALUES 
			(NULL,'$cat_id','$name','$file','$date','$price','$des','$status')";
			
			 $iquery=mysqli_query($con,$insert);
			 
			 if($iquery)
			 {
			 	//echo "insert";
			 	header("location:default.php?page=product_list");
			 }
			 else
			 {
			 	//echo "error";
			 	header("location:default.php?page=product");
			 }
		}
		else
		{
				if($file=='')
				{
					$update="UPDATE `product` SET `cat_id`='$cat_id',`name`='$name',`date`='$date',`price`='$price',`des`='$des',`status`='$status' WHERE product_id=" .$product_id;
					$qupdate=mysqli_query($con,$update);
				}
				else
				{
					$img_update="SELECT * FROM `product` WHERE product_id=".$product_id;
					$query=mysqli_query($con,$img_update);
					$iarray=mysqli_fetch_array($query);
					unlink('img/'.$row['img']);
					move_uploaded_file($file_tmp,'img/'.$file);
					$update="UPDATE `product` SET `cat_id`='$cat_id',`name`='$name',`img`='$file',`date`='$date',`price`='$price',`des`='$des',`status`='$status' WHERE product_id=" .$product_id;
			
				}
				$qupdate=mysqli_query($con,$update);
				if($qupdate)
				{
					header("location:default.php?page=product_list");
				}
				else
				{
					header("location:default.php?page=product");
				}
				
			}

	}
	else
	{

		$id=$_GET['id'];

		$delete="DELETE FROM `product` WHERE product_id=" .$id;

		$query=mysqli_query($con,$delete);

		if($query)
		{
			header("location:default.php?page=product_list");
		}
		else
		{
				header("location:default.php?page=product_reg");	
		}


	}
?>