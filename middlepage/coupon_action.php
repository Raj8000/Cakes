<?php
	$value=$_REQUEST['Coupan'];


	$check="SELECT * FROM `coupan` WHERE  code='".$value."'";
	$check_qry=mysqli_query($con,$check);
	$coupan_row=mysqli_fetch_assoc($check_qry);
	$count=mysqli_num_rows($check_qry);

	 	
	if($count>=0)
	{
		echo $select="SELECT * FROM  cart WHERE cart_id='".$_REQUEST['cart_id']."' ";
			 	$selqry=mysqli_query($con,$select);
			 	$row1=mysqli_fetch_assoc($selqry);


		 $total_price=$row1['amount'];
	 	$less_price=$coupan_row['coupan_price'];

		echo $disprice=$total_price - $less_price;

		$cart_id=$_REQUEST['cart_id'];

		$insert="INSERT INTO `customization` (`cart_id`)VALUES('".$cart_id."') ";
		$insert_qry=mysqli_query($con,$insert);
		$last_id=mysqli_insert_id($con);

		$_SESSION['last_id']=$last_id;

		
		if($insert_qry){
		echo $update="UPDATE `customization` SET coupan_status='yes',total_price='".$disprice."' WHERE cart_id='".$cart_id."' ";
	
		$qry=mysqli_query($con,$update);
		
		if($qry)
		{
				$_SESSION['coupanprice']=$less_price;
				$_SESSION['coupanValue']=$value;
		$_SESSION['Coupon']="<label style='color:green'>Coupon applied successfully</label>";
		header("location:index.php?page=customization&cart_id=".$_REQUEST['cart_id']);

		}
		else
		{
			echo "not";
		}
	
	}
}
	else
	{
		$_SESSION['coupanValue']=$value;
		$_SESSION['Coupon']="<label style='color:red'>InValid coupon code</label>";
		header("location:index.php?page=customization&cart_id=".$_REQUEST['cart_id']);

	}

 ?>