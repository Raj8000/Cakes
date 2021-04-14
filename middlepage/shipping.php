<script type="text/javascript">

function showSubCat(str) {
    if (str == "") {
        document.getElementById("SubCategorySelect").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("SubCategorySelect").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","city.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>






<?php 
		$action=$_REQUEST['action'];
		if(isset($action) && $action=='shipping')
	{
			//echo "hiii";
		//echo "<pre>";
		extract($_POST);
		//print_r($_POST);
		//print_r($_SESSION);
		$oreder_id=$_SESSION['order_id'];
		$user_id=$_SESSION['user_id'];
		 $insert="INSERT INTO `shipping_detail` ( `order_id`, `user_id`, `cart_id`, `first_name`, `last_name`, `email`, `contact`, `s_address`,`s_pincode`,`city`) VALUES ('$oreder_id','$user_id','$cart_id','$first_name', '$last_name', '$email', '$contact', '$s_address', '$s_pincode','$SubCatId')";
			$qry=mysqli_query($con,$insert);

			if($qry)
			{
				//echo "okok";


					$cart_id=$_SESSION['cart_id'];
				$shipping_id=mysqli_insert_id($con);
				$_SESSION['pay_shipping']=$shipping_id;

				echo $update="UPDATE cart SET order_id='".$oreder_id."',shipping_id='".$shipping_id."' WHERE user_id='".$user_id."' AND cart_id='".$cart_id."' ";
				$up_qry=mysqli_query($con,$update);
				if($up_qry)
				{
					header('location:index.php?page=bill');
					//echo "okok";
				}
				else
				{
					echo "not";
				}
				
			}
			else
			{
				echo "not";
			}
	}



?>

<!DOCTYPE HTML>
<html>
<body>
<div class="content">
	<div class="main">
	   <div class="container">
		  <div class="register">
		  	  <form method="post" action=""  enctype="multipart/form-data"> 
				 <div class="register-top-grid">
					<h3>Shipping Address</h3>

					 <div>
					 	<input type="hidden" name="user_id"/>
						<span>First Name<label>*</label></span>
						<input type="text" name="first_name" id="first_name" required="required" > 
						
					 	
					 </div>
					 <div>
						<span>Last Name<label>*</label></span>
						<input type="text" name="last_name" id="last_name" required="required"> 
					 	
					 </div>

					 <div>
						<span>Mobile Number<label>*</label></span>
						<input type="text" name="contact" id="mobile_number" required="required"> 
						
					 </div>


					 
					 <div>
						 <span>Email Address<label>*</label></span>
						 <input type="email" name="email" id="email" required="required"> 
					 	 
					 </div>
					 <div>
					 	<!-- <span>State<label>*</label></span> -->
					
					      
					       	<select name="state" onchange="showSubCat(this.value)">
					       		<option value="">Select State</option>
					<?php 
						$select="SELECT * FROM state";
						$qry=mysqli_query($con,$select);
						while($row=mysqli_fetch_assoc($qry)){

					 ?>
					      <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
					     <?php  }?>
					     </select>
					 </div>
					   <div id="SubCategorySelect">
						    <select name="SubCatId">
						      <option value="">Select State</option>
						    </select>
						  </div>

					 <div>
						<span>Address<label>*</label></span>
						<input type="textarea" name="s_address" id="address" required="required"> 
					 	<span style="display:none;color:red;" id="req_add">Enter Your Address</span>

					 </div>

					 
						 <div>
						 <span>Pin Code<label>*</label></span>
						 <input type="text" maxlength="6" name="s_pincode" id="" required="required"> 
					 	 
					 </div>
					 
				
					 
	
							 
					 <!--<div class="clearfix"> </div>
					   <a class="news-letter" href="#">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
					   </a>
					 </div>-->

					 	<div class="register-but">
					    <input type="hidden" name="action" value="shipping">
					    <input type="submit" name="submit" value="submit">
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
