<!DOCTYPE HTML>
<html>
<body>
<div class="content">
	<div class="main">
	   <div class="container">
		  <div class="register">
		  	  <form method="POST" action="index.php?page=feedback_action" onsubmit="return feedback_validate()" enctype="multipart/form-data"> 
				 <div class="register-top-grid">
					<h3>Feedback Form</h3>
					 <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id'];?>"/>
					 <input type="hidden" name="fb_id"/>

					 <div>
					 	<span>Email<label>*</label></span>
						<input type="email" name="email_id" id="email_id"> 
						<span style="color:red;display:none;" id="req_mail">Enter Your Email Id</span>
						<span style="color:red;display:none;" id="valid_mail">Enter Your Valid Email Id</span>
					 </div>
					 <div>
					 	<span>Contact Number<label>*</label></span>
						<input type="text" name="c_number" id="c_number"> 
					 	<span style="color:red;display:none;" id="req_num">Enter Your Mobile Number</span>
						<span style="color:red;display:none;" id="valid_num">Enter Your Valid Mobile Number</span>
					 
					 </div>

					 
					 <div>
						<span>Message<label>*</label></span>
						<input type="textarea" name="message" id="message"> 
					 	<span style="color:red;display:none;" id="req_msg">Enter Your Message</span>
					 <div class="register-but">
					    <input type="submit" name="submit" value="submit">
				   		</div>
					 </div>


					 	
 				</form>
				
		   </div>
	     </div>
	    </div>
		</div>
	</body>
</html>

