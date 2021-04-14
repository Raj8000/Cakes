<div class="top-grids">
			<div class="container">
				<?php
				$id=$_GET['id'];
				$select="SELECT * FROM `product` where product_id=".$id;
				$query=mysqli_query($con,$select);
				while($row=mysqli_fetch_array($query))
				{
				?>
				<div class="col-md-4 top-grid">
					<div class="top-grid-head">
						<h3>ORDERED CAKES</h3>
					</div>
					<div class="top-grid-info">
						
							<img src="../../admin_theme/img/<?php echo $row['img'];?>" style="height:400px;" class="img-responsive" title="name"/>
						<p><?php echo $row['name']; ?></p>
						<span>Rs <?php echo $row['price']; ?> /.</span>
						<div class="clearfix"> </div>
						<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
					        <!-- Identify your business so that you can collect the payments. -->
					        <input type="hidden" name="business" value="asadmansuri6797-facilitator@gmail.com">
					        
					        <!-- Specify a Buy Now button. -->
					        <input type="hidden" name="cmd" value="_xclick">
					        
					        <!-- Specify details about the item that buyers will purchase. -->
					        <input type="hidden" name="item_name" value="<?php echo $row['name']; ?>">
					        <input type="hidden" name="item_number" value="<?php echo $row['id']; ?>">
					        <input type="hidden" name="amount" value="<?php echo $row['price']/64; ?>">
					        <input type="hidden" name="currency_code" value="USD">
					        
					        <!-- Specify URLs -->
					        <input type='hidden' name='cancel_return' value='http://localhost/paypal_integration_php/cancel.php'>
					        <input type='hidden' name='return' value='http://localhost/paypal_integration_php/success.php'>
					        
					        <!-- Display the payment button. -->
					        <input type="submit" name="submit" class="btn" value="Confirm Payment">
					    </form>
						<!-- <a class="btn" href="index.php?page=video&id=<?php echo $row['product_id'];?>">Watch Now</a> -->

						
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
		