<?php
//exit();
	if(isset($_REQUEST['submit']) && $_REQUEST['submit']=='Submit')
	{
		extract($_POST);
		echo $last_id=$_SESSION['last_id'];
		$user_id=$_SESSION['user_id'];
		$final=$_REQUEST['final'];
		$_SESSION['cart_id']=$cart_id;
		//$product_id=$_GET['id'];
		echo $update="UPDATE `customization` SET `cart_id`='$cart_id',`shape`='$shape',`text`='$text',`user_id`='$final' WHERE cust_id ='".$last_id."'  ";
		 /*$insert="INSERT INTO `customization`(`cust_id`,cart_id,`shape`,`text`,`user_id`) VALUES (NUll,'$cart_id','$shape','$text','$final')";*/
		$query=mysqli_query($con,$update);
		//die;
		if($query)
		{
			//echo "Success";
			//$cust_id=mysqli_insert_id($con);
					$user_id=$_SESSION['user_id'];
			$insert_order="INSERT INTO `order`(`user_id`,`cust_id`) VALUES ('$user_id','$last_id')";
		$query1=mysqli_query($con,$insert_order);
		//header('location:index.php?page=shipping');
			if($query1)
			{
				unset($_SESSION['coupanprice']);
			$_SESSION['order_id']=mysqli_insert_id($con);

			header('location:index.php?page=shipping');
				//echo "okok";
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
	if(isset($_REQUEST['action2']) && $_REQUEST['action2']=='Apply')
	{
		echo "Hii";
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
	 <?php

			  $select="SELECT * FROM  cart WHERE cart_id='".$_REQUEST['cart_id']."' ";
			 	$selqry=mysqli_query($con,$select);
			 	$row1=mysqli_fetch_assoc($selqry);



			  ?> 
		<!-- top-header -->
<div class="content">
	<div class="main">
	   <div class="container">
		  <div class="register">
		  	<div>

					
				<span><b>Enter Coupan Code   :</b><label></label></span>
				<form action="index.php?page=coupon_action" method="post">
					<input style="margin-left:2.25%" type="text" name="Coupan" value="<?php if(isset($_SESSION['coupanValue'])) echo $_SESSION['coupanValue']; unset($_SESSION['coupanValue']) ?>">
					<input type="hidden" name="cart_id" value="<?php echo $_GET['cart_id']; ?>">
					 <input type="submit" name="apply" value="Apply">
					 <?php 
					 	if(isset($_SESSION['Coupon']))
					 		{
					 			echo $_SESSION['Coupon'];
					 		}
					 	unset($_SESSION['Coupon']);
					 ?>
				</form>
			 </div>
			
		  	  <form method="POST" action="" enctype="multipart/form-data"> 
				 <div class="register-right-grid">
					<h3 style="color:#056090"><I><b>Customization Form</b></I></h3><br>
					 <div>
					 	<?php $cart_id=$_REQUEST['cart_id']; ?>
					 	<input type="hidden" name="cart_id" value=<?php echo $cart_id;?>> 
					 	<input type="hidden" name="cust_id"> 
					 	<span><b>Product Price:</b><label>*</label></span>
					 	<span style="margin-left:70px"><b>₹ <?php echo $row1['amount']; ?></b>

					 	<?php 

					 	if(isset($_SESSION['coupanprice'])){ 
					 		
					 		$final=$row1['amount']-$_SESSION['coupanprice'];

					 		echo "<label> - </label><b>".$_SESSION['coupanprice']." = Rs.".$final." /-</b></span></br>" ; 
					 	}?>
					 	<br>
					 	<span><b>Select Cake Shape:</b><label>*</label></span>
						<select style="margin-left:70px" name="shape">
	 						<option value="not select">Select Cake Shape</option>
	  						<option value="Round">Round</option>
	 						<option value="Triangle">Triangle</option>
	 						<option value="Heart Shape">Heart Shape</option>
	 						<option value="Square">Square</option>
	 					</select>
	 				
				 </div><br>
					 <div>
						<span><b>Enter text of your choice:</b><label>*</label></span>
						<input style="margin-left:2.25%" type="text" name="text"> 
					 </div><br>
 					
					 <br>

					<!--  <div>
						<span><b>Select Cake Quantity</b><label>*</label></span>
						<select style="margin-left:60px" name="quantity">
	 						<option required>Select Cake Quantity</option>
	  						<option>500Gm</option>
	 						<option>1kg</option>
	 						<option>1.5kg</option>
	 						<option>2kg</option>
	 						<option>2.5kg</option>
	 						<option>3kg</option>
	 						<option>3.5kg</option>
	 						<option>4kg</option>
	 						<option>4.5kg</option>
	 						<option>5kg</option>
	 						
	 					</select>

					 </div> -->
					 	<div class="register-but">

						<input  type="hidden" value="Apply" name="action"> 
					    <input type="submit" name="submit" value="Submit" >
						<!--<a class="btn" href="index.php?page=payment">Buy Now</a>-->

				   		</div>
				     </form>
				
		   </div>
	     </div>
	    </div>
		</div>
	</body>
</html>

