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
							Subcategory List							
						</h3>
						<a class="btn btn-primary" href="default.php?page=subcategory" style="float:right;">Add New</a>
					</div> <!-- /widget-header -->
					
					<div class="widget-content">
						
						
						
						
						<table class="table table-striped table-bordered table-highlight" id="example">
							<thead>
							<tr>

								<th>Category Name</th>
								<th>SubCategory Name</th>
								<th>Description</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
							<?php

								$view="SELECT * FROM `Subcategory`";

								$squery=mysqli_query($con,$view);

								while($row=mysqli_fetch_array($squery))
								{?>

										<tr class="even gradeC">

											<td>
												<?php 

												$qry="select * from Category where cat_id=".$row['cat_id'];/*$row['cat_id'] stores the id of category in subcategry table*/
												$res=mysqli_query($con,$qry);
												$row2=mysqli_fetch_array($res);

												echo $row2['name'];/*will show the name of category*/
												?>
											</td>
											
											<td><?php echo $row['name'];?></td><!-- will show the name of subcategory-->
											<td><?php echo $row['description'];?></td>
											<td><?php echo $row['status'];?></td>
											<td>
											<a class="btn btn-primary" href="default.php?page=subcategory&id=<?php echo $row['subcat_id']; ?>">Edit</a>	
											<a class="btn btn-primary" href="default.php?page=subcategory_action&id=<?php echo $row['subcat_id']; ?>" onclick="return confirmDelete()">Delete</a>
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
