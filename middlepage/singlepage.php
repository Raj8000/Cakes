<?php 
$action=$_REQUEST['action'];
if(isset($action) && $action=='update_qty')
	{
		//echo "update";
	$weight=$_REQUEST['weight'];
	$product_id=$_GET['id'];
	$ip=$_SERVER['REMOTE_ADDR'];
	echo $select="SELECT * FROM `cart` WHERE product_id='".$product_id."' AND ip='".$ip."' AND weight='".$weight."' AND order_id=0";
	$query=mysqli_query($con,$select);
	$count=mysqli_num_rows($query);
	$user_id=$_SESSION['user_id'];
	$quantity=$rowupdate['quantity']+1;
	$total_amount=$rowupdate['price']*$quantity;
	if($count>0)
	{
		//echo "update";
		//exit;
		$rowupdate=mysqli_fetch_assoc($query);
		$user_id=$_SESSION['user_id'];
		$cart_id=$rowupdate['cart_id'];
		$product_id=$rowupdate['product_id'];

		echo $updatecart="UPDATE cart SET quantity='".$quantity."',weight='".$weight."', user_id='".$user_id."' , amount='".$total_amount."' WHERE cart_id='".$cart_id."'";
		$result_updatecart=mysqli_query($con,$updatecart);
		if($result_updatecart)
		{
			header('location:index.php?page=cart_list');
		}
		else
		{
			echo "not";
		}
	}
	else
	{

		 $product_id=$_REQUEST['id'];
	//$quantity=$_REQUEST['quantity'];
		echo $weight=$_REQUEST['weight'];
		$user_id=$_SESSION['user_id'];
		$ip=$_SERVER['REMOTE_ADDR'];
	$res=mysqli_query($con,"select * from product where product_id='".$product_id."' ");


		$row=mysqli_fetch_array($res);
		
		//$quantity=$_REQUEST['quantity'];
	echo	 $price=$row['price'];
	echo $p_rice=$weight*$price;
	$quantity=1;
	$total_amount=$quantity * $p_rice;
		//$total=$quantity * $row['price'];
		$ip=$_SERVER['REMOTE_ADDR'];
		echo 	$insert="INSERT INTO `cart`(`cart_id`,`weight`,`quantity`,`price`,`user_id`, `product_id`,`amount`, `ip`) VALUES(NULL,'$weight','$quantity','$p_rice','$user_id','$product_id','$total_amount','$ip')";
	$qry=mysqli_query($con,$insert);
 		//echo $updatecart="UPDATE cart SET quantity='".$quantity."',amount='".$total."' WHERE cart_id='".$cart_id."'";
		//$qry=mysqli_query($con,$updatecart);
		if($qry)
		{
			header('location:index.php?page=cart_list');
		}
	}
}
?>



<!DOCTYPE HTML>
<html>
	<head>
		<title>Sweet-cakes Website Template | Home :: w3layouts</title>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		<link href="css/style.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
   		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<script src="js/jquery.easydropdown.js"></script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700,800,400,600' rel='stylesheet' type='text/css'>
		<!--//webfonts-->
		<script src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<link rel="stylesheet" href="css/etalage.css">
		<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
		<script src="js/jquery.easydropdown.js"></script>

		<script src="js/jquery.etalage.min.js"></script>
<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 800,
					source_image_height: 1000,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>

	</head>
	<body>
