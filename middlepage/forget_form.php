<?php
		$action=$_REQUEST['action'];
		if(isset($action) && $action=='check_email')
		{
			extract($_POST);
			$login_sel="SELECT * FROM `user_reg` WHERE email='$email'";
			$query=mysqli_query($con,$login_sel);
			$count=mysqli_num_rows($query);
				if($count>0)
				{
					//echo "okok";
				$row=mysqli_fetch_assoc($query);
				//$_SESSION['email']=$email;
				$_SESSION['user_id']=$row['user_id'];
				header("location:index.php?page=change_password");
			}
			else
			{
				echo "<script type='text/javascript'>
 				alert('hiii');
 					window.location='index.php';
 			</script>";
				//echo "your Email Is not ";
				//header("location:index.php?page=change_password");
			}
		}


 ?>




<!DOCTYPE HTML>
<html>
	<head>
		<title>Sweet-cakes Website Template | Home :: w3layouts</title>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		<link href="css/style.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
   		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<script src="js/jquery.easydropdown.js"></script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700,800,400,600' rel='stylesheet' type='text/css'>
		<!--//webfonts-->
	</head>
	<body>
	<!-- container -->
		<!-- top-header -->
		<div class="content">
	<div class="container">
		<div class="login-page">
			   <div class="account_grid">
			   <!-- <div class="col-md-6 login-left wow fadeInLeft" data-wow-delay="0.4s">
			  	 <h3>NEW CUSTOMERS</h3>
				 <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
				 <a class="acount-btn" href="index.php?page=register">Create an Account</a>
			   </div> -->
			   <div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
			  	<h3>Forget Password </h3>
				<!-- <p>If you have an account with us, please log in.</p>
 -->				<form action="" method="POST">
				  <div>
					<span>Email Address<label>*</label></span>
					<input type="text" class="int" name="email"> 
				  </div>
				  
				  
				  <input type="hidden"  name="action" value="check_email" >
				  <input type="submit" value="submit" name="submit">
			    </form>
			   </div>	
			   <div class="clearfix"> </div>
			 </div>
		   </div>
</div>
</div>
	
	</body>
</html>

