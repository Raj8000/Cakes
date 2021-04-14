<?php
	
	$id= isset($_GET['id']) ? $_GET['id'] : '';
	$view="SELECT * FROM `user_reg` WHERE user_id=".$id;
	$query=mysqli_query($con,$view);
	@$row=mysqli_fetch_array($query);
?>
<div id="content">
		
	 <div class="container">
		
		<div class="row">
			
			<div class="span12">
	      		
	      		<div id="horizontal" class="widget widget-form">
	      			
	      			<div class="widget-header">	      				
	      				<h3>
	      					<i class="icon-pencil"></i>
	      					User Registration	      					
      					</h3>	
      				</div> <!-- /widget-header -->
					
					<div class="widget-content">
						
							

						<form class="form-horizontal"  method="POST" action="default.php?page=user_action"  enctype="multipart/form-data" onsubmit="return user_reg_validate()">
					        <fieldset>
					          <div class="control-group">
					          	<input type="hidden" name="user_id" value="<?php echo $id; ?>">
					           
					            <label class="control-label" for="input01">First Name</label>
					            <div class="controls">
					              <input type="text"  name="first_name"  value="<?php echo $row['first_name'];?>" class="input-large" id="fname">
					              <span style="display:none; color:red" id="req_fname">Please Enter Your First Name</span>
					              <span style="display:none; color:red" id="valid_fname">Please Enter Your Valid First Name</span>
					              </div>
					          </div>

					          
					          <div class="control-group">
					            <label class="control-label" for="input01">Last Name</label>
					            <div class="controls">
					              <input type="text" name="last_name"  value="<?php echo $row['last_name'];?>" class="input-large" id="lname">
					              <span style="display:none; color:red" id="req_lname">Please Enter Your Last Name</span>
					              <span style="display:none; color:red" id="valid_lname">Please Enter Your Valid Last Name</span>
					             
					              </div>
					          </div>
					          <div class="control-group">
					            <label class="control-label" for="input01">DOB</label>
					            <div class="controls">
					              <input type="date" name="dob" value="<?php echo $row['dob'];?>" class="input-large" id="txtdate">
					              <span style="display:none; color:red" id="req_date">Please Enter Date</span>
					              </div>
					          </div>
					          
					          
					          <div class="control-group">
					            <label class="control-label" for="input01">Email</label>
					            <div class="controls">
					              <input type="email" name="email"  value="<?php echo $row['email'];?>" class="input-large"  id="emailid">
					              <span style="display:none; color:red" id="req_email">Please Enter Your Email Id</span>
					              <span style="display:none; color:red" id="valid_email">Please Enter Your Valid Email Id</span>
					              
					              </div>
					          </div>
					          <div class="control-group">
					            <label class="control-label" for="input01">Password</label>
					            <div class="controls">
					              <input type="password"  name="password" value="<?php echo $row['password'];?>" class="input-large" id="pass">
					              <span style="display:none; color:red" id="req_pass">Please Enter Your Password</span>
					              <span style="display:none; color:red" id="valid_pass">Please Enter Password of upto 6 digits</span>
					              </div>
					          </div>
					          <div class="control-group">
					            <label class="control-label" for="input01">Mobile Number</label>
					            <div class="controls">
					              <input type="text" name="mobile_number" class="input-large" maxlength="10" id="mobile_number" value="<?php echo $row['mobile_number'];?>">
					              <span style="display:none; color:red" id="req_number">Please Enter Your Mobile Number</span>
					              <span style="display:none; color:red" id="valid_number">Please Enter Your Valid Mobile Number</span>
					             
					              </div>
					          </div>

					          <div class="control-group">
					            <label class="control-label" for="input01">Current Date</label>
					            <div class="controls">
					              <input type="date" name="cdate" 
					               class="input-large" id="txtcdate" value="<?php echo $row['cdate'];?>">
					               <span style="display:none; color:red" id="req_cdate">Please Enter Current Date</span>
					              </div>
					          </div>
					          
					          <div class="control-group">
					            <label class="control-label">Gender</label>
					            <div class="controls">
					              <label class="radio">
					                <input type="radio" name="gender" id="male" value="Male"<?php if($row['gender']=='Male'){echo "checked";}?>>
					                Male
					                </label>
					              <label class="radio">
					                <input type="radio" 
					                name="gender" id="female" value="Female"<?php if($row['gender']=='Female'){echo "checked";}?>>
					                Female
					                </label>
					                <span style="display:none; color:red" id="req_gender">Please Select Your Gender</span>
					            </div>
					          </div>
					          

					          <div class="control-group">
					            <label class="control-label" for="fileInput">Image</label>
					            <div class="controls">
					              <input class="input-file" name="img" id="fileInput" type="file">
								<?php
					              	if(@$_GET['id']!='')
					              	{
					              ?>
					               <img src="img/<?php echo $row['img']; ?>" height="80px" width="80px"/>
					              
					               <?php
					           		}
					           		?>
					  
					              </div>
					          </div>

					          <div class="control-group">
					            <label class="control-label" for="textarea">Address</label>
					            <div class="controls">
					              <textarea class="input-large"   name="address" id="add" rows="3"><?php echo $row['address'];?></textarea>
					            <span style="display:none; color:red" id="req_add">Please Enter Your Address</span>
					            </div>
					          </div>
					          
					           <div class="control-group">
					            <label class="control-label">Status</label>
					            <div class="controls">
					              <label class="radio">
					                <input type="radio" name="status" value="Active"<?php if($row['status']=='Active'){echo "checked";}?> id="active">
					                Active
					                </label>
					              <label class="radio">
					                <input type="radio" name="status" value="Inactive"<?php if($row['status']=='Inactive'){echo "checked";}?> id="inactive">
					                Inactive
					                </label>
					                <span style="display:none; color:red" id="req_status">Please Select Status Type</span>
					            </div>
					          </div>
					         




					          <div class="form-actions">
					            <button type="submit" name="submit" class="btn btn-primary btn-large" >Submit</button>
					            <button class="btn btn-large" name="cancel">Cancel</button>
		
					          </div>
					        </fieldset>
					      </form>	
						
					</div> <!-- /widget-content -->
						
				</div>	
				
				
		    </div> <!-- /span8 -->
		    
		    
						    
		</div> <!-- /row -->
		
	</div> <!-- /.container -->
	
</div> <!-- /#content -->



