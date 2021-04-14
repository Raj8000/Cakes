<?php 
	
	$id= isset($_GET['id']) ? $_GET['id'] : '';
	$view="SELECT * FROM `subcategory` WHERE subcat_id=".$id;
	$query=mysqli_query($con,$view);
	@$row=mysqli_fetch_assoc($query);

?>
<div id="content">
			
	<div class="container">
		
		<!-- <div id="page-title" class="clearfix">
			
			<ul class="breadcrumb">
			  <li>
			    <a href="default.htm">Home</a> <span class="divider">/</span>
			  </li>
			  <li>
			    <a href="#">Components</a> <span class="divider">/</span>
			  </li>
			  <li class="active">Form Styles</li>
			</ul>
			
		</div>  --><!-- /.page-title -->
		
		<div class="row">
			
			<div class="span12">
	      		
	      		<div id="horizontal" class="widget widget-form">
	      			
	      			<div class="widget-header">	      				
	      				<h3>
	      					<i class="icon-pencil"></i>
	      					SubCategory Form      					
      					</h3>	
      				</div> <!-- /widget-header -->
					
					<div class="widget-content">
						
						<form class="form-horizontal" method="POST" onsubmit="return subcategory_validate()" action="default.php?page=subcategory_action">
					        <fieldset>
					          <div class="control-group">
					          	<label class="control-label" for="input01">Category Name</label>
					            <div class="controls">
					            <select name="cat_id">
					           
					            <?php
					            	$sel_query="SELECT * FROM `category`";
					            	$squery=mysqli_query($con,$sel_query);
					            	while($raw=mysqli_fetch_array($squery))
					            	{	?>
					            		 <option value="<?php echo $raw['cat_id'];?>"
					            		 	<?php if($row['cat_id']==$raw['cat_id']){echo "selected";} ?>
					            		 	>
					            		<?php echo $raw['name'];
					            		
					            		?>
					        </option>
					        <?php } ?>
					        	</select>

					            </div>
	

					          </div>
					          
					          <div class="control-group">
					          	<input type="hidden" name="subcat_id" value="<?php echo $id;?>"/>
					            <label class="control-label" for="input01">Enter Name</label>
					            <div class="controls">
					              <input type="text" class="input-large" name="name" id="txtname" value="<?php echo $row['name'];?>">
					              <span style="display:none; color:red" id="req_name">Please Enter Your Name</span>
					              <span style="display:none; color:red" id="valid_name">Please Enter Valid Name</span>
					              </div>
	

					          </div>
					          <div class="control-group">
					            <label class="control-label" for="textarea">Description</label>
					            <div class="controls">
					              <textarea class="input-large"  name="description" rows="3"><?php echo $row['description'];?></textarea>
					            </div>
					          </div>

					          
					          <div class="control-group">
					            <label class="control-label">Status</label>
					            <div class="controls">
					              <label class="radio">
					                <input type="radio" name="status" id="active" value="Active"<?php if($row['status']=='Active'){echo "checked";}?>>
					                Active
					              </label>
					              <label class="radio">
					                <input type="radio" name="status" id="inactive" value="Inactive" <?php if($row['status']=='Inactive'){echo "checked";}?>>
					                Inactive
					              </label>
					              <span style="display:none; color:red" id="req_status">Please Select Status Type</span>
					            </div>
					          </div>
					          <div class="form-actions">
					            <button type="submit" class="btn btn-primary btn-large" name="submit">Submit</button>
					            <button class="btn btn-large">Cancel</button>
					          </div>
					        </fieldset>
					      </form>	
						
					</div> <!-- /widget-content -->
						
				</div>	
				
				
		    </div> <!-- /span8 -->
		    
		    
		    
		</div> <!-- /row -->
		
		
		
		
	</div> <!-- /.container -->
	
</div> <!-- /#content -->



