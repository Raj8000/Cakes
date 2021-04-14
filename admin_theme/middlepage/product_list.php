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
							Product List							
						</h3>
						<a class="btn btn-primary" href="default.php?page=product" style="float:right;">Add New</a>
					</div> <!-- /widget-header -->
					
					<div class="widget-content">
						
						
						
						
						<table class="table table-striped table-bordered table-highlight" id="example">
							<thead>
							<tr>
								<th>Category Name</th>
								<th>Product Name</th>
								<th>Date</th>
								<th>Image</th>
								<th>Price</th>
								<th>Description</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
							<?php

								$view="SELECT * FROM `product`";

								$squery=mysqli_query($con,$view);

								while($row=mysqli_fetch_array($squery))
								{?>

										<tr class="even gradeC">
											<?php

											 $sel="select * from category where cat_id=".$row['cat_id'];
											 $qry=mysqli_query($con,$sel);
											 $res=mysqli_fetch_array($qry);
											 
											?>
											<td><?php echo $res['name'];?></td><!--subcat name  -->
											<td><?php echo $row['name'];?></td>
											<td><?php echo $row['date'];?></td>
											<td><img  src="img/<?php echo $row['img'];?>"height='50px' width='50px'></td>
											<td><?php echo $row['price'];?></td>
											<td><?php echo $row['des'];?></td>
											<td><?php echo $row['status'];?></td>
											<td>
											<a class="btn btn-primary" href="default.php?page=product&id=<?php echo $row['product_id']; ?>">Edit</a>
											<a class="btn btn-primary" onclick="return confirmDelete();"  href="default.php?page=product_action&id=<?php echo $row['product_id']; ?>">Delete</a>
				
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
	