<?php
	
	if(isset($_POST['submit']))
	{
		extract($_POST);
		$login_sel="SELECT * FROM `user_reg` WHERE email='$email' AND password='$password' ";
		$query=mysqli_query($con,$login_sel);
		$count=mysqli_num_rows($query);
		if($count>0)
		{
			$row=mysqli_fetch_assoc($query);
			$_SESSION['email']=$email;
			$_SESSION['user_id']=$row['user_id'];

			$upadteUserId="UPDATE cart SET user_id='".$_SESSION['user_id']."' where ip='".$_SERVER['REMOTE_ADDR']."' and order_id=0";
	    		$qry_upadteUserId=mysqli_query($con,$upadteUserId);
	    		
	    		$checkCart=mysqli_query($con,"select * from cart where ip ='".$_SERVER['REMOTE_ADDR']."' AND order_id=0");

				$count1=mysqli_num_rows($checkCart);
				if($count1)
				{
						header("location:index.php?page=cart_list");
				}else{
					header("location:index.php");
				}

			
		}
		else
		{
			header("location:index.php?page=login");
		}
	}
	


?>