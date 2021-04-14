   <div  id="top" class="callbacks_container">
					      <ul class="rslides" id="slider4">
					        <li>
					       <!--<img  src="images/slide.jpg" class="img-responsive" alt="">-->
					       	<?php
					       		$id=$_GET['id'];
					       		$sel="select * from video where product_id='$id'";
					       		$query=mysqli_query($con,$sel);
					       		while($row=mysqli_fetch_assoc($query))
					       		{
					       	 ?>
					       	<iframe  width="1120px" height="677px" src="https://www.youtube.com/embed/<?php echo $row['name']; ?>">
							</iframe>
							<?php } ?>
					          <div class="slider-caption">
					          	 <div class="slider-caption-left text-center">
					          	 	<!--<h1>ARE YOU LOOKING FOR SWEET, STYLISH AND DELECIOUS BIRTHDAY CAKES?</h1>
					          	 	<p>DON'T WORRY, WE CAN HELP YOU! CHECK OUR BEST CAKE SECTION.</p>
					          	 		<a class="buy-btn" href="#">Buy Now</a>-->
					          	 </div>
					          	  <div class="slider-caption-right">
					          	  	<a href="#">
					          	  		<!--<img src="images/iteam.png" class="img-responsive" title="name" />-->
					          	  			
					          	  	</a>
					          	  </div>
					          	  <div class="clearfix"> </div>
					          </div>
					           <!-- share-on -->
					          <div class="share-on">
					          	<div class="share-on-grid">
					          		<div class="share-on-grid-left">
					          			<!--<h3>Share On</h3>-->
					          		</div>
					          		<div class="share-on-grid-right">
					          			<!-- <a href="#"><span class="facebook"> </span></a>
					          			<a href="#"><span class="twitter"> </span></a>
					          			 --><div class="clearfix"> </div>
					          		</div>
					          		<div class="clearfix"> </div>
					          	</div>
					          	<div class="clearfix"> </div>
					          </div>
					          <!-- share-on -->
					        </li>
					        
					      </ul>
					    </div>
					    <div class="clearfix"> </div>
					</div>
		<!-- /banner -->
		</div>