<div class="details">
<div class="container">
<div class="row single">
<div class="col-md-9">
				  <div class="single_left">
				 
					<div class="grid images_3_of_2">
						<ul id="etalage">
							<?php 
								$id= isset($_GET['id']) ? $_GET['id'] : '';
								$select="SELECT * FROM `product` WHERE product_id=".$id;
								$query=mysqli_query($con,$select);
								while($row=mysqli_fetch_assoc($query))
								{
							?>
							<li>
								<a href="optionallink.html">
									<img class="etalage_thumb_image" src="admin_theme/img/<?php echo $row['img']; ?>" style="width:300px; height:300px;" class="img-responsive" />
									<img class="etalage_source_image" src="admin_theme/img/<?php echo $row['img']; ?>" class="img-responsive" title="" />
								</a>
							</li><?php }?>
							

							<!--<li>
								<img class="etalage_thumb_image" src="images/m2.jpg" class="img-responsive" />
								<img class="etalage_source_image" src="images/m2.jpg" class="img-responsive" title="" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/m3.jpg" class="img-responsive"  />
								<img class="etalage_source_image" src="images/m3.jpg"class="img-responsive"  />
							</li>
						    <li>
								<img class="etalage_thumb_image" src="images/m4.jpg" class="img-responsive"  />
								<img class="etalage_source_image" src="images/m4.jpg"class="img-responsive"  />
							</li>-->
						</ul>
						 <div class="clearfix"></div>		
				  </div>
				  <?php
				  	$sel="select * from product where product_id=".$id;
				  	$qry=mysqli_query($con,$sel);
				  	$res=mysqli_fetch_assoc($qry);
				  ?>
				  <div class="desc1 span_3_of_2">
					<h3><?php echo $res['name']; ?></h3>
					<p>₹ <?php echo $res['price']; ?></p>
				<form action="" method="post">

							<td>

								
								
                            	<!-- <form method="post" action="index.php?page=update_qty"> -->

					<select name='weight'>
						<option value='1'>250 gms.</option>
						<option value='2'>500 gms.</option>
						<option value='4'>1 kg.</option>
						<option value='6'>1.5 kg.</option>
						<option value='8'>2 kg.</option>
					</select>

								<input type="hidden" name="action" value="update_qty" >
								<input type="submit" name="update_qty" value="Addtocart">
								<input type="hidden" name="cartid" value="<?php echo $row['cart_id']; ?>" >
								<!-- </form>	 -->
								<!-- </a> -->
							</td>
							

				</form>
					<div class="det_nav">
						<h4>related cakes :</h4>
						<ul>
							<li><a href="#"><img src="images/11.jpg" class="img-responsive" alt=""/></a></li>
							<li><a href="#"><img src="images/12.jpg" class="img-responsive" alt=""/></a></li>
							<li><a href="#"><img src="images/13.jpg" class="img-responsive" alt=""/></a></li>
							<li><a href="#"><img src="images/14.jpg" class="img-responsive" alt=""/></a></li>
						</ul>
					</div>
					<div class="det_nav1">
						<!-- <h4>Select a cake :</h4>
							<div class=" sky-form col col-4">
								<ul>
									<li><label class="checkbox"><input type="checkbox" name="checkbox"><i></i>1kg</label></li>
									<li><label class="checkbox"><input type="checkbox" name="checkbox"><i></i>2kg</label></li>
									<li><label class="checkbox"><input type="checkbox" name="checkbox"><i></i>3kg</label></li>
									<li><label class="checkbox"><input type="checkbox" name="checkbox"><i></i>4kg</label></li>
									 <div class="clearfix"></div>
								</ul>
							</div>
						 -->	 <div class="clearfix"></div>
					</div>
						<!-- <div class="btn_form">
							<a href="index.php?page=customization">Buy</a>
						</div> -->
					<!-- <a href="#"><span>login to save in wishlist </span></a>
 -->			   	 </div>
          	    <div class="clearfix"></div>
          	   </div>
          	    <div class="single-bottom1">
					<h6>Details</h6>
					<p class="prod-desc"><?php echo $res['des'];?></p>
				</div>
					 <!--  <div class="product">
						   <div class="product-desc">
								<div class="product-img">
		                           <img src="images/16.jpg" class="img-responsive " alt=""/>
		                       </div>
		                       <div class="prod1-desc">
		                           <h5><a class="product_link" href="#">Excepteur sint</a></h5>
		                           <p class="product_descr"> Vivamus ante lorem, eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>									
							   </div>
							   <div class="clearfix"></div>
					      </div>
						  <div class="product_price">
								<span class="price-access">$597.51</span>								
								<button class="button1"><span>Add to cart</span></button>
		                  </div>
						 <div class="clearfix"></div>
				     </div>
				     <div class="product">
						   <div class="product-desc">
								<div class="product-img">
		                           <img src="images/17.jpg" class="img-responsive " alt=""/>
		                       </div>
		                       <div class="prod1-desc">
		                           <h5><a class="product_link" href="#">Excepteur sint</a></h5>
		                           <p class="product_descr"> Vivamus ante lorem, eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>									
							   </div>
							   <div class="clearfix"></div>
					      </div>
						  <div class="product_price">
								<span class="price-access">$597.51</span>								
								<button class="button1"><span>Add to cart</span></button>
		                  </div>
						 <div class="clearfix"></div>
				     </div> -->
		   	  </div>
	       </div>
<!-- <div class="col-md-3 single_left">
			   <div class="block block-layered-nav first">
                  <p class="block-subtitle">Shopping Options</p>
            <dl id="narrow-by-list">
                 <dt class="odd">Price</dt>
                    <dd class="odd">
					<ol>
					    <li>	
					                <a href="#"><span class="price">$100.00</span> - <span class="price">$199.99</span></a>
					                        (3)
					            </li>
					    <li>
					                <a href="#"><span class="price">$200.00</span> - <span class="price">$299.99</span></a>
					                        (2)
					            </li>
					    <li>
					                <a href="#"><span class="price">$300.00</span> and above</a>
					                        (1)
					            </li>
					</ol>
					</dd>
					                                                                    <dt class="even">Items</dt>
					                    <dd class="even">
					<ol>
					    <li>
					                <a href="#">Pineapple</a>
					                        (1)
					            </li>
					    <li>
					                <a href="#">Black Forest</a>
					                        (1)
					            </li>
					    <li>
					                <a href="#">Chocolate</a>
					                        (2)
					            </li>
					    <li>
					                <a href="#">Blueberry</a>
					                        (1)
					            </li>
					    
					</ol>
					</dd>
                                                                    <dt class="last odd">Flavours</dt>
                    <dd class="last odd">
					<ol>
					    <li>
					                <a href="#">Vennela</a>
					                        (2)
					            </li>
					    <li>
					                <a href="#">Strawberry</a>
					                        (2)
					            </li>
					    <li>
					                <a href="#">Butterscotch</a>
					                        (2)
					            </li>
					</ol>
					</dd>
                                            </dl>
          
                </div>
				
		     
			  <div class="tags">
				    	<h4 class="tag_head">Popular cakes</h4>
				         <ul class="tags_links">
							<li><a href="#">FlowerAura</a></li>
							<li><a href="#">My Flower Tree</a></li>
							<li><a href="#">Butterscotch</a></li>
							<li><a href="#">Strawberry</a></li>
							<li><a href="#">Vennela</a></li>
							<li><a href="#">Blueberry</a></li>
							<li><a href="#">Chocolate</a></li>
							<li><a href="#">Pineapple</a></li>
							
						</ul>
						<a href="#" class="link1">View all tags</a>
				 </div>
		   </div> -->		   
				<div class="clearfix"></div>	
	</div>
	</div>
	</div>
	</body>
</html>

