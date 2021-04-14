<?php 

	$product_id=$_GET['id'];
	$ip=$_SERVER['REMOTE_ADDR'];
	$select="SELECT * FROM `cart` WHERE product_id='".$product_id."' AND ip='".$ip."'";
	$query=mysqli_query($con,$select);
	$count=mysqli_num_rows($query);
	$user_id=$_SESSION['user_id'];
	if($count>0)
	{
		$rowupdate=mysqli_fetch_assoc($query);
		$user_id=$_SESSION['user_id'];
		$cart_id=$rowupdate['cart_id'];
		$product_id=$rowupdate['product_id'];
		$quantity=$rowupdate['quantity']+1;
		$total_amount=$rowupdate['price']*$quantity;
		$updatecart="UPDATE cart SET quantity='".$quantity."', user_id='".$user_id."' , amount='".$total_amount."' WHERE cart_id='".$cart_id."'";
		$result_updatecart=mysqli_query($con,$updatecart);
		if($result_updatecart)
		{
			header('location:index.php?page=cart_list');
		}
		else
		{
			echo "not";
		}
	}
	else
	{
	$sel1="SELECT * FROM `product` WHERE product_id='".$product_id."' ";
	$qry1=mysqli_query($con,$sel1);
	$row1=mysqli_fetch_assoc($qry1);
	$price= $row1['price'];
	$quantity=1;
	$total_amount=$quantity * $price;
	$insert="INSERT INTO `cart`(`cart_id`,`quantity`,`price`,`user_id`, `product_id`,`amount`, `ip`) VALUES(NULL,'$quantity','$price','$user_id','$product_id','$total_amount','$ip')";
	$qry2=mysqli_query($con,$insert);
		if($qry2)
		{
			$_SESSION['total']=$total_amount
			header('location:index.php?page=cart_list');
		}
		else
		{
			echo "not";
		}
	}


?>