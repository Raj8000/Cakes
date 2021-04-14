<div id="content">	
		
	<div class="container">
		
		<!-- <div id="page-title" class="clearfix">
			
			<ul class="breadcrumb">
			  <li>
			    <a href="../../default.htm">Home</a> <span class="divider">/</span>
			  </li>
			  <li>
			    <a href="#">Components</a> <span class="divider">/</span>
			  </li>
			  <li class="active">Table Styles</li>
			</ul>
			
		</div> <!-- /.page-title -->		
		
		<div class="row">
		    
		    <div class="span12">
	      		
	      		<div class="widget widget-table">
						
					<div class="widget-header">						
						<h3>
							<i class="icon-th-list"></i>
							User List							
						</h3>
							<a class="btn btn-primary" href="default.php?page=user_reg" style="float:right;">Add New</a>
					</div> <!-- /widget-header -->
					
					<div class="widget-content">
						
						
						
						
						<table class="table table-striped table-bordered table-highlight" id="example">
							<thead>
							<tr>

								<th>First Name</th>
								<th>Last Name</th>
								<th>DOB</th>
								<th>Email</th>
								<th>Password</th>
								<th>Mobile Number</th>
								<th>Current Date</th>
								<th>Gender</th>
								<th>Image</th>
								<th>Address</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
							<?php

								$view="SELECT * FROM `user_reg`";

								$squery=mysqli_query($con,$view);

								while($row=mysqli_fetch_array($squery))
								{?>

										<tr class="even gradeC">
											<td><?php echo $row['first_name'];?></td>
											<td><?php echo $row['last_name'];?></td>
											<td><?php echo $row['dob'];?></td>
											<td><?php echo $row['email'];?></td>
											<td><?php echo $row['password'];?></td>
											<td><?php echo $row['mobile_number'];?></td>
											<td><?php echo $row['cdate'];?></td>
											<td><?php echo $row['gender'];?></td>
											<td><img  src="img/<?php echo $row['img'];?>" height='50px' width='50px'></td>
											<td><?php echo $row['address'];?></td>
											<td><?php echo $row['status'];?></td>
											<td>
											<a class="btn btn-primary" href="default.php?page=user_reg&id=<?php echo $row['user_id']; ?>">Edit</a>	
											<a class="btn btn-primary" onclick="return confirmDelete();" href="default.php?page=user_action&id=<?php echo $row['user_id']; ?>">Delete</a>
											
											</td>
										</tr>

							<?php	
								}
								?>						</table>
						
						
					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->	
				
		    </div> <!-- /span12 -->
		    
		</div> <!-- /row -->
		
		
		
		
	</div> <!-- /.container -->
	
</div> <!-- /#content -->
