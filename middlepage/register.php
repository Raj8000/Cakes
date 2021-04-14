<!DOCTYPE HTML>
<html>
<body>
<div class="content">
	<div class="main">
	   <div class="container">
		  <div class="register">
		  	  <form method="POST" action="index.php?page=register_action" onsubmit="return user_validate()" enctype="multipart/form-data"> 
				 <div class="register-top-grid">
					<h3>PERSONAL INFORMATION</h3>
					 <div>
					 	<input type="hidden" name="user_id"/>
						<span>First Name<label>*</label></span>
						<input type="text" name="first_name" id="first_name" > 
						<span style="display:none;color:red;" id="req_fname">Enter Your First Name</span>
						<span style="display:none;color:red;" id="valid_fname">Enter Your Valid First Name</span>
					 	
					 </div>
					 <div>
						<span>Last Name<label>*</label></span>
						<input type="text" name="last_name" id="last_name"> 
					 	<span style="display:none;color:red;" id="req_lname">Enter Your Last Name</span>
						<span style="display:none;color:red;" id="valid_lname">Enter Your Valid Last Name</span>
					 	
					 </div>

					 <div>
						<span>Mobile Number<label>*</label></span>
						<input type="text" name="mobile_number" id="mobile_number"> 
						<span style="display:none;color:red;" id="req_num">Enter Your Mobile Number</span>
						<span style="display:none;color:red;" id="valid_num">Enter Your Valid Mobile Number</span>
					 	
					 </div>


					 
					 <div>
						 <span>Email Address<label>*</label></span>
						 <input type="email" name="email" id="email"> 
					 	 <span style="display:none;color:red;" id="req_mail">Enter Your Email Id</span>
						 <span style="display:none;color:red;" id="valid_mail">Enter Your Valid Email Id</span>
					 </div>

					 <div>
						<span>Current Date<label>*</label></span>
						<input type="date" name="cdate" id="cdate"> 
					 	<span style="display:none;color:red;" id="req_cdate">Enter Your Current Date</span>
					</div>

					<div>
						<span>DOB<label>*</label></span>
						<input type="date" name="dob" id="date"> 
					 	<span style="display:none;color:red;" id="req_date">Enter Your Date</span>
					 </div>

					 
					 <div>
						<span>Password<label>*</label></span>
						<input type="password" name="password" id="password">
						<span style="display:none;color:red;" id="req_pass">Enter Your Password</span>
						<span style="display:none;color:red;" id="valid_pass">Enter Your Valid Password</span>
					 
					</div>

					 <div>
						<span>Address<label>*</label></span>
						<input type="textarea" name="address" id="address"> 
					 	<span style="display:none;color:red;" id="req_add">Enter Your Address</span>

					 </div>

					 
					 <div>
						<span>Gender<label>*</label></span>
						<input type="radio" name="gender" value="Male" id="male">Male</input>
						<input type="radio" name="gender" value="Female" id="female">Female</input> 
					 	<span style="display:none;color:red;" id="req_gender"></span> 
					 </div>
					 
					 <div>
						<span>Image<label>*</label></span>
						<input type="file" name="img"> 
					 </div>

					 
	
							 
					 <!--<div class="clearfix"> </div>
					   <a class="news-letter" href="#">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
					   </a>
					 </div>-->

					 	<div class="register-but">
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

