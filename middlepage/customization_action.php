<?php

echo$action=$_REQUEST['action'];
	if(isset($_POST['submit']))
	{
		extract($_POST);
			$user_id=$_SESSION['user_id'];
			//$product_id=$_GET['id'];
			echo $insert="INSERT INTO `customization`(`cust_id`,cart_id,`shape`,`text`,`user_id`,`total_price`) VALUES (NUll,'$cart_id','$shape','$text','$user_id','$total_price')";
			$query=mysqli_query($con,$insert);
			//die;
			if($query)
			{
				//echo "Success";
				echo $cust_id=mysqli_insert_id($con);
						$user_id=$_SESSION['user_id'];
				echo $insert_order="INSERT INTO `order`(`user_id`,`cust_id`) VALUES ('$user_id','$cust_id')";
			$query1=mysqli_query($con,$insert_order);
			header('location:index.php?page=shipping');
				if($query1)
				{
				$_SESSION['order_id']=mysqli_insert_id($con);

					echo "okok";
				}
				else
				{
					echo "not";
				}

				// /header("location:index.php?page=confirm_order&id=$product_id");
			}
			else
			{
				echo "Error";
			}
		}
	
?>