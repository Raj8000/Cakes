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
	<div class="main">
	   <div class="container">
		  <div class="register">
		  	<?php

		  		$select="SELECT * FROM `user_reg` WHERE user_id=".$_SESSION['user_id'];
		  		$query=mysqli_query($con,$select);
		  		$row=mysqli_fetch_assoc($query);
		  	?>
		  	<?php
		  		/*if(isset($_GET['msg'] && $_GET['msg']=="updated"))
		  		{
		  			echo "<center><h1>Profile Updated Successfully.</h1></center>";
		  		}
		  	*/?>
		  	  <form method="POST" enctype="multipart/form-data"> 
				 <div class="register-top-grid">
					<h3>PERSONAL INFORMATION</h3>
					 <div>
					 	<input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id'];?>"/>
						<span>First Name<label>*</label></span>
						<input type="text" name="first_name" value="<?php echo $row['first_name']; ?>"> 
						<!--<span style="color:red"><?php //echo $_SESSION['first_name'];?></span>-->
					 </div>
					 <div>
						<span>Last Name<label>*</label></span>
						<input type="text" name="last_name" value="<?php echo $row['last_name']; ?>"> 
					 </div>

					 <div>
						<span>Mobile Number<label>*</label></span>
						<input type="text" name="mobile_number" value="<?php echo $row['mobile_number']; ?>"> 
					 </div>


					 
					 <div>
						 <span>Email Address<label>*</label></span>
						 <input type="email" name="email" value="<?php echo $row['email']; ?>"> 
					 </div>

					 <div>
						<span>Current Date<label>*</label></span>
						<input type="date" name="cdate" value="<?php echo $row['cdate']; ?>"> 
					 </div>

					<div>
						<span>DOB<label>*</label></span>
						<input type="date" name="dob" value="<?php echo $row['dob']; ?>"> 
					 </div>

					 
					 <div>
						<span>Password<label>*</label></span>
						<input type="password" name="password" value="<?php echo $row['password']; ?>">
					</div>

					 <div>
						<span>Address<label>*</label></span>
						<input type="textarea" name="address" value="<?php echo $row['address']; ?>"> 
					 </div>

					 
					 <div>
						<span>Gender<label>*</label></span>
						<input type="radio" name="gender" value="Male"<?php if($row['gender']=='Male'){echo "checked";}?>>Male</input>
						<input type="radio" name="gender" value="Female"<?php if($row['gender']=='Female'){echo "checked";}?>>Female</input> 
					 </div>
					 
					 <div>
						<span>Image<label>*</label></span>
						<input type="file" name="img">
						
						<img src="../admin_theme/img/<?php echo $row['img'];?>" height="50px" width="50px"></img>
						 
					 </div>

					 
	
							 
					 <!--<div class="clearfix"> </div>
					   <a class="news-letter" href="#">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
					   </a>
					 </div>-->

					 	<div class="register-but">
					    <input type="submit" name="edit" value="edit">
					  
				   		</div>
				     <!-- <div class="register-bottom-grid">
						    <h3>LOGIN INFORMATION</h3>
							 <div class="wow fadeInRight" data-wow-delay="0.4s">
								<span>Confirm Password<label>*</label></span>
								<input type="text">
							 </div>
					 </div>
 -->				</form>
				
		   </div>
	     </div>
	    </div>
		</div>
	</body>
</html>
<?php
	
	if(isset($_POST['edit']))
	{
		extract($_POST);
		$file=$_FILES['img']['name'];
		$file_tmp=$_FILES['img']['tmp_name'];
		move_uploaded_file($file_tmp,"../admin_theme/img/" .$file);
		
		if($file=='')
		{
			$update="UPDATE `user_reg` SET `first_name`='$first_name',`last_name`='$last_name',`dob`='$dob',`email`='$email',`password`='$password',`mobile_number`='$mobile_number',
			`cdate`='$cdate',`gender`='$gender',`address`='$address',`status`='$status' WHERE user_id =" .$_SESSION['user_id'];
		}
		else
		{
			$img_update="SELECT * FROM `user_reg` WHERE user_id=".$_SESSION['user_id'];
			$query=mysqli_query($con,$img_update);
			$iarray=mysqli_fetch_array($query);
			unlink('../admin_theme/img/'.$iarray['img']);
			move_uploaded_file($file_tmp,'../admin_theme/img/'.$file);
			$update="UPDATE `user_reg` SET `first_name`='$first_name',`last_name`='$last_name',`dob`='$dob',`email`='$email',
			`password`='$password',`mobile_number`='$mobile_number',`cdate`='$cdate',`gender`='$gender',`img`='$file',`address`='$address',`status`='$status' WHERE user_id =".$_SESSION['user_id'];
		}
				

				$qupdate=mysqli_query($con,$update);
				if($qupdate)
				{
					$_SESSION['update_msg']="Your Profile is updated successfully";
					header("location:index.php");
				}
				
	}

?>
