<?php
	$action=$_REQUEST['action'];
		if(isset($action) && $action=='change_password')
		{
			 $user_id=$_SESSION['user_id'];
			extract($_POST);
			$update="UPDATE  `user_reg` SET Password='".$password."'  WHERE user_id='".$user_id."'";
			$query=mysqli_query($con,$update);
			//$count=mysqli_num_rows($query);
				if($query)
				{
					echo "okok";
				$row=mysqli_fetch_assoc($query);
				//$_SESSION['email']=$email;
				//$_SESSION['user_id']=$row['user_id'];
				header("location:index.php?page=login");
			}
			else
			{
				echo "your Email Is not ";
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
			   	<?php 
			   		 $user_id=$_SESSION['user_id'];
			   		 $sel="SELECT * FROM `user_reg` WHERE user_id='$user_id'";
					$qry=mysqli_query($con,$sel);
					$row=mysqli_fetch_assoc($qry);
			   	 ?>
			   
			   <div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
			  	<h3>Change Password</h3>
				
				<form action="" method="POST">
				  <div>
					<span>Email Address<label>*</label></span>
					<input type="text" readonly  value="<?php echo $row['email']?>" class="int" name="email"> 
				  </div>
				  <div>
					<span>Password<label>*</label></span>
					<input type="password" class="int" name="password"> 
				  </div>
				
				  <input type="hidden" value="change_password" name="action">
				  <input type="submit" value="change password" name="submit">
			    </form>
			   </div>	
			   <div class="clearfix"> </div>
			 </div>
		   </div>
</div>
</div>
	
	</body>
</html>

