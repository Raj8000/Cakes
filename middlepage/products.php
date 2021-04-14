<!DOCTYPE HTML>
<html>
	<head>
		
<div class="biseller-info">
<div class="container">
<h2>Products</h2>
<h3 class="new-models">new varieties</h3>
                    
			<ul id="flexiselDemo3">
					<?php
						$id=$_REQUEST['id'];
						$select_record="SELECT * FROM `product` WHERE cat_id='".$id."'  ";
					    $query_select_record=mysqli_query($con,$select_record);   	 
					    while($row=mysqli_fetch_array($query_select_record)) 
					    {
					    ?>
				<li>
					
					<div class="biseller-column">
					
				    	
					<img src="admin_theme/img/<?php echo $row['img'];?>" style="height:200px;" alt="" class="veiw-img">
											
						<div class="veiw-img-mark">
							<a href="index.php?page=singlepage&id=<?php echo $row['product_id'];?>">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4><?php echo $row['name']; ?></h4>
						<p> 250gms.(<?php echo $row['price']; ?>)</p>
						<p>offer Code:Flat100</p>	
					</div>
						<!-- <a href="index.php?page=cart_action&id=<?php echo $row['product_id']; ?>"><button class="add2cart">
						    <span>| Add to Cart</span> </button></a> -->		
<html>
<head>
<!-- Font Awesome Icon Library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.checked {
    color: orange;
}
</style>
</head>
<body>

<?php
$cat_id=$_REQUEST['id'];
$rate=0;
$ip=$_SERVER['REMOTE_ADDR'];
$product_id=$row['product_id'];
 $sel1="SELECT * FROM rating WHERE product_id='".$product_id."'";
$qry1=mysqli_query($con,$sel1);
$count=mysqli_num_rows($qry1);$rating='';
	while($row1=mysqli_fetch_assoc($qry1)){
	
	 $rating +=$row1['rating_number'];
}

 $avg=$rating /$count;
$roundavg=round($avg,1);

	if($roundavg>=5)
	{
		echo '5';
	}
	else
	{
		echo $roundavg;
	}
	for ($i=1; $i <=5 ; $i++) { 
?><a onclick="rate(<?php echo $i?>,<?php echo $row['product_id']?>,<?php echo $cat_id?>);"><span class="fa fa-star  <?php if($roundavg>=$i)echo 'checked'?>" ></span></a>
	
<?php }
?>

<!-- <a onclick="rate(1,<?php echo $row['product_id']?>);"><span class="fa fa-star  checked" ></span></a>
<a onclick="rate(2,<?php echo $row['product_id']?>);"><span class="fa fa-star checked"></span></a>
<a onclick="rate(3,<?php echo $row['product_id']?>);"><span class="fa fa-star checked"></span></a>
<a onclick="rate(4,<?php echo $row['product_id']?>);"><span class="fa fa-star checked"></span></a>
<a onclick="rate(5,<?php echo $row['product_id']?>);"><span class="fa fa-star checked"></span></a>
 -->

<script type="text/javascript">
	function rate($rating,$product_id,$cat_id)
	{

		window.location="index.php?page=rating_action&product_id="+$product_id+"&rating="+$rating+"&cat_id="+$cat_id;
		//alert("Thanks for rating"+" you give "+$rating+" for this product "+$product_id);
		
	}
</script>	
</body>
</html>






					</div>
                   
				</li>
             	<?php }?>			
				
	     	</ul>

			</div>
		</div>	
			<script type="text/javascript">
				 $(window).load(function() {
					$("#flexiselDemo3").flexisel({
						visibleItems: 4,
						animationSpeed: 1000,
						autoPlay: false,
						autoPlaySpeed: 3000,    		
						pauseOnHover: true,
						enableResponsiveBreakpoints: true,
				    	responsiveBreakpoints: { 
				    		portrait: { 
				    			changePoint:480,
				    			visibleItems: 1
				    		}, 
				    		landscape: { 
				    			changePoint:640,
				    			visibleItems: 2
				    		},
				    		tablet: { 
				    			changePoint:768,
				    			visibleItems: 3
				    		}
				    	}
				    });
				    
				});
			   </script>
			   <script type="text/javascript" src="js/jquery.flexisel.js"></script>
			
				<!-- <div class="best-seller">
				<div class="container">
					<div class="biseller-info">
					 <h3 class="new-models">Categories</h3>
					<ul id="flexiselDemo1">
						<?php
							$select="SELECT * FROM `category`";
							$query=mysqli_query($con,$select);
							while($row=mysqli_fetch_array($query))
							{
						 ?>
						<li>
							<div class="biseller-column">
							<img src="admin_theme/img/<?php echo $row['img'];?>"  style="height:194px; width=235px;"alt="">
							<!-- śśśśś -->
					<!-- <div class="biseller-name">
						<h4><?php echo $row['name']; ?></h4>
					 -->	<!--<p>$ 200.99</p>-->
					<!-- </div>
					 -->	<!--<a href="index.php?page=singlepage"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>-->
					<!-- 		</div>
						</li><?php } ?>
						
			     	</ul>
					</div>
			</div>
			</div> --> 
			<script type="text/javascript">
				 $(window).load(function() {
					$("#flexiselDemo1").flexisel({
						visibleItems: 4,
						animationSpeed: 1000,
						autoPlay: true,
						autoPlaySpeed: 3000,    		
						pauseOnHover: true,
						enableResponsiveBreakpoints: true,
				    	responsiveBreakpoints: { 
				    		portrait: { 
				    			changePoint:480,
				    			visibleItems: 1
				    		}, 
				    		landscape: { 
				    			changePoint:640,
				    			visibleItems: 2
				    		},
				    		tablet: { 
				    			changePoint:768,
				    			visibleItems: 3
				    		}
				    	}
				    });
				    
				});
			   </script>
			   <script type="text/javascript" src="js/jquery.flexisel.js"></script>
			
			<div class="clearfix"></div>


	<!-- footer -->
	<!-- /footer -->
	

