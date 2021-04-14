	<div class="container">
				<div class="img-slider">
						<!--start-slider-script-->
					<script src="js/responsiveslides.min.js"></script>
					 <script>
					    // You can also use "$(window).load(function() {"
					    $(function () {
					      // Slideshow 4
					      $("#slider4").responsiveSlides({
					        auto: true,
					        pager: true,
					        nav: true,
					        speed: 500,
					        namespace: "callbacks",
					        before: function () {
					          $('.events').append("<li>before event fired.</li>");
					        },
					        after: function () {
					          $('.events').append("<li>after event fired.</li>");
					        }
					      });
					
					    });
					  </script>
					<!--//End-slider-script-->
					<!-- Slideshow 4 -->
					    <div  id="top" class="callbacks_container">
					      <ul class="rslides" id="slider4">
					        <li>
					       <!--<img  src="images/slide.jpg" class="img-responsive" alt="">-->
					       	<iframe width="1120px" height="677px"  src="https://www.youtube.com/embed/gCfhNGI4pRo">
							</iframe>
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
		<!-- top-grids -->
		<div class="top-grids">
			<div class="container">
				<?php
				$select="SELECT * FROM `product` ORDER BY price DESC LIMIT 3";
				$query=mysqli_query($con,$select);
				while($row=mysqli_fetch_array($query))
				{
				?>
				<div class="col-md-4 top-grid">
					<div class="top-grid-head">
						<h3>TOP CAKES</h3>
					</div>
					<div class="top-grid-info">
						
							<img src="admin_theme/img/<?php echo $row['img'];?>" style="height:400px;" class="img-responsive" title="name"/>

						<p><?php echo $row['name']; ?></p>
						<span>250gms.(Rs <?php echo $row['price']; ?>) /.</span>
						<div class="clearfix"> </div>
						<a class="btn" href="index.php?page=singlepage&id=<?php echo $row['product_id'];?>">View More</a>
						<a class="btn" href="index.php?page=video&id=<?php echo $row['product_id'];?>">Watch Now</a>

						
					</div>
				</div>
				<?php } ?>
			</div>
			<!-- top-grids-bg -->
			<div class="top-grids-bg">
				<span> </span>
			</div>
			<!-- top-grids-bg -->
		</div>
		<!-- top-grids -->
		<!-- bottom-grids -->
		<div class="bottom-grids">
			<div class="container">
				<div class="col-md-8 bottom-grid-left">
					<?php
						$select="SELECT * FROM `product` ORDER BY price  LIMIT 4";
						$query=mysqli_query($con,$select);
						while($row=mysqli_fetch_array($query))
						{	
					?>
					<div class="col-md-3 bottom-grid-left-grid text-center">
						<img src="admin_theme/img/<?php echo $row['img'];?>" style="height:130px; width:133px;" title="name"/>
						<h4><?php echo $row['name']; ?> <!--kids birthday cake</h4>-->
						<p><?php echo $row['price']; ?><!--$40--></p>
					</div>
					<?php }?>
					<div class="clearfix"> </div>
					<span class="best-sale">Best sellers</span>
					<a href="#" class="order"> </a>
				</div>
				<div class="col-md-4 bottom-grid-right">
					<h3><span class="tweet"> </span> latest tweet</h3>
					<p>This is the best cake website i have ever come across!</p>
					<label>1 day ago</label>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